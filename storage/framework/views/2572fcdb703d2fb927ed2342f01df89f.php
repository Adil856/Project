<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Data Show</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-sm nav justify-content-center p-3">
            <a class="navbar-brand" href="">
               <?php if(session()->has('name')): ?>
                   <?php echo e(session()->get('name')); ?>

               <?php else: ?>
                   Guest
               <?php endif; ?> 
            </a>
            <a class="nav-link" href="<?php echo e(('/customer')); ?>">Add Data</a>
            <a class="nav-link" href="<?php echo e(url('customer/view')); ?>">View Data</a>
            <a class="nav-link" href="<?php echo e(route('user.trash')); ?>">Trash</a>
          </nav>
    </div>
   

   <table class="table">
    <thead>
        <tr>
            <th>Sr No.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->customer_id); ?> </td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td>
                <a href="<?php echo e(route('user.restore', ['id' => $user->customer_id])); ?>" class="btn btn-primary">
                    Restore
                </a> 
            </td>
             <td>
                <a href="<?php echo e(route('user.delete', ['id' => $user->customer_id])); ?>" class="btn btn-danger">
                    Delete 
                </a>    
            </td> 
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
   </table>
</body>
</html><?php /**PATH C:\xampp\htdocs\WsCubeTech\resources\views/trash.blade.php ENDPATH**/ ?>