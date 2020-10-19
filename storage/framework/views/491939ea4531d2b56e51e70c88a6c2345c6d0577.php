<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row row-cols-1 row-cols-md-3">
                    <?php $__currentLoopData = $quests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quest): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a class="" href="/quest/<?php echo e($quest->id); ?>" role="button">
                            <div class="col mb-4">
                                <div class="card bg-dark text-white">
                                    <img src="<?php echo e(asset('/images') . $quest->foto); ?>" class="card-img" alt="Фото квеста">
                                    <div class="card-img-overlay">
                                        <h5 class="card-title"><?php echo e($quest->name); ?></h5>
                                        <!--p class="card-text"><?php echo e($quest->disc); ?></p-->
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\htdocs\ilocked\resources\views/home.blade.php ENDPATH**/ ?>