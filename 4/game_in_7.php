<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomDraStudio - GAME #7</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/gamein.css">
    <link rel="stylesheet" type="text/css" href="./css/comment.css">
    <script src="./js/comment_input.js"></script>
    <script type="module" src="./js/app.js"></script>
</head>
<body>
    <div class="wrap">
        <?php include "header2.php";?>

        <div class="gamein_text0">
            <h1>DRIVING SIMULATION</h1>
            <div class="contents1">GAME #7</div>
            
            <div class="gamein_inner">
                <div class="game_photo">
                    <img src="./img/game7.png">
                </div>

                <div class="contents2">
                    자동차를 움직이는 시뮬레이션을 만들어 보았습니다.
                    <br>자동차의 중심에 힘을 가하는 법을 배웠습니다.
                    <br>자동차의 위치가 변하고 카메라가 자동차를 따라가는 방법을 배웠습니다.
                    <br><br> 배운 내용
                    <ul>
                        <li>LateUpdate()</li>
                        <li>Wheel Colider</li>
                        <li>AddForce centerOfMass</li>
                    </ul>
                    <br>조작키
                    <br>이동: 방향키
                    <br><br> <a href="https://learn.unity.com/project/unit-1-driving-simulation?uv=2018.4&courseId=5cf96c41edbc2a2ca6e8810f" target="_blank">[참고자료]</a>
                </div>
            </div>
            
            <div class="gamein_inner">
                <a href='./game/Drive' target='_blank'>
                    <div class="play_btn">
                        PLAY
                    </div>
                </a>
            </div>
        </div>

        <?php $target = 7; ?>
        <?php include "comment_form.php";?>

        <?php include "footer.php";?>
    </div>
</body>
</html>