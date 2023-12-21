
<div class="container mt-3">
    <div class="row">
      <div class="col-lg-6">
        <?php flasher::flash(); ?>
      </div>
    </div>
    
    <div class="row mb-3">
      <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                    Tambah Data
            </button>      
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Cari Penghuni...." name="keyword" id="keyword" autocomplete="off">
              <button class="btn btn-primary" type="submit" id="tombol_cari">Cari</button>
            </div>
        </form>
      </div>
    </div>


    <div class="row">
        <div class="col-10">

            <h3>Daftar Mahasiswa</3>
            <ul class="list-group">
                <?php foreach( $data['mhs'] as $mhs){ ?>
                  <li class="list-group-item d-flex justify-content-between align-items-center">
                      <?= $mhs['nama']?>
                      <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary float-right ml-1">Detail</a>
                      <a href="<?= BASEURL; ?>/mahasiswa/edit/<?= $mhs['id']; ?>" class="badge bg-success float-right ml-1 tampilModalEdit"  data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>">Edit</a>
                      <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger float-right ml-1" onclick="return confirm('yakin?');">hapus</a>
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
            <input type="hidden" name="id" id="id">
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

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        
        </form>
    </div>
    </div>
  </div>
</div>