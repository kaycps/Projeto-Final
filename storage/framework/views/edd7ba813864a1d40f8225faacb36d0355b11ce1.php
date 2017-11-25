<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Seja Bem Vindo</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <div>
                        <h3>Editais Abertos:</h3>
                        <br>
                        
                        
                        <a href="<?php echo e(url('select-process')); ?>" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Saiba Mais</a>
                    </div>
                   
                     
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>