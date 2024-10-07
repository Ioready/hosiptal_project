<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<style>
    .modal-footer .btn + .btn {
        margin-bottom: 5px !important;
        margin-left: 5px;
    }
</style>
<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .patient-info {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .details {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .details span {
            margin-right: 10px;
        }

        .expand-label {
            color: #007B83;
            cursor: pointer;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .expand-section {
            display: flex;
            align-items: center;
            cursor: pointer;
            font-size: 14px;
        }

        .expand-section svg {
            margin-right: 5px;
        }

        .save-invoice-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .save-button {
            background-color: #00695C;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        .total-amount {
            font-weight: bold;
            font-size: 16px;
        }

        .form-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            margin-top: 30px;
        }

        .form-container .form-section {
            flex: 1;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group select, .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-group textarea {
            height: 80px;
        }

        .line-items-container {
            margin-top: 30px;
        }

        .line-items-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .line-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .line-item div {
            flex: 1;
        }

        .add-invoice-item {
            background-color: #00695C;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .form-container {
                flex-direction: column;
            }

            .save-invoice-section {
                flex-direction: column;
                align-items: flex-start;
            }

            .save-button {
                width: 100%;
                margin-bottom: 10px;
            }
        }
        .form-horizontal .form-group {
            margin-left: 0px!important;
            /* margin-right: -15px; */
        }
    </style>
<div id="commonModal" class="modal fade bd-example-modal-lg" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url($formUrl) ?>" enctype="multipart/form-data">
                <div class="modal-header text-center">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h2 class="modal-title"><?php echo "Add Payment on account" ?></h2>
                    <h4 style="margin-left: 233px;"><span><strong><?php echo $results->invoice_number;?></strong></span></h2>
                </div>
                <div class="modal-body">
                    
                    <div class="alert alert-danger" id="error-box" style="display: none"></div>
                    <div class="form-body">
                        <div class="row">

                       

                        <!-- Invoice Form Section -->
                        <div class="form-container">
                            <!-- Invoice Form -->
                            <div class="form-section">
                                
                                <div class="form-group">
                                    <label for="select-date">Select Date <span class="required" style="color:red;">*</span></label>
                                    <input type="date" name="invoice_date" id="invoice_date" value="<?php echo $results->invoice_date;?>">
                                </div>
                                <div class="form-group">
                                    <label for="billing">Select Payment type <span style="color:red;">*</span></label>
                                    <select name="billing_to" id="billing_to">
                                    <option value="">Select Billing Type</option>
                                    <option value="Self Pay" <?php echo $results->billing_to =='Self Pay'?'selected':'';?>>Self Pay</option>
                                    <option value="Insurance" <?php echo $results->billing_to =='Insurance'?'selected':'';?>>Insurance</option>
                                    <option value="Medicare" <?php echo $results->billing_to =='Medicare'?'selected':'';?>>Medicare</option>
                                    <option value="Company" <?php echo $results->billing_to =='Company'?'selected':'';?>>Company</option>
                                    <option value="Government Program" <?php echo $results->billing_to =='Government Program'?'selected':'';?>>Government Program</option>
                                    <option value="Other" <?php echo $results->billing_to =='Other'?'selected':'';?>>Other</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="notes">Amount</label>
                                    <input type="text" name="amount" id="amount" placeholder="Enter Amount" value="<?php echo $results->total_amount; ?>" readOnly>
                                    <button class="add-invoice-item" type="button" onclick="education_fields();">
                                        <span aria-hidden="true">+ Add card</span>
                                    </button>

                                    <!-- Card details will be added here -->
                                    <div id="card-details-container"></div>
                                </div>
    
                            </div>

                            <!-- Billing and Comments -->
                            <div class="form-section">
                                
                                <div class="form-group">
                                    <label for="patient">Patient Details<span style="color:red;">*</span></label>
                                    <input type="hidden" name="patient" id="patient" value="<?php echo $results->patient_id;?>"><h3><span><?php echo $results->patient_name;?></span></h3>

                                        <table border="1" cellspacing="0" cellpadding="10" style="width: 100%; border-collapse: collapse;">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Rate</th>
                                                    <th>Quantity</th>
                                                    <th>Total Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($resultsItem as $rows){ ?>
                                                <tr>
                                                    <td><?php echo $rows->product_name; ?></td>
                                                    <td><?php echo $rows->rate; ?></td>
                                                    <td><?php echo $rows->quantity; ?></td>
                                                    <td><?php echo $rows->total_price; ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>

                                </div>

                            </div>
                        </div>

                            <div class="save-invoice-section">
                               
                            </div>
                            <input type="hidden" name="id" value="<?php echo $results->id; ?>" />

                            <div class="space-22"></div>
                        </div>
                        <div class="total-amount">
                                    Total amount: £<?php echo $results->total_amount; ?>
                                </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                    
                    <button type="submit" id="submit" class="btn btn-sm btn-primary m-2"  style="background: #337ab7">Save invoice</button>
                </div>
            </form>
        </div> <!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<script>
function education_fields() {
    // Container where card details will be appended
    var container = document.getElementById("card-details-container");

    // Card details HTML structure
    var cardDetails = `
        <div class="card-details-group">
            <label for="card-number">Card Number</label>
            <input type="text" name="card_number[]" class="form-control" placeholder="Enter card number">

            <label for="expiry-date">Expiry Date</label>
            <input type="text" name="expiry_date[]" class="form-control" placeholder="MM/YY">

            <label for="cvv">CVV</label>
            <input type="text" name="cvv[]" class="form-control" placeholder="CVV">

            <button type="button" class="remove-card" onclick="removeCard(this)">Remove Card</button>
        </div>
    `;

    // Append card details to the container
    container.insertAdjacentHTML("beforeend", cardDetails);
}

// Function to remove a card field if needed
function removeCard(button) {
    button.parentElement.remove();
}

</script>
<style>
    .card-details-group {
        margin-top: 20px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .remove-card {
        margin-top: 10px;
        color: red;
        cursor: pointer;
        background: none;
        border: none;
    }
</style>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    table, th, td {
        border: 1px solid #ddd;
        padding: 8px;
    }
    th {
        background-color: #f2f2f2;
        text-align: left;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
</style>

