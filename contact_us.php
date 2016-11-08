<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    <body>

        <?php include("header.php"); ?>

        <section class="section-title">Contact us</section>
        <section>
            <div class="wrapp">
                <h2>We would like to hear from you!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
            </div>
        </section>
        <section>
            <div class="wrapp">
                <div class="contact-form">
                    <h3>Contact form</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>

                    <form action="">
                        <label for="user_name">Name<span>You full name please.</span></label>
                        <input type="text" name="user_name">

                        <label for="email">Email address <span>This will be the email I contact you with.</span></label>
                        <input type="text" name="email">

                        <label for="subject">Subject<span>Be creative if you like.</span></label>
                        <input type="text" name="subject">

                        <label for="message">Message<span>Please don't send me too long of a message ... jks!</span></label>
                        <textarea name="message" id=""></textarea>

                        <button>Send Message</button>
                    </form>
                </div>
                <div class="company-info">
                    <div class="our-location">
                        <h3>Our location</h3>
                        <p>We just moved to our new location down the block right beside Subway.</p>
                        <ul>
                            <li>#9 - 3815 Thatcher Avenue</li>
                            <li>Saskatoon, Saskatchewan</li>
                            <li>S7R 1A3</li>
                        </ul>
                    </div>
                    <div class="contact-information">
                        <h3>Contact information</h3>
                        <div class="box">
                            <ul class="name-contact">
                                <li>Email:</li>
                                <li>Primary Phone:</li>
                                <li>Alternate Phone:</li>
                                <li>Fax:</li>
                            </ul>
                            <ul class="contact">
                                <li>info@yastech.ca</li>
                                <li>1 (306) 249 - 9609</li>
                                <li>1 (306) 249 - 9612</li>
                                <li>1 (306) 931 - 6739</li>
                            </ul>
                        </div>
                    </div>
                    <div class="office-hours">
                        <h3>Office hours</h3>
                        <div class="box"></div>
                            <ul class="days_of_the_week">
                                <li>Mounday - Friday</li>
                                <li>Suturday - Sunday</li>
                                <li>Holiday</li>
                            </ul>
                            <ul class="schedule">
                                <li>8 am - 5 pm</li>
                                <li>Closed</li>
                                <li>Closed</li>
                            </ul>
                        </div>
                        <span>Feel free to email or call us after hours.</span>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <h2>Do you need a theme?</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
            <a href="#">Purchase</a>
        </section>

        <?php /*include("footer.php");*/ ?>

    </body>
</html>
