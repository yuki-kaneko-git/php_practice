<?php
//クッキー
    print "★クッキーの単元です";
    $flag = setcookie("visited", 1);
?>

<html>
    <head><title>PHP TEST</title></head>
    <body>
        <?php
            if($flag){
                print('<p>クッキーを書き込みました</p>');
            }else{
                print('<p>クッキーの書き込みに失敗しました</p>');
            }
        ?>
    </body>
</html>

<?php
/* issetは変数があるかどうか判別する関数
$a = $_COOKIE[""] で特定のクッキーの値を調べる（クッキーは連想配列）*/

    if(isset($_COOKIE["visited"])){
        $count = $_COOKIE["visited"] + 1;
    }else{
        $count = 1;
    }
    $flag = setcookie("visited", $count);
?>

<html>
    <head><title>PHP TEST</title></head>
    <body>
        <?php
            print('<p>訪問回数は'.$count.'回目です</p>')
        ?>
    </body>
</html>

<?php
    if(isset($_COOKIE["visited2"])){
        $count2 = $_COOKIE["visited2"] + 1;
    }else{
        $count2 = 1;
    }
    //クッキーの有効期限を定める(10秒後に消える)
    $flag2 = setcookie("visited2", $count2, time() + 10);
?>

<html>
<head><title>PHP TEST</title></head>
<body>
    <?php
        print('<p>訪問回数は'.$count2.'回目です</p>')
    ?>
</body>
</html>

<?php
//クッキーを消す
    if (isset($_COOKIE["visited3"])){
        $count3 = $_COOKIE["visited3"] + 1;
    }else{
        $count3 = 1;
    }
    if ($count3 > 3){
        setcookie("visited3", $count3, time() - 1800);
    }else{
        setcookie("visited3", $count3);
    }
?>
<html>
    <head><title>PHP TEST</title></head>
    <body>
        <?php
            print('<p>訪問回数は'.$count3.'回目です</p>');
        ?>
    </body>
</html>



<?php
//セッションの開始
    print "★セッションの単元です"."<br/>";
    session_start();
?>

<html>
    <head><title>PHP TEST</title></head>
    <body>
        <?php
        //セッションIDはクライアント側にクッキー名「PHPSESSID」で保存されます。
            if(!isset($_COOKIE["PHPSESSID"])){
                print("初回。セッションを開始します。");
            }else{
                print('セッションは開始しています<br>');
                print('セッションIDは'.$_COOKIE["PHPSESSID"].'です。')."<br/>";
            }
        ?>
    </body>
</html>

<html>
    <head><title>PHP TEST</title></head>
    <body>
        <?php
        //セッションの書き込みと読み込み
            print "★セッションの書き込みと読み込み"."<br/>";
            if(!isset($_COOKIE["visited"])){
                print("初回。セッションを開始します。");
                $_SESSION["visited"] = 1;
                $_SESSION["date"] = date('c');
            }else{
                $visited = $_SESSION["visited"];
                $visited++;
                print("訪問回数は".$visited."です。<br/>");
                $_SESSION["visited"] = $visited;
                if(isset($_SESSION["date"])){
                    print("前回の訪問日時は".$_SESSION["date"]."です。<br>");
                }
                $_SESSION["date"] = date("c");
            }
        ?>
    </body>
</html>

<html>
    <head><title>PHP TEST</title></head>
    <body>
        <?php
        //セッションの削除
            if(!isset($_SESSION["visited2"])){
                print("初回。セッションを開始します。");
                $_SESSION["visited2"] = 1;
                $_SESSION["date"] = date('c');
            }else{
                $visited2 = $_SESSION["visited2"];
                $visited2++;
                print("訪問回数は".$visited2."です。<br/>");
                $_SESSION["visited2"] = $visited2;
                if(isset($_SESSION["date"])){
                    print("前回の訪問日時は".$_SESSION["date"]."です。<br>");
                }
                $_SESSION["date"] = date("c");
            }
        ?>
        <p><a href="./sessiontest.php">ログアウトする</a>
    </body>
</html>



<html>
    <head><title>PHP TEST</title></head>
    <body>
        <p>★クラスの単元です</p>
        <?php
        // メンバ変数とメンバメソッド
            $tv = new Television();
            $tv->channnelNo = 8;
            $tv->dispChannnel();

            class Television{
                public $channelNo;

                function dispChannnel(){
                    print("現在のチャンネルは".$this->channnelNo);
                }
            }
        ?>
    </body>
</html>

<html>
    <head><title>PHP TEST</title></head>
    <body>
        <?php
        //引数あり
            $tv = new Television2();
            $tv->setChannel(5);

            class Television2{
                public $channelNo;
                function dispChannel(){
                    print('現在のチャンネルは'.$this->channelNo);
                }
                function setChannel($channel){
                    $this->channelNo = $channel;
                    $this->dispChannel();
                }
            }
        ?>
    </body>
</html>