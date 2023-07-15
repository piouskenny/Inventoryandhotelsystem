    


<?php $__env->startSection('content'); ?>
    <div class="ui-container">
        <div class="row">
                <div class="col-md-4">
                    <section class="panel">
                        <header class="panel-heading">
                            <?php echo e($title); ?>

                        </header>
                        <div class="panel-body">
                            <form id="validate" action="<?php echo e(route('customer_table.update',$customer_table->id)); ?>" enctype="multipart/form-data" method="post">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('PUT')); ?>

                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" value="<?php echo e(old('name', $customer_table->name)); ?>" required  class="form-control" name="name" placeholder="Product Category"/>
                                    <?php if($errors->has('name')): ?>
                                        <label for="name-error" class="error"
                                               style="display: inline-block;"><?php echo e($errors->first('name')); ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="form-group">
                                    <label>Department</label>
                                    <select class="form-control" name="department" value="<?php echo e(old('department', )); ?>">
                                        <option>SELECT DEPARMTMENT</option>
                                        <option value="kitchen">KITCHEN</option>
                                        <option value="bar">BAR</option>
                                        <option value="receptionist">RECEPTIONIST</option>
                                        <option value="pamii">PAMII</option>
                                        <option value="morris_cafee">MORRIS CAFEE</option>
                                    </select>
                                    <?php if($errors->has('name')): ?>
                                        <label for="name-error" class="error"
                                            style="display: inline-block;"><?php echo e($errors->first('name')); ?></label>
                                    <?php endif; ?>
                                </div>
                                <div class="pull-left">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Update</button>
                                </div>
                                <br/> <br/>
                            </form>
                        </div>
                    </section>
                </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TokenSoft\Inventoryandhotelsystem\resources\views/settings/customer_table/edit.blade.php ENDPATH**/ ?>