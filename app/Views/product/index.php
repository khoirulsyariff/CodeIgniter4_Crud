<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Product</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
</head>

<body>

  <div class="container mt-5 mb-5 text-center">
    <h4>CRUD Menggunakan Codeigniter 4</h4>
  </div>
  <div class="container">
    <h4>Data Produk</h4>
    <hr>

    <a href="<?php echo base_url('product/create') ?>" class="btn btn-sm btn-success mt-2">Tambah Data </a>
    <br> <br>

    <?php if (!empty(session()->getFlashdata('success'))) { ?>
      <div class="alert alert-success">
        <?php echo session()->getFlashdata('success'); ?>
      </div>
    <?php } ?>


    <?php if (!empty(session()->getFlashdata('error'))) { ?>
      <div class="alert alert-danger">
        <?php echo session()->getFlashdata('error'); ?>
      </div>
    <?php } ?>
    <div class="table respinsive">
      <table class="table table-bordered table-hovered">
        <thead>
          <tr>
            <th>NO</th>
            <th>Nama Product</th>
            <th>Decsription</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($product as $p => $data) { ?>
            <tr>
              <td><?php echo $p + 1 ?></td>
              <td><?php echo $data['product_name']; ?></td>
              <td><?php echo $data['product_description']; ?></td>
              <td>
                <div class="btn-group">
                  <a href="<?php echo base_url('product/show/' . $data['product_id']) ?>" class="btn btn-sm btn-warning">Detail</a>
                  <a href="<?php echo base_url('product/edit/' . $data['product_id']) ?>" class="btn btn-sm btn-primary">Edit</a>
                  <a href="<?php echo base_url('product/delete/' . $data['product_id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?')">Hapus</a>
                </div>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>