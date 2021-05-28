<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomDraStudio - GAME #1</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="./css/gamein.css">
    <script type="module" src="./js/app.js"></script>
</head>
<body>
    <div class="wrap">
        <?php include "header2.php";?>

        <div class="gamein_text0">
            <h1>공을 튀겨라!</h1>
            <div class="contents1">GAME #1</div>
            
            <div class="gamein_inner">
                <div class="game_photo">
                    <img src="./img/game1.png">
                </div>

                <div class="contents2">
                    '유니티' 툴을 처음 사용해 보았기 때문에
                    <br> 툴 사용법을 익히는데 중점을 두었습니다.
                    <br><br> 배운 내용
                    <ul>
                        <li>C# 언어 문법</li>
                        <li>inpector, hierarchy, project 창의 역할</li>
                        <li>GameObject 생성, 종류</li>
                    </ul>
                    <br>조작키
                    <br> 이동: WASD &nbsp; 점프: SPACE
                </div>
            </div>
            
            <div class="play_btn" onclick= "window.open().location.href = 'http://localhost/game/Drive/'">
                PLAY
            </div>

        </div>
        <!-- main_text0 end -->

        <?php include "footer.php";?>
    </div>
</body>
</html>