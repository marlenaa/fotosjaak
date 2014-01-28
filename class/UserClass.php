<?php
 require_once("MySqlDatabaseClass.php");

 class UserClass
 {
         // Fields
         private $id;
        private $firstname;
        private $infix;
        private $surname;
        private $address;
        private $addressnumber;
        private $city;
        private $zipcode;
        private $country;
        private $phonenumber;
        private $mobile_phonenumber;
        
        //properties
        public function getId()                        { return $this->id; }
        public function getFirstname()        { return $this->firstname; }
        public function getInfix()                { return $this->infix; }
        public function getSurname()        { return $this->surname; }
        public function getAddress()        { return $this->address; }
        public function getAddressnumber(){ return $this->addressnumber; }
        public function getCity()                { return $this->city; }
        public function getZipcode()        { return $this->zipcode; }
        public function getCountry()                { return $this->country; }
        public function getPhonenumber(){ return $this->phonenumber; }
        public function getMobile_phonenumber(){ return $this->mobile_phonenumber; }
        
        // Constructor
        public function __construct()
        {
                
        }
        
        public static function find_by_sql($query)
        {
                global $database;
                
                $result = $database->fire_query($query);
                
                $object_array = array();
                
                while ($row = mysql_fetch_array($result))
                {
                        $object = new UserClass();
                        
                        $object->id                                        = $row['id'];
                        $object->firstname                        = $row['firstname'];
                        $object->infix                                = $row['infix'];
                        $object->surname                        = $row['surname'];
                        $object->address                        = $row['address'];
                        $object->addressnumber                = $row['addressnumber'];
                        $object->city                                = $row['city'];
                        $object->zipcode                        = $row['zipcode'];
                        $object->country                        = $row['country'];
                        $object->telephonenumber        = $row['phonenumber'];
                        $object->mobilephonenumber        = $row['mobile_phonenumber'];
                        
                        $object_array[] = $object;                        
                }
                return $object_array;
        }
        
        public static function insert_into_userClass($postarray, $id)
        {
                global $database;
                
                $query = "INSERT INTO `user` (`id`,
                                                                          `firstname`,
                                                                          `infix`,
                                                                          `surname`,
                                                                          `address`,
                                                                          `addressnumber`,
                                                                          `city`,
                                                                          `zipcode`,
                                                                          `country`,
                                                                          `phonenumber`,
                                                                          `mobile_phonenumber`)
                                  VALUES                         ('".$id."',
                                                                            '".$postarray['firstname']."',
                                                                            '".$postarray['infix']."',
                                                                          '".$postarray['surname']."',
                                                                          '".$postarray['address']."',
                                                                          '".$postarray['addressnumber']."',
                                                                          '".$postarray['city']."',
                                                                          '".$postarray['zipcode']."',
                                                                          '".$postarray['country']."',
                                                                          '".$postarray['phonenumber']."',
                                                                          '".$postarray['mobile_phonenumber']."')";
                                                                          
                $database->fire_query($query);                
        }
        
        public static function find_firstname_infix_surname()
        {                        
                $query = "SELECT *
                                  FROM `user`
                                  WHERE `id` = '".$_SESSION['id']."'";
                $result = self::find_by_sql($query);
                $user = array_shift($result);
                return $user;        
        }
        
 }
?>