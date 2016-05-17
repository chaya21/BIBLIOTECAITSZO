<?php
App::uses('AppController', 'Controller');
/**
 * Dibujos Controller
 *
 * @property Dibujo $Dibujo
 * @property PaginatorComponent $Paginator
 */
class DibujosController extends AppController {

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
		$this->Dibujo->recursive = 0;
		$this->set('dibujos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dibujo->exists($id)) {
			throw new NotFoundException(__('Invalid dibujo'));
		}
		$options = array('conditions' => array('Dibujo.' . $this->Dibujo->primaryKey => $id));
		$this->set('dibujo', $this->Dibujo->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dibujo->create();
			if ($this->Dibujo->save($this->request->data)) {
				$this->Session->setFlash(__('The dibujo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dibujo could not be saved. Please, try again.'));
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
		if (!$this->Dibujo->exists($id)) {
			throw new NotFoundException(__('Invalid dibujo'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dibujo->save($this->request->data)) {
				$this->Session->setFlash(__('The dibujo has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dibujo could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dibujo.' . $this->Dibujo->primaryKey => $id));
			$this->request->data = $this->Dibujo->find('first', $options);
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
		$this->Dibujo->id = $id;
		if (!$this->Dibujo->exists()) {
			throw new NotFoundException(__('Invalid dibujo'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dibujo->delete()) {
			$this->Session->setFlash(__('The dibujo has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dibujo could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
