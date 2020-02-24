<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Surat Keterangan Tidak Mampu</title>
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');
                                ?>">
</head>

<body>
  <div class="container col-sm-8">
    <h1 class="text-center">Form Surat Keterangan Tidak Mampu</h1>
    <form action="<?= base_url('almaker/ketTidakMampu/index.php') ?>" method="post" class="mt-4">
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Nama Lengkap">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="ttl" id="ttl" aria-describedby="helpId" placeholder="Tempat, Tanggal Lahir">
        <small>cth: Kutoarjo, 13 April 1995</small>
      </div>

      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="kewarganegaraan" id="kewarganegaraan" aria-describedby="helpId" placeholder="Kewarganegaraan">
      </div>

      <div class="form-group col-sm-8">
        <select class="form-control" name="agama" id="agama">
          <option value="" disabled selected>Agama</option>
          <option value="Islam">Islam</option>
          <option value="Kristen">Kristen</option>
          <option value="Protestan">Protestan</option>
          <option value="Hindu">Hindu</option>
          <option value="Budha">Budha</option>
          <option value="Konghucu">Konghucu</option>
        </select>
      </div>

      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId" placeholder="pekerjaan">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="alamat" id="alamat" aria-describedby="helpId" placeholder="Alamat">
      </div>
      <div class="form-group col-sm-8">
        <select class="form-control" name="tujuan" id="tujuan">
          <option value="" disabled selected>Tujuan Pembuatan Surat</option>
          <option value="PEMBUATAN/PENGAKTIFAN KARTU KESEHATAN BPJS">PEMBUATAN/PENGAKTIFAN KARTU KESEHATAN BPJS</option>
          <option value="PEMBUATAN/PENGAKTIFAN KARTU INDONESIA PINTAR">PEMBUATAN/PENGAKTIFAN KARTU INDONESIA PINTAR</option>
          <option value="PENDAFTARAN BEASISWA BIDIKMISI">PENDAFTARAN BEASISWA BIDIKMISI</option>
          <option value="PENDAFTARAN SEKOLAH">PENDAFTARAN SEKOLAH</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Buat Surat Keterangan Tidak Mampu</button>
    </form>
  </div>
</body>

</html>