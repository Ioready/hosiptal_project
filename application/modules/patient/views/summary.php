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
                                            <li class="nav-item">
                                            <a href="<?php echo site_url('patient'); ?>" class=" <?php echo (strtolower($this->router->fetch_class()) == "patient") ? "active" : "" ?>"><span class="sidebar-nav-mini-hide">Patient</span></a>
                                                <!-- <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-1" role="tab">Practice Contacts</a> -->
                                            </li>
                                            <li class="nav-item">
                                            
                                            <a href="<?php echo base_url() . 'index.php/patient/summary?id=' . encoding($results->id); ?>" data-toggle="tooltip"><span class="sidebar-nav-mini-hide">Summary</span></a>
                                            </li>
                                            <li class="nav-item">
                                            <a href="<?php echo site_url('patient/consultationTemplates'); ?>" class=" <?php echo (strtolower($this->router->fetch_class()) == "consultationTemplates") ? "active" : "" ?>"><span class="sidebar-nav-mini-hide">Consultation Templates</span></a>
                                                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-2" role="tab"></a>
                                            </li>

                                            <li class="nav-item">
                                            
                                            <a href="<?php echo base_url() . 'index.php/patient/communication?id=' . encoding($results->id); ?>" data-toggle="tooltip"><span class="sidebar-nav-mini-hide">Communication</span></a>
                                            </li>

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


    <div class="block full" style="background: center;">

        <div class="block-title">
        
        </div>

        <div class="block-title">
        
        </div>



       

    <section style="background-color: #eee;">

    <div class="row">
      <div class="col-md-4 col-lg-4 mb-4 mb-lg-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
          <p class="lead mb-0"><strong>Problem</strong></p>
            <!-- <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x4</p>
            </div> -->
          </div>
          <!-- <img src="#"
            class="card-img-top" alt="Laptop" /> -->
            
          <div class="card-body">
            <div class="d-flex justify-content-between">
            <?php echo $results->initial_dx_name; ?>
              <p class="small"><a href="#!" class="text-muted"></a></p>
              <p class="small text-danger"><s></s></p>
            </div>

            <div class="d-flex justify-content-between mb-3">
             

            </div>

            <div class="d-flex justify-content-between mb-2">
             
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-4 mb-4 mb-md-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
          <p class="lead mb-0"><strong>Medical History</strong></p>
            <!-- <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x2</p>
            </div> -->
          </div>
          
          <div class="card-body">
            <div class="d-flex justify-content-between">
            <?php echo $results->initial_rx_name; ?>
              <!-- <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
              <p class="small text-danger"><s>$1199</s></p> -->
            </div>

            <div class="d-flex justify-content-between mb-3">
              <!-- <h5 class="mb-0">HP Envy</h5>
              <h5 class="text-dark mb-0">$1099</h5> -->
            </div>

            <div class="d-flex justify-content-between mb-2">
              <!-- <p class="text-muted mb-0">Available: <span class="fw-bold">7</span></p>
              <div class="ms-auto text-warning">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div> -->
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-lg-4 mb-4 mb-md-0">
        <div class="card">
          <div class="d-flex justify-content-between p-3">
            <p class="lead mb-0"><strong>Medication</strong></p>
            <!-- <div
              class="bg-info rounded-circle d-flex align-items-center justify-content-center shadow-1-strong"
              style="width: 35px; height: 35px;">
              <p class="text-white mb-0 small">x3</p>
            </div> -->
          </div>
         
          <div class="card-body">
            <div class="d-flex justify-content-between">
            <?php echo $results->organism_name; ?>
              <!-- <p class="small"><a href="#!" class="text-muted">Laptops</a></p>
              <p class="small text-danger"><s>$1399</s></p> -->
            </div>

            <div class="d-flex justify-content-between mb-3">
              <!-- <h5 class="mb-0">Toshiba B77</h5>
              <h5 class="text-dark mb-0">$1299</h5> -->
            </div>

            <div class="d-flex justify-content-between mb-2">
              <!-- <p class="text-muted mb-0">Available: <span class="fw-bold">5</span></p>
              <div class="ms-auto text-warning">
                <i class="fa fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
              </div> -->
            </div>
          </div>
        </div>
      </div>
    </div>
  
</section>


<style>
    .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
    position: relative;
    min-height: 1px;
    padding-left: 15px;
    padding-right: 15px;
}
.align-items-center {
    -ms-flex-align: center !important;
    align-items: center !important;
}.
.justify-content-center {
    -ms-flex-pack: center !important;
    justify-content: center !important;
}
.text-white {
    color: #fff !important;
}
.rounded-circle {
    border-radius: 50% !important;
}

.bg-info {
    background-color: #17a2b8 !important;
}
.mb-0, .my-0 {
    margin-bottom: 0 !important;
}
.small, small {
    font-size: .875em;
    font-weight: 400;
}
.text-white {
    color: #fff !important;
}
.p-3 {
    padding: 1rem !important;
}
.justify-content-between {
    -ms-flex-pack: justify !important;
    justify-content: space-between !important;
}
.d-flex {
    display: -ms-flexbox !important;
    display: flex !important;
}
.card-img, .card-img-top {
    border-top-left-radius: calc(0.25rem - 1px);
    border-top-right-radius: calc(0.25rem - 1px);
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    min-height: 1px;
    padding: 1.25rem;
}

.card {
    height: 200px;
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, .125);
    border-radius: 0.25rem;
}
</style>
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
    background-color: #d9416c !important;
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




