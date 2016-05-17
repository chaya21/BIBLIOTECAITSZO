<?php
App::uses('AppController', 'Controller');
/**
 * Kickboxings Controller
 *
 * @property Kickboxing $Kickboxing
 * @property PaginatorComponent $Paginator
 */
class KickboxingsController extends AppController {

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
		$this->Kickboxing->recursive = 0;
		$this->set('kickboxings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Kickboxing->exists($id)) {
			throw new NotFoundException(__('Invalid kickboxing'));
		}
		$options = array('conditions' => array('Kickboxing.' . $this->Kickboxing->primaryKey => $id));
		$this->set('kickboxing', $this->Kickboxing->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Kickboxing->create();
			if ($this->Kickboxing->save($this->request->data)) {
				$this->Session->setFlash(__('The kickboxing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kickboxing could not be saved. Please, try again.'));
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
		if (!$this->Kickboxing->exists($id)) {
			throw new NotFoundException(__('Invalid kickboxing'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Kickboxing->save($this->request->data)) {
				$this->Session->setFlash(__('The kickboxing has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The kickboxing could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Kickboxing.' . $this->Kickboxing->primaryKey => $id));
			$this->request->data = $this->Kickboxing->find('first', $options);
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
		$this->Kickboxing->id = $id;
		if (!$this->Kickboxing->exists()) {
			throw new NotFoundException(__('Invalid kickboxing'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Kickboxing->delete()) {
			$this->Session->setFlash(__('The kickboxing has been deleted.'));
		} else {
			$this->Session->setFlash(__('The kickboxing could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
