<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    if ( !$userid )
    {
        echo("
                    <script>
                    alert('로그인을 먼저해주세요!');
                    history.go(-1)
                    </script>
        ");
        exit;
    }

    $content = $_POST["content"];
	$content = htmlspecialchars($content, ENT_QUOTES);

    $target = $_GET["target"];

	$regist_day = date("Y-m-d (H:i)");  // 현재의 '년-월-일-시-분'을 저장

	$con = mysqli_connect("localhost", "user1", "12345", "project");

	$sql = "insert into comment (id, name, content, regist_day, target) ";
	$sql .= "values('$userid', '$username', '$content', '$regist_day', '$target')";
	mysqli_query($con, $sql);  // $sql 에 저장된 명령 실행

	// 포인트 부여하기
  	$point_up = 100;

	$sql = "select point from members where id='$userid'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
	$new_point = $row["point"] + $point_up;
	
	$sql = "update members set point=$new_point where id='$userid'";
	mysqli_query($con, $sql);

	mysqli_close($con);                // DB 연결 끊기

	echo "
	    <script>
        location.href = document.referrer;
	    </script>
	";
?>