<?php $__env->startSection('title', $title); ?>
<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('user.system-courses', [])->html();
} elseif ($_instance->childHasBeenRendered('jKugwi1')) {
    $componentId = $_instance->getRenderedChildComponentId('jKugwi1');
    $componentTag = $_instance->getRenderedChildComponentTagName('jKugwi1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('jKugwi1');
} else {
    $response = \Livewire\Livewire::mount('user.system-courses', []);
    $html = $response->html();
    $_instance->logRenderedChild('jKugwi1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.dash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u548031247/domains/rveasy.net/public_html/crypto/resources/views/user/membership/courses.blade.php ENDPATH**/ ?>