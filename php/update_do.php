<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>FORM</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">MEMO LIST</h1>    
</header>

<main>
<h2>FORM</h2>
<pre>
    <?php

    require('dbconnect.php');

    //データ編集
    $update = 'update memos set memo=? where id=?'; //登録用update文
    $statement = $db->prepare($update);
    $statement->execute(array($_POST['memo'], $_POST['id'])); //SQL文実行

    ?>
    メモの内容を変更しました
</pre>

    <p><a href="index.php">戻る</a></p>

</main>
</body>    
</html>