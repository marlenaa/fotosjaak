<?php

	class SessionClass
	{
		//fields
		private $id;
		private $email;
		private $userrole;
		private $logged_in;
		
		//constructor
		public function __construct()
		{
			
		}
		
		public function login($userObject)
		{
			$this->id = $_SESSION['id'] = $userObject->get_id();
			$this->email = $_SESSION['email'] = $userObject->get_email();
			$this->userrole = $_SESSION['userrole'] = $userObject->get_userrole();
			$this->logged_in = true;
		}
		
		public function logout()
		{
			//de functie session_destriy vernietigd alle session variabelen zoals $_SESSION['id'] , enz...
			session_destroy();
			unset($this->id);
			unset($this->email);
			unset($this->userrole);
			$this->logged_in = false;
		}
		
	}
	$session = new SessionClass();
?>
