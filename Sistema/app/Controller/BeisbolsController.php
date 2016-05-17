<?php
App::uses('AppController', 'Controller');
/**
 * Beisbols Controller
 *
 * @property Beisbol $Beisbol
 * @property PaginatorComponent $Paginator
 */
class BeisbolsController extends AppController {

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
		$this->Beisbol->recursive = 0;
		$this->set('beisbols', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Beisbol->exists($id)) {
			throw new NotFoundException(__('Invalid beisbol'));
		}
		$options = array('conditions' => array('Beisbol.' . $this->Beisbol->primaryKey => $id));
		$this->set('beisbol', $this->Beisbol->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Beisbol->create();
			if ($this->Beisbol->save($this->request->data)) {
				$this->Session->setFlash(__('The beisbol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beisbol could not be saved. Please, try again.'));
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
		if (!$this->Beisbol->exists($id)) {
			throw new NotFoundException(__('Invalid beisbol'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Beisbol->save($this->request->data)) {
				$this->Session->setFlash(__('The beisbol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The beisbol could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Beisbol.' . $this->Beisbol->primaryKey => $id));
			$this->request->data = $this->Beisbol->find('first', $options);
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
		$this->Beisbol->id = $id;
		if (!$this->Beisbol->exists()) {
			throw new NotFoundException(__('Invalid beisbol'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Beisbol->delete()) {
			$this->Session->setFlash(__('The beisbol has been deleted.'));
		} else {
			$this->Session->setFlash(__('The beisbol could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
