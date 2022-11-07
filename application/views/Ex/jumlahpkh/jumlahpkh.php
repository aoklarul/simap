<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="mb-2"></div>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
        <?php endif; ?>

        <div class="row layout-spacing">
            <div class="col-lg-12">
                <div class="statbox widget box box-shadow">
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive mb-2 style-3">
                            <h4 class="mt-2 ml-2">Data Jumlah Penerima Bantuan PKH</h4>
                            <a href="<?= site_url('jumlahpkh/tambah'); ?>" class="btn btn-primary mt-3 mb-2 ml-4 waves-effect waves-light">
                                Tambah
                            </a>
                            <table id="style-3" class="table style-3 dt-table-hover table-hover">
                                <thead style="text-align: center;">
                                    <tr>
                                        <th class="text-center"> No </th>
                                        <th class="text-center">Kecamatan</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th class="text-center">Jumlah PKH</th>
                                        <th class="text-center dt-no-sorting">Aksi</th>
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
                                            <td class="text-center" style="font-size: small;">
                                                <div class="btn-group">
                                                    <a href="<?= site_url(); ?>jumlahpkh/ubah/<?= $jml['id'] ?>" class="btn btn-warning btn-sm mr-1" data-toggle="tooltip" data-placement="top" title="Ubah Data">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                                        </svg>
                                                    </a>
                                                    <a href="<?= site_url(); ?>jumlahpkh/hapus/<?= $jml['id'] ?>" class="btn btn-danger btn-sm tombol-hapus" data-toggle="tooltip" data-placement="top" title="Hapus Data">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </td>
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


    <!--  END CONTENT AREA  -->