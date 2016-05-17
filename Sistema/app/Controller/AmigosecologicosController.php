<?php
App::uses('AppController', 'Controller');
/**
 * Amigosecologicos Controller
 *
 * @property Amigosecologico $Amigosecologico
 * @property PaginatorComponent $Paginator
 */
class AmigosecologicosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Amigosecologico->recursive = 0;
		$this->set('amigosecologicos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Amigosecologico->exists($id)) {
			throw new NotFoundException(__('Invalid amigosecologico'));
		}
		$options = array('conditions' => array('Amigosecologico.' . $this->Amigosecologico->primaryKey => $id));
		$this->set('amigosecologico', $this->Amigosecologico->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Amigosecologico->create();
			if ($this->Amigosecologico->save($this->request->data)) {
				$this->Session->setFlash(__('The amigosecologico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The amigosecologico could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Amigosecologico->exists($id)) {
			throw new NotFoundException(__('Invalid amigosecologico'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Amigosecologico->save($this->request->data)) {
				$this->Session->setFlash(__('The amigosecologico has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The amigosecologico could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Amigosecologico.' . $this->Amigosecologico->primaryKey => $id));
			$this->request->data = $this->Amigosecologico->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Amigosecologico->id = $id;
		if (!$this->Amigosecologico->exists()) {
			throw new NotFoundException(__('Invalid amigosecologico'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Amigosecologico->delete()) {
			$this->Session->setFlash(__('The amigosecologico has been deleted.'));
		} else {
			$this->Session->setFlash(__('The amigosecologico could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
