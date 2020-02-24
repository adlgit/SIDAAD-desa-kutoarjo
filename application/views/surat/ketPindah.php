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
        <select class="form-control" name="jkel" id="jkel">
          <option value="" disabled selected>Jenis Kelamin</option>
          <option value="Laki-laki">Laki - laki</option>
          <option value="Perempuan">Perempuan</option>
        </select>
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
        <select class="form-control" name="status" id="status">
          <option value="" disabled selected>Status</option>
          <option value="Kawin">Kawin</option>
          <option value="Belum Kawin">Belum Kawin</option>
        </select>
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId" placeholder="pekerjaan">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="no_ktp" id="no_ktp" aria-describedby="helpId" placeholder="Nomor KTP">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="alamat_asal" id="alamat" aria-describedby="helpId" placeholder="Alamat Asal">
      </div>
      <br>
      <h3>Alamat Tujuan</h3>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="desa_tujuan" id="alamat" aria-describedby="helpId" placeholder="Kelurahan / Desa">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="kec_tujuan" id="alamat" aria-describedby="helpId" placeholder="Kecamatan">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="kab_tujuan" id="alamat" aria-describedby="helpId" placeholder=Kabupaten">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="prov_tujuan" id="alamat" aria-describedby="helpId" placeholder="Provinsi">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="tgl_pindah" id="alamat" aria-describedby="helpId" placeholder="Tanggal Pindah">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="alasan" id="alamat" aria-describedby="helpId" placeholder="Alasan Pindah">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="pengikut" id="alamat" aria-describedby="helpId" placeholder="pengikut">
      </div>

      <button type="submit" class="btn btn-primary">Buat Surat Keterangan Tidak Mampu</button>
    </form>
  </div>
</body>

</html>