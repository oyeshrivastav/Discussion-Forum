<?php
session_start();
include 'partials/_dbconnect.php';

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>DMRC Discussion Forum</title>
    <link rel="stylesheet" href="./css/index.css">
    <style>
    .container {
        min-height: 100vh;
        max-width: 1375px;
        /* Adjust the maximum width as needed */
        /* max-height: fit-content; */
        margin: 3% auto;
        /* Center the container horizontally */
        margin-bottom: -5%;
        padding: 20px;
        /* Add padding to the container */
        background-color: #f0f0f0;
    }
    </style>
      <!-- jQuery library
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

jQuery UI library -->
<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
<script>
    $(function(){
        $("#search").autocomplete({
            source:"index.php" 
        });
    });

</script> -->
    
</head>

<body>


  <?php
    
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">
 
<a class="navbar-brand" href="/index.php" style="font-weight:500" >
  <img src="https://images.jdmagicbox.com/comp/ghaziabad/v7/011pxx11.xx11.191122122233.m8v7/catalogue/delhi-metro-rail-corporation-ltd-mohan-nagar-ghaziabad-metro-railway-station-1jcoml2exa.jpg?clr=" width="35" height="30" class="d-inline-block align-top" alt="" loading="lazy" style="mix-blend-mode:multiply;">
  &nbsp; Delhi Metro Rail Corporation
</a>


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent" style="color:black;">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active" style="font-weight:450">
      <a class="nav-link" href="/index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item" style="font-weight:450">
      <a class="nav-link" href="about.php">About</a>
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
      <input class="form-control mr-sm-2" id="search" name="search" type="search" placeholder="Search Departments" aria-label="Search">
      &nbsp;<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      <p class="text-dark my-0 ml-2 mx-2" style="font-weight:500"> Welcome '.$_SESSION['username'].'</p>
      <a href="partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
      </form>';
      // echo "Welcome ".$_SESSION['username'];
  }
  else{
  echo '<form class="form-inline my-2 my-lg-0"  method="get" action="searchdept.php">
  <input class="form-control mr-sm-2" id="search" name="search" type="search" placeholder="Search Departments" aria-label="Search">
  &nbsp;<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>
<button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
<button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>';
    
  }
  echo '</div>
  
</div>
</nav>
<marquee id="disclaimer" scrollamount="10" style="margin-top:11px;margin-bottom:-13px;font-weight:700;"><b
            class="text-danger">Disclaimer * </b>This Website is used to discuss necessary topics related to DMRC only .
        If you want to Add posts or comments you have to login first. &#128373;</marquee>
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

            var contentElement = document.getElementById("content");
            if (contentElement) {
                contentElement.style.marginTop = "35px";
            }

            var marqueeElement = document.getElementById("disclaimer");
            if (marqueeElement) {
                marqueeElement.style.display = "block";
            }
        }, 2000);
    </script>
      
      
      
      
      ';
      }
?>


    <!-- Search results -->
    <div class="container my-3">
        <!-- <h2 class="text-warning py-3">Search results for <?php echo $_GET['search'];?></h2> -->
        <div class="container1 ml-4">
                <h2 class="text-center" style=" margin:0% 0%;font-weight:600;font-size:30px"><u>Departments related to your Search</u></h2>
                <div class="row">
                  <div class="col-md-9">
                <div class="row">
                    <!-- fetching from database -->
                    <?php
    
        $query = $_GET["search"];
    $sql = "select * from department where (Dept_name) like ('%$query%')";
    $result = mysqli_query($conn , $sql);
    $noresult = true;
    while($row = mysqli_fetch_assoc($result))
    { $noresult = false;
        $id = $row['Dept_id'];
        $dept = $row['Dept_name'];
        $desc = $row['Dept_description'];
        $img = $row['Dept_img'];
          echo '<div class="col-md-4 my-4">
                <div class="card " id="searching" style="width: 18rem;">
                <div class="response-bg">
                    <img src="./image/' . $img . '" style="height:190px;width:350px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a class=" text-dark" href="discussionlist.php?deptid=' . $id . '">' . $dept . '</a></h5>
                        <p class="card-text">' . substr($desc , 0 , 105) . '..</p>
                        <a href="discussionlist.php?deptid=' . $id . '" class="btn-green btn btn-success">View Discussion</a>
                    </div>
                </div>
                </div>
            </div>';

    }
    if($noresult)
    {
        echo '<div class="head" style="margin:5% auto;" >
        <div class="alert alert-danger" role="alert" >
        <h4 class="alert-heading" >No Match Found!</h4>
        </div>
        </div>';
    }

    
    ?>

        <!-- <div class="result">
            <h4> <a href="/discussion/ddf" class="text-dark">hello</a></h4>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div> -->

    </div>
        </div>

<div class="col-md-3 my-4" style="min-width:13.33333%">
                <?php include "sidebar.php" ?>
            </div>

                </div>
        </div>
    </div>
    



    <?php include 'partials/_footer.php'; ?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>



</body>

</html>