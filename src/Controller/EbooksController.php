<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ebooks Controller
 *
 * @property \App\Model\Table\EbooksTable $Ebooks
 *
 * @method \App\Model\Entity\Ebook[] paginate($object = null, array $settings = [])
 */
class EbooksController extends AppController
{

    public function initialize()  {
        parent::initialize();
        $this->loadComponent('Upload');    ## Load upload component for uploading images
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Languages', 'SubTopics']
        ];
        $ebooks = $this->paginate($this->Ebooks);

        $this->set(compact('ebooks'));
        $this->set('_serialize', ['ebooks']);
    }

    /**
     * View method
     *
     * @param string|null $id Ebook id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ebook = $this->Ebooks->get($id, [
            'contain' => ['Languages', 'SubTopics']
        ]);

        $this->set('ebook', $ebook);
        $this->set('_serialize', ['ebook']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ebook = $this->Ebooks->newEntity();
        if ($this->request->is('post')) {
            $ebook = $this->Ebooks->patchEntity($ebook, $this->request->getData());
            $book = $this->request->data['file_name'];
            // pr($ebook);
            // die();
            if(isset($book['name']) && !empty($book["name"])){
                $this->Upload->upload($book);
                
                if($this->Upload->uploaded) {
                        $name=md5(time());
                        $this->Upload->file_new_name_body = $name;
                        $this->Upload->process('files/ebooks/');
                        $ebookName = $this->Upload->file_dst_name;
                        pr($ebookName);
                        $ebook->file_name  = $ebookName;
                        // pr($ebook);
                        
                        // pr('Upload done');
                }
              } else {
                unset($this->request->data['file_name']); 
              }
            if ($this->Ebooks->save($ebook)) {
                $this->Flash->success('The ebook has been saved.',
                        ['params' => [
                            'class' => 'alert alert-success'
                            ]
                        ]);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('The ebook could not be saved. Please, try again.',
                        ['params' => [
                            'class' => 'alert alert-danger'
                            ]
                        ]);
        }
        $languages = $this->Ebooks->Languages->find('list', ['limit' => 200]);
        $subTopics = $this->Ebooks->SubTopics->find('list', ['limit' => 200]);
        $this->set(compact('ebook', 'languages', 'subTopics'));
        $this->set('_serialize', ['ebook']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Ebook id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ebook = $this->Ebooks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ebook = $this->Ebooks->patchEntity($ebook, $this->request->getData());
            $book = $this->request->data['file_name'];
            // pr($ebook);
            // die();
            if(isset($book['name']) && !empty($book["name"])){
                $this->Upload->upload($book);
                
                if($this->Upload->uploaded) {
                        $name=md5(time());
                        $this->Upload->file_new_name_body = $name;
                        $this->Upload->process('files/ebooks/');
                        $ebookName = $this->Upload->file_dst_name;
                        pr($ebookName);
                        $ebook->file_name  = $ebookName;
                        // pr($ebook);
                        
                        // pr('Upload done');
                }
            } else {
            unset($this->request->data['file_name']); 
            }
            if ($this->Ebooks->save($ebook)) {
                $this->Flash->success('The ebook has been saved.',
                        ['params' => [
                            'class' => 'alert alert-success'
                            ]
                        ]);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('The ebook could not be saved. Please, try again.',
                        ['params' => [
                            'class' => 'alert alert-danger'
                            ]
                        ]);
        }
        $languages = $this->Ebooks->Languages->find('list', ['limit' => 200]);
        $subTopics = $this->Ebooks->SubTopics->find('list', ['limit' => 200]);
        $this->set(compact('ebook', 'languages', 'subTopics'));
        $this->set('_serialize', ['ebook']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Ebook id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ebook = $this->Ebooks->get($id);
        if ($this->Ebooks->delete($ebook)) {
            $this->Flash->success('The ebook has been deleted.',
                        ['params' => [
                            'class' => 'alert alert-success'
                            ]
                        ]);
        } else {
            $this->Flash->error('The ebook could not be deleted. Please, try again.',
                        ['params' => [
                            'class' => 'alert alert-danger'
                            ]
                        ]);
        }

        return $this->redirect(['action' => 'index']);
    }
}
