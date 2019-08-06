<?php $__env->startSection('content'); ?>
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
         <a href="<?php echo route('tests.index'); ?>">Test</a>
      </li>
      <li class="breadcrumb-item active">Create</li>
    </ol>
     <div class="container-fluid">
          <div class="animated fadeIn">
                <?php echo $__env->make('coreui-templates::common.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <i class="fa fa-plus-square-o fa-lg"></i>
                                <strong>Create Test</strong>
                            </div>
                            <div class="card-body">
                                <?php echo Form::open(['route' => 'tests.store']); ?>


                                   <?php echo $__env->make('tests.fields', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php echo Form::close(); ?>

                            </div>
                        </div>
                    </div>
                </div>
           </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\gujie-code-king\Desktop\Code\Packages\UZApi\UzMobileApi\resources\views/tests/create.blade.php ENDPATH**/ ?>