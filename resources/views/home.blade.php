<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('VentureWeb/Homepage.css')}}">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel='stylesheet' href='resources\views\homepage.css'>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    

    
</head>

<body>
    <section class="navbar__section">
        <a href="Homepage.html">
            <div class="nav__logo">
                <div class="logo"><img src="{{asset('VentureWeb\logo.jpg')}}" alt=""></div>
                <div class="logo__text">
                 
                        <span style="color:red">VENTURE </span>
                        <br><span style="color:rgb(63,155,214)">FOUR</span>
                    
                </div>
            </div>
        </a>
        <div class="nav__toogle" id="navToggle">
            <i class="fa-sharp fa-solid fa-bars"></i>
        </div>

        <div class="nav__elements">
            <ul>
                <li class="nav__element">
                    <a href="{{url('/home')}}">HOME</a>
                </li>
                <li class="nav__element">
                    <a href="{{url('/about')}}">ABOUT </a>
                </li>
                <li class="nav__element">
                    <a href="#">SERVICES</a>
                </li>
                <li class="nav__element">
                    <a href="#">PRODUCTS</a>
                </li>
                <li class="nav__element">
                    <a href="#">CAREERS</a>
                </li>
            </ul>
        </div>
    </section>

    <!-- -----------------------------main home----------------------------- -->
    <div class="home__section">
        <div class="home__section__text">
            <h1>Innovating our way<br>
                One app at a time
            </h1>
            <p>Technological transformation through socially responsible business.</p>

            <button class="buttonlg">GET STARTED</button>
        </div>
    </div>
    <!--------------------about-------------------------------------------->
    <div class="about__section">
        <div class="about">
            <div class="about__text">
                <h2>
                    Who we are.
                </h2>
                <hr class="after__line">

                <p>
                    Venture Four is a rising Information Technology Startup
                    which has made significant impact in the field of Information Technology throughout its inception
                    phase. We specialize in all sorts of IT and Computer Engineering solutions for small and big
                    Businesses, Governments, Enterprises, Development Partners, Individuals and Multinational
                    Corporations. We aspire to become one of the most influential
                    IT companies of Nepal within the next 2 years and one of the largest IT companies of Nepal in the
                    next 5. We are experts with Ten years
                    of experience in Engineering and Information Technology.
                </p>

                <ul>
                    <li>Information and Communication Technologies</li>
                    <li>IT and IS Consulting</li>
                    <li>Data and Information Management</li>
                    <li>IT-based Business Continuity and Disaster recovery</li>
                    <li>System Integration and Remote Support</li>
                    <li>Cloud-based Application and Web Development</li>
                </ul>
            </div>
            <div class="about__content">
                <div class="about__content__row">
                    <div class="about__content__iconsection">
                        <div class="about__content__row__icon">
                            <i class="fa-solid fa-circle-nodes"></i>
                        </div>
                        <div class="line">
                            <hr class="line__verticle">
                        </div>
                    </div>

                    <div class="about__content__row__desc">
                        <h1>PLGSP</h1>
                        <p>Develop LISA software for PLGSP</p>
                    </div>
                </div>

                <div class="about__content__row">
                    <div class="about__content__iconsection">
                        <div class="about__content__row__icon">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="line">
                            <hr class="line__verticle">
                        </div>
                    </div>

                    <div class="about__content__row__desc">
                        <h1>IT SECURITY</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Sed do eiusmod tempor incididunt ut labore etre.</p>
                    </div>
                </div>
                <div class="about__content__row">
                    <div class="about__content__iconsection">
                        <div class="about__content__row__icon">
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="line">
                            <hr class="line__verticle">
                        </div>
                    </div>

                    <div class="about__content__row__desc">
                        <h1>IT SECURITY</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Sed do eiusmod tempor incididunt ut labore etre.</p>
                    </div>
                </div>
                <div class="about__content__row">
                    <div class="about__content__iconsection">
                        <div class="about__content__row__icon">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                    </div>

                    <div class="about__content__row__desc">
                        <h1>BACKUP AND RECOVERY</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Sed do eiusmod tempor incididunt ut labore etre.</p>
                    </div>
                </div>

                

            </div>
        </div>
    </div>
    <!-- -----------------------------our outreach----------------------------- -->
<section class="outreach__section">
    <div class="outreach__header">
        <h2>Our Outreach</h2>
    </div>

    <div class="outreach__body">
        <div class="outreach__card">
            <p class="outreach__card__title">Platforms</p>
            <h3 class="outreach__card__icon"><i class="fa-solid fa-computer"></i></h3>
            <p class="outreach__card__count">4</p>
        </div>

        <div class="outreach__card">
            <p class="outreach__card__title">Partnership</p>
            <h3 class="outreach__card__icon"><i class="fa-solid fa-handshake"></i></h3>
            <p class="outreach__card__count">56</p>
        </div>

        <div class="outreach__card">
            <p class="outreach__card__title">Industries</p>
            <h3 class="outreach__card__icon"><i class="fa-solid fa-cubes"></i></h3>
            <p class="outreach__card__count">16</p>
        </div>

        <div class="outreach__card">
            <p class="outreach__card__title">Users</p>
            <h3 class="outreach__card__icon"><i class="fa-solid fa-users"></i></h3>
            <p class="outreach__card__count">780,000</p>
        </div>

        <div class="outreach__card">
            <p class="outreach__card__title">Charitable Technology</p>
            <h3 class="outreach__card__icon"><i class="fa-solid fa-hand-holding-heart"></i></h3>
            <p class="outreach__card__count">12</p>
        </div>

       
    </div>
</section>
<!-- -----------------------------services----------------------------- -->
<section class="services__section">
    <div class="services__header">
        <h2>Our Services</h2>
        <hr class="center__after__line">
    </div>

    <div class="services__body">
        <div class="services__cards">
            <div class="services__icon">
                <i class="fa-solid fa-globe"></i>
            </div>

            <P class="card-text">
                Website/Web App
                Development
            </P>
        </div>

        <div class="services__cards">
            <div class="services__icon">
                <i class="fa-solid fa-mobile-screen-button"></i>
            </div>

            <P class="card-text">
                Mobile App
                Development
            </P>
        </div>

        <div class="services__cards">
            <div class="services__icon">
                <i class="fa-solid fa-cloud"></i>
            </div>

            <P class="card-text">
                Hosting
            </P>
        </div>


        <div class="services__cards">
            <div class="services__icon">
                <i class="fa-solid fa-users"></i>
            </div>

            <P class="card-text">
                Outsource
                Development
            </P>
        </div>


        <div class="services__cards">
            <div class="services__icon">
                <i class="fa-sharp fa-solid fa-bullhorn"></i>
            </div>

            <P class="card-text">
                Digital Marketing
            </P>
        </div>

    </div>
</section>



<!-- -----------------------------our clients----------------------------- -->
<section class="clients__section">
    <div class="clients__header">
        <h2>Clients who trust our process</h2>
        <hr class="center__after__line">
    </div>
    <div class="clients__body">
        <div class="clients">
            <img src="\VentureWeb\project5.png" alt="client 1 ">
        </div>

        <div class="clients">
            <img src="\VentureWeb\project4.png" alt="client 2">
        </div>

        <div class="clients">
            <img src="\VentureWeb\project3.png" alt="client 3 ">
        </div>

        <div class="clients">
            <img src="\VentureWeb\project2.png" alt="client 4 ">
        </div>

        <div class="clients">
            <img src="\VentureWeb\project1.png" alt="client 5 ">
        </div>
    </div>
</section>

<!-- -----------------------------testimonials----------------------------- -->
<div class="carousel">
    <div class="carousel-slide">
        <section class="testimonial__section">
            <div class="testimonial__card">
                <div class="testimonial__card__image">
                    <img src="https://img.freepik.com/free-photo/smiling-confident-businesswoman-posing-with-arms-folded_1262-20950.jpg?size=626&ext=jpg" alt="testimonial image">
                </div>
                <div class="testimonial__card__body">
                    <p>1 Venture Four delivers on its promise.
                        I am glad that we made them our outsourcing partner.
                        Looking forward to a mutually beneficial partnership for years to come.
                        Venture Four delivers on its promise.
                        I am glad that we made them our outsourcing partner.
                        Looking forward to a mutually beneficial partnership for years to come.
                    </p>
                    <h4>Alexis Romanov</h4>
                    <h5>Business Strategist</h5>
                </div>
            </div>
        </section>
        
        <section class="testimonial__section">
            <div class="testimonial__card">
                <div class="testimonial__card__image">
                    <img src="https://img.freepik.com/free-photo/smiling-confident-businesswoman-posing-with-arms-folded_1262-20950.jpg?size=626&ext=jpg" alt="testimonial image">
                </div>
                <div class="testimonial__card__body">
                    <p>2 Venture Four delivers on its promise.
                        I am glad that we made them our outsourcing partner.
                        Looking forward to a mutually beneficial partnership for years to come.
                        Venture Four delivers on its promise.
                        I am glad that we made them our outsourcing partner.
                        Looking forward to a mutually beneficial partnership for years to come.
                    </p>
                    <h4>Alexis Romanov</h4>
                    <h5>Business Strategist</h5>
                </div>
            </div>
        </section>

        <section class="testimonial__section">
            <div class="testimonial__card">
                <div class="testimonial__card__image">
                    <img src="https://img.freepik.com/free-photo/smiling-confident-businesswoman-posing-with-arms-folded_1262-20950.jpg?size=626&ext=jpg" alt="testimonial image">
                </div>
                <div class="testimonial__card__body">
                    <p>3 Venture Four delivers on its promise.
                        I am glad that we made them our outsourcing partner.
                        Looking forward to a mutually beneficial partnership for years to come.
                        Venture Four delivers on its promise.
                        I am glad that we made them our outsourcing partner.
                        Looking forward to a mutually beneficial partnership for years to come.
                    </p>
                    <h4>Alexis Romanov</h4>
                    <h5>Business Strategist</h5>
                </div>
            </div>
        </section>

        <section class="testimonial__section">
            <div class="testimonial__card">
                <div class="testimonial__card__image">
                    <img src="https://img.freepik.com/free-photo/smiling-confident-businesswoman-posing-with-arms-folded_1262-20950.jpg?size=626&ext=jpg" alt="testimonial image">
                </div>
                <div class="testimonial__card__body">
                    <p>4 Venture Four delivers on its promise.
                        I am glad that we made them our outsourcing partner.
                        Looking forward to a mutually beneficial partnership for years to come.
                        Venture Four delivers on its promise.
                        I am glad that we made them our outsourcing partner.
                        Looking forward to a mutually beneficial partnership for years to come.
                    </p>
                    <h4>Alexis Romanov</h4>
                    <h5>Business Strategist</h5>
                </div>
            </div>
        </section>
    </div>
    <div class="carousel-indicators"></div>
</div>
<!-- -----------------------------stay connected----------------------------- -->
<section class="signup__section">
    <div class="signup__text">
        <h5>Stay connected with us?</h5>
        <p>Sign up to our monthly newsletter and stay updated with our news and more.</p>
    </div>
    <div class="signup__button">
        <button>Get Started</button>
    </div>
</section>
<!-- ---------------------footer------------------------------------ -->
<section class="footer__Section">
    <div class="footer__content__main">

        <p>
            Venture Four Technology provides a full suite of digital business solutions,
            including web and mobile app development, cloud services,
            branding, and digital marketing, empowering businesses to thrive
            in the digital era.
        </p>
    </div>

    <div class="footer__quicklinks">
        <p>QUICK LINKS</p>

        <ul>
            <a href="{{url('/home')}}">
                <li>HOME</li>
            </a>
            <a href="{{url('/about')}}">
                <li>ABOUT</li>
            </a>
            <a href="#">
                <li>SERVICES</li>
            </a>
            <a href="#">
                <li>PROJECTS</li>
            </a>
            <a href="#">
                <li>NOTICES</li>
            </a>
            <a href="#">
                <li>CONTACT US</li>
            </a>
        </ul>
    </div>
    <div class="footer__sociallinks">
        <h6>VENTURE FOUR TECHNOLOGY PVT LTD.</h6>
        <p>
            mail@venture4tech.com <br>
            985-1328616<br>
            Chakupat,
            Lalitpur,Nepal
        </p>

        <div class="icon-section">
            <a href=""><i class="fa-brands fa-facebook"></i></a>
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-whatsapp"></i></a>
            <a href=""><i class="fa-brands fa-linkedin"></i></a>
        </div>
    </div>

</section>
<!-- --------------------------------------------------------- -->

<!-- --------------------------------------------------------- -->



    <script>
        const navToggle = document.getElementById('navToggle');
        const navElements = document.querySelector('.nav__elements');

        navToggle.addEventListener('click', function () {
            navElements.classList.toggle('active');
            navToggle.classList.toggle('active');
        });

        const carousel = document.querySelector('.carousel');
        const slide = document.querySelector('.carousel-slide');
        const slideSections = Array.from(slide.children);
        const slideWidth = carousel.clientWidth;
        const totalSlides = slideSections.length;
        let currentIndex = 0;

        carousel.addEventListener('click', handleCarouselClick);

        function handleCarouselClick(event) {
            if (event.target.classList.contains('left')) {
                slideLeft();
            } else if (event.target.classList.contains('right')) {
                slideRight();
            } else if (event.target.classList.contains('indicator')) {
                const indicatorIndex = parseInt(event.target.dataset.index);
                goToSlide(indicatorIndex);
            }
        }

        function slideLeft() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            slide.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            updateIndicators();
        }

        function slideRight() {
            currentIndex = (currentIndex + 1) % totalSlides;
            slide.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            updateIndicators();
        }

        function goToSlide(index) {
            currentIndex = index;
            slide.style.transform = `translateX(-${currentIndex * slideWidth}px)`;
            updateIndicators();
        }

        function updateIndicators() {
            const indicators = document.querySelectorAll('.carousel-indicators span');
            indicators.forEach((indicator, index) => {
                if (index === currentIndex) {
                    indicator.classList.add('active');
                } else {
                    indicator.classList.remove('active');
                }
            });
        }

        function createIndicators() {
            const indicatorsContainer = document.querySelector('.carousel-indicators');
            for (let i = 0; i < totalSlides; i++) {
                const indicator = document.createElement('span');
                indicator.classList.add('indicator');
                indicator.dataset.index = i;
                if (i === currentIndex) {
                    indicator.classList.add('active');
                }
                indicatorsContainer.appendChild(indicator);
            }
        }

        createIndicators();
    </script>

</body>

</html>