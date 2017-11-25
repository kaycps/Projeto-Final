

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">profile <?php echo e($profile->idprofile); ?></div>
                    <div class="panel-body">

                        <a href="<?php echo e(url('/profile')); ?>" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/profile/' . $profile->idprofile . '/edit')); ?>" title="Edit profile"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="<?php echo e(url('profile' . '/' . $profile->idprofile)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-xs" title="Delete profile" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($profile->idprofile); ?></td>
                                    </tr>
                                    <tr><th> Nome </th><td> <?php echo e($profile->nome); ?> </td></tr><tr><th> RG </th><td> <?php echo e($profile->RG); ?> </td></tr><tr><th> CPF </th><td> <?php echo e($profile->CPF); ?> </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>