<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
      body{
        background-size: 100%;
        background-repeat: no-repeat;
        background-image: url(<?php echo e(url('/Images/Larablack.jpg')); ?>);
      }
      .form-control{
        margin: 30px;
        width: 40%;
        padding: 10px;
      }
      #button{
        margin-left: 250px;
      }
      .h1{
        background: white;
        color: white;
      }
     
    </style>
  </head>
  <body>
      <nav class="nav justify-content-center">
        <a class="nav-link active" href="#"><h3>Add Data</h3></a>
        <a class="nav-link" href="<?php echo e(('/customer/view')); ?>"><h3>View Data</h3></a>
      </nav>
    <form action="<?php echo e($url); ?>" method="post">
      <?php echo csrf_field(); ?>
     <h1 class="text-center text-light"><?php echo e($title); ?></h1>

       <div class="form-group text-center m-3">
      <label for=""></label>
      <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="User Name" value="<?php echo e(isset($user) ? $user->name: ''); ?>">
      <small id="helpId" class="form-text text-muted"></small>
        </div>
    
        <div class="form-group text-center m-3">
        <label for=""></label>
        <input type="email"
          class="form-control" name="email" id="" aria-describedby="helpId" placeholder="User Email" value="<?php echo e(isset($user) ? $user->email: ''); ?>">
        <small id="helpId" class="form-text text-muted"></small>
           </div>
          <button class="btn btn-primary" id="button">
            Submit
        </button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\WsCubeTech\resources\views/customer.blade.php ENDPATH**/ ?>