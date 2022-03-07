<?php
require_once('db.php');

$sql="SELECT * FROM information";

$result = mysqli_query($connection, $sql);

// echo "<pre>";
// print_r($result);
// exit();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
<link rel="stylesheet" href="sweetalert2.min.css">

    <title>Hello, world!</title>
  </head>
  <body class="container p-5 m-5">
    <div class="">
    <h1 class="text-center  text-success">All Users</h1>
    <a href="index.php" class="btn btn-info p-2 ms-auto float-end mb-2">Add New</a>
   
   
    <table class="table bg-success text-white mt-2">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email </th>
      <th scope="col">Action </th>
    </tr>
  </thead>
  <tbody>
      <?php
      while($r=mysqli_fetch_assoc($result)){
       ?>
       <tr>
         <th scope="row"><?php echo $r['id']?></th>
         <td><?php echo $r['first_name']?></td>
         <td><?php echo $r['last_name']?></td>
         <td><?php echo $r['email']?></td>

         <td>
           <a href="Edit.php?id=<?php echo $r['id']?>"class="btn btn-sm btn-primary">Edit</a> || 
           <a href="Delete.php?id=<?php echo $r['id']?>" id="delete" class="btn btn-sm btn-danger">Delete</a> ||
           <a href="Show.php?id=<?php echo $r['id']?>"class="btn btn-sm btn-warning">Show</a>
         </td>
       </tr>

     <?php }
      ?>
    
  
  </tbody>
</table>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      
    <!-- sweet alert CDN link -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="sweetalert2.min.js"></script>
 
    <!-- SWL Delete Fun. -->

    <script>
    $('#submitForm').on('click',function(e){
        e.preventDefault();
        var form = $(this).parents('form');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {

                form.submit();
            }
        });
    });
</script>

  </body>
</html>