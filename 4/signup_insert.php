<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];
    $name = $_POST["name"];
    $email1 = $_POST["email1"];
    $email2 = $_POST["email2"];

    $email = $email1."@".$email2;
    $regist_day = date("Y-m-d (H:i)");

    $con = mysqli_connect("localhost", "user1", "12345", "project");

    # 아이디 중복 체크
    $sql = "select * from members where id='$id'";
    $result = mysqli_query($con, $sql);
    $num_record = mysqli_num_rows($result);

    if($num_record != 0){
        echo ("
            <script> 
                alert('회원가입 실패! : 아이디 중복')
                history.go(-1)
            </script>)");
    }
    else{
        $sql = "insert into members(id, pass, name, email, regist_day, point) ";
        $sql .= "values('$id', '$pass', '$name', '$email', '$regist_day', 3000)";
    
        if(mysqli_query($con, $sql)){
            echo " <script> alert('회원가입 성공! 로그인 해주세요!') </script>";
        }
        else{
            echo " <script> alert('회원가입 실패! 다시 시도해 주세요') </script>";
        }
        echo " <script> location.href = 'home.php' </script>";

        mysqli_close($con);
    }
?>