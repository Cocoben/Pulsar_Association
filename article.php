<?php 


$titreArticle = '';
$contentArticle = '';

if(!isset($_GET['id']) || empty($_GET['id'])){
    header('location:news.php');
}



if($_GET['id'] == 1){
    $titreArticle = 'Pop art';
    $contentArticle = '';
}else if($_GET['id'] == 2){
    $titreArticle = 'Art thérapie';
    $contentArticle = '';
}else if($_GET['id'] == 3){
    $titreArticle = 'Pop art';
    $contentArticle = '';
}else if($_GET['id'] == 4){
    $titreArticle = 'Pop art';
    $contentArticle = '';
}








include ('asset/inc/head.inc.php');?>


<title>Article</title>
</head>

<?php include ('asset/inc/nav.inc.php');?>

<!--Dans le Main-->

<main id="articlePage">

    <div class="bannerHome">
        <div class="container">
            <div class="col-8">
                <h1><?=$titreArticle;?></h1>
            </div>
        </div>
    </div>



    <div class="container col-10">


    </div>

<main>

    <?php include ('asset/inc/footer.inc.php');?>

  

</body>

</html>