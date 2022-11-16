<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Perhitungan Single Exponential Smoothing</title>
</head>

<body>
  <?php foreach ($hasil['data'] as $k => $v) { ?>
    <p>Konstant : <?= $k ?></p>
    <table>
      <thead>
        <tr>
          <th>Periode</th>
          <th>Nilai</th>
          <th>Ramalan</th>
          <th>Error</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($v as $n => $val) { ?>
          <tr>
            <td><?= $val['periode'] ?></td>
            <td><?= $val['xt'] ?></td>
            <td><?= $val['ft'] ?></td>
            <td><?= $val['error'] ?></td>
          </tr>
        <?php } ?>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="3">Root Mean Square Error (RMSE)</th>
          <th><?= $hasil['total']['rmse'][$k] ?></th>
        </tr>
        <tr>
          <th colspan="3">Mean Square Error (MAPE)</th>
          <th><?= $hasil['total']['mape'][$k] ?></th>
        </tr>
        <tr>
          <th colspan="3">Mean Precentage Absolute Error (MSE)</th>
          <th><?= $hasil['total']['mse'][$k] ?></th>
        </tr>
        <tr>
          <th colspan="3">Mean Absolute Error (MAE)</th>
          <th><?= $hasil['total']['mae'][$k] ?></th>
        </tr>
      </tfoot>
    </table>
  <?php } ?>
</body>

</html>