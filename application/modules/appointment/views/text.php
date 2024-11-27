
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css"> -->
    <style>
        .caret {
            display: none!important;
        }
        .highlight { background-color: yellow; }
        header h1, header p { margin: 0; }
        footer { padding: 7vh 5vw; border-top: 1px solid #ddd; }
        aside { padding: 7vh 5vw; }
        .primary { overflow: auto; scroll-snap-type: both mandatory; height: 80vh; }
        table { border-collapse: collapse; border: 0; }
        th, td { border: 1px solid #aaa; background-clip: padding-box; scroll-snap-align: start; }
        tbody tr:last-child th, tbody tr:last-child td { border-bottom: 0; }
        thead { z-index: 1000; position: relative; }
        th, td { padding: 0.6rem; min-width: 6rem; text-align: left; margin: 0; }
        thead th { position: sticky; top: 0; border-top: 0; background-clip: padding-box; }
        thead th.pin { left: 0; z-index: 1001; border-left: 0; }
        tbody { z-index: 10; position: relative; }
        tbody th { position: sticky; left: 0; }
        thead th, tbody th { background-color: #f8f8f8; }
        .save-btn a {
            font-weight: 700 !important;
            font-size: 1.2rem !important;
            padding: 0.6rem 2.25rem !important;
            background: #337ab7 !important;
        }
        .save-btn a:hover {
            background-color: #00008B !important;
        }
        .multiselect-ui { z-index: 1050; }
        .dropdown-menu { z-index: 1060; }
        tbody tr td{
            /* display: block; */
            justify-content: center;
           
        }
        .popup-appointment-open{
            width: -webkit-fill-available;
            padding: inherit;
            background-color: white!important;
            border: white!important;
        }
        .popup-appointment-open:hover{
            width: -webkit-fill-available;
            padding: inherit;
            background-color: white!important;
            border: white;
        }
        .popup-appointment-open:focus{
            width: -webkit-fill-available;
            padding: inherit;
            background-color: white!important;
            border: white!important;
        }
        



        .btn-position{
  top:50%;
  left:50%;
  transform:translate(-50%, -50%);
  position:absolute;
}

.modal.right.fade.in .modal-dialog {
right:0 !important;
transform: translateX(-50%);
}
.modal.right .modal-content {
/* overflow-y:scroll; */
border-radius:0;
overflow-y: scroll;
    overflow-x: hidden;
}
.modal.right .modal-dialog {
position: fixed;
margin: auto;
height: 100%;
-webkit-transform: translate3d(0%, 0, 0);
-ms-transform: translate3d(0%, 0, 0);
-o-transform: translate3d(0%, 0, 0);
transform: translate3d(0%, 0, 0);
}
.modal.right.fade.in .modal-dialog {
transform: translateX(0%);
}
.modal.right.fade .modal-dialog {
right: -320px;
-webkit-transition: opacity 0.3s linear, right 0.3s ease-out;
-moz-transition: opacity 0.3s linear, right 0.3s ease-out;
-o-transition: opacity 0.3s linear, right 0.3s ease-out;
transition: opacity 0.3s linear, right 0.3s ease-out;
}
    
    
   .modal.right .modal-header {background-color:#204b5e;; color:#fff; height: 40px;}
    .modal.right .modal-header::after {content:""; display:inline-block;}
    .modal.right .close {text-shadow:none; opacity:1; color:#ff4d4d; font-size:26px}
/*  form-control  */
    
    .form-control {border-radius:0; box-shadow:none}
    .form-control:focus {box-shadow:none}
    
    
/*  Button  */
    
    .btn {border-radius:0}

    .select2-container .select2-selection--multiple {
    height: auto;
}

.select2-container .select2-selection--single {
    height: auto;
}



    </style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>

<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" /> -->
 
<!-- Include Date Range Picker -->
<!-- <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" /> -->



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

</head>
<body>
    <div id="page-content" style="background-color: whitesmoke;">
        <ul class="breadcrumb breadcrumb-top">
            <li><a href="<?php echo site_url('pwfpanel');?>">Home</a></li>
            <li><a href="<?php echo site_url('appointment');?>"><?php echo $title;?></a></li>
        </ul>

        <!-- <h2>
            <a href="javascript:void(0)"  onclick="open_model_new('<?php echo $model; ?>')"  class="btn btn-sm btn-primary  fw-bold">
                New Patient
            </a>
        </h2> -->
        
            
        <div class="block full" style="border-radius:12px">
            <div class="block-title" style="display: flex; align-items: center; justify-content: center; padding: 10px; background-color: #e0e7ff; position: relative;">
            <?php 
            $all_permission = $this->ion_auth->is_permission();
            
            foreach ($all_permission['form_permission'] as $permission) {
                $menu_view = $permission->menu_view;
                $menu_create = $permission->menu_create;
                $menu_update = $permission->menu_update;
                $menu_delete = $permission->menu_delete;
                $menu_name = $permission->menu_name;
        

                if ($menu_name == 'Appointment' && $menu_create == '1') {
            ?>
                <div style="position: absolute; left: 10px;">
                    <a href="<?php echo base_url().'index.php/' . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary" style="display: flex; align-items: center; gap: 5px;">
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a>
                </div>
            <?php 
                }
            }

    if ($this->ion_auth->is_facilityManager()) { 
    ?>
        <div style="position: absolute; left: 10px;">
            <a href="<?php echo base_url().'index.php/' . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary" style="display: flex; align-items: center; gap: 5px;">
                <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
            </a>
        </div>
    <?php 
    } 
    ?>
    <h2 style="font-size: 1.5rem; font-weight: 500; margin: 0;">
    <strong><?php echo $title; ?></strong> Panel
    </h2>
</div>







            <div class="modal-header text-center" style="display:flex;border-radius:10px; background-color:#f7fbff;  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);border:1px solid #d3d3d3; margin-bottom:20px">
                <?php if ($this->ion_auth->is_facilityManager()) { ?>

                <div class="col-sm-3 col-lg-3 col-md-3 m-4">
                    <div class="col-md-9">
                        <select id="viewSelector" onchange="getLocations(this.value)" name="location_appointment" class="form-control select2" size="1">
                            <option value="0">View By</option>
                            <option value="practitioner"><b> Practitioner View</b></option>
                            <option value="location"><b>Location View</option>
                            <option value="clinic"><b>Clinic View</option>
                        </select>
    
                    </div>
                </div>

                <div class="col-sm-5 col-lg-5 col-md-5 m-4">
                    <div class="col-sm-5 col-lg-5 col-md-5 m-4">
                        <select id="departmentanddoctordata" name="departmentanddoctordata[]" class="multiselect-ui form-control dropdown-menu" multiple="multiple"></select>
                        <!-- <select id="departmentanddoctordata" name="departmentanddoctordata[]" class="form-control select2"></select> -->

                    </div>
                </div>
            <?php } 
            //else if($this->ion_auth->is_subAdmin()) { 
                ?>

                <?php 
                $all_permission = $this->ion_auth->is_permission();
              
                foreach($all_permission['form_permission'] as $permission){
                   
                    $menu_view =$permission->menu_view;
                    $menu_create= $permission->menu_create;
                    $menu_update= $permission->menu_update;
                    $menu_delete =$permission->menu_delete;
                    $menu_name =$permission->menu_name;
                    if ($menu_name == 'Appointment') { 
                    if($menu_create =='1'){

                    
                    ?>

                    <div class="col-sm-3 col-lg-3 col-md-3 m-4">
                        <div class="col-md-9">
                            <select id="viewSelector" onchange="getLocations(this.value)" name="location_appointment" class="form-control select2" size="1">
                                <option value="0">View By</option>
                                <option value="practitioner"><b> Practitioner View</b></option>
                                <option value="location"><b>Location View</option>
                                <option value="clinic"><b>Clinic View</option>
                            </select>
    
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6 col-md-6 m-4">
                        <div class="col-sm-6 col-lg-6 col-md-6 m-4">
                            <select id="departmentanddoctordata" name="departmentanddoctordata[]" class="multiselect-ui form-control dropdown-menu" multiple="multiple"></select>
                        </div>
                    </div>

                    
                <?php } } } ?>
               
                    <div class="form-group">
                        <label for="datePicker">Select Date:</label>
                        <input type="date" id="datePicker" class="form-control">
                    </div>
            </div> 
            


            <div class="form-body" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div style="overflow-x: auto; overflow-y: auto; width: auto; height: 500px;" >

                                    <table class="table table-bordered text-center" >
                                        <thead id="practitioner_id" class="">
                                            <tr >
                                                <th class="text-center fw-bold appointment-header" style="font-size:16px; background-color:#337ab7;color:white;">Time</th>
                                                <!-- $([your selector]).attr('colspan',3); -->
                                                <?php
                                                    $practitionerData = [];
                                                    foreach ($practitioner as $key=> $department) {
                                                        $practitionerData[$key] = $department;
                                                        
                                                        echo '<th class="day-cell text-center" style="font-size:14px;background-color:#337ab7;color:white;" data-practitioner-id="' . $department->id . '">' . $department->name . ' ' . $department->first_name . ' ' . $department->last_name . '</th>';
                                                        // echo '<td class="day-cell appointment-row">';
                                                        // echo '</td>';
                                                    }
                                                  $prationerCount = count($practitionerData);
                                                    
                                                ?>
                                            </tr>
                                            <!-- <tr>  -->
                                        </thead>
                                        <tbody id="all_appointment " class="appointment-body datatableappintment" >
                                            <?php
                                                $start_time = strtotime('07:00');
                                                $end_time = strtotime('24:00');
                                                $interval = 15 * 60;

                                                for ($time = $start_time; $time <= $end_time; $time += $interval) {

                                                    $formatted_time = date('H:i', $time);
                                                // echo '<tr>';
                                                    echo '<tr>
                                                    <td class="time-cell">' . $formatted_time . '</td>';
                                                   
                                                    foreach ($practitioner as $key => $value)
                                                    {
                                                    $object = $value->id;
                                                   
                                                            echo '<td class="time-cell">';
                                                        
                                                        foreach ($all_appointment as $appointment) {
                                                            
                                                            $appointmentTime = date('H:i', strtotime($appointment->start_date_appointment));
                                                            $end_date_appointment = date('H:i', strtotime($appointment->end_date_appointment));
                                                            $appointment_date = date('Y-m-d', strtotime($appointment->start_date_appointment));
                                                            
                                                            $out_start_time_at = date('H:i', strtotime($appointment->out_start_time_at));
                                                            $out_end_time_at = date('H:i', strtotime($appointment->out_end_time_at));
                                                            $out_start_timeAt = date('Y-m-d', strtotime($appointment->out_start_time_at));
                                                            
                                                            $start_date_availability = date('H:i', strtotime($appointment->start_date_availability));
                                                            $end_time_date_availability = date('H:i', strtotime($appointment->end_time_date_availability));
                                                            $start_dateAvailability = date('Y-m-d', strtotime($appointment->start_date_availability));
                                                            
                                                            $theatre_date_time = date('H:i', strtotime($appointment->theatre_date_time));
                                                            $theatre_time_duration = $appointment->theatre_time_duration;
                                                            $durationInSeconds = $theatre_time_duration * 60;
                                                            $theatre_end_time = date('H:i', strtotime($theatre_date_time . " +$durationInSeconds seconds"));
                                                            $theatre_dateTime = date('Y-m-d', strtotime($appointment->theatre_date_time));
                                                            
                                                            
                                                            $current_date = date('Y-m-d');


                                                                        if ($appointment->practitioner == $object && $formatted_time >= $appointmentTime && $formatted_time <= $end_date_appointment) {
                                                                            if ($formatted_time == $appointmentTime) {
                                                                                echo '<label style="background-color:green; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: green; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->comment_appointment . '<br>' . $appointmentTime . ' - ' . $end_date_appointment . '</span></label>';
                                                                            }
                                                                           
                                                                        } elseif ($appointment->practitioner == $object && $formatted_time >= $out_start_time_at && $formatted_time <= $out_end_time_at) {
                                                                            if ($formatted_time == $out_start_time_at) {
                                                                                echo '<label style="background-color:pink; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: pink; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->out_of_office_comment . '<br>' . $out_start_time_at . ' - ' . $out_end_time_at . '</span></label>';
                                                                            }
                                                                           
                                                                        } elseif ($appointment->practitioner == $object && $formatted_time >= $start_date_availability && $formatted_time <= $end_time_date_availability) {
                                                                            if ($formatted_time == $start_date_availability) {
                                                                                echo '<label style="background-color:#40E0D0; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: #40E0D0; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>Available<br>' . $start_date_availability . ' - ' . $end_time_date_availability . '</span></label>';
                                                                            }
                                                                           
                                                                        } elseif ($appointment->theatre_clinician == $object && $formatted_time >= $theatre_date_time && $formatted_time <= $theatre_end_time) {
                                                                            if ($formatted_time == $theatre_date_time) {
                                                                                echo '<label style="background-color:#800080; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: #800080; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->theatre_comment . '<br>' . $theatre_date_time . ' - ' . $theatre_end_time . '</span></label>';
                                                                            }
                                                                          
                                                                       }
                                                            }
                                                           
                                                            echo '<button id="btnMyTest001" type="button" class="btn btn-success popup-appointment-open" data-toggle="modal" data-target="#my_modal" data-age="27">Create</button>';
                                                                                
                                                            echo '</td>';
                                                    }
                                                        echo '</tr>';
                                                        }
                                                   
                                            ?>
                                        </tbody>   
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-right"></div>
            </div>
        </div>


        
        
        <!-- <div id="form-modal-box"></div> -->
                <!-- Modal -->
                <div class="modal right fade" id="my_modal" role="dialog">
                    <div class="modal-dialog modal-lg">
                    
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"> Appointments</h4>
                                <button type="button" class="close" data-dismiss="modal" style="position: absolute; top: 25px; right: 25px; font-size: 24px;">
                                    <span aria-hidden="true">&times;</span>
                                    <span class="sr-only">Close</span>
                                </button>
                                <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                            </div>
                                <div class="modal-body">
                                <?php 
                $all_permission = $this->ion_auth->is_permission();
                $viewAppointment =[];
                foreach($all_permission['form_permission'] as $permission){
                   
                    $menu_view =$permission->menu_view;
                    $menu_create= $permission->menu_create;
                    $menu_update= $permission->menu_update;
                    $menu_delete =$permission->menu_delete;
                    $menu_name =$permission->menu_name;
                    if ($menu_name == 'Appointment') { 
                    if($menu_view =='1'){
                        $viewAppointment[] =$menu_view;
                    }}}
                    
                    ?>

                                    <?php if ($this->ion_auth->is_subAdmin() || $this->ion_auth->is_facilityManager() || in_array('1',$viewAppointment)) { ?>
                                        <div class="full">
                                            <div class="row text-center">
                                                <div id="wrapper">
                                                    <!-- Content Wrapper -->
                                                    <!-- <div id="content-wrapper" class="container d-flex flex-column"> -->
                                                        <!-- Main Content -->
                                                        <div id="content">
                                                            <!-- Begin Page Content -->
                                                            <div class="container-fluid">
                                                                <div class="tabControl">

                                                                    <div class="container">
                                                                        <div class="row" >
                                                                            <div class="col">
                                                                                <ul class="nav nav-pills nav-fill nav-tabss" id="pills-tab" role="tablist">
                                                                                    <li onclick="toggleDisplay()" class="nav-item">
                                                                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab">Appointment</a>
                                                                                    </li>
                                                                                    <li onclick="toggleHidden()" class="nav-item">
                                                                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab">Availability</a>
                                                                                    </li>
                                                                                    <li onclick="toggleHidden()" class="nav-item">
                                                                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-3" role="tab">Out of office</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div id="elementToToggle" class="tab-pane-second d-block" id="pills-1" role="tabpanel" aria-labelledby="pills-home-tab">
                                                                        <ul class="nav nav-pills-second nav-fill nav-tab-appointment active" id="pills-tab" role="tablist">
                                                                            <li class="nav-item-second active">
                                                                                <a id="autoClickButton" class="nav-link-second active" id="pills-home-tab" data-toggle="pill" data-target="#pills-5" href="#pills-5" role="tab" style="color: var(--bs-nav-link-hover-color);">Clinic Appointment</a>
                                                                                <div class="underline"></div>
                                                                            </li>
                                                                            <li class="nav-item-second">
                                                                                <a class="nav-link-second" id="pills-profile-tab" data-toggle="pill" data-target="#pills-6" href="#pills-6" role="tab" style="color: var(--bs-nav-link-hover-color);">Theatre Appointment</a>
                                                                                <div class="underline"></div>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                <div class="tab-content" id="pills-tabContent">
                                                                    <div class="tab-pane-second active" id="pills-5" role="tabpanel" aria-labelledby="pills-home-tab">
                                                                        <div class="block full">
                                                                            <div class="block-title">
                                                                                <h2 class="form-head"><strong>Clinic Appointment</strong> Panel</h2>
                                                                            </div>
                                                                        <!-- <div class="modal-header text-center">
                                                                            <h4 class="modal-title"><img src="<?php echo base_url(); ?>uploads/form.svg" style="height: 20px; width: 20px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt=""> Clinic Appointment</h4>
                                                                        </div> -->
                                                                        <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data">
                                                                            
                                                                            <div class="alert alert-danger" id="error-box" style="display: none;"></div>
                                                                            <div class="form-body">
                                                                                <br>
                                                                                <div class="row">
                                                                                <div class="col-md-12">
                                                                                <div class="form-group">

                                                                                        <label for="gsearch" class="col-md-3 control-label">Search Today patient:</label>
                                                                                        <!-- <input type="search" id="search"> -->
                                                                                        <div class="col-md-9">
                                                                                                                <div class="input-group">
                                                                                            <input type="text" class="form-control" placeholder="Search" id="search">
                                                                                        
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                    
                                                                                <!-- <h2 style="float: inline-end;">
                                                                            <a href="javascript:void(0)"  onclick="open_model_new_patient('<?php echo $model; ?>')"  class="btn btn-sm btn-primary fw-bold">
                                                                                New Patient
                                                                            </a>
                                                                        </h2> -->
                                                                        <button type="button" class="btn btn-sm btn-primary fw-bold" data-toggle="modal" data-target="#commonModalNewAppointment">New Patient</button>

                                                                                </div>




                                                                                
                                                                        <div class="col-md-12">
                                                                                <div class="form-group">
                                                                                    <label class="col-md-3 control-label"> </label>
                                                                                    <div class="col-md-9">
                                                                                    <input type="hidden" name="type" id="type" value="clinic_appointment">
                                                                                    <div id="result"></div>
                                                                                </div>
                                                                                </div>
                                                                        </div>
      
                   
    

                    <div class="col-md-12">
                        <div class="form-group">
                            
                            <?php 
                        if ($this->ion_auth->is_facilityManager()) { ?>
                            <label class="col-md-3 control-label">Location</label>
                                <div class="col-md-9">
                                <select id="country" name="location_appointment" class="form-control select2" size="1">
                                    <option value="0">This is The Hospital Location</option>

                                    <?php foreach ($clinic_location as $location) { ?>
                                        <option value="<?php echo $location->id; ?>"><?php echo $location->clinic_location; ?></option>
                                    <?php } ?>
                                    
                                </select>
                               
                            </div>
                        <?php }else { ?>
                        
                            <label class="col-md-3 control-label">Location</label>
                            <div class="col-md-9">
                                <select id="country" name="location_appointment" class="form-control select2" size="1">
                                    <option value="0">Please select</option>
                                   
                                    
                                    <?php foreach ($clinic_location as $location) { ?>
                                        <option value="<?php echo $location->id; ?>"><?php echo $location->clinic_location; ?></option>
                                    <?php } ?>
                                </select>
                               
                            </div>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Practitioner</label>
                            <div class="col-md-9">
                                <select id="practitioner" name="practitioner" class="form-control select2" size="1">
                                    <option value="0">Please select</option>
                                  
                                    <?php foreach ($practitioner as $practitioners) { ?>
                                        <option value="<?php echo $practitioners->id; ?>"><?php echo $practitioners->name; ?></option>
                                    <?php } ?>
                                    
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Appointment type</label>
                            <div class="col-md-9">
                            
                                <select id="country" name="appointment_type" class="form-control select2" size="1" required>
                                    
                                    <?php foreach ($appointment_type as $appointment_types) { ?>
                                        <option value="<?php echo $appointment_types->id; ?>"><?php echo $appointment_types->name; ?></option>
                                    <?php } ?>
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
                                        <input class="form-control" placeholder="" name="start_date_appointment" type="datetime-local" id="start_at">
                                    </div>
                                    <div class="col-md-2 date-time-separator">
                                        <span><strong>End Date</strong></span>
                                    </div>
                                    <div class="col-md-5">
                                        <input class="form-control" placeholder="" name="end_date_appointment" type="datetime-local" id="end_at">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Comment</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="comment_appointment" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-9">
                                <input type="hidden" id="doctor_name" name="doctor_name" class="form-control" value="<?php echo $userData->id; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="space-22"></div>
                    </div>
                    <div class="text-right">
                        <button type="submit" id="submit" class="save-btn btn btn-sm btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
                                        <div class="tab-pane-second" id="pills-6" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                                        <div class="block full" style="width: 100%; max-width:900px;">
                                                                            <div class="block-title">
                                                                                <h2 class="form-head"><strong>Theatre Appointment</strong> Panel</h2>
                                                                            </div>
                                                                            <!-- <div class="modal-header text-center">
                                                                                    <h4 class="modal-title"><img src="<?php echo base_url(); ?>uploads/form.svg" style="height: 20px; width: 20px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt=""> Theatre Appointment</h4>
                                                                                </div> -->
                                                                            
                                                                            
                                        <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data">
                                                                                
                                                                                <div class="alert alert-danger" id="error-box" style="display: none;"></div>
                                                                                <div class="form-body">
                                                                                    <br>
                                                                                    <div class="row">
                                                                                    

                                                                                        <div class="col-md-12">
                                                                                    <div class="form-group">

                                                                                            <label for="gsearch" class="col-md-3 control-label">Search Today patient:</label>
                                                                                            <!-- <input type="search" id="search"> -->
                                                                                            <div class="col-md-9">
                                                                                                                    <div class="input-group">
                                                                                                <input type="text" class="form-control" placeholder="Search" id="search_patient">
                                                                                            
                                                                                            </div>
                                                                                                </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                <label class="col-md-3 control-label"> </label>
                                                                                                <div class="col-md-9">
                                                                                                <input type="hidden" name="type" id="type" value="theatre_appointment">
                                                                                                <div id="result_patient"></div>
                                                                                            </div>
                                                                                            </div>
                                                                                        </div>

                                                                                        <div class="col-md-12">
                                                                                            <div class="form-group">
                                                                                                
                                                                                                <?php 
                                                                                            if ($this->ion_auth->is_facilityManager()) { ?>
                                                                                                <label class="col-md-3 control-label">Location</label>
                                                                                                    <div class="col-md-9">
                                                                                                    <select id="country" name="location_appointment" class="form-control select2" size="1">
                                                                                                        <option value="0">This is The Hospital Location</option>

                                                                                                        <?php foreach ($clinic_location as $location) { ?>
                                                                                                            <option value="<?php echo $location->id; ?>"><?php echo $location->clinic_location; ?></option>
                                                                                                        <?php } ?>
                                                                                                        
                                                                                                    </select>
                                                                                                
                                                                                                </div>
                                                                                            <?php }else { ?>
                                                                                            
                                                                                                <label class="col-md-3 control-label">Location</label>
                                                                                                <div class="col-md-9">
                                                                                                    <select id="country" name="location_appointment" class="form-control select2" size="1">
                                                                                                        <option value="0">Please select</option>
                                                                                                    
                                                                                                        
                                                                                                        <?php foreach ($clinic_location as $location) { ?>
                                                                                                            <option value="<?php echo $location->id; ?>"><?php echo $location->clinic_location; ?></option>
                                                                                                        <?php } ?>
                                                                                                    </select>
                                                                                                
                                                                                                </div>
                                                                                                <?php } ?>
                                                                                            </div>
                                                                                        </div>

                                                        
                                                                                <div class="col-md-12">

                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Clinician</label>
                                                                                        <div class="col-md-9">
                                                                                            <select id="country" name="theatre_clinician" class="form-control select2" size="1">
                                                                                                <option value="0">Please select</option>
                                                                                                <?php foreach ($doctorsname as $country) { ?>
                                                                                                    <option value="<?php echo $country->id; ?>"><?php echo $country->first_name.' '.$country->last_name; ?></option>
                                                                                                <?php } ?>
                                                                                                <!-- <?php foreach ($clinic_location as $location) { ?>
                                                                                                    <option value="<?php echo $location->id; ?>"><?php echo $location->name; ?></option>
                                                                                                <?php } ?> -->
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Appointment type</label>
                                                                                        <div class="col-md-9">
                                                                                            <select id="country" name="appointment_type" class="form-control select2" size="1">
                                                                                                <option value="0">Please select</option>
                                                                                                <?php foreach ($appointment_type as $appointment_types) { ?>
                                                                                                    <option value="<?php echo $appointment_types->id; ?>"><?php echo $appointment_types->name; ?></option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-12 control-label" style="text-align: center;"><strong>Theatre details</strong></label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Anaesthetist</label>
                                                                                        <div class="col-md-9">
                                                                                        <input type="text" id="theatre_anaesthetist" name="theatre_anaesthetist" class="form-control" placeholder="Anaesthetist" style="text-align: justify;" required>
                                                                                            
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-3 control-label">Type of stay</label>
                                                                                        <div class="col-md-9">
                                                                                            <select id="country" name="theatre_type_of_stay" class="form-control select2" size="1">
                                                                                                <option value="0">Please select</option>
                                                                                                <?php foreach ($type_of_stay as $type_of_stays) { ?>
                                                                                                    <option value="<?php echo $type_of_stays->id; ?>"><?php echo $type_of_stays->name; ?></option>
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
                                                                                                    <input class="form-control" placeholder="" name="theatre_date_time" type="datetime-local" id="theatre_date_time">
                                                                                                </div>
                                                                                                <div class="col-md-2 date-time-separator">
                                                                                                    <span class="separator">Duration</span>
                                                                                                </div>
                                                                                                <div class="col-md-3 date-time-container">
                                                                                                    <div class="number">
                                                                                                        <span class="minus">-</span>
                                                                                                        <input type="text" name="theatre_time_duration" value="30" /> minutes
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
                                                                                            <input class="form-control" placeholder="" name="theatre_admission_date_time" type="datetime-local" id="admission_date_time">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-12">
                                                                                    <div class="form-group">
                                                                                        <label class="col-md-12 control-label" style="text-align: center;"><strong>Procedure details</strong></label>
                                                                                    </div>
                                                                                </div>
                                                                                
                                                                <div class="col-md-12">
                                                                <div class="form-group row">
                                                                    <label class="col-md-3 control-label">Anaesthetic type*</label>
                                                                    <div class="col-md-9">
                                                                        <div class="row">
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
                                                                        <div class="row">
                                                                            <div class="col-md-2">
                                                                                <label>
                                                                                    <input type="radio" name="theatre_anaesthetic_type" id="admission_date_time_none" value="None" style="width:initial;">
                                                                                    None
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Comment</label>
                                                                    <div class="col-md-9">
                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="comment_appointment" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <div class="col-md-9">
                                                                        <input type="hidden" id="doctor_name" name="doctor_name" class="form-control" value="<?php echo $userData->id; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="space-22"></div>
                                                            </div>
                                                            <div class="text-right">
                                                                <button type="submit" id="submit" class="save-btn btn btn-sm btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                                                            

                                            <div class="tab-pane-second" id="pills-2" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                <div class="block full" style="width: 100%; max-width: 900px; margin-top: 40px;">

                                                <div class="block-title">
                                                    <h2 class="form-head"><strong> Availability</strong> Panel</h2>
                                                </div>
                                                    <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data">
                                                    <!-- <div class="modal-header text-center">
                                                        <h4 class="modal-title"><img src="<?php echo base_url(); ?>uploads/form.svg" style="height: 20px;width:20px;filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%);margin-bottom:5px" alt=""> Availability</h4>
                                                    </div> -->
                                                    <div class="alert alert-danger" id="error-box" style="display: none"></div>
                                                    <div class="form-body">
                                                        <br>
                                                        <div class="row">

                                                            <input type="hidden" name="type" id="type" value="availability_appointment"> 

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    
                                                                    <?php 
                                                                if ($this->ion_auth->is_facilityManager()) { ?>
                                                                    <label class="col-md-3 control-label">Location</label>
                                                                        <div class="col-md-9">
                                                                        <select id="country" name="location_appointment" class="form-control select2" size="1">
                                                                            <option value="0">This is The Hospital Location</option>

                                                                            <?php foreach ($clinic_location as $location) { ?>
                                                                                <option value="<?php echo $location->id; ?>"><?php echo $location->clinic_location; ?></option>
                                                                            <?php } ?>
                                                                            
                                                                        </select>
                                                                    
                                                                    </div>
                                                                <?php }else { ?>
                                                                
                                                                    <label class="col-md-3 control-label">Location</label>
                                                                    <div class="col-md-9">
                                                                        <select id="country" name="location_appointment" class="form-control select2" size="1">
                                                                            <option value="0">Please select</option>
                                                                        
                                                                            
                                                                            <?php foreach ($clinic_location as $location) { ?>
                                                                                <option value="<?php echo $location->id; ?>"><?php echo $location->clinic_location; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    
                                                                    </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Practitioner</label>
                                                                    <div class="col-md-9">
                                                                        <select id="practitioner" name="practitioner" class="form-control select2" size="1">
                                                                            <option value="0">Please select</option>
                                                                        
                                                                            <?php foreach ($practitioner as $practitioners) { ?>
                                                                                <option value="<?php echo $practitioners->id; ?>"><?php echo $practitioners->name; ?></option>
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
                                                                                <input class="form-control" placeholder="" name="start_date_availability" type="datetime-local" id="start_time_at">
                                                                            </div>
                                                                            <div class="col-md-1 date-time-separator">
                                                                                <span class="separator">-</span>
                                                                            </div>
                                                                            <div class="col-md-5 date-time-container">
                                                                                <input type="datetime-local" class="form-control time-input" id="end_time" name="end_time_date_availability">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <div class="col-md-9">
                                                                        <input type="hidden" id="doctor_name" name="doctor_name" class="form-control" value="<?php echo $userData->id; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="space-22"></div>
                                                            </div>
                                                            <div class="text-right">
                                                                <button type="submit" id="submit" class="save-btn btn btn-sm btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                        <div class="tab-pane-second" id="pills-3" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="block full" style="width: 100%; max-width:900px; margin-top:40px;">
                                                <div class="block-title">
                                                    <h2 class="form-head"><strong>Out Of Office</strong> Panel</h2>
                                                </div>
                                        <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data">
                                                    <!-- <div class="modal-header text-center">
                                                        <h4 class="modal-title"><img src="<?php echo base_url(); ?>uploads/form.svg" style="height: 20px; width: 20px; filter: invert(47%) sepia(69%) saturate(959%) hue-rotate(121deg) brightness(98%) contrast(86%); margin-bottom: 5px;" alt=""> Out Of Office</h4>
                                                    </div> -->
                                                    <div class="alert alert-danger" id="error-box" style="display: none;"></div>
                                                    <div class="form-body">
                                                        <br>
                                                        <div class="row">
                                                        <input type="hidden" name="type" id="type" value="out_of_office_appointment"> 
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    
                                                                    <?php 
                                                                if ($this->ion_auth->is_facilityManager()) { ?>
                                                                    <label class="col-md-3 control-label">Location</label>
                                                                        <div class="col-md-9">
                                                                        <select id="country" name="location_appointment" class="form-control select2" size="1">
                                                                            <option value="0">This is The Hospital Location</option>

                                                                            <?php foreach ($clinic_location as $location) { ?>
                                                                                <option value="<?php echo $location->id; ?>"><?php echo $location->clinic_location; ?></option>
                                                                            <?php } ?>
                                                                            
                                                                        </select>
                                                                    
                                                                    </div>
                                                                <?php }else { ?>
                                                                
                                                                    <label class="col-md-3 control-label">Location</label>
                                                                    <div class="col-md-9">
                                                                        <select id="country" name="location_appointment" class="form-control select2" size="1">
                                                                            <option value="0">Please select</option>
                                                                        
                                                                            
                                                                            <?php foreach ($clinic_location as $location) { ?>
                                                                                <option value="<?php echo $location->id; ?>"><?php echo $location->clinic_location; ?></option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    
                                                                    </div>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Practitioner</label>
                                                                    <div class="col-md-9">
                                                                        <select id="practitioner" name="practitioner" class="form-control select2" size="1">
                                                                            <option value="0">Please select</option>
                                                                        
                                                                            <?php foreach ($practitioner as $practitioners) { ?>
                                                                                <option value="<?php echo $practitioners->id; ?>"><?php echo $practitioners->name; ?></option>
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
                                                                                <input class="form-control" placeholder="" name="out_start_time_at" type="datetime-local" id="out_start_time_at">
                                                                            </div>
                                                                            <div class="col-md-1 date-time-separator">
                                                                                <span class="separator">-</span>
                                                                            </div>
                                                                            <div class="col-md-5 date-time-container">
                                                                                <input class="form-control" placeholder="" name="out_end_time_at" type="datetime-local" id="out_end_time_at">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Comment</label>
                                                                    <div class="col-md-9">
                                                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="comment_appointment" rows="3"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <div class="col-md-9">
                                                                        <input type="hidden" id="doctor_name" name="doctor_name" class="form-control" value="<?php echo $userData->id; ?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="space-22"></div>
                                                            </div>
                                                            <div class="text-right">
                                                                <button type="submit" id="submit" class="save-btn btn btn-sm btn-primary">Save</button>
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
                    <!-- </div> -->
                </div>
            </div>
           
        </div>

    <?php } ?>
                                               
                                </div>
                            <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-success">Save</button>
                                    <button type="button" class="btn btn-default close-btn" data-dismiss="modal">Close</button> -->
                        </div>
                    </div>
                            
                </div>
            </div>
        </div>
       
        <div id="form-modal-box-appointment-patient"></div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script> -->


    <script>
    $(document).ready(function() {
  var table = $('#all_appointment').DataTable({
		// hiding columns via datatable column.visivle API
    "columnDefs": [{
      "targets": [2],
      "visible": false
    }, {
      "targets": [3],
      "visible": false
    }, {
			// adding a more info button at the end
      "targets": -1,
      "data": null,
      "defaultContent": "<button type='button' class='btn btn-default'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></button>"
    }]
  });

  $('#example tbody').on('click', 'button', function() {
    var data = table.row($(this).parents('tr')).data(); // getting target row data
    $('.insertHere').html(
			// Adding and structuring the full data
      '<table class="table dtr-details" width="100%"><tbody><tr><td>Name<td><td>' + data[0] + '</td></tr><tr><td>Position<td><td>' + data[1] + '</td></tr><tr><td>Office<td><td>' + data[2] + '</td></tr><tr><td>Age<td><td>' + data[3] + '</td></tr><tr><td>Start date<td><td>' + data[4] + '</td></tr><tr><td>Salary<td><td>' + data[5] + '</td></tr></tbody></table>'
    );
    $('#myModal').modal('show'); // calling the bootstrap modal
  });

});

    </script>


    <script>
        $(document).ready(function() {
            $('#departmentanddoctordata').multiselect({
                includeSelectAllOption: true
            });

            $('#departmentanddoctordata').on('change', function() {
                var selectedNames = $(this).val();
                updateTableHeaders(selectedNames);
                filterAppointments();
            });

            $('#datePicker').on('change', function() {
                filterAppointments();
            });

            function updateTableHeaders(selectedNames) {
                var headerRow = $('#practitioner_id');
                headerRow.find('tr').empty(); // Clear existing headers
                headerRow.find('tr').append('<th class="text-center fw-bold" style="font-size:16px; background-color:#337ab7;color:white;">Time</th>'); // Add Time header

                selectedNames.forEach(function(practitionerId) {
                    var practitionerName = $('#departmentanddoctordata option[value="' + practitionerId + '"]').text();
                    headerRow.find('tr').append('<th class="day-cell text-center" style="font-size:14px;background-color:#337ab7;color:white;">' + practitionerName + '</th>');
                });

                $('.datatableappintment tbody tr').each(function() {
                    $(this).find('td').not(':first').remove();
                    selectedNames.forEach(function(practitionerId) {
                        console.log(practitionerId);
                        $(this).append('<td class="day-cell" data-time="' + $(this).find('.time-cell').text() + '" data-day="' + practitionerId + '"></td>');
                    }.bind(this));
                });
            }

            function filterAppointments() {
                var selectedDate = $('#datePicker').val();
                
                var selectedPractitioners = $('#departmentanddoctordata').val();
                
                if (selectedDate) {
                    $('.appointment-row').hide();
                    $('.appointment-row').filter(function() {
                        var appointmentDate = $(this).data('date');
                        var appointmentPractitioner = $(this).data('day');
                        return appointmentDate === selectedDate && (!selectedPractitioners || selectedPractitioners.includes(String(appointmentPractitioner)));
                    }).show();
                } else {
                    $('.appointment-row').hide();
                }
            }

            window.getLocations = function(view_id) {
                $.ajax({
                    url: 'appointment/getLocationFilter',
                    type: 'POST',
                    dataType: "json",
                    data: { id: view_id },
                    success: function(response) {
                        console.log(response); // Debugging line to check the response
                        $('#departmentanddoctordata').empty().append('<option value="">All Select</option>');
                        $.each(response, function(key, value) {
                            var name = value.name || '';
                            var firstName = value.first_name || '';
                            var lastName = value.last_name || '';
                            if (name !== 'N/A' || firstName !== '') {
                                $('#departmentanddoctordata').append('<option value="' + value.id + '">' + name + ' ' + firstName + ' ' + lastName + '</option>');
                            }
                        });
                        $('#departmentanddoctordata').multiselect('rebuild');
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            };

            let today = new Date().toISOString().substr(0, 10);
            document.querySelector("#datePicker").value = today;
            filterAppointments();
        });
    </script>

<script>
    
     $(document).ready(function() {
            $('#departmentanddoctordata').multiselect({
                includeSelectAllOption: true
            });

            $('#departmentanddoctordata,#datePicker').on('change', function() {
                
            

     var selectedDate = $('#datePicker').val();
     
    //  var selectedPractitioners = $('#departmentanddoctordata').val();

    var selectedPractitioners = $("#departmentanddoctordata :selected").map(function(i, el) {
    return $(el).val();
}).get();

// alert(selectedPractitioners);
    //  $(.appointment-header).attr('colspan',-1,selectedPractitioners);
    //  $(.appointment-body).attr('colspan',-1, selectedPractitioners);
    $.ajax({
                    url: 'appointment/filterdateDepartment',
                    type: 'POST',
                    dataType: "html",
                    data: { departmentId: selectedPractitioners,selectedDate:selectedDate },
                    success: function(response) {
                        // alert(response);
                        // $('.datatableappintment').empty(bind());
                        console.log(response); // Debugging line to check the response
                        $(".datatableappintment").html(response);
                        
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });

            });
</script>

        <script>
            wow = new WOW(
                {
                boxClass:     'wow',      // default
                animateClass: 'animated', // default
                offset:       0,          // default
                mobile:       true,       // default
                live:         true        // default
                }
                )
                wow.init();
        </script>

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
			/* height:34px; */
            /* width: 100px; */
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
/* .tab-pane-second{
    display:block !important;
}   */
.fade:not(.show){
    display:none;
}
.hidden{
    display:none !important;
}
.form-head{
    font-size:2rem !important;
    font-weight:700 !important;
}
.modal-header{
    justify-content:center !important;
}
.block{
    box-shadow:0px 4px 8px rgba(0, 0, 0, 0.1);
}
.save-btn{
    font-weight:700;
    font-size: 1.5rem;
    padding: 0.6rem 2.25rem;
}
.save-btn:hover{
    /* background-color:#00008B !important; */
    /* background:#00008B !important; */
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
/* Button Styles */
.btnPrevious,
.btnNext {
    display: inline-block;
    border: 1px solid #444348;
    border-radius: 3px;
    margin: 5px;
    color: #444348;
    font-size: 14px;
    padding: 10px 15px;
    cursor: pointer;
    background-color: #f5f5f5;
    transition: background-color 0.2s ease;
}

.btnPrevious:hover,
.btnNext:hover {
    background-color: #e0e0e0;
}

/* Navigation Tabs */
.nav-tabss {
    margin-bottom: 0;
    padding: 0;
    list-style: none;
    width: 50%;
    border: 1px solid #ddd;
    border-radius: 4px;
    background-color: #f9f9f9;
}

/* Appointment Tab */
.nav-tab-appointment {
    margin-bottom: 0;
    padding: 20px;
    list-style: none;
    width: 553px;
    border-radius: 4px;
    background-color: #fff;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Active Link Style for Appointment Tab */
.nav-tab-appointment.active-link {
    background-color: #fdfdfd;
    border: 1px solid #ddd;
}

/* Secondary Nav Pills */
.nav-pills-second {
    background-color: #fff;
    padding: 0;
}

.nav-pills-second > li {
    display: inline-block;
    margin-right: 10px;
}

/* Active Link with Underline */
.nav-pills-second .nav-link > a.active.underline {
    display: inline-block;
    width: 100%;
    border-bottom: 2px solid red;
    padding-bottom: 5px;
    color: #444348;
    font-weight: bold;
}

/* Modal Style for Full-Height Right Sidebar */
.modal.right .modal-content {
    height: 100%;
    width: 100%;
    border-radius: 0;
    padding: 15px;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2);
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

<script>
    $(document).ready(function() {
        $("#search").keyup(function() {
            var query = $(this).val();
            if (query != '') {
                $.ajax({
                    url: "<?php echo site_url('appointment/fetch'); ?>",
                    method: "POST",
                    data: {query: query},
                    success: function(data) {
                        $('#result').html(data);
                    }
                });
            } else {
                $('#result').html('');
            }
        });
    });
</script>


<script>
    $(document).ready(function() {
        $("#search_patient").keyup(function() {
            var query = $(this).val();
            if (query != '') {
                $.ajax({
                    url: "<?php echo site_url('appointment/fetch'); ?>",
                    method: "POST",
                    data: {query: query},
                    success: function(data) {
                        $('#result_patient').html(data);
                    }
                });
            } else {
                $('#result_patient').html('');
            }
        });
    });
</script>


<style>
    .modal-footer .btn + .btn {
    margin-bottom: 5px !important;
    margin-left: 5px;
}
input { 
    text-align: justify;
}
</style>
<div id="commonModalNewAppointment" class="modal right fade bd-example-modal-lg" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="form-horizontal" role="form" method="post" action="<?php echo base_url($formUrlAddNew) ?>" enctype="multipart/form-data">
            
           
                <div class="modal-header" style="background-color: honeydew;">
                    <h4 class="modal-title" style="color: black; font-weight: 900;"> Add new patient form</h4>
                    <button type="button" class="close" data-dismiss="modal" style="position: absolute; top: 25px; right: 25px; font-size: 24px;">
                        <span aria-hidden="true">&times;</span>
                        <span class="sr-only">Close</span>
                    </button>
                    <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                </div>
                
                <div class="modal-body" style="overflow-y: auto; max-height: 80vh;">
                    <!-- <div class="loaders">
                        <img src="<?php //echo base_url().'backend_asset/images/Preloader_2.gif';?>" class="loaders-img" class="img-responsive">
                    </div> -->
                    <div class="alert alert-danger" id="error-box" style="display: none"></div>
                    <div class="form-body">

                    <div class="row">
                        <div class="modal-header text-center">
                            <div class="col-md-12">
                                <div class="" style="padding-top: 0px;">
                                    <h3><strong>Basic details</strong></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label">First Name</label>
                                    <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" style="text-align: justify;"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label">Last Name</label>
                                    <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" style="text-align: justify;"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label">Title (Optional)</label>
                                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" style="text-align: justify;"/>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label">Date Of Birth</label>
                                    <input type="text" class="form-control" name="day" id="day" placeholder="Day" maxlength="2" style="text-align: justify;"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding-top: 10px;">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="month" id="month">
                                        <option value="">Select Month</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2" style="padding-top: 10px;">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label"></label>
                                    <select class="form-control" name="year" id="year">
                                                                <?php
                                                                // Get the current year
                                                                $current_year = date("Y");

                                                                // // Loop through years from 10 years ago to 10 years in the future
                                                                for ($i = $current_year - 90; $i <= $current_year + 1; $i++) {
                                                                    // Check if the current iteration is the current year
                                                                    $selected = ($i == $current_year) ? 'selected' : '';

                                                                    // Output each year as an option
                                                                    echo "<option value='$i' $selected>$i</option>";
                                                                }
                                                                ?>
                                                            </select>
                                    <!-- <input type="text" class="form-control" name="year" placeholder="Year" /> -->
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label">Gender</label>
                                    <select class="form-control" name="gender" id="gender">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Not_Known">Not Known</option>
                                        <option value="Indeterminate">Indeterminate</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label">Patient comments(optional)</label>
                                    <textarea class="form-control" name="comment" id="comment" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <!-- <div class="modal-header ">
                            <h3 class="modal-title text-center"><strong>Contact details</strong></h3>
                        </div> -->

                        <div class="modal-header text-center">
                            <div class="col-md-12">
                                <div class="" style="padding-top: 0px;">
                                    <h3><strong>Contact details</strong></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label class="">Phone Type</label>
                                        <select id="phone_code" name="phone_type" class="form-control select2" size="1" placeholder="Choose a phone type">
                                            <option value="" disabled selected>Choose a phone type</option>
                                            <option value="mobile">Mobile</option>
                                            <option value="home">Home</option>
                                            <option value="office">Office</option>
                                            <option value="fax">Fax</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <label class="">Phone Number</label>
                                        <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="<?php echo lang('Phone Number');?>" style="text-align: justify;"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class=""><?php echo lang('user_email');?></label>
                                        <input type="email" class="form-control" name="user_email" id="user_email" placeholder="<?php echo lang('user_email');?>" style="text-align: justify;"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="control-label"><?php echo lang('password'); ?></label>
                                        <input type="text" class="form-control" name="password" id="password" placeholder="<?php echo lang('password'); ?>" value="<?php echo randomPassword(); ?>" style="text-align: justify;"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="">Address Lookup</label>
                                        <input type="text" class="form-control" name="address_lookup" id="address_lookup" placeholder="Address Lookup" style="text-align: justify;"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="">Street address (Optional)</label>
                                        <input type="text" class="form-control" name="streem_address" id="streem_address" placeholder="Street Address" style="text-align: justify;"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <!-- <div class="col-md-4">
                                        <label class="">City</label>
                                        <select id="country" name="city" class="form-control select2" size="1">
                                            <option value="" disabled selected>Please select</option>
                                            <?php foreach($states as $state){?>
                                            <option value="<?php echo $state->id;?>"><?php echo $state->name;?></option>
                                            <?php }?>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label class="">PostCode</label>
                                        <input type="text" class="form-control" name="post_code" id="post_code" placeholder="Post Code" />
                                    </div>

                                    <div class="col-md-4">
                                        <label class="">Country</label>
                                        <select id="country" name="country" class="form-control select2" size="1">
                                            <option value="0">Please select</option>
                                            <?php foreach($countries as $country){?>
                                            <option value="<?php echo $country->id;?>"><?php echo $country->name;?></option>
                                            <?php }?>
                                        </select>
                                    </div> -->


                                    <div class="col-md-6" >
                                            <div class="form-group">
                                                <label class="m-4 control-label">Country</label>
                                            
                                                <div class="col-md-12">
                                                    <!-- <input type="text" class="col-md-12 form-control" name="country_id" id="country_in" placeholder="Country"/> <br> -->
                                                    
                                                        <select id="country" onchange="getStates(this.value)" name="country" class="form-control select2" size="1">
                                                            <option value="0">Please select</option>
                                                                <?php foreach ($countries as $country) { ?>
                                                                            
                                                                <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                                                        
                                                                <?php } ?>
                                                        </select>
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group">
                                                <label class="m-4 control-label">State</label>
                                                <div class="col-md-12">
                                                <!-- <input type="text" class="form-control" name="state_id" id="state_in" placeholder="State Name"/> -->
                                                </div>
                                                <div class="col-md-12" id="state_div">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                            <div class="form-group">
                                                <label class="m-4 control-label">City</label>
                                                <div class="col-md-12">
                                                <!-- <input type="text" class="form-control" name="city_id" id="city_in" placeholder="City Name"/> -->
                                                </div>
                                                <div class="col-md-12" id="city">
                                                
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6" >
                                        <div class="form-group">
                                            <label class="m-4 control-label">Zipcode Access</label>
                                                <div class="col-md-12">
                                                <input type="text" id="postalCode" class="form-control" placeholder="Enter Postal Code" name="post_code" style="text-align: justify;">
                                                <!-- <div id="result"></div> -->
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div> 
                    <!-- </div> -->
                    <div class="row">
                        <!-- <div class="modal-header">
                            <h3 class="modal-title"><strong>More details</strong></h3>
                        </div> -->

                        <div class="modal-header text-center">
                            <div class="col-md-12">
                                <div class="" style="padding-top: 0px;">
                                    <h3><strong>More details</strong></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="">Occupation (optional)</label>
                                        <input type="text" class="form-control" name="Occupation" id="Occupation" placeholder="<?php echo 'Occupation' ;?>" style="text-align: justify;"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="">Company (optional)</label>
                                        <input type="text" class="form-control" name="Company" id="Company" placeholder="<?php echo 'Company'; ?>" style="text-align: justify;"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="">Religion (optional)</label>
                                        <select id="religion" name="religion" class="form-control select2" size="1">
                                            <option value="" disabled selected>Please select</option>
                                            <option value="Baha'i">Baha'i</option>
                                            <option value="Buddhaist">Buddhaist</option>
                                            <option value="Christian">Christian</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Jain">Jain</option>
                                            <option value="Jewish">Jewish</option>
                                            <option value="Muslim">Muslim</option>
                                            <option value="Pagan">Pagan</option>
                                            <option value="Sikh">Sikh</option>
                                            <option value="Zoroastrian">Zoroastrian</option>
                                            <option value="Other">Other</option>
                                            <option value="None">None</option>
                                            <option value="Declines_to_Disclose">Declines to Disclose</option>
                                            <option value="Patient_Religion_Unknown">Patient Religion Unknown</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="">Ethnicity (optional)</label>
                                        <select id="ethnicity" name="ethnicity" class="form-control select2" size="1">
                                            <option value="0">Please select</option>
                                            <option value="White_British">White - British</option>
                                            <option value="White_Irish">White - Irish</option>
                                            <option value="Any_other_White_background">Any other White background</option>
                                            <option value="Mixed_White_and_Black_Caribbean">Mixed - White and Black Caribbean</option>
                                            <option value="Mixed_White_and_Black_African">Mixed - White and Black African</option>
                                            <option value="Mixed_White_and_Asian">Mixed - White and Asian</option>
                                            <option value="Any_other_mixed_background">Any other mixed background</option>
                                            <option value="Asian_Indian">Asian - Indian</option>
                                            <option value="Asian_Pakistani">Asian - Pakistani</option>
                                            <option value="Asian_Bangladeshi">Asian - Bangladeshi</option>
                                            <option value="Black_Caribbean">Black - Caribbean</option>
                                            <option value="Black_African">Black - African</option>
                                            <option value="Any_other_Black_background">Any other Black background</option>
                                            <option value="Black_or_Black_British">Black or Black British</option>
                                            <option value="Chinese">Chinese</option>
                                            <option value="Any_other_ethnic_group">Any other ethnic group</option>
                                            <option value="Not_stated">Not stated</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-2">
                                        <input type="checkbox" onclick="checkMe(this.checked);" id="deceased" name="contacts_clinician" class="custom-control-input">
                                        <label class="">Deceased</label>
                                    </div>
                                    <div class="col-md-10"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12" id="divcheck" style="display:none;">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <label class="control-label" style="padding-left:30px;">Date Of Death (Optional)</label><br>
                                    <div class="form-group" style="padding-left:20px;">
                                        <div class="row">
                                            <div class="col-md-1" style="padding-right: 0;">
                                                <input type="text" class="form-control" name="death_day" id="death_day" placeholder="Death Day" maxlength="2" />
                                            </div>
                                            <div class="col-md-2" style="padding-right: 0;">
                                                <select class="form-control" name="death_month" id="death_month">
                                                    <option value="">Select Month</option>
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05">May</option>
                                                    <option value="06">June</option>
                                                    <option value="07">July</option>
                                                    <option value="08">August</option>
                                                    <option value="09">September</option>
                                                    <option value="10">October</option>
                                                    <option value="11">November</option>
                                                    <option value="12">December</option>
                                                </select>
                                            </div>
                                            <div class="col-md-2">
                                                <input type="number" class="form-control" name="death_year" id="death_year" placeholder="Death Year" style="text-align: justify;"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                                    <!-- <div class="modal-header">
                                        <h3 class="modal-title"><strong> Relationships and emergency contacts</strong></h3>
                                    </div> -->
                                    <div class="modal-header text-center">
        <div class="col-md-12">
            <div class="vender_title_admin">
                <h3><strong>Relationships and emergency contacts</strong></h3>
            </div>
        </div>
    </div>
                
                                    <div class="col-md-12" >
                                        <div class="form-group">
                                        <div class="col-md-12">
                                                <table>
                                                    
                                                </table>
                                            </div>
                                            
                                            <div class="col-md-12">
                                               
                                                <button class="save-btn" type="button" style="border:#b4bdb4" data-toggle="modal" data-target="#myModal" >Add New Relationship</button>
                                                
                                            </div>
                
                                        </div>
                                    </div>
                
                
                                </div>
                     <!-- <div class="row"> -->
                        <!-- <div class="modal-header text-center">
                            <div class="col-md-12">
                                <div class="" style="padding-top: 0px;">
                                    <h3><strong>Relationships and emergency contacts</strong></h3>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="col-md-12" >
                            <div class="form-group">
                            <div class="col-md-12">
                                    <table>
                                        
                                    </table>
                                </div>
                                
                                <div class="col-md-12"> -->
                                    <!-- <a href="" target="blank">Add new relation</a> -->
                                    <!-- <a href="<?php echo site_url('patient/openRelationship'); ?>" target="blank" class=" <?php echo (strtolower($this->router->fetch_class()) == "patient") ? "active" : "" ?>"><span class="sidebar-nav-mini-hide">Add New Relationship</span></a> -->
                                    <!-- <button type="button" style="border" onclick="addRelationship(this.click);" >Add New Relationship</button> -->
                                    <!-- <button class="save-btn" type="button" style="border:#b4bdb4;" data-toggle="modal" data-target="#myModal" >Add New Relationship</button> -->
                                    
                                <!-- </div>
    
                            </div>
                        </div>
                    </div> -->
                    <div class="row">
                        <input type="text" class="form-control" name="storedData" id="storedData" readonly>
                        <input type="text" class="form-control" name="storedDataType" id="storedDataType" readonly>
                        <input type="hidden" class="form-control" name="policy_number" id="policy_number" readonly>
                        <input type="hidden" class="form-control" name="authorisation_code" id="authorisation_code" readonly>
                    </div> 
                    <div class="row">
                        <div class="modal-header text-center">
                            <div class="col-md-12">
                                <div class="" style="padding-top: 0px;">
                                    <h3><strong>Communication preferences</strong></h3>
                                </div>
                            </div>
                        </div>
    
                        <div class="col-md-12">
                            <label for="">These settings will override the reminder and confirmation preferences you set for the practice.</label>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <h4 class=""><strong>Communication preferences</strong></h4>
                                    
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="checkbox" id="receive_emails" name="receive_emails" class="custom-control-input" value="receive_emails" >
                                                <label class="custom-control-label check-labels" for="customRadioInline1">Receive emails</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="receive_sms_messages" name="receive_sms_messages" class="custom-control-input" value="receive_sms_messages">
                                                <label class="custom-control-label check-labels" for="customRadioInline2">Receive SMS messages</label>                                      
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="has_consented_to_promotional_marketing" name="has_consented_to_promotional_marketing" class="custom-control-input" value="has_consented_to_promotional_marketing">
                                                <label class="custom-control-label check-labels" for="customRadioInline2">Has consented to promotional marketing</label>                                      
                                            </div>
                                            <div class="col-md-12">
                                                <input type="checkbox" id="receive_payment_reminders" name="receive_payment_reminders" class="custom-control-input" value="receive_payment_reminders">
                                                <label class="custom-control-label check-labels" for="customRadioInline2">Receive payment reminders</label>                                      
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <h4 class=""><strong>Privacy policy</strong></h4>
                                    
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <input type="radio" id="privacy_policy_no_response" name="privacy_policy" class="custom-control-input" value="no_response">
                                                <label class="custom-control-label check-labels" for="customRadioInline1">No response</label>
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" id="privacy_policy_accepted" name="privacy_policy" class="custom-control-input" value="accepted">
                                                <label class="custom-control-label check-labels" for="customRadioInline2">Accepted</label>                                      
                                            </div>
                                            <div class="col-md-12">
                                                <input type="radio" id="privacy_policy_rejected" name="privacy_policy" class="custom-control-input" value="rejected">
                                                <label class="custom-control-label check-labels" for="customRadioInline2">Rejected</label>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- <div class="modal-header">
                            <h3 class="modal-title"><strong>Billing settings</strong></h3>
                        </div> -->
                        <div class="modal-header text-center">
                            <div class="col-md-12">
                                <div class="" style="padding-top: 0px;">
                                    <h3><strong>Billing settings</strong></h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <label class="">Billing details (optional)</label>
                                        <input type="text" class="form-control" name="billing_detail" id="billing_detail" placeholder="Choose a billing details" style="text-align: justify;"/>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <label class="">Payment reference (optional)</label>
                                        <input type="text" class="form-control" name="payment_reference" id="payment_reference" placeholder="Payment Reference" style="text-align: justify;"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>           
                    <div class="row">
                        <!-- <div class="modal-header">
                            <h3 class="modal-title"><strong>Card details</strong></h3>
                        </div> -->
                        <div class="modal-header text-center">
                            <div class="col-md-12">
                                <div class="" style="padding-top: 0px;">
                                    <h3><strong>Card details</strong></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <input type="text" class="form-control ccFormatMonitor mb-4" name="card_number" id="card_number" placeholder="Card Number" style="text-align: justify;">
                                        <input type="text" id="inputExpDate" class="form-control mb-4" name="exp_month_year" id="exp_month_year" placeholder="MM / YY" maxlength='5' style="text-align: justify;">
                                        <input type="password" class="form-control cvv" name="cvv" id="cvv" placeholder="CVV" style="text-align: justify;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->  

                    <div class="row">
                    
                        <div class="modal-header text-center">
                            <div class="col-md-12">
                                <div class="" style="padding-top: 0px;">
                                    <h3><strong>ID numbers</strong></h3>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="col-md-12">
                                        <label class="">System</label>
                                        <input type="text" class="form-control" name="System_id" id="System_id" placeholder="System Id" style="text-align: justify;"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                                            
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Care Unit</label>
                                <div class="col-md-9">
                                    <select id="care_unit" name="care_unit_id" class="form-control select-chosen" size="1" onchange='getPatientId(this.value)'>
                                        <option value="">Please select</option>
                                        <?php
                                        if (!empty($careUnitsUser)) {


                                            if (!empty($careUnitsUser)) {
                                                foreach ($careUnitsUser as $row) {

                                                    //print_r($row);die;
                                                    $select = "";
                                                    if (isset($careUnitID)) {
                                                        if ($careUnitID == $row->id) {
                                                            $select = "selected";
                                                        }
                                                    }
                                        ?>
                                                    <option value="<?php echo $row->id; ?>" <?php echo $select; ?>><?php echo $row->name; ?></option>
                                                <?php
                                                }
                                            }
                                        } else {

                                            foreach ($care_unit as $category) { ?>

                                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                
                        <?php if ($this->ion_auth->is_admin()) { ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select MD Steward</label>
                                    <div class="col-md-9">
                                        <select id="md_steward_id" name="md_steward_id" class="form-control select-chosen" size="1">
                                            <option value="">Select MD Steward</option>
                                            <?php foreach ($stawardss as $row) { ?>

                                                <option value="<?php echo $row->id; ?>"><?php echo $row->first_name . ' ' . $row->last_name; ?></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>


                        <?php } else if ($this->ion_auth->is_facilityManager()) { ?>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Doctor</label>
                                    <div class="col-md-9">
                                        <select id="doctor_id" name="doctor_id" class="form-control select-chosen">
                                            <option value="">Please Select</option>
                                            <?php
                                            if (!empty($doctors)) {
                                                foreach ($doctors as $doctor) {
                                            ?>
                                            <option value="<?php echo $doctor->id; ?>"><?php echo $doctor->first_name. ' '.$doctor->last_name; ?></option>

                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                            </div>
                            <?php $md_steward_id = $this->session->userdata('user_id');?>
                            <input type="hidden" class="form-control" name="md_steward_id" id="name" placeholder="Patient Id" maxlength="9" value="<?php echo $md_steward_id?>"/>
                            

                        <?php } else if ($this->ion_auth->is_subAdmin()) { ?>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Doctor</label>
                                    <div class="col-md-9">
                                        <!-- <select id="doctor_id" name="doctor_id" class="form-control select-chosen">
                                            <option value="">Please Select</option>
                                            <?php
                                            if (!empty($doctors)) {
                                                foreach ($doctors as $doctor) {
                                            ?>
                                                    <option value="<?php echo $doctor->id; ?>"><?php echo $doctor->doctor_name; ?></option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select> -->

                                        <select id="doctor_id" name="doctor_id" class="form-control select-chosen">
                                            <option value="">Please Select</option>
                                            <?php
                                            if (!empty($doctors)) {
                                                foreach ($doctors as $doctor) {
                                            ?>
                                            <option value="<?php echo $doctor->id; ?>"><?php echo $doctor->first_name. ' '.$doctor->last_name; ?></option>

                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Select MD Steward</label>
                                    <div class="col-md-9">
                                        <select id="md_steward_id" name="md_steward_id" class="form-control select-chosen" size="1">
                                            <option value="">Select MD Steward</option>
                                            <?php foreach ($stawardss as $row) { ?>

                                                <option value="<?php echo $row->id; ?>"><?php echo $row->first_name . ' ' . $row->last_name; ?></option>

                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                          
                            <?php }?>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Infection Onset</label>
                                <div class="col-md-9">
                                    <select id="symptom_onset" name="symptom_onset" class="form-control select-chosen" size="1">
                                        <option value="">Please select</option>
                                        <option value="Hospital">Hospital/CAI</option>
                                        <option value="Facility">Facility/HAI</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Date of start abx</label>
                                <div class="col-md-9">
                                    <input type="date" class="form-control" name="date_of_start_abx" id="date_of_start_abx" />
                                </div>
                            </div>
                        </div>                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Room Number</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="room_number" id="room_number" placeholder="0000" maxlength="4" style="text-align: justify;"/>
                                    <p><b>Note :</b> Room Number can be 3 digit or 4 digit <br> number,if you dont know then write '<b>NA</b>'.</p>
                                </div>

                            </div>
                        </div>
                        <div class="modal-header text-center"></div>
                        <div class="modal-header text-center">
                        <div class="col-md-12">
                            <div class="" style="padding-top: 0px;">
                                <h3><strong>Initial</strong></h3>
                            </div>
                        </div>
                    </div>
                
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Diagnosis</label>
                                                    <div class="col-md-9">
                                                        <select id="initial_dx" name="initial_dx" class="form-control select-chosen" size="1">
                                                            <option value="">Please select</option>
                                                            <?php foreach ($initial_dx as $category) { ?>
                                                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Antibiotic Name</label>
                                                    <div class="col-md-9">
                                                        <select id="initial_rx" name="initial_rx" class="form-control select-chosen" size="1">
                                                            <option value="">Please select</option>
                                                            <?php foreach ($initial_rx as $category) { ?>
                                                                <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Days of Therapy</label>
                                                    <div class="col-md-9">
                                                        <input type="number" class="form-control" name="initial_dot" onkeyup="myFunction()" id="initial_dot" placeholder="0" style="text-align: justify;"/>
                                                        <b style="color:red;"><span id="test"></span></b>
                                                        <script>
                                                            function myFunction() {
                                                                var x = document.getElementById("initial_dot").value;
                                                                if (x > 50) {
                                                                    document.getElementById("test").innerHTML = " You are entering a high days on therapy, please confirm that this is correct.";
                                                                } else {
                                                                    document.getElementById("test").innerHTML = "";
                                                                }
                                                            }
                                                        </script>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">ABX Checklist</label>
                                                    <div class="col-md-9">
                                                        <select id="infection_surveillance_checklist" name="infection_surveillance_checklist" class="form-control select-chosen" onchange="showDiv(this)" size="1">
                                                            <option value="N/A">N/A</option>
                                                            <option value="Loeb">Loeb</option>
                                                            <option value="McGeer – UTI">McGeer – UTI</option>
                                                            <option value="McGeer – RTI">McGeer – RTI</option>
                                                            <option value="McGeer – GITI">McGeer – GITI</option>
                                                            <option value="McGeer –SSTI">McGeer –SSTI
                                                            </option>
                                                            <option value="Nhsn -UTI">NHSN -UTI
                                                            </option>
                                                            <option value="Nhsn -CDI/MDRO">NHSN -CDI/MDRO
                                                            </option>
                
                                                        </select>
                                                        <br />
                                                        <div id="hidden_div" style="display: none;">
                                                            <div style="text-align: right;">
                                                                <button class="save-btn btn btn-sm btn-primary" onclick="myFun()">Print ABX Checklist form</button>
                                                            </div>
                                                            <label> Criteria Met</label>
                                                            <input type="radio" id="criteria_met" name="criteria_met" value="Yes">
                                                            <label for="criteria_met">YES</label>
                                                            <input type="radio" id="criteria_met" name="criteria_met" value="No">
                                                            <label for="criteria_met">NO</label>
                
                                                        </div>
                
                                                    </div>
                                                </div>
                
                                            </div>
                
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Culture Source</label>
                                                    <div class="col-md-9">
                                                        <select id="culture_source" name="culture_source" class="form-control select-chosen" size="1">
                                                            <option value="">Please select</option>
                                                            <?php foreach ($culture_source as $category) { ?>
                                                                <option value="<?php echo $category->name; ?>"><?php echo $category->name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Organism</label>
                                                    <div class="col-md-9">
                                                        <select id="organism" name="organism" class="form-control select-chosen" size="1">
                                                            <option value="">Please select</option>
                                                            <?php foreach ($organism as $category) { ?>
                                                                <option value="<?php echo $category->name; ?>"><?php echo $category->name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Precautions</label>
                                                    <div class="col-md-9">
                                                        <select id="precautions" name="precautions" class="form-control select-chosen" size="1">
                                                            <option value="">Please select</option>
                                                            <?php foreach ($precautions as $category) { ?>
                                                                <option value="<?php echo $category->name; ?>"><?php echo $category->name; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                
                
                                            <iframe src='' id='myFrame' hidden>
                                            </iframe>
                                            <!-- <iframe src='http://localhost/IDCARE/aj.pdf' id='myFrame' frameborder='0' style='border:0;' width='300' height='300' hidden>
                                            </iframe> -->
                                            <div class="modal-header text-center"></div>
                                            <!--   <div class="col-md-12">
                                                <div class="vender_title_admin">
                                                    <h3>MD Steward Recommendation</h3>
                                                </div>
                                            </div> -->
                                            <!-- <div class="col-md-12">
                                                <div class="vender_title_admin">
                                                    <h3>
                                                        <button type="button" onclick="myFunction4()" class="btn btn-primary" data-toggle="collapse" data-target="#demo1">MD Steward Recommendation <i class="gi gi-circle_plus"></i></button>
                                                    </h3>
                                                </div>
                                            </div> -->
                                            <!-- <div id="demo1" class="collapse"> -->
                                                <!-- <div class="col-md-6" >
                                                <div class="form-group">
                                                    <label class="col-md-3 control-label">Infection Surveillance Checklist</label>
                                                    <div class="col-md-9">
                                                        <select id="infection_surveillance_checklist" name="infection_surveillance_checklist" class="form-control select-chosen" size="1">
                                                            <option value="N/A" >N/A</option>
                                                            <option value="Yes" >Yes</option>
                                                            <option value="Not Present" >Not Present</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> -->
                                                <!--  <input type="text" name="to" size="40" value="vajay8679@gmail.com" hidden> -->
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">MD Steward Response</label>
                                                        <div class="col-md-9">
                                                            <select id="md_stayward_response" name="md_stayward_response" class="form-control select-chosen" onchange="isDirty(this.value)" size="1">
                                                                <option value="">Please select</option>
                                                                <option value="Agree">Agree</option>
                                                                <option value="Disagree">Disagree</option>
                                                                <option value="NoResponse">Neutral</option>
                                                                <option value="Modify">Modify</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">New Diagnosis</label>
                                                        <div class="col-md-9">
                                                            <select id="new_initial_dx" name="new_initial_dx" onchange="isDirty(this.value)" class="form-control select-chosen" size="1">
                                                                <option value="">Please select</option>
                                                                <?php foreach ($initial_dx as $category) { ?>
                                                                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">PSA(Provider Steward Agreement)</label>
                                                        <div class="col-md-9">
                                                            <select id="psa" name="psa" class="form-control select-chosen" onchange="isDirty(this.value)" size="1">
                                                                <option value="">Please select</option>
                                                                <option value="Agree">Agree</option>
                                                                <option value="Disagree">Disagree</option>
                                                                <option value="NoResponse">No Response</option>
                                                                <option value="Neutral">Neutral</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">New Antibiotic Name</label>
                                                        <div class="col-md-9">
                                                            <select id="new_initial_rx" name="new_initial_rx" onchange="isDirty(this.value)" class="form-control select-chosen" size="1">
                                                                <option value="">Please select</option>
                                                                <?php foreach ($initial_rx as $category) { ?>
                                                                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                                                <?php } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">New Days of Therapy</label>
                                                        <div class="col-md-9">
                                                            <input type="number" onchange="isDirty(this.value)" onkeyup="myFunction1()" class="form-control" name="new_initial_dot" id="new_initial_dot" placeholder="0" style="text-align: justify;"/>
                                                            <b style="color:red"><span id="test1"></span></b>
                                                            <script>
                                                                function myFunction1() {
                                                                    var x = document.getElementById("new_initial_dot").value;
                                                                    if (x > 50) {
                                                                        document.getElementById("test1").innerHTML = " You are entering a high days on therapy, please confirm that this is correct.";
                                                                    } else {
                                                                        document.getElementById("test1").innerHTML = "";
                                                                    }
                                                                }
                                                            </script>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Additional Comment</label>
                                                        <div class="col-md-9">
                                                            <select id="additional_comment_option" name="additional_comment_option[]" onchange="isDirty(this.value)" class="form-control multiple-select select-chosen" size="1" multiple="multiple">
                                                                <option value="" disabled>Please select</option>
                                                                <option value="Does not meet Loeb/ McGeer Criteria ">Does not meet Loeb/ McGeer Criteria</option>
                                                                <option value="Consider shorter antibiotic course ">Consider shorter antibiotic course</option>
                                                                <option value="Antibiotics not recommended ">Antibiotics not recommended</option>
                                                                <option value="Other/Free Text">Other/Free Text</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Additional Comment</label>
                                                        <div class="col-md-9">
                                                            <input type="text" onchange="isDirty(this.value)" class="form-control" name="additional_comment_option[]" id="additional_comment_option" placeholder="Add your comment" />
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="space-22"></div>
                                            </div>
                                        <!-- </div> -->
                
                    <!-- <div class="modal-footer"> -->

                    <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><?php echo lang('reset_btn');?></button>
                    <button  style="background: #337ab7" type="submit" class="btn btn-sm btn-primary m-2" ><?php echo lang('submit_btn');?></button>
                </div> 

                                                <!-- <button type="button" class="btn btn-sm btn-default reset-btn" data-dismiss="modal"><?php echo lang('reset_btn'); ?></button>
                                                <button type="submit" id="submit" class="save-btn btn btn-sm btn-primary"><?php echo lang('submit_btn'); ?></button> -->
                                            </div>
                                        </form>
        


                    <div class="modal" id="myModal" style="height:400px;">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        
                            <!-- Modal Header -->
                            <div class="modal-header">
                            <h4 class="modal-title">Modal Heading</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                                    <div class="col-md-12" id="relationship">

                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-md-12">
                                                        
                                                        <label class="control-label">Relation Type</label><br>
                                                        <select class="form-control" name="relation" id="
                                                        ">
                                                            <option value="default">Select</option>
                                                            <option value="Anaesthetist">Anaesthetist</option>
                                                            <option value="Emergency_Contact">Emergency Contact</option>
                                                            <option value="Family_Member">Family Member</option>
                                                            <option value="GP">GP</option>
                                                            <option value="Insurance_Provider">Insurance Provider</option>
                                                            <option value="Next_Of_kin">Next Of kin</option>
                                                            <option value="Parent_Guardian">Parent/Guardian</option>
                                                            <option value="Paying_Account">Paying Account</option>
                                                            <option value="Pharmacy">Pharmacy</option>
                                                            <option value="Practitioner">Practitioner</option>
                                                            <option value="Referring_Clinician">Referring Clinician</option>
                                                            <option value="Social_Worker">Social Worker</option>
                                                            <option value="Spouse_Partner">Spouse/Partner</option>
                                                        </select>
                                                            
                                                    </div>
                                                </div>
                                                <br>
                                            </div>
                                        
                                        <div class="col-md-12" id="change_value" style="display:none;">

                                            <div class="show-hide" id="Anaesthetist">
                                                <form class="form-horizontal" role="form" id="Anaesthetist" method="post"  enctype="multipart/form-data">
                                                    
                                                    <input type="hidden" name="type" id="type" value="Anaesthetist">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12"> 
                                                                    
                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>


                                            <div class="show-hide" id="Emergency_Contact">
                                                <form class="form-horizontal" role="form" id="Emergency_Contact" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                
                                                    <input type="hidden" name="type" id="type" value="Emergency_Contact">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                            
                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>


                                            <div class="show-hide" id="Family_Member">
                                                <form class="form-horizontal" role="form" id="Family_Member" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                
                                                    <input type="hidden" name="type" id="type" value="Family_Member">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                
                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>


                                            <div class="show-hide" id="GP">
                                                <form class="form-horizontal" role="form" id="GP" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                
                                                    <input type="hidden" name="type" id="type" value="GP">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                

                                                                    <label class="">GP Practice</label><br>
                                                                    <span>You can search by name or postcode</span>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>


                                            <div class="show-hide" id="Insurance_Provider">
                                                <form class="form-horizontal" role="form" id="Insurance_Provider" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                
                                                    <input type="hidden" name="type" id="type" value="Insurance_Provider">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                    
                                                                    <div class="table-responsive user-setting">          
                                                                        <div style="background-color:#b4bdb4;">
                                                                            <div class="col-md-1">
                                                                                <span class="help-block m-b-none col-md-offset-3"> <i class="fa fa-question-circle" style="font-size:22px;"></i></span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                            Before connecting insurance providers to relationships, you must first add them to your Practice contacts by going to Contacts > New
                                                                            </div>
                                                                        </div>
                                                                    </div><br>

                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                

                                                                    <div class="form-group">          
                                                                        <div class="col-md-12">
                                                                            <div class="col-md-6">
                                                                                <label class="">Policy Number</label>
                                                                                <input type="text" class="form-control" name="ip_policy_number" id="ip_policy_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label class="">Authorisation code</label>
                                                                                <input type="text" class="form-control" name="ip_authorisation_code" id="ip_authorisation_code" placeholder="<?php echo lang('Phone Number');?>" />
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                <!-- </form> -->
                                            </div>



                                            <div class="show-hide" id="Next_Of_kin">
                                                <form class="form-horizontal" role="form" id="Next_Of_kin" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                    
                                                    <input type="hidden" name="type" id="type" value="Next_Of_kin">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>


                                            <div class="show-hide" id="Parent_Guardian">
                                                <form class="form-horizontal" role="form" id="Parent_Guardian" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                
                                                    <input type="hidden" name="type" id="type" value="Parent_Guardian">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>


                                            <div class="show-hide" id="Paying_Account">
                                                <form class="form-horizontal" role="form" id="Paying_Account" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                    
                                                    <input type="hidden" name="type" id="type" value="Paying_Account">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                

                                                                    <div class="table-responsive user-setting">          
                                                                        <div style="background-color:#b4bdb4;">
                                                                            <div class="col-md-1">
                                                                                <span class="help-block m-b-none col-md-offset-3"> <i class="fa fa-question-circle" style="font-size:22px;"></i></span>
                                                                            </div>
                                                                            <div class="col-md-8">
                                                                            Before connecting paying accounts to relationships, you must first add them to your Practice contacts by going to Contacts > New
                                                                            </div>
                                                                        </div>
                                                                    </div><br>

                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>


                                            <div class="show-hide" id="Pharmacy">
                                                <form class="form-horizontal" role="form" id="Pharmacy" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                
                                                    <input type="hidden" name="type" id="type" value="Pharmacy">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>


                                            <div class="show-hide" id="Practitioner">
                                                <form class="form-horizontal" role="form" id="Practitioner" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                
                                                    <input type="hidden" name="type" id="type" value="Practitioner">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>

                                            <div class="show-hide" id="Referring_Clinician">
                                                <form class="form-horizontal" role="form" id="Referring_Clinician" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                            
                                                    <input type="hidden" name="type" id="type" value="Referring_Clinician">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>

                                            <div class="show-hide" id="Social_Worker">
                                                <form class="form-horizontal" role="form" id="Social_Worker" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                
                                                    <input type="hidden" name="type" id="type" value="Social_Worker">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>

                                            <div class="show-hide" id="Spouse_Partner">
                                                <form class="form-horizontal" role="form" id="Spouse_Partner" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                                                
                                                    <input type="hidden" name="type" id="type" value="Spouse_Partner">
                                                        
                                                    <div class="col-md-12" >
                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <div class="col-md-12">
                                                                    <label class="">Contact/Company</label>
                                                                    <input type="text" class="form-control" name="relation_number" id="relation_number" placeholder="<?php echo lang('Phone Number');?>" />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="btn btn-primary save-btn">Save</button>
                                                </form>
                                            </div>
                                
                                        </div>


                                    </div>       
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                        </div>
                    </div>

                    <style>
    .user-setting{
    background-color: #5c99f130;
    padding: 23px;
    border-radius: 5px;
    border: 1px solid #5c99f130;
    }

 </style>

 
<style>
    input {
 
  line-height: 30px;
  padding: 5px; 
}
</style>


</script>
<style>
input[type="radio"], input[type="checkbox"] {
    margin: 4px 0 0;
    margin-top: 1px \9;
    line-height: normal;
    width: max-content;
}

    .save-btn{
    font-weight:700;
    color:white;
    font-size: 1.5rem;
    padding: 0.6rem 2.25rem !important;
    background-color: #337ab7 !important;
    background:none;
}
.save-btn:hover{
    color:white;
    background:#00008B !important;
}
    .reset-btn{
    font-weight:700;
    color:white;
    font-size: 1.5rem;
    padding: 0.6rem 2.25rem !important;
    background-color: #aad178 !important;
    background:none;
}
.reset-btn:hover{
    color:white;
    background:#7db831 !important;
}
.check-labels{
    font-weight:normal !important;
}
    </style>

<script>


function getStates(countryId) {
   

    $.ajax({
        url: 'appointment/getStates',
        type: 'POST',
        dataType: "json",
        data: { id: countryId },
        success: function(response) {
            $('#state_div').html(response);
            
        },
        error: function(xhr, status, error) {
            // console.error(xhr.responseText);
        }
    });
}


function getCities(stateId) {
    $.ajax({
        url: 'appointment/getCity',
        type: 'POST',
        dataType: "json",
        data: { id: stateId },
        success: function(response) {
   
    $('#city').html(response);
},
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

</script>


<script>
    $(document).ready(function(){

//hides dropdown content
$(".show-hide").hide();

//unhides first option content
// $("#Selected").show();

//listen to dropdown for change
$("#select_relation").change(function(){
  //rehide content on change
  $('.show-hide').hide();
  
  $('#'+$(this).val()).show();
});

});

$("#select_relation").change(function(selected){
if(selected)
{
document.getElementById("change_value").style.display = "";
$('.show-hide').hide();
  
  $('#'+$(this).val()).show();
} 
else
{
document.getElementById("change_value").style.display = "none";
}
}
);

</script>

<script>
$(document).ready(function() {
    $('#Anaesthetist').submit(function(event) {
        event.preventDefault();
       
        var formData = $(this).find('input[name="relation_number"]').val();
        var type = $(this).find('input[name="type"]').val();

        $('#storedData').val(formData);
        $('#storedDataType').val(type);
    });
});
</script>

<script>
$(document).ready(function() {
    $('#Emergency_Contact').submit(function(event) {
        event.preventDefault();
        
        var formData = $(this).find('input[name="relation_number"]').val();
        var type = $(this).find('input[name="type"]').val();

        $('#storedData').val(formData);
        $('#storedDataType').val(type);
    });
});
</script>

<script>
$(document).ready(function() {
    $('#Family_Member').submit(function(event) {
        event.preventDefault();
        
        var formData = $(this).find('input[name="relation_number"]').val();
        var type = $(this).find('input[name="type"]').val();

        $('#storedData').val(formData);
        $('#storedDataType').val(type);
    });
});
</script>

<script>
$(document).ready(function() {
    $('#GP').submit(function(event) {
        event.preventDefault();
        
        // Get the value from the form input
        var formData = $(this).find('input[name="relation_number"]').val();
        var type = $(this).find('input[name="type"]').val();

        // Set the value to the other input field
        $('#storedData').val(formData);
        $('#storedDataType').val(type);
    });
});
</script>

<script>
$(document).ready(function() {
    $('#Insurance_Provider').submit(function(event) {
        event.preventDefault();
        
        // Get the value from the form input
        var formData = $(this).find('input[name="relation_number"]').val();
        var policy_number = $(this).find('input[name="ip_policy_number"]').val();
        var authorisation_code = $(this).find('input[name="ip_authorisation_code"]').val();
        var type = $(this).find('input[name="type"]').val();

        // Set the value to the other input field
        $('#storedData').val(formData);
        $('#policy_number').val(policy_number);
        $('#authorisation_code').val(authorisation_code);
        $('#storedDataType').val(type);

    
    });
});
</script>

</script>

<script>
$(document).ready(function() {
    $('#Practitioner').submit(function(event) {
        event.preventDefault();
        
        var formData = $(this).find('input[name="relation_number"]').val();
        var type = $(this).find('input[name="type"]').val();

        // Set the value to the other input field
        $('#storedData').val(formData);
        $('#storedDataType').val(type);
    });
});
</script>
<script>
$(document).ready(function() {
    $('#Referring_Clinician').submit(function(event) {
        event.preventDefault();
        
        var formData = $(this).find('input[name="relation_number"]').val();
        var type = $(this).find('input[name="type"]').val();

        // Set the value to the other input field
        $('#storedData').val(formData);
        $('#storedDataType').val(type);
    });
});


</script><script>
$(document).ready(function() {
    $('#Social_Worker').submit(function(event) {
        event.preventDefault();
        
        var formData = $(this).find('input[name="relation_number"]').val();
        var type = $(this).find('input[name="type"]').val();

        // Set the value to the other input field
        $('#storedData').val(formData);
        $('#storedDataType').val(type);
    });
});
</script>


<script>
$(document).ready(function() {
    $('#Spouse_Partner').submit(function(event) {
        event.preventDefault();
        
        var formData = $(this).find('input[name="relation_number"]').val();
        var type = $(this).find('input[name="type"]').val();

        // Set the value to the other input field
        $('#storedData').val(formData);
        $('#storedDataType').val(type);
    });
});
</script>



<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->


<style>
    .user-setting{
    background-color: #5c99f130;
    padding: 23px;
    border-radius: 5px;
    border: 1px solid #5c99f130;
    }

 </style>



<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<style>
    .save-btn{
    font-weight:700;
    color:white;
    font-size: 1.5rem;
    padding: 0.6rem 2.25rem !important;
    background-color: #337ab7 !important;
    background:none;
}
.save-btn:hover{
    color:white;
    background:#00008B !important;
}
    .reset-btn{
    font-weight:700;
    color:white;
    font-size: 1.5rem;
    padding: 0.6rem 2.25rem !important;
    background-color: #aad178 !important;
    background:none;
}
.reset-btn:hover{
    color:white;
    background:#7db831 !important;
}
/* .check-labels{
    font-weight:normal !important;
} */
    </style>

    </div>
</div>

</body>
</html>
