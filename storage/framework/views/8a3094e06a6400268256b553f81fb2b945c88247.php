<?php $__env->startSection('content'); ?>
<style>
    select.custom-select {
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-3">
                        <select id="season" class="bg-light text-dark browser-default custom-select season">
                            <option class="text-dark" selected>Select Season</option>
                            <?php $__currentLoopData = $seasons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $season): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option class="text-dark" value=<?php echo e($season->Sesaon_ID); ?>><?php echo e($season->Season); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select id="event" class="bg-light text-dark browser-default custom-select">
                            <option selected>Select Event</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select id="driver" class="bg-light text-dark browser-default custom-select">
                            <option selected>Select Driver</option>
                            <option class="text-dark" value=11>Massa</option>
                            <option class="text-dark" value=20>Mortara</option>
                            <option class="text-dark" value=9>Nick</option>
                            <option class="text-dark" value=4>Stoffel</option>

                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select id="session" class="bg-light text-dark browser-default custom-select">
                            <option selected>Select Session</option>
                        </select>
                    </div>
                    <div id="runsheets" class="card card-nav-tabs"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('js'); ?>
    <script src="<?php echo e(asset('black')); ?>/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', ['pageSlug' => 'home'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mvantalon/Projects/venturi-dashboard/resources/views/runsheet.blade.php ENDPATH**/ ?>