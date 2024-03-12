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
    <!-- END Datatables Header -->

    <!-- Quick Stats -->
    <div class="block_list full">


    </div>
    <!-- END Quick Stats -->
    <?php if ($this->ion_auth->is_admin() or $this->ion_auth->is_subAdmin() or $this->ion_auth->is_facilityManager()) { ?>
       
        <div class="block full">
            <div class="row text-center">


                <div class="col-sm-6 col-lg-12">
                    <div class="panel panel-default">
                        <div style="margin: 0px 0px 20px 16px;">
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
                        </div>

                        <div class="panel-body">
                            <form action="<?php echo site_url('patient'); ?>" name="patientForm" method="get">

                                <div class="col-sm-12 col-lg-3" style="margin-right: 8px;">
                                    <?php // print_r($careUnitsUser);die;
                                    ?>
                                    <!-- <select id="care_unit" name="careUnit" class="form-control select-2" onchange="getPatient()">
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
                                    </select> -->
                                </div>
                               


                                <?php
                                if (isset($careUnitID)) {
                                    $careUnitID = (!empty($careUnitID)) ? $careUnitID : '';
                                }
                                ?>
                                <!-- month year download -->
                                <!-- <form action="<?php echo site_url('patient/monthYearPatientExport'); ?>" name="patientFormExport" method="get"> -->
                                <div>
                                    <div class="col-sm-12 col-lg-2" style="margin-right: 8px;">
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
                                    <div class="col-sm-12 col-lg-2" style="margin-right: 8px;">
                                        <select class="form-control" name="year" id="year">
                                            <option value="">Select Year</option>
                                            <!-- Your year options here -->
                                        </select>
                                    </div>

                                    <!-- <div class="col-sm-6 col-lg-1" style="margin-right: 8px;">
                                        <input type="submit" name="search" class="btn btn-primary btn-sm" value="Search" />
                                    </div> -->

                                    <!-- <div class="col-sm-12 col-lg-3" style="margin-left:-29px;margin-right:-12px;">
                                        <button type="submit" class="btn btn-success btn-sm" value="Export" name="export">
                                            <fa class="fa fa-file-pdf-o"></fa> Download Monthly Surveillance List
                                        </button>
                                    </div> -->
                                </div>
                                <!-- </form> -->

                                <!-- <div class="col-sm-12 col-lg-1">
                                    <button type="submit" value="Export" name="export" class="btn btn-success btn-sm">
                                        <fa class="fa fa-file-pdf-o"></fa> Export
                                    </button>
                                </div> -->
                            </form>


                            <!-- <form action="<?php echo site_url('patient'); ?>" name="patientFormExport" method="get">
                                <div class="col-sm-12 col-lg-1">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <fa class="fa fa-undo"></fa> Reset
                                    </button>
                                </div>
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>



    <?php } ?>
    
    <div class="block full">
        <?php if($this->ion_auth->is_subAdmin()){?>
                <h2>
                    
                    <a href="<?php echo base_url() . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus"></i> <?php echo 'New'; ?>
                    </a></h2>

                <?php } ?>

        <?php 
        $LoginID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
        ?>

        <div class="table-responsive">
            <table id="common_datatable_users" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10px;">Sr. No</th>
                        <!--                                <th><?php echo "Referral Code"; ?></th>-->
                        <?php if($this->ion_auth->is_admin()){ ?>
                        <th class="text-center" style="width: 150px;"><?php echo "Facility Manager Name"; ?></th>
                        <?php } ?>

                        <?php if($this->ion_auth->is_subAdmin()){ ?>
                        <th class="text-center" style="width: 150px;"><?php echo "Header"; ?></th>
                        <?php } ?>

                        <th class="text-center" style="width: 200px;"><?php echo "Start date"; ?></th>

                        <th class="text-center" style="width: 200px;"><?php echo "Practitioner"; ?></th>
                        <th class="text-center" style="width: 200px;"><?php echo "Patient"; ?></th>
                        <th class="text-center" style="width: 200px;"><?php echo "Billing to"; ?></th>
                        <th class="text-center" style="width: 200px;"><?php echo "Note Comment"; ?></th>
                        <th class="text-center" style="width: 200px;"><?php echo "Interal Comment"; ?></th>
                        <th class="text-center" style="width: 200px;"><?php echo "Total"; ?></th>
                        <th class="text-center" style="width: 200px;"><?php echo "Status"; ?></th>
                        <th class="text-center" style="width: 200px;"><?php echo "Created Date"; ?></th>

                        
                        <?php if($this->ion_auth->is_facilityManager()){?>
                        <th class="text-center" style="width: 60px;">Created Date</th>
                        <?php }else if($this->ion_auth->is_admin()){ ?>
                        <th class="text-center" style="width: 60px;">Query Date</th>
                        <?php } ?>
                        <?php if($this->ion_auth->is_facilityManager()){?>
                        <th class="text-center" style="width: 70px;"><?php echo lang('action'); ?></th>
                        <?php } ?>

                        <?php if($this->ion_auth->is_subAdmin()){?>
                        <th class="text-center" style="width: 70px;"><?php echo lang('action'); ?></th>
                        <?php } ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if($this->ion_auth->is_admin()){
                    if (isset($list) && !empty($list)):
                        $rowCount = 0;
                        foreach ($list as $rows):
                            $rowCount++;
                            ?>
                            <?php if($LoginID == 1){ ?>
                            <tr>
                            
                                <td class="text-center text-primary"><strong><?php echo $rowCount; ?></strong></td> 
                                <?php if($this->ion_auth->is_admin()){ ?> 
                                <td class="text-primary"><?php echo $rows->first_name . ' ' . $rows->last_name; ?></td>
                                <?php } ?>
                                <td><?php echo $rows->title ?></td>
                                <td><?php echo $rows->description ?></td>
                                <td class="text-center"><?php echo date('m/d/Y', $rows->create_date); ?></td>
                        
                                <?php if ($this->ion_auth->is_facilityManager()) { ?>
                                <td class="actions text-center" >
                                    <div class="btn-group btn-group-xs">
                                        <a href="<?php echo base_url() . 'invoices/edit?id=' . encoding($rows->id); ?>" data-toggle="tooltip" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        
                                            <?php
                                            if ($rows->id != 1) {
                                                if ($rows->is_active == 1) {
                                                    ?>
                                                                                <!--                                                    <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-success" onclick="statusFn('<?php echo USERS; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->is_active; ?>')" title="Inactive Now"><i class="fa fa-check"></i></a>-->
                                                <?php } else { ?>
                                                                                <!--                                                    <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-danger" onclick="statusFn('<?php echo USERS; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->is_active; ?>')" title="Active Now"><i class="fa fa-times"></i></a>-->
                                                    <?php
                                                }
                                                if ($rows->is_active == 1) {
                                                    ?>
                                                    <!-- <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-success" onclick="changeVendorStatus('<?php echo encoding($rows->id); ?>', 'No','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" title="Inactive Now"><i class="fa fa-check"></i> Active</a> -->
                                                <?php } else { ?>
                                                <!--  <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-danger" onclick="changeVendorStatus('<?php echo encoding($rows->id); ?>', 'Yes','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" title="Active Now"><i class="fa fa-times"></i> Inactive</a> -->
                                                <?php } ?>
                                                <a href="javascript:void(0)" style="margin-left: 10px;" data-toggle="tooltip"   onclick="deleteFn('<?php echo contactus; ?>', 'id', '<?php echo encoding($rows->id); ?>', 'invoices', 'invoices/delVendors','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            <?php }
                                            ?>
                        <!-- <a href="<?php echo base_url() . 'vendors/paymentList/' . $rows->id; ?>" class="btn btn-sm btn-primary">Client List</a> -->
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php
                            }endforeach;
                    endif;
                }else{
                    $rowCount = 0;
                    foreach ($list as $rows){
                        $rowCount++;
                        ?>
                        
                        <tr>
                        
                            <td class="text-center text-primary"><strong><?php echo $rowCount; ?></strong></td>  

                            <?php if($this->ion_auth->is_admin()){ ?>

                            <td class="text-primary"><?php echo $rows->first_name . ' ' . $rows->last_name; ?></td>

                            <?php } ?>
                            
                            <?php if($this->ion_auth->is_subAdmin()){ ?>
                            <td class="text-primary"><?php echo $rows->header; ?></td>
                            <?php } ?>
                            <td class="text-center"><?php echo $rows->start_date; ?></td>
                            <td><?php echo $rows->practitioner ?></td>
                            <td><?php echo $rows->patient ?></td>
                            <td><?php echo $rows->billing_to ?></td>
                            <td><?php echo $rows->note_comment ?></td>
                            <td><?php echo $rows->interal_comment ?></td>
                            <td><?php echo $rows->total ?></td>
                            
                            <td><?php echo $rows->status ?></td>
    
                            <td class="text-center"><?php echo $rows->created_at; ?></td>
                            <?php if ($this->ion_auth->is_facilityManager() || $this->ion_auth->is_subAdmin()) { ?>

                            <td class="actions text-center" >
                                <div class="btn-group btn-group-xs">
                                    <a href="<?php echo base_url() . 'invoices/edit?id=' . encoding($rows->id); ?>" data-toggle="tooltip" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                    
                                        <?php
                                        if ($rows->id != 1) {
                                            if ($rows->is_active == 1) {
                                                ?>
                                                                            <!--                                                    <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-success" onclick="statusFn('<?php echo USERS; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->is_active; ?>')" title="Inactive Now"><i class="fa fa-check"></i></a>-->
                                            <?php } else { ?>
                                                                            <!--                                                    <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-danger" onclick="statusFn('<?php echo USERS; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->is_active; ?>')" title="Active Now"><i class="fa fa-times"></i></a>-->
                                                <?php
                                            }
                                            if ($rows->is_active == 1) {
                                                ?>
                                                <!-- <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-success" onclick="changeVendorStatus('<?php echo encoding($rows->id); ?>', 'No','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" title="Inactive Now"><i class="fa fa-check"></i> Active</a> -->
                                            <?php } else { ?>
                                            <!--  <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-danger" onclick="changeVendorStatus('<?php echo encoding($rows->id); ?>', 'Yes','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" title="Active Now"><i class="fa fa-times"></i> Inactive</a> -->
                                            <?php } ?>
                                            <a href="javascript:void(0)" style="margin-left: 10px;" data-toggle="tooltip"   onclick="deleteFn('<?php echo contactus; ?>', 'id', '<?php echo encoding($rows->id); ?>', 'invoices', 'invoices/delVendors','<?php echo 'this entry' ?>')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        <?php }
                                        ?>
                    <!-- <a href="<?php echo base_url() . 'vendors/paymentList/' . $rows->id; ?>" class="btn btn-sm btn-primary">Client List</a> -->
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php
                        }};
             
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
</div>
<!-- END Page Content -->
<div id="form-modal-box"></div>


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




