<?php
App::uses('AppController', 'Controller');
/**
 * Horses Controller
 *
 * @property Horse $Horse
 * @property PaginatorComponent $Paginator
 */
class HorsesController extends AppController {



public $uses = array('Horse','Event', 'Eventype');


/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator','Filter', 'HighCharts.HighCharts');

    public $HighCharts = null;

  public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('view');
  }

/**
 * index method
 *
 * @return void
 */
	public function index() {
         $this->layout='default';
		$this->Horse->recursive = 0;
		$this->set('horses', $this->Paginator->paginate());
	}


/**
 * index method
 *
 * @return void
 */
	public function index_details() {
	$horses=array();
    if(!empty($this->params->query)){
    	
    		$gender = $this->params->query['gender_id'];
    		$breed=$this->params->query['breed_id'];

    		if($gender=='todo' and $breed=='todo'){
				$horses=$this->paginate();
    		}
    		else if ($gender =='todo' and $breed!='todo'){
				$horses=$this->paginate('Horse', array('and' => array(
        			'Horse.breed_id' =>$breed)));
			}
			else if ($gender!='todo' and $breed=='todo'){
				$horses=$this->paginate('Horse', array('and' => array(
		        'Horse.gender_id' => $gender)));
			}
			else{
				$horses=$this->paginate('Horse', array('and' => array(
		        'Horse.breed_id' =>$breed,
		        'Horse.gender_id' => $gender)));

			}
		$genders = $this->Horse->Gender->find('list');
		$breeds = $this->Horse->Breed->find('list', array('conditions' => array('Breed.state' => 1)));
		$types = $this->Horse->Type->find('list', array('conditions' => array('Type.state' => 1)));
		$colors = $this->Horse->Color->find('list', array('conditions' => array('Color.state' => 1)));
		$states = $this->Horse->State->find('list', array('conditions' => array('State.state' => 1)));
		$users = $this->Horse->User->find('list', array('conditions' => array('User.active' => 1)));
	
		$this->set(compact('horses','genders', 'breeds', 'types', 'colors', 'states', 'users'));
    }
    else{

		$this->Horse->recursive = 0;
		$this->set('horses', $this->Paginator->paginate());

		$genders = $this->Horse->Gender->find('list');
		$breeds = $this->Horse->Breed->find('list', array('conditions' => array('Breed.state' => 1)));
		$types = $this->Horse->Type->find('list', array('conditions' => array('Type.state' => 1)));
		$colors = $this->Horse->Color->find('list', array('conditions' => array('Color.state' => 1)));
		$states = $this->Horse->State->find('list', array('conditions' => array('State.state' => 1)));
		$users = $this->Horse->User->find('list', array('conditions' => array('User.active' => 1)));
	

		$this->set(compact('genders', 'breeds', 'types', 'colors', 'states', 'users'));
	}
	}


	/**
 * index method
 *
 * @return void
 */
	function index_details2() {
	$this->paginate = $this->Filter->paginate;
	$posts = $this->paginate();
	$this->set(compact('horses'));
}

	public function csv() {
		$horses = $this->Horse->find('all', array(
			'recursive' => -1,
		));
		$this->set(compact('horses'));
		$this->layout = false;
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		 $this->layout = 'default';

	$options = array('conditions' => array('Horse.' . $this->Horse->primaryKey => $id));
	$horse = $this->Horse->find('first', $options);

   // $short_list_array = array_map('trim', explode(',',$shortlist)); 

   	$der = array();
   	$izq = array();
	$i=0;

		$reverse  = array_reverse($horse['Event']);

		foreach($reverse as $u){
				
				//$p[$i] = 10;
				$der[$i] = intval($u['der']);
				$izq[$i] = intval($u['izq']);
				$dates[$i] = $u['date'];
				//array_push($p, $u['der']);
			$i++;

			if($i==10){
				break;
			}
		}


			$der  = array_reverse($der);
			$izq  = array_reverse($izq);

		$chartName = 'Spline Chart';
        $mychart = $this->HighCharts->create( $chartName, 'spline' );
        $this->HighCharts->setChartParams(
				$chartName,
				array(
					'renderTo'				=> 'splinewrapper',  // div to display chart inside
					'chartWidth'				=> 400,
					'chartHeight'				=> 300,
					'chartMarginTop' 			=> 60,
					'chartMarginLeft'			=> 90,
					'chartMarginRight'			=> 30,
					'chartMarginBottom'			=> 110,
					'chartSpacingRight'			=> 10,
					'chartSpacingBottom'			=> 15,
					'chartSpacingLeft'			=> 0,
					'chartAlignTicks'			=> FALSE,
					'chartBackgroundColorLinearGradient' 	=> array(0,0,0,300),
					'chartBackgroundColorStops'	=> array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

					//'title'					=> 'Tamaño de óvulos',
					'titleAlign'				=> 'left',
					'titleFloating'				=> TRUE,
					'titleStyleFont'			=> '18px Metrophobic, Arial, sans-serif',
					'titleStyleColor'			=> '#0099ff',
					'titleX'				=> 20,
					'titleY'				=> 20,

					'legendEnabled' 			=> TRUE,
					'legendLayout'				=> 'horizontal',
					'legendAlign'				=> 'center',
					'legendVerticalAlign '			=> 'bottom',
					'legendItemStyle'			=> array('color' => '#222'),
					'legendBackgroundColorLinearGradient' 	=> array(0,0,0,25),
					'legendBackgroundColorStops' => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

		             		'tooltipEnabled' 			=> FALSE,
                     			// 'tooltipBackgroundColorLinearGradient' 	=> array(0,0,0,50),   // triggers js error
                     			// 'tooltipBackgroundColorStops' 		=> array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

					//'plotOptionsLinePointStart' 		=> strtotime('-30 day') * 1000,
					//'plotOptionsLinePointInterval' 	=> 24 * 3600 * 1000,

		            //'xAxisTitleText' 			=> 'Últimos Registros', 		
					//'xAxisType' 				=> 'datetime',
					//'xAxisTickInterval' 			=> 10,
					//'xAxisStartOnTick' 			=> TRUE,
					//'xAxisTickmarkPlacement' 		=> 'on',
					//'xAxisTickLength' 			=> 10,
					//'xAxisMinorTickLength' 		=> 5,

					'xAxisLabelsEnabled' 			=> TRUE,
					'xAxisLabelsAlign' 			=> 'right',
					'xAxisLabelsStep' 			=> 1,
					//'xAxisLabelsRotation' 		=> -35,
					'xAxislabelsX' 				=> 5,
					'xAxisLabelsY' 				=> 20,
					//'xAxisCategories'           		=> $dates,

					//'yAxisMin' 				=> 0,
					//'yAxisMaxPadding'			=> 0.2,
					//'yAxisEndOnTick'			=> FALSE,
					//'yAxisMinorGridLineWidth' => 0,
					//'yAxisMinorTickInterval' 		=> 'auto',
					//'yAxisMinorTickLength' 		=> 1,
					//'yAxisTickLength'			=> 2,
					//'yAxisMinorTickWidth'			=> 1,


					'yAxisTitleText' 			=> 'Tamaño',
					//'yAxisTitleAlign' 			=> 'high',
					//'yAxisTitleStyleFont' 		=> '14px Metrophobic, Arial, sans-serif',
					//'yAxisTitleRotation' 			=> 0,
					//'yAxisTitleX' 			=> 0,
					//'yAxisTitleY' 			=> -10,
					//'yAxisPlotLines' 			=> array( array('color' => '#808080', 'width' => 1, 'value' => 0 )),

					/* autostep options */
					'enableAutoStep' 			=> FALSE
                )
        );

		$series1 = $this->HighCharts->addChartSeries();
        $series2 = $this->HighCharts->addChartSeries();

        $series1->addName('Ovario Derecho')
            ->addData($der);
        $series2->addName('Ovario Izquierdo')
            ->addData($izq);

        $mychart->addSeries($series1);
        $mychart->addSeries($series2);


		 	if ($this->request->is('post')) {
			$this->Horse->Event->create();
			$this->request->data['Event']['horse_id']=$id;
			if ($this->Horse->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				//return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		}


		if (!$this->Horse->exists($id)) {
			throw new NotFoundException(__('Invalid horse'));
		}
		$options = array('conditions' => array('Horse.' . $this->Horse->primaryKey => $id));
		$this->set('horse', $this->Horse->find('first', $options));

		$horse = $this->Horse->find('first', array('conditions' => array('Horse.id' => $id)));

		$years= $this->Horse->getYears($horse['Horse']['birthdate']);

		$father = $this->Horse->find('first', array('conditions' => array('Horse.id' => $horse['Horse']['lft'])));
		$mother = $this->Horse->find('first', array('conditions' => array('Horse.id' => $horse['Horse']['rght'])));


        $walks = $this->Horse->Walk->find('list'); 
		$this->set(compact('father','mother', 'events','years'));

		$this->Event->recursive = 0;
		$this->set('walks', $this->Paginator->paginate());

		//$this->set('events', $this->Paginator->paginate());

	}

/*
	public function add() {
		if (($this->request->is('post') || $this->request->is('put')) && !empty($this->request->data['Horse']['image_izq']['name'])) {


			//Se carga la imagen respectiva
			$this->Img = $this->Components->load('Img');

			//Se obtiene el nombre de la imagen
			$newName = $this->request->data['Horse']['image_izq']['name'];

			//Se obtiene la etensión de la imagen
			$ext = $this->Img->ext($this->request->data['Horse']['image_izq']['name']);

			//Se compone la imagen con su nombre y extensión
			$origFile = $newName . '.' . $ext;


			$dst = $newName . '.jpg';

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Horse']['image_izq']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Horse']['image_izq'] = $dst;
			} else {
				$this->request->data['Horse']['image'] = '';
			}


			$this->Horse->create();
			if ($this->Horse->save($this->request->data)) {
				$this->Session->setFlash(__('The horse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horse could not be saved. Please, try again.'));
			}
		}
		$users = $this->Horse->User->find('list', array('conditions' =>  array('User.active' => 1)));
		
		$genders = $this->Horse->Gender->find('list');
		$breeds = $this->Horse->Breed->find('list', array('conditions' => array('Breed.state' => 1)));
		$types = $this->Horse->Type->find('list', array('conditions' => array('Type.state' => 1)));
		$colors = $this->Horse->Color->find('list', array('conditions' => array('Color.state' => 1)));
		$states = $this->Horse->State->find('list', array('conditions' => array('State.state' => 1)));
		$lfts = $this->Horse->find('list', array('conditions' => array('Horse.gender_id' => 1)));
		$rghts = $this->Horse->find('list', array('conditions' => array('Horse.gender_id' => 2)));
		$this->set(compact('users','genders', 'breeds', 'types', 'colors', 'states','lfts','rghts'));
	}

*/

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if (($this->request->is('post') || $this->request->is('put'))) {


			//Se carga la imagen respectiva
			$this->Img = $this->Components->load('Img');


			if(!empty($this->request->data['Horse']['image_izq']['name'])){

				//Se obtiene el nombre de la imagen
			$newName = $this->request->data['Horse']['number'];

			//$newName = $this->request->data['User']['rut'];

			//Se obtiene la etensión de la imagen
			$ext = $this->Img->ext($this->request->data['Horse']['image_izq']['name']);

			//Se compone la imagen con su nombre y extensión
			$origFile = $newName . '_1.' . $ext;

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Horse']['image_izq']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				//$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				//$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Horse']['image_izq'] = $origFile;
			} else {
				$this->request->data['Horse']['image'] = 'izq.jpg';
			}



			} else {

				$this->request->data['Horse']['image_izq'] = 'izq.jpg';
			}


			if(!empty($this->request->data['Horse']['image_der']['name'])){

				$this->Session->setFlash(__($this->request->data['Horse']['image_der']['name']));

				//Se obtiene el nombre de la imagen
			$newName = $this->request->data['Horse']['number'];

			//Se obtiene la etensión de la imagen
			$ext = $this->Img->ext($this->request->data['Horse']['image_der']['name']);

			//Se compone la imagen con su nombre y extensión
			$origFile = $newName . '_2.' . $ext;


			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Horse']['image_der']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				//$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				//$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Horse']['image_der'] = $origFile;
			} else {
				$this->request->data['Horse']['image_der'] = 'der.jpg';
			}



			} else {

				$this->request->data['Horse']['image_der'] = 'der.jpg';
			}


			if(!empty($this->request->data['Horse']['image_center']['name'])){

				$this->Session->setFlash(__($this->request->data['Horse']['image_center']['name']));

				//Se obtiene el nombre de la imagen
			$newName = $this->request->data['Horse']['number'];

			//Se obtiene la etensión de la imagen
			$ext = $this->Img->ext($this->request->data['Horse']['image_center']['name']);

			//Se compone la imagen con su nombre y extensión
			$origFile = $newName . '_3.' . $ext;

			$targetdir = WWW_ROOT . 'images/original';

			$upload = $this->Img->upload($this->request->data['Horse']['image_center']['tmp_name'], $targetdir, $origFile);

			if($upload == 'Success') {
				//$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/large/', $dst, 800, 800, 1, 0);
				//$this->Img->resampleGD($targetdir . DS . $origFile, WWW_ROOT . 'images/small/', $dst, 180, 180, 1, 0);
				$this->request->data['Horse']['image_center'] = $origFile;
			} else {
				$this->request->data['Horse']['image_center'] = 'frontal.jpg';
			}



			} else {

				$this->request->data['Horse']['image_center'] = 'frontal.jpg';
			}


			


			$this->Horse->create();
			if ($this->Horse->save($this->request->data)) {
				$this->Session->setFlash(__('The horse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horse could not be saved. Please, try again.'));
			}
		}
		$users = $this->Horse->User->find('list', array('conditions' =>  array('User.active' => 1)));
		
		$genders = $this->Horse->Gender->find('list');
		$breeds = $this->Horse->Breed->find('list', array('conditions' => array('Breed.state' => 1)));
		$types = $this->Horse->Type->find('list', array('conditions' => array('Type.state' => 1)));
		$colors = $this->Horse->Color->find('list', array('conditions' => array('Color.state' => 1)));
		$states = $this->Horse->State->find('list', array('conditions' => array('State.state' => 1)));
		$lfts = $this->Horse->find('list', array('conditions' => array('Horse.gender_id' => 1)));
		$rghts = $this->Horse->find('list', array('conditions' => array('Horse.gender_id' => 2)));
		$this->set(compact('users','genders', 'breeds', 'types', 'colors', 'states','lfts','rghts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Horse->exists($id)) {
			throw new NotFoundException(__('Invalid horse'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Horse->save($this->request->data)) {
				$this->Session->setFlash(__('The horse has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The horse could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Horse.' . $this->Horse->primaryKey => $id));
			$this->request->data = $this->Horse->find('first', $options);
		}
		$genders = $this->Horse->Gender->find('list');
		$breeds = $this->Horse->Breed->find('list');
		$types = $this->Horse->Type->find('list');
		$colors = $this->Horse->Color->find('list');
		$states = $this->Horse->State->find('list');
		$this->set(compact('genders', 'breeds', 'types', 'colors', 'states'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Horse->id = $id;
		if (!$this->Horse->exists()) {
			throw new NotFoundException(__('Invalid horse'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Horse->delete()) {
			$this->Session->setFlash(__('The horse has been deleted.'));
		} else {
			$this->Session->setFlash(__('The horse could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index_details'));
	}



/**
 * add method
 *
 * @return void
 */
	public function add_event() {
		if ($this->request->is('post')) {
			$this->Event->create();
			if ($this->Event->save($this->request->data)) {
				$this->Session->setFlash(__('The event has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event could not be saved. Please, try again.'));
			}
		}
		$eventypes = $this->Event->Eventype->find('list');
		$horses = $this->Event->Horse->find('list');
		$this->set(compact('eventypes', 'horses'));
	}


   public function spline($id) {


    $options = array('conditions' => array('Horse.' . $this->Horse->primaryKey => $id));
	$horse = $this->Horse->find('first', $options);

   // $short_list_array = array_map('trim', explode(',',$shortlist)); 

   	$der = array();
   	$izq = array();
	$i=0;
		foreach($horse['Event'] as $u){
				
				//$p[$i] = 10;
				$der[$i] = intval($u['der']);
				$izq[$i] = intval($u['izq']);
				$dates[$i] = $u['date'];
				//array_push($p, $u['der']);
			$i++;
		}
        $chartName = 'Spline Chart';
        $mychart = $this->HighCharts->create( $chartName, 'spline' );
        $this->HighCharts->setChartParams(
				$chartName,
				array(
					'renderTo'				=> 'splinewrapper',  // div to display chart inside
					'chartWidth'				=> 800,
					'chartHeight'				=> 600,
					'chartMarginTop' 			=> 60,
					'chartMarginLeft'			=> 90,
					'chartMarginRight'			=> 30,
					'chartMarginBottom'			=> 110,
					'chartSpacingRight'			=> 10,
					'chartSpacingBottom'			=> 15,
					'chartSpacingLeft'			=> 0,
					'chartAlignTicks'			=> FALSE,
					'chartBackgroundColorLinearGradient' 	=> array(0,0,0,300),
					'chartBackgroundColorStops'	=> array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

					'title'					=> $horse['Horse']['name'],
					'titleAlign'				=> 'left',
					'titleFloating'				=> TRUE,
					'titleStyleFont'			=> '18px Metrophobic, Arial, sans-serif',
					'titleStyleColor'			=> '#0099ff',
					'titleX'				=> 20,
					'titleY'				=> 20,

					'legendEnabled' 			=> TRUE,
					'legendLayout'				=> 'horizontal',
					'legendAlign'				=> 'center',
					'legendVerticalAlign '			=> 'bottom',
					'legendItemStyle'			=> array('color' => '#222'),
					'legendBackgroundColorLinearGradient' 	=> array(0,0,0,25),
					'legendBackgroundColorStops' => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

		             		'tooltipEnabled' 			=> FALSE,
                     			// 'tooltipBackgroundColorLinearGradient' 	=> array(0,0,0,50),   // triggers js error
                     			// 'tooltipBackgroundColorStops' 		=> array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

					//'plotOptionsLinePointStart' 		=> strtotime('-30 day') * 1000,
					//'plotOptionsLinePointInterval' 	=> 24 * 3600 * 1000,

		            'xAxisTitleText' 			=> 'Últimos Registros', 		
					//'xAxisType' 				=> 'datetime',
					//'xAxisTickInterval' 			=> 10,
					//'xAxisStartOnTick' 			=> TRUE,
					//'xAxisTickmarkPlacement' 		=> 'on',
					//'xAxisTickLength' 			=> 10,
					//'xAxisMinorTickLength' 		=> 5,

					'xAxisLabelsEnabled' 			=> TRUE,
					'xAxisLabelsAlign' 			=> 'right',
					'xAxisLabelsStep' 			=> 1,
					//'xAxisLabelsRotation' 		=> -35,
					'xAxislabelsX' 				=> 5,
					'xAxisLabelsY' 				=> 20,
					//'xAxisCategories'           		=> $dates,

					//'yAxisMin' 				=> 0,
					//'yAxisMaxPadding'			=> 0.2,
					//'yAxisEndOnTick'			=> FALSE,
					//'yAxisMinorGridLineWidth' => 0,
					//'yAxisMinorTickInterval' 		=> 'auto',
					//'yAxisMinorTickLength' 		=> 1,
					//'yAxisTickLength'			=> 2,
					//'yAxisMinorTickWidth'			=> 1,


					'yAxisTitleText' 			=> 'Tamaño',
					//'yAxisTitleAlign' 			=> 'high',
					//'yAxisTitleStyleFont' 		=> '14px Metrophobic, Arial, sans-serif',
					//'yAxisTitleRotation' 			=> 0,
					//'yAxisTitleX' 			=> 0,
					//'yAxisTitleY' 			=> -10,
					//'yAxisPlotLines' 			=> array( array('color' => '#808080', 'width' => 1, 'value' => 0 )),

					/* autostep options */
					'enableAutoStep' 			=> FALSE
                )
        );

        $series1 = $this->HighCharts->addChartSeries();
        $series2 = $this->HighCharts->addChartSeries();

        $series1->addName('Ovario Derecho')
            ->addData($der);
        $series2->addName('Ovario Izquierdo')
            ->addData($izq);

        $mychart->addSeries($series1);
        $mychart->addSeries($series2);

        $this->set(compact('id'));
    }




    public function stadistics() {
        $pieData = array(
                        array(
                                'name' => 'Chrome',
                                'y' => 45.0,
                                'sliced' => true,
                                'selected' => true
                             ),
                        array('IE', 26.8),
                        array('Firefox', 12.8),
                        array('Safari', 8.5),
                        array('Opera', 6.2),
                        array('Others', 0.7)
                );

        $chartName = 'Pie Chart';

        $pieChart = $this->HighCharts->create( $chartName, 'pie' );


        $this->HighCharts->setChartParams(
                    $chartName,
                    array(
                            'renderTo'				=> 'piewrapper',  // div to display chart inside
                            'chartWidth'			=> 1024,
                            'chartHeight'			=> 768,
                            'chartMarginTop' 			=> 60,
                            'chartMarginLeft'			=> 90,
                            'chartMarginRight'			=> 30,
                            'chartMarginBottom'			=> 110,
                            'chartSpacingRight'			=> 10,
                            'chartSpacingBottom'		=> 15,
                            'chartSpacingLeft'			=> 0,
                            'chartAlignTicks'			=> FALSE,
                            'chartBackgroundColorLinearGradient' 	=> array(0,0,0,300),
                            'chartBackgroundColorStops'		=> array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

                            'title'				=> 'Browser Usage Statistics',
                            'titleAlign'			=> 'left',
                            'titleFloating'			=> TRUE,
                            'titleStyleFont'			=> '18px Metrophobic, Arial, sans-serif',
                            'titleStyleColor'			=> '#0099ff',
                            'titleX'				=> 20,
                            'titleY'				=> 20,

                            'legendEnabled' 			=> TRUE,
                            'legendLayout'			=> 'horizontal',
                            'legendAlign'			=> 'center',
                            'legendVerticalAlign '		=> 'bottom',
                            'legendItemStyle'			=> array('color' => '#222'),
                            'legendBackgroundColorLinearGradient' 	=> array(0,0,0,25),
                            'legendBackgroundColorStops' 		=> array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

                            'tooltipEnabled' 			=> TRUE,
                            'tooltipBackgroundColorLinearGradient' => array(0,0,0,50),   // triggers js error
                            'tooltipBackgroundColorStops' => array(array(0,'rgb(217, 217, 217)'),array(1,'rgb(255, 255, 255)')),

                    )
            );

        $series = $this->HighCharts->addChartSeries();

        $series->addName('Browser Share')
            ->addData($pieData);

        $pieChart->addSeries($series);
    }


}
