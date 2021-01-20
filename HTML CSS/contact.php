<?php
require "Extras/header.php";
?>

    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
    <div class="contact-page">
        <div class="heading">
            <h2 class="contact-title">Contact Us</h2>
        </div>
        <section class="contact-main">
            <article class="contact-info">
                <h1>Our Office</h1>
                <br>
                <p>Tel: +31 1234 56789</p>
                <br>
                <p>Email: <a href="mailto:cs.stoyanov@gmail.com">info@acekeys.com</a></p>
                <br>
                <h2>Address:</h2>
                <p>Rachelsmolen 1,<br>5612 MA Eindhoven<br>Postbus 347, 5600 AH</p>
                <br>
                <h2>Call or visit us during our working hours:</h2>
                <p>09:00 to 21:00 on weekdays<br>12:00 to 18:00 on weekends</p>
                <br>
                <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.330293480665!2d5.479793915923501!3d51.45209192256638!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d92199730073%3A0x1c98f3a0d8ee087b!2sFontys!5e0!3m2!1sen!2suk!4v1551812983355"
                        width="620" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </article>
            <article class="contact-form">
                <h1>Contact us through our form!</h1>
                <!--Contact form message-->
            <?php
            if(isset($_GET['error'])){
                if($_GET['error'] == "emptyname"){
                    echo '<p class="register-error">Name is mandatory!</p>';
                }
                elseif($_GET['error'] == "emptyemail"){
                    echo '<p class="register-error">E-mail is mandatory!</p>';
                }
                elseif($_GET['error'] == "emptymsg"){
                    echo '<p class="register-error">Message is mandatory!</p>';
                }
                elseif($_GET['error'] == "emptynamemail"){
                    echo '<p class="register-error">Name and E-mail are mandatory!</p>';
                }
                elseif($_GET['error'] == "emptynamemsg"){
                    echo '<p class="register-error">Name and Message are mandatory!</p>';
                }
                elseif($_GET['error'] == "emptyemailmsg"){
                    echo '<p class="register-error">E-mail and Message are mandatory!</p>';
                }
                elseif($_GET['error'] == "emptyfields"){
                    echo '<p class="register-error">Name, E-mail and Message are mandatory!</p>';
                }
            }
            elseif (isset($_GET['contact'])){
                if($_GET['register'] == "success"){
                    echo '<p class="register-success">Successfully contacted! Please be patient with our response.</p>';
                }
            }
            ?>
                <form class="contact-form-inputs" action="Extras/contactform.php" method="post">
                    <input type="text" name="name" placeholder="Name">
                    <input type="tel" name="phone" placeholder="Telephone">
                    <input type="email" name="email" placeholder="Email">
                    <textarea class="contact-msg" rows="10" cols="40" name="message" placeholder="Enter your message here..."></textarea>
                    <br>
                    <button class="contact-submit" type="submit" name="contact-submit">SUBMIT</button>
                </form>
            </article>
        </section>
    </div>
    </body>

<?php
require "Extras/footer.php";
?>