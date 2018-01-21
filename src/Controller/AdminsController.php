<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;

/**
 * Admins Controller
 *
 * @property \App\Model\Table\AdminsTable $Admins
 *
 * @method \App\Model\Entity\Admin[] paginate($object = null, array $settings = [])
 */
class AdminsController extends AppController
{
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['login','forgotPassword']);
    }
    
    public function login()
    {
        if($this->request->session()->read('Auth.User')==null){
            if ($this->request->is('post')) {
                $user = $this->Auth->identify();
                // pr($this->Auth);
                if ($user) {
                    $this->Auth->setUser($user);
                    $this->Flash->success('Successfully Loggedin !!', [
                        'params' => [
                            'class' => 'alert alert-success'
                        ]
                    ]);
                    return $this->redirect($this->Auth->redirectUrl());
                }
                $this->Flash->error('You are not authorized to access that location.',[
                    'params' => [
                        'class' => 'alert alert-danger'
                    ]
                ]);
            }
        }
        else{
            $this->redirect($this->Auth->redirectUrl());
        }
    }

    public function logout()
    {
        $this->Flash->success('Logout Successfully !!', [
            'params' => [
                'class' => 'alert alert-success'
            ]
        ]);
        return $this->redirect($this->Auth->logout());
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $admins = $this->paginate($this->Admins);

        $this->set(compact('admins'));
        $this->set('_serialize', ['admins']);
    }
    public function home()
    {

    }

    /**
     * View method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    // public function view($id = null)
    // {
    //     $admin = $this->Admins->get($id, [
    //         'contain' => []
    //     ]);

    //     $this->set('admin', $admin);
    //     $this->set('_serialize', ['admin']);
    // }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $admin = $this->Admins->newEntity();
        if ($this->request->is('post')) {
            $data=$this->request->getData();
            $admin = $this->Admins->patchEntity($admin, $this->request->getData());
            if ($this->Admins->save($admin)) {
                $body='<br/>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <h3>Welcome to Evidyalay Worksheet Admin Portal</h3>
                                    <p>Hi,'.$admin['name'].'</p>
                                    <br/>
                                    <p>Below are your Login Credentials for Evidyalay Worksheet Admin Portal. After Login please change you password. </p>
                                    <hr/>
                                    Username: '.$admin['username'].'
                                    <br/>
                                    Password: '.$data['password'].'
                                    <br/>
                                    <a href="http://worksheet.evidyalay.net/admins/login">Click here</a> to visit Evidyalay Admin Portal login page.
                                    <hr/>
                                    </div>
                                    <br/>
                                    Please do not reply to this mail. This is a system generated email.
                                </div>
                            </div>
                        </div>';
                        $Email = new Email();
                        $Email->from(array('noreply@evidyalay.net' => 'ઈ-વિદ્યાલય Team'))
                            ->to($admin['email'])
                            ->subject('Welcome to Evidyalay Admin Portal')
                            ->template('default')
                            ->emailFormat('html')
                            ->send($body);
                        $this->Flash->success('Admin has been added successfully and Mail is sent to New Admin', [
                                'params' => [
                                    'class' => 'alert alert-success'
                                ]
                            ]);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('The admin could not be saved. Please, try again.', [
                                'params' => [
                                    'class' => 'alert alert-danger'
                                ]
                            ]);
        }
        $this->set(compact('admin'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $admin = $this->Admins->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data=$this->request->getData();
            if(!empty($data['newpassword'])){
                $data['password']=$data['newpassword'];
            }
            $admin = $this->Admins->patchEntity($admin, $data);
            if ($this->Admins->save($admin)) {
                $this->Flash->success('The admin details updated successfully.', [
                        'params' => [
                            'class' => 'alert alert-success'
                        ]
                    ]);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('The admin could not be saved. Please, try again.', [
                        'params' => [
                            'class' => 'alert alert-danger'
                        ]
                    ]);
        }
        $this->set(compact('admin'));
        $this->set('_serialize', ['admin']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Admin id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $admin = $this->Admins->get($id);
        if ($this->Admins->delete($admin)) {
            $this->Flash->success('The admin has been deleted.', [
                        'params' => [
                            'class' => 'alert alert-success'
                        ]
                    ]);
        } else {
            $this->Flash->error('The admin could not be deleted. Please, try again.', [
                        'params' => [
                            'class' => 'alert alert-danger'
                        ]
                    ]);
        }

        return $this->redirect(['action' => 'index']);
    }

    public function forgotPassword(){
        if($this->request->is('post')){
            $data=$this->request->getData();
            $findUser = $this->Admins->findByUsername($data['username'])->first();
            if(!empty($findUser)){
                $autopassword=$this->generate_password(8);
                $findUser['password']=$autopassword;
                if($this->Admins->save($findUser)){
                    $body='<br/>
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                <h3>Your new Password</h3>
                                <hr/>
                                Username: '.$findUser['username'].'
                                <br/>
                                New Password: '.$autopassword.'
                                <br/>
                                Login with your new Password and Change it.
                                <hr/>
                                </div>
                                <br/>
                                Please do not reply to this mail. This is a system generated email.
                            </div>
                        </div>
                    </div>';
                    $Email = new Email();
                    $Email->from(array('noreply@evidyalay.net' => 'ઈ-વિદ્યાલય Team'))
                        ->to($findUser['email'])
                        ->subject('Request of New Password')
                        ->template('default')
                        ->emailFormat('html')
                        ->send($body);
                    $this->Flash->success('Password is sent to your registered email address.', [
                            'params' => [
                                'class' => 'alert alert-success'
                            ]
                        ]);
                }
            }
            else{
                $this->Flash->error('Username not registerd on our Portal.', [
                        'params' => [
                            'class' => 'alert alert-danger'
                        ]
                    ]);
            }
        }
    }
    function generate_password( $length = 8 ) {
       $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
       $password = substr( str_shuffle( $chars ), 0, $length );
       return $password;
    }
}
