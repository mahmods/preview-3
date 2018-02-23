<?php include("./header-home.php") ?>

    <div class="container page-content">
        <h1>About US</h1>
        <h2>WHAT WE DO AND WHO WE ARE?</h2>
        <p style="text-align:center;">This is the right place to be if you plan to achieve your dream skin in the right way. People come in different skin types and color. Some are blessed with a glowing and healthy skin while some are not. Those who do not have growing skin have to do a lot of work on their skin in order to achieve the skin they want. If you are among the latter, and you want to enhance your skin so you can look confident and beautiful, we are here to help you achieve that goal.</p>
    </div>

    <div class="container">
        <div class="row d-flex justify-content-between">
            <div class="col-12 col-md-2">
                <div class="group-title">
                    <span>our</span>
                    <h2>proucts</h2>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="product-block">
                    <a class="product-image" href="#">
                        <img src="./images/158198-OW27LC-436.jpg" alt="">
                        <div class="overlay">purchase now</div>
                    </a>
                    <h4><a href="#">Anti-Ageing Cream/Serum</a></h4>
                    <div class="price">
                        <h5>£49.95</h5>
                        <span>£99.99</span>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="product-block">
                    <a class="product-image" href="#">
                        <img src="./images/158198-OW27LC-436.jpg" alt="">
                        <div class="overlay">purchase now</div>
                    </a>
                    <h4><a href="#">Anti-Wrinkles cream</a></h4>
                    <div class="price">
                        <h5>£49.95</h5>
                        <span>£99.99</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-4">
                    <i class="fas fa-truck wow bounceIn"></i>
                    <h3>FAST DELIVERY</h3>
                    <p>Free delivery when paying by card or when ordering from $ 350.</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fas fa-shield-alt wow bounceIn"></i>
                    <h3>100% REFUND OF MONEY</h3>
                    <p>You can return your items to Nutrition Store within 14 calendar days of receiving your order.</p>
                </div>
                <div class="col-12 col-md-4">
                    <i class="fas fa-home wow bounceIn"></i>
                    <h3>QUALITY INSPECTIONS</h3>
                    <p>You can check the quality of things right in front of the courier and redeem the order.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="blog-block">
        <div class="container">
            <h2>FROM THE BLOG</h2>
            <div class="blog-slider">
                <?php for ($i=0; $i < 5; $i++) : ?>
                <div class="post-block">
                    <a class="post-image" href="#">
                        <img src="./images/1064.jpg" alt="">
                    </a>
                    <h4><a href="#">Happy and Healthy Skincare Tips</a></h4>
                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat </p>
                    <h5><a href="#">Read More</a></h5>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="gallery">
        <div class="container">
            <h2>Gallery</h2>
        </div>
            <div class="container-fluid images">
                <div class="col-4"><img src="./images/1064.jpg" alt=""></div>
                <div class="col-4"><img src="./images/3296.jpg" alt=""></div>
                <div class="col-4"><img src="./images/1037.jpg" alt=""></div>

            </div>
    </section>

<?php include("./footer.php") ?>