<?php $__env->startSection('title', 'Admin Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin's Dashboard</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <p>Welcome Admin : <strong><?php echo e(Auth::user()->name); ?></strong></p>
                        <p>Your joined  : <?php echo e(Auth::user()->created_at->diffForHumans()); ?> </p>
                        
                        <a href="<?php echo e(route('admin.lectures.index')); ?>">Lecture</a>
                        &nbsp
                        |
                        &nbsp
                        <a href="<?php echo e(route('admin.users.index')); ?>">Student</a>
                        &nbsp
                        |
                        &nbsp
                        <a href="<?php echo e(route('admin.grades.index')); ?>">Grade</a>
                        &nbsp
                        |
                        &nbsp
                        <a href="<?php echo e(route('admin.courses.index')); ?>">Course</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\attendance_pad\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>