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
                <form role="form" action="/employee" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="id" value="<?php echo e($data->id); ?>">
                        </div>

                        
                        
                        
                        
                        <div class="form-group">
                            <label>Position</label>
                            <select class="form-control" name="position_id">
                                <option value="<?php echo e($data->position_id); ?>">
                                    <?php echo e($data->position->name); ?>

                                </option>
                                <?php $__currentLoopData = $position; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($data->position_id != $post->id): ?>
                                        <option value="<?php echo e($post->id); ?>">
                                            <?php echo e($post->name); ?>

                                        </option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>NIP</label>
                            <input type="text" class="form-control" name="nip" value="<?php echo e($data->nip); ?>"
                                   placeholder="Masukkan NIP">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" value="<?php echo e($data->name); ?>" name="name"
                                   placeholder="Masukkan Name">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" value="<?php echo e($data->address); ?>" name="address"
                                   placeholder="Masukkan Address">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" value="<?php echo e($data->email); ?>" name="email"
                                   placeholder="Masukkan Email">
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


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\project_coursenet - Utama\resources\views/employee/edit.blade.php ENDPATH**/ ?>