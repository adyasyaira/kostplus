<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/ubah_profil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css/bootstrap.min.css') }}" >
    <title>Ubah Profil</title>
</head>
<body>
    <div class="card">
        <h5 class="card-header">Data Pribadi</h5>
        <div class="card-body">
            <div class="box">
                <img src="{{ asset('images/1646715544604.jpeg') }}"  alt="">
                <input type="file" name="" id="file" accept="image/*">
                <label class="editFoto" for="file">Edit Foto</label>
            </div>
        </br>
            <form action="" method="post">
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="jenisKel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <label>
                            <input type="radio" name="gender" value="male">
                            Laki-laki
                          </label>
                          <label>
                            <input type="radio" name="gender" value="female">
                            Perempuan
                          </label>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="tglLahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kota" class="col-sm-2 col-form-label">Kota Asal</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nama" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">Status</label>
                    <div class="col-sm-10">
                        <select class="form-select" id="floatingSelectGrid">
                            <option selected></option>
                            <option value="1">Kawin</option>
                            <option value="2">Belum Kawin</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="name" class="col-sm-2 col-form-label">No. Handphone</label>
                    <div class="col-sm-10">
                      <input type="number" class="form-control" id="nama" required>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class=" button-1 d-grid gap-2 d-md-block">
        <button type="button" class="btn btn-secondary" disabled>Simpan</button>
        <button type="button" class="btn btn-outline-secondary" disabled>Batal</button>
      </div>

        <script src="js/bootstrap.min.js"></script>
</body>
</html>