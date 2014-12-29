<?php
App::uses('AppController', 'Controller');
/**
 * Walks Controller
 *
 * @property Walk $Walk
 * @property PaginatorComponent $Paginator
 */
class WalksController extends AppController {

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
		$this->Walk->recursive = 0;
		$this->set('walks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Walk->exists($id)) {
			throw new NotFoundException(__('Invalid walk'));
		}
		$options = array('conditions' => array('Walk.' . $this->Walk->primaryKey => $id));
		$this->set('walk', $this->Walk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Walk->create();
			if ($this->Walk->save($this->request->data)) {
				$this->Session->setFlash(__('The walk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The walk could not be saved. Please, try again.'));
			}
		}
		$horses = $this->Walk->Horse->find('list');
		$this->set(compact('horses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Walk->exists($id)) {
			throw new NotFoundException(__('Invalid walk'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Walk->save($this->request->data)) {
				$this->Session->setFlash(__('The walk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The walk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Walk.' . $this->Walk->primaryKey => $id));
			$this->request->data = $this->Walk->find('first', $options);
		}
		$horses = $this->Walk->Horse->find('list');
		$this->set(compact('horses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Walk->id = $id;
		if (!$this->Walk->exists()) {
			throw new NotFoundException(__('Invalid walk'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Walk->delete()) {
			$this->Session->setFlash(__('The walk has been deleted.'));
		} else {
			$this->Session->setFlash(__('The walk could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
