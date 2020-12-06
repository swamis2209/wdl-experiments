

<?php $__env->startSection('title'); ?>
List cars
<?php $__env->stopSection(); ?>
<?php $__env->startSection('mainContent'); ?>
	<h1>List Car</h1>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>Name</th>
			</tr>
		</thead>
		<tbody>
		<?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><a href="cars/<?php echo e($car->id); ?>"><?php echo e($car->name); ?></a> </td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	<hr>
	<a href="cars/create">Add New Car</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\car\resources\views/cars/index.blade.php ENDPATH**/ ?>