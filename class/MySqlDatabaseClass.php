<?php
	require_once('config/config.php');
	class MySqlDatabaseClass
	{
						//fields
		private $db_connection;
		
						//constructor heet altijd __contruct
		public function __construct()
		{
						//fields roep je aan met "$this->(naamzonder$)"
			$this->db_connection = mysql_connect(SERVERNAME,
												USERNAME,
												PASSWORD);
						//er word een database geselecteerd
			mysql_select_db(DATABASE, $this->db_connection) or die ('MySqlDatabaseClass, database niet geselecteerd');
		}
	
	//deze functie mkrijg je als argument mee
	public function fire_query($query)
	{
	$result = mysql_query($query) or die ('MySqlDatabase:' .mysql_error());
	return $result;
	}
	}
	$database = new MySqlDatabaseClass();
	
	
?>