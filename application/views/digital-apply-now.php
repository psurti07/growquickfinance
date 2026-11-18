<?php
$this->load->view('includes/header-apply.php');
?>

<section class="visual-block visual-theme-5 bg-dark hero-section text-black py-60 py-md-60 py-xl-50">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-12 col-md-6 col-lg-7 col-xl-7 order-2">

                <div class="visual-textbox pt-0">
                    <h1 class="text-black fs-1" style="line-height: 1.5;">Instant loans up to <span class="title-text-wrap">
                            ₹10 Lakhs
                        </span>
                    </h1>
                    <p class="text-black">Pick your amount, add your mobile number and see your pre-approved offers in minutes. No paperwork, no branch visits.</p>
                    <ul class="list-unstyled help-list mb-0">

                        <li class="ps-0 d-flex mb-10">
                            <div class="features-image me-10">
                                <i class="fas fa-check text-success fa-xs"></i>
                            </div>
                            100% online, paperless process
                        </li>
                        <li class="ps-0 d-flex mb-10">
                            <div class="features-image me-10"> <i class="fas fa-check text-success fa-xs"></i>
                            </div>Offers from multiple NBFC partners
                        </li>
                        <li class="ps-0 d-flex mb-0">
                            <div class="features-image me-10"><i class="fas fa-check text-success fa-xs"></i>
                            </div>
                            Free to check, no impact on your score
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-12 col-md-6 col-lg-5 col-xl-5 order-md-2 order-1">
                <div class="account-box mb-40">
                    <?php if ($processstep == 'step1') { ?>
                        <div class="account-box-frame text-dark bg-white shadow">
                            <div class="section-header text-start mb-0">

                                <h5 class="text-black mb-5">Get your loan offer

                                </h5>
                                <p class="text-start"><small>
                                        Takes about 2 minutes. No impact on your credit score.</small>
                                </p>

                            </div>
                            <?php echo form_open('onlineprocess/sendotpCode', array('id' => 'submitForm1', 'class' => 'contac-form mb-0', 'novalidate' => 'novalidate')); ?>
                            <div class="row">
                                <div class="col-12 mb-15">
                                    <div class="form-group">
                                        <div class="range">
                                            <div class="range__value text-start pt-0 mt-10">
                                                <span class="fs-3"></span>
                                            </div>
                                            <div class="d-flex justify-content-between required-amount mt-10">
                                                <h6 class="mb-0">Enter Required Amount</h6>
                                                <h6 class="mb-0">₹10k – ₹10L</h6>
                                            </div>
                                            <div class="range__slider">
                                                <input type="range" name="loanamount" step="10000">
                                            </div>
                                            <div class="d-flex justify-content-between required-price mb-10">
                                                <h6 class="mb-0">₹10,000</h6>
                                                <h6 class="mb-0">₹10,00,000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group error">
                                        <label class="text-uppercase h6 mb-10 text-gray-alt">Mobile number</label>
                                        <div class="input-group mb-15">
                                            <span class="input-group-text text-dark fw-bold rounded-0 py-0 px-15 me-5"
                                                id="basic-addon1">+91</span>
                                            <input class="form-control" type="text" placeholder="Bank-registered number"
                                                id="mobile" name="mobile" required minlength="10" maxlength="10"
                                                inputmode="numeric" data-validation-regex-regex="^[6789]\d{9}$"
                                                data-validation-regex-message="Enter valid mobile number">
                                        </div>
                                        <div class="help-block"></div>

                                    </div>
                                </div>

                                <div class="text-danger mt-3 mb-3" id="mobilenoError1"></div>
                                <div class="col-12 mb-15">
                                    <button type="submit" id="formsubmit1" class="btn btn-green btn-sm"><span
                                            class="btn-text">Start
                                            Process <i class="fa-solid fa-arrow-right"></i></span></button>
                                </div>

                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group mb-10 ps-0">
                                    <div class="d-flex align-items-start "> <input type="checkbox" name="tandc" id="tandc"
                                            class="custom-control-input mb-0 mt-5" value="1" checked required>
                                        <label class="custom-control-label" for="tandc"><small
                                                class="ms-10 d-block h6 fw-normal">I agree to the <a
                                                    href="<?= base_url('terms-conditions') ?>" target="_blank"
                                                    style="text-decoration: none;" class="text-dark">Terms of
                                                    Use</a>
                                                and <a href="<?= base_url('privacy-policy') ?>" target="_blank"
                                                    style="text-decoration: none;" class="text-dark">Privacy
                                                    Policy</a></small></label>

                                    </div>
                                    <div class="help-block ms-0 ps-0 mb-2"></div>
                                </div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="form-group mb-0 ps-0">
                                    <div class="d-flex align-items-start ">
                                        <input type="checkbox" name="promotion" id="promotion"
                                            class="custom-control-input mb-0 mt-5" value="1" checked required>
                                        <label class="custom-control-label" for="promotion"><small
                                                class="ms-10 d-block h6 fw-normal">
                                                I authorise Growquick Finance and partner NBFCs to contact me.
                                            </small></label>
                                    </div>
                                    <div class="help-block ms-0 ps-0 mb-2"></div>
                                </div>
                            </div>
                            <hr class="my-20">
                            <ul class="ps-0 d-flex justify-content-between list-unstyled mb-0 flex-md-nowrap flex-wrap">
                                <li>
                                    <h6 class="text-black d-flex align-items-center fa-sm lh-lg mb-0"> <i class="fas fa-lock me-5 text-warning"></i>100% secure
                                    </h6>
                                </li>
                                <li>
                                    <h6 class="text-black d-flex align-items-center fa-sm lh-lg mb-0"> <i class="fas fa-bolt text-warning me-5"></i>
                                        48 hr approval</h6>
                                </li>
                                <li>
                                    <h6 class="text-black d-flex align-items-center fa-sm lh-lg mb-0"> <i class="fas fa-star me-5 text-warning"></i>
                                        4.8 rating</h6>
                                </li>
                            </ul>
                        </div>
                        <?php echo form_close(); ?>

                </div>
            <?php } else if ($processstep == 'step2') { ?>
                <div class="account-box-frame text-dark bg-white card shadow-sm border">
                    <div class="">
                        <h5 class="mb-10 text-start fw-bold">Enter Your Verification Code</h5>
                        <h6 class="fw-normal">We've sent a 4-digit OTP to
                            <strong><?php echo $userdetails['mobile']; ?></strong>
                        </h6>

                    </div>
                    <?php echo form_open('onlineprocess/checkotpCode', array('id' => 'submitForm2', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                    <div class="row">
                        <input type="hidden" name="otpmobile" id="otpmobile" value="<?php echo $userdetails['mobile']; ?>">
                        <input type="hidden" name="loanamount" id="loanamount"
                            value="<?php echo $userdetails['loanamount']; ?>">
                        <div class="col-12 mb-15 mb-md-20">
                            <div class="form-group error">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Enter OTP</label>
                                <div class="wpcf7-form-control-wrap" data-name="tel-922">
                                    <!-- <input type="text" name="otpcode" id="otpcode"
                                        class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required optnumber w-100"
                                        required inputmode="numeric" placeholder="Enter OTP Code" maxlength="4"
                                        data-validation-regex-regex="[0-9]+"
                                        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');"> -->
                                </div>
                                <div class="input-field text-start">
                                            <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                            <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                            <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                            <input type="number" maxlength="1" inputmode="numeric" pattern="[0-9]*"
                                                id="otpcode" name="otpcode[]" class="me-md-0 me-2 otp-input">
                                        </div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="row justify-content-between align-items-center mb-20">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="p-countdown" data-delay="30">
                                        <div class="p-countdown-count" id="counttime">
                                            <code>New OTP in <span id="timer">30</span> Sec</code>
                                        </div>
                                        <div id="resendBtn" class="d-none">
                                            <code>Didn’t receive OTP? <a href="javascript:resendotp()">Resend OTP</a></code>
                                        </div>
                                        <code id="resend-message"></code>
                                        <div class="custom-error" id="otpcodeError"></div>
                                    </div>
                                    <div class="custom-error" id="otpcodeError"></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="title-text d-flex justify-content-md-end justify-content-start">

                                    <h6 class="fw-light mb-0 ms-5"><i
                                            class="fa-solid fa-lock me-10 text-success"></i>Encrypted</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" id="formsubmit2" class="btn btn-green btn-sm"><span
                                    class="btn-text">Verify
                                    OTP <i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>


                    </div>
                    <?php echo form_close(); ?>
                </div>
            <?php } else if ($processstep == 'step3') { ?>
                <div class="account-box-frame text-dark card shadow bg-white checkeligible-section">
                   
                        <!-- <p class="mb-0" style="font-size:14px"> <strong>Loan Amount. :
                                        <?php echo formatePriceIndia($userdetails['loanamount']); ?></strong></p>
                                <p style="font-size:14px"> <strong> Mobile No. :
                                        <?php echo $userdetails['mobile']; ?></strong></p> -->
                   
                    <?php echo form_open('onlineprocess/registeredUser', array('id' => 'submitForm3', 'class' => 'contac-form', 'novalidate' => 'novalidate')); ?>
                    <div class="row gx-10 mb-0 justify-content-center">
                        <input type="hidden" id="loanamount" name="loanamount"
                            value="<?php echo $userdetails['loanamount']; ?>">
                        <input type="hidden" id="referralcode" name="referralcode"
                            value="<?php echo $userdetails['referralcode']; ?>">
                        <input type="hidden" id="usermobile" name="usermobile"
                            value="<?php echo $userdetails['mobile']; ?>">

                        <!-- <div class="size-details">
                                    <ul class="nav form-tabs mb-15 mb-md-20" id="mylist">
                                        <li data-value="1">
                                            <button class="nav-link active-size active" data-bs-toggle="tab"
                                                data-bs-target="#nav-tab01" type="button">Salaried</button>
                                        </li>
                                        <li data-value="2">
                                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-tab02"
                                                type="button">Self-Employed</button>
                                        </li>
                                    </ul>
                                    <input type="hidden" id="usertype" name="usertype" value="1">
                                </div>   -->

                        <label class="text-uppercase h6 mb-10 text-gray-alt">Employment type</label>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-12 mb-md-0 mb-10">
                            <fieldset class="picker1">
                                <label for="personalloan" class="w-100">
                                    <input type="radio" name="usertype" id="personalloan" value="1" class="radio" checked>
                                    <span class="plan-details p-15 h-100">
                                        <div class="d-flex mb-0 align-items-center flex-column">
                                          
                                            <div class="ms-0 employment-content">
                                                <h6 class="employment-title mb-0 text-black"><i class="fas fa-briefcase me-5"></i>Salaried</h6>
                                                <P class="mb-0">Monthly salary from an employer</P>

                                            </div>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-12 ">
                            <fieldset class="picker1">
                                <label for="businessloan" class="w-100">
                                    <input type="radio" name="usertype" id="businessloan" value="2" class="radio">
                                    <span class="plan-details p-15 h-100">
                                        <div class="d-flex mb-0 align-items-center flex-column">
                                         
                                            <div class="ms-0 employment-content">
                                                <h6 class="employment-title mb-0 text-black"><i class="far fa-flag me-5"></i>Self-Employed
                                                </h6>
                                                <P class="mb-0">Own business or profession</P>

                                            </div>
                                        </div>
                                    </span>
                                </label>
                            </fieldset>
                        </div>
                        <div class="col-12 mb-15 mb-md-20 mt-20">
                            <div class="form-group">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Full name</label>
                                <div class="input-group mb-3">
                                
                                    <input class="form-control" type="text" id="username" name="username"
                                        placeholder="Bank Registered Name" required
                                        data-validation-regex-regex="^[a-zA-Z ]*$">
                                </div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-12 mb-15 mb-md-20">
                            <div class="form-group">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Email address</label>
                                <div class="input-group mb-3">
                               
                                    <input class="form-control" type="email" id="useremail" name="useremail"
                                        placeholder="Email Id" required>
                                </div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" id="formsubmit3" class="btn btn-green btn-sm"><span
                                    class="btn-text">Process <i class="fa-solid fa-arrow-right"></i></span></button>
                        </div>
                    </div>
                    <?php echo form_close(); ?>
                </div>
            <?php } ?>
            </div>
        </div>

</section>



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


<section class="section section-theme-5 how-work-block-wrap pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-light-sky">
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

<section class="top_companies_block section-theme-7 pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60">
    <div class="container">

         <div class="row mb-30 align-items-end">
            <div class="col-xl-7 col-12">
                <header class="section-header mb-10">
                    <span class="text-success text-uppercase text-outlined text-top mb-10 d-block section-title position-relative">Eligibility</span>
                    <h4 class="text-black mb-0">Personal loan <span class="highlight-text">criteria</span></h4>
                </header>
            </div>
            <div class="col-xl-5 col-12 m-auto mb-0">
                <p>Check if you meet the basic requirements before you apply.</p>
            </div>
        </div>
        
        <div class="top_talent_holder mb-0">
            <div class="left_align">
                <div class="detail_box candidate flex-column">

                    <h5 class="text-black fw-bold py-15 mb-0">For salaried</h5>
               
                    <ul class="list-unstyled my-0">
                        <li class="d-flex align-items-center justify-content-between details-content py-10"> <span>Age</span><span class="text-black fw-bold">21 Years</span>
                        </li>
                   
                        <li class="d-flex align-items-center justify-content-between details-content py-10"><span>Minimum salary</span> <span class="text-black fw-bold">Rs. 15,000 / month</span></li>
                 
                        <li class="d-flex align-items-center justify-content-between py-10"> <span>Job duration</span><span class="text-black fw-bold">Min. 1 Year</span></li>
                    </ul>


                </div>
            </div>
            <div class="right_align">
                <div class="detail_box candidate flex-column">
                    <h5 class="text-black fw-bold py-15 mb-0">For self-employed</h5>
               
                     <ul class="list-unstyled my-0">
                        <li class="d-flex align-items-center justify-content-between details-content py-10"> <span>Minimum age</span><span class="text-black fw-bold">21 Years</span>
                        </li>
                      
                        <li class="d-flex align-items-center justify-content-between details-content py-10"><span>Minimum income</span> <span class="text-black fw-bold">Rs. 15,000 / month</span></li>
                  
                        <li class="d-flex align-items-center justify-content-between py-10"> <span>Business stability</span><span class="text-black fw-bold">1 Year</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="section section-theme-5 how-we-help-block pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60 bg-black">
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

   <section
        class="section section-theme-1 section-faqs pt-60 pt-md-60 py-xl-80 pb-60 pb-md-60">
        <div class="container">
            <div class="row mb-0">
                <div class="col-xl-4 col-12">
                    <header class="section-header mb-10">
                        <span class="text-success text-uppercase text-outlined text-top mb-10 d-block section-title position-relative">FAQ</span>
                        <h4 class="text-black mb-10">Questions, <span class="highlight-text">answered</span></h4>
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

<section class="section section-contact section-theme-1 bg-light-sky">
    <div class="container">
        <p class="mb-0"><small><strong>Disclaimer: </strong><?php echo COMPANY_NAME ?> is not a lender or financial
                institution. We do not provide loans or make credit decisions. All loan approvals, interest rates, fees, and
                disbursal are handled by third-party lenders/NBFCs. We do not guarantee loan approval, disbursal, or
                specific loan terms. The amount paid is only for the service charge. We are not lenders and do not guarantee
                any loan approval. Loan approval, disbursement/sanction is entirely dependent on NBFC criteria.</small></p>

        <p class="mb-0"><small><strong>Important Note: </strong>We ask our customers to make payments ONLY on our website <a
                    class="text-dark" href="<?php echo COMPANY_SITE; ?>">GrowquickFinance.com</a> and NOT through any other
                source, directly or indirectly.</small></p>

        <p class="mb-0"><small><strong>Pre-application NOTE: </strong>Users are advised to read our terms and conditions and
                policies before proceeding/applying/registration.</small>
        </p>
        <p class="mb-0"><small><strong>Disclosure:</strong> Loan tenure minimum 6 months & maximum 60 months; Maximum APR: 34%
                p.a.; processing fee: up to 2%. Representative example: ₹1,00,000 at 11.5% for 60 months with ₹2,000
                processing fee — EMI ₹2,301, total interest ₹38,059, total repayment ₹1,38,059, indicative APR 14.41%.</small></p>

        <p class="mb-0"><small><strong>Registered Office Address : </strong><?php echo COMPANY_ADDRESS; ?></small></p>

        <p class="mb-0"><small><strong>Mobile : </strong><?php echo COMPANY_MOBILE; ?> | <strong>Email :
                </strong><?php echo COMPANY_EMAIL; ?></small></p>

    </div>
</section>

<?php $this->load->view('includes/footer-apply'); ?>

<script src="<?php echo base_url('assets/js/loanscript.js'); ?>" type="text/javascript"></script>

<script type="text/javascript">
    $('#mylist li').click(function() {
        $('#usertype').val($(this).data('value'));
    });

    function resendotp() {
        loanamount = document.getElementById('loanamount').value;
        mobile = document.getElementById('otpmobile').value;

        $.ajax({
            url: '<?php echo base_url("onlineprocess/resendotpCode"); ?>',
            type: "POST",
            data: 'mobile=' + mobile + '&loanamount=' + loanamount,
            dataType: "JSON",
            cache: false,
            processData: false,
            success: function(response) {
                if (response['success'] == true) {
                    $('#resend-message2').html(response['message']);
                    toastr.success(response['message']);
                } else {
                    toastr.error(response['message']);
                }
            },
            error: function(jXHR, textStatus, errorThrown) {
                toastr.error(errorThrown, 'ERROR');
            }
        });
    }

    $(function() {
        $('#submitForm1').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: $(this).attr('action') || window.location.pathname,
                type: "POST",
                data: $(this).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#formsubmit1').html(
                        'Applying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                    );
                    $('#formsubmit1').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        if (response['redirect_url'] != "") {
                            window.location.href = response['redirect_url'];
                        } else {
                            window.location = "./applynow/s2/" + response['mobile'];
                        }
                    } else {
                        $('#mobilenoError1').html(response['message']);
                        toastr.error(response['message']);
                    }

                    $('#formsubmit1').html('Apply Now');
                    $('#formsubmit1').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#formsubmit1').html('Apply Now');
                    $('#formsubmit1').attr('disabled', false);
                }
            });
        });

        $('#submitForm2').on('submit', function(e) {
            e.preventDefault();
            $('#resend-message2').html('');
            $('#otpcodeError').html('');

            $.ajax({
                url: $(this).attr('action') || window.location.pathname,
                type: "POST",
                data: $(this).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#formsubmit2').html(
                        'Verifying... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                    );
                    $('#formsubmit2').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        window.location = "../../applynow/s3/" + response['mobile'];
                    } else {
                        $('#otpcodeError').html(response['message']);
                        toastr.error(response['message']);
                    }

                    $('#formsubmit2').html('Verify OTP');
                    $('#formsubmit2').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#formsubmit2').html('Verify OTP');
                    $('#formsubmit2').attr('disabled', false);
                }
            });
        });


        $('#submitForm3').on('submit', function(e) {
            e.preventDefault();
            $('#resend-message2').html('');
            $('#otpcodeError').html('');

            $.ajax({
                url: $(this).attr('action') || window.location.pathname,
                type: "POST",
                data: $(this).serialize(),
                dataType: "JSON",
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('#formsubmit3').html(
                        'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
                    );
                    $('#formsubmit3').attr('disabled', true);
                },
                success: function(response) {
                    if (response['success'] == true) {
                        window.location.href = response['redirect_url'];
                    } else {
                        $('#otpcodeError').html(response['message']);
                        toastr.error(response['message']);
                    }

                    $('#formsubmit3').html('Process');
                    $('#formsubmit3').attr('disabled', false);
                },
                error: function(jXHR, textStatus, errorThrown) {
                    toastr.error(errorThrown, 'ERROR');
                    $('#formsubmit3').html('Process');
                    $('#formsubmit3').attr('disabled', false);
                }
            });
        });
    });
    const color = $(".size-details li");

    color.on("click", function() {
        $(".size-details ul li").removeClass("active-size");
        $(this).addClass("active-size");
    });
</script>



<script>
    document.addEventListener("DOMContentLoaded", function() {

        let resendBtn = document.getElementById('resendBtn');
        let counttime = document.getElementById('counttime');
        let timerDisplay = document.getElementById('timer');
        let countdown = 30;

        let interval = setInterval(() => {
            countdown--;
            timerDisplay.textContent = countdown;

            if (countdown <= 0) {
                clearInterval(interval);
                resendBtn.classList.remove('d-none');
                counttime.classList.add('d-none');
                timerDisplay.textContent = '';
            }
        }, 1000);

        resendBtn.addEventListener('click', function() {
            resendBtn.classList.add('d-none');
            counttime.classList.remove('d-none');
            countdown = 30;
            timerDisplay.textContent = countdown;

            interval = setInterval(() => {
                countdown--;
                timerDisplay.textContent = countdown;

                if (countdown <= 0) {
                    clearInterval(interval);
                    resendBtn.classList.remove('d-none');
                    counttime.classList.add('d-none');
                    timerDisplay.textContent = '';
                }
            }, 1000);
        });
    });

    $('.otp-input').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
        if (this.value.length === 1) {
            $(this).next('.otp-input').focus();
        }
    });
    $('.otp-input').on('keydown', function(e) {
        if (e.key === "Backspace" && this.value === '') {
            $(this).prev('.otp-input').focus();
        }
    });
</script>