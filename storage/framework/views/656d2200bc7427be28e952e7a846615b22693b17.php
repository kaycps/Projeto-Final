<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
           

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="panel-heading">Processos seletivos</div>
                    <div class="panel-body">
                        <a href="<?php echo e(url('/select-process/create')); ?>" class="btn btn-success btn-sm" title="Add New SelectProcess">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <form method="GET" action="<?php echo e(url('/select-process')); ?>" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search..." value="<?php echo e(request('search')); ?>">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th>N°</th><th>DataInicio</th><th>DataFim</th><th>Descrição</th><th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $selectprocess; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e(isset($loop->iteration) ? $loop->iteration : $item->id); ?></td>
                                        <td><?php echo e($item->dataInicio); ?></td><td><?php echo e($item->dataFim); ?></td><td><?php echo e($item->descrição); ?>

                                        <td>
                                            <a href="<?php echo e(url('/select-process/' . $item->id)); ?>" title="View SelectProcess"><button class="btn btn-info btn-xs"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/select-process/' . $item->id . '/edit')); ?>" title="Edit SelectProcess"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                            <form method="POST" action="<?php echo e(url('/select-process' . '/' . $item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                                <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-xs" title="Delete SelectProcess" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> <?php echo $selectprocess->appends(['search' => Request::get('search')])->render(); ?> </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>