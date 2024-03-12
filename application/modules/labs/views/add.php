<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>



<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

 <!-- Add jQuery library -->
 <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
 <script>
    $(document).ready(function() {
        // Handle tab clicks for the first set of tabs
        $(".nav-tabss .nav-link").click(function() {
            // Remove "active" class from all tab links
            $(".nav-tabss .nav-link").removeClass("active");
            // Add "active" class to the clicked tab link
            $(this).addClass("active");

            // Hide all tab panes
            $(".tab-pane-second").hide();

            // Show the corresponding tab pane based on the href attribute of the clicked tab link
            var targetPaneId = $(this).attr("href");
            $(targetPaneId).show();
        });

        // Handle tab clicks for the second set of tabs
        $(".nav-tab-appointment .nav-link-second").click(function() {
            // Remove "active" class from all tab links
            $(".nav-tab-appointment .nav-link-second").removeClass("active");
            // Add "active" class to the clicked tab link
            $(this).addClass("active");

            // Hide all tab panes
            $(".tab-pane-second").hide();

            // Show the corresponding tab pane based on the data-target attribute of the clicked tab link
            var targetPaneId = $(this).data("target");
            $(targetPaneId).show();
        });
    });
</script>




<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <ul class="breadcrumb breadcrumb-top">
        <li>
            <a href="<?php echo site_url('pwfpanel');?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url('appointment');?>"><?php echo $title;?></a>
        </li>
    </ul>
    <!-- END Datatables Header -->

    
    <?php if ($this->ion_auth->is_subAdmin()) { ?>
        <div class="block full">
            <div class="row text-center">


                <div id="wrapper">
                    <!-- Content Wrapper -->
                    <div id="content-wrapper" class="container d-flex flex-column">
                        <!-- Main Content -->
                        <div id="content">
                            <!-- Begin Page Content -->
                            <div class="container-fluid">
                                <div class="tabControl">
                                    
                                    <div class="container" style="border-radius: 5px;">
                                    
                                        <ul class="nav nav-pills nav-fill nav-tabss" id="pills-tab" role="tablist" >
                                            <li class="nav-item">
                                                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab">Appointment</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab">Availability</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-3" role="tab">Out of office</a>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- <div class="tab-content" id="pills-tabContent"> -->
                                        <div class="tab-pane-second fade show active" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">

                                            <ul class="nav nav-pills-second nav-fill nav-tab-appointment active" id="pills-tab" role="tablist" >
                                              

                                                <li class="nav-item-second">
                                                     <a class="nav-link-second active" id="pills-home-tab" data-toggle="pill" data-target="#pills-5" href="#pills-5" role="tab">Clinic Appointment</a>
                                                     <div class="underline"></div>
                                                </li>
                                                <li class="nav-item-second">
                                                 <a class="nav-link-second" id="pills-profile-tab" data-toggle="pill" data-target="#pills-6" href="#pills-6" role="tab">Theatre Appointment</a>
                                                 <div class="underline"></div>
                                                </li>
                                                                                       
                                             </ul>

                                        </div>
                                  

                                    <div class="tab-content" id="pills-tabContent" style="width: 1032px;">
                                      
                                        
                                        <div class="tab-pane-second fade active" id="pills-5" role="tabpanel" aria-labelledby="pills-home-tab">
                                            <div class="block full">
                                                <div class="block-title">
                                                    <h2><strong>Clinic Appointment</strong> Panel</h2>
                                                </div>
                                                <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data">
                                                <div class="modal-header text-center">
                                                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Clinic Appointment</h2>
                                                    </div>
                                                    <div class="alert alert-danger" id="error-box" style="display: none"></div>
                                                    <div class="form-body">
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12" >
                                                                <div class="form-group">

                                                                    <label class="col-md-3 control-label">Patient</label>
                                                                    <div class="col-md-9">
                                                                
                                                                    <input type="text" id="patient" name="patient" class="form-control" placeholder="New Patient" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" >
                                                                <div class="form-group">
                                                                        <label class="col-md-3 control-label">Location</label>
                                                                        <div class="col-md-9">
                                                                            
                                                                                <select id="country" name="location_appointment" class="form-control select2" size="1">
                                                                                    <option value="0">Please select</option>
                                                                                    <?php foreach ($countries as $country) { ?>
                                                                                        <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                                                                        <?php } ?>
                                                                                </select>
                                                                        </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" >
                                                                <div class="form-group">
                                                                        <label class="col-md-3 control-label">Clinician</label>
                                                                        <div class="col-md-9">
                                                                           
                                                                                <select id="country" name="clinician_appointment" class="form-control select2" size="1">
                                                                                    <option value="0">Please select</option>
                                                                                    <?php foreach ($care_unit as $care_units) { ?>
                                                                                            <option value="<?php echo $care_units->id; ?>"><?php echo $care_units->name; ?></option>
                                                                                            <?php } ?>
                                                                                </select>
                                                                        </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" >
                                                                <div class="form-group">
                                                                        <label class="col-md-3 control-label">Appointment type</label>
                                                                        <div class="col-md-9">
                                                                            
                                                                                <select id="country" name="appointment_type" class="form-control select2" size="1">
                                                                                    <option value="0">Please select</option>
                                                                                    <!-- <?php foreach ($countries as $country) { ?>
                                                                                        <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                                                                        <?php } ?> -->
                                                                                        <option value="Admin">Admin</option>
                                                                                        <option value="Arthrocopic-Rotator-Cuff-Repair-great-than-2cm-(T7915)">Arthrocopic Rotator Cuff Repair great than 2cm (T7915)</option>
                                                                                        <option value="Hyaluronic-acid-injection-knee">Hyaluronic acid injection knee</option>

                                                                                        <option value="Hyaluronic-acid-injection-shoulder">Hyaluronic acid injection shoulder</option>
                                                                                        <option value="Initial-Consultation-(E0000610)-Mr-Moholkar-@BMI">Initial Consultation (E0000610) Mr Moholkar @BMI</option>
                                                                                        
                                                                                </select>
                                                                        </div>
                                                                </div>
                                                            </div>


                                                           

                                                            <div class="col-md-12">
                                                                <div class="form-group row">
                                                                <label class="col-md-3 control-label">Start Date</label>
                                                                    <div class="col-md-9">
                                                                        <div class="row">
                                                                        
                                                                            <div class="col-md-5">
                                                                            <input class="form-control" placeholder="" name="start_date_appointment" type="datetime-local" id="start_at" >
                                                                                
                                                                        
                                                                            </div>
                                                                            <div class="col-md-2 date-time-separator">
                                                                            <span class=""><strong> End Date </strong></span>
                                                                            </div>
                                                                            <div class="col-md-5">
                                                                            <input class="form-control" placeholder="" name="end_date_appointment" type="datetime-local" id="end_at">
                                                                            
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                          

                                                            <div class="col-md-12" >
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Comment</label>
                                                                    <div class="col-md-9">
                                                                    <textarea class="form-control" name="comment_appointment" id="exampleFormControlTextarea1" rows="3"></textarea>
                                                                    </div>
                                                                
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" >
                                                                <div class="form-group">
                                                                   
                                                                    <div class="col-md-9">
                                                                
                                                                        <input type="hidden" id="doctor_name" name="doctor_name" class="form-control" value="<?php echo $userData->id; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12" >
                                                        
                                                                <div class="space-22"></div>
                                                            </div>

                                                                <div class="text-right">
                                                                 <button type="submit" id="submit" class="btn btn-sm btn-primary" >Save</button>
                                                                </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="tab-pane-second fade" id="pills-6" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="block full"> 
                                                <div class="block-title">
                                                        <h2><strong>Theatre Appointment</strong> Panel</h2>
                                                    </div>
                                                    <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data">
                                                        <div class="modal-header text-center">
                                                            <h2 class="modal-title"><i class="fa fa-pencil"></i> Theatre Appointment</h2>
                                                        </div>
                                                        <div class="alert alert-danger" id="error-box" style="display: none"></div>
                                                        <div class="form-body">
                                                            <br>
                                                            <div class="row">
                                                                <div class="col-md-12" >
                                                                    <div class="form-group">

                                                                        <label class="col-md-3 control-label">Patient</label>
                                                                        <div class="col-md-9">
                                                                    
                                                                        <input type="text" id="patient" name="theatre_patient" class="form-control" placeholder="New Patient" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-3 control-label">Location</label>
                                                                            <div class="col-md-9">
                                                                                
                                                                                    <select id="country" name="theatre_location" class="form-control select2" size="1">
                                                                                        <option value="0">Please select</option>
                                                                                        <?php foreach ($countries as $country) { ?>
                                                                                            <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                                                                            <?php } ?>
                                                                                    </select>
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-3 control-label">Clinician</label>
                                                                            <div class="col-md-9">
                                                                            
                                                                                    <select id="country" name="theatre_clinician" class="form-control select2" size="1">
                                                                                        <option value="0">Please select</option>
                                                                                        <?php foreach ($care_unit as $care_units) { ?>
                                                                                            <option value="<?php echo $care_units->id; ?>"><?php echo $care_units->name; ?></option>
                                                                                            <?php } ?>
                                                                                    </select>
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-3 control-label">Appointment type</label>
                                                                            <div class="col-md-9">
                                                                                
                                                                                    <select id="country" name="theatre_appointment_type" class="form-control select2" size="1">
                                                                                        <option value="0">Please select</option>
                                                                                        <?php foreach ($countries as $country) { ?>
                                                                                            <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                                                                            <?php } ?>
                                                                                    </select>
                                                                            </div>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-12 control-label" style="text-align:center;"><strong> Theatre details</strong></label>
                                                                
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-3 control-label">Anaesthetist</label>
                                                                            <div class="col-md-9">
                                                                                
                                                                                    <select id="country" name="theatre_anaesthetist" class="form-control select2" size="1">
                                                                                        <option value="0">Please select</option>
                                                                                        <?php foreach ($countries as $country) { ?>
                                                                                            <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                                                                            <?php } ?>
                                                                                    </select>
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-3 control-label">Type of stay</label>
                                                                            <div class="col-md-9">
                                                                                
                                                                                    <select id="country" name="theatre_type_of_stay" class="form-control select2" size="1">
                                                                                        <option value="0">Please select</option>
                                                                                        <?php foreach ($countries as $country) { ?>
                                                                                            <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                                                                            <?php } ?>
                                                                                    </select>
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                            
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                    <label class="col-md-3 control-label">Theatre date and time</label>
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                            
                                                                                <div class="col-md-5 date-time-container">

                                                                                <input class="form-control" placeholder="" name="theatre_date_time" type="datetime-local" id="theatre_date_time" >
                                                                                    
                                                                            
                                                                                </div>
                                                                                <div class="col-md-2 date-time-separator">
                                                                                <span class="separator">Duration</span>
                                                                                </div>
                                                                                <div class="col-md-3 date-time-container">

                                                                               
                                                                                
                                                                                <div class="number">
                                                                                    <span class="minus">-</span>
                                                                                    <input type="text" name="theatre_time_duration" value="30 "/>minuts
                                                                                    <span class="plus">+</span>
                                                                                </div>

                                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                           

                                                                
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                    <label class="col-md-3 control-label">Admission date and time</label>
                                                                        <div class="col-md-9">
                                                                                <input class="form-control" placeholder="" name="theatre_admission_date_time" type="datetime-local" id="admission_date_time" >
                                                                                
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-12 control-label" style="text-align:center;"><strong> Procedure details</strong></label>
                                                                
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                            <label class="col-md-3 control-label">Anaesthetic type*</label>

                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                                <div class="form-group">             
                                                                                    <div class="col-md-2">
                                                                                        <label>
                                                                                            <input type="radio" name="theatre_anaesthetic_type" id="admission_date_time_la" value="LA-Local" style="width:initial;">
                                                                                            LA - Local
                                                                                        </label>
                                                                                    </div>

                                                                                    <div class="col-md-3">
                                                                                        <label>
                                                                                            <input type="radio" name="theatre_anaesthetic_type" id="admission_date_time_ga" value="GA-General" style="width:initial;">
                                                                                            GA - General
                                                                                        </label>
                                                                                    </div>

                                                                                    <div class="col-md-2">
                                                                                        <label>
                                                                                            <input type="radio" name="theatre_anaesthetic_type" id="admission_date_time_sedation" value="Sedation" style="width:initial;">
                                                                                            Sedation
                                                                                        </label>
                                                                                    </div>

                                                                                    <div class="col-md-2">
                                                                                        <label>
                                                                                            <input type="radio" name="theatre_anaesthetic_type" id="admission_date_time_block" value="Block" style="width:initial;">
                                                                                            Block
                                                                                        </label>
                                                                                    </div>

                                                                                    <div class="col-md-2">
                                                                                        <label>
                                                                                            <input type="radio" name="theatre_anaesthetic_type" id="admission_date_time_other" value="Other" style="width:initial;">
                                                                                            Other
                                                                                        </label>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <div class="row">
                                                                                <div class="form-group">             
                                                                                    <div class="col-md-1">
                                                                                        <label>
                                                                                            <input type="radio" name="theatre_anaesthetic_type" id="admission_date_time_none" value="None" style="width:initial;">
                                                                                            None
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>

                                                                <!-- <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                    <label class="col-md-3 control-label">Date</label>
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                            
                                                                                <div class="col-md-5 date-time-container">
                                                                                    <input type="text" class="form-control date-input" id="start_date" name="start_date" placeholder="YYYY-MM-DD">
                                                                                    <input type="time" class="form-control time-input" id="start_time" name="start_time">
                                                                            
                                                                                </div>
                                                                                <div class="col-md-1 date-time-separator">
                                                                                <span class="separator">-</span>
                                                                                </div>
                                                                                <div class="col-md-5 date-time-container">
                                                                                <input type="text" class="form-control date-input" id="end_date" name="end_date" placeholder="YYYY-MM-DD">
                                                                                <input type="time" class="form-control time-input" id="end_time" name="end_time">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Comment</label>
                                                                        <div class="col-md-9">
                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="theatre_comment" rows="3"></textarea>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                    
                                                                        <div class="col-md-9">
                                                                    
                                                                            <input type="hidden" id="doctor_name" name="doctor_name" class="form-control" value="<?php echo $userData->id; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                            
                                                                    <div class="space-22"></div>
                                                                </div>

                                                                    <div class="text-right">
                                                                    <button type="submit" id="submit" class="btn btn-sm btn-primary" >Save</button>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                   
                                        <div class="tab-pane-second fade show" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="block full" style="width: 93%;"> 
                                                    <div class="block-title">
                                                        <h2><strong> Availability</strong> Panel</h2>
                                                    </div>
                                                    <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data">
                                                        <div class="modal-header text-center">
                                                            <h2 class="modal-title"><i class="fa fa-pencil"></i> Availability</h2>
                                                        </div>
                                                        <div class="alert alert-danger" id="error-box" style="display: none"></div>
                                                        <div class="form-body">
                                                            <br>
                                                            <div class="row">
                                                            

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-3 control-label">Location</label>
                                                                            <div class="col-md-9">
                                                                                
                                                                                    <select id="country" name="availability_location" class="form-control select2" size="1">
                                                                                        <option value="0">Please select</option>
                                                                                        <?php foreach ($countries as $country) { ?>
                                                                                            <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                                                                            <?php } ?>
                                                                                    </select>
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-3 control-label">Practitioner</label>
                                                                            <div class="col-md-9">
                                                                            
                                                                                    <select id="country" name="availability_practitioner" class="form-control select2" size="1">
                                                                                        <option value="0">Please select</option>
                                                                                        <?php foreach ($care_unit as $care_units) { ?>
                                                                                            <option value="<?php echo $care_units->id; ?>"><?php echo $care_units->name; ?></option>
                                                                                            <?php } ?>
                                                                                    </select>
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                                

                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                    <label class="col-md-3 control-label">Date and time</label>
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                            
                                                                                <div class="col-md-5 date-time-container">
                                                                                <input class="form-control" placeholder="" name="start_date_availability" type="datetime-local" id="start_time_at" >
                                                                            
                                                                                </div>
                                                                                <div class="col-md-1 date-time-separator">
                                                                                <span class="separator">-</span>
                                                                                </div>
                                                                                <div class="col-md-5 date-time-container">
                                                                                
                                                                                <input type="time" class="form-control time-input" id="end_time" name="end_time_date_availability">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                    
                                                                        <div class="col-md-9">
                                                                    
                                                                            <input type="hidden" id="doctor_name" name="doctor_name" class="form-control" value="<?php echo $userData->id; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                            
                                                                    <div class="space-22"></div>
                                                                </div>

                                                                    <div class="text-right">
                                                                    <button type="submit" id="submit" class="btn btn-sm btn-primary" >Save</button>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                
                                            </div>
                                        </div>
                                       
                                        <div class="tab-pane-second fade show" id="pills-3" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="block full" style="width: 93%;"> 
                                                    <div class="block-title">
                                                        <h2><strong> Out Of Office</strong> Panel</h2>
                                                    </div>
                                                    <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data">
                                                        <div class="modal-header text-center">
                                                            <h2 class="modal-title"><i class="fa fa-pencil"></i> Out Of Office</h2>
                                                        </div>
                                                        <div class="alert alert-danger" id="error-box" style="display: none"></div>
                                                        <div class="form-body">
                                                            <br>
                                                            <div class="row">
                                                                

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-3 control-label">Location</label>
                                                                            <div class="col-md-9">
                                                                                
                                                                                    <select id="country" name="out_of_office_location" class="form-control select2" size="1">
                                                                                        <option value="0">Please select</option>
                                                                                        <?php foreach ($countries as $country) { ?>
                                                                                            <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                                                                            <?php } ?>
                                                                                    </select>
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                            <label class="col-md-3 control-label">Practitioner</label>
                                                                            <div class="col-md-9">
                                                                            
                                                                                    <select id="country" name="out_of_office_practitioner" class="form-control select2" size="1">
                                                                                        <option value="0">Please select</option>
                                                                                        <?php foreach ($care_unit as $care_units) { ?>
                                                                                            <option value="<?php echo $care_units->id; ?>"><?php echo $care_units->name; ?></option>
                                                                                            <?php } ?>
                                                                                    </select>
                                                                            </div>
                                                                    </div>
                                                                </div>

                                                                

                                                                <div class="col-md-12">
                                                                    <div class="form-group row">
                                                                    <label class="col-md-3 control-label">Date and time</label>
                                                                        <div class="col-md-9">
                                                                            <div class="row">
                                                                            
                                                                                <div class="col-md-5 date-time-container">
                                                                                <input class="form-control" placeholder="" name="out_start_time_at" type="datetime-local" id="out_start_time_at" >
                                                                            
                                                                                </div>
                                                                                <div class="col-md-1 date-time-separator">
                                                                                <span class="separator">-</span>
                                                                                </div>
                                                                                <div class="col-md-5 date-time-container">
                                                                                <input class="form-control" placeholder="" name="out_end_time_at" type="datetime-local" id="out_end_time_at" >
                                                                                <!-- <input type="time" class="form-control time-input" id="end_time" name="end_time"> -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                        <label class="col-md-3 control-label">Comment</label>
                                                                        <div class="col-md-9">
                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="out_of_office_comment" rows="3"></textarea>
                                                                        </div>
                                                                    
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                                    <div class="form-group">
                                                                    
                                                                        <div class="col-md-9">
                                                                    
                                                                            <input type="hidden" id="doctor_name" name="doctor_name" class="form-control" value="<?php echo $userData->id; ?>">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12" >
                                                            
                                                                    <div class="space-22"></div>
                                                                </div>

                                                                    <div class="text-right">
                                                                    <button type="submit" id="submit" class="btn btn-sm btn-primary" >Save</button>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                
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

    <?php } ?>

</div>

<script>
// Get the current date and time in ISO 8601 format
function getCurrentDateTime() {
    const now = new Date();
    const year = now.getFullYear();
    const month = ('0' + (now.getMonth() + 1)).slice(-2);
    const day = ('0' + now.getDate()).slice(-2);
    const hours = ('0' + now.getHours()).slice(-2);
    const minutes = ('0' + now.getMinutes()).slice(-2);
    const dateTimeString = `${year}-${month}-${day}T${hours}:${minutes}`;
    return dateTimeString;
}

// Set the value of the input field to the current date and time
document.getElementById('start_at').value = getCurrentDateTime();
document.getElementById('end_at').value = getCurrentDateTime();
document.getElementById('theatre_date_time').value = getCurrentDateTime();

document.getElementById('admission_date_time').value = getCurrentDateTime();
document.getElementById('start_time_at').value = getCurrentDateTime();
document.getElementById('out_start_time_at').value = getCurrentDateTime();
document.getElementById('out_end_time_at').value = getCurrentDateTime();




</script>

<script>

$(document).ready(function() {
			$('.minus').click(function () {
				var $input = $(this).parent().find('input');
				var count = parseInt($input.val()) - 1;
				count = count < 1 ? 1 : count;
				$input.val(count);
				$input.change();
				return false;
			});
			$('.plus').click(function () {
				var $input = $(this).parent().find('input');
				$input.val(parseInt($input.val()) + 1);
				$input.change();
				return false;
			});
		});
</script>

<style>

span {cursor:pointer; }
		.number{
			margin:0px;
		}
		.minus, .plus{
			width:20px;
			height:20px;	
            display: inline-block;
            text-align: center;
		}
		input{
			height:34px;
      width: 100px;
      text-align: center;
      font-size: 16px;
			border:1px solid #ddd;
			border-radius:4px;
      display: inline-block;
      vertical-align: middle;
        }
</style>

<script>
    // Initial duration in minutes
let durationInMinutes = 30;

// Function to update the displayed duration
function updateDuration() {
    document.getElementById('duration').textContent = durationInMinutes + " minutes";
}

// Event listener for the increase button
document.getElementById('increaseBtn').addEventListener('click', function() {
    durationInMinutes += 10; // Increase duration by 30 minutes
    updateDuration(); // Update the displayed duration
});

// Event listener for the decrease button
document.getElementById('decreaseBtn').addEventListener('click', function() {
    // Ensure duration doesn't become negative
    if (durationInMinutes > 30) {
        durationInMinutes -= 30; // Decrease duration by 30 minutes
        updateDuration(); // Update the displayed duration
    }
});

</script>





<!-- END Page Content -->
<script>


document.addEventListener('DOMContentLoaded', function() {
    // JavaScript code here

    // Get the current date and time
var currentDate = new Date();
var currentYear = currentDate.getFullYear();
var currentMonth = ('0' + (currentDate.getMonth() + 1)).slice(-2);
var currentDay = ('0' + currentDate.getDate()).slice(-2);
var currentHours = ('0' + currentDate.getHours()).slice(-2);
var currentMinutes = ('0' + currentDate.getMinutes()).slice(-2);

// Set the current date and time as default values for the input fields
document.getElementById('start_date').value = currentYear + '-' + currentMonth + '-' + currentDay;
document.getElementById('start_time').value = currentHours + ':' + currentMinutes;
document.getElementById('end_date').value = currentYear + '-' + currentMonth + '-' + currentDay;
document.getElementById('end_time').value = currentHours + ':' + currentMinutes;

});

</script>

<style>
    .date-time-container {
    display: flex;
    border: 1px solid #ccc;
    border-radius: 4px;
    /* padding: 5px; */
    margin-left: 14px;
    width: auto;
}
.date-time-separator{
    display: flex;
    border: none;
    border-radius: 4px;
}


.separator {
    align-self: center;
    margin: 7px 22px;
}
.date-input{
    border: none;
}
.date-time-container input {
    flex: 1;
    margin-right: 5px;
    border: none; /* Add this line */
    border-radius: 0; /* Optional: Reset border radius */
    box-shadow: none; /* Optional: Remove box shadow */
}


</style>
<script>
$(document).ready(function() {
    $('#start_date').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
        // endDate: '+0d'
    });

    $('#end_date').datepicker({
        format: 'yyyy-mm-dd',
        autoclose: true,
        todayHighlight: true,
        // endDate: '+0d'
    });
});
</script>

<script type="text/javascript">
    $('#date').datepicker({
        startView: 2,
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true,
        endDate:'today'       
    });
/*    $("#zipcode").select2({
        allowClear: true
    });*/
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
    padding-left: 0;
    list-style: none;
    width: 553px;
    padding: 20px;
    border-radius: inherit;
    background-color:white;

}
.nav-tab-appointment.active-link{
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
    width: 553px;
    padding: 20px;
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
<script>
    
$('.btnNext').click(function() {
    $('.nav-pills .active').parent().next('li').find('a').trigger('click');
});

$('.btnPrevious').click(function() {
    $('.nav-pills .active').parent().prev('li').find('a').trigger('click');
});
</script>