<!DOCTYPE html>
<html lang="en">

<?php if (isset($component)) { $__componentOriginal0f509fab02c45445826003a1e50db506 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0f509fab02c45445826003a1e50db506 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.head','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0f509fab02c45445826003a1e50db506)): ?>
<?php $attributes = $__attributesOriginal0f509fab02c45445826003a1e50db506; ?>
<?php unset($__attributesOriginal0f509fab02c45445826003a1e50db506); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0f509fab02c45445826003a1e50db506)): ?>
<?php $component = $__componentOriginal0f509fab02c45445826003a1e50db506; ?>
<?php unset($__componentOriginal0f509fab02c45445826003a1e50db506); ?>
<?php endif; ?>

<body <?php echo (isset($bodyClass) ? 'class="' . $bodyClass .'"': ''); ?>>

    <?php echo $__env->yieldContent('content'); ?>

    <div id="overlay_every-where" data-tmp-cursor="md text-black dark:text-white opacity-10"
        data-tmp-cursor-icon="fa-regular fa-x fa-fw"></div>

    <?php if (isset($component)) { $__componentOriginal23a21c0d0f80992980c57ef2802ca540 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal23a21c0d0f80992980c57ef2802ca540 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal23a21c0d0f80992980c57ef2802ca540)): ?>
<?php $attributes = $__attributesOriginal23a21c0d0f80992980c57ef2802ca540; ?>
<?php unset($__attributesOriginal23a21c0d0f80992980c57ef2802ca540); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal23a21c0d0f80992980c57ef2802ca540)): ?>
<?php $component = $__componentOriginal23a21c0d0f80992980c57ef2802ca540; ?>
<?php unset($__componentOriginal23a21c0d0f80992980c57ef2802ca540); ?>
<?php endif; ?>

</body>

</html>
<?php /**PATH C:\Users\ACER\Documents\PROJEK WEB CSI\KomproCSI\resources\views/layouts/layout2.blade.php ENDPATH**/ ?>