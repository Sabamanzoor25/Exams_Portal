<?php
// Replace these database connection details with your own
include_once 'DB/db.php';
// Get the search term from the AJAX request

$output='';
if(isset($_POST['id'])){
    $searchTerm = $_POST['id'];
    // Perform the search query
    $sql = "SELECT * FROM exam  t WHERE Department LIKE '%$searchTerm%'  ORDER BY Username REGEXP '^[^A-Za-z]' ASC, Username";

}
elseif(isset($_POST['batch']))
{
    $searchbatch= $_POST['batch'];
    $searchdept = $_POST['department'];
    
    // Perform the search query
    $sql = "SELECT * FROM exam t WHERE batch LIKE '%$searchbatch%' and Department  LIKE '%$searchdept%'  ORDER BY Username REGEXP '^[^A-Za-z]' ASC, Username";

}



elseif(isset($_POST['semester']))
{ 
    // $user_sem= $_POST['user_sem'];
    $batch_sem= $_POST['batch_sem'];
    $dept_sem = $_POST['dept_sem'];
    $semester = $_POST['semester'];
    
    
    // Perform the search query
    $sql = "SELECT * FROM exam t WHERE batch LIKE '%$batch_sem%' and Department  LIKE '%$dept_sem%'  and Semester LIKE '%$semester%'  ORDER BY Username REGEXP '^[^A-Za-z]' ASC, Username";

}

elseif(isset($_POST['user']))
{ $searchuser= $_POST['user'];
    $searchbatch= $_POST['batch_user'];
    $searchdept = $_POST['deptmnt'];
    $searchsemester=$_POST['ssemester'];
    // Perform the search query
    $sql = "SELECT * FROM exam t WHERE batch LIKE '%$searchbatch%' and Department  LIKE '%$searchdept%' and Username  LIKE '%$searchuser%' and Semester LIKE '%$searchsemester%'  ORDER BY Username REGEXP '^[^A-Za-z]' ASC, Username";

}

// elseif(isset($_POST['imagename']))
// { $user_img= $_POST['user_img'];
//     $batch_img= $_POST['batch_img'];
//     $dept_img = $_POST['dept_img'];
//     $semester_img = $_POST['semester_img'];
//     $imagename = $_POST['imagename'];
//     // Perform the search query
//     $sql = "SELECT * FROM exam WHERE batch LIKE '%$batch_img%' and Department  LIKE '%$dept_img%' and Username  LIKE '%$user_img%'  and Semester LIKE '%$semester_img%'   and ImageName LIKE '%imagename%' ORDER BY id ASC";

// }


elseif(isset($_POST['searchTerm'])){
    $searchTerm= $_POST['searchTerm'];
    $sql = "SELECT * FROM exam t WHERE batch LIKE '%$searchTerm%' or Department  LIKE '%$searchTerm%' or Username  LIKE '%$searchTerm%' or Semester LIKE '%$searchTerm%'  ORDER BY Username REGEXP '^[^A-Za-z]' ASC, Username";

}

else{
    $sql = "SELECT * FROM exam t   ORDER BY Username REGEXP '^[^A-Za-z]' ASC, Username";
 
}

$result = $conn->query($sql);

// Prepare the results in an array
$sno=1;

if ($result->num_rows > 0) {

  
    // Get member rows
    $output .='<span style="font-family: "Times New Roman", Times, serif;"  font-size: 25px; color:gray; font-wight:bold"> No of Rows: '. $result->num_rows.'</span><table id=" table-data" class="table  rounded text-center table-hover bg-white ">';

    $output .='   

    <thead class="thead-dark">
    <tr>
        <th>#ID</th>
        <th>Department</th>
        <th>Batch</th>
        <th>Semester</th>
        <th>Username</th>
        <th>Image</th>
        <th>update</th>

        
    </tr>
    </thead> 
    <tbody>';
    while ($row = $result->fetch_assoc()) {
        $imagename=$row['ImageName'];
        $dept=$row['Department'];
        $batch=$row['batch'];
        $semester=$row['Semester'];
        $output .="<tr> 
        <td>".$sno++."</td>
        <td>" .$row['Department']."</td>
        <td>" .$row['batch']."</td>
        <td>" .$row['Semester'] ."</td>
       
        <td class='text-justify'>" .$row['Username']. "</td>
        <td> <a href='Data/".$dept."/".$batch."/".$semester."/".$imagename. "' data-lightbox='model'  data-title='".$imagename."' download >Click Here</a></td>
    
       
       
       <td><button class='btn btn-success editbtn'>Update</button> </td>
     
    </tr>";

         }
         $output .="</tbody></table>";
         echo $output;
}



else{
    echo  "<h3>No Records Found</h3>";
}

// Close the database connection
$conn->close();



// Return the results as JSON

?>