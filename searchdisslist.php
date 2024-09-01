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
        max-width: 1375px; /* Adjust the maximum width as needed */
  /* max-height: fit-content; */
  margin: 2% auto; /* Center the container horizontally */
  margin-bottom: -5%;
  padding: 20px; /* Add padding to the container */
  background-color: #f0f0f0;
    }
    .card{
        background-color: #f0f0f0;
        border-radius: 5px;
    }
    .right-section {
        text-decoration: none;
        border-bottom: 1px dotted #eee;
        padding: 4px 0 4px 0;
    }

    .right-section:hover {
        background-color: #f0ecec;
        text-decoration: none;
        /* list-style:#ffffe0; */
        padding: 10px 10px;
        border-radius: 6px;
        border-color: rgb(165, 165, 165);
    }
    @keyframes blink-animation {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0;
        }
    }

    .blink {
        animation: blink-animation 1s infinite;
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
            
          echo ' <nav class="navbar navbar-expand-lg navbar-light bg-light">
 
<a class="navbar-brand" href="/index.php" style="font-weight:500" >
  <img src="https://images.jdmagicbox.com/comp/ghaziabad/v7/011pxx11.xx11.191122122233.m8v7/catalogue/delhi-metro-rail-corporation-ltd-mohan-nagar-ghaziabad-metro-railway-station-1jcoml2exa.jpg?clr=" width="35" height="30" class="d-inline-block align-top" alt="" loading="lazy" style="mix-blend-mode:multiply;">
  &nbsp; Delhi Metro Rail Corporation
</a>


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent" style="color:black;">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item " style="font-weight:450">
      <a class="nav-link" href="/index.php">Home</a>
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
      echo '<form class="form-inline my-2 my-lg-0"  method="get" action="searchdisslist.php">
      <input class="form-control mr-sm-2" id="search" name="search" type="search" placeholder="Search Posts" aria-label="Search">
      &nbsp;<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
      <p class="text-dark my-0 ml-2 mx-2" style="font-weight:500"> Welcome '.$_SESSION['username'].'</p>
      <a href="partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
      </form>';
      // echo "Welcome ".$_SESSION['username'];
  }
  else{
  echo '<form class="form-inline my-2 my-lg-0"  method="get" action="searchdisslist.php">
  <input class="form-control mr-sm-2" id="search" name="search" type="search" placeholder="Search Posts" aria-label="Search">
  &nbsp;<button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
</form>
<button class="btn btn-outline-success ml-2" data-toggle="modal" data-target="#loginModal">Login</button>
<button class="btn btn-outline-success mx-2" data-toggle="modal" data-target="#signupModal">Signup</button>';
    
  }
  echo '</div>
  
</div>
</nav>
<marquee id="disclaimer" scrollamount="10" style="margin-top:11px;margin-bottom:-20px;font-weight:700;"><b
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

            var dissElement = document.getElementById("diss");
            if (dissElement) {
                dissElement.style.marginTop = "35px";
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
    <div class="container my-3" id="diss">
        <!-- <h2 class="text-warning py-3">Search results for <?php echo $_GET['search'];?></h2> -->
        <div class="container1 ml-4">
        <h3 class="py-5"><u><i>Questions already asked by People similar to your search..</i></u></h3>
                <!-- <h2 class="text-center" style=" margin:1% 0%;">Matching Results</h2> -->
                <div class="row" >
                  <div class="col-md-7">
                    <!-- fetching from database -->
                    <?php
    
    // $id=$_GET['Discussionid'];
    
    // $id=$_GET['deptid'];
        $query = $_GET["search"];
    $sql = "SELECT * FROM `discussion`  join `department` on discussion.Discussion_dept_id=department.Dept_id where ((discussion.Discussion_title) like ('%$query%') or (discussion.Discussion_description) like ('%$query%'))";
    $result = mysqli_query($conn , $sql);
    $noresult = true;
    while($row = mysqli_fetch_assoc($result))
    {$noresult = false;
      $id = $row['Discussion_id'];
      $title = $row['Discussion_title'];
      $desc = $row['Discussion_description'];
      // $dis_img = $row['Discussion_image'];
      $discussion_time = $row['timestamp'];
      $discussion_user_id =$row['Discussion_user_id'];
            $sql2 = "select name from `users` where user_id='$discussion_user_id'";
            $result2 = mysqli_query($conn , $sql2);
            $row2 = mysqli_fetch_assoc($result2);
 
 echo '<div class="card my-3 right-section">
 <div class="media my-3">
      <img src="./image/images.png" width="54px" class="mr-3" alt="..." style="mix-blend-mode:multiply;">
      <div class="media-body ">'.'
          
          <h6 class="mt-0" ><p style="color:black; font-weight:700">' . $title . '&nbsp;&#9993;</h6>'.'
          <span class="my-0" style="margin-right:-1080px ;font-weight:400;">' . $desc . '</span>'.'
          </div>'.'
          
          <a href="delete.php?id='.$id.'" class="btn btn-danger btn-sm mr-2">Delete</a>
          <a href="discussion.php?discussionid=
          ' . $id . '" class="btn btn-success btn-sm mr-2">Post Comment</a>
          '.'
          
          
      </div>
      <span style="font-weight:500;margin-left:465px"><i>Asked by <b><i>'.$row2['name'].'</i></b> at ' . $discussion_time . '</i></span>'.'
            </p>'.'
      </div>';
      
}
if($noresult)
    {
        echo '<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">No Match Found!</h4>
        </div>';
    }
    
    ?>

        <!-- <div class="result">
            <h4> <a href="/discussion/ddf" class="text-dark">hello</a></h4>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
        </div> -->

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