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

        <!--        <div class="row text-center">
                    <div class="col-sm-6 col-lg-3">
                        <a href="<?php echo base_url() ?>vendors/index/No" class="widget widget-hover-effect2">
                            <div class="widget-extra themed-background">
                                <h4 class="widget-content-light"><strong> Inactivate </strong> Vendors</h4>
                            </div>
                            <div class="widget-extra-full">
                                <span class="h2 animation-expandOpen"><?php echo $inactive_vendors; ?></span></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <a href="<?php echo base_url() ?>vendors/index/Yes" class="widget widget-hover-effect2">
                            <div class="widget-extra themed-background-dark">
                                <h4 class="widget-content-light"><strong> Activated </strong> Vendors</h4>
                            </div>
                            <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen"><?php echo $active_vendors; ?></span></div>
                        </a>
                    </div>
                    <div class="col-sm-6 col-lg-3">
        
                    </div>
                    <div class="col-sm-6 col-lg-3">
        
                    </div>
                </div>-->

    </div>
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

                                    <div class="col-sm-6 col-lg-1" style="margin-right: 8px;">
                                        <input type="submit" name="search" class="btn btn-primary btn-sm" value="Search" />
                                    </div>

                                    <div class="col-sm-12 col-lg-3" style="margin-left:-29px;margin-right:-12px;">
                                        <button type="submit" class="btn btn-success btn-sm" value="Export" name="export">
                                            <fa class="fa fa-file-pdf-o"></fa> Download Monthly Surveillance List
                                        </button>
                                    </div>
                                </div>
                                <!-- </form> -->

                                <!-- <div class="col-sm-12 col-lg-1">
                                    <button type="submit" value="Export" name="export" class="btn btn-success btn-sm">
                                        <fa class="fa fa-file-pdf-o"></fa> Export
                                    </button>
                                </div> -->
                            </form>


                            <form action="<?php echo site_url('patient'); ?>" name="patientFormExport" method="get">
                                <div class="col-sm-12 col-lg-1">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <fa class="fa fa-undo"></fa> Reset
                                    </button>
                                </div>
                            </form>
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
            <?php if ($this->ion_auth->is_subAdmin()) { ?>
                <h2>
                    <a href="<?php echo base_url().'index.php/' . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a></h2>
            <?php }else if($this->ion_auth->is_facilityManager()){ ?>
                    <h2>
                    <a href="<?php echo base_url() . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a></h2>
                <?php } ?>
        </div>
        <!-- <div class="content-header">
            <ul class="nav-horizontal text-center">
                <li class="<?php echo ($this->uri->segment(3) == "No") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url() ?>vendors/index/No"><i class="fa fa-times"></i> Unverified Vendors</a>
                </li>
                <li class="<?php echo ($this->uri->segment(3) == "Yes") ? 'active' : ''; ?>">
                    <a href="<?php echo base_url() ?>vendors/index/Yes"><i class="gi gi-check"></i> Verified Vendors</a>
                </li>
            </ul>
        </div> -->
        <div class="table-responsive">
            <table id="common_datatable_users" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="width: 10px;">Sr. No</th>
                        <!--                                <th><?php echo "Referral Code"; ?></th>-->
                        <th class="text-center"><?php echo "Doctor Name"; ?></th>
                        
                        <th class="text-center"><?php echo "Start Time"; ?></th>
                        <th class="text-center"><?php echo "End Time"; ?></th>
        
                        <th class="text-center"><?php echo 'Appointment Date'; ?></th>
                        <!-- <th class="text-center">Created Date</th> -->
                                                   
                        <th class="text-center"><?php echo lang('action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($list) && !empty($list)):
                        //print_r($list); die;
                        $rowCount = 0;
                        foreach ($list as $rows):
                            $rowCount++;
                          
                            ?>
                            <tr>
                                <td class="text-center text-primary"><strong><?php echo $rowCount; ?></strong></td>        
                                <!--                            <td><?php echo $rows->id; ?></td>-->
                                <td class="text-primary"><?php echo $rows->first_name . ' ' . $rows->last_name; ?></td>
                                
                                <td class="text-primary"><?php echo (!empty($rows->time_start)) ?  $rows->time_start /* . '(' . $rows->care_unit_code.')' */ : ''; ?></td>
                                <td class="text-primary"><?php echo (!empty($rows->time_end)) ?  $rows->time_end  : ''; ?></td>
                               
                                
        
                                <td><?php echo ($rows->date != null) ? date('d-m-Y', strtotime($rows->date)) : ""; ?></td>
                               
                                <td class="actions text-center" >
                                    <div class="btn-group btn-group-xs">
                                    
                                        <a href="<?php echo base_url() . 'index.php/appointment/edit?id=' . encoding($rows->id); ?>" data-toggle="tooltip" class="btn btn-default"><i class="fa fa-pencil"></i></a>

                                        <?php if ($this->ion_auth->is_subAdmin()) { ?>
                                            <?php
                                            if ($rows->id != '') {

                                                if ($rows->status == 0) {
                                                    ?>
                                                     <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-success" onclick="statusFn('<?php echo APPOINTMENT; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->status; ?>')" title="Unblock Now"><i class="fa fa-check"></i></a>
                                                <?php } else { ?>
                                                     <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-danger" onclick="statusFn('<?php echo APPOINTMENT; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->status; ?>')" title="Block Now"><i class="fa fa-times"></i></a>
                                                    <?php
                                                }

                                                if ($rows->status == 1) {
                                                    ?>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-success" onclick="changeVendorStatus('<?php echo encoding($rows->id); ?>', 'No','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" title="Unblock Now"><i class="fa fa-check"></i> Block</a>
                                                <?php } else { ?>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-danger" onclick="changeVendorStatus('<?php echo encoding($rows->id); ?>', 'Yes','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" title="Block Now"><i class="fa fa-times"></i> Unblock</a>
                                                <?php } ?>

                                                <a href="javascript:void(0)" data-toggle="tooltip"   onclick="deleteFn('<?php echo APPOINTMENT; ?>', 'id', '<?php echo encoding($rows->id); ?>', 'index.php/appointment', 'index.php/appointment/delVendors','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                            <?php }
                                            ?>
                        <!-- <a href="<?php echo base_url() . 'vendors/paymentList/' . $rows->id; ?>" class="btn btn-sm btn-primary">Client List</a> -->
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }endforeach;
                    endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- END Datatables Content -->
</div>
<!-- END Page Content -->
<div id="form-modal-box"></div>