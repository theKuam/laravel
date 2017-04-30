<?php $__env->startSection('title'); ?>
About me
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<p>I'm Hai, I'm PHP Developer and I love you ^_^</p>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('templates.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>