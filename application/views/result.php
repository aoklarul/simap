<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Perhitungan Single Exponential Smoothing</title>
</head>

<body>
  <p>Konstant : 0,1</p>
  <table border="1">
    <thead>
      <tr>
        <th width="200">Periode</th>
        <th width="200">Nilai</th>
        <th width="200">Ramalan</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($hasil as $n => $val) { ?>
        <tr>
          <td><?= $val['periode'] ?></td>
          <td><?= $val['xt'] ?></td>
          <td><?= $val['ft'] ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>