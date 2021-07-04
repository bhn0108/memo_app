<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>LIST</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>LIST</h2>
<pre>
    <?php
    //DB接続
    try {
        $db = new PDO('mysql:dbname=mydb;host:localhost:3306;charset=utf8', 'root', 'root');
    } catch(PDOException $e) {
        echo 'DB接続エラー：'. $e->getMessage();
        exit();
    }

    $query = 'select * from memos where id=1';
    $memos = $db->query($query);

    $memo =  $memos->fetch();
    ?>

    <article>
        <pre><?php print ($memo['memo']); ?></pre>

        <a href='index.php'>戻る</a>
    <article>

</pre>
</main>
</body>    
</html>