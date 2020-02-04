<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12">
                <h4 class="page-title">Daftar Pegawai</h4>
            </div>

        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <select class="select2 form-control custom-select" style="width: 250px;" name="jenis_surat" id="jenis_surat">
                            <option value="">Pilih Jenis Pegawai</option>
                        </select>
                        <button type="button" class="btn waves-effect waves-light btn-info" style="width: 100px;"><i class="fa fa-search"></i> Cari</button>

                        <div class="float-right">
                            <button type="button" class="btn waves-effect waves-light btn-success" data-toggle="modal" data-target="#tambahPegawai">Tambah Pegawai</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL TAMBAH PEGAWAI -->
        <div class="modal fade" id="tambahPegawai" role="dialog" aria-labelledby="tambahPegawai">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">Tambah Pegawai</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="message-text" class="control-label">Nama Pegawai</label>
                                <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Jenis Pegawai</label>
                                <select class="select2 form-control custom-select" style="width: 100%;" name="jenis_surat_tambah" id="jenis_surat_tambah" required>
                                    <option value="">Pilih Jenis Pegawai</option>
                                    <?php foreach (jabatan() as $j) : ?>
                                        <option value="<?= $j ?>"><?= $j ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MODAL -->

        <!-- tabel surat keluar -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="alt_pagination" class="table table-striped table-bordered display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th style="width: 4%; padding: 10px;">No</th>
                                        <th style=" padding: 10px;">Nama Pegawai</th>
                                        <th style=" padding: 10px;">Username</th>
                                        <th style=" padding: 10px;">Jabatan</th>
                                        <th style=" padding: 10px;">Tanggal Terdaftar</th>
                                        <th style="padding: 10px;" class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="padding: 5px;" class="align-middle text-center">1</td>
                                        <td style="padding: 5px;" class="align-middle">Rafli Firdausy Irawan</td>
                                        <td style="padding: 5px;" class="align-middle">raflifirdausy</td>
                                        <td style="padding: 5px;" class="align-middle">Dokter</td>
                                        <td style="padding: 5px;" class="align-middle text-center">2020-01-03</td>
                                        <td style="padding: 5px;" class="align-middle text-center">
                                            <button class="btn btn-sm btn-warning waves-effect waves-light" type="button" data-toggle="modal" data-target="#ubah_pegawai">Ubah</button>
                                            <button class="btn btn-sm btn-danger waves-effect waves-light" type="button" data-toggle="modal" data-target="#hapus_pegawai">Hapus</button>
                                        </td>

                                        <!-- MODAL UBAH PEGAWAI -->
                                        <div class="modal fade" id="ubah_pegawai" role="dialog" aria-labelledby="ubah_pegawai">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLabel1">Tambah Pegawai</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Username</label>
                                                                <input disabled type="text" value="raflyfirdausy" class="form-control" name="username" id="username">
                                                                <input type="hidden" name="id_pegawai">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Nama Pegawai</label>
                                                                <input type="text" class="form-control" name="nama_pegawai" id="nama_pegawai">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="control-label">Jenis Pegawai</label>
                                                                <select class="select2 form-control custom-select" style="width: 100%;" name="jenis_surat_tambah" id="jenis_surat_tambah" required>
                                                                    <option value="">Pilih Jenis Pegawai</option>
                                                                    <?php foreach (jabatan() as $j) : ?>
                                                                        <option value="<?= $j ?>"><?= $j ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="message-text" class="control-label">Password (kosongi jika tidak ingin diubah)</label>
                                                                <input type="password" minlength="8" class="form-control" name="nama_pegawai" id="nama_pegawai">
                                                            </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-success">Simpan</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END MODAL -->

                                        <!-- MODAL HAPUS PEGAWAI -->
                                        <div class="modal fade" id="hapus_pegawai" role="dialog" aria-labelledby="hapus_pegawai">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="exampleModalLabel1">Hapus Data Pegawai</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form>
                                                            <p>Apakah anda yakin ingin menghapus data ini?</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END MODAL -->
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>