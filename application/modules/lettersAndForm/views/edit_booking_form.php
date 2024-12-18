<!-- Page content -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.min.js"></script>



 

<style>

/* .btn {
    margin: 1px 0;
    background-color: #b9adad;
} */

.modal_popup{
    display: none;
}

.form-group {
    margin-bottom: 10px;
}


.modal-body1 {
    padding: 0px 15px;
}
.sendmail{
    float: right;
    margin: -41px 0;
}

.mailmodel{
    margin-left:-15px;
    margin-right:-15px;
}

@media only screen and (min-width: 668px) and (max-width: 1600px) {
        .sendmail{
            margin-top: -17px;
                 }  
    }

    @media only screen and (max-width: 600px) {
        .sendmail{
            margin-top: -32px;
                 }  
       
        }


        .card {
    background-color: #fff;
    border-radius: 10px;
    border: none;
    position: relative;
    /* margin-bottom: 30px; */
    box-shadow: 0 0.46875rem 2.1875rem rgba(90,97,105,0.1), 0 0.9375rem 1.40625rem rgba(90,97,105,0.1), 0 0.25rem 0.53125rem rgba(90,97,105,0.12), 0 0.125rem 0.1875rem rgba(90,97,105,0.1);
}
.l-bg-cherry {
    background: linear-gradient(to right, #337a, #337a) !important;
    color: #fff;
}

.l-bg-blue-dark {
    background: linear-gradient(to right, #337a, #337a) !important;
    color: #fff;
}

.l-bg-green-dark {
    background: linear-gradient(to right, #337a, #337a) !important;
    color: #fff;
}

.l-bg-orange-dark {
    background: linear-gradient(to right, #337a, #337a) !important;
    color: #fff;
}

.card .card-statistic-3 .card-icon-large .fas, .card .card-statistic-3 .card-icon-large .far, .card .card-statistic-3 .card-icon-large .fab, .card .card-statistic-3 .card-icon-large .fal {
    font-size: 110px;
}

.card .card-statistic-3 .card-icon {
    /* text-align: center;
    line-height: 50px;
    margin-left: 15px;
    color: #000;
    position: absolute;
    right: -5px;
    top: 20px;
    opacity: 0.1; */
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}

.l-bg-green {
    background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
    color: #fff;
}

.l-bg-orange {
    background: linear-gradient(to right, #f9900e, #ffba56) !important;
    color: #fff;
}

.l-bg-cyan {
    background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
    color: #fff;
}
</style>

<style>
    .save-btn{
    font-weight:700;
    font-size: 1.5rem;
    padding: 0.6rem 2.25rem;
    background:#337ab7;
}
.save-btn:hover{
    /* background-color:#00008B !important; */
    background:#00008B !important;
}

.lettersform:hover {
  background-color: #def1f3;
}

.nav-link{
    color: black!important;
    font-weight: 900!important;
}
.nav-pills .nav-link.active{
    background-color:white!important;
}
</style>
<div id="page-content">
<div class="block_list full">
    <div class="row text-center">

        <div class="col-sm-6 col-md-2 mb-4">
            <a href="<?php echo base_url() . 'index.php/patient/summary?id=' . encoding($patient_id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 10px; ">
                <div class="widget-extra themed-background-dark"   style="background:#337ab7;">
                    <h4 style="font-size:14px; font-weight:600; color:white;">Summery</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen fw-bold"><?php echo $active;?></span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-2 mb-4">
            <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($patient_id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                    <h4 style="font-size:16px; font-weight:600; color:white;">Consultation</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-2 mb-4">
        <a href="<?php echo base_url().'index.php/Medications?id=' . encoding($patient_id);?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                    <h4 style="font-size:16px; font-weight:600; color:white;">Medications</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
            </a>
        </div>

        <div class="col-sm-6 col-lg-2 mb-4">
        <a href="<?php echo base_url(). 'index.php/lettersAndForm?id=' . encoding($patient_id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                    <h4 style="font-size:16px; font-weight:600; color:white;">Letters and forms</h4>
                </div>
                <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
            </a>
        </div>
        <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/patientPrescription?id=' . encoding($patient_id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Prescriptions</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'labs?id=' . encoding($patient_id);?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Labs</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/patient/consultationInvoice?id=' . encoding($patient_id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Invoices</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <!-- <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/accountStatement?id=' . encoding($patient_id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                    <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Account statements</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div> -->
                
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url() . 'index.php/patient/communication?id=' . encoding($patient_id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Communication</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url() . 'index.php/patientDocuments?id=' . encoding($patient_id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Documents</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url() . 'index.php/patient/patientLogs?id=' . encoding($patient_id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Logs</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="=" crossorigin="anonymous" />
      
    </div>

            <!-- </div> -->

    <!-- Datatables Content -->
    <div class="block full">

<!-- <div class="block-title "> -->

    <!-- <ul class="nav nav-pills nav-fill nav-tabss" id="pills-tab" role="tablist" style="width: fit-content;">
       
        <a href="<?php echo base_url(). 'index.php/lettersAndForm?id=' . encoding($patient_id); ?>"  style="color: black;padding: 9px;font-weight: 900;background-color: ghostwhite;"> Back to Letters
        </a>
        
    </ul> -->

<!-- </div> -->
<div class="block-title ">

<a href="<?php echo base_url(). 'index.php/lettersAndForm?id=' . encoding($patient_id); ?>"  style="color: black;padding: 9px;font-weight: 900;background-color: ghostwhite;"> Back to Form
</a>

<!-- <button onclick="generatePDF()" class="btn btn-outline-success" style="margin-left: 65%;"> <i class="fa fa-edit"></i> Edit</button> -->
<!-- <button onclick="generatePDF()" class="btn btn-success save-preview" style="margin-left: 82%;"> <i class="fa fa-download"></i> Download</button> -->

<a href="<?php echo base_url().'index.php/lettersAndForm/viewBookingForm?id=' . encoding($patient_id) . '&form_id=' . encoding($form_id); ?>" class="link"><button for="" type="button" class="btn btn-success save-preview"><b> Save and preview</b></button></a>
</div>


<div class="" id="booking-form">
    
    <?php if ($this->ion_auth->is_facilityManager()) { ?>
        <div class="row">
        <div class="col-sm-8 col-md-8">
        <input type="hidden" name="patient_id" id="patient_id" value="<?php echo $patient_id;?>">
        <h3><strong> Booking Form</strong></h3>
            <!-- <a href="javascript:void(0)"  onclick="open_modal('<?php echo $model; ?>')" class="btn btn-sm btn-secondary save-btn nav-tab-appointment tab-pane-second active" id="letters_id" style="background-color:#337ab7;">
                <?php //echo "New letter"; ?> 
            </a> -->


            <!-- <button type="button" data-toggle="modal" data-target="#sidebar-right" class="btn btn-primary navbar-btn pull-left btn btn-sm btn-secondary save-btn tab-pane-second" id="forms_id" style="display:none; background-color:#337ab7;">New forms</button> -->
    </div>
            <!-- <div class="col-sm-4 col-md-4"> -->
            <!-- <button style="background-color: white;border-radius: 6px;padding-left: 22px;padding-right: 22px;">All</button>
            <button style="background-color: white;border-radius: 6px;padding-left: 12px;padding-right: 12px;">Created Date</button>
            <button style="background-color: white;border-radius: 6px;padding-left: 12px;padding-right: 12px;">
            <span>
            <i class="fa fa-light fa-border-all"></i></span>
            </button>
            </div>
            </div> -->
    <?php } ?>
</div>
<br><br>



<div class="containers mt-5">
        
<form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url($formUrlData) ?>" enctype="multipart/form-data">
        <!-- <form class="form-horizontal" role="form" id="" method="post" action="<?php echo base_url();?>LettersAndForm/addBookingForm"> -->

        <div>
            <div class="row">

            <input type="hidden" name="patient_id" id="patient_id" value="<?php echo $patient_id;?>">
            <input type="hidden" name="form_id" id="form_id" value="<?php echo $form_id;?>">
               
                <div class="col-md-4 mb-3">
                    <label for="name" class="form-label">1. Appointment Type</label>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="appointment_type" name="appointment_type" value="Medical admission" <?php if (in_array('Medical admission', (array)$result->appointment_type)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="appointment_type">Medical admission</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="appointment_type" value="Surgical admission" name="appointment_type" <?php if (in_array('Surgical admission', (array)$result->appointment_type)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="appointment_type" >Surgical admission</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="appointment_type" value="Re-admission"  name="appointment_type" <?php if (in_array('Re-admission', (array)$result->appointment_type)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="pmSnack">Re-admission</label>
                        </div>

                    
                </div>
               
                <div class="col-md-4 mb-3">
                    <label for="completed" class="form-label">2. Completed by</label>
                    <input type="text" class="form-control" id="completed_by" name="completed_by" placeholder="Enter your Completed by" value="<?php echo $result->completed_by;?>" required>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="date" class="form-label">3. Completed date</label>
                    <input type="date" class="form-control" id="completed_date" name="completed_date" placeholder="Enter your Completed date" value="<?php echo $result->completed_date;?>" required>
                </div>
            </div>



            <div class="row">
             
                <div class="col-md-4 mb-3">
                    <label for="empi_number" class="form-label">4. EMPI Number</label>
                    <input type="text" class="form-control" id="empi_number" name="empi_number" placeholder="Enter your EMPI number" value="<?php echo $result->empi_number;?>" required>
                </div>
              
                <div class="col-md-4 mb-3">
                    <label for="bookingDate" class="form-label">5. NHS Number</label>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="nhs_number" name="nhs_number" value="yes" <?php if (in_array('yes', (array)$result->nhs_number)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="nhs_number">Yes</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="nhs_number" value="no" name="nhs_number" <?php if (in_array('no', (array)$result->nhs_number)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="nhs_number" >No</label>
                        </div>
                        
                </div>
                <div class="col-md-4 mb-3">
                    <label for="nhs_referral" class="form-label">6. NHS Referral</label>
                    <input type="text" class="form-control" id="nhs_referral" name="nhs_referral" value="<?php echo $result->nhs_referral;?>" required>
                </div>
            </div>

            <div class="row">
               
                <div class="col-md-4 mb-3">
                    <label for="bookingTime" class="form-label">7. Sex</label>
                    
                    <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="gender" name="gender" value="male" <?php if (in_array('male', (array)$result->gender)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="pmMeal">Male</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="gender" value="female" name="gender" <?php if (in_array('female', (array)$result->gender)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="gender" >Female</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="gender" value="gender" name="other" <?php if (in_array('other', (array)$result->gender)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="gender" >Other</label>
                        </div>

                </div>
               
                <div class="col-md-4 mb-3">
                    <label for="title" class="form-label">8. Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="<?php echo $result->title;?>" required>
                </div>

                <div class="col-md-4 mb-3">
                    <label for="first_name" class="form-label">9. First name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter First name" value="<?php echo $result->first_name;?>" required>
                </div>
            </div>


            <div class="row">
              
                <div class="col-md-6 mb-3">
                    <label for="surname" class="form-label">10. Surname</label>
                    <input type="text" class="form-control" id="surname" name="surname" value="<?php echo $result->surname;?>" required>
                </div>
               
                <div class="col-md-6 mb-3">
                    <label for="dob" class="form-label">11. date of birth</label>
                    <input type="date" class="form-control" id="dob" name="dob" placeholder="Enter number of dob" value="<?php echo $result->dob;?>" required>
                </div>

            </div>

            <div class="row">
             
                <div class="col-md-4 mb-3">
                    <label for="dob" class="form-label">12. Contact Number</label>
                    <input type="number" class="form-control" id="contact" name="contact" placeholder="Enter number of guests" value="<?php echo $result->contact;?>" required>
                </div>
               
                <div class="col-md-6 mb-3">
                    <label for="email" class="form-label">13. Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter number of guests" value="<?php echo $result->email;?>" required>
                </div>

                
            </div>

            <div class="mb-3">
                <label for="requests" class="form-label">14. Address</label>
                <textarea class="form-control" id="address" name="address" rows="3" placeholder="Enter any special requests" ><?php echo $result->address;?></textarea>
            </div>

            <div class="mb-3">
                <label for="requests" class="form-label">15. Player</label>

               <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="player" name="player" value="self_play" <?php if (in_array('self_play', (array)$result->player)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="player">Self Pay</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="player" value="insurer" name="player" <?php if (in_array('insurer', (array)$result->player)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="player" >Insurer</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="player" value="sponsor" name="player" <?php if (in_array('sponsor', (array)$result->player)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="player" >Sponsor</label>
                        </div>
                </div>

                <div class="mb-3">
                <label for="requests" class="form-label">16. Sponsor details</label>
                <textarea class="form-control" id="sponsor_details" name="sponsor_details" rows="3" placeholder="Enter sponsor details"><?php echo $result->sponsor_details;?></textarea>
                </div>
                <div class="mb-3">
                    <label for="requests" class="form-label">17. Insurer information from patient relationships</label>
                    <span>this information will populate the form. The format in the dropdown is insurer Name-policy Number-AuthorisationCode</span>
                    <select name="insurer_information" id="insurer_information" class="form-control"> 

                    <option value="">select</option>
                    <option value="insurer_information" <?php if ($result->insurer_information == 'insurer_information') echo 'selected'; ?>>insurer_information</option>

                </select>
                </div>


                <div class="row">
             
                    <div class="col-md-4 mb-3">
                        <label for="insurer" class="form-label">18. insurer</label>
                        <input type="text" class="form-control" id="insurer" name="insurer" value="<?php echo $result->insurer;?>" required>
                    </div>
                  
                    <div class="col-md-4 mb-3">
                        <label for="policy_number" class="form-label">19. Policy number/Quote reference</label>
                        <input type="text" class="form-control" id="policy_number" name="policy_number" placeholder="Enter number of guests" value="<?php echo $result->policy_number;?>" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="authorisation_if_known" class="form-label">20. Authorisation, if known</label>
                        <input type="text" class="form-control" id="authorisation_if_known" name="authorisation_if_known" placeholder="Enter number of guests" value="<?php echo $result->authorisation_if_known;?>" required>
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-md-6 mb-3">
                        <label for="next_of_kin_name" class="form-label">21. Next of kin name</label>
                        <input type="text" class="form-control" id="next_of_kin_name" name="next_of_kin_name" value="<?php echo $result->next_of_kin_name;?>" required>
                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="next_of_kin_contact" class="form-label">22. Next of kin contact</label>
                        <input type="text" class="form-control" id="next_of_kin_contact" name="next_of_kin_contact" placeholder="Enter number of guests" value="<?php echo $result->next_of_kin_name;?>" required>
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-md-6 mb-3">
                        <label for="bookingTime" class="form-label">23. Interpreter Needed</label>
                        
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="interpreter_needed" name="interpreter_needed" value="yes" <?php if (in_array('yes', (array)$result->interpreter_needed)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="interpreter_needed">Yes</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="interpreter_needed" value="no" name="interpreter_needed" <?php if (in_array('no', (array)$result->interpreter_needed)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="interpreter_needed" >No</label>
                            </div>
                            

                    </div>
                
                    <div class="col-md-6 mb-3">
                        <label for="guests" class="form-label">24. interpreter Language</label>
                        <input type="text" class="form-control" id="interpreter_language" name="interpreter_language" placeholder="Enter number of guests" value="<?php echo $result->interpreter_language;?>" required>
                    </div>
                </div>

            <div class="mb-3">
                <label for="requests" class="form-label">25. Ethnicity</label>
                <textarea class="form-control" id="ethnicity" name="ethnicity" rows="3" placeholder="Enter any special requests"><?php echo $result->ethnicity;?></textarea>
            </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="bookingTime" class="form-label">26. Complex Needs</label>
                        
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="complex_needs" name="complex_needs" value="yes" <?php if (in_array('yes', (array)$result->complex_needs)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="complex_needs">Yes</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="complex_needs" value="no" name="complex_needs" <?php if (in_array('no', (array)$result->complex_needs)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="amSnack" >No</label>
                            </div>
                    </div>
                
                    <div class="col-md-6 mb-3">
                        <label for="guests" class="form-label">27. Details Of Complex Needs</label>
                        <input type="text" class="form-control" id="details_of_complex_needs" name="details_of_complex_needs" placeholder="Enter number of guests" value="<?php echo $result->details_of_complex_needs;?>" required>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="bookingTime" class="form-label">28. Co-Morbidities</label>
                        
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="co_morbidities" name="co_morbidities" value="yes" <?php if (in_array('yes', (array)$result->co_morbidities)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="pmMeal">Yes</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="co_morbidities" value="no" name="co_morbidities" <?php if (in_array('no', (array)$result->co_morbidities)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="co_morbidities" >No</label>
                            </div>
                    </div>
                
                    <div class="col-md-6 mb-3">
                        <label for="details_of_co_morbidities" class="form-label">29. Details Of Co-Morbidities</label>
                        <input type="text" class="form-control" id="details_of_co_morbidities" name="details_of_co_morbidities" placeholder="Enter number of details of co-morbidities" value="<?php echo $result->details_of_co_morbidities;?>" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="requests" class="form-label">30. Dietary requirements</label>
                    <textarea class="form-control" id="dietary_requirements" name="dietary_requirements" rows="3" placeholder="Enter any special requests"><?php echo $result->dietary_requirements;?></textarea>
                </div>

                <div class="row">
               
                    <div class="col-md-4 mb-3">
                        <label for="admitting_consultant" class="form-label">31. Admitting Consultant</label>
                        <input type="text" class="form-control" id="admitting_consultant" name="admitting_consultant" value="<?php echo $result->admitting_consultant;?>" required>
                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="guests" class="form-label">32. Admission Date</label>
                        <input type="date" class="form-control" id="admission_date" name="admission_date" placeholder="Enter number of guests" value="<?php echo $result->admission_date;?>" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="admission_time" class="form-label">33. Admission Time</label>
                        <input type="time" class="form-control" id="admission_time" name="admission_time" placeholder="Enter number of guests" value="<?php echo $result->admission_time;?>" required>
                    </div>
                </div>

                <div class="row">
              
                    <div class="col-md-4 mb-3">
                        <label for="bookingTime" class="form-label">34. Location</label>
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="location" name="location" value="Theatre" <?php if (in_array('Theatre', (array)$result->location)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="location">Theatre</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="location" value="Cath Lab" name="location" <?php if (in_array('Cath Lab', (array)$result->location)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="amSnack" >Cath Lab</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="location" value="MPU" name="location" <?php if (in_array('MPU', (array)$result->location)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="amSnack" >MPU</label>
                        </div>

                    </div>
                    
                    <div class="col-md-4 mb-3">
                        <label for="guests" class="form-label">35. Procedure Date</label>
                        <input type="date" class="form-control" id="procedure_date" name="procedure_date" placeholder="Enter Procedure Date" value="<?php echo $result->procedure_date;?>" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="guests" class="form-label">36. Procedure Time</label>
                        <input type="time" class="form-control" id="procedure_time" name="procedure_time" placeholder="Enter Procedure Time" value="<?php echo $result->procedure_time;?>" required>
                    </div>
                </div>



                <div class="row">
              
                    <div class="col-md-4 mb-3">
                        <label for="bookingTime" class="form-label">37. Surgeon</label>
                        <input type="text" class="form-control" id="surgeon" name="surgeon" placeholder="Enter Surgeon" value="<?php echo $result->surgeon;?>" required>

                    </div>
                   
                    <div class="col-md-4 mb-3">
                        <label for="guests" class="form-label">38. Surgeon Assistant</label>
                        <input type="text" class="form-control" id="surgeon_assistant" name="surgeon_assistant" placeholder="Enter Surgeon Assistant" value="<?php echo $result->surgeon_assistant;?>" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="guests" class="form-label">39. Anaesthetist</label>
                        <input type="text" class="form-control" id="anaesthetist" name="anaesthetist" placeholder="Enter Anaesthetist" value="<?php echo $result->anaesthetist;?>" required>
                    </div>
                </div>


                <div class="mb-3">
                    <label for="requests" class="form-label">40. Referring GP</label>
                    <textarea class="form-control" id="referring_gp" name="referring_gp" rows="3" placeholder="Enter Referring GP" value="<?php echo $result->referring_gp;?>"></textarea>
                </div>

                <div class="mb-3">
                    <label for="requests" class="form-label">41. GP Address</label>
                    <textarea class="form-control" id="gp_address" name="gp_address" rows="3" placeholder="Enter GP Address" ><?php echo $result->gp_address;?></textarea>
                </div>


                <div class="row">
              
                    <div class="col-md-6 mb-3">
                        <label for="bookingTime" class="form-label">42. Medical Diagnosis/Symptoms</label>
                        <input type="text" class="form-control" id="medical_diagnosis_symptoms" name="medical_diagnosis_symptoms" placeholder="Enter number of guests" value="<?php echo $result->medical_diagnosis_symptoms;?>" required>

                    </div>
                    
                    <div class="col-md-6 mb-3">
                        <label for="guests" class="form-label">43. Procedure Description</label>
                        <span>Please list in order of Major to minor</span>
                        <input type="text" class="form-control" id="procedure_description" name="procedure_description" placeholder="Enter Procedure Description" value="<?php echo $result->procedure_description;?>" required>
                    </div>

                </div>


                <!-- <div class="row">
                
                    <div class="col-md-12 mb-3">
                        <label for="bookingTime" class="form-label">44. Side Of Surgery</label>
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="side_of_surgery" name="side_of_surgery" value="left">
                                <label class="custom-control-label" for="pmMeal">Left</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="side_of_surgery" value="right" name="side_of_surgery">
                            <label class="custom-control-label" for="amSnack" >Right</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="side_of_surgery" value="bilateral" name="side_of_surgery">
                            <label class="custom-control-label" for="amSnack" >Bilateral</label>
                        </div>

                    </div>
                </div> -->

                <div class="row">
    <div class="col-md-12 mb-3">
        <label for="bookingTime" class="form-label">44. Side Of Surgery</label>
        
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="side_of_surgery_left" name="side_of_surgery" value="left" 
                <?php if (in_array('left', (array)$result->side_of_surgery)) echo 'checked'; ?>>
            <label class="custom-control-label" for="side_of_surgery_left">Left</label>
        </div>
        
        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="side_of_surgery_right" name="side_of_surgery" value="right" 
                <?php if (in_array('right', (array)$result->side_of_surgery)) echo 'checked'; ?>>
            <label class="custom-control-label" for="side_of_surgery_right">Right</label>
        </div>

        <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="side_of_surgery_bilateral" name="side_of_surgery" value="bilateral" 
                <?php if (in_array('bilateral', (array)$result->side_of_surgery)) echo 'checked'; ?>>
            <label class="custom-control-label" for="side_of_surgery_bilateral">Bilateral</label>
        </div>

    </div>
</div>



                <div class="mb-3">
                    <label for="requests" class="form-label">45. Duration</label>
                    <textarea class="form-control" id="duration" name="duration" rows="3" placeholder="Enter Duration"><?php echo $result->duration;?></textarea>
                </div>

                <div class="row">
                
                    <div class="col-md-12 mb-3">
                        <label for="bookingTime" class="form-label">46. Type Of Anaesthesia</label>
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="type_of_anaesthesia" name="type_of_anaesthesia" value="General" <?php if (in_array('General', (array)$result->type_of_anaesthesia)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="pmMeal">General</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="type_of_anaesthesia" value="Local" name="type_of_anaesthesia" <?php if (in_array('Local', (array)$result->type_of_anaesthesia)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="amSnack" >Local</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="type_of_anaesthesia" value="Regional" name="type_of_anaesthesia" <?php if (in_array('Regional', (array)$result->type_of_anaesthesia)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="amSnack" >Regional</label>
                        </div>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="type_of_anaesthesia" value="Sedation" name="type_of_anaesthesia" <?php if (in_array('Sedation', (array)$result->type_of_anaesthesia)) echo 'checked'; ?>>
                            <label class="custom-control-label" for="amSnack" >Sedation</label>
                        </div>

                    </div>
                </div>

                <div class="mb-3">
                    <label for="requests" class="form-label">47. Length of Stay</label>
                    <textarea class="form-control" id="length_of_stay" name="length_of_stay" rows="3" placeholder="Enter Length of Stay"><?php echo $result->length_of_stay;?></textarea>
                </div>

                <div class="mb-3">
                    <label for="requests" class="form-label">48. Special Requirements/Instrumentation for theatres</label>
                    <textarea class="form-control" id="special_requirements_instrumentation" name="special_requirements_instrumentation" rows="3" cols="8" placeholder="Enter any special requests"><?php echo $result->special_requirements_instrumentation;?></textarea>
                </div>

                <div class="mb-3">
                    <label for="requests" class="form-label">49. Relevant Previous Medical History</label>
                    <textarea class="form-control" id="relevant_previous_medical_history" name="relevant_previous_medical_history" rows="3" cols="8" placeholder="Enter Relevant Previous Medical History"><?php echo $result->relevant_previous_medical_history;?></textarea>
                </div>


                <div class="row">
                
                    <div class="col-md-12 mb-3">
                        <label for="bookingTime" class="form-label">50. PCU Required</label>
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="pcu_required" name="pcu_required" value="yes" <?php if (in_array('yes', (array)$result->pcu_required)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="pmMeal">Yes</label>
                        </div>
                        
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-md-12 mb-3">
                        <label for="bookingTime" class="form-label">51. ITU Required</label>
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="itu_required" name="itu_required" value="yes" <?php if (in_array('yes', (array)$result->itu_required)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="pmMeal">Yes</label>
                        </div>
                        
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-md-12 mb-3">
                        <label for="bookingTime" class="form-label">52. Image Intensifier Required</label>
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="image_intensifier_required" name="image_intensifier_required" value="yes" <?php if (in_array('yes', (array)$result->image_intensifier_required)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="image_intensifier_required">Yes</label>
                        </div>
                        
                    </div>
                </div>

                <div class="row">
                
                    <div class="col-md-12 mb-3">
                        <label for="bookingTime" class="form-label">53. Tests/Investigations Required</label>
                        <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="tests_investigations_required" name="tests_investigations_required" value="yes" <?php if (in_array('yes', (array)$result->tests_investigations_required)) echo 'checked'; ?>>
                                <label class="custom-control-label" for="pmMeal">Yes</label>
                        </div>
                        
                    </div>
                </div>

                
                <div class="mb-3">
                    <label for="requests" class="form-label">54. Procedure Urgency Category</label>
                    <textarea class="form-control" id="procedure_urgency_category" name="procedure_urgency_category" rows="3" cols="8" placeholder="Enter any special requests"><?php echo $result->procedure_urgency_category;?></textarea>
                </div>

            <div class="text-center">
                <button type="submit" type="submit" class="btn" style="background-color: #2e8cdd; color:white;">Book Now</button>
            </div>
        </div>
        </form>
    </div>

    <script>
    function generatePDF() {
        const element = document.getElementById('booking-form');
        
        html2pdf(element, {
            margin: 10,
            filename: 'booking-form.pdf',
            image: { type: 'jpeg', quality: 0.98 },
            html2canvas: { scale: 2 },
            jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
        });
    }
</script>
    <!-- </div> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> -->
    </div>
   
</div>





<style>
    .toggled-on .toggle-title {
        cursor: pointer;
        background-color: #e7f2f3;
        /* height: 44px; */
        padding: 7px;
        border-radius: 4px;
}

    .toggled-on .toggle-content {

    display: block;
    margin-top: 7px;
    border-radius: 10px;
    padding-left: 20px
    /* height: 30px; */
}

.toggle-content {
    /* box-shadow: inset 0px 0px 10px #0c0b41;  */
}

.toggle-content p {
    margin: 15px 0 15px 0;
     background-color: aliceblue;
     padding: 5px;
}

.toggled-on .fa-angle-down {
    display: none; 
}

.toggle-content-a {
    
     color: #1bbae1 !important;
}



/* .toggle-title {
   
  cursor: pointer;
    position: relative;
    background-color: #c3e0e3;
    height: 44px;
    padding: 7px;
} */

.toggle-title i {
    position: absolute;
    left: 0;
    font-size: 2.5em; 
}

.toggled-off .toggle-content {
    display: none; 
}

.toggled-off .fa-angle-up {
    display: none; 
}
</style>
<script>
    $(document).ready(function() {
  $('#patient_ids').click(function() {
   var patientsdata = $('#patient_id').val();
  
  $('#patient_id_data').val(patientsdata);

  });
});
</script>

<script>
    $(document).ready(function() {
        $(".nav-tabss .nav-link").click(function() {
            $(".nav-tabss .nav-link").removeClass("active");
            $(this).addClass("active");
            $(".tab-pane-second").hide();
            var targetPaneId = $(this).attr("href");
            $(targetPaneId).show();
        });

        $(".nav-tab-appointment .nav-link-second").click(function() {
            $(".nav-tab-appointment .nav-link-second").removeClass("active");
            $(this).addClass("active");
            $(".tab-pane-second").hide();

            var targetPaneId = $(this).data("target");
            $(targetPaneId).show();
        });
    });
    function toggleHidden() {
    var element = document.getElementById("elementToToggle");
    element.classList.add("hidden");
  }
    function toggleDisplay() {
    var element = document.getElementById("elementToToggle");
    element.classList.remove("hidden");
    document.getElementById("autoClickButton").click();
    document.getElementById("autoClickButton").focus();
  }
  window.onload = function() {
    document.getElementById("autoClickButton").click();
    document.getElementById("autoClickButton").focus();
  };
    
</script>

<style>
    .btnPrevious,
.btnNext{
	display: inline-block;
	border: 1px solid #444348;
	border-radius: 3px;
	margin: 5px;
	color: #444348;
	font-size: 14px;
	padding: 10px 15px;
	cursor: pointer;
}

.nav-tabss {
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
    width: 316px;
    border: 1px solid;
    border-radius: inherit;
}
.nav-tab-appointment{
    margin-bottom: 0;
    list-style: none;
    border-radius: inherit;
    background-color:white;

}
.nav-tab-appointment.active-link{
    margin-bottom: 0;
    list-style: none;
    border-radius: inherit;
    background-color:white;

}

.nav-pills-second{
    background-color:white;
}
.nav-pills-second>li {
    float: left;
}
.nav-pills-second.ul li:active .underline {
	transition: none;
	background-color: red;
}

.nav-link>a.active.underline {
	width: 100%;
	background-color: red;
}


</style>


<style>
       .dots {
    display: inline-block;
    cursor: pointer;
}

.dots div {
    width: 5px;
    height: 5px;
    margin: 2px;
    background-color: black;
    border-radius: 50%;
    display: inline-block;
}

.menu {
    display: none;
    position: absolute;
    background-color: white;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    z-index: 1;
}

.menu ul {
    list-style-type: none;
    margin: 0;
    padding: 10px 0;
}

.menu ul li {
    padding: 8px 20px;
}

.menu ul li a {
    text-decoration: none;
    color: black;
}

.menu ul li a:hover {
    background-color: #f1f1f1;
}

    </style>

<script>
   document.addEventListener("DOMContentLoaded", function() {
    var dotsMenus = document.querySelectorAll('[id^="dotsMenu"]');

    dotsMenus.forEach(function(dotsMenu) {
        dotsMenu.addEventListener("click", function(event) {
            event.stopPropagation();
            var id = this.id.replace('dotsMenu', '');
            var menu = document.getElementById('menuDropdown' + id);

            // Close all other menus
            document.querySelectorAll('.menu').forEach(function(otherMenu) {
                if (otherMenu !== menu) {
                    otherMenu.style.display = 'none';
                }
            });

            // Toggle the current menu
            if (menu.style.display === "block") {
                menu.style.display = "none";
            } else {
                menu.style.display = "block";
            }
        });
    });

    // Close menu when clicking outside
    document.addEventListener("click", function(event) {
        document.querySelectorAll('.menu').forEach(function(menu) {
            menu.style.display = 'none';
        });
    });
});

</script>


<script>
    $ (document).ready (function () {
	$ (".modal a").not (".dropdown-toggle").on ("click", function () {
		$ (".modal").modal ("hide");
	});
});
</script>

<style>
    .pen body {
	padding-top:50px;
}

/* Social Buttons - Twitter, Facebook, Google Plus */
.btn-twitter {
	background: #00acee;
	color: #fff
}
.btn-twitter:link, .btn-twitter:visited {
	color: #fff
}
.btn-twitter:active, .btn-twitter:hover {
	background: #0087bd;
	color: #fff
}

.btn-instagram {
	color:#fff;
	background-color:#3f729b;
	border-color:rgba(0,0,0,0.2);
}
.btn-instagram:focus,.btn-instagram.focus {
	color:#fff;
	background-color:#305777;
	border-color:rgba(0,0,0,0.2);
}
.btn-instagram:hover {
	color:#fff;
	background-color:#305777;
	border-color:rgba(0,0,0,0.2);
}

.btn-github {
	color:#fff;
	background-color:#444;
	border-color:rgba(0,0,0,0.2);
}
.btn-github:focus,.btn-github.focus {
	color:#fff;
	background-color:#2b2b2b;
	border-color:rgba(0,0,0,0.2);
}
.btn-github:hover {
	color:#fff;
	background-color:#2b2b2b;
	border-color:rgba(0,0,0,0.2);
}

/* MODAL FADE LEFT RIGHT BOTTOM */
.modal.fade:not(.in).left .modal-dialog {
	-webkit-transform: translate3d(-25%, 0, 0);
	transform: translate3d(-25%, 0, 0);
}
.modal.fade:not(.in).right .modal-dialog {
	-webkit-transform: translate3d(25%, 0, 0);
	transform: translate3d(25%, 0, 0);
}
.modal.fade:not(.in).bottom .modal-dialog {
	-webkit-transform: translate3d(0, 25%, 0);
	transform: translate3d(0, 25%, 0);
}

.modal.right .modal-dialog {
	position:absolute;
	top:0;
	right:0;
	margin:0;
}

.modal.left .modal-dialog {
	position:absolute;
	top:0;
	left:0;
	margin:0;
}

.modal.left .modal-dialog.modal-sm {
	max-width:300px;
}

.modal.left .modal-content, .modal.right .modal-content {
	min-height:100vh;
	border:0;
}
</style>
