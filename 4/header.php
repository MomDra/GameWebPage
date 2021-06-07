<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>

<div class="intro_bg">
    <div class="header">
        <div class="search_area">
            <form>
                <input type="search" placeholder="Search">
                <span>검색</span>
            </form>
        </div>
        <ul class="nav">
            <li><a href="home.php">HOME</a></li>

<?php
    if(!$userid){
?> 

            <li><a href="signup.php">SIGN UP</a></li>
            <li><a href="login.php">LOGIN</a></li>
            <!-- <li><a href="login.php">COMUNITY</a></li> -->

<?php
    }
    else{
        $logged = $username."님";
?>
            <li><a href="#"><?=$logged?></a></li>
            <li><a href="logout.php">LOGOUT</a></li>
            <!-- <li><a href="#">COMUNITY</a></li> -->
<?php
    }
?>

        </ul>
    </div>
    <div class="intro_text">
        <h1><a href="home.html">MomDraStudio</a></h1>
        <!-- <span class="forfree">MomDraStudio.co.kr</span>-->
    </div>
    <canvas id="canvas"></canvas>
</div>
<!-- intro end -->