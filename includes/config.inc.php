<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
$pagetitle = array(
    'title' => 'Best Car Sales and Trades Ltd.',
);

$header = array(
    'imagesource' => 'loggo.png',
    'imagealt' => 'logo',
);

$footer = array(
    'copyright' => 'Copyright '.date("Y"),
    'firm' => 'Best Car Sales and Trades Ltd.',
    'fa-facebook' => '<i class="fa fa-facebook" aria-hidden="true"></i>',
    'fa-twitter'  => '<i class="fa fa-twitter" aria-hidden="true"></i>',
    'fa-instagram'=> '<i class="fa fa-instagram" aria-hidden="true"></i>',
    'fa-linkedin' => '<i class="fa fa-linkedin" aria-hidden="true"></i>'
);

$pages = array(
	'/' => array('file' => 'home', 'text' => 'HOME', 'menun' => array(1,1)),
	'about' => array('file' => 'about', 'text' => 'ABOUT', 'menun' => array(1,1)),
	'blog' => array('file' => 'blog', 'text' => 'BLOG', 'menun' => array(1,1)),
    'gallery' => array('file' => 'gallery', 'text' => 'GALLERY', 'menun' => array(1,1)),
    'contact' => array('file' => 'contact', 'text' => 'CONTACT', 'menun' => array(1,1)),
    'login' => array('file' => 'login', 'text' => 'LOG-IN', 'menun' => array(1,0)),
    'registration' => array('file' => 'registration', 'text' => 'REGISTRATION', 'menun' => array(0,0)),
    'cars' => array('file' => 'cars', 'text' => 'CARS FOR SALE', 'menun' => array(0,1)),
    'upload' => array('file' => 'upload', 'text' => 'UPLOAD', 'menun' => array(0,1)),
    'logout' => array('file' => 'logout', 'text' => 'LOG-OUT', 'menun' => array(0,1)),
    'cart' => array('file' => 'cart', 'text' => 'CART', 'menun' => array(0,1)),
);

$regpage = array(
    'registration' => array('file' => 'registration', 'text' => '', 'menun' => array(1,1))
);

$error_page = array ('file' => '404', 'text' => 'PAGE NOT FOUND 404!');

$FOLDER = './main.images/';
$TYPES = array ('.jpg', '.png','.jpeg');
$MEDIATYPES = array('image/jpeg', 'image/png');
$DATEFORMAT = "m/d/Y H:i";
// $MAXSIZE = 500*1024;
?>

<?php
require_once('./user_login/config.php');
session_start();
