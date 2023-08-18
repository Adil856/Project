<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <form action="<?php echo e(url('/')); ?>/register" method="post">
      <?php echo csrf_field(); ?>
    <h1 class="text-center">Data Entery</h1>

    <div class="form-group text-center">
      <label for="">Enter Name</label>
      <input type="text"
        class="form-control" name="name" id="" aria-describedby="helpId" placeholder="User Name">
      <small id="helpId" class="form-text text-muted"></small>
    </div>
    
    <div class="form-group text-center">
        <label for="">Enter Email</label>
        <input type="email"
          class="form-control" name="email" id="" aria-describedby="helpId" placeholder="User Email">
        <small id="helpId" class="form-text text-muted"></small>
      </div>
      <button class="btn btn-primary">
        Submit
      </button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html><?php /**PATH C:\xampp\htdocs\WsCubeTech\resources\views/user.blade.php ENDPATH**/ ?>