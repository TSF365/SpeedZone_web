<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Historicocorridas Controller
 *
 * @property \App\Model\Table\HistoricocorridasTable $Historicocorridas
 */
class HistoricocorridasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Historicocorridas->find();
        $historicocorridas = $this->paginate($query);

        $this->set(compact('historicocorridas'));
    }

    /**
     * View method
     *
     * @param string|null $id Historicocorrida id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $historicocorrida = $this->Historicocorridas->get($id, contain: []);
        $this->set(compact('historicocorrida'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $historicocorrida = $this->Historicocorridas->newEmptyEntity();
        if ($this->request->is('post')) {
            $historicocorrida = $this->Historicocorridas->patchEntity($historicocorrida, $this->request->getData());
            if ($this->Historicocorridas->save($historicocorrida)) {
                $this->Flash->success(__('The historicocorrida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The historicocorrida could not be saved. Please, try again.'));
        }
        $this->set(compact('historicocorrida'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Historicocorrida id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $historicocorrida = $this->Historicocorridas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $historicocorrida = $this->Historicocorridas->patchEntity($historicocorrida, $this->request->getData());
            if ($this->Historicocorridas->save($historicocorrida)) {
                $this->Flash->success(__('The historicocorrida has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The historicocorrida could not be saved. Please, try again.'));
        }
        $this->set(compact('historicocorrida'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Historicocorrida id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $historicocorrida = $this->Historicocorridas->get($id);
        if ($this->Historicocorridas->delete($historicocorrida)) {
            $this->Flash->success(__('The historicocorrida has been deleted.'));
        } else {
            $this->Flash->error(__('The historicocorrida could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
