<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomDraStudio - GAME #5</title>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="./css/gamein.css">
    <link rel="stylesheet" type="text/css" href="./css/comment.css">
    <script src="./js/comment_input.js"></script>
    <script type="module" src="./js/app.js"></script>
</head>
<body>
    <div class="wrap">
        <?php include "header2.php";?>

        <div class="gamein_text0">
            <h1>FLAPPY BIRD</h1>
            <div class="contents1">GAME #5</div>
            
            <div class="gamein_inner">
                <div class="game_photo">
                    <img src="./img/game5.png">
                </div>

                <div class="contents2">
                    기둥 사이를 통과하는 게임을 만들어 보았습니다.
                    <br> 지형을 미리 생성해두고 
                    <br>반복 사용하는 방식으로 구현했습니다.
                    <br><br> 배운 내용
                    <ul>
                        <li>Object Pooling</li>
                        <li>마우스 입력</li>
                    </ul>
                    <br>조작키
                    <br>점프: 마우스 클릭
                    <br><br> <a href="https://learn.unity.com/tutorial/live-session-making-a-flappy-bird-style-game?language=en#" target="_blank">[참고자료]</a>
                </div>
            </div>
            
            <div class="gamein_inner">
                <a href='./game/flappybird' target='_blank'>
                    <div class="play_btn">
                        PLAY
                    </div>
                </a>
            </div>
        </div>

        <?php $target = 5; ?>
        <?php include "comment_form.php";?>

        <?php include "footer.php";?>
    </div>
</body>
</html>