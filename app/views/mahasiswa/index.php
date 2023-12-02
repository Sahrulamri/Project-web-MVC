<div class="container">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Mahasiswa</h3>

            <!-- Status Action -->

            <div class="row">
                <div class="col-lg">
                    <section>
                        <?php Flasher::flash() ?>
                    </section>
                </div>
            </div>


            <!-- Button trigger modal -->
            <div class="row">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-primary mt-3 mb-5 tombolTambahData" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Tambah Data Mahasiswa
                    </button>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg">
                    <form action="<?php echo BASEURL; ?>/mahasiswa/cari" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan Nama ...." aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" type="submit" id="tombolCari">Cari</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

            <!-- Modal -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>

                                </div>
                                <div class="modal-body">
                                    <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
                                        <input type="hidden" id="id" name="id">
                                        <div class="mb-3">
                                            <label for="nama" class="form-label">Nama :</label>
                                            <input type="text" class="form-control" id="nama" name="nama">
                                        </div>

                                        <div class="mb-3">
                                            <label for="nrp" class="form-label">NRP :</label>
                                            <input type="text" class="form-control" id="nrp" name="nrp">
                                        </div>

                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email :</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="jurusan" class="form-label">Jurusan :</label> <br>
                                            <select class="form-select" id="jurusan" aria-label="Floating label select example" name="jurusan">
                                                <option selected>Pilih Jurusan :</option>
                                                <option value="Teknik Informatika">Teknik Informatika</option>
                                                <option value="Teknik Industri">Teknik Industri</option>
                                                <option value="Teknik Mesin">Teknik Mesin</option>
                                            </select>
                                        </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <ul class="list-group">
                <?php foreach ($data['mhs'] as $mhs) : ?>
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?php echo BASEURL; ?>/mahasiswa/hapus/<?php echo $mhs['id']; ?>" class="badge badge-danger float-right ml-2" onclick="return confirm('Do You Realy Want To Delete This Data?')">Hapus</a>
                        <a href="<?php echo BASEURL; ?>/mahasiswa/ubah/<?php echo $mhs['id']; ?>" class="badge badge-success float-right ml-2 tampilModalUbah" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id="<?= $mhs['id']; ?>">Ubah</a>
                        <a href="<?php echo BASEURL; ?>/mahasiswa/detail/<?php echo $mhs['id']; ?>" class="badge badge-primary float-right ml-2">Detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>

        </div>
    </div>
</div>