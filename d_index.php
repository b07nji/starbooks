<?php 
include "inc/header.php";
?>

<body>
<div class="header">
    <h1>Starbooks</h1>
</div>
<div class="wrapper">
    <?php foreach ($books as $book) { ?>
        <div class="post">
            <p><?php echo $book['date']; ?></p>
            <img src="<?php echo 'img/'.$book['image']; ?>">
            <h2><?php echo $book['title'] ?></h2>
            <p><?php echo $book['content'] ?></p>
        </div>
    <?php } ?>

</div>
<div class="footer">
    <form action="design_result.html" method="POST" style="margin: 3%;">
        <input type="text" placeholder="本のタイトル">
        <input type="submit" value="&#xf002; 検索" class="fas">
    </form>
</div>
</body>
</html>