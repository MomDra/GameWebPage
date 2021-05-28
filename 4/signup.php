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
    <link rel="stylesheet" type="text/css" href="./css/signup.css">
    <script type="module" src="./js/app.js"></script>
    <script>
        var check = false;
        function check_input() {
            if (!document.signup_form.id.value) {
                alert("아이디를 입력하세요!");
                document.signup_form.id.focus();
                return;
            }

            if (!document.signup_form.pass.value) {
                alert("비밀번호를 입력하세요!");
                document.signup_form.pass.focus();
                return;
            }

            if (!document.signup_form.pass_confirm.value) {
                alert("비밀번호확인을 입력하세요!");
                document.signup_form.pass_confirm.focus();
                return;
            }

            if (!document.signup_form.name.value) {
                alert("이름을 입력하세요!");
                document.signup_form.name.focus();
                return;
            }

            if (!document.signup_form.email1.value) {
                alert("이메일 주소를 입력하세요!");
                document.signup_form.email1.focus();
                return;
            }

            if (!document.signup_form.email2.value) {
                alert("이메일 주소를 입력하세요!");
                document.signup_form.email2.focus();
                return;
            }

            if (document.signup_form.pass.value !=
                document.signup_form.pass_confirm.value) {
                alert("비밀번호가 일치하지 않습니다.\n다시 입력해 주세요!");
                document.signup_form.pass.focus();
                document.signup_form.pass.select();
                return;
            }

            if (!check) {
                alert("아이디 중복확인을 해주세요.");
                document.signup_form.id.focus();
                return;
            }

            document.signup_form.submit();
        }

        function check_id() {
            window.open("signup_check_id.php?id=" + document.signup_form.id.value, "IDcheck", "left=700,top=300,width=350,height=200,scrollbars=no,resizable=yes");
            check = true;
        }
    </script>
</head>
<body>
    <div class="wrap">
        <?php include "header2.php";?>

        <div class="signup_text0">
            <h1>SIGN UP</h1>
            <div class="contents1">안녕하세요!</div>
            <div class="join_box">
                <form name="signup_form" method="post" action="signup_insert.php">
                    <h2></h2>
                    <div class="form id">
                        <div class="col1">아이디</div>
                        <div class="col2">
                            <input type="text" name="id">
                        </div>
                        <div class="col3">
                            <h4 onclick="check_id()">중복확인</h4>
                        </div>
                    </div>
                
            
                    <div class="form">
                        <div class="col1">비밀번호</div>
                        <div class="col2">
                            <input type="password" name="pass">
                        </div>
                    </div>
                    
                    <div class="form">
                        <div class="col1">비밀번호 확인</div>
                        <div class="col2">
                            <input type="password" name="pass_confirm">
                        </div>
                    </div>
                    
                    <div class="form">
                        <div class="col1">이름</div>
                        <div class="col2">
                            <input type="text" name="name">
                        </div>
                    </div>
                    
                    <div class="form email">
                        <div class="col1">이메일</div>
                        <div class="col2">
                            <input type="text" name="email1">@<input type="text" name="email2">
                        </div>
                    </div>
                    
                    <div class="bottom_line"> </div>
                    <div class="buttons">
                        <h3 onclick="check_input()">확인</h3>
                    </div>
                </form>
            </div> <!-- join_box -->
            
        </div>
        <!-- main_text0 end -->

        <?php include "footer.php";?>
    </div>
</body>
</html>