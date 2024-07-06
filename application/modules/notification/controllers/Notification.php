<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends Common_Controller {

    public $data = array();
    public $file_data = "";

    public function __construct() {
        parent::__construct();
        $this->is_auth_admin();
    }

    /**
     * @method index
     * @description loading view of notification list
     * @return array
     */
    public function index() {
        $this->data['parent'] = "Notification";
        $this->data['title'] = "Notification";

        $this->load->admin_render('list', $this->data, 'inner_script');
    }

    /**
     * @method get_notification
     * @description listing display of notification
     * @return array
     */
    public function get_notification_list() {
        $columns = array('id',
            'user',
            'message',
            'sent_time',
            'action',
        );
        $limit = $this->input->post('length');
        $start = $this->input->post('start');
        $order = $columns[$this->input->post('order')[0]['column']];
        $dir = $this->input->post('order')[0]['dir'];
        $where = ' notifications.id IS NOT NULL AND user_type="ADMIN" AND notifications.delete_status = 0 ';
        if (!empty($this->input->post('search')['value'])) {
            $search = $this->input->post('search')['value'];
            $where.= ' and (date(sent_time) like "%' . $search . '%" or message like "%' . $search . '%") ';
        }
        $data = array();
        $totalData = 0;
        $totalFiltered = 0;
        $option = array(
            'table' => 'notifications',
            'where' => $where,
        );
        $totalList = $this->common_model->customCount($option);
        if (!empty($totalList) && $totalList != 0) {
            $totalData = $totalList;
            $totalFiltered = $totalData;
            $option = array(
                'table' => 'notifications',
                'select' => 'notifications.*,users.first_name,users.email',
                'join' => array('users' => 'users.id=notifications.sender_id'),
                'where' => $where,
                'order' => array($order => $dir),
                'limit' => array($limit => $start)
            );
            $list = $this->common_model->customGet($option);
            if (!empty($list)) {
                foreach ($list as $rows) {
                    $start++;
                    $nestedData['id'] =  ($rows->read_status == 'NO') ? $start. " <span class='text-danger badge'> New </span>" : $start;
                    $nestedData['user'] = isset($rows->first_name) ? "<span class='btn text-success label-lg'>".$rows->first_name.' ('.$rows->email.')</span>' : '';
                    $nestedData['message'] = isset($rows->message) ? $rows->message : '';
                    $nestedData['sent_time'] = isset($rows->sent_time) ? date("d-m-Y", strtotime($rows->sent_time)) : '';
                    //$nestedData['status'] = isset($match->status) ? ($match->status == "open") ? "<p class='text-success'>" . strtoupper($match->status) . "</p>" : "<p class='text-danger'>" . strtoupper($match->status) . "</p>" : '';
                    $action = "";
                    if($rows->noti_type == "JOIN_CONTEST"){
                        $action = '<a href="' . base_url() . 'users/joinContest/' . encoding($rows->sender_id).'" title="Go" class="btn btn-info"> <img width="18" src="' . base_url() . CRICKET_ICON . '" /> Go </a>';
                    }
                    if($rows->noti_type == "CREATE_CONTEST"){
                        $action = '<a href="' . base_url() . 'users/contest/' . encoding($rows->sender_id).'" title="Go" class="btn btn-info"> <img width="18" src="' . base_url() . CRICKET_ICON . '" /> Go </a>';
                    }
                    $nestedData['action'] = $action;
                    $data[] = $nestedData;
                }
            }
        }
        $json_data = array(
            "draw" => intval($this->input->post('draw')),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $data
        );
        echo json_encode($json_data);
    }

    function NotificationAdmin() {
        $dates = date('Y-m-d', mktime(0, 0, 0, date("m"), date("d") - 7, date("Y")));
        $options = array(
            'table' => 'notifications as notify',
            'select' => 'notify.*,user.first_name,user.profile_pic',
            'join' => array('users as user' => 'user.id=notify.sender_id'),
            'where' => array(
                'notify.read_status' => 'NO',
                'DATE(notify.sent_time) >=' => $dates,
                'notify.user_type' => 'ADMIN',
                'notify.delete_status' => 0
            ),
            'order' => array('notify.id' => 'DESC'),
        );
        $data['notification'] = $this->common_model->customGet($options);
        $this->load->view('notification_list', $data);
    }

    function read_notification_admin() {
        $delId = decoding($_GET['q']);
        if (!empty($delId)) {
            foreach ($delId as $rows) {
                $options = array(
                    'table' => 'notifications',
                    'data' => array('read_status' => 'YES'),
                    'where' => array(
                        'read_status' => 'NO',
                        'id' => $rows
                    )
                );
                $this->common_model->customUpdate($options);
            }
        }

        redirect('notification');
    }

    // function Notification_list()
    // {
    //     $userID = $this->ion_auth->get_user_id();


    //     $query = $this->db->get_where('vendor_sale_clinic_appointment', array('doctor_name' => $userID));
    //                 // $result = $query->row();
    //                 $this->data['list'] =$query->row();
                  
    //                 // $this->load->admin_render('list', $data);

    //                 $this->load->admin_render('list', $this->data, 'inner_script');
    // }

    public function notification_list() {
        $this->data['parent'] = "Notification";
        $this->data['title'] = "Notification";


        $userID = $this->ion_auth->get_user_id();


        // $query = $this->db->get_where('vendor_sale_clinic_appointment', array('doctor_name' => $userID));
                    
                    // $this->data['notifications'] =$query->row();
                
                    $option = array(
                        'table' => 'notifications',
                        'select' => 'notifications.*,notifications.id as notification_ids,users.first_name,users.email,vendor_sale_clinic_appointment.*,vendor_sale_clinic_appointment.theatre_date_time as theatre_start_date_time,
                        ',
                        'join' => array(
                           
                            array('users' => 'users.id=notifications.user_id'),
                            array('vendor_sale_clinic_appointment' => 'vendor_sale_clinic_appointment.id=notifications.clinic_appointment_id'),
                            // array('vendor_sale_doctors' => 'vendor_sale_doctors.id=notifications.sender_id'),

                            //  array('vendor_sale_theatre_appointment' => 'vendor_sale_theatre_appointment.id=notifications.theatre_appointment_id'),
                            //  array('vendor_sale_out_of_office_doctor' => 'vendor_sale_out_of_office_doctor.id=notifications.out_of_office_id'),
                            // array('vendor_sale_doctor_availability' => 'vendor_sale_doctor_availability.id=notifications.availability_id'),

                            // array('vendor_sale_care_unit' => 'vendor_sale_care_unit.id=notifications.care_unit_id'),
                            // array('vendor_sale_care_unit' => 'vendor_sale_care_unit.id=vendor_sale_theatre_appointment.theatre_clinician'),
                            // array('vendor_sale_care_unit' => 'vendor_sale_care_unit.id=vendor_sale_clinic_appointment.clinician_appointment'),
                            // array('vendor_sale_care_unit' => 'vendor_sale_care_unit.id=vendor_sale_clinic_appointment.clinician_appointment'),
                        ),
                        'where' => array(
                            'notifications.user_id' => $userID,
                            // 'DATE(sent_time)' => date('Y-m-d'), 
                            // 'TIME(sent_time) >=' => date('H:i:s'), 
                        ),
                        'order' => array('notifications.user_id' => 'desc'),
                       
                    );
                
                    $this->data['notifications'] = $this->common_model->customGet($option);
                    //  print_r($this->data['notifications']);die;
        $this->load->admin_render('approve_appointment_list', $this->data, 'inner_script');
    }

  public function update_notification_doctor() {
        // $delId = decoding($_GET['q']);
        $notificationId = $this->input->post('notificationId');
        $status = $this->input->post('status');
        // print_r($notificationId);die;
                $options = array(
                    'table' => 'notifications',
                    'data' => array('appointment_status' => $status),
                    'where' => array(
                        'id' => $notificationId
                    )
                );
               
                $result = $this->common_model->customUpdate($options);
        
                // Using Query Builder
                // $result = DB::table('notifications')
                //             ->where('id', $notificationId)
                //             ->update(['appointment_status' => $status]);
        
                // OR Using Eloquent
                // $result = Notification::where('id', $notificationId)
                //                       ->update(['appointment_status' => $status]);
        
                // if ($result) {
                //     return response()->json(['message' => 'Notification status updated successfully.'], 200);
                // } else {
                //     return response()->json(['message' => 'Notification not found or update failed.'], 404);
                // }

                
        if ($result) {
            echo "Status updated successfully.";
        } else {
            echo "Failed to update status.";
        }
        // redirect('notification/notification_list');
    }

}
