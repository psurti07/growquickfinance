<?php
$this->load->view('includes/header-offer.php');
?>

<main class="main">
    <section class="section section-theme-1 packages-block pt-40 pb-40 bg-light-sky border-top">
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
                    <div class="loan-step active">
                        <div class="step-bar"></div>
                        <div class="step-label">
                            <h6>04 · Financial Details</h6>
                        </div>
                    </div>
                    <div class="loan-step">
                        <div class="step-bar"></div>
                        <div class="step-label">

                            <h6></h6>
                            <h6 class="d-md-block d-none">05 · EMI Options</h6>
                        </div>
                    </div>
                    <div class="loan-step">
                        <div class="step-bar"></div>
                        <div class="step-label">
                            <h6 class="d-md-block d-none">06 · Your Offer</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-4 order-lg-1 order-2">
                    <div class="p-25 mt-md-0 mt-5">
                        <div class="subhead">
                            <div class="mb-20"> <img src="<?php echo base_url('assets/images/img/number-04.png'); ?>"
                                    alt="image" class="img-fluid">
                            </div>
                            <h5 class="mb-10 text-black">Your financial details </h5>
                            <p class="text-black">We use these to estimate your eligibility. A soft check never affects your score.</p>

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
                <div class="col-12 col-md-6 col-lg-8 mb-15 mb-md-30 order-lg-2 order-1">
                    <div class="block-holder form-condidates bg-white shadow rounded-1 card-right">

                        <?php echo form_open('onlineprocess/userApply', array('id' => 'submitForm1', 'class' => '', 'novalidate' => 'novalidate')); ?>
                        <div class="row">
                            <input type="hidden" name="applyid" value="<?php echo $userdetails['applyid']; ?>"
                                class="form-control" required>
                            <input type="hidden" name="userid" value="<?php echo $userdetails['userid']; ?>"
                                class="form-control" required>
                            <input type="hidden" name="cardtype" value="<?php echo $userdetails['cardtype']; ?>"
                                class="form-control" required>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">CIBIL Score</label>
                                <select class="form-select" id="cibilscore" name="cibilscore" required>
                                    <option value="">CIBIL Score *</option>
                                    <option value="Below 650">Below 650</option>
                                    <option value="650 - 700">650 - 700</option>
                                    <option value="700 - 750">700 - 750</option>
                                    <option value="750 - 800">750 - 800</option>
                                    <option value="800 - 850">800 - 850</option>
                                    <option value="850 - 900">850 - 900</option>
                                </select>
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Monthly Income (₹)</label>
                                <input class="form-control" type="text" id="monincome" name="monincome"
                                    placeholder="Monthly Income *" required inputmode="numeric">
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Current Monthly EMI (₹)</label>
                                <input class="form-control" type="text" id="monemi" name="monemi"
                                    placeholder="Current Monthly EMI *" required inputmode="numeric">
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Loan Purpose</label>
                                <select class="form-select" id="loanpurpose" name="loanpurpose" required>
                                    <option value="">Select Loan Purpose *</option>
                                    <?php if ($userdetails['loantype'] == 12) { ?>
                                        <option value="Business Expansion">Business Expansion</option>
                                        <option value="Maintain Cash Flow">Maintain Cash Flow</option>
                                        <option value="Supplier Payments">Supplier Payments</option>
                                        <option value="Setup Manufacturing Unit">Setup Manufacturing Unit</option>
                                        <option value="Hiring Budget">Hiring Budget</option>
                                        <option value="Other">Other</option>
                                    <?php } else { ?>
                                        <option value="Personal Use">Personal Use</option>
                                        <option value="Property Renovation">Property Renovation</option>
                                        <option value="Marriage Purpose">Marriage Purpose</option>
                                        <option value="Education Purpose">Education Purpose</option>
                                        <option value="Medical Emergency">Medical Emergency</option>
                                        <option value="Other">Other</option>
                                    <?php } ?>
                                </select>
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">Pincode</label>
                                <input type="text" name="pincode" id="pincode" maxlength="6" minlength="6"
                                    inputmode="numeric" class="form-control mb-2" placeholder="Pincode*" required>
                                <div class="help-block font-small-3"></div>
                                <span class="pincode error text-danger text-start"></span>
                            </div>

                            <div class="form-group col-12 col-lg-4 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">City</label>
                                <input type="text" name="city" id="city" class="form-control mb-2" placeholder="City*"
                                    required>
                                <div class="help-block font-small-3"></div>
                            </div>

                            <div class="form-group col-12 col-lg-12 mb-15">
                                <label class="text-uppercase h6 mb-10 text-gray-alt">State</label>
                                <input type="text" name="state" id="state" class="form-control mb-2"
                                    placeholder="State*" required>
                                <div class="help-block font-small-3"></div>
                            </div>
                            <div class="col-lg-12 mb-15">
                                <div class="otp-velidation-text border px-25 py-15 bg-light-gray">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                                <div class="d-flex align-items-center mb-lg-0 mb-5">
                                                    <i class="fa-solid fa-shield text-success"></i>
                                                    <div>
                                                        <p class="mb-0 fw-light ms-10 h6">Soft check only – won't impact your credit score. </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn-green btn-sm w-100"
                                    id="formsubmit1"><span class="btn-text">Check Your Eligibility <i
                                            class="fa-solid fa-arrow-right"></i></span></button>
                            </div>
                        </div>
                        <?php echo form_close(); ?>
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
        $('#submitForm1').on('submit', function(e) {
            $('#formsubmit1').attr('disabled', true);
            $('#formsubmit1').html(
                'Processing... <span class="spinner-border spinner-border-sm ms-1" role="status" aria-hidden="true"></span>'
            );
        });
    });
</script>

<script>
    $('#pincode').on('input', function() {

        var pincode = $(this).val();

        if (pincode.length === 6) {

            $.ajax({
                url: "<?= base_url('onlineprocess/geoLocation') ?>",
                type: "POST",
                data: {
                    pincode: pincode
                },
                dataType: "json",

                success: function(response) {

                    if (response.status === 'success') {
                        $('#city').val(response.city);
                        $('#state').val(response.state);
                        $('.pincode').text('');
                    } else {
                        $('#city').val('');
                        $('#state').val('');
                        $('.pincode').text('Enter valid pincode.');
                    }
                },

                error: function() {
                    $('.pincode').text('Enter valid pincode.');
                }
            });

        } else {
            $('#city').val('');
            $('#state').val('');
        }
    });
</script>

<?php
$this->load->view('includes/footer-apply');
?>