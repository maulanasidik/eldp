<?php
class UploadsController extends AppController {

	var $name = 'Uploads';
	//var $components = array('RequestHandler'); 

	
	
	

	
	//var $helpers = array('Html', 'Form');
	//var $components = array('Filter');
	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->set('ModelActive','Photo');
	    $this->set('controllerActive','photos');
	    $this->set('controllerActiveId',6);
	    //$this->set('menuTab', 'Ebooks');
	    //$this->set('menuTabChild', 'Ebooks');
	    //$this->Auth->allow('download');
	}
	

}
?>