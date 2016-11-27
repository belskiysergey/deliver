<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Blog</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/blog.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script src="vendors/jquery.bxslider/jquery.bxslider.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('.bxslider').bxSlider();
            });
        </script>
    </head>
    <body>

        <?php include("header.php"); ?>

        <section class="section-title">Blog</section>
        <section class="wrapper clearfix">
            <div class="block-left">
                <article>
                    <div class="blog-content">
                        <!-- Карусель -->
                        <ul class="bxslider">
                            <li><img src="images/photo_bx.png"></li>
                            <li><img src="images/photo_bx.png"></li>
                            <li><img src="images/photo_bx.png"></li>
                            <li><img src="images/photo_bx.png"></li>
                        </ul>
                        <!-- <div class="blog-content">
                            <img src="images/img_blog.png">
                        </div> -->
                    </div>
                    <h3>7 strategies to market your business online</h3>
                    <ul class="blog-control-panel">
                        <li>July 3, 2013</li>
                        <li>Michael Reimer</li>
                        <li>Marketing, news</li>
                        <li>2 comments</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
                </article>
                <article>
                    <div class="blog-content">
                        <img src="images/img_blog.png">
                    </div>
                    <h3>Basic post with featured image</h3>
                    <ul class="blog-control-panel">
                        <li>July 3, 2013</li>
                        <li>Michael Reimer</li>
                        <li>Marketing, news</li>
                        <li>2 comments</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
                </article>
                <article>
                    <div class="blog-content"></div>
                    <h3>Post example with no featured image</h3>
                    <ul class="blog-control-panel">
                        <li>July 3, 2013</li>
                        <li>Michael Reimer</li>
                        <li>Marketing, news</li>
                        <li>2 comments</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
                </article>
                <article>
                    <div class="blog-content">
                        <video src="http://rugraphics.ru/sites/default/files/videoplayer/videoclips/rabbit.flv" type="video/mp4" poster="http://rugraphics.ru/sites/default/files/videoplayer/videoclips/rabbit.jpg" controls="controls" preload="metadata"></video>
                    </div>
                    <h3>Vidoe post example</h3>
                    <ul class="blog-control-panel">
                        <li>July 3, 2013</li>
                        <li>Michael Reimer</li>
                        <li>Marketing, news</li>
                        <li>2 comments</li>
                    </ul>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
                </article>
                <article>
                    <div class="blog-content">
                        <div>
                            <audio src="Ark_Patrol_–_Never.mp3" controls="controls"></audio>
                        </div>
                        <h3>Audio clip post example</h3>
                        <ul class="blog-control-panel">
                            <li>July 3, 2013</li>
                            <li>Michael Reimer</li>
                            <li>Marketing, news</li>
                            <li>2 comments</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
                    </div>
                </article>
            </div>
            <div class="block-right">
                <div class="popular-posts">
                    <h3>Popular posts</h3>
                    <ul>
                        <li><a href="#">New Premium WordPress Theme - Blaco</a></li>
                        <li><a href="#">Top Web Trends of 2013</a></li>
                        <li><a href="#">Video Post Example</a></li>
                        <li><a href="#">How Important is Twitter</a></li>
                        <li><a href="#">Home Buiders New Planning Solution</a></li>
                    </ul>
                </div>
                <div class="blog-categories">
                    <h3>Blog Categories</h3>
                    <ul>
                        <li><a href="#">News (4)</a></li>
                        <li><a href="#">Website Releases (23)</a></li>
                        <li><a href="#">Events (7)</a></li>
                        <li><a href="#">Marketing (5)</a></li>
                        <li><a href="#">Web Development (2)</a></li>
                    </ul>
                </div>
                <div class="archives-by-month">
                    <h3>Archives by month</h3>
                    <ul>
                        <li><a href="#">March (4)</a></li>
                        <li><a href="#">April (5)</a></li>
                        <li><a href="#">May (3)</a></li>
                        <li><a href="#">June (4)</a></li>
                        <li><a href="#">July (2)</a></li>
                    </ul>
                </div>
            </div>
            <!-- Навигация -->
            <nav>
                <ul>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                </ul>
            </nav>
        </section>

        <?php include("footer.php"); ?>

    </body>
</html>