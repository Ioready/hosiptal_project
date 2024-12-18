<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class FacilityManager extends Common_Controller {

    public $data = array();
    public $file_data = "";
    public $_table = 'users';
    public $title = "Hospital Registration";

    public function __construct() {
        parent::__construct();
        $this->is_auth_admin();
    }

    /**
     * @method index
     * @description listing display
     * @return array
     */
    public function index($vendor_profile_activate = "No") {
        $this->data['parent'] = $this->title;
       
        $this->data['title'] = $this->title;
        $this->data['model'] = $this->router->fetch_class();
        $role_name = $this->input->post('role_name');
       
        $this->data['roles'] = array(
            'role_name' => $role_name
        );
        
        if ($vendor_profile_activate == "No") {
            $vendor_profile_activate = 0;
        } else {
            $vendor_profile_activate = 1;
        }
        $user_id = $this->session->userdata('user_id');

            $option = array(
                'table' => USERS . ' as user',
                'select' => 'user.*, group.name as group_name, UP.doc_file, CU.care_unit_code, CU.name, h.admin_id,h.token_uniq',
                'join' => array(
                    array(USER_GROUPS . ' as ugroup', 'ugroup.user_id = user.id', 'left'),
                    array(GROUPS . ' as group', 'group.id = ugroup.group_id', 'left'),
                    array('user_profile AS UP', 'UP.user_id = user.id', 'left'),
                    array('care_unit AS CU', 'CU.id = user.care_unit_id', 'left'),
                    array('hospital AS h', 'h.user_id = user.id', 'left')
                ),
                'where' => array(
                    'user.delete_status' => 0,
                    'group.id' => 6,
                    'h.admin_id' => $user_id
                ),
                'order' => array('user.id' => 'DESC') // Order descending by user id
            );

            $facility_table = $this->common_model->customGet($option);

        
    //    print_r($facility_table);die;
        $dataArray = array();
        
        //$dataArray1 = array();
        
        foreach ($facility_table as $key => $value) {
            $care_idArray = json_decode($value->care_unit_id);
            $careunidArray = array();
            foreach ($care_idArray as $key => $single) {

                $dadadadd = $this->common_model->customGetss($single);
               
                $careunidArray[] = $dadadadd->name.'('.$dadadadd->care_unit_code.')';
               // $careunidArray[] = $dadadadd->care_unit_code;
               
                $careunidid = implode(', ', $careunidArray);
                
            }  
            $value->name = $careunidid;
            $dataArray[] = $value; 
           //print_r($value);die;

        }

        // foreach ($facility_table as $key => $value) {
        //     $md_idArray = json_decode($value->md_steward_id);
        //     $mdidArray = array();
        //     foreach ($md_idArray as $key => $single1) {
        //         $dadadadd1 = $this->common_model->customGetsss($single1);
        //         $mdidArray[] = $dadadadd1->first_name .' '.$dadadadd1->last_name;               
        //         $careunidid1 = implode(', ', $mdidArray);
        //     }  
        //     $value->name1 = $careunidid1;
        //     $dataArray1[] = $value; 
        //    //print_r($value);die;

        // }

       

        //$this->data['list'] = $this->common_model->customGet($option);
         $this->data['list'] = $dataArray;
         //print_r($dataArray);die;
    //    print_r($this->data['list']);die;
       

        /* $option = array('table' => USERS . ' as user',
          'select' => 'user.*,group.name as group_name,UP.doc_file',
          'join' => array(array(USER_GROUPS . ' as ugroup', 'ugroup.user_id=user.id', 'left'),
          array(GROUPS . ' as group', 'group.id=ugroup.group_id', 'left'),
          array('user_profile UP', 'UP.user_id=user.id', 'left')),
          'order' => array('user.id' => 'ASC'),
          'where' => array('user.delete_status' => 0, "user.active" => 1, 'group.id' => 3),
          'order' => array('user.id' => 'desc')
          );
          $this->data['active_vendors'] = count($this->common_model->customGet($option));

          $option = array('table' => USERS . ' as user',
          'select' => 'user.*,group.name as group_name,UP.doc_file',
          'join' => array(array(USER_GROUPS . ' as ugroup', 'ugroup.user_id=user.id', 'left'),
          array(GROUPS . ' as group', 'group.id=ugroup.group_id', 'left'),
          array('user_profile UP', 'UP.user_id=user.id', 'left')),
          'order' => array('user.id' => 'ASC'),
          'where' => array('user.delete_status' => 0, "user.active" => 0, 'group.id' => 3),
          'order' => array('user.id' => 'desc')
          );
          $this->data['inactive_vendors'] = count($this->common_model->customGet($option)); */


        $this->load->admin_render('list', $this->data, 'inner_script');
    }

    /**
     * @method profile
     * @description get profile
     * @return array
     */
    public function hospitalDetail($id){

        // print_r($id);die;
        // $user_id = $this->session->userdata('user_id');
        // print_r($id);
        $this->data['title'] = $this->title;
        $this->data['model'] = $this->router->fetch_class();
        $role_name = $this->input->post('role_name');
       
        $this->data['roles'] = array(
            'role_name' => $role_name
        );
        
        $user_id = $id;

        $this->data['careUnit'] = $this->common_model->customCount(array('table' => 'care_unit', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0)));
                
        $this->data['initial_dx'] = $this->common_model->customCount(array('table' => 'initial_dx', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0)));
                $this->data['initial_rx'] = $this->common_model->customCount(array('table' => 'initial_rx', 'select' => 'id,name', 'where' => array('is_active' => 1, 'delete_status' => 0)));

                $this->data['doctors'] = $this->common_model->customCount(array('table' => 'doctors', 'select' => 'id,name', 'where' => array('is_active' => 1, 'facility_user_id'=>$user_id, 'delete_status' => 0)));
                

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
        
                // $this->data['initial_dx'] = $this->common_model->customGet(array('table' => 'initial_dx', 'select' => 'id,name', 'where' => array('hospital_id'=>$hospital_id,'is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
                // $this->data['culture_source'] = $this->common_model->customGet(array('table' => 'culture_source', 'select' => 'id,name', 'where' => array('hospital_id'=>$hospital_id,'is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
                // $this->data['organism'] = $this->common_model->customGet(array('table' => 'organism', 'select' => 'id,name', 'where' => array('hospital_id'=>$hospital_id,'is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
                // $this->data['precautions'] = $this->common_model->customGet(array('table' => 'precautions', 'select' => 'id,name', 'where' => array('hospital_id'=>$hospital_id,'is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));
                // $this->data['initial_rx'] = $this->common_model->customGet(array('table' => 'initial_rx', 'select' => 'id,name', 'where' => array('hospital_id'=>$hospital_id,'is_active' => 1, 'delete_status' => 0), 'order' => array('name' => 'asc')));    
        
                $option1 = array(
                    'table' => "patient",
                    'select' => "patient.*",
                    'where'=>array('patient.md_steward_id'=>$user_id),
                );
                // print_r($this->data['total_md_steward']);die;

                $this->data['total_patient'] = $this->common_model->customCount($option1);
                // print_r($data['total_patient']);die;
                $option = array(
                    'table' => "patient P",
                    'select' => "P.id",
                    'where' => array('DATE(created_date)' => date('Y-m-d'), 'P.md_steward_id'=>$user_id)
                );
                
                $this->data['total_patient_today'] = $this->common_model->customCount($option);

// print_r($data);die;

        $this->load->admin_render('hospital_details', $this->data, 'inner_script');
    }
    public function profile() {
        $this->data['parent'] = $this->title;
        $this->data['title'] = $this->title;
        $role_name = $this->input->post('role_name');
        $this->data['roles'] = array(
            'role_name' => $role_name
        );
        $user_id = $this->session->userdata('user_id');
        $option = array('table' => USERS . ' as user',
            'select' => 'user.*,group.name as group_name',
            'join' => array(array(USER_GROUPS . ' as ugroup', 'ugroup.user_id=user.id', 'left'),
                array(GROUPS . ' as group', 'group.id=ugroup.group_id', 'left')),
            'order' => array('user.id' => 'ASC'),
            'where' => array('user.delete_status' => 0, 'user.id' => $user_id),
            'where_not_in' => array('group.id' => array(1, 2, 3,4)),
            'order' => array('user.id' => 'desc')
        );
        $this->data['list'] = $this->common_model->customGet($option);
        $this->load->admin_render('list', $this->data, 'inner_script');
    }

    /**
     * @method open_model
     * @description load model box
     * @return array
     */
    function open_model() {
        $this->data['parent'] = $this->title;
        $this->data['title'] = "Add " . $this->title;
        $this->data['formUrl'] = $this->router->fetch_class() . "/add";
        $option = array('table' => 'countries',
            'select' => '*'
        );
        $this->data['countries'] = $this->common_model->customGet($option);
        $option = array('table' => 'states',
            'select' => '*');
        $this->data['states'] = $this->common_model->customGet($option);
        $option = array('table' => 'care_unit',
            'select' => '*','where'=>array('delete_status'=>0),'order' => array('name' => 'ASC'));
        $this->data['care_unit'] = $this->common_model->customGet($option);
        $option1 = array('table' => USERS . ' as user',
                    'select' => 'user.*,group.name as group_name,UP.doc_file',
                    'join' => array(array(USER_GROUPS . ' as ugroup', 'ugroup.user_id=user.id', 'left'),
                        array(GROUPS . ' as group', 'group.id=ugroup.group_id', 'left'),
                        array('user_profile UP', 'UP.user_id=user.id', 'left')),
                    'order' => array('user.id' => 'ASC'),
                    'where' => array('user.delete_status' => 0,
                        'group.id' => 2),
                    'order' => array('user.first_name' => 'ASC')
                );

                $this->data['staward'] = $this->common_model->customGet($option1);
        $this->load->admin_render('add', $this->data, 'inner_script');
    }

    /**
     * @method users_add
     * @description add dynamic rows
     * @return array
     */
    public function add() {
        $tables = $this->config->item('tables', 'ion_auth');
        $identity_column = $this->config->item('identity', 'ion_auth');
        $this->data['identity_column'] = $identity_column;
        $option = array('table' => 'states',
            'select' => '*');
        $this->data['states'] = $this->common_model->customGet($option);
        $option = array('table' => "care_unit",
            'where' => array('is_active' => 1)
        );
        $this->data['care_unit'] = $this->common_model->customGet($option);
        $option = array('table' => "users",
            'where' => array('active' => 1)
        );
        $this->data['users'] = $this->common_model->customGet($option);
        // validate form input
        $this->form_validation->set_rules('hospital_name', lang('hospital_name'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('first_name', lang('first_name'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('user_email', lang('user_email'), 'required|trim|xss_clean');
        if (empty($_POST['admin_id'])) {
       // $this->form_validation->set_rules('care_unit_id[]', "Care Unit", 'required',array('required' =>'Select at least one Care Unit'));
        $this->form_validation->set_rules('admin_id[]', "Care Unit", 'trim');
        }
        // if (empty($_POST['md_steward_id'])) {
        //      $this->form_validation->set_rules('md_steward_id[]', "MD Steward", 'trim');
        //      }
        $this->form_validation->set_rules('password', lang('password'), 'trim|required|xss_clean|min_length[6]|max_length[14]');
        if (!preg_match('/(?=.*[a-z])(?=.*[0-9]).{6,}/i', $this->input->post('password'))) {
            $response = array('status' => 0, 'message' => "The Password Should be required alphabetic and numeric");
            echo json_encode($response);
            exit;
        }
        $email = strtolower($this->input->post('user_email'));
        $zipcode = $this->input->post('zipcode');
        $options = array(
            'table' => USERS . ' as user',
            'select' => 'user.email,user.id',
            'where' => array('user.email' => $email, 'user.delete_status' => 0),
            'single' => true
        );
        $exist_email = $this->common_model->customGet($options);
        if (!empty($exist_email)) {

            $this->form_validation->set_rules('user_email', lang('user_email'), 'trim|xss_clean|is_unique[users.email]');
        }
        if ($this->form_validation->run() == true) {

           
            $image = "";
            if (!empty($_FILES['user_image']['name'])) {
                $this->filedata = $this->commonUploadImage($_POST, 'users', 'user_image');
                if ($this->filedata['status'] == 1) {
                    $image = 'uploads/users/' . $this->filedata['upload_data']['file_name'];
                }
            }
           

                $email = strtolower($this->input->post('user_email'));
                $identity = ($identity_column === 'email') ? $email : $this->input->post('user_email');
                $password = $this->input->post('password');
                $username = explode('@', $this->input->post('user_email'));
                $digits = 5;
                $code = strtoupper(substr(preg_replace('/[^A-Za-z0-9\-]/', '', $username[0]), 0, 5)) . rand(pow(10, $digits - 1), pow(10, $digits) - 1);
                $option = array(
                    'table' => USERS . ' as user',
                    'select' => 'email,id',
                    'where' => array('email' => $email, 'delete_status' => 1),
                    'single' => true
                );
                $email_exist = $this->common_model->customGet($option);
                $this->load->helper('security');

                // Generate a random 6-digit alphanumeric string
                $first_letter = strtoupper(substr($this->input->post('hospital_name'), 0, 3));

                $random_part = strtoupper(substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 5));
                $random_id = $first_letter . $random_part;
                 
            
                if (empty($email_exist)) {

                    $additional_data = array(
                       
                        'hospital_name' => $this->input->post('hospital_name'),
                        'first_name' => $this->input->post('first_name'),
                        'last_name' => $this->input->post('last_name'),
                        //'team_code' => $code,
                        'username' => $code,
                        'date_of_birth' => (!empty($this->input->post('date_of_birth'))) ? date('Y-m-d', strtotime($this->input->post('date_of_birth'))) : date('Y-m-d'),
                        'profile_pic' => $image,
                        'phone' => $this->input->post('phone_no'),
                        'phone_code' => $this->input->post('phone_code'),
                        'care_unit_id'=> json_encode($this->input->post('admin_id')),
                        // 'md_steward_id'=> json_encode($this->input->post('md_steward_id')),
                        'zipcode_access' => json_encode($this->input->post('zipcode')),
                        'email_verify' => 1,
                        'is_pass_token' => $password,
                        'created_on' => strtotime(datetime())
                    );
                    
                    $insert_id = $this->ion_auth->register($identity, $password, $email, $additional_data, array(6));

                    $additional_data_profile = array(
                        'user_id' => $insert_id,
                        'description' => $this->input->post('description'),
                        'designation' => $this->input->post('designation'),
                        'website' => $this->input->post('website'),
                        'country' => $this->input->post('country'),
                        'state' => $this->input->post('state'),
                        'city' => $this->input->post('city'),
                        'address1' => $this->input->post('address1'),
                        'company_name' => $this->input->post('company_name'),
                        
                        'profile_pic' => $image,
                        'update_date' => date('Y-m-d H:i:s')
                    );
                    $this->db->insert('vendor_sale_user_profile', $additional_data_profile);


                    $additional_data_hospital = array(
                        'user_id' => $insert_id,
                        'admin_id'=>$this->input->post('admin_id'),
                        'email' => $email,
                        'hospital_name' => $this->input->post('hospital_name'),
                        'token_uniq' => $random_id,
                        'created_on' => date('Y-m-d H:i:s')
                    );
                    $this->db->insert('vendor_sale_hospital', $additional_data_hospital);

                        $user_id = $this->session->userdata('user_id');


                        $option = array(
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
                
                        $authUser = $this->common_model->customGet($option);

                    $from = $authUser->email;

                    $name = $this->input->post('first_name');
                    $email = $email;
                    $mobile = '78965412365';
                    $subject = 'Hello hospital';

                    $EmailTemplate = getEmailTemplate("welcome");
                    // if (!empty($EmailTemplate)) {
                        $html = array();
                        $html['logo'] = base_url() . getConfig('site_logo');
                        $html['site'] = getConfig('site_name');
                        $html['site_meta_title'] = getConfig('site_meta_title');
                        $name = $this->input->post('first_name') . " " . $this->input->post('last_name');
                        $html['user'] = ucwords($name);
                        $html['email'] = $email;
                        $html['password'] = $password;
                        $html['token'] = $random_id;
                        $html['website'] = base_url();
                        $html['content'] = $EmailTemplate->description;
                        $template = $this->load->view('email-template/registration', $html, true);
                        $title = '[' . getConfig('site_name') . '] ' . $EmailTemplate->title;
                        $this->sendEmail($email, $from, $subject, $template, $title);
                   
                } else {
                    $where_id = $email_exist->id;
                    $options_data = array(
                        
                        'hospital_name' => $this->input->post('hospital_name'),
                        'first_name' => $this->input->post('first_name'),
                        'last_name' => $this->input->post('last_name'),
                        'team_code' => $code,
                        'username' => $username[0],
                        'date_of_birth' => (!empty($this->input->post('date_of_birth'))) ? date('Y-m-d', strtotime($this->input->post('date_of_birth'))) : date('Y-m-d'),
                        'gender' => $this->input->post('user_gender'),
                        'profile_pic' => $image,
                        'phone' => $this->input->post('phone_no'),
                        'email_verify' => 1,
                        'is_pass_token' => $password,
                        'zipcode_access' => json_encode($this->input->post('zipcode')),
                        'care_unit_id' => json_encode($this->input->post('care_unit_id')),
                        // 'md_steward_id' => json_encode($this->input->post('md_steward_id')),
                        'created_on' => strtotime(datetime()),
                        'delete_status' => 0
                    );
                    $insert_id = $this->ion_auth->update($where_id, $options_data);
                    $additional_data_profile = array(
                        'description' => $this->input->post('description'),
                        'designation' => $this->input->post('designation'),
                        'website' => $this->input->post('website'),
                        'country' => $this->input->post('country'),
                        'state' => $this->input->post('state'),
                        'city' => $this->input->post('city'),
                        'address1' => $this->input->post('address1'),
                        'company_name' => $this->input->post('company_name'),
                        'profile_pic' => $image,
                        'update_date' => date('Y-m-d H:i:s')
                    );
                    $this->db->where("user_id", $where_id);
                    $this->db->update('vendor_sale_user_profile', $additional_data_profile);
                }
                if ($insert_id) {
                    $html = array();
                    $response = array('status' => 1, 'message' => 'Added Successfully', 'url' => base_url($this->router->fetch_class()));
                } else {
                    $response = array('status' => 0, 'message' => lang('user_failed'));
                }
            
        } else {
            $messages = (validation_errors()) ? validation_errors() : '';
            $response = array('status' => 0, 'message' => $messages);
        }
        echo json_encode($response);
    }
   
    /**
     * @method user_edit
     * @description edit dynamic rows
     * @return array
     */

     
    public function edit() {
        $this->data['parent'] = $this->title;
        $this->data['title'] = "Edit " . $this->title;
        $id = decoding($_GET['id']);
        if (!empty($id)) {
            $option = array(
                'table' => USERS . ' as user',
                'select' => 'user.*, UP.address1,UP.city,UP.country,UP.state,UP.description,'
                . 'UP.designation,UP.website,group.name as group_name,group.id as g_id,'
                . 'UP.doc_file,UP.company_name,UP.category_id,UP.profile_pic img,UP.doc_file as nda_doc,UP.doc_file_referral',
                'join' => array(
                    array(USER_GROUPS . ' as u_group', 'u_group.user_id=user.id', ''),
                    array(GROUPS . ' as group', 'group.id=u_group.group_id', ''),
                    array('user_profile as UP', 'UP.user_id=user.id', 'left')),
                'where' => array('user.id' => $id),
                'single' => true
            );
            $results_row = $this->common_model->customGet($option);
            if (!empty($results_row)) {
                $option = array('table' => 'countries',
                    'select' => '*');
                $this->data['countries'] = $this->common_model->customGet($option);
                $option = array('table' => 'states',
                    'select' => '*');
                $this->data['states'] = $this->common_model->customGet($option);
                $this->data['results'] = $results_row;
               // print_r( json_decode($this->data['results']->care_unit_id));die;
                $option = array('table' => 'care_unit',
                    'select' => '*','where'=>array('delete_status'=>0),'order' => array('name' => 'ASC'));
                $this->data['care_unit'] = $this->common_model->customGet($option);
                $option = array('table' => USERS . ' as user',
                'select' => 'user.*,group.name as group_name,UP.doc_file',
                'join' => array(array(USER_GROUPS . ' as ugroup', 'ugroup.user_id=user.id', 'left'),
                    array(GROUPS . ' as group', 'group.id=ugroup.group_id', 'left'),
                    array('user_profile UP', 'UP.user_id=user.id', 'left')),
                'order' => array('user.id' => 'ASC'),
                'where' => array('user.delete_status' => 0,
                    'group.id' => 3),
                'order' => array('user.first_name' => 'ASC')
            );

            $this->data['staward'] = $this->common_model->customGet($option);
                $this->load->admin_render('edit', $this->data, 'inner_script');
            } else {
                $this->session->set_flashdata('error', lang('not_found'));
                redirect('vendors');
            }
        } else {
            $this->session->set_flashdata('error', lang('not_found'));
            redirect('vendors');
        }
    }

    /**
     * @method user_update
     * @description update dynamic rows
     * @return array
     */
    public function update() {
        
        $this->form_validation->set_rules('hospital_name', lang('hospital_name'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('first_name', lang('first_name'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('user_email', lang('user_email'), 'required|trim|xss_clean');
       // $this->form_validation->set_rules('care_unit_id[]', "Care Unit", 'required|trim|xss_clean');
        if (empty($_POST['care_unit_id'])) {
            $this->form_validation->set_rules('care_unit_id[]', "Care Unit", 'trim');
            }
        // if (empty($_POST['md_steward_id'])) {
        //     $this->form_validation->set_rules('md_steward_id[]', "MD Steward", 'trim');
        //     }
        $newpass = $this->input->post('new_password');
        $user_email = $this->input->post('user_email');
        if ($newpass != "") {
            $this->form_validation->set_rules('new_password', 'New Password', 'trim|required|xss_clean|min_length[6]|max_length[14]');
            //$this->form_validation->set_rules('confirm_password1', 'Confirm Password', 'trim|required|xss_clean|matches[new_password]');
            if (!preg_match('/(?=.*[a-z])(?=.*[0-9]).{6,}/i', $this->input->post('new_password'))) {
                $response = array('status' => 0, 'message' => "The Password Should be required alphabetic and numeric");
                echo json_encode($response);
                exit;
            }
        }
        $where_id = $this->input->post('id');
        if ($this->form_validation->run() == FALSE):
            $messages = (validation_errors()) ? validation_errors() : '';
            $response = array('status' => 0, 'message' => $messages);
        else:
            $option = array(
                'table' => USERS,
                'select' => 'email',
                'where' => array('email' => $user_email, 'id !=' => $where_id)
            );
            $is_unique_email = $this->common_model->customGet($option);
            if (empty($is_unique_email)) {
                $this->filedata['status'] = 1;
                $image = $this->input->post('exists_image');
                if (!empty($_FILES['user_image']['name'])) {
                    $this->filedata = $this->commonUploadImage($_POST, 'users', 'user_image');

                    if ($this->filedata['status'] == 1) {
                        $image = 'uploads/users/' . $this->filedata['upload_data']['file_name'];
                        unlink_file($this->input->post('exists_image'), FCPATH);
                    }
                }
                if ($this->filedata['status'] == 0) {
                    $response = array('status' => 0, 'message' => $this->filedata['error']);
                } else {
                    if (empty($newpass)) {
                        $currentPass = $this->input->post('current_password');
                    } else {
                        $currentPass = $newpass;
                    }
                    $options_data = array(
                        
                        'hospital_name' => $this->input->post('hospital_name'),
                        'first_name' => $this->input->post('first_name'),
                        'last_name' => $this->input->post('last_name'),
                        'date_of_birth' => "0000-00-00",
                        'gender' => "OTHER",
                        'phone' => $this->input->post('phone_no'),
                        'profile_pic' => $image,
                        'email' => $user_email,
                        'zipcode_access' => json_encode($this->input->post('zipcode')),
                        'care_unit_id' => json_encode($this->input->post('care_unit_id')),
                        // 'md_steward_id' => json_encode($this->input->post('md_steward_id')),
                        'is_pass_token' => $currentPass,
                    );
                    $this->ion_auth->update($where_id, $options_data);
                    $additional_data_profile = array(
                        'description' => $this->input->post('description'),
                        'designation' => $this->input->post('designation'),
                        'website' => $this->input->post('website'),
                        'country' => $this->input->post('country'),
                        'state' => $this->input->post('state'),
                        'city' => $this->input->post('city'),
                        'address1' => $this->input->post('address1'),
                        'category_id' => (!empty($this->input->post('category_id'))) ? implode(",", $this->input->post('category_id')) : "",
                        'company_name' => $this->input->post('company_name'),
                        'profile_pic' => $image,
                        'update_date' => date('Y-m-d H:i:s')
                    );
                    $this->db->where("user_id", $where_id);
                    $this->db->update('vendor_sale_user_profile', $additional_data_profile);
                    if ($newpass != "") {
                     $change = $this->ion_auth->change_password($user_email, $this->input->post('current_password'), $this->input->post('new_password'));
                       // $pass_new = $this->common_model->encryptPassword($this->input->post('new_password'));
                        //$this->common_model->customUpdate(array('table' => 'users', 'data' => array('password' => $pass_new), 'where' => array('id' => $where_id)));
                    }
                    $response = array('status' => 1, 'message' => 'updated Successfully', 'url' => base_url('mdSteward/edit'), 'id' => encoding($this->input->post('id')));
                }
            } else {
                $response = array('status' => 0, 'message' => "The email address already exists");
            }

        endif;

        echo json_encode($response);
    }

    public function updateAccountStatus() {
        $id = decoding($this->input->post('userId'));
        $status = $this->input->post('status');
        if ($status == "No") {
            $status = 0;
        } else {
            $status = 1;
        }
        $update = $this->common_model->customUpdate(array('table' => 'users', 'data' => array('active' => $status), 'where' => array('id' => $id)));
        if ($update) {
            $response = array('status' => 1, 'message' => "Vendor Verified Successfully");
        } else {
            $response = array('status' => 0, 'message' => "Error");
        }
        echo json_encode($response);
    }

    /**
     * @method export_user
     * @description export users
     * @return array
     */
    public function export_user() {
        $option = array(
            'table' => USERS,
            'select' => '*'
        );
        $users = $this->common_model->customGet($option);
        $print_array = array();
        $i = 1;
        foreach ($users as $value) {
            $print_array[] = array('s_no' => $i, 'name' => $value->name, 'email' => $value->email);
            $i++;
        }
        $filename = "user_email_csv.csv";
        $fp = fopen('php://output', 'w');
        header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename=' . $filename);
        fputcsv($fp, array('S.no', 'User Name', 'Email'));
        foreach ($print_array as $row) {
            fputcsv($fp, $row);
        }
    }

    /**
     * @method reset_password
     * @description reset password
     * @return array
     */
    public function reset_password() {
        $user_id_encode = $this->uri->segment(3);

        $data['id_user_encode'] = $user_id_encode;

        if (!empty($_POST) && isset($_POST)) {

            $user_id_encode = $_POST['user_id'];

            if (!empty($user_id_encode)) {

                $user_id = base64_decode(base64_decode(base64_decode(base64_decode($user_id_encode))));


                $this->form_validation->set_rules('new_password', 'Password', 'required');
                $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[new_password]');

                if ($this->form_validation->run() == FALSE) {
                    $this->load->view('reset_password', $data);
                } else {


                    $user_pass = $_POST['new_password'];

                    $data1 = array('password' => md5($user_pass));
                    $where = array('id' => $user_id);

                    $out = $this->common_model->updateFields(USERS, $data1, $where);



                    if ($out) {

                        $this->session->set_flashdata('passupdate', 'Password Successfully Changed.');
                        $data['success'] = 1;
                        $this->load->view('reset_password', $data);
                    } else {

                        $this->session->set_flashdata('error_passupdate', 'Password Already Changed.');
                        $this->load->view('reset_password', $data);
                    }
                }
            } else {

                $this->session->set_flashdata('error_passupdate', 'Unable to Change Password, Authentication Failed.');
                $this->load->view('reset_password');
            }
        } else {
            $this->load->view('reset_password', $data);
        }
    }

    /**
     * @method delVendors
     * @description delete vendors
     * @return array
     */
    public function delVendors() {
        $response = "";
        $id = decoding($this->input->post('id')); // delete id
        $table = $this->input->post('table'); //table name
        $id_name = $this->input->post('id_name'); // table field name
        if (!empty($table) && !empty($id) && !empty($id_name)) {
            $option = array(
                'table' => $table,
                'data' => array('delete_status' => 1),
                'where' => array($id_name => $id)
            );
            $delete = $this->common_model->customUpdate($option);
            if ($delete) {
                $response = 200;
            } else $response = 400;
        }else {
            $response = 400;
        }
        echo $response;
    }

}
