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
<?php
    $con = mysqli_connect("localhost", "user1", "12345", "project");
    $sql = "select * from visit where id='count'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    $num = $row["num"];
    $num++;
    $sql = "update visit set num={$num} where id='count'";
    mysqli_query($con, $sql);

    $sql = "select * from comment order by num desc";
    $result = mysqli_query($con, $sql);
    $total_record = mysqli_num_rows($result);

    $sql = "select * from members";
    $result = mysqli_query($con, $sql);
    $member = mysqli_num_rows($result);

    mysqli_close($con);
?>
        <ul class="amount">
            <li>
                <div>
                    <div class="contents1">게임 수</div>
                    <div class="result">8</div>
                </div>
            </li>
            <li>
                <div>
                    <div class="contents1">방문자</div>
                    <div class="result"><?=$num?></div>
                </div>
            </li>
            <li>
                <div>
                    <div class="contents1">댓글</div>
                    <div class="result"><?=$total_record?></div>
                </div>
            </li>
            <li>
                <div>
                    <div class="contents1">회원수</div>
                    <div class="result"><?=$member?></div>
                </div>
            </li>
        </ul>
        <!-- amount end -->

        <div class="main_text0" id="link_main_text0">
            <h1>ABOUT</h1>
            <div class="contents1">안녕하세요. 게임 개발자 지망생 엄희용 입니다.</div>
            
            <ul class="icons">
                <li>
                    <div class="icon_img">
                        <img src="img/Unity.png">
                    </div>
                    <div class="contents1_bold">UNITY</div>
                    <div class="contents2">
                        UNITY를 이용하여 게임을 제작합니다.
                    </div>
                    <a href="https://unity.com/kr" target="_blank">
                        <div class="more">
                            MORE
                        </div>
                    </a>
                </li>
                <li>
                    <div class="icon_img">
                        <img src="img/CS.png">
                    </div>
                    <div class="contents1_bold">C# Language</div>
                    <div class="contents2">
                        C# 언어를 이용합니다.
                    </div>
                    <a href="https://docs.microsoft.com/ko-kr/dotnet/csharp/" target="_blank">
                        <div class="more">
                            MORE
                        </div>
                    </a>
                </li>
                <li>
                    <div class="icon_img">
                        <img src="img/Github.png">
                    </div>
                    <div class="contents1_bold">GitHub</div>
                    <div class="contents2">
                        제 GitHub 주소 입니다.
                    </div>
                    <a href="https://github.com/MomDra" target="_blank">
                        <div class="more">
                            MORE
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <!-- main_text0 end -->

        <div class="main_text1" id="link_main_text1">
            <h1>GAME</h1>
            <div class="contents1">제가 제작한 게임들 입니다.</div>
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
                            <a href="game_in_2.php"><img src="./img/game2.png"  width="600"></a>
                        </div>
                    </div>
                    <!-- second divphoto -->
                    <div class="divphoto">
                        <div class="game_photo">
                            <a href="game_in_3.php"><img src="./img/game3.png" width="600"></a>
                        </div>
                        <div class="game_photo">
                            <a href="game_in_4.php"><img src="./img/game4.png" width="600"></a>
                        </div>
                    </div>
                    <!-- third divphoto -->
                    <div class="divphoto">
                        <div class="game_photo">
                            <a href="game_in_5.php"><img src="./img/game5.png" width="600"></a>
                        </div>
                        <div class="game_photo">
                            <a href="game_in_6.php"><img src="./img/game6.png" width="600"></a>
                        </div>
                    </div>
                </div>

                <div class="conbox con2">
                    <div class="divphoto">
                        <div class="game_photo">
                            <a href="game_in_7.php"><img src="./img/game7.png" width="600"></a>
                        </div>
                        <div class="game_photo">
                            <a href="game_in_8.php"><img src="./img/game8.png" width="600"></a>
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