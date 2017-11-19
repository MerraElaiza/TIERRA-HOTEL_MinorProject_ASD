<?php
	
	include "../models/dbConnect.php";
	
	class animax extends dbConnect {
		
		function editChar($r_code, $c_in, $c_out, $roomSize, $room_s, $adult_s, $child_ren) {
			
            $asd = $r_code;
            $query = "SELECT * FROM book WHERE r_code = \"".$asd."\"";
            $result = mysqli_query($this->conn, $query);
            $query2 = "UPDATE book SET
                      check_in = \"".$c_in."\",
                      check_out = \"".$c_out."\",
                      rooms = \"".$room_s."\",
                      adults = \"".$adult_s."\",
                      children = \"".$child_ren."\"
                      WHERE r_code = \"".$r_code."\"";
			$result2 = mysqli_query($this->conn, $query2);
            $bad = mysqli_fetch_assoc($result);
            $query3 = "UPDATE select_room SET
                       roomSize = \"".$roomSize."\"
                       WHERE book_id = \"".$bad['book_id']."\"";
            $result3 = mysqli_query($this->conn, $query3);
			
			if(!$result) {
				die("<strong>WARNING:</strong><br>" . mysqli_error($this->conn));
			}
		}
		
		function deleteChar($r_code) {
			
            $asd = $r_code;
            $query = "SELECT * FROM book WHERE r_code = \"".$asd."\"";
            $result = mysqli_query($this->conn, $query);
            $query2 = "DELETE FROM book WHERE r_code = \"".$r_code."\"";
			$result2 = mysqli_query($this->conn, $query2);
            $bad = mysqli_fetch_assoc($result);
            $query = "SELECT * FROM select_room WHERE book_id = \"".$bad['book_id']."\"";
            $result = mysqli_query($this->conn, $query);
            $query3 = "DELETE FROM select_room WHERE book_id = \"".$bad['book_id']."\"";
            $result3 = mysqli_query($this->conn, $query3);
            $bad2 = mysqli_fetch_assoc($result);
            $query = "SELECT * FROM customer_info WHERE book_id = \"".$bad2['book_id']."\"";
            $result = mysqli_query($this->conn, $query);
            $query4 = "DELETE FROM customer_info WHERE book_id = \"".$bad2['book_id']."\"";
            $result4 = mysqli_query($this->conn, $query4);
            $bad3 = mysqli_fetch_assoc($result);
            $query5 = "DELETE FROM card_info WHERE book_id = \"".$bad3['book_id']."\"";
            $result5 = mysqli_query($this->conn, $query5);
		}
        
        function makePayment($title, $last_name, $first_name, $email_add, $confirm_email, $phone_num, $c_holder, $c_num, $c_type, $v_month, $v_year) {
            
            $query = "INSERT INTO customer_info (title, last_name, first_name, email_add, confirm_email, phone_num) VALUES (\"".$title."\", \"".$last_name."\", \"".$first_name."\", \"".$email_add."\", \"".$confirm_email."\", \"".$phone_num."\")";
            $result = mysqli_query($this->conn, $query);
            
            $query2 = "INSERT INTO card_info (cardholder, card_num, card_type, valid_month, valid_year) VALUES (\"".$c_holder."\", \"".$c_num."\", \"".$c_type."\", \"".$v_month."\", \"".$v_year."\")";
            $result2 = mysqli_query($this->conn, $query2);
        }
        
        function insertRate($room_type, $room_rate) {
			
			$query1 = "UPDATE rooms SET
						room_rate = \"".$room_rate."\"
						WHERE room_type = \"".$room_type."\"";
			$result1 = mysqli_query($this->conn, $query1);
			
			if(!$result1) {
				die("<strong>WARNING:</strong><br>" . mysqli_error($this->conn));
			}
		}
	}
?>