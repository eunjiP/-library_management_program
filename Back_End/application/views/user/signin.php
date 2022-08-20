<!DOCTYPE html>
<html lang="en">
<?php include_once "application/views/template/head.php"; ?>
<body class="h-full w-full">
    <div class="signin__contain h80 w80 float-right">
        <div class="signin__header my-5">
            <h1 class="bold darkSubColor">USER LOGIN</h1>
            <div id="top_nav" class="darkSubColor bold">Welcome to the website</div>
            <div class="err">
                <?php 
                    if(isset($_GET["err"])) { 
                        print "로그인을 할 수 없습니다.";
                    }
                ?>
            </div>
        </div>
        <div class="d-flex signin__main h50 w90">
            <div class="mx-5" id="userIcon"><i id="Icon" class="fa-regular fa-circle-user rem10"></i></div>
            <form action="signin" method="post" class="mx-5">
                <div><input type="text" name="userid" placeholder="USERID" value="<?=getParam('userid')?>" autofocus required></div>
                <div><input type="password" name="pw" placeholder="PASSWORD" required></div>
                <div>
                    <input type="submit" value="LOGIN">
                </div>
            </form>
        </div>
        <div class="signin__footer my-5">
            <a href="signup" class="darkSubColor bold rem1_5">JOIN</a>
        </div>
    </div>
</body>
</html>