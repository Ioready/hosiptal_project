<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Labs extends Common_Controller {

    public $data = array();
    public $file_data = "";
    public $_table = 'vendor_sale_labs';
    public $title = "Labs";

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

       
         $hospital = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

        //  $Sql = "SELECT vendor_sale_labs.id FROM vendor_sale_labs WHERE vendor_sale_labs.id = '$CareUnitID'"; 
        //  $careUnit_list_id = $this->common_model->customQuery($Sql);
        //  $care_unit_ids =[];
        //  foreach($careUnit_list_id as $values){
        //     $care_unit_ids= $values->doctor_id;
        //     }
        //  $transaction_array = str_replace(array('[','"',']') , '', $care_unit_ids);
        //  $careUnit_lists = explode(",", $transaction_array);
        //  $careunit_facility_counts =[];

        //  foreach($careUnit_lists as $uids){
        //  $Sql = "SELECT vendor_sale_doctors.id,vendor_sale_doctors.name,vendor_sale_doctors.email FROM vendor_sale_doctors WHERE vendor_sale_doctors.id ='$uids'"; 
        //  $careunit_facility_counts[] = $this->common_model->customQuery($Sql);
        //     }

        //  $arraySingle = call_user_func_array('array_merge', $careunit_facility_counts);
        //  $this->data['careUnit'] = $arraySingle;

        //  $Sql = "SELECT vendor_sale_doctors.facility_user_id FROM vendor_sale_doctors WHERE vendor_sale_doctors.facility_user_id ='$CareUnitID'"; 
        //  $careunit_facility_user_id = $this->common_model->customQuery($Sql);

        //  $this->data['careUnit_user_id'] = $careunit_facility_user_id;
         //print_r($this->data['careUnit_user_id']);die;


        $option = array('table' => $this->_table, 'where' => array('status' => 0, 'facility_user_id'=>$hospital), 'order' => array('id' => 'desc'));

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
        $this->load->view('add', $this->data);
    }

    /**
     * @method menu_category_add
     * @description add dynamic rows
     * @return array
     */
    public function add() {

        $CareUnitID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
      

        $this->form_validation->set_rules('name', "name", 'required|trim');
        
        if ($this->form_validation->run() == true) {
            
                    $name = $this->input->post('name');
                    $options_data = array(
                        'name' => $name,
                        'facility_user_id' =>$CareUnitID,
                        'status' => 0,
                        'created_on' => datetime()
                    );
                    $option = array('table' => $this->_table, 'data' => $options_data);
                    $this->common_model->customInsert($option);

                        $response = array('status' => 1, 'message' => "Successfully added", 'url' => base_url($this->router->fetch_class()));
                   
                } else {
                    $messages = (validation_errors()) ? validation_errors() : '';
                    $response = array('status' => 0, 'message' => $messages);
                }
            // }
        // } else {
        //     $messages = (validation_errors()) ? validation_errors() : '';
        //     $response = array('status' => 0, 'message' => $messages);
        // }
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
        
        $where_id = $this->input->post('id');
        if ($this->form_validation->run() == TRUE):
        
                    $options_data = array(
                        'name' => $this->input->post('name'),
                       
                    );
                    
                    $option = array(
                        'table' => $this->_table,
                        'data' => $options_data,
                        'where' => array('id' => $where_id)
                    );
                    $update = $this->common_model->customUpdate($option);
                    $response = array('status' => 1, 'message' => "Successfully updated", 'url' => base_url($this->router->fetch_class()));
                
        endif;

        echo json_encode($response);
    }

}
