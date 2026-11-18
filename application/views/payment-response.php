<?php $this->load->view('includes/header-apply'); ?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-100 cust-height d-flex align-items-center bg-light-sky">
        <div class="container">
            <div class="loan-step-desktop mb-25">
                <div class="loan-steps">
                    <div class="loan-step completed">
                        <div class="step-bar"></div>
                        <div class="step-label">
                            <h6 class="d-md-block d-none">01 · Loan Amount</h6>
                        </div>
                    </div>
                    <div class="loan-step completed">
                        <div class="step-bar"></div>
                        <div class="step-label">

                            <h6 class="d-md-block d-none">02 · Verify Mobile</h6>
                        </div>
                    </div>
                    <div class="loan-step completed">
                        <div class="step-bar"></div>
                        <div class="step-label">

                            <h6 class="d-md-block d-none">03 · Personal Details</h6>
                        </div>
                    </div>
                    <div class="loan-step completed">
                        <div class="step-bar"></div>
                        <div class="step-label">
                            <h6 class="d-md-block d-none">04 · Financial Details</h6>
                        </div>
                    </div>
                    <div class="loan-step completed">
                        <div class="step-bar"></div>
                        <div class="step-label">

                            <h6></h6>
                            <h6 class="d-md-block d-none">05 · EMI Options</h6>
                        </div>
                    </div>
                    <div class="loan-step completed">
                        <div class="step-bar"></div>
                        <div class="step-label">
                            <h6 class="d-md-block d-none">06 · Your Offer</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-12 col-12 m-auto">
                    <div class="block-holder form-condidates bg-white shadow card-right rounded-1">
                        <div class="subhead text-center mb-0">
                            <?php if ($responsedata == "true") { ?>
                                <div class="text-center mb-15">
                                    <i class="fa-regular fa-circle-check display-1 text-success"></i>

                                </div>
                                <h2 class="text-dark">Congratulations! <span class="text-success">kirtan!</span> </h2>
                                <p>Your payment was successful. Our loan expert will call you within 24–48 hours to guide you through verification and documents.
                                </p>
                                <hr>
                                <div class="row">
                                    <div class="section-theme-6 py-30">
                                        <div class="counters-block pb-0">
                                            <div class="row justify-content--between g-15">
                                                <div class="col-md-4 col-sm-4 col-6">
                                                    <div class="counter-box d-block text-center mb-0">

                                                        <div class="counter-stats">
                                                            <strong class="numbers h5 mb-5 text-black">
                                                                <span data-purecounter-duration="1"
                                                                    data-purecounter-start="0" data-purecounter-end="5000"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">₹5</span>L
                                                            </strong>
                                                            <span class="subtext">Loan amount</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-6">
                                                    <div class="counter-box d-block text-center mb-0">

                                                        <div class="counter-stats">
                                                            <strong class="numbers h5 mb-5 text-black">
                                                                <span data-purecounter-duration="1"
                                                                    data-purecounter-start="0" data-purecounter-end="20"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">36</span>mo
                                                            </strong>
                                                            <span class="subtext">Selected tenure</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 col-sm-4 col-6">
                                                    <div class="counter-box d-block text-center mb-0">

                                                        <div class="counter-stats">
                                                            <strong class="numbers h5 mb-5 text-black">
                                                                <span data-purecounter-duration="1"
                                                                    data-purecounter-start="0" data-purecounter-end="48"
                                                                    data-purecounter-once="true"
                                                                    class="purecounter">48</span>hrs
                                                            </strong>
                                                            <span class="subtext">Processing time</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="mt-md-20">
                                    <a href="<?php echo site_url(); ?>" class="btn btn-green btn-sm mb-md-0 mb-5">Goto Home
                                        Page</a>
                                    <a href="<?php echo site_url(); ?>customer" class="btn btn-white btn-sm">Customer
                                        Login</a>

                                </div>
                                <div class="mt-20">

                                    <a href="<?php echo site_url('support/request'); ?>" class="text-dark">Start a new
                                        application<i class="fa-solid fa-arrow-right ms-5"></i></a>
                                </div>
                            <?php } else if ($responsedata == "false") { ?>
                                <div class="text-center mb-15">
                                    <i class="fa-regular fa-circle-xmark text-danger display-1"></i>

                                </div>
                                <h2 class="text-black">Payment <span>Unsuccessful</span></h2>
                                <p>
                                    Don't worry – if any amount was deducted, it will be refunded to your account within 5–7 working days.
                                </p>



                                <div class="row">
                                    <div class="col-lg-10 col-12 m-auto">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div
                                                    class="card-blog-wrap p-10 mb-md-0 mb-10 bg-light-sky card shadow-none">

                                                    <h6 class="mb-0 text-danger">Insufficient balance</h6>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div
                                                    class="card-blog-wrap p-10 mb-md-0 mb-10 bg-light-sky card shadow-none">

                                                    <h6 class="mb-0 text-danger">Network issue</h6>

                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-4 col-sm-4 col-12">
                                                <div
                                                    class="card-blog-wrap p-10 mb-md-0 mb-10 bg-light-sky card shadow-none">

                                                    <h6 class="mb-0 text-danger">Bank declined</h6>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="mt-20">
                                    <a href="<?php echo site_url('cardpay'); ?>" class="btn btn-green btn-sm mb-md-0 mb-5">Try Another
                                        Payment Method</a>
                                    <a href="<?php echo site_url(); ?>customer" class="btn btn-outline border btn-lg">having an issues ?</a>


                                </div>
                                <div class="mt-20">
                                    <p
                                        class="text-black border-dark py-2 rounded-pill border px-15 b-0 d-inline-block">
                                        Don't worry! No
                                        amount has been deducted from your account.
                                    </p>
                                </div>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php $this->load->view('includes/footer-apply');   ?>