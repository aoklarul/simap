<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <?php if ($this->session->flashdata('login')) : ?>
        <div class="alert alert-light-primary border-0 mb-4" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x close" data-dismiss="alert">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg></button>
            <?= $this->session->flashdata('login'); ?>
        </div>
    <?php endif; ?>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="col-xl col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-one">
                    <div class="widget-heading">
                        <h6 class="">Jumlah Penerima PKH</h6>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 mx-auto">
                            <form action="" method="GET">
                                <div class="col-sm-12 ml-auto">
                                    <div class="input-group mt-2">
                                        <select class="custom-select" name="kecamatan" id="kecamatan">
                                            <option selected disabled>--Pilih Kecamatan--</option>
                                            <?php foreach ($kecamatan as $kcm) : ?>
                                                <?php if ($kcm['id'] == $this->input->get('kecamatan')) : ?>
                                                    <option value="<?= $kcm['id']; ?>" selected><?= $kcm['nama']; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $kcm['id']; ?>"><?= $kcm['nama']; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-3 mx-auto">
                            <form action="" method="GET">
                                <div class="col-sm-12 ml-auto">
                                    <div class="input-group mt-2">
                                        <select class="custom-select" name="cari" id="cari">
                                            <option selected disabled>--Pilih Bulan--</option>
                                            <?php foreach ($bulan as $bln) : ?>
                                                <?php if ($this->input->get('bulan')) : ?>
                                                    <option value="<?= $bln; ?>" selected><?= $bln; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $bln; ?>"><?= $bln; ?></option>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-3 mx-auto">
                            <form action="" method="GET">
                                <div class="col-sm-12 ml-auto">
                                    <div class="input-group mt-2">
                                        <select class="custom-select" name="cari" id="cari">
                                            <option selected disabled>--Pilih Tahun--</option>
                                            <?php for ($y = date('Y'); $y >= 2019; $y--) : ?>
                                                <?php if ($y == $this->input->get('cari')) : ?>
                                                    <option value="<?= $y; ?>" selected><?= $y; ?></option>
                                                <?php else : ?>
                                                    <option value="<?= $y; ?>"><?= $y; ?></option>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="input-group-append col-sm-1 mr-4">
                            <button class="btn btn-primary mt-2" type="submit">Pilih</button>
                        </div>
                    </div>
                    <div class="w-chart">

                        <div class="w-chart-section total-visits-content">
                            <div class="w-detail">
                                <p class="w-title" style="font-size: large;">Jumlah Penerima Bantuan</p>
                                <p class="w-stats">423,964</p>
                            </div>
                        </div>
                        <div class="w-chart-section paid-visits-content">
                            <div class="w-detail">
                                <p class="w-title" style="font-size: large;">Jumlah Prakiraan Selanjutnya</p>
                                <p class="w-stats">7,929</p>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--  END CONTENT AREA  -->