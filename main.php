
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Plot Listing HTML5 Website Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-plot-listing.css">
    <link rel="stylesheet" href="assets/css/animated.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
 
  
    <!-- <link rel="stylesheet" href="assets/css/owl.css"> -->
<!--

TemplateMo 564 Plot Listing

https://templatemo.com/tm-564-plot-listing

-->
  </head>

<body>
<div class="modal" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Your data has been submitted successfully.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<!-- <div id="popup" style="display:none; background-color: #f1f1f1; padding: 20px;">
   
    <button onclick="closePopup()">Close</button>
</div> -->

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="main-nav">
            <!-- ***** Logo Start ***** -->
            <a href="index.html" class="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav">
            <!-- <li><a href="Excel/index.php" class="active">Import</a></li> -->
             
              <li><a href="index.html" class="active">Logout</a></li>
              
              <li></li> 
            </ul>        
            <a class='menu-trigger'>
                <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="top-text header-text">
            <h6>NED UNIVERSITY OF ENGINEERING & TECHNOLOGY</h6>
            <h2>EXAMINATION DEPARTMENT</h2>
            <h2>FILTER DATA</h2>
          </div>
        </div>
        <div class="col-lg-12">
        <h5 style='font-family: "Times New Roman", Times, serif;  font-size: 25px; color:white; font-weight:bold;' class='p-4'> Search by Selection</h5>
          <form id="search-form"   role="search" action="#">
            <div class="row">
             
              <div class="col-lg-3 align-self-center">
                
                  <fieldset>
                      <select  class="form-select bg-white"  aria-label="dept" id="dept" >
                          <option selected>Department</option>
                          
                      </select>
                  </fieldset>
              </div>
             <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="price" class="form-select bg-white" aria-label="Default select example" id="batch" ">
                          <option selected>Batch</option>
                         
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select type='hidden' class="form-select bg-white" aria-label="Default select example" id="semester" >
                          <option selected>Semester</option>
                         
                      </select>
                  </fieldset>
              </div>
              <div class="col-lg-3 align-self-center">
                  <fieldset>
                      <select name="price" class="form-select bg-white" aria-label="Default select example" id="user" >
                          <option selected>Student Name</option>
                          
                      </select>
                  </fieldset>
              </div>
            </div>
          </form>
        </div>
        <h6 style=' margin-left:28px;  font-family: "Times New Roman", Times, serif;  font-size: 25px; color:white; font-weight:bold; margin-top:45px; '  > Search by Candidate</h5>
        <div class="col-lg-12">
        <div class="col-lg-3 align-self-center mt-1 me-2" style=" margin-left:1px;">
        <form id="search-form"   class='search' role="search" >
        <fieldset>
        <i class="fa fa-search"></i>
          <!-- <input  id='search' class="form-control bg-white" placeholder="Search" aria-label="Default select example"> -->
               <input type="address" id='search' class=" form-control searchText bg-white "  placeholder="Search" aria-label="Default select example" autocomplete="on" required>
                <!-- <button class="btn btn-secondary mt-2">Search</button> -->
            </fieldset>
</form>

               
          
              </div>
              </div>
      </div>
    </div>
  </div>


  <div class="popular-categories ">
    <div class="container">

        <div class="col-lg-12 mt-5">
          <div class="naccs">
            <div class="grid">
          
                  <div class='table-responsive display' id="table-data"> 
  
            
                </div> 
                <!-- <div class='table-responsive display'>
    <table id="table-data" class="table table-bordered rounded text-center table-hover" data-mdb-max-height="460" data-mdb-fixed-header="true">
        <thead class="thead-dark">
            <tr>
                <th>#ID</th>
                <th>Department</th>
                <th>Batch</th>
                <th>ImageName</th>
                <th>Username</th>
                <th>RollNo</th>
                <th>Semester</th>
            </tr>
        </thead>
        <tbody>
         
        </tbody>
    </table>
</div>
              -->


</div>
            </div>
        </div>








        <div class="col-lg-12">
        <div class="row"> 
          

        </div>
        </div>

      </div>
    </div>
  </div>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="sub-footer">
            <p>Copyright © 2023  Created by
            <br>
		 <a rel="nofollow" href="https://ncbc.neduet.edu.pk/" >National Center for Big Data & Cloud Computing</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>











  
  </body>



  
  <!-- <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Success!</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
   <span aria-hidden="true">&times;</span>
</button>
     </div>
            <div class="modal-body">
                Your data has been submitted successfully.
            </div>
            <div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
</div>
        </div>
    </div>
</div> -->





<!-- <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="successModalLabel">Success! </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

              
                <div class="modal-body">
                Your data has been submitted successfully.
            </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                    </div>
               

            </div>
        </div>
    </div> -->

    <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Success!</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                Your data has been submitted successfully.
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

  
  <!-- EDIT POP UP FORM (Bootstrap MODAL) -->
  <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Update Student Data </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="update/update.php" method="POST" id=''>

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label>  Department </label>
                            <input type="text" name="dept_edit" id="dept_edit" class="form-control"
                                placeholder="Department">
                        </div>
                        <div class="form-group">
                            <label> Batch </label>
                            <input type="text" name="batch_edit" id="batch_edit" class="form-control"
                                placeholder="batch">
                        </div>

                       

                        <div class="form-group">
                            <label> Semester </label>
                            <select  name="semester_edit" id="semester_edit" class="form-control"
                                placeholder="Semester "> <option selected>Semesters</option>
                          
                          </select>
                        </div>
                        <div class="form-group">
                            <label> Studetn name </label>
                            <select type="tel" name="user_edit" id="user_edit" class="form-control"
                                placeholder="Student ">
                                <option selected>Student Name</option>
                          
                      </select>
                        </div>
                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="">Close</button>
                        <button type="submit" name="updatedata" id='updatedata'  class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


    

  

</html>

  <!-- Scripts  -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>
  <script src="assets/js/animation.js"></script>
  <script src="assets/js/imagesloaded.js"></script>
  <script src="assets/js/custom.js"></script>



     

    <script  src="assets/js/lightbox-plus-jquery.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


<script>


// Basic example

$(document).ready(function(){

  


    function loadData(type, id){
        $.ajax({
            url : "dept-batch.php",
            type : "POST",
            data: {type : type, id : id},
            success : function(data){
                if(type == "batch"){
                    $("#batch").html(data);

                }else{
                    $("#dept").append(data);
                } 
              }
        });
       }

    loadData();


    $("#dept").on("change",function(){
        var dept = $("#dept").val();
        // console.log(dept);
        if(dept != ""){
            loadData("batch", dept);
        }else{
            $("#batch").html("");
        }
    });


//user tag

      $("#batch").change(function(){
         var id = $(this).val();
        //  console.log('user'+ id);
        var dept = $("#dept").val();
       //  console.log('user'+ dept);
     $.ajax({
        url: "user.php",
         type : "POST",
         data : { id : id, dept:dept},
         success : function(data){
          //  $("#user").html(data);
          $("#semester").html(data);
        
         }
       });
         
   })

            $("#semester").change(function(){
                // var user_id = $(this).val();
                var semester=$(this).val();
                var dept_sem = $("#dept").val();
                var batch_sem = $("#batch").val();
                $.ajax({
                url: "user.php",
                    type : "POST",
                    data : {semester:semester, dept_sem:dept_sem , batch_sem:batch_sem},
                    success : function(data){
                    $("#user").html(data);
                  }
                  });
               })


               $("#user").change(function(){
                var user_img = $("#user").val();
                var semester_img= $('#semester').val();
                var dept_img = $("#dept").val();
                var batch_img = $("#batch").val();
             
                console.log(batch_img+' batch ');
                console.log(dept_img +' dept')
                console.log(semester_img +' semester');
                // console.log(user_img +' user');
                $.ajax({
                url: "user.php",
                    type : "POST",
                    data : { user_img:user_img, dept_img : dept_img , batch_img:batch_img , semester_img : semester_img },
                    success : function(data){
                    $("#imagename").html(data);
                  }
                  });
               })
     
               


////////////////////////////search query ......"search.php"///////////////////////////////////////////////////////////////////

//search select
$('#search').keyup(function() {
    var searchTerm = $(this).val();
    console.log(searchTerm);
    // if(searchTerm == ""){
    //       $("#table-data").html("");
    //     }else{
    $.ajax({
        type: 'post',
        url: 'search.php',
        data: { searchTerm: searchTerm }, // Use searchTerm instead of search
        success: function(response) {
            $('#table-data').html(response);
 


        }
    });
  // }
});








   $("#dept").change(function(){
        var id = $(this).val();
     // var dept = $("#dept").val();
        if(id == ""){
          $("#table-data").html("");
        }else{
          $.ajax({
            // url : "load-batch-table.php",
            url : "search.php",
            type : "POST",
            data : { id : id},
            success : function(data){
              $("#table-data").html(data);
           
              
//             
            }
          });
        }
      });

      $("#batch").change(function(){
        var batch = $(this).val();
        var department = $("#dept").val();
        if(batch == ""){
          $("#table-data").html("");
        }else{
          $.ajax({
            // url : "load-batch-table.php",
            url : "search.php",
            type : "POST",
            data : { batch : batch , department:department},
            success : function(data){
              // table = new DataTable('.display');
             
              
            }


          });
        }
      });


      $("#batch").change(function(){
        var batch = $(this).val();
        var department = $("#dept").val();
        if(batch == ""){
          $("#table-data").html("");
        }else{
          $.ajax({
            // url : "load-batch-table.php",
            url : "search.php",
            type : "POST",
            data : { batch : batch , department:department},
            success : function(data){
           
              $("#table-data").html(data);
            }
          });
        }
      });
      $("#semester").on("change", function () {
      var semester = $(this).val();
      // console.log(semester);
      var user_sem = $('#user').val();
      // console.log(user_sem);
      var batch_sem = $('#batch').val();
      // console.log(batch_sem);
        var dept_sem = $("#dept").val();

        // console.log(dept_sem);
      if(user == ""){
          $("#table-data").html("");
        }else{
          $.ajax({
            // url : "load-batch-table.php",
            url : "search.php",
            type : "POST",
            data : {semester : semester, dept_sem:dept_sem, batch_sem:batch_sem},
            success : function(data){
           
              $("#table-data").html(data);
            }
          });
        }
    });


      $("#user").on("change", function () {
      var user = $(this).val();
    //   console.log(user);
      var batch_user = $('#batch').val();
    //   console.log(batch_user);
        var deptmnt = $("#dept").val();
        var ssemester =$('#semester').val();
        console.log(ssemester + ' ssemester');
  
        // console.log(deptmnt);
      if(user == ""){
          $("#table-data").html("");
        }else{
          $.ajax({
            // url : "load-batch-table.php",
            url : "search.php",
            type : "POST",
            data : { user : user, deptmnt:deptmnt, batch_user:batch_user,  ssemester:ssemester },
            success : function(data){
          
              $("#table-data").html(data);
            } 
          });
        }
    });



  











    $(document).on('click', '.editbtn', function () {
        $('#editmodal').modal('show');
        $tr = $(this).closest('tr');
        var data = $tr.children("td").map(function () {
      
            return $(this).text();
      
        }).get();

       
        $('#update_id').val(data[0]);
        $('#dept_edit').val(data[1]);
        $('#batch_edit').val(data[2]);
        // $('#semester_edit').val(data[3]);
        // $('#user').val(data[4]);



var semester_edit= data[3];
var dept_sem = $("#dept_edit").val();
                console.log(dept_sem);
                var batch_sem = $("#batch_edit").val();
                console.log(batch_sem);
                $.ajax({
                url: 'user.php/' + semester_edit, 
                    type : "POST",
                    data : { dept_sem:dept_sem , batch_sem:batch_sem},
                    success : function(data){
                    $('#semester_edit').html(data);
                  }
                  });
      






        var userId = data[4];

// Make an AJAX request to fetch data for the user field

                // var dept_std = $("#dept").val();
                // console.log(dept_std);
                // var batch_std = $("#batch").val();
                // console.log(batch_std);
                // $.ajax({
                // url: 'user.php/' + userId, 
                //     type : "POST",
                //     data : { dept_std:dept_std , batch_std:batch_std},
                //     success : function(data){
                //     $('#user_edit').html(data);
                //   }
                //   });




                  var dept_std = $("#dept_edit").val();
                console.log(dept_std);
                var batch_std = $("#batch_edit").val();
                console.log(batch_std);
                $.ajax({
                url: 'user.php/' + userId, 
                    type : "POST",
                    data : { dept_std:dept_std , batch_std:batch_std},
                    success : function(data){
                    $('#user_edit').html(data);
                  }
                  });
      
      
    });

    $('#update_form').submit(function (e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'update/update.php',
                data: $('#update_form').serialize(),
                success: function (response) {

                  console.log(response); 
                    if (response == 'success') {
                        alert('Data updated successfully!');
                        // You can add additional logic here for successful update
                    } else {
                        alert('Error updating data. Please try again.');
                        // You can add additional logic here for failed update
                    }
                }
            });
        });

      


});

$(document).ready(function () {
        <?php
        // Check if the update_status session variable is set and display the modal
        if (isset($_SESSION['update_status'])) {
            $update_status = $_SESSION['update_status'];
            unset($_SESSION['update_status']); // Reset the session variable

            if ($update_status == 'success') {
                echo '$("#successModal").modal("show");';
            }
        }
        ?>
    });


</script>