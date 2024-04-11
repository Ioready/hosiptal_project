<!-- Page content -->
<div id="page-content">
    <ul class="breadcrumb breadcrumb-top">
        <li>
            <a href="<?php echo site_url('pwfpanel'); ?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url($parent); ?>"><?php echo $title; ?></a>
        </li>
    </ul>

    <?php if ($this->ion_auth->is_admin() or $this->ion_auth->is_subAdmin() or $this->ion_auth->is_facilityManager()) { ?>
        <div class="block full">
            <div class="row text-center">
                <!--  <div class="col-sm-6 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="msg"></div>
                        <?php
                        $message = $this->session->flashdata('success');
                        if (!empty($message)) :
                        ?><div class="alert alert-success">
                                <?php echo $message; ?></div><?php endif; ?>
                        <?php
                        $error = $this->session->flashdata('error');
                        if (!empty($error)) :
                        ?><div class="alert alert-danger">
                                <?php echo $error; ?></div><?php endif; ?>
                        <form action="<?php echo site_url('task/patientImport'); ?>" name="patientFormExport" method="post" enctype="multipart/form-data">
                            <div class="col-sm-6 col-lg-2">
                                <div class="text-left">Upload File:</div>
                            </div>
                            <div class="col-sm-6 col-lg-10">
                                <div class="text-left text-danger">Note: First, select care unit to upload the file</div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <select id="care_unit1" name="careUnit" class="form-control select-2" onchange="getPatient()">
                                    <option value="">Select Care Unit</option>
                                    <?php
                                    if (isset($careUnit) && !empty($careUnit)) {
                                        foreach ($careUnit as $row) {
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
                                            ?>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-4 hidetext">
                                <input type="file" name="patientFile" class="form-control" accept=".csv"/>
                            </div>
                            <div class="col-sm-6 col-lg-1 hidetext">
                                <button type="submit" class="btn btn-info btn-sm" value="Import"><fa class="fa fa-file-pdf-o"></fa> Import</button>
                            </div>
                            <div id="labelError"></div>
                        </form>
                    </div>
                </div></div> -->

                <div class="col-sm-6 col-lg-12 mt-4">
                    <div class="panel panel-default">
                        <!-- <div style="margin: 0px 0px 20px 16px;">
                            <div class="col-sm-6 col-lg-2">
                                <div class="text-left">Download File:</div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="text-left text-danger">Note: select care unit to download specific care unit's file or , overall file will be downloaded</div>
                            </div>
                            <?php
                            $message = $this->session->flashdata('success');
                            if (!empty($message)) :
                            ?><div class="alert alert-success col-sm-6 col-lg-2" style="margin: 2px 5px 5px 3.5%;">
                                    <?php echo $message; ?></div><?php endif; ?>
                            <?php
                            $error = $this->session->flashdata('error');
                            if (!empty($error)) :
                            ?><div class="alert alert-danger col-sm-6 col-lg-2" style="margin: 2px 5px 5px 3.5%;">
                                    <?php echo $error; ?></div><?php endif; ?>
                        </div> -->


                        <div class="p-4">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="text-left fw-bold">Download File:</div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-left text-danger">Note: select care unit to download specific care unit's file or, overall file will be downloaded</div>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        $message = $this->session->flashdata('success');
                        if (!empty($message)) :
                        ?>
                        <div class="alert alert-success"><?php echo $message; ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        $error = $this->session->flashdata('error');
                        if (!empty($error)) :
                        ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>


                        <div class="panel-body">
                            <form action="<?php echo site_url('tasks'); ?>" name="patientForm" method="get">

                            <div class="col-lg-3">
                                    <?php // print_r($careUnitsUser);die;
                                    ?>
                                    <select id="care_unit" name="careUnit" class="form-control select-2" onchange="getPatient()">
                                        <option value="">Select Care Unit</option>
                                        <?php
                                        if (!empty($careUnitsUser)) {


                                            if (isset($careUnitsUser) && !empty($careUnitsUser)) {
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
                                            if (isset($careUnit) && !empty($careUnit)) {
                                                foreach ($careUnit as $row) {
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
                                        }
                                        ?>
                                    </select>
                                </div>
                                <!-- <div class="col-sm-12 col-lg-2">
                                    <input type="text" class="form-control" name="date" id="date" placeholder="from date" />
                                </div>
                                <div class="col-sm-12 col-lg-2">
                                    <input type="text" class="form-control" name="date1" id="date1" placeholder="to date" />
                                </div> -->


                                <?php
                                if (isset($careUnitID)) {
                                    $careUnitID = (!empty($careUnitID)) ? $careUnitID : '';
                                }
                                ?>
                                <!-- month year download -->
                                <!-- <form action="<?php echo site_url('task/monthYearPatientExport'); ?>" name="patientFormExport" method="get"> -->
                                <div>
                                <div class="col-lg-3">
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
                                    <div class="col-lg-2">
                                    <select class="form-control" name="year" id="year">
                                            <?php
                                            // Get the current year
                                            $current_year = date("Y");

                                            // Loop through years from 10 years ago to 10 years in the future
                                            for ($i = $current_year - 10; $i <= $current_year + 10; $i++) {
                                                // Check if the current iteration is the current year
                                                $selected = ($i == $current_year) ? 'selected' : '';

                                                // Output each year as an option
                                                echo "<option value='$i' $selected>$i</option>";
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="col-sm-6 col-lg-1" style="margin-right: 8px;">
                                        <input type="submit" name="search" class="btn btn-primary btn-sm save-btn" value="Search" />
                                    </div>
                                    

                                    <form action="<?php echo site_url('task'); ?>" name="patientFormExport" method="get">
                                <div class="col-sm-12 col-lg-2">
                                    <button type="submit" class="btn btn-primary btn-sm save-btn">
                                        <fa class="fa fa-undo"></fa> Reset
                                    </button>
                                </div>
                            </form>

                                   
                                </div>
                                <!-- </form> -->

                                <!-- <div class="col-sm-12 col-lg-1">
                                    <button type="submit" value="Export" name="export" class="btn btn-success btn-sm">
                                        <fa class="fa fa-file-pdf-o"></fa> Export
                                    </button>
                                </div> -->
                            </form>

                            <!-- <div class="col-sm-12 col-lg-3" style="margin-left:-20px;margin-right:-30px;">
                                        <button type="submit" class="btn btn-success btn-sm" value="Export" name="export">
                                            <fa class="fa fa-file-pdf-o"></fa> Download Monthly Surveillance List
                                        </button>
                                    </div> -->

                                    <div class="col-sm-12 col-lg-12 mt-4" style="margin-left:-20px;margin-right:-12px; ">
                                        <button type="submit" class="btn btn-success  fw-bold btn-sm" value="Export" name="export">
                                            <fa class="fa fa-file-pdf-o"></fa> Download Monthly Surveillance List
                                        </button>
                                    </div>


                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>
    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong><?php echo $title; ?></strong> Panel</h2>
            <h2>
                <!-- <a href="javascript:void(0)" onclick="open_modal('<?php
                                                                    echo 'index.php/'.$model; ?>')" class="btn btn-sm btn-primary save-btn">
                    <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                </a> -->
                <!-- <a href="<?php echo base_url() . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary save-btn">
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a></h2> -->
                    <a href="#" class="btn btn-sm btn-primary save-btn" data-toggle="modal" data-target="#myModal" >
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a>
                    <!-- <button class="save-btn" type="button" style="border" data-toggle="modal" data-target="#myModal" ><?php echo $title; ?></button> -->
            </h2>


            <div class="modal" id="myModal">
            <div class="modal-dialog modal-lg">
        <div class="modal-content">
        <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('tasks/add') ?>" enctype="multipart/form-data">
    <div class="modal-header text-center">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h2 class="modal-title fw-bold"><i class="fa fa-pencil"></i> <?php echo (isset($title)) ? ucwords($title) : "" ?></h2>
    </div>
    <div class="modal-body">
        <div class="alert alert-danger" id="error-box" style="display: none"></div>
        <div class="form-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Task Name</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="task_name" id="task_name" placeholder="Task Name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Assign to</label>
                        <div class="col-md-9">
                            <select id="assign_to" name="assign_to" class="form-control select-chosen" size="1" onchange='getPatientId(this.value)'>
                                <option value="">Please select</option>
                                <?php
                                if (!empty($doctors)) {
                                    foreach ($doctors as $doctor) {
                                        ?>
                                        <option value="<?php echo $doctor->id; ?>"><?php echo $doctor->first_name . ' ' . $doctor->last_name; ?></option>
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
                        <label class="col-md-3 control-label">Patient</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="patient_name" id="patient_name" placeholder="Patient Name" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label"><?php echo 'Due Date'; ?></label>
                        <div class="col-md-9">
                            <input type="datetime-local" class="form-control" name="due_date" id="due_date" placeholder="<?php echo 'due date'; ?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Type</label>
                        <div class="col-md-9">
                            <select id="type" name="type" class="form-control select-chosen" size="1">
                                <?php
                                if (!empty($care_unit)) {
                                    if (!empty($care_unit)) {
                                        foreach ($care_unit as $row) {
                                            $select = "";
                                            if (isset($care_unit)) {
                                                if ($care_unit == $row->id) {
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
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="col-md-3 control-label" style="padding-left: 40px;">Priority</label>
                        <div class="col-md-9">
                            <label class="priority-label" data-priority="High">
                                <input type="radio" class="form-control priority" name="priority" value="High" style="height: 1px; border: aliceblue;" />
                                <i class="fa fa-flag-o fa_custom"></i> High
                            </label>
                            <label class="priority-label pl" data-priority="Medium">
                                <input type="radio" class="form-control priority" name="priority" value="Medium" style="height: 1px; border: aliceblue;" />
                                <i class="fa fa-flag-o fa_custom"></i> Medium
                            </label>
                            <label class="priority-label pl" data-priority="Low">
                                <input type="radio" class="form-control priority" name="priority" value="Low" style="height: 1px; border: aliceblue;" />
                                <i class="fa fa-flag-o fa_custom"></i> Low
                            </label>
                            <label class="priority-label pl" data-priority="Unset">
                                <input type="radio" class="form-control priority" name="priority" value="Unset" style="height: 1px; border: aliceblue;" />
                                <i class="fa fa-flag-o fa_custom"></i> Unset
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="col-md-1 control-label" style="padding-left: 40px;">Comment</label>
                        <div class="col-md-11" style="padding-left: 51px;">
                            <textarea class="form-control" name="task_comment" id="task_comment" placeholder="0000" row="5" cols="100"> </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button type="button"  class="btn btn-sm btn-danger me-2"   data-dismiss="modal"><?php echo lang('reset_btn'); ?></button>
        <button type="submit" id="submit" class="btn btn-sm btn-primary mt-2" style="background:#337ab7;"><?php echo lang('submit_btn'); ?></button>
    </div>
</form>

        </div> <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
                    </div>




        </div>

        <div class="table-responsive">
            <table id="common_datatable_menucat" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th style="background-color:#DBEAFF;font-size:1.3rem;width:40px !important">Sr. No</th>
                        <th style="background-color:#DBEAFF;font-size:1.3rem">Priority</th>
                        
                        <th style="background-color:#DBEAFF;font-size:1.3rem">Task Name</th>
                        <th style="background-color:#DBEAFF;font-size:1.3rem">Assign To</th>
                        <th style="background-color:#DBEAFF;font-size:1.3rem">Patient Name</th>
                        <th style="background-color:#DBEAFF;font-size:1.3rem">Type</th>
                        <th style="background-color:#DBEAFF;font-size:1.3rem">Task Comment</th>
                        <th style="background-color:#DBEAFF;font-size:1.3rem">Due Date</th>
                        <!-- <th style="background-color:#DBEAFF;font-size:1.3rem">MD Steward</th> -->
                        <th style="background-color:#DBEAFF;font-size:1.3rem"><?php echo lang('action'); ?></th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    //if(!empty($careUnitsUser_list)){


                    if (!empty($careUnitsUser_list)) {
                        $rowCount = 0;
                        foreach ($careUnitsUser_list as $rows) {
                            $rowCount++;
                            // print_r($rows);die;

                    ?>


                            <tr>
                                <td><?php echo $rowCount; ?></td>
                                <td><?php if($rows->priority =="High"){ 
                                    ?>
                                    <label class="priority-label" data-priority="High">
                                    <i class="fa fa-flag-o fa_custom"></i>
                                    <?php
                                    echo 'H'; 
                                } else if($rows->priority =="Low"){
                                    ?>
                                    <label class="priority-label" data-priority="Low">
                                    <i class="fa fa-flag-o fa_custom"></i>
                                    <?php
                                echo 'L';
                                }else if($rows->priority =="Medium"){
                                    ?>
                                    <label class="priority-label" data-priority="Medium">
                                    <i class="fa fa-flag-o fa_custom"></i>
                                    <?php
                                    
                                    echo 'M';
                                } ?></td>

                                <td><?php echo $rows->task_name; ?></td>
                                <td><?php echo $rows->f_name. ' '.$rows->l_name; ?></td>
                                <td><?php echo $rows->patient_name; ?></td>
                                <td><?php echo $rows->type_name; ?></td>
                                <td><?php echo $rows->task_comment; ?></td>
                                <td><?php echo $rows->culture_source_name; ?></td>

                                <td class="actions">
                                    <!-- <a href="javascript:void(0)" class="btn btn-default" onclick="editFn('index.php/Tasks', 'edit_patient', '<?php echo encoding($rows->task_id) ?>', 'tasks');"><i class="fa fa-pencil"></i></a> -->
                                    <!--                 <a href="<?php echo base_url() . 'tasks/edit?id=' . encoding($rows->task_id); ?>" data-toggle="tooltip" class="btn btn-default"><i class="fa fa-eye"></i></a> -->
                                    <!--      <a href="<?php echo base_url() . 'tasks/edit_parient?id=' . encoding($rows->task_id); ?>" data-toggle="tooltip" class="btn btn-default" target="_blank"><i class="fa fa-pencil"></i></a>-->
                                  
                                    <!-- <a href="<?php echo base_url() . '/tasks/existing_list/' . $rows->pid; ?>" target='_blank' data-toggle="tooltip" class="btn btn-default">View History</a> -->
                                    <!-- <a href="javascript:void(0)" onclick="deletePatient('<?php echo $rows->task_id; ?>')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a> -->

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
                                <td><?php if($rows->priority =="High"){ 
                                    ?>
                                    <label class="priority-label" data-priority="High">
                                    <i class="fa fa-flag-o fa_custom"></i>
                                    <?php
                                    echo 'H'; 
                                } else if($rows->priority =="Low"){
                                    ?>
                                    <label class="priority-label" data-priority="Low">
                                    <i class="fa fa-flag-o fa_custom"></i>
                                    <?php
                                echo 'L';
                                }else if($rows->priority =="Medium"){
                                    ?>
                                    <label class="priority-label" data-priority="Medium">
                                    <i class="fa fa-flag-o fa_custom"></i>
                                    <?php
                                    
                                    echo 'M';
                                } ?></td>

                                <td><?php echo $rows->task_name; ?></td>
                                <td><?php echo $rows->f_name. ' '.$rows->l_name; ?></td>
                                <td><?php echo $rows->patient_name; ?></td>
                                <td><?php echo $rows->type_name; ?></td>
                                <td><?php echo $rows->task_comment; ?></td>
                                <td><?php echo $rows->culture_source_name; ?></td>
                                
                                
                                <td class="actions">
                                    
                                    <a href="javascript:void(0)" class="btn btn-default" onclick="editFn('index.php/tasks', 'edit_patient', '<?php echo encoding($rows->task_id) ?>', 'tasks');"><i class="fa fa-pencil"></i></a>
                                    <a href="<?php echo base_url() . 'index.php/tasks/existing_list/' . $rows->task_id; ?>" target='_blank' data-toggle="tooltip" class="btn btn-default">View History</a>
                                    <a href="javascript:void(0)" onclick="deletePatient('<?php echo $rows->task_id; ?>')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>

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
</div>
<!-- END Datatables Content -->
</div>
<!-- END Page Content -->
<div id="form-modal-box"></div>
</div>

<style>
.priority-label {
    cursor: pointer;
}

.priority-label:hover i {
    color: blue; /* Change color on hover */
}

.priority-label.active i {
    color: green; /* Change color when active */
}

.priority{
    width: 20px;
}
.pl{
    padding-left: 25px;
}

.priority-label[data-priority="High"] i {
    color: red; /* Set color for High priority */
    
}

.priority-label[data-priority="Medium"] i {
    color: orange; /* Set color for Medium priority */
}

.priority-label[data-priority="Low"] i {
    color: green; /* Set color for Low priority */
}

.priority-label[data-priority="Unset"] i {
    color: grey; /* Set color for Unset priority */
}
.save-btn{
    font-weight:700;
    font-size: 1.1rem;
    padding: 0.6rem 2.25rem;
    background:#337ab7;
}
.save-btn:hover{
    /* background-color:#00008B !important; */
    background:#00008B !important;
}

</style>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .modal-footer .btn+.btn {
        margin-bottom: 5px !important;
        margin-left: 5px;
    }

    span.select2.select2-container.select2-container--default {
        width: 100% !important;
    }

    span.select2-selection.select2-selection--multiple {
        min-height: auto !important;
        overflow: auto !important;
        border: solid #ddd0d0 1px;
        color: black;
    }

    .select2-container--default .select2-selection--multiple .select2-selection__choice {
        background-color: #d9416c;
    }
</style>
<script>
    function myFunction4() {
        var txt;
        if (confirm("You are about to ADD the MD Steward recommendations, please confirm or cancel.")) {
            //txt = "You pressed OK!";
            document.getElementById("demo1").style = 'display:block';

        } else {
            //txt = "You pressed Cancel!";
            document.getElementById("demo1").style = 'display:none';
        }
    }


    function showDiv(select) {
        if (select.value == "Loeb" || select.value == "Nhsn -UTI" || select.value == "Nhsn -CDI/MDRO" || select.value == "McGeer – UTI" || select.value == "McGeer – RTI" || select.value == "McGeer – GITI" || select.value == "McGeer –SSTI") {
            document.getElementById('hidden_div').style.display = "block";
        } else {
            document.getElementById('hidden_div').style.display = "none";
        }
    }



    function myFun() {
        event.preventDefault();
        if ($("#infection_surveillance_checklist").val() != "N/A" && $("#infection_surveillance_checklist").val() == "Loeb") {
            alert("Printable ABX Checklist form will appear after clicking OK button. Please complete and submit the form.");
            window.open("<?php echo base_url(); ?>application/modules/patient/views/form1.html", "_blank")
        }

        if ($("#infection_surveillance_checklist").val() != "N/A" && $("#infection_surveillance_checklist").val() == "McGeer – UTI") {
            alert("Printable ABX Checklist form will appear after clicking OK button. Please complete and submit the form.");
            window.open("<?php echo base_url(); ?>application/modules/patient/views/form2.html", "_blank")
        }
        if ($("#infection_surveillance_checklist").val() != "N/A" && $("#infection_surveillance_checklist").val() == "McGeer – RTI") {
            alert("Printable ABX Checklist form will appear after clicking OK button. Please complete and submit the form.");
            window.open("<?php echo base_url(); ?>application/modules/patient/views/form3.html", "_blank")
        }
        if ($("#infection_surveillance_checklist").val() != "N/A" && $("#infection_surveillance_checklist").val() == "McGeer – GITI") {
            alert("Printable ABX Checklist form will appear after clicking OK button. Please complete and submit the form.");
            window.open("<?php echo base_url(); ?>application/modules/patient/views/form4.html", "_blank")
        }
        if ($("#infection_surveillance_checklist").val() != "N/A" && $("#infection_surveillance_checklist").val() == "McGeer –SSTI") {
            alert("Printable ABX Checklist form will appear after clicking OK button. Please complete and submit the form.");
            window.open("<?php echo base_url(); ?>application/modules/patient/views/form5.html", "_blank")
        }
        if ($("#infection_surveillance_checklist").val() != "N/A" && $("#infection_surveillance_checklist").val() == "Nhsn -UTI") {
            alert("Printable ABX Checklist form will appear after clicking OK button. Please complete and submit the form.");
            window.open("<?php echo base_url(); ?>front_assets/images/57.114_uti_blank.pdf")
        }
        if ($("#infection_surveillance_checklist").val() != "N/A" && $("#infection_surveillance_checklist").val() == "Nhsn -CDI/MDRO") {
            alert("Printable ABX Checklist form will appear after clicking OK button. Please complete and submit the form.");
            window.open("<?php echo base_url(); ?>front_assets/images/57.128_LabIDEvent_BLANK")
        }

    }

    $('input[type=radio][name="criteria_met"]').prop('checked', false);
</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".multiple-select").select2({
        // maximumSelectionLength: 2
        placeholder: "Please select",
    });
</script>

<script>
 $(document).ready(function() {
    $('.priority-label input[type="radio"]').click(function() {
        $('.priority-label').removeClass('active');
        $(this).parent().addClass('active');
    });
});


</script>