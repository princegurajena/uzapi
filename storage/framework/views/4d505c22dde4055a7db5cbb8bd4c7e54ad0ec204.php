<!-- Title Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('title', 'Title:'); ?>

    <?php echo Form::text('title', null, ['class' => 'form-control']); ?>

</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    <?php echo Form::label('body', 'Body:'); ?>

    <?php echo Form::textarea('body', null, ['class' => 'form-control']); ?>

</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <?php echo Form::label('email', 'Email:'); ?>

    <?php echo Form::email('email', null, ['class' => 'form-control']); ?>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <?php echo Form::submit('Save', ['class' => 'btn btn-primary']); ?>

    <a href="<?php echo route('tests.index'); ?>" class="btn btn-default">Cancel</a>
</div>
<?php /**PATH C:\Users\gujie-code-king\Desktop\Code\Packages\UZApi\UzMobileApi\resources\views/tests/fields.blade.php ENDPATH**/ ?>