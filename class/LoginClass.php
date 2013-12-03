<?php
	require_once("MySqlDatabaseClass.php");
	
	//hieronder de classDefinitie van de LoginClass
	class LoginClass
	{
		//fields
		private $id;
		private $email;
		private $passwords;
		private $userrole;
		private $activated;
		private $activationdate;
		
		//properties
		public function get_id()
		{
			return $this->id;
		}
		public function get_email()
		{
			return $this->email;
		}
		public function get_password()
		{
			return $this->password;
		}
		public function get_userrole()
		{
			return $this->userrole;
		}
		public function get_activated()
		{
			return $this->activated;
		}
		public function get_activationdate()
		{
			return $this->activationdate;
		}
		//constructor
		public function __contruct()
		{
			
			
		}
		public static function Find_by_sql($query)
		{
			//met global maak je het database-object uit de mysqldatabaseclass bruikbaar binnen de find_by_sql methode
			global $database;
			//vuur de query af op de database
			$result = $database->fire_query($query);
			//dit is het array waar alle loginclass objecten in worden gestopt elk loginclass object bevat 1 record uit de database
			//vind de query 3 records dan zitten er 3 loginclass objecten in. het array $object_array
			$object_array = array ();
			
			while ($row = mysql_fetch_array($result))
			{
				//maak iedere while ronde een loginclassobject aan.
				$object = new LoginClass();
				//stop per record ieder databaseveld in het loginclassobject veld
				$object->id 			= $row['id'];
				$object->email 			= $row['email'];
				$object->password 		= $row['password'];
				$object->userrole 			= $row['userrole'];
				$object->activated 		= $row['activated'];
				$object->activationdate = $row['activationdate'];
				//stop het net gemaakte loginclassobject in het $object array.
				$object_array [] = $object;
			}
			return $object_array;
		}
	public static function email_exists($emailadress)
	{
			global $database;
		$query = "SELECT * FROM `login` WHERE `email` = '".$emailadress."'";
		$result = $database->fire_query($query);
		if (mysql_num_rows($result) > 0)
		{
			return "ja";
		}
		else
		{
			return "nee";
		}
		
	}
		
	}
	
?>