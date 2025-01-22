<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Pistas Controller
 *
 * @property \App\Model\Table\PistasTable $Pistas
 */
class PistasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Pistas->find();
        $pistas = $this->paginate($query);

        $this->set(compact('pistas'));
    }

    /**
     * View method
     *
     * @param string|null $id Pista id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pista = $this->Pistas->get($id, contain: []);
        $this->set(compact('pista'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pista = $this->Pistas->newEmptyEntity();
        if ($this->request->is('post')) {
            $pista = $this->Pistas->patchEntity($pista, $this->request->getData());
            if ($this->Pistas->save($pista)) {
                $this->Flash->success(__('The pista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pista could not be saved. Please, try again.'));
        }
        $this->set(compact('pista'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Pista id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pista = $this->Pistas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pista = $this->Pistas->patchEntity($pista, $this->request->getData());
            if ($this->Pistas->save($pista)) {
                $this->Flash->success(__('The pista has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The pista could not be saved. Please, try again.'));
        }
        $this->set(compact('pista'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Pista id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pista = $this->Pistas->get($id);
        if ($this->Pistas->delete($pista)) {
            $this->Flash->success(__('The pista has been deleted.'));
        } else {
            $this->Flash->error(__('The pista could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
