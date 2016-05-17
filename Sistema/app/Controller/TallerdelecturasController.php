<?php
App::uses('AppController', 'Controller');
/**
 * Tallerdelecturas Controller
 *
 * @property Tallerdelectura $Tallerdelectura
 * @property PaginatorComponent $Paginator
 */
class TallerdelecturasController extends AppController {

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
		$this->Tallerdelectura->recursive = 0;
		$this->set('tallerdelecturas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tallerdelectura->exists($id)) {
			throw new NotFoundException(__('Invalid tallerdelectura'));
		}
		$options = array('conditions' => array('Tallerdelectura.' . $this->Tallerdelectura->primaryKey => $id));
		$this->set('tallerdelectura', $this->Tallerdelectura->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tallerdelectura->create();
			if ($this->Tallerdelectura->save($this->request->data)) {
				$this->Session->setFlash(__('The tallerdelectura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tallerdelectura could not be saved. Please, try again.'));
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
		if (!$this->Tallerdelectura->exists($id)) {
			throw new NotFoundException(__('Invalid tallerdelectura'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tallerdelectura->save($this->request->data)) {
				$this->Session->setFlash(__('The tallerdelectura has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tallerdelectura could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tallerdelectura.' . $this->Tallerdelectura->primaryKey => $id));
			$this->request->data = $this->Tallerdelectura->find('first', $options);
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
		$this->Tallerdelectura->id = $id;
		if (!$this->Tallerdelectura->exists()) {
			throw new NotFoundException(__('Invalid tallerdelectura'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tallerdelectura->delete()) {
			$this->Session->setFlash(__('The tallerdelectura has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tallerdelectura could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
