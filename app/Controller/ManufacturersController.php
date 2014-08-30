<?php
App::uses('AppController', 'Controller');
/**
 * Manufacturers Controller
 *
 * @property Manufacturer $Manufacturer
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ManufacturersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Manufacturer->recursive = 0;
		$this->set('manufacturers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Manufacturer->exists($id)) {
			throw new NotFoundException(__('Invalid manufacturer'));
		}
		$options = array('conditions' => array('Manufacturer.' . $this->Manufacturer->primaryKey => $id));
		$this->set('manufacturer', $this->Manufacturer->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Manufacturer->create();
			if ($this->Manufacturer->save($this->request->data)) {
				$this->Session->setFlash(__('The manufacturer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manufacturer could not be saved. Please, try again.'));
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
		if (!$this->Manufacturer->exists($id)) {
			throw new NotFoundException(__('Invalid manufacturer'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Manufacturer->save($this->request->data)) {
				$this->Session->setFlash(__('The manufacturer has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The manufacturer could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Manufacturer.' . $this->Manufacturer->primaryKey => $id));
			$this->request->data = $this->Manufacturer->find('first', $options);
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
		$this->Manufacturer->id = $id;
		if (!$this->Manufacturer->exists()) {
			throw new NotFoundException(__('Invalid manufacturer'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Manufacturer->delete()) {
			$this->Session->setFlash(__('The manufacturer has been deleted.'));
		} else {
			$this->Session->setFlash(__('The manufacturer could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
