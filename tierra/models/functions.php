<?php

    include "../models/dbConnect.php";
    
    class func extends dbConnect {
        
        function bookInfo($check_in, $check_out, $rooms, $adults, $children) {
            
            $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789"; 
            srand((double)microtime()*1000000); 
            $i = 0; 
            $r_code = '' ; 

            while ($i <= 7) { 
                $num = rand() % 33; 
                $tmp = substr($chars, $num, 1); 
                $r_code = $r_code . $tmp; 
                $i++; 
            } 
            
            $query = "INSERT INTO book (r_code, check_in, check_out, rooms, adults, children) VALUES (\"".$r_code."\", \"".$check_in."\", \"".$check_out."\", \"".$rooms."\", \"".$adults."\", \"".$children."\")";
            $result = mysqli_query($this->conn, $query);
            
            if(!$result) {
				die("<strong>WARNING:</strong><br>" . mysqli_error($this->conn));
			}
        }
        
        function selectRoom($roomSize, $rate) {
            
            $query1 = "SELECT room_rate FROM rooms WHERE room_type = \"".$roomSize."\"";
            $result1 = mysqli_query($this->conn, $query1);
            $bad = mysqli_fetch_assoc($result1);
            
            $query = "INSERT INTO select_room (roomSize, rate) VALUES (\"".$roomSize."\", \"".$bad['room_rate']."\")";
            $result = mysqli_query($this->conn, $query);
            
            if(!$result) {
				die("<strong>WARNING:</strong><br>" . mysqli_error($this->conn));
			}
        }
        
    }

?>