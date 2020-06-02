<?php $__env->startSection('content'); ?>
    <div class="col-md-10 text-center ml-auto mr-auto">
    </div>
    <br>
    <div class="container-fluid">
    <div class="text-center">
        <img src="<?php echo e(asset('black')); ?>/img/card-primary.png"  class="center-block" alt="">
    </div>
    </div>
    <br>
    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
        <form class="form" method="post" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>

            <div class="card card-login card-white">
               <br>
                        <h3 class="mb-5 text-center text-dark">Connexion</h3>
                <div class="card-body">
                    <div class="input-group<?php echo e($errors->has('email') ? ' has-danger' : ''); ?>">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-email-85"></i>
                            </div>
                        </div>
                        <input type="email" name="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" placeholder="<?php echo e(__('Email')); ?>">
                        <?php echo $__env->make('alerts.feedback', ['field' => 'email'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                    <div class="input-group<?php echo e($errors->has('password') ? ' has-danger' : ''); ?>">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="tim-icons icon-lock-circle"></i>
                            </div>
                        </div>
                        <input type="password" placeholder="<?php echo e(__('Password')); ?>" name="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" autocomplete="on">
                        <?php echo $__env->make('alerts.feedback', ['field' => 'password'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" href="" class="btn btn-primary btn-lg btn-block mb-3"><?php echo e(__('Se connecter')); ?></button>
                    <div class="pull-left">
                    </div>
                    <div class="pull-right">
                        <h6>
                            <a href="<?php echo e(route('password.request')); ?>" class="link footer-link"><?php echo e(__('Mot de passe oublié ?')); ?></a>
                        </h6>
                    </div>
                </div>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', ['class' => 'login-page', 'page' => __('Page de connexion'), 'contentClass' => 'login-page'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mvantalon/Projects/venturi-dashboard/resources/views/auth/login.blade.php ENDPATH**/ ?>