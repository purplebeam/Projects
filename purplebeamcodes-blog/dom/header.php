<!DOCTYPE html>
<html lang="en">
<?php $title="purplebeamcodes-tutorials";?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?php echo $title;?> </title>

                <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
                <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

                <!-- Overriding global box-sizing value from content-box to border-box -->
    <style>
        .selector-for-some-widget {
         box-sizing: content-box;
        }
    </style>

                <!-- Blog Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
    
        <a class="navbar-brand" href="#"><?php echo $title;?></a>
    
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        
                <!-- Main Page Navigation Item: Starts here -->
            <li class="nav-item">
                 <a class="nav-link active" aria-current="page" href="#">Main Page</a>
            </li>
                <!-- Main Page Navigation Item: Ends here -->

                <!-- News Navigation Item: Starts here -->
            <li class="nav-item">
                <a class="nav-link" href="#">News</a>
            </li>
                <!-- News Navigation Item: Ends here -->

                <!-- Dropdown Menu Tutorial Dropdown Toggle Button: Starts here -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Tutorials
                </a>

                <!-- Dropdown Menu of Programming Languages: Start here -->
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">HTML5</a></li>
                    <li><a class="dropdown-item" href="#">CSS3</a></li>
                    <li><a class="dropdown-item" href="#">JavaScript</a></li>
                    <li><a class="dropdown-item" href="#">MySQL</a></li>
                    <li><a class="dropdown-item" href="#">PHP</a></li>
                </ul>
                <!-- Dropdown Menu of Programming Languages: Ends here -->

             </li>
            <!-- Dropdown Menu Tutorial Dropdown Toggle Button: Ends here -->
            
            <li class="nav-item">
                <a class="nav-link" href="#">Memberboard</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Log in</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">Sign Up</a>
            </li>
      </ul>

      <!-- Blog Search Engine: Starts here-->
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <!-- Blog Search Engine: Ends here-->

    </div>
  </div>
</nav>

</head>

</html>