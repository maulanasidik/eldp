<?php
class SubjectsController extends AppController {

	var $name = 'Subjects';
	//var $components = array('RequestHandler'); 

	var $helpers = array('Html', 'Form','Excerpt','Magick');
	var $paginate = array('order'=>array('Subject.created'=>'DESC'),'limit'=>'12'); 

	
	//var $helpers = array('Html', 'Form');
	//var $components = array('Filter');
	function beforeFilter() {
	    parent::beforeFilter(); 
	    //$this->set('menuTab', 'Subjects');
	    //$this->set('menuTabChild', 'Subjects');
	    //$this->Auth->allow('download');
	    $this->set('ModelActive','Subject');
	    $this->set('controllerActive','subjects');
	    $this->set('controllerActiveId',4);
	}
	

	function index(){
		$this->Subject->recursive = 0;

		$actionactive = $this->params['action'];
		
		$favoriteurl=$this->params['url']['favorite']; //get keyword from querystring//

		if( $favoriteurl == 'true'){
			
			$conditions  = array('Subject.favorite'=>1);
			$books = $this->paginate($conditions); 
			$this->set('books',$books);
			$conditions = array('Category.tipe'=>6);
			$categoriesList = $this->Subject->Category->find('all',array('conditions'=>$conditions));
			$this->set('categoriesList',$categoriesList);
			$this->set('favoriteactive','true');
		}else{

			$books = $this->paginate(); 
			$this->set('books',$books);
			$conditions = array('Category.tipe'=>6);
			$categoriesList = $this->Subject->Category->find('all',array('conditions'=>$conditions));
			$this->set('categoriesList',$categoriesList);
			$this->set('favoriteactive','false');

		}

		$this->set('actionactive',$actionactive);
		
	}

	function favorite(){
		$this->Subject->recursive = 0;
		$conditions  = array('Subject.favorite'=>1);
		$books = $this->paginate($conditions); 
		$this->set('books',$books);
		$conditions = array('Category.tipe'=>6);
		$categoriesList = $this->Subject->Category->find('all',array('conditions'=>$conditions));
		$this->set('categoriesList',$categoriesList);
		$this->set('favoriteactive','true');
		
	}

	function showcategory($id=null){

		$this->Subject->recursive = 0;

		$actionactive = $this->params['action'];

		$activecat = $this->params['pass'][0];
		
		$favoriteurl=$this->params['url']['favorite']; //get keyword from querystring//

		if( $favoriteurl == 'true'){
			
			$conditions  = array('Subject.category_id'=>$id,'Subject.favorite'=>1);
			$books = $this->paginate($conditions); 
			$this->set('books',$books);
			
			$this->set('favoriteactive','true');
		}else{

			$conditions  = array('Subject.category_id'=>$id);
			$books = $this->paginate($conditions); 
			$this->set('books',$books);

			$this->set('favoriteactive','false');

		}

		$conditions = array('Category.tipe'=>6);
		$categoriesList = $this->Subject->Category->find('all',array('conditions'=>$conditions));
		
		$this->set('categoriesList',$categoriesList);
		$activecatname = $this->Subject->Category->read(null,$activecat);

		$this->set('actionactive',$actionactive);
		$this->set('activecat',$activecat);
		$this->set('activecatname',$activecatname);
		
		$this->render('index');
	}



	function search(){

		$this->Subject->recursive = 0;

		$keyword=$this->params['url']['keyword']; //get keyword from querystring//

		$actionactive = $this->params['action'];

		$activecat = $this->params['pass'][0];
		
		$favoriteurl=$this->params['url']['favorite']; //get keyword from querystring//

		if( $favoriteurl == 'true'){
			
			$conditions = array(
				'Subject.favorite'=>1,
				'OR'=>array("Subject.title LIKE '%$keyword%'")  
			);
			
			$books = $this->paginate($conditions); 
			$this->set('books',$books);
			
			$this->set('favoriteactive','true');
		}else{

			$conditions = array(
				
				'OR'=>array("Subject.title LIKE '%$keyword%'")  
			);
			$books = $this->paginate($conditions); 
			$this->set('books',$books);

			$this->set('favoriteactive','false');

		}

		$conditions = array('Category.tipe'=>6);
		$categoriesList = $this->Subject->Category->find('all',array('conditions'=>$conditions));
		$this->set('categoriesList',$categoriesList);
		$activecatname = $this->Subject->Category->read(null,$activecat);

		$this->set('actionactive',$actionactive);
		$this->set('activecat',$activecat);
		$this->set('activecatname',$activecatname);
		
		$this->render('index');
	}

	function admin_listcd(){
		$this->Subject->recursive = 0;

		$this->paginate = array(
	        
	        'limit' => 10,
	        'order'=>array('Subject.created'=>'DESC')
	    );
	    $entry = $this->paginate('Subject');
	    //$this->set(compact('data'));


		
		$this->set('entry',$entry);

		$this->set('actionActive','entry');
		$this->layout = 'default_blank';
	}

	function bookcategory(){
		$this->Category->recursive = 0;
		$bookcategory = $this->Subject->Category->find('all');
		$this->set('bookcategory',$bookcategory);
		$this->layout = 'default_blank';
	}

	




	function admin_showfavorite(){
		$this->Subject->recursive = 0;

		$this->paginate = array(
	        'conditions'=>array('Subject.favorite'=>1),
	        'limit' => 10,
	        'order'=>array('Subject.created'=>'DESC')
	    );
	    $entry = $this->paginate('Subject');
	    //$this->set(compact('data'));


		
		$this->set('entry',$entry);

		$this->set('actionActive','showfavorite');
		$this->render('admin_listcd','ajax');

		
	}

	function admin_view($id){
		$this->Subject->recursive=0;
		$entry=$this->Subject->read(null,$id);
		$this->set('entry',$entry);
		$this->layout = 'default_blank';

	}

	function admin_viewsingle($id){
		$this->Subject->recursive=0;
		$entry=$this->Subject->read(null,$id);
		$this->set('entry',$entry);
		$this->layout = 'default_blank';

	}

	

	function ebooks() {
		$this->Subject->recursive = 2;
		
		$ebooks = $this->Subject->find('all');
		$this->set('ebooks',$ebooks);
	    $listCategory = $this->Subject->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.type'=>1)));
		$this->set(compact('listCategory'));
		
	}

	/*function search(){
		$keyword=$this->params['url']['keyword']; //get keyword from querystring//
		//used simpme or condition with singe value checking
		//replace ModelName with actual name of your Appmodel
		$cond=array('OR'=>array("Subject.title LIKE '%$keyword%'","Subject.penerbit LIKE '%$keyword%'", "Subject.pengarang LIKE '%$keyword%'","Subject.details LIKE '%$keyword%'")  );

		$ebooks = $this->Subject->find('all',array('conditions'=>$cond,'order' => array('Subject.created' => 'DESC')));
		$this->set(compact('ebooks'));
		$this->layout = 'default_blank';

	}*/

	function video() {
		$this->Subject->recursive = 2;
		
		
		$this->set('Subjects', $this->paginate());
		
		
		if($this->Auth->user('group_id')==3){
		$SubjectsMurid = $this->Subject->find('all');
		$this->set(compact('SubjectsMurid'));
		
		}
		
		
	}
	function find_category($id = null ) {
		$this->Subject->recursive = 2;
		if ($id == 'empty'){
			$ebooks = $this->Subject->find('all',array('order' => array('Subject.created' => 'DESC')));	
		}else{
			$conditions = array('Subject.category_id'=>$id);
			$ebooks = $this->Subject->find('all',array('conditions'=>$conditions,'order' => array('Subject.created' => 'DESC')));
		}
		$this->set(compact('ebooks'));
		$this->layout = 'default_blank';

		//$this->render('find_category','ajax');
	}

	function find_category_video($id = null ) {
		$this->Subject->recursive = 2;
		$conditions = array('Subject.type'=>$id);
		$ebooks = $this->Subject->find('all',array('conditions'=>$conditions));
		$this->set(compact('ebooks'));
		//6 for BSE
		//7 for BSE Non kemendiknas
		//8 for cahracterbulding
		//9 for lifeskill
		//10 for computer
		//11 for fiksi
		//12 video Dokumenter Sejarah Indonesia
		//13 video IPTEK
		//14 video Life Skill
		//15 video Carachter Building


		$this->render('find_category_video','ajax');
	}

	function view_thumb($id=null){

		if (!$id) {
			$this->Session->setFlash(__('Invalid Subject.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Subject', $this->Subject->read(null, $id));
		$this->render('view_thumb','ajax');
	}
	function view_thumb_video($id=null){

		if (!$id) {
			$this->Session->setFlash(__('Invalid Video.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Subject', $this->Subject->read(null, $id));
		$this->render('view_thumb_video','ajax');
	}

	function lifeskill() {
		$this->Subject->recursive = 2;
		$conditions = array('Subject.type'=>4);
		$eboks = $this->Subject->find('all',array('conditions'=>$conditions));
		$this->set(compact('eboks'));
	}

	function carachter() {
		$this->Subject->recursive = 2;
		$conditions = array('Subject.type'=>5);
		$eboks = $this->Subject->find('all',array('conditions'=>$conditions));
		$this->set(compact('eboks'));
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Subject.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('ebook', $this->Subject->read(null, $id));
		$this->layout = 'default_ebook';
	}

	function view_video($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Subject.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('Subject', $this->Subject->read(null, $id));
	}
	
	function find() {
		$this->Subject->recursive = 0;
	    $filter = $this->Filter->process($this);
	    $this->set('Subjects', $this->paginate(null, $filter));
	    $listMataPelajaran = $this->Subject->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));
	    //$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
	    $listGuru = $this->Subject->User->find('list',array('fields'=>'User.nama','conditions'=>array('User.group_id'=>array(1,2))));
	    
	    /*$listTahunAjaran = $this->Subject->PasTahunAjaran->find('list',array('fields'=>'PasTahunAjaran.tahun','order'=>'PasTahunAjaran.id DESC'));*/
	    //$this->set(compact('assets', $this->paginate()));
	    $this->set(compact('listMataPelajaran','listGuru','listTahunAjaran'));
	    $this->set('menuTabChild', 'SubjectFind');
	}

	function _upload_cover() {
	// init
	$image_ok = TRUE;
	
		// if a file has been added
		if($this->data['File']['image1']['error'] != 4) {
			// try to upload the file
			$result = $this->upload_files('img', $this->data['File']);

			// if there are errors
			if(array_key_exists('errors', $result)) {
				// set image ok to false
				$image_ok = FALSE;
				// set the error for the view
				$this->set('errors', $result['errors']);
			} else {
				// save the url
				$this->data['Subject']['cover'] = $result['urls'][0];
			}
		}

	return $image_ok;
	}







	function admin_add() {
		$status = "false";

		$this->Subject->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Sequence' => array(
		             'className' => 'Sequence',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);


		$sequence = $this->Subject->find('first',array('conditions'=>array('Sequence.pustaka'=>'cd')));
		
		$lastidtoinsert_id = $sequence['Sequence']['value'];
		$idsequence = $sequence['Sequence']['id'];
		(string)$lastidtoinsert_id;

		$lastidtoinsert_id2 = '0600'.$lastidtoinsert_id;	

		if (!empty($this->data)) {
			
			$this->data['Subject']['author'] = 1;
			$this->data['Subject']['type'] = 1;
			$typeSubmitted = $this->data['Subject']['type'];
			
			
			// check for image
			//$image_ok = $this->_upload_cover();

			$this->data['Subject']['tahun'] = $this->data['Subject']['tahunBerdiri']['year'];
			$this->data['Subject']['id_pustaka']= $lastidtoinsert_id2;

			$image_ok = $this->_upload_cover();

			$this->Subject->create();

			if ($this->Subject->save($this->data)) {
				$status = "true";
				$lastID  = $this->Subject->getInsertID();


				

				if ($this->data['Subject']['zipfile']) {

					
					$name = $this->data['Subject']['title'];
					$idpustaka = $this->data['Subject']['id_pustaka'];
					$lastID  = $this->Subject->getInsertID();


					$file = new File($this->data['Subject']['zipfile']['tmp_name']);
					
					$foldertounzip  = WWW_ROOT.DS.'files'.DS.'cd'.DS.$lastID;
					$foldertoupload  = WWW_ROOT.DS.'files'.DS.'cd'.DS.$lastID.DS.'CD-'.$idpustaka.'.zip';

					$data = $file->read();
					$file->close();

					$file = new File($foldertoupload,true);
					$file->write($data);
					$file->close();
					// do unzip file

					//delete folder first
					$file = new Folder($foldertounzip);
					//$file->write();

					$zip = new ZipArchive;
				     $res = $zip->open($foldertoupload);

				     $path = 'files/cd/'.$lastID.'/';

					$record = $this->Subject->read(null, $lastID);
					$this->Subject->saveField('folder_name', $path);
				     if ($res === TRUE) {
				         $zip->extractTo($foldertounzip);
				         $zip->close();
				         $status = 'true';
				         $flashMessage = 'Berhasil Mengupload Pustaka Multimedia';


						$sequence = $this->Subject->Sequence->read(null, $idsequence);
						$current=$sequence['Sequence']['value']+1;
						$this->Subject->Sequence->saveField('value',$current);

				        //$this->Session->setFlash('Berhasil Mengupload data','flash_success');
				        $this->redirect(array('action'=>'add_responses',$lastID,$status,$flashMessage));
						
				     } else {
				     	$status = 'false';
				        $flashMessage = 'Tidak Berhasil Mengupload Pustaka Multimedia';
				        //$this->Session->setFlash('Tidak Berhasil Mengupload data','flash_erorr');
						$this->redirect(array('action'=>'add_responses',$lastID,$status,$flashMessage));
				     }

				    
						
					//}
				}
				
				
				
				
			} else {
				$status = 'false';
				$flashMessage = 'Tidak Berhasil Mengupload Pustaka Multimedia';
				$this->redirect(array('action'=>'add_responses',$lastID,$status,$flashMessage));
				/*$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'index'));*/
			}
		}
		
		
		$conditions = array('Category.tipe'=>6);
		$listCategory = $this->Subject->Category->find('list',array('fields'=>'Category.name','conditions'=>$conditions));
		
		//$fieldsKelas = 'PasRombel.KETERANGAN,PasRombel.ID_RUANG_KELAS';
		/*$listKelas = $this->Subject->PasRombel->find('list',array('fields'=>'PasRombel.nama','conditions'=>array('tahun_ajaran_id'=>$this->Session->read('tahunAjaran'))));*/
		$this->set(compact('listMataPelajaran','status','listCategory'));

		$lastidtoinsert = $this->Subject->find('first',array('order'=>array('Subject.id'=>'DESC')));
		
		//$lastidtoinsert_id = $lastidtoinsert['Subject']['id'];

		

		$this->layout = 'default_blank';
	}



	

	function admin_add_responses($id,$status,$flashMessage){
		if (!$id && !$status && !$flashMessage) {
			$this->Session->setFlash(__('Invalid Subject.', true));
			$this->redirect(array('action'=>'index'));
		}

		$this->set('entry', $this->Subject->read(null, $id));
		$this->set(compact('status','flashMessage'));
		$this->layout = 'default_blank';
	}

	function admin_edit() {
		//type 1 for ebook 2 for video
		
		if (!empty($this->data)) {

			$this->data['Subject']['author'] = 1;
			$this->data['Subject']['type'] = 1;
			$typeSubmitted = $this->data['Subject']['type'];
			
			// check for image
			
			$image_ok = $this->_upload_cover();
			

			$this->data['Subject']['tahun'] = $this->data['Subject']['tahunBerdiri']['year']; 

			
			if ($this->Subject->save($this->data)) {


				if (!empty($this->data['Subject']['zipfile'])) {

					
					$name = $this->data['Subject']['title'];
					$idpustaka = $this->data['Subject']['id_pustaka'];
					$lastID  = $this->data['Subject']['id'];
					

					//delete first
					$directory = WWW_ROOT.DS.'files'.DS.'cd'.DS.$lastID;
					$this->_delete_recursive($directory);

					

					$file = new File($this->data['Subject']['zipfile']['tmp_name']);
					
					$foldertounzip  = WWW_ROOT.DS.'files'.DS.'cd'.DS.$lastID;
					$foldertoupload  = WWW_ROOT.DS.'files'.DS.'cd'.DS.$lastID.DS.'CD-'.$idpustaka.'.zip';

					
					

					$data = $file->read();
					$file->close();

					$file = new File($foldertoupload,true);
					$file->write($data);
					$file->close();
					// do unzip file

					//delete folder first
					$file = new Folder($foldertounzip);
					//$file->write();

					$zip = new ZipArchive;
				     $res = $zip->open($foldertoupload);

				     $path = 'files/cd/'.$lastID.'/';

					$record = $this->Subject->read(null, $lastID);
					$this->Subject->saveField('folder_name', $path);
				     if ($res === TRUE) {
				         $zip->extractTo($foldertounzip);
				         $zip->close();
				         $status = 'true';
				         $flashMessage = 'Berhasil Mengupload Pustaka Multimedia';
				        //$this->Session->setFlash('Berhasil Mengupload data','flash_success');
				        $this->redirect(array('action'=>'edit_responses',$lastID,$status,$flashMessage));
						
				     } else {
				     	$status = 'false';
				        $flashMessage = 'Tidak Berhasil Mengupload Pustaka Multimedia';
				        //$this->Session->setFlash('Tidak Berhasil Mengupload data','flash_erorr');
						$this->redirect(array('action'=>'edit_responses',$lastID,$status,$flashMessage));
				     }

				    
						
					//}
				}else{

					$status = "true";
					$flashMessage = "Berhasil Mengedit Data";
					$idtoResponse  = $this->data['Subject']['id'];
					$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
				}

				
				//$this->Session->setFlash('Berhasil Menghapus','flash_success');
				//$this->redirect(array('action'=>'index'));
				

			} else {

				$status = "false";
				$flashMessage = "Tidak Berhasil Mengedit Data";
				$idtoResponse = 0;
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
				//$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				//$this->redirect(array('action'=>'index'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Subject->read(null, $id);
		}



		$this->set('entry', $this->Subject->read(null, $id));
		//$listMataPelajaran = $this->Subject->Pelajaran->find('list',array('fields'=>'Pelajaran.nama'));


		$listCategory = $this->Subject->Category->find('list',array('fields'=>'Category.name','conditions'=>array('Category.tipe'=>6)));
		$this->set(compact('listCategory'));
		//$this->set(compact('listMataPelajaran','tipe'));

		//$this->set(compact('status','flashMessage','idtoResponse'));

		$this->layout = 'default_blank';
	}


	function admin_edit_responses($id,$status,$flashMessage){
		
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid Subject.', true));
			$this->redirect(array('action'=>'index'));
		}

		$this->set('entry', $this->Subject->read(null, $id));
		$this->set(compact('status','flashMessage'));
		$this->layout = 'default_blank';

		
	}

	function admin_delete($id = null) {
		$status = "false";
		$flashMessage = "";
		$idtodelete = "";
		if (!$id) {
			$status = "false";
			$flashMessage = "Tidak Berhasil Menghapus";
			$idtodelete = "";

			

			//$this->Session->setFlash('Tidak Berhasil Menghapus','flash_erorr');
			//$this->redirect(array('action'=>'index'));
		}
		if ($this->Subject->del($id)) {

			$directory = WWW_ROOT.DS.'files'.DS.'cd'.DS.$id;
			$this->_delete_recursive($directory);

			//$directory = WWW_ROOT.'files'.DS.'ebooks'.DS.$id;
			//$this->_delete_recursive($directory);

			$status = "true";
			$flashMessage = "Berhasil Menghapus";
			$idtodelete = $id;
			//$this->Session->setFlash('Berhasil Menghapus','flash_success');
			//$this->redirect(array('action'=>'index'));

		}
		$this->set(compact('status','flashMessage','idtodelete'));
		$this->layout = 'default_blank';
		
	}


	

	function download() {
		
		$titlename=$this->params['url']['titlename']; //get keyword from querystring//
		$handle=$this->params['url']['foldername']; //get keyword from querystring//

		
		

		$this->force_download($titlename,'files/cd/'.$titlename.'.zip');
		$this->autoRender = false;

		//return true;

		//$this->set('filename',$titlename);

	}


	function admin_do_favorite(){
		if (!empty($this->data)) {
			
			
			$idbuku = $this->data['CDFav']['id'];
			$action = $this->data['CDFav']['action'];

			$bukuonselect = $this->Subject->read(null, $idbuku);
			$current=$bukuonselect['Subject']['favorite']=$action;
			//$do_update = ;
			$this->Subject->saveField('favorite',$current);
			
			if ($this->Subject->saveField('favourite',$current)) {
				
				$status = "false";
				if($action ==1){
					$flashMessage = "Berhasil Menjadikan favourite";
				}else{
					$flashMessage = "Berhasil Membuang dari favourite";
				}
				$this->redirect(array('action'=>'admin_edit_responses',$idbuku,$status,$flashMessage));

			} else {
				$status = "true";
				if($action ==1){
					$flashMessage = "Tidak Berhasil Menjadikan favourite";
				}else{
					$flashMessage = "Tidak Berhasil Membuang dari favourite";
				}
				$this->redirect(array('action'=>'admin_edit_responses',$idbuku,$status,$flashMessage));
			}
			
			
		}
	
	}


	function cd(){
		$this->Subject->recursive = 0;
	}



	function admin_search(){

		$this->Subject->recursive = 2;

		$keyword=$this->data['Subject']['keyword']; //get keyword from querystring//

		//$actionactive = $this->params['action'];

		//$activecat = $this->params['pass'][0];

		//$favoriteurl=$this->params['url']['favorite']; //get keyword from querystring//




		$conditions = array(
		  
		  'OR'=>array("Subject.id_pustaka LIKE '%$keyword%'","Subject.title LIKE '%$keyword%'","Subject.penerbit LIKE '%$keyword%'","Subject.tahun LIKE '%$keyword%'", "Subject.details LIKE '%$keyword%'")  
		);
		$entry = $this->Subject->find('all',array('conditions'=>$conditions)); 
		$this->set('entry',$entry);


		$this->render('admin_listcd','ajax');
		//$this->layout = 'default_blank';
  	}


  	function admin_printall(){
		$this->Subject->recursive=2;
		$entry=$this->Subject->find('all');
		$this->set('entry',$entry);
		$this->layout = 'default_print';
	}


	



}
?>