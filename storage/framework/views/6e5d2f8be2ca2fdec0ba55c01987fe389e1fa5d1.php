

<?php $__env->startSection('content'); ?>
    <h1 class="text-center">Visualizar</h1> <hr>

    <div class="col-8 m-auto">
        <?php
            $user=$book->find($book->id)->relUsers;
        ?>
        Título: <?php echo e($book->title); ?><br>
        Páginas: <?php echo e($book->pages); ?><br>
        Preço: R$ <?php echo e($book->price); ?><br>
        Autor: <?php echo e($user->name); ?> <br>
        Email do autor: <?php echo e($user->email); ?> <br>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\blog\resources\views/show.blade.php ENDPATH**/ ?>