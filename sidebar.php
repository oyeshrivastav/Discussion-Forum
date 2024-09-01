<?php 
$select = "SELECT * FROM discussion ORDER BY timestamp DESC LIMIT 40";
$query = mysqli_query($conn, $select);
?>

<style>
    .right-section {
        flex-direction: column;
    }
    .right-section h6 {
        background-color: rgb(60, 196, 60);
        text-align: center;
        box-shadow: rgb(50, 189, 50);
        color: #000;
        padding: 10px;
        border-radius: 7px;
        font-weight: 700;
    }
    .right-section ul li a {
        text-decoration: none;
        color: #555;
        font-size: 0.9rem;
        font-weight: 700;
        color: black;
    }
    .right-section ul li {
        list-style: none;
        border-bottom: 1px dotted #eee;
        padding: 4px 0 4px 0;
    }
    .right-section ul li:hover {
        background-color: #ffffe0;
        /* list-style:#ffffe0; */
        padding: 10px 7px;
        border-radius: 6px ;
        border-color: red;
    }  

    
</style>

<div class="card">
    <div class="card-body d-flex right-section">
        <div id="posts">
            <h6 ><marquee  scrollamount="3" > Recent Posts</marquee></h6>
            <ul class="hover-effect" style="margin-left: -30px;">
                <?php 
                $currentTimestamp = time(); // Current UNIX timestamp
                while ($posts = mysqli_fetch_assoc($query)) {
                    $postTimestamp = strtotime($posts['timestamp']); // Convert database timestamp to UNIX timestamp
                    $timeDifference = $currentTimestamp - $postTimestamp; // Calculate time difference in seconds
                    
                    ?>
                    <li>
                        <a href="discussion.php?discussionid=<?=$posts['Discussion_id']?> "> ►&nbsp;&nbsp;<?= substr($posts['Discussion_title'],0,100);?>
                        
                        <!-- Display the GIF only for posts posted within the last 1 day -->
                        <?php if ($timeDifference <= 86400) { ?>
                            <img src="./image/blink_new.gif" alt="Random GIF">
                        <?php } ?>
                        <br><span style="font-size:10.9px;margin-left:136px"><?=$posts['timestamp']; ?></span></a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>