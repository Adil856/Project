<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Data Show</title>
    <style>
        body{
            background-image: url(<?php echo e(url('/Images/Larablack.jpg')); ?>);
        }
        /* custom.css */
        .pagination {
            font-size: 14px; /* Adjust the font size as per your preference */
        }

        .pagination .page-link {
            padding: 0.25rem 0.5rem; /* Adjust the padding as per your preference */
        }

    </style>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-sm nav justify-content-center p-3">
            <a class="navbar-brand text-light" href="">
               <?php if(session()->has('name')): ?>
                   <?php echo e(session()->get('name')); ?>

               <?php else: ?>
                   Guest
               <?php endif; ?> 
            </a>
            <form action="" class="col-6">

                <div class="form-group">
            
                  <label for=""></label>

                  <input type="search" name="search" id="" class="form-control" placeholder="Enter Name & Email" value="<?php echo e($search); ?>">

                </div>

                <button class="btn btn-primary mt-2" style="float: left">Search</button>

                <a href="<?php echo e(('/customer/view')); ?>">

                <button type="button" class="btn btn-danger mt-2" style="float: right">Reset</button>

                </a>
            </form>
            <a class="nav-link" href="<?php echo e(('/customer')); ?>">Add Data</a>
            <a class="nav-link" href="#">View Data</a>
            <a class="nav-link" href="<?php echo e(route('user.trash')); ?>">Trash</a>
          </nav>
    </div>
   

   <table class="table table-dark table-striped mx-3">
    <thead>
        <tr>
            <th><h3>Sr No.</h3></th>
            <th><h3>Name</h3></th>
            <th><h3>Email</h3></th>
            <th><h3>Edit</h3></th>
            <th><h3>Delete</h3></th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($users->customer_id); ?></td>
            <td><?php echo e($users->name); ?></td>
            <td><?php echo e($users->email); ?></td>
            <td>
                <a href="<?php echo e(route('user.edit', ['id' => $users->customer_id])); ?>" class="btn btn-primary">
                    Edit
                </a> 
            </td>
             <td>
                <a href="<?php echo e(route('user.remove', ['id' => $users->customer_id])); ?>" class="btn btn-danger">
                    Trash
                </a>    
            </td> 
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
   </table>
        
</body>
</html><?php /**PATH C:\xampp\htdocs\WsCubeTech\resources\views/customer-view.blade.php ENDPATH**/ ?>