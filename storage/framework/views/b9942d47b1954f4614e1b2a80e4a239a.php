<?php $__env->startSection('content'); ?>

<div class="card mt-4">
  <div class="card-header">
    <h2>Edit Student </h2>
  </div>
  <div class="card-body">
    <form action="<?php echo e(url('students/' . $students->id)); ?>" method="post">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PATCH'); ?>

      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="<?php echo e(old('name', $students->name)); ?>" class="form-control">
        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="form-group mt-3">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="<?php echo e(old('address', $students->address)); ?>" class="form-control">
        <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="form-group mt-3">
        <label for="mobile">Mobile</label>
        <input type="text" name="mobile" id="mobile" value="<?php echo e(old('mobile', $students->mobile)); ?>" class="form-control">
        <?php $__errorArgs = ['mobile'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="form-group mt-3">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="<?php echo e(old('email', $students->email)); ?>" class="form-control">
        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
          <div class="text-danger"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
      </div>

      <div class="form-group mt-4">
        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?php echo e(url('students')); ?>" class="btn btn-secondary">Cancel</a>
      </div>
    </form>
  </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studentmanage\studentmanage\resources\views/students/edit.blade.php ENDPATH**/ ?>