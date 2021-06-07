<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomDraStudio - GAME #3</title>
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
            <h1>TOP DOWN RPG</h1>
            <div class="contents1">GAME #3</div>
            
            <div class="gamein_inner">
                <div class="game_photo">
                    <img src="./img/game3.png">
                </div>

                <div class="contents2">
                    Top Down 방식의 게임을 만들어 보았습니다.
                    <br> Tile Map으로 맵을 구성했고
                    <br> Raycast를 사용하여 NPC들과 상호작용 합니다.
                    <br><br> 배운 내용
                    <ul>
                        <li>Raycast</li>
                        <li>Tile Map</li>
                        <li>간단한 퀘스트 관리</li>
                    </ul>
                    <br>조작키
                    <br> 이동: 방향키 &nbsp; 상호작용: SPACE
                    <br><br> <a href="https://www.youtube.com/watch?v=JY-KFx3OsJo&list=PLO-mt5Iu5TeYfyXsi6kzHK8kfjPvadC5u&index=1" target="_blank">[참고자료]</a>
                </div>
            </div>
            
            <div class="gamein_inner">
                <a href='./game/rpg' target='_blank'>
                    <div class="play_btn">
                        PLAY
                    </div>
                </a>
            </div>
        </div>

        <?php $target = 3; ?>
        <?php include "comment_form.php";?>

        <?php include "footer.php";?>
    </div>
</body>
</html>