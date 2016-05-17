<?php
App::uses('AppController', 'Controller');
/**
 * Spinnings Controller
 *
 * @property Spinning $Spinning
 * @property PaginatorComponent $Paginator
 */
class SpinningsController extends AppController {

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
		$this->Spinning->recursive = 0;
		$this->set('spinnings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Spinning->exists($id)) {
			throw new NotFoundException(__('Invalid spinning'));
		}
		$options = array('conditions' => array('Spinning.' . $this->Spinning->primaryKey => $id));
		$this->set('spinning', $this->Spinning->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Spinning->create();
			if ($this->Spinning->save($this->request->data)) {
				$this->Session->setFlash(__('The spinning has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The spinning could not be saved. Please, try again.'));
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
		if (!$this->Spinning->exists($id)) {
			throw new NotFoundException(__('Invalid spinning'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Spinning->save($this->request->data)) {
				$this->Session->setFlash(__('The spinning has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The spinning could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Spinning.' . $this->Spinning->primaryKey => $id));
			$this->request->data = $this->Spinning->find('first', $options);
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
		$this->Spinning->id = $id;
		if (!$this->Spinning->exists()) {
			throw new NotFoundException(__('Invalid spinning'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Spinning->delete()) {
			$this->Session->setFlash(__('The spinning has been deleted.'));
		} else {
			$this->Session->setFlash(__('The spinning could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
