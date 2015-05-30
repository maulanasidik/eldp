<?php
class UsersController extends AppController {
var $name = 'Users';
//var $components = array('Auth');


function beforeFilter(){
	//tambah patch
	parent::beforeFilter();
	//$this->Auth->allow('login');
	
}

	function signup(){
	if (!empty($this->data)) {
		if(isset($this->data['User']['password2']))
			$this->data['User']['password2hashed'] = $this->Auth->password($this->data['User']['password2']);
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash('Selamat anda telah terdaftar');
				$this->redirect(array('controller' => 'users',
				'action'=>'home'));
			} else {
				$this->Session->setFlash('There was an error signing
				up. Please, try again.');
				$this->data = null;
			}
		}
	}

	//tambah patch
	/**
	 * Logs in a User
	 */
	function login() {
		//$salt = Configure::read('Security.salt');
		//echo md5('password'.$salt);

		// redirect user if already logged in
		if( $this->Session->check('User') ) {
			$this->redirect(array('controller'=>'users','action'=>'index','admin'=>true));
		}

		if(!empty($this->data)) {
			// set the form data to enable validation
			$this->User->set( $this->data );
			// see if the data validates
			if($this->User->validates()) {
				// check user is valid
				$result = $this->User->check_user_data($this->data);

				if( $result != FALSE ) {
					// update login time
					$this->User->id = $result['User']['id'];
					//$this->User->saveField('last_login',date("Y-m-d H:i:s"));
					// save to session
					$this->Session->write('User',$result);
					//$this->Session->setFlash(__('You have successfully logged in', true));
					//$this->Session->setFlash('');
					$this->redirect(array('controller'=>'users','action'=>'index','admin'=>true));
				} else {
					$this->Session->setFlash(__('Username atau password yang anda masukkan salah', true));
					
				}
			}
		}
		$this->layout='default_login';
	}


	/**
	 * Logs out a User
	 */
	function logout() {
		if($this->Session->check('User')) {
			$this->Session->delete('User');
			$this->Session->setFlash(__('Anda berhasil logout', true));
			
		}
		$this->Session->setFlash(__('Anda berhasil logout', true));
		$this->redirect(array('action'=>'login'));
	}

	//end patch

	function index(){
		$this->recursive = 2;
		$this->User->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Book' => array(
		             'className' => 'Book',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);
		$totalbook  = $this->User->Book->find('count');
		$this->set('totalbook',$totalbook);

		$this->User->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Video' => array(
		             'className' => 'Video',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);
		$totalvideo  = $this->User->Video->find('count');
		$this->set('totalvideo',$totalvideo);


		$this->User->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Audio' => array(
		             'className' => 'Audio',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);
		$totalaudio  = $this->User->Audio->find('count');
		$this->set('totalaudio',$totalaudio);

		$this->User->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Ebook' => array(
		             'className' => 'Ebook',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);
		$totalebook = $this->User->Ebook->find('count');
		$this->set('totalebook',$totalebook);


		$this->User->bindModel(
			array('belongsTo' =>
				array(
					'Notification' => array(
						'className' => 'Notification',
						'foreignKey'=> ''
					 )
					)
				)
			);

		
		$notifclientcondition = array(
			'Notification.active'=>1,
			'Notification.publish_date <= '=> date('Y-m-d', strtotime("now")),
			'Notification.expiration_date >=' => date('Y-m-d', strtotime("now"))
		);
		
		$notifclient = $this->User->Notification->find('all',array('conditions'=>$notifclientcondition,'order' => array('Notification.created' => 'DESC')));
		$this->set('notifclient', $notifclient);

		$this->User->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Banner' => array(
		             'className' => 'Banner',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);
		$banner = $this->User->Banner->find('all');
		$this->set('banner',$banner);

		$this->layout='default_home';
	}

	function home(){
	}

	function admin(){
	}

	function change_password() {
		$usersdetect = $this->User->findById($this->_User['User']['id']);
		$passwordchanged = md5($usersdetect['User']['password'].$salt);
		$this->set('passwordchanged',$passwordchanged);
	    if (!empty($this->data)) {
	    		//md5($data['User']['password'].$salt)
	    		$this->data = $this->User->findById($this->_User['User']['id']);
		    	$this->data['User']['password2hashed'] = $this->Auth->password($this->data['User']['password2']);
		        if ($this->User->save($this->data)) {
		            $this->Session->setFlash('Password Telah dirubah.');
		            // call $this->redirect() here
		        } else {
		            $this->Session->setFlash('Password tidak berhasil dirubah.');
		        }
		    
	    } else {
	        
	    }
	}

	function admin_password(){
		
	}

	function admin_index(){

		$this->User->recursive = 0;
		$conditions = array(
			'User.group_id'=>4
			);

		$member = $this->User->find('all');
		$this->set('member',$member);

		$comment = $this->User->Comment->find('all');
		$this->set('comment',$comment);
		

		$this->User->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Ebook' => array(
		             'className' => 'Ebook',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);

		

		$kumpulanEbookFavorite = $this->User->Ebook->find('all'
			,array('conditions'=>array('Ebook.favorite'=>1))
		);

		$this->set('kumpulanEbookFavorite',$kumpulanEbookFavorite);

		$this->User->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Category' => array(
		             'className' => 'Category',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);

		$bookcategory = $this->User->Category->find('all');
		$this->set('bookcategory',$bookcategory);



		$this->User->bindModel(
			array('belongsTo' =>
				array(
					'Notification' => array(
						'className' => 'Notification',
						'foreignKey' => ''
						)
					)
				)
			);

		$notification = $this->User->Notification->find('all');
		$this->set('notification',$notification);


		$rentscondition = array('Rent.tipe'=>3, 'Rent.status'=>1, 'Rent.tgl_booking'=>date('Y-m-d',strtotime('now')));
		$booking = $this->User->Rent->find('count',array('conditions'=>$rentscondition,'order' => array('Rent.modified' => 'DESC')));
		$this->set('booking', $booking);

		$rentscondition = array('Rent.status'=>1,'Rent.tipe'=>1, 'Rent.tgl_kembali'=>date('Y-m-d', strtotime('now')));
		$back = $this->User->Rent->find('count',array('conditions'=>$rentscondition,'order' => array('Rent.modified' => 'DESC')));
		$this->set('back', $back);

		$rentscondition = array('Rent.status'=>1,'Rent.tipe'=>1, 'Rent.tgl_kembali <'=>date('Y-m-d', strtotime('now')));
		$late = $this->User->Rent->find('count',array('conditions'=>$rentscondition,'order' => array('Rent.modified' => 'DESC')));
		$this->set('late', $late);


		$notifcondition = array('Notification.active'=>1, 'Notification.expiration_date >'=>date('Y-m-d', strtotime('now')));
		$notifactive = $this->User->Notification->find('count',array('conditions'=>$notifcondition,'order' => array('Notification.expiration_date' => 'DESC')));
		$this->set('notifactive', $notifactive);


		
		$cur_year =  date('Y');
		$this->set('cur_year',$cur_year);


		$this->set('actionActive','index');
		
		
		$this->layout = 'default_admin';

	}

	/*function admin_login(){
		$this->layout = 'default_login';

	}*/

	function admin_getlivereport(){

		$rentscondition = array('Rent.tipe'=>3, 'Rent.status'=>1, 'Rent.tgl_booking'=>date('Y-m-d',strtotime('now')));
		$booking = $this->User->Rent->find('count',array('conditions'=>$rentscondition,'order' => array('Rent.modified' => 'DESC')));
		$this->set('booking', $booking);

		$rentscondition = array('Rent.status'=>1,'Rent.tipe'=>1, 'Rent.tgl_kembali'=>date('Y-m-d', strtotime('now')));
		$back = $this->User->Rent->find('count',array('conditions'=>$rentscondition,'order' => array('Rent.modified' => 'DESC')));
		$this->set('back', $back);

		$rentscondition = array('Rent.status'=>1,'Rent.tipe'=>1, 'Rent.tgl_kembali <'=>date('Y-m-d', strtotime('now')));
		$late = $this->User->Rent->find('count',array('conditions'=>$rentscondition,'order' => array('Rent.modified' => 'DESC')));
		$this->set('late', $late);
		$this->layout = 'default_blank';
	}



	function admin_landing(){

		$this->User->recursive = 0;


		

		$this->layout = 'default_admin';

		
		



	}

	function member(){
		$this->Member->recursive = 0;
		$member = $this->User->find('all');
		$this->set('member',$member);
		$this->layout = 'default_blank';
	}

	

	function comment(){

		
		$this->Comment->recursive = 0;
		$comment = $this->User->Comment->find('all');
		$this->set('comment',$comment);
		$this->layout = 'default_blank';
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			$lastID ='';
			if ($this->User->save($this->data)) {
				$status = "true";
				$flashmessage = "Member baru berhasil ditambahkan";
				$lastID  = $this->User->getInsertID();
				//$this->set('ebookID', $lastID);
				$this->redirect(array('action'=>'add_responses',$lastID,$status,$flashmessage));
				
			} else {
				$status = "false";
				$flashmessage = "Member baru tidak berhasil ditambahkan, silahkan coba kembali";
				$this->redirect(array('action'=>'add_responses',$lastID,$status,$flashmessage));
				/*$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'index'));*/
			}

		}
		$groupselect = $this->User->Group->find('list');
		$this->set(compact($groupselect));
		$this->layout = 'default_blank';
	}

	function add_responses($id,$status,$flashmessage){
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('numbertoshow',$this->User->find('count'));
		$this->set('user', $this->User->read(null, $id));
		$this->set('flashmessage',$flashmessage);

		$this->layout = 'default_blank';
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid User', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				
				$status = "true";
				$flashMessage = "Berhasil Mengedit Data";
				$idtoResponse = $this->data['User']['id'];
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
				//$this->Session->setFlash('Berhasil Menghapus','flash_success');
				//$this->redirect(array('action'=>'index'));

			} else {
				
				$status = "false";
				$flashMessage = "Tidak Berhasil Mengedit Data";
				$idtoResponse = 0;
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));

			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}

		$this->layout = 'default_blank';
	}


	function edit_responses($id,$status,$flashMessage){
		
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid Ebook.', true));
			$this->redirect(array('action'=>'index'));
		}

		$this->set('user', $this->User->read(null, $id));
		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);
		$this->set('idtoResponse',$id);

		$this->layout = 'default_blank';
	}

	function delete($id = null) {
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
		if ($this->User->del($id)) {
			$status = "true";
			$flashMessage = "Berhasil Menghapus";
			$idtodelete = $id;
			//$this->Session->setFlash('Berhasil Menghapus','flash_success');
			//$this->redirect(array('action'=>'index'));

		}
		$this->set(compact('status','flashMessage','idtodelete'));
		$this->layout = 'default_blank';
		
	}

	function admin_listmembers(){
		$this->User->recursive = 0;
		//$listuser = $this->User->find('all');
		$this->paginate = array(
	        
	        'limit' => 10,
	        'order'=>array('User.created'=>'DESC')
	    );
	    $listuser = $this->paginate('User');
	    //$this->set(compact('data'));

		$this->set('listuser',$listuser);

		$this->set('actionActive','listuser');
		$this->layout = 'default_blank';
	}



	function admin_add() {


		$this->User->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Sequence' => array(
		             'className' => 'Sequence',
		             'foreignKey'=> ''
		         )
		        )
		    )
		);


		$sequence = $this->User->find('first',array('conditions'=>array('Sequence.pustaka'=>'user')));
		
		$lastidtoinsert_id = $sequence['Sequence']['value'];
		$idsequence = $sequence['Sequence']['id'];
		(string)$lastidtoinsert_id;

		$lastidtoinsert_id2 = '0100'.$lastidtoinsert_id;

		

		if (!empty($this->data)) {


			$salt = Configure::read('Security.salt');

			if($this->data['User']['password'] != ''){
				$passwordinput = md5($this->data['User']['password'].$salt);
				$this->data['User']['password'] = $passwordinput;
			}else{
				$this->data['User']['password'] = '';
			}

			
			if(!empty($this->data['File']['image'])){
				$fileOK = $this->uploadFiles('files/users', $this->data['File']);
				if(array_key_exists('urls', $fileOK)) {  
				    // save the url in the form data  
				    $this->data['User']['photo'] = $fileOK['urls'][0];  
				}
				else{
					$this->Session->setFlash(__('Preview photo tidak digunakan.', true));
				}
			
			}

			$this->data['User']['id_member']= $lastidtoinsert_id2;

			$this->User->create();
			if ($this->User->save($this->data)) {
				$status = "true";
				$lastID  = $this->User->getInsertID();

				$sequence = $this->User->Sequence->read(null, $idsequence);
				$current=$sequence['Sequence']['value']+1;
				$this->User->Sequence->saveField('value',$current);

				//$this->set('ebookID', $lastID);
				$this->redirect(array('action'=>'add_responses',$lastID,$status));
				
			} else {
				$lastID = 0;
				$status = "false";
				$this->redirect(array('action'=>'add_responses',$lastID,$status));
				/*$this->Session->setFlash('Data tidak berhasil disimpan, silahkan coba lagi','flash_erorr');
				$this->redirect(array('action'=>'index'));*/
			}
		}
		$groupselect =  $this->User->Group->find('list');
		$this->set(compact('groupselect',$groupselect));

		$this->layout = 'default_blank';



	}

	function admin_add_responses($id,$status){
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid User.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('entry', $this->User->read(null, $id));
		$this->layout = 'default_blank';
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Member', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {

			if(!empty($this->data['File']['image'])){
				$fileOK = $this->uploadFiles('files/users', $this->data['File']);
				if(array_key_exists('urls', $fileOK)) {  
				    // save the url in the form data  
				    $this->data['User']['photo'] = $fileOK['urls'][0];  
				}
				else{
					$this->Session->setFlash(__('Preview photo tidak digunakan.', true));
				}
			
			}

			if ($this->User->save($this->data)) {
				$status = "true";
				$flashMessage = "Berhasil Mengedit Data";
				$idtoResponse = $this->data['User']['id'];
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
			} else {
				$status = "false";
				$flashMessage = "Tidak Berhasil Mengedit Data";
				$idtoResponse = 0;
				$this->redirect(array('action'=>'edit_responses',$idtoResponse,$status,$flashMessage));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$this->set('member', $this->User->read(null, $id));
		$groupselect =  $this->User->Group->find('list');
		$this->set(compact('groupselect',$groupselect));
		$this->layout = 'default_blank';
	}


	function admin_edit_responses($id,$status,$flashMessage){
		
		if (!$id && !$status) {
			$this->Session->setFlash(__('Invalid User.', true));
			$this->redirect(array('action'=>'index'));
		}

		$this->set('entry', $this->User->read(null, $id));
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
		if ($this->User->del($id)) {
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


	function admin_search_home_result(){
		$this->User->recursive = 2;
		$ketik = $this->data['User']['input_id'];
		$member = $this->User->find('first', array('conditions' => array('User.id_member'=>$ketik)));

		$bookingcondition = array('Rent.tipe'=>3,'Rent.status'=>1,'Rent.user_id'=>$member['User']['id']);

		$bookings = $this->User->Rent->find('all',array('conditions'=>$bookingcondition));


		$duetoday = $this->User->Rent->find('all',array('conditions'=>
		array('Rent.user_id'=>$member['User']['id'],'Rent.tipe'=>1,'Rent.status'=>1,array(
		"Rent.tgl_kembali <=" => date('Y-m-d', strtotime("now")))),'recursive'=>0));

		$duemore = $this->User->Rent->find('all',array('conditions'=>
		array('Rent.user_id'=>$member['User']['id'],'Rent.tipe'=>1,'Rent.status'=>1,array(
		"Rent.tgl_kembali >" => date('Y-m-d', strtotime("now")))),'recursive'=>0));

		$this->set(compact('duetoday','duemore'));


		$this->set(compact('member','bookings'));
		$this->layout = 'default_blank';
		
		
	}

	function admin_view($id){
		$this->User->recursive=0;
		$member=$this->User->read(null,$id);
		$this->set('member',$member);
		$this->layout = 'default_blank';

	}

	function admin_search(){

    $this->User->recursive = 2;

    $keyword=$this->data['User']['keyword']; //get keyword from querystring//

    //$actionactive = $this->params['action'];

    //$activecat = $this->params['pass'][0];
    
    //$favoriteurl=$this->params['url']['favorite']; //get keyword from querystring//

    
    

    $conditions = array(
      
      'OR'=>array("User.username LIKE '%$keyword%'","User.name LIKE '%$keyword%'","User.id_member LIKE '%$keyword%'","User.group_id LIKE '%$keyword%'", "Group.name LIKE '%$keyword%'", "User.email LIKE '%$keyword%'")  
    );
    $member = $this->User->find('all',array('conditions'=>$conditions)); 
    $this->set('listuser',$member);

    
    $this->render('admin_listmembers','ajax');
    //$this->layout = 'default_blank';
  }	

  function admin_printall(){
		$this->User->recursive=2;
		$listuser=$this->User->find('all');
		$this->set('listuser',$listuser);
		$this->User->bindModel(
	    	array('belongsTo' =>
		    	array(
				'Profile' => array(
		             'className' => 'Profile',
		             'foreignKey'=> 'Profile'
		         )
		        )
		    )
		);
		$profile=$this->User->Profile->read(null,1);
		$this->set('profile',$profile);
		$this->layout = 'default_print';
	}

	function admin_changepassword(){
		//$this->User->recursive=2;
		//$change=$this->User->find('all');
		//$this->set('change',$change);
		$status = '';
		$flashMessage = '';
		$salt = Configure::read('Security.salt');
		$userLoggedinid = $this->_User['User']['id'];
		$usersdetect = $this->User->read(null, $userLoggedinid);

		$passwordawal = $usersdetect['User']['password'];

		if (!empty($this->data)) {
			
			$input_old_hashed  = md5($this->data['User']['password_old'].$salt);
			$input_new_pass = $this->data['User']['password_new'];
			$input_new_pass2 = $this->data['User']['password_new2'];

			if($input_new_pass == $input_new_pass2){

				if($passwordawal != $input_old_hashed){

					$status = "false";
					$flashMessage = "Pasword lama tidak sesuai";
					//$idtoResponse = 0;
					$this->redirect(array('action'=>'admin_changepassword_response',$status,$flashMessage));

				}else{

					//DO SAVE
					$password = $this->User->read(null, $userLoggedinid);
					$current= md5($input_new_pass.$salt);

					$this->User->saveField('password',$current);

					$status = "true";
					$flashMessage = "Pasword baru berhasil diset";
					//$idtoResponse = 0;

					$this->redirect(array('action'=>'admin_changepassword_response',$status,$flashMessage));

					
					//$this->set('flashMessage',$flashMessage);

				}

			}else{

				$status = "false";
				$flashMessage = "Pasword baru dan konfirmasi password tidak sama";
				//$idtoResponse = 0;
				$this->redirect(array('action'=>'admin_changepassword_response',$status,$flashMessage));

			}


			
			//md5($data['User']['password'].$salt)
			
	        
	        
		    
	    } else {
	        //$status = "false";
			//$flashMessage = "Pasword baru dan konfirmasi password tidak sama";
			//$idtoResponse = 0;
			//$this->redirect(array('action'=>'admin_changepassword_response',$status,$flashMessage));
	    }

	    

		$this->layout = 'default_blank';
	}

	function admin_changepassword_response($status,$flashMessage){
		//$this->User->recursive=2;
		//$change=$this->User->find('all');
		//$this->set('change',$change);
		$salt = Configure::read('Security.salt');
		$usersdetect = $this->User->findById($this->_User['User']['id']);
		$passwordchanged = md5($usersdetect['User']['password'].$salt);
		$this->set('passwordchanged',$passwordchanged);

		$this->set('status',$status);
		$this->set('flashMessage',$flashMessage);

		$this->layout = 'default_blank';
	}


	function admin_barcode_all(){

		
        Configure::write('debug',0); // Otherwise we cannot use this method while developing 

        //$id = intval($id); 

        //$property = $this->__view($id); // here the data is pulled from the database and set for the view 
        //$property ='';

        /*if (empty($property)) 
        { 
            $this->Session->setFlash('Sorry, there is no property with the submitted ID.'); 
            //$this->redirect(array('action'=>'index'), null, true); 
        } */

        
		
		$this->set('users', $this->User->find('all'));
		$this->set('headerprint',false);
		$this->layout = 'pdf'; //this will use the pdf.ctp layout 
        $this->render(); 
	
	}


	function admin_barcode($id){

		
        Configure::write('debug',0); // Otherwise we cannot use this method while developing 
		
		$this->set('user', $this->User->read(null,$id));
		$this->set('headerprint',false);
		$this->layout = 'pdf'; //this will use the pdf.ctp layout 
        $this->render(); 
	
	}


	function checkstatus(){

		$memberid = $this->data['User']['usermemberid'];
		$conditions = array('User.id_member'=>$memberid);
		$users = $this->User->find('first',array('conditions'=>$conditions));
		$this->set('user',$users);
		$userid = $users['User']['id'];


		$booked = $this->User->Rent->find('all',array('conditions'=>
		array('Rent.user_id'=>$userid,'Rent.status'=>1,'Rent.tipe'=>3),'recursive'=>2,'order' => array('Rent.modified ASC')));
		

		$duetoday = $this->User->Rent->find('all',array('conditions'=>
		array('Rent.user_id'=>$userid,'Rent.status'=>1,'Rent.tipe'=>1,array(
		"Rent.tgl_kembali =" => date('Y-m-d', strtotime("now")))),'recursive'=>2,'order' => array('Rent.tgl_kembali ASC')));
		
		$duemore = $this->User->Rent->find('all',array('conditions'=>
		array('Rent.user_id'=>$userid,'Rent.status'=>1,'Rent.tipe'=>1,array(
		"Rent.tgl_kembali <" => date('Y-m-d', strtotime("now")))),'recursive'=>2,'order' => array('Rent.tgl_kembali ASC')));
		
		$notdue = $this->User->Rent->find('all',array('conditions'=>
		array('Rent.user_id'=>$userid,'Rent.status'=>1,'Rent.tipe'=>1,array(
		"Rent.tgl_kembali >" => date('Y-m-d', strtotime("now")))),'recursive'=>2,'order' => array('Rent.tgl_kembali ASC')));


		$total_due_today = count($duetoday);
		$total_due_more = count($duemore);
		$total_not_more = count($notdue);
		$total_booked = count($booked);



		$this->set('total_due_today',$total_due_today);
		$this->set('total_due_more',$total_due_more);
		$this->set('total_not_more',$total_not_more);
		$this->set('total_booked',$total_booked);		

		//$this->set(compact($total_due_today,$total_due_more,$total_due_today));

		$this->layout = 'default_blank';


	
	}


	function historyuser($userid){

		$this->set('user', $this->User->read(null, $userid));
		
		$this_transaction = $this->User->Rent->find('all',array(
			'conditions'=>array(
				'Rent.user_id'=>$userid,
				
				
				
			),
		'recursive'=>2,'order' => array('Rent.tgl_pinjam DESC')));
		
		
		
		$this->set('this_transaction',$this_transaction);

		$this->layout = 'default_blank';


	
	}

}
?>