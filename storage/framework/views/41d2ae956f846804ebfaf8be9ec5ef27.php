<?php $__env->startSection('content'); ?>

<div class="card mt-4">
  <div class="card-header">
    <h2>Student Details</h2>
  </div>
  <div class="card-body">
    <h5 class="card-title">Name: <?php echo e($students->name); ?></h5>
    <p class="card-text"><strong>Address:</strong> <?php echo e($students->address); ?></p>
    <p class="card-text"><strong>Mobile:</strong> <?php echo e($students->mobile); ?></p>
    <p class="card-text"><strong>Email:</strong> <?php echo e($students->email); ?></p>
  </div>
  <div class="card-footer">
    <a href="<?php echo e(url('students')); ?>" class="btn btn-primary">Back to Students</a>
    <a href="<?php echo e(url('students/' . $students->id . '/edit')); ?>" class="btn btn-warning">Edit</a>
    <form action="<?php echo e(url('students/' . $students->id)); ?>" method="POST" style="display:inline-block;">
      <?php echo csrf_field(); ?>
      <?php echo method_field('DELETE'); ?>
      <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this student?');">Delete</button>
    </form>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanage\studentmanage\resources\views/students/show.blade.php ENDPATH**/ ?>