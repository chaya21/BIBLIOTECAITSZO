<?php
App::uses('AppController', 'Controller');
/**
 * Rondallas Controller
 *
 * @property Rondalla $Rondalla
 * @property PaginatorComponent $Paginator
 */
class RondallasController extends AppController {

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
		$this->Rondalla->recursive = 0;
		$this->set('rondallas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Rondalla->exists($id)) {
			throw new NotFoundException(__('Invalid rondalla'));
		}
		$options = array('conditions' => array('Rondalla.' . $this->Rondalla->primaryKey => $id));
		$this->set('rondalla', $this->Rondalla->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rondalla->create();
			if ($this->Rondalla->save($this->request->data)) {
				$this->Session->setFlash(__('The rondalla has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rondalla could not be saved. Please, try again.'));
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
		if (!$this->Rondalla->exists($id)) {
			throw new NotFoundException(__('Invalid rondalla'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Rondalla->save($this->request->data)) {
				$this->Session->setFlash(__('The rondalla has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rondalla could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Rondalla.' . $this->Rondalla->primaryKey => $id));
			$this->request->data = $this->Rondalla->find('first', $options);
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
		$this->Rondalla->id = $id;
		if (!$this->Rondalla->exists()) {
			throw new NotFoundException(__('Invalid rondalla'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Rondalla->delete()) {
			$this->Session->setFlash(__('The rondalla has been deleted.'));
		} else {
			$this->Session->setFlash(__('The rondalla could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
