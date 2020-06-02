<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="#" class="simple-text logo-mini"><?php echo e(__('')); ?></a>
            <a href="#" class="simple-text logo-normal"><?php echo e(__('Venturi Dashboard')); ?></a>
        </div>
        <ul class="nav">
            <li <?php if($pageSlug == 'dashboard'): ?> class="active " <?php endif; ?>>
                <a href="<?php echo e(route('home')); ?>">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p><?php echo e(__('Dashboard')); ?></p>
                </a>
            </li>

            <li <?php if($pageSlug == 'Run Sheet'): ?> class="active " <?php endif; ?>>
                <a href="<?php echo e(route('runsheet')); ?>">
                    <i class="tim-icons icon-trophy"></i>
                    <p><?php echo e(__('Run Sheet')); ?></p>
                </a>
            </li>

            <li <?php if($pageSlug == 'Setup Sheet'): ?> class="active " <?php endif; ?>>
                <a href="<?php echo e(route('setupsheet')); ?>">
                    <i class="tim-icons icon-settings-gear-63"></i>
                    <p><?php echo e(__('Setup Sheet')); ?></p>
                </a>
            </li>

            <li <?php if($pageSlug == 'Stats Sheet'): ?> class="active " <?php endif; ?>>
                <a href="<?php echo e(route('home')); ?>">
                    <i class="tim-icons icon-chart-pie-36"></i>
                        <p><?php echo e(__('Stats Sheet')); ?></p>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH /home/mvantalon/Projects/venturi-dashboard/resources/views/layouts/navbars/sidebar.blade.php ENDPATH**/ ?>