@extends('layouts.csgo')

    @section('content')
    <div class="main-site-container">
        <!-- csgo-UpperHeader Start -->
        
        <!-- csgo-UpperHeader End -->
        <!-- csgo-Header Start -->
        <x-navbar></x-navbar>
        <!-- csgo-Header End -->
        <!-- csgo-HeroSection Start -->
        <div class="csgo-heroSection-main-conatiner">
            <div class="csgo-heroSection-text-container">
                <h1>Raise your rank up to <span>Global Elite</span> with our help.</h1>
                <p>Get a rank you deserve with our professional CSGO Boosting team. Our members can boost you to any
                    rank in any CS:GO Competition. So far We've boosted more than 30000+ players in +8 years. If you
                    are bored of playing with trolls and unskilled players - purchase boost now and our professional
                    players will help you with winning matches.</p>
            </div>
            <div class="csgo-heroSection-img-container">
                <img src="/assets/img/hero.png" alt="">
            </div>
            <img src="/assets/img/right-hero-angle.png" alt="" class="hero-angle-corner-img">
        </div>
        <!-- csgo-HeroSection End -->
        <!-- csgo-HomeBoost Start -->
        <!-- csgo-HomeBoost Start -->
        <div class="csgo-HomeBoost-conatianer section">
            <img src="/assets/img/homeBoost-bg.jpg" alt="">
            <!--  -->
            <div class="csgo-HomeBoost-tabs-conatiner">
                <div class="csgo-boost-tabs">
                    <div class="svg-shape csgo-boost-tab active" onclick="openTab(0)"><span>Faceit Level
                            Boost</span>
                    </div>
                    <div class="svg-shape csgo-boost-tab" onclick="openTab(1)"><span>Esportal Win Boost</span></div>
                    <div class="svg-shape csgo-boost-tab" onclick="openTab(2)"><span>Faceit Win Boost</span></div>
                    <div class="svg-shape csgo-boost-tab" onclick="openTab(3)"><span>Esportal Boost</span></div>
                </div>

                <div class="csgo-boost-content">
                    <div class="csgo-boost-tab-content active" id="csgo-boost-tab1">
                        <div class="csgo-boost-para">
                            <h2>Rank Boost</h2>
                            <h5>This is the most convenient way to raise your Rank to Global Elite. The services are
                                available in both matchmaking and wingman, and only the prime status clients
                                accepted
                                for execution. Also, the calculation can be made by wins.</h5>
                            <a href="/csgoboost"><button class="csgo-btn">Get Started Now</button></a>
                        </div>
                        <img src="/assets/img/Daco_4399154.png" class="homeboost-hero" alt="">
                    </div>
                    <div class="csgo-boost-tab-content" id="csgo-boost-tab2">
                        <div class="csgo-boost-para">
                            <h2>Esportal Boosting</h2>
                            <h5>This is the most convenient way to raise your Rank to Global Elite. The services are
                                available in both matchmaking and wingman, and only the prime status clients
                                accepted
                                for execution. Also, the calculation can be made by wins.</h5>
                                <a href="/esportal"><button class="csgo-btn">Get Started Now</button></a>
                        </div>
                        <img src="/assets/img/Daco_4713964.png" alt="">

                    </div>
                    <div class="csgo-boost-tab-content" id="csgo-boost-tab3">
                        <div class="csgo-boost-para">
                            <h2>Faceit Boosting</h2>
                            <h5>This is the most convenient way to raise your Rank to Global Elite. The services are
                                available in both matchmaking and wingman, and only the prime status clients
                                accepted
                                for execution. Also, the calculation can be made by wins.</h5>
                                <a href="/faceit"><button class="csgo-btn">Get Started Now</button></a>
                        </div>
                        <img src="/assets/img/Daco_4402547.png" alt="">

                    </div>
                    <div class="csgo-boost-tab-content" id="csgo-boost-tab4">
                        <div class="csgo-boost-para">
                            <h2>ESEA Boosting</h2>
                            <h5>This is the most convenient way to raise your Rank to Global Elite. The services are
                                available in both matchmaking and wingman, and only the prime status clients
                                accepted
                                for execution. Also, the calculation can be made by wins.</h5>
                                <a href="/esea"><button class="csgo-btn">Get Started Now</button></a>
                        </div>
                        <img src="/assets/img/Daco_6120627.png" alt="">

                    </div>
                </div>
            </div>
            <!--  -->
        </div>
        <!-- csgo-HomeBoost End -->
        <!-- <div class="csgo-HomeBoost-conatianer">
            <img src="/assets/img/homeBoost-bg.jpg" alt="">
            
            <div class="csgo-HomeBoost-tabs-conatiner">
                <div class="csgo-boost-tabs">
                    <div class="svg-shape csgo-boost-tab active" onclick="openTab(0)"><span>Faceit Level Boost</span>
                    </div>
                    <div class="svg-shape csgo-boost-tab" onclick="openTab(1)"><span>Esportal Win Boost</span></div>
                    <div class="svg-shape csgo-boost-tab" onclick="openTab(2)"><span>Faceit Win Boost</span></div>
                    <div class="svg-shape csgo-boost-tab" onclick="openTab(3)"><span>Esportal Boost</span></div>
                </div>

                <div class="csgo-boost-content">
                    <div class="csgo-boost-tab-content active" id="csgo-boost-tab1">
                        <div class="csgo-boost-para">
                            <h2>Rank Boost</h2>
                            <h5>This is the most convenient way to raise your Rank to Global Elite. The services are
                                available in both matchmaking and wingman, and only the prime status clients accepted
                                for execution. Also, the calculation can be made by wins.</h5>
                            <button class="csgo-btn">Get Started Now</button>
                        </div>
                        <img src="/assets/img/pngkey 1.svg" class="homeboost-hero" alt="">
                    </div>
                    <div class="csgo-boost-tab-content" id="csgo-boost-tab2">
                        <div class="csgo-boost-para">
                            <h2>Esport Boosting</h2>
                            <h5>This is the most convenient way to raise your Rank to Global Elite. The services are
                                available in both matchmaking and wingman, and only the prime status clients accepted
                                for execution. Also, the calculation can be made by wins.</h5>
                            <button class="csgo-btn">Get Started Now</button>
                        </div>
                        <img src="/assets/img/pngkey 1.svg" alt="">

                    </div>
                    <div class="csgo-boost-tab-content" id="csgo-boost-tab3">
                        <div class="csgo-boost-para">
                            <h2>Faceit Boosting</h2>
                            <h5>This is the most convenient way to raise your Rank to Global Elite. The services are
                                available in both matchmaking and wingman, and only the prime status clients accepted
                                for execution. Also, the calculation can be made by wins.</h5>
                            <button class="csgo-btn">Get Started Now</button>
                        </div>
                        <img src="/assets/img/pngkey 1.svg" alt="">

                    </div>
                    <div class="csgo-boost-tab-content" id="csgo-boost-tab4">
                        <div class="csgo-boost-para">
                            <h2>Esport Boosting</h2>
                            <h5>This is the most convenient way to raise your Rank to Global Elite. The services are
                                available in both matchmaking and wingman, and only the prime status clients accepted
                                for execution. Also, the calculation can be made by wins.</h5>
                            <button class="csgo-btn">Get Started Now</button>
                        </div>
                        <img src="/assets/img/pngkey 1.svg" alt="">

                    </div>
                </div>
            </div>
           
        </div> -->
        <!-- csgo-HomeBoost End -->
        <!-- csgo-HomeBoost Start -->
        <div class="csgo-HomeFeatures-container">
            <div class="csgo-HomeFeatures-innerSection">
                <div class="csgo-HomeFeatures-box">
                    <h3>Why you should trust us?</h3>
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/diamend.svg" alt=""></span>
                        <h4>Guaranteed Rank</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/security.svg" alt=""></span>
                        <h4>Totally Secure</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/privacy-eye.svg" alt=""></span>
                        <h4>Complete Privacy</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
            </div>
            <div class="csgo-HomeFeatures-innerSection">
                <div class="csgo-HomeFeatures-box">
                    <!-- <h3>Why you should trust us?</h3> -->
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/diamend.svg" alt=""></span>
                        <h4>Guaranteed Rank</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/security.svg" alt=""></span>
                        <h4>Totally Secure</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
                <div class="csgo-HomeFeatures-box">
                    <img src="/assets/img/features-card.png" alt="">
                    <div class="csgo-HomeFeatures-deatil-container">
                        <span><img src="/assets/icons/privacy-eye.svg" alt=""></span>
                        <h4>Complete Privacy</h4>
                        <p>In boostcsgo.net we sell only guaranteed services, which means our boosters will quickly
                            advance to your dream rank or you will get money back.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- csgo-HomeBoost End -->

        <!-- csgo-HomeBoosting Services Start -->
        <div class="csgo-HomeBoosting-services-container">
            <div class="csgo-HomeBoosting-services-innerSection">
                <h1>Top Notch Quality Rank<br> Boosting Services</h1>
                <div class="csgo-HomeBoosting-services-line-container">

                    <div class="csgo-HomeBoosting-services-section-conatiner-one">
                        <div class="csgo-HomeBoosting-services-section">
                            <div class="csgo-HomeBoosting-services-box">
                                <h3>FAST CSGO BOOST IS PRIORITY</h3>
                                <p>We usually start every boosting order within 1h after receiving the money. In most
                                    cases
                                    our boosters need only few hours to rank up. They play at least 5-15 matches per
                                    day.
                                </p>
                            </div>
                        </div>
                        <div class="csgo-HomeBoosting-services-section">
                            <div class="csgo-HomeBoosting-services-box">
                                <h3>ONLY LEGIT CS:GO BOOSTERS</h3>
                                <p>We usually start every boosting order within 1h after receiving the money. In most
                                    cases
                                    our boosters need only few hours to rank up. They play at least 5-15 matches per
                                    day.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--  -->
                    <div class="csgo-HomeBoosting-services-line">
                        <div class="line-div">
                            <span class="csgo-HomeBoosting-services-line-span"></span>
                        </div>
                        <div class="line-div">
                            <span class="csgo-HomeBoosting-services-line-span"></span>
                        </div>
                        <div class="line-div">
                            <span class="csgo-HomeBoosting-services-line-span"></span>
                        </div>
                    </div>
                    <!--  -->

                    <div class="csgo-HomeBoosting-services-section">
                        <div class="csgo-HomeBoosting-services-box">
                            <h3>ONLY LEGIT CS:GO BOOSTERS</h3>
                            <p>We usually start every boosting order within 1h after receiving the money. In most cases
                                our boosters need only few hours to rank up. They play at least 5-15 matches per day.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- csgo-HomeBoosting Services End -->

        <!-- csgo-whychoose Services Start -->
        <div class="csgo-HomeWhyChoose-services-container">
            <img src="/assets/img/Rectangle 11.png" alt="" class="HomeWhyChoose-img">
            <div class="csgo-HomeWhyChoose-services-img-section">
                <img src="/assets/img/Daco_4402547.png" alt="">
            </div>
            <div class="csgo-HomeWhyChoose-services-detail-section">
                <h3>Why choose our CS:GO Boosting Services?</h3>
                <p>We are the go-to brand for trusted CS:GO services. Boostcsgo.net is a worldwide, boosting service
                    with many years of experience in boosting people in Counter Strike: Global Offensive. We have
                    boosted more than 30000 accounts, there is no boost that will make a problem for our professionals,
                    and they will finish every order as fast as possible - from official valve matchmaking: CS:GO Rank
                    boost and CS:GO Wingman Boost to orders in most popular csgo leagues like: Faceit Boost, Esea Boost
                    or Esportal Boost.</p>
                <div class="csgo-HomeWhyChoose-happyCustomers-section">
                    <div class="csgo-HomeWhyChoose-happyCustomers-box">
                        <img src="/assets/img/Rectangle 10.png" alt="">
                        <div class="csgo-HomeWhyChoose-happyCustomers-txt-box">
                            <h5>20k</h5>
                            <h6>HAPPY CUSTOMERS</h6>
                        </div>
                    </div>
                    <div class="csgo-HomeWhyChoose-happyCustomers-box">
                        <img src="/assets/img/Rectangle 10.png" alt="">
                        <div class="csgo-HomeWhyChoose-happyCustomers-txt-box">
                            <h5>8</h5>
                            <h6>YEAS IN BOOSTING</h6>
                        </div>
                    </div>
                    <div class="csgo-HomeWhyChoose-happyCustomers-box">
                        <img src="/assets/img/Rectangle 10.png" alt="">
                        <div class="csgo-HomeWhyChoose-happyCustomers-txt-box">
                            <h5>30k</h5>
                            <h6>ORDERS COMPLETED</h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- csgo-whychoose Services End -->

        <!-- csgo-whychoose Services Start -->
        <div class="csgo-HomeReview-container">
            <h3>Real Customer Reviews</h3>
            <p>All the reviews about our boosting services can be found on our Trustpilot profile. Check some of them,
                they speak for themselves!</p>

            <div class="csgo-HomeReview-carousel-container">
                <div class="csgo-HomeReview-carousel">
                    <div class="csgo-HomeReview-cards">

                        <div class="csgo-HomeReview-card">
                            <img src="/assets/img/Group 3.png" alt="">
                            <div class="csgo-HomeReview-person-detail">
                                <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit
                                    scared/skeptical with boosting services but using this service has put my fears to
                                    rest.
                                </p>
                                <div class="csgo-HomeReview-person-span">
                                    <span><img src="/assets/img/Avatar.png" alt=""></span>
                                    <h6>Gamer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="csgo-HomeReview-card">
                            <img src="/assets/img/Group 3.png" alt="">
                            <div class="csgo-HomeReview-person-detail">
                                <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit
                                    scared/skeptical with boosting services but using this service has put my fears to
                                    rest.
                                </p>
                                <div class="csgo-HomeReview-person-span">
                                    <span><img src="/assets/img/Avatar.png" alt=""></span>
                                    <h6>Gamer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="csgo-HomeReview-card">
                            <img src="/assets/img/Group 3.png" alt="">
                            <div class="csgo-HomeReview-person-detail">
                                <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit
                                    scared/skeptical with boosting services but using this service has put my fears to
                                    rest.
                                </p>
                                <div class="csgo-HomeReview-person-span">
                                    <span><img src="/assets/img/Avatar.png" alt=""></span>
                                    <h6>Gamer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="csgo-HomeReview-card">
                            <img src="/assets/img/Group 3.png" alt="">
                            <div class="csgo-HomeReview-person-detail">
                                <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit
                                    scared/skeptical with boosting services but using this service has put my fears to
                                    rest.
                                </p>
                                <div class="csgo-HomeReview-person-span">
                                    <span><img src="/assets/img/Avatar.png" alt=""></span>
                                    <h6>Gamer</h6>
                                </div>
                            </div>
                        </div>
                        <div class="csgo-HomeReview-card">
                            <img src="/assets/img/Group 3.png" alt="">
                            <div class="csgo-HomeReview-person-detail">
                                <p>Better than expectations. Used them twice now (Duo/Lobby Boost). Was a bit
                                    scared/skeptical with boosting services but using this service has put my fears to
                                    rest.
                                </p>
                                <div class="csgo-HomeReview-person-span">
                                    <span><img src="/assets/img/Avatar.png" alt=""></span>
                                    <h6>Gamer</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="csgo-HomeReview-arrow-buttons">
                    <button class="csgo-HomeReview-left-arrow"><img src="/assets/icons/right-arrow.svg"
                            alt=""></button>
                    <button class="csgo-HomeReview-right-arrow"><img src="/assets/icons/left-arrow.svg"
                            alt=""></button>
                </div>
            </div>


        </div>
        <!-- csgo-whychoose Services End -->

        <!-- csgo-faqs-sections start -->
        <div class="accordion">
            <h1>Frequently Asked Questions</h1>
            <div class="accordion-item">
                <div class="accordion-item-header">
                    What is BuyBoosting.com?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        We are a company that operates a safe and a top tier boosting platform for online games. Our
                        boosting services are accessible worldwide. We achieve this by recruiting the best performing
                        boosters from each region for the games we boost. We guarantee the highest standards of online
                        game boosting available with the help on our professional boosting team, customer-centric
                        approach and easy to use interface.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <div class="accordion-item-header">
                    What is BuyBoosting.com?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        We are a company that operates a safe and a top tier boosting platform for online games. Our
                        boosting services are accessible worldwide. We achieve this by recruiting the best performing
                        boosters from each region for the games we boost. We guarantee the highest standards of online
                        game boosting available with the help on our professional boosting team, customer-centric
                        approach and easy to use interface.
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <div class="accordion-item-header">
                    What is BuyBoosting.com?
                </div>
                <div class="accordion-item-body">
                    <div class="accordion-item-body-content">
                        We are a company that operates a safe and a top tier boosting platform for online games. Our
                        boosting services are accessible worldwide. We achieve this by recruiting the best performing
                        boosters from each region for the games we boost. We guarantee the highest standards of online
                        game boosting available with the help on our professional boosting team, customer-centric
                        approach and easy to use interface.
                    </div>
                </div>
            </div>
        </div>
        <!-- csgo-faqs-sections start -->

        <!-- csgo-Subscribe Section Start -->
        <div class="csgo-HomeSubscribe-container">
            <div class="csgo-h1-Subscribe">
                <h5 class="trns-text">SUBSCRIBE</h5>
                <h6>WANT MORE ?</h6>
                <p>Sign up to our newsletter and receive regular updates from our side and avail best discounts </p>
            </div>
            <div class="csgo-subscribe-email-container">
                <div class="csgo-subscribe-email-section">

                    <svg xmlns="http://www.w3.org/2000/svg" width="500" height="80" viewBox="0 0 500 80" fill="none">
                        <path d="M1.5 78.5V1.5H498.5V47.6811L450.559 78.5H1.5Z" stroke="url(#paint0_linear_158_4146)"
                            stroke-opacity="0.8" stroke-width="3" />
                        <defs>
                            <linearGradient id="paint0_linear_158_4146" x1="250" y1="-31.25" x2="253.75" y2="173.75"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FD432A" />
                                <stop offset="1" stop-color="#FD2AA9" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <input type="text" placeholder="ENTER YOUR EMAIL ADDRESS">
                </div>
                <button class="csgo-btn SUBSCRIBE-btn">SUBSCRIBE</button>
            </div>
        </div>
        <!-- csgo-Subscribe Section End -->

        <!-- csgo-Footer Section Start -->
       <x-footer></x-footer>
        <!-- csgo-Footer Section End -->

    </div>    
    @endsection