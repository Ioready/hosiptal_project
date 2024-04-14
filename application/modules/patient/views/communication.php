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
            
                <div class="col-sm-6 col-lg-12">
                
                </div>
                <div class="col-sm-6 col-lg-12">
                    <div class="panel panel-default">
                      
                        <div style="margin: 0px 0px 20px 16px;">
                            

                        <ul class="nav nav-pills nav-fill nav-tabss" id="pills-tab" role="tablist" >
                        
                                            <!-- <li class="nav-item">
                                            <a href="<?php echo site_url('patient'); ?>" class=" <?php echo (strtolower($this->router->fetch_class()) == "patient") ? "active" : "" ?>"><span class="sidebar-nav-mini-hide">Patient</span></a>
                                               
                                            <li class="nav-item">
                                            
                                            <a href="<?php echo base_url() . 'index.php/patient/summary?id=' . encoding($results->id); ?>" data-toggle="tooltip"><span class="sidebar-nav-mini-hide">Summary</span></a>

                                            
                                            </li>
                                            <li class="nav-item">
                                            <a href="<?php echo site_url('patient/consultationTemplates'); ?>" class=" <?php echo (strtolower($this->router->fetch_class()) == "consultationTemplates") ? "active" : "" ?>"><span class="sidebar-nav-mini-hide">Consultation Templates</span></a>
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab"></a>
                                            </li>

                                            <li class="nav-item">
                                            
                                            <a href="<?php echo base_url() . 'index.php/patient/communication?id=' . encoding($results->id); ?>" data-toggle="tooltip"><span class="sidebar-nav-mini-hide">Communication</span></a>
                                            </li> -->

                                            <li class="nav-item">
                                            <a href="<?php echo site_url('patient'); ?>" class=" <?php echo (strtolower($this->router->fetch_class()) == "patient") ? "active" : "" ?>"><span class="sidebar-nav-mini-hide text-dark">Patient</span></a>
                                                <!-- <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab">Practice Contacts</a> -->
                                            </li>
                                            <li class="nav-item">
                                            
                                            <a href="<?php echo base_url() . 'index.php/patient/summary?id=' . encoding($results->id); ?>" data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark">Summary</span></a>

                                            </li>
                                            <li class="nav-item">
                                            <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>"data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark"> Consultation Templates</span></a>
                                                <!-- <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab"></a> -->
                                            </li>

                                            <li class="nav-item">
                                            
                                            <a href="<?php echo base_url() . 'index.php/patient/communication?id=' . encoding($results->id); ?>" data-toggle="tooltip"><span class="sidebar-nav-mini-hide text-dark">Communication</span></a>
                                            </li>
                                            
                                        </ul>
                                        </ul>
                                        
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
            
          </div>

            <div class="block-title">
           
            </div>
             <!-- <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data"> -->
          
            <div class="alert alert-danger" id="error-box" style="display: none"></div>
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12" >
                        <div class="form-group">
                        <?php //print_r($results);die; ?>
                                <div class="col-md-12">
                                <h2><strong><?php echo $results->patient_name; ?></strong></h2>
                            
                                    
                            <div style="overflow-x: auto; overflow-y: auto; width: auto; height: auto;">

                           
                           <label for=""><i class="fa fa-home" > </i> <?php echo $results->address;?></label><br>
                           <label for=""><i class="fa fa-phone" > </i> <?php echo $results->patient_phone_number;?></label>

                            <br>
                                    
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

                </div>
                <div class="text-right">
                
                </div>
            
                </form> 
    </div>
    </div>

    <div class="block full">
            <div class="block-title">
            </div>
            <div class="row">
                <div class="col-md-10">
                <button class="btn btn-success" style="background:#0e5670;" type="button">SMS</button> 
                <button class="btn btn-default" type="button">Email</button>
                </div>

                <div class="col-md-2" style="float:right;">
                <button  type="button" style="background:white; border: 1px solid green;">All</button>
                <button type="button" style="background:white; border: 1px solid green;"><i class="fa fa-calendar" ></i>
                </div>
                
            </div>
    </div>



    <div class="block full" style="height:auto;">
            <div class="block-title">
            </div>
            <div class="row">
                <div class="col-md-12">
                <label for="">Schedule</label>
                </div>

                
            </div>
    </div>
    <div class="block full" style="height:auto;">
            <div class="block-title">
            </div>
            <div class="row">
                <div class="col-md-12">
                
                <h3><strong>Sent</strong></h3>
                    <div class="row">
                        <div class="col-md-11">
                        <label for="">Sms Message</label>
                        </div>
                        <div class="col-md-1" style="float:right;">
                        <button  type="button" style="background: #726b6b;border: 1px solid #808780;color: white;">SMS</button>
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-md-11">
                        <label for="">Sms Message</label>
                        </div>
                        <div class="col-md-1" style="float:right;">
                        <button  type="button" style="background: #726b6b;border: 1px solid #808780;color: white;">SMS</button>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- </div> -->

 


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




