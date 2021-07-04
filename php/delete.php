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
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>FORM</h2>
<pre>
    <?php

    require('dbconnect.php');

    //データ削除
    if (isset($_REQUEST['id']) && is_numeric($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $delete = 'delete from memos where id=?'; //削除用update文
        $statement = $db->prepare($delete);
        $statement->execute(array($id)); //SQL文実行
    }
    ?>
    メモを削除しました
</pre>

    <p><a href="index.php">戻る</a></p>

</main>
</body>    
</html>