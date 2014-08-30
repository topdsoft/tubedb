<?php
App::uses('AppController', 'Controller');
/**
 * Boxes Controller
 *
 * @property Box $Box
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class BoxesController extends AppController {

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
		$this->Box->recursive = 0;
		$this->set('boxes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Box->exists($id)) {
			throw new NotFoundException(__('Invalid box'));
		}
		$options = array('conditions' => array('Box.' . $this->Box->primaryKey => $id));
		$this->set('box', $this->Box->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Box->create();
			if ($this->Box->save($this->request->data)) {
				$this->Session->setFlash(__('The box has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The box could not be saved. Please, try again.'));
			}
		}
		$locations = $this->Box->Location->find('list');
		$tags = $this->Box->Tag->find('list');
		$tubes = $this->Box->Tube->find('list');
		$this->set(compact('locations', 'tags', 'tubes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Box->exists($id)) {
			throw new NotFoundException(__('Invalid box'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Box->save($this->request->data)) {
				$this->Session->setFlash(__('The box has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The box could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Box.' . $this->Box->primaryKey => $id));
			$this->request->data = $this->Box->find('first', $options);
		}
		$locations = $this->Box->Location->find('list');
		$tags = $this->Box->Tag->find('list');
		$tubes = $this->Box->Tube->find('list');
		$this->set(compact('locations', 'tags', 'tubes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Box->id = $id;
		if (!$this->Box->exists()) {
			throw new NotFoundException(__('Invalid box'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Box->delete()) {
			$this->Session->setFlash(__('The box has been deleted.'));
		} else {
			$this->Session->setFlash(__('The box could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
