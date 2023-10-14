<?php $__env->startSection('content'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.manage-users', [])->html();
} elseif ($_instance->childHasBeenRendered('aMVzwuj')) {
    $componentId = $_instance->getRenderedChildComponentId('aMVzwuj');
    $componentTag = $_instance->getRenderedChildComponentTagName('aMVzwuj');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('aMVzwuj');
} else {
    $response = \Livewire\Livewire::mount('admin.manage-users', []);
    $html = $response->html();
    $_instance->logRenderedChild('aMVzwuj', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/7thpriest/Codes/PHP Projects/Rough/mi360/resources/views/admin/Users/users.blade.php ENDPATH**/ ?>