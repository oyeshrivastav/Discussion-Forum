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
    <script src="richtext/jquery.richtext.js"></script>


    <title>DMRC Discussion Forum</title>
    <!-- <script src="js/comments.js"></script> -->
    <!-- <script src="script.js"></script> -->
    <style>
    #ques {
        min-height: 433px;
    }

    .container {
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

    .card {
        background-color: #e9e6e6;
        border-radius: 5px;
        border: 1px solid black;
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

    






</head>

<body>

<?php 

    



          echo '<nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="/index.php" style="font-weight:500">
            <img src="https://images.jdmagicbox.com/comp/ghaziabad/v7/011pxx11.xx11.191122122233.m8v7/catalogue/delhi-metro-rail-corporation-ltd-mohan-nagar-ghaziabad-metro-railway-station-1jcoml2exa.jpg?clr="
                width="35" height="30" class="d-inline-block align-top" alt="" loading="lazy"
                style="mix-blend-mode:multiply;">
            &nbsp; Delhi Metro Rail Corporation
        </a>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
             
                <li class="nav-item" style="font-weight:450">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
            <div class=" row mx-2">';
 if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true)
    { 
      echo '
      <p class="text-dark my-0 ml-2 mx-2 mt-2" style="font-weight:500"> Welcome '.$_SESSION['username'].'</p>
      <a href="partials/_logout.php" class="btn btn-danger ml-2">Logout</a>
      </form>';
      // echo "Welcome ".$_SESSION['username'];
  }
  else{
  echo '
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


    <?php
        $id=$_GET['discussionid'];
        $sql = "SELECT * FROM `discussion` WHERE Discussion_id=$id;";
        $result = mysqli_query($conn , $sql);
        while($row = mysqli_fetch_assoc($result))
        {
            $title = $row['Discussion_title'];
            $desc = $row['Discussion_description'];
            //finding who have asked the posts
                        $Discussion_user_id = $row['Discussion_user_id'];
                        $sql2 = "select name from `users` where user_id='$Discussion_user_id'";
            $result2 = mysqli_query($conn , $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            $posted_by=$row2['name'];

        }
    ?>
    <!--posting comment-->
    <?php
    $showalert = false;
    $method = $_SERVER['REQUEST_METHOD'];
    if($method=='POST')
    {
        //inserting comments into db
        $comment = mysqli_real_escape_string($conn, $_POST['comment']);
        // $comment = $_POST['comment'];//name defined in form
        $comment=str_replace("<","&lt;",$comment);
        $comment=str_replace(">","&gt;",$comment);
        $user_id = $_POST['user_id'];
        $sql = "INSERT INTO `comments` (`comment_text`,`discussion_id`, `comment_by`, `comment_time`) 
        VALUES ('$comment','$id', '$user_id', current_timestamp())";
        $result = mysqli_query($conn , $sql); 
        $showalert = true;
        if($showalert)
        {
            echo '<div id="myAlert" class="alert alert-success alert-dismissible fade show my-0 " role="alert">
                    <strong>Success! </strong> Comment has been added successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                    </button>
                </div><script>
                setTimeout(function() {
                    var alertElement = document.getElementById("myAlert");
                    if (alertElement) {
                        alertElement.style.display = "none";
                    }
                }, 2000);
                </script>';
        }
    }
    ?>

    <div class="container my-3" id="content">
        <div class="card">
            <!-- <div class="container"> -->
            <h3 class="display-5 mt-3 "><?php echo $title;?></h3>
            <hr>
            <p class="lead" style="font-weight: 400;"><?php echo $desc;?>...
            </p>

            <hr class="my-4">
            <p>&nbsp;&nbsp;Posted by : <u><b><?php echo $posted_by; ?></b></u></p>
            <!-- <p style="font-weight: 500;">Here you can answer to their query &#128519;...</p> -->
            <!-- </div> -->
        </div>
        <!-- </div> -->
        <div id="ques">
            <div class="row">
                <div class="col-md-7">
                    <h4 class="py-4"><u>Posted Comments</u></h4>
                    <?php
        $id = $_GET['discussionid'];
        $sql = "SELECT * FROM `comments` WHERE Discussion_id=$id;";
        $result = mysqli_query($conn , $sql);
        $noresult = true;
        while($row = mysqli_fetch_assoc($result))
        {
            $noresult = false;
            $id = $row['comment_id'];
            $content = $row['comment_text'];
            // $img = $row['comment_image'];
            $comment_time = $row['comment_time'];
            $comment_by=$row['comment_by'];
            $sql2 = "select name from `users` where user_id='$comment_by'";
            $result2 = mysqli_query($conn , $sql2);
            $row2 = mysqli_fetch_assoc($result2);
            
       
       echo ' <div class="card my-3">
       <div class="media my-3">
            <img src="./image/images.png" width="54px" class="mr-3" alt="..." style="mix-blend-mode:multiply;">
            <div class="media-body" style="margin-top:11px;">
            <span class="my-0" style="margin-right:-1008px;color:black;font-weight:500;">&#9989;' . $content . '</span>
            </div>
            
            <a href="deletecomment.php?id='.$id.'" class="btn btn-danger btn-sm mr-2">Delete</a>
            
            
        </div>
        <span style="font-weight:400;margin-left:465px"><i>Replied by <b><u>'.$row2['name'].'</u></b> at ' . $comment_time . '</i></span>
            
        </div>';
    }
    if($noresult)
        {
            echo '<div  id="myAlert" class="alert alert-success" role="alert">
            <h4 class="alert-heading">No Comments Yet!</h4>
            <p>Be the first person to comment..</p>
             <hr>
          <!--<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>-->
          </div>';
        }


    ?>
                </div>
               <?php 
               if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true){
                echo '<div class="col-md-5 my-3">
                    <h3 class="py-2"> Add New Comment&#128195;</h3>
                    
                    <form action="'. $_SERVER["REQUEST_URI"] .'" method="post">

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Ellaborate your problem</label>

                                    <textarea class="form-control" id="comment" name="comment" rows="7"></textarea>
                                    <input type="hidden" name ="user_id" value="'.$_SESSION['user_id'].'">
                        </div>
                                    <button type="submit" class="btn btn-success">Post Comment</button>
                                

              
                </form>
            </div>';
               }
               else{
                echo '<div class="col-md-5 my-5">
                            <h3 class="py-2">Add New Comment&#128195;</h3>
                            <p  class="blink" style="font-weight:700;color:blue;font-size:18px;">* You need to login first to Add New comments</p>
                </div>
            ';
            }
            ?>
           

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




<!-- <img src="./image/' . $img . '" style="height:190px;width:350px;" class="card-img-top" alt="No image provided">  -->