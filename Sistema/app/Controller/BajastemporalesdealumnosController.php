<?php
App::uses('AppController', 'Controller');
/**
 * Bajastemporalesdealumnos Controller
 *
 * @property Bajastemporalesdealumno $Bajastemporalesdealumno
 * @property PaginatorComponent $Paginator
 */
class BajastemporalesdealumnosController extends AppController {

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
		$this->Bajastemporalesdealumno->recursive = 0;
		$this->set('bajastemporalesdealumnos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Bajastemporalesdealumno->exists($id)) {
			throw new NotFoundException(__('Invalid bajastemporalesdealumno'));
		}
		$options = array('conditions' => array('Bajastemporalesdealumno.' . $this->Bajastemporalesdealumno->primaryKey => $id));
		$this->set('bajastemporalesdealumno', $this->Bajastemporalesdealumno->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Bajastemporalesdealumno->create();
			if ($this->Bajastemporalesdealumno->save($this->request->data)) {
				$this->Session->setFlash(__('The bajastemporalesdealumno has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bajastemporalesdealumno could not be saved. Please, try again.'));
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
		if (!$this->Bajastemporalesdealumno->exists($id)) {
			throw new NotFoundException(__('Invalid bajastemporalesdealumno'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Bajastemporalesdealumno->save($this->request->data)) {
				$this->Session->setFlash(__('The bajastemporalesdealumno has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The bajastemporalesdealumno could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Bajastemporalesdealumno.' . $this->Bajastemporalesdealumno->primaryKey => $id));
			$this->request->data = $this->Bajastemporalesdealumno->find('first', $options);
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
		$this->Bajastemporalesdealumno->id = $id;
		if (!$this->Bajastemporalesdealumno->exists()) {
			throw new NotFoundException(__('Invalid bajastemporalesdealumno'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Bajastemporalesdealumno->delete()) {
			$this->Session->setFlash(__('The bajastemporalesdealumno has been deleted.'));
		} else {
			$this->Session->setFlash(__('The bajastemporalesdealumno could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
