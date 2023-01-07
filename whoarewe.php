<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<style>  
    a,
    a:hover,
    a:focus,
    a:active {
        text-decoration: none;
        outline: none;
    }
    nav a:hover {
      font-size: 1.1em;
      font-weight: 500;

    }
    a,
    a:active,
    a:focus {
        color: #6f6f6f;
        text-decoration: none;
        transition-timing-function: ease-in-out;
        -ms-transition-timing-function: ease-in-out;
        -moz-transition-timing-function: ease-in-out;
        -webkit-transition-timing-function: ease-in-out;
        -o-transition-timing-function: ease-in-out;
        transition-duration: .2s;
        -ms-transition-duration: .2s;
        -moz-transition-duration: .2s;
        -webkit-transition-duration: .2s;
        -o-transition-duration: .2s;
    }

    ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    img {
        max-width: 100%;
        height: auto;
    }

    section {
        padding: 60px 0;
        /* min-height: 100vh;*/
    }

    .sec-title {
        position: relative;
        z-index: 1;
        margin-bottom: 60px;
    }

    .sec-title .title {
        position: relative;
        display: block;
        font-size: 20px;
        line-height: 24px;
        color: #198754;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .sec-title h2 {
        position: relative;
        display: block;
        font-size: 40px;
        line-height: 1.28em;
        color: #222222;
        font-weight: 600;
        padding-bottom: 18px;
    }

    .sec-title h2:before {
        position: absolute;
        content: '';
        left: 0px;
        bottom: 0px;
        width: 50px;
        height: 3px;
        background-color: #d1d2d6;
    }

    .sec-title .text {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
        margin-top: 35px;
    }

    .sec-title.light h2 {
        color: #ffffff;
    }

    .sec-title.text-center h2:before {
        left: 50%;
        margin-left: -25px;
    }

    .list-style-one {
        position: relative;
    }

    .list-style-one li {
        position: relative;
        font-size: 16px;
        line-height: 26px;
        color: #222222;
        font-weight: 400;
        padding-left: 35px;
        margin-bottom: 12px;
    }

    .list-style-one li:before {
        content: "\f058";
        position: absolute;
        left: 0;
        top: 0px;
        display: block;
        font-size: 18px;
        padding: 0px;
        color: #198754;
        font-weight: 600;
        -moz-font-smoothing: grayscale;
        -webkit-font-smoothing: antialiased;
        font-style: normal;
        font-variant: normal;
        text-rendering: auto;
        line-height: 1.6;
        font-family: "Font Awesome 5 Free";
    }

    .list-style-one li a:hover {
        color: #44bce2;
    }

    .btn-style-one {
        position: relative;
        display: inline-block;
        line-height: 30px;
        color: #ffffff;
        padding: 10px 30px;
        font-weight: 600;
        overflow: hidden;
        letter-spacing: 0.02em;
        outline: none;
        border: none;
        font-size: 18px;
        border-radius: 6px;
        background-color: #198754;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .btn-style-one:hover {
        background-color: #146c44;
        color: #ffffff;
    }

    .about-section {
        position: relative;
        padding: 80px 0 20px;
    }

    .about-section .sec-title {
        margin-bottom: 45px;
    }

    .about-section .content-column {
        position: relative;
        margin-bottom: 50px;
    }

    .about-section .content-column .inner-column {
        position: relative;
        padding-left: 30px;
    }

    .about-section .text {
        margin-bottom: 40px;
        font-size: 16px;
        line-height: 26px;
        color: #848484;
        font-weight: 400;
    }

    .about-section .list-style-one {
        margin-bottom: 45px;
    }

    .about-section .btn-box {
        position: relative;
    }

    .about-section .btn-box a {
        padding: 15px 50px;
    }

    .about-section .image-column {
        position: relative;
    }

    .about-section .image-column .text-layer {
        position: absolute;
        right: -110px;
        top: 50%;
        font-size: 325px;
        line-height: 1em;
        color: #ffffff;
        margin-top: -175px;
        font-weight: 500;
    }

    .about-section .image-column .inner-column {
        position: relative;
        padding-left: 120px;
        padding-bottom: 125px;
    }

    .about-section .image-column .inner-column:before {
        position: absolute;
        left: -75px;
        top: 65px;
        height: 520px;
        width: 520px;
        /* background-image: url(https://i.ibb.co/fxJ1jtC/about-circle-1.png); */
        content: "";
    }

    .about-section .image-column .image-1 {
        position: relative;
    }

    .about-section .image-column .image-2 {
        position: absolute;
        left: 0;
        bottom: -470px;
    }

    .about-section .image-column .image-2 img,
    .about-section .image-column .image-1 img {
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
    }

    .about-section .image-column .video-link {
        position: absolute;
        left: 70px;
        top: 170px;
    }

    .about-section .image-column .video-link .link {
        position: relative;
        display: block;
        font-size: 22px;
        color: #191e34;
        font-weight: 400;
        text-align: center;
        height: 100px;
        width: 100px;
        line-height: 100px;
        background-color: #ffffff;
        border-radius: 50%;
        box-shadow: 0 30px 50px rgba(8, 13, 62, .15);
        -webkit-transition: all 300ms ease;
        -moz-transition: all 300ms ease;
        -ms-transition: all 300ms ease;
        -o-transition: all 300ms ease;
        transition: all 300ms ease;
    }

    .about-section .image-column .video-link .link:hover {
        background-color: #191e34;
        color: #fff
    }
</style>

<body>
    <!-- the menu bar -->
    <nav class="navbar sticky navbar-light bg-success">
        <div class="container">
            <p class="navbar-brand text-white styling">
                <strong>GreenWorks</strong>
            </p>
            <a class="nav-link active text-white" href="globallistofworks.php">Les GreenWorks</a>
            <a class="nav-link text-white" href="login.php">Mes GreenWorks</a>
            <a class="nav-link text-white" href="whoarewe.php">Qui sommes Nous</a>
            <a class="nav-link text-white" href="contactus.php">Contactez-nous</a>
        </div>
    </nav>
    <section class="about-section">
        <div class="container">
            <div class="row">
                <div class="content-column col-lg-6 col-md-12 col-sm-12 order-2">
                    <div class="inner-column">
                        <div class="sec-title">
                            <span class="title">Notre devise est :</span>
                            <h3>L'environnement n'est pas la propriété de personne à détruire; il est de la responsabilité de chacun de protéger.  <br><span class="text-muted">–Mohith Agadi</span></h3>
                        </div>
                        <div class="text">Nous sommes une association de protection de l'environnement,notre but est de sensibiliser les citoyens et les citoyennes
                            par le danger qui nous contre autant que des etres humains,
                            Pour ce but la on a cree se site dans le quelle ils vont partager leurs projet manuels et l'artisanat et developper leurs sense de
                            creativite en cherchant des idee pour creer des produits qui ont <strong>Eco-friendly</strong>.</div>
                            <h5>Nos objectifs :</h5>
                            <br>
                        <ul class="list-style-one">
                            <li>Protection de la nature et de l'environnement</li>
                            <li>Lutte contre les pollutions et nuisances</li>
                            <li>sensibilisation des citoyens par l'importance de recyclage</li>
                        </ul>
                        <div class="btn-box">
                            <a href="contactus.php" class="theme-btn btn-style-one">Contacter nous</a>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column wow fadeInLeft">
                        <figure class="image-1"><a href="#" class="lightbox-image" data-fancybox="images"><img src="Pics/volunteering.jpg" alt="pic1"></a></figure>
                        <figure class="image-2"><a href="#" class="lightbox-image" data-fancybox="images"><img width="80%" src="Pics/planting.jpg" alt="pic2"></a></figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <footer class="navbar mt-auto py-3 bg-light">
        <div class="container-fluid">
            <span class="text-muted">GreenWorks 2022/2021</span>
            <a class="navbar-brand" href="Homepage.php">Acceuil</a>
        </div>
    </footer>
</body>

</html>