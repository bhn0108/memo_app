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

    //データ登録
    $insert = 'insert into memos set memo=?, created_at=NOW()'; //登録用insert文
    $statement = $db->prepare($insert);
    $statement->bindParam(1, $_POST['memo']);
    $statement->execute(); //SQL文実行

    ?>

</pre>
</main>
</body>    
</html>