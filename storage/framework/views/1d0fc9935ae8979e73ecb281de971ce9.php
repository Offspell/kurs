<?php $__env->startSection('content'); ?>
<div class="container mx-auto ">
<table class="w-full">
  <thead>
    <tr>
      <th class="text-center">#</th>
      <th class="text-center">Email</th>
      <th class="text-center">Imię</th>
      <th class="text-center">Nazwisko</th>
      <th class="text-center">Numer telefonu</th>
      <th class="text-center">Akcje</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th class="text-center"><?php echo e($user->id); ?></th>
      <td class="text-center"><?php echo e($user->email); ?></td>
      <td class="text-center"><?php echo e($user->name); ?></td>
      <td class="text-center"><?php echo e($user->surname); ?></td>
      <td class="text-center"><?php echo e($user->phone_number); ?></td>
      <td class="text-center">
        <button class="btn btn-danger btn-sm delete" data-id="<?php echo e($user->id); ?>">
        X
        </button>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php echo e($users->links()); ?>

</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
  $(function() {
      $('.delete').click(function() {
        $.ajax({
            method: "DELETE",
            url: "http://kurs.local/users/" + $(this).data("id"),
            <!-- data: { id: $(this).data("id") } -->
        })
        .done(function(response) {

        })
        .fail(function(response) {
            alert("ERROR");
        });
      });
  });
<?php $__env->stopSection(); ?>
  
  
  
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/kurs/resources/views/users/index.blade.php ENDPATH**/ ?>