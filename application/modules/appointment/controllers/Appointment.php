<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends Common_Controller {

    public $data = array();
    public $file_data = "";
    public $_table = 'appointment';
    public $title = "Appointment Form";

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

       
        // print_r($this->data['results']);die;
        $this->data['parent'] = $this->title;
       
        $this->data['title'] = $this->title;
        $this->data['model'] = $this->router->fetch_class();
        $role_name = $this->input->post('role_name');
        $today = date('Y-m-d');
        
        $this->data['roles'] = array(
            'role_name' => $role_name
        );
        
        if ($vendor_profile_activate == "No") {
            $vendor_profile_activate = 0;
        } else {
            $vendor_profile_activate = 1;
        }
        $option = array(
            'table' => 'appointment',
            'select' => 'appointment.*, users.first_name, users.last_name',
            'join' => array(
                array('users', 'users.id = appointment.doctor_id', 'left')
            ),
            'order' => array('appointment.id' => 'desc'),
            // 'where' => array('appointment.status' => 0),
        );
       
        $appointment_table = $this->common_model->customGet($option);
    //    print_r($facility_table);die;
        $dataArray = array();
        
        //$dataArray1 = array();
        
        foreach ($appointment_table as $key => $value) {
            $care_idArray = json_decode($value->care_unit_id);
            $careunidArray = array();
            foreach ($care_idArray as $key => $single) {

                $dadadadd = $this->common_model->customGetss($single);
               
                $careunidArray[] = $dadadadd;
               // $careunidArray[] = $dadadadd->care_unit_code;
               
                $careunidid = implode(', ', $careunidArray);
                
            }  
            $value->name = $careunidid;
            $dataArray[] = $value; 
           //print_r($value);die;

        }

        
         $this->data['list'] = $dataArray;

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
            

            $optionDoctor = array(
                'table' => ' doctors',
                'select' => 'users.*',
                'join' => array(
                    array('users', 'doctors.user_id=users.id', 'left'),
                    array('user_profile UP', 'UP.user_id=users.id', 'left'),
                    array('doctors_qualification', 'doctors_qualification.user_id=users.id', 'left'),
                    
                ),
                
                'where' => array(
                    'users.delete_status' => 0,
                    'doctors.facility_user_id'=>$datadoctors->facility_user_id
                ),
               
            );
            $doctorsData = $this->common_model->customGet($optionDoctor);

    

            $optionPractitioner = array(
                'table' => 'practitioner',
                'select' => '*', 'where' => array('hospital_id'=>$datadoctors->facility_user_id,'delete_status' => 0), 'order' => array('name' => 'ASC')
            );
            $practitionerData = $this->common_model->customGet($optionPractitioner);
        $combinedData = array_merge($practitionerData,$doctorsData);
        $this->data['practitioner'] = $combinedData;
    


        $option = array(
            'table' => 'clinic_appointment',
            'select' => 'clinic_appointment.*, U.first_name, U.last_name, UP.address1, UP.city, UP.state, pa.name as patient_name, cl.name as clinic_name, cl.clinic_location, pr.name',
            'join' => array(
                array('users as U', 'clinic_appointment.location_appointment = U.id', 'left'),
                array('patient as pa', 'clinic_appointment.patient = pa.user_id', 'left'),
                array('clinic as cl', 'clinic_appointment.location_appointment = cl.id', 'left'),
                array('user_profile as UP', 'UP.user_id = U.id', 'left'),
                array('practitioner as pr', 'clinic_appointment.practitioner = pr.id', 'left'),
            ),
            'where' => array(
                'clinic_appointment.status' => 0,
                // 'clinic_appointment.start_date_appointment' => $today,
                // 'clinic_appointment.theatre_date_time' => $today,
                // 'clinic_appointment.out_start_time_at' => $today,
                // 'clinic_appointment.start_date_availability' => $today
                'clinic_appointment.created_at' => date('Y-m-d', strtotime('created_at')),
                
            ),
            // 'or_where' => array(
            //     'clinic_appointment.start_date_appointment' => $today,
            //     'clinic_appointment.theatre_date_time' => $today,
            //     'clinic_appointment.out_start_time_at' => $today,
            //     'clinic_appointment.start_date_availability' => $today
            // ),
            'order' => array(
            'clinic_appointment.start_date_appointment' => 'desc',
                'clinic_appointment.theatre_date_time' => 'desc',
                'clinic_appointment.out_start_time_at' => 'desc',
                'clinic_appointment.start_date_availability' => 'desc'
            )
        );
    
        // $this->data['all_appointment'] = $this->common_model->customGet($option);
        

        $sql = "SELECT vendor_sale_clinic_appointment.*, U.first_name, U.last_name, UP.address1, UP.city, UP.state, pa.name as patient_name, cl.name as clinic_name, cl.clinic_location, pr.name as practitioner_name
        FROM vendor_sale_clinic_appointment
        LEFT JOIN vendor_sale_users as U ON vendor_sale_clinic_appointment.location_appointment = U.id
        LEFT JOIN vendor_sale_patient as pa ON vendor_sale_clinic_appointment.patient = pa.user_id
        LEFT JOIN vendor_sale_clinic as cl ON vendor_sale_clinic_appointment.location_appointment = cl.id
        LEFT JOIN vendor_sale_user_profile as UP ON UP.user_id = U.id
        LEFT JOIN vendor_sale_practitioner as pr ON vendor_sale_clinic_appointment.practitioner = pr.id
        WHERE (
            vendor_sale_clinic_appointment.start_date_appointment LIKE '%$today%'
            OR vendor_sale_clinic_appointment.theatre_date_time LIKE '%$today%'
            OR vendor_sale_clinic_appointment.out_start_time_at LIKE '%$today%'
            OR vendor_sale_clinic_appointment.start_date_availability LIKE '%$today%'
        )
        ORDER BY vendor_sale_clinic_appointment.start_date_appointment DESC,
                 vendor_sale_clinic_appointment.theatre_date_time DESC,
                 vendor_sale_clinic_appointment.out_start_time_at DESC,
                 vendor_sale_clinic_appointment.start_date_availability DESC";

$result = $this->db->query($sql);

$this->data['all_appointment'] = $result->result();

        // print_r($this->data['all_appointment']);die;
    
        } else if ($this->ion_auth->is_facilityManager()) {
            
            $departmentanddoctordata = $this->input->post('departmentanddoctordata');

            $departmentanddoctordata = $this->input->post('departmentanddoctordata');

            if (is_array($departmentanddoctordata) && !empty($departmentanddoctordata)) {
                // Option to retrieve doctors data
                $optionDoctor = array(
                    'table' => 'doctors',
                    'select' => 'users.*',
                    'join' => array(
                        array('users', 'doctors.user_id=users.id', 'left'),
                        array('user_profile UP', 'UP.user_id=users.id', 'left'),
                        array('doctors_qualification', 'doctors_qualification.user_id=users.id', 'left'),
                    ),
                    'where' => array(
                        'users.delete_status' => 0,
                        'doctors.facility_user_id' => $CareUnitID,
                    ),
                    'where_in' => array('doctors.user_id' => $departmentanddoctordata),  // Use where_in to check for multiple IDs
                    'order' => array('users.id' => 'asc'),
                );
                $doctorsData = $this->common_model->customGet($optionDoctor);
              
            
                $optionPractitioner = array(
                    'table' => 'practitioner',
                    'select' => '*',
                    'where' => array(
                        'hospital_id' => $CareUnitID,
                        'delete_status' => 0,
                        // 'id' => 10,
                    ),
                    'where_in' => array('practitioner.id' => $departmentanddoctordata),  // Use where_in to check for multiple IDs
                    'order' => array('id' => 'ASC')
                );
                $practitionerData = $this->common_model->customGet($optionPractitioner);
                $combinedData = array_merge($practitionerData, $doctorsData);
                $data['practitioner'] = $combinedData;
                // echo json_encode($data['practitioner']);
                $this->data['practitioner_filter'] = $combinedData;
              
            }
            else{
            $optionDoctor = array(
                'table' => 'doctors',
                'select' => 'users.*',
                'join' => array(
                    array('users', 'doctors.user_id=users.id', 'left'),
                    array('user_profile UP', 'UP.user_id=users.id', 'left'),
                    array('doctors_qualification', 'doctors_qualification.user_id=users.id', 'left'),
                ),
                'where' => array(
                    'users.delete_status' => 0,
                    'doctors.facility_user_id' => $CareUnitID
                ),
                'order' => array('users.id' => 'asc'),
            );
            $doctorsData = $this->common_model->customGet($optionDoctor);
    
            $optionPractitioner = array(
                'table' => 'practitioner',
                'select' => '*',
                'where' => array(
                    'hospital_id' => $CareUnitID,
                    // 'id' => 10,
                    'delete_status' => 0
                ),
                'order' => array('id' => 'ASC')
            );
            $practitionerData = $this->common_model->customGet($optionPractitioner);
            $combinedData = array_merge($practitionerData,$doctorsData);
            $this->data['practitioner'] = $combinedData;
       

       
                
             
        // $selectedDate = $this->input->post('selectedDate');
        // if(!empty($selectedDate)){
        
        // $this->load->model('common_model');  // Make sure your model is loaded
    
        // $option = array(
        //     'table' => 'clinic_appointment',
        //     'select' => 'clinic_appointment.*, U.first_name, U.last_name, UP.address1, UP.city, UP.state, pa.name as patient_name, cl.name as clinic_name, cl.clinic_location, pr.name',
        //     'join' => array(
        //         array('users as U', 'clinic_appointment.location_appointment = U.id', 'left'),
        //         array('patient as pa', 'clinic_appointment.patient = pa.user_id', 'left'),
        //         array('clinic as cl', 'clinic_appointment.location_appointment = cl.id', 'left'),
        //         array('user_profile as UP', 'UP.user_id = U.id', 'left'),
        //         array('practitioner as pr', 'clinic_appointment.practitioner = pr.id', 'left'),
        //     ),
        //     'where' => array(
        //         'clinic_appointment.status' => 0
        //     ),
        //     'or_where' => array(
        //         'clinic_appointment.start_date_appointment' => $selectedDate,
        //         'clinic_appointment.theatre_date_time' => $selectedDate,
        //         'clinic_appointment.out_start_time_at' => $selectedDate,
        //         'clinic_appointment.start_date_availability' => $selectedDate
        //     ),
        //     'order' => array(
        //     'clinic_appointment.start_date_appointment' => 'desc',
        //         'clinic_appointment.theatre_date_time' => 'desc',
        //         'clinic_appointment.out_start_time_at' => 'desc',
        //         'clinic_appointment.start_date_availability' => 'desc'
        //     )
        // );
    
        // $data = $this->common_model->customGet($option);
        // echo json_encode($data);
        // $this->data['all_appointment'] = $data;
               
        //     }else{
        //         $current_date = date('Y-m-d');
        //         $dateToUse = $current_date;
        
        // $this->load->model('common_model');  // Make sure your model is loaded
    
        $option = array(
            'table' => 'clinic_appointment',
            'select' => 'clinic_appointment.*, U.first_name, U.last_name, UP.address1, UP.city, UP.state, pa.name as patient_name, cl.name as clinic_name, cl.clinic_location, pr.name',
            'join' => array(
                array('users as U', 'clinic_appointment.location_appointment = U.id', 'left'),
                array('patient as pa', 'clinic_appointment.patient = pa.user_id', 'left'),
                array('clinic as cl', 'clinic_appointment.location_appointment = cl.id', 'left'),
                array('user_profile as UP', 'UP.user_id = U.id', 'left'),
                array('practitioner as pr', 'clinic_appointment.practitioner = pr.id', 'left'),
            ),
            'where' => array(
                'clinic_appointment.status' => 0,
                // 'clinic_appointment.start_date_appointment' => $today,
                // 'clinic_appointment.DATE(start_date_appointment)' =>  $today,
                // 'clinic_appointment.practitioner' => 10,
            ),
            // 'or_where' => array(
            //     'clinic_appointment.start_date_appointment' => $dateToUse,
            //     'clinic_appointment.theatre_date_time' => $dateToUse,
            //     'clinic_appointment.out_start_time_at' => $dateToUse,
            //     'clinic_appointment.start_date_availability' => $dateToUse
            // ),
            'order' => array(
            'clinic_appointment.start_date_appointment' => 'desc',
                'clinic_appointment.theatre_date_time' => 'desc',
                'clinic_appointment.out_start_time_at' => 'desc',
                'clinic_appointment.start_date_availability' => 'desc'
            )
        );
    
        // $this->data['all_appointment'] = $this->common_model->customGet($option);


        
        $sql = "SELECT vendor_sale_clinic_appointment.*, U.first_name, U.last_name, UP.address1, UP.city, UP.state, pa.name as patient_name, cl.name as clinic_name, cl.clinic_location, pr.name as practitioner_name
        FROM vendor_sale_clinic_appointment
        LEFT JOIN vendor_sale_users as U ON vendor_sale_clinic_appointment.location_appointment = U.id
        LEFT JOIN vendor_sale_patient as pa ON vendor_sale_clinic_appointment.patient = pa.user_id
        LEFT JOIN vendor_sale_clinic as cl ON vendor_sale_clinic_appointment.location_appointment = cl.id
        LEFT JOIN vendor_sale_user_profile as UP ON UP.user_id = U.id
        LEFT JOIN vendor_sale_practitioner as pr ON vendor_sale_clinic_appointment.practitioner = pr.id
        WHERE (
            vendor_sale_clinic_appointment.start_date_appointment LIKE '%$today%'
            OR vendor_sale_clinic_appointment.theatre_date_time LIKE '%$today%'
            OR vendor_sale_clinic_appointment.out_start_time_at LIKE '%$today%'
            OR vendor_sale_clinic_appointment.start_date_availability LIKE '%$today%'
        )
        ORDER BY vendor_sale_clinic_appointment.start_date_appointment DESC,
                 vendor_sale_clinic_appointment.theatre_date_time DESC,
                 vendor_sale_clinic_appointment.out_start_time_at DESC,
                 vendor_sale_clinic_appointment.start_date_availability DESC";

$result = $this->db->query($sql);
// $result = $this->db->query($sql);

$this->data['all_appointment'] = $result->result();
        // print_r($this->data['all_appointment']);die;
        
}


}

                // print_r($this->data['all_appointment']);die;


                                $LoginID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
                                $option = array(
                                    'table' => USERS . ' as user',
                                    'select' => 'user.id,user.first_name,user.last_name,user.email,user.login_id,user.created_on,user.active,group.name as group_name,UP.doc_file,CU.care_unit_code,CU.name',
                                    'join' => array(
                                        array(USER_GROUPS . ' as ugroup', 'ugroup.user_id=user.id', 'left'),
                                        array(GROUPS . ' as group', 'group.id=ugroup.group_id', 'left'),
                                        array('user_profile UP', 'UP.user_id=user.id', 'left'),
                                        array('care_unit CU', 'CU.id=user.care_unit_id', 'left'),
                                        array('doctors AS d', 'd.user_id = user.id', 'left')
                                    ),
                                
                                    'where' => array('user.delete_status' => 0, 'group.id' => 5, 'user.login_id' => $LoginID),
                                    'order' => array('user.id' => 'desc')
                                );
                                $this->data['doctors'] = $this->common_model->customGet($option);

                                $user_id = $this->session->userdata('user_id');
                                // print_r($user_id);die;

                                $option = array(
                                    'table' => USERS . ' as user',
                                    'select' => 'user.*, group.name as group_name, UP.doc_file, CU.care_unit_code, CU.name, h.admin_id',
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
                                        // 'h.admin_id' => $user_id
                                    ),
                                    'order' => array('user.id' => 'DESC') // Order descending by user id
                                );

        $this->data['hospitals'] = $this->common_model->customGet($option);
                            
        // print_r($this->data['hospitals'] );die;

        // $this->data['clinic_appointment'] = $this->common_model->customGet($option);
    // print_r($this->data['clinic_appointment'] );die;
        
        // $this->load->admin_render('list', $this->data, 'inner_script');

        $this->load->admin_render('text', $this->data, 'inner_script');
    }


    public function getLocationFilter() {

        $CareUnitID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

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


            $optionDoctor = array(
                'table' => ' doctors',
                'select' => 'users.*',
                'join' => array(
                    array('users', 'doctors.user_id=users.id', 'left'),
                    array('user_profile UP', 'UP.user_id=users.id', 'left'),
                    array('doctors_qualification', 'doctors_qualification.user_id=users.id', 'left'),
                    
                ),
                
                'where' => array(
                    'users.delete_status' => 0,
                    'doctors.facility_user_id'=>$datadoctors->facility_user_id
                ),
               
            );
            $doctorsData = $this->common_model->customGet($optionDoctor);

    

            $optionPractitioner = array(
                'table' => 'practitioner',
                'select' => '*', 'where' => array('hospital_id'=>$datadoctors->facility_user_id,'delete_status' => 0), 'order' => array('name' => 'ASC')
            );
    
    
        $response = '';
        $id = $this->input->post('id');
    
        if ($id == 'practitioner') {
            $optionDoctor = array(
                'table' => 'doctors',
                'select' => 'users.*',
                'join' => array(
                    array('users', 'doctors.user_id=users.id', 'left'),
                    array('user_profile UP', 'UP.user_id=users.id', 'left'),
                    array('doctors_qualification', 'doctors_qualification.user_id=users.id', 'left'),
                ),
                'where' => array(
                    'users.delete_status' => 0,
                    'doctors.facility_user_id' => $datadoctors->facility_user_id
                ),
                'order' => array('users.id' => 'asc'),
            );
            $doctorsData = $this->common_model->customGet($optionDoctor);
    
            $optionPractitioner = array(
                'table' => 'practitioner',
                'select' => '*',
                'where' => array(
                    'hospital_id' => $datadoctors->facility_user_id,
                    'delete_status' => 0
                ),
                'order' => array('name' => 'ASC')
            );
            $practitionerData = $this->common_model->customGet($optionPractitioner);
            $practitioner = array_merge($practitionerData, $doctorsData);
            
        } elseif ($id == 'location' || $id == 'clinic') {
            $option = array(
                'table' => 'clinic',
                'select' => '*',
                'where' => array('hospital_id' => $datadoctors->facility_user_id, 'delete_status' => 0),
                'order' => array('name' => 'ASC')
            );
            $practitioner = $this->common_model->customGet($option);
    
        }



        } else if ($this->ion_auth->is_facilityManager()) {

            $response = '';
            $id = $this->input->post('id');
        
            if ($id == 'practitioner') {
                $optionDoctor = array(
                    'table' => 'doctors',
                    'select' => 'users.*',
                    'join' => array(
                        array('users', 'doctors.user_id=users.id', 'left'),
                        array('user_profile UP', 'UP.user_id=users.id', 'left'),
                        array('doctors_qualification', 'doctors_qualification.user_id=users.id', 'left'),
                    ),
                    'where' => array(
                        'users.delete_status' => 0,
                        'doctors.facility_user_id' => $CareUnitID
                    ),
                    'order' => array('users.id' => 'asc'),
                );
                $doctorsData = $this->common_model->customGet($optionDoctor);
        
                $optionPractitioner = array(
                    'table' => 'practitioner',
                    'select' => '*',
                    'where' => array(
                        'hospital_id' => $CareUnitID,
                        'delete_status' => 0
                    ),
                    'order' => array('name' => 'ASC')
                );
                $practitionerData = $this->common_model->customGet($optionPractitioner);
                $practitioner = array_merge($practitionerData, $doctorsData);
                
            } elseif ($id == 'location' || $id == 'clinic') {
                $option = array(
                    'table' => 'clinic',
                    'select' => '*',
                    'where' => array('hospital_id' => $CareUnitID, 'delete_status' => 0),
                    'order' => array('name' => 'ASC')
                );
                $practitioner = $this->common_model->customGet($option);
        
            }
            }
    
        echo json_encode($practitioner);
    }
    
    

    
    // public function getLocationFilter()
    // {
    //     $CareUnitID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';
    //     $response = array();
    //     $id = $this->input->post('id');
       
    //     if ($id == 'practitioner') {
        
    //         $optionDoctor = array(
    //             'table' => 'doctors',
    //             'select' => 'users.*',
    //             'join' => array(
    //                 array('users', 'doctors.user_id=users.id', 'left'),
    //                 array('user_profile UP', 'UP.user_id=users.id', 'left'),
    //                 array('doctors_qualification', 'doctors_qualification.user_id=users.id', 'left'),
    //             ),
    //             'where' => array(
    //                 'users.delete_status' => 0,
    //                 'doctors.facility_user_id' => $CareUnitID
    //             ),
    //             'order' => array('users.id' => 'asc'),
    //         );
    //         $doctorsData = $this->common_model->customGet($optionDoctor);
    
    //         $optionPractitioner = array(
    //             'table' => 'practitioner',
    //             'select' => '*',
    //             'where' => array(
    //                 'hospital_id' => $CareUnitID,
    //                 'delete_status' => 0
    //             ),
    //             'order' => array('name' => 'ASC')
    //         );
    //         $practitionerData = $this->common_model->customGet($optionPractitioner);
    //         $practitioner = array_merge($practitionerData,$doctorsData);
            
            
    //         $data.= '<select id="view_id" name="state" class="form-control" size="1" multiple>';
    //         $data.= '<option value="" selected>Select  All</option>';

    //         foreach ($practitioner as $practitioner_list) {
    //             $data .= '<option value="' . $practitioner_list->id . '">' . $practitioner_list->name . $practitioner_list->first_name . ' ' . $practitioner_list->last_name . '</option>';
    //         }
            
    //         $data.= '</select>';
            
           
    //     }else if ($id == 'location') {
           
        
    //         $option = array(
    //             'table' => 'clinic',
    //             'select' => '*', 'where' => array('hospital_id'=>$CareUnitID,'delete_status' => 0), 'order' => array('name' => 'ASC')
    //         );
    //         $clinic_location = $this->common_model->customGet($option);
            
    //         $data.= '<select id="state" onchange="getCities(this.value)" name="state" class="form-control" size="1">';
    //         $data.= '<option value="" disabled selected>Please select</option>';
            
            
    //         foreach ($clinic_location as $clinic_location_list) {
               
    //             $data.= '<option value="' . $clinic_location_list->id . '">' . $clinic_location_list->clinic_location . '</option>';
    //         }
            
            
    //          $data.= '</select>';
            
           
    //     }else  if ($id == 'clinic') {
           
        
    //         $option = array(
    //             'table' => 'clinic',
    //             'select' => '*', 'where' => array('hospital_id'=>$CareUnitID,'delete_status' => 0), 'order' => array('name' => 'ASC')
    //         );
    //         $clinic_location = $this->common_model->customGet($option);
            
    //         $data.= '<select id="state" onchange="getCities(this.value)" name="state" class="form-control" size="1">';
    //         $data.= '<option value="" disabled selected>Please select</option>';
            
            
    //         foreach ($clinic_location as $clinic_location_list) {
               
    //             $data.= '<option value="' . $clinic_location_list->id . '">' . $clinic_location_list->name . '</option>';
    //         }
            
            
    //          $data.= '</select>';
            
           
    //     }

        
    //     echo json_encode($data);
    // }

    /**
     * @method profile
     * @description get profile
     * @return array
     */
    
    /**
     * @method open_model
     * @description load model box
     * @return array
     */
    function open_model() {

        $paramValue = $this->input->get('search');
        
        $this->db->like('patient_id', $paramValue);
        $this->db->limit(1); 
$results = $this->db->get('vendor_sale_patient')->result_array();

$this->data['results'] = $results;
      $this->data['parent'] = $this->title;
        $this->data['title'] = "Add " . $this->title;
        $this->data['formUrl'] = $this->router->fetch_class() . "/add";
        $this->data['model'] = $this->router->fetch_class();
       
        $user_id = $this->session->userdata('user_id');
        $option = array(
            'table' => USERS . ' as user',
            'select' => 'user.*, UP.address1,UP.city,UP.country,UP.state,UP.description,'
            . 'UP.designation,UP.website,group.name as group_name,group.id as g_id,'
            . 'UP.doc_file,UP.company_name,UP.category_id,UP.profile_pic img,UP.doc_file as nda_doc,UP.doc_file_referral',
            'join' => array(
                array(USER_GROUPS . ' as u_group', 'u_group.user_id=user.id', ''),
                array(GROUPS . ' as group', 'group.id=u_group.group_id', ''),
                array('user_profile as UP', 'UP.user_id=user.id', 'left')),
            'where' => array('user.id' => $user_id),
            'single' => true
        );
        $this->data['userData'] = $this->common_model->customGet($option);

        $option = array(
            'table' => USERS . ' as user',
            'select' => 'user.*, UP.address1,UP.city,UP.country,UP.state,UP.description,'
            . 'UP.designation,UP.website,group.name as group_name,group.id as g_id,'
            . 'UP.doc_file,UP.company_name,UP.category_id,UP.profile_pic img,UP.doc_file as nda_doc,UP.doc_file_referral',
            'join' => array(
                array(USER_GROUPS . ' as u_group', 'u_group.user_id=user.id', ''),
                array(GROUPS . ' as group', 'group.id=u_group.group_id', ''),
                array('user_profile as UP', 'UP.user_id=user.id', 'left')),
                'where' => array('group.id' => 6),
        );
        
        $this->data['userlocation'] = $this->common_model->customGet($option);


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
        $this->data['doctorsname'] = $this->common_model->customGet($option);

        $option = array(
            'table' => 'clinic',
            'select' => '*', 'where' => array('hospital_id'=>$datadoctors->facility_user_id,'delete_status' => 0), 'order' => array('name' => 'ASC')
        );
        $this->data['clinic_location'] = $this->common_model->customGet($option);


        $option = array(
            'table' => 'practitioner',
            'select' => '*', 'where' => array('hospital_id'=>$datadoctors->facility_user_id,'delete_status' => 0), 'order' => array('name' => 'ASC')
        );
        $this->data['practitioner'] = $this->common_model->customGet($option);


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
        $this->data['doctorsname'] = $this->common_model->customGet($option);


        $option = array(
            'table' => 'clinic',
            'select' => '*', 'where' => array('hospital_id'=>$CareUnitID,'delete_status' => 0), 'order' => array('name' => 'ASC')
        );
        $this->data['clinic_location'] = $this->common_model->customGet($option);

        $option = array(
            'table' => 'practitioner',
            'select' => '*', 'where' => array('hospital_id'=>$CareUnitID,'delete_status' => 0), 'order' => array('name' => 'ASC')
        );
        $this->data['practitioner'] = $this->common_model->customGet($option);
        
    }



         //print_r($this->data['userlocation']);die;
        $option = array('table' => 'countries',
        'select' => '*'
    );
    $this->data['countries'] = $this->common_model->customGet($option);


    $option = array(
        'table' => 'care_unit',
        'select' => '*', 'where' => array('delete_status' => 0), 'order' => array('name' => 'ASC')
    );
    $this->data['care_unit'] = $this->common_model->customGet($option);

    $option = array(
        'table' => 'appointment_type',
        'select' => '*', 'where' => array('delete_status' => 0), 'order' => array('name' => 'ASC')
    );
    $this->data['appointment_type'] = $this->common_model->customGet($option);

    $option = array(
        'table' => 'type_of_stay',
        'select' => '*', 'where' => array('delete_status' => 0), 'order' => array('name' => 'ASC')
    );
    $this->data['type_of_stay'] = $this->common_model->customGet($option);
    
        $this->load->admin_render('add', $this->data, 'inner_script');
    }

    /**
     * @method users_add
     * @description add dynamic rows
     * @return array
     */



     function open_model_new() {
        $this->data['title'] = "Add " . $this->title;
        $this->data['formUrlNew'] = $this->router->fetch_class() . "/addNewPatient";
        $this->load->view('add_new_patient', $this->data);
    }


public function fetch() {
    $output = '';
    $query = $this->input->post('query');
    if ($query) {
        $results = $this->common_model->fetch_data($query);
        $output .= '<select class="form-control select2" name="patient" id="patient">';
        if (!empty($results)) {
            foreach ($results as $row) {
                $output .= '<option value="'.$row['user_id'].'">( '.$row['patient_id'].')  -'.$row['name'].' - '. $row['address'].'</option>';
               
            }
        } else {
            $output .= '<option>No Data Found</option>';
        }
        $output .= '</select>';
        echo $output;
    }
}

    public function add() {

//         echo "<pre>";
// print_r($this->input->post());die;
// echo "</pre>";

        $tables = $this->config->item('tables', 'ion_auth');
        $identity_column = $this->config->item('identity', 'ion_auth');
        $this->data['identity_column'] = $identity_column;
        
        $option = array('table' => "users",
            'where' => array('active' => 1)
        );
        $this->data['users'] = $this->common_model->customGet($option);
       
        // $this->form_validation->set_rules('patient', lang('patient'), 'required');

        $this->form_validation->set_rules('doctor_name', lang('doctor_name'), 'required');
       
     
        if ($this->form_validation->run() == true) {

        //  $doctor_id =    $this->input->post('doctor_name');
         

        //  $query = $this->db->get_where('users', array('id' => $doctor_id));
        //             $result = $query->row();
        //             $email = $result->username;
        //             $from = getConfig('admin_email');
        //             $subject = "Appointment for Patient";
        //             $password = "test";
        //             $title = "Appointment doctor";
        //             $data['name'] = ucwords($this->input->post('patient'));
        //             $data['content'] = "Appointment" . "<p>username: " . $email . "</p><p>Password: " . $password . "</p>";
        //             $template = $this->load->view('email-template/registration', $data, true);
        //             $this->send_email_smtp($email, $from, $subject, $template, $title);

        //             $practitioner =    $this->input->post('practitioner');
         

        //  $practitionerquery = $this->db->get_where('practitioner', array('id' => $practitioner));

        //             $result = $practitionerquery->row();
        //             $email = $result->email;
        //             $from = getConfig('admin_email');
        //             $subject = "Appointment for Patient";
        //             $password = "test";
        //             $title = "Appointment doctor";
        //             $data['name'] = ucwords($this->input->post('patient'));
        //             $data['content'] = "Appointment" . "<p>username: " . $email . "</p><p>Password: " . $password . "</p>";
        //             $template = $this->load->view('email-template/registration', $data, true);
        //             $this->send_email_smtp($email, $from, $subject, $template, $title);

                    // Try sending email
                    
        //  $date = $this->input->post('date');
        //  $start_time_range = $this->input->post('time_start'); // Example start time
        //  $end_time_range = $this->input->post('time_end');
        //     $option = array(
        //         'table' => 'appointment',
        //         'select' => 'appointment.*, users.first_name, users.last_name',
        //         'join' => array(
        //             array('users', 'users.id = appointment.doctor_id', 'left')
        //         ),
        //         'where' => array(
        //             'appointment.doctor_id' => $doctor_id,
        //             'date' => $date,
        //             'time_end >=' => $start_time_range,
        //             'time_start <=' => $end_time_range
        //         )
                
        //     );
         
        //     $appointment_doctor = $this->common_model->customGet($option);
           
        //     if(!empty($appointment_doctor)){
                  
                //         $response = array('status' => 0, 'message' => 'Already time slot is booked ?');
                    
                // }  else {

                    $CareUnitID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';


                    // $additional_data_profile = array(
                    //     'type'=>$this->input->post('type'),
                    //     'patient' => $this->input->post('patient')? : "",
                    //     'location_appointment' => $this->input->post('location_appointment')? : "",
                    //     'clinician_appointment' => $this->input->post('location_appointment')? : "",
                    //     'practitioner'=>$this->input->post('practitioner')? : "",
                    //     'appointment_type' => $this->input->post('appointment_type')? : "",
                    //     'start_date_appointment' => $this->input->post('start_date_appointment')? : "",
                    //     'end_date_appointment' => $this->input->post('end_date_appointment')? : "",
                    //     'comment_appointment' => $this->input->post('comment_appointment')? : "",
                    //     'doctor_name' => $this->input->post('doctor_name')? : "",
                    //     'theatre_clinician' => $this->input->post('theatre_clinician')? : "",

                    //     'theatre_anaesthetic_type'=>$this->input->post('theatre_anaesthetic_type')? : "",
                    //     'theatre_admission_date_time' => $this->input->post('theatre_admission_date_time')? : "",
                    //     'theatre_anaesthetist' => $this->input->post('theatre_anaesthetist')? : "",

                    //     'theatre_type_of_stay' => $this->input->post('theatre_type_of_stay')? : "",

                    //     'theatre_date_time' => $this->input->post('theatre_date_time')? : "",
                    //     'theatre_time_duration' => $this->input->post('theatre_time_duration')? : "",

                    //     'status' => '0',
                                     
                    // );
                   
                    

                    // $this->db->insert('clinic_appointment', $additional_data_profile); 
                    $additional_data_profile = array(
                        'type' => $this->input->post('type') ?: null,
                        'patient' => $this->input->post('patient') ?: null,
                        'location_appointment' => $this->input->post('location_appointment') ?: null,
                        'clinician_appointment' => $this->input->post('location_appointment') ?: null,
                        'practitioner' => $this->input->post('practitioner') ?: null,
                        'appointment_type' => $this->input->post('appointment_type') ?: null,
                        'start_date_appointment' => $this->input->post('start_date_appointment') ?: null,
                        'end_date_appointment' => $this->input->post('end_date_appointment') ?: null,
                        'comment_appointment' => $this->input->post('comment_appointment') ?: null,
                        'doctor_name' => $this->input->post('doctor_name') ?: null,
                        'theatre_clinician' => $this->input->post('theatre_clinician') ?: null,
                        'theatre_anaesthetic_type' => $this->input->post('theatre_anaesthetic_type') ?: null,
                        'theatre_admission_date_time' => $this->input->post('theatre_admission_date_time') ?: null,
                        'theatre_anaesthetist' => $this->input->post('theatre_anaesthetist') ?: null,
                        'theatre_type_of_stay' => $this->input->post('theatre_type_of_stay') ?: null,
                        'theatre_date_time' => $this->input->post('theatre_date_time') ?: null,
                        'theatre_time_duration' => $this->input->post('theatre_time_duration') ?: null,

                        'out_start_time_at'=>$this->input->post('out_start_time_at') ?: null,
                        'out_end_time_at'=>$this->input->post('out_end_time_at') ?: null,
                        'start_date_availability'=>$this->input->post('start_date_availability') ?: null,
                        'end_time_date_availability'=>$this->input->post('end_time_date_availability') ?: null,
                        'status' => '0',
                    );
                    
                    // print_r($additional_data_profile);die;
                    $this->db->insert('clinic_appointment', $additional_data_profile); 

                    $insert_id = $this->db->insert_id();
                    
                    $practitioner = $this->input->post('practitioner');
                    // 'sender_id' => $practitioner ?: null;
                    
                    $additional_notification = array(
                       
                        'type_id' => 'clinic_appointment',
                        'patient_id' => $this->input->post('patient'),
                        'care_unit_id' => $this->input->post('location_appointment'),
                        'clinic_appointment_id' => $insert_id,
                        'user_id' => $CareUnitID,
                        'sender_id' => $this->input->post('doctor_name'),
                    );
                    
                   
                    $this->db->insert('notifications', $additional_notification); 
                    $notifications_id = $this->db->insert_id();


                        // if($this->input->post('type') == "clinic_appointment"){
                        
                        //     $additional_notification = array(
                            
                        //         'type_id' => 'clinic_appointment',
                        //         'patient_id' => $this->input->post('patient'),
                        //         'care_unit_id' => $this->input->post('location_appointment'),
                        //         'clinic_appointment_id' => $insert_id,
                        //         'user_id' => $CareUnitID,
                        //         'sender_id' => $this->input->post('doctor_name'),
                        //     );
                            
                        //     $this->db->insert('notifications', $additional_notification); 
                        //     $notifications_id = $this->db->insert_id();
                        
                        // }else if($this->input->post('type') == "clinic_appointment"){

                        //     $query = $this->db->get_where('users', array('email' => $this->input->post('theatre_clinician')));
                        //     $receiver = $query->row();
                        //     $receiver_id = $receiver->id;
                            
                        //     $additional_notification = array(
                                
                        //         'care_unit_id' => $this->input->post('location_appointment'),
                        //         'clinic_appointment_id	' => $insert_id,
                        //         'user_id' => $receiver_id,
                        //         'sender_id' => $this->input->post('doctor_name'),
                        //     );
                            

                        //     $this->db->insert('notifications', $additional_notification); 


                        // }else if($this->input->post('type') == "availability_location"){ 

                        //     $query = $this->db->get_where('users', array('email' => $this->input->post('availability_practitioner')));
                        //     $receiver = $query->row();
                        //     $receiver_id = $receiver->id;
                            
                        //     $additional_notification = array(
                                
                        //         'care_unit_id' => $this->input->post('location_appointment'),
                        //         'clinic_appointment_id' => $insert_id,
                        //         'user_id' => $receiver_id,
                        //         'sender_id' => $this->input->post('doctor_name'),
                        //     );
                            

                        //     $this->db->insert('notifications', $additional_notification); 

                        // }else if($this->input->post('type') == "out_of_office_location"){ 

                        //     $query = $this->db->get_where('users', array('email' => $this->input->post('out_of_office_practitioner')));
                        //     $receiver = $query->row();
                        //     $receiver_id = $receiver->id;

                            
                        //     $additional_notification = array(
                                
                        //         'care_unit_id' => $this->input->post('location_appointment'),
                        //         'clinic_appointment_id' => $insert_id,
                        //         'user_id' => $receiver_id,
                        //         'sender_id' => $this->input->post('doctor_name'),
                        //     );
                            

                        //     $this->db->insert('notifications', $additional_notification);

                        // }
                            
                    if ($insert_id) {
                        $html = array();
                        $response = array('status' => 1, 'message' => 'Added Successfully', 'url' => base_url($this->router->fetch_class()));
                    } else {
                        $response = array('status' => 0, 'message' => lang('user_failed'));
                    }

                }

        // } else {
        //     $messages = (validation_errors()) ? validation_errors() : '';
        //     $response = array('status' => 0, 'message' => $messages);
        // }
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
                'table' => 'appointment',
                'select' => 'appointment.*, users.first_name, users.last_name',
                'join' => array(
                    array('users', 'users.id = appointment.doctor_id', 'left')
                ),
                'where' => array('appointment.id' => $id),
                'single' => true
            );

            $results_row = $this->common_model->customGet($option);
            if (!empty($results_row)) {
                // $option = array('table' => 'countries',
                //     'select' => '*');
                // $this->data['countries'] = $this->common_model->customGet($option);
                // $option = array('table' => 'states',
                //     'select' => '*');
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
        
        $this->form_validation->set_rules('date', lang('date'), 'required');
        $this->form_validation->set_rules('time_start', lang('time_start'), 'required');
        $this->form_validation->set_rules('time_end', lang('time_end'), 'required');
        // $this->form_validation->set_rules('patient_name', lang('patient_name'), 'required');
        $this->form_validation->set_rules('doctor_name', lang('doctor_name'), 'required');
        // $this->form_validation->set_rules('reason', lang('reason'), 'required');
     
       
        $where_id = $this->input->post('id');
        if ($this->form_validation->run() == true){
        
            $options_data = array(
                        
                'date' => $this->input->post('date'),
                'time_start' => $this->input->post('time_start'),
                'time_end' => $this->input->post('time_end'),
                // 'patient_id' => $this->input->post('patient_name'),
                'doctor_id' => $this->input->post('doctor_name'),
                // 'reason' => $this->input->post('reason'),
               
            );
            // $update= $this->ion_auth->update($where_id, $options_data);
            $update = $this->db->update('vendor_sale_appointment', $options_data, array('id' => $where_id));
            // $update= $this->db->update('vendor_sale_appointment', $additional_data_profile);  
                if ($update) {
                    $html = array();
                    $response = array('status' => 1, 'message' => 'updated Successfully', 'url' => base_url('mdSteward/edit'), 'id' => encoding($this->input->post('id')));
                } else {
                    $response = array('status' => 0, 'message' => "The appointment address already exists");
                }
            } else {
            $messages = (validation_errors()) ? validation_errors() : '';
            $response = array('status' => 0, 'message' => $messages);
            }
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
        $options_data = array(
                        
            'status' => $status
        );
        $update = $this->db->update('vendor_sale_appointment', $options_data, array('id' => $id));
        // $update = $this->common_model->customUpdate(array('table' => 'appointment', 'data' => array('0' => $status), 'where' => array('id' => $id)));
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
                'data' => array('status' => 1),
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

    public function filterAppointmentsByDate()
    {
        $selectedDate = $this->input->post('selectedDate');
        
        $this->load->model('common_model');  // Make sure your model is loaded
    
        $option = array(
            'table' => 'clinic_appointment',
            'select' => 'clinic_appointment.*, U.first_name, U.last_name, UP.address1, UP.city, UP.state, pa.name as patient_name, cl.name as clinic_name, cl.clinic_location, pr.name',
            'join' => array(
                array('users as U', 'clinic_appointment.location_appointment = U.id', 'left'),
                array('patient as pa', 'clinic_appointment.patient = pa.user_id', 'left'),
                array('clinic as cl', 'clinic_appointment.location_appointment = cl.id', 'left'),
                array('user_profile as UP', 'UP.user_id = U.id', 'left'),
                array('practitioner as pr', 'clinic_appointment.practitioner = pr.id', 'left'),
            ),
            'where' => array(
                'clinic_appointment.status' => 0
            ),
            'or_where' => array(
                'clinic_appointment.start_date_appointment' => $selectedDate,
                'clinic_appointment.theatre_date_time' => $selectedDate,
                'clinic_appointment.out_start_time_at' => $selectedDate,
                'clinic_appointment.start_date_availability' => $selectedDate
            )
        );
    
        $data['all_appointment'] = $this->common_model->customGet($option);
    // print_t($data['all_appointment']);die;
        // Respond with JSON
        $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($data['all_appointment']));
    }
    
public function filterdateDepartment(){

    $selectedDate = $this->input->post('selectedDate');
    $practitionerId = $this->input->post('departmentId'); // Capture practitioner ID
    

    if (is_array($practitionerId)) {
        $practitionerId = implode(',', $practitionerId);
    }

$CareUnitID = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';


$sql = "SELECT vendor_sale_practitioner.*
        FROM vendor_sale_practitioner
        WHERE (vendor_sale_practitioner.id IN ($practitionerId))
        -- AND (
        --     vendor_sale_practitioner.hospital_id LIKE '%$CareUnitID%'
            
        -- )
        ";

$result = $this->db->query($sql);

$doctorsData = $result->result();
// print_r($doctorsData);die;

$sql = "SELECT U.*, U.first_name, U.last_name
        FROM vendor_sale_doctors
        LEFT JOIN vendor_sale_users as U ON vendor_sale_doctors.user_id = U.id
        WHERE (vendor_sale_doctors.user_id IN ($practitionerId))
        AND (
            vendor_sale_doctors.facility_user_id LIKE '%$CareUnitID%'
            
        )";

$result = $this->db->query($sql);

$practitionerData = $result->result();

$practitioner = array_merge($doctorsData, $practitionerData);

if(!empty($practitionerId)){


$sql = "SELECT vendor_sale_clinic_appointment.*, U.first_name, U.last_name, UP.address1, UP.city, UP.state, pa.name as patient_name, cl.name as clinic_name, cl.clinic_location, pr.name as practitioner_name
        FROM vendor_sale_clinic_appointment
        LEFT JOIN vendor_sale_users as U ON vendor_sale_clinic_appointment.location_appointment = U.id
        LEFT JOIN vendor_sale_patient as pa ON vendor_sale_clinic_appointment.patient = pa.user_id
        LEFT JOIN vendor_sale_clinic as cl ON vendor_sale_clinic_appointment.location_appointment = cl.id
        LEFT JOIN vendor_sale_user_profile as UP ON UP.user_id = U.id
        LEFT JOIN vendor_sale_practitioner as pr ON vendor_sale_clinic_appointment.practitioner = pr.id
        WHERE (vendor_sale_clinic_appointment.practitioner IN ($practitionerId) OR vendor_sale_clinic_appointment.theatre_clinician IN ($practitionerId))
        AND (
            vendor_sale_clinic_appointment.start_date_appointment LIKE '%$selectedDate%'
            OR vendor_sale_clinic_appointment.theatre_date_time LIKE '%$selectedDate%'
            OR vendor_sale_clinic_appointment.out_start_time_at LIKE '%$selectedDate%'
            OR vendor_sale_clinic_appointment.start_date_availability LIKE '%$selectedDate%'
        )
        ORDER BY vendor_sale_clinic_appointment.start_date_appointment DESC,
                 vendor_sale_clinic_appointment.theatre_date_time DESC,
                 vendor_sale_clinic_appointment.out_start_time_at DESC,
                 vendor_sale_clinic_appointment.start_date_availability DESC";

$result = $this->db->query($sql);

$all_appointment = $result->result();
}else{
    $sql = "SELECT vendor_sale_clinic_appointment.*, U.first_name, U.last_name, UP.address1, UP.city, UP.state, pa.name as patient_name, cl.name as clinic_name, cl.clinic_location, pr.name as practitioner_name
        FROM vendor_sale_clinic_appointment
        LEFT JOIN vendor_sale_users as U ON vendor_sale_clinic_appointment.location_appointment = U.id
        LEFT JOIN vendor_sale_patient as pa ON vendor_sale_clinic_appointment.patient = pa.user_id
        LEFT JOIN vendor_sale_clinic as cl ON vendor_sale_clinic_appointment.location_appointment = cl.id
        LEFT JOIN vendor_sale_user_profile as UP ON UP.user_id = U.id
        LEFT JOIN vendor_sale_practitioner as pr ON vendor_sale_clinic_appointment.practitioner = pr.id
         WHERE (vendor_sale_clinic_appointment.practitioner IN ($practitionerId) OR vendor_sale_clinic_appointment.theatre_clinician IN ($practitionerId))
        WHERE (
            vendor_sale_clinic_appointment.start_date_appointment LIKE '%$selectedDate%'
            OR vendor_sale_clinic_appointment.theatre_date_time LIKE '%$selectedDate%'
            OR vendor_sale_clinic_appointment.out_start_time_at LIKE '%$selectedDate%'
            OR vendor_sale_clinic_appointment.start_date_availability LIKE '%$selectedDate%'
        )
        ORDER BY vendor_sale_clinic_appointment.start_date_appointment DESC,
                 vendor_sale_clinic_appointment.theatre_date_time DESC,
                 vendor_sale_clinic_appointment.out_start_time_at DESC,
                 vendor_sale_clinic_appointment.start_date_availability DESC";

$result = $this->db->query($sql);

$all_appointment = $result->result();
}


//    $output ='<tbody>'?>
//                                             <?php
//                                                 $start_time = strtotime('07:00');
//                                                 $end_time = strtotime('24:00');
//                                                 $interval = 1 * 60;

//                                                 for ($time = $start_time; $time <= $end_time; $time += $interval) {
//                                                     $formatted_time = date('H:i', $time);
//                                                     echo '<tr><td class="time-cell">' . $formatted_time . '</td>';
                                                   
//                                                     foreach ($practitioner as $department) {
//                                                         $appointment_found = true;
                                                       
//                                                         foreach ($all_appointment as $appointment) {
//                                                             $appointmentTime = date('H:i', strtotime($appointment->start_date_appointment));
//                                                             $end_date_appointment = date('H:i', strtotime($appointment->end_date_appointment));
//                                                             $appointment_date = date('Y-m-d', strtotime($appointment->start_date_appointment));
                                                            
//                                                             $out_start_time_at = date('H:i', strtotime($appointment->out_start_time_at));
//                                                             $out_end_time_at = date('H:i', strtotime($appointment->out_end_time_at));
//                                                             $out_start_timeAt = date('Y-m-d', strtotime($appointment->out_start_time_at));
                                                            
//                                                             $start_date_availability = date('H:i', strtotime($appointment->start_date_availability));
//                                                             $end_time_date_availability = date('H:i', strtotime($appointment->end_time_date_availability));
//                                                             $start_dateAvailability = date('Y-m-d', strtotime($appointment->start_date_availability));
                                                            
//                                                             $theatre_date_time = date('H:i', strtotime($appointment->theatre_date_time));
//                                                             $theatre_time_duration = $appointment->theatre_time_duration;
//                                                             $durationInSeconds = $theatre_time_duration * 60;
//                                                             $theatre_end_time = date('H:i', strtotime($theatre_date_time . " +$durationInSeconds seconds"));
//                                                             $theatre_dateTime = date('Y-m-d', strtotime($appointment->theatre_date_time));
                                                            
                                                            
//                                                             $current_date = date('Y-m-d');
                                                        

//                                                             if ($appointment->practitioner == $department->id || $appointment->theatre_clinician == $department->id) {
//                                                                 if ($appointment->type == 'clinic_appointment' && $formatted_time >= $appointmentTime && $formatted_time <= $end_date_appointment) {
//                                                                     if ($formatted_time == $appointmentTime) {
//                                                                         echo '<td class="day-cell appointment-row" rowspan="' . (($end_date_appointment - $appointmentTime) / $interval) . '" id="dateDisplay" data-date="' . $appointment_date . '" data-day="' . $appointment->practitioner . '"><label style="background-color:green; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: green; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->comment_appointment . '<br>' . $appointmentTime . ' - ' . $end_date_appointment . '</span></label></td>';
//                                                                     }
//                                                                     $appointment_found = false;
//                                                                     break;
//                                                                 } elseif ($appointment->type == 'out_of_office_appointment' && $formatted_time >= $out_start_time_at && $formatted_time <= $out_end_time_at) {
//                                                                     if ($formatted_time == $out_start_time_at) {
//                                                                         echo '<td class="day-cell appointment-row" rowspan="' . (($out_end_time_at - $out_start_time_at) / $interval) . '" id="dateDisplay" data-date="' . $out_start_timeAt . '" data-day="' . $appointment->practitioner . '"><label style="background-color:pink; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: pink; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->out_of_office_comment . '<br>' . $out_start_time_at . ' - ' . $out_end_time_at . '</span></label></td>';
//                                                                     }
//                                                                     $appointment_found = false;
//                                                                     break;
//                                                                 } elseif ($appointment->type == 'availability_appointment' && $formatted_time >= $start_date_availability && $formatted_time <= $end_time_date_availability) {
//                                                                     if ($formatted_time == $start_date_availability) {
//                                                                         echo '<td class="day-cell appointment-row" rowspan="' . (($end_time_date_availability - $start_date_availability) / $interval) . '" id="dateDisplay" data-date="' . $start_dateAvailability . '" data-day="' . $appointment->practitioner . '"><label style="background-color:#40E0D0; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: #40E0D0; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>Available<br>' . $start_date_availability . ' - ' . $end_time_date_availability . '</span></label></td>';
//                                                                     }
//                                                                     $appointment_found = false;
//                                                                     break;
//                                                                 } elseif ($appointment->type == 'theatre_appointment' && $formatted_time >= $theatre_date_time && $formatted_time <= $theatre_end_time) {
//                                                                     if ($formatted_time == $theatre_date_time) {
//                                                                         echo '<td class="day-cell appointment-row" rowspan="' . (($theatre_end_time - $theatre_date_time) / $interval) . '" id="dateDisplay" data-date="' . $theatre_dateTime . '" data-day="' . $appointment->theatre_clinician . '"><label style="background-color:#800080; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: #800080; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->theatre_comment . '<br>' . $theatre_date_time . ' - ' . $theatre_end_time . '</span></label></td>';
//                                                                     }
//                                                                     $appointment_found = false;
//                                                                     break;
//                                                                 }
//                                                                 // $appointment_found = false;
//                                                                 // break;
//                                                             }
//                                                         }
//                                                         if ($appointment_found) {
//                                                             echo '<td class="day-cell" data-time="' . $formatted_time . '" data-day="' . $department->id . '"></td>';
//                                                         }
//                                                     }
//                                                     echo '</tr>';
//                                                 }
//                                             '
//                                         </tbody>';



$output ='<tbody>'?>
                                            
                                        <?php
                                            $start_time = strtotime('07:00');
                                            $end_time = strtotime('24:00');
                                            $interval = 1 * 60;

                                            for ($time = $start_time; $time <= $end_time; $time += $interval) {

                                                $formatted_time = date('H:i', $time);
                                           
                                                echo '<tr>
                                                <td class="time-cell">' . $formatted_time . '</td>';
                                               
                                                foreach ($practitioner as $key => $value)
                                                {
                                                $object = $value->id;
                                               
                                                
                                                        echo '<td class="time-cell">';
                                                       
                                                    
                                                    foreach ($all_appointment as $appointment) {
                                                        
                                                        $appointmentTime = date('H:i', strtotime($appointment->start_date_appointment));
                                                        $end_date_appointment = date('H:i', strtotime($appointment->end_date_appointment));
                                                        $appointment_date = date('Y-m-d', strtotime($appointment->start_date_appointment));
                                                        
                                                        $out_start_time_at = date('H:i', strtotime($appointment->out_start_time_at));
                                                        $out_end_time_at = date('H:i', strtotime($appointment->out_end_time_at));
                                                        $out_start_timeAt = date('Y-m-d', strtotime($appointment->out_start_time_at));
                                                        
                                                        $start_date_availability = date('H:i', strtotime($appointment->start_date_availability));
                                                        $end_time_date_availability = date('H:i', strtotime($appointment->end_time_date_availability));
                                                        $start_dateAvailability = date('Y-m-d', strtotime($appointment->start_date_availability));
                                                        
                                                        $theatre_date_time = date('H:i', strtotime($appointment->theatre_date_time));
                                                        $theatre_time_duration = $appointment->theatre_time_duration;
                                                        $durationInSeconds = $theatre_time_duration * 60;
                                                        $theatre_end_time = date('H:i', strtotime($theatre_date_time . " +$durationInSeconds seconds"));
                                                        $theatre_dateTime = date('Y-m-d', strtotime($appointment->theatre_date_time));
                                                        
                                                        
                                                        $current_date = date('Y-m-d');

                                                       

                                                                    if ($appointment->practitioner == $object && $formatted_time >= $appointmentTime && $formatted_time <= $end_date_appointment) {
                                                                        if ($formatted_time == $appointmentTime) {
                                                                            echo '<label style="background-color:green; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: green; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->comment_appointment . '<br>' . $appointmentTime . ' - ' . $end_date_appointment . '</span></label>';
                                                                        }
                                                                        
                                                                    } elseif ($appointment->practitioner == $object && $formatted_time >= $out_start_time_at && $formatted_time <= $out_end_time_at) {
                                                                        if ($formatted_time == $out_start_time_at) {
                                                                            echo '<label style="background-color:pink; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: pink; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->out_of_office_comment . '<br>' . $out_start_time_at . ' - ' . $out_end_time_at . '</span></label>';
                                                                        }
                                                                        
                                                                    } elseif ($appointment->practitioner == $object && $formatted_time >= $start_date_availability && $formatted_time <= $end_time_date_availability) {
                                                                        if ($formatted_time == $start_date_availability) {
                                                                            echo '<label style="background-color:#40E0D0; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: #40E0D0; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>Available<br>' . $start_date_availability . ' - ' . $end_time_date_availability . '</span></label>';
                                                                        }
                                                                        
                                                                    } elseif ($appointment->theatre_clinician == $object && $formatted_time >= $theatre_date_time && $formatted_time <= $theatre_end_time) {
                                                                        if ($formatted_time == $theatre_date_time) {
                                                                            echo '<label style="background-color:#800080; text-align: center; border: 2px solid; border-radius: 5px; padding: 11px;"><span style="background-color: #800080; color: white;"><strong>' . $appointment->first_name . ' ' . $appointment->last_name . '</strong><br>' . $appointment->theatre_comment . '<br>' . $theatre_date_time . ' - ' . $theatre_end_time . '</span></label>';
                                                                        }
                                                                       
                                                                }
                                                                    
                                                        }
                                                        echo '</td>';
                                                   
                                                }
                                                         
                                                        
                                                        echo '</tr>';
                                                   
                                     }
                                          
                                   '</tbody>';  

                                        
                                  
}

}
