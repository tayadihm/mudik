<?= $this->extend('layouts/admin') ?>
<?php $this->section('styles') ?>
<!-- Custom styles for this page -->
<link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?> " rel="stylesheet">
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Transportasi</h1>
    <?php
        if(session()->getFlashData('success')){
        ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <?php
        }
        ?>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
            Tambah Transportasi
            </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Jenis Transportasi</th>
                            <th>Asal</th>
                            <th>Tujuan</th>
                            <th>Jadwal</th>
                            <th>Slot</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($transport as $key => $trans) : ?>
                        <tr>
                            <td><?= ++$key ?></td>
                            <td><?= $trans['jenis_transportasi'] ?></td>
                            <td><?= $trans['rute_awal'] ?></td>
                            <td><?= $trans['rute_akhir'] ?></td>
                            <td><?= $trans['jadwal'] ?></td>
                            <td><?= $trans['slot'] ?></td>
                            <td>
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#editModal-<?= $trans['id'] ?>">Edit</button>
                                <a href="<?= base_url('transportasi/delete/'.$trans['id']) ?>" class="btn btn-danger" onclick="return confirm('Are you sure ?')">Delete</a>
                            </td>
                        </tr>

                        <!-- Edit Transportasi Modal -->
                        <div class="modal fade" id="editModal-<?= $trans['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Transportasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('transportasi/edit/'.$trans['id']) ?>" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="name">Jenis Transportasi</label>
                                                <input type="text" name="jenis_transportasi" class="form-control" id="jenis_transportasi" value="<?= $trans['jenis_transportasi'] ?>" placeholder="Jenis Transportasi" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="rute_awal">Asal</label>
                                                <input type="text" name="rute_awal" class="form-control" id="rute_awal" value="<?= $trans['rute_awal'] ?>" placeholder="Asal" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="rute_akhir">Tujuan</label>
                                                <input type="text" name="rute_akhir" class="form-control" id="rute_akhir" value="<?= $trans['rute_akhir'] ?>" placeholder="Tujuan" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="jadwal">Jadwal</label>
                                                <input type="date" name="jadwal" class="form-control" id="jadwal" value="<?= $trans['jadwal'] ?>" placeholder="Jadwal" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="slot">Slot</label>
                                                <input type="number" name="slot" class="form-control" id="slot" value="<?= $trans['slot'] ?>" placeholder="Slot" required>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Add Transportasi Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Transportasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('transportasi') ?>" method="post">
            <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="jenis_transportasi">Jenis Transportasi</label>
                        <input type="text" name="jenis_transportasi" class="form-control" id="jenis_transportasi" placeholder="Jenis Transportasi" required>
                    </div>
                    <div class="form-group">
                        <label for="rute_awal">Asal</label>
                        <input type="text" name="rute_awal" class="form-control" id="rute_awal" placeholder="Asal" required>
                    </div>
                    <div class="form-group">
                        <label for="rute_akhir">Tujuan</label>
                        <input type="text" name="rute_akhir" class="form-control" id="rute_akhir" placeholder="Tujuan" required>
                    </div>
                    <div class="form-group">
                        <label for="jadwal">Jadwal</label>
                        <input type="date" name="jadwal" class="form-control" id="jadwal" placeholder="Jadwal" required>
                    </div>
                    <div class="form-group">
                        <label for="slot">Slot</label>
                        <input type="number" name="slot" class="form-control" id="slot" placeholder="Slot" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection() ?>
<?php $this->section('scripts')?>
<!-- Page level plugins -->
<script src="<?= base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
<!-- Page level custom scripts -->
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
</script>
<?php $this->endSection()?>