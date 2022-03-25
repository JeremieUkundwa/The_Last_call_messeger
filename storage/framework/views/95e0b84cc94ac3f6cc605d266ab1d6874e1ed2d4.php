<?php $__env->startSection('video-section'); ?>
<div class="video-section-imp">
  <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <div class="video1">
    <video controls width="400px" height="400px" allow-fullscreen>
    <source src="<?php echo e($video->video); ?>" controls />
    </video>
    <h2><?php echo e($video->title); ?></h2>
    <p><?php echo e($video->introduction); ?></p>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremie/Desktop/project/laravel/the_last_call_messeges/resources/views/videos.blade.php ENDPATH**/ ?>