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
                        <h1 class="">Jumlah Penerima PKH</h1>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mx-auto">
                            <form action="" method="GET">
                                <div class="col-offset-8 col-sm-4 ml-auto mb-4">
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
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit">Pilih</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>

                    <div class="row layout-spacing">
                        <div class="col-lg-12">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-content widget-content-area">
                                    <div class="table-responsive mb-2 style-3">
                                        <table id="style-3" class="table style-3 dt-table-hover table-hover">
                                            <thead style="text-align: center;">
                                                <tr>
                                                    <th class="text-center"> No </th>
                                                    <th class="text-center">Kecamatan</th>
                                                    <th>Bulan</th>
                                                    <th>Tahun</th>
                                                    <th class="text-center">Jumlah PKH</th>
                                                    <th class="text-center">Prakiraan</th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center;">
                                                <?php
                                                $no = 1;
                                                foreach ($jumlah_pkh as $jml) : ?>
                                                    <tr>
                                                        <td><?= $no++; ?></td>
                                                        <td style="font-size: medium;"><?= $jml['nama']; ?></td>
                                                        <td style="font-size: medium;"><?= $jml['bulan']; ?></td>
                                                        <td style="font-size: medium;"><?= $jml['tahun']; ?></td>
                                                        <td style="font-size: medium;"><?= number_format($jml['jumlah'], 0, '', ','); ?></td>
                                                        <td style="font-size: medium;"><?= number_format($jml['nilai_sem'], 0, '', ','); ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

        </div>
    </div>

    <!--  END CONTENT AREA  -->