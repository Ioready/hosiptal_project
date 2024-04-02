<style>
#message_div{
        background-color: #ffffff;
        border: 1px solid;
        box-shadow: 10px 10px 5px #888888;
        display: none;
        height: auto;
        left: 36%;
        position: fixed;
        top: 20%;
        width: 40%;
        z-index: 1;
      }
      
#close_button{
        right:-15px;
        top:-15px;
        cursor: pointer;
        position: absolute;
    }
    #close_button img{
        width:30px;
        height:30px;
    }    
    #message_container{
        height: 450px;
        overflow-y: scroll;
        padding: 20px;
        text-align: justify;
        width: 99%;
    }
    .t-head{
    background-color:rgb(219, 234, 255) !important;
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

</style>   
                   
    <!-- Page content -->
    <div id="page-content">
        <!-- Datatables Header -->
        <ul class="breadcrumb breadcrumb-top">
        <li>
            <a href="<?php echo site_url('pwfpanel');?>">Home</a>
        </li>
        <li>
            <a href="<?php echo site_url('emailTemplate');?>">Email Templates</a>
        </li>
        </ul>
        <!-- END Datatables Header -->






        <div class="block full">
    <div class="block-title">
        <h2><strong>Bodies</strong> Panel</h2>
    </div>
    <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
        <div class="alert alert-danger" id="error-box" style="display: none"></div>
        <div class="form-body">
            <select class="form-select" aria-label="Default select example">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
            <h1>placeholder</h1>
            <div class="row m-4 p-4"  style="background-color: #FFFF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="input1">App Name : <strong class="fw-bold">(App Name)</strong></label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="input1">company Name : <strong class="fw-bold">(company Name)</strong></label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="input1">App Url : <strong class="fw-bold">(App_url)</strong></label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="input1">Email : <strong class="fw-bold">(Email)</strong></label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="input1">Password : <strong class="fw-bold">(Password)</strong></label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class=" control-label">Internal name*</label>
                    <div class="form-group"> 
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('first_name');?>" />
                            <span class="help-block">This is used for internal reference and won't be seen by patients.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class=" control-label">Internal name*</label>
                    <div class="form-group"> 
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="internal_name" id="internal_name" placeholder="<?php echo lang('first_name');?>" />
                            <span class="help-block">This is used for internal reference and won't be seen by patients.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-md-2 control-label">Create Letter template*</label>
                    <div class="col-md-10">
                        <!-- Textarea for CKEditor -->
                        <textarea id="editor" name="bodies_template"></textarea>
                    </div>
                </div>
            </div>
            <div class="text-right">
                <button type="submit" id="submit"  class="btn btn-sm btn-primary mt-2" style="background:#337ab7;">Save changes</button>
            </div>
        </div>
    </form>
</div>

<!-- CKEditor JS (CDN) -->
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>


<!-- Script to initialize CKEditor -->
<script>
    // Initialize CKEditor
    CKEDITOR.replace('editor');
</script>







        

        <!-- Datatables Content -->
        <div class="block full">
            <div class="block-title">
            
            <h2><strong>Email Template</strong> Panel</h2>
           
              
        <?php if ($this->ion_auth->is_superAdmin()) {?>

            <h2><a href="javascript:void(0)" onclick="open_modal('emailTemplate')" class="save-btn btn btn-sm btn-primary">
            <i class="gi gi-circle_plus"></i> Email Template
            </a></h2>      
        <?php }?>

            </div>
            <h2><a href="javascript:void(0)" onclick="open_modal('emailTemplate')" class="save-btn btn btn-sm btn-primary">
            <i class="gi gi-circle_plus"></i> Email Template
            </a></h2>   
            <div class="table-responsive">
                <table id="common_datatable_cms" class="table table-vcenter table-condensed table-bordered text-center">
                    <thead>
                        <tr>                                            
                            <th  class="t-head text-center"><?php echo lang('serial_no'); ?></th>
                            <th class="t-head text-center">Email Type</th>
                            <th class="t-head text-center" class="t-head">Title</th>
<!--                            <th class="t-head"><?php echo lang('description'); ?></th>
                            <th class="t-head"><?php echo lang('image'); ?></th>-->
                            <th class="t-head text-center"><?php echo lang('action'); ?></th>
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
                                <td><?php echo $rowCount; ?></td>            
                                <td><?php echo $rows->email_type; ?></td>
                                <td><?php echo $rows->title; ?></td>
<!--                                <td style="width:25%;"><?php
                                    if (strlen($rows->description) > 400) {
                                        $content = $rows->description;
                                        echo mb_substr($rows->description, 0, 400, 'UTF-8') . '...<br>';
                                        ?>
                                        <a style="cursor:pointer" onclick="show_message('<?php echo base64_encode($content); ?>')"><?php echo lang('view'); ?></a>
                                        <?php
                                    } else if (strlen($rows->description) > 0) {
                                        echo $rows->description;
                                    }
                                    ?></td>
                                <td><img width="100" src="<?php if (!empty($rows->image)) {
                                echo base_Url() ?>uploads/emailTemplate/<?php echo $rows->image;
                            } else {
                                echo base_url() . DEFAULT_NO_IMG_PATH;
                            } ?>" /></td>-->

                                <td class="actions">
                                    <a href="javascript:void(0)" class="btn btn-xs btn-default" onclick="editFn('emailTemplate','template_edit','<?php echo encoding($rows->id) ?>');"><i class="fa fa-pencil"></i></a>
                                    <?php if($rows->is_active == 1) {?>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-success" onclick="editStatusFn('vendor_sale_email_template','id','<?php echo encoding($rows->id);?>','<?php echo $rows->is_active;?>')" title="Inactive Now"><i class="fa fa-check"></i></a>
                                    <?php } else { ?>
                                    <a href="javascript:void(0)" class="btn btn-xs btn-danger" onclick="editStatusFn('vendor_sale_email_template','id','<?php echo encoding($rows->id); ?>','<?php echo $rows->is_active;?>')" title="Active Now"><i class="fa fa-times"></i></a>
                                    <?php } ?>
                                    <a href="javascript:void(0)" onclick="deleteFn('vendor_sale_email_template','id','<?php echo encoding($rows->id); ?>','emailTemplate')" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach;
                    endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Datatables Content -->
    </div>
    <!-- END Page Content -->
<div id="form-modal-box"></div>
<div id="message_div">
    <span id="close_button"><img src="<?php echo base_url(); ?>backend_asset/images/close.png" onclick="close_message();"></span>
    <div id="message_container"></div>
</div>
                    