<?php $__env->startSection('title','Produtos'); ?>

<?php $__env->startSection('conteudo'); ?>
<div class="row container">

    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col s12 m3">
        <div class="card">
            <div class="card-image">
                <img src="<?php echo e($produto->imagem); ?>">
                <span class="card-title">Card Title</span>
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">visibility</i></a>
            </div>
            <div class="card-content">
                <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/example-app/resources/views/site/home.blade.php ENDPATH**/ ?>