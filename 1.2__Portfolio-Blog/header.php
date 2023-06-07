<!DOCTYPE html>
<html lang="en">
<?php $title="MyPortfolioBlog";?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />

    <title> <?php echo $title;?> </title>
    
                <!-- Setting the icon at tab -->
    <link rel="icon" href="https://img.icons8.com/?size=512&id=DEFdxLKFcjT9&format=png">
                <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
                <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
                <!-- Overriding global box-sizing value from content-box to border-box -->
                <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
                <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
                <!-- MDB -->
                <link rel="stylesheet" href="css/mdb.min.css" />
    
    <style>
        .selector-for-some-widget {
         box-sizing: content-box;
        }

        
    </style>
</head>

<body>
    
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top">
            <div class="container-fluid">
            
            <!-- Navbar brand -->
            <a class="navbar-brand">
                <img src="https://img.icons8.com/?size=512&id=DEFdxLKFcjT9&format=png" height="50" alt="" loading="lazy"
                 style="margin-top: -3px;" />
            </a>

            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarExample01"
             aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarExample01">
            
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

            <li class="nav-item">
              <a class="nav-link text-light " aria-current="page" href="index.php">Αρχική</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light" href="blog.php">Άρθρα</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light" href="memberlist.php">Λίστα Μελών</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="profile.php">Προφίλ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="login.php">Είσοδος</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light" aria-current="page" href="signup.php">Εγγραφή</a>
            </li>
          </ul>

            

          <ul class="navbar-nav d-flex flex-row">
            <!-- Icons -->
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.youtube.com/channel/UC5CF7mLQZhvx8O5GODZAhdA" rel="nofollow"
                target="_blank">
                <i style="color:white;" class="fab fa-youtube"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://www.facebook.com/mdbootstrap" rel="nofollow" target="_blank">
                <i style="color:white;" class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0">
              <a class="nav-link" href="https://twitter.com/MDBootstrap" rel="nofollow" target="_blank">
                <i style="color:white;" class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item me-3 me-lg-0 ">
              <a class="nav-link" href="https://github.com/mdbootstrap/mdb-ui-kit" rel="nofollow" target="_blank">
                <i style="color:white;" class="fab fa-github"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Navbar -->
    </header>
</body>
</html>