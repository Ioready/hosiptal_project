<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <ul class="breadcrumb breadcrumb-top">
        <li>
            <a href="<?php echo site_url('pwfpanel'); ?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url($model); ?>"><?php echo $title; ?></a>
        </li>
    </ul>
   
    <!-- END Quick Stats -->
    <?php if ($this->ion_auth->is_admin() or $this->ion_auth->is_subAdmin() or $this->ion_auth->is_facilityManager()) { ?>
        <div class="block full">


        <div class="row text-center">
                
                <div class="col-sm-6 col-md-2 mb-4">
                    <a href="<?php echo base_url() . 'index.php/patient/summary?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 10px; ">
                        <div class="widget-extra themed-background-dark"   style="background:#337ab7;">
                            <h4 style="font-size:14px; font-weight:600; color:white;">Summery</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen fw-bold"><?php echo $active;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                    <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Consultation</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Medications</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Letters and forms</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Prescriptions</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Labs</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Medications</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Medications</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url() . 'index.php/patient/communication?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Communication</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
            </div>

             <div class="row text-center">
                
                <div class="col-sm-6 col-lg-12">
                    <div class="panel panel-default">
                    <!-- <div> 
                        <ul class="nav nav-pills nav-fill nav-tabss mt-4" id="pills-tab" role="tablist" >
                            <li class="nav-item">
                            <a href="<?php echo site_url('patient'); ?>" class=" <?php echo (strtolower($this->router->fetch_class()) == "patient") ? "active" : "" ?>"><span class="sidebar-nav-mini-hide text-dark">Patient</span></a>
                            </li>
                            <li class="nav-item">
                            <a href="<?php echo base_url() . 'index.php/patient/summary?id=' . encoding($results->id); ?>" data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark">Summary</span></a>
                            </li>
                            
                            <li class="nav-item">
                            <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>"data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark"> Consultation</span></a>
                                
                            </li>
                            <li class="nav-item">
                            <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>"data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark"> Medications</span></a>
                                
                            </li>
                            <li class="nav-item">
                            <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>"data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark"> Letters and forms</span></a>
                                
                            </li>

                            <li class="nav-item">
                            <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>"data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark"> Prescriptions</span></a>
                                
                            </li>

                            <li class="nav-item">
                            <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>"data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark"> Labs</span></a>
                                
                            </li>

                            <li class="nav-item">
                            <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>"data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark"> Invoices</span></a>
                                
                            </li>

                            <li class="nav-item">
                            <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>"data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark"> Account statements</span></a>
                                
                            </li>

                            <li class="nav-item">
                            
                            <a href="<?php echo base_url() . 'index.php/patient/communication?id=' . encoding($results->id); ?>" data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark">Communication</span></a>
                            </li>

                            <li class="nav-item">
                            
                            <a href="<?php echo base_url() . 'index.php/patient/communication?id=' . encoding($results->id); ?>" data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark">Documents</span></a>
                            </li>
                            <li class="nav-item">
                            
                            <a href="<?php echo base_url() . 'index.php/patient/communication?id=' . encoding($results->id); ?>" data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark">Logs</span></a>
                            </li>
                            
                        </ul>
                    </div>  -->

                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="=" crossorigin="anonymous" />
                <div class="m-4">
                    <div class="row">
                        <div class="col-md-3 col-lg-3">
                            <div class="card l-bg-cherry">
                                <div class="card-statistic-3 m-4">
                            
                                    <div class="card-icon card-icon-large"><i class="fas fa-tint" style="font-size:3em;"></i></div> <!-- Using fa-tint icon -->
                                    <div class="mb-4">
                                        <h4 class="card-title mb-0">Blood Group</h4>
                                        <h4 class="text-center fw-bold m-2">A+</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="card l-bg-blue-dark">
                                <div class="card-statistic-3 m-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-heartbeat" style="font-size:3em;"></i></div> <!-- Using fa-heartbeat icon -->
                                    <div class="mb-4">
                                        <h4 class="card-title mb-0">Blood Pressure</h4>
                                        <h4 class="text-center fw-bold m-2">120/80</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="card l-bg-green-dark">
                                <div class="card-statistic-3 m-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-heartbeat" style="font-size:3em;"></i></div> <!-- Using fa-heartbeat icon -->
                                    <div class="mb-4">
                                        <h4 class="card-title mb-0">Hert rate</h4>
                                        <h4 class="text-center fw-bold m-2">120/80</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="card l-bg-orange-dark">
                                <div class="card-statistic-3 m-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-thermometer-half" style="font-size:3em;"></i></div> <!-- Using fa-thermometer-half icon -->
                                    <div class="mb-4">
                                        <h4 class="card-title mb-0">Temperature</h4>
                                        <h4 class="text-center fw-bold m-2">98.6°F</h4> <!-- Example temperature value in Fahrenheit -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
    <!-- Datatables Content -->
    <!-- Datatables Content -->
    <div class="block full">

          <div class="block-title">
            <?php if ($this->ion_auth->is_subAdmin()) { ?>
                <h2>
                    <a href="<?php echo base_url().'index.php/' . $this->router->fetch_class(); ?>/open_consult" class="btn btn-sm btn-primary" style="background: #337ab7">
                        <i class="gi gi-circle_plus"></i> <?php echo 'New'; ?>
                    </a></h2>
            <?php }else if($this->ion_auth->is_facilityManager()){ ?>
                    <h2>
                    <a href="<?php echo base_url() . $this->router->fetch_class(); ?>/open_consult" class="btn btn-sm btn-primary" style="background: #337ab7">
                        <i class="gi gi-circle_plus"></i> <?php echo 'New'; ?>
                    </a></h2>
                <?php } ?>
          </div>

        <div class="block-title">
            <h2><strong><?php echo 'Consultation templates';?></strong> Panel</h2>
        </div>
        <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data">
            <!-- <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> <?php echo (isset($title)) ? ucwords($title) : "" ?></h2>
            </div> -->

            <div class="alert alert-danger" id="error-box" style="display: none"></div>
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12" >
                        <div class="form-group">
            
                                <div class="col-md-12">
                                <!-- <h2>Users</h2> -->
                            <form id="timeSlotForm" action="submit.php" method="post">
                                    
                            <div style="overflow-x: auto; overflow-y: auto; width: auto; height: auto;">

                           <p>Make consultations more efficient by setting up consultation templates. Create the sections and questions needed for each type of consultation so clinicians can take notes easily.</p>
                        
                            </div>
                             <!-- <input type="date" id="date" name="date" class="form-control" required> -->
                            </div>
                            
                        </div>
                    </div>

                     <div class="col-md-12" >
                        <div class="form-group">
                            <!-- <label class="col-md-3 control-label">Doctor Name:</label> -->
                            <div class="col-md-9">
                           
                        <input type="hidden" id="doctor_name" name="doctor_name" class="form-control" value="<?php echo $userData->id; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" >
                   
                    <div class="space-22"></div>
                </div>
            </div>
            <div class="text-right">
                <!-- <button type="submit" id="submit" class="btn btn-sm btn-primary" >Save</button> -->
            </div>
            
        </form>

    

    <div class="table-responsive">
            <table id="common_datatable_users" class="table table-vcenter table-condensed table-bordered text-center">
                <thead>
                    <tr>
                        <th class="text-center" style="font-size:14px;">Sr. No</th>
                        <th class="text-center" style="font-size:14px;">Internal Name</th>
                        <th class="text-center" style="font-size:14px;">Created date</th>
                        <th class="text-center" style="font-size:14px;"><?php echo lang('action'); ?></th>
                    </tr>
                </thead>

                <tbody>


                    <?php
                    
                    if (!empty($careUnitsUser_list)) {
                        $rowCount = 0;
                        foreach ($careUnitsUser_list as $rows) {
                            $rowCount++;
                           
                    ?>


                            <tr>
                                <td class="text-center" style="font-size:14px;"><?php echo $rowCount; ?></td>
                                <td class="text-center" style="font-size:14px;"><?php echo $rows->internal_name; ?></td>
                                <td class="text-center" style="font-size:14px;"><?php echo date('m/d/Y', strtotime($rows->created_on)); ?></td>
                               
                                <td class="actions">
                                <td class="actions">
                                    <!-- <a href="javascript:void(0)" class="btn btn-default" onclick="editFn('index.php/userSettings/open_consult/edit?id=', '<?php echo encoding($rows->id) ?>', 'userSettings/open_consult');"><i class="fa fa-pencil"></i></a> -->
                                                    <a href="<?php echo base_url() . 'userSettings/edit?id=' . encoding($rows->id); ?>" data-toggle="tooltip" class="btn btn-sm  btn-default"><i class="fa fa-eye"></i></a>
                                                                        
                                    <!-- <a href="<?php echo base_url() . 'index.php/userSettings/existing_list/' . $rows->pid; ?>" target='_blank' data-toggle="tooltip" class="btn btn-default">View History</a> -->
                                    <a href="javascript:void(0)" onclick="deletePatient('<?php echo $rows->id; ?>')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>

                                </td>

                                </td>
                            </tr>


                        <?php
                        }
                        //}
                    } else {
                        $rowCount = 0;
                        foreach ($list as $rows) :
                            $rowCount++;
                        ?>
                            <tr>
                            <td><?php echo $rowCount; ?></td>
                                <td class="text-center"><?php echo $rows->internal_name; ?></td>
                                <td class="text-center"><?php echo date('m/d/Y', strtotime($rows->created_on)); ?></td>
                                    <td class="actions text-center">
                                    <!-- <a href="javascript:void(0)" class="btn btn-default" onclick="editFn('index.php/userSettings/open_consult/edit?id=' . encoding($rows->id); ?>" data-toggle="tooltip" class="btn btn-default"><i class="fa fa-pencil"></i></a> -->
                                                    <a href="<?php echo base_url() . 'userSettings/consultEdit?id=' . encoding($rows->id); ?>" data-toggle="tooltip" class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                                        
                                    <!-- <a href="<?php echo base_url() . 'index.php/userSettings/open_consult/existing_list/' . $rows->pid; ?>" target='_blank' data-toggle="tooltip" class="btn btn-default">View History</a> -->
                                    <a href="javascript:void(0)" onclick="deleteConsult('<?php echo $rows->id; ?>')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>

                                </td>
                            </tr>
                    <?php
                        endforeach;
                    }
                    ?>

                </tbody>
            </table>
            </div>
        </div>
    <!-- END Datatables Content -->
</div>
<!-- END Page Content -->
<div id="form-modal-box"></div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
  // Add click event listener to all td elements with class 'day-cell'
  $('.day-cell').click(function(){
    // Get time and day values from data attributes
    var time = $(this).data('time');
    var day = $(this).data('day');
    // Set hidden input values
    $('#selectedTime').val(time);
    $('#selectedDay').val(day);
    // Submit the form
    $('#timeSlotForm').submit();
  });
});
</script>
<script>
$(document).ready(function(){
  // Add click event listener to all td elements with class 'time-cell'
  $('.time-cell').click(function(){
    // Toggle 'highlight' class on click
    $(this).toggleClass('highlight');
  });

  // Add click event listener to all td elements with class 'day-cell'
  $('.day-cell').click(function(){
    // Toggle 'highlight' class on click
    $(this).toggleClass('highlight');
  });

  
});
</script>

<style>
.highlight {
    background-color: yellow; /* Change this to the desired highlight color */
  }

header h1,
header p {
  margin: 0;
}
footer {
  padding: 7vh 5vw;
  border-top: 1px solid #ddd;
}
aside {
  padding: 7vh 5vw;
}
.primary {
  overflow: auto;
  scroll-snap-type: both mandatory;
  height: 80vh;
}
@media (min-width: 40em) {
  main {
    display: flex;
  }
  aside {
    flex: 0 1 20vw;
    order: 1;
    border-right: 1px solid #ddd;
  }
  .primary {
    order: 2;
  }
}
table {
  border-collapse: collapse;
  border: 0;
}
th,
td {
  border: 1px solid #aaa;
  background-clip: padding-box;
  scroll-snap-align: start;
}
tbody tr:last-child th,
tbody tr:last-child td {
  border-bottom: 0;
}
thead {
  z-index: 1000;
  position: relative;
}
th,
td {
  padding: 0.6rem;
  min-width: 6rem;
  text-align: left;
  margin: 0;
}
thead th {
  position: sticky;
  top: 0;
  border-top: 0;
  background-clip: padding-box;
}
thead th.pin {
  left: 0;
  z-index: 1001;
  border-left: 0;
}
tbody th {
  background-clip: padding-box;
  border-left: 0;
}
tbody {
  z-index: 10;
  position: relative;
}
tbody th {
  position: sticky;
  left: 0;
}
thead th,
tbody th {
  background-color: #f8f8f8;
}
</style>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('click', function() {
        checkboxes.forEach(function(cb) {
        cb.parentNode.parentNode.classList.remove('selected');
        });
        if (this.checked) {
        this.parentNode.parentNode.classList.add('selected');
        const selectedTime = this.getAttribute('data-time');
        const selectedDay = this.getAttribute('data-day');
        console.log(`Selected time: ${selectedTime}, Selected day: ${selectedDay}`);
        }
    });
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
    .user-setting{
        background-color: antiquewhite;
        padding: 13px;
        border-radius: 5px;
        border: 1px solid #df9595;
    }

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
    /* width: 316px; */
    border-radius: inherit;
    font-weight: 900;
}
.nav-tab-appointment{
    margin-bottom: 0;
    padding-left: 0;
    list-style: none;
    /* width: 553px; */
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
.new-contact{
    background-color: darkslategray;
    color: white;
    font-weight: 900;
    width: 88px;
}
a.new-contact:hover{
    /* background-color: #d9416c !important; */
    color: white;
    font-weight: 900;
    width: 88px;
}
</style>

<style>
    /* Custom styles for dropdown */
.select-dropdown {
    position: relative;
}

/* Custom styles for search input */
.input-group-search {
    position: relative;
}

/* Adjust the dropdown and search input width as needed */
.select-dropdown .btn-secondary,
.input-group-search .form-control {
    width: 100%;
}



</style>
<script>

$(document).ready(function() {
    // Toggle dropdown on button click
    $('[data-testid="button__dropdown--sort-menu"]').click(function() {
        $(this).toggleClass('active');
        // Toggle dropdown menu visibility
        $(this).next('.ListViewMenu__buttonGroup___MY6Wh').toggle();
    });

    // Handle search button click
    $('.btn-search').click(function() {
        // Get search input value
        var searchTerm = $(this).closest('.input-group').find('.form-control').val();
        // Perform search operation with the searchTerm
        console.log('Search term:', searchTerm);
    });
});

</script>




