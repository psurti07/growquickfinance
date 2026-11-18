<?php
$this->load->view('includes/header');
?>

<div
    class="visual-block visual-theme-5 bg-dark hero-section text-black pt-60 pt-md-60 pt-xl-40 pb-40 pb-xl-40 pb-md-40">
    <div class="container position-relative">
        <div class="row align-items-center">
            <div class="col-12 col-lg-6 col-xl-6 position-relative mb-md-0 mb-20">
                <div class="me-md-25 me-0">
                    <div class="visual-textbox pt-0">
                        <h1 class="text-black fs-1" style="line-height: 1.5;">Grow quick. <span class="title-text-wrap">
                                Borrow smart.
                            </span>
                        </h1>
                        <p class="text-black">Compare pre-approved personal and business loan offers from trusted NBFC
                            partners in one place. 100% online, transparent and fast.</p>
                        <div class="right_align">
                            <a href="<?php echo site_url('onlineprocess/applynow'); ?>"
                                class="btn btn-green btn-sm me-md-10"><span class="btn-text">Check eligibility <i
                                        class="fas fa-arrow-right"></i></span></a>
                            <a href="#" class="btn btn-white btn-sm">See how it works</a>
                        </div>
                        <div class="section-theme-6 pt-35 pb-0">
                            <div class="counters-block pb-0">
                                <div class="container">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-12">
                                            <div class="box-agent mb-md-0 mb-10">
                                                <ul class="agent-img-list d-flex ps-0 list-unstyled">
                                                    <li class="agent-img-item">
                                                        <img src="<?php echo base_url('assets/images/Client-1.png'); ?>"
                                                            alt="image" class="me-md-10 me-0">
                                                    </li>
                                                    <li class="agent-img-item">
                                                        <img src="<?php echo base_url('assets/images/Client-2.png'); ?>"
                                                            alt="image" class="me-md-10 me-0">
                                                    </li>
                                                    <li class="agent-img-item">
                                                        <img src="<?php echo base_url('assets/images/client-3.png'); ?>"
                                                            alt="image" class="me-md-10 me-0">
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9 col-sm-9 col-12">
                                            <div class="row">
                                                <div class="col-lg-12 col-12">
                                                    <p class="text-black mb-0"><strong>4.8/5 </strong>rated by 5,000+
                                                        borrowers</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 col-xl-6">
                <img src="<?php echo base_url('assets/images/img/home-img-1.png'); ?>" alt="image" class="img-fluid dekstop-img d-md-block d-none">

                <img src="<?php echo base_url('assets/images/img/home-mobile-img.png'); ?>" alt="image" class="img-fluid dekstop-img d-md-none d-block m-auto">
            </div>
        </div>
    </div>
</div>

<main class="main">
    <section class="section section-theme-5 pt-0 pt-md-0 pb-xl-0 pb-0 bg-black">
        <div class="container">
            <div class="trending-categories-slider">
                <?php foreach ($banklist as $row) { ?>
                    <div class="wrap text-center">
                        <div class="justify-content-center categories-image">
                            <img src="<?php echo base_url('assets/images/bank/' . $row->bank_image); ?>"
                                alt="<?= $row->bank_name ?>" class="m-auto img-fluid">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

    <section class="section section-theme-2 featured-joblix-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 about-section"
        id="aboutus">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7 mt-10 mb-15 mb-md-30 mb-lg-0 pe-md-60 pe-0">
                    <header class="section-header mb-0">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block section-title position-relative">About us</span>
                        <h3 class="mb-25 text-black h3 fw-normal">We connect borrowers with trusted NBFC partners so getting a loan <br>
                            feels <span class="highlight-text"> as simple as it should.</span></h3>
                        <p class="mb-25">Growquick Finance compares offers, simplifies paperwork and stays with you
                            until the
                            money reaches your account. No branch visits, no hidden charges, no confusion.</p>
                        <div>
                            <a href="#" class="btn btn-green btn-sm"><span class="btn-text">Talk to an expert <i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </header>
                </div>
                <div class="col-12 col-lg-5 mt-10">
                    <div class="section section-theme-6 py-0 counter-section">
                        <div class="counters-block">
                            <div class="container">
                                <div class="row justify-content-center justify-content-md-between">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 p-0">
                                        <div class="counter-box p-md-35 p-25">
                                            <div class="counter-stats">
                                                <h4 class="numbers fs-2">
                                                    <span data-purecounter-duration="1" data-purecounter-start="0"
                                                        data-purecounter-end="500" data-purecounter-once="true"
                                                        class="purecounter">₹500</span> Cr+
                                                </h4>
                                                <span class="subtext">Loans facilitated</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 p-0">
                                        <div class="counter-box p-md-35 p-25">
                                            <div class="counter-stats">
                                                <h4 class="numbers fs-2">
                                                    <span data-purecounter-duration="1" data-purecounter-start="0"
                                                        data-purecounter-end="5000" data-purecounter-once="true"
                                                        class="purecounter">5000</span>+
                                                </h4>
                                                <span class="subtext">Borrowers funded</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 p-0">
                                        <div class="counter-box p-md-35 p-25">
                                            <div class="counter-stats">
                                                <h4 class="numbers fs-2">
                                                    <span data-purecounter-duration="1" data-purecounter-start="0"
                                                        data-purecounter-end="20" data-purecounter-once="true"
                                                        class="purecounter">20</span>+
                                                </h4>
                                                <span class="subtext">NBFC lending partners</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-6 p-0">
                                        <div class="counter-box p-md-35 p-25">
                                            <div class="counter-stats">
                                                <h4 class="numbers fs-2">
                                                    <span data-purecounter-duration="1" data-purecounter-start="0"
                                                        data-purecounter-end="48" data-purecounter-once="true"
                                                        class="purecounter">48</span> hrs
                                                </h4>
                                                <span class="subtext">Average approval time</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-theme-5 how-work-block-wrap pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky" id="how-it-works">
        <div class="container">
            <div class="row mb-30 align-items-end">
                <div class="col-xl-7 col-12">
                    <header class="section-header mb-10">
                        <span class="text-success text-uppercase text-outlined text-top mb-10 d-block section-title position-relative">How it works</span>
                        <h4 class="text-black mb-0">Six steps from <span class="highlight-text">click to cash</span></h4>
                    </header>
                </div>
                <div class="col-xl-5 col-12 m-auto mb-0">
                    <p>A fully digital process with no branch visits and no paperwork queues.</p>
                </div>
            </div>
            <div class="row process-boxes justify-content-center mx-5">
                <div class="col-md-2 col-sm-6 mb-10 pt-20 pb-0">
                    <div class="text-start process-content">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">STEP 01</span>
                        <div class="categories-image-wrap mb-15">
                            <span class="icon">
                                <i class="fas fa-rupee-sign text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">Enter amount & mobile</h6>
                        <p class="text-dark">Choose how much you need and add your mobile number.</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 mb-10 pt-20 pb-0">
                    <div class="text-start process-content">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">STEP 02</span>
                        <div class="categories-image-wrap mb-15">
                            <span class="icon">
                                <i class="fas fa-lock text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">Verify with OTP</h6>
                        <p class="text-dark">Confirm your number with a secure 4-digit code.</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 mb-10 pt-20 pb-0">
                    <div class="text-start process-content">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">STEP 03</span>
                        <div class="categories-image-wrap mb-15">
                            <span class="icon">
                                <i class="fas fa-user text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">Share your profile</h6>
                        <p class="text-dark">Tell us about your work, income and credit score.</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 mb-10 pt-20 pb-0">
                    <div class="text-start process-content">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">STEP 04</span>
                        <div class="categories-image-wrap mb-15">
                            <span class="icon">
                                <i class="fas fa-calendar-alt text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">Choose your EMI</h6>
                        <p class="text-dark">Pick a tenure from 12 to 72 months.</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 mb-10 pt-20 pb-0">
                    <div class="text-start process-content">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">STEP 05</span>
                        <div class="categories-image-wrap mb-15">
                            <span class="icon">
                                <i class="fas fa-lock text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">Unlock your offer</h6>
                        <p class="text-dark">See pre-approved offers from NBFC partners.</p>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 mb-10 pt-20 pb-0">
                    <div class="text-start process-content">
                        <span class="text-success text-uppercase text-outlined text-top mb-15 d-block">STEP 06</span>
                        <div class="categories-image-wrap mb-15">
                            <span class="icon">
                                <i class="fas fa-check text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-dark">Get funded</h6>
                        <p class="text-dark">The NBFC verifies and disburses to your account.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section section-theme-5 how-we-help-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-black" id="whyus">
        <div class="container">
            <div class="row mb-30 align-items-end">
                <div class="col-xl-7 col-12">
                    <header class="section-header mb-10">
                        <span class="text-success text-uppercase text-outlined text-top mb-10 d-block section-title position-relative">Why choose us</span>
                        <h4 class="text-white mb-0">The Growquick <span class="highlight-text">advantage</span></h4>
                    </header>
                </div>
                <div class="col-xl-5 col-12 m-auto mb-0">
                    <p class="text-white">Built around speed, clarity and choice for every borrower.</p>
                </div>
            </div>
            <div class="row process-boxes-main justify-content-center p-15 mx-5">
                <div class="col-md-4 col-sm-6 col-6 pt-20">
                    <div class="text-start">

                        <div class="categories-image-block mb-25">
                            <span class="icon">
                                <i class="fas fa-home text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-white">100% online</h6>
                        <p class="mb-0">Apply from anywhere. No branch visits or paperwork queues.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-6 pt-20">
                    <div class="text-start">
                        <div class="categories-image-block mb-25">
                            <span class="icon">
                                <i class="fas fa-bolt text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-white">Fast approval</h6>
                        <p class="mb-0">Most applications are approved within 48 hours of verification.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-6 pt-20">
                    <div class="text-start">
                        <div class="categories-image-block mb-25">
                            <span class="icon">
                                <i class="fas fa-th-large text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-white">Many lenders, one form</h6>
                        <p class="mb-0">One application reaches multiple NBFCs so you can compare real offers.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-6 pt-20">
                    <div class="text-start">
                        <div class="categories-image-block mb-25">
                            <span class="icon">
                                <i class="fas fa-search text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-white">Transparent terms</h6>
                        <p class="mb-0">Interest rate, fees and tenure are shown before you accept any offer.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-6 pt-20">
                    <div class="text-start">
                        <div class="categories-image-block mb-25">
                            <span class="icon">
                                <i class="fas fa-smile text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-white">Expert support</h6>
                        <p class="mb-0">A certified loan expert guides you from first query to disbursal.</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-6 pt-20">
                    <div class="text-start">
                        <div class="categories-image-block mb-25">
                            <span class="icon">
                                <i class="fas fa-lock text-white"></i>
                            </span>
                        </div>
                        <h6 class="text-white">Safe & secure</h6>
                        <p class="mb-0">Your data is encrypted and shared only with lending partners.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-theme-5 how-work-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60" id="emicalcuator">
        <div class="container">
            <div class="row mb-30 align-items-end">
                <div class="col-xl-7 col-12">
                    <header class="section-header mb-10">
                        <span class="text-success text-uppercase text-outlined text-top mb-10 d-block section-title position-relative">EMI calculator</span>
                        <h4 class="text-black mb-0">Know your EMI <span class="highlight-text">in seconds</span></h4>
                    </header>
                </div>
                <div class="col-xl-5 col-12 m-auto mb-0">
                    <p class="text-black">Move the sliders and pick a tenure to see what you can borrow.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-12 col-12">
                    <div class="row">

                        <script src="https://emicalculator.net/widget/2.0/js/emicalc-loader.min.js"
                            type="text/javascript">
                        </script>
                        <div id="ecww-widgetwrapper" style="min-width:250px;width:100%;">
                            <div id="ecww-widget"
                                style="position:relative;padding-top:0;padding-bottom:280px;height:0;overflow:hidden;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section section-theme-9 featured_Jobs_Block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky"
        id="testimonial">
        <div class="container">
            <div class="row mb-30 align-items-end">
                <div class="col-xl-7 col-12">
                    <header class="section-header mb-10">
                        <span class="text-success text-uppercase text-outlined text-top mb-10 d-block section-title position-relative">Testimonials</span>
                        <h4 class="text-black mb-0">Borrowers who <span class="highlight-text">grew quick</span></h4>
                    </header>
                </div>
                <div class="col-xl-5 col-12 m-auto mb-0">
                    <p class="text-black">Real stories from people who found their loan with us.</p>
                </div>
            </div>
            <div class="row">

                <div class="col-xl-12 col-12 m-auto">
                    <div class="client_testimonials">
                        <?php $testimoniallist = array('testimonials-1.png', 'testimonials-2.png', 'testimonials-3.png', 'testimonials-1.png', 'testimonials-2.png', 'testimonials-3.png') ?>
                        <div class="client_testimonials_slider">
                            <div>
                                <div class="pt-20 px-0 testimonials-card-content">
                                    <div class="mb-25">
                                        <img src="<?= base_url('assets/images/quote.png'); ?>" />
                                    </div>
                                    <div class="card-comment mb-20">
                                        <p class="lh-normal">Growquick made the whole process effortless. I compared offers, picked my EMI and had my sanction within two days.</p>
                                    </div>

                                    <div class="d-flex align-items-center">
                                        <div class="mb-0">
                                            <img src="<?= base_url('assets/images/img/testimonial-1.png'); ?>" />
                                        </div>
                                        <div class="ms-15">
                                            <p class="card-position mb-0 lh-1">Sangeet Gawar</p>
                                            <div class="rates-review mb-0">
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="pt-20 px-0 testimonials-card-content">
                                    <div class="mb-25">
                                        <img src="<?= base_url('assets/images/quote.png'); ?>" />
                                    </div>
                                    <div class="card-comment mb-20">
                                        <p>The loan expert answered every question and kept me updated until disbursal.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-0">
                                            <img src="<?= base_url('assets/images/img/testimonial-2.png'); ?>" />
                                        </div>
                                        <div class="ms-15">
                                            <p class="card-position mb-0 lh-1">Rakesh Shah</p>
                                            <div class="rates-review mb-0">
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="pt-20 px-0 testimonials-card-content">
                                    <div class="mb-25">
                                        <img src="<?= base_url('assets/images/quote.png'); ?>" />
                                    </div>
                                    <div class="card-comment mb-20">
                                        <p>Comparing offers from several lenders saved me a real amount in interest.</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-0">
                                            <img src="<?= base_url('assets/images/img/testimonial-3.png'); ?>" />
                                        </div>
                                        <div class="ms-15">
                                            <p class="card-position mb-0 lh-1">Milan Kakdiya</p>
                                            <div class="rates-review mb-0">
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="pt-20 px-0 testimonials-card-content">
                                    <div class="mb-25">
                                        <img src="<?= base_url('assets/images/quote.png'); ?>" />
                                    </div>
                                    <div class="card-comment mb-20">
                                        <p>“I appreciated the timely updates and process-related support.”</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-0">
                                            <img src="<?= base_url('assets/images/img/testimonial-1.png'); ?>" />
                                        </div>
                                        <div class="ms-15">
                                            <p class="card-position mb-0 lh-1">Kunal Patel</p>
                                            <div class="rates-review mb-0">
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="pt-20 px-0 testimonials-card-content">
                                    <div class="mb-25">
                                        <img src="<?= base_url('assets/images/quote.png'); ?>" />
                                    </div>
                                    <div class="card-comment mb-20">
                                        <p>“The consultation helped me understand the next steps better.”</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-0">
                                            <img src="<?= base_url('assets/images/img/testimonial-1.png'); ?>" />
                                        </div>
                                        <div class="ms-15">
                                            <p class="card-position mb-0 lh-1">Neha Verma</p>
                                            <div class="rates-review mb-0">
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="pt-20 px-0 testimonials-card-content">
                                    <div class="mb-25">
                                        <img src="<?= base_url('assets/images/quote.png'); ?>" />
                                    </div>
                                    <div class="card-comment mb-20">
                                        <p>“The team explained NBFC requirements in a simple and professional manner.”
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-0">
                                            <img src="<?= base_url('assets/images/img/testimonial-1.png'); ?>" />
                                        </div>
                                        <div class="ms-15">
                                            <p class="card-position mb-0 lh-1">Rahul Joshi</p>
                                            <div class="rates-review mb-0">
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="pt-20 px-0 testimonials-card-content">
                                    <div class="mb-25">
                                        <img src="<?= base_url('assets/images/quote.png'); ?>" />
                                    </div>
                                    <div class="card-comment mb-20">
                                        <p>“The document checklist made the application process easier to follow.”</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-0">
                                            <img src="<?= base_url('assets/images/img/testimonial-2.png'); ?>" />
                                        </div>
                                        <div class="ms-15">
                                            <p class="card-position mb-0 lh-1">Sneha Kapoor</p>
                                            <div class="rates-review mb-0">
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="pt-20 px-0 testimonials-card-content">
                                    <div class="mb-25">
                                        <img src="<?= base_url('assets/images/quote.png'); ?>" />
                                    </div>
                                    <div class="card-comment mb-20">
                                        <p>“Clear communication helped me understand the process from the beginning.”
                                        </p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-0">
                                            <img src="<?= base_url('assets/images/img/testimonial-3.png'); ?>" />
                                        </div>
                                        <div class="ms-15">
                                            <p class="card-position mb-0 lh-1">Harshil Desai</p>
                                            <div class="rates-review mb-0">
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="pt-20 px-0 testimonials-card-content">
                                    <div class="mb-25">
                                        <img src="<?= base_url('assets/images/quote.png'); ?>" />
                                    </div>
                                    <div class="card-comment mb-20">
                                        <p>“The support team responded to my process-related questions promptly.”</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-0">
                                            <img src="<?= base_url('assets/images/img/testimonial-1.png'); ?>" />
                                        </div>
                                        <div class="ms-15">
                                            <p class="card-position mb-0 lh-1">Aditi Sharma</p>
                                            <div class="rates-review mb-0">
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div>
                                <div class="pt-20 px-0 testimonials-card-content">
                                    <div class="mb-25">
                                        <img src="<?= base_url('assets/images/quote.png'); ?>" />
                                    </div>
                                    <div class="card-comment mb-20">
                                        <p>“A helpful experience for understanding loan application requirements.”</p>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="mb-0">
                                            <img src="<?= base_url('assets/images/img/testimonial-2.png'); ?>" />
                                        </div>
                                        <div class="ms-15">
                                            <p class="card-position mb-0 lh-1">Vivek Agarwal</p>
                                            <div class="rates-review mb-0">
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                                <img src="<?= base_url('assets/images/star.svg'); ?>" />
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="section section-theme-1 section-faqs pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60" id="faq">
        <div class="container">
            <div class="row mb-0">
                <div class="col-xl-4 col-12">
                    <header class="section-header mb-10">
                        <span class="text-success text-uppercase text-outlined text-top mb-10 d-block section-title position-relative">FAQ</span>
                        <h4 class="text-black mb-10">Questions, <br><span class="highlight-text">answered</span></h4>
                        <p class="text-black">Can't find what you need? Send us a message and we'll reply quickly.</p>
                    </header>
                </div>
                <div class="col-xl-8 col-12">
                    <div class="accordion" id="faq-accordion-2">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed bg-transparent justify-content-between"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="false" aria-controls="collapseOne">

                                    <span class="title d-flex"><span class="me-20 text-success">01</span>How much loan can I get?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>You can apply for up to ₹10 lakhs. Your eligible amount depends on your income, obligations and tenure.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed bg-transparent justify-content-between"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">

                                    <span class="title d-flex"><span class="me-20 text-success">02</span>How long does approval take?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>Many personal loans are unsecured and may not require collateral. However,
                                        requirements are decided by the NBFC based on its policies and the applicant’s
                                        profile.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed bg-transparent justify-content-between"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">

                                    <span class="title d-flex"><span class="me-20 text-success">03</span>Will checking eligibility affect my credit score?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>
                                        NBFCs may assess income, credit history, existing financial obligations,
                                        documents and other internal criteria. FlexiCred can guide you on the
                                        application process, but the final decision is made by the NBFC.

                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed bg-transparent justify-content-between"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                    aria-expanded="false" aria-controls="collapseFour">

                                    <span class="title d-flex"><span class="me-20 text-success">04</span>Which documents do I need?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>
                                        Requirements may vary by NBFC, but commonly include identity proof, address
                                        proof, income-related documents and bank statements. A complete checklist is
                                        shared based on the application requirements.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed bg-transparent justify-content-between"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                    aria-expanded="false" aria-controls="collapseFive">

                                    <span class="title d-flex"><span class="me-20 text-success">05</span>Are there any hidden charges?</span>
                                    <span class="bullet me-0"></span>
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                                data-bs-parent="#faq-accordion-1">
                                <div class="accordion-body">
                                    <p>Tax treatment depends on how the loan amount is used and applicable tax laws.
                                        Please consult a qualified tax professional for advice specific to your
                                        situation.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="section section-contact section-theme-1 pt-60 pt-md-60 py-xl-80 py-xxl-80 pb-60 pb-md-60 contact-section bg-light-sky"
        id="contactus">
        <div class="container">
            <div class="row mb-30 align-items-end">
                <div class="col-xl-7 col-12">
                    <header class="section-header mb-10">
                        <span class="text-success text-uppercase text-outlined text-top mb-10 d-block section-title position-relative">Contact</span>
                        <h4 class="text-black mb-0">Drop us a <span class="highlight-text">message</span></h4>
                    </header>
                </div>
                <div class="col-xl-5 col-12 m-auto mb-0">
                    <p class="text-black">Talk to a certified loan expert for a free consultation.</p>
                </div>
            </div>
            <div class="contact-form">
                <div class="row justify-content-between">
                    <div class="col-12 col-md-6 col-xl-5 form-right-main">
                        <ul class="contact-support bg-black text-light h-100">
                            <div class="mb-20">
                                <h6 class="mb-5">Let's talk</h6>
                                <p class="text-light">Our team responds within 24 hours.</p>
                            </div>
                            <hr class="mb-20">
                            <li>
                                <div class="contact-box ps-0">
                                    <div class="text-start mb-10">
                                        <div class="icon bg-dark">
                                            <i class="fas fa-phone"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-light">Customer Support</h3>
                                        <p>
                                            <a href="tel:<?php echo COMPANY_MOBILE; ?>"><?php echo COMPANY_MOBILE; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <hr class="mb-20">
                            <li>
                                <div class="contact-box ps-0">
                                    <div class="text-start mb-10">
                                        <div class="icon bg-dark">
                                            <i class="fas fa-envelope"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-light">Email</h3>
                                        <p>
                                            <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <hr class="mb-20">
                            <li>
                                <div class="contact-box ps-0">
                                    <div class="text-start mb-10">
                                        <div class="icon bg-dark">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-light">Location</h3>
                                        <address><?php echo COMPANY_ADDRESS; ?></address>
                                        </address>
                                    </div>
                                </div>
                            </li>
                            <hr class="mb-20">
                            <li>
                                <div class="contact-box ps-0 mb-0">
                                    <div class="text-start mb-10">
                                        <div class="icon bg-dark">
                                            <i class="far fa-clock"></i>
                                        </div>
                                    </div>
                                    <div class="textbox ms-20">
                                        <h3 class="h4 text-light">Working Hours</h3>
                                        <p>
                                            Monday to Saturday: 10:00 AM - 5:00 PM
                                            Sunday: Closed
                                        </p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="col-12 col-sm-10 col-md-6 col-xl-7 m-auto form-right-main">
                        <div class="bg-white shadow  p-md-40 p-20 contact-form-right form-right">
                            <?php echo form_open('infopage/contactsubmission', array('id' => 'contactForm', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                            <p>Fill out the form below and you'll hear from us soon.</p>
                            <div class="row">
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-20">
                                    <label class="text-black fa-sm" for="fullname">Full Name *</label>
                                    <input class="form-control" type="text" name="fullname" placeholder="Your Name"
                                        required data-validation-regex-regex="^[a-zA-Z ]*$">
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-20">
                                    <label class="text-black fa-sm" for="email">Mobile no *</label>
                                    <input class="form-control" type="text" name="mobile" placeholder="Your Mobile"
                                        required minlength="10" maxlength="10" inputmode="numeric"
                                        data-validation-regex-regex="^[6789]\d{9}$"
                                        data-validation-regex-message="Enter valid mobile number">
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-20">
                                    <label class="text-black fa-sm" for="email">Email id *</label>
                                    <input class="form-control" type="email" name="email" placeholder="Your Email Id"
                                        required>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-6 col-12 mb-15 mb-md-20 mb-lg-20">
                                    <label class="text-black fa-sm" for="subject">Subject</label>
                                    <input class="form-control" type="text" name="subject" placeholder="Your Subject"
                                        required>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="form-group col-md-12 col-12 mb-15 mb-md-20 mb-lg-20">
                                    <label class="text-black fa-sm" for="message">Message *</label>
                                    <textarea class="form-control" name="message" cols="30" rows="10"
                                        placeholder="Your Message" required></textarea>
                                    <div class="help-block font-small-3"></div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-green btn-sm w-100"><span
                                            class="btn-text">Submit</span></button>
                                </div>
                            </div>
                            <?php echo form_close(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="pri-footer-top pt-40 pt-md-40 py-xl-50 pb-40 pb-md-60 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 mb-15 mb-lg-0">
                        <h4 class="text-black mb-0 text-md-start text-center">Ready to <span class="cta-section">grow quick?</span></h4>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="footer-buttons text-md-end text-center">
                            <a href="#" class="btn btn-green btn-sm"><span class="btn-text">Get started <i
                                        class="fas fa-arrow-right"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php if ($msg[0]->option_value == 1 && $msg[1]->option_value != '') { ?>
        <div class="modal fade" id="welcomemsg" tabindex="-1" aria-labelledby="loginmodal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
                <div class="modal-content" id="loginmodal">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php echo $msg[1]->option_value; ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</main>

<?php
$this->load->view('includes/footer');
?>

<script type="text/javascript">
    $(function() {
        $('#submitForm3').on('submit', function(e) {
            e.preventDefault();
            var pageid = $('#getapage').find(":selected").val();

            if (pageid == 1 || pageid == 2) {
                window.location = "onlineprocess/applynow";
            }
        });
    });
</script>

<script type="text/javascript">
    $(window).on('load', function() {
        $('#welcomemsg').modal('show');
    });
</script>