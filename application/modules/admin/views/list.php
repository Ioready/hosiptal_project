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
        <!-- <div class="row text-center">
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

    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <?php if ($this->ion_auth->is_superAdmin()) { ?>
                <h2>
                    <a  href="<?php echo base_url().'index.php/' . $this->router->fetch_class(); ?>/open_model" class="save-btn btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus mb-1 me-2"></i> <?php echo $title; ?>
                    </a></h2>
                     <!-- <h2><a href="javascript:void(0)"  onclick="open_modal('<?php echo $model; ?>')"  style="background-color:#337ab7;" class="btn btn-sm m-2 text-white">
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a></h2> -->
            <?php }else if($this->ion_auth->is_superAdmin()){ ?>
                    <h2>
                    <a href="<?php echo base_url() . $this->router->fetch_class(); ?>/open_model" class="save-btn btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a></h2>
                <?php } ?>
        </div>
        

        <div class="table-responsive">
            <table id="common_datatable_users" class="table table-vcenter table-condensed table-bordered text-center">
                <thead>
                    <tr >
                        <th  class="text-center" style="width: 40px;background-color:#DBEAFF;font-size:1.3rem">Sr No.</th>
                        <!--                                <th><?php echo "Referral Code"; ?></th>-->
                        <th style="background-color:#DBEAFF;font-size:1.3rem" class="text-center"><?php echo "Admin Name"; ?></th>
                        <th style="background-color:#DBEAFF;font-size:1.3rem"  class="text-center"><?php echo "User Name"; ?></th>
                        <!-- <th class="text-center"><?php echo "Department"; ?></th> -->
                        <!-- <th class="text-center"><?php echo "Doctor Name"; ?></th> -->
                        <th style="background-color:#DBEAFF;font-size:1.3rem" class="text-center"><?php echo lang('user_email'); ?></th>
                       <th style="background-color:#DBEAFF;font-size:1.3rem" class="text-center"><?php echo "Phone"; ?></th>
                         <th style="background-color:#DBEAFF;font-size:1.3rem"><?php echo "DOB"; ?></th>
                        <!--                                <th><?php echo "Current Password"; ?></th>-->
                        <!--                                <th><?php echo lang('profile_image'); ?></th>-->
                        <th style="background-color:#DBEAFF;font-size:1.3rem" class="text-center">Created Date</th>
                        <!--                                <th><?php //echo lang('user_createdate');     ?></th>-->
                        <th style="background-color:#DBEAFF;font-size:1.3rem" class="text-center"><?php echo lang('action'); ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($list) && !empty($list)):
                        //print_r($list); die;
                        $rowCount = 0;
                        foreach ($list as $rows):
                            $rowCount++;
                           // print_r($rows->first_name); die;
                            ?>
                            <tr>
                                <td class="text-center text-dark"><strong><?php echo $rowCount; ?></strong></td>        
                                <!--                            <td><?php echo $rows->team_code; ?></td>-->
                                <td class="text-dark"><?php echo $rows->hospital_name ?></td>
                                <td class="text-dark"><?php echo $rows->first_name . ' ' . $rows->last_name; ?></td>
                                <!-- <td class="text-primary"><?php echo (!empty($rows->name)) ?  $rows->name /* . '(' . $rows->care_unit_code.')' */ : ''; ?></td> -->
                                <!-- <td class="text-primary"><?php echo (!empty($rows->name1)) ?  $rows->name1  : ''; ?></td> -->
                               
                                <td><?php echo $rows->email ?></td>
                                       <td class="text-center"><?php echo $rows->phone ?></td>
                                <td><?php echo ($rows->date_of_birth != null) ? date('d-m-Y', strtotime($rows->date_of_birth)) : ""; ?></td>
                                <!-- <td><?php echo $rows->is_pass_token; ?></td>-->
                                <!-- <td><img width="100" src="<?php
                                if (!empty($rows->profile_pic)) {
                                    echo base_Url()
                                    ?><?php
                                    echo $rows->profile_pic;
                                } else {
                                    echo base_url() . DEFAULT_NO_IMG_PATH;
                                }
                                ?>" /></td>-->
                                <td class="text-center"><?php echo date('m/d/Y', $rows->created_on); ?></td>
            <!--                                <td class="text-center"><?php
                                if ($rows->vendor_profile_activate == "Yes") echo '<p class="text-success">Verified</p>';
                                else echo '<p  class="text-danger">Unverified</p>';
                                ?></td>-->
                                            <!--<td><?php //echo date('d F Y',$rows->created_on);     ?></td>-->
                                <td class="actions text-center" >
                                    <div class="btn-group btn-group-xs">
                                    <!-- <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-default" onclick="editFn('vendors','vendor_edit','<?php echo encoding($rows->id); ?>');"><i class="fa fa-pencil"></i></a> -->
                                        <a href="<?php echo base_url() . 'index.php/admin/edit?id=' . encoding($rows->id); ?>" data-toggle="tooltip" class="btn btn-default"><i class="fa fa-pencil"></i></a>

                                        <?php if ($this->ion_auth->is_superAdmin()) { ?>
                                            <?php
                                            if ($rows->id != 1) {
                                                if ($rows->active == 1) {
                                                    ?>
                                                                                <!--                                                    <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-success" onclick="statusFn('<?php echo USERS; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->active; ?>')" title="Inactive Now"><i class="fa fa-check"></i></a>-->
                                                <?php } else { ?>
                                                                                <!--                                                    <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-danger" onclick="statusFn('<?php echo USERS; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->active; ?>')" title="Active Now"><i class="fa fa-times"></i></a>-->
                                                    <?php
                                                }
                                                if ($rows->active == 1) {
                                                    ?>
                                                    <a style="" href="javascript:void(0)" data-toggle="tooltip" class="btn btn-sm btn-success" onclick="changeVendorStatus('<?php echo encoding($rows->id); ?>', 'No','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" title="Inactive Now"><i class="fa fa-check"></i> </a>
                                                <?php } else { ?>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-danger" onclick="changeVendorStatus('<?php echo encoding($rows->id); ?>', 'Yes','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" title="Active Now"><i class="fa fa-times"></i> Inactive</a>
                                                <?php } ?>
                                                <a href="javascript:void(0)" data-toggle="tooltip"   onclick="deleteFn('<?php echo USERS; ?>', 'id', '<?php echo encoding($rows->id); ?>', 'index.php/admin', 'index.php/admin/delVendors','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
<style>
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
</style>