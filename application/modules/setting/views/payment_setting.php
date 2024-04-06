<!-- Page content -->
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
                        <?php
                        $message = $this->session->flashdata('success');
                        if (!empty($message)):
                            ?><div class="alert alert-success">
                                <?php echo $message; ?></div><?php endif; ?>
                        <?php
                        $error = $this->session->flashdata('error');
                        if (!empty($error)):
                            ?><div class="alert alert-danger">
                                <?php echo $error; ?></div><?php endif; ?>
                        <div id="message"></div>
                        <div class="col-lg-12" style="overflow-x: auto">
                            <!-- Datatables Content -->
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
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input1">Stripe key</label>
                                            <input type="text" class="form-control" id="input1" name="input1">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="input1">Stripe Secret</label>
                                            <input type="text" class="form-control" id="input1" name="input1">
                                        </div>
                                    </div>
                                   
                                  
                                    <!-- Add save and cancel buttons -->
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-danger" type="button">Cancel</button>
                                        <button class="btn  btn-primary " style="background:#337ab7;" type="button"> Save </button>
                                    </div>
                                </div>
                            </div>
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
