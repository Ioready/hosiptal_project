<!-- Page content -->
<style>
        .tab-content {
            margin-top: 20px;
        }

        .table-actions {
            display: flex;
            gap: 5px;
        }

        .modal-content {
            max-width: 700px;
            margin: auto;
        }

        .modal-header {
            justify-content: center;
        }

        .btn-icon {
            padding: 5px;
            font-size: 14px;
        }

        .btn-icon.edit {
            background-color: #5cb85c;
            color: white;
        }

        .btn-icon.delete {
            background-color: #d9534f;
            color: white;
        }

        .status-active {
            color: green;
        }

        .status-inactive {
            color: red;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .tab-pane {
            padding-top: 20px;
        }
        .fade {
            opacity: 1!important;
        
        }
    </style>

    <!-- module permission css -->
    <style>
        .card {
            margin-bottom: 2rem;
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .permissions-table {
            width: 100%;
        }

        .permission-switch {
            display: inline-block;
            width: 3rem;
        }

        .search-input {
            max-width: 250px;
        }

        .container {
            max-width: 1500px;
        }

        @media (max-width: 768px) {
            .permissions-table {
                font-size: 12px;
            }

            .card {
                margin-bottom: 1rem;
            }

            .search-input {
                width: 100%;
                margin-top: 1rem;
            }
        }
        div{
            font-size: medium;
        }
        button{
            font-size: medium!important;
        }
        .button-data{
            background: cornflowerblue!important;
            font-size: medium!important;
            color: cornsilk;
        }
        .heading-div{
            padding-left: 20px;
        }
    </style>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- DataTables CSS -->
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<div id="page-content">
  <div class="heading-div">
<ul class="breadcrumb breadcrumb-top" style="background: white;padding-left: 20px; height: 42px;">
    <li style="display: inline-block; ">
        <a href="<?php echo site_url('pwfpanel');?>" style="text-decoration: none; color:black;">Home</a>
    </li>
    <li style="display: inline-block;">
        <a href="<?php echo site_url('users');?>" style="text-decoration: none; color:black;font-weight:bold;">Users</a>
    </li>
</ul>
</div>
    <!-- END Datatables Header -->





    <!-- Datatables Content -->
    <div class="block full">
        <div class="block-title" >
            <!-- <h2 class="fw-bold text-dark">Users Panel</h2> -->
            <ul class="nav nav-tabs" id="userRoleTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="user-tab" data-bs-toggle="tab" href="#user" role="tab" aria-controls="user"
                    aria-selected="true">User</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="role-tab" data-bs-toggle="tab" href="#role" role="tab" aria-controls="role"
                    aria-selected="false">Role & Permission</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" id="role-tab" data-bs-toggle="tab" href="#module" role="tab" aria-controls="role"
                    aria-selected="false">Module Permission</a>
            </li>
        </ul>
        </div>
       

        <div class="table-responsive" >


        <div class="tab-content" id="userRoleTabContent">

        <!-- User Tab -->
            <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">

                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>User Management</h4>
                    <button class="btn btn-primary button-data" data-bs-toggle="modal" data-bs-target="#addUserModal">+ Add
                        User</button>
                        <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">+ Add
                        User</button> -->


                </div>

                <table id="userTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>User ID</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Action</th>
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
                                    <td><input type="checkbox"></td>
                                    <td class="text-center"><?php echo $rowCount; ?></td>            
                                    <!-- <td><?php echo $rows->team_code; ?></td> -->
                                    <td><?php echo $rows->first_name. ' '.$rows->last_name; ?></td>
                                    <td class="text-center"><?php echo $rows->phone; ?></td>
                                    <td><?php echo $rows->email; ?></td>
                                    <td>Manager</td>
                                    <!-- <td class="text-center"><?php if($rows->active == 1) echo '<p class="text-success">'.lang('active').'</p>'; else echo '<p  class="text-danger">'.lang('deactive').'</p>';?></td>
                                      <td><?php echo date('d-m-Y H:i', strtotime($rows->created_date));?></td> -->
                                          
                                      <td><span class="status-active">Active</span></td>
                                        <!-- <td> -->
                                            <!-- <div class="table-actions"> -->
                                                <!-- <button class="btn btn-icon edit" data-bs-toggle="modal"
                                                    data-bs-target=".bd-example-modal-lg">✏️</button> -->
                                                    <!-- <button class="btn btn-icon edit" data-bs-toggle="modal" data-bs-target="#addRoleModal">✏️</button> -->
                                                    <!-- <button class="btn btn-icon edit" data-bs-toggle="modal" data-bs-target="#addUserModal">✏️</button> -->
                                                    <!-- <a href="javascript:void(0)" class="on-default edit-row" onclick="editFn('<?php echo USERS;?>','user_edit','<?php echo encoding($rows->id); ?>');"><img width="20" src="<?php echo base_url().EDIT_ICON;?>" /></a>
                            
                                                <button class="btn btn-icon delete">
                                                    <a href="javascript:void(0)" onclick="deleteFn('<?php echo USERS;?>','remove_cash_model','<?php echo $rows->id; ?>')">🗑️</a> 
                                                </button>

                                            </div> -->
                                        <!-- </td> -->


                                        <td class="actions">
                                  <div class="btn-group btn-group-xs">
                                  <!-- <a href="javascript:void(0)" class="on-default edit-row" onclick="editFn('users','open_user_edit','<?php echo encoding($rows->id); ?>');"><img width="20" src="<?php echo base_url().EDIT_ICON;?>" /></a> -->
                                        
                                <!-- <a href="javascript:void(0)" class="on-default edit-row" onclick="editFn('<?php echo USERS;?>','user_edit','<?php echo encoding($rows->id); ?>');"><img width="20" src="<?php echo base_url().EDIT_ICON;?>" /></a> -->
                            
                            <a href="javascript:void(0)" class="on-default edit-row user-edit-data" id="<?php echo $rows->id; ?>">
                            <img width="20" src="<?php echo base_url().EDIT_ICON;?>" />
                    </a>
                            <?php if($rows->id != 1){if($rows->active == 1) {?>
                            <a href="javascript:void(0)" class="on-default edit-row" onclick="statusFn('<?php echo USERS;?>','id','<?php echo encoding($rows->id);?>','<?php echo $rows->active;?>')" title="Inactive Now"><img width="20" src="<?php echo base_url().ACTIVE_ICON;?>" /></a>
                            <?php } else { ?>
                            <a href="javascript:void(0)" class="on-default edit-row text-danger" onclick="statusFn('<?php echo USERS;?>','id','<?php echo encoding($rows->id); ?>','<?php echo $rows->active;?>')" title="Active Now"><img width="20" src="<?php echo base_url().INACTIVE_ICON;?>" /></a>
                            <?php } ?>
                            <a href="javascript:void(0)" onclick="deleteFn('<?php echo USERS;?>','id','<?php echo encoding($rows->id); ?>','users/managements','users/deleteUsers')" class="on-default edit-row text-danger"><img width="20" src="<?php echo base_url().DELETE_ICON;?>" /></a>
                            <hr>
                            </div>
                            </td>

                                      </tr>

                                        <?php } endforeach;
                                    endif; ?>

                       
                        
                    </tbody>
                </table>


            </div>

            <!-- Role & Permission Tab -->
            <div class="tab-pane fade" id="role" role="tabpanel" aria-labelledby="role-tab">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Role & Permission Management</h4>
                    <button class="btn btn-primary button-data" data-bs-toggle="modal" data-bs-target="#addRoleModal">+ Create Role
                        & Permission</button>
                </div>

                <table id="roleTable" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Role</th>
                            <th>Descriptions</th>
                            <th>Permission</th>
                            <!-- <th>status</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>


                    
                    <?php
                    if (isset($roles_list) && !empty($roles_list)):
                                        $rowCount = 0;
                                        foreach ($roles_list as $rows):
                                            $rowCount++;
                                            ?>
                                  <tr>
                                    <td><input type="checkbox"></td>
                                    <td><a href="#"><?php echo $rows->name; ?></a></td>
                                    <td><?php echo $rows->description; ?></td>
                                    <td><button class="btn btn-light">Edit</button></td>
                                   
                                    <!-- <td>
                                        <div class="table-actions">
                                        
                                        <button class="btn btn-icon edit">✏️</button>
                                            <button class="btn btn-icon delete">🗑️</button>
                                        </div>
                                    </td> -->

                                    <td class="actions">
                                        <a href="javascript:void(0)" class="on-default edit-row" onclick="editFn('users','roles_edit','<?php echo encoding($rows->id); ?>');"><img width="20" src="<?php echo base_url().EDIT_ICON;?>" /></a>
                                        
                                        <?php
                                    
                                        if($rows->active == 1) {?>
                                        
                                        <a href="javascript:void(0)" class="on-default edit-row" onclick="statusFn('<?php echo GROUPS;?>','id','<?php echo encoding($rows->id);?>','<?php echo $rows->active;?>')" title="Inactive Now"><img width="20" src="<?php echo base_url().ACTIVE_ICON;?>" /></a>
                                        <?php } else { ?>
                                        <a href="javascript:void(0)" class="on-default edit-row text-danger" onclick="statusFn('<?php echo GROUPS;?>','id','<?php echo encoding($rows->id); ?>','<?php echo $rows->active;?>')" title="Active Now"><img width="20" src="<?php echo base_url().INACTIVE_ICON;?>" /></a>
                                        <?php } ?>
                                    <a href="javascript:void(0)" onclick="deleteRole('<?php echo GROUPS;?>','id','<?php echo encoding($rows->id); ?>','users/managements')" class="on-default edit-row text-danger"><img width="20" src="<?php echo base_url().DELETE_ICON;?>" /></a>
                                    
                                        </td>

                                        </tr>
                                       
                                        <?php endforeach;
                                    endif; ?>

                        <!-- <tr>
                            <td><input type="checkbox"></td>
                            <td><a href="#">Doctor</a></td>
                            <td>Lorem ipsum</td>
                            <td><button class="btn btn-light">Edit</button></td>
                            <td>
                                <div class="table-actions">
                                    <button class="btn btn-icon edit">✏️</button>
                                    <button class="btn btn-icon delete">🗑️</button>
                                </div>
                            </td>
                        </tr> -->
                        
                    </tbody>
                </table>
            </div>

            <div class="tab-pane fade" id="module" role="tabpanel" aria-labelledby="role-tab">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Group Permission</h3>
            <input type="text" class="form-control search-input" placeholder="Search...">
        </div>
        <div class="row mb-4">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Role" value="Doctor">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Description" value="Enter">
            </div>
            <div class="col-md-4">
                <button class="btn btn-success w-100">Update</button>
            </div>
        </div>
        <div class="row">
            <!-- Role Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>Role</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllRole" onclick="selectAll('role')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="role" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="role" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="role" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="role" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- User Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>User</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllUser" onclick="selectAll('user')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="user" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="user" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="user" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="user" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Tasks Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>Tasks</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllTasks" onclick="selectAll('tasks')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="tasks" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="tasks" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="tasks" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="tasks" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Appointment Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>Appointment</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllAppointment" onclick="selectAll('appointment')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="appointment" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="appointment" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="appointment" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="appointment" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Patients Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>Patients</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllPatients" onclick="selectAll('patients')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="patients" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="patients" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="patients" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="patients" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Products Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>Products</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllProducts" onclick="selectAll('products')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="products" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="products" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="products" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="products" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Labs Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>Labs</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllLabs" onclick="selectAll('labs')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="labs" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="labs" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="labs" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="labs" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Invoices Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>Invoices</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllInvoices" onclick="selectAll('invoices')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="invoices" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="invoices" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="invoices" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="invoices" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Settings Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>Settings</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllSettings" onclick="selectAll('settings')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="settings" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="settings" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="settings" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="settings" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Contacts Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>Contacts</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllContacts" onclick="selectAll('contacts')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="contacts" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="contacts" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="contacts" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="contacts" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Data Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <span>Data</span>
                        <div class="form-check form-switch permission-switch">
                            <input class="form-check-input" type="checkbox" checked>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table permissions-table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Permissions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>View All Records</td>
                                    <td class="text-end"><input type="checkbox" id="selectAllData" onclick="selectAll('data')" checked></td>
                                </tr>
                                <tr>
                                    <td>View</td>
                                    <td class="text-end"><input type="checkbox" class="data" checked></td>
                                </tr>
                                <tr>
                                    <td>Create</td>
                                    <td class="text-end"><input type="checkbox" class="data" checked></td>
                                </tr>
                                <tr>
                                    <td>Delete</td>
                                    <td class="text-end"><input type="checkbox" class="data" checked></td>
                                </tr>
                                <tr>
                                    <td>Update</td>
                                    <td class="text-end"><input type="checkbox" class="data" checked></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
                
            </div>




            
             <!-- Add User Modal -->
             <!-- <div class="modal fade bd-example-modal-lg" tabindex="-1" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addUserModal">
             <div class="modal-dialog modal-lg"> -->

    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="addUserModalLabel"><strong> Add User</strong></h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="uniqueId">Unique ID</label>
                                    <input type="text" class="form-control" id="uniqueId" placeholder="Enter ID">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact">Contact</label>
                                    <input type="text" class="form-control" id="contact" placeholder="Enter Contact">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <select class="form-select" id="role">
                                        <option>Manager</option>
                                        <option>Doctor</option>
                                        <option>Staff</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input type="text" class="form-control" id="address" placeholder="Enter Address">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Enter Password">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="confirmPassword">Confirm Password</label>
                                    <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password">
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Status</label><br>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="statusActive" value="active" checked>
                                <label class="form-check-label" for="statusActive">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="status" id="statusInactive" value="inactive">
                                <label class="form-check-label" for="statusInactive">Inactive</label>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success ms-2">Save</button>
                        </div>
                    </form> -->

                    <form class="form-horizontal p-4" role="form" id="addFormAjax" method="post" action="<?php echo base_url('users/users_add') ?>" enctype="multipart/form-data">
        <div class="alert alert-danger" id="error-box" style="display: none"></div>
        <div class="row">
    <div class="col-md-6">
        <div class="form-group me-2">
            <label class="control-label">First Name</label>
            <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group me-2">
            <label class="control-label">Last Name</label>
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group me-2">
            <label class="control-label"><?php echo lang('user_email');?></label>
            <input type="email" class="form-control" name="user_email" id="user_email" placeholder="<?php echo lang('user_email');?>" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group me-2">
            <label class="control-label">Country</label>
            <select id="country" name="country" class="form-control select2" size="1">
                <option value="" disabled selected>Please select</option>
                <?php foreach($countries as $country){?>
                <option value="<?php echo $country->id;?>"><?php echo $country->name;?></option>
                <?php }?>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group me-2">
            <label class="control-label"><?php echo lang('phone_no');?></label>
            <input type="text" class="form-control" name="phone_no" id="phone_no" placeholder="<?php echo lang('phone_no');?>" />
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group me-2">
            <label class="control-label"><?php echo lang('password');?></label>
            <input type="text" class="form-control" name="password" id="password" placeholder="<?php echo lang('password');?>" value="<?php echo randomPassword();?>" />
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="role">Role</label>
            <select class="form-select" id="role">
                <!-- <option>Manager</option>
                <option>Doctor</option>
                <option>Staff</option> -->

               <?php foreach ($roles_list as $rows): ?>
                    <option value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                                   
                <?php endforeach?>
            </select>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group me-2">
            <label class="control-label"><?php echo lang('profile_image'); ?></label>
            <div class="group_filed">
                <div class="img_back_prieview_Academic">
                    <div class="images_box_upload_ven_adduser_vendore">
                        <div id="image-preview-adduser-vendore">
                            <input type="file" name="user_image" id="image-upload-adduser-vendore" />
                        </div>
                    </div>
                    <div id="image-preview-adduser">
                        <label for="image-upload-adduser-vendore" id="image-label-adduser-vendore"  class="btn btn-sm btn-primary" style="background:#337ab7;">Upload Logo</label>
                    </div>
                </div>
            </div>
            <div class="ceo_file_error file_error text-danger"></div>
        </div>
    </div>
   
    <div class="col-md-12">
        <div class="modal-footer">
            <button type="submit" id="submit"  class="btn btn-sm btn-primary" style="background:#337ab7;"><?php echo lang('submit_btn');?></button>
        </div>
    </div>
</div>

    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Role Modal (Similar to User) -->
    <div class="modal fade" id="addRoleModal" tabindex="-1" aria-labelledby="addRoleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addRoleModalLabel">Create Role & Permission</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Form for adding Role & Permission goes here -->
                    <!-- <form>
                        <div class="form-group">
                            <label for="roleName">Role Name</label>
                            <input type="text" class="form-control" id="roleName" placeholder="Enter Role Name">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" placeholder="Enter Role Description"></textarea>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-success ms-2">Save</button>
                        </div>
                    </form> -->

                    <!-- <div class="modal-dialog">
        <div class="modal-content"> -->
            <!-- <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('users/users_add') ?>" enctype="multipart/form-data"> -->
            <form class="form-horizontal" role="form" id="addFormAjax" method="post" action="<?php echo base_url('users/roles_add') ?>" enctype="multipart/form-data">
                <!-- <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title"><?php echo (isset($title)) ? ucwords($title) : "" ?></h4>
                </div> -->
                <div class="modal-body">
                    <!-- <div class="loaders">
                        <img src="<?php echo base_url().'backend_asset/images/Preloader_2.gif';?>" class="loaders-img" class="img-responsive">
                    </div> -->
                    <div class="alert alert-danger" id="error-box" style="display: none"></div>
                    <div class="form-body">
                        <div class="row">
                            <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('role_name');?></label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="role_name" id="role_name" placeholder="<?php echo lang('role_name');?>" />
                                    </div>
                                    <!-- <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('english_note');?></span> -->
                                </div>
                            </div>
                            
                            <div class="col-md-12" >
                                <div class="form-group">
                                    <label class="col-md-3 control-label"><?php echo lang('description');?></label>
                                    <div class="col-md-9">
                                        <textarea type="text" class="form-control" name="description" id="description" placeholder="<?php echo lang('description');?>"></textarea>
                                    </div>
                                    <!-- <span class="help-block m-b-none col-md-offset-3"><i class="fa fa-arrow-circle-o-up"></i> <?php echo lang('english_note');?></span> -->
                                </div>
                            </div>
                           
                            <div class="space-22"></div>
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal"><?php echo lang('close_btn');?></button>
                    <button type="submit" id="submit" class="<?php echo THEME_BUTTON;?>" ><?php echo lang('submit_btn');?></button>
                </div> -->

                <div class="d-flex justify-content-end mt-3">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-success ms-2">Save</button>
                </div>

            </form>
        <!-- </div>
    </div> -->


                </div>
            </div>
        </div>
    </div>


        </div>

       


        </div>
    </div>
    <!-- END Datatables Content -->
</div>
<!-- END Page Content -->
<div id="form-modal-box"></div>

<div id="form-modal-box-user"></div>

<!-- <input type="hidden" id="UserStatus" value="<?php echo $status;?>" /> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

<script>
        // Initialize DataTables for both User and Role & Permission tables
        $(document).ready(function () {
            $('#userTable').DataTable();
            $('#roleTable').DataTable();
        });
    </script>


<script>
        // JavaScript function to select all checkboxes in a card
        function selectAll(permissionGroup) {
            const checkboxes = document.querySelectorAll(`.${permissionGroup}`);
            const selectAllCheckbox = document.getElementById(`selectAll${capitalizeFirstLetter(permissionGroup)}`);

            checkboxes.forEach((checkbox) => {
                checkbox.checked = selectAllCheckbox.checked;
            });
        }

        // Helper function to capitalize the first letter of the permission group
        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }
    </script>

<!-- <style>
    ::-webkit-scrollbar {
    width: 2px !important;
    display:none
  }
  
  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1 !important; 
  }
   
  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: #888 !important; 
  }
  
  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #555 !important; 
  }
</style> -->