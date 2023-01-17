<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blueasy</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="background">
        <header>
            <div class="container">
                <div class="logo">
                    <p>BLU<span>E</span>ASY</p>
                </div>
                <div class="navbar">
                    <nav>
                        <a class="active" href="">HOME</a>
                        <a href="">SERVICES</a>
                        <a href="">TESTIMONIALS</a>
                        <a href="">CONTACT</a>
                    </nav>
                </div>
            </div>
        </header>
        <div class="quotes">
            <p>"I'm looking for the unexpected.</p>
            <br>
            <p>I'm looking for the things i've never seen before."</p>
        </div>
    </div>
    <div class="services">
        <div class="container">
            <p class="titel"><span>SER</span>VICES</p>
            <div class="serviceContainer">
                <div class="service">
                    <img src="img/Icon_coffee.png">
                    <p class="serviceTitle">COFFEE</p>
                    <p class="serviceText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid commodi cumque dicta inventore magnam magni maxime nihil saepe sed, soluta vel vero! Beatae enim exercitationem inventore laudantium, minima quia quidem.</p>
                </div>
                <div class="service">
                    <img src="img/Icon_instant.png">
                    <p class="serviceTitle">INSTANT</p>
                    <p class="serviceText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores consequatur culpa cum dignissimos distinctio, eos eum eveniet impedit ipsum iure labore, magni, maiores saepe tempora voluptas. Fugiat ipsam molestias suscipit.</p>
                </div>
                <div class="service">
                    <img src="img/Icon_serious.png">
                    <p class="serviceTitle">SERIOUS</p>
                    <p class="serviceText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur dicta dolores eligendi fuga labore necessitatibus quam quia sint totam, ut voluptatibus. Commodi debitis distinctio laudantium minima nostrum officiis repellat.</p>
                </div>
                <div class="service">
                    <img src="img/Icon_frame.png">
                    <p class="serviceTitle">FRAME</p>
                    <p class="serviceText">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus accusantium adipisci aspernatur at beatae earum ex facilis hic id inventore iste nisi nostrum quaerat recusandae, sapiente soluta ut vel voluptatum?</p>
                </div>
            </div>
        </div>
    </div>

    <div class="testimonials">
        <div class="container">
            <div class="testimonials-header">
                <p class="titel"><span>TES</span>TIMONIALS</p>
                <p class="quote">”</p>
            </div>
            <div class="citaat">
                <?php echo file_get_contents('doc/testimonial_citaat.txt'); ?>
            </div>
            <div class="signoff">
                 - Walter White
            </div>
        </div>
    </div>

</body>
</html>
