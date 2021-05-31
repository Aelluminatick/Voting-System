<?php
/* This PHP program shows how to display the contents of a table using
   Select statement
*/
if (isset($_POST['cmd']))   $cmd   = $_POST['cmd'];
else                                    $cmd   = "";
if (isset($_POST['recID']))  $rec   = $_POST['recID'];
else $rec = 1;
          require("connect.php");
          $sql = "SELECT * FROM votes order by recID ";
          $result = mysqli_query($link, $sql);
          if ( $result) {
                 if(mysqli_num_rows($result) > 0){
                     echo "<br><table  align = center width = 70% cellspacing = 2 cellpadding = 2>";
					 echo "<tr><th colspan = 17>Region";
					 echo "<tr><td colspan = 17><hr>";
                     echo "<tr>";
					  echo "<th></th>";
					 echo "<th>IDNo.</th>";
					 echo "<th>Candidate</th>";
					 echo "<th>Party</th>";
					 echo "<th>NCR</th>";
                     echo "<th>Region 1</th>";
                     echo "<th>Region 2</th>";
                     echo "<th>Region 3 </th>";
                     echo "<th>Region 4</th>";
					 echo "<th>Region 5</th>";
					 echo "<th>Region 6</th>";
					 echo "<th>Region 7</th>";
					 echo "<th>Region 8</th>";
					 echo "<th>Region 9</th>";
					 echo "<th>Region 10</th>";
					 echo "<th>Region 11</th>";
					 echo "<th>Region 12</th>";
                     echo "<tr><td colspan = 17><hr>";
					 $sel = "<Select name = recID>";
                     while($row = mysqli_fetch_array($result)){
						 $id = $row['recID'];
                         echo "<tr>";
			             echo "<th>$id</td>";
						 echo "<th>" . $row['idNo'] . "</th>";
				         echo "<th>" . $row['name'] . "</th>";
						 echo "<th>" . $row['party'] . "</th>";
                         echo "<th>" . $row['ncr'] . "</th>";
				         echo "<th>" . $row['reg1'] . "</th>";
                         echo "<th>" . $row['reg2'] . "</th>";
				         echo "<th>" . $row['reg3'] . "</th>";
						 echo "<th>" . $row['reg4'] . "</th>";
						 echo "<th>" . $row['reg5'] . "</th>";
						 echo "<th>" . $row['reg6'] . "</th>";
						 echo "<th>" . $row['reg7'] . "</th>";
						 echo "<th>" . $row['reg8'] . "</th>";
						 echo "<th>" . $row['reg9'] . "</th>";
						 echo "<th>" . $row['reg10'] . "</th>";
						 echo "<th>" . $row['reg11'] . "</th>";
						 echo "<th>" . $row['reg12'] . "</th>";
                         echo "</tr>";
						 $sel = $sel . "<option value = $id> $id ";
                    }
					$sel = $sel . "</select>";
					echo "<tr><td colspan = 17><hr></table>";
                    // Free result set
                         mysqli_free_result($result);
          } 
		  else  {
                   echo "No records found.";
          }
      } 
      else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
      }
      echo "<form action=updateVotes.php method = post>";
	  echo "<br><table align = center width = 85% cellspacing = 2 cellpadding = 2>";
      echo "<tr><td align = right>Select to Update  :  $sel ";
      echo "
	            <input type = submit  value = 'Update' name = cmd>
				
				
				</table></form>";

// 
//   Supporting  PHP  codes
//  



//====================================================== 
//  Block of  codes that will be called when the Edit button is clicked
// 
    if ($cmd == 'Update' ) { 
         $sql = "Select *  from votes where recID = $rec";
	     $result =  mysqli_query($link, $sql);
	     if ($result) {
		     $row = mysqli_fetch_array($result);
			 $data = $row;
			 $input = $_POST['number'];
			 $idNo = $row['idNo'] ;
			   $name = $row['name'] ;
			   $party = $row['party'] ;
				$ncr = $row['ncr'] ;
				$reg1 = $row['reg1'] ;
				$reg2 = $row['reg2'] ;
				$reg3 = $row['reg3'] ;
				$reg4 = $row['reg4'] ;
   		     $reg5 = $row['reg5'] ;
   		     $reg6 = $row['reg6'] ;
		     $reg7 = $row['reg7'] ;
		     $reg8 = $row['reg8'] ;
		     $reg9 = $row['reg9'] ;
		     $reg10 = $row['reg10'] ;
		     $reg11 = $row['reg11'] ;
		     $reg12 = $row['reg12'] ;
			 
		     echo "<form action=updateVotes.php method = post>";
		     echo "<table width = 70% cellspacing = 2 cellpadding = 2>";
			  echo "<tr><td align=right>Candidate ID No. <td><input type = text name = idNo value = $idNo readonly size=8>";
			 echo "<tr><td align=right>Candidate Name <td><input type = text name = name value = $name readonly size=8>";
			 echo "<tr><td align=right>Political Party <td><input type = text name = party value = $party readonly size=8>";
		     echo "<tr><td colspan = 2 align=center><br><Br>Votes Received";
             echo "<tr><td colspan = 2><hr>";
			 echo "<tr><td align=right>Region NCR <td><input type = text name = ncr value = $ncr size=8>";
			 echo "<tr><td align=right>Region I <td><input type = text name = reg1 value = $reg1 size=8>";
			 echo "<tr><td align=right>Region II <td><input type = text name = reg2 value = $reg2 size=8 >";
			 echo "<tr><td align=right>Region III <td><input type = text name = reg3 value = $reg3 size=8>";
			 echo "<tr><td align=right>Current Region IV <td><input type = text name = reg4 value = $reg4 size=8>";
			 echo "<tr><td align=right>Region V <td><input type = text name = reg5 value = $reg5 size=8>";
			 echo "<tr><td align=right>Current Region VI <td><input type = text name = reg6 value = $reg6 size=8>";
			 echo "<tr><td align=right>Region VII  <td><input type = text name = reg7 value = $reg7 size=8>";
			 echo "<tr><td align=right>Region VIII <td><input type = text name = reg8 value = $reg8 size=8>";
			 echo "<tr><td align=right>Region IX <td><input type = text name = reg9 value = $reg9 size=8>";
			 echo "<tr><td align=right>Region X <td><input type = text name = reg10 value = $reg10 size=8>";
			 echo "<tr><td align=right>Region XI <td><input type = text name = reg11 value = $reg11 size=8>";
			 echo "<tr><td align=right>Region XII <td><input type = text name = reg12 value = $reg12 size=8>";
			 echo "<tr><td align=right><input type=submit  value = 'Update Tally' name = cmd><input type=submit  value = 'New' name = cmd>";
		     echo "</form>";
        }   
    }	
//  Codes that will be called when the Save button is clicked during Edit operation
    if ($cmd == 'Update Tally') { 
	    $add = $data + $input;
	    $idNo = $_POST['idNo'] ;
	    $name = $_POST['name'] ;
	     $ncr = $_POST['ncr'] ;
         $reg1 = $_POST['reg1'] ;
				$reg2 = $_POST['reg2'] ;
				$reg3 = $_POST['reg3'] ;
				$reg4 = $_POST['reg4'] ;
   		     $reg5 = $_POST['reg5'] ;
   		     $reg6 = $_POST['reg6'] ;
		     $reg7 = $_POST['reg7'] ;
		     $reg8 = $_POST['reg8'] ;
		     $reg9 = $_POST['reg9'] ;
		     $reg10 = $_POST['reg10'] ;
		     $reg11 = $_POST['reg11'] ;
		     $reg12 = $_POST['reg12'] ;
         $sql = "Update votes
	                 Set 
					 idNo = '$idNo',
					 name = '$name',
							ncr = '$ncr',
							reg1 = '$reg1',
							reg2 = '$reg2',
							reg3 = '$reg3',
							reg4 = '$reg4',
							reg5 = '$reg5',
							reg6 = '$reg6',
							reg7 = '$reg7',
							reg8 = '$reg8',
							reg9 = '$reg9',
							reg10 = '$reg10',
							reg11 = '$reg11',
							reg12 = '$reg12'
							
						   
				     where recID = '$rec'";
	    $result =  mysqli_query($link, $sql);
	    if ($result) 
		      $mess = "Record successfully updated !";
	    else
		      $mess = "Unable to update record !";
	    echo "<form action=updateVotes.php method = post>";
        echo "<br><table align = center>";
        echo "<tr><td align = center>$mess";
	    echo "<tr><th><input type = submit value = 'Click here to refresh page'></form>";
        mysqli_close($link);
   }


   

?>
