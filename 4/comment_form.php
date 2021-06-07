<div class="comment">
    <h3>댓글</h3>

    <form  name="comment_form" method="post" action="comment_insert.php?target=<?= $target?>">
        <textarea name="content" rows="3" placeholder="New Comment"></textarea>
        <div class="button" onclick="check_input()">입력</div>
    </form>

    <?php
        $con = mysqli_connect("localhost", "user1", "12345", "project");
        $sql = "select * from comment where target=$target order by num desc";
        $result = mysqli_query($con, $sql);
        $total_record = mysqli_num_rows($result);

        for($i=0; $i < $total_record; $i++){
            mysqli_data_seek($result, $i);
            $row = mysqli_fetch_array($result);

            $id = $row["id"];
            $name = $row["name"];
            $regist_day = $row["regist_day"];
            $content = $row["content"];
            $content = str_replace(" ", "&nbsp;", $content);
            $content = str_replace("\n", "<br>", $content);
    ?>

    <div class="comment_row">
        <div class="comment_date"><?=$name?>(<?=$id?>) <?=$regist_day?></div>
        <div class="comment_content"><?=$content?></div>
    </div>

    <?php    
        }
    ?>
</div>