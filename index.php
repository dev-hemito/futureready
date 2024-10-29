<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('meta.php'); ?>
    <?php include('links.php'); ?>

</head>

<body>

    <?php include('header.php'); ?>


    <main>
        <!-- Banner area start here -->
        <section class="banner-area pt-160 pb-160">
            <div class="banner__left-shape wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                <img class="shape-hand__animation" src="assets/images/shape/hero-shape2.png" alt="shape">
            </div>
            <div class="banner__right-shape">
                <img src="assets/images/shape/hero-shape.png" alt="shape">
            </div>
            <div class="banner__hero">
                <img src="assets/images/future/hero.webp" alt="image">
            </div>
            <div class="container">
                <div class="banner__content">
                    <h3 class="mb-15 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">Empowering Future
                        Leaders</h3>
                    <h1 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        Transforming Young Talents to Be Future Ready
                    </h1>
                    <div class="btn-one mt-45 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <span class="btn-circle">
                        </span>
                        <a href="#!" class="btn-inner">
                            <span class="btn-text">
                                UPCOMING EVENTS
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="cause-area pb-120 pt-120">
            <div class="container">
                <div class="section-header mb-60 text-center">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <i class="fa-regular fa-angles-left pe-1"></i>News & Events<i
                            class="fa-regular fa-angles-right ps-1"></i>
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Latest Events</h2>
                </div>
                <?php
                // Directory path
                $dir = 'assets/images/future/events/';

                // Fetch all image files from the directory
                $images = glob($dir . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);

                // Sort images by modification time (newest first)
                array_multisort(array_map('filemtime', $images), SORT_DESC, $images);

                // Get the latest 7 images
                $latest_images = array_slice($images, 0, 7);
                ?>

                <div class="owl-carousel owl-theme events">
                    <?php foreach ($latest_images as $image): ?>
                        <div class="items">
                            <img src="<?php echo $image; ?>" alt="Event Image">
                        </div>
                    <?php endforeach; ?>
                </div>

                <div class="text-center mt-4">
                    <div class="btn-two  mx-auto">
                        <span class="btn-circle"></span>
                        <a href="#!" class="btn-inner">
                            <span class="btn-text">View All Events</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <section class="about-two-area pt-120 pb-120 overflow-hidden">
            <div class="about-two__wrp">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="about-two__image image pr-60">
                                <img src="assets/images/future/about/abt.webp" alt="image">
                                <div class="line-shape sway_Y__animation">
                                    <img src="assets/images/shape/about-line.png" alt="shape">
                                </div>
                                <div class="dot-shape sway__animation">
                                    <img src="assets/images/shape/about-dot3.png" alt="shape">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="section-header mb-20">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <i class="fa-regular fa-angles-left pe-1"></i> ABOUT US <i
                                        class="fa-regular fa-angles-right ps-1"></i>
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    Empowering the Next Generation of Leaders
                                </h2>
                                <p class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                                    The Future Ready Foundation is dedicated to bridging the gap between education and
                                    industry.
                                    Through expert mentoring, career development programs, and personalized guidance, we
                                    empower young talents to become successful, responsible global citizens.
                                </p>
                            </div>

                            <div class="about-two__content">
                                <div class="item mb-30 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <img src="assets/images/future/icons/career.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h6 class="mb-10">Personalized Career Guidance</h6>
                                        <p>We provide tailored career mapping, expert mentoring to prepare students for
                                            the professional world.</p>
                                    </div>
                                </div>

                                <div class="item wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                                    <div class="icon">
                                        <img src="assets/images/future/icons/mentorship.png" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h6 class="mb-10">Holistic Development</h6>
                                        <p>Our programs focus on mental and physical well-being, equipping students with
                                            the skills to succeed in all areas of life.</p>
                                    </div>
                                </div>

                                <div class="d-flex align-content-center flex-wrap gap-4 mt-40 wow fadeInDown"
                                    data-wow-delay="400ms" data-wow-duration="1500ms">
                                    <div class="btn-two">
                                        <span class="btn-circle"></span>
                                        <a href="#!" class="btn-inner">
                                            <span class="btn-text">LEARN MORE</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="counter-area pb-100">
            <div class="container">
                <div class="counter__wrp">
                    <div class="counter__item wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <img src="assets/images/future/icons/school.png" alt="icon">
                        </div>
                        <div class="content">
                            <h3><span class="count">500</span>+</h3>
                            <span>Universities, Colleges & Schools</span>
                        </div>
                    </div>
                    <div class="counter__item wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <img src="assets/images/future/icons/teacher.png" alt="icon">
                        </div>
                        <div class="content">
                            <h3><span class="count">3,500</span>+</h3>
                            <span>Teachers & Counsellors</span>
                        </div>
                    </div>
                    <div class="counter__item wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="icon">
                            <img src="assets/images/future/icons/graduated.png" alt="icon">
                        </div>
                        <div class="content">
                            <h3><span class="count">500,000</span>+</h3>
                            <span>Students Empowered</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <section class="cause-area pb-120">
            <div class="container">
                <div class="section-header mb-60 text-center">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <i class="fa-regular fa-angles-left pe-1"></i> Our Mentors<i
                            class="fa-regular fa-angles-right ps-1"></i>
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Our Expert Mentors</h2>
                </div>
                <div class="owl-carousel owl-theme mentors">
                    <div class="items">
                        <div class="cause__item text-center">
                            <div class="cause__image image">
                                <img src="assets/images/future/mentors/1.jpeg" alt="image">

                            </div>
                            <div class="cause__content">
                                <h4 class="mt-20"><a href="#!" class="primary-hover">Commander Jayakrishnan</a></h4>
                                <div class="progress-area ">

                                    <div class="progress__goal">
                                        <h6><span>( Retd - Indian Navy )</span></h6>
                                    </div>
                                    <p>Expert on Emerging Technologies in Defence , Maritime & Aerospace mnfg
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="cause__item text-center">
                            <div class="cause__image image">
                                <img src="assets/images/future/mentors/2.webp" alt="image">

                            </div>
                            <div class="cause__content">
                                <h4 class="mt-20"><a href="#!" class="primary-hover">Flight Lieutenant A T Kishore</a>
                                </h4>
                                <div class="progress-area ">

                                    <div class="progress__goal">
                                        <h6><span>( Retd - Indian Airforce)</span></h6>
                                    </div>
                                    <p>Expert on Wireless, AI, ML Tech

                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="cause__item text-center">
                            <div class="cause__image image">
                                <img src="assets/images/future/mentors/balasai.jpg" alt="image">

                            </div>
                            <div class="cause__content">
                                <h4 class="mt-20"><a href="#!" class="primary-hover">Commander S. Balasai</a></h4>
                                <div class="progress-area ">

                                    <div class="progress__goal">
                                        <h6><span>( Retd Indian Navy)</span></h6>
                                    </div>
                                    <p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="cause__item text-center">
                            <div class="cause__image image">
                                <img src="assets/images/future/mentors/3.webp" alt="image">

                            </div>
                            <div class="cause__content">
                                <h4 class="mt-20"><a href="#!" class="primary-hover">Mr Paulraj Subramanyam</a></h4>
                                <div class="progress-area ">

                                    <div class="progress__goal">
                                        <h6><span>former M D, HMT</span></h6>
                                    </div>
                                    <p>Expert on Emerging Technologies
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="cause__item text-center">
                            <div class="cause__image image">
                                <img src="assets/images/future/mentors/4.webp" alt="image">

                            </div>
                            <div class="cause__content">
                                <h4 class="mt-20"><a href="#!" class="primary-hover">Dr CKB NAIR</a></h4>
                                <div class="progress-area ">

                                    <div class="progress__goal">
                                        <h6><span>Director Bravee Skilling Academy</span></h6>
                                    </div>
                                    <p>Career guidence expert
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="items">
                        <div class="cause__item text-center">
                            <div class="cause__image image">
                                <img src="assets/images/future/mentors/rajappan.jpg" alt="image">

                            </div>
                            <div class="cause__content">
                                <h4 class="mt-20"><a href="#!" class="primary-hover">Group Capt E R Rajappan</a></h4>
                                <div class="progress-area ">

                                    <div class="progress__goal">
                                        <h6><span>( Retd - Indian Airforce)</span></h6>
                                    </div>
                                    <p>Expert on Aerospace Mnfg & Airport Mngt</p>
                                </div>
                            </div>
                        </div>
                    </div>
<!--                     <div class="items">
                        <div class="cause__item text-center">
                            <div class="cause__image image">
                                <img src="assets/images/future/mentors/demo.webp" alt="image">

                            </div>
                            <div class="cause__content">
                                <h4 class="mt-20"><a href="#!" class="primary-hover">Dr Brijesh George John </a></h4>
                                <div class="progress-area ">

                                    <div class="progress__goal">
                                        <h6><span> Chairman State Placement Officers Consortium</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
                <div class="text-center mt-4">
                    <div class="btn-two  mx-auto">
                        <span class="btn-circle"></span>
                        <a href="#!" class="btn-inner">
                            <span class="btn-text">View All Mentors</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="project-area  pb-120">
            <div class="container">
                <div class="section-header mb-60 text-center">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <i class="fa-regular fa-angles-left pe-1"></i>Empowering Areas<i
                            class="fa-regular fa-angles-right ps-1"></i>
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Major Areas of Activities
                    </h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="project__item">
                            <div class="image">
                                <img src="assets/images/future/area/1.webp" alt="image">
                            </div>
                            <div class="project__content">
                                <div class="con">
                                    <h4><a href="#!" class="text-white">Institution Improvement <br>
- Universities <br>
- Colleges <br>
- Schools
</a></h4>
                                </div>
                                <a href="#!" class="next-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="project__item">
                            <div class="image">
                                <img src="assets/images/future/area/2.webp" alt="image">
                            </div>
                            <div class="project__content">
                                <div class="con">
                                    <h4><a href="#!" class="text-white">Teacher Transformation</a></h4>

                                </div>
                                <a href="#!" class="next-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="project__item">
                            <div class="image">
                                <img src="assets/images/future/area/3.webp" alt="image">
                            </div>
                            <div class="project__content">
                                <div class="con">
                                    <h4><a href="#!" class="text-white">Student Empowerment Programs based on talent analysis

                                        </a></h4>
                                </div>
                                <a href="#!" class="next-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="project__item">
                            <div class="image">
                                <img src="assets/images/future/area/4.webp" alt="image">
                            </div>
                            <div class="project__content">
                                <div class="con">
                                    <h4><a href="#!" class="text-white">Parent Orientation
                                        </a></h4>
                                </div>
                                <a href="#!" class="next-btn"><i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="blog-area pb-120">
            <div class="container">
                <div class="section-header mb-60 text-center">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <i class="fa-regular fa-angles-left pe-1"></i>Partners<i
                            class="fa-regular fa-angles-right ps-1"></i>
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Training / Knowledge
                        Partners</h2>
                </div>
                <div class="owl-carousel owl-theme colleges">
                    <div class="item">
                        <div class="blog__item">
                            <div class="image">
                                <img src="assets/images/future/college/1.webp" alt="image">

                            </div>
                            <div class="blog__content pt-4">

                                <h4 class="pb-25 bor-bottom"><a href="#!" class="primary-hover">Bravee MultiSkilling
                                        Academy</a></h4>
                                <div class="row justify-content-between">
                                    <li class="col-lg-6">
                                        50K+ Students
                                    </li>
                                    <li class="col-lg-6">
                                        200+ Courses
                                    </li>
                                </div>
                                <a class="mt-4" href="#!"><span class="read-more fw-bold transition">View Details <i
                                            class="fa-solid fa-arrow-right ms-1"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog__item">
                            <div class="image">
                                <img src="assets/images/future/college/2.webp" alt="image">

                            </div>
                            <div class="blog__content pt-4">

                                <h4 class="pb-25 bor-bottom"><a href="#!" class="primary-hover">Shivaayu Aerospace</a>
                                </h4>
                                <div class="row justify-content-between">
                                    <li class="col-lg-6">
                                        50K+ Students
                                    </li>
                                    <li class="col-lg-6">
                                        200+ Courses
                                    </li>
                                </div>
                                <a class="mt-4" href="#!"><span class="read-more fw-bold transition">View Details <i
                                            class="fa-solid fa-arrow-right ms-1"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog__item">
                            <div class="image">
                                <img src="assets/images/future/college/avishkara.png" alt="image">

                            </div>
                            <div class="blog__content pt-4">

                                <h4 class="pb-25 bor-bottom"><a href="#!" class="primary-hover">Avishkara School for
                                        Applied Professional Training
                                    </a></h4>
                                <div class="row justify-content-between">
                                    <li class="col-lg-6">
                                        50K+ Students
                                    </li>
                                    <li class="col-lg-6">
                                        200+ Courses
                                    </li>
                                </div>
                                <a class="mt-4" href="#!"><span class="read-more fw-bold transition">View Details <i
                                            class="fa-solid fa-arrow-right ms-1"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog__item">
                            <div class="image">
                                <img src="assets/images/future/college/4.webp" alt="image">

                            </div>
                            <div class="blog__content pt-4">

                                <h4 class="pb-25 bor-bottom"><a href="#!" class="primary-hover">Expertzlab</a></h4>
                                <div class="row justify-content-between">
                                    <li class="col-lg-6">
                                        50K+ Students
                                    </li>
                                    <li class="col-lg-6">
                                        200+ Courses
                                    </li>
                                </div>
                                <a class="mt-4" href="#!"><span class="read-more fw-bold transition">View Details <i
                                            class="fa-solid fa-arrow-right ms-1"></i></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="blog__item">
                            <div class="image">
                                <img src="assets/images/future/college/5.webp" alt="image">

                            </div>
                            <div class="blog__content pt-4">

                                <h4 class="pb-25 bor-bottom"><a href="#!" class="primary-hover">Eduten Finland</a></h4>
                                <div class="row justify-content-between">
                                    <li class="col-lg-6">
                                        50K+ Students
                                    </li>
                                    <li class="col-lg-6">
                                        200+ Courses
                                    </li>
                                </div>
                                <a class="mt-4" href="#!"><span class="read-more fw-bold transition">View Details <i
                                            class="fa-solid fa-arrow-right ms-1"></i></span></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center mt-4">
                    <div class="btn-two  mx-auto">
                        <span class="btn-circle"></span>
                        <a href="#!" class="btn-inner">
                            <span class="btn-text">View All Partners</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <section class="donate-area secondary-bg overflow-hidden">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="image donate__image wow fadeInLeft pr-60" data-wow-delay="200ms"
                        data-wow-duration="1500ms">
                        <img src="assets/images/future/about/2.webp" alt="image">
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="donate__item">
                        <div class="section-header mb-40">
                            <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <i class="fa-regular fa-angles-left pe-1"></i> JOIN US NOW <i
                                    class="fa-regular fa-angles-right ps-1"></i>
                            </h5>
                            <h2 class="text-white wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Join
                                Our Future Making Journey Today</h2>
                        </div>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ex repellendus consequatur
                            exercitationem similique error, ducimus pariatur nobis, neque beatae unde iusto, facere non
                            veritatis. Ex modi dolor dolorum cumque quasi.</p>


                        <div class="donate__now mt-30 wow fadeInDown" data-wow-delay="400ms" data-wow-duration="1500ms">

                            <div class="btn-one">
                                <span class="btn-circle">
                                </span>
                                <a href="#" class="btn-inner">
                                    <span class="btn-text">
                                        Register Now
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="project-area  pb-120">
            <div class="container">
                <div class="section-header mb-60 text-center">
                    <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <i class="fa-regular fa-angles-left pe-1"></i> Our PROJECTS <i
                            class="fa-regular fa-angles-right ps-1"></i>
                    </h5>
                    <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Works Across The World
                    </h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 wow fadeInDown" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="project__item">
                            <div class="image">
                                <img src="assets/images/project/project-image1.jpg" alt="image">
                            </div>
                            <div class="project__content">
                                <div class="con">
                                    <h4><a href="#!" class="text-white">Leslie Alexander</a></h4>
                                    <span class="text-white">Volunteer</span>
                                </div>
                                <a href="#!" class="next-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInDown" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="project__item">
                            <div class="image">
                                <img src="assets/images/project/project-image2.jpg" alt="image">
                            </div>
                            <div class="project__content">
                                <div class="con">
                                    <h4><a href="#!" class="text-white">Leslie Alexander</a></h4>
                                    <span class="text-white">Volunteer</span>
                                </div>
                                <a href="#!" class="next-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="project__item">
                            <div class="image">
                                <img src="assets/images/project/project-image-big.jpg" alt="image">
                            </div>
                            <div class="project__content">
                                <div class="con">
                                    <h4><a href="#!" class="text-white">Leslie Alexander</a></h4>
                                    <span class="text-white">Volunteer</span>
                                </div>
                                <a href="#!" class="next-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="project__item">
                            <div class="image">
                                <img src="assets/images/project/project-image-sm.jpg" alt="image">
                            </div>
                            <div class="project__content">
                                <div class="con">
                                    <h4><a href="#!" class="text-white">Leslie Alexander</a></h4>
                                    <span class="text-white">Volunteer</span>
                                </div>
                                <a href="#!" class="next-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="faq-area pt-120 pb-120 bg-light">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-7">
                        <div class="faq__inner-item">
                            <div class="section-header mb-40">
                                <h5 class="wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <i class="fa-regular fa-angles-left pe-1"></i> FAQS <i
                                        class="fa-regular fa-angles-right ps-1"></i>
                                </h5>
                                <h2 class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">Have
                                    Any Questions?
                                </h2>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="00ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            What is the mission of Future Ready Foundation?
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Our mission is to bridge the gap between education and industry by
                                                providing expert mentoring, skill development, and career guidance to
                                                prepare students for success in their personal and professional lives.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="200ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            How do you support students?
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We offer personalized mentoring, industry-specific workshops, career
                                                mapping, internships, and hands-on experience to help students develop
                                                both professional skills and personal growth.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="400ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Who are your mentors and experts?
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Our mentors include industry professionals, life coaches, and domain
                                                experts who bring their experience and insights to guide students
                                                through tailored programs and hands-on learning opportunities.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item wow fadeInDown shadow border-none" data-wow-delay="600ms"
                                    data-wow-duration="1500ms">
                                    <h2 class="accordion-header" id="headingFour">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            What types of programs do you offer?
                                        </button>
                                    </h2>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>We offer programs focusing on student empowerment, teacher
                                                transformation, career mapping, soft skills development, health and
                                                wellness, and industry projects, all designed to help students become
                                                future-ready global citizens.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="image">
                            <img src="assets/images/future/about/faq.webp" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>


    <?php include('footer.php'); ?>

    <?php include('scripts.php'); ?>

    <script>
        $('.mentors').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true, // Enables autoplay
            autoplayTimeout: 3000, // Sets the timeout duration (in milliseconds)
            autoplaySpeed: 1000, // Sets the autoplay speed (in milliseconds)
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    </script>

    <script>
        $('.colleges').owlCarousel({
            loop: true,
            margin: 20,
            nav: false,
            autoplay: true, // Enables autoplay
            autoplayTimeout: 3000, // Sets the timeout duration (in milliseconds)
            autoplaySpeed: 1000, // Sets the autoplay speed (in milliseconds)
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>

    <script>
        $('.events').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            autoplay: true, // Enables autoplay
            autoplayTimeout: 3000, // Sets the timeout duration (in milliseconds)
            autoplaySpeed: 1000, // Sets the autoplay speed (in milliseconds)
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        });
    </script>




</body>

</html>
