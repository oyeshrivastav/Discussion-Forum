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

<body>
<?php
include 'partials/_dbconnect.php';

$id=$_GET['id'];
$query1="select discussion_id from `comments` where comment_id='$id'";
$result=mysqli_query($conn,$query1);
$row=mysqli_fetch_assoc($result);
$query="delete from `comments` where comment_id='$id'";
$data=mysqli_query($conn,$query);
// $dept=['Discussion_dept_id'];
if($data)
{
    echo '<div class="alert alert-success alert-dismissible fade show " role="alert">
                    <strong>Success! </strong> Post deleted successfully.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
                header("refresh:0.5;url=discussion.php?discussionid=".$row['discussion_id']);
}
else{
    echo '<div class="alert alert-danger alert-dismissible fade show " role="alert">
                    <strong>Failed! </strong> Failed to delete.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
}

?> 


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
</script>
</body>

</html>