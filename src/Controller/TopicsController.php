<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Topics Controller
 *
 * @property \App\Model\Table\TopicsTable $Topics
 *
 * @method \App\Model\Entity\Topic[] paginate($object = null, array $settings = [])
 */
class TopicsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $topics = $this->paginate($this->Topics);

        $this->set(compact('topics'));
        $this->set('_serialize', ['topics']);
    }

    /**
     * View method
     *
     * @param string|null $id Topic id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $topic = $this->Topics->get($id, [
            'contain' => ['SubTopics']
        ]);

        $this->set('topic', $topic);
        $this->set('_serialize', ['topic']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $topic = $this->Topics->newEntity();
        if ($this->request->is('post')) {
            $topic = $this->Topics->patchEntity($topic, $this->request->getData());
            if ($this->Topics->save($topic)) {
                $this->Flash->success('The topic has been saved.',
                        ['params' => [
                            'class' => 'alert alert-success'
                            ]
                        ]);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('The topic could not be saved. Please, try again.',
                        ['params' => [
                            'class' => 'alert alert-danger'
                            ]
                        ]);
        }
        $this->set(compact('topic'));
        $this->set('_serialize', ['topic']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Topic id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $topic = $this->Topics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $topic = $this->Topics->patchEntity($topic, $this->request->getData());
            if ($this->Topics->save($topic)) {
                $this->Flash->success('The topic has been saved.',
                        ['params' => [
                            'class' => 'alert alert-success'
                            ]
                        ]);

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('The topic could not be saved. Please, try again.',
                        ['params' => [
                            'class' => 'alert alert-danger'
                            ]
                        ]);
        }
        $this->set(compact('topic'));
        $this->set('_serialize', ['topic']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Topic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $topic = $this->Topics->get($id);
        if ($this->Topics->delete($topic)) {
            $this->Flash->success('The topic has been deleted.',
                        ['params' => [
                            'class' => 'alert alert-success'
                            ]
                        ]);
        } else {
            $this->Flash->error('The topic could not be deleted. Please, try again.',
                        ['params' => [
                            'class' => 'alert alert-danger'
                            ]
                        ]);
        }

        return $this->redirect(['action' => 'index']);
    }
}
