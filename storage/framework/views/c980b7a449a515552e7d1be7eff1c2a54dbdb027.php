<?php $__env->startSection('content-header'); ?>
    <h1>
        <?php echo e($judul); ?>

        <small></small>
    </h1>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


    <div class="col-md-8">
        <a href="karyawan/create">
            <button class="btn-primary">
                Create Karyawan
            </button>
        </a>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table <?php echo e($judul); ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-striped">
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>NIP</th>
                        <th>NAMA</th>
                        <th>ALAMAT</th>
                        <th>JABATAN</th>
                        <th>ACTION</th>
                    </tr>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($d->id); ?></td>
                            <td><?php echo e($d->nip); ?></td>
                            <td><?php echo e($d->nama); ?></td>
                            <td><?php echo e($d->alamat); ?></td>
                            <td><?php echo e($d->jabatan); ?></td>
                            <td>EDIT | DELETE</td>
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

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\project_coursenet - Copy\resources\views/karyawan/home.blade.php ENDPATH**/ ?>