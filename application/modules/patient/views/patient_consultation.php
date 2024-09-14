<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.js"></script>
<!-- Page content -->
<div id="page-content">
    <!-- Datatables Header -->
    <ul class="breadcrumb breadcrumb-top">
        <li>
            <a href="<?php echo site_url('pwfpanel');?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url('patient/consultationTemplates');?>">Consultation template</a>
        </li>
    </ul>
    <!-- END Datatables Header -->

    <!-- Datatables Content -->
        <div class="block full">
        <div class="block-title">
            <h2><strong>Consultation template</strong> Panel</h2>
        </div>
            <div class="form-body">
                <div class="row">

                    <div class="col-md-12" >
                        <div class="form-group">
                            <div class="col-md-4">
                                <br>
                                <div class="col-md-11">
                                    <select name="" id="" class="form-control">
                                        <option value="">Doctor Consultation</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                            <br>
                                <div class="col-md-11">
                                    <input type="date" name="date" class="form-control">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    
 
    
    <div class="block full">
        
        <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url($formUrlConsult) ?>" enctype="multipart/form-data">

            <div class="alert alert-danger" id="error-box" style="display: none"></div>
            <div class="form-body">
                <div class="row">


                    <div class="col-md-8" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                        <div class="form-group">
                           <div class="col-md-4">
                           <br>

                                <div class="col-md-11">
                                    <select name="" id="" class="form-control">
                                        <option value="">Doctor Consultation</option>
                                    </select>
                                </div>

                           </div>
                            <div class="col-md-3">
                            <br>
                                <div class="col-md-11">
                                <input type="date" name="date" class="form-control">
                                </div>

                            </div>

                            
                            <div class="col-md-11 form-section" id="form-problem" style="display:none;">
                            <br>
                                <div class="row" >

                                    <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div>

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Problem heading</b>
                                    
                                    </span>
                            </div>
                                    <div class="row">

                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Problem heading</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Since</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in summery</label><br>
                                        </div>
                               
                                    </div>
                                </div>
                                

                                <div class="col-md-11 form-section" id="form-complaint" style="display:none;">
                            <br>
                                <div class="row" >

                                <div class="col-md-12" >
                                        <div class="col-md-12">
                                            <label class="">Presenting Complaint</label>
                                            <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                        </div>
                                    </div>
                            </div>
                        </div>


                            <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Problem</b>
                                    
                                    </span>
                            </div>

                                    <div class="row">
                                        <br>
                                                    <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                                        
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <label class=""><Strong>Problem</Strong></label>
                                                                <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                                <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <label class="">Since</label>
                                                                <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <label class="">Condition Type</label>
                                                                <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <label class="">Condition significance</label>
                                                                <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <label class="">Comment</label>
                                                                <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in summery</label><br>
                                        </div>
                               
                                    </div>
                                                </div>

                                        <br>
                                    </div>

                                    <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Examination</b>
                                    
                                    </span>
                            </div>
                        
                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Examination</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Value</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div> -->

                                            <!-- <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div> -->

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
</div>
<div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Allergy</b>
                                    
                                    </span>
                            </div>

                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <!-- <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Allergy</Strong></label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div> -->

                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <label for="allergySearch">Allergy</label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 236px;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <label class="">Severity</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Select Severity</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                           

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in summery</label><br>
                                        </div>
                               
                                    </div>
                                    </div>

                                    <br>
                                </div>
                                <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Medical History</b>
                                    
                                    </span>
                            </div>

                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-8">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Medical History</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 90%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Since</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div> -->

                                            <!-- <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div> -->

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                </div>

                                <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Family History</b>
                                    
                                    </span>
                            </div>

                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Family History</Strong></label>

                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="col-md-12">
                                                    <label class="">Relationship</label>
                                                    <select name="" id="" class="form-control">
                                                        <option value="">Please select</option>
                                                    </select>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <!-- <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div> -->

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in summery</label><br>
                                        </div>
                               
                                    </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <label class="">Presenting Complaint</label>
                                            <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <label class="">Presenting Complaint</label>
                                            <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                        </div>
                                    </div>
                                </div>


                                <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Examination</b>
                                    
                                    </span>
                            </div>

                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Examination</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Since</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <label class="">Presenting Complaint</label>
                                            <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                        </div>
                                    </div>
                                    <br>
                                </div>
                                <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Problem</b>
                                    
                                    </span>
                            </div>
                                    <div class="row">
                                        <br>
                                                    <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                                        
                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <label class=""><Strong>Problem</Strong></label>
                                                                <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                                <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <label class="">Since</label>
                                                                <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <label class="">Condition Type</label>
                                                                <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-4">
                                                            <div class="col-md-12">
                                                                <label class="">Condition significance</label>
                                                                <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12">
                                                            <div class="col-md-12">
                                                                <label class="">Comment</label>
                                                                <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in summery</label><br>
                                        </div>
                               
                                    </div>

                                    
                                        <br>
                                    </div>
                                    <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Examination</b>
                                    
                                    </span>
                            </div>
                        
                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Examination</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Since</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    </div>
                                    <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Allergy</b>
                                    
                                    </span>
                            </div>
                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>allergy</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Since</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    </div>
                                    <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Medical History</b>
                                    
                                    </span>
                            </div>
                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Medical History</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Since</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in summery</label><br>
                                        </div>
                               
                                    </div>

                                    
                                    <br>
                                    </div>
                                    <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Family History</b>
                                    
                                    </span>
                            </div>
                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Family History</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Since</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in summery</label><br>
                                        </div>
                               
                                    </div>

                                    
                                    <br>
                                    </div>
                                    <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                   
                                    <span style="padding: 10px; margin-left: 25px;"> <b>Social</b>
                                    
                                    </span>
                            </div>
                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Social</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Since</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in summery</label><br>
                                        </div>
                               
                                    <!-- </div>

                                    <div class="col-md-12"> -->
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in alert</label><br>
                                        </div>
                               
                                    </div>

                                   

                            <br>
                        </div>

                        <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Medication</b>
                                    
                                    </span>
                            </div>
                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Medication</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Since</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in summery</label><br>
                                        </div>
                               
                                    </div>

                                    
                                    <br>
                                    </div>

                                    <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Product</b>
                                    
                                    </span>
                            </div>
                                    <div class="row">
                                        <div class="col-md-11" style="border: 3px groove; border-redius: 5px; border-radius: 10px; padding: 16px; margin-left: 31px;">

                               
                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class=""><Strong>Product</Strong></label>
                                                    <div class="input-group mb-3">
                                                        <input type="search" class="form-control" placeholder="Search ......" aria-label="Search for allergies" id="allergySearch" style="width: 95%;">
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">
                                                                <i class="fa fa-search" style="height: 24px; text-align: justify; padding-top: inherit; font-size: medium;color: gray;"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <!-- <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" /> -->
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Since</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition Type</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="col-md-12">
                                                    <label class="">Condition significance</label>
                                                    <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('Internal name');?>" />
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="col-md-12">
                                                    <label class="">Comment</label>
                                                    <textarea name="" id="" class="form-control" cols="20" rows="4"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                                            <label for="vehicle1"> Show in summery</label><br>
                                        </div>
                               
                                    </div>

                                    
                                    <br>
                                    </div>

                                    <div class="col-md-11" >
                            <br>
                                <div class="row" >

                                    <!-- <div class="col-md-12" style="background-color: #f1f1f1; margin-left: 16px; ">
                                        <h3><span><Strong>Consultation Notes</Strong></span></h3>
                                    </div> -->

                                    <span style="padding: 10px; margin-left: 25px;"> <b>Comment</b>
                                    
                                    </span>
                            </div>

                                    <div class="col-md-12">
                                        <div class="col-md-12">
                                           <textarea name="" id="" class="form-control" cols="20" rows="5"></textarea>

                                        </div>

                                    </div>
                                </div>
                        

                            <input type="hidden" class="form-control" name="diagram_url" id="diagram_url" readonly>
                                <div class="col-md-12">
                                    <br>

                                    <!-- <button type="button" id="extend" class="btn btn-sm btn-primary"  style="background:#337ab7;">Presenting Complaint </button>
                                    <button type="button" id="extend" class="btn btn-sm btn-primary"  style="background:#337ab7;">Problem heading </button>
                                    <button type="button" id="extend" class="btn btn-sm btn-primary"  style="background:#337ab7;">Examination </button>
                                    <button type="button" id="extend" class="btn btn-sm btn-primary"  style="background:#337ab7;">Allergy </button>
                                    <button type="button" id="extend" class="btn btn-sm btn-primary"  style="background:#337ab7;">Medical History </button>
                                    <button type="button" id="extend" class="btn btn-sm btn-primary"  style="background:#337ab7;">Family History </button>
                                    <button type="button" id="extend" class="btn btn-sm btn-primary"  style="background:#337ab7;">Social</button>
                                    <button type="button" id="extend" class="btn btn-sm btn-primary"  style="background:#337ab7;">Medication</button>
                                    <button type="button" id="extend" class="btn btn-sm btn-primary"  style="background:#337ab7;">Product</button>
                                    <button type="button" id="extend" class="btn btn-sm btn-primary"  style="background:#337ab7;">Comment</button> -->

                                    <!-- <div class="container"> -->
    <!-- Buttons -->
    <div class="btn-group" role="group">
        <button type="button" id="btn-complaint" class="btn btn-sm btn-primary">Presenting Complaint</button>
        <button type="button" id="btn-problem" class="btn btn-sm btn-primary">Problem Heading</button>
        <button type="button" id="btn-exam" class="btn btn-sm btn-primary">Examination</button>
        <button type="button" id="btn-allergy" class="btn btn-sm btn-primary">Allergy</button>
        <button type="button" id="btn-medical-history" class="btn btn-sm btn-primary">Medical History</button>
        <button type="button" id="btn-family-history" class="btn btn-sm btn-primary">Family History</button>
        <button type="button" id="btn-social" class="btn btn-sm btn-primary">Social</button>
        <button type="button" id="btn-medication" class="btn btn-sm btn-primary">Medication</button>
        <button type="button" id="btn-product" class="btn btn-sm btn-primary">Product</button>
        <button type="button" id="btn-comment" class="btn btn-sm btn-primary">Comment</button>
    </div>

    <!-- Forms -->
    <div id="form-complaint" class="form-section" style="display:none;">
        <!-- Presenting Complaint Form -->
        <h4>Presenting Complaint</h4>
        <input type="text" class="form-control" placeholder="Enter Complaint">
    </div>
    <div id="form-problem" class="form-section" style="display:none;">
        <!-- Problem Heading Form -->
        <h4>Problem Heading</h4>
        <input type="text" class="form-control" placeholder="Enter Problem Heading">
    </div>
    <div id="form-exam" class="form-section" style="display:none;">
        <!-- Examination Form -->
        <h4>Examination</h4>
        <textarea class="form-control" placeholder="Enter Examination Details"></textarea>
    </div>
    <div id="form-allergy" class="form-section" style="display:none;">
        <!-- Allergy Form -->
        <h4>Allergy</h4>
        <input type="text" class="form-control" placeholder="Enter Allergy Information">
    </div>
    <!-- Add other form sections similarly -->
</div>


                                </div>

                    </div>
<!-- </div> -->
                    
                    <div class="col-md-4" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">

                        <div class="form-group">
                           <div class="col-md-4">

                           <div class="col-md-12">
                            <span><strong> Snapshot</strong></span>
                            <span><strong> Problem heading</strong></span>
                            <span><strong> Medical History</strong></span>
                            <span><strong> Medication</strong></span>
                            <span><strong> Product</strong></span>
                            <span><strong> Family History</strong></span>
                            <span><strong> Social</strong></span>
                            
                            </div>

                        </div>
                          
                     </div>





                    <div id="customeName"></div>

                    <div id="select_question" style="display:none;"></div>


                    <div id="questionResponse_type"></div>

                    <div id="extend-field">
                    
                    <!-- <p id="addQuestion"></p> -->
                    </div>
                    
                    
                    
            </div>
            <div class="text-right">
                <button type="submit" id="submit" class="btn btn-sm btn-primary"  style="background:#337ab7;">Save</button>
            </div>
        </form>
        
    </div>


<!-- END Datatables Content -->
</div>
<!-- END Page Content -->
<style>
    .human-body {
    width: 207px;
    position: relative;
    padding-top: 146px;
    /* height: 260px; */
    display: block;
    margin: 0px auto;
}
.human-body svg:hover {
    cursor: pointer;
}
.human-body svg:hover path {
    fill: #ff7d16;
}
.human-body svg {
    position: absolute;
    left: 50%;
    fill: #57c9d5;
}
/* .human-body svg.head {
    margin-left: -28.5px;
    top: -6px;
} */
.human-body svg.head {
    margin-left: -25.5px;
    top: -5px;
}
/* .human-body svg.shoulder {
    margin-left: -53.5px;
    top: 69px;
} */
.human-body svg.shoulder {
    margin-left: -42.5px;
    top: 26px;
}

/* .human-body svg.arm {
    margin-left: -78px;
    top: 112px;
} */
.human-body svg.arm {
    margin-left: -71px;
    top: 40px;
}

/* .human-body svg.cheast {
    margin-left: -43.5px;
    top: 88px;
} */
.human-body svg.cheast {
    margin-left: -32.5px;
    top: 31px;
}

/* .human-body svg.stomach {
    margin-left: -37.5px;
    top: 130px;
} */

.human-body svg.stomach {
    margin-left: -27.5px;
    top: 40px;
}
/* .human-body svg.legs {
    margin-left: -46.5px;
    top: 205px;
    z-index: 9999;
} */
.human-body svg.legs {
    margin-left: -32.5px;
    top: 61px;
    z-index: 9999;
}
/* .human-body svg.hands {
    margin-left: -102.5px;
    top: 224px;
} */
.human-body svg.hands {
    margin-left: -51.5px;
    top: 77px;
}

#area {
    display: block;
    width: 50%;
    clear: both;
    padding: 0px;
    text-align: center;
    font-size: 13px;
    font-family: Courier New;
    color: #a5a5a5;
}

#area #data {
    color: black;
}
</style>




<script>
    $(document).ready(function() {
    // Hide all forms initially
    $('.form-section').hide();

    // Show the form corresponding to the clicked button
    $('#btn-complaint').click(function() {
        $('.form-section').hide(); // Hide all forms
        $('#form-complaint').show(); // Show the selected form
    });

    $('#btn-problem').click(function() {
        $('.form-section').hide();
        $('#form-problem').show();
    });

    $('#btn-exam').click(function() {
        $('.form-section').hide();
        $('#form-exam').show();
    });

    $('#btn-allergy').click(function() {
        $('.form-section').hide();
        $('#form-allergy').show();
    });

    // Add similar click handlers for other buttons
});

</script>
