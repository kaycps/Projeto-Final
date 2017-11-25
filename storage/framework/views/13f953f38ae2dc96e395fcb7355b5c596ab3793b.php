<div class="form-group <?php echo e($errors->has('nome') ? 'has-error' : ''); ?>">
    <label for="nome" class="col-md-4 control-label"><?php echo e('Nome'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="nome" type="text" id="nome" value="<?php echo e(isset($profile->nome) ? $profile->nome : ''); ?>" >
        <?php echo $errors->first('nome', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('RG') ? 'has-error' : ''); ?>">
    <label for="RG" class="col-md-4 control-label"><?php echo e('Rg'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="RG" type="text" id="RG" value="<?php echo e(isset($profile->RG) ? $profile->RG : ''); ?>" >
        <?php echo $errors->first('RG', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('CPF') ? 'has-error' : ''); ?>">
    <label for="CPF" class="col-md-4 control-label"><?php echo e('Cpf'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="CPF" type="text" id="CPF" value="<?php echo e(isset($profile->CPF) ? $profile->CPF : ''); ?>" >
        <?php echo $errors->first('CPF', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('DataNascimento') ? 'has-error' : ''); ?>">
    <label for="DataNascimento" class="col-md-4 control-label"><?php echo e('Data de nascimento'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="DataNascimento" type="date" id="DataNascimento" value="<?php echo e(isset($profile->DataNascimento) ? $profile->DataNascimento : ''); ?>" >
        <?php echo $errors->first('DataNascimento', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('Sexo') ? 'has-error' : ''); ?>">
    <label for="Sexo" class="col-md-4 control-label"><?php echo e('Sexo'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="Sexo" type="text" id="Sexo" value="<?php echo e(isset($profile->Sexo) ? $profile->Sexo : ''); ?>" >
        <?php echo $errors->first('Sexo', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('NomePai') ? 'has-error' : ''); ?>">
    <label for="NomePai" class="col-md-4 control-label"><?php echo e('Nome do pai'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="NomePai" type="text" id="NomePai" value="<?php echo e(isset($profile->NomePai) ? $profile->NomePai : ''); ?>" >
        <?php echo $errors->first('NomePai', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('NomeMãe') ? 'has-error' : ''); ?>">
    <label for="NomeMãe" class="col-md-4 control-label"><?php echo e('Nome da mãe'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="NomeMãe" type="text" id="NomeMãe" value="<?php echo e(isset($profile->NomeMãe) ? $profile->NomeMãe : ''); ?>" >
        <?php echo $errors->first('NomeMãe', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('Passaporte') ? 'has-error' : ''); ?>">
    <label for="Passaporte" class="col-md-4 control-label"><?php echo e('Passaporte'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="Passaporte" type="text" id="Passaporte" value="<?php echo e(isset($profile->Passaporte) ? $profile->Passaporte : ''); ?>" >
        <?php echo $errors->first('Passaporte', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('Naturalidade') ? 'has-error' : ''); ?>">
    <label for="Naturalidade" class="col-md-4 control-label"><?php echo e('Naturalidade'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="Naturalidade" type="text" id="Naturalidade" value="<?php echo e(isset($profile->Naturalidade) ? $profile->Naturalidade : ''); ?>" >
        <?php echo $errors->first('Naturalidade', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('Telefone') ? 'has-error' : ''); ?>">
    <label for="Telefone" class="col-md-4 control-label"><?php echo e('Telefone'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="Telefone" type="text" id="Telefone" value="<?php echo e(isset($profile->Telefone) ? $profile->Telefone : ''); ?>" >
        <?php echo $errors->first('Telefone', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('Escolaridade') ? 'has-error' : ''); ?>">
    <label for="Escolaridade" class="col-md-4 control-label"><?php echo e('Escolaridade'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="Escolaridade" type="text" id="Escolaridade" value="<?php echo e(isset($profile->Escolaridade) ? $profile->Escolaridade : ''); ?>" >
        <?php echo $errors->first('Escolaridade', '<p class="help-block">:message</p>'); ?>

    </div>
</div><div class="form-group <?php echo e($errors->has('EmissorRG') ? 'has-error' : ''); ?>">
    <label for="EmissorRG" class="col-md-4 control-label"><?php echo e('Emissor rg'); ?></label>
    <div class="col-md-6">
        <input class="form-control" name="EmissorRG" type="text" id="EmissorRG" value="<?php echo e(isset($profile->EmissorRG) ? $profile->EmissorRG : ''); ?>" >
        <?php echo $errors->first('EmissorRG', '<p class="help-block">:message</p>'); ?>

    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="<?php echo e(isset($submitButtonText) ? $submitButtonText : 'Create'); ?>">
    </div>
</div>
