<style>
    .modal-footer .btn + .btn {
    margin-bottom: 5px !important;
    margin-left: 5px;
}
</style>
<div id="commonModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('webBanner/banner_add') ?>" enctype="multipart/form-data">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><?php echo (isset($title)) ? ucwords($title) : "" ?></h4>
                </div>
                <div class="modal-body"> 
                    <div class="loaders">
                        <img src="<?php echo base_url().'backend_asset/images/Preloader_2.gif';?>" class="loaders-img" class="img-responsive">
                    </div>
                    <div class="alert alert-danger" id="error-box" style="display: none"></div>
                    <div class="form-body">
                        <div class="row">

                          <div class="col-md-12" >
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Banner Type</label>
                                                <div class="col-md-9">
                                                    <select id="banner_type" name="banner_type" class="form-control validate[required]">
                                                        <option value="">Select Banner Type</option>
                                                        <option value="1">Web Slider</option>
                                                        <option value="2">Web Advertisement</option>
                                                    </select>
                                                    <span class="error"><?php echo form_error('banner_type'); ?></span>
                                                </div>
                                            </div>

                                        </div>
                          
                           <div class="col-md-12" >
                                <div class="form-group">
                                 <label class="col-md-3 control-label">Banner Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="banner_name" id="banner_name"></textarea>
                                    </div>
                                     <span class="help-block m-b-none col-md-offset-3">
                                    
                                </div>
                            </div>

                             <div class="col-md-12" >
                                <div class="form-group">
                                 <label class="col-md-3 control-label">Url</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="url" id="url"></textarea>
                                    </div>
                                     <span class="help-block m-b-none col-md-offset-3">
                                    
                                </div>
                            </div>
                            
                          
                             
                           
                           <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('image'); ?></label>
                                    <div class="col-md-9">
                                            <div class="profile_content edit_img">
                                            <div class="file_btn file_btn_logo">
                                              <input type="file"  class="input_img2" id="image" name="image" style="display: inline-block;">
                                              <span class="glyphicon input_img2 logo_btn" style="display: block;">
                                                <div id="show_company_img"></div>
                                                <span class="ceo_logo">
                                                  <img src="<?php echo base_url().'backend_asset/images/default.jpg';?>">
                                                </span>
                                                <i class="fa fa-camera"></i>
                                              </span>
                                              <img class="show_company_img2" style="display:none" alt="img" src="<?php echo base_url() ?>/backend_asset/images/logo.png">
                                              <span style="display:none" class="fa fa-close remove_img"></span>
                                            </div>
                                          </div>
                                          <div class="ceo_file_error file_error text-danger"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="space-22"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo lang('close_btn');?></button>
                    <button type="submit" id="submit" class="<?php echo THEME_BUTTON;?>" ><?php echo lang('submit_btn');?></button>
                </div>
            </form>
        </div> <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
