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
            
        <div style=" display:flex;" class="modal-header text-center">
         
            <form action="<?php echo site_url('appointment'); ?>" name="patientForm" method="get">
            <div class="col-sm-6 col-lg-8 col-md-8" style="margin-right: 10px;">
            <select id="appointmentType" name="appointment_id" class="form-control" onchange="fetchData()">                 

                      <option value="clinic_appointment">Clinic Appointment</option>
                      <option value="theatre_appointment">Theatre Appointment</option>
                      <option value="availability">Availability</option>
                      <option value="out_of_office">Out Of Office</option>
                  </select>
              </div>
              <div class="col-sm-3 col-lg-3 col-md-3">
                <button type="submit" class="btn btn-primary">Search</button>
              </div>
            </form>
            
                <div class="form-group save-btn">

                <div class="form-group save-btn" id="dateDisplay"></div>

                <button class="btn btn-sm btn-primary" style="background:#337ab7" onclick="filterByPreDate()">Previous Date</button>
                <button class="btn btn-sm btn-primary" style="background:#337ab7" onclick="filterByToday()">Today's Appointments</button>
                <button class="btn btn-sm btn-primary" style="background:#337ab7" onclick="filterByNextDate()">Next Date Appointments</button>

            </div>

            </div>
            <!-- <div class="alert alert-danger" id="error-box" style="display: none"></div> -->
            <div class="form-body">

          
                <div class="row">
                    <div class="col-md-12" >
                        <div class="form-group">
                        <div class="col-md-12">
                <div style="overflow-x: auto; overflow-y: auto; width: auto; height: 500px;">

                  <table class="table table-bordered" id="datatable">
                      <thead>
                          <tr>
                              <th>Time</th>
                              <?php foreach($care_unit as $department) { ?>
                                  <th class="day-cell"><?php echo $department->name; ?></th>
                              <?php } ?>
                          </tr>
                      </thead>
                      <tbody>
                          <?php
                          $start_time = strtotime('07:00');
                          $end_time = strtotime('24:00');
                          $interval = 30 * 60; // 30 minutes interval
                          $index = 1;

                          for ($time = $start_time; $time <= $end_time; $time += $interval) {
                              $formatted_time = date('H:i', $time); // Format time in 24-hour format
                          ?>
                              <tr>
                                 
                                  <td class="time-cell"><?php echo $formatted_time; ?></td>
                                  <?php foreach($care_unit as $department) { 

                                      $appointment_found = false;
                                      foreach($clinic_appointment as $appointment) {
                                        
                                          $appointmentTime = date('H:i', strtotime($appointment->start_date_appointment));
                                          $end_date_appointment = date('H:i', strtotime($appointment->end_date_appointment));
                                          $comment_appointment = $appointment->comment_appointment;
                                          $address1 = $appointment->address1;
                                          $city = $appointment->city;
                                          $first_name = $appointment->first_name;
                                          $last_name = $appointment->last_name;


                                          $out_start_time_at = date('H:i', strtotime($appointment->out_start_time_at));
                                          $out_end_time_at = date('H:i', strtotime($appointment->out_end_time_at));
                                          $out_of_office_comment = $appointment->out_of_office_comment;

                                          $start_date_availability = date('H:i', strtotime($appointment->start_date_availability));
                                          $end_time_date_availability = date('H:i', strtotime($appointment->end_time_date_availability));
                                          $out_of_office_comment = $appointment->out_of_office_comment;



                                          $appointment_date = date('Y-m-d', strtotime($appointment->start_date_appointment));

                                          $out_start_timeAt = date('Y-m-d', strtotime($appointment->out_start_time_at));

                                          $start_dateAvailability = date('Y-m-d', strtotime($appointment->start_date_availability));

                                        
                                          if ($formatted_time >= $appointmentTime && $formatted_time <= $end_date_appointment && $department->id == $appointment->clinician_appointment) {
                                            $appointment_found = true;
                                            break;
                                        }


                                        if ($formatted_time >= $out_start_time_at && $formatted_time <= $out_end_time_at && $department->id == $appointment->out_of_office_practitioner) {
                                          $appointment_found = true;
                                          break;
                                      }

                                      if ($formatted_time >= $start_date_availability && $formatted_time <= $end_time_date_availability && $department->id == $appointment->availability_practitioner) {
                                        $appointment_found = true;
                                        break;
                                    }

                                      } 
                                    
                                      // Clinic Appointment

                                      if ($formatted_time >= $appointmentTime && $formatted_time <= $end_date_appointment && $department->id == $appointment->clinician_appointment) {
                                      ?>
                                      <td class="day-cell appointment-row" data-date="<?php echo $appointment_date; ?>" data-day="<?php echo $department->id; ?>">
                                            <?php 
                                                $current_date = date('Y-m-d');

                                                if ($appointment_date == $current_date) {
                                                    echo '<label style="background-color:green; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">';
                                                    echo '<span style="background-color: green; color: white;">'.'<strong>'.$first_name.' '.$last_name.'</strong>' .$address1.'<br>'.$city.'<br>'.$comment_appointment.'<br>'.$appointmentTime.' - '.$end_date_appointment.'</span>';
                                                    echo '</label>';

                                                    
                                                  } 
                                                elseif ($appointment_date == date('Y-m-d', strtotime('+1 day'))) {
                                                  echo '<label style="background-color:blue; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">';
                                                    echo '<span style="background-color: blue; color: white;">'.'<strong>'.$first_name.' '.$last_name.'</strong>'.$address1.'<br>'.$city.'<br>'.$comment_appointment.'<br>'.$appointmentTime.' - '.$end_date_appointment.'</span>';
                                                    echo '</label>';

                                                  } elseif ($appointment_date == date('Y-m-d', strtotime('-1 day'))) {
                                                    echo '<label style="background-color:red; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">';
                                                    echo '<span style="background-color: red; color: white;">'.$first_name.' '.$last_name.'<br>'.$address1.'<br>'.$city.'<br>'.$comment_appointment.'<br>'.$appointmentTime.' - '.$end_date_appointment.'</span>';
                                                    echo '</label>';
                                                  }
                                                  
                                            ?>
                                        </td>
                                      <?php }else{ ?>

                                      <!-- <td class="day-cell" data-time="<?php //echo $formatted_time; ?>" data-day="<?php echo $department->id; ?>">
                                     
                                          
                                      </td> -->
                                      <?php 
                                      }
                                      // out of office

                                  if ($formatted_time >= $out_start_time_at && $formatted_time <= $out_end_time_at && $department->id == $appointment->out_of_office_practitioner) {
                                      ?>
                                      <td class="day-cell appointment-row" data-date="<?php echo $out_start_timeAt; ?>" data-day="<?php echo $department->id; ?>">
                                            <?php 
                                                $current_date = date('Y-m-d');

                                              
                                                  if ($out_start_timeAt == $current_date) {
                                                    
                                                     
                                                      echo '<label style="background-color:pink; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">';
                                                      echo '<span style="background-color: pink; color: white;">'.'<strong>'.$first_name.' '.$last_name.'</strong>' .$address1.'<br>'.$city.'<br>'.$out_of_office_comment.'<br>'.$out_start_time_at.' - '.$out_end_time_at.'</span>';
                                                      echo '</label>';
                                                    
  
                                                    } 
                                                  elseif ($out_start_timeAt == date('Y-m-d', strtotime('+1 day'))) {
                                                   
                                                      echo '<label style="background-color:#FFBF00; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">';
                                                      echo '<span style="background-color: #FFBF00; color: white;">'.'<strong>'.$first_name.' '.$last_name.'</strong>' .$address1.'<br>'.$city.'<br>'.$out_of_office_comment.'<br>'.$out_start_time_at.' - '.$out_end_time_at.'</span>';
                                                      echo '</label>';
                                                      
  
                                                    } elseif ($out_start_timeAt == date('Y-m-d', strtotime('-1 day'))) {
                                                     
                                                      echo '<label style="background-color:#FF7F50; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">';
                                                      echo '<span style="background-color: #FF7F50; color: white;">'.'<strong>'.$first_name.' '.$last_name.'</strong>' .$address1.'<br>'.$city.'<br>'.$out_of_office_comment.'<br>'.$out_start_time_at.' - '.$out_end_time_at.'</span>';
                                                      echo '</label>';
                                                      
                                                    }
                                            ?>
                                        </td>
                                      <?php }else{ ?>

                                      <!-- <td class="day-cell" data-time="<?php //echo $formatted_time; ?>" data-day="<?php echo $department->id; ?>"> 
                                     
                                          
                                      </td> -->
                                      <?php 
                                      }
                                     
                                      // start_date_availability
                                      
                                      if ($formatted_time >= $start_date_availability && $formatted_time <= $end_time_date_availability && $department->id == $appointment->availability_practitioner) {
                                          ?>
                                          <td class="day-cell appointment-row" data-date="<?php echo $start_dateAvailability; ?>" data-day="<?php echo $department->id; ?>">
                                                <?php 
                                                    $current_date = date('Y-m-d');
    
                                                  
                                                      if ($start_dateAvailability == $current_date) {
                                                        
                                                         
                                                          echo '<label style="background-color:#40E0D0; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">';
                                                          echo '<span style="background-color: #40E0D0; color: white;">'.'<strong>'.$first_name.' '.$last_name.'</strong>' .$address1.'<br>'.$city.'<br>Available<br>'.$start_date_availability.' - '.$out_end_time_at.'</span>';
                                                          echo '</label>';
                                                        
      
                                                        } 
                                                      elseif ($start_dateAvailability == date('Y-m-d', strtotime('+1 day'))) {
                                                       
                                                          echo '<label style="background-color:#6495ED; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">';
                                                          echo '<span style="background-color: #6495ED; color: white;">'.'<strong>'.$first_name.' '.$last_name.'</strong>' .$address1.'<br>'.$city.'<br>Available<br>'.$start_date_availability.' - '.$out_end_time_at.'</span>';
                                                          echo '</label>';
                                                          
      
                                                        } elseif ($start_dateAvailability == date('Y-m-d', strtotime('-1 day'))) {
                                                         
                                                          echo '<label style="background-color:#CCCCFF; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;">';
                                                          echo '<span style="background-color: #CCCCFF; color: white;">'.'<strong>'.$first_name.' '.$last_name.'</strong>' .$address1.'<br>'.$city.'<br>Available<br>'.$start_date_availability.' - '.$out_end_time_at.'</span>';
                                                          echo '</label>';
                                                          
                                                        }
                                                ?>
                                            </td>
                                          <?php }else{ ?>
    
                                          <td class="day-cell" data-time="<?php //echo $formatted_time; ?>" data-day="<?php echo $department->id; ?>"> 
                                         
                                              
                                          </td>
                                          <?php 
                                          }
                                          ?>
    
    
                                  <?php  } ?>


                              </tr>
                          <?php $index++; } ?>
                      </tbody>
                  </table>
              </div>

                                     
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
        <!-- </form> -->
        

       
    </div>
<!-- END Datatables Content -->
</div>
<!-- END Page Content -->

<!-- <script type="text/javascript">  
                  $(document).ready(function() {  
                     $("#appointmentType").change(function(){  
                     /*dropdown post *///
                     var selectedValue = document.getElementById("appointmentType").value;  
                    //  alert(selectedValue);
                     $.ajax({  
                        url:"<?php echo  
                        base_url();?>appointment/index",  
                        data: {id:selectedValue},  
                        type: "POST",  
                        success:function(data){   -->
<!-- // alert(data);
                          // $('#datatable').dataTable().fnClearTable();
                          // $('#datatable').dataTable().fnAddData(data);
                        // $("#all_appointment").html(data);   -->
                     <!-- } , 
                  
            error: function(xhr, status, error) {
                console.error(xhr.responseText);
            }
                  });  
               });  
            });  
</script>   -->

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




