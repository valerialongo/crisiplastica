<?php
    class check_reg{
        private $name;
        private $surname;
        private $email;
        private $re_email;
        private $pwd;
        private $r_pwd;
    
        function __construct ($name_in, $surname_in, $email_in, $re_email_in, $pwd_in, $r_pwd_in){
            $this->name = $name_in;
            $this->surname = $surname_in;
            $this->email = $email_in;
            $this->re_email = $re_email_in;
            $this->pwd = $pwd_in;
            $this->r_pwd = $r_pwd_in;
        }

        function __set($name_s, $value){
            switch ($name_s){
                case 'name':
                    $this->name = $value;
                    break;
                case 'surname':
                    $this->surname = $value;
                    break;
                case 'email':
                    $this->email = $value;
                    break;
                case 're_email':
                    $this->re_email = $value;
                    break;
                case 'pwd':
                    $this->pwd = $value;
                    break;
                case 'r_pwd':
                    $this->r_pwd = $value;
                    break;
                default:
                    echo "Il nome" .$name_s. "inserito non è stato trovato";
                    break;
            }
        }
        
        function __get ($name_g){
            switch ($name_g){
                case 'name':
                    return $this->name;
                    break;
                case 'surname':
                    return $this->surname;
                    break;
                case 'email':
                    return $this->email;
                    break;
                case 're_email':
                    return $this->re_email;
                    break;
                case 'pwd':
                    return $this->pwd;
                    break;
                case 'r_pwd':
                    return $this->r_pwd;
                    break;
                default:
                    echo "Il nome " .$name_g. " inserito non è stato trovato";
                    break;
            }
        }
        
        // empty field check
        //function checkEmptyField(){
          //  if(empty($this->__get('name')) || empty($this->__get('surnname')) || empty($this->__get('email')) || empty($this>__get('re_email')) || empty($this->__get('pwd')) || empty($this->__get('r_pwd')))
          //  {
          //    die ("I campi sono vuoti"); 
           // }
      //  }
        //controllo caratteri proibiti
        function badChars(){
            $badC = array ('#', ',',';','!','$','&','*');
            for ($i=0; $i<6; $i++){
               $search = $badC[$i];
                $replace = "";
                
                $check = str_replace($search, $replace, $this->__get('name'));
                $this->__set('name', $check);
                $check = str_replace($search, $replace, $this->__get('surname'));
                $this->__set('surname', $check);
                $check = str_replace($search, $replace, $this->__get('email'));
                $this->__set('email', $check);
                $check = str_replace($search, $replace, $this->__get('re_email'));
                $this->__set('re_email', $check);
                $check = str_replace($search, $replace, $this->__get('pwd'));
                $this->__set('pwd', $check);
                $check = str_replace($search, $replace, $this->__get('r_pwd'));
                $this->__set('r_pwd', $check);
            }
        }
        
        //check conferma mail e password
        
        function cEmAndPwd(){
            if ($this->__get('email') != $this->__get('re_email')){
                die ("La mail e la tua conferma non corrispondono");
                            }
            if ($this->__get('pwd') != $this->__get('r_pwd')){
                die ("La password e la sua conferma non corrispondono");
            }
        }
        
        //cript password
        function criptPwd (){
            $cript_p = hash('sha512', $this->__get('pwd'));
            return $cript_p;
        }
        
        //database
        function saveDB(){
            $name_db = $this->__get('name');
            $surname_db = $this->__get('surname');
            $email_db = $this->__get('email');
            $pwd_db = $this->criptPwd ();
            
            include 'conn.php';
            
            $sql = "INSERT INTO users (name, surname , email, pwd ) VALUE ('$name_db','$surname_db','$email_db','$pwd_db')";
            
            $sendData = mysqli_query($conn, $sql); 
            if (!$sendData){
                die ("si è verificato un errore durante l'invio dei dati al database");
                            }
            else{
                $state = "success";
                return $state;
            }
        }
    }


?>