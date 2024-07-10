<?php
// Load the database configuration file
include_once 'dbConfig.php';

// Get status message
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Members data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>

<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

    </style>
</head>
<body>
<div class="fixed-header">
    <div class="container">
        <!-- Navbar Logo -->
        <div class="logo">
            <!-- Logo Placeholder for Illustration -->
            <a href="#home"><img width="100px" height="auto" src="../assets/img/sindhhec.png"></a>
        </div>
        <h2 style="text-align: center; color: maroon">NED UNIVERSITY OF ENGINEERING & TECHNOLOGY </h2>
        <h3  style="text-align: center;">EXAMINATION DEPARTMENT</h3>
        <h4  style="text-align: center; color:#c97d0b;">STUDENT DATA</h4>
        <button class="btn" onclick="location.href='../table.php';" style="background-color: #c69500; float: left "><i class="fa fa-home"></i> Home</button>
        <button class="btn" onclick="location.href='../index.html';" style="background-color: #c69500; float: right" ><i class="fa fa-close"></i> Logout</button>
    </div>
</div>
<div class="container">
    <!-- Import link -->
    <div class="col-md-12 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
        </div>
    </div>
    <!-- CSV file upload form -->
    <div class="col-md-12" id="importFrm" style="display: none;">
        <form action="importData.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
    </div>

    <!-- Data list table --> 
    <table class="table table-striped table-bordered" >

        <thead class="thead-dark">
            <tr>
                <th>#ID</th>
                <th>Department</th>
                <th>ImageName</th>
                <th>Username</th>
                <th>RollNo</th>
                <th>Semester</th>
                <th>Batch</th>
            </tr>
            </tr>
        </thead>
        <tbody>
        <?php
        // Get member rows
        $result = $db->query("SELECT * FROM exam ORDER BY id DESC");
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
        ?>
            <tr>
                <td><?php echo $row['ID']; ?></td>
                <td><?php echo $row['Department']; ?></td>
                <td><?php echo $row['ImageName']; ?></td>
                <td><?php echo $row['Username']; ?></td>
                <td><?php echo $row['RollNo']; ?></td>
                <td><?php echo $row['Semester']; ?></td>
                <td><?php echo $row['batch']; ?></td>

            </tr>
        <?php } }else{ ?>
            <tr><td colspan="5">No member(s) found...</td></tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Show/hide CSV upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>