<?php $__env->startSection('title', __('Server Error')); ?>
<?php $__env->startSection('code', '500'); ?>
<?php $__env->startSection('message', __('An unexpected error seems to have occured. Why not try refreshing your page? Or you can contact us if the problem persist ')); ?>

<?php echo $__env->make('errors::minimal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u548031247/domains/rveasy.net/public_html/crypto/resources/views/errors/500.blade.php ENDPATH**/ ?>