<?php
require_once("lib/classes.php");

 if(!isset($_GET['id']) || $_GET['id']==NULL){
     echo "<script>window.location='index.php'; </script>";
}else{
    $blog_id=$_GET['id'];
}
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-KVPTW42');</script>
    <!-- End Google Tag Manager -->
    
    
    
    <meta charset="utf-8">
    <title>Neo Vision AI - Blog Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Neo Vision AI - The Most Powerful and Precise HR Analytics and Recruiting Technology In The World." />
    <meta name="keywords" content="Employee, Salaried, Benefits, Applying For Unemployment, Unemployment Stimulus, My Benefits, Employer On Demand, Paychex Flex, Adp, Adp Workforce, Intuit Payroll, Exl Payroll, Oasis Paychex, Heartland Checkview, Gusto Pay,sba Grant, Sba Loan, NEO VISION INC" />


    <link rel="canonical" href="https://www.neovisionai.tech" />
    <meta property="og:title" content="neovisionai" />
    <meta property="og:description" content="Neo Vision AI - The Most Powerful and Precise HR Analytics and Recruiting Technology In The World." />
    <meta property="og:type" content="Website" />
    <meta property="og:url" content="https://www.neovisionai.tech" />
    <meta property="og:image" content="https://neovisionai.tech/img/logo.png" />
    <meta property="og:site_name" content="neovisionai" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="neovisionai">
    <meta name="twitter:description" content="Neo Vision AI - The Most Powerful and Precise HR Analytics and Recruiting Technology In The World.">
    <meta name="author" content="neovisionai">


    <link rel="icon" href="img/logo.png">

    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="theme-color" content="#fafafa">
    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=60ab200a0cdaa50011ef8a6c&product=sop' async='async'></script>

   <meta name="google-site-verification" content="7PRcjNFh582p8hKzrcP_yz-c8WCvQRaxf-rrzbsWrQI" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DT8F8G4BDL"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-DT8F8G4BDL');
    </script>

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KVPTW42"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


    <header class="header-part">

        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="none" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="myicon"><i class="fas fa-bars"></i></span>
                </button>

                <div class="cust_collapse">
                    <a class="close-btn"><i class="fas fa-times"></i></a>
                    <ul class="navbar-nav ml-auto">


                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about_us">ABOUT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service_part">SERVICES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#work_part">Work</a>
                        </li>
                         <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="terms-conditions.php">Terms & Conditions</a>
                        </li>
                        <li class="nav-item last_item">
                            <a class="nav-link" href="https://neovision.cc/login" target="_blank">Login</a>
                        </li>


                    </ul>

                </div>
            </nav>
        </div>
    </header>

    <section class="banner-part2">
        <div class="overlay">
            <div class="contaienr">
                <div class="content-box">
                    <h2>Blog Details</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-part blog-part2 blog_details-part comm_padd">
        <div class="container">

            <div class="content-box">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="left-box">
                            <div class="row">
                                <?php
                      
                        $sel="SELECT * FROM $blog WHERE id='$blog_id'";
                        $query=$db2->select($sel);
                        if($query){
                             while($data=$query->fetch_assoc()){

                    
                    ?>
                                <div class="col-12">
                                    <div class="box">
                                        <div class="img-box">
                                            <img src="img/blog/<?php echo $data['image']; ?>" alt="none" class="img-fluid">

                                        </div>

                                        <div class="details-box">
                                            <h4><?php echo $data['title']; ?></h4>
                                            <label><i class="far fa-calendar-alt"></i> <?php echo $data['date']; ?></label>
                                            <p><?php echo $data['para']; ?></p>
                                            <div class="share-btn">
                                                <!-- ShareThis BEGIN -->
                                                <div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                             }
                        }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="right-box">
                            <div class="title-box">
                                <h3>Recente Posts</h3>

                            </div>
                            <div class="row">
                                <?php
                      
                        $sel="SELECT * FROM $blog ORDER BY id ASC LIMIT 3";
                        $query=$db2->select($sel);
                        if($query){
                             while($data=$query->fetch_assoc()){

                    
                    ?>
                                <div class="col-12">
                                    <div class="box">
                                        <div class="img-box">
                                            <img src="img/blog/<?php echo $data['image']; ?>" alt="none" class="img-fluid">
                                        </div>
                                        <div class="details-box">
                                            <h4><a href="blog-details.php?id=<?php echo $data['id']; ?>"><?php echo $data['title']; ?></a></h4>
                                            <label><i class="far fa-calendar-alt"></i> <?php echo $data['date']; ?></label>
                                            <p><?php echo limit_words($data['para'],30); ?>...<a href="blog-details.php?id=<?php echo $data['id']; ?>">See More</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <?php } } ?>

                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



<?php require_once('inc/footer.php'); ?>
