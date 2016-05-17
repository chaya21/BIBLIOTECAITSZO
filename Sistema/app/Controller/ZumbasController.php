<?php
App::uses('AppController', 'Controller');
/**
 * Zumbas Controller
 *
 * @property Zumba $Zumba
 * @property PaginatorComponent $Paginator
 */
class ZumbasController extends AppController {

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
		$this->Zumba->recursive = 0;
		$this->set('zumbas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Zumba->exists($id)) {
			throw new NotFoundException(__('Invalid zumba'));
		}
		$options = array('conditions' => array('Zumba.' . $this->Zumba->primaryKey => $id));
		$this->set('zumba', $this->Zumba->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Zumba->create();
			if ($this->Zumba->save($this->request->data)) {
				$this->Session->setFlash(__('The zumba has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zumba could not be saved. Please, try again.'));
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
		if (!$this->Zumba->exists($id)) {
			throw new NotFoundException(__('Invalid zumba'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Zumba->save($this->request->data)) {
				$this->Session->setFlash(__('The zumba has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zumba could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Zumba.' . $this->Zumba->primaryKey => $id));
			$this->request->data = $this->Zumba->find('first', $options);
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
		$this->Zumba->id = $id;
		if (!$this->Zumba->exists()) {
			throw new NotFoundException(__('Invalid zumba'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Zumba->delete()) {
			$this->Session->setFlash(__('The zumba has been deleted.'));
		} else {
			$this->Session->setFlash(__('The zumba could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
