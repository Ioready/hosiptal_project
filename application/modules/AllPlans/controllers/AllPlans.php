<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class AllPlans extends Common_Controller {

    public $data = array();
    public $file_data = "";
    public $_table = 'admin_plans';
    public $title = "Admin Plans";

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

       
         $CareUnitID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
         

         


        $option = array('table' => $this->_table, 'where' => array('status' => 0), 'order' => array('id' => 'desc'));
        $this->data['list'] = $this->common_model->customGet($option);
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
        $this->load->view('add', $this->data);
    }

    /**
     * @method menu_category_add
     * @description add dynamic rows
     * @return array
     */
    public function add() {

       
// "<pre>";
// print_r($this->input->post());die;
// "<pre>";

        $this->form_validation->set_rules('plan_name', "Plan Name", 'required|trim');
        $this->form_validation->set_rules('price', "Price", 'required|trim');
        $this->form_validation->set_rules('Duration', "Duration", 'required|trim');
        if ($this->form_validation->run() == true) {
            
           
                // $option = array('table' => $this->_table, 'where' => array('PlanName' => $this->input->post('plan_name')),array('DurationInMonths' => $this->input->post('Duration')));
              
                // if (!$this->common_model->customGet($option)) {
                    $plan_name = $this->input->post('plan_name');
                    
                    $options_data = array(
                        'PlanName' => $plan_name,
                        'Price' => $this->input->post('price'),
                        'DurationInMonths' =>$this->input->post('Duration'),
                        // 'create_date' => datetime()
                    );
                    $option = array('table' => $this->_table, 'data' => $options_data);
                   $this->common_model->customInsert($option);

                

                        $response = array('status' => 1, 'message' => "Successfully added", 'url' => base_url($this->router->fetch_class()));
                  
                    
                // } else {
                //     $response = array('status' => 0, 'message' => "PlanName already exists");
                // }
           
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

        $this->form_validation->set_rules('name', "User Name", 'required|trim');
        $this->form_validation->set_rules('email', "Email", 'valid_email|trim');
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

                $option = array('table' => $this->_table, 'where' => array('email' => $this->input->post('email'), 'id !=' => $where_id,'delete_status'=>0));
                if (!$this->common_model->customGet($option)) {
                    $options_data = array(
                        'name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                    );
                    $option = array(
                        'table' => $this->_table,
                        'data' => $options_data,
                        'where' => array('id' => $where_id)
                    );
                    $update = $this->common_model->customUpdate($option);
                    $response = array('status' => 1, 'message' => "Successfully updated", 'url' => base_url($this->router->fetch_class()));
                } else {
                    $response = array('status' => 0, 'message' => "Email already exists"); 
                }
            }
        endif;

        echo json_encode($response);
    }

}
