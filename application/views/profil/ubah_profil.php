<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="container">

        <div class="container">
            <div class="row layout-top-spacing">
                <div class="col-lg-12 col-12  layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                    <h4>Form <?= $judul; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <?= form_open_multipart('profil/ubah'); ?>
                            <form>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?= $user['username']; ?>" readonly>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="name">Nama</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= $user['name']; ?>">
                                    <?= form_error('name', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= $user['email']; ?>">
                                    <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="status">Status</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?= $user['status']; ?>" readonly>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="level_user">Level User</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?= $user['level_user']; ?>" readonly>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="image">Foto Profil</label>
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <img src="<?= base_url('assets/assets/img/') . $user['image']; ?>" class="img-thumbnail">
                                            </div>
                                            <div class="col-sm-9">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="gambar">Pilih Gambar</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-4 mr-3">
                                        <a href="<?= site_url('profil'); ?>" type="button" class="btn btn-danger waves-effect waves-light"> Kembali</a>
                                        <button type="submit" class="btn btn-primary waves-effect waves-light"> Simpan</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br>


    <!--  END CONTENT AREA  -->