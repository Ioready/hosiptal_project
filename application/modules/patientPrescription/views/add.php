<style>
    .modal-footer .btn + .btn {
    margin-bottom: 5px !important;
    margin-left: 5px;
}
</style>
<div id="commonModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
            <div class="modal-header text-center">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> <?php echo (isset($title)) ? ucwords($title) : "" ?></h2>
                    </div>
                <div class="modal-body">
                    <!-- <div class="loaders">
                        <img src="<?php //echo base_url().'backend_asset/images/Preloader_2.gif';?>" class="loaders-img" class="img-responsive">
                    </div> -->
                    <div class="alert alert-danger" id="error-box" style="display: none"></div>
                    <div class="form-body">
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-11" >
                                <div class="form-group">
                                    <!-- <label class="col-md-3 control-label">Patient Name</label> -->
                                    
                                    <div class="col-md-9">
                                    <h4 class="no-margins fw-bold"></h4>
                                    
                                        <input type="hidden" class="form-control" name="patient_id" id="patient_id_data" value="<?php print_r($this->data['patient_id']);?>"/>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-11" >
                           
                            
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Prescriptions Name</label>
                                    <div class="col-md-9">
                                    <select id="framework" name="prescriptions_name" class="form-control">
                                    
                                    <?php foreach ($precautions as $category) { ?>
                                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                                </div>
                            </div>
                            

                            <div class="col-md-11" >
                           
                            
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Doctor Name</label>
                                    <div class="col-md-9">
                                    <select id="framework" name="doctor_name" class="form-control">
                                    
                                    <?php foreach ($doctors as $category) { ?>
                                    <option value="<?php echo $category->id; ?>"><?php echo $category->first_name. ' '. $category->last_name; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                                </div>
                            </div>

                            <div class="col-md-11" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Details</label>
                                    <div class="col-md-9">
                                    <textarea name="detail" id="detail" rows="4" cols="40"></textarea>
                                        <!-- <input type="text" class="form-control" name="detail" id="detail" placeholder="detail" /> -->
                                    </div>
                                </div>
                            </div>

                            
                            
                            <div class="space-22"></div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal"><?php echo lang('reset_btn');?></button>
                    <button  style="background: #337ab7" type="submit" id="submit" class="btn btn-sm btn-primary m-2" ><?php echo lang('submit_btn');?></button>
                </div>
            </form>
        </div> <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->

   
</div>
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
  
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" /> -->

<script type="text/javascript">
  $(document).ready(function(){
 $('#framework').multiselect({
  nonSelectedText: 'Select Framework',
  enableFiltering: true,
  enableCaseInsensitiveFiltering: true,
  buttonWidth:'342px',

 });
});

</script>

