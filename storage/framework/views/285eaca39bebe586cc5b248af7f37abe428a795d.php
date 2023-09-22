<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.manage-users', [])->html();
} elseif ($_instance->childHasBeenRendered('oBPPUii')) {
    $componentId = $_instance->getRenderedChildComponentId('oBPPUii');
    $componentTag = $_instance->getRenderedChildComponentTagName('oBPPUii');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('oBPPUii');
} else {
    $response = \Livewire\Livewire::mount('admin.manage-users', []);
    $html = $response->html();
    $_instance->logRenderedChild('oBPPUii', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u548031247/domains/rveasy.net/public_html/crypto/resources/views/admin/Users/users.blade.php ENDPATH**/ ?>