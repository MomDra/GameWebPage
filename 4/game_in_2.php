<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomDraStudio - GAME #2</title>
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
            <h1>슈퍼마리오</h1>
            <div class="contents1">GAME #2</div>
            
            <div class="gamein_inner">
                <div class="game_photo">
                    <img src="./img/game2.png">
                </div>

                <div class="contents2">
                    슈퍼마리오 게임을 만들어 보았습니다.
                    <br>플레이어와 다른 객체들간의 충돌 시 처리 방법과
                    <br> 레이어를 사용해 충돌한 물체의 타입을 구분하는 법을 배웠습니다.
                    <br><br> 배운 내용
                    <ul>
                        <li>OnCollisionEnter(), OnTriggerEnter()</li>
                        <li>Layer의 역할</li>
                        <li>Unity Tool 사용법</li>
                    </ul>
                    <br>조작키
                    <br> 이동: 방향키 &nbsp; 점프: SPACE
                    <br><br> <a href="https://www.youtube.com/watch?v=v_Y5FH_tCpc&list=PLO-mt5Iu5TeZGR_y6mHmTWyo0RyGgO0N_&index=1" target="_blank">[참고자료]</a>
                </div>
            </div>
            
            <div class="gamein_inner">
                <a href='./game/Mario' target='_blank'>
                    <div class="play_btn">
                        PLAY
                    </div>
                </a>
            </div>
        </div>

        <?php $target = 2; ?>
        <?php include "comment_form.php";?>

        <?php include "footer.php";?>
    </div>
</body>
</html>