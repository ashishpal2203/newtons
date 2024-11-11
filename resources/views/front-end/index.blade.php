

@extends('layouts.frontend')
@section('content')

    <style>
        .error {
            color: red;
        }


        /* Basic styling for the dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
            padding: 0px;
            display: block;
        }

        .dropdown .dropdown-btn {
            cursor: pointer;
        }

        /* Styling for the trigger button */


        /* Styling for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background: linear-gradient(to bottom, #b9d8fd, #8eadd2);

            /* width: 100%; */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 1000;
            margin-left: 15px;
            padding: 10px;
            border-radius: 10px 10px 0px 0px;

        }

        .dropdown-content span {
            font-size: 15px;
            color: red;
        }

        /* Styling for dropdown links */
        .dropdown-content a {
            color: #333;
            padding: 5px;
            text-decoration: none;
            display: block;
            font-size: 16px !important;
        }

        /* Change color on hover */
        .dropdown-content a:hover {
            color: #fef2f2;
        }

        /* Show dropdown content when hover over the dropdown button */
        .dropdown:hover .dropdown-content {
            display: block;

        }
    </style>

    <main>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <img class="img-screen" src="{{asset('assets/img/banner/1.jpg')}}" alt="">
                    <img class="mobile" src="{{asset('assets/img/banner/m-1.jpg')}}" alt="mobile-screen">


                </div>

                <div class="swiper-slide">
                    <img class="img-screen" src="{{asset('assets/img/banner/2.jpg')}}" alt="">

                    <img class="mobile" src="{{asset('assets/img/banner/m-2.jpg')}}" alt="mobile-screen">

                </div>


                <div class="swiper-slide">
                    <img class="img-screen" src="{{asset('assets/img/banner/3.jpg')}}" alt="">

                    <img class="mobile" src="{{asset('assets/img/banner/m-3.jpg')}}" alt="mobile-screen">

                </div>

                <div class="swiper-slide">
                    <img class="img-screen" src="{{asset('assets/img/banner/4.jpg')}}" alt="">

                    <img class="mobile" src="{{asset('assets/img/banner/m-4.jpg')}}" alt="mobile-screen">
                </div>
                <div class="swiper-slide">
                    <img class="img-screen" src="{{asset('assets/img/banner/5.jpg')}}" alt="">

                    <img class="mobile" src="{{asset('assets/img/banner/m-5.jpg')}}" alt="mobile-screen">
                </div>
                <div class="swiper-slide img-screen">
                    <img class="img-screen" src="{{asset('assets/img/banner/6.jpg')}}" alt="">

                    <!--<img class="mobile" src="{{asset('assets/img/banner/m-5.jpg')}}" alt="mobile-screen">-->
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>

    </main>


    <section class="first">

        <div class="container mt-5">

            <div class="one">


                <div class="col-lg-12">
                    <div class="counter" data-aos="fade-up">

                        <h4><b><span id='0101'>0</span>+ </b><br>
                            <p class="faculty text-center">Students</p>
                        </h4>
                        <h4><span id='0102'>0</span>+<br>
                            <p class="faculty">Faculty</p>
                        </h4>

                        <h4><span id='0103'>0</span>+<br>
                            <p class="faculty">In Engineering</p>
                        </h4>
                        <h4><span id='0104'>0</span>+<br>
                            <p class="faculty">In Medical</p>
                        </h4>
                    </div>

                </div>

            </div>

            <h3 class="mt-5">Why Us</h3>

        </div>


        </div>



    </section>

    <section class="second">
        <div class="container">




            <div class="row g-2 why_us_sec" data-aos="fade-up">
                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="card_whyUs">
                        <div class="wh_img">
                            <img src="{{asset('assets/img/about/1.jpg')}}" alt="img" class="img-fluid">
                        </div>

                        <div class="wh_content">
                            <p class="t1">Top-Tier Faculty</p>
                            <p class="t2">Our faculty is comprised of IITians and Doctors who are dedicated to enhancing
                                the
                                success of our students by guiding them towards the best outcome.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="card_whyUs">
                        <div class="wh_img">
                            <img src="{{asset('assets/img/about/2.gif')}}" alt="img" class="img-fluid">
                        </div>
                        <div class="wh_content">
                            <p class="t1">Tailored Study Material</p>
                            <p class="t2">Our study materials are faculty-designed, tailored to boost students'
                                confidence
                                for
                                competitive exams.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="card_whyUs">
                        <div class="wh_img">
                            <img src="{{asset('assets/img/about/3.gif')}}" alt="img" class="img-fluid" width="100%">
                        </div>
                        <div class="wh_content">
                            <p class="t1">Individualized Focus</p>
                            <p class="t2">Small class size, big results! Our highly educated faculty at Newton's Academy
                                provides individualized attention to ensure student comprehension. With a batch size of
                                only
                                30
                                students, we deliver outstanding education</p>
                        </div>
                    </div>

                </div>
                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="card_whyUs">
                        <div class="wh_img">
                            <img src="{{asset('assets/img/about/4.gif')}}" alt="img" class="img-fluid">
                        </div>
                        <div class="wh_content">
                            <p class="t1">Regular Tests</p>
                            <p class="t2">We test our students regularly to gauge their understanding of concepts. Our
                                experienced professors assess the papers, and the tests follow the current exam pattern.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="card_whyUs">
                        <div class="wh_img">
                            <img src="{{asset('assets/img/about/5.gif')}}" alt="img" class="img-fluid">
                        </div>

                        <div class="wh_content">
                            <p class="t1">Library Facility</p>
                            <p class="t2">Explore a wide range of books for competitive exams at our institute's
                                library.
                                Borrow
                                books hassle-free and gain valuable knowledge to excel in your exams.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="card_whyUs">
                        <div class="wh_img">
                            <img src="{{asset('assets/img/about/6.jpg')}}" alt="img" class="img-fluid">
                        </div>
                        <div class="wh_content">
                            <p class="t1">Parental Updates</p>
                            <p class="t2">We keep parents up-to-date with their child's homework status and performance
                                to
                                ensure that they are always in the loop.</p>
                        </div>
                    </div>

                </div>
            </div>

        </div>


    </section>

    <section class="third">

        <div class="container">

            <div class="row">

                <div class="col-lg-5 left" data-aos="fade-up">
                    <img src="{{asset('assets/img/about/ab-1.jpg')}}" alt="" class="img-fluid">

                </div>
                <div class="col-lg-7 right" data-aos="fade-up">
                    <h3>Our Mission</h3>
                    <h4>Empowering families through <br>
                        education, one life at a time.</h4>
                    <p>At Newton's Academy, we believe that education is not just about academic success but also about
                        changing lives. We are passionate about creating a positive impact in the lives of families by
                        providing quality education that opens up opportunities and transforms futures. Seeing our
                        students succeed and achieve their goals fills us with a deep sense of fulfilment and pride. We
                        are committed to making a difference and changing lives through education, one family at a time.
                    </p>
                    <a href="about.html">Read More</a>
                </div>
            </div>



        </div>



    </section>

    <section class="four">

        <div class="container">

            <h5>Course we Provide</h5>

            <div class="row course g-4" data-aos="fade-up">

                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="img">
                        <a href="jee.html"> <img src="{{asset('assets/img/course/c-1.jpg')}}" alt="" class="img-fluid"></a>
                        <button><a href="jee.html">JEE</a> <span>(Mains + Advanced)</span></button>
                        <div class="btn">
                            <a href="jee.html">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="img">
                        <a href="neet.html"> <img src="{{asset('assets/img/course/c-2.jpg')}}" alt="" class="img-fluid"></a>
                        <button><a href="neet.html">NEET</a></button>
                        <div class="btn">
                            <a href="neet.html">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="img">
                        <a href="mht-cet.html"> <img src="{{asset('assets/img/course/c-3.jpg')}}" alt="" class="img-fluid"></a>
                        <button><a href="mht-cet.html">MHT-CET</a></button>
                        <div class="btn-1">
                            <p class="text">XI & XII</p>
                            <a href="mht-cet.html">Know More</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="img">
                        <a href="integrate.html"> <img src="{{asset('assets/img/course/c-4.jpg')}}" alt="" class="img-fluid"></a>
                        <button><a href="integrate.html" class="inte">Integrated</a> </button>
                        <div class="btn-1">
                            <p class="text text-1">Classes</p>
                            <a href="integrate.html">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="img">
                        <a href="eleven-twelve.html"><img src="{{asset('assets/img/course/c-5.jpg')}}" alt=""
                                class="img-fluid"></a>
                        <button><a href="eleven-twelve.html">Sci & Comm</a> </button>
                        <div class="btn-1">
                            <p class="text">XI & XII</p>
                            <a href="eleven-twelve.html">Know More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-6" data-aos="fade-up">
                    <div class="img">
                        <a href="school.html"> <img src="{{asset('assets/img/course/c-6.jpg')}}" alt="" class="img-fluid"></a>
                        <button><a href="school.html">School Section</a> </button>
                        <div class="btn-1">
                            <p class="text">Vll & XI</p>
                            <a href="school.html">Know More</a>
                        </div>
                    </div>
                </div>

            </div>



        </div>

    </section>

    <section class="five" id="unlock_po">

        <div class="container">
            <h2 class="mb-5">Unlock your potential by diving into resources <br> and stay ahead in your academic journey!</h2>
        
            <div class="unl_header">
                <ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="pills-questionpapers-tab" data-bs-toggle="pill"
                            href="#pills-questionpapers" role="tab" aria-controls="pills-questionpapers"
                            aria-selected="true">Question Papers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-textbooks-tab" data-bs-toggle="pill" href="#pills-textbooks" role="tab"
                            aria-controls="pills-textbooks" aria-selected="false">Textbooks</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pills-courses-tab" data-bs-toggle="pill" href="#pills-courses" role="tab"
                            aria-controls="pills-courses" aria-selected="false">Courses</a>
                    </li>
                </ul>
            </div>
        
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-questionpapers" role="tabpanel"
                    aria-labelledby="pills-questionpapers-tab">
                    <ul class="nav nav-pills pb-3 justify-content-around align-items-center sub_tab">
                        <li class="nav-item">
                            <a class="nav-link active" id="ssc-tab" data-bs-toggle="tab" href="#ssc-tab-pane" role="tab"
                                aria-controls="ssc-tab-pane" aria-selected="true">SSC</a>
                        </li>
                        <div class="vr_line"></div>
                        <li class="nav-item">
                            <a class="nav-link" id="hsc-sci-tab" data-bs-toggle="tab" href="#hsc-sci-tab-pane" role="tab"
                                aria-controls="hsc-sci-tab-pane" aria-selected="false">HSC-Sci</a>
                        </li>
                        <div class="vr_line"></div>
                        <li class="nav-item">
                            <a class="nav-link" id="hsc-comm-tab" data-bs-toggle="tab" href="#hsc-comm-tab-pane" role="tab"
                                aria-controls="hsc-comm-tab-pane" aria-selected="false">HSC-Comm</a>
                        </li>
                        <div class="vr_line"></div>
                        <li class="nav-item">
                            <a class="nav-link" id="jee-tab" data-bs-toggle="tab" href="#jee-tab-pane" role="tab"
                                aria-controls="jee-tab-pane" aria-selected="false">JEE</a>
                        </li>
                        <div class="vr_line"></div>
                        <li class="nav-item">
                            <a class="nav-link" id="neet-tab" data-bs-toggle="tab" href="#neet-tab-pane" role="tab"
                                aria-controls="neet-tab-pane" aria-selected="false">NEET</a>
                        </li>
                        <div class="vr_line"></div>
                        <li class="nav-item">
                            <a class="nav-link" id="mht-cet-tab" data-bs-toggle="tab" href="#mht-cet-tab-pane" role="tab"
                                aria-controls="mht-cet-tab-pane" aria-selected="false">MHT-CET</a>
                        </li>
                    </ul>
        
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="ssc-tab-pane" role="tabpanel" aria-labelledby="ssc-tab"
                            tabindex="0">
                            <div class="std_cat">
                                <div class="container-fluid">
                                    <div class="row gy-4 ">
                                        <div class="col-lg-3">
                                            <div class="sub_card">
                                                <p>10th Boards</p>
                                                <h3>Hindi</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sub_card">
                                                <p>10th Boards</p>
                                                <h3>Hindi</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sub_card">
                                                <p>10th Boards</p>
                                                <h3>Hindi</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sub_card">
                                                <p>10th Boards</p>
                                                <h3>Hindi</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sub_card">
                                                <p>10th Boards</p>
                                                <h3>Hindi</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sub_card">
                                                <p>10th Boards</p>
                                                <h3>Hindi</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="sub_card">
                                                <p>10th Boards</p>
                                                <h3>Hindi</h3>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hsc-sci-tab-pane" role="tabpanel" aria-labelledby="hsc-sci-tab"
                            tabindex="0">HSC-Sci content...</div>
                        <div class="tab-pane fade" id="hsc-comm-tab-pane" role="tabpanel" aria-labelledby="hsc-comm-tab"
                            tabindex="0">HSC-Comm content...</div>
                        <div class="tab-pane fade" id="jee-tab-pane" role="tabpanel" aria-labelledby="jee-tab" tabindex="0">JEE
                            content...</div>
                        <div class="tab-pane fade" id="neet-tab-pane" role="tabpanel" aria-labelledby="neet-tab" tabindex="0">
                            NEET content...</div>
                        <div class="tab-pane fade" id="mht-cet-tab-pane" role="tabpanel" aria-labelledby="mht-cet-tab"
                            tabindex="0">MHT-CET content...</div>
                    </div>
                </div>
        
                <div class="tab-pane fade" id="pills-textbooks" role="tabpanel" aria-labelledby="pills-textbooks-tab">
                    Textbooks content...</div>
                <div class="tab-pane fade" id="pills-courses" role="tabpanel" aria-labelledby="pills-courses-tab">
                    Courses content...</div>
            </div>
        </div>
        
            

    </section>

    <section class="six">

        <div class="container">
            <h5>Our Champions</h5>

            <div class="d-flex row-2" data-aos="fade-up">

                <div class="col-lg-4 one" data-aos="fade-up">

                    <p class="ch-1">I am studying in this class from last 3 years..I experienced that every teachers
                        provide their
                        100% effort.. towards each and every students...I can assure you 100% that you will not gone
                        regret after joining in this classes.
                    </p> <br>
                    <div class="img-text">
                        <img src="{{asset('assets/img/topper/rv-1.jpg')}}" alt="" class="img-fluid">

                        <p>Name <br> Mahima Singh | &nbsp; 12th </p>


                    </div>

                </div>
                <div class="col-lg-4 one" data-aos="fade-up">

                    <p class="ch-1">Thanks to all the teachers at Newton's Academy, I was able to improve even my
                        weakest subject.
                        Without their incredible support and attention it would not be possible for me to be able to
                        crack NEET!
                    </p> <br><br>
                    <div class="img-text">
                        <img src="{{asset('assets/img/topper/rv-2.jpg')}}" alt="" class="img-fluid">
                        <p>Name <br> Neetu Yadav | &nbsp; NEET</p>
                    </div>
                </div>
                <div class="col-lg-4 one" data-aos="fade-up">

                    <p>It has been 3 years since I passed out but I am still connected with Newton's Academy, that
                        speaks volumes about my experience there!
                        I have never seen such compassionate teachers, especially Ganga Sir, who has guided me all along
                        and I am pursuing
                        Engineering now!

                    </p>

                    <div class="img-text">
                        <img src="{{asset('assets/img/topper/rv-3.jpg')}}" alt="" class="img-fluid">
                        <p>Name <br> Sejal Vishwakarma | 10th</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="seven">

        <div class="container">
            <h5>Take a look at our Courses</h5>


            <div class="row" data-aos="fade-up">

                <div class="col-lg-4 one" data-aos="fade-up">

                    <div>
                        <iframe src="https://www.youtube.com/embed/LrI6xnakAjA?si=pGaIw5-j6NUK-ycf"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>


                    </div>
                    <div class="text">
                        <a href="https://www.youtube.com/@NewtonsAcademy/playlists" class="play">
                            Karishma Gupta </a>
                        <br>
                        <!-- <a href="https://www.youtube.com/@NewtonsAcademy/playlists" class="para">Newton's Academy has
                            organized "FREE MATHS LECTURES" for you guy's </a> -->
                    </div>

                </div>
                <div class="col-lg-4 one" data-aos="fade-up">
                    <div>
                        <iframe src="https://www.youtube.com/embed/_JrjB7d8K5c?si=7MExiq9flPOYOcu_"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="text">
                        <a href="https://www.youtube.com/@NewtonsAcademy/playlists" class="play">Prince Yadav</a>
                        <br>
                        <!-- <a href="https://www.youtube.com/@NewtonsAcademy/playlists" class="para">Newton's Academy has
                            organized "FREE MATHS LECTURES" for you guy's </a> -->
                    </div>
                </div>
                <div class="col-lg-4 one" data-aos="fade-up">


                    <div>
                        <iframe src="https://www.youtube.com/embed/7paXIM6V6JE?si=XEc87KRhkqbvWSD4"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>

                    </div>
                    <div class="text">
                        <a href="https://www.youtube.com/@NewtonsAcademy/playlists" class="play">Adarsh Jha </a>
                        <br>
                        <!-- <a href="https://www.youtube.com/@NewtonsAcademy/playlists" class="para">Newton's Academy has
                            organized "FREE MATHS LECTURES" for you guy's </a> -->
                    </div>
                </div>
            </div>
            <div class="btn">
                <a href="#" class="text-center" data-aos="flip-left">Explore all</a>
            </div>
        </div>

    </section>

    <div class="eight">

        <div class="container">

            <h5>Explore the articles on our blog</h5>

            <div class="row row-3" data-aos="fade-up">
                <div class="col-lg-4 one" data-aos="fade-up">
                    <div class="img">
                        <a href="./newton-blog-1.html"><img src="{{asset('assets/img/blog/e-1.jpg')}}" alt=""
                                class="img-fluid"></a>

                        <div class="context">
                            <a href="./newton-blog-1.html">Time Management</a>
                            <p>Effective Time Management for NEET and JEE Aspirants</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 one" data-aos="fade-up">
                    <div class="img">
                        <a href="./newton-blog-2.html"> <img src="{{asset('assets/img/blog/e-2.jpg')}}" alt=""
                                class="img-fluid"></a>

                        <div class="context">
                            <a href="./newton-blog-2.html"> Start Strong </a>
                            <p>Tips for 7th to 10th Graders Preparing for Competitive Exams</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 one" data-aos="fade-up">
                    <div class="img">
                        <a href="./newton-blog-3.html"> <img src="{{asset('assets/img/blog/e-3.jpg')}}" alt=""
                                class="img-fluid"></a>

                        <div class="context">
                            <a href="./newton-blog-3.html"> Unlocking Success </a>
                            <p>Why Choosing NEET, JEE, and CET Courses at Newton's Academy Is Your Best Career Move</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn">
            <a href="blog.html" class="text-center" data-aos="flip-left">Explore all</a>
        </div>

    </div>


    <section class="nine">

        <div class="container">

            <p class="text-center talk">Talk To our expert</p>
            <div class="btn">
                <a href="tel:9137848668" data-aos="flip-left">Call now for free</a>
            </div>

            <p class="text-center or">or</p>
            <p class="text-center">Request call back</p>



            <div class="form" data-aos="fade-up">

                <form method="post" action="send-form.php">
                    <label>
                        <input type="text" class="t1" placeholder="First Name" name="fname" required>
                        <input type="text" class="t1" placeholder="Last Name" name="lname" required>
                    </label>
                    <label>
                        <input type="tel" class="t2" id="mobile" name="number" pattern="[9876]{1}[0-9]{9}"
                            maxlength="10" required oninput="validateMobileNumber()" placeholder="Mobile">
                        <span id="mobile-error" class="error" style="display: none;">Invalid mobile number</span>
                    </label>
                    <label>
                        <input type="text" class="t1" placeholder="Class" name="class" required>
                        <input type="text" class="t1" placeholder="Stream" name="stream" required> </label>
                    <label> <input type="email" class="t1" placeholder="Email" name="email" required>
                        <input type="text" class="t1" placeholder="city" name="city"></label>
                    <div class="btn" data-aos="flip-right">
                        <input type="submit" value="Submit Now">
                    </div>

                </form>
            </div>




        </div>


    </section>

 @endsection