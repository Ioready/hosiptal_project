<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <ul class="breadcrumb breadcrumb-top">
        <li>
            <a href="<?php echo site_url('pwfpanel'); ?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url('dataOperator'); ?>"><?php echo $title; ?></a>
        </li>
    </ul>
    <!-- END Datatables Header -->
    <!-- Datatables Content -->
    <p style="display:none">
        <?php $LoginID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : ''; ?>
    </p>

    <div class="block full">
        <div class="block-title">
            <h2><strong><?php echo $title; ?></strong> Panel</h2>
        </div>
        <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> <?php echo (isset($title)) ? ucwords($title) : "" ?></h2>
            </div>
            <div class="alert alert-danger" id="error-box" style="display: none"></div>
            <div class="form-body">
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class=" control-label m-4">First Name</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" />
                            </div>
                            <!-- <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('english_note'); ?></span> -->
                        </div>
                    </div>

                    <div class="col-md-6" style="display:none">
                        <div class="form-group">
                            <label class="m-4 control-label">Login ID</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="login_id" id="login_id" placeholder="Login ID" value="<?php echo $LoginID; ?>" />
                            </div>
                            <!-- <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('english_note'); ?></span> -->
                        </div>
                    </div>


                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="m-4 control-label">Last Name</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" />
                            </div>
                            <!-- <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('english_note'); ?></span>  -->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="m-4 control-label"><?php echo lang('user_email'); ?></label>
                            <div class="col-md-12">
                                <input type="email" class="form-control" name="user_email" id="user_email" placeholder="<?php echo lang('user_email'); ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="m-4 control-label"><?php echo lang('password'); ?></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="password" id="password" placeholder="<?php echo lang('password'); ?>" value="<?php echo randomPassword(); ?>" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="m-4 control-label">Tie Doctor to department</label>
                            <div class="col-md-12">                                
                                    <select id="care_unit_id" name="care_unit_id" class="form-control select2" size="1">
                                        <option value="">Please select</option>
                                        <?php foreach($care_unit as $row){?>
                                                    
                                        <option value="<?php echo $row->id;?>"><?php echo $row->name."(".$row->care_unit_code.")";?></option>
                                                
                                        <?php }?>
                                    </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="form-group">
                            <label class="m-4 control-label">Country Phone Code</label>
                            <div class="col-md-12">                                
                                    <select id="phone_code" name="phone_code" class="form-control select2" size="1">
                                        <option value="0">Please select</option>
                                        <?php foreach ($countries as $country) { ?>
                                                    
                                        <option value="<?php echo $country->phonecode; ?>"><?php echo $country->sortname . "(" . $country->phonecode . ")"; ?></option>
                                                
                                        <?php } ?>
                                    </select>
                            </div>
                        </div>
                    </div>
                     <div class="col-md-6" >
                        <div class="form-group">
                            <label class="m-4 control-label"><?php echo lang('phone_no'); ?></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="<?php echo lang('phone_no'); ?>" />
                            </div>
                             <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('english_note'); ?></span> 
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="form-group">
                            <label class="m-4 control-label">Qualifications</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="qualification" id="qualification" placeholder=""/>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="m-4 control-label">Availability</label>
                            <div class="col-md-12">                                
                                    <select id="availability" name="availability" class="form-control select2" size="1">
                                        <option value="">Please select</option>
                                        <?php foreach($initial_dx as $row){?>
                                                    
                                        <option value="<?php echo $row->id;?>"><?php echo $row->name;?></option>
                                                
                                        <?php }?>
                                    </select>
                            </div>

                            <!-- <div class="col-md-9">                                
                                    <select id="availability_week" name="availability_week" class="form-control select2" size="1">
                                        <option value="">Select Week</option>
                                           
                                        <option value="all">All Week</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>        
                                      
                                    </select>
                            </div>
                            <div class="col-md-9">                                
                                    <select id="availability_week" name="availability_week" class="form-control select2" size="1">
                                        <option value="">Select Day</option>
                                           
                                        <option value="all">All Days</option>
                                        <option value="1">Monday</option>
                                        <option value="2">Tuesday</option>
                                        <option value="3">Wednesday</option>
                                        <option value="4"></option>        
                                      
                                    </select>
                            </div> -->

                            <!-- <div class="availability-list">
                                <h3>Availability</h3>
                                <ul>
                                    <?php foreach ($availability_data as $day => $slots): ?>
                                        <li><strong><?php echo ucfirst($day); ?>:</strong>
                                            <?php if (!empty($slots)): ?>
                                                <?php echo implode(', ', $slots); ?>
                                            <?php else: ?>
                                                Not Available
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div> -->


                        </div>
                    </div>

                    <div class="col-md-6" >
                        <div class="form-group">
                            <label class="m-4 control-label"><?php echo lang('user_gender'); ?></label>
                            <div class="col-md-12">
                                <label class="checkbox-inline"><input type="radio" name="user_gender" id="user_gender" checked value="MALE">MALE</label>
                                <label class="checkbox-inline"><input type="radio" name="user_gender" id="user_gender" value="FEMALE">FEMALE</label>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" >
                       <div class="form-group">
                            <label class="m-4 control-label"><?php echo lang('date_of_birth'); ?></label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="<?php echo lang('date_of_birth'); ?>" readonly=""/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" >
                       <div class="form-group">
                         <label class="m-4 control-label">Zipcode Access</label>
                            <div class="col-md-12">
                                 <select class="" name="zipcode[]" id="zipcode" multiple="" style="width:100%;" placeholder="Select Zipcode">
                                     <option value="">Select Zipcode</option>
                                    <?php foreach($zipcode_list as $key=>$val){
                                    ?>
                                        <option value="<?php echo $val->zipcode;
                                                        ?>"><?php echo $val->zipcode;
                                                            ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                           
                        </div>
                    </div>

                    <!--                      <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Company Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="company_name" value="" />
                                    </div>
                                </div>
                            </div>
                    <div class="col-md-12" >
                        <div class="form-group">
                            <label class="col-md-3 control-label">Company Website</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="website" placeholder=""/>
                            </div>
                        </div>
                    </div>-->




                    <!--                     <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Software Category</label>
                                    <div class="col-md-9">
                                          <select id="category_id" name="category_id[]" multiple class="form-control select-chosen" size="1">
                                              <option value="">Please select</option>
                                                <?php foreach ($categorys as $category) { ?>
                                                            
                                                <option value="<?php echo $category->id; ?>"><?php echo $category->category_name; ?></option>
                                                        
                                                <?php } ?>
                                            </select>
                                        <input type="text" class="form-control" name="state" placeholder="State" value="<?php //echo $results->state; 
                                                                                                                        ?>"/>
                                    </div>
                                </div>
                            </div>-->

                    <!--                             <div class="col-md-12" >
                        <div class="form-group">
                            <label class="col-md-3 control-label">Description</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="description" id="description" placeholder=""/>
                            </div>
                        </div>
                    </div>-->


                                       <div class="col-md-6" >
                        <div class="form-group">
                            <label class="m-4 control-label">Country</label>
                            <div class="col-md-12">
                                 <input type="text" class="form-control" name="country" id="country" placeholder="Country"/> 
                                
                                    <select id="country" name="country" class="form-control select2" size="1">
                                        <option value="0">Please select</option>
<?php foreach ($countries as $country) { ?>
                                                        
                                            <option value="<?php echo $country->id; ?>"><?php echo $country->name; ?></option>
                                                    
<?php } ?>
                                    </select>
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" >
                                <div class="form-group">
                                    <label class="m-4 control-label">State</label>
                                    <div class="col-md-12">
                                          <select id="country" name="state" class="form-control select2" size="1">
                                                <option value="" disabled selected>Please select</option>
<?php foreach ($states as $state) { ?>
                                                                
                                                    <option value="<?php echo $state->id; ?>"><?php echo $state->name; ?></option>
                                                            
<?php } ?>
                                            </select>
                                        <input type="text" class="form-control" name="state" placeholder="State" value="<?php //echo $results->state;  
                                                                                                                        ?>"/>
                                    </div>
                                </div>
                            </div>
                    <div class="col-md-6" >
                        <div class="form-group">
                            <label class="m-4 control-label">City</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="city" placeholder="City Name"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" >
                        <div class="form-group">
                            <label class="m-4 control-label">Address</label>
                            <div class="col-md-12">
                                <input type="text" class="form-control" name="address1" placeholder=""/>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="col-md-12">
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?php echo lang('password'); ?></label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="password" id="password" placeholder="<?php echo lang('password'); ?>" value="<?php echo randomPassword(); ?>" />
                            </div>
                        </div>
                    </div> -->
                    <!--                   <div class="col-md-12" >
                        <div class="form-group">
                            <label class="col-md-3 control-label"><?php echo lang('profile_image'); ?></label>
                            <div class="col-md-9">
                                
                                <div class="group_filed">
                                            <div class="img_back_prieview_Academic">
                                                <div class="images_box_upload_ven_addvendore_vendore">
                                                    <div id="image-preview-addvendore-vendore">
                                                         <input type="file" name="user_image" id="image-upload-addvendore-vendore" />
                                                    </div>
                                                </div>
                                                    <div id="image-preview-addvendore">
                                                         <label for="image-upload-addvendore-vendore" id="image-label-addvendore-vendore">Upload Logo</label>
                                                    </div>
                                            </div>
                           </div>
                                
                                
                                
                                    <div class="profile_content edit_img">
                                    <div class="file_btn file_btn_logo">
                                      <input type="file"  class="input_img2" id="user_image" name="user_image" style="display: inline-block;">
                                      <span class="glyphicon input_img2 logo_btn" style="display: block;">
                                          <div id="show_company_img"></div>
                                        <span class="ceo_logo row push">
                             
                                        <a href="<?php echo base_url() . 'backend_asset/images/default.jpg'; ?>" data-toggle="lightbox-image">
                                                        <img src="<?php echo base_url() . 'backend_asset/images/default.jpg'; ?>" alt="image">
                                                    </a>
                                          
                                            
                                        </span>
                                        
                                      </span>
                                      <img class="show_company_img2" style="display:none" alt="img" src="<?php echo base_url() ?>/backend_asset/images/logo.png">
                                      <span style="display:none" class="fa fa-close remove_img"></span>
                                    </div>
                                  </div> 
                                  
                                  
                                  
                                  
                                  <div class="ceo_file_error file_error text-danger"></div>
                            </div>
                        </div>
                    </div>-->
                    <div class="space-22"></div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" id="submit" class="btn btn-sm btn-primary"  style="background: #337ab7">Save</button>
            </div>
        </form>

    </div>
    <!-- END Datatables Content -->
</div>
<!-- END Page Content -->
<script type="text/javascript">
    $('#date_of_birth').datepicker({
        startView: 2,
        todayBtn: "linked",
        keyboardNavigation: false,
        forceParse: false,
        calendarWeeks: true,
        autoclose: true,
        endDate: 'today'
    });
    /*    $("#zipcode").select2({
            allowClear: true
        });*/
</script>