<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SubTopics Controller
 *
 * @property \App\Model\Table\SubTopicsTable $SubTopics
 *
 * @method \App\Model\Entity\SubTopic[] paginate($object = null, array $settings = [])
 */
class SubTopicsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Topics']
        ];
        $subTopics = $this->paginate($this->SubTopics);

        $this->set(compact('subTopics'));
        $this->set('_serialize', ['subTopics']);
    }

    /**
     * View method
     *
     * @param string|null $id Sub Topic id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subTopic = $this->SubTopics->get($id, [
            'contain' => ['Topics', 'Ebooks']
        ]);

        $this->set('subTopic', $subTopic);
        $this->set('_serialize', ['subTopic']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subTopic = $this->SubTopics->newEntity();
        if ($this->request->is('post')) {
            $subTopic = $this->SubTopics->patchEntity($subTopic, $this->request->getData());
            if ($this->SubTopics->save($subTopic)) {
                $this->Flash->success(__('The sub topic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sub topic could not be saved. Please, try again.'));
        }
        $topics = $this->SubTopics->Topics->find('list', ['limit' => 200]);
        $this->set(compact('subTopic', 'topics'));
        $this->set('_serialize', ['subTopic']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Sub Topic id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subTopic = $this->SubTopics->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subTopic = $this->SubTopics->patchEntity($subTopic, $this->request->getData());
            if ($this->SubTopics->save($subTopic)) {
                $this->Flash->success(__('The sub topic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sub topic could not be saved. Please, try again.'));
        }
        $topics = $this->SubTopics->Topics->find('list', ['limit' => 200]);
        $this->set(compact('subTopic', 'topics'));
        $this->set('_serialize', ['subTopic']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Sub Topic id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subTopic = $this->SubTopics->get($id);
        if ($this->SubTopics->delete($subTopic)) {
            $this->Flash->success(__('The sub topic has been deleted.'));
        } else {
            $this->Flash->error(__('The sub topic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
