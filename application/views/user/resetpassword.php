<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">

            <!-- Content -->


            <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                <div class="skills layout-spacing">
                    <div class="widget-content widget-content-area">
                        <h5 class="ml-2 mb-2">Reset Password <?= $users['name']; ?></h5>

                        <?php if (empty($users)) : ?>
                            <?php redirect('user') ?>
                        <?php else : ?>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?= $users['id']; ?>">
                                <div class="form-group col-lg-12">
                                    <label for="passwordBaru1">Password Baru</label>
                                    <div>
                                        <input type="password" class="form-control" id="passwor1" name="password1" placeholder="Password Baru">
                                        <?= form_error('passwor1', ' <small class="text-danger">', '</small>'); ?>
                                    </div>
                                    <div class="m-t-10 mt-2">
                                        <input type="password" class="form-control" id="passwor2" name="password2" placeholder="Konfirmasi Password Baru">
                                        <?= form_error('passwor2', ' <small class="text-danger">', '</small>'); ?>
                                    </div>
                                </div>
                                <div class="form-group col-4">
                                    <a href="<?= site_url('user'); ?>" type="button" class="btn btn-danger waves-effect waves-light"> Kembali</a>
                                    <button type="submit" class="btn btn-primary mb2"> Simpan</button>
                                </div>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>



            </div>

        </div>
    </div>


    <!--  END CONTENT AREA  -->