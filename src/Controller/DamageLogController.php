<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * DamageLog Controller
 *
 * @property \App\Model\Table\DamageLogTable $DamageLog
 *
 * @method \App\Model\Entity\DamageLog[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DamageLogController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $damageLog = $this->paginate($this->DamageLog);

        $this->set(compact('damageLog'));
    }

    /**
     * View method
     *
     * @param string|null $id Damage Log id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $damageLog = $this->DamageLog->get($id, [
            'contain' => []
        ]);

        $this->set('damageLog', $damageLog);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $damageLog = $this->DamageLog->newEntity();
        if ($this->request->is('post')) {
            $damageLog = $this->DamageLog->patchEntity($damageLog, $this->request->getData());
            if ($this->DamageLog->save($damageLog)) {
                $this->Flash->success(__('The damage log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The damage log could not be saved. Please, try again.'));
        }
        $this->set(compact('damageLog'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Damage Log id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $damageLog = $this->DamageLog->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $damageLog = $this->DamageLog->patchEntity($damageLog, $this->request->getData());
            if ($this->DamageLog->save($damageLog)) {
                $this->Flash->success(__('The damage log has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The damage log could not be saved. Please, try again.'));
        }
        $this->set(compact('damageLog'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Damage Log id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $damageLog = $this->DamageLog->get($id);
        if ($this->DamageLog->delete($damageLog)) {
            $this->Flash->success(__('The damage log has been deleted.'));
        } else {
            $this->Flash->error(__('The damage log could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
