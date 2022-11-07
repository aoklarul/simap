<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">

            <!-- Content -->
            <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>
                <?php endif; ?>
                <div class="user-profile layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h5 class="mt-2 ml-2">Profil</h5>
                        </div>
                        <div class="text-center user-info">
                            <img style="width: 250px;" src="<?= base_url('assets/assets/img/') . $user['image']; ?>" alt="avatar">
                            <p class=""><?= $user['name']; ?></p>
                        </div>
                        <div class="user-info-list">
                            <div class="">
                                <ul class="contacts-block list-unstyled">
                                    <li class="contacts-block__item">
                                        <div style="font-size: 16px;"> Email : <?= $user['email']; ?></div>
                                    </li>
                                    <li class="contacts-block__item">
                                        <div style="font-size: 16px;"> Status : <?php if ($user['status'] == 'Aktif') : ?>
                                                <span class="badge badge-success"><?= $user['status']; ?></span>
                                            <?php else : ?>
                                                <span class="badge badge-danger"><?= $user['status']; ?></span>
                                            <?php endif; ?>
                                        </div>
                                    </li>
                                    <li class="contacts-block__item">
                                        <div style="font-size: 16px;"> Level User : <?= $user['level_user']; ?></div>
                                    </li>
                                    <a href="<?= site_url('profil/ubah') ?>" type="button" class="btn btn-primary mb-2">Ubah Profil</a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">
                <div class="skills layout-spacing">
                    <div class="widget-content widget-content-area">
                        <h5 class="ml-2 mb-2">Ubah Password</h5>
                        <?php if ($this->session->flashdata('pesan')) : ?>
                            <div class="alert alert-light-primary border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                    </svg></button>
                                <?= $this->session->flashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>
                        <form action="<?= base_url('profil/ubah_password'); ?>" method="POST">
                            <div class="form-group col-lg-12">
                                <label for="passwordSekarang">Password Saat Ini</label>
                                <input type="password" class="form-control" id="passwordSekarang" name="passwordSekarang" placeholder="Password Saat Ini">
                                <?= form_error('passwordSekarang', ' <small class="text-danger">', '</small>'); ?>
                            </div>
                            <div class="form-group col-lg-12">
                                <label for="passwordBaru1">Password Baru</label>
                                <div>
                                    <input type="password" class="form-control" id="passwordBaru1" name="passwordBaru1" placeholder="Password Baru">
                                    <?= form_error('passwordBaru1', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="m-t-10 mt-2">
                                    <input type="password" class="form-control" id="passwordBaru2" name="passwordBaru2" placeholder="Konfirmasi Password Baru">
                                    <?= form_error('passwordBaru2', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="form-group col-4">
                                <button type="submit" class="btn btn-primary mb2"> Simpan</button>
                            </div>
                        </form>

                    </div>
                </div>



            </div>

        </div>
    </div>


    <!--  END CONTENT AREA  -->