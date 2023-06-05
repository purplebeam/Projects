<?php 
require_once("footer.php");
require_once("header.php");
?>

<section class="vh-100" style="background-color: #FBE7C6;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Είσοδος Λογαριασμού</h3>

            <div class="mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <div class="mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Κωδικός Πρόσβασης</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"><pre style="font-size: 19px; font-family: arial;">   Να με θυμάσαι</pre></label>
            </div>

            <hr class="my-4">
            <button class="btn btn-dark btn-lg btn-block" type="submit">Εισοδος</button>

            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  #firstNameInput,#lastNameInput,#typePasswordX-2,#typeEmailX-2 {
    border: 0.5px dashed black;
  }

  label {
    display: flex;
    align-items: start;
  }
</style>


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

        // public function pbinfo() 
        // {
        //     echo "<br>Name: ".$this->name."<br> Surname: ".$this->surname."<br> Email: ".$this->email."<br> ID: ".$this->id."<br> Password: ".$this->password."<br> Role: ".$this->role;
        // }
        
    }

    // $userdata = new User("Konstantinos","Papageorgiou","konvpapageorgiou@gmail.com",001,"gitpass32","admin",true,true,false,false);
    // $userdata->pbinfo();
?>