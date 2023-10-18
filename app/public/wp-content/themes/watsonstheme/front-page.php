<?php
    get_header();
?>
    <!--Section-->
    <section>
        <div class="container-flexbox container-header-section-two-columns">
            <?php
                if( have_posts()){

                    while( have_posts() ) {

                        the_post();
                        the_content();
                    }
                }
            ?>
        </div>
    </section>

    <section>
        <div class="container-flexbox container-header-section-two-columns">
            <div class="item-2 second">
                <h1>Something troubling you? Trust the world's [second] leading detective in the world to take care of it.</h1>
                <p>Dr. Watson has helped 3,500 clients worldwide to sort out their personal and professional issues, with absolute secrecy. Contrary to what people say, he does NOT need Sherlock, OK?</p>
                <br>
                <div class="CTA-home-display">
                    <a class="CTA-home CTA-home-1" href="services/">Discover our services <i class="fas fa-arrow-circle-right"></i></a>
                    <a class="CTA-home" href="estimated-quote/">Get a personalized quote <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="item-2 first">
                <script>AOS.init();</script>
                <img src="/wp-content/themes/watsonstheme/assets/img/watson.webp" alt="Image of Dr. Watson" width="400" height="600" data-aos="zoom-out" data-aos-duration="1500">
            </div>
            <div class="container-flexbox item-1 centered scale-up-center">
            </div>
        </div>
    </section>



    <!--Services-->
    <section class="dark-bg">
        <div class="title">
            <h1 class="reduce">We take care of...</h1>
        </div>

        <div class="container-flexbox">

            <div class="item-3">
                    <img src="/wp-content/themes/watsonstheme/assets/img/family-matters.webp" alt="Image of a family" >
                    <h3>Family Matters</h3>
                    <p>Wives, husbands, kids, grandparents, in-laws… nobody escapes Dr. Watson!</p>
                    <a class="CTA" href="services/#family">Learn more <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            <div class="item-3">
                <img src="/wp-content/themes/watsonstheme/assets/img/techextorsions.webp" alt="Image of Dr. Watson" >
                <h3>Techextorsions</h3>
                <p>Having trouble with hackers and other tech-savvy wrongdoers? We'll make sure they byte the dust.</p>
                <a class="CTA" href="services/#technology">Learn more <i class="fas fa-arrow-circle-right"></i></a>
            </div>

            <div class="item-3">
                <img src="/wp-content/themes/watsonstheme/assets/img/professional-affairs.webp" alt="Image of a workman" >
                <h3>Professional Affairs</h3>
                <p>Let no colleagues make a fool of you, like a certain Holmes did to a certain Watson.</p>
                <a class="CTA" href="services/#work">Learn more <i class="fas fa-arrow-circle-right"></i></a>
            </div>
    
        </div>
    </section>

    <!--Carousel-->
    <div class="title2">
        <h1 class="reduce">What our clients say</h1>
    </div>
    <section class="carousel">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <div class="items">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
                    <div class="template-demo">
                        <p>For years I thought my husband was playing golf after work… Thanks to Watson, I learnt that he lived a second life: he was really spending his time basket-weaving! He had never played golf in his life. I left him, of course. Thank you Mr. Watson for opening my eyes!</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"> <img class="profile-pic" src="/wp-content/themes/watsonstheme/assets/img/head2.webp"> </div>
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">Ms. Grantham</h4>
                                <p class="cust-profession">Cambridge, The UK</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
                    <div class="template-demo">
                        <p>Dr. Watson ingeniously discovered my next-door neighbour was poisoning my pets. He was convicted and sent to prison, and now I have sixteen beautiful cats. Great service.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"> <img class="profile-pic" src="/wp-content/themes/watsonstheme/assets/img/head1.webp"> </div>
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">Mr. González</h4>
                                <p class="cust-profession">Pontevedra, Spain</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
                    <div class="template-demo">
                        <p>I turned to Mr Watson to solve the mystery of my disappearing newspapers, which were stolen from my front door every day, for years! I suspected my neighbour Jack, for he's always been very jealous of me. In the end, Watson discovered the culprit: it was one of my 23 cats. Now Jack and I are good friends, all thanks to Mr Watson!</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"> <img class="profile-pic" src="/wp-content/themes/watsonstheme/assets/img/head3.webp"> </div>
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">James Quinn</h4>
                                <p class="cust-profession">Ontario, Canada</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
                    <div class="template-demo">
                        <p>When I reached out to Dr. Watson, I was desperate: someone in the office was stealing my lunch every day. He found out it was my blind boss who did it, so I couldn't do anything about it, really, but still it was good to know. I would definitely trust him again.</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"> <img class="profile-pic" src="/wp-content/themes/watsonstheme/assets/img/head4.webp"> </div>
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">Ms. Hanks</h4>
                                <p class="cust-profession">Denver, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title"><img src="https://img.icons8.com/ultraviolet/40/000000/quote-left.png"></h4>
                    <div class="template-demo">
                        <p>Years ago, I was being blackmailed! Someone hacked into my email account and threatened to expose my affairs to my husband. Thank God I found Mr Watson: he retrieved all of my sensitive messages and images, and saved me a tonne of money. Plus, I got to keep my husband and my lovers. Mr Watson is a life saver!</p>
                    </div>
                    <div class="row">
                        <div class="col-sm-2"> <img class="profile-pic" src="/wp-content/themes/watsonstheme/assets/img/head5.webp"> </div>
                        <div class="col-sm-10">
                            <div class="profile">
                                <h4 class="cust-name">Patricia Cocquard</h4>
                                <p class="cust-profession">Marseille, France</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
<?php
    get_footer();
?>