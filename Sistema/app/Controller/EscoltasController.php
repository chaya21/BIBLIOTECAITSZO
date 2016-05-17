<?php
App::uses('AppController', 'Controller');
/**
 * Escoltas Controller
 *
 * @property Escolta $Escolta
 * @property PaginatorComponent $Paginator
 */
class EscoltasController extends AppController {

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
		$this->Escolta->recursive = 0;
		$this->set('escoltas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Escolta->exists($id)) {
			throw new NotFoundException(__('Invalid escolta'));
		}
		$options = array('conditions' => array('Escolta.' . $this->Escolta->primaryKey => $id));
		$this->set('escolta', $this->Escolta->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Escolta->create();
			if ($this->Escolta->save($this->request->data)) {
				$this->Session->setFlash(__('The escolta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The escolta could not be saved. Please, try again.'));
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
		if (!$this->Escolta->exists($id)) {
			throw new NotFoundException(__('Invalid escolta'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Escolta->save($this->request->data)) {
				$this->Session->setFlash(__('The escolta has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The escolta could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Escolta.' . $this->Escolta->primaryKey => $id));
			$this->request->data = $this->Escolta->find('first', $options);
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
		$this->Escolta->id = $id;
		if (!$this->Escolta->exists()) {
			throw new NotFoundException(__('Invalid escolta'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Escolta->delete()) {
			$this->Session->setFlash(__('The escolta has been deleted.'));
		} else {
			$this->Session->setFlash(__('The escolta could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
