<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <ul class="breadcrumb breadcrumb-top">
        <li>
            <a href="<?php echo site_url('pwfpanel');?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url('patientAppointment');?>">Book Appointment<?php //echo $title;?></a>
        </li>
    </ul>
    <!-- END Datatables Header -->
    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Book Appointment<?php //echo $title;?></strong> Panel</h2>
        </div>
        <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data">
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Book Appointment<?php //echo (isset($title)) ? ucwords($title) : "" ?></h2>
            </div>
            <div class="alert alert-danger" id="error-box" style="display: none"></div>
            <div class="form-body">
                <div class="row" style="margin-right: 72px;">
                        <div class="form-group">

                            <label class="col-md-2 control-label">Doctor</label>
                       
                            <div class="col-md-4">
                                        
                                <select id="doctor_name" name="doctor_name" class="form-control select-chosen" onchange="getAvailableSlots()">
                                
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
                                </select>

                            </div>

                            <label class="col-md-2 control-label">Date</label>
                            <div class="col-md-4">
                           
                             <input type="date" id="date" name="date" class="form-control" required>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="margin-right: 72px;">

                   
                        <div class="form-group">
                            <label class="col-md-2 control-label">Start Time</label>
                            <div class="col-md-4">
                            <input type="time" id="time_start" name="time_start" class="form-control" required>
                            </div>
                           
                       
                            <label class="col-md-2 control-label">End Time</label>
                            <div class="col-md-4">
                            <input type="time" id="time_end" name="time_end" class="form-control" required>
                            </div>
                           
                        </div>
                    </div>
                    <div class="row" style="margin-right: 72px;">
                    
                        <input type="hidden" id="patient_name" name="patient_name" class="form-control" value="<?php echo $userData->id; ?>">
                          
                    <div class="col-md-12" >
                    <div class="form-group">
                            <label class="col-md-3 control-label">Reason for Appointment:</label>
                            <div class="col-md-9">
                        <textarea id="reason" name="reason" rows="4" cols="50" class="form-control" required></textarea>
                            </div>
                        </div>
                    <div class="space-22"></div>
                </div>

               
            </div>
            <div class="text-right">
                <button type="submit" id="submit" class="btn btn-sm btn-primary" >Save</button>
            </div>
        </form>
        

       
    </div>
<!-- END Datatables Content -->
</div>
<!-- END Page Content -->
<script>
function getAvailableSlots() {
    var doctorId = document.getElementById('doctor_name').value;
    if (doctorId) {
        // Send AJAX request to fetch available slots for the selected doctor
        $.ajax({
            url: '<?php echo base_url('index.php/' .'patientAppointment/getAvailableSlots'); ?>',
            type: 'POST',
            data: { doctor_id: doctorId },
            success: function(response) {
                // Update HTML elements with available slots data
                var slots = JSON.parse(response);
                document.getElementById('date').value = slots.date;
                document.getElementById('time_start').value = slots.start_time;
                document.getElementById('time_end').value = slots.end_time;
            },
            error: function(xhr, status, error) {
                // Handle error
                console.error(error);
            }
        });
    } else {
        // Clear values if no doctor is selected
        document.getElementById('date').value = '';
        document.getElementById('time_start').value = '';
        document.getElementById('time_end').value = '';
    }
}
</script>


<script type="text/javascript">
    // $('#date').datepicker({
    //     startView: 2,
    //     todayBtn: "linked",
    //     keyboardNavigation: false,
    //     forceParse: false,
    //     calendarWeeks: true,
    //     autoclose: true,
    //     endDate:'today'       
    // });
/*    $("#zipcode").select2({
        allowClear: true
    });*/
</script>