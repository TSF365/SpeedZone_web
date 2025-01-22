<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Estatisticasjogador Controller
 *
 * @property \App\Model\Table\EstatisticasjogadorTable $Estatisticasjogador
 */
class EstatisticasjogadorController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Estatisticasjogador->find();
        $estatisticasjogador = $this->paginate($query);

        $this->set(compact('estatisticasjogador'));
    }

    /**
     * View method
     *
     * @param string|null $id Estatisticasjogador id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $estatisticasjogador = $this->Estatisticasjogador->get($id, contain: []);
        $this->set(compact('estatisticasjogador'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $estatisticasjogador = $this->Estatisticasjogador->newEmptyEntity();
        if ($this->request->is('post')) {
            $estatisticasjogador = $this->Estatisticasjogador->patchEntity($estatisticasjogador, $this->request->getData());
            if ($this->Estatisticasjogador->save($estatisticasjogador)) {
                $this->Flash->success(__('The estatisticasjogador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estatisticasjogador could not be saved. Please, try again.'));
        }
        $this->set(compact('estatisticasjogador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Estatisticasjogador id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $estatisticasjogador = $this->Estatisticasjogador->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $estatisticasjogador = $this->Estatisticasjogador->patchEntity($estatisticasjogador, $this->request->getData());
            if ($this->Estatisticasjogador->save($estatisticasjogador)) {
                $this->Flash->success(__('The estatisticasjogador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The estatisticasjogador could not be saved. Please, try again.'));
        }
        $this->set(compact('estatisticasjogador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Estatisticasjogador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $estatisticasjogador = $this->Estatisticasjogador->get($id);
        if ($this->Estatisticasjogador->delete($estatisticasjogador)) {
            $this->Flash->success(__('The estatisticasjogador has been deleted.'));
        } else {
            $this->Flash->error(__('The estatisticasjogador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
