<?php
session_start();
echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
<a class="navbar-brand" href="/index.php" style="font-weight:500" >
  <img src="https://images.jdmagicbox.com/comp/ghaziabad/v7/011pxx11.xx11.191122122233.m8v7/catalogue/delhi-metro-rail-corporation-ltd-mohan-nagar-ghaziabad-metro-railway-station-1jcoml2exa.jpg?clr=" width="35" height="30" class="d-inline-block align-top" alt="" loading="lazy" style="mix-blend-mode:multiply;">
  &nbsp; Delhi Metro Rail Corporation
</a>


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent" style="text-color:black;">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item " style="font-weight:450">
      <a class="nav-link" href="/index.php">Home </a>
    </li>
    <li class="nav-item active" style="font-weight:450">
      <a class="nav-link" href="about.php">About <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item dropdown" style="font-weight:450">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Departments
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="discussionlist.php?deptid=1" style="font-weight:450">IT Department</a>
        <a class="dropdown-item" href="discussionlist.php?deptid=2" style="font-weight:450">S&T Department</a>
        <a class="dropdown-item" href="discussionlist.php?deptid=3" style="font-weight:450">RS Department</a>
        <a class="dropdown-item" href="discussionlist.php?deptid=4" style="font-weight:450">E&M Department</a>
        <a class="dropdown-item" href="discussionlist.php?deptid=5" style="font-weight:450">ATP Department</a>
        <a class="dropdown-item" href="discussionlist.php?deptid=6" style="font-weight:450">DCOS Department</a>
        <a class="dropdown-item" href="discussionlist.php?deptid=7" style="font-weight:450">PWay Department</a>
        <a class="dropdown-item" href="discussionlist.php?deptid=8" style="font-weight:450">AFC Department</a>
      
    </li>
    <li class="nav-item" style="font-weight:450">
      <a class="nav-link" href="contact.php"  >Contact</a>
    </li>
  </ul>
  <div class=" row mx-2">';
  if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true)
    { 
      echo '<form class="form-inline my-2 my-lg-0"  method="get" action="searchdept.php">
      <input class="form-control mr-sm-2" id="search" name="search" type="search" placeholder="Search" aria-label="Search">
      &nbsp;<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      <p class="text-dark my-0 ml-2 mx-2" style="font-weight:500"> Welcome '.$_SESSION['username'].'</p>
      <a href="partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
      </form>';
      // echo "Welcome ".$_SESSION['username'];
  }
  else{
  echo '<form class="form-inline my-2 my-lg-0"  method="get" action="searchdept.php">
  <input class="form-control mr-sm-2" id="search" name="search" type="search" placeholder="Search" aria-label="Search">
  &nbsp;<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>
<button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
<button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>';
    
  }
  echo '</div>
  
</div>
</nav>

';
?>

  <?php  include 'partials/_loginModal.php';
      include 'partials/_signupModal.php'; 
      if(isset($_GET['signupsuccess'])&&$_GET['signupsuccess']=="true")
      {
        echo '<div id="myAlert" class="alert alert-success alert-dismissible fade show my-0" role="alert" style="align-center;">
        <strong>Successfully Sign up!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <script>
        setTimeout(function() {
            var alertElement = document.getElementById("myAlert");
            if (alertElement) {
                alertElement.style.display = "none";
            }

            var carouselElement = document.getElementById("carousel");
            if (carouselElement) {
                carouselElement.style.marginTop = "35px";
            }

            
        }, 2000);
    </script>
      
      
      
      
      ';
      }
?>
 <!-- <a href="./loginsystem/logout.php" class="btn btn-outline-success ml-2" >Logout</a> -->
  