

<?php $__env->startSection('mainContent'); ?>
	<h1>Show Car</h1><br>
	<div style="color: <?php echo e($carid->color); ?>">
		<h1>Car Name : <?php echo e($carid->name); ?></h1>
        <p><strong>Car Color : <?php echo e($carid->color); ?></strong></p>
	</div>
	<p>
		<strong>Company Name : <?php echo e($carid->company); ?></strong>
	</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\car\resources\views/cars/show.blade.php ENDPATH**/ ?>