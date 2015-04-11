<?php
namespace Rita\Links\Controller\Admin;

use Rita\Links\Controller\AppController;
use Rita\Tools\Utility\ImageTool;

/**
 * Links Controller
 *
 * @property \Rita\Links\Model\Table\LinksTable $Links
 */
class LinksController extends AppController
{

    /**
     * 
     */
    public $paginate = ['contain' => 'Categories'];

    
    /**
     * LinksController::index()
     * 
     * @return void
     */
    public function index()
    {   
        $this->set('Links', $this->paginate($this->Links));
        $this->set('_serialize', ['Links']);
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
                return $this->redirect(['action' => 'edit',$post->id]);
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
        $post = $this->Links->get($id, [
            'contain' => []
        ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
           $data = $this->request->data;
            if (is_array($data['logo_upload']) && $data['logo_upload']['error'] == 0) {
                try {
                    $data['logo_upload'] =  $this->__upload($data['logo_upload'],$post->logo_upload);
                } catch ( Exception $e ) {
                    $this->Flash->error($e->getMessage());
                    return $this->redirect(['action' => 'edit', $id]);
                }
            } else {
                $data['logo_upload'] = $post->logo_upload;
            }
                  
            $post = $this->Links->patchEntity($post, $data);
            
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
     * LinksController::__upload()
     * 
     * @param mixed $file
     * @param mixed $filename
     * @return
     */
    public function __upload($file , $filename = null)
    {
        $trgPath = WWW_ROOT . 'files' . DS . 'links' .DS;
        if(!is_dir($trgPath)){
            mkdir($trgPath,0775);
        }

        $picture = ImageTool::openImage($file['tmp_name']);

        if (!$filename) {
            $filename = \Cake\Utility\Text::uuid() . '.' . ImageTool::getExtension($file['name']);
        }
        $trgPath = $trgPath.$filename;
        $res = ImageTool::resize([
            'input' => $picture,
            'output' => $trgPath,
            'units' => 'px',
            'width' => 120,
            'height' => 120,
            'quality' => 100,
            'compression' => 1,
            'enlarge' => true,
            'mode' => 'fit'
         ]);
         
         if ($res) {
            return $filename;
         }
         
         return false;
    } 


    /**
     * LinksController::delete()
     * 
     * @param mixed $id
     * @return
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Links->get($id);
        if ($this->Links->delete($post)) {
            $this->Flash->success('عملیات حذف رکورد با موفقیت انجام گردید.');
            $trgPath = WWW_ROOT . 'files' . DS . 'links' .DS . $post->logo_upload;
            
            if (!empty($post->logo_upload) && file_exists($trgPath)) {
                unlink($trgPath);
            }
            
        } else {
            $this->Flash->error('عملیات ناموفق است. مجدد تلاش نمایید');
        }
        return $this->redirect(['action' => 'index']);
    }
}
