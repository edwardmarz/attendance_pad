<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Course's List</h2>
            </div>
        </div>
    </div>


    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Course's List</div>
                <div class="card-body">
                    <div class="pull-right mb-2">
                        <a class="btn btn-success" href="<?php echo e(route('admin.courses.create')); ?>"> Create New Course</a>
                    </div>
                    <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Course Code</th>
                            <th>Description</th>
                            <th>Day</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Absent Status</th>
                            <th width="280px">Action</th>
                        </tr>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e(++$i); ?></td>
                            <td><?php echo e($course->name); ?></td>
                            <td><?php echo e($course->kode_matkul); ?></td>
                            <td><?php echo e($course->desc); ?></td>
                            <td><?php echo e($course->day); ?></td>
                            <td><?php echo e($course->start_time); ?></td>
                            <td><?php echo e($course->end_time); ?></td>
                            <td><?php echo e($course->absen_status); ?></td>
                            <td>
                                <form action="<?php echo e(route('admin.courses.destroy',$course->id)); ?>" method="POST">

                                    <a class="btn btn-success" href="<?php echo e(route('admin.courses.show',$course->id)); ?>">Show</a>

                                    <a class="btn btn-primary" href="<?php echo e(route('admin.courses.edit',$course->id)); ?>">Edit</a>

                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    
                    <?php echo $courses->links(); ?>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-right">
                        <div class="form-group">
                            <a class="btn btn-primary" href="<?php echo e(route('admin.dashboard')); ?>"> Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\attendance_pad\resources\views/admin/course/index.blade.php ENDPATH**/ ?>