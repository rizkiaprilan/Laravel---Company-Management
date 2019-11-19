<?php $__env->startSection('content-header'); ?>
    <h1>
        <?php echo e($judul); ?>

        <small></small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> <?php echo e($judul); ?></a></li>
        <li><a href="#">Create</a></li>
    </ol>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo e($judul); ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="/inventory" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                            <input type="hidden" name="id_archive" value="<?php echo e($data->archive->id); ?>">
                        </div>


                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="name" value="<?php echo e($data->name); ?>" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" value="<?php echo e($data->description); ?>" name="description" placeholder="Masukkan description">
                        </div>
                        <div class="form-group">
                            <label>Archive Type</label>
                            <input type="text" class="form-control" value="<?php echo e($data->archive->name); ?>" name="archive_name" placeholder="Masukkan Archive Nama">
                        </div>
                        <div class="form-group">
                            <label>Archive Description</label>
                            <input type="text" class="form-control" value="<?php echo e($data->archive->description); ?>" name="archive_description" placeholder="Masukkan Archive Description">
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.box -->
            <div class="col-md-4">
            </div>
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\project_coursenet - Utama\resources\views/inventory/edit.blade.php ENDPATH**/ ?>