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

    if (isset($_REQUEST['page']) && is_numeric($_REQUEST['page'])) {
        $page = $_REQUEST['page'];
    } else {
        $page = 1;
    }

    $start = 5 * ($page - 1);

    //一覧取得
    $query = 'select * from memos order by id desc limit ?, 5';
    $records = $db->prepare($query);
    $records->bindParam(1, $start, PDO::PARAM_INT);
    $records->execute();
    ?>

    <!-- メモの内容を一行づつ取り出し作成日時とともに一覧表示 -->
    <article>
        <?php while($record = $records->fetch()): ?>
            <p><a href="memo.php?id=<?php print($record['id']); ?>"><?php print(mb_substr($record['memo'], 0, 50)); ?></a></p>
            <time><?php print($record['created_at']); ?></time>
            <hr>
        <?php endwhile; ?>
        
        <!-- ページ遷移リンク -->
        <!-- 2ページ目以上のとき1ページ前へのリンクを表示 --> 
        <?php if($page >= 2): ?>
            <a href="index.php?page=<?php print($page-1); ?>"><?php print($page-1); ?>ページ目へ</a>
        <?php endif; ?>
        　|
        <?php
            $counts = 'select count(*) as cnt from memos';
            $counts = $db->query($counts);
            $count = $counts->fetch();
            $max_page = ceil($count['cnt'] / 5);
            if ($page < $max_page):
        ?>
            <a href="index.php?page=<?php print($page+1); ?>"><?php print($page+1); ?>ページ目へ</a>
        <?php endif; ?>
    </article>

</pre>
</main>
</body>    
</html>