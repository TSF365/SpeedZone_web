<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Tipouser Controller
 *
 * @property \App\Model\Table\TipouserTable $Tipouser
 */
class TipouserController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Tipouser->find();
        $tipouser = $this->paginate($query);

        $this->set(compact('tipouser'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipouser id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipouser = $this->Tipouser->get($id, contain: []);
        $this->set(compact('tipouser'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipouser = $this->Tipouser->newEmptyEntity();
        if ($this->request->is('post')) {
            $tipouser = $this->Tipouser->patchEntity($tipouser, $this->request->getData());
            if ($this->Tipouser->save($tipouser)) {
                $this->Flash->success(__('The tipouser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipouser could not be saved. Please, try again.'));
        }
        $this->set(compact('tipouser'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipouser id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipouser = $this->Tipouser->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipouser = $this->Tipouser->patchEntity($tipouser, $this->request->getData());
            if ($this->Tipouser->save($tipouser)) {
                $this->Flash->success(__('The tipouser has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipouser could not be saved. Please, try again.'));
        }
        $this->set(compact('tipouser'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipouser id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipouser = $this->Tipouser->get($id);
        if ($this->Tipouser->delete($tipouser)) {
            $this->Flash->success(__('The tipouser has been deleted.'));
        } else {
            $this->Flash->error(__('The tipouser could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
