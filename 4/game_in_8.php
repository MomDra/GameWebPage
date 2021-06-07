<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomDraStudio - GAME #8</title>
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
            <h1>CLICK BOX</h1>
            <div class="contents1">GAME #8</div>
            
            <div class="gamein_inner">
                <div class="game_photo">
                    <img src="./img/game8.png">
                </div>

                <div class="contents2">
                    마우스로 박스를 클릭하면 점수를 얻는 게임을 만들어 보았습니다.
                    <br>3D World 에서 2D 게임을 만들어 보았습니다.
                    <br>시간제한이 있어 시간이 끝나면 게임이 종료됩니다.
                    <br>난이도 선택을 할 수 있습니다.
                    <br><br> 배운 내용
                    <ul>
                        <li>OnMouseDown()</li>
                        <li>Coroutine</li>
                        <li>Select Difficulty</li>
                    </ul>
                    <br>조작키
                    <br>입력: 마우스 클릭
                    <br><br> <a href="https://learn.unity.com/project/unit-5-user-interface?uv=2018.4&courseId=5cf96c41edbc2a2ca6e8810f" target="_blank">[참고자료]</a>
                </div>
            </div>
            
            <div class="gamein_inner">
                <a href='./game/click1' target='_blank'>
                    <div class="play_btn">
                        PLAY
                    </div>
                </a>
            </div>
        </div>

        <?php $target = 8; ?>
        <?php include "comment_form.php";?>

        <?php include "footer.php";?>
    </div>
</body>
</html>