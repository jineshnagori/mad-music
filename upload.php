<?php
    session_start();
    if (isset($_SESSION['username']))
        echo '';
    else
        header('location:login.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Mad Music by Niket</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<!-- body -->

<body class="main-layout">
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-5 logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html">Mad Music</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-7">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li> <a href="logout.php">logout</a> </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end header inner -->
    </header>
    <!-- end header -->
    <section class="banner_section">
        <div class="banner-main">
            <img src="images/banner2.jpg" />
            <div class="container">

                <div class="text-bg relative">
                    <h1>~ Welcome to Upload ~</h1>
                    <a href="#login">Upload Now</a>
                </div>

            </div>
        </div>

    </section>

    <!--  footer -->
    <footr id="footer_with_contact">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 width">
                        <div class="address">
                            <form method="POST" action="bupload.php" enctype="multipart/form-data">
                                <div id="login" class="row">
                                    <div class="col-sm-12">
                                        <input name="sname" class="contactus" placeholder="Song Name" type="text">
                                    </div>
                                    <div class="col-sm-12">
                                        <input name="stype" class="contactus" placeholder="Song Type" list="songType">
                                        <datalist id="songType">
                                            <option value="EDM">EDM</option>
                                            <option value="Intrumental">Intrumental</option>
                                            <option value="Focus">Focus</option>
                                            <option value="Party">Party</option>
                                            <option value="Loops">Loops</option>
                                            <option value="Gaming">Gaming</option>
                                            <option value="Rock">Rock</option>
                                            <option value="Hindi Music">Hindi Music</option>
                                        </datalist>
                                    </div>
                                    <div class="col-sm-12">
                                        <input class="contactus" placeholder="Password" type="file" name="music">
                                    </div>
                                    <div class="col-sm-12">
                                        <button name="post" type="submit" class="send">Upload</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 width">
                        <div class="address">
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2021 All Rights Reserved. <a href="#">Mad Music by Niket Sharma</a></p>
            </div>
        </div>
    </footr>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>