<?php
App::uses('AppController', 'Controller');
/**
 * Bandadeguerras Controller
 *
 * @property Bandadeguerra $Bandadeguerra
 * @property PaginatorComponent $Paginator
 */
class BandadeguerrasController extends AppController {

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
		$this->Bandadeguerra->recursive = 0;
		$this->set('bandadeguerras', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bandadeguerra->exists($id)) {
			throw new NotFoundException(__('Invalid bandadeguerra'));
		}
		$options = array('conditions' => array('Bandadeguerra.' . $this->Bandadeguerra->primaryKey => $id));
		$this->set('bandadeguerra', $this->Bandadeguerra->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bandadeguerra->create();
			if ($this->Bandadeguerra->save($this->request->data)) {
				$this->Session->setFlash(__('The bandadeguerra has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bandadeguerra could not be saved. Please, try again.'));
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
		if (!$this->Bandadeguerra->exists($id)) {
			throw new NotFoundException(__('Invalid bandadeguerra'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bandadeguerra->save($this->request->data)) {
				$this->Session->setFlash(__('The bandadeguerra has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bandadeguerra could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bandadeguerra.' . $this->Bandadeguerra->primaryKey => $id));
			$this->request->data = $this->Bandadeguerra->find('first', $options);
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
		$this->Bandadeguerra->id = $id;
		if (!$this->Bandadeguerra->exists()) {
			throw new NotFoundException(__('Invalid bandadeguerra'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bandadeguerra->delete()) {
			$this->Session->setFlash(__('The bandadeguerra has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bandadeguerra could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
