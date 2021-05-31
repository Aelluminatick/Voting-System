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
				<input type = submit  value = 'Insert' name = cmd>
				
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
			 echo "<tr><td align=right>Region NCR <td><input type = text name = ncr value = $ncr size=8 readonly><input type = text name = ncrx>";
			 echo "<tr><td align=right>Region I <td><input type = text name = reg1 value = $reg1 size=8 readonly><input type = text name = reg1x>";
			 echo "<tr><td align=right>Region II <td><input type = text name = reg2 value = $reg2 size=8 readonly><input type = text name = reg2x>";
			 echo "<tr><td align=right>Region III <td><input type = text name = reg3 value = $reg3 size=8 readonly><input type = text name = reg3x>";
			 echo "<tr><td align=right>Current Region IV <td><input type = text name = reg4 value = $reg4 size=8 readonly><input type = text name = reg4x>";
			 echo "<tr><td align=right>Region V <td><input type = text name = reg5 value = $reg5 size=8 readonly><input type = text name = reg5x>";
			 echo "<tr><td align=right>Current Region VI <td><input type = text name = reg6 value = $reg6 size=8 readonly><input type = text name = reg6x>";
			 echo "<tr><td align=right>Region VII  <td><input type = text name = reg7 value = $reg7 size=8 readonly><input type = text name = reg7x>";
			 echo "<tr><td align=right>Region VIII <td><input type = text name = reg8 value = $reg8 size=8 readonly><input type = text name = reg8x>";
			 echo "<tr><td align=right>Region IX <td><input type = text name = reg9 value = $reg9 size=8 readonly><input type = text name = reg9x>";
			 echo "<tr><td align=right>Region X <td><input type = text name = reg10 value = $reg10 size=8 readonly><input type = text name = reg10x>";
			 echo "<tr><td align=right>Region XI <td><input type = text name = reg11 value = $reg11 size=8 readonly><input type = text name = reg11x>";
			 echo "<tr><td align=right>Region XII <td><input type = text name = reg12 value = $reg12 size=8 readonly><input type = text name = reg12x>";
			 echo "<tr><td align=right><input type=submit  value = 'Update Tally' name = cmd><input type=submit  value = 'New' name = cmd>";
		     echo "</form>";
        }   
    }	
//  Codes that will be called when the Save button is clicked during Edit operation
    if ($cmd == 'Update Tally') { 
	    $idNo = $_POST['idNo'] ;
	    $name = $_POST['name'] ;
		$party = $_POST['party'] ;
		$sum =0;
		$sum1 =0;
		$sum2 =0;
		$sum3 =0;
		$sum4 =0;
		$sum5 =0;
		$sum6 =0;
		$sum7 =0;
		$sum8 =0;
		$sum9 =0;
		$sum10 =0;
		$sum11 =0;
		$sum12 =0;
		$ncrx = $_POST['ncrx'] ;
         $reg1x = $_POST['reg1x'] ;
				$reg2x = $_POST['reg2x'] ;
				$reg3x = $_POST['reg3x'] ;
				$reg4x = $_POST['reg4x'] ;
   		     $reg5x = $_POST['reg5x'] ;
   		     $reg6x = $_POST['reg6x'] ;
		     $reg7x = $_POST['reg7x'] ;
		     $reg8x = $_POST['reg8x'] ;
		     $reg9x = $_POST['reg9x'] ;
		     $reg10x = $_POST['reg10x'] ;
		     $reg11x = $_POST['reg11x'] ;
		     $reg12x = $_POST['reg12x'] ;
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
		$sum =$ncr+$ncrx;
		$sum1 =$reg1+$reg1x;
		$sum2 =$reg2+$reg2x;
		$sum3 =$reg3+$reg3x;
		$sum4 =$reg4+$reg4x;
		$sum5 =$reg5+$reg5x;
		$sum6 =$reg6+$reg6x;
		$sum7 =$reg7+$reg7x;
		$sum8 =$reg8+$reg8x;
		$sum9 =$reg9+$reg9x;
		$sum10 =$reg10+$reg10x;
		$sum11 =$reg11+$reg11x;
		$sum12 =$reg12+$reg12x;
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
							ncr = '$sum',
							reg1 = '$sum1',
							reg2 = '$sum2',
							reg3 = '$sum3',
							reg4 = '$sum4',
							reg5 = '$sum5',
							reg6 = '$sum6',
							reg7 = '$sum7',
							reg8 = '$sum8',
							reg9 = '$sum9',
							reg10 = '$sum10',
							reg11 = '$sum11',
							reg12 = '$sum12'
							
						   
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

if ($cmd == 'Insert' ) { 
$sql = "Select *  from votes where recID = $rec";
	     $result =  mysqli_query($link, $sql);
	     if ($result) {
		     $row = mysqli_fetch_array($result);
			 $idNo = $row['idNo'] ;
			   $name = $row['name'] ;
			   $party = $row['party'] ;
       echo "<form action=updateVotes.php method = post>";
		     echo "<table width = 70% cellspacing = 2 cellpadding = 2>";
			 echo "<tr><td align=right>Candidate ID No. <td><input type = text name = idNo value = $idNo readonly size=8>";
			 echo "<tr><td align=right>Candidate Name <td><input type = text name = name value = $name readonly size=8>";
			 echo "<tr><td align=right>Political Party <td><input type = text name = party value = $party readonly size=8>";
		 }
		     echo "<tr><td colspan = 2 align=center><br><Br>Votes Received";
             echo "<tr><td colspan = 2><hr>";
			 echo "<tr><td align=right>Region NCR <td><input type = text name = ncr >";
			 echo "<tr><td align=right>Region I <td><input type = text name = reg1 >";
			 echo "<tr><td align=right>Region II <td><input type = text name = reg2 >";
			 echo "<tr><td align=right>Region III <td><input type = text name = reg3 >";
			 echo "<tr><td align=right>Current Region IV <td><input type = text name = reg4 >";
			 echo "<tr><td align=right>Region V <td><input type = text name = reg5 >";
			 echo "<tr><td align=right>Current Region VI <td><input type = text name = reg6 >";
			 echo "<tr><td align=right>Region VII  <td><input type = text name = reg7> ";
			 echo "<tr><td align=right>Region VIII <td><input type = text name = reg8 >";
			 echo "<tr><td align=right>Region IX <td><input type = text name = reg9 >";
			 echo "<tr><td align=right>Region X <td><input type = text name = reg10 >";
			 echo "<tr><td align=right>Region XI <td><input type = text name = reg11 >";
			 echo "<tr><td align=right>Region XII <td><input type = text name = reg12 >";
			 echo "<tr><td align=right><input type=submit  value = 'Create' name = cmd><input type=submit  value = 'New' name = cmd>";
		     echo "</form>";
   }
 //
 // Codes to add record if user clicked the 'Create' button during Insert 
 // 
   if ($cmd == 'Create') { 
      $idNo = $_POST['idNo'] ;
	    $name = $_POST['name'] ;
		$party = $_POST['party'] ;
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
