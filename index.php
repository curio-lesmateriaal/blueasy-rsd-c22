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
            <p>"I'm looking for the unexpected.<br>I'm looking for the things i've never seen before."</p>
        </div>
    </div>
    <div class="section-services">
        <div class="container">
            <h1><span>SER</span>VICES</h1>
            <div class="services">
                <div class="service">
                    <img src="img/Icon_coffee.png" alt="Coffee">
                    <h2>Coffee</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid quam repudiandae laboriosam debitis repellendus iusto esse, fugit deleniti. Recusandae fugit quo at, ullam unde laboriosam. Ad ipsa alias itaque fugit.</p>
                </div>
                <div class="service">
                    <img src="img/Icon_instant.png" alt="Instant">
                    <h2>Instant</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error unde illum, doloribus repellat inventore, animi quidem eius voluptas optio maiores tempore atque eveniet, earum exercitationem et autem facilis. Facere, inventore.</p>
                </div>
                <div class="service">
                    <img src="img/Icon_serious.png" alt="Serious">
                    <h2>Serious</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit rerum veniam doloribus explicabo laboriosam beatae minus numquam quos ut voluptatem dolores dolorum corporis itaque repellat voluptates, provident ex odio sed.</p>
                </div>
                <div class="service">
                    <img src="img/Icon_frame.png" alt="Frame">
                    <h2>Frame</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste voluptates id cumque esse rem iure, illum deserunt officia dolor cupiditate quidem. Eos ab exercitationem aliquam consequatur sint facilis porro distinctio!</p>
                </div>
            </div>
        </div>
    </div>
    <div class="section-testimonials">
        <div class="container">
            <div class="testimonials-header">
                <h1><span>Tes</span>timonials</h1>
                <span class="right-quote">"</span>
            </div>
            <p class="citaat"><?php echo file_get_contents('testimonial_citaat.txt'); ?></p>
            <p class="naam"> - Walter White</p>
        </div>
    </div>

</body>
</html>