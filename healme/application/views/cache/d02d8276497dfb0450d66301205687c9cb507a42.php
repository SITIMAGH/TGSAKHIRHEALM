

<?php $__env->startSection('title', 'Dokter'); ?>

<?php $__env->startSection('page_title', 'Dokter'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-header">
                <a href="<?php echo e(base_url()); ?>dokter/add" class="btn btn-sm btn-primary shadow"><i
                        class="fe fe-plus fe-16 mr-2"></i> Add Data</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover text-center" style="white-space: nowrap;"
                        id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>No. Telp</th>
                                <th>Spesialis</th>
                                <th>Foto</th>
                                <th>Harga</th>
                                <th>Umur</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i+1); ?></td>
                                <td><?php echo e($item->name); ?></td>
                                <td><?php echo e($item->phone); ?></td>
                                <td><?php echo e($item->title); ?></td>
                                <td><img src="<?php echo e(base_url() . 'files/' . $item->image); ?>" width="50" alt=""></td>
                                <td>Rp <?php echo e(number_format($item->price)); ?></td>
                                <td><?php echo e(number_format($item->age)); ?></td>
                                <td>
                                    <a href="<?php echo e(base_url()); ?>dokter/edit/<?php echo e($item->id); ?>" class="btn btn-sm btn-info"><i
                                            class="fe fe-edit fe-16"></i></a>
                                    <a onclick="return confirm('Apakah anda ingin menghapus data ini?')"
                                        href="<?php echo e(base_url()); ?>dokter/delete/<?php echo e($item->id); ?>"
                                        class="btn btn-sm btn-danger"><i class="fe fe-trash fe-16"></i></a>
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\healme\application\views/dokter/index.blade.php ENDPATH**/ ?>