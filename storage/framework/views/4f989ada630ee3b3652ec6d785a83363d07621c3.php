<?php $__env->startSection('title', 'Lecture Dashboard'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Lecture's Dashboard</div>

                    <div class="card-body">
                        <?php if(session('status')): ?>
                            <div class="alert alert-success" role="alert">
                                <?php echo e(session('status')); ?>

                            </div>
                        <?php endif; ?>

                        <p>Welcome Lecture : <strong><?php echo e(Auth::user()->name); ?></strong></p>
                        <p>Your joined  : <?php echo e(Auth::user()->created_at->diffForHumans()); ?> </p>
                        <table class="table table-bordered">
                            <tr>
                                <th>No</th>
                                <th>Nama Kelas</th>
                                <th>Mata Kuliah</th>
                                <th width="280px">Action</th>
                            </tr>
                            <?php $__currentLoopData = $errors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e(++$i); ?></td>
                                <td><?php echo e($user->name); ?></td>
                                <td><?php echo e($user->mata_kuliah); ?></td>
                    
                                <td>
                                    <form action="<?php echo e(route('admin.users.destroy',$user->id)); ?>" method="POST">
    
                                        <a class="btn btn-success" href="<?php echo e(route('admin.users.show',$user->id)); ?>">Show</a>
    
                                        <a class="btn btn-primary" href="<?php echo e(route('admin.users.edit',$user->id)); ?>">Edit</a>
    
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
    
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('lecture.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\attendance_pad\resources\views/lecture/dashboard.blade.php ENDPATH**/ ?>