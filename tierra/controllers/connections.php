<?php
	
	include "../models/AdminFunctions.php";
	
    $r_code = isset($_REQUEST['code']) ? $_REQUEST['code'] : NULL;
	$c_in = isset($_REQUEST['check_in']) ? $_REQUEST['check_in'] : NULL;
	$c_out = isset($_REQUEST['check_out']) ? $_REQUEST['check_out'] : NULL;
    $roomSize = isset($_REQUEST['roomType']) ? $_REQUEST['roomType'] : NULL;
	$room_s = isset($_REQUEST['rooms']) ? $_REQUEST['rooms'] : NULL;
    $adult_s = isset($_REQUEST['adults']) ? $_REQUEST['adults'] : NULL;
    $child_ren = isset($_REQUEST['children']) ? $_REQUEST['children'] : NULL;
	
    $code = isset($_GET['code']) ? $_GET['code'] : NULL;
	$check_in = isset($_GET['check_in']) ? $_GET['check_in'] : NULL;
	$check_out = isset($_GET['check_out']) ? $_GET['check_out'] : NULL;
    $roomType = isset($_GET['roomType']) ? $_GET['roomType'] : NULL;
	$rooms = isset($_GET['rooms']) ? $_GET['rooms'] : NULL;

    $title = isset($_REQUEST['title']) ? $_REQUEST['title'] : NULL;
    $last_name = isset($_REQUEST['l_name']) ? $_REQUEST['l_name'] : NULL;
    $first_name = isset($_REQUEST['f_name']) ? $_REQUEST['f_name'] : NULL;
    $email_add = isset($_REQUEST['e_mail']) ? $_REQUEST['e_mail'] : NULL;
    $confirm_email = isset($_REQUEST['c_mail']) ? $_REQUEST['c_mail'] : NULL;
    $phone_num = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : NULL;

    $c_holder = isset($_REQUEST['c_holder']) ? $_REQUEST['c_holder'] : NULL;
    $c_num = isset($_REQUEST['c_num']) ? $_REQUEST['c_num'] : NULL;
    $c_type = isset($_REQUEST['c_type']) ? $_REQUEST['c_type'] : NULL;
    $v_month = isset($_REQUEST['v_month']) ? $_REQUEST['v_month'] : NULL;
    $v_year = isset($_REQUEST['v_year']) ? $_REQUEST['v_year'] : NULL;

	$room_type = isset($_REQUEST['room_type']) ? $_REQUEST['room_type'] : NULL;
	$room_rate = isset($_REQUEST['room_rate']) ? $_REQUEST['room_rate'] : NULL;
	$rtype_get = isset($_GET['room_type']) ? $_GET['room_type'] : NULL;

    $rcode = isset($_GET['rcode']) ? $_GET['rcode'] : NULL;
    $email = isset($_GET['email']) ? $_GET['email'] : NULL;
	
	$obj = new animax();

    if (isset($_REQUEST["submit"]) && $_REQUEST["submit"] == "submit") {
        
		$result = $obj->insertRate($room_type, $room_rate);
	}
	
	if (isset($_REQUEST["submit"]) && $_REQUEST["submit"] == "ship") {
		
		$result = $obj->addChar($r_code, $c_in, $c_out, $roomSize, $room_s, $child_ren);
	}
	
	if (isset($_REQUEST["edit"]) && $_REQUEST["edit"] == "Save") {
		
		$result = $obj->editChar($r_code, $c_in, $c_out, $roomSize, $room_s, $adult_s, $child_ren);
	}

    if (isset($_REQUEST["delete"]) && $_REQUEST["delete"] == "TRUE") {
        
        $result = $obj->deleteChar($r_code);
    }

    if (isset($_REQUEST["submit"]) && $_REQUEST["submit"] == "Done") {
        
        /*if (!filter_var($email_add, FILTER_VALIDATE_EMAIL)) {
            
        }*/
        
        $result = $obj->makePayment($title, $last_name, $first_name, $email_add, $confirm_email, $phone_num, $c_holder, $c_num, $c_type, $v_month, $v_year);
    }
?>