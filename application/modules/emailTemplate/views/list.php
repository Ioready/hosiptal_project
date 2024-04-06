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
     <!-- <h2><strong>Email</strong> Panel</h2> -->
     
     <h2>
     <a href="<?php echo site_url('emailTemplate/letterTemplate'); ?>" class="save-btn btn btn-sm btn-primary <?php echo (strtolower($this->router->fetch_class()) == "emailTemplate") ? "active" : "" ?>"><span class="sidebar-nav-mini-hide"> <i class="gi gi-circle_plus"></i> Add New Template</span></a>
                                                
                                            
        <!-- <a href="javascript:void(0)" onclick="open_modal('emailTemplate/letterTemplate')" class="save-btn btn btn-sm btn-primary"> -->
            <!-- <i class="gi gi-circle_plus"></i> Email Template -->
            <!-- </a> -->
        </h2>  
    

        
                <label for="" style="padding-left:50%;" class="flex"> <label> Template list </label>
                    <select name="template_id" id="template_list" class="form-control">
                    <option value="">Select template</option>
                                <?php 
                                foreach($all_template as $row){ ?>
                                     <option value="<?php echo $row->id?>"><?php echo $row->internal_name?></option>

                               <?php }
                                ?>

                    
                        <!-- <option value="">new</option> -->
                    </select>
                </label>  
           

    </div>
      <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('/emailTemplate/sendEmailTemplate') ?>" enctype="multipart/form-data">
      <div class="alert alert-danger" id="error-box" style="display: none"></div>
        
        <div class="form-body" id="template_data">

            <div class="row">
                <div class="col-md-5">
                <img width="100px;" src="<?php echo ('http://localhost/hosiptal_project/uploads/'. $EmailTemplates->header_logo); ?>" alt="Header">
                </div>

                <div class="col-md-4">
                        <div class="form-group">
                        <h3 class="m-4 fw-bold"> <label for="input1"><strong class="fw-bold"><?php echo ucwords($EmailTemplates->internal_name);?></strong></label> </h3>
                        </div>
                    </div>
                </div>

        

            <!-- <h3 class="m-4 fw-bold"><?php echo $EmailTemplates->internal_name;?></h3> -->
            <div class="row m-4 p-4"  style="background-color: #FFFF; box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.4);">

            
            
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="input1">App Name : <strong class="fw-bold"><input type="text" class="form-control" name="app_name" id="app_name" value="<?php echo $EmailTemplates->internal_name;?>" placeholder="<?php echo lang('password');?>" /></strong></label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="input1">Company Name : <strong class="fw-bold"><input type="text" class="form-control" name="company_name" id="company_name" placeholder="<?php echo lang('Company name');?>" /></strong></label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="input1">App Url : <strong class="fw-bold"><input type="text" class="form-control" name="app_url" id="app_url" placeholder="<?php echo lang('app url');?>" /></strong></label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="input1">Email : <strong class="fw-bold"><input type="email" class="form-control" name="email" id="email" placeholder="<?php echo lang('Email');?>" /></strong></label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="input1">Password : <strong class="fw-bold">
                        <input type="password" class="form-control" name="password" id="password" placeholder="<?php echo lang('password');?>" />
                           
                        </strong></label>
                    </div>
                </div>
            </div>
            <div class="row m-4">
                <div class="col-md-6">
                    <label class=" control-label">Subject*</label>
                    <div class="form-group"> 
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="<?php echo lang('subject');?>" />
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label class=" control-label">From*</label>
                    <div class="form-group"> 
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="from_mail" id="from_mail" placeholder="<?php echo lang('from_mail');?>" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
            <label class="control-label mb-4">Create Letter template*</label>
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea id="editor" name="description"><?php echo $EmailTemplates->bodies_template;?></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                <img width="100px;" src="<?php echo ('http://localhost/hosiptal_project/uploads/'. $EmailTemplates->logo); ?>" alt="footer">
                </div>

                <div class="col-md-4">
                        <div class="form-group">
                        <h3 class="m-4 fw-bold"> <label for="input1"><strong class="fw-bold"><?php echo ucwords($EmailTemplates->footer_internal_name);?></strong></label> </h3>
                        </div>
                </div>
            </div>

            <div class="text-right">
                <button type="submit" id="submit"  class="btn btn-sm btn-primary mt-2" style="background:#337ab7;">Save</button>
            </div>
            <?php //}?>
            <?php //}?>
        </div>
    </form>
</div>
<div id="form-modal-box"></div>
<!-- CKEditor JS (CDN) -->
<script src="https://cdn.ckeditor.com/4.17.2/standard/ckeditor.js"></script>

<script>
    CKEDITOR.replace('editor');
</script>
<!-- <script>
     $("#template_list").change(function () {
        var template_id = this.value;
        alert(template_id);
        var firstDropVal = $('#template_data').val();
    });
</script> -->

<!-- <script>
    $("#template_list").change(function () {
        var template_id = this.value;
        
        $.ajax({
            url: '<?php echo base_url(); ?>' + "/emailTemplate/index", 
            method: 'GET', 
            data: { template_id: template_id },
            success: function(response) {
               
                $('#template_data').html(response);
            },
            error: function(xhr, status, error) {
               
                console.error(xhr.responseText);
            }
        });
    });
</script> -->

<script>
    $("#template_list").change(function () {
    var template_id = this.value;

    // Hide side menu and header
    $('.sidebar-section sidebar-user clearfix sidebar-nav-mini-hide m-0').hide();
    $('.navbar navbar-default d-flex justify-content-end').hide();

    // Assuming you want to send the template_id as a filter parameter
    $.ajax({
        url: '<?php echo base_url(); ?>' + "/emailTemplate/index", // Replace with your controller endpoint URL
        method: 'GET', // Or 'POST' depending on your preference
        data: { template_id: template_id },
        success: function(response) {
            // Update the content of the div with the response

            // alert(response['']);
            // $('#template_data').value(response);

            // Scroll to the top of the form
            // $('html, body').animate({ scrollTop: $('#template_data').offset().top }, 'slow');
        },
        error: function(xhr, status, error) {
            // Handle any errors
            console.error(xhr.responseText);
        },
        // complete: function() {
        //     // Show side menu and header after AJAX request is complete
        //     $('.sidebar').show();
        //     $('.navbar').show();
        // }
    });
});


</script>



<!-- Script to initialize CKEditor -->













        

      