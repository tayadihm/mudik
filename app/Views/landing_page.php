<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/vendor/datatables/dataTables.bootstrap4.min.css') ?> " rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Mudik Gas</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" 
            aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-lable="Toggle Navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a href="#" class="navbar-brand">blabla</a>
            <ul class="navbar nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a href="#" class="nav-link">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Konfirmasi Pemesanan</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">Selamat Datang</h1>
            <div class="row">
                <div class="col-md-8">
                    <p class="lead">Selamat datang di web mudik gratis</p>
                </div>
                <div class="col-md-4">
                    <form action="" method="POST">
                    <div class="form-group">
                        <label for="jenis_transportasi">Jenis Transportasi</label>
                        <select name="jenis_transportasi" id="jenis_transportasi" class="form-control">
                            <option value=""></option>
                        </select>
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
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>

<?php $this->section('scripts')?>
<!-- Page level plugins -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-- Page level custom scripts -->
<script>
    // Call the dataTables jQuery plugin
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
</script>
<?php $this->endSection()?>