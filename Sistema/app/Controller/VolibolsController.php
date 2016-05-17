<?php
App::uses('AppController', 'Controller');
/**
 * Volibols Controller
 *
 * @property Volibol $Volibol
 * @property PaginatorComponent $Paginator
 */
class VolibolsController extends AppController {

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
		$this->Volibol->recursive = 0;
		$this->set('volibols', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Volibol->exists($id)) {
			throw new NotFoundException(__('Invalid volibol'));
		}
		$options = array('conditions' => array('Volibol.' . $this->Volibol->primaryKey => $id));
		$this->set('volibol', $this->Volibol->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Volibol->create();
			if ($this->Volibol->save($this->request->data)) {
				$this->Session->setFlash(__('The volibol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volibol could not be saved. Please, try again.'));
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
		if (!$this->Volibol->exists($id)) {
			throw new NotFoundException(__('Invalid volibol'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Volibol->save($this->request->data)) {
				$this->Session->setFlash(__('The volibol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The volibol could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Volibol.' . $this->Volibol->primaryKey => $id));
			$this->request->data = $this->Volibol->find('first', $options);
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
		$this->Volibol->id = $id;
		if (!$this->Volibol->exists()) {
			throw new NotFoundException(__('Invalid volibol'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Volibol->delete()) {
			$this->Session->setFlash(__('The volibol has been deleted.'));
		} else {
			$this->Session->setFlash(__('The volibol could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
