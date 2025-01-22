<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Amizades Controller
 *
 * @property \App\Model\Table\AmizadesTable $Amizades
 */
class AmizadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Amizades->find();
        $amizades = $this->paginate($query);

        $this->set(compact('amizades'));
    }

    /**
     * View method
     *
     * @param string|null $id Amizade id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $amizade = $this->Amizades->get($id, contain: []);
        $this->set(compact('amizade'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $amizade = $this->Amizades->newEmptyEntity();
        if ($this->request->is('post')) {
            $amizade = $this->Amizades->patchEntity($amizade, $this->request->getData());
            if ($this->Amizades->save($amizade)) {
                $this->Flash->success(__('The amizade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amizade could not be saved. Please, try again.'));
        }
        $this->set(compact('amizade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Amizade id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $amizade = $this->Amizades->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $amizade = $this->Amizades->patchEntity($amizade, $this->request->getData());
            if ($this->Amizades->save($amizade)) {
                $this->Flash->success(__('The amizade has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The amizade could not be saved. Please, try again.'));
        }
        $this->set(compact('amizade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Amizade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $amizade = $this->Amizades->get($id);
        if ($this->Amizades->delete($amizade)) {
            $this->Flash->success(__('The amizade has been deleted.'));
        } else {
            $this->Flash->error(__('The amizade could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
