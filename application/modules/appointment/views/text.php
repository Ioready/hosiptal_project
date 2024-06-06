<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
 


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
    <!-- Datatables Content -->
    <div style="border-radius:12px" class="block full">
    <div class="block-title">
            <?php if ($this->ion_auth->is_subAdmin()) { ?>
                <h2 class="save-btn">
                    <a href="<?php echo base_url().'index.php/' . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a></h2>
            <?php }else if($this->ion_auth->is_facilityManager()){ ?>
                    <!-- <h2>
                    <a href="<?php echo base_url() . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a></h2> -->
                    <h2 class="save-btn">
                    <a href="<?php echo base_url().'index.php/' . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a></h2>
                <?php } ?>
        </div>


        <div class="block-title d-flex justify-content-center">
            <h2 style="font-size: 2rem !important;
    font-weight: 700 !important;" ><strong><?php echo $title;?></strong> Panel</h2>
        </div>

        <!-- <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('index.php/' .$formUrl) ?>" enctype="multipart/form-data"> -->
            
        <div style="display:flex;border-radius:10px; background-color:#FFFF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);"  class="modal-header text-center" >
         
                
        <?php if ($this->ion_auth->is_facilityManager()) { ?>


          <div class="col-sm-3 col-lg-3 col-md-3 m-4" style="margin-right: 10px;">
          <div class="col-md-9">
                                <select id="country" onchange="getLocations(this.value)" name="location_appointment" class="form-control select2" size="1">
                                    <option value="0">View By</option>
                                    <option value="practitioner"><b> Practitioner View</b></option>
                                    <option value="location"><b>Location View</b></option>
                                    <option value="clinic"><b>Clinic View</b></option>

                                </select> 
                            </div>
                        </div>
  
  
              <div class="col-sm-6 col-lg-6 col-md-6 m-4" style="margin-right: 10px;">
              <select id="departmentanddoctordata" name="departmentanddoctordata[]" class="multiselect-ui form-control dropdown-menu" multiple="multiple"> 
              
              </select>

              <script>
                $(document).ready(function() {
                $('#departmentanddoctordata').multiselect({
                    includeSelectAllOption: true,
                    });
                });
              </script>

              <style>
                .btn-default {
                    width: 200px;
                }
                .dropdown-menu {
                    padding: 10px;
                    width: 200px;
                    max-height: 200px; /* Fixed height for scrolling */
                    overflow-y: auto;  /* Enable vertical scrolling */
                }
                .dropdown-menu input[type="checkbox"] {
                    margin-right: 10px;
                    background: white;
                }
                .dropdown-menu label {
                    display: block;
                }
            </style>

              </div>


              <?php }else if($this->ion_auth->is_subAdmin()){
                ?>
                
             <div class="col-sm-4 col-lg-4 col-md-4" style="margin-top:20px;margin-right:100px;">
                    <select id="appointmentType" name="appointment_id" class="form-control" onchange="fetchData()">                 
                    <!-- <option value="" disabled>Select hospital</option> -->
                    <?php
                  // if (!empty($hospitals)) {
                  //     foreach ($hospitals as $hospital) { ?>
                          <!-- <option value="<?php echo $hospital->id; ?>"><?php echo $hospital->name; ?></option> -->
                  <?php 
                 // }
                  //}
                  ?>
                    </select>  
              </div>
            <?php } ?>
            <div class="form-group save-btn" >
          

            <input type="date" id="dateChange" name="datePicker" class="form-control">
            <!-- <button onclick="filterByPreDate()">search</button> <div id="dateDisplay">hii</div> -->
            </div>
            </div>
            <!-- <div class="alert alert-danger" id="error-box" style="display: none"></div> -->
            <div class="form-body">

          
                <div class="row">
                    <div class="col-md-12" >
                        <div class="form-group">
                        <div class="col-md-12">
                <div style="overflow-x: auto; overflow-y: auto; width: auto; height: 500px;">
                <style>
.hidden {
    display: none;
}
</style>
                  <table class="table table-bordered text-center" id="datatable">
                        <!-- <thead id="practitioner_id">
                            <tr>
                                <th class="text-center fw-bold" style="font-size:16px; background-color:#337ab7;color:white;">Time</th>
                                <?php
                                
                                if($practitioner_filter){
                                    
                                    foreach ($practitioner_filter as $department) {

                                        
                                        $practitionerIds[] = $department->id;
                                        ?>
                                        <th class="day-cell text-center" style="font-size:14px;background-color:#337ab7;color:white;">
                                            <?php echo $department->name . ' ' . $department->first_name . ' ' . $department->last_name; ?>
                                        </th>
                                        <?php }
                                }else{
                                    
                               
                                foreach ($practitioner as $department) {
                                    $practitionerIds[] = $department->id;
                                    ?>
                                    <th class="day-cell text-center" style="font-size:14px;background-color:#337ab7;color:white;">
                                        <?php echo $department->name . ' ' . $department->first_name . ' ' . $department->last_name; ?>
                                    </th>
                                <?php  } } ?>
                            </tr>
                        </thead> -->

                        <thead id="practitioner_id">
                            <?php if (!empty($practitioner_filter)) { ?>
                            <tr>
                                <th class="text-center fw-bold" style="font-size:16px; background-color:#337ab7;color:white;">Time</th>
                                <?php
                                
                                    foreach ($practitioner_filter as $department) {
                                        $practitionerIds[] = $department->id;
                                        ?>
                                        <th class="day-cell text-center" style="font-size:14px;background-color:#337ab7;color:white;">
                                            <?php echo $department->name . ' ' . $department->first_name . ' ' . $department->last_name; ?>
                                        </th>
                                        <?php
                                    }
                                } else {
                                    foreach ($practitioner as $department) {
                                        $practitionerIds[] = $department->id;
                                        ?>
                                        <th class="day-cell text-center" style="font-size:14px;background-color:#337ab7;color:white;">
                                            <?php echo $department->name . ' ' . $department->first_name . ' ' . $department->last_name; ?>
                                        </th>
                                        <?php
                                    }
                               
                                ?>

                            </tr>
                            <?php  }?>
                        </thead>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const practitionerFilter = <?php echo json_encode($practitioner_filter); ?>;
                                const practitionerHeaders = document.querySelectorAll('#practitioner_id .day-cell');
                                
                                if (practitionerFilter && practitionerFilter.length > 0) {
                                    practitionerHeaders.forEach(function(header) {
                                        header.classList.add('hidden');
                                    });
                                }
                            });
                        </script>

                        <tbody id="all_appointment">
                            <?php
                            $start_time = strtotime('07:00');
                            $end_time = strtotime('24:00');
                            $interval = 1 * 60; // 10 minutes interval

                            for ($time = $start_time; $time <= $end_time; $time += $interval) {
                                $formatted_time = date('H:i', $time); // Format time in 24-hour format
                                ?>
                                <tr>
                                    <td class="time-cell"><?php echo $formatted_time; ?></td>
                                    <?php
                                        $data_found=false;
                                        $appointment_to_show = null;
                                        foreach ($practitioner as $department) {
                                            $appointment_found = false;
                                        foreach ($all_appointment as $appointment) {
                                            $appointmentTime = date('H:i', strtotime($appointment->start_date_appointment));
                                            $end_date_appointment = date('H:i', strtotime($appointment->end_date_appointment));
                                            $appointment_date = date('Y-m-d', strtotime($appointment->start_date_appointment));
                                            
                                            $out_start_timeAt = date('Y-m-d', strtotime($appointment->out_start_time_at));
                                            $start_dateAvailability = date('Y-m-d', strtotime($appointment->start_date_availability));
                                            $theatre_dateTime = date('Y-m-d', strtotime($appointment->theatre_date_time));
                                            $out_start_time_at = date('H:i', strtotime($appointment->out_start_time_at));
                                            $out_end_time_at = date('H:i', strtotime($appointment->out_end_time_at));
                                            $start_date_availability = date('H:i', strtotime($appointment->start_date_availability));
                                            $end_time_date_availability = date('H:i', strtotime($appointment->end_time_date_availability));
                                            $theatre_date_time = date('H:i', strtotime($appointment->theatre_date_time));
                                            $theatre_time_duration = $appointment->theatre_time_duration;
                                            $durationInSeconds = $theatre_time_duration * 60;
                                            $theatre_end_time = date('H:i', strtotime($theatre_date_time . " +$durationInSeconds seconds"));
                                            $current_date = date('Y-m-d');
                                            
                                            if ($appointment->practitioner == $department->id || $appointment->theatre_clinician == $department->id) {
                                                $appointment_to_show = $appointment;
                                                $data_found=true;
                                                if ( $data_found && !$appointment_to_show->displayed&& $appointment->type == 'clinic_appointment' && $formatted_time >= $appointmentTime && $formatted_time <= $end_date_appointment && $appointment_date == $current_date) {
                                                    $appointment_found = true;
                                                    $appointment_to_show->displayed = true; 
                                                    ?>
                                                    <td class="day-cell appointment-row" data-date="<?php echo $appointment_date; ?>" data-day="<?php echo $appointment->practitioner; ?>">
                                                        <label style="background-color:green; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">
                                                            <span style="background-color: green; color: white;">
                                                                <strong><?php echo $appointment->first_name . ' ' . $appointment->last_name; ?></strong><br>
                                                                <?php echo $appointment->comment_appointment . '<br>' . $appointmentTime . ' - ' . $end_date_appointment; ?>
                                                            </span>
                                                        </label>
                                                    </td>
                                                    <?php
                                                    break;
                                                } elseif ($data_found && !$appointment_to_show->displayed&&$appointment->type == 'out_of_office_appointment' && $formatted_time >= $out_start_time_at && $formatted_time <= $out_end_time_at && $out_start_timeAt == $current_date) {
                                                    $appointment_found = true;
                                                    $appointment_to_show->displayed = true; 
                                                    ?>
                                                    <td class="day-cell appointment-row" data-date="<?php echo $out_start_timeAt; ?>" data-day="<?php echo $appointment->practitioner; ?>">
                                                        <label style="background-color:pink; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">
                                                            <span style="background-color: pink; color: white;">
                                                                <strong><?php echo $appointment->first_name . ' ' . $appointment->last_name; ?></strong><br>
                                                                <?php echo $appointment->out_of_office_comment . '<br>' . $out_start_time_at . ' - ' . $out_end_time_at; ?>
                                                            </span>
                                                        </label>
                                                    </td>
                                                    <?php
                                                    break;
                                                } elseif ($data_found && !$appointment_to_show->displayed&& $appointment->type == 'availability_appointment' && $formatted_time >= $start_date_availability && $formatted_time <= $end_time_date_availability && $start_dateAvailability == $current_date) {
                                                    $appointment_found = true;
                                                    $appointment_to_show->displayed = true; 
                                                    ?>
                                                    <td class="day-cell appointment-row" data-date="<?php echo $start_dateAvailability; ?>" data-day="<?php echo $appointment->practitioner; ?>">
                                                        <label style="background-color:#40E0D0; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">
                                                            <span style="background-color: #40E0D0; color: white;">
                                                                <strong><?php echo $appointment->first_name . ' ' . $appointment->last_name; ?></strong><br>
                                                                Available<br><?php echo $start_date_availability . ' - ' . $end_time_date_availability; ?>
                                                            </span>
                                                        </label>
                                                    </td>
                                                    <?php
                                                    break;
                                                } elseif ($data_found && !$appointment_to_show->displayed&& $appointment->type == 'theatre_appointment' && $formatted_time >= $theatre_date_time && $formatted_time <= $theatre_end_time && $theatre_dateTime == $current_date) {
                                                    $appointment_found = true;
                                                    $appointment_to_show->displayed = true; 
                                                    ?>
                                                    <td class="day-cell appointment-row" data-date="<?php echo $theatre_dateTime; ?>" data-day="<?php echo $appointment->theatre_clinician; ?>">
                                                        <label style="background-color:#800080; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">
                                                            <span style="background-color: #800080; color: white;">
                                                                <strong><?php echo $appointment->first_name . ' ' . $appointment->last_name; ?></strong><br>
                                                                <?php echo $appointment->theatre_comment . '<br>' . $theatre_date_time . ' - ' . $theatre_end_time; ?>
                                                            </span>
                                                        </label>
                                                    </td>
                                                    <?php
                                                    break;
                                                }
                                            }
                                        }
                                        if (!$appointment_found) {
                                            ?>
                                            <td class="day-cell" data-time="<?php echo $formatted_time; ?>" data-day="<?php echo $department->id; ?>"></td>
                                            <?php
                                        }
                                    }
                                    ?>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                  </table>
                

          
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
        <!-- </form> -->
        

       
    </div>
<!-- END Datatables Content -->
</div>
<!-- END Page Content -->


<script type="text/javascript">  
    $(document).ready(function() {  
        $('#departmentanddoctordata').multiselect();  
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

<script>
    // function searchData(){
    //     const x =document.getElementById('dateChange');
    //     console.log(x.value);
    // }
    function filterByToday() {
        $('.appointment-row').hide(); // Hide all appointment rows
        var today = "<?php echo date('Y-m-d'); ?>";
        $('.appointment-row[data-date="' + today + '"]').show(); // Show appointment rows for today

        var currentDate = new Date();
    document.getElementById("dateDisplay").innerText = "Selected Date: " + currentDate.toDateString();

    }

    function filterByNextDate() {
        $('.appointment-row').hide(); // Hide all appointment rows
        var nextDate = "<?php echo date('Y-m-d', strtotime('+1 day')); ?>";
        $('.appointment-row[data-date="' + nextDate + '"]').show(); // Show appointment rows for next date

        var currentDate = new Date();
    currentDate.setDate(currentDate.getDate() + 1); // Adds one day
    document.getElementById("dateDisplay").innerText = "Selected Date: " + currentDate.toDateString();
       
        
    }

    function filterByPreDate() {
        // $('.appointment-row').show(); // Show all appointment rows

        $('.appointment-row').hide(); // Hide all appointment rows
        var preDate = "<?php echo date('Y-m-d', strtotime('-1 day')); ?>";
        // alert(preDate);
        $('.appointment-row[data-date="' + preDate + '"]').show(); // Show appointment rows for next date

        var currentDate = new Date();
    currentDate.setDate(currentDate.getDate() - 1); // Subtracts one day
    document.getElementById("dateDisplay").innerText = "Selected Date: " + currentDate.toDateString();
    }

    filterByToday();
    </script>

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
.save-btn a{
    font-weight:700 !important;
    font-size: 1.2rem !important;
    padding: 0.6rem 2.25rem !important;
    background:#337ab7 !important;
}
.save-btn a:hover{
    background-color:#00008B !important;
    /* background:#00008B !important; */
}
</style>
<script type="text/javascript">
$(function() {
    $('.multiselect-ui').multiselect({
        includeSelectAllOption: true
    });
});
</script>


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


    function getLocations(view_id) {
        // console.log(view_id);
    $.ajax({
        url: 'appointment/getLocationFilter',
        type: 'POST',
        dataType: "json",
        data: { id: view_id },
        success: function(response) {
            console.log(response);

           
            $('#departmentanddoctordata').empty(); // Clear the existing options

        
            $('#departmentanddoctordata').append('<option value="">All Select</option>'); // Default option
            
            $.each(response, function(key, value) {
                var name = value.name ? value.name : '';
            var firstName = value.first_name ? value.first_name : '';
            var lastName = value.last_name ? value.last_name : '';

            if (name !== 'N/A' || firstName !== '') {

                $('#departmentanddoctordata').append('<option value="' + value.id + '">'+ ' ' + name + ' ' + firstName + ' ' + lastName + '</option>');
            }
               
            });
            $('#departmentanddoctordata').multiselect('rebuild');
        },
        error: function(xhr, status, error) {
        }
        
    });

}


</script>
   

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function() {
    $('#dateChange').on('change', function() {
        var selectedDate = $(this).val();
        // alert(selectedDate); // For debugging purposes

        $.ajax({
            
            url: 'appointment/index',
            type: 'POST',
            data: { selectedDate: selectedDate },
            success: function(response) {
                console.log(response);
                 $('#all_appointment').val(response);
                 
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    // Optionally trigger the change event on page load
    $('#dateChange').trigger('change');
});
</script>

<script>
    $(document).ready(function() {
    $('#filterButton').click(function() {
        var selectedDate = $('#selectedDate').val();
        alert(selectedDate);
        if (selectedDate) {
            $.ajax({
                url: 'appointment/filterAppointmentsByDate',  // Replace with your server endpoint
                method: 'POST',
                dataType: "json",
                data: { selectedDate: selectedDate },
                success: function(response) {
                    alert(response);
                    $('#dataContainer').html(renderData(response));
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        } else {
            alert('Please select a date.');
        }
    });

    function renderData(data) {
        var html = '';
        data.forEach(function(item) {
            html += '<div>' +
                    '<p>Appointment ID: ' + item.appointment_id + '</p>' +
                    '<p>Patient Name: ' + item.patient_name + '</p>' +
                    '<p>Appointment Date: ' + item.appointment_date + '</p>' +
                    '</div>';
        });
        return html;
    }
});

</script>


<script>
$(document).ready(function() {
    $('#departmentanddoctordata').on('change', function() {
        var departmentanddoctordata = $(this).val();
        alert(departmentanddoctordata); // For debugging purposes

        $.ajax({
            
            url: 'appointment/index',
            type: 'POST',
            data: { departmentanddoctordata: departmentanddoctordata },
            success: function(response) {
                console.log(response);
                 $('#practitioner_id').val(response);
                 
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });

    // Optionally trigger the change event on page load
    $('#dateChange').trigger('change');
});
</script>




