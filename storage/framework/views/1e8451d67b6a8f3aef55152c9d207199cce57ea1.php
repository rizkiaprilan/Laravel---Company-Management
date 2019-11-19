<?php $__env->startSection('content-header'); ?>
    <h1>
        <?php echo e($judul); ?>

        <small></small>
    </h1>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-md-8">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Pengguna <?php echo e($data->name); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>EMPLOYEE NAME</th>
                        <th>DESCRIPTION</th>
                        <th>DATE</th>
                    </tr>
                    <?php $__currentLoopData = $data->employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td>#</td>
                            <td><?php echo e($d->name); ?></td>
                            <td><?php echo e($d->description); ?></td>
                            <td><?php echo e($d->created_at); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    <div class="col-md-4">

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\project_coursenet - Utama\resources\views/inventory/show.blade.php ENDPATH**/ ?>