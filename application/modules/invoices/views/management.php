<!-- Page content -->
<div id="page-content">
    <div class="block_list full">
      
    </div>
    <!-- END Datatables Header -->

    <!-- Quick Stats -->
    <!-- <div class="block_list full">


    </div> -->
    <!-- END Quick Stats -->
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
                        <form action="<?php echo site_url('patient/patientImport'); ?>" name="patientFormExport" method="post" enctype="multipart/form-data">
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

                <div class="row">
                
                <div class="col-lg-12 mt-4">
                <div class="panel panel-default">
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
                            <form action="<?php echo site_url('patient'); ?>" name="patientForm" method="get">

                            <!-- <div class="col-lg-3">
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
                                </div> -->
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
                                <!-- <form action="<?php echo site_url('patient/monthYearPatientExport'); ?>" name="patientFormExport" method="get"> -->
                                <div>
                                <div class="col-lg-2">
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
                                        <!-- <select class="form-control" name="year" id="year">
                                            <option value="">Select Year</option>
                                            
                                        </select> -->

                                        <select class="form-control" name="year" id="year">
                                            <?php
                                           
                                            $current_year = date("Y");
                                            for ($i = $current_year - 10; $i <= $current_year + 10; $i++) {
                                                $selected = ($i == $current_year) ? 'selected' : '';

                                                echo "<option value='$i' $selected>$i</option>";
                                            }
                                            ?>
                                        </select>



                                    </div>

                                    <!-- <div class="col-lg-2">
                        <input type="submit" name="search" class="save-btn btn btn-primary btn-sm" value="Search" />
                    </div>

                    <form action="<?php echo site_url('patient'); ?>" name="patientFormExport" method="get">
                                <div class="col-sm-12 col-lg-2">
                                    <button type="submit" class="btn btn-primary save-btn btn-sm">
                                        <fa class="fa fa-undo"></fa> Reset
                                    </button>
                                </div>
                            </form> -->

                       

                                    <!-- <div class="col-sm-12 col-lg-12 mt-4" style="margin-left:-20px;margin-right:-12px; ">
                                        <button type="submit" class="btn btn-success  fw-bold btn-sm" value="Export" name="export">
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


                         
                        </div>
                    </div>
                </div>

                </div>

            </div>
        </div>



    <?php } ?>
    
   
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


::-webkit-scrollbar {
 display:none;
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




