<?php

    include "../models/functions.php";
    
    $check_in = isset($_REQUEST['c_in']) ? $_REQUEST['c_in'] : NULL;
    $check_out = isset($_REQUEST['c_out']) ? $_REQUEST['c_out'] : NULL;
    $rooms = isset($_REQUEST['rooms']) ? $_REQUEST['rooms'] : NULL;
    $adults = isset($_REQUEST['adults']) ? $_REQUEST['adults'] : NULL;
    $children = isset($_REQUEST['children']) ? $_REQUEST['children'] : NULL;

    $b_info = new func();

    if (isset($_REQUEST["submit"]) && $_REQUEST["submit"] == "Submit") {
		
		$result = $b_info->bookInfo($check_in, $check_out, $rooms, $adults, $children);
	}

    //select room ----------------------------------------------------------------------------
   

    if (isset($_REQUEST["single"]) && $_REQUEST["single"] == "BOOK THIS ROOM") {
        
        $result = $b_info->selectRoom("Single", 1000);
    }

    if (isset($_REQUEST["double"]) && $_REQUEST["double"] == "BOOK THIS ROOM") {
        
        $result = $b_info->selectRoom("Double", 2000);
    }

    if (isset($_REQUEST["twin"]) && $_REQUEST["twin"] == "BOOK THIS ROOM") {
        
        $result = $b_info->selectRoom("Twin Double", 3000);
    }

    if (isset($_REQUEST["duplex"]) && $_REQUEST["duplex"] == "BOOK THIS ROOM") {
        
        $result = $b_info->selectRoom("Duplex", 4000);
    }

    if (isset($_REQUEST["p_suite"]) && $_REQUEST["p_suite"] == "BOOK THIS ROOM") {
        
        $result = $b_info->selectRoom("Presidential Suite", 5000);
    }

?>