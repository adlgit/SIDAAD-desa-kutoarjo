<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Surat Izin Keramaian</title>
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');
                                ?>">
</head>

<body>
  <div class="container col-sm-8">
    <h1 class="text-center">Form Surat Izin Keramaian</h1>
    <form action="<?= base_url('almaker/izinKeramaian/index.php') ?>" method="post" class="mt-4">

      <h2 class="font-weight-bold mt-5">Data Pemohon</h2>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="Nama Lengkap">
      </div>

      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="umur" id="" aria-describedby="helpId" placeholder="Umur">
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
        <input type="text" class="form-control" name="tembusan" id="tembusan" aria-describedby="helpId" placeholder="Tembusan Surat">
      </div>

      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="tempat_tembusan" id="tempat_tembusan" aria-describedby="helpId" placeholder="Tempat Tembusan Surat">
      </div>

      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="acara" id="acara" aria-describedby="helpId" placeholder="Untuk Acara">
      </div>

      <h2 class="font-weight-bold mt-5">Detail Acara</h2>

      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="tanggal" id="" aria-describedby="helpId" placeholder="Hari, Tanggal">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="waktu" id="" aria-describedby="helpId" placeholder="Waktu">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="tempat" id="tempat" aria-describedby="helpId" placeholder="Tempat Acara">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="hiburan" id="hiburan" aria-describedby="helpId" placeholder="Hiburan">
      </div>
  
      <button type="submit" class="btn btn-primary">Buat Surat Izin Keramaian</button>
    </form>
  </div>
</body>

</html>