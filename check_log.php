<?php
    class check_login{
        
        private $email;
        private $pwd;
        
        function __construct($email_in, $pwd_in){
            $this->email = $email_in;
            $this->pwd = $pwd_in;
        }
        
        function __set($name, $value){
            switch ($name){
                case 'email':
                    $this->email = $value;
                    break;
                case 'pwd':
                    $this->pwd = $value;
                    break;
                default:
                    echo "Il nome " .$name. "non è stato trovato";
                    break;
            }
        }
        
        function __get($name){
            switch ($name){
                case 'email':
                    return $this->email;
                    break;
                case 'pwd':
                    return $this->pwd;
                    break;
                default:
                    echo "Il nome " .$name. "non è stato trovato";
                    break;
            
        }
    }
        
        //controllo campi vuoti
        
       // function checkempty (){
        //    if(empty($this->__get('email')) || empty($this->__get('pwd')))
        //        die('Non sono stati comilati tutti i campi del login');
        //}
        
        //check data
        function check_data(){
            $badC = array ('#', ',',';','!','$','&','*');
            for ($i=0; $i<6; $i++){
               $search = $badC[$i];
                $replace = "";            
                $check = str_replace($search, $replace, $this->__get('email'));
                $this->__set('email', $check);            
                $check = str_replace($search, $replace, $this->__get('pwd'));
                $this->__set('pwd', $check);
               
        }
        }
        // cript pwd
        
        function criptPwd(){
            $c_pwd = hash('sha512', $this->__get('pwd'));
            return $c_pwd;
        }
        
        
        //check login
        function check_login(){
            include 'conn.php';
            $c_pwd = $this->criptPwd();
            $email_c = $this->__get('email');
            
            $sql = "SELECT email, pwd FROM users WHERE email = '$email_c' AND pwd = '$c_pwd'";
            $sel_data = mysqli_query($conn, $sql);
            
            if (!$sel_data){
                die('Si è verificato un errore durante la richiesta di dati al database per il login');
            }
            else {
                $row = mysqli_fetch_row($sel_data);
                $email_db = $row[0];
                $pwd_db = $row[1];
                            }
            if ($this->__get('email') == $email_db && $c_pwd == $pwd_db){
                session_start();
                $_SESSION['email'] = $email_db;
                return 'login_true';
                
            }
            else{
                return 'wrong_login';
            }
        }
    }
?>