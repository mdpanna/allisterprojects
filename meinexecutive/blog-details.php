<?php
require_once("lib/classes.php");

 if(!isset($_GET['id']) || $_GET['id']==NULL){
     echo "<script>window.location='index.php'; </script>";
}else{
    $blog_id=$_GET['id'];
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Meinexecutive - Blog Details</title>
    <meta name="description" content="We provide recruiting services for every level of position focusing on semiconductor, security, and optical communications companies in Silicon Valley." />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="keywords" content="Mein Executive, Meinexecutive, recruiting services, companies in Silicon Valley, Recruiting and Consulting, John C. Mein, john Meinexecutive, 
John C. Mein - President - Mein Executive Talent,  Mein Executive Talent, Business Development Manager, executive talent solutions  " />
    <link rel="canonical" href="https://www.meinexecutive.com" />
    <meta property="og:title" content="meinexecutive" />
    <meta property="og:description" content="We provide recruiting services for every level of position focusing on semiconductor, security, and optical communications companies in Silicon Valley." />
    <meta property="og:type" content="Recruiting and Consulting" />
    <meta property="og:url" content="https://www.meinexecutive.com" />
    <meta property="og:image" content="https://meinexecutive.com/img/logo.png" />
    <meta property="og:site_name" content="meinexecutive" />

    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="meinexecutive">
    <meta name="twitter:description" content="We provide recruiting services for every level of position focusing on semiconductor, security, and optical communications companies in Silicon Valley.">
    <meta name="author" content="John C. Mein">

    <?php require_once("inc/header.php"); ?>

</head>

<body>


    <header class="header-part">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-box">
                        <div class="row">
                            <div class="col-6">
                                <div class="box">
                                    <button class="navbar_toggler_show-btn">
                                        <span class="myicon"><i class="fas fa-bars"></i></span>
                                    </button>
                                    <button class="navbar_toggler_close-btn">
                                        <span class="myicon"><i class="fas fa-times"></i></span>
                                    </button>
                                    <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="none" class="img-fluid"></a>

                                </div>
                            </div>
                            <div class="col-6">
                                <div class="upload-box">
                                    <div class="btn-box">

                                        <button class="cust_button cust_button-mat btn--5" data-toggle="modal" data-target="#uploadcvModal">
                                            <div class="cust_btn-text"><span>UPLOAD CV</span> <i class="fas fa-long-arrow-alt-right"></i></div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="bottom-box">
                        <div class="cust_collapse ">
                            <div class="row">
                                <div class="col-lg-6 col-md-12">
                                    <div class="box">
                                        <ul class="navbar-nav ml-auto">

                                            <?php require_once('inc/navbars.php'); ?>



                                        </ul>
                                    </div>
                                </div>
                                <!--
                                <div class="col-lg-6 col-md-12">
                                    <div class="box right-box">
                                        <span>QUICK JOB SEARCH</span>
                                        <div class="search-box">
                                            <input type="search" placeholder="Keyword search...">
                                            <button><i class="fas fa-search"></i></button>
                                        </div>
                                        <div class="contact-box">
                                            <h3>Get in Touch</h3>
                                            <p>Whether you are looking to partner with us on your latest recruitment drive, are in the market for a new role or want to join our team, get in touch and one of our team will get back to you.</p>
                                            <label>PHONE: <span>+44 1273 320 860</span></label>
                                            <label>EMAIL: <span>brighton@mrlcg.com</span></label>

                                            <div class="icon-box">
                                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#"><i class="fab fa-twitter"></i></a>
                                                <a href="#"><i class="fab fa-instagram"></i></a>
                                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="banner-part banner-part2">
        <div class="overlay">
            <div class="container">
                <div class="content-box">
                    <div class="main-box">
                        <div class="row">
                            <div class="col-lg-2 col-3">
                                <div class="img-box">
                                    <img src="img/ico-white-semiconductors-components.svg" alt="none" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-lg-10 col-9">
                                <div class="details-box">

                                    <h2>BLOG DETAILS</h2>
                                    <div class="btn-box">
                                        <button class="cust_button cust_button-mat btn--5" data-toggle="modal" data-target="#contact_form_btn">
                                            <div class="cust_btn-text"><span>CONTACT NOW</span></div>
                                        </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                <h3>Recent Posts</h3>

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

    <?php require_once('inc/contact.php'); ?>


    <?php require_once('inc/footer.php'); ?>
