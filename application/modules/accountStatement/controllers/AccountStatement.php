<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AccountStatement extends Common_Controller {

    public $data = array();
    public $file_data = "";
    public $_table = 'culture_source';
    public $_tables = 'patient_labs';
    // public $_tables = 'clinic';
    
    public $title = "Account Statement";

    public function __construct() {
        parent::__construct();
        $this->is_auth_admin();

    }

    /**
     * @method index
     * @description listing display
     * @return array
     */
    public function index() {
        $this->data['url'] = base_url() . $this->router->fetch_class();
        $this->data['pageTitle'] = "Add " . $this->title;
        $this->data['parent'] = $this->router->fetch_class();
        $this->data['model'] = $this->router->fetch_class();
        $this->data['title'] = $this->title;
        $this->data['tablePrefix'] = 'vendor_sale_' . $this->_table;
        $this->data['table'] = $this->_table;
        $this->data['patient_id'] = decoding($_GET['id']);
        // print_r($this->data['patient_id']);die;
        // $option = array('table' => $this->_tables);

       $id=  decoding($_GET['id']);
    //    print_r($id);die;
        $option = array(
            'table' => 'patient_labs',
            'select' => 'patient_labs`.*,vendor_sale_culture_source.name,vendor_sale_users.first_name,vendor_sale_users.last_name',
            'join' => array(
                array('vendor_sale_culture_source', 'vendor_sale_culture_source.id=patient_labs.name','left'),
                array('vendor_sale_users', 'patient_labs.doctor_id=vendor_sale_users.id', 'left'),
            ),
            
            'where' => array('patient_labs.patient_id' => $id)
        );


        $this->data['list'] = $this->common_model->customGet($option);
        // print_r($this->data['list']);die;
        $this->load->admin_render('list', $this->data, 'inner_script');
    }

    /**
     * @method open_model
     * @description load model box
     * @return array
     */
    function open_model() {
        $this->data['title'] = "Add " . $this->title;
        $this->data['formUrl'] = $this->router->fetch_class() . "/add";
        $this->data['patient_id'] = $this->input->post('id');

        // $this->data['initial_dx'] = $this->common_model->customGet(array('table' => 'initial_dx', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        // $this->data['culture_source'] = $this->common_model->customGet(array('table' => 'culture_source', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        // $this->data['organism'] = $this->common_model->customGet(array('table' => 'organism', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        // $this->data['precautions'] = $this->common_model->customGet(array('table' => 'precautions', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        // $this->data['initial_rx'] = $this->common_model->customGet(array('table' => 'initial_rx', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        
        if ($this->ion_auth->is_facilityManager()) {
            $user_id = $this->session->userdata('user_id');
        $hospital_id = $user_id;

        } else if($this->ion_auth->is_all_roleslogin()) {
            $user_id = $this->session->userdata('user_id');
            $optionData = array(
                'table' => USERS . ' as user',
                'select' => 'user.*,group.name as group_name',
                'join' => array(
                    array(USER_GROUPS . ' as ugroup', 'ugroup.user_id=user.id', 'left'),
                    array(GROUPS . ' as group', 'group.id=ugroup.group_id', 'left')
                ),
                'order' => array('user.id' => 'DESC'),
                'where' => array('user.id'=>$user_id),
                'single'=>true,
            );
    
            $authUser = $this->common_model->customGet($optionData);

            $hospital_id = $authUser->hospital_id;
            // 'users.hospital_id'=>$hospital_id
            
        }

        $this->data['initial_dx'] = $this->common_model->customGet(array('table' => 'initial_dx', 'select' => 'id,name', 'where' => array('hospital_id'=>$hospital_id,'is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['culture_source'] = $this->common_model->customGet(array('table' => 'culture_source', 'select' => 'id,name', 'where' => array('hospital_id'=>$hospital_id,'is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['organism'] = $this->common_model->customGet(array('table' => 'organism', 'select' => 'id,name', 'where' => array('hospital_id'=>$hospital_id,'is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['precautions'] = $this->common_model->customGet(array('table' => 'precautions', 'select' => 'id,name', 'where' => array('hospital_id'=>$hospital_id,'is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['initial_rx'] = $this->common_model->customGet(array('table' => 'initial_rx', 'select' => 'id,name', 'where' => array('hospital_id'=>$hospital_id,'is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));    

        
        $CareUnitID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

    if($this->ion_auth->is_subAdmin()){

        $option = array(
            'table' => ' doctors',
            'select' => 'doctors.*',
            'join' => array(
                array('users', 'doctors.user_id=users.id', 'left'),
            ),
            
            'where' => array(
                'users.delete_status' => 0,
                'doctors.user_id'=>$CareUnitID
            ),
            'single' => true,
        );

        $datadoctors = $this->common_model->customGet($option);


    $option = array(
            'table' => ' doctors',
            'select' => 'users.*',
            'join' => array(
                array('users', 'doctors.user_id=users.id', 'left'),
                array('user_profile UP', 'UP.user_id=users.id', 'left'),
                // array('doctors_qualification', 'doctors_qualification.user_id=users.id', 'left'),
                
            ),
            
            'where' => array(
                'users.delete_status' => 0,
                'doctors.facility_user_id'=>$datadoctors->facility_user_id
            ),
            'order' => array('users.id' => 'desc'),
        );
        $this->data['doctors'] = $this->common_model->customGet($option);
        // print_r($datadoctors->facility_user_id);die;

    } else if ($this->ion_auth->is_facilityManager()) {
        
        $option = array(
            'table' => ' doctors',
            'select' => 'users.*',
            'join' => array(
                array('users', 'doctors.user_id=users.id', 'left'),
                array('user_profile UP', 'UP.user_id=users.id', 'left'),
                array('doctors_qualification', 'doctors_qualification.user_id=users.id', 'left'),
                
            ),
            
            'where' => array(
                'users.delete_status' => 0,
                'doctors.facility_user_id'=>$CareUnitID
            ),
            'order' => array('users.id' => 'desc'),
        );
        $this->data['doctors'] = $this->common_model->customGet($option);
    }
        
    // print_r($this->data['doctors']);die;
        $this->load->view('add', $this->data);
    }

    /**
     * @method menu_category_add
     * @description add dynamic rows
     * @return array
     */
    public function add() {

        // print_r($this->input->post());die;
        $this->form_validation->set_rules('labs_name', "labs_name", 'required|trim');
        if ($this->form_validation->run() == true) {
           
           
            $CareUnitID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
           
                $options_data = array(
                   
                    'patient_id' => $this->input->post('patient_id'),
                    'doctor_id' => $this->input->post('doctor_name'),
                    'name' => $this->input->post('labs_name'),
                    'facility_user_id' => $CareUnitID,
                    'details' => $this->input->post('detail'),
                    'is_active' => 1,
                    'create_date' => datetime()
                );
                // print_r($options_data);die;
                $option = array('table' => $this->_tables, 'data' => $options_data);
                if ($this->common_model->customInsert($option)) {
                    $response = array('status' => 1, 'message' => "Successfully added", 'url' => base_url($this->router->fetch_class()));
                } else {
                    $response = array('status' => 0, 'message' => "Failed to add");
                }
           
        } else {
            $messages = (validation_errors()) ? validation_errors() : '';
            $response = array('status' => 0, 'message' => $messages);
        }
        echo json_encode($response);
    }

    /**
     * @method menu_category_edit
     * @description edit dynamic rows
     * @return array
     */
    public function edit() {
        $this->data['title'] = "Edit " . $this->title;
        $this->data['formUrl'] = $this->router->fetch_class() . "/update";
        $id = decoding($this->input->post('id'));
        if (!empty($id)) {
            $option = array(
                'table' => $this->_table,
                'where' => array('id' => $id),
                'single' => true
            );
            $results_row = $this->common_model->customGet($option);
            if (!empty($results_row)) {
                $this->data['results'] = $results_row;
                $this->load->view('edit', $this->data);
            } else {
                $this->session->set_flashdata('error', lang('not_found'));
                redirect($this->router->fetch_class());
            }
        } else {
            $this->session->set_flashdata('error', lang('not_found'));
            redirect($this->router->fetch_class());
        }
    }

    /**
     * @method menu_category_update
     * @description update dynamic rows
     * @return array
     */
    public function update() {

        $this->form_validation->set_rules('name', "Name", 'required|trim');
        $where_id = $this->input->post('id');
        if ($this->form_validation->run() == FALSE):
            $messages = (validation_errors()) ? validation_errors() : '';
            $response = array('status' => 0, 'message' => $messages);
        else:
            $this->filedata['status'] = 1;
            $image = $this->input->post('exists_image');

            if (!empty($_FILES['image']['name'])) {
                $this->filedata = $this->commonUploadImage($_POST, 'submenu', 'image');
                if ($this->filedata['status'] == 1) {
                    $image = 'uploads/submenu/' . $this->filedata['upload_data']['file_name'];
                    delete_file($this->input->post('exists_image'), FCPATH);
                }
            }
            if ($this->filedata['status'] == 0) {
                $response = array('status' => 0, 'message' => $this->filedata['error']);
            } else {

                $options_data = array(
                    'name' => $this->input->post('name')
                );
                $option = array(
                    'table' => $this->_table,
                    'data' => $options_data,
                    'where' => array('id' => $where_id)
                );
                $update = $this->common_model->customUpdate($option);
                $response = array('status' => 1, 'message' => "Successfully updated", 'url' => base_url($this->router->fetch_class()));
            }
        endif;

        echo json_encode($response);
    }

}
