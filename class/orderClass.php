<?php
 require_once("class/MySqlDatabaseClass.php");
 require_once("class/UserClass.php");
 require_once("class/LoginClass.php");
 
 class OrderClass
 {
         //Fields
         private $order_id;
        private $order_short;
        private $order_long;
        private $deliver_ydate;
        private $event_date;
        private $color;
        private $number;
         
         //Constructor
         public function __construct()
        {
                
        }
         
         public static function find_by_sql($query)
        {                        
                global $database;
                $result = $database->fire_query($query);
                
                $order_object_array = array();
                
                while ( $row = mysql_fetch_array($result))
                {
                        $array_object = new OrderClass();
                        
                        $array_object->order_id                                = $row['order_id'];
                        $array_object->order_short                        = $row['order_short'];
                        $array_object->order_long                        = $row['order_long'];
                        $array_object->delivery_date                 = $row['delivery_date'];
                        $array_object->event_date                         = $row['event_date'];
                        $array_object->color                                = $row['color'];
                        $array_object->number					        = $row['number'];
                        
                        $order_object_array[] = $array_object;                        
                }
                return $order_object_array;        
        }
        
        public static function insert_into_order($post_array)
        {
                global $database;
                
                $query = "INSERT INTO `order` (`order_id`,
                                                                           `user_id`,
                                                                           `order_short`,
                                                                           `order_long`,
                                                                           `delivery_date`,
                                                                           `event_date`,
                                                                           `color`,
                                                                           `number`)
                                  VALUES                          (Null,
                                                                             '".$_SESSION['id']."',
                                                                             '".$post_array['order_short']."',
                                                                             '".$post_array['order_long']."',
                                                                             '".$post_array['delivery_date']."',
                                                                             '".$post_array['event_date']."',
                                                                             '".$post_array['color']."',
                                                                             '".$post_array['number']."')";
                
                $database->fire_query($query);
                $order_id = mysql_insert_id();
                self::send_order_activation_email($order_id);
                        
        }
        
        private static function send_order_activation_email($order_id)
        {
                $user = UserClass::find_firstname_infix_surname();
                
                $login_info = LoginClass::find_email_password_by_id();
                
                $to = $login_info->get_email();
				$subject = "Bevestigings-email opdracht fotoSjaak";
                
                $message = "Geachte heer/mevrouw: ".$user->getFirstname()." ".
                                                                                        $user->getInfix()." ".
                                                                                        $user->getSurname()."<br>";
                $message .= "Wij hebben de onderstaande order van u ontvangen<br>";
                $message .= "<table border='1'>
                                                <tr>
                                                        <td>order_id</td>
                                                        <td>".$order_id."</td>
                                                </tr>
                                                <tr>
                                                        <td>Opdracht in het kort</td>
                                                        <td>".$post_array['order_short']."</td>
                                                </tr>
                                                <tr>
                                                        <td>Opdracht uitgebreid</td>
                                                        <td>".$post_array['order_long']."</td>
                                                </tr>
                                                <tr>
                                                        <td>Opleveringsdatum</td>
                                                        <td>".$post_array['delivery_date']."</td>
                                                </tr>
                                                <tr>
                                                        <td>Datum evenment</td>
                                                        <td>".$post_array['event_date']."</td>
                                                </tr>
                                                <tr>
                                                        <td>Foto's worden genomen in </td>
                                                        <td>".$post_array['color']."</td>
                                                </tr>
                                                <tr>
                                                        <td>Aantal foto's</td>
                                                        <td>".$post_array['number']."</td>
                                                </tr>
                                                <tr>
                                                        <td>Opdracht bevestigd</td>
                                                        <td>nee</td>
                                                </tr>
                                         </table>";
                                                      
				$message .= "Wanneer u op de onderstaande link klikt, gaat u akkoord met de algemene voorwaarden en is de order definitief.<br><br>";
				$message .= "<a href='http://localhost/Blok2/fotosjaak/index.php?content=confirm&email=".$login_info->get_email()."&password=".MD5($login_info->get_password())."'>Opdracht is akkoord</a>"; 
				$message .= "'<br>Met vriendelijke groet, <br> Sjaak de Vries<br> Uw fotograaf";                                
                
                
                //echo $message;exit();
                $headers = "From: info@fotosjaak.nl\r\n";
                $headers .= "Reply-To: info@fotosjaak.nl\r\n";
                $headers .= "Cc: info@accountncy.nl\r\n";
                $headers .= "Bcc: info@belastingdienst.nl\r\n";
                $headers .= "X-mailer: PHP/".phpversion()."\r\n";
                $headers .= "MIME-version 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso8859-1\r\n";
                        
                mail($to, $subject, $message, $headers);
        }
         public static function update_confirmed()
         {
         	global $database;
         	$query = "UPDATE `order` SET `confirmed` = 'yes' WHERE order_id = '".order_id."'";
			$database->fire_query($query);
         }
 }
?>