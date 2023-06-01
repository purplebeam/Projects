<?php 
require_once("dom/footer.php");
require_once("dom/header.php");
?>

<?php

    class User {
        public $name;
        public $surname;
        public $email;
        private $id;
        private $password;
        private $role;
        private $isLoggedIn;
        private $isAdmin;
        private $isBlocked;
        private $isDeleted;

        public function __construct($name,$surname,$email,$id,$password,$role,$isLoggedIn,$isAdmin,$isBlocked,$isDeleted){
            $this->name = $name;
            $this->surname = $surname;
            $this->email = $email;
            $this->id = $id;
            $this->password = $password;
            $this->role = $role;
            $this->isLoggedIn = $isLoggedIn;
            $this->isAdmin = $isAdmin;
            $this->isBlocked = $isBlocked;
            $this->isDeleted = $isDeleted;
        }

        public function pbinfo() 
        {
            echo "<br>Name: ".$this->name."<br> Surname: ".$this->surname."<br> Email: ".$this->email."<br> ID: ".$this->id."<br> Password: ".$this->password."<br> Role: ".$this->role;
        }
        
    }

    $userdata = new User("Konstantinos","Papageorgiou","konvpapageorgiou@gmail.com",001,"gitpass32","admin",true,true,false,false);
    $userdata->pbinfo();
?>