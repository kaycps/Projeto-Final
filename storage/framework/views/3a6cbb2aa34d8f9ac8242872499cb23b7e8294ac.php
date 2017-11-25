<div class="form-group <?php echo e($errors->has('dataInicio') ? 'has-error' : ''); ?>">
    <label for="dataInicio" class="col-md-4 control-label"><?php echo e('Datainicio'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="dataInicio" type="datetime-local" id="dataInicio" value="<?php echo e(isset($selectprocess->dataInicio) ? $selectprocess->dataInicio : ''); ?>" >
        <?php echo $errors->first('dataInicio', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('dataFim') ? 'has-error' : ''); ?>">
    <label for="dataFim" class="col-md-4 control-label"><?php echo e('Datafim'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="dataFim" type="datetime-local" id="dataFim" value="<?php echo e(isset($selectprocess->dataFim) ? $selectprocess->dataFim : ''); ?>" >
        <?php echo $errors->first('dataFim', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('ativo') ? 'has-error' : ''); ?>">
    <label for="ativo" class="col-md-4 control-label"><?php echo e('Ativo'); ?></label>
    <div class="col-md-6">
        <div class="radio">
    
</div>
<div class="radio">
    
</div>
        <?php echo $errors->first('ativo', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('nome') ? 'has-error' : ''); ?>">
    <label for="nome" class="col-md-4 control-label"><?php echo e('Nome'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="nome" type="text" id="nome" value="<?php echo e(isset($selectprocess->nome) ? $selectprocess->nome : ''); ?>" >
        <?php echo $errors->first('nome', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('descrição') ? 'has-error' : ''); ?>">
    <label for="descrição" class="col-md-4 control-label"><?php echo e('Descrição'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="descrição" type="text" id="descrição" value="<?php echo e(isset($selectprocess->descrição) ? $selectprocess->descrição : ''); ?>" >
        <?php echo $errors->first('descrição', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="<?php echo e(isset($submitButtonText) ? $submitButtonText : 'Create'); ?>">
    </div>
</div>
