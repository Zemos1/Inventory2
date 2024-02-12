<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Gojo Exclamation Checkout</title>
    <link rel="icon" type="image/x-icon" href="img/dailypugsticklogo.png">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <<link rel="stylesheet" href="finalproject2.css">
  </head>
  <body>
   
    <nav class="navbar navbar-custom fixed-top"> 
      <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color:black;"><img class="logo" src="img/dailypugsticklogo.png" style="width: 70px; flo">dailypugstick.</span></a>
      </div>
    </nav>


<div class="checkout" style="margin-top:100px; margin-left:50px;">
    <div class="card" style="width: 18rem;">
  <img src="img/jujutsu/jujutsu4.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Gojo Exclamation 25PHP</h5>
  </div>
</div>
</div>



<div class="container mt-5">
 

 <div class="row">
     <div class="col-md-12">
         <div class="card">
             <div class="card-header">
                 <h4> Personal Information </h4>
             </div>
             <div class="card-body">
                 <form action="codegojo-exclamation.php" method="POST">

                 <div class="md-3">
                     <label>Full Name</label>
                     <input type="text" name="name" class="form-control">
                 </div>
                 <div class="md-3">
                     <label>Home Address</label>
                     <input type="text" name="address" class="form-control">
                 </div>
                 <div class="md-3">
                     <label>Phone Number</label>
                     <input type="text" name="phone" class="form-control">
                 </div>
                 <div class="md-3">
                     <label>Email Address</label>
                     <input type="email" name="email" class="form-control">
                 </div>
                 <div class="md-3">
                     <label>Mode of Payment</label>
                     <select id="text" name="cod" class="form-control">
                     <option value="Cash on Delivery">Cash On Delivery</option>
                     <option value="E-wallet">E-wallet</option>
                     <option value="Over the counter">Over the counter</option>
                   </select>  
                 </div>
                 <div class="md-3">
                 <p class="card-text">Confirm Purchase?</p>
                 <button type="submit" name="save_info" class="btn btn-success">Confirm</button>
                 <a href="index.php" class="btn btn-danger">Cancel</a>
                 </div>
                 
                 
                 </form>
             </div>
         </div>
     </div>
 </div>
</div>







     <div class="background-color">
<div class="b-example-divider"></div>

<div class="container">
   <footer class="row row-cols-1 row-cols-md-2 py-5 my-5 border-top"> <!-- Use 'row-cols-md-2' to create two columns on medium-sized screens and larger -->
       <div class="col-md-6 mb-3">
           <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
               <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
           </a>
           <div class="d-flex flex-column">
               <img class="logo" src="img/dailypugsticklogo.png" style="width: 200px; flo">
               <h1 class="footer">dailypugstick</h1>
               <p>dailypugstick. stickers with passion.</p>
               <p> <i class="bi bi-c-circle"></i>Copyright 2023 </p>
           
           </div>
       </div>
   </footer>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
 </body>
 </html>