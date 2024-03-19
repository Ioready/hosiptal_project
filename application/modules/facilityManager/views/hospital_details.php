
    <!-- Page content -->
    <div id="page-content">
        <!--        <div id="msg"></div>-->
        <!-- eShop Overview Block -->
        <div class="block full">
        <?php if ($this->ion_auth->is_superAdmin()) { ?>
                <h2>
                    <a href="<?php echo base_url().'index.php/' . $this->router->fetch_class(); ?>/open_model" class="btn btn-sm btn-primary">
                        <i class="gi gi-circle_plus"></i> <?php echo $title; ?>
                    </a></h2>
            

            <?php }else if ($this->ion_auth->is_admin()) { ?>
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
                
            <!-- eShop Overview Title -->
            <div class="block-title">
                <h2><strong>Hospital Dashboard</strong> Overview</h2>
            </div>
            <!-- END eShop Overview Title -->
            <!-- eShop Overview Content -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrapper wrapper-content">
                        <div class="row">
                                        <!-- <div class="stat-percent font-bold text-primary"> <i class="fa fa-plus"></i></div> -->
                        
                            <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $doctors; ?></h1>
                                        <h5 class="text-primary"><strong>Total Doctor</strong></h5>
                                    </div>
                                </div>
                            </div>

                        <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                </div>
                                <div class="ibox-content">
                                <h1 class="no-margins">

                                <?php echo $total_patient; ?>
                                </h1>
                                <h5 class="text-primary"><strong>Total Patient</strong></h5>
                                </div>
                            </div>
                        </div>
                        

                        <!-- <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                       
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $careUnit; ?></h1>
                                        <h5 class="text-primary"><strong>Total Care Unit</strong></h5>
                                    </div>
                                </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                       
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $initial_dx; ?></h1>
                                        
                                        <h5 class="text-primary"><strong>Total Infections</strong></h5>
                                    </div>
                                </div>
                         </div>

                        <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                       
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $initial_rx; ?></h1>
                                       
                                        <h5 class="text-primary"><strong>Total Antibiotic</strong></h5>
                                    </div>
                                </div>
                        </div> -->

                        <div class="col-lg-4">
                                <div class="ibox float-e-margins">
                                    <div class="ibox-title">
                                       
                                    </div>
                                    <div class="ibox-content">
                                        <h1 class="no-margins"><?php echo $total_patient_today; ?></h1>
                                        
                                        <h5 class="text-primary"><strong>Total Patient Today</strong></h5>
                                    </div>
                                </div>
                                 </div>    
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- END eShop Overview Content -->
        </div>
        <!-- END eShop Overview Block -->

    </div>
    <!-- END Page Content -->
  