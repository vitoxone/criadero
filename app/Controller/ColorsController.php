<?php
App::uses('AppController', 'Controller');
/**
 * Colors Controller
 *
 * @property Color $Color
 * @property PaginatorComponent $Paginator
 */
class ColorsController extends AppController {

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
		$this->Color->recursive = 0;
		$this->set('colors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Color->exists($id)) {
			throw new NotFoundException(__('Invalid color'));
		}
		$options = array('conditions' => array('Color.' . $this->Color->primaryKey => $id));
		$this->set('color', $this->Color->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Color->create();
			if ($this->Color->save($this->request->data)) {
				$this->Session->setFlash(__('The color has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The color could not be saved. Please, try again.'));
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
		if (!$this->Color->exists($id)) {
			throw new NotFoundException(__('Invalid color'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Color->save($this->request->data)) {
				$this->Session->setFlash(__('The color has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The color could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Color.' . $this->Color->primaryKey => $id));
			$this->request->data = $this->Color->find('first', $options);
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
		$this->Color->id = $id;
		if (!$this->Color->exists()) {
			throw new NotFoundException(__('Invalid color'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Color->delete()) {
			$this->Session->setFlash(__('The color has been deleted.'));
		} else {
			$this->Session->setFlash(__('The color could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
