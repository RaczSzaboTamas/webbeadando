<h1>One of the best car sales company in Hungary!</h1>
<br>
<p>Come and look around to discover various brands, with various equipments.
Widely spread in every county and price range. <br>You can buy or sell, it's up to you! 
Hurry up and get a great deal!
 </p>
<?php foreach ($regpage as $url => $page) { ?>
<?= (($page == $find) ? ' class="active"' : '') ?>
<a href= "index.php<?= ($url == '/') ? '' : ('?page=' . $url) ?>" class="main-button">Klick here to begin!</a>
<?php } ?>
 <link rel="stylesheet" href="main.css/index.css"> 
 <?php if(file_exists('./main.css/'.$find['file'].'.css')) { ?><link rel="stylesheet" href="./main.css/<?= $find['file']?>.css" type="text/css"><?php } ?>
 