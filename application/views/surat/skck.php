<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Form Surat Izin Usaha</title>
  <link rel="stylesheet" href="<?= base_url('assets/bootstrap/css/bootstrap.min.css');
                                ?>">
</head>

<body>
  <div class="container col-sm-8">
    <h1 class="text-center">Form Surat Keterangan Catatan Kepolisian</h1>
    <form action="<?= base_url('almaker/skck/index.php') ?>" method="post" class="mt-4">

      <h2 class="font-weight-bold mt-5">Data Pemohon</h2>
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
        <select class="form-control" name="pendidikan" id="pendidikan">
          <option value="" disabled selected>Pendidikan Terakhir</option>
          <option value="SD">SD</option>
          <option value="SMP/SLTP">SMP/SLTP</option>
          <option value="SMA/SLTA">SMA/SLTA</option>
          <option value="S1">S1</option>
          <option value="S2">S2</option>
          <option value="S3">S3</option>
        </select>
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="pekerjaan" id="pekerjaan" aria-describedby="helpId" placeholder="pekerjaan">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="no_ktp" id="no_ktp" aria-describedby="helpId" placeholder="Nomor KTP">
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
        <input type="text" class="form-control" name="keperluan" id="keperluan" aria-describedby="helpId" placeholder="Untuk keperluan">
      </div>

      <h2 class="font-weight-bold mt-5">Data Ayah</h2>

      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="nama_ayah" id="" aria-describedby="helpId" placeholder="Nama Lengkap">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="umur_ayah" id="" aria-describedby="helpId" placeholder="Umur">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="pekerjaan_ayah" id="pekerjaan" aria-describedby="helpId" placeholder="Pekerjaan">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="kewarganegaraan_ayah" id="kewarganegaraan" aria-describedby="helpId" placeholder="Kewarganegaraan">
      </div>
      <div class="form-group col-sm-8">
        <select class="form-control" name="agama_ayah" id="agama">
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
        <input type="text" class="form-control" name="orpol_ayah" id="orpol" aria-describedby="helpId" placeholder="Orpol/Ormas">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="alamat_ayah" id="alamat" aria-describedby="helpId" placeholder="Alamat">
      </div>

      <h2 class="font-weight-bold mt-5">Data Ibu</h2>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="nama_ibu" id="" aria-describedby="helpId" placeholder="Nama Lengkap">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="umur_ibu" id="" aria-describedby="helpId" placeholder="Umur">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="pekerjaan_ibu" id="pekerjaan" aria-describedby="helpId" placeholder="Pekerjaan">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="kewarganegaraan_ibu" id="kewarganegaraan" aria-describedby="helpId" placeholder="Kewarganegaraan">
      </div>
      <div class="form-group col-sm-8">
        <select class="form-control" name="agama_ibu" id="agama">
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
        <input type="text" class="form-control" name="orpol_ibu" id="orpol" aria-describedby="helpId" placeholder="Orpol/Ormas">
      </div>
      <div class="form-group col-sm-8">
        <input type="text" class="form-control" name="alamat_ibu" id="alamat" aria-describedby="helpId" placeholder="Alamat">
      </div>

      <button type="submit" class="btn btn-primary">Buat SKCK</button>
    </form>
  </div>
</body>

</html>