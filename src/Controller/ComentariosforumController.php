<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Comentariosforum Controller
 *
 * @property \App\Model\Table\ComentariosforumTable $Comentariosforum
 */
class ComentariosforumController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Comentariosforum->find();
        $comentariosforum = $this->paginate($query);

        $this->set(compact('comentariosforum'));
    }

    /**
     * View method
     *
     * @param string|null $id Comentariosforum id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $comentariosforum = $this->Comentariosforum->get($id, contain: []);
        $this->set(compact('comentariosforum'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $comentariosforum = $this->Comentariosforum->newEmptyEntity();
        if ($this->request->is('post')) {
            $comentariosforum = $this->Comentariosforum->patchEntity($comentariosforum, $this->request->getData());
            if ($this->Comentariosforum->save($comentariosforum)) {
                $this->Flash->success(__('The comentariosforum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comentariosforum could not be saved. Please, try again.'));
        }
        $this->set(compact('comentariosforum'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Comentariosforum id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $comentariosforum = $this->Comentariosforum->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comentariosforum = $this->Comentariosforum->patchEntity($comentariosforum, $this->request->getData());
            if ($this->Comentariosforum->save($comentariosforum)) {
                $this->Flash->success(__('The comentariosforum has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The comentariosforum could not be saved. Please, try again.'));
        }
        $this->set(compact('comentariosforum'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Comentariosforum id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comentariosforum = $this->Comentariosforum->get($id);
        if ($this->Comentariosforum->delete($comentariosforum)) {
            $this->Flash->success(__('The comentariosforum has been deleted.'));
        } else {
            $this->Flash->error(__('The comentariosforum could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
