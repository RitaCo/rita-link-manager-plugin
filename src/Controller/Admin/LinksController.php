<?php
namespace Rita\Links\Controller\Admin;

use Rita\Links\Controller\AppController;

/**
 * Posts Controller
 *
 * @property \Rita\Links\Model\Table\PostsTable $Links
 */
class LinksController extends AppController
{


    
    public function initialize(){
        parent::initialize();
         
    }
    /**
     * Index method
     *
     * @return void
     */
    public function index()
    {   
        $this->set('Posts', $this->paginate($this->Links));
        $this->set('_serialize', ['Posts']);
    }

    /**
     * View method
     *
     * @param string|null $id Learning Post id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $post = $this->Links->get($id, [
           // 'contain' => []
        ]);
        $this->set('post', $post);
        $this->set('_serialize', ['post']);
    }

    /**
     * Add method
     *
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $post = $this->Links->newEntity();
        if ($this->request->is('post')) {
            $post = $this->Links->patchEntity($post, $this->request->data);
            if ($this->Links->save($post)) {
                $this->Flash->success('عملیات ذخیره سازی با موفقیت انجام گردید.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('عملیات ناموفق است. مجدد تلاش نمایید');
            }
        }
        $categories = $this->Links->Categories->find('list');
        $this->set(compact('post','categories'));
        $this->set('_serialize', ['post','categories']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Learning Post id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Posts->patchEntity($post, $this->request->data);
            if ($this->Posts->save($post)) {
                $this->Flash->success('عملیات ذخیره سازی با موفقیت انجام گردید.');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('عملیات ناموفق است. مجدد تلاش نمایید');
            }
        }
        $categories = $this->Posts->Categories->find('list');
        $this->set(compact('post','categories'));
        $this->set('_serialize', ['post','categories']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Learning Post id.
     * @return void Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if ($this->Posts->delete($post)) {
            $this->Flash->success('عملیات حذف رکورد با موفقیت انجام گردید.');
        } else {
            $this->Flash->error('عملیات ناموفق است. مجدد تلاش نمایید');
        }
        return $this->redirect(['action' => 'index']);
    }
}
