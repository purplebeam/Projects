<?php 
require_once("footer.php");
require_once("header.php");
?>


<section class="vh-100" style="background-color: #FBE7C6; margin-top: 50px;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Εγγραφή</h3>

            <div class="mb-4">
              <div class="input-label">
                <input  type="text" id="firstNameInput" class="form-control form-control-lg" />
                <label class="form-label" for="firstNameInput">Όνομα</label>
              </div>
            </div>

            <div class="mb-4">
              <div class="input-label">
                <input type="text" id="lastNameInput" class="form-control form-control-lg" />
                <label class="form-label" for="lastNameInput">Επώνυμο</label>
              </div>
            </div>

            <div class="mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typePasswordX-2">Κωδικός Πρόσβασης</label>
            </div>

            <div class="mb-4">
              <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />
              <label class="form-label" for="typeEmailX-2">Email</label>
            </div>

            <hr class="my-4">
            <button class="btn btn-dark btn-lg btn-block" type="submit">Εγγραφη</button>

            

           

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

 
