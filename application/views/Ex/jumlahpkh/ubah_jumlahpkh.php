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
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $jumlah_pkh['id']; ?>">
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="<?= $jumlah_pkh['nama'] ?>" disabled>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="bulan">Bulan</label>
                                    <input type="text" class="form-control" name="bulan" id="bulan" value="<?= $jumlah_pkh['bulan'] ?>" disabled>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="tahun">Tahun</label>
                                    <input type="text" class="form-control" name="tahun" id="tahun" value="<?= $jumlah_pkh['tahun'] ?>" disabled>
                                </div>
                                <div class="form-group mb-4 col-lg-12">
                                    <label for="jumlah">Jumlah Penerima PKH</label>
                                    <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $jumlah_pkh['jumlah'] ?>" placeholder="Jumlah Penerima PKH">
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