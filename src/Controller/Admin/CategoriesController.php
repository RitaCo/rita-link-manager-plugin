<?php
namespace Rita\Links\Controller\Admin;

use Rita\Links\Controller\AppController;

class CategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {
        $this->set('Categories', $this->paginate($this->Categories));
        $this->set('_serialize', ['Categories']);
    }

    /**
     * View method
     *
     * @param string|null $id Learning Category id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $Categories = $this->Categories->get($id, [
            'contain' => []
        ]);
        $this->set('Categories', $Categories);
        $this->set('_serialize', ['Categories']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $Categories = $this->Categories->newEntity();
        if ($this->request->is('post')) {
            $Categories = $this->Categories->patchEntity($Categories, $this->request->data);
            if ($this->Categories->save($Categories)) {
                $this->Flash->success('موضوع ایجاد گردید.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('امکان ذخیره سازی وجود ندارد، مجدد سعی نمایید.');
            }
        }
        $this->set(compact('Categories'));
        $this->set('_serialize', ['Categories']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Learning Category id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $Category = $this->Categories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $Category = $this->Categories->patchEntity($Category, $this->request->data);
            if ($this->Categories->save($Category)) {
                $this->Flash->success('موضوع ایجاد گردید.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('امکان ذخیره سازی وجود ندارد، مجدد سعی نمایید.');
            }
        }
        $this->set(compact('Category'));
        $this->set('_serialize', ['Category']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Learning Category id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $Categories = $this->Categories->get($id);
        if ($this->Categories->delete($Categories)) {
            $this->Flash->success('موضوع حذف گردید');
        } else {
            $this->Flash->error('عملیات با شکست مواجه گردید، مجدد سعی نمایید.');
        }
        return $this->redirect(['action' => 'index']);
    }
}
