<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Deliver</title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="vendors/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.bxslider').bxSlider();
            });
        </script>
    </head>
    <body>
        <section>
            <!-- Карусель -->
            <ul class="bxslider">
                <li><img src="images/nature.png"></li>
                <li><img src="images/background.png"></li>
                <li><img src="images/nature.png"></li>
                <li><img src="images/background.png"></li>
            </ul>

            <?php include("header.php"); ?>

            <div class="banner">We <span>deliver</span> nothing short of awesome!
                <div class="">Check out our portfolio to see our great work.</div>
                <a href="#" class="button-portfolio">Portfolio</a>
            </div>
        </section>
        <section class="team">
            <div class="wrapp">
                <h1>We are a small team doing big things!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
            </div>
        </section>
        <section class="our-service">
            <div class="wrapp flex-container">
                <div class="service flex-item">
                    <div class="img-service-1"></div>
                    <h4>service 1</h4>
                    <p>Suspendisse dapibus arcu turpis, ut ultricies orci porttitor sed. Vestibulum pretium quam lacus, id tristique tortor consequat sit amet. Donec eu est nunc. Duis id nibh sed libero sodales rhoncus sit amet nec turpis. Aenean lacus libero, hendrerit vitae nunc ut, porttitor mollis mi.</p>
                    <a href="javascript:void(0)">Find out more</a>
                </div>
                <div class="service flex-item">
                    <div class="img-service-2"></div>
                    <h4>service 2</h4>
                    <p>Suspendisse dapibus arcu turpis, ut ultricies orci porttitor sed. Vestibulum pretium quam lacus, id tristique tortor consequat sit amet. Donec eu est nunc. Duis id nibh sed libero sodales rhoncus sit amet nec turpis. Aenean lacus libero, hendrerit vitae nunc ut, porttitor mollis mi.</p>
                    <a href="javascript:void(0)">Find out more</a>
                </div>
                <div class="service flex-item">
                    <div class="img-service-3"></div>
                    <h4>service 3</h4>
                    <p>Suspendisse dapibus arcu turpis, ut ultricies orci porttitor sed. Vestibulum pretium quam lacus, id tristique tortor consequat sit amet. Donec eu est nunc. Duis id nibh sed libero sodales rhoncus sit amet nec turpis. Aenean lacus libero, hendrerit vitae nunc ut, porttitor mollis mi.</p>
                    <a href="javascript:void(0)">Find out more</a>
                </div>
            </div>
        </section>
        <section class="our-work clearfix">
            <div class="wrapp clearfix">
                <h2>Some of our latest work</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
                <div class="list-of-works clearfix">
                    <div class="work-examples">
                        <div class="screen monitor-1"></div>
                        <span>Circle icons</span>
                    </div>
                    <div class="work-examples distance">
                        <div class="screen monitor-2"></div>
                        <span>Arrows</span>
                    </div>
                    <div class="work-examples">
                        <div class="screen monitor-3"></div>
                        <span>Portfolio theme</span>
                    </div>
                </div>
            </div>
        </section>
        <section class="block-question">
            <div class="wrapp">
                <h2>Do you like what you see?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
                <a href="javascript:void(0)">purchase</a>
            </div>
        </section>

        <?php include("footer.php"); ?>

    </body>
</html>