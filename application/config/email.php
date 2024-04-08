<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$query = $this->db->order_by('created_on', 'desc')->limit(1)->get('vendor_sale_email_host');
        $result = $query->row();

        
/* 
| ------------------------------------------------------------------- 
| EMAIL CONFING 
| ------------------------------------------------------------------- 
| Configuration of outgoing mail server. 
| */

$config['protocol'] = 'smtp';
$config['smtp_host'] = $result->Mail_Host;  
$config['smtp_port'] = $result->mail_port;  
$config['smtp_timeout'] = '30';  
$config['smtp_user'] = $result->email;  
$config['smtp_pass'] = $result->password;
$config['charset'] = 'utf-8';
$config['mailtype'] = 'html';
$config['wordwrap'] = TRUE;
$config['newline'] = "\r\n";

/* End of file email.php */  
/* Location: ./system/application/config/email.php */