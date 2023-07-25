<?php $__env->startSection('title','Essa é página de Erro'); ?>
<?php $__env->startSection('conteudo'); ?>

<?php $__env->startComponent('components.sidebar'); ?>
    <?php $__env->slot('paragrafo'); ?>
        Texto do slot
    <?php $__env->endSlot(); ?>

    <?php echo $__env->make('includes.mensagem', ['titulo' => 'Mensagem do include!'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('site.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/example-app/resources/views/errors/404.blade.php ENDPATH**/ ?>