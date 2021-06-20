<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomDraStudio - GAME #4</title>
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
            <h1>RUNNING GAME</h1>
            <div class="contents1">GAME #4</div>
            
            <div class="gamein_inner">
                <div class="game_photo">
                    <img src="./img/game4.png">
                </div>

                <div class="contents2">
                    끝없이 달리는 게임을 만들어 보았습니다.
                    <br> 지형을 새로 생성하고 삭제하는 방식으로 구현했습니다.
                    <br> 배경을 무한 반복하는 방법을 배웠습니다.
                    <br><br> 배운 내용
                    <ul>
                        <li>Never Ending Game</li>
                        <li>Repeat Background</li>
                        <li>게임 중 Text 입력 받기</li>
                    </ul>
                    <br>조작키
                    <br>점프: SPACE
                    <br><br> <a href="https://www.youtube.com/watch?v=G_gNzbD2gHo&list=PL4SIC1d_ab-avhu7-dI5-YK3rHlH-lZwB&index=1" target="_blank">[참고자료]</a>
                </div>
            </div>
            
            <div class="gamein_inner">
                <a href='./game/run' target='_blank'>
                    <div class="play_btn">
                        PLAY
                    </div>
                </a>
            </div>
        </div>

        <?php $target = 4; ?>
        <?php include "comment_form.php";?>
        <?php include "footer.php";?>
    </div>
</body>
</html>