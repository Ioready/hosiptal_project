<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends Common_Controller {

    public $data = array();
    public $file_data = "";
    // public $_table = 'contactus';
    public $_table = 'doctors_contactus';
    
    public $title = "Contact Us";

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
        $this->data['table'] = $this->_table;



        $role_name = $this->input->post('role_name');

        // $LoginID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';


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



        $option1 ="SELECT `vendor_sale_doctors_contactus`.`title`,`vendor_sale_doctors_contactus`.`first_name`, `vendor_sale_doctors_contactus`.`last_name`,`vendor_sale_doctors_contactus`.`company`,
        `vendor_sale_doctors_contactus`.`id`, 
        `vendor_sale_doctors_contactus`.`contacts_clinician`,
        `vendor_sale_doctors_contactus`.`comment`,
        `vendor_sale_doctors_contactus`.`created_at`,
        -- `vendor_sale_users`.`first_name 'as f_name'`,
        -- `vendor_sale_users`.`last_name as l_name`,
        `vendor_sale_doctors_contactus`.`user_id`,`vendor_sale_doctors_contactus`.`phone_type`,`vendor_sale_doctors_contactus`.`phone_number`,`vendor_sale_doctors_contactus`.`user_email`
        ,`vendor_sale_doctors_contactus`.`address_lookup`,`vendor_sale_doctors_contactus`.`streem_address`,`vendor_sale_doctors_contactus`.`city`,`vendor_sale_doctors_contactus`.`post_code`
        ,`vendor_sale_doctors_contactus`.`country`,`vendor_sale_doctors_contactus`.`billing_detail`,`vendor_sale_doctors_contactus`.`payment_reference`
        ,`vendor_sale_doctors_contactus`.`System`,`vendor_sale_doctors_contactus`.`healthcode`
        FROM `vendor_sale_doctors_contactus` 
        LEFT JOIN `vendor_sale_users` ON 
        `vendor_sale_users`.`id` = `vendor_sale_doctors_contactus`.`user_id`
        WHERE `vendor_sale_doctors_contactus`.`delete_status` = 0 AND `vendor_sale_doctors_contactus`.`hospital_id` = $hospital_id
        ORDER BY `vendor_sale_doctors_contactus`.`id` DESC";
        //  WHERE `vendor_sale_doctors_contactus`.`delete_status` = 0  and
        //  `vendor_sale_doctors_contactus`.`user_id` =$hospitalAndDoctorId
        // $option1 ="SELECT `vendor_sale_contactus`.`title`, 
        // `vendor_sale_contactus`.`id`, 
        // `vendor_sale_contactus`.`description`,
        // `vendor_sale_contactus`.`is_active`,
        // `vendor_sale_contactus`.`create_date`,
        // `vendor_sale_users`.`first_name`,
        // `vendor_sale_users`.`last_name`,
        // `vendor_sale_contactus`.`facility_manager_id`
        // FROM `vendor_sale_contactus` 
        // LEFT JOIN `vendor_sale_users` ON 
        // `vendor_sale_users`.`id` = `vendor_sale_contactus`.`facility_manager_id`
        // WHERE `vendor_sale_contactus`.`delete_status` = 0  and
        // `vendor_sale_contactus`.`facility_manager_id` =$LoginID
        // ORDER BY `vendor_sale_contactus`.`id` DESC";
        
        $this->data['list'] = $this->common_model->customQuery($option1);


        // $option ="SELECT `vendor_sale_contactus`.`title`, 
        // `vendor_sale_contactus`.`id`, 
        // `vendor_sale_contactus`.`description`,
        // `vendor_sale_contactus`.`is_active`,
        // `vendor_sale_contactus`.`create_date`,
        // `vendor_sale_users`.`first_name`,
        // `vendor_sale_users`.`last_name`,
        // `vendor_sale_contactus`.`facility_manager_id`
        // FROM `vendor_sale_contactus` 
        // LEFT JOIN `vendor_sale_users` ON 
        // `vendor_sale_users`.`id` = `vendor_sale_contactus`.`facility_manager_id`
        // WHERE `vendor_sale_contactus`.`delete_status` = 0 
        // ORDER BY `vendor_sale_contactus`.`id` DESC";
        
        // $this->data['list'] = $this->common_model->customQuery($option);
// print_r($this->data['list']);die;    

        $this->load->admin_render('list', $this->data, 'inner_script');
    }



    public function directory($vendor_profile_activate = "No") {
        $this->data['parent'] = $this->title;
        $this->data['title'] = $this->title;
        $this->data['model'] = $this->router->fetch_class();
        $this->data['table'] = $this->_table;
        $role_name = $this->input->post('role_name');

        
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



        $option1 ="SELECT `vendor_sale_doctors_contactus`.`title`,`vendor_sale_doctors_contactus`.`first_name`, `vendor_sale_doctors_contactus`.`last_name`,`vendor_sale_doctors_contactus`.`company`,
        `vendor_sale_doctors_contactus`.`id`, 
        `vendor_sale_doctors_contactus`.`contacts_clinician`,
        `vendor_sale_doctors_contactus`.`comment`,
        `vendor_sale_doctors_contactus`.`created_at`,
        -- `vendor_sale_users`.`first_name 'as f_name'`,
        -- `vendor_sale_users`.`last_name as l_name`,
        `vendor_sale_doctors_contactus`.`user_id`,`vendor_sale_doctors_contactus`.`phone_type`,`vendor_sale_doctors_contactus`.`phone_number`,`vendor_sale_doctors_contactus`.`user_email`
        ,`vendor_sale_doctors_contactus`.`address_lookup`,`vendor_sale_doctors_contactus`.`streem_address`,`vendor_sale_doctors_contactus`.`city`,`vendor_sale_doctors_contactus`.`post_code`
        ,`vendor_sale_doctors_contactus`.`country`,`vendor_sale_doctors_contactus`.`billing_detail`,`vendor_sale_doctors_contactus`.`payment_reference`
        ,`vendor_sale_doctors_contactus`.`System`,`vendor_sale_doctors_contactus`.`healthcode`
        FROM `vendor_sale_doctors_contactus` 
        LEFT JOIN `vendor_sale_users` ON 
        `vendor_sale_users`.`id` = `vendor_sale_doctors_contactus`.`user_id`
        WHERE `vendor_sale_doctors_contactus`.`delete_status` = 0 AND `vendor_sale_doctors_contactus`.`hospital_id` = $hospital_id
        ORDER BY `vendor_sale_doctors_contactus`.`id` DESC";
        //  WHERE `vendor_sale_doctors_contactus`.`delete_status` = 0  and
        //  `vendor_sale_doctors_contactus`.`user_id` =$hospitalAndDoctorId
        // $option1 ="SELECT `vendor_sale_contactus`.`title`, 
        // `vendor_sale_contactus`.`id`, 
        // `vendor_sale_contactus`.`description`,
        // `vendor_sale_contactus`.`is_active`,
        // `vendor_sale_contactus`.`create_date`,
        // `vendor_sale_users`.`first_name`,
        // `vendor_sale_users`.`last_name`,
        // `vendor_sale_contactus`.`facility_manager_id`
        // FROM `vendor_sale_contactus` 
        // LEFT JOIN `vendor_sale_users` ON 
        // `vendor_sale_users`.`id` = `vendor_sale_contactus`.`facility_manager_id`
        // WHERE `vendor_sale_contactus`.`delete_status` = 0  and
        // `vendor_sale_contactus`.`facility_manager_id` =$LoginID
        // ORDER BY `vendor_sale_contactus`.`id` DESC";
        
        $this->data['list'] = $this->common_model->customQuery($option1);


        $this->load->admin_render('directory', $this->data, 'inner_script');
    }


    /**
     * @method profile
     * @description get profile
     * @return array
     */
    // public function profile() {
    //     $this->data['parent'] = $this->title;
    //     $this->data['title'] = $this->title;
    //     $role_name = $this->input->post('role_name');
    //     $this->data['roles'] = array(
    //         'role_name' => $role_name
    //     );
    //     $user_id = $this->session->userdata('user_id');
    //     $option = array('table' => USERS . ' as user',
    //         'select' => 'user.*,group.name as group_name',
    //         'join' => array(array(USER_GROUPS . ' as ugroup', 'ugroup.user_id=user.id', 'left'),
    //             array(GROUPS . ' as group', 'group.id=ugroup.group_id', 'left')),
    //         'order' => array('user.id' => 'ASC'),
    //         'where' => array('user.delete_status' => 0, 'user.id' => $user_id),
    //         'where_not_in' => array('group.id' => array(1, 2, 3)),
    //         'order' => array('user.id' => 'desc')
    //     );
    //     $this->data['list'] = $this->common_model->customGet($option);
    //     $this->load->admin_render('list', $this->data, 'inner_script');
    // }

    /**
     * @method open_model
     * @description load model box
     * @return array
     */


    function open_model() {
        $this->data['parent'] = $this->title;
        $this->data['title'] = "Add " . $this->title;
        $this->data['formUrl'] = $this->router->fetch_class() . "/add";
        $option = "SELECT `vendor_sale_users`.`id`,`vendor_sale_users`.`first_name`, 
        `vendor_sale_users`.`last_name`
        FROM `vendor_sale_users` 
        LEFT JOIN `vendor_sale_users_groups` ON `vendor_sale_users_groups`.`user_id` = `vendor_sale_users`.`id`
        LEFT JOIN `vendor_sale_groups` ON `vendor_sale_groups`.`id` = `vendor_sale_users_groups`.`group_id`
        WHERE `vendor_sale_users`.`delete_status` = 0 and `vendor_sale_users_groups`.`group_id` = 5
        ORDER BY `vendor_sale_users`.`first_name` ASC";
        
        $this->data['users'] = $this->common_model->customQuery($option);

        $option = array('table' => 'countries',
            'select' => '*',
            'where'=>array('shortname'=>'GB')
        );
        $this->data['countries'] = $this->common_model->customGet($option);
        $option = array('table' => 'states',
                    'select' => '*');

        $this->data['states'] = $this->common_model->customGet($option);

        
        $this->load->admin_render('add', $this->data, 'inner_script');
    }

    /**
     * @method users_add
     * @description add dynamic rows
     * @return array
     */



    public function add() {

//                 echo "<pre>";
// print_r($this->input->post());die;
// echo "</pre>";
        $LoginID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

        // $this->form_validation->set_rules('facility_manager_id', "Facility Manager Name", 'required|xss_clean');
        $this->form_validation->set_rules('first_name', "first_name", 'required|trim');
        // $this->form_validation->set_rules('description', "Description", 'required|trim');

        if ($this->form_validation->run() == true) {
            // $this->filedata['status'] = 1;
            
            // if ($this->filedata['status'] == 0) {
            //     $response = array('status' => 0, 'message' => $this->filedata['error']);
            // } else {
                // $options_data = array(
                //     'facility_manager_id' => $LoginID,
                //     'title' => $this->input->post('title'),
                //     'description' => $this->input->post('description'),

                //     'is_active' => 1,
                //     'create_date' => strtotime(datetime()),
                // );

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


                $options_data = array(
                    'hospital_id'=>$hospital_id,
                    'user_id'=> $LoginID,
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'title' => $this->input->post('title'),
                    'company' => $this->input->post('company'),
                    'contacts_clinician' => $this->input->post('contacts_clinician'),
                    'comment' => $this->input->post('comment'),
                    'phone_type' => $this->input->post('phone_type'),
                    'phone_number' => $this->input->post('phone_number'),
                    'user_email' => $this->input->post('user_email'),
                    'address_lookup' => $this->input->post('address_lookup'),
                    'streem_address' => $this->input->post('streem_address'),
                    'city' => $this->input->post('city'),
                    'state' => $this->input->post('state'),
                    'post_code' => $this->input->post('post_code'),
                    'country' => $this->input->post('country'),
                    'billing_detail' => $this->input->post('billing_detail'),
                    'payment_reference' => $this->input->post('payment_reference'),
                    'System' => $this->input->post('System'),
                    'healthcode' => $this->input->post('healthcode'),
                    
                );

                // echo "<pre>";
                // print_r($options_data);die;
                // echo "</pre>";
                $option = array('table' => $this->_table, 'data' => $options_data);
               
                if ($this->common_model->customInsert($option)) {
                    $response = array('status' => 1, 'message' => "Successfully added", 'url' => base_url($this->router->fetch_class()));
                } else {
                    $response = array('status' => 0, 'message' => "Failed to add");
                }
            // }
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
        $this->data['table'] = $this->_table;
        $id = decoding($_GET['id']);
       
        

        if (!empty($id)) {
        //     $option1 ="SELECT `vendor_sale_doctors_contactus`.`title`,`vendor_sale_doctors_contactus`.`first_name`, `vendor_sale_doctors_contactus`.`last_name`,`vendor_sale_doctors_contactus`.`company`,
        // `vendor_sale_doctors_contactus`.`id`, 
        // `vendor_sale_doctors_contactus`.`contacts_clinician`,
        // `vendor_sale_doctors_contactus`.`comment`,
        // `vendor_sale_doctors_contactus`.`created_at`,
        // `vendor_sale_doctors_contactus`.`user_id`,`vendor_sale_doctors_contactus`.`phone_type`,`vendor_sale_doctors_contactus`.`phone_number`,`vendor_sale_doctors_contactus`.`user_email`
        // ,`vendor_sale_doctors_contactus`.`address_lookup`,`vendor_sale_doctors_contactus`.`streem_address`,`vendor_sale_doctors_contactus`.`city`,`vendor_sale_doctors_contactus`.`post_code`
        // ,`vendor_sale_doctors_contactus`.`country`,`vendor_sale_doctors_contactus`.`billing_detail`,`vendor_sale_doctors_contactus`.`payment_reference`
        // ,`vendor_sale_doctors_contactus`.`System`,`vendor_sale_doctors_contactus`.`healthcode`
        // FROM `vendor_sale_doctors_contactus` 
        // LEFT JOIN `vendor_sale_users` ON 
        // `vendor_sale_users`.`id` = `vendor_sale_doctors_contactus`.`user_id`
        // WHERE `vendor_sale_doctors_contactus`.`delete_status` = 0  and
        // `vendor_sale_doctors_contactus`.`id` =$id
        // ORDER BY `vendor_sale_doctors_contactus`.`id` DESC";
        
        // $results_row= $this->common_model->customQuerySql($option1);

        $option = array('table' => 'countries','select' => '*','where'=>array('shortname'=>'GB'));
        $this->data['countries'] = $this->common_model->customGet($option);
        $options = array(
            'table' => 'states',
            'select' => 'states.*',
            'where' => array('country_id' => '230'),
        );
        $this->data['states_list'] = $this->common_model->customGet($options);


        $option = array(
            'table' => $this->_table,
            'where' => array('id' => $id),
            'single' => true
        );
        $results_row = $this->common_model->customGet($option);

       
            
            if (!empty($results_row)) {
                
                $this->data['results'] = $results_row;

                // print_r($this->data['results']);die;
           
                $this->load->admin_render('edit', $this->data, 'inner_script');
            } else {
                $this->session->set_flashdata('error', lang('not_found'));
                redirect($this->router->fetch_class());
            }
        } else {
            $this->session->set_flashdata('error', lang('not_found'));
            redirect($this->router->fetch_class());
        }
    }

    public function view() {
        $this->data['parent'] = $this->title;
        $this->data['title'] = "View " . $this->title;
        $this->data['table'] = $this->_table;
        $id = decoding($_GET['id']);
       
        

        if (!empty($id)) {
            
        //     $option1 ="SELECT `vendor_sale_doctors_contactus`.`title`,`vendor_sale_doctors_contactus`.`first_name`, `vendor_sale_doctors_contactus`.`last_name`,`vendor_sale_doctors_contactus`.`company`,
        // `vendor_sale_doctors_contactus`.`id`, 
        // `vendor_sale_doctors_contactus`.`contacts_clinician`,
        // `vendor_sale_doctors_contactus`.`comment`,
        // `vendor_sale_doctors_contactus`.`created_at`,
        // `vendor_sale_doctors_contactus`.`user_id`,`vendor_sale_doctors_contactus`.`phone_type`,`vendor_sale_doctors_contactus`.`phone_number`,`vendor_sale_doctors_contactus`.`user_email`
        // ,`vendor_sale_doctors_contactus`.`address_lookup`,`vendor_sale_doctors_contactus`.`streem_address`,`vendor_sale_doctors_contactus`.`city`,`vendor_sale_doctors_contactus`.`post_code`
        // ,`vendor_sale_doctors_contactus`.`country`,`vendor_sale_doctors_contactus`.`billing_detail`,`vendor_sale_doctors_contactus`.`payment_reference`
        // ,`vendor_sale_doctors_contactus`.`System`,`vendor_sale_doctors_contactus`.`healthcode`
        // FROM `vendor_sale_doctors_contactus` 
        // LEFT JOIN `vendor_sale_users` ON 
        // `vendor_sale_users`.`id` = `vendor_sale_doctors_contactus`.`user_id`
        // WHERE `vendor_sale_doctors_contactus`.`delete_status` = 0  and
        // `vendor_sale_doctors_contactus`.`id` =$id
        // ORDER BY `vendor_sale_doctors_contactus`.`id` DESC";
        
        // $results_row= $this->common_model->customQuerySql($option1);

        $option = array('table' => 'countries','select' => '*','where'=>array('shortname'=>'GB'));
        $this->data['countries'] = $this->common_model->customGet($option);

        $options = array(
            'table' => 'states',
            'select' => 'states.*',
            'where' => array('country_id' => '230'),
        );
        $this->data['states_list'] = $this->common_model->customGet($options);

        $options = array(
            'table' => 'doctors_contactus',
            'select' => 'doctors_contactus.*, countries.name AS country_name, states.state AS state_name, cities.city AS city_name',
            'join' => array(
                array('countries', 'doctors_contactus.country = countries.id', 'left'),
                array('states', 'doctors_contactus.state = states.id_state', 'left'),
                array('cities', 'doctors_contactus.city = cities.id_city', 'left')
            ),
            'where' => array('doctors_contactus.id' => $id),  // Use the table name prefix if 'id' is ambiguous
            'single' => true
        );
        
        $results_row = $this->common_model->customGet($options);
        
        
            if (!empty($results_row)) {
                
                // print_r($results_row);die;
                $this->data['results'] = $results_row;

                // print_r($this->data['results']);die;
           
                $this->load->admin_render('view', $this->data, 'inner_script');
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
     * @method user_update
     * @description update dynamic rows
     * @return array
     */


    public function update() {

        // echo '<pre>';
        // print_r($this->input->post());die;
        // echo '</pre>';
        $this->form_validation->set_rules('country', "country", 'required|trim');
        $this->form_validation->set_rules('title', "Title", 'required|trim');
        $this->form_validation->set_rules('city', "city", 'required|trim');

        $where_id = $this->input->post('id');

        if ($this->form_validation->run() == True){
        
           

                $options_data = array(
                'table' => 'doctors_contactus',
                'data' => array(
                    'first_name' => $this->input->post('first_name'),
                    'last_name' => $this->input->post('last_name'),
                    'title' => $this->input->post('title'),
                    'company' => $this->input->post('company'),
                    'contacts_clinician'=> $this->input->post('company'),
                    'comment' => $this->input->post('comment'),
                    'phone_type'=> $this->input->post('phone_type'),
                    'phone_number' => $this->input->post('phone_number'),
                    'user_email' => $this->input->post('user_email'),
                    'address_lookup' => $this->input->post('address_lookup'),
                    'streem_address' => $this->input->post('streem_address'),
                    'country' => $this->input->post('country'),
                    'state' => $this->input->post('state'),
                    'city' => $this->input->post('city'),
                    'post_code' => $this->input->post('post_code'),
                    'billing_detail' => $this->input->post('billing_detail'),
                    'payment_reference' => $this->input->post('payment_reference'),
                    'System' => $this->input->post('System'),
                    'healthcode' => $this->input->post('healthcode'),
                ),
                'where' => array('id' => $where_id)
                );

                // print_r($options_data);die;
                // $option = array(
                //     'table' => $this->_table,
                //     'data' => $options_data,
                //     'where' => array('id' => $where_id)
                // );

                // print_r($option);die;

                $update = $this->common_model->customUpdate($options_data);
                
                $response = array('status' => 1, 'message' => "Successfully updated", 'url' => base_url('contactus/edit'), 'id' => encoding($this->input->post('id')));
                
            // }
        }else{
            $messages = (validation_errors()) ? validation_errors() : '';
            $response = array('status' => 0, 'message' => $messages);
        }

        echo json_encode($response);
    }


   /*  public function update1() {

        $this->form_validation->set_rules('title', lang('title'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('description', lang('description'), 'required|trim|xss_clean');
        $this->form_validation->set_rules('facility_manager_id', "Facility Manager", 'required|trim|xss_clean');
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
        #print_r($where_id);die('ajay');
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
                        'title' => $this->input->post('title'),
                        'description' => $this->input->post('description'),
                        'last_name' => $this->input->post('last_name'),
                        'date_of_birth' => "0000-00-00",
                        'gender' => "OTHER",
                        'phone' => $this->input->post('phone_no'),
                        'profile_pic' => $image,
                        'email' => $user_email,
                        'zipcode_access' => json_encode($this->input->post('zipcode')),
                        'facility_manager_id' => $this->input->post('facility_manager_id'),
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
    } */

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


    public function getStates()
    {
        $response = array();
        $id = $this->input->post('id');
       
        if (!empty($id)) {
           

            $options = array(
                'table' => 'states',
                'select' => 'states.*',
                'where' => array('country_id' => $id),
            );
            $states = $this->common_model->customGet($options);
            
            $data.= '<select id="state" onchange="getCities(this.value)" name="state" class="form-control" size="1">';
            $data.= '<option value="" disabled selected>Please select</option>';
            
            
            foreach ($states as $state_list) {
               
                $data.= '<option value="' . $state_list->id_state . '">' . $state_list->state . '</option>';
            }
            
            
             $data.= '</select>';
        }

        
        echo json_encode($data);

    //    return  json_encode($response);
    }
    public function getEditStates()
    {
        $response = array();
        $id = $this->input->post('id');
       
        if (!empty($id)) {
           

            // $options = array(
            //     'table' => 'states',
            //     'select' => 'states.*',
            //     'where' => array('country_id' => $id),
            // );
            // $states = $this->common_model->customGet($options);
            
            // $data.= '<select id="state" onchange="getCities(this.value)" name="state" class="form-control" size="1">';
            // $data.= '<option value="" disabled selected>Please select</option>';
            
            
            // foreach ($states as $state_list) {
               
            //     $data.= '<option value="' . $state_list->id_state . '">' . $state_list->state . '</option>';
            // }
            
            
            //  $data.= '</select>';

            $options = array(
                'table' => 'states',
                'select' => 'states.*',
                'where' => array('country_id' => $id),
            );
            $data = $this->common_model->customGet($options);
            
            // $data.= '<select id="state" onchange="getCities(this.value)" name="state" class="form-control select2" size="1">';
            // $data.= '<option value="" disabled selected>Please select</option>';
            
            // foreach ($states as $state_list) {
               
            //     $data.= '<option value="' . $state_list->id_state . '">' . $state_list->state . '</option>';
            // }
            //  $data.= '</select>';
        }

        // echo json_encode($states);
        // }

        
        echo json_encode($data);

    //    return  json_encode($response);
    }
    
    public function getEditCity()
    {
        $response = array();
        $id = $this->input->post('id');
        if (!empty($id)) {
            $options = array(
                'table' => 'cities',
                'select' => 'cities.*',
                'where' => array('state_id' => $id),
            );
            $data = $this->common_model->customGet($options);

            

            // $data.= '<select id="city" name="city" class="form-control" size="1">';
            // $data.= '<option value="" disabled selected>Please select</option>';
            
            
            // foreach ($cities as $cities_list) {
               
            //     $data.= '<option value="' . $cities_list->id_city . '">' . $cities_list->city . '</option>';
            // }
            
            //  $data.= '</select>';
        }
        echo json_encode($data);
    }
    
    public function getCity()
    {
        $response = array();
        $id = $this->input->post('id');
        if (!empty($id)) {
            $options = array(
                'table' => 'cities',
                'select' => 'cities.*',
                'where' => array('state_id' => $id),
            );
            $cities = $this->common_model->customGet($options);

            

            $data.= '<select id="city" name="city" class="form-control" size="1">';
            $data.= '<option value="" disabled selected>Please select</option>';
            
            
            foreach ($cities as $cities_list) {
               
                $data.= '<option value="' . $cities_list->id_city . '">' . $cities_list->city . '</option>';
            }
            
             $data.= '</select>';
        }
        echo json_encode($data);
    }

}
