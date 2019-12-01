<?php include ('asset/inc/head.inc.php');?>


<title>Cimaise - L’association qui aide à comprendre les enjeux de société par l’art.</title>
<meta name="description" content="description de la page" />
</head>

<?php include ('asset/inc/nav.inc.php');?>


<main id="homePage">

  <div class="bannerHome">
    <div class="container">
      <div class="col-8" data-aos="fade-up" data-aos-offset="50" data-aos-delay="50" data-aos-duration="800"
            data-aos-easing="ease-out">
        <h1>L'art de comprendre</h1>
        <span class="underlineH1"></span>
        <p>Créée en 2019, Cimaise regroupe un collectif de personnes ayant
          pour ambition <strong>la revalorisation</strong> des arts dans une époque où la vitesse de l’information
          nous empêche d’émettre un avis sur la société actuelle.</p>
        <a href="quiSommesNous.php" class="btn">Informations</a>
      </div>
    </div>
    <span id="scrollDown"><a href="#uneHomePage"><i class="fas fa-angle-down"></i></a></span>
  </div>



  <section id="uneHomePage" class="container">
    <h2 >à la une</h2>
    <div>

      <article class="col-6" data-aos="fade-up" data-aos-offset="50" data-aos-delay="50" data-aos-duration="800"
            data-aos-easing="ease-out">
        <figure>
          <a href="article.php?id=1">
            <img src="asset/img/article/article1-S.jpg" alt="">
          </a>
        </figure>
        <div>
          <h3>Pop art</h3>
          <p>Technique mis en place par des éducateurs l’art thérapie
            permet aujourd’hui d’apporter de réelles solutions pour créer un contact avec les jeunes .
          </p>
          <a href="">lire plus</a>
        </div>
      </article>


      <article class="col-6" data-aos="fade-up" data-aos-offset="50" data-aos-delay="250" data-aos-duration="800"
            data-aos-easing="ease-out">
        <figure>
          <a href="article.php?id=2">
            <img src="asset/img/article/article2-S.png" alt="">
          </a>
        </figure>
        <div>
          <h3>Art thérapie</h3>
          <p>Technique mis en place par des éducateurs l’art thérapie
            permet aujourd’hui d’apporter de réelles solutions pour créer un contact avec les jeunes .
          </p>
          <a href="">lire plus</a>
        </div>
      </article>


    </div>
    <a href="news.php" class="btn">voir plus d’articles</a>


  </section>


  <section id="citeHomePage">
    <div class="container">
      <h2>notre raison d'être</h2>
      <p>“Les arts sont des moyens d’expression des mœurs
        dans une époque donnée. Comprendre une oeuvre, c’est comprendre l’environnement
        et le contexte dans laquelle elle émerge.”</p>
      <a href="quiSommesNous.php" class="btn">informations</a>
    </div>
  </section>



  <section id="actuHomePage" class="container">
    <h2>Actualité</h2>

    <div class="actualite">
      <p class="date">22 novembre 2019</p>
      <div>
        <p>
          <strong>Cimaise valide sa stratégie de communication</strong>
          Après 4 jours de travail extrèmement intensif l’association
          a enfin validé sa stratégie auprès de Gregory Nedelec.</p>
      </div>
    </div>

    <div class="actualite">
      <p class=" date">22 novembre 2019</p>
      <div>
        <p>
          <strong>Cimaise valide sa stratégie de communication</strong>
          Après 4 jours de travail extrèmement intensif l’association
          a enfin validé sa stratégie auprès de Gregory Nedelec.</p>
      </div>
    </div>

    <a href="news.php" class="btn">toute l'actualité</a>

  </section>


  <section class="sectionBlock container">
    <h2>Ensemble nous sommes la solution</h2>
    <div class="row">
      <div class="col-6"><a href="contact.php" class="block contactBlock">
          <h2>nous contacter</h2>
        </a></div>
      <div class="col-6"><a href="engage.php" class="block engageBlock">
          <h2>s'engager</h2>
        </a></div>
      <div class="col-12"><a href="" class="block donationBlock">
          <h2>faire un don</h2>
        </a></div>
    </div>
  </section>
</main>



<?php include ('asset/inc/footer.inc.php');?>


</body>

</html>