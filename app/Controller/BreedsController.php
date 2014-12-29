<?php
App::uses('AppController', 'Controller');
/**
 * Breeds Controller
 *
 * @property Breed $Breed
 * @property PaginatorComponent $Paginator
 */
class BreedsController extends AppController {

		public $helpers = array('Popup.Popup'); //use Prototype
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','RequestHandler');




/**
 * index method
 *
 * @return void
 */
	public function index() {

			if ($this->request->is('post')) {

			if($this->request->data['Breed']['state'] == '1' || $this->request->data['Breed']['state'] == '0') {
				$conditions[] = array(
					'Breed.active' => $this->request->data['Breed']['state']
				);
				$this->Session->write('Breed.state', $this->request->data['Breed']['state']);
			} else {
				$this->Session->write('Breed.state', '');
			}


			if(!empty($this->request->data['Breed']['name'])) {
				$filter = $this->request->data['Breed']['filter'];
				$this->Session->write('Breed.filter', $filter);
				$name = $this->request->data['Breed']['name'];
				$this->Session->write('Breed.name', $name);
				$conditions[] = array(
					'Breed.' . $filter . ' LIKE' => '%' . $name . '%'
				);
			} else {
				$this->Session->write('Breed.filter', '');
				$this->Session->write('Breed.name', '');
			}

			$this->Session->write('Breed.conditions', $conditions);
			return $this->redirect(array('action' => 'index'));

		}

		if($this->Session->check('Breed')) {
			$all = $this->Session->read('Breed');
		} else {
			$all = array(
				'state' => '',
				'name' => '',
				'filter' => '',
				'conditions' => ''
			);
		}
		$this->set(compact('all'));

		$this->Paginator = $this->Components->load('Paginator');

		$this->Paginator->settings = array(
			'Breed' => array(
				'recursive' => -1,
				'limit' => 50,
				'conditions' => $all['conditions'],
				'order' => array(
					'Breed.name' => 'ASC'
				),
				'paramType' => 'querystring',
			)
		);
		$breeds = $this->Paginator->paginate();

		// $categories= $this->Product->Category->find('list', array(
		// 	'recursive' => -1,
		// 	'order' => array(
		// 		'Category.name' => 'ASC'
		// 	)
		// )););


		$this->Breed->recursive = 0;
		$this->set('breeds', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Breed->exists($id)) {
			throw new NotFoundException(__('Invalid breed'));
		}
		$options = array('conditions' => array('Breed.' . $this->Breed->primaryKey => $id));
		$this->set('breed', $this->Breed->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Breed->create();
			if ($this->Breed->save($this->request->data)) {
				$this->Session->setFlash(__('La raza ha sido agregada.'));
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
		if (!$this->Breed->exists($id)) {
			throw new NotFoundException(__('Invalid breed'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Breed->save($this->request->data)) {
				$this->Session->setFlash(__('The breed has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The breed could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Breed.' . $this->Breed->primaryKey => $id));
			$this->request->data = $this->Breed->find('first', $options);
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
		$this->Breed->id = $id;
		if (!$this->Breed->exists()) {
			throw new NotFoundException(__('Invalid breed'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Breed->delete()) {
			$this->Session->setFlash(__('The breed has been deleted.'));
		} else {
			$this->Session->setFlash(__('The breed could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
