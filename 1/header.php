<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["userpoint"])) $userpoint = $_SESSION["userpoint"];
    else $userpoint = "";
?>

<div id="header">
            <div class="container">
                <div class="header">
                    <div class="header-menu">
<?php
    if(!$userid){                        
?>                                                
                        <a href="login_form.php">로그인</a>
                        <a href="member_form.php">회원가입</a>
<?php
    } else{
?>
                        <a href="logout.php">로그아웃</a>
                        <a href="member_modify_form.php">정보수정</a>
<?php
    }
?>
                    </div>
                    <!-- //헤더 메뉴 -->
                    <div class="header-tit">
                        <h1>MomDraStudio</h1><br>
                        <a href="">MomDraStudio.com</a>
                    </div>
                    <!-- //헤더 타이틀 -->
                    <div class="header-icon">
                        <a href="">나의 게임</a>
                        <a href="">커뮤니티</a>
                    </div>
                </div>
            </div>
        </div>