<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2024-03-23 06:26:56 --> Severity: Warning --> Illegal string offset 'title' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 609
ERROR - 2024-03-23 06:26:57 --> Query error: MySQL server has gone away - Invalid query: SELECT *
FROM `vendor_sale_setting`
WHERE `option_name` = 'google_captcha'
AND `status` = 1
ERROR - 2024-03-23 06:27:13 --> Severity: Warning --> Illegal string offset 'title' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 609
ERROR - 2024-03-23 06:27:13 --> Severity: Warning --> Illegal string offset 'message' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 834
ERROR - 2024-03-23 06:27:13 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 834
ERROR - 2024-03-23 06:27:13 --> Severity: Warning --> Illegal string offset 'identity' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 835
ERROR - 2024-03-23 06:27:13 --> Severity: Warning --> Illegal string offset 'password' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 842
ERROR - 2024-03-23 06:27:13 --> Severity: Warning --> Illegal string offset 'parent' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 848
ERROR - 2024-03-23 06:27:13 --> Severity: Warning --> Illegal string offset 'title' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 849
ERROR - 2024-03-23 06:27:14 --> 404 Page Not Found: ../modules/pwfpanel/controllers/Pwfpanel/img
ERROR - 2024-03-23 06:27:25 --> Severity: Warning --> Illegal string offset 'title' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 609
ERROR - 2024-03-23 06:29:10 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:29:10 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:29:10 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:29:10 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:36:42 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 06:36:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 06:36:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 06:36:47 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 06:37:59 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:37:59 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:37:59 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:37:59 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:38:01 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:38:03 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:40:31 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:50:29 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:50:32 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:50:38 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:50:38 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:50:38 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:50:38 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:50:41 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:50:41 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:50:41 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:50:41 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:50:53 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:50:53 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:50:53 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:50:53 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:52:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ')
ORDER BY `user`.`id` DESC' at line 6 - Invalid query: SELECT `user`.*, `group`.`name` as `group_name`
FROM `vendor_sale_users` as `user`
LEFT JOIN `vendor_sale_users_groups` as `ugroup` ON `ugroup`.`user_id`=`user`.`id`
LEFT JOIN `vendor_sale_groups` as `group` ON `group`.`id`=`ugroup`.`group_id`
WHERE `user`.`email_verify` = 1
AND `group`.`id` NOT IN()
ORDER BY `user`.`id` DESC
ERROR - 2024-03-23 06:52:41 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:52:41 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:52:41 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:52:41 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:52:46 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:52:46 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:52:46 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:52:46 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:52:49 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:52:49 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:52:49 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:52:49 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:52:51 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:52:51 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:52:51 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:52:51 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:55:26 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:55:26 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:55:26 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:55:26 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:55:30 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:55:30 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:55:30 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:55:30 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:55:32 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:55:32 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:55:32 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:55:32 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:55:35 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:55:42 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:56:42 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:57:16 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:57:16 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:57:16 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:57:16 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:57:21 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:57:21 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:57:21 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:57:21 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 06:57:25 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 06:57:25 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 06:57:25 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 06:57:25 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:06:49 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:06:49 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:06:49 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:06:49 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:06:53 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:06:53 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:06:53 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:06:53 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:06:56 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:06:56 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:06:56 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:06:56 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:07:33 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:07:33 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:07:33 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:07:33 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:08:23 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:08:23 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:08:23 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:08:23 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:09:25 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:09:25 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:09:25 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:09:25 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:09:28 --> 404 Page Not Found: /index
ERROR - 2024-03-23 07:09:41 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:09:41 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:09:41 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:09:41 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:09:42 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:09:42 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:09:42 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:09:42 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:09:44 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:16 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:21 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:13:21 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:13:21 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:13:21 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:21 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:25 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:13:25 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:13:25 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:13:25 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:25 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:37 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:13:37 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:13:37 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:13:37 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:37 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:41 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:13:41 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:13:41 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:13:41 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:41 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:46 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:13:46 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:13:46 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:13:46 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:46 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:52 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:13:52 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:13:52 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:13:52 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:13:52 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:14:11 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\contactus\views\list.php 350
ERROR - 2024-03-23 07:14:11 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:14:11 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:14:11 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:14:11 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:14:23 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:14:23 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:14:23 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:14:23 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:14:23 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:14:23 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:14:23 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:14:23 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:14:23 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:14:23 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:14:27 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\invoices\views\list.php 319
ERROR - 2024-03-23 07:14:27 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:14:27 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:14:27 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:14:27 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:14:56 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:14:56 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:14:56 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:14:56 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:15:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:15:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:15:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:16:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:16:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:18:38 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:18:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:18:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:18:44 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\patient\controllers\Patient.php 72
ERROR - 2024-03-23 07:18:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\patient\controllers\Patient.php 75
ERROR - 2024-03-23 07:18:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\patient\controllers\Patient.php 91
ERROR - 2024-03-23 07:18:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\patient\controllers\Patient.php 425
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Payment Reference"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:18:46 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:21:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:21:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:21:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:21:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:23:18 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:23:44 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:24:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:26:52 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:26:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:26:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:26:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:26:59 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:26:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:26:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:27:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:27:21 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:27:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:27:21 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:27:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:27:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:27:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:27:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:27:38 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:28:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:28:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:28:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:28:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:29:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:29:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:29:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:29:52 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\contactus\views\list.php 350
ERROR - 2024-03-23 07:29:52 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:29:52 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:29:52 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:29:52 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:29:53 --> 404 Page Not Found: /index
ERROR - 2024-03-23 07:29:54 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:29:54 --> Could not find the language line "Payment Reference"
ERROR - 2024-03-23 07:29:54 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:29:54 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:29:54 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:29:54 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:29:55 --> 404 Page Not Found: /index
ERROR - 2024-03-23 07:29:59 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:29:59 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:29:59 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:29:59 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:29:59 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:29:59 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:29:59 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:29:59 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:29:59 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:29:59 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:30:00 --> 404 Page Not Found: /index
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "name"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "price"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Supplier"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "product code"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Serial Number"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Stock Level"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Tax"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Cost"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "name"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "price"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Supplier"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "product code"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Serial Number"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Stock Level"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Tax"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Cost"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "name"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "price"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Supplier"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "product code"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Serial Number"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Stock Level"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Tax"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Cost"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "name"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "price"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "duration"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Supplier"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "product code"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Serial Number"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Stock Level"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Tax"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Cost"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "name"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "price"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Supplier"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "product code"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Serial Number"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Stock Level"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Tax"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Cost"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "name"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "price"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Supplier"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "product code"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Serial Number"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Stock Level"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Tax"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Cost"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "name"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "price"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Supplier"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "product code"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Serial Number"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Stock Level"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Tax"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Cost"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "name"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "price"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Supplier"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "product code"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Serial Number"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Stock Level"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Tax"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "Cost"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:30:04 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:30:05 --> 404 Page Not Found: /index
ERROR - 2024-03-23 07:30:55 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\contactus\views\list.php 350
ERROR - 2024-03-23 07:30:55 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:30:55 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:30:55 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:30:55 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:30:56 --> 404 Page Not Found: /index
ERROR - 2024-03-23 07:30:59 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:30:59 --> Could not find the language line "Payment Reference"
ERROR - 2024-03-23 07:30:59 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:30:59 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:30:59 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:30:59 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:31:00 --> 404 Page Not Found: /index
ERROR - 2024-03-23 07:31:19 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:31:19 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:31:19 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:31:19 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:31:19 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:31:20 --> 404 Page Not Found: /index
ERROR - 2024-03-23 07:31:22 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:31:22 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:31:22 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:31:22 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:31:22 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:31:23 --> 404 Page Not Found: /index
ERROR - 2024-03-23 07:31:30 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:31:30 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:31:30 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:31:30 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:31:30 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:31:30 --> Severity: Warning --> Use of undefined constant contactus - assumed 'contactus' (this will throw an Error in a future version of PHP) C:\xampp\htdocs\hosiptal_project\application\modules\products\views\list.php 309
ERROR - 2024-03-23 07:31:30 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:31:30 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:31:30 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:31:30 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 07:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 07:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 07:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 07:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 07:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 07:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 07:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 07:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 07:31:42 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 07:31:42 --> Could not find the language line "date_validation"
ERROR - 2024-03-23 07:31:42 --> Could not find the language line "time_start_validation"
ERROR - 2024-03-23 07:31:42 --> Could not find the language line "time_end_validation"
ERROR - 2024-03-23 07:31:42 --> Could not find the language line "patient_name_validation"
ERROR - 2024-03-23 07:31:42 --> Could not find the language line "doctor_name_validation"
ERROR - 2024-03-23 07:31:42 --> Could not find the language line "rreason_validation"
ERROR - 2024-03-23 07:31:56 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\patient\controllers\Patient.php 72
ERROR - 2024-03-23 07:31:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\patient\controllers\Patient.php 75
ERROR - 2024-03-23 07:31:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\patient\controllers\Patient.php 91
ERROR - 2024-03-23 07:31:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\patient\controllers\Patient.php 425
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Payment Reference"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:31:58 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:38:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:38:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:38:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:40:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 266
ERROR - 2024-03-23 07:40:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:40:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:40:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:41:57 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:41:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:41:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:41:57 --> Could not find the language line "Phone Number"
ERROR - 2024-03-23 07:43:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:43:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:43:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:43:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 386
ERROR - 2024-03-23 07:45:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:45:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:45:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:45:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 389
ERROR - 2024-03-23 07:45:43 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:45:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:45:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:45:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 389
ERROR - 2024-03-23 07:50:24 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:50:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:50:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:50:24 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 389
ERROR - 2024-03-23 07:52:36 --> Could not find the language line "title_validation"
ERROR - 2024-03-23 07:52:36 --> Could not find the language line "facility_manager_id_validation"
ERROR - 2024-03-23 07:52:36 --> Could not find the language line "description_validation"
ERROR - 2024-03-23 07:52:36 --> Could not find the language line "user_email_field_validation"
ERROR - 2024-03-23 07:56:04 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 07:56:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 07:56:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 07:56:04 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 389
ERROR - 2024-03-23 08:04:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:04:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:04:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:04:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 389
ERROR - 2024-03-23 08:11:13 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:11:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:11:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:11:25 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:11:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:11:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:11:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 389
ERROR - 2024-03-23 08:15:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:15:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:15:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:15:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 389
ERROR - 2024-03-23 08:19:35 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:19:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:19:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:19:35 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 389
ERROR - 2024-03-23 08:21:32 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:21:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:21:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:21:32 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 389
ERROR - 2024-03-23 08:21:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:21:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:21:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:21:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\views\list.php 389
ERROR - 2024-03-23 08:34:30 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:34:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:34:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:34:30 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 216
ERROR - 2024-03-23 08:36:15 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:36:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:36:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:36:15 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 216
ERROR - 2024-03-23 08:38:11 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:38:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:38:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:38:14 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:38:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:38:14 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:44:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:44:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:44:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:44:31 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:44:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:44:31 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:45:23 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:45:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:45:23 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:45:34 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:45:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:45:34 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:47:48 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:47:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:47:48 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:52:41 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:52:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:52:41 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 08:54:49 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 08:54:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 08:54:49 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 09:01:09 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 09:01:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 09:01:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 09:05:16 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 09:05:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 09:05:16 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 09:05:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 09:05:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 09:05:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 09:05:28 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 09:05:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 09:05:28 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 09:12:53 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 09:12:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 09:12:53 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 09:12:55 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 09:12:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 09:12:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 09:20:26 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 09:20:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 09:20:26 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 09:22:00 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 09:22:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 09:22:00 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 09:22:45 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 09:22:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 09:22:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 10:23:39 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 10:23:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 10:23:39 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 10:24:33 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 10:24:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 10:24:33 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 10:24:46 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 10:24:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 10:24:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 10:25:08 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 10:25:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 10:25:08 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 10:25:19 --> Severity: Warning --> count(): Parameter must be an array or an object that implements Countable C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 70
ERROR - 2024-03-23 10:25:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 74
ERROR - 2024-03-23 10:25:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\tasks\controllers\Tasks.php 89
ERROR - 2024-03-23 10:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 10:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 10:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 10:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 10:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 10:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 10:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 10:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 10:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 10:26:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\hosiptal_project\application\modules\appointment\controllers\Appointment.php 57
ERROR - 2024-03-23 10:26:10 --> Could not find the language line "date_validation"
ERROR - 2024-03-23 10:26:10 --> Could not find the language line "time_start_validation"
ERROR - 2024-03-23 10:26:10 --> Could not find the language line "time_end_validation"
ERROR - 2024-03-23 10:26:10 --> Could not find the language line "patient_name_validation"
ERROR - 2024-03-23 10:26:10 --> Could not find the language line "doctor_name_validation"
ERROR - 2024-03-23 10:26:10 --> Could not find the language line "rreason_validation"
ERROR - 2024-03-23 10:53:57 --> Severity: Warning --> Illegal string offset 'title' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 609
ERROR - 2024-03-23 10:53:57 --> Severity: Warning --> Illegal string offset 'message' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 834
ERROR - 2024-03-23 10:53:57 --> Severity: Warning --> Cannot assign an empty string to a string offset C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 834
ERROR - 2024-03-23 10:53:57 --> Severity: Warning --> Illegal string offset 'identity' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 835
ERROR - 2024-03-23 10:53:57 --> Severity: Warning --> Illegal string offset 'password' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 842
ERROR - 2024-03-23 10:53:57 --> Severity: Warning --> Illegal string offset 'parent' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 848
ERROR - 2024-03-23 10:53:57 --> Severity: Warning --> Illegal string offset 'title' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 849
ERROR - 2024-03-23 10:54:00 --> 404 Page Not Found: ../modules/pwfpanel/controllers/Pwfpanel/img
ERROR - 2024-03-23 10:55:09 --> Severity: Warning --> Illegal string offset 'title' C:\xampp\htdocs\hosiptal_project\application\modules\pwfpanel\controllers\Pwfpanel.php 609
