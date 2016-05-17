<?php
App::uses('AppController', 'Controller');
/**
 * Instructores Controller
 *
 * @property Instructore $Instructore
 * @property PaginatorComponent $Paginator
 */
class InstructoresController extends AppController {

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
		$this->Instructore->recursive = 0;
		$this->set('instructores', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Instructore->exists($id)) {
			throw new NotFoundException(__('Invalid instructore'));
		}
		$options = array('conditions' => array('Instructore.' . $this->Instructore->primaryKey => $id));
		$this->set('instructore', $this->Instructore->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Instructore->create();
			if ($this->Instructore->save($this->request->data)) {
				$this->Session->setFlash(__('The instructore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instructore could not be saved. Please, try again.'));
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
		if (!$this->Instructore->exists($id)) {
			throw new NotFoundException(__('Invalid instructore'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Instructore->save($this->request->data)) {
				$this->Session->setFlash(__('The instructore has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The instructore could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Instructore.' . $this->Instructore->primaryKey => $id));
			$this->request->data = $this->Instructore->find('first', $options);
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
		$this->Instructore->id = $id;
		if (!$this->Instructore->exists()) {
			throw new NotFoundException(__('Invalid instructore'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Instructore->delete()) {
			$this->Session->setFlash(__('The instructore has been deleted.'));
		} else {
			$this->Session->setFlash(__('The instructore could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
