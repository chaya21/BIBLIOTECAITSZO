<?php
App::uses('AppController', 'Controller');
/**
 * Basquetbols Controller
 *
 * @property Basquetbol $Basquetbol
 * @property PaginatorComponent $Paginator
 */
class BasquetbolsController extends AppController {

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
		$this->Basquetbol->recursive = 0;
		$this->set('basquetbols', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Basquetbol->exists($id)) {
			throw new NotFoundException(__('Invalid basquetbol'));
		}
		$options = array('conditions' => array('Basquetbol.' . $this->Basquetbol->primaryKey => $id));
		$this->set('basquetbol', $this->Basquetbol->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Basquetbol->create();
			if ($this->Basquetbol->save($this->request->data)) {
				$this->Session->setFlash(__('The basquetbol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The basquetbol could not be saved. Please, try again.'));
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
		if (!$this->Basquetbol->exists($id)) {
			throw new NotFoundException(__('Invalid basquetbol'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Basquetbol->save($this->request->data)) {
				$this->Session->setFlash(__('The basquetbol has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The basquetbol could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Basquetbol.' . $this->Basquetbol->primaryKey => $id));
			$this->request->data = $this->Basquetbol->find('first', $options);
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
		$this->Basquetbol->id = $id;
		if (!$this->Basquetbol->exists()) {
			throw new NotFoundException(__('Invalid basquetbol'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Basquetbol->delete()) {
			$this->Session->setFlash(__('The basquetbol has been deleted.'));
		} else {
			$this->Session->setFlash(__('The basquetbol could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
