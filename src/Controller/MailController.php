<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mail Controller
 *
 * @property \App\Model\Table\MailTable $Mail
 *
 * @method \App\Model\Entity\Mail[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MailController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $mail = $this->paginate($this->Mail);

        $this->set(compact('mail'));
    }

    /**
     * View method
     *
     * @param string|null $id Mail id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mail = $this->Mail->get($id, [
            'contain' => []
        ]);

        $this->set('mail', $mail);
    }

    /**
     * Send method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function send()
    {
        $this->loadModel('Account');
        $accounts = $this->Account->find('all',['fields' => ['ID', 'FIRST_NAME']]);
        $senderNames = $accounts->all();
        $receiverNames = $accounts->all();
        $mail = $this->Mail->newEntity();
        if ($this->request->is('post')) {
            $mail = $this->Mail->patchEntity($mail, $this->request->getData());
            if ($this->Mail->save($mail)) {
                $this->Flash->success(__('The mail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mail could not be saved. Please, try again.'));
        }
        $this->set(compact('mail','senderNames','receiverNames'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Mail id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mail = $this->Mail->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mail = $this->Mail->patchEntity($mail, $this->request->getData());
            if ($this->Mail->save($mail)) {
                $this->Flash->success(__('The mail has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The mail could not be saved. Please, try again.'));
        }
        $this->set(compact('mail'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Mail id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mail = $this->Mail->get($id);
        if ($this->Mail->delete($mail)) {
            $this->Flash->success(__('The mail has been deleted.'));
        } else {
            $this->Flash->error(__('The mail could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
