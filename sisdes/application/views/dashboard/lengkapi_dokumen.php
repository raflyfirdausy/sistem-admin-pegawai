<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12">
                <h4 class="page-title">Detail Dokumen Rafli</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <td width="150px" class="align-middle text-center" rowspan="3">
                                        <img src="<?= asset('website/nice/assets/images/users/1-old.jpg') ?>" width="150px" alt="user" />
                                    </td>
                                    <td width="20%" class="align-middle">Nama</td>
                                    <td class="align-middle">Rafli Firdausy</td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Username</td>
                                    <td class="align-middle">raflyfirdausy</td>
                                </tr>
                                <tr>
                                    <td class="align-middle">Jabatan</td>
                                    <td class="align-middle">Dokter</td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Isi data di bawah ini</h4>
                        <form class="m-t-20">
                            <div class="">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 align-middle">
                                            <h5 class="float-right m-t-5 ">Foto Formal</h5>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 align-middle">
                                            <h5 class="float-right m-t-5 ">Ijazah SD</h5>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 align-middle">
                                            <h5 class="float-right m-t-5 ">Ijazah SMP</h5>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 align-middle">
                                            <h5 class="float-right m-t-5 ">Ijazah SMA/K</h5>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 align-middle">
                                            <h5 class="float-right m-t-5 ">Kartu Tanda Penduduk</h5>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3 align-middle">
                                            <h5 class="float-right m-t-5 ">Kartu Keluarga</h5>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFile">
                                                <label class="custom-file-label" for="customFile">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="float-right m-t-5 ">Sertifikat</h5>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="email-repeater form-group">
                                                <div data-repeater-list="repeater-group">
                                                    <div data-repeater-item class="row m-b-15">
                                                        <div class="col-md-11">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile">
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

                                    <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <h5 class="float-right m-t-5 ">Surat Keterangan</h5>
                                        </div>
                                        <div class="col-md-9">
                                            <div class="email-repeater form-group">
                                                <div data-repeater-list="repeater-group">
                                                    <div data-repeater-item class="row m-b-15">
                                                        <div class="col-md-11">
                                                            <div class="custom-file">
                                                                <input type="file" class="custom-file-input" id="customFile">
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

                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success waves-effect waves-light" type="submit">Simpan
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>