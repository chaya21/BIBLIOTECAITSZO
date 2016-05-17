<?php
App::uses('AppController', 'Controller');
/**
 * Listas Controller
 *
 * @property Lista $Lista
 * @property PaginatorComponent $Paginator
 */
class ListasController extends AppController {

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
		$this->Lista->recursive = 0;
		$this->set('listas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Lista->exists($id)) {
			throw new NotFoundException(__('Invalid lista'));
		}
		$options = array('conditions' => array('Lista.' . $this->Lista->primaryKey => $id));
		$this->set('lista', $this->Lista->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Lista->create();
			if ($this->Lista->save($this->request->data)) {
				$this->Session->setFlash(__('The lista has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lista could not be saved. Please, try again.'));
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
		if (!$this->Lista->exists($id)) {
			throw new NotFoundException(__('Invalid lista'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Lista->save($this->request->data)) {
				$this->Session->setFlash(__('The lista has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The lista could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Lista.' . $this->Lista->primaryKey => $id));
			$this->request->data = $this->Lista->find('first', $options);
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
		$this->Lista->id = $id;
		if (!$this->Lista->exists()) {
			throw new NotFoundException(__('Invalid lista'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Lista->delete()) {
			$this->Session->setFlash(__('The lista has been deleted.'));
		} else {
			$this->Session->setFlash(__('The lista could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
