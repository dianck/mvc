
<div class="container mt-3">
    <div class="row">
        <div class="col-10">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
                    Tambah Data
            </button>
            <br><br>
            <h3>Daftar Mahasiswa</3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs){ ?>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                      <?= $mhs['nama']?>
                      <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge text-bg-primary">detail</a>
                  </li>
                
                <?php } ?>
            </ul>
        </div>
    </div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="judulModal">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="nama_panggilan" class="form-label">Nama Panggilan</label>
                <input type="text" class="form-control" id="nama_panggilan" name="nama_panggilan">
            </div>
            <div class="mb-3">
                <label for="tempat_kerja" class="form-label">Tempat Kerja</label>
                <input type="text" class="form-control" id="tempat_kerja" name="tempat_kerja">
            </div>
      </div>
      <div class="form-group">
        <label for="kost">Kost</label>
        <select class="form-select form-select-sm" id="kost" name="kost" aria-label="Kost">
            <option selected>Lokasi Kost</option>
            <option value="1">Kasuari</option>
            <option value="2">Kedasih</option>
            <option value="3">Graha</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Tambah Data</button>
        
        </form>
    </div>
    </div>
  </div>
</div>