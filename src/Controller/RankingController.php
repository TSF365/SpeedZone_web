<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Ranking Controller
 *
 * @property \App\Model\Table\RankingTable $Ranking
 */
class RankingController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Ranking->find();
        $ranking = $this->paginate($query);

        $this->set(compact('ranking'));
    }

    /**
     * View method
     *
     * @param string|null $id Ranking id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ranking = $this->Ranking->get($id, contain: []);
        $this->set(compact('ranking'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ranking = $this->Ranking->newEmptyEntity();
        if ($this->request->is('post')) {
            $ranking = $this->Ranking->patchEntity($ranking, $this->request->getData());
            if ($this->Ranking->save($ranking)) {
                $this->Flash->success(__('The ranking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ranking could not be saved. Please, try again.'));
        }
        $this->set(compact('ranking'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ranking id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ranking = $this->Ranking->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ranking = $this->Ranking->patchEntity($ranking, $this->request->getData());
            if ($this->Ranking->save($ranking)) {
                $this->Flash->success(__('The ranking has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ranking could not be saved. Please, try again.'));
        }
        $this->set(compact('ranking'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ranking id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ranking = $this->Ranking->get($id);
        if ($this->Ranking->delete($ranking)) {
            $this->Flash->success(__('The ranking has been deleted.'));
        } else {
            $this->Flash->error(__('The ranking could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
