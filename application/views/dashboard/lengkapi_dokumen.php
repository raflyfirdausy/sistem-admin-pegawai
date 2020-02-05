<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12">
                <h4 class="page-title">Lengkapi Dokumen <?= ucwords(strtolower($user_detail->nama_user)) ?></h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Isi data di bawah ini (Maximal Ukuran per File 2MB)</h4>
                        <form class="m-t-20" method="POST" action="<?= base_url('dokumen-pegawai/update-dokumen') ?>">
                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">
                                    Foto Formal
                                </label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="foto_formal">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">
                                    Ijazah SD
                                </label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="ijazah_sd">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">
                                    Ijazah SMP
                                </label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile" name="ijazah_smp">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label" name="ijazah_smak">
                                    Ijazah SMA/K
                                </label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label" name="ktp">
                                    Kartu Tanda Penduduk
                                </label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label" name="kk">
                                    Kartu Keluarga
                                </label>
                                <div class="col-sm-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">
                                    Sertifikat
                                </label>
                                <div class="col-sm-9">
                                    <div class="email-repeater form-group">
                                        <div data-repeater-list="list_sertifikat">
                                            <div data-repeater-item class="row m-b-15">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="" placeholder="Nama Sertifikat" name="nama_sertifikat">
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="sertifikat">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button"><i class="ti-close"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-repeater-create="" class="btn btn-info waves-effect waves-light">Tambah Sertifikat Lain
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="fname" class="col-sm-3 text-right control-label col-form-label">
                                    Surat Keterangan
                                </label>
                                <div class="col-sm-9">
                                    <div class="email-repeater form-group">
                                        <div data-repeater-list="list_surat_keterangan">
                                            <div data-repeater-item class="row m-b-15">
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="" placeholder="Nama Surat Keterangan" name="nama_surat_keterangan">
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="surat_keterangan">
                                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-1">
                                                    <button data-repeater-delete="" class="btn btn-danger waves-effect waves-light" type="button"><i class="ti-close"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" data-repeater-create="" class="btn btn-info waves-effect waves-light">Tambah Surat Keterangan Lain
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-success waves-effect waves-light" type="submit">Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>