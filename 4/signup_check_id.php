<!DOCTYPE html>
<head>
<meta charset="utf-8">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
<style>
    *{
        font-family: 'Noto Sans KR', sans-serif;
        list-style: none;
        text-decoration: none;
        border-collapse: collapse;
        margin: 0px;
        padding: 0px;
        color: black;
        outline: 0;
    }

    h3 {
        padding-left: 5px;
    }

    #close {
        width: 50px;
        text-align: center;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        margin-top: 50px;
        background-color: skyblue;
        cursor:pointer;
    }

    li{
        margin-top: 10px;
        margin-left: 20px;
    }
</style>
</head>
<body>
<h3>아이디 중복체크</h3>
<p>
<?php
   $id = $_GET["id"];

   if(!$id) 
   {
      echo("<li>아이디를 입력해 주세요!</li>");
   }
   else
   {
      $con = mysqli_connect("localhost", "user1", "12345", "project");

 
      $sql = "select * from members where id='$id'";
      $result = mysqli_query($con, $sql);

      $num_record = mysqli_num_rows($result);

      if ($num_record)
      {
         echo "<li>".$id." 아이디는 중복됩니다.</li>";
         echo "<li>다른 아이디를 사용해 주세요!</li>";
      }
      else
      {
         echo "<li>".$id." 아이디는 사용 가능합니다.</li>";
      }
    
      mysqli_close($con);
   }
?>
</p>
<div id="close">
   <h3 onclick="javascript:self.close()">닫기</h3>
</div>
</body>
</html>

