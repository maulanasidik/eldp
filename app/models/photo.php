<?php
class Photo extends AppModel {

	var $name = 'Photo';
	
	var $belongsTo = array(
		'Pelajaran' => array(
	      'className' => 'Pelajaran',
	      'foreignKey'=> 'matapelajaran'
	   	),
		/*'User' => array(
		 'className' => 'User',
		 'foreignKey'=> 'author'
		),*/
		'Category' => array(
		 'className' => 'Category',
		 'foreignKey'=> 'category_id'
		),
		
	);

	var $hasMany = array(
		'Upload' => array(
	      'className' => 'Upload',
	      'foreignKey'=> 'photo_id'
	   	),
	);

}
?>