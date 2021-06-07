<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomDraStudio - GAME #6</title>
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
            <h1>JOHN LEMON’S HAUNTED JAUNT</h1>
            <div class="contents1">GAME #6</div>
            
            <div class="gamein_inner">
                <div class="game_photo">
                    <img src="./img/game6.png">
                </div>

                <div class="contents2">
                    적들을 피해 집을 탈출하는 게임을 만들어 보았습니다.
                    <br>적들이 구간을 반복하여 움직이게 만들었습니다. 
                    <br>공포 분위기를 조성하는 다양한 카메라 효과를 사용해 보았습니다.
                    <br><br> 배운 내용
                    <ul>
                        <li>Nav Mesh Agent</li>
                        <li>Cinemachine Virtual Camera</li>
                    </ul>
                    <br>조작키
                    <br>이동: 방향키
                    <br><br> <a href="https://learn.unity.com/project/jon-remonyi-gongpo-ceheom-john-lemon-s-haunted-jaunt-3d-cogeubjayong?uv=2019.4" target="_blank">[참고자료]</a>
                </div>
            </div>
            
            <div class="gamein_inner">
                <a href='./game/john' target='_blank'>
                    <div class="play_btn">
                        PLAY
                    </div>
                </a>
            </div>    
        </div>

        <?php $target = 6; ?>
        <?php include "comment_form.php";?>

        <?php include "footer.php";?>
    </div>
</body>
</html>