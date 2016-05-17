<?php
App::uses('AppController', 'Controller');
/**
 * Futbols Controller
 *
 * @property Futbol $Futbol
 * @property PaginatorComponent $Paginator
 */
class FutbolsController extends AppController {

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
		$this->Futbol->recursive = 0;
		$this->set('futbols', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Futbol->exists($id)) {
			throw new NotFoundException(__('Invalid futbol'));
		}
		$options = array('conditions' => array('Futbol.' . $this->Futbol->primaryKey => $id));
		$this->set('futbol', $this->Futbol->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Futbol->create();
			if ($this->Futbol->save($this->request->data)) {
				$this->Session->setFlash(__('The futbol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The futbol could not be saved. Please, try again.'));
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
		if (!$this->Futbol->exists($id)) {
			throw new NotFoundException(__('Invalid futbol'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Futbol->save($this->request->data)) {
				$this->Session->setFlash(__('The futbol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The futbol could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Futbol.' . $this->Futbol->primaryKey => $id));
			$this->request->data = $this->Futbol->find('first', $options);
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
		$this->Futbol->id = $id;
		if (!$this->Futbol->exists()) {
			throw new NotFoundException(__('Invalid futbol'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Futbol->delete()) {
			$this->Session->setFlash(__('The futbol has been deleted.'));
		} else {
			$this->Session->setFlash(__('The futbol could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
