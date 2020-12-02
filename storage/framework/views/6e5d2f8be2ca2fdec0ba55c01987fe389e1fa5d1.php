

<?php $__env->startSection('content'); ?>
	<h1 class="text-center">Visualizar</h1><hr>
	
	<div class="col-8 m-auto">
		<?php
			$user=$book->find($book->id)->relUsers;
		?>
	
		<strong>Título:</strong> <?php echo e($book->title); ?><br>
		<strong>Páginas:</strong> <?php echo e($book->pages); ?><br>
		<strong>Preço:</strong> R$ <?php echo e($book->price); ?><br><br>
		
		<strong>Autor:</strong> <?php echo e($user->name); ?><br>
		<strong>Email do autor:</strong> <?php echo e($user->email); ?>

	</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/show.blade.php ENDPATH**/ ?>