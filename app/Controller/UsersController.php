<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
  public $components = array('Paginator', 'Session','Filter.Filter');


///////////////////////////////////////////////////////////////
  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('login', 'add');
  }
//////////////////////////////////////////////////////////////
 
  
    var $filters = array  
        (  
            'index' => array  
            (  
                'User' => array  
                (  
                    'User.name',  
                    'User.state' => array('condition' => '='),   
                )  
            )  
        ); 




  public function login() {
    $this->layout= 'start';

    // echo AuthComponent::password('admin');

    if ($this->request->is('post')) {
      if($this->Auth->login()) {

        $this->User->id = $this->Auth->user('id');
        $this->User->saveField('logins', $this->Auth->user('logins') + 1);
        $this->User->saveField('last_login', date('Y-m-d H:i:s'));

      App::import('Model', 'Message');
      $this->Message = new Message();
      $unread = $this->Message->getUnread($this->Auth->user('id'));
        //$messages = $this->User->Message->find('count', array('conditions' => array('Message.receiver_id' => $this->Auth->user('id'))));

      Cache::write('unread', $unread);
     // echo $unread;

      if($this->Auth->user()) {
          return $this->redirect(array(
            'controller' => 'users',
            'action' => 'dashboard',
            'manager' => false,
            'admin' => false
          ));
        } else {
          $this->Session->setFlash('Login is incorrect');
        }
      } else {
        $this->Session->setFlash('Login is incorrect');
      }
    }
  }

////////////////////////////////////////////////////////////

  public function logout() {
    $this->Session->setFlash('Good-Bye');
    return $this->redirect($this->Auth->logout());
  }

////////////////////////////////////////////////////////////

  public function dashboard() {
  }

////////////////////////////////////////////////////////////  


/**
 * admin_index method
 *
 * @return void
 */
  public function index() {

    $this->User->recursive = 0;
    $this->Paginator = $this->Components->load('Paginator');
    $this->set('users', $this->Paginator->paginate());

    $roles = $this->User->Role->find('list', array('conditions' => array('Role.active' => 1)));
  
    $this->set(compact('roles'));
  }

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
  public function view($id = null) {
    if (!$this->User->exists($id)) {
      throw new NotFoundException(__('Invalid user'));
    }
    $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
    $this->set('user', $this->User->find('first', $options));
  }


  /**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
  public function profile() {

      if (!$this->User->exists(AuthComponent::user('id'))) {
      throw new NotFoundException(__('Invalid user'));
    }
    $options = array('conditions' => array('User.' . $this->User->primaryKey => AuthComponent::user('id')));
    $this->set('user', $this->User->find('first', $options));
  }

/**
 * add method
 *
 * @return void
 */
  public function add() {
      if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['User']['image']['name'])) {

      $this->Img = $this->Components->load('Img');

      $newName = $this->request->data['User']['rut'];

      $ext = $this->Img->ext($this->request->data['User']['image']['name']);

      $origFile = $newName . '.' . $ext;
      $dst = $newName . '.jpg';

      $targetdir = WWW_ROOT . 'images/users';

      $upload = $this->Img->upload($this->request->data['User']['image']['tmp_name'], $targetdir, $origFile);

   $this->request->data['User']['image'] = '';
      
      $this->User->create();
      if ($this->User->save($this->request->data)) {
        $this->Session->setFlash(__('Usuario Agregado.'));
        return $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('El usuario no se pudo agregar. Por favor intente nuevamente'));
      }
    }
  
    $roles = $this->User->Role->find('list');
    $this->set(compact('roles'));
  }


/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
  public function edit($id = null) {
    if (!$this->User->exists($id)) {
      throw new NotFoundException(__('Invalid user'));
    }
    if ($this->request->is(array('post', 'put'))) {
      if ($this->User->save($this->request->data)) {
        $this->Session->setFlash(__('The user has been saved.'));
        return $this->redirect(array('action' => 'index'));
      } else {
        $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
      }
    } else {
      $options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
      $this->request->data = $this->User->find('first', $options);
    }
    $roles = $this->User->Role->find('list');
    $this->set(compact('genders', 'careers', 'roles'));

    $options = array('conditions' => array('User.' . $this->User->primaryKey => AuthComponent::user('id')));
    $this->set('user', $this->User->find('first', $options));
  }

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
  public function delete($id = null) {
    $this->User->id = $id;
    if (!$this->User->exists()) {
      throw new NotFoundException(__('Invalid user'));
    }
    $this->request->onlyAllow('post', 'delete');
    if ($this->User->delete()) {
      $this->Session->setFlash(__('The user has been deleted.'));
    } else {
      $this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
    }
    return $this->redirect(array('action' => 'index'));
  }}
