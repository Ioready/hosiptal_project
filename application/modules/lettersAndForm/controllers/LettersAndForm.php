<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class LettersAndForm extends Common_Controller {

    public $data = array();
    public $file_data = "";
    public $_table = 'culture_source';
    public $_tables = 'letters_and_form';
    // public $_tables = 'clinic';
    
    public $title = "Letters And Form";

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
            'table' => 'letters_and_form',
            'select' =>'letters_and_form`.*,vendor_sale_users.first_name,vendor_sale_users.last_name',
            'join' => array(
                array('vendor_sale_users', 'letters_and_form.user_id=vendor_sale_users.id', 'left'),
            ),
            
            'where' => array('letters_and_form.patient_id' => $id)
        );


        $this->data['list'] = $this->common_model->customGet($option);



        $form_option = array(
            'table' => 'vendor_sale_booking_form',
            'select' =>'vendor_sale_booking_form`.*,vendor_sale_users.first_name,vendor_sale_users.last_name',
            'join' => array(
                array('vendor_sale_users', 'vendor_sale_booking_form.patient_id=vendor_sale_users.id', 'left'),
            ),
            
            'where' => array('vendor_sale_booking_form.patient_id' => $id)
        );

        $this->data['form_list'] = $this->common_model->customGet($form_option);
        
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
        $this->data['initial_dx'] = $this->common_model->customGet(array('table' => 'initial_dx', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['culture_source'] = $this->common_model->customGet(array('table' => 'culture_source', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['organism'] = $this->common_model->customGet(array('table' => 'organism', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['precautions'] = $this->common_model->customGet(array('table' => 'precautions', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['initial_rx'] = $this->common_model->customGet(array('table' => 'initial_rx', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        

        
        
        
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


        $this->data['send_mail_template'] = $this->common_model->customGet(array('table' => 'send_mail_template', 'select' => 'send_mail_template.*', 'where' => array('user_id' =>$datadoctors->facility_user_id)));

        

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

        $send_mail_template = $this->common_model->customGet(array('table' => 'send_mail_template', 'select' => 'send_mail_template.app_name', 'where' => array('user_id' =>$CareUnitID)));
       $$template_name =[];
        foreach($send_mail_template as $key=>$datavalues){
            $template_name[$key] =  $datavalues->app_name;

       } 

       $send_mailt=  implode(', ', array_map(function($val){return sprintf("'%s'", $val);}, $template_name));
       $this->data['send_mail_template']=$send_mailt;
    }
        $this->load->view('add', $this->data);
    }



    function open_model_form() {

        $this->data['title'] = "Add " . $this->title;
        $this->data['formUrlData'] = $this->router->fetch_class() . "/add";
        $this->data['patient_id'] = $this->input->post('id');
        $this->data['initial_dx'] = $this->common_model->customGet(array('table' => 'initial_dx', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['culture_source'] = $this->common_model->customGet(array('table' => 'culture_source', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['organism'] = $this->common_model->customGet(array('table' => 'organism', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['precautions'] = $this->common_model->customGet(array('table' => 'precautions', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
        $this->data['initial_rx'] = $this->common_model->customGet(array('table' => 'initial_rx', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
         
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
                    ),
                    
                    'where' => array(
                        'users.delete_status' => 0,
                        'doctors.facility_user_id'=>$datadoctors->facility_user_id
                    ),
                    'order' => array('users.id' => 'desc'),
                );
            $this->data['doctors'] = $this->common_model->customGet($option);
            $this->data['send_mail_template'] = $this->common_model->customGet(array('table' => 'send_mail_template', 'select' => 'send_mail_template.*', 'where' => array('user_id' =>$datadoctors->facility_user_id)));

        

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

                $send_mail_template = $this->common_model->customGet(array('table' => 'send_mail_template', 'select' => 'send_mail_template.app_name', 'where' => array('user_id' =>$CareUnitID)));
            $$template_name =[];
                foreach($send_mail_template as $key=>$datavalues){
                    $template_name[$key] =  $datavalues->app_name;

            } 

            $send_mailt=  implode(', ', array_map(function($val){return sprintf("'%s'", $val);}, $template_name));
            $this->data['send_mail_template']=$send_mailt;
            }
                $this->load->view('forms', $this->data);
    }


    function bookingForm() {

        $this->data['url'] = base_url() . $this->router->fetch_class();
        $this->data['pageTitle'] = "Add " . $this->title;
        $this->data['parent'] = $this->router->fetch_class();
        $this->data['model'] = $this->router->fetch_class();
        $this->data['formUrlData'] = $this->router->fetch_class() . "/addBookingForm";
        $this->data['title'] = $this->title;
        $this->data['tablePrefix'] = 'vendor_sale_' . $this->_table;
        $this->data['table'] = $this->_table;
        $this->data['patient_id'] = decoding($_GET['id']);
        // print_r($this->data['patient_id']);die;
        // $option = array('table' => $this->_tables);

       $id=  decoding($_GET['id']);
    //    print_r($id);die;
        $option = array(
            'table' => 'letters_and_form',
            'select' =>'letters_and_form`.*,vendor_sale_users.first_name,vendor_sale_users.last_name',
            'join' => array(
                array('vendor_sale_users', 'letters_and_form.user_id=vendor_sale_users.id', 'left'),
            ),
            
            'where' => array('letters_and_form.patient_id' => $id)
        );


        $this->data['list'] = $this->common_model->customGet($option);
        // print_r($this->data['list']);die;
        $this->load->admin_render('booking_form', $this->data, 'inner_script');
                // $this->load->view('booking_form', $this->data, 'inner_script');
    }



    public function addBookingForm() {

        // print_r($this->input->post());die;
        // $this->form_validation->set_rules('appointment_type', "appointment_type", 'required|trim');
        // if ($this->form_validation->run() == true) {
           
            $CareUnitID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
           
                $options_data = array(
                   
                    'patient_id' => $this->input->post('patient_id'),
                    'facility_user_id' => $CareUnitID,
                    'appointment_type' =>$this->input->post('appointment_type'),
                    'completed_by' => $this->input->post('completed_by'),
                    'completed_date' => $this->input->post('completed_date'),
                    'empi_number' => $this->input->post('empi_number'),
                    'nhs_number' => $this->input->post('nhs_number'),
                    'nhs_referral' => $this->input->post('nhs_referral'),
                    'gender' => $this->input->post('gender'),
                    'title' => $this->input->post('title'),
                    'first_name' => $this->input->post('first_name'),
                    'surname' => $this->input->post('surname'),
                    'dob' => $this->input->post('dob'),
                    'contact' => $this->input->post('contact'),
                    'email' => $this->input->post('email'),
                    'address' => $this->input->post('address'),
                    'player' => $this->input->post('player'),
                    'sponsor_details' => $this->input->post('sponsor_details'),
                    'insurer_information' => $this->input->post('insurer_information'),
                    'insurer' => $this->input->post('insurer'),
                    'policy_number' => $this->input->post('policy_number'),
                    'authorisation_if_known' => $this->input->post('authorisation_if_known'),
                    'next_of_kin_name' => $this->input->post('next_of_kin_name'),
                    'next_of_kin_contact' => $this->input->post('next_of_kin_contact'),
                    'interpreter_needed' => $this->input->post('interpreter_needed'),
                    'interpreter_language' => $this->input->post('interpreter_language'),
                    'ethnicity' => $this->input->post('ethnicity'),
                    'complex_needs' => $this->input->post('complex_needs'),
                    'details_of_complex_needs' => $this->input->post('details_of_complex_needs'),
                    'co_morbidities' => $this->input->post('co_morbidities'),
                    'details_of_co_morbidities' => $this->input->post('details_of_co_morbidities'),
                    'dietary_requirements' => $this->input->post('dietary_requirements'),
                    'admitting_consultant' => $this->input->post('admitting_consultant'),
                    'admission_date' => $this->input->post('admission_date'),
                    'admission_time' => $this->input->post('admission_time'),
                    'location' => $this->input->post('location'),
                    'procedure_date' => $this->input->post('procedure_date'),
                    'procedure_time' => $this->input->post('procedure_time'),
                    'surgeon' => $this->input->post('surgeon'),
                    'surgeon_assistant' => $this->input->post('surgeon_assistant'),
                    'anaesthetist' => $this->input->post('anaesthetist'),
                    'referring_gp' => $this->input->post('referring_gp'),
                    'gp_address' => $this->input->post('gp_address'),
                    'medical_diagnosis_symptoms' => $this->input->post('medical_diagnosis_symptoms'),
                    'procedure_description' => $this->input->post('procedure_description'),
                    'side_of_surgery' => $this->input->post('side_of_surgery'),
                    'duration' => $this->input->post('duration'),
                    'type_of_anaesthesia' => $this->input->post('type_of_anaesthesia'),
                    'length_of_stay' => $this->input->post('length_of_stay'),
                    'special_requirements_instrumentation' => $this->input->post('special_requirements_instrumentation'),
                    'relevant_previous_medical_history' => $this->input->post('relevant_previous_medical_history'),
                    'pcu_required' => $this->input->post('pcu_required'),
                    'itu_required' => $this->input->post('itu_required'),
                    'image_intensifier_required' => $this->input->post('image_intensifier_required'),
                    'tests_investigations_required' => $this->input->post('tests_investigations_required'),
                    'procedure_urgency_category' => $this->input->post('procedure_urgency_category')
                );

                $option = array('table' => 'vendor_sale_booking_form', 'data' => $options_data);
                if ($this->common_model->customInsert($option)) {

                $response = array('status' => 1, 'message' => "Successfully added", 'url' =>base_url($this->router->fetch_class()));
                } else {
                    $response = array('status' => 0, 'message' => "Failed to add");
                }
           
        echo json_encode($response);
    }


    /**
     * @method menu_category_add
     * @description add dynamic rows
     * @return array
     */
    public function add() {

        // print_r($this->input->post());die;
        $this->form_validation->set_rules('details', "details", 'required|trim');
        if ($this->form_validation->run() == true) {
           
           
            $CareUnitID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
           
                $options_data = array(
                   
                    'patient_id' => $this->input->post('patient_id'),
                    'user_id' => $CareUnitID,
                    'facility_user_id' => $CareUnitID,
                    'details' => $this->input->post('details'),
                    'type' => $this->input->post('type'),
                    'template_id' => $this->input->post('template_id'),
                    'is_active' => 1,
                    'create_date' => datetime()
                );
                // print_r($options_data);die;
                $option = array('table' => 'vendor_sale_letters_and_form', 'data' => $options_data);
                if ($this->common_model->customInsert($option)) {
$response = array('status' => 1, 'message' => "Successfully added", 'url' =>base_url($this->router->fetch_class()));
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




 public function getAllEmailTemplate(){

    $id = $this->input->post('id');     
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

        $this->data['send_mail_template'] = $this->common_model->customGet(array('table' => 'send_mail_template', 'select' => 'send_mail_template.*', 'where' => array('user_id' =>$datadoctors->facility_user_id)));

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

       $optionData = array('table' => 'send_mail_template', 'select' => 'send_mail_template.description', 'where' => array('user_id' =>$CareUnitID,'app_name'=>$id),
       'single' => true,
    );

        $send_mail_template = $this->common_model->customGet($optionData);
        $response= $send_mail_template->description;
        
    }

    echo $response;

    }

}
