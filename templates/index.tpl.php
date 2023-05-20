<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0">
        <title><?= $pagetitle['title'] . ( (isset($pagetitle['motto'])) ? ('|' . $pagetitle['motto']) : '' ) ?></title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
        <?php if(file_exists('./main.css/'.$find['file'].'.css')) { ?><link rel="stylesheet" href="./main.css/<?= $find['file']?>.css" type="text/css"><?php } ?>
        
    </head>
 <body>
    <div class="Main-Container">
        <section class="header">
            <nav>
                <img src="./main.images/<?=$header['imagesource']?>" alt="<?=$header['imagealt']?>">
                <div class="nav-links" id="NavLinks">
                    <!-- <i class="fa fa-times" onclick="hidemenu()"></i> -->
                    <ul>
                        <?php foreach ($pages as $url => $page) { ?>
                            <?php if(! isset($_SESSION['userlogin']) && $page['menun'][0] || isset($_SESSION['userlogin']) && $page['menun'][1]) { ?>
                                <li<?= (($page == $find) ? ' class="active"' : '') ?>>
                                <a href="index.php<?= ($url == '/') ? '' : ('?page=' . $url) ?>"> 
                                <?= $page['text'] ?></a>
                                </li>
                            <?php } ?>
					    <?php } ?>
                    </ul>                  
                </div> 
                <!-- <i class="fa fa-bars" onclick="showmenu()"></i> -->
            </nav>
                <div class="text-box">
                <?php include("./templates/pages/{$find['file']}.tpl.php"); ?> 
                </div>
        </section>
<section class="Main-footer">
    <footer>
        <div>
            <?php if(isset($footer['fa-facebook'])) { ?>&nbsp;<?= $footer['fa-facebook'] ?> <?php } ?>
            <?php if(isset($footer['fa-twitter'])) { ?>&nbsp;<?= $footer['fa-twitter'] ?> <?php } ?>
            <?php if(isset($footer['fa-instagram'])) { ?>&nbsp;<?= $footer['fa-instagram'] ?> <?php } ?>
            <?php if(isset($footer['fa-linkedin'])) { ?>&nbsp;<?= $footer['fa-linkedin'] ?> <?php } ?>&nbsp;
            <?php if(isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>&nbsp;
            <?php if(isset($footer['firm'])) { ?><?= $footer['firm']; ?><?php } ?>
        </div> 
    </footer>
</section>
            <!--------Javascript for Toggle Menu--------->
            <script>
                var NavLinks=document.getElementById("NavLinks");
                function showmenu(){
                    NavLinks.style.right="0";
                }
                function hidemenu(){
                    NavLinks.style.right="-200px"
                }
            </script>       
    </div>
 </body>
</html>