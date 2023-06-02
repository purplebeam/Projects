<?php 
require_once("dom/footer.php");
require_once("dom/header.php");
?>


<!-- Sign Up Form -->
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

    label{
      display: inline-block;
    }



    #name, #surname, #email, #password  {
      width: 50%;
      margin-left: 25%;
    }

    * {
      margin: 0;
      padding: 0;
    }

    body {
      overflow: hidden;
    }

    #video-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    #video-background {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }

  </style>

  <!-- Include the YouTube Iframe API -->
  <script src="https://www.youtube.com/iframe_api"></script>
  <script>
    // Load the YouTube video
    function loadYouTubeVideo() {
      // Replace 'VIDEO_ID' with the actual YouTube video ID
      var videoID = 'YQc4WT0yDH4';

      // Create a YouTube player
      var player;
      function onYouTubeIframeAPIReady() {
        player = new YT.Player('video-background', {
          videoId: videoID,
          playerVars: {
            autoplay: 1,
            controls: 0,
            showinfo: 0,
            modestbranding: 1,
            loop: 1,
            playlist: videoID
          },
          events: {
            onReady: function(event) {
              event.target.mute();
            }
          }
        });
      }

      // Load the YouTube Iframe API
      var tag = document.createElement('script');
      tag.src = 'https://www.youtube.com/iframe_api';
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    }

    // Call the function to load the YouTube video
    loadYouTubeVideo();
  </script>

  <!-- Jumbotron -->
  <div style="margin-top: 5%;" class="container py-3">
  <div class="row justify-content-center align-items-center">
    <div class="col-lg-6 mb-5 mb-lg-0">
      <div class="card cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
        <div class="card-body p-5 shadow-5 text-center">
          <h2 class="fw-bold mb-5">Sign Up</h2>
          <form>
            <div>
            <!-- Surname input -->
            <div class="form-outline mb-4">
            <input type="text" id="name" class="form-control" />
            <label for="name">Name</label>
            </div>

            <!-- Surname input -->
            <div class="form-outline mb-4">
            <input type="text" id="surname" class="form-control" />
            <label for="surname">Surname</label>
            </div>
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="email" class="form-control" />
              <label for="email">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="password" class="form-control" />
              <label for="password">Password</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check mb-4 d-flex justify-content-center">
              <input class="form-check-input me-2" type="checkbox" value="" id="remembermecheck" />
              <label for="remembermecheck">Remember Me</label>
            </div>
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
<!-- Sign Up Form Ends -->