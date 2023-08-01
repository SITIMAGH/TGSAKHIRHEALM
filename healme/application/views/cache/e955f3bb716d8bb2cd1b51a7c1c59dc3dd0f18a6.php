

<?php $__env->startSection('title', 'Transaksi Voucher'); ?>

<?php $__env->startSection('page_title', 'Transaksi Voucher'); ?>

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-12">
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover text-center" style="white-space: nowrap;"
                        id="datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode Transaksi</th>
                                <th>Nama User</th>
                                <th>Nama Voucher</th>
                                <th>Total</th>
                                <th>Expired At</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($i+1); ?></td>
                                <td>#<?php echo e($item->code); ?></td>
                                <td><?php echo e($item->userName); ?></td>
                                <td><?php echo e($item->vocName); ?></td>
                                <td><?php echo e($item->total); ?></td>
                                <td><?php echo e($item->expired_at); ?></td>
                                <?php switch($item->status):
                                case ("0"): ?>
                                <td>Pending</td>
                                <?php break; ?>
                                <?php case ("1"): ?>
                                <td>Disetujui</td>
                                <?php break; ?>
                                <?php case ("-1"): ?>
                                <td>Dibatalkan</td>
                                <?php break; ?>

                                <?php endswitch; ?>
                                <td>
                                    <a href="<?php echo e(base_url()); ?>transaksi/voucher/detail/<?php echo e($item->trxId); ?>" class="btn btn-sm btn-success"><i
                                            class="fe fe-eye fe-16"></i></a>
                                    <a onclick="return confirm('Apakah anda ingin menghapus data ini?')"
                                        href="<?php echo e(base_url()); ?>transaksi/voucher/delete/<?php echo e($item->trxId); ?>"
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
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\newxampp2\htdocs\healme\application\views/transaksi/voucher/index.blade.php ENDPATH**/ ?>