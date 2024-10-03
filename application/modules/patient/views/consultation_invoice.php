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


<div class="block_list full">
<div class="row text-center">
                
                <div class="col-sm-6 col-md-2 mb-4">
                    <a href="<?php echo base_url() . 'index.php/patient/summary?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 10px; ">
                        <div class="widget-extra themed-background-dark"   style="background:#337ab7;">
                            <h4 style="font-size:14px; font-weight:600; color:white;">Summery</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen fw-bold"><?php echo $active;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                    <a href="<?php echo base_url(). 'index.php/patient/consultationTemplates?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Consultation</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/Medications?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Medications</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>

                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/lettersAndForm?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Letters and forms</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/patientPrescription?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Prescriptions</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/labs?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Labs</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/patient/consultationInvoice?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Invoices</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url(). 'index.php/accountStatement?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Account statements</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url() . 'index.php/patient/communication?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Communication</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url() . 'index.php/patientDocuments?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Documents</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-2 mb-4">
                <a href="<?php echo base_url() . 'index.php/patient/communication?id=' . encoding($results->id); ?>" class="widget widget-hover-effect2 rounded" style="border-radius: 20px;;">
                        <div class="widget-extra themed-background" style="background-color:#337ab7; box-shadow: 0px 0px 4px rgba(0, 0, 0, 0.4);">
                            <h4 style="font-size:16px; font-weight:600; color:white;">Logs</h4>
                        </div>
                        <div class="widget-extra-full"><span class="h2 animation-expandOpen fw-bold text-dark"><?php echo $inactive;?></span></div>
                    </a>
                </div>
            </div>
        
<!-- </div> -->
        
    </div>
    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong><?php echo $title; ?></strong> Panel</h2>
            <?php //if ($this->ion_auth->is_admin()) { ?>
            <input type="hidden" name="patient_id" id="patient_id" value="<?php echo $patient_id;?>">
                <h2><a href="javascript:void(0)" onclick="open_model_invoice('<?php echo $model; ?>')" class="btn btn-sm btn-primary"  style="background: #337ab7" id="patient_ids">
                        <i class="gi gi-circle_plus"></i> <?php echo 'add invoice'; ?>
                    </a></h2>
            <?php //} ?>
        </div>
        <div class="table-responsive">
            <table id="common_datatable_menucat" class="table table-vcenter table-condensed table-bordered text-center">
                <thead>
                    <tr>
                        <th class="text-center" style="font-size:14px">Invoice No</th>
                        <th class="text-center" style="font-size:14px">Date</th>
                        <th class="text-center" style="font-size:14px">Total</th>
                        <th class="text-center" style="font-size:14px">Billing to</th>
                        <th class="text-center" style="font-size:14px"><?php echo lang('action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($list) && !empty($list)):
                        $rowCount = 0;
                        foreach ($list as $rows):
                            $rowCount++;
                            // print_r($rows);die;
                            ?>
                            <tr>
                                <td><?php echo $rows->invoice_number; ?></td>            
                                <td><?php echo $rows->invoice_date; ?></td>
                                <td><?php echo $rows->total_amount; ?></td>
                                <td><?php echo $rows->billing_to; ?></td>

                                <td class="actions">
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default" onclick="editFn('<?php echo $model; ?>', 'edit', '<?php echo encoding($rows->id) ?>', '<?php echo $model; ?>');"><i class="fa fa-pencil"></i></a>
                                    <?php if ($rows->is_active == 1) { ?>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-success" onclick="editStatusFn('<?php echo $tablePrefix; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->is_active; ?>','<?php echo $rows->name; ?>')" title="Inactive Now"><i class="fa fa-check"></i></a>
                                    <?php } else { ?>
                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger" onclick="editStatusFn('<?php echo $tablePrefix; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->is_active; ?>','<?php echo $rows->name; ?>')" title="Active Now"><i class="fa fa-times"></i></a>
                                    <?php } ?>
                                    <a href="javascript:void(0)" onclick="deleteFn('<?php echo $table; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $model; ?>','','<?php echo $rows->name; ?>')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            <?php
                        endforeach;
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
</div>

<script>
    $(document).ready(function() {
  $('#patient_ids').click(function() {
   var patientsdata = $('#patient_id').val();
//   alert(patientsdata);
  $('#patient_id_data').val(patientsdata);

  });
});
</script>
