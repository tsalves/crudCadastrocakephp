<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * CadastrosUsuarios Controller
 *
 * @property \App\Model\Table\CadastrosUsuariosTable $CadastrosUsuarios
 *
 * @method \App\Model\Entity\CadastrosUsuario[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CadastrosUsuariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $cadastrosUsuarios = $this->paginate($this->CadastrosUsuarios);

        $this->set(compact('cadastrosUsuarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Cadastros Usuario id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $cadastrosUsuario = $this->CadastrosUsuarios->get($id, [
            'contain' => [],
        ]);

        $this->set('cadastrosUsuario', $cadastrosUsuario);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $cadastrosUsuario = $this->CadastrosUsuarios->newEntity();
        if ($this->request->is('post')) {
            $cadastrosUsuario = $this->CadastrosUsuarios->patchEntity($cadastrosUsuario, $this->request->getData());
            if ($this->CadastrosUsuarios->save($cadastrosUsuario)) {
                $this->Flash->success(__('The cadastros usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cadastros usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('cadastrosUsuario'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Cadastros Usuario id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $cadastrosUsuario = $this->CadastrosUsuarios->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $cadastrosUsuario = $this->CadastrosUsuarios->patchEntity($cadastrosUsuario, $this->request->getData());
            if ($this->CadastrosUsuarios->save($cadastrosUsuario)) {
                $this->Flash->success(__('The cadastros usuario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The cadastros usuario could not be saved. Please, try again.'));
        }
        $this->set(compact('cadastrosUsuario'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Cadastros Usuario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $cadastrosUsuario = $this->CadastrosUsuarios->get($id);
        if ($this->CadastrosUsuarios->delete($cadastrosUsuario)) {
            $this->Flash->success(__('The cadastros usuario has been deleted.'));
        } else {
            $this->Flash->error(__('The cadastros usuario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
