
<script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>


<style>
    .modal-footer .btn + .btn {
    margin-bottom: 5px !important;
    margin-left: 5px;
}
</style>
<div id="commonModal" class="modal fade bd-example-modal-lg" role="dialog">
    <div class="modal-dialog modal-lg">
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
                            <div class="col-md-12" >
                                <div class="form-group">
                                    <!-- <label class="col-md-3 control-label">Patient Name</label> -->
                                    
                                    <div class="col-md-9">
                                    <h4 class="no-margins fw-bold"></h4>
                                        <input type="hidden" class="form-control" name="patient_id" id="patient_id_data" value="<?php print_r($this->data['patient_id']);?>"/>
                                    </div>
                                </div>
                            </div>

                           

                            <div class="col-md-12" >
                                <div class="row">
                                    <div class="col-sm-3">
                                    <label class="control-label">letter body</label>
                                    
                                    </div>
                                    <div class="col-sm-3">
                                        <!-- <button class="btn" style="border: 1px solid; background-color: green;">Save As draft</button> -->
                                    
                                    </div>
                                    <div class="col-sm-3">
                                    <!-- <button class="btn" style="border: 1px solid; background-color: white;">Restore Preview</button> -->
                                    
                                    </div>
                                    <div class="col-sm-3">

                                        <select name="" id="" class="form-control">
                                            <option value="Awaiting Review">Awaiting Review</option>
                                            <option value="Awaiting Currection">Awaiting Currection</option>
                                            <option value="Completed">Completed</option>
                                            
                                        </select>

                                    </div>

                                </div>
                            

                            
                                <div class="form-group">
                                    
                                    <div class="col-md-12">
                                    <textarea name="details" id="body" rows="10"></textarea>
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
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->

<script>
    CKEDITOR.plugins.addExternal('countryselector', '/path/to/ckeditor/plugins/countryselector/', 'plugin.js');
    CKEDITOR.plugins.addExternal('patientselector', '/path/to/ckeditor/plugins/patientselector/', 'plugin.js');
    
    CKEDITOR.replace('body', {
        allowedContent: true,
        on: {
        instanceReady: function( ev ) {
            // Output paragraphs as <p>Text</p>.
            this.dataProcessor.writer.setRules( 'p', {
                indent: false,
                breakBeforeOpen: true,
                breakAfterOpen: false,
                breakBeforeClose: false,
                breakAfterClose: true
            });
        }
    },

        extraPlugins: 'countryselector,patientselector',
        toolbar: [
            { name: 'document', items: ['Source', '-', 'NewPage', 'Preview', '-', 'Templates'] },
            { name: 'clipboard', items: ['Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo'] },
            { name: 'editing', items: ['Find', 'Replace', '-', 'SelectAll', '-', 'SpellChecker'] },
            '/',
            { name: 'basicstyles', items: ['Bold', 'Italic', 'Underline', '-', 'RemoveFormat'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote'] },
            { name: 'insert', items: ['Image', 'Table', 'HorizontalRule', 'SpecialChar'] },
            '/',
            { name: 'styles', items: ['Styles', 'Format'] },
            { name: 'colors', items: ['TextColor', 'BGColor'] },
            { name: 'tools', items: ['Maximize'] },
            '/',
            { name: 'custom', items: ['CountrySelector','Patient'] }  // Add the custom dropdown here
        ],
        height: 300
    });


    CKEDITOR.plugins.add('countryselector', {
    init: function(editor) {
        editor.ui.addRichCombo('CountrySelector', {
            label: 'Insert Template',
            title: 'Insert Template',
            voiceLabel: 'Insert Template',
            className: 'cke_format',
            multiSelect: false,

            panel: {
                css: [CKEDITOR.skin.getPath('editor')].concat(editor.config.contentsCss),
                voiceLabel: editor.lang.panelVoiceLabel
            },

            init: function() {
                
                var countries = [ <?php  echo $send_mail_template;?>
                   
                ];

                for (var i = 0; i < countries.length; i++) {
                    this.add(countries[i], countries[i], countries[i]);
                }
            },

            onClick: function(value) {
                var id = value;
                // alert(id);

            $.ajax({
            url: '<?php echo base_url(); ?>'+ "lettersAndForm/getAllEmailTemplate",
            type: 'POST',
            data: {id:id},
            success: function (data, textStatus, jqXHR) {
                // alert(data);
                // editor.html(data);

                var writer = editor.dataProcessor.writer;

// The character sequence to use for every indentation step.
writer.indentationChars = '\t';

// The way to close self-closing tags, like <br/>.
writer.selfClosingEnd = ' />';

// The character sequence to be used for line breaks.
writer.lineBreakChars = '\n';

// The writing rules for the <p> tag.
writer.setRules( 'p', {
    // Indicates that this tag causes indentation on line breaks inside of it.
    indent: true,

    // Inserts a line break before the <p> opening tag.
    breakBeforeOpen: true,

    // Inserts a line break after the <p> opening tag.
    breakAfterOpen: true,

    // Inserts a line break before the </p> closing tag.
    breakBeforeClose: false,

    // Inserts a line break after the </p> closing tag.
    breakAfterClose: true
} );

                editor.insertText(data);
               
                    }
                });

               
                // editor.insertText(value);
            }
        });
    }
});

CKEDITOR.plugins.add('patientselector', {
    init: function(editor) {
        editor.ui.addRichCombo('Patient', {
            label: 'Patient',
            title: 'Patient',
            voiceLabel: 'Patient',
            className: 'cke_format1',
            multiSelect: false,

            panel: {
                css: [CKEDITOR.skin.getPath('editor')].concat(editor.config.contentsCss),
                voiceLabel: editor.lang.panelVoiceLabel
            },

            init: function() {
                var countries = [
                    'United States', 'Canada', 'United Kingdom', 'Australia', 'Germany', 'France', 'India', 'China', 'Japan', 'Russia'
                ];

                for (var i = 0; i < countries.length; i++) {
                    this.add(countries[i], countries[i], countries[i]);
                }
            },

            onClick: function(value) {
                editor.insertText(value);
            }
        });
    }
});


</script>




