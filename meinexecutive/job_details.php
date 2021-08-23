<?php
require_once("lib/classes.php");

 if(!isset($_GET['post_id']) || $_GET['post_id']==NULL){
     echo "<script>window.location='index.php'; </script>";
}else{
    $post_id=$_GET['post_id'];
}
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Meinexecutive - Career Details</title>
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

    <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=60dd63e90aab5d00125b2c0b&product=inline-share-buttons' async='async'></script>
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

                                    <h2>JOB DETAILS</h2>
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

    <section class="career-part career_details-part comm_padd">
        <div class="container">

            <div class="content-box">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="left-box">
                            <div class="row">
                                <?php
                      
                        $sel="SELECT * FROM $job_post WHERE id='$post_id'";
                        $query=$db2->select($sel);
                        if($query){
                             while($data=$query->fetch_assoc()){

                    
                    ?>
                                <div class="col-12">
                                    <div class="card box">
                                        <div class="card-body">
                                            <div class="details-box">
                                                <div class="description-box">
                                                    <h4><?php echo $data['title']; ?></h4>
                                                    <label><i class="far fa-calendar-alt"></i> <?php echo $data['date']; ?></label>
                                                    <p><?php echo $data['description']; ?></p>
                                                </div>

                                                <div class="cust_btn">
                                                    <a data-toggle="modal" data-target="#post_id<?php echo $data['id']; ?>" class="mt-3 btn btn-success">Apply Now</a>

                                                </div>
                                                <div class="share-btn mt-2">

                                                    <div class="sharethis-inline-share-buttons"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                                <!-- Modal -->
                                <div class="modal fade" id="post_id<?php echo $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Send Us Your CV </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="post" enctype="multipart/form-data" id="job_cv_send">
                                                    <div class="form-group">
                                                        <label>Job Title</label>
                                                        <input type="text" disabled class="form-control" value="<?php echo $data['title']; ?> ">
                                                        <input type="hidden" name="job_title" value="<?php echo $data['title']; ?> ">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input type="text" class="form-control" name="name" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" required>
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Message</label>
                                                        <textarea class="form-control" name="message"></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile2" name="cv_file" required>
                                                            <label class="custom-file-label" for="customFile2">Upload CV</label>
                                                        </div>
                                                    </div>



                                                    <div class="form-group">
                                                        <input type="hidden" class="form-control" name="post_id" value="<?php echo $data['id']; ?>">
                                                        <input type="hidden" class="form-control" name="action" value="job_cv_send">

                                                        <button class="btn btn-success pr-4 pl-4 pt-2 pb-2">Apply</button>
                                                    </div>
                                                </form>
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
                            <div class="row">
                                <?php
                      
                        $sel="SELECT * FROM $job_post ORDER BY id DESC LIMIT 3";
                        $query=$db2->select($sel);
                        if($query){
                             while($data=$query->fetch_assoc()){

                    
                    ?>
                                <div class="col-12">
                                    <div class="box">
                                        <div class="details-box">
                                            <h4><a href="job_details.php?post_id=<?php echo $data['id']; ?>">Job: <?php echo $data['title']; ?></a></h4>
                                            <label class="m-0">Publish: <?php echo $data['date']; ?> <i class="far fa-calendar-alt"></i></label>
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
