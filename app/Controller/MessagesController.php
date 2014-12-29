<?php
App::uses('AppController', 'Controller');
/**
 * Messages Controller
 *
 * @property Message $Message
 * @property PaginatorComponent $Paginator
 */
class MessagesController extends AppController {

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
	public function index($id = null) {
		 $conditions = array('Message.receiver_id' => $id); 
		$this->set('messages', $this->Paginator->paginate($conditions));
	}


		function custom_test(){
		if(!empty($this->data)){
			if ($this->RequestHandler->isAjax()) {
				$this->render('success', 'ajax');
				}
				else{
				
				if($this->Quiz->save($this->data)){

					$quizID = $this->Quiz->getInsertID();
					$this->Session->write('quiz_id', $quizID);
					$this->Quiz->update_code($quizID);
					$user = $this->Quiz->read(null,$quizID);
					

					$this->redirect(array('controller'=>'questions','action'=>'generate_questions'));
				}
			}
				
		}
	}

	public function getunread() {

		//Se cuenta nuevamente los mensajes no leidos
		$unread = $this->Message->getUnread($this->Auth->user('id'));
		Cache::write('unread', $unread);
		echo " 
                <script language=’JavaScript’> 
                alert(‘JavaScript dentro de PHP’); 
                </script>";
		return 1;

	}


/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid message'));
		}
		$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
		$this->set('message', $this->Message->find('first', $options));

		//Se actualiza el estado del mensaje  a visto
		$this->Message->updateView($id);

		//Se cuenta nuevamente los mensajes no leidos
		$unread = $this->Message->getUnread($this->Auth->user('id'));
		Cache::write('unread', $unread);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Message->create();
			$this->request->data['Message']['sender_id']= AuthComponent::user('id');
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('El Mensaje ha sido enviado.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Error al enviar el mensaje, por favor intente nuevamente.'));
			}
		}
		$senders = $this->Message->Sender->find('list');
		$receivers = $this->Message->Receiver->find('list', array('conditions' => array('Receiver.id !=' =>  AuthComponent::user('id'))));
		$this->set(compact('senders', 'receivers'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Message->exists($id)) {
			throw new NotFoundException(__('Invalid message'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Message->save($this->request->data)) {
				$this->Session->setFlash(__('The message has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The message could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Message.' . $this->Message->primaryKey => $id));
			$this->request->data = $this->Message->find('first', $options);
		}
		$senders = $this->Message->Sender->find('list');
		$receivers = $this->Message->Receiver->find('list');
		$this->set(compact('senders', 'receivers'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Message->id = $id;
		if (!$this->Message->exists()) {
			throw new NotFoundException(__('Invalid message'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Message->delete()) {
			$this->Session->setFlash(__('The message has been deleted.'));
		} else {
			$this->Session->setFlash(__('The message could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
