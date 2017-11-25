<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">SelectProcess <?php echo e($selectprocess->id); ?></div>
                    <div class="panel-body">

                        <a href="<?php echo e(url('/select-process')); ?>" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="<?php echo e(url('/select-process/' . $selectprocess->id . '/edit')); ?>" title="Edit SelectProcess"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="<?php echo e(url('selectprocess' . '/' . $selectprocess->id)); ?>" accept-charset="UTF-8" style="display:inline">
                            <?php echo e(method_field('DELETE')); ?>

                            <?php echo e(csrf_field()); ?>

                            <button type="submit" class="btn btn-danger btn-xs" title="Delete SelectProcess" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td><?php echo e($selectprocess->id); ?></td>
                                    </tr>
                                    <tr><th> DataInicio </th><td> <?php echo e($selectprocess->dataInicio); ?> </td></tr><tr><th> DataFim </th><td> <?php echo e($selectprocess->dataFim); ?> </td></tr><tr><th> Ativo </th><td> <?php echo e($selectprocess->ativo); ?> </td></tr><tr><th> Descrição </th><td> <?php echo e($selectprocess->descrição); ?> </td></tr>
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