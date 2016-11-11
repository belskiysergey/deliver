<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Contact us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="css/contact.css">
    </head>
    <body>

        <?php include("header.php"); ?>

        <section class="section-title">Contact us</section>
        <section class="team">
            <div class="wrapp">
                <h2>We would like to hear from you!</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
            </div>
        </section>
        <section class="wrapper">
            <div class="clearfix">
                <div class="contact-form">
                    <h3>Contact form</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>

                    <form action="">
                        <label for="user_name">Name</label>
                            <div>You full name please.</div>
                        <input type="text" name="user_name">

                        <label for="email">Email address</label>
                            <div>This will be the email I contact you with.</div>
                        <input type="text" name="email">

                        <label for="subject">Subject</label>
                            <div>Be creative if you like.</div>
                        <input type="text" name="subject">

                        <label for="message">Message</label>
                            <div>Please don't send me too long of a message ... jks!</div>
                        <textarea name="message" id=""></textarea>

                        <button>Send Message</button>
                    </form>
                </div>
                <div class="company-info">
                    <div class="info-block">
                        <h3>Our location</h3>
                        <p>We just moved to our new location down the block right beside Subway.</p>
                        <ul>
                            <li>#9 - 3815 Thatcher Avenue</li>
                            <li>Saskatoon, Saskatchewan</li>
                            <li>S7R 1A3</li>
                        </ul>
                    </div>
                    <div class="info-block">
                        <h3>Contact information</h3>
                        <div class="box clearfix">
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
                    <div class="info-block">
                        <h3>Office hours</h3>
                        <div class="box clearfix">
                            <ul class="days-of-the-week">
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
                    </div>
                    <span>Feel free to email or call us after hours.</span>
                </div>
            </div>
        </section>
        <section class="block-question">
            <div class="wrapp">
                <h2>Do you need a theme?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis,interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum ast pretium.</p>
                <a href="#">Purchase</a>
            </div>
        </section>

        <?php include("footer.php"); ?>

    </body>
</html>
