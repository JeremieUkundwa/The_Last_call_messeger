<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <div class="pull-right">
                <a class="btn btn-outline-primary" href="<?php echo e(route('audio.create')); ?>"> <i class="fa fa-plus-square"> Add New</i></a>
            </div>
            <div class="col-md-12">
            <table class="table table-striped w-auto border-2 border-primary">
                <thead>
                    <tr>
                    <th>Title</th>
                    <th>Introduction</th>
                    <th class="w-25">Audio</th>
                    <th></th>

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $audios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $audio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($audio->title); ?></td>
                            <td><?php echo e($audio->introduction); ?></td>
                            <td>
                                <audio controls muted src="<?php echo e($audio->audio); ?>" class="w-100"></audio>
                            </td>
                            <td>
                                <div class="list-inline-item">
                                    <a href=" <?php echo e(route('audio.edit', ['audio'=>$audio])); ?>" class="btn btn-outline-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                </div>
                                <div class="list-inline-item">
                                    <form method="post" action=" <?php echo e(route('audio.destroy', ['audio'=>$audio])); ?> ">
                                        <?php echo method_field("DELETE"); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-outline-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremie/Desktop/project/laravel/the_last_call_messeges/resources/views/audio/viewAllFile.blade.php ENDPATH**/ ?>