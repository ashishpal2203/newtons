<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NewtonsAcademy</title>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'>

    <!-- swiper -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- end-swipper -->

    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">




</head>

<body onload="load()">

    <!-- <a href="https://wa.link/2yuhml"> <img src="{{asset('assets/img/whatsapp.png')}}" alt="" class="whatsapp "></a> -->


    <header>
        <div class="phone">
            <div class="container">
                <div class="r-1">
                    <div class="call" data-aos="flip-left">

                        <a href="tel:9137848668"> <i class="fa fa-phone"></i> 9137848668</a>
                    </div>
                    <div class="social" data-aos="flip-right">
                        <a href="https://www.facebook.com/NewtonsAcademy17" target="_blank"><i
                                class="fa-brands fa-facebook"></i></a>
                        <a href="https://www.instagram.com/newtons_academy_/" target="_blank"><i
                                class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://www.youtube.com/@NewtonsAcademy/playlists" target="_blank"><i
                                class="fa-brands fa-square-youtube"></i></a>
                        <a href="https://www.linkedin.com/company/90970653/admin/" target="_blank"><i
                                class="fa-brands fa-linkedin"></i></a>

                    </div>
                </div>
            </div>

        </div>
        <nav class="navigation w-100 container">
            <div class="logo">
                <a href="{{url('/')}}"> <img src="{{asset('assets/img/logo.png')}}" alt="logo">
                    </a>
            </div>
            <input type="checkbox" id="click">
            <label for="click" class="menu-btn"></label>
            <label for="click" class="menu-btn"><i class="fas fa-bars"></i></label>
            <ul class="menu">
                <li><a href="{{url('/')}}" class="a">Home</a></li>
                <li><a href="{{url('/about')}}" class="a">About</a></li>
                <li><a href="course.html" class="a">Courses</a></li>
                <li><a href="blog.html" class="a">Blogs </a></li>
                <!-- <li><a href="#" class="a">Resource </a></li> -->
                <li><a href="contact.html" class="a">Contact us</a></li>
                <li><a href="http://newtonsacademy.co.in/login.html" class="a" target="_blank">Login</a></li>

                <li><a href="tel:9137848668" class="call_us">Call us</a></li>

                <div class="social" data-aos="flip-right" id="social">
                    <a href="https://www.facebook.com/NewtonsAcademy17" target="_blank"><i
                            class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/newtons_academy_/" target="_blank"><i
                            class="fa-brands fa-square-instagram"></i></a>
                    <a href="https://www.youtube.com/@NewtonsAcademy/playlists" target="_blank"><i
                            class="fa-brands fa-square-youtube"></i></a>
                    <a href="https://www.linkedin.com/company/90970653/admin/" target="_blank"><i
                            class="fa-brands fa-linkedin"></i></a>

                </div>

            </ul>
        </nav>

    </header>


    @yield('content')



    
    <footer>

        <div class="container">

            <div class="row">
                <div class="col-lg-4 left">
                    <a href="{{url('/')}}"> <img src="{{asset('assets/img/logo-footer.png')}}" alt="" class="img-fluid"> </a>
                </div>
                <div class="col-lg-8 right">
                    <div class="text">
                        <p>1st floor Shriniwas Building Opposite Kothari Farsan. <br> Zaver Road, Mulund West,
                            Mumbai-400080</p>
                        <p>9137848668 | 91378 48668</p>


                    </div>
                </div>
            </div>
        </div>
        <div class="foot">
            <p>&copy; 2023 NewtonsAcademy | Designed by: <a href="https://gravityweb.in/" target="_blank">Gravity
                    Web</a></p>

        </div>

    </footer>

</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>


<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
    AOS.init();
</script>


<script>
    function animate(obj, initVal, lastVal, duration) {
        let startTime = null;

        //get the current timestamp and assign it to the currentTime variable
        let currentTime = Date.now();

        //pass the current timestamp to the step function
        const step = (currentTime) => {

            //if the start time is null, assign the current time to startTime
            if (!startTime) {
                startTime = currentTime;
            }

            //calculate the value to be used in calculating the number to be displayed
            const progress = Math.min((currentTime - startTime) / duration, 1);

            //calculate what to be displayed using the value gotten above
            obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);

            //checking to make sure the counter does not exceed the last value (lastVal)
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                window.cancelAnimationFrame(window.requestAnimationFrame(step));
            }
        };
        //start animating
        window.requestAnimationFrame(step);
    }
    let text1 = document.getElementById('0101');
    let text2 = document.getElementById('0102');
    let text3 = document.getElementById('0103');
    let text4 = document.getElementById('0104');
    const load = () => {
        animate(text1, 0, 5000, 1500);
        animate(text2, 0, 100, 1500);
        animate(text3, 0, 250, 1500);
        animate(text4, 0, 100, 1500);

    }
</script>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 0,
        centeredSlides: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>




<script>
    function validateMobileNumber() {
        var mobileInput = document.getElementById('mobile');
        var mobileValue = mobileInput.value;

        // Validate mobile number
        var pattern = /^[9876]\d{9}$/;
        var isValid = pattern.test(mobileValue);

        // Display error message if invalid
        var errorElement = document.getElementById('mobile-error');
        if (!isValid) {
            errorElement.style.display = 'inline';
        } else {
            errorElement.style.display = 'none';
        }
    }
</script>





</html>