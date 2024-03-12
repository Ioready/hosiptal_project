<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <ul class="breadcrumb breadcrumb-top">
        <li>
            <a href="<?php echo site_url('pwfpanel');?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url('business');?>">Vendor</a>
        </li>
    </ul>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
    
    
 
    
    <div class="block full">
        <div class="block-title">
            <h2><strong>Contacts</strong> Panel</h2>
        </div>
        <!-- <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data"> -->

        <!-- <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('business/vendors_add') ?>" enctype="multipart/form-data"> -->
            <div class="modal-header">
                <h3 class="modal-title"><strong> New Invoice</strong></h3>
            </div>
            
            <div class="alert alert-danger" id="error-box" style="display: none"></div>
            <div class="form-body">
                <div class="row">
                    
                    <div class="modal-header">
                        <h4 class="modal-title"><strong> Invoice details</strong></h4>
                    </div>
                <div class="show-hide" id="Membership">
                        <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                        <br><br>
                        
                    <div class="col-md-12" >
                        <div class="form-group">
                           <div class="col-md-2"></div>

                           <div class="col-md-10">


                           <div class="col-md-4">
                                    <label class="">Header</label>
                                        <select id="header" name="header" class="form-control select2" size="1" placeholder="Choose a phone type">
                                            <option value="" disabled selected>Select</option>
                                            <option value="clinic">Droitwich Knee Clinic & Bromsgrove Private Clinic</option>
                                            <!-- <option value="Yearly">Yearly</option> -->
                                              
                                        </select>
                                 </div>



                                <div class="col-md-4">
                                    <label class="">Select Date</label>
                                    <input type="datetime-local" class="form-control" name="start_date" id="start_date" placeholder="<?php echo lang('date');?>" />
                                </div>

                                <div class="col-md-4">
                                    <label class="">Practitioner (optional)</label>
                                    <select id="practitioner" name="practitioner" class="form-control select2" size="1" placeholder="Choose a phone type">
                                        <option value="" disabled selected>Select</option>
                                        <option value="Monthely">Monthely</option>
                                        <option value="Yearly">Yearly</option>
                                              
                                    </select>
                                     
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-12" >
                        <div class="form-group">
                            <div class="col-md-2">

                            </div>

                            <div class="col-md-10" style="padding-left: 32px;">
                            
                            </div>
                        </div>
                    </div>

                    <div class="modal-header">
                        <!-- <h4 class="modal-title"><strong> Billing</strong></h4> -->
                    </div>

                    <div class="col-md-12" >
                        <div class="form-group">
                           <div class="col-md-2"></div>

                           <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-4">

                                <div class="modal-header">
                                    <h4 class="modal-title"><strong> Billing</strong></h4>
                                </div>


                                    <div class="col-md-12">
                                        <label class="">Patient</label>
                                        <input type="text" class="form-control" name="patient" id="patient" placeholder="<?php echo lang('patient');?>" />
                                    </div>

                                    <div class="col-md-12">
                                        <label class="">Billing to</label>
                                        <input type="text" class="form-control" name="billing_to" id="billing_to" placeholder="<?php echo lang('billing_to');?>" />
                                    </div>

                                    <div class="modal-header">
                                    <h4 class="modal-title"><strong> Comments</strong></h4>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="">Notes (Optional)</label>
                                        <textarea class="form-control" id="note_comment" name="note_comment" rows="3"></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="">Internal notes (optional)</label>
                                        <textarea class="form-control" id="interal_comment" name="interal_comment" rows="3"></textarea>
                                    </div>

                                </div>

                                <div class="col-md-6">
                                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

                                <div class="modal-header">
                                    <h4 class="modal-title"><strong> Line items</strong></h4>
                                </div>

                                <div class="col-md-12">

                                <div class="col-md-5">
                                    <button type="button" class="btn">

                                        <span class="glyphicon glyphicon-plus-sign"></span>
                                        Add invoice item
                                    </button>
                                        <!-- <a href="#"> -->
                                        
                                        <!-- </a> -->
                                       
                                    </div>

                                        <!-- <label class="">Add invoice item</label>
                                        <input type="text" disabled class="form-control" name="supplier" id="name" placeholder="<?php echo lang('Supplier');?>" /> -->
                                    
                                        <label class="">
                                            <h5 class="modal-title"><strong> Total </strong> 0 </h5>
                                        </label>

                                    </div>
                                </div>
                                
                            </div>

                            </div>
                        </div>
                    </div>


                  
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>




        <!-- </form> -->
        
    </div>
<!-- END Datatables Content -->
</div>
<!-- END Page Content -->
<script type="text/javascript">
    $('#date_of_birth').datepicker({
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
document.getElementById('start_date').value = getCurrentDateTime();


</script>
