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

    require('dbconnect.php');
    
    //一覧取得
    $query = 'select * from memos order by id desc';
    $records = $db->query($query);
    ?>

    <!-- メモの内容を一行づつ取り出し作成日時とともに一覧表示 -->
    <article>
    <?php while($record = $records->fetch()): ?>
            <p><a href="memo.php?id=<?php print($record['id']); ?>"><?php print(mb_substr($record['memo'], 0, 50)); ?></a></p>
            <time><?php print($record['created_at']); ?></time>
            <hr>
    <?php endwhile; ?>
    </article>

</pre>
</main>
</body>    
</html>