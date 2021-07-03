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
                                    <h4>Reset Password <?= $users['name']; ?></h4>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <?php if (empty($users)) : ?>
                                <?php redirect('user') ?>
                            <?php else : ?>
                                <form action="" method="POST">
                                    <input type="hidden" name="id" value="<?= $users['id']; ?>">
                                    <div class="form-group col-lg-12">
                                        <label for="passwordBaru1">Password Baru</label>
                                        <div class="mb-1">
                                            <input type="password" class="form-control" name="password1" id="passwor1" placeholder="Password Baru">
                                            <?= form_error('passwor1', ' <small class="text-danger">', '</small>'); ?>
                                        </div>
                                        <div class="">
                                            <input type="password" class="form-control" name="password2" id="passwor2" placeholder="Ulangi Password Baru">
                                            <?= form_error('passwor2', ' <small class="text-danger">', '</small>'); ?>
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-end">
                                        <div class="col-sm-4 mr-3 mt-3">
                                            <a href="<?= site_url('user'); ?>" type="button" class="btn btn-danger waves-effect waves-light"> Kembali</a>
                                            <button type="submit" name="tambah" class="btn btn-primary waves-effect waves-light"> Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br>


    <!--  END CONTENT AREA  -->