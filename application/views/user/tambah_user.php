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
                            <?= form_open_multipart('user/tambah'); ?>
                            <form>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="name">Nama Pengguna</label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?= set_value('name'); ?>" placeholder="Nama Pengguna">
                                    <?= form_error('name', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="<?= set_value('username'); ?>" placeholder="Username">
                                    <?= form_error('username', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="password1">Password</label>
                                    <div class="mb-1">
                                        <input type="password" class="form-control" name="password1" id="password1" placeholder="Password">
                                        <?= form_error('password1', ' <small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="">
                                        <input type="password" class="form-control" name="password2" id="password2" placeholder="Ulangi Password">
                                        <?= form_error('password2', ' <small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="email">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email'); ?>" placeholder="Email">
                                    <?= form_error('email', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="level_user">Level User</label>
                                    <select class="form-control" name="level_user" id="level_user">
                                        <option selected disabled>--Pilih Level User--</option>
                                        <?php foreach ($level_user as $lu) : ?>
                                            <option value="<?= $lu; ?>"><?= $lu; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="image">Foto Profil</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="image" name="image">
                                        <label class="custom-file-label" for="image">Pilih Gambar</label>
                                    </div>
                                </div>
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-4 mr-3 mt-3">
                                        <a href="<?= site_url('user'); ?>" type="button" class="btn btn-danger waves-effect waves-light"> Kembali</a>
                                        <button type="submit" name="tambah" class="btn btn-primary waves-effect waves-light"> Simpan</button>
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