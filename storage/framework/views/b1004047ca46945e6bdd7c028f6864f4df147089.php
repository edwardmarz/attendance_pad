<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Matakuliah</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <p>Welcome Student : <strong><?php echo e(Auth::user()->name); ?></strong></p>
                    <p>Your joined  : <?php echo e(Auth::user()->created_at->diffForHumans()); ?> </p>
                    
                    <table>
                        <tr>
                            <td>
                                <?php echo e(Auth::user()->created_at->diffForHumans()); ?>

                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\attendance_pad\resources\views/home.blade.php ENDPATH**/ ?>