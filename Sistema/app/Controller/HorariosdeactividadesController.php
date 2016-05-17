<?php
App::uses('AppController', 'Controller');
/**
 * Horariosdeactividades Controller
 *
 * @property Horariosdeactividade $Horariosdeactividade
 * @property PaginatorComponent $Paginator
 */
class HorariosdeactividadesController extends AppController {

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
		$this->Horariosdeactividade->recursive = 0;
		$this->set('horariosdeactividades', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Horariosdeactividade->exists($id)) {
			throw new NotFoundException(__('Invalid horariosdeactividade'));
		}
		$options = array('conditions' => array('Horariosdeactividade.' . $this->Horariosdeactividade->primaryKey => $id));
		$this->set('horariosdeactividade', $this->Horariosdeactividade->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Horariosdeactividade->create();
			if ($this->Horariosdeactividade->save($this->request->data)) {
				$this->Session->setFlash(__('The horariosdeactividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horariosdeactividade could not be saved. Please, try again.'));
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
		if (!$this->Horariosdeactividade->exists($id)) {
			throw new NotFoundException(__('Invalid horariosdeactividade'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Horariosdeactividade->save($this->request->data)) {
				$this->Session->setFlash(__('The horariosdeactividade has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horariosdeactividade could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Horariosdeactividade.' . $this->Horariosdeactividade->primaryKey => $id));
			$this->request->data = $this->Horariosdeactividade->find('first', $options);
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
		$this->Horariosdeactividade->id = $id;
		if (!$this->Horariosdeactividade->exists()) {
			throw new NotFoundException(__('Invalid horariosdeactividade'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Horariosdeactividade->delete()) {
			$this->Session->setFlash(__('The horariosdeactividade has been deleted.'));
		} else {
			$this->Session->setFlash(__('The horariosdeactividade could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
