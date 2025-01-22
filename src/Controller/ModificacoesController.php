<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Modificacoes Controller
 *
 * @property \App\Model\Table\ModificacoesTable $Modificacoes
 */
class ModificacoesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Modificacoes->find();
        $modificacoes = $this->paginate($query);

        $this->set(compact('modificacoes'));
    }

    /**
     * View method
     *
     * @param string|null $id Modificaco id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $modificaco = $this->Modificacoes->get($id, contain: []);
        $this->set(compact('modificaco'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $modificaco = $this->Modificacoes->newEmptyEntity();
        if ($this->request->is('post')) {
            $modificaco = $this->Modificacoes->patchEntity($modificaco, $this->request->getData());
            if ($this->Modificacoes->save($modificaco)) {
                $this->Flash->success(__('The modificaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modificaco could not be saved. Please, try again.'));
        }
        $this->set(compact('modificaco'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Modificaco id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $modificaco = $this->Modificacoes->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $modificaco = $this->Modificacoes->patchEntity($modificaco, $this->request->getData());
            if ($this->Modificacoes->save($modificaco)) {
                $this->Flash->success(__('The modificaco has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The modificaco could not be saved. Please, try again.'));
        }
        $this->set(compact('modificaco'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Modificaco id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $modificaco = $this->Modificacoes->get($id);
        if ($this->Modificacoes->delete($modificaco)) {
            $this->Flash->success(__('The modificaco has been deleted.'));
        } else {
            $this->Flash->error(__('The modificaco could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
