<?php 


$titreArticle = '';
$contentArticle = '';

if(!isset($_GET['id']) || empty($_GET['id'])){
    header('location:news.php');
}



if($_GET['id'] == 1){
    $titreArticle = 'Pop art';
    $contentArticle = '<p>En élaboration</p>';
}else if($_GET['id'] == 2){
    $titreArticle = 'Art thérapie';
    $contentArticle = 'Soon';
}else if($_GET['id'] == 3){
    $titreArticle = 'Pop art';
    $contentArticle = 'Soon';
}else if($_GET['id'] == 4){
    $titreArticle = 'Pop art';
    $contentArticle = 'Soon';
}



include ('asset/inc/head.inc.php');?>


<title>Cimaise - Article</title>
<meta name="description" content="description de la page" />
</head>

<?php include ('asset/inc/nav.inc.php');?>

<!--Dans le Main-->

<main id="articlePage">


    <h2><?=$titreArticle;?></h2>



    <section class="container">

    <div class="col-10">
            <?=$contentArticle;?>

        </div>

</section>

</main>

    <?php include ('asset/inc/footer.inc.php');?>

  

</body>

</html>