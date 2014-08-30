<?php
App::uses('AppController', 'Controller');
/**
 * Tubes Controller
 *
 * @property Tube $Tube
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class TubesController extends AppController {

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
		$this->Tube->recursive = 0;
		$this->set('tubes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Tube->exists($id)) {
			throw new NotFoundException(__('Invalid tube'));
		}
		$options = array('conditions' => array('Tube.' . $this->Tube->primaryKey => $id));
		$this->set('tube', $this->Tube->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Tube->create();
			if ($this->Tube->save($this->request->data)) {
				$this->Session->setFlash(__('The tube has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tube could not be saved. Please, try again.'));
			}
		}
		$boxes = $this->Tube->Box->find('list');
		$tags = $this->Tube->Tag->find('list');
		$this->set(compact('boxes', 'tags'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Tube->exists($id)) {
			throw new NotFoundException(__('Invalid tube'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Tube->save($this->request->data)) {
				$this->Session->setFlash(__('The tube has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tube could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Tube.' . $this->Tube->primaryKey => $id));
			$this->request->data = $this->Tube->find('first', $options);
		}
		$boxes = $this->Tube->Box->find('list');
		$tags = $this->Tube->Tag->find('list');
		$this->set(compact('boxes', 'tags'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Tube->id = $id;
		if (!$this->Tube->exists()) {
			throw new NotFoundException(__('Invalid tube'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Tube->delete()) {
			$this->Session->setFlash(__('The tube has been deleted.'));
		} else {
			$this->Session->setFlash(__('The tube could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
