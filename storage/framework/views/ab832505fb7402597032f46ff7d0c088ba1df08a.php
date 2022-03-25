<?php $__env->startSection('content'); ?>
<div class="container">
        <div class="row justify-content-center">
            <a class="btn btn-primary" href="<?php echo e(route('sermon.create')); ?>"> Add new </a>
            <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Introduction</th>
                    <th scope="col">Type</th>
                    <th scope="col"></th>

                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $sermonies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sermon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($sermon->title); ?></td>
                            <td><?php echo e($sermon->introduction); ?></td>
                            <td><?php echo e($sermon->type); ?></td>
                            <td>
                            <ul class="list-inline m-0">
                                <li class="list-inline-item">
                                    <a href=" <?php echo e(route('sermon.edit', ['sermon'=>$sermon])); ?>" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <form method="post" action=" <?php echo e(route('sermon.destroy', ['sermon'=>$sermon])); ?> ">
                                        <?php echo method_field("DELETE"); ?>
                                        <?php echo csrf_field(); ?>
                                        <button type="submit" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                    </form>
                                </li>
                            </ul>
                            </td>
                            
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                </table>
        </div>
    </div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jeremie/Desktop/project/laravel/the_last_call_messeges/resources/views/sermony/viewAllFile.blade.php ENDPATH**/ ?>