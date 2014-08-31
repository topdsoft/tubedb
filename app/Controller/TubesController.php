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
	
	public function import() {
		if (isset($this->data['Tube']['upload'])) {
			//returning with uploaded file
			$file=fopen($_FILES['data']['tmp_name']['Tube']['upload'],'r');
			while($row=fgetcsv($file)) {
				//loop for all rows in file
				if(!empty($row[0]) && $row[1]>0) {
					//skip blank lines and 0 qty
					$tube=$this->Tube->find('first',array('conditions'=>array('Tube.name'=>$row[0])));
					if($tube) {
						//existing
						$tube_id=$tube['Tube']['id'];
//debug($tube);
					} else {
						//need to create
						$this->Tube->create();
						$this->Tube->save(array('Tube'=>array('name'=>$row[0])));
						$tube_id=$this->Tube->getInsertId();
					}//endif
					$box=$this->Tube->Box->find('first',array('conditions'=>array('Box.name'=>$row[2])));
					if($box) {
						//box exists
						$box_id=$box['Box']['id'];
					} else {
						//create box
						$this->Tube->Box->create();
						$this->Tube->Box->save(array('Box'=>array('name'=>$row[2])));
						$box_id=$this->Tube->Box->getInsertId();
					}//endif box exists
					//create boxes_tubes record
					$this->Tube->BoxesTube->create();
					$this->Tube->BoxesTube->save(array('BoxesTube'=>array(
						'box_id'=>$box_id,
						'tube_id'=>$tube_id,
						'unknownQty'=>$row[1])));
				}//endif empty
			}//end while loop for all rows in file
debug($box);
debug($row);debug($tube_id);exit;
		}
	}
}
