<script>
    var urls = "<?php echo base_url() ?>";
    /* window.setTimeout(function () {
     bootbox.hideAll();
     }, 2000);*/

    /** start script in application **/


    var logout = function () {
        bootbox.confirm('<?php echo lang('Logout_Confirmation'); ?>', function (isTrue) {
            if (isTrue) {
                $.ajax({
                    url: '<?php echo base_url() . 'pwfpanel/logout' ?>',
                    type: 'POST',
                    dataType: "JSON",
                    success: function (data) {
                        window.location.href = data.url;
                    }
                });
            }
        });

    }

    var addFormBoot = function (ctrl, method)
    {
        $(document).on('submit', "#add-form-common", function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>' + ctrl + "/" + method,
                data: formData, //only input
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $(".loaders").fadeIn("slow");
                },
                success: function (response, textStatus, jqXHR) {
                    try {
                        var data = $.parseJSON(response);
                        if (data.status == 1)
                        {
//                            bootbox.alert({
//                                message: data.message,
//                                callback: function (
//
//
//                                        ) { /* your callback code */
//                                }
//                            });
                            $("#commonModal").modal('show');
                            toastr.success(data.message);


                            window.setTimeout(function () {
                                window.location.href = "<?php echo base_url(); ?>" + ctrl;
                            }, 2000);
                            $(".loaders").fadeOut("slow");

                        } else {
                            toastr.error(data.message);
                            $('#error-box').show();
                            $("#error-box").html(data.message);
                            $(".loaders").fadeOut("slow");
                            setTimeout(function () {
                                $('#error-box').hide(800);
                            }, 1000);
                        }
                    } catch (e) {
                        $('#error-box').show();
                        $("#error-box").html(data.message);
                        $(".loaders").fadeOut("slow");
                        setTimeout(function () {
                            $('#error-box').hide(800);
                        }, 1000);
                    }
                }
            });

        });
    }

    var updateFormBoot = function (ctrl, method)
    {
        $("#edit-form-common").submit(function (event) {
            event.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                type: "POST",
                url: '<?php echo base_url(); ?>' + ctrl + "/" + method,
                data: formData, //only input
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $(".loaders").fadeIn("slow");
                },
                success: function (response, textStatus, jqXHR) {
                    try {
                        var data = $.parseJSON(response);
                        if (data.status == 1)
                        {
//                            bootbox.alert({
//                                message: data.message,
//                                callback: function (
//
//
//                                        ) { /* your callback code */
//                                }
//                            });
                            $("#commonModal").modal('hide');
                            toastr.success(data.message);
                            window.setTimeout(function () {
                                window.location.href = "<?php echo base_url(); ?>" + ctrl;
                            }, 2000);
                            $(".loaders").fadeOut("slow");

                        } else {
                            $('#error-box').show();
                            $("#error-box").html(data.message);
                            $(".loaders").fadeOut("slow");
                            setTimeout(function () {
                                $('#error-box').hide(800);
                            }, 1000);
                        }
                    } catch (e) {
                        $('#error-box').show();
                        $("#error-box").html(data.message);
                        $(".loaders").fadeOut("slow");
                        setTimeout(function () {
                            $('#error-box').hide(800);
                        }, 1000);
                    }
                }
            });

        });
    }

    var editFn = function (ctrl, method, id) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + ctrl + "/" + method,
            type: 'POST',
            data: {'id': id},
            beforeSend: function () {
                $(".loaders").fadeIn("slow");
            },
            success: function (data, textStatus, jqXHR) {

                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
                addFormBoot();
                $(".loaders").fadeOut("slow");
            }
        });
    }

    var editHeader = function (ctrl, method, id) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + ctrl + "/" + method,
            type: 'POST',
            data: {'id': id},
            beforeSend: function () {
                $(".loaders").fadeIn("slow");
            },
            success: function (data, textStatus, jqXHR) {

                $('#form-modal-box-header').html(data);
                $("#commonModal").modal('show');
                addFormBoot();
                $(".loaders").fadeOut("slow");
            }
        });
    }
    

    var payFn = function (ctrl, method, id) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + ctrl + "/" + method,
            type: 'POST',
            data: {'id': id},
            beforeSend: function () {
                $(".loaders").fadeIn("slow");
            },
            success: function (data, textStatus, jqXHR) {

                $('#form-modal-box-pay').html(data);
                $("#commonModal").modal('show');
                addFormBoot();
                $(".loaders").fadeOut("slow");
            }
        });
    }

    var payFnP = function (ctrl, method, id) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + ctrl + "/" + method,
            type: 'POST',
            data: {'id': id},
            beforeSend: function () {
                $(".loaders").fadeIn("slow");
            },
            success: function (data, textStatus, jqXHR) {

                $('#form-modal-box-payp').html(data);
                $("#commonModalPayPatient").modal('show');
                addFormBoot();
                $(".loaders").fadeOut("slow");
            }
        });
    }



    var pdfInvoice = function (ctrl, method, id) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + ctrl + "/" + method,
            type: 'POST',
            data: {'id': id},
            beforeSend: function () {
                $(".loaders").fadeIn("slow");
            },
            success: function (data, textStatus, jqXHR) {

                $('#form-modal-box-pdf').html(data);
                $("#commonModal").modal('show');
                addFormBoot();
                $(".loaders").fadeOut("slow");
            }
        });
    }

    var pdfInvoiceReceipt = function (ctrl, method, id) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + ctrl + "/" + method,
            type: 'POST',
            data: {'id': id},
            beforeSend: function () {
                $(".loaders").fadeIn("slow");
            },
            success: function (data, textStatus, jqXHR) {

                $('#form-modal-box-receipt').html(data);
                $("#commonModalReceipt").modal('show');
                addFormBoot();
                $(".loaders").fadeOut("slow");
            }
        });
    }

    

    var viewFn = function (ctrl, method, id) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + ctrl + "/" + method,
            type: 'POST',
            data: {'id': id},
            beforeSend: function () {
                $(".loaders").fadeIn("slow");
            },
            success: function (data, textStatus, jqXHR) {

                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
                addFormBoot();
                $(".loaders").fadeOut("slow");
            }
        });
    }

    var open_modal = function (controller) {
        var id = $('#patient_id').val();
        // alert(id);
        if(id==''){
            $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
            }
        });

        }else{
            var id = $('#patient_id').val();
            $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',id:id},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
            }
        });
        }
        
    }

    var open_modal_documents = function (controller) {
        var id = $('#patient_id').val();
        // alert(id);
        if(id==''){
            $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_modal_documents",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
            }
        });

        }else{
            var id = $('#patient_id').val();
            $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_modal_documents",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',id:id},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
            }
        });
        }
        
    }

    var open_modal_documents_gallery = function (controller) {
        var id = $('#patient_id').val();
        var folder_id = $('#folder_id').val();
        // alert(folder_idss);
        if(id==''){
            $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/fileGallery",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box-gallery').html(data);
                $("#commonModalGallery").modal('show');
            }
        });

        }else{
            var id = $('#patient_id').val();
            var folder_id = $('#folder_id').val();
            $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/fileGallery",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',id:id,folder_id:folder_idss},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box-galler').html(data);
                $("#commonModalGallery").modal('show');
            }
        });
        }
        
    }

    var open_model_new = function (controller) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model_new",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box').html(data);
                $("#commonModalNew").modal('show');
            }
        });
    }
    var open_model_newp = function (controller) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model_new",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box-appointment-patientb').html(data);
                $("#commonModalNewPatient").modal('show');
            }
        });
    }

    
    var open_model_new_patient = function (controller) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model_new_patient",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box-appointment-patient').html(data);
                $("#commonModalNewAppointment").modal('show');
            }
        });
    }

    var open_model_medication = function (controller) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model_medication",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-medicine-box').html(data);
                $("#commonModalMedicine").modal('show');
            }
        });
    }

    
    var open_modal_edit = function (controller, id) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model_edit" + "?id=" + id,
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
            }
        });
    }

    $(document).on("click",".user-edit-data",function() {
    // var open_modal_edit_user = function (controller) {
        var id = $(this).attr("id");
        // alert(id);
        $.ajax({
            url: '<?php echo base_url(); ?>'+"/users/open_model_edit_user",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',id:id},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box-user').html(data);
                $("#commonModalUser").modal('show');
            }
        });
    });


    var open_model_invoice = function (controller) {
        var id = $('#patient_id').val();
        

        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model_invoice",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>',id:id},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
            }
        });
    }

    var open_modal_edit_letters = function (controller, id) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model_edit" + "?id=" + id,
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box-edit').html(data);
                $("#commonModal").modal('show');
            }
        });
    }
    

    var deleteFn = function (table, field, id, ctrl, method, txt) {

        console.log(txt);
        if(typeof method == "undefined" || method==""){
            method = "index.php/users/delete";
        }
        bootbox.confirm({
            message: "Do you really want to delete "+txt+"?",
            buttons: {
                confirm: {
                    label: 'OK',
                    className: '<?php echo THEME_BUTTON; ?>'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    var url = "<?php echo base_url() ?>"+method;
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: {id: id, id_name: field, table: table},
                        success: function (response) {
                            if (response == 200) {

                                $("#message").html("<div class='alert alert-success'><?php echo lang('delete_success'); ?></div>");
                                window.setTimeout(function () {
                                    window.location.reload();
                                    window.location.href = "<?php echo base_url(); ?>" + ctrl;
                                }, 1000);
                            }else{
                                $("#message").html("<div class='alert alert-danger'>This Record cannot delete because have used in other module</div>"); 
                            }
                        },
                        error: function (error, ror, r) {
                            bootbox.alert(error);
                        },
                    });
                }
            }
        });

    }

    var deleteFnInvoice = function (table, field, id, ctrl, method, txt) {

        console.log(txt);
        if(typeof method == "undefined" || method==""){
            method = "index.php/invoices/delete";
        }
        bootbox.confirm({
            message: "Do you really want to delete "+txt+"?",
            buttons: {
                confirm: {
                    label: 'OK',
                    className: '<?php echo THEME_BUTTON; ?>'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    var url = "<?php echo base_url() ?>"+method;
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: {id: id, id_name: field, table: table},
                        success: function (response) {
                            if (response == 200) {

                                $("#message").html("<div class='alert alert-success'><?php echo lang('delete_success'); ?></div>");
                                window.setTimeout(function () {
                                    window.location.reload();
                                    window.location.href = "<?php echo base_url(); ?>" + ctrl;
                                }, 1000);
                            }else{
                                $("#message").html("<div class='alert alert-danger'>This Record cannot delete because have used in other module</div>"); 
                            }
                        },
                        error: function (error, ror, r) {
                            bootbox.alert(error);
                        },
                    });
                }
            }
        });

        }


    var deleteFnClinic = function (table, field, id, ctrl, method, txt) {

console.log(txt);
if(typeof method == "undefined" || method==""){
    method = "index.php/users/delete";
}
bootbox.confirm({
    message: "Do you really want to delete "+txt+"?",
    buttons: {
        confirm: {
            label: 'OK',
            className: '<?php echo THEME_BUTTON; ?>'
        },
        cancel: {
            label: 'Cancel',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if (result) {
            var url = "<?php echo base_url() ?>"+method;
            $.ajax({
                method: "POST",
                url: url,
                data: {id: id, id_name: field, table: table},
                success: function (response) {
                    if (response == 200) {

                        $("#message").html("<div class='alert alert-success'><?php echo lang('delete_success'); ?></div>");
                        window.setTimeout(function () {
                            window.location.reload();
                            window.location.href = "<?php echo base_url(); ?>" + ctrl;
                        }, 1000);
                    }else{
                        $("#message").html("<div class='alert alert-danger'>This Record cannot delete because have used in other module</div>"); 
                    }
                },
                error: function (error, ror, r) {
                    bootbox.alert(error);
                },
            });
        }
    }
});

}
    var deleteFn1 = function (table, field, create_date, ctrl, method, txt) {

if(typeof method == "undefined" || method==""){
    method = "users/delete";
}
bootbox.confirm({
    message: "Do you really want to delete "+txt+"?",
    buttons: {
        confirm: {
            label: 'OK',
            className: '<?php echo THEME_BUTTON; ?>'
        },
        cancel: {
            label: 'Cancel',
            className: 'btn-danger'
        }
    },
    callback: function (result) {
        if (result) {
            var url = "<?php echo base_url() ?>"+method;
            $.ajax({
                method: "POST",
                url: url,
                data: {create_date: create_date, id_name: field, table: table},
                success: function (response) {
                    if (response == 200) {

                        $("#message").html("<div class='alert alert-success'><?php echo lang('delete_success'); ?></div>");
                        window.setTimeout(function () {
                            window.location.reload();
                            window.location.href = "<?php echo base_url(); ?>" + ctrl;
                        }, 1000);
                    }else{
                        $("#message").html("<div class='alert alert-danger'>This Record cannot delete because have used in other module</div>"); 
                    }
                },
                error: function (error, ror, r) {
                    bootbox.alert(error);
                },
            });
        }
    }
});

}

    var deleteRole = function (table, field, id, ctrl) {
        bootbox.confirm({
            message: "<?php echo lang('delete'); ?>",
            buttons: {
                confirm: {
                    label: 'OK',
                    className: '<?php echo THEME_BUTTON; ?>'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    var url = "<?php echo base_url() ?>users/delete_role";
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: {id: id, id_name: field, table: table},
                        success: function (response) {
                            if (response == 200) {

                                $("#message").html("<div class='alert alert-success'><?php echo lang('delete_success'); ?></div>");
                                window.setTimeout(function () {
                                    window.location.href = "<?php echo base_url(); ?>" + ctrl;
                                }, 2000);
                            }
                            else{
                                $("#message").html("<div class='alert alert-danger'><?php echo lang('delete_failed'); ?></div>");
                                window.setTimeout(function () {
                                    window.location.href = "<?php echo base_url(); ?>" + ctrl;
                                }, 2000);
                            }
                        },
                        error: function (error, ror, r) {
                            bootbox.alert(error);
                        },
                    });
                }
            }
        });
    }
   var statusFn = function (table, field, id, status) {
        var message = "";
        if (status == 1) {
            message = "<?php echo lang('deactive'); ?>";
        } else if (status == 0) {
            message = "<?php echo lang('active'); ?>";
        }

        bootbox.confirm({
            message: "Do you want to " + message + " it?",
            buttons: {
                confirm: {
                    label: 'Ok',
                    className: '<?php echo THEME_BUTTON; ?>'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    var url = "<?php echo base_url() ?>pwfpanel/status";
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: {id: id, id_name: field, table: table, status: status},
                        success: function (response) {
                            if (response == 200) {
                                setTimeout(function () {
                                    $("#message").html("<div class='alert alert-success'><?php echo lang('change_status_success'); ?></div>");
                                });
                                window.location.reload();
                            }
                        },
                        error: function (error, ror, r) {
                            bootbox.alert(error);
                        },
                    });
                }
            }
        });


    }


    var commonStatusFn = function (table, field, id, status) {
        var message = "";
        if (status == 1) {
            message = "<?php echo lang('deactive'); ?>";
        } else if (status == 0) {
            message = "<?php echo lang('active'); ?>";
        }

        bootbox.confirm({
            message: "Do you want to " + message + " it?",
            buttons: {
                confirm: {
                    label: 'Ok',
                    className: '<?php echo THEME_BUTTON; ?>'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    var url = "<?php echo base_url() ?>pwfpanel/commonStatus";
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: {id: id, id_name: field, table: table, status: status},
                        success: function (response) {
                            if (response == 200) {
                                setTimeout(function () {
                                    $("#message").html("<div class='alert alert-success'><?php echo lang('change_status_success'); ?></div>");
                                });
                                window.location.reload();
                            }
                        },
                        error: function (error, ror, r) {
                            bootbox.alert(error);
                        },
                    });
                }
            }
        });
    }

    var editStatusFn = function (table, field, id, status, txt) {
        var message = "";
        if (status == 1) {
            message = "<?php echo lang('deactive'); ?>";
        } else if (status == 0) {
            message = "<?php echo lang('active'); ?>";
        }

        bootbox.confirm({
            message: "Do you want to " + message + " "+txt+"?",
            buttons: {
                confirm: {
                    label: 'Ok',
                    className: '<?php echo THEME_BUTTON; ?>'
                },
                cancel: {
                    label: 'Cancel',
                    className: 'btn-danger'
                }
            },
            callback: function (result) {
                if (result) {
                    var url = "<?php echo base_url() ?>pwfpanel/commonEditStatus";
                    $.ajax({
                        method: "POST",
                        url: url,
                        data: {id: id, id_name: field, table: table, status: status},
                        success: function (response) {
                            if (response == 200) {
                                setTimeout(function () {
                                    $("#message").html("<div class='alert alert-success'><?php echo lang('change_status_success'); ?></div>");
                                });
                                window.location.reload();
                            }
                        },
                        error: function (error, ror, r) {
                            bootbox.alert(error);
                        },
                    });
                }
            }
        });
    }

     var custom_open_modal = function (controller) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {

                $('#form-modal-box').html(data);
                $("#custombntmd").modal('show');
                $("body").addClass("addbody");


            }
        });
    }
    

    var open_modal_clinic = function (controller) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model_clinic",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
            }
        });
    }

    var open_model_practitioner = function (controller) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model_practitioner",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
            }
        });
    }

    var open_model_form = function (controller) {
        $.ajax({
            url: '<?php echo base_url(); ?>' + controller + "/open_model_form",
            type: 'POST',
            data: {'<?php echo $this->security->get_csrf_token_name(); ?>': '<?php echo $this->security->get_csrf_hash(); ?>'},
            success: function (data, textStatus, jqXHR) {
                $('#form-modal-box').html(data);
                $("#commonModal").modal('show');
            }
        });
    }

    
    /** end script in application **/

</script>

<!-- <script>
    $(document).ready(function() {
        $("#products").keyup(function() {
            var query = $(this).val();
            alert(query);
            console.log(query);
            if (query != '') {
                $.ajax({
                    url: "<?php echo site_url('invoices/fetchAllProduct'); ?>",
                    method: "POST",
                    data: {query: query},
                    success: function(data) {
                        $('#result_product').html(data);
                    }
                });
            } else {
                $('#result_product').html('');
            }
        });
    });
</script>

<script>
    function getSearchAllProduct() {
        var searchValue = document.getElementById("consultation_allergy").value;

        document.getElementById("products").value = searchValue;
    }
</script> -->

<!-- <script>
    function myFunction() {
    let x = document.getElementById("products");
    query= x.value;
    if (query != '') {
                    $.ajax({
                        url: "<?php echo site_url('invoices/fetchAllProduct'); ?>",
                        method: "POST",
                        data: {query: query},
                        success: function(data) {
                    var output = '<select class="form-control select2 customerdataid" name="customer_id" id="customer_id" onchange="updateFields(this)">';

                    if (data) {
                        $.each(data, function(index, element) {
                            output += '<option value="' + element.id + '">' + element.name +  '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_product').html(output); // Append the generated output into the #result div


                            // $('#result_product').html(data);
                        }
                    });
                } else {
                    $('#result_product').html('');
                }

}
</script> -->

<script>
    function myFunction() {
        let x = document.getElementById("products");
        let query = x.value;
        
        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('invoices/fetchAllProduct'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {

                    let output = '<select class="form-control select2 customerdataid" name="consultation_product" id="consultation_product" onchange="getSearchAllProduct(this)">';
                    
                    // Check if data is an array and has content
                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, element) {
                            output += '<option>Please Select</option>';
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_product').html(output);  // Set the HTML content of the #result_product div
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                }
            });
        } else {
            $('#result_product').html('');  // Clear the result when query is empty
        }



        
    }
</script>


<script>
    function getSearchAllProduct() {
        var searchValue = document.getElementById("consultation_product").value;
        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('invoices/fetchProductDetail'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    id = data.id;
                    cost = data.cost;
                    tax = data.tax;
                    stock_level = data.stock_level;
                    // alert(data);
                $('#products').val(name);
                $('#products_idss').val(id);
                $('.product_rate').val(cost);
                $('#tax').val(tax);


                if (stock_level === '0' || stock_level === '') { 
                        $('#productStock')
                            .text('Product Stock is empty = 0')
                            .css('color', 'red');
                        $('.submit_stock').prop('disabled', true); // Disable submit button
                    } else {
                        // alert(stock_level);
                        $('#productStock')
                            .text('Total Product Stock is available = ' + stock_level) // Corrected to use .text()
                            .css('color', 'green');
                        $('.submit_stock').prop('disabled', false); // Enable submit button
                    }

                }
            });
        }
    }
</script>

<!-- <script>
    function myProductFunction() {
    let x = document.getElementById("product_item");
    // let x = document.getElementsByClassName("product_item");
    query= x.value;
    // alert(query); 
    
    if (query != '') {
                    $.ajax({
                        url: "<?php echo site_url('invoices/fetchAllProductSearch'); ?>",
                        method: "POST",
                        data: {query: query},
                        success: function(data) {
                    
                    let output = '<select class="form-control select2 customerdataid" name="consultation_productadd" id="consultation_productadd" onchange="getSearchAllProductAdd(this)">';
                    
                    // Check if data is an array and has content
                    if (Array.isArray(data) && data.length > 0) {
                        alert(data);
                        $.each(data, function(index, element) {
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_productsjkjk').html(output);  // Set the HTML content of the #result_product div
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                }

                        // success: function(data) {
                        //     $('#result_productsjkjk').html(data);
                        // }
                    });
                } else {
                    $('#result_productsjkjk').html('');
                }
}
</script> -->

<script>
    function myProductFunction() {
        let x = document.getElementById("product_item");
        let query = x.value;  // Get the value from the #product_item element
        
        if (query !== '') {  // Check if query is not empty
            $.ajax({
                url: "<?php echo site_url('invoices/fetchAllProductSearch'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the response is treated as JSON
                success: function(data) {
                    let output = '<select class="form-control select2 customerdataid" name="consultation_productadd" id="consultation_productadd" onchange="getSearchAllProductAdd(this)">';
                    
                    // Check if data is an array and contains elements
                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, element) {
                            output += '<option>Please Select</option>';
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_productsjkjk').html(output);  // Update #result_productsjkjk with the generated output
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + " " + error);  // Log errors to console if AJAX fails
                }
            });
        } else {
            $('#result_productsjkjk').html('');  // Clear the result if the query is empty
        }
    }
</script>

<script>
    function getSearchAllProductAdd() {
        var searchValue = document.getElementById("consultation_productadd").value;

        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('invoices/fetchProductDetailAdd'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    price = data.cost;
                    tax = data.tax;
                    stock_level = data.stock_level;
                    id = data.id;
                    // alert(price);
                $('#products_iditem').val(id);
                $('#product_item').val(name);
                $('.product_rates').val(price);
                $('#tax_id').val(tax);

                if (stock_level === '0' || stock_level === '') { 
                        $('#productStockNew')
                            .text('Product Stock is empty = 0')
                            .css('color', 'red');
                        $('.submit_stock').prop('disabled', true); // Disable submit button
                    } else {
                        // alert(stock_level);
                        $('#productStockNew')
                            .text('Total Product Stock is available = ' + stock_level) // Corrected to use .text()
                            .css('color', 'green');
                        $('.submit_stock').prop('disabled', false); // Enable submit button
                    }

                
                }
            });
        }

        // document.getElementById("product_item").value = searchValue;
    }
</script>


<!-- Edit invoice product items -->

<script>
    function myFunctionUpdate() {
        // alert(id);
    let x = document.getElementById("products");
    query= x.value;
    if (query != '') {
                    $.ajax({
                        url: "<?php echo site_url('invoices/fetchAllProduct'); ?>",
                        method: "POST",
                        dataType: "json",
                        data: {query: query},
                        success: function(data) {

                                let output = '<select class="form-control select2 customerdataid" name="consultation_product_update" id="consultation_product_update" onchange="getSearchAllProductUpdate(this)">';

                                // Check if data is an array and has content
                                if (Array.isArray(data) && data.length > 0) {
                                    $.each(data, function(index, element) {
                                        // output += '<option>Please Select</option>';
                                        output += '<option value="' + element.id + '">' + element.name + '</option>';
                                    });
                                } else {
                                    output += '<option>No Data Found</option>';
                                }

                                output += '</select>';
                                $('#result_product').html(output);  // Set the HTML content of the #result_product div
                                },
                                error: function(xhr, status, error) {
                                console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                                }
                        // success: function(data) {
                        //     $('#result_product').html(data);
                        // }
                    });
                } else {
                    $('#result_product').html('');
                }

}
</script>
<script>
    function getSearchAllProductUpdate() {
        var searchValue = document.getElementById("consultation_product_update").value;

        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('invoices/fetchProductDetail'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    id = data.id;
                    price = data.cost;
                    // alert(price);
                $('#products').val(name);
                $('#products_idss').val(id);
                $('.product_rate').val(price);
                }
            });
        }
        // document.getElementById("products").value = searchValue;
    }
</script>

<script>
    function myProductFunctionEdit() {
    let x = document.getElementById("product_item");
    // let x = document.getElementsByClassName("product_item");
    query= x.value;
    // alert(query); 
    
    if (query != '') {
                    $.ajax({
                        url: "<?php echo site_url('invoices/fetchAllProductSearchEdit '); ?>",
                        method: "POST",
                        dataType: "json",
                        data: {query: query},
                        success: function(data) {

                            let output = '<select class="form-control select2 customerdataid" name="consultation_product_edit" id="consultation_product_edit" onchange="getSearchAllProductEdit(this)">';

                            // Check if data is an array and has content
                            if (Array.isArray(data) && data.length > 0) {
                                $.each(data, function(index, element) {
                                    // output += '<option>Please Select</option>';
                                    output += '<option value="' + element.id + '">' + element.name + '</option>';
                                });
                            } else {
                                output += '<option>No Data Found</option>';
                            }

                            output += '</select>';
                            $('#result_productsjkjk').html(output);  // Set the HTML content of the #result_product div
                            },
                            error: function(xhr, status, error) {
                            console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                            }
                        // success: function(data) {
                        //     $('#result_productsjkjk').html(data);
                        // }
                    });
                } else {
                    $('#result_productsjkjk').html('');
                }
}
</script>
<script>
    function getSearchAllProductEdit() {
        var searchValue = document.getElementById("consultation_product_edit").value;
        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('invoices/fetchProductDetailAdd'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    price = data.cost;
                    id = data.id;
                    // alert(price);
                $('#products_iditem').val(id);
                $('#product_item').val(name);
                $('.product_rates').val(price);
                }
            });
        }
        // document.getElementById("product_item").value = searchValue;
    }
</script>


<script>
function editField(element) {
    const currentText = element.innerText;
    const fieldId = element.getAttribute('data-id');
    const fieldName = element.getAttribute('data-field');

    // Create an input element for inline editing
    const input = document.createElement('input');
    input.type = 'text';
    input.value = currentText;
    input.className = 'form-control';
    input.onblur = function () {
        updateField(fieldId, fieldName, input.value, element);
    };
    element.innerHTML = '';
    element.appendChild(input);
    input.focus();
}

function updateField(id, field, value, element) {
    // Send updated value to CodeIgniter using AJAX
    $.ajax({
         url: "<?php echo site_url('patient/updatePatientBloodGroup'); ?>",
        type: 'POST',
        data: {
            id: id,
            field: field,
            value: value,
            csrf_token_name: $('input[name="csrf_token_name"]').val() // Include CSRF token if enabled
        },
        success: function (response) {
            const result = JSON.parse(response);
            if (result.success) {
                element.innerText = value; // Update UI
            } else {
                alert('Failed to update field');
                element.innerText = element.getAttribute('data-original'); // Revert to original value
            }
        },
        error: function () {
            alert('An error occurred');
            element.innerText = element.getAttribute('data-original'); // Revert to original value
        }
    });

}


function editFieldPressure(element) {
    const currentText = element.innerText;
    const fieldId = element.getAttribute('data-id');
    const fieldName = element.getAttribute('data-field');

    // Create an input element for inline editing
    const input = document.createElement('input');
    input.type = 'text';
    input.value = currentText;
    input.className = 'form-control';
    input.onblur = function () {
        updateFieldPressure(fieldId, fieldName, input.value, element);
    };
    element.innerHTML = '';
    element.appendChild(input);
    input.focus();
}

function updateFieldPressure(id, field, value, element) {
    // Send updated value to CodeIgniter using AJAX
    $.ajax({
         url: "<?php echo site_url('patient/updatePatientBloodPressure'); ?>",
        type: 'POST',
        data: {
            id: id,
            field: field,
            value: value,
            csrf_token_name: $('input[name="csrf_token_name"]').val() // Include CSRF token if enabled
        },
        success: function (response) {
            const result = JSON.parse(response);
            if (result.success) {
                element.innerText = value; // Update UI
            } else {
                alert('Failed to update field');
                element.innerText = element.getAttribute('data-original'); // Revert to original value
            }
        },
        error: function () {
            alert('An error occurred');
            element.innerText = element.getAttribute('data-original'); // Revert to original value
        }
    });

}


function editFieldHeartRate(element) {
    const currentText = element.innerText;
    const fieldId = element.getAttribute('data-id');
    const fieldName = element.getAttribute('data-field');

    // Create an input element for inline editing
    const input = document.createElement('input');
    input.type = 'text';
    input.value = currentText;
    input.className = 'form-control';
    input.onblur = function () {
        updateFieldHeartRate(fieldId, fieldName, input.value, element);
    };
    element.innerHTML = '';
    element.appendChild(input);
    input.focus();
}

function updateFieldHeartRate(id, field, value, element) {
    // Send updated value to CodeIgniter using AJAX
    $.ajax({
         url: "<?php echo site_url('patient/updatePatientHeartRate'); ?>",
        type: 'POST',
        data: {
            id: id,
            field: field,
            value: value,
            csrf_token_name: $('input[name="csrf_token_name"]').val() // Include CSRF token if enabled
        },
        success: function (response) {
            const result = JSON.parse(response);
            if (result.success) {
                element.innerText = value; // Update UI
            } else {
                alert('Failed to update field');
                element.innerText = element.getAttribute('data-original'); // Revert to original value
            }
        },
        error: function () {
            alert('An error occurred');
            element.innerText = element.getAttribute('data-original'); // Revert to original value
        }
    });

}

function editFieldTemperature(element) {
    const currentText = element.innerText;
    const fieldId = element.getAttribute('data-id');
    const fieldName = element.getAttribute('data-field');

    // Create an input element for inline editing
    const input = document.createElement('input');
    input.type = 'text';
    input.value = currentText;
    input.className = 'form-control';
    input.onblur = function () {
        updateFieldeditFieldTemperature(fieldId, fieldName, input.value, element);
    };
    element.innerHTML = '';
    element.appendChild(input);
    input.focus();
}

function updateFieldeditFieldTemperature(id, field, value, element) {
    // Send updated value to CodeIgniter using AJAX
    $.ajax({
         url: "<?php echo site_url('patient/updatePatienteditFieldTemperature'); ?>",
        type: 'POST',
        data: {
            id: id,
            field: field,
            value: value,
            csrf_token_name: $('input[name="csrf_token_name"]').val() // Include CSRF token if enabled
        },
        success: function (response) {
            const result = JSON.parse(response);
            if (result.success) {
                element.innerText = value; // Update UI
            } else {
                alert('Failed to update field');
                element.innerText = element.getAttribute('data-original'); // Revert to original value
            }
        },
        error: function () {
            alert('An error occurred');
            element.innerText = element.getAttribute('data-original'); // Revert to original value
        }
    });

}
</script>


<script>
    function updateInvoiceProductNames() {
        let x = document.getElementById("name");
        let query = x.value;
        
        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoiceAllProduct'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {

                    let output = '<select class="form-control select2 customerdataid" name="consultation_product" id="consultation_product" onchange="getSearchInvoiceAllProduct(this)">';
                    
                    // Check if data is an array and has content
                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, element) {
                            output += '<option>Please Select</option>';
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_product').html(output);  // Set the HTML content of the #result_product div
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                }
            });
        } else {
            $('#result_product').html('');  // Clear the result when query is empty
        }



        
    }
</script>
<script>
    function getSearchInvoiceAllProduct() {
        var searchValue = document.getElementById("consultation_product").value;
        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoceProductDetail'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    id = data.id;
                    price = data.cost;
                    stock_level = data.stock_level;
                    // alert(data);
                $('#name').val(name);
                $('#products_idss').val(id);
                $('#price').val(price);


                if (stock_level === '0' || stock_level === '') { 
                        $('#productStock')
                            .text('Product Stock is empty = 0')
                            .css('color', 'red');
                        $('.submit_stock').prop('disabled', true); // Disable submit button
                    } else {
                        // alert(stock_level);
                        $('#productStock')
                            .text('Total Product Stock is available = ' + stock_level) // Corrected to use .text()
                            .css('color', 'green');
                        $('.submit_stock').prop('disabled', false); // Enable submit button
                    }

                }
            });
        }
    }
</script>

<!-- Vaccine query start -->


<script>
    function updateInvoiceProductNamesVaccine() {
        let x = document.getElementById("vaccine_name");
        
        let query = x.value;
        // alert(query);
        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoiceAllProduct'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {

                    let output = '<select class="form-control select2 customerdataid" name="consultation_product" id="consultation_product" onchange="getSearchInvoiceAllProductVaccine(this)">';
                    
                    // Check if data is an array and has content
                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, element) {
                            output += '<option>Please Select</option>';
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_product_vaccine').html(output);  // Set the HTML content of the #result_product div
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                }
            });
        } else {
            $('#result_product_vaccine').html('');  // Clear the result when query is empty
        }



        
    }
</script>

<script>
    function getSearchInvoiceAllProductVaccine() {
        var searchValue = document.getElementById("consultation_product").value;
        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoceProductDetail'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    id = data.id;
                    price = data.cost;
                    stock_level = data.stock_level;
                    // alert(data);
                $('#vaccine_name').val(name);
                $('#products_idss').val(id);
                $('#vaccine_price').val(price);


                if (stock_level === '0' || stock_level === '') { 
                        $('#productStock')
                            .text('Product Stock is empty = 0')
                            .css('color', 'red');
                        $('.submit_stock').prop('disabled', true); // Disable submit button
                    } else {
                        // alert(stock_level);
                        $('#productStock')
                            .text('Total Product Stock is available = ' + stock_level) // Corrected to use .text()
                            .css('color', 'green');
                        $('.submit_stock').prop('disabled', false); // Enable submit button
                    }

                }
            });
        }
    }
</script>


<!-- Lab query start -->
<script>
    function updateInvoiceProductNamesLab() {
        let x = document.getElementById("lab_name");
        let query = x.value;
        
        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoiceAllProduct'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {

                    let output = '<select class="form-control select2 customerdataid" name="consultation_product" id="consultation_product" onchange="getSearchInvoiceAllProductLab(this)">';
                    
                    // Check if data is an array and has content
                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, element) {
                            output += '<option>Please Select</option>';
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_product_lab').html(output);  // Set the HTML content of the #result_product div
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                }
            });
        } else {
            $('#result_product_lab').html('');  // Clear the result when query is empty
        }



        
    }
</script>


<script>
    function getSearchInvoiceAllProductLab() {
        var searchValue = document.getElementById("consultation_product").value;
        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoceProductDetail'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    id = data.id;
                    price = data.cost;
                    stock_level = data.stock_level;
                    // alert(data);
                $('#lab_name').val(name);
                $('#products_idss').val(id);
                $('#lab_price').val(price);


                if (stock_level === '0' || stock_level === '') { 
                        $('#productStock')
                            .text('Product Stock is empty = 0')
                            .css('color', 'red');
                        $('.submit_stock').prop('disabled', true); // Disable submit button
                    } else {
                        // alert(stock_level);
                        $('#productStock')
                            .text('Total Product Stock is available = ' + stock_level) // Corrected to use .text()
                            .css('color', 'green');
                        $('.submit_stock').prop('disabled', false); // Enable submit button
                    }

                }
            });
        }
    }
</script>

<!-- Appointmnt query data -->
<script>
    function updateInvoiceProductNamesAppointment() {
        let x = document.getElementById("appointment_name");
        let query = x.value;
        // alert(query);
        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoiceAllProduct'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {

                    let output = '<select class="form-control select2 customerdataid" name="consultation_product" id="consultation_product" onchange="getSearchInvoiceAllProductAppointment(this)">';
                    
                    // Check if data is an array and has content
                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, element) {
                            output += '<option>Please Select</option>';
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_product_appointment').html(output);  // Set the HTML content of the #result_product div
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                }
            });
        } else {
            $('#result_product_appointment').html('');  // Clear the result when query is empty
        }



        
    }
</script>

<script>
    function getSearchInvoiceAllProductAppointment() {
        var searchValue = document.getElementById("consultation_product").value;
        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoceProductDetail'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    id = data.id;
                    price = data.cost;
                    stock_level = data.stock_level;
                    // alert(data);
                $('#appointment_name').val(name);
                $('#products_idss').val(id);
                $('#appointment_price').val(price);


                if (stock_level === '0' || stock_level === '') { 
                        $('#productStock')
                            .text('Product Stock is empty = 0')
                            .css('color', 'red');
                        $('.submit_stock').prop('disabled', true); // Disable submit button
                    } else {
                        // alert(stock_level);
                        $('#productStock')
                            .text('Total Product Stock is available = ' + stock_level) // Corrected to use .text()
                            .css('color', 'green');
                        $('.submit_stock').prop('disabled', false); // Enable submit button
                    }

                }
            });
        }
    }
</script>

<!-- Pathway  -->
<script>
    function updateInvoiceProductNamesPathway() {
        let x = document.getElementById("pathway_name");
        let query = x.value;
        
        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoiceAllProduct'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {

                    let output = '<select class="form-control select2 customerdataid" name="consultation_product" id="consultation_product" onchange="getSearchInvoiceAllProductPathway(this)">';
                    
                    // Check if data is an array and has content
                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, element) {
                            output += '<option>Please Select</option>';
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_product_pathway').html(output);  // Set the HTML content of the #result_product div
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                }
            });
        } else {
            $('#result_product_pathway').html('');  // Clear the result when query is empty
        }



        
    }
</script>
<script>
    function getSearchInvoiceAllProductPathway() {
        var searchValue = document.getElementById("consultation_product").value;
        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoceProductDetail'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    id = data.id;
                    price = data.cost;
                    stock_level = data.stock_level;
                    // alert(data);
                $('#pathway_name').val(name);
                $('#products_idss').val(id);
                $('#pathway_price').val(price);


                if (stock_level === '0' || stock_level === '') { 
                        $('#productStock')
                            .text('Product Stock is empty = 0')
                            .css('color', 'red');
                        $('.submit_stock').prop('disabled', true); // Disable submit button
                    } else {
                        // alert(stock_level);
                        $('#productStock')
                            .text('Total Product Stock is available = ' + stock_level) // Corrected to use .text()
                            .css('color', 'green');
                        $('.submit_stock').prop('disabled', false); // Enable submit button
                    }

                }
            });
        }
    }
</script>


<script>
    function updateInvoiceProductNamesMembership() {
        let x = document.getElementById("membership_name");
        let query = x.value;
        
        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoiceAllProduct'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {

                    let output = '<select class="form-control select2 customerdataid" name="consultation_product" id="consultation_product" onchange="getSearchInvoiceAllProductMembership(this)">';
                    
                    // Check if data is an array and has content
                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, element) {
                            output += '<option>Please Select</option>';
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_product_membership').html(output);  // Set the HTML content of the #result_product div
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                }
            });
        } else {
            $('#result_product_membership').html('');  // Clear the result when query is empty
        }



        
    }
</script>
<script>
    function getSearchInvoiceAllProductMembership() {
        var searchValue = document.getElementById("consultation_product").value;
        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoceProductDetail'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    id = data.id;
                    price = data.cost;
                    stock_level = data.stock_level;
                    // alert(data);
                $('#membership_name').val(name);
                $('#products_idss').val(id);
                $('#membership_price').val(price);


                if (stock_level === '0' || stock_level === '') { 
                        $('#productStock')
                            .text('Product Stock is empty = 0')
                            .css('color', 'red');
                        $('.submit_stock').prop('disabled', true); // Disable submit button
                    } else {
                        // alert(stock_level);
                        $('#productStock')
                            .text('Total Product Stock is available = ' + stock_level) // Corrected to use .text()
                            .css('color', 'green');
                        $('.submit_stock').prop('disabled', false); // Enable submit button
                    }

                }
            });
        }
    }
</script>



<script>
    function updateInvoiceProductNamesProcedure() {
        let x = document.getElementById("procedure_name");
        let query = x.value;
        
        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoiceAllProduct'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {

                    let output = '<select class="form-control select2 customerdataid" name="consultation_product" id="consultation_product" onchange="getSearchInvoiceAllProductProcedure(this)">';
                    
                    // Check if data is an array and has content
                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, element) {
                            output += '<option>Please Select</option>';
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_product_procedure').html(output);  // Set the HTML content of the #result_product div
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                }
            });
        } else {
            $('#result_product_procedure').html('');  // Clear the result when query is empty
        }



        
    }
</script>
<script>
    function getSearchInvoiceAllProductProcedure() {
        var searchValue = document.getElementById("consultation_product").value;
        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoceProductDetail'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    id = data.id;
                    price = data.cost;
                    stock_level = data.stock_level;
                    // alert(data);
                $('#procedure_name').val(name);
                $('#products_idss').val(id);
                $('#procedure_price').val(price);


                if (stock_level === '0' || stock_level === '') { 
                        $('#productStock')
                            .text('Product Stock is empty = 0')
                            .css('color', 'red');
                        $('.submit_stock').prop('disabled', true); // Disable submit button
                    } else {
                        // alert(stock_level);
                        $('#productStock')
                            .text('Total Product Stock is available = ' + stock_level) // Corrected to use .text()
                            .css('color', 'green');
                        $('.submit_stock').prop('disabled', false); // Enable submit button
                    }

                }
            });
        }
    }
</script>

<script>
    function updateInvoiceProductNamesOther() {
        let x = document.getElementById("other_name");
        let query = x.value;
        
        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoiceAllProduct'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {

                    let output = '<select class="form-control select2 customerdataid" name="consultation_product" id="consultation_product" onchange="getSearchInvoiceAllProductOther(this)">';
                    
                    // Check if data is an array and has content
                    if (Array.isArray(data) && data.length > 0) {
                        $.each(data, function(index, element) {
                            output += '<option>Please Select</option>';
                            output += '<option value="' + element.id + '">' + element.name + '</option>';
                        });
                    } else {
                        output += '<option>No Data Found</option>';
                    }

                    output += '</select>';
                    $('#result_product_other').html(output);  // Set the HTML content of the #result_product div
                },
                error: function(xhr, status, error) {
                    console.error("AJAX Error: " + status + error);  // Log error if AJAX fails
                }
            });
        } else {
            $('#result_product_other').html('');  // Clear the result when query is empty
        }



        
    }
</script>


<script>
    function getSearchInvoiceAllProductOther() {
        var searchValue = document.getElementById("consultation_product").value;
        var query = searchValue;

        if (query !== '') {
            $.ajax({
                url: "<?php echo site_url('products/fetchInvoceProductDetail'); ?>",
                method: "POST",
                data: {query: query},
                dataType: "json",  // Ensure the data is interpreted as JSON
                success: function(data) {
                    name = data.name;
                    id = data.id;
                    price = data.cost;
                    stock_level = data.stock_level;
                    // alert(data);
                $('#other_name').val(name);
                $('#products_idss').val(id);
                $('#other_price').val(price);


                if (stock_level === '0' || stock_level === '') { 
                        $('#productStock')
                            .text('Product Stock is empty = 0')
                            .css('color', 'red');
                        $('.submit_stock').prop('disabled', true); // Disable submit button
                    } else {
                        // alert(stock_level);
                        $('#productStock')
                            .text('Total Product Stock is available = ' + stock_level) // Corrected to use .text()
                            .css('color', 'green');
                        $('.submit_stock').prop('disabled', false); // Enable submit button
                    }

                }
            });
        }
    }
</script>

<script>
    // Function to calculate total price
    function calculateTotalPrice() {
        // Get values of tax and cost
        let tax = parseFloat(document.getElementById('tax').value) || 0;
        let price = parseFloat(document.getElementById('price').value) || 0;

        // Calculate total price
        let totalPrice = price + (price * tax / 100);

        // Update the total price field
        document.getElementById('cost').value = Math.round(totalPrice); // Round to 2 decimal places
    }

    // Add event listeners to update the total price on input
    document.getElementById('tax').addEventListener('input', calculateTotalPrice);
    document.getElementById('price').addEventListener('input', calculateTotalPrice);
</script>



<script>
    // Function to calculate total price
    function calculateTotalPrice() {
        // Get values of tax and cost
        let tax = parseFloat(document.getElementById('vaccine_tax').value) || 0;
        let price = parseFloat(document.getElementById('vaccine_price').value) || 0;

        // Calculate total price
        let totalPrice = price + (price * tax / 100);

        // Update the total price field
        // document.getElementById('vaccine_cost').value = totalPrice.toFixed(2); // Round to 2 decimal places
        document.getElementById('vaccine_cost').value = Math.round(totalPrice); // Round to 2 decimal places
    }

    // Add event listeners to update the total price on input
    document.getElementById('vaccine_tax').addEventListener('input', calculateTotalPrice);
    document.getElementById('vaccine_price').addEventListener('input', calculateTotalPrice);
</script>

<script>
    // Function to calculate total price
    function calculateTotalPrice() {
        // Get values of tax and cost
        let tax = parseFloat(document.getElementById('lab_tax').value) || 0;
        let price = parseFloat(document.getElementById('lab_price').value) || 0;

        // Calculate total price
        let totalPrice = price + (price * tax / 100);

        // Update the total price field
        document.getElementById('lab_cost').value = Math.round(totalPrice); // Round to 2 decimal places
    }

    // Add event listeners to update the total price on input
    document.getElementById('lab_tax').addEventListener('input', calculateTotalPrice);
    document.getElementById('lab_price').addEventListener('input', calculateTotalPrice);
</script>

<script>
    // Function to calculate total price
    function calculateTotalPrice() {
        // Get values of tax and cost
        let tax = parseFloat(document.getElementById('appointment_tax').value) || 0;
        let price = parseFloat(document.getElementById('appointment_price').value) || 0;

        // Calculate total price
        let totalPrice = price + (price * tax / 100);

        // Update the total price field
        document.getElementById('appointment_cost').value = Math.round(totalPrice);// Round to 2 decimal places
    }

    // Add event listeners to update the total price on input
    document.getElementById('appointment_tax').addEventListener('input', calculateTotalPrice);
    document.getElementById('appointment_price').addEventListener('input', calculateTotalPrice);
</script>

<script>
    // Function to calculate total price
    function calculateTotalPrice() {
        // Get values of tax and cost
        let tax = parseFloat(document.getElementById('pathway_tax').value) || 0;
        let price = parseFloat(document.getElementById('pathway_price').value) || 0;

        // Calculate total price
        let totalPrice = price + (price * tax / 100);

        // Update the total price field
        document.getElementById('pathway_cost').value = Math.round(totalPrice); // Round to 2 decimal places
    }

    // Add event listeners to update the total price on input
    document.getElementById('pathway_tax').addEventListener('input', calculateTotalPrice);
    document.getElementById('pathway_price').addEventListener('input', calculateTotalPrice);
</script>

<script>
    // Function to calculate total price
    function calculateTotalPrice() {
        // Get values of tax and cost
        let tax = parseFloat(document.getElementById('membership_tax').value) || 0;
        let price = parseFloat(document.getElementById('membership_price').value) || 0;

        // Calculate total price
        let totalPrice = price + (price * tax / 100);

        // Update the total price field
        document.getElementById('membership_cost').value = Math.round(totalPrice); // Round to 2 decimal places
    }

    // Add event listeners to update the total price on input
    document.getElementById('membership_tax').addEventListener('input', calculateTotalPrice);
    document.getElementById('membership_price').addEventListener('input', calculateTotalPrice);
</script>

<script>
    // Function to calculate total price
    function calculateTotalPrice() {
        // Get values of tax and cost
        let tax = parseFloat(document.getElementById('procedure_tax').value) || 0;
        let price = parseFloat(document.getElementById('procedure_price').value) || 0;

        // Calculate total price
        let totalPrice = price + (price * tax / 100);

        // Update the total price field
        document.getElementById('procedure_cost').value = Math.round(totalPrice); // Round to 2 decimal places
    }

    // Add event listeners to update the total price on input
    document.getElementById('procedure_tax').addEventListener('input', calculateTotalPrice);
    document.getElementById('procedure_price').addEventListener('input', calculateTotalPrice);
</script>

<script>
    // Function to calculate total price
    function calculateTotalPrice() {
        // Get values of tax and cost
        let tax = parseFloat(document.getElementById('other_tax').value) || 0;
        let price = parseFloat(document.getElementById('other_price').value) || 0;

        // Calculate total price
        let totalPrice = price + (price * tax / 100);

        // Update the total price field
        document.getElementById('other_cost').value = Math.round(totalPrice); // Round to 2 decimal places
    }

    // Add event listeners to update the total price on input
    document.getElementById('other_tax').addEventListener('input', calculateTotalPrice);
    document.getElementById('other_price').addEventListener('input', calculateTotalPrice);
</script>


