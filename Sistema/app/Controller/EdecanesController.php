<?php
App::uses('AppController', 'Controller');
/**
 * Edecanes Controller
 *
 * @property Edecane $Edecane
 * @property PaginatorComponent $Paginator
 */
class EdecanesController extends AppController {

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
		$this->Edecane->recursive = 0;
		$this->set('edecanes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Edecane->exists($id)) {
			throw new NotFoundException(__('Invalid edecane'));
		}
		$options = array('conditions' => array('Edecane.' . $this->Edecane->primaryKey => $id));
		$this->set('edecane', $this->Edecane->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Edecane->create();
			if ($this->Edecane->save($this->request->data)) {
				$this->Session->setFlash(__('The edecane has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The edecane could not be saved. Please, try again.'));
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
		if (!$this->Edecane->exists($id)) {
			throw new NotFoundException(__('Invalid edecane'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Edecane->save($this->request->data)) {
				$this->Session->setFlash(__('The edecane has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The edecane could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Edecane.' . $this->Edecane->primaryKey => $id));
			$this->request->data = $this->Edecane->find('first', $options);
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
		$this->Edecane->id = $id;
		if (!$this->Edecane->exists()) {
			throw new NotFoundException(__('Invalid edecane'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Edecane->delete()) {
			$this->Session->setFlash(__('The edecane has been deleted.'));
		} else {
			$this->Session->setFlash(__('The edecane could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
