<?php
App::uses('AppController', 'Controller');
/**
 * Eventypes Controller
 *
 * @property Eventype $Eventype
 * @property PaginatorComponent $Paginator
 */
class EventypesController extends AppController {

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
		$this->Eventype->recursive = 0;
		$this->set('eventypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Eventype->exists($id)) {
			throw new NotFoundException(__('Invalid eventype'));
		}
		$options = array('conditions' => array('Eventype.' . $this->Eventype->primaryKey => $id));
		$this->set('eventype', $this->Eventype->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Eventype->create();
			if ($this->Eventype->save($this->request->data)) {
				$this->Session->setFlash(__('The eventype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventype could not be saved. Please, try again.'));
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
		if (!$this->Eventype->exists($id)) {
			throw new NotFoundException(__('Invalid eventype'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Eventype->save($this->request->data)) {
				$this->Session->setFlash(__('The eventype has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eventype could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Eventype.' . $this->Eventype->primaryKey => $id));
			$this->request->data = $this->Eventype->find('first', $options);
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
		$this->Eventype->id = $id;
		if (!$this->Eventype->exists()) {
			throw new NotFoundException(__('Invalid eventype'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Eventype->delete()) {
			$this->Session->setFlash(__('The eventype has been deleted.'));
		} else {
			$this->Session->setFlash(__('The eventype could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
