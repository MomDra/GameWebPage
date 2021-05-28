<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomDraStudio - LOGIN</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="./css/login.css">
    <script type="module" src="./js/app.js"></script>
    <script>
            function press(f){ 
                if(f.keyCode == 13){
                    check_input();
                }             
            }


            function check_input() {
                if (!document.login_form.id.value) {
                    alert("아이디를 입력하세요");
                    document.login_form.id.focus();
                    return;
                }

                if (!document.login_form.pass.value) {
                    alert("비밀번호를 입력하세요");
                    document.login_form.pass.focus();
                    return;
                }
                document.login_form.submit();
            }
    </script>
</head>
<body>
    <div class="wrap">
        <?php include "header2.php";?>

        <div class="login_text0">
            <h1>LOGIN</h1>
            <div class="contents1">안녕하세요!</div>
            
            <div class="login">
                <form  name="login_form" method="post" action="login_action.php">		       	
                    <ul>
                        <li><input type="text" name="id" placeholder=" 아이디" ></li>
                        <li><input type="password" id="pass" name="pass" placeholder=" 비밀번호" onkeydown="if(event.keyCode == 13) check_input()"></li>
                    </ul>
                    <div class="login_btn" onclick="check_input()">
                        LOGIN
                    </div>		    	
                 </form>
            </div>
            
        </div>
        <!-- main_text0 end -->

        <?php include "footer.php";?>
    </div>
</body>
</html>