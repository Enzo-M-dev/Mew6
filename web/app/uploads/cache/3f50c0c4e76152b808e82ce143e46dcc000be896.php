<?php $__env->startSection('content'); ?>
  <?php echo $__env->make('partials.page-header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <?php echo 'Hello !'; ?>

  <p>Data from filter : <?php echo e($message); ?></p>
  <p>Data from FrontPage Controller : <?php echo e($hello_world); ?></p>
  <p>Data from App Controller : <?php echo e(App::getHeaderLogo()); ?></p>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>