<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta http-equiv="refresh" content="5" > -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>D5 Services</title>
    <link rel="stylesheet" href="./css/service_detailed_style.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
    <link rel='stylesheet' href='./css/animate.min.css'>
</head>

<body>
    <!-- Header -->
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="./">
                        <img src="./icons/company-logo.png" alt="">
                    </a>
                </div>
                <div class="nav-list">
                    <div id="hamburger" class="hamburger">
                        <div class="bar"></div>
                    </div>
                    <ul>
                        <li><a href="#space-planning" data-after="Space Planning">Space Planning</a></li>
                        <li><a href="#_3d-visualising" data-after="3D visualising">3D visualising</a></li>
                        <li><a href="#commercial-interior" data-after="commercial interior">commercial interior</a></li>
                        <li><a href="#office-interior" data-after="office interior">office interior</a></li>
                        <li><a href="#residential-interior" data-after="residential interior">residential interior</a>
                        </li>
                        <li><a href="#flat-interior" data-after="flat interior">flat interior</a></li>
                        <li><a href="#ceiling-design" data-after="celing design">celing design</a></li>
                        <li><a href="#kitchen-cabinets" data-after="kitchen cabinets">kitchen cabinets</a></li>
                        <li><a href="#partition-wall" data-after="partition wall">partition wall</a></li>
                        <li><a href="#wardrobes" data-after="wardrobes ">wardrobes </a></li>
                        <li><a href="#custom-furnitures" data-after="custom furniture">custom furniture</a></li>
                        <li><a href="#lighting" data-after="lighting">lighting </a></li>
                        <li><a href="#cladding" data-after="cladding">cladding </a></li>
                        <li><a href="#green-wall" data-after="green wall">green wall </a></li>
                        <li><a href="#landscaping" data-after="landscaping">landscaping </a></li>
                        <li><a href="#tv-unit" data-after="tv unit">tv unit </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- End Header -->

    <!-- Service detailed Section -->
    <section id="service">
        <div class="service container">
            <div class="service-top">
                <h1 class="section-title title"><span>our</span> Works</h1>
            </div>
            <div class="service-bottom">
                <div class="service-item" id="space-planning">
                    <div class="top">
                        <h1 class="section-title"><span>S</span>pace <span>P</span>lanning</h1>
                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/Space-Planning/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>

                </div>
                <div class="service-item" id="_3d-visualising">
                    <div class="top">
                        <h1 class="section-title"><span>3D</span> visualising</h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/3D-Visualising/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="commercial-interior">
                    <div class="top">
                        <h1 class="section-title"><span>c</span>ommercial <span>i</span>nterior</h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/Commercial-Interior/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="office-interior">
                    <div class="top">
                        <h1 class="section-title"><span>o</span>ffice <span>i</span>nterior</h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/Office-Interior/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="residential-interior">
                    <div class="top">
                        <h1 class="section-title"><span>r</span>esidential <span>i</span>nterior</h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/residential-interior/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="flat-interior">
                    <div class="top">
                        <h1 class="section-title"><span>f</span>lat <span>i</span>nterior</h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/flat-interior/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="ceiling-design">
                    <div class="top">
                        <h1 class="section-title"><span>c</span>eling <span>d</span>esign</h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/ceiling-design/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="kitchen-cabinets">
                    <div class="top">
                        <h1 class="section-title"><span>k</span>itchen <span>c</span>abinets</h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/kitchen-cabinets/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="partition-wall">
                    <div class="top">
                        <h1 class="section-title"><span>p</span>artition <span>w</span>all</h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/partition-wall/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="wardrobes">
                    <div class="top">
                        <h1 class="section-title"><span>w</span>ardrobes </h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/wardrobes/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="custom-furnitures">
                    <div class="top">
                        <h1 class="section-title"><span>c</span>ustom <span>f</span>urniture</h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/custom-furnitures/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="lighting">
                    <div class="top">
                        <h1 class="section-title"><span>l</span>ighting </h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/lighting/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="cladding">
                    <div class="top">
                        <h1 class="section-title"><span>c</span>ladding </h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/cladding/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="green-wall">
                    <div class="top">
                        <h1 class="section-title"><span>g</span>reen <span>w</span>all</h1>

                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/green-wall/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="landscaping">
                    <div class="top">
                        <h1 class="section-title"><span>l</span>andscaping </h1>
                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/landscaping/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="service-item" id="tv-unit">
                    <div class="top">
                        <h1 class="section-title"><span>tv</span> unit </h1>
                    </div>
                    <div class="bottom" style="border: 1px dotted blue;">
                        <div class="gallery">
                            <?php
                            $location = "admin/Tv-unit/";
                            $dir = glob($location . '{*.jpg,*.png}', GLOB_BRACE);
                            foreach ($dir as $value) {
                            ?>
                                <img src="<?php echo $value ?>" alt="" width="100%" height="auto" class="gallery-img" />
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service detailed Section -->

    <script src="./js/service_detailed_test.js"></script>
    <script src='./js/jquery-3.5.1.min.js'></script>
    <script src='./js/bootstrap.min.js'></script>
    <!-- responsice image gallery -->
    <script>
        $(document).ready(function() {
            $(".gallery-img").click(function() {
                var t = $(this).attr("src");
                $(".modal-body").html("<img src='" + t + "' class='modal-img'>");
                $("#myModal").modal();
            });
        });
    </script>
</body>

</html>