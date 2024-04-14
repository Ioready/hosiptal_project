<!-- Page content -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<div id="page-content">
    <!-- Datatables Header -->
    <ul class="breadcrumb breadcrumb-top">
        <li>
            <a href="<?php echo site_url('pwfpanel'); ?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url('setting'); ?>">Setting</a>
        </li>
    </ul>
    <!-- END Datatables Header -->
    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title">
            <h2><strong>Site Setting</strong> Panel</h2>
        </div>
        <div class="col-sm-6 col-lg-12 text-white">
    <div class="panel panel-default">
        <ul class="nav nav-pills nav-fill nav-tabss" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a href="<?php echo site_url('setting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "index") ? "active" : "" ?>">
                    <span class="sidebar-nav-mini-hide">Basic</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="<?php echo site_url('setting/emailSetting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "emailsetting") ? "active" : "" ?>">
                    <span class="sidebar-nav-mini-hide">Email Setting</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo site_url('setting/paymentSetting'); ?>" class="save-btn text-white <?php echo (strtolower($this->router->fetch_class()) == "setting" && strtolower($this->router->fetch_method()) == "paymentSetting") ? "active" : "" ?>">
                    <span class="sidebar-nav-mini-hide">Payment setting for stripe</span>
                </a>
            </li>
          
        </ul>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="row">
                        
                        <div class="col-lg-12" style="overflow-x: auto">
                            <!-- Datatables Content -->
                            <form role="form" id="addFormAjax" method="post" action="<?php echo base_url('setting/addPaymentSetting') ?>" enctype="multipart/form-data">

                            <div class="block full">
                                <div class="block-title">
                                    <h2 class="fw-bold"><strong><?php echo $title; ?></strong> Panel</h2>
                                    <?php if ($this->ion_auth->is_facilityManager()) { ?>
                                        <h2>
                                            <a href="javascript:void(0)" onclick="open_modal('<?php echo $model; ?>')" class="btn btn-sm btn-primary">
                                                <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                                            </a>
                                        </h2>
                                    <?php } ?>
                                    <div>
  <div style="float:right;margin-top:-38px">
    <label>Enable:</label>
    <label class="switch">
      <input type="checkbox" checked>
      <span class="slider round " style="background-color:#6FD943;"></span>
    </label>
    <i class="fa fa-arrow-circle-up text-xl m-2"  style="font-size:20px; " aria-hidden="true"></i>

  </div>
</div>


                                    <!-- <h2 class="fw-bold" style="float:right;"> Enable:</h2> -->
                                </div>
                               
                                <div class="alert alert-danger" id="error-box" style="display: none"></div>
                               
                                <div class="row">
                                <?php
                                $message = $this->session->flashdata('success');
                                if (!empty($message)):
                                    ?>
                                    <div class="alert alert-success">
                                        <?php echo $message; ?>
                                    </div>
                                <?php endif; ?>
                                <?php
                                $error = $this->session->flashdata('error');
                                if (!empty($error)):
                                    ?>
                                    <div class="alert alert-danger">
                                        <?php echo $error; ?>
                                    </div>
                                <?php endif; ?>
                                <div id="message"></div>

                                    <div class="col-md-6" style="">
                                        <div class="form-group">
                                            <label for="input1">Secret key</label>
                                            <input type="text" class="form-control" id="secret_key" name="secret_key">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input1">Publishable key</label>
                                            <input type="text" class="form-control" id="publishable_key" name="publishable_key">
                                        </div>
                                    </div>
                                   
                                  
                                    <!-- Add save and cancel buttons -->
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-danger" type="button">Cancel</button>
                                        <button class="btn  btn-primary " style="background:#337ab7;" type="submit"> Save </button>
                                    </div>
                                   
                                </div>
                            </div>

                            </form>
                            <!-- END Datatables Content -->
                        </div>
                    </div>

                    
                </div>
            </div>
           
        </div>
    </div>
   
</div>

        <!-- END Datatables Content -->
    </div>

    <!-- <div class="block full">
        
        <?php 
        $LoginID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
        ?>

        <div class="table-responsive">
            <table id="common_datatable_users" class="table table-vcenter table-condensed table-bordered">
                <thead>
                    <tr>
                        <th class="text-center" style="background-color:#DBEAFF;font-size:1.3rem;width: 40px;">Sr. No</th>
                       

                        <th class="text-center" style="background-color:#DBEAFF;font-size:1.3rem;width: 200px;"><?php echo "Secret Key"; ?></th>

                        <th class="text-center" style="background-color:#DBEAFF;font-size:1.3rem;width: 200px;"><?php echo "Publishable Key"; ?></th>
                        <th class="text-center" style="background-color:#DBEAFF;font-size:1.3rem;width: 200px;"><?php echo "Date"; ?></th>
                        <th class="text-center" style="background-color:#DBEAFF;font-size:1.3rem;width:60px;"><?php echo lang('action'); ?></th>
                     
                    </tr>
                </thead>
                <tbody>
                    <?php
                   
                    if (isset($list) && !empty($list)):
                        $rowCount = 0;
                        foreach ($list as $rows):
                            $rowCount++;
                            ?>
                            
                            <tr>
                            
                                <td class="text-center "><strong><?php echo $rowCount; ?></strong></td> 
                                
                                <td class=""><?php echo $rows->secret_key; ?></td>
                                
                                <td><?php echo $rows->publishable_key ?></td>

                                <td class="text-center"><?php echo date('m/d/Y', $rows->created_on); ?></td>
                        
                               
                                <td class="actions text-center" >
                                    <div class="btn-group btn-group-xs">
                                        <a href="<?php echo base_url() . 'setting/edit?id=' . encoding($rows->id); ?>" data-toggle="tooltip" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                        
                                            <?php
                                            
                                                if ($rows->status == 1) {
                                                    ?>
                                                 <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-success" onclick="statusFn('<?php echo setting; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->status; ?>')" title="Inactive Now"><i class="fa fa-check"></i></a>
                                                <?php } else { ?>
                                                <a href="javascript:void(0)" data-toggle="tooltip" class="btn btn-xs btn-danger" onclick="statusFn('<?php echo setting; ?>', 'id', '<?php echo encoding($rows->id); ?>', '<?php echo $rows->status; ?>')" title="Active Now"><i class="fa fa-times"></i></a>
                                                    <?php
                                                }
                                                ?>
                                                <a href="javascript:void(0)" style="margin-left: 10px;" data-toggle="tooltip"   onclick="deleteFn('<?php echo setting; ?>', 'id', '<?php echo encoding($rows->id); ?>', 'contactus', 'contactus/delVendors','<?php echo $rows->first_name . ' ' . $rows->last_name; ?>')" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                           
                                        </div>
                                    </td>
                                </tr>
                               
                                <?php
                            endforeach;
                    endif;
                
                    ?>
                </tbody>
            </table>
        </div>
    </div> -->


   
    <!-- END Page Content -->
</div>


<style>
    .save-btn.active {
        background: #00008B !important;
    }

    .save-btn {
        font-weight: 700;
        font-size: 1.5rem;
        padding: 0.6rem 2.25rem;
        background: #337ab7;
    }

    .save-btn:hover {
        background: #00008B !important;
    }

    .cancel-btn:hover {
        background-color: #e9967a !important;
    }
</style>
