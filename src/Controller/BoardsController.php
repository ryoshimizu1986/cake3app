<?php
namespace App\Controller;

use \Exception;
use Cake\Log\Log;

class BoardsController extends AppController {
    public function index($id = null) {
        $this->set('boards', $this->Boards->newEntity());
        if ($id != null) {
            try {
                $entity = $this->Boards->get($id);
                $this->set('entity', $entity);
            } catch (Exception $e) {
                Log::write('debut', $e->getMessage());
            }
        }
        $data = $this->Boards->find('all')->order(['id' => 'DESC']);
        $this->set('data', $data->toArray());
        $this->set('count', $data->count());
    }

    public function addRecord() {
        if ($this->request->is('post')) {
            $board = $this->Boards->newEntity($this->request->data);
            $this->Boards->save($board);
        }
        $this->autoRender = false;
        echo"<pre>";
        print_r($this->request->data);
        echo "</pre>";
        //return $this->redirect(['action' => 'index']);
    }

    public function delRecord() {
        if ($this->request->is('post')) {
            $this->Boards->deleteAll(
                ['name' => $this->request->data['name']]
            );
        }
        $this->redirect(['action' => 'index']);
    }

    public function editRecord() {
        if ($this->request->is('put')) {
            try {
                $entity = $this->Boards->get($this->request->data['id']);
                $entity->name = $this->request->data['name'];
                $this->Boards->save($entity);
            } catch (Exception $e) {
                Log::write('debug', $e->getMessage());
            }
        }
        return $this->redirect(['action' => 'index']);
    }
}