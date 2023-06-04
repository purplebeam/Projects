<?php 
require_once("footer.php");
require_once("header.php");
?>

<!-- Login Form -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div style="margin-top: 5%;" class="container py-3">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-6 mb-5 mb-lg-0">
      <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
        <div class="card-body p-5 shadow-5 text-center">
          <h2 class="fw-bold mb-5">Log In</h2>
          <form>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" class="form-control" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" class="form-control" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <!-- Checkbox -->
            <div style = "display: flex; justify-content: start;" class="form-check mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="remembermecheck" />
              <label class="form-check-label" for="remembermecheck">Remember Me</label>
            </div>

            <!-- Login button -->
            <a style = "padding: 10px 50px 10px 50px;" href="log-in.php" class="btn btn-primary btn-block mb-4">Login</a>

            <!-- Register Button -->
            <a style = "padding: 10px 20px 10px 20px;" href="sign-up.php" class="btn btn-primary btn-block mb-4">Create Account</a>

            <!-- Forgot Password Option -->
            <a href="sign-up.php" style="display:flex; justify-content: center;">Forgot Password?</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Section: Design Block -->

<!-- Login Form Ends -->



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