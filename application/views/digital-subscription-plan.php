<?php
$this->load->view('includes/header-offer.php');
//$today = date("Y-m-d", strtotime($userdetails['rec_date']));
//$last30 = date('Y-m-d', strtotime('-30 days'));
//if ($today <= $last30) {
//$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']) + 100000;
//} else {
$eligibilityamt = calEligiblity($userdetails['income'], $userdetails['currentemi'], $userdetails['apr'], $userdetails['loanamount']);
//}
$eligibilityamtindia = formatePriceIndia($eligibilityamt);
?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-40 pb-40 bg-light-sky section-theme-12 hero-section border-top">
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
                    <div class="loan-step active">
                        <div class="step-bar"></div>
                        <div class="step-label">
                            <h6>06 · Your Offer</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 col-lg-4 order-lg-1 order-2">
                    <div class="p-25">
                        <div class="subhead">
                            <div class="mb-20"> <img src="<?php echo base_url('assets/images/img/number-06.png'); ?>"
                                    alt="image" class="img-fluid">
                            </div>
                            <h5 class="mb-10 text-black">Great news, XYZ! </h5>
                            <p class="text-black">Your <strong class="text-success">Rs.
                                    <?php echo $eligibilityamtindia; ?> </strong>pre-approved loan is waiting. Unlock your offer to proceed.</p>

                        </div>

                        <div class="user-details-table mb-0 process-boxes">
                            <div class="d-flex mb-10 border-bottom pb-10 pt-10 border-end-0 px-0">

                                <div class="ms-0 d-flex justify-content-between w-100">
                                    <small class="d-block s-12">Name</small>
                                    <h6 class="text-black fw-bold"><?php echo $userdetails['fullname']; ?></h6>
                                </div>
                            </div>
                            <div class="d-flex mb-10 border-bottom pb-10 border-end-0 px-0">

                                <div class="ms-0 d-flex justify-content-between w-100">
                                    <small class="d-block s-12">Mobile :</small>
                                    <h6 class="text-black fw-bold"><?php echo $userdetails['mobile']; ?></h6>
                                </div>
                            </div>
                            <div class="d-flex mb-10 border-bottom pb-10 border-end-0 px-0">

                                <div class="ms-0 d-flex justify-content-between w-100">
                                    <small class="d-block s-12">Loan Amount :</small>
                                    <h6 class="text-black fw-bold"><?php echo formatePriceIndia($userdetails['loanamount']); ?></h6>
                                </div>
                            </div>
                            <div class="d-flex mb-10 border-bottom pb-10 border-end-0 px-0">

                                <div class="ms-0 d-flex justify-content-between w-100">
                                    <small class="d-block s-12">Email</small>
                                    <h6 class="text-black fw-bold"><?php echo $userdetails['email']; ?></h6>
                                </div>
                            </div>
                            <div class="d-flex mb-10 border-bottom pb-10 border-end-0 px-0">

                                <div class="ms-0 d-flex justify-content-between w-100">
                                    <small class="d-block s-12">Loan Type</small>
                                    <h6 class="text-black fw-bold">Personal Loan</h6>
                                </div>
                            </div>

                        </div>
                        <div class="otp-velidation-text-wrap py-10 px-0">

                            <div class="d-flex align-items-start">

                                <div>
                                    <i class="fa-solid fa-shield text-success"></i>
                                </div>
                                <p class="mb-0 ms-10 mt-0 h6 fw-normal">256-bit encrypted. Your data is never shared without your consent.</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-8 mb-0 mb-md-30 order-lg-2 order-1">
                    <div class="account-box mb-0">
                        <div
                            class="block-holder form-condidates bg-white account-box-frame shadow rounded-1 p-35 overflow-hidden card-right">
                            <span class="text-white bg-black rounded-pill d-block py-10 mb-20">
                                <h6 class="text-success px-15 mb-0 lh-1">PRE-APPROVED LOAN · Rs.
                                    <?php echo $eligibilityamtindia; ?> </h6>
                            </span>
                            <div class="row">
                                <div class="col-12 col-md-6 col-lg-6 subscription-plan-card">
                                    <div class="subscription-card">
                                        <?php echo form_open('onlineprocess/checkoutDigital', array('id' => 'submitForm3', 'class' => '', 'novalidate' => 'novalidate')); ?>
                                        <input type="hidden" name="loantype" id="loantype"
                                            value="<?php echo $userdetails['loantype']; ?>" class="form-control"
                                            required>
                                        <input type="hidden" name="applyid"
                                            value="<?php echo $userdetails['applyid']; ?>" class="form-control"
                                            required>
                                        <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                            class="form-control" required>
                                        <input type="hidden" name="fullname" id="fullname"
                                            value="<?php echo $userdetails['fullname']; ?>" class="form-control"
                                            required>
                                        <input type="hidden" name="mobile" id="mobile"
                                            value="<?php echo $userdetails['mobile']; ?>" class="form-control" required>
                                        <input type="hidden" name="email" id="email"
                                            value="<?php echo $userdetails['email']; ?>" class="form-control" required>
                                        <input type="hidden" name="cardtype"
                                            value="<?php echo $userdetails['cardtype']; ?>" class="form-control"
                                            required>


                                        <div class="box-inner">

                                            <div class="d-flex align-items-start justify-content-between mb-20">
                                                <div class="plan-details border-0 p-0">
                                                    <span class="fw-bold text-uppercase mb-10 text-success">Premium
                                                        Subscription</span>
                                                    <h6 class="mb-0">Limited-time offer</h6>
                                                </div>
                                                <div>
                                                    <?php if ($productdata['inOffer'] == 1) { ?>
                                                        <p
                                                            class="mb-0 bg-success text-white px-10 py-5 h6 rounded-pill pb-0">
                                                            <?php echo calPercentage($productdata['amount'], $productdata['offeramount']); ?>
                                                            OFF</p>
                                                    <?php } ?>

                                                </div>
                                            </div>

                                            <?php
                                            if ($productdata['inOffer'] == 1) {
                                                echo '<div class="d-flex align-items-end justify-content-start"><h5><del class="text-danger pe-10">&#8377; ' . formatePrice($productdata['amount']) . '</del></h5>';
                                                echo '<h3><span class="text-black"><strong> &#8377; ' . formatePrice($productdata['offeramount']) . '/-</strong> </span></h3> </div>';
                                                $subtotal = $productdata['offeramount'];
                                            } else {
                                                echo '<h5 class="text-success">&#8377; ' . formatePrice($productdata['amount']) . '</h5>';
                                                $subtotal = $productdata['amount'];
                                            }
                                            ?>
                                            <p class="text-start">One-time fee, GST extra</p>
                                            <ul class="list-unstyled features-list pt-20">

                                                <li class="d-flex justify-content-between mb-10 border-bottom pb-10">
                                                    <span>Amount </span><span
                                                        class="fw-bold"><?php echo formatePriceIndia($subtotal); ?></span>
                                                </li>
                                                <li class="d-flex justify-content-between mb-10 border-bottom pb-10">
                                                    <span>GST (18%) :</span> <span
                                                        class="fw-bold"><?php $gst = $subtotal * 0.18;
                                                                        echo formatePriceIndia($gst); ?></span>
                                                </li>
                                                <li class="d-flex justify-content-between mb-10"><span
                                                        class="fw-bold">Grand
                                                        Total : </span><span
                                                        class="fw-bold"><?php $grandtotal = $subtotal + $gst;
                                                                        echo formatePriceIndia($grandtotal); ?></span>
                                                </li>
                                            </ul>

                                        </div>

                                        <?php echo form_close(); ?>
                                    </div>

                                </div>
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="box-inner">
                                        <h6 class="mb-20 text-success text-uppercase"> Subscription Benefits</h6>
                                        <ul class="list-unstyled features-list mb-0">
                                            <li class="ps-0 d-flex mb-10">
                                                <div class="features-image me-10">
                                                    <i class="fas fa-check text-success fa-xs"></i>
                                                </div><span class="text-black">Loan process with multiple NBFCs</span>

                                            </li>
                                            <li class="ps-0 d-flex mb-10">
                                                <div class="features-image me-10">
                                                    <i class="fas fa-check text-success fa-xs"></i>
                                                </div><span class="text-black">100% online financial consultation</span>
                                            </li>
                                            <li class="ps-0 d-flex mb-10">
                                                <div class="features-image me-10">
                                                    <i class="fas fa-check text-success fa-xs"></i>
                                                </div><span class="text-black">Personalised tracking portal</span>
                                            </li>
                                            <li class="ps-0 d-flex mb-10">
                                                <div class="features-image me-10">
                                                    <i class="fas fa-check text-success fa-xs"></i>
                                                </div><span class="text-black">Dedicated loan expert assigned</span>
                                            </li>
                                            <li class="ps-0 d-flex mb-10">
                                                <div class="features-image me-10">
                                                    <i class="fas fa-check text-success fa-xs"></i>
                                                </div><span class="text-black">Subscription validity: 9 months</span>
                                            </li>

                                        </ul>
                                    </div>


                                </div>


                            </div>
                            <div class="row">
                                <div class="section-theme-6 py-30 border-top">
                                    <div class="counters-block pb-0">
                                        <div class="row justify-content--between g-15">
                                            <div class="col-md-4 col-sm-4 col-6">
                                                <div class="counter-box d-block text-start mb-0">

                                                    <div class="counter-stats">
                                                        <strong class="numbers h4 mb-5 text-black">
                                                            <span data-purecounter-duration="1"
                                                                data-purecounter-start="0" data-purecounter-end="5000"
                                                                data-purecounter-once="true"
                                                                class="purecounter">5000</span>+
                                                        </strong>
                                                        <span class="subtext">Borrowers funded</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-6">
                                                <div class="counter-box d-block text-start mb-0">

                                                    <div class="counter-stats">
                                                        <strong class="numbers h4 mb-5 text-black">
                                                            <span data-purecounter-duration="1"
                                                                data-purecounter-start="0" data-purecounter-end="20"
                                                                data-purecounter-once="true"
                                                                class="purecounter">20</span>+
                                                        </strong>
                                                        <span class="subtext">NBFC partners</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-sm-4 col-6">
                                                <div class="counter-box d-block text-start mb-0">

                                                    <div class="counter-stats">
                                                        <strong class="numbers h4 mb-5 text-black">
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
                            <div class="row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-green btn-sm w-100" id="formsubmit3"><span
                                            class="btn-text">Buy Now <i
                                                class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
</main>

<script type="text/javascript">
    $(document).ready(function() {
        var windowWidth = $(window).width();
        if (windowWidth <= 1024) { //for iPad & smaller devices
            $('#userCollapse').removeClass('show');
        }
    });

    $(function() {
        $('#submitForm3').on('submit', function(e) {
            $('#form-submit3').html(
                'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
            );
        });
    });
</script>

<?php
$this->load->view('includes/footer-apply');
?>