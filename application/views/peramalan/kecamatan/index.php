<!-- BREADCRUMB -->
<div class="page-meta">
  <nav class="breadcrumb-style-one" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#"><?= $title ?></a></li>
      <li class="breadcrumb-item active" aria-current="page"><?= $page_title ?></li>
    </ol>
  </nav>
</div>
<!-- /BREADCRUMB -->

<!-- CONTENT AREA -->
<div class="row layout-top-spacing">

  <div class="action-btn mb-3 col-6">
    <form action="" method="GET">
      <div class="input-group">
        <select class="form-select" name="cari">
          <option selected disabled>--Pilih Kecamatan--</option>
          <?php foreach ($kecamatan as $row) : ?>
            <?php if ($row->id == $this->input->get('cari')) : ?>
              <option value="<?= $row->id ?>" selected><?= $row->nama ?></option>
            <?php else : ?>
              <option value="<?= $row->id ?>"><?= $row->nama ?></option>
            <?php endif; ?>
          <?php endforeach; ?>
        </select>
        <button class="btn btn-outline-primary" type="submit">Pilih</button>
      </div>
    </form>
  </div>

  <div class="col-lg-12 col-12 layout-spacing">
    <div class="statbox widget box box-shadow">
      <div class="widget-content widget-content-area">

        <table class="table dt-table-hover" id="zero-config" style="width:100%">
          <thead>
            <tr>
              <th class="text-center" scope="col">No</th>
              <th scope="col">Periode</th>
              <th scope="col">Kecamatan</th>
              <th class="text-center dt-no-sorting" scope="col">Ramalan</th>
              <th class="text-center dt-no-sorting" scope="col">Jumlah PKH</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($hasil as $row) :
            ?>
              <tr>
                <td class="text-center"><?= $no ?></td>
                <td><?= $row['periode'] ?></td>
                <td><?= $row['kec'] ?></td>
                <td class="text-center"><?= $row['ft'] ?></td>
                <td class="text-center"><?= $row['xt'] ?></td>
              </tr>
            <?php
              $no++;
            endforeach;
            ?>
          </tbody>
        </table>

      </div>
    </div>
  </div>

</div>
<!-- CONTENT AREA -->