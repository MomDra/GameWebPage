<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MomDraStudio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="module" src="./js/app.js"></script>
</head>
<body>
    <div class="wrap">
        <?php include "header.php";?>

        <ul class="amount">
            <li>
                <div>
                    <div class="contents1">지금까지 만든 게임 수</div>
                    <div class="result">5</div>
                </div>
            </li>
            <li>
                <div>
                    <div class="contents1">목표 게임 수</div>
                    <div class="result">22</div>
                </div>
            </li>
            <li>
                <div>
                    <div class="contents1">방문자 수</div>
                    <div class="result">22</div>
                </div>
            </li>
            <li>
                <div>
                    <div class="contents1">좋아요</div>
                    <div class="result">20</div>
                </div>
            </li>
        </ul>
        <!-- amount end -->

        <div class="main_text0" id="link_main_text0">
            <h1>ABOUT</h1>
            <div class="contents1">안녕하세요 게임 개발자 지망생 엄희용 입니다</div>
            
            <ul class="icons">
                <li>
                    <div class="icon_img">
                        <img src="img/icon3.svg">
                    </div>
                    <div class="contents1_bold">치밀한 계획</div>
                    <div class="contents2">
                        우리는 계획적으로 단속을 피해서 치밀하게 일을 처리합니다
                    </div>
                    <div class="more">
                        MORE
                    </div>
                </li>
                <li>
                    <div class="icon_img">
                        <img src="img/icon0.svg">
                    </div>
                    <div class="contents1_bold">치밀한 계획</div>
                    <div class="contents2">
                        우리는 계획적으로 단속을 피해서 치밀하게 일을 처리합니다
                    </div>
                    <div class="more">
                        MORE
                    </div>
                </li>
                <li>
                    <div class="icon_img">
                        <img src="img/icon2.svg">
                    </div>
                    <div class="contents1_bold">치밀한 계획</div>
                    <div class="contents2">
                        우리는 계획적으로 단속을 피해서 치밀하게 일을 처리합니다
                    </div>
                    <div class="more">
                        MORE
                    </div>
                </li>
            </ul>
        </div>
        <!-- main_text0 end -->

        <div class="main_text1" id="link_main_text1">
            <h1>GAME</h1>
            <div class="contents1">제가 개발한 게임들 입니다.</div>
            <div class="game">
                <input type="radio" name="tabmenu" id="tab01" checked>
                <input type="radio" name="tabmenu" id="tab02">

                <div class="conbox con1">
                    <!-- first divphoto -->
                    <div class="divphoto">
                        <div class="game_photo">
                            <a href="game_in.php"><img src="./img/game1.png" width="600"></a>
                        </div>
                        <div class="game_photo">
                            <img src="./img/game2.png"  width="600">
                        </div>
                    </div>
                    <!-- second divphoto -->
                    <div class="divphoto">
                        <div class="game_photo">
                            <img src="./img/game3.png" width="600">
                        </div>
                        <div class="game_photo">
                            <img src="./img/game4.png" width="600">
                        </div>
                    </div>
                    <!-- third divphoto -->
                    <div class="divphoto">
                        <div class="game_photo">
                            <img src="./img/game5.png" width="600">
                        </div>
                        <div class="game_photo">
                            <img src="./img/game6.png" width="600">
                        </div>
                    </div>
                </div>

                <div class="conbox con2">
                    <div class="divphoto">
                        <div class="game_photo">
                            <img src="./img/game7.png" width="600">
                        </div>
                        <div class="game_photo">
                            <img src="./img/game8.png" width="600">
                        </div>
                    </div>
                </div>

                <div class="btn">
                    <label for="tab01"></label>
                    <label for="tab02"></label>
	            </div>
            </div>
        </div>
        <!-- main_text1 end -->

        <?php include "footer.php";?>
    </div>
</body>
</html>