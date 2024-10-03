<!-- Page content -->

<style>
        /* Custom Styles for Enhanced UI */
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }

        .container {
            
            max-width: 1100px;
        }

        .table-responsive {
            margin-bottom: 20px;
        }

        /* Table with full border */
        table.dataTable.table {
            background-color:white;
            border: 1px solid #dee2e6 !important;
            border-collapse: collapse !important;
        }

        /* Table cell border */
        .table td, .table th {
            border: 1px solid #dee2e6;
        }

        /* Center header text */
        .table th {
            background-color: #f8f9fa;
            font-weight: bold;
            color: #495057;
            text-align: center !important;
        }

        .table tbody tr {
            background-color: #fff;
            transition: background-color 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f1f3f5;
        }

        /* Action Buttons */
        .table-action {
            cursor: pointer;
            color: #0d6efd;
        }

        .table-action:hover {
            color: #0b5ed7;
        }

        /* Badges */
        .badge-outstanding {
            background-color: #ffc107;
            font-size: 12px;
            color: white;
            padding: 5px 8px;
            border-radius: 10px;
        }

        /* Custom total, paid, outstanding layout */
        .invoice-status {
            line-height: 1.3;
            text-align: center;
        }

        .invoice-status .total {
            font-weight: bold;
        }

        .invoice-status .paid {
            color: green;
        }

        .invoice-status .outstanding {
            color: red;
        }

        /* Mobile Specific Styles */
        @media (max-width: 767px) {
            .table-responsive {
                overflow-x: auto;
            }

            .container {
                padding-left: 15px;
                padding-right: 15px;
            }

            table.dataTable.table {
                width: 100%;
                font-size: 14px;
            }

            .pagination {
                justify-content: center;
            }
        }
        .btn-primary {
    /* --bs-btn-color: #fff;
    --bs-btn-bg: #0d6efd;
    --bs-btn-border-color: #0d6efd;
    --bs-btn-hover-color: #fff;
    --bs-btn-hover-bg: #0b5ed7;
    --bs-btn-hover-border-color: #0a58ca;
    --bs-btn-focus-shadow-rgb: 49, 132, 253;
    --bs-btn-active-color: #fff;
    --bs-btn-active-bg: #0a58ca;
    --bs-btn-active-border-color: #0a53be;
    --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    --bs-btn-disabled-color: #fff;
    --bs-btn-disabled-bg: #0d6efd;
    --bs-btn-disabled-border-color: #0d6efd; */
    background:#0d6efd!important;
    color:#fff;
}
    </style>

<div id="page-content">
    <div class="block_list full">
      
    </div>
  
    <?php if ($this->ion_auth->is_admin() or $this->ion_auth->is_subAdmin() or $this->ion_auth->is_facilityManager()) { ?>
       

          <div class="block full">
            <div class="row text-center">
                <!--  <div class="col-sm-6 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div id="msg"></div>
                        <?php
                        $message = $this->session->flashdata('success');
                        if (!empty($message)) :
                        ?><div class="alert alert-success">
                                <?php echo $message; ?></div><?php endif; ?>
                        <?php
                        $error = $this->session->flashdata('error');
                        if (!empty($error)) :
                        ?><div class="alert alert-danger">
                                <?php echo $error; ?></div><?php endif; ?>
                        <form action="<?php echo site_url('patient/patientImport'); ?>" name="patientFormExport" method="post" enctype="multipart/form-data">
                            <div class="col-sm-6 col-lg-2">
                                <div class="text-left">Upload File:</div>
                            </div>
                            <div class="col-sm-6 col-lg-10">
                                <div class="text-left text-danger">Note: First, select care unit to upload the file</div>
                            </div>
                            <div class="col-sm-6 col-lg-4">
                                <select id="care_unit1" name="careUnit" class="form-control select-2" onchange="getPatient()">
                                    <option value="">Select Care Unit</option>
                                    <?php
                                    if (isset($careUnit) && !empty($careUnit)) {
                                        foreach ($careUnit as $row) {
                                            $select = "";
                                            if (isset($careUnitID)) {
                                                if ($careUnitID == $row->id) {
                                                    $select = "selected";
                                                }
                                            }
                                    ?>
                                            <option value="<?php echo $row->id; ?>" <?php echo $select; ?>><?php echo $row->name; ?></option>
                                            <?php
                                        }
                                    }
                                            ?>
                                </select>
                            </div>
                            <div class="col-sm-6 col-lg-4 hidetext">
                                <input type="file" name="patientFile" class="form-control" accept=".csv"/>
                            </div>
                            <div class="col-sm-6 col-lg-1 hidetext">
                                <button type="submit" class="btn btn-info btn-sm" value="Import"><fa class="fa fa-file-pdf-o"></fa> Import</button>
                            </div>
                            <div id="labelError"></div>
                        </form>
                    </div>
                </div></div> -->

                <div class="row">
                
                <div class="col-lg-12 mt-4">
                <div class="panel panel-default">
            <div class="p-4">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="text-left fw-bold">Download File:</div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-left text-danger">Note: select care unit to download specific care unit's file or, overall file will be downloaded</div>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        $message = $this->session->flashdata('success');
                        if (!empty($message)) :
                        ?>
                        <div class="alert alert-success"><?php echo $message; ?></div>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-2">
                        <?php
                        $error = $this->session->flashdata('error');
                        if (!empty($error)) :
                        ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

                        <div class="panel-body">
                            <form action="<?php echo site_url('patient'); ?>" name="patientForm" method="get">

                            <!-- <div class="col-lg-3">
                                    <?php // print_r($careUnitsUser);die;
                                    ?>
                                    <select id="care_unit" name="careUnit" class="form-control select-2" onchange="getPatient()">
                                        <option value="">Select Care Unit</option>
                                        <?php
                                        if (!empty($careUnitsUser)) {


                                            if (isset($careUnitsUser) && !empty($careUnitsUser)) {
                                                foreach ($careUnitsUser as $row) {

                                                    //print_r($row);die;
                                                    $select = "";
                                                    if (isset($careUnitID)) {
                                                        if ($careUnitID == $row->id) {
                                                            $select = "selected";
                                                        }
                                                    }
                                        ?>
                                                    <option value="<?php echo $row->id; ?>" <?php echo $select; ?>><?php echo $row->name; ?></option>
                                                <?php
                                                }
                                            }
                                        } else {
                                            if (isset($careUnit) && !empty($careUnit)) {
                                                foreach ($careUnit as $row) {
                                                    $select = "";
                                                    if (isset($careUnitID)) {
                                                        if ($careUnitID == $row->id) {
                                                            $select = "selected";
                                                        }
                                                    }
                                                ?>
                                                    <option value="<?php echo $row->id; ?>" <?php echo $select; ?>><?php echo $row->name; ?></option>
                                        <?php
                                                }
                                            }
                                        }
                                        ?>
                                    </select>
                                </div> -->
                                <!-- <div class="col-sm-12 col-lg-2">
                                    <input type="text" class="form-control" name="date" id="date" placeholder="from date" />
                                </div>
                                <div class="col-sm-12 col-lg-2">
                                    <input type="text" class="form-control" name="date1" id="date1" placeholder="to date" />
                                </div> -->


                                <?php
                                if (isset($careUnitID)) {
                                    $careUnitID = (!empty($careUnitID)) ? $careUnitID : '';
                                }
                                ?>
                                <!-- month year download -->
                                <!-- <form action="<?php echo site_url('patient/monthYearPatientExport'); ?>" name="patientFormExport" method="get"> -->
                                <div>
                                <div class="col-lg-2">
                                        <select class="form-control" name="month" id="month">
                                            <option value="">Select Month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <!-- <select class="form-control" name="year" id="year">
                                            <option value="">Select Year</option>
                                            
                                        </select> -->

                                        <select class="form-control" name="year" id="year">
                                            <?php
                                           
                                            $current_year = date("Y");
                                            for ($i = $current_year - 10; $i <= $current_year + 10; $i++) {
                                                $selected = ($i == $current_year) ? 'selected' : '';

                                                echo "<option value='$i' $selected>$i</option>";
                                            }
                                            ?>
                                        </select>



                                    </div>

                                    <!-- <div class="col-lg-2">
                        <input type="submit" name="search" class="save-btn btn btn-primary btn-sm" value="Search" />
                    </div>

                    <form action="<?php echo site_url('patient'); ?>" name="patientFormExport" method="get">
                                <div class="col-sm-12 col-lg-2">
                                    <button type="submit" class="btn btn-primary save-btn btn-sm">
                                        <fa class="fa fa-undo"></fa> Reset
                                    </button>
                                </div>
                            </form> -->

                       

                                    <!-- <div class="col-sm-12 col-lg-12 mt-4" style="margin-left:-20px;margin-right:-12px; ">
                                        <button type="submit" class="btn btn-success  fw-bold btn-sm" value="Export" name="export">
                                            <fa class="fa fa-file-pdf-o"></fa> Download Monthly Surveillance List
                                        </button>
                                    </div> -->
                                </div>
                                <!-- </form> -->

                                <!-- <div class="col-sm-12 col-lg-1">
                                    <button type="submit" value="Export" name="export" class="btn btn-success btn-sm">
                                        <fa class="fa fa-file-pdf-o"></fa> Export
                                    </button>
                                </div> -->
                            </form>


                         
                        </div>
                    </div>
                </div>

                </div>

            </div>
        </div>



    <?php } ?>
    
    <div class="block full">
        <!-- <div class="row text-center"> -->

            <div class="mt-5">
                <h2 class="mb-4">Invoice Management</h2>

                <div class="d-flex justify-content-between mb-3 align-items-center flex-wrap">
                    <button class="btn btn-primary">New Invoice +</button>
                    <div class="mt-2">
                        <label for="dateRange" class="me-2">Duration:</label>
                        <input type="text" id="dateRange" class="form-control d-inline-block" style="width: 250px;" readonly>
                    </div>
                </div>

                <div class="table-responsive">
                    <table id="invoiceTable" class="table table-bordered table-hover align-middle text-center">
                        <thead class="table-light text-center ">
                        <tr>
                            <th>Invoice</th>
                            <th>Client</th>
                            <th>Total</th>
                            <th>Invoice Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>INV#002</td>
                            <td>aditya urmaliya</td>
                            <td>
                                <div class="invoice-status">
                                    <span class="total">Total: $0.00</span><br>
                                    <span class="paid">Paid: $0.00</span><br>
                                    <span class="outstanding">Outstanding: $0.00</span>
                                </div>
                            </td>
                            <td>16-07-2024</td>
                            <td>
                                <span class="table-action" onclick="editInvoice()">✎ </span>
                                <span class="table-action ms-3" onclick="deleteInvoice()">✖ </span>
                            </td>
                        </tr>
                        <tr>
                            <td>INV#001</td>
                            <td>Yue Sun</td>
                            <td>
                                <div class="invoice-status">
                                    <span class="total">Total: $0.00</span><br>
                                    <span class="paid">Paid: $0.00</span><br>
                                    <span class="outstanding">Outstanding: $0.00</span>
                                </div>
                            </td>
                            <td>04-07-2024</td>
                            <td>
                                <span class="table-action" onclick="editInvoice()">✎ </span>
                                <span class="table-action ms-3" onclick="deleteInvoice()">✖ </span>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="black-screen" id="blackScreen"></div>

                <!-- Edit Modal -->
                <div class="modal fade" id="editModal" tabindex="-1" role="dialog">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Edit Invoice</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>Edit invoice details here.</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!-- </div> -->
    </div>
    <!-- END Datatables Content -->
</div>
<!-- END Page Content -->
<div id="form-modal-box"></div>


<script>
    // Initialize DataTable with search and pagination
    $(document).ready(function () {
        $('#invoiceTable').DataTable({
            "paging": true,
            "searching": true,
            "lengthChange": false,
            "pageLength": 10
        });

        // Initialize date range picker
        $('#dateRange').daterangepicker({
            opens: 'left',
            startDate: moment().subtract(89, 'days'),
            endDate: moment(),
            locale: {
                format: 'DD-MM-YYYY'
            }
        });

        $('#dateRange').on('apply.daterangepicker', function (ev, picker) {
            console.log("Start Date: " + picker.startDate.format('DD-MM-YYYY'));
            console.log("End Date: " + picker.endDate.format('DD-MM-YYYY'));
        });
    });

    // Placeholder edit function
    function editInvoice() {
        $('#editModal').modal('show');
    }

    // Placeholder delete function
    function deleteInvoice() {
        alert('Delete invoice action triggered.');
    }
</script>