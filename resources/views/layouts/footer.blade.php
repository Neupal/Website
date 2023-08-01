<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" href="{{asset('VentureWeb/footer.css')}}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100;200;300;400;500;600&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="about.css">
</head>

<body>
    <footer>
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
            <a href="{{url('/services')}}">
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

    </footer>
</body>

</html>