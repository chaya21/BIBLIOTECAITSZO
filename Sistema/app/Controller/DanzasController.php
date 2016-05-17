<?php
App::uses('AppController', 'Controller');
/**
 * Danzas Controller
 *
 * @property Danza $Danza
 * @property PaginatorComponent $Paginator
 */
class DanzasController extends AppController {

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
		$this->Danza->recursive = 0;
		$this->set('danzas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Danza->exists($id)) {
			throw new NotFoundException(__('Invalid danza'));
		}
		$options = array('conditions' => array('Danza.' . $this->Danza->primaryKey => $id));
		$this->set('danza', $this->Danza->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Danza->create();
			if ($this->Danza->save($this->request->data)) {
				$this->Session->setFlash(__('The danza has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The danza could not be saved. Please, try again.'));
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
		if (!$this->Danza->exists($id)) {
			throw new NotFoundException(__('Invalid danza'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Danza->save($this->request->data)) {
				$this->Session->setFlash(__('The danza has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The danza could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Danza.' . $this->Danza->primaryKey => $id));
			$this->request->data = $this->Danza->find('first', $options);
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
		$this->Danza->id = $id;
		if (!$this->Danza->exists()) {
			throw new NotFoundException(__('Invalid danza'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Danza->delete()) {
			$this->Session->setFlash(__('The danza has been deleted.'));
		} else {
			$this->Session->setFlash(__('The danza could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
