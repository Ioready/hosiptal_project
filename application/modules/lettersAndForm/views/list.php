<!-- Page content -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>



 

<style>

.btn {
    margin: 1px 0;
    background-color: #b9adad;
}

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
                
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="=" crossorigin="anonymous" />
      
    </div>

            <!-- </div> -->

    <!-- Datatables Content -->
<div class="block full">
    <div class="block-title">
        <ul class="nav nav-pills nav-fill nav-tabss" id="pills-tab" role="tablist" style="width: fit-content;">
            <li onclick="showLetters()" class="nav-item">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#letters_id" role="tab">Letters</a>
            </li>
            <li onclick="showForms()" class="nav-item">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#forms_id" role="tab">Forms</a>
            </li>
        </ul>
    </div>

    <div class="">
        <?php if ($this->ion_auth->is_facilityManager()) { ?>
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <input type="hidden" name="patient_id" id="patient_id" value="<?php echo $patient_id;?>">
                    <a href="javascript:void(0)" onclick="open_modal('<?php echo $model; ?>')" class="btn btn-sm btn-secondary nav-tab-appointment tab-pane-second active" id="letters_id_btn" style="background-color:#337ab7;">
                        <?php echo "New letter"; ?>
                    </a>

                    <button type="button" data-toggle="modal" data-target="#sidebar-right" class="btn btn-primary navbar-btn pull-left btn btn-sm btn-secondary tab-pane-second" id="forms_id_btn" style="display:none; background-color:#337ab7;">New forms</button>
                </div>
                <div class="col-sm-5 col-md-5">

                </div>
                <div class="col-sm-4 col-md-4">
                    <button style="background-color: white;border-radius: 6px;padding-left: 22px;padding-right: 22px;">All</button>
                    <button style="background-color: white;border-radius: 6px;padding-left: 12px;padding-right: 12px;">Created Date</button>
                    <button style="background-color: white;border-radius: 6px;padding-left: 12px;padding-right: 12px;">
                        <span><i class="fa fa-light fa-border-all"></i></span>
                    </button>
                </div>
            </div>
        <?php } ?>
    </div>
    <br><br>

    <!-- Letters list -->
    <div class="row nav-tab-appointment tab-pane-second-list active" id="letters_id">
        <span class="" >
        <?php foreach($list as $folder){ ?>
            <div class="col-sm-12 col-md-12" style="padding: 15px; border-block-end-style: inset;">
                <input type="hidden" name="folder_id" id="folder_id" value="<?php echo $folder->id;?>">
                <span><b><?php echo $folder->template_id; ?></b></span><br>
                <span>Created <?php echo date_format(date_create($folder->create_date), 'd/m/Y'); ?> | <strong><?php echo $folder->first_name . ' ' . $folder->last_name; ?></strong></span>
                <span style="float:right;" ><span style="background-color:#e9dab9; border-radius: 6px;"> &nbsp;<?php echo $folder->type; ?>&nbsp;&nbsp;</span>&nbsp;&nbsp;
               
                            <div class="dots" id="dotsMenu<?php echo $folder->id;?>">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>

                            <div class="menu" id="menuDropdown<?php echo $folder->id;?>">
                                <div>
                                    <ul>
                                        <li><a href="#" class="link">Update Status</a></li>
                                        <li><a href="#" class="link">Edit</a></li>
                                        <li><a href="#" class="link">Delete</a></li>
                                        <li><a href="#" class="link">Share</a></li>
                                        <li><a href="#" class="link">Email</a></li>
                                        <li><a href="#" class="link">Duplicates</a></li>
                                    </ul>
                                </div>
                            </div>
</span>
               

            </div>
            
            <?php } ?>

               
        </span>
    </div>

    <!-- Forms list -->
    <div class="row nav-tab-appointment tab-pane-second-list" id="forms_id" style="display: none;">
    <span class="" >
        <?php foreach($form_list as $folder){ ?>
        
            <div class="col-sm-12 col-md-12" style="padding: 15px; border-block-end-style: inset;">
                <input type="hidden" name="folder_id" id="folder_id" value="<?php echo $folder->id;?>">
                <span><b><?php echo $folder->title; ?></b></span><br>
                <span>Created <?php echo date_format(date_create($folder->create_date), 'd/m/Y'); ?> | <strong><?php echo $folder->first_name . ' ' . $folder->last_name; ?></strong></span>
                <!-- <span style="float:right;">...</span> -->

                <!-- <span id="dropdownMenuButton" class="dropdown-toggle" style="cursor: pointer; float:right;">...</span> -->
    

                            <div class="dots" id="dotsMenu<?php echo $folder->id;?>" style="cursor: pointer; float:right;">
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>

                            <div class="menu" id="menuDropdown<?php echo $folder->id;?>">
                                <div >
                                    <ul>
                                        
                                    <li> <a href="<?php echo base_url().'index.php/lettersAndForm/editBookingForm?id=' . encoding($patient_id) . '&form_id=' . encoding($folder->id); ?>" class="link">Edit</a></li>

                                        <li>
                                        <a href="<?php echo base_url().'index.php/lettersAndForm/deleteBookingForm?id=' . encoding($patient_id) . '&form_id=' . encoding($folder->id); ?>" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>

                                            <!-- <a href="<?php //echo base_url().'index.php/lettersAndForm/deleteBookingForm?id=' . encoding($patient_id) . '&form_id=' . encoding($folder->id); ?>" class="link">Delete</a> -->
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>

            </div>

       
        <?php } ?>
        </span>
    </div>
</div>
</div>

<!-- JavaScript to Toggle between Lists -->
<script>
function showLetters() {
    document.getElementById('letters_id').style.display = 'block';
    document.getElementById('forms_id').style.display = 'none';
    document.getElementById('letters_id_btn').style.display = 'block';
    document.getElementById('forms_id_btn').style.display = 'none';
}

function showForms() {
    document.getElementById('letters_id').style.display = 'none';
    document.getElementById('forms_id').style.display = 'block';
    document.getElementById('letters_id_btn').style.display = 'none';
    document.getElementById('forms_id_btn').style.display = 'block';
}
</script>

<!-- END Page Content -->
<div id="form-modal-box"></div>





<!-- Sidebar Right -->
<div class="modal fade right" id="sidebar-right" tabindex="-1" role="dialog">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" style="float:right;"><span aria-hidden="true">&times;</span></button><br>
<h3 class="modal-title"> <strong>&nbsp;&nbsp;  Hospital Booking Forms </strong></h3>
</div>
<div class="modal-body">



<hr>

<div class="form-group hide">
<div class="input-group">
<input class="form-control" placeholder="Search">
<span class="input-group-btn">
<button class="btn btn-default" type="button"><i class="fa fa-fw fa-search"></i></button>
</span>
</div>
</div>

<div class="form-group has-feedback">
<input type="text" class="form-control" id="search-right" placeholder="Search">
<span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
</div>

<hr>

<div class="btn-group-vertical center-block">

<span><strong> All Forms</strong></span>


<div class="toggled-off" style="border-block-end-style: inset;">
<i class="fa fa-angle-down fa-fw" style="float:right"></i> 
  <i class="fa fa-angle-up fa-fw" style="float:right"></i> 

  <div class="toggle-title">
  <h6><strong> BMI(Circle) - The Alexandra Hospital </strong></h6>
  </div>
  
  <!-- end toggle-title --->
  <div class="toggle-content"> 
  <p><a href="<?php echo base_url() . 'index.php/lettersAndForm/bookingForm?id=' . encoding($patient_id); ?>" class="toggle-content-a"> <i class="fa fa-regular fa-file-excel"></i> booking form</a>
    </p><p>
    <a href="" class="toggle-content-a"> <i class="fa fa-regular fa-file-excel"></i> Imaging Requires Form</a>
    </p>
  </div>
  
  <!-- end section-toggle--> 
   
</div>
<!-- end toggle-on-->

<div class="toggled-off" style="border-block-end-style: inset;">
<i class="fa fa-angle-down fa-fw" style="float:right"></i> 
<i class="fa fa-angle-up fa-fw" style="float:right"></i> 

  <div class="toggle-title">
    
    <h6><strong>Alliance Medical</strong></h6>
   
  </div>
  <!-- end section-title --->
  <div class="toggle-content"> 
    <p>Show content on click. Set class to start with "toggled-off"</p>
  </div>
  <!-- end toggle-content --> 
</div>
<!-- end toggle-on-->


<div class="toggled-off" style="border-block-end-style: inset;">
<i class="fa fa-angle-down fa-fw" style="float:right"></i> 
<i class="fa fa-angle-up fa-fw" style="float:right"></i> 
  <div class="toggle-title">
    
  <h6><strong>Automation test clinic</strong></h6>
  </div>
  <!-- end section-title --->
  <div class="toggle-content"> 
    <p>Show content on click. Set class to start with "toggled-off"</p>
  </div>
  <!-- end toggle-content --> 
</div>
<!-- end toggle-on-->







</div>

</div>
</div>
</div>
</div>
</div>
<script>
        // toggle class show hide text section
$(document).on('click', '.toggle-title', function() {
    $(this).parent()
        .toggleClass('toggled-on')
        .toggleClass('toggled-off');
});

</script>
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
            $(".tab-pane-second-list").hide();
            var targetPaneId = $(this).attr("href");
            $(targetPaneId).show();
        });

        $(".nav-tab-appointment .nav-link-second").click(function() {
            $(".nav-tab-appointment .nav-link-second").removeClass("active");
            $(this).addClass("active");
            $(".tab-pane-second").hide();
            $(".tab-pane-second-list").hide();

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
