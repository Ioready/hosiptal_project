<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css">
    <style>
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
        .dropdown-menu { z-index: 1060; max-height: 200px; /* Set your desired max height */
            overflow-y: auto;}
    </style>
</head>
<body>
    <div id="page-content">
        <ul class="breadcrumb breadcrumb-top">
            <li><a href="<?php echo site_url('pwfpanel');?>">Home</a></li>
            <li><a href="<?php echo site_url('appointment');?>"><?php echo $title;?></a></li>
        </ul>

        <div class="block full" style="border-radius:12px">
            <div class="block-title">
                <?php if ($this->ion_auth->is_subAdmin()) { ?>
                    <h2 class="save-btn">
                        <a href="<?php echo base_url().'index.php/' . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary">
                            <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                        </a>
                    </h2>
                <?php } else if($this->ion_auth->is_facilityManager()) { ?>
                    <h2 class="save-btn">
                        <a href="<?php echo base_url().'index.php/' . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary">
                            <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                        </a>
                    </h2>
                <?php } ?>
            </div>

            <div class="block-title d-flex justify-content-center">
                <h2 style="font-size: 2rem !important; font-weight: 700 !important;">
                    <strong><?php echo $title;?></strong> Panel
                </h2>
            </div>

            <div class="modal-header text-center" style="display:flex;border-radius:10px; background-color:#FFFF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.5);">
                <?php if ($this->ion_auth->is_facilityManager()) { ?>
                    <div class="col-sm-3 col-lg-3 col-md-3 m-4">
                        <div class="col-md-9">
                            <select id="country" onchange="getLocations(this.value)" name="location_appointment" class="form-control select2" size="1">
                                <option value="0">View By</option>
                                <option value="practitioner"><b> Practitioner View</b></option>
                                <option value="location"><b>Location View</b></option>
                                <option value="clinic"><b>Clinic View</b></option>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-6 col-md-6 m-4">
                        <select id="departmentanddoctordata" name="departmentanddoctordata[]" class="multiselect-ui form-control dropdown-menu" multiple="multiple"></select>
                    </div>
                <?php } else if($this->ion_auth->is_subAdmin()) { ?>
                    <div class="col-sm-4 col-lg-4 col-md-4" style="margin-top:20px;margin-right:100px;">
                        <select id="appointmentType" name="appointment_id" class="form-control" onchange="fetchData()"></select>
                    </div>
                <?php } ?>
                <div class="form-group save-btn">

                <div class="col-sm-6">
                <label for="datePicker">Select Date:</label>
                <input type="date" id="datePicker" class="form-control" >
            </div>
           

                    <!-- <input type="date" id="dateChange" name="datePicker" class="form-control" onclick="filterByToday()"> -->
                </div>
            </div>
            <div class="row mt-3">
            <div class="col-sm-12">
                <p type="text" id="dateDisplay" value="">Selected Date: </p>
            </div>
        </div>
            <div class="form-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div style="overflow-x: auto; overflow-y: auto; width: auto; height: 500px;">
                                    <table class="table table-bordered text-center" id="datatable">
                                        <thead id="practitioner_id">
                                            <tr>
                                                <th class="text-center fw-bold" style="font-size:16px; background-color:#337ab7;color:white;">Time</th>
                                                <?php
                                                    $practitionerIds = [];
                                                    foreach ($practitioner as $department) {
                                                        $practitionerIds[] = $department->id;
                                                        echo '<th class="day-cell text-center" style="font-size:14px;background-color:#337ab7;color:white;" data-practitioner-id="' . $department->id . '">' . $department->name . ' ' . $department->first_name . ' ' . $department->last_name . '</th>';
                                                    }
                                                ?>
                                            </tr>
                                        </thead>
                                        <tbody id="all_appointment">
                                            <?php
                                                $start_time = strtotime('07:00');
                                                $end_time = strtotime('24:00');
                                                $interval = 1 * 60;

                                                for ($time = $start_time; $time <= $end_time; $time += $interval) {
                                                    $formatted_time = date('H:i', $time);
                                                    echo '<tr><td class="time-cell">' . $formatted_time . '</td>';
                                                    
                                                    foreach ($practitioner as $department) {
                                                        $appointment_found = false;
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
                                                        

                                                            if ($appointment->practitioner == $department->id || $appointment->theatre_clinician == $department->id) {
                                                                if ($appointment->type == 'clinic_appointment' && $formatted_time >= $appointmentTime && $formatted_time <= $end_date_appointment) {
                                                                    echo '<td class="day-cell appointment-row" id="dateDisplay" data-date="' . $appointment_date . '" data-day="' . $appointment->practitioner . '"><label style="background-color:green; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: green; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->comment_appointment . '<br>' . $appointmentTime . ' - ' . $end_date_appointment . '</span></label></td>';
                                                                    $appointment_found = true;
                                                                    break;
                                                                } elseif ($appointment->type == 'out_of_office_appointment' && $formatted_time >= $out_start_time_at && $formatted_time <= $out_end_time_at) {
                                                                    echo '<td class="day-cell appointment-row"  id="dateDisplay" data-date="' . $out_start_timeAt . '" data-day="' . $appointment->practitioner . '"><label style="background-color:pink; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: pink; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->out_of_office_comment . '<br>' . $out_start_time_at . ' - ' . $out_end_time_at . '</span></label></td>';
                                                                    $appointment_found = true;
                                                                    break;
                                                                } elseif ($appointment->type == 'availability_appointment' && $formatted_time >= $start_date_availability && $formatted_time <= $end_time_date_availability) {
                                                                    echo '<td class="day-cell appointment-row"  id="dateDisplay" data-date="' . $start_dateAvailability . '" data-day="' . $appointment->practitioner . '"><label style="background-color:#40E0D0; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: #40E0D0; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>Available<br>' . $start_date_availability . ' - ' . $end_time_date_availability . '</span></label></td>';
                                                                    $appointment_found = true;
                                                                    break;
                                                                } elseif ($appointment->type == 'theatre_appointment' && $formatted_time >= $theatre_date_time && $formatted_time <= $theatre_end_time) {
                                                                    echo '<td class="day-cell appointment-row"  id="dateDisplay" data-date="' . $theatre_dateTime . '" data-day="' . $appointment->theatre_clinician . '"><label style="background-color:#800080; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: #800080; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->theatre_comment . '<br>' . $theatre_date_time . ' - ' . $theatre_end_time . '</span></label></td>';
                                                                    $appointment_found = true;
                                                                    break;
                                                                }
                                                            }
                                                        }
                                                        if (!$appointment_found) {
                                                            echo '<td class="day-cell" data-time="' . $formatted_time . '" data-day="' . $department->id . '"></td>';
                                                        }
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
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#departmentanddoctordata').multiselect({
                includeSelectAllOption: true
            });

            $('#departmentanddoctordata').on('change', function() {
                var selectedNames = $(this).val();
                updateTableHeaders(selectedNames);
            });

            $('#dateChange').on('change', function() {
                var selectedDate = $(this).val();
                $.ajax({
                    url: 'appointment/index',
                    type: 'POST',
                    data: { selectedDate: selectedDate },
                    success: function(response) {
                        $('#all_appointment').html(response);
                    },
                    error: function(xhr, status, error) {
                        console.error(error);
                    }
                });
            });

            $('.day-cell').click(function() {
                var time = $(this).data('time');
                var day = $(this).data('day');
                $('#selectedTime').val(time);
                $('#selectedDay').val(day);
                $('#timeSlotForm').submit();
            });

            function updateTableHeaders(selectedNames) {
                var headerRow = $('#practitioner_id');
                headerRow.find('th').not(':first').remove(); // Clear existing headers except the first one

                selectedNames.forEach(function(practitionerId) {
                    var headerCell = $('th[data-practitioner-id="' + practitionerId + '"]').clone();
                    headerRow.append(headerCell);
                });

                $('#datatable tbody tr').each(function() {
                    $(this).find('td').not(':first').remove();
                    selectedNames.forEach(function(practitionerId) {
                        var dataCell = $('td[data-day="' + practitionerId + '"]').clone();
                        $(this).append(dataCell);
                    });
                });
            }
       
        });

function getLocations(view_id) {
    $.ajax({
        url: 'appointment/getLocationFilter',
        type: 'POST',
        dataType: "json",
        data: { id: view_id },
        success: function(response) {
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
}

// function filterByDate(date) {
// alert(date);
//     $('.appointment-row').hide();
//     $('.appointment-row[data-date="' + date + '"]').show();
//     document.getElementById("dateDisplay").innerText = "Selected Date: " + new Date(date).toDateString();
// }

// function filterByToday() {
//     filterByDate("<?php echo date('Y-m-d'); ?>");
// }

// function filterByNextDate() {
//     filterByDate("<?php echo date('Y-m-d', strtotime('+1 day')); ?>");
// }

// function filterByPreDate() {
//     filterByDate("<?php echo date('Y-m-d', strtotime('-1 day')); ?>");
// }

// $(document).ready(function() {
//     filterByToday();
// });
</script>

<script>
       document.getElementById('datePicker').addEventListener('change', function() {
    filterByDate(this.value);
});

function filterByDate(date) {
    const appointmentRows = document.querySelectorAll('.appointment-row');
    appointmentRows.forEach(row => {
        row.style.display = 'none';
    });

    const filteredRows = document.querySelectorAll('.appointment-row[data-date="' + date + '"]');
    filteredRows.forEach(row => {
        row.style.display = 'table-row';
    });

    document.getElementById("dateDisplay").innerText = "Selected Date: " + new Date(date).toDateString();
}

function filterByToday() {
    filterByDate("<?php echo date('Y-m-d'); ?>");
}
    </script>
</body>
</html>
