<?php
class User extends AppModel {
var $name = 'User';


/*var $validate = array(
'username' => array(
'notempty' => array(
'rule' => array('minLenght', 1),
'required' => true,
'allowEmpty' => false,
'message' => 'User name cannot be empty'
),
'unique' => array(
'rule' => array('checkUnique', 'username'),
'message' => 'User name taken. Use another'
)
),
'password' => array(
'notempty' => array(
'rule' => array('minLenght', 1),
'required' => true,
'allowEmpty' => false,
'message' => 'Password cannot be empty.'
),
'passwordSimilar' => array(
'rule' => 'checkPasswords',
'message' => 'Different password re entered.'
)
),
'email' => array(
'rule' => 'email',
'required' => true,
'allowEmpty' => false,
'message' => 'Please enter a valid email'
)
);*/

	var $hasMany = array(
		'Comment' => array(
	      'className' => 'Comment',
	      'foreignKey'=> 'user_id'
	   	),

	   	'Rent' => array(
	      'className' => 'Rent',
	      'foreignKey'=> 'user_id'
	   	),
	);

	var $belongsTo = array(
		'Group' => array(
	      'className' => 'Group',
	      'foreignKey'=> 'group_id'
	   	),
		
	);

	
	function checkPasswords($data) {
		if($data['password'] == $this->data['User']
		['password2hashed'])
		return true;
		return false;
	}
	function checkUnique($data, $fieldName) {
		$valid = false;
		if(isset($fieldName) && $this->hasField($fieldName)) {
			$valid = $this->isUnique(array($fieldName => $data));
		}
		return $valid;
	}


	/**
	 * Checks User data is valid before allowing access to system
	 * @param array $data
	 * @return boolean|array
	 */
	function check_user_data($data) {
		// init
		$return = FALSE;

		// find user with passed username
		$conditions = array(
			'User.username'=>$data['User']['username'],
			'User.group_id'=>array(1,2,3)
		);
		$user = $this->find('first',array('conditions'=>$conditions));

		// not found
		if(!empty($user)) {
			$salt = Configure::read('Security.salt');
			
			// check password
			if($user['User']['password'] == md5($data['User']['password'].$salt)) {
				$return = $user;
			}
		}

	return $return;
	}
}
?>