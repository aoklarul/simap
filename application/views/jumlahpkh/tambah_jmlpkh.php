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
                            <?= form_open_multipart('jumlahpkh/tambah'); ?>
                            <form>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="kecamatan">Kecamatan</label>
                                    <select class="form-control" name="kecamatan" id="kecamatan">
                                        <option selected disabled>--Pilih Kecamatan--</option>
                                        <?php foreach ($kecamatan as $kcm) : ?>
                                            <option value="<?= $kcm['id']; ?>" <?= set_value('kecamatan') == $kcm['id'] ? "selected" : NULL ?>><?= $kcm['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kecamatan', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                                <!-- <div class="form-group mb-4 col-lg-12">
                                    <label for="kelurahan">Kelurahan</label>
                                    <select class="form-control" name="kelurahan" id="kelurahan">
                                        <option selected disabled>--Pilih Kelurahan--</option>
                                        <?php foreach ($kelurahan as $kel) : ?>
                                            <option value="<?= $kel['id']; ?>" <?= set_value('kelurahan') == $kel['id'] ? "selected" : NULL ?>><?= $kel['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kelurahan', ' <small class="text-danger">', '</small>'); ?>
                                </div> -->
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="bulan">Bulan</label>
                                    <select class="form-control" name="bulan" id="bulan">
                                        <option selected disabled>--Pilih Bulan--</option>
                                        <?php foreach ($bulan as $bln) : ?>
                                            <option value="<?= $bln; ?>" <?= set_value('bulan') == $bln ? "selected" : NULL ?>><?= $bln; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('bulan', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="tahun">Tahun</label>
                                    <select class="form-control" name="tahun" id="tahun">
                                        <option selected disabled>--Pilih Tahun--</option>
                                        <?php for ($y = date('Y'); $y >= 2019; $y--) : ?>
                                            <option value="<?= $y; ?>" <?= set_value('tahun') == $y ? "selected" : NULL ?>><?= $y; ?></option>
                                        <?php endfor; ?>
                                    </select>
                                    <?= form_error('tahun', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="jumlah">Jumlah Penerima PKH</label>
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= set_value('jumlah'); ?>" placeholder="Jumlah Penerima PKH">
                                    <?= form_error('jumlah', ' <small class="text-danger">', '</small>'); ?>
                                </div>
                                <!-- <div class="form-group col-lg-12">
                                    <label for="jenis_bantuan">Jenis Bantuan</label>
                                    <select class="form-control" name="jenis_bantuan" id="jenis_bantuan">
                                        <option selected disabled>--Pilih Jenis Bantuan--</option>
                                        <?php foreach ($jenis_bantuan as $jb) : ?>
                                            <option value="<?= $jb; ?>"><?= $jb; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('jenis_bantuan', ' <small class="text-danger">', '</small>'); ?>
                                </div> -->
                                <div class="form-group row justify-content-end">
                                    <div class="col-sm-4 mr-3 mt-3">
                                        <a href="<?= site_url('jumlahpkh'); ?>" type="button" class="btn btn-danger waves-effect waves-light"> Kembali</a>
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