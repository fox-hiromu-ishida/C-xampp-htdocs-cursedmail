<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * SendReceived Controller
 *
 * @property \App\Model\Table\SendReceivedTable $SendReceived
 *
 * @method \App\Model\Entity\SendReceived[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SendReceivedController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $sendReceived = $this->paginate($this->SendReceived);

        $this->set(compact('sendReceived'));
    }

    /**
     * View method
     *
     * @param string|null $id Send Received id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $sendReceived = $this->SendReceived->get($id, [
            'contain' => []
        ]);

        $this->set('sendReceived', $sendReceived);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $sendReceived = $this->SendReceived->newEntity();
        if ($this->request->is('post')) {
            $sendReceived = $this->SendReceived->patchEntity($sendReceived, $this->request->getData());
            if ($this->SendReceived->save($sendReceived)) {
                $this->Flash->success(__('The send received has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The send received could not be saved. Please, try again.'));
        }
        $this->set(compact('sendReceived'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Send Received id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $sendReceived = $this->SendReceived->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $sendReceived = $this->SendReceived->patchEntity($sendReceived, $this->request->getData());
            if ($this->SendReceived->save($sendReceived)) {
                $this->Flash->success(__('The send received has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The send received could not be saved. Please, try again.'));
        }
        $this->set(compact('sendReceived'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Send Received id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $sendReceived = $this->SendReceived->get($id);
        if ($this->SendReceived->delete($sendReceived)) {
            $this->Flash->success(__('The send received has been deleted.'));
        } else {
            $this->Flash->error(__('The send received could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
