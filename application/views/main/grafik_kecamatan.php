<script>
  var ctx = document.getElementById('kons1').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: [
        <?php foreach ($hasil1 as $row) {
          echo "'" . $row['periode'] . "',";
        }
        ?>
      ],
      datasets: [{
          label: 'Prediksi',
          fill: false,
          borderColor: '#0396FF',
          data: [
            <?php foreach ($hasil1 as $row) {
              echo "'" . $row['ft'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        },
        {
          label: 'Jumlah PKH',
          fill: false,
          borderColor: '#FB3640',
          data: [
            <?php foreach ($hasil1 as $row) {
              echo "'" . $row['xt'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById('kons2').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: [
        <?php foreach ($hasil2 as $row) {
          echo "'" . $row['periode'] . "',";
        }
        ?>
      ],
      datasets: [{
          label: 'Prediksi',
          fill: false,
          borderColor: '#0396FF',
          data: [
            <?php foreach ($hasil2 as $row) {
              echo "'" . $row['ft'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        },
        {
          label: 'Jumlah PKH',
          fill: false,
          borderColor: '#FB3640',
          data: [
            <?php foreach ($hasil2 as $row) {
              echo "'" . $row['xt'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById('kons3').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: [
        <?php foreach ($hasil3 as $row) {
          echo "'" . $row['periode'] . "',";
        }
        ?>
      ],
      datasets: [{
          label: 'Prediksi',
          fill: false,
          borderColor: '#0396FF',
          data: [
            <?php foreach ($hasil3 as $row) {
              echo "'" . $row['ft'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        },
        {
          label: 'Jumlah PKH',
          fill: false,
          borderColor: '#FB3640',
          data: [
            <?php foreach ($hasil3 as $row) {
              echo "'" . $row['xt'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById('kons4').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: [
        <?php foreach ($hasil4 as $row) {
          echo "'" . $row['periode'] . "',";
        }
        ?>
      ],
      datasets: [{
          label: 'Prediksi',
          fill: false,
          borderColor: '#0396FF',
          data: [
            <?php foreach ($hasil4 as $row) {
              echo "'" . $row['ft'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        },
        {
          label: 'Jumlah PKH',
          fill: false,
          borderColor: '#FB3640',
          data: [
            <?php foreach ($hasil4 as $row) {
              echo "'" . $row['xt'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById('kons5').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: [
        <?php foreach ($hasil5 as $row) {
          echo "'" . $row['periode'] . "',";
        }
        ?>
      ],
      datasets: [{
          label: 'Prediksi',
          fill: false,
          borderColor: '#0396FF',
          data: [
            <?php foreach ($hasil5 as $row) {
              echo "'" . $row['ft'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        },
        {
          label: 'Jumlah PKH',
          fill: false,
          borderColor: '#FB3640',
          data: [
            <?php foreach ($hasil5 as $row) {
              echo "'" . $row['xt'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById('kons6').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: [
        <?php foreach ($hasil6 as $row) {
          echo "'" . $row['periode'] . "',";
        }
        ?>
      ],
      datasets: [{
          label: 'Prediksi',
          fill: false,
          borderColor: '#0396FF',
          data: [
            <?php foreach ($hasil6 as $row) {
              echo "'" . $row['ft'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        },
        {
          label: 'Jumlah PKH',
          fill: false,
          borderColor: '#FB3640',
          data: [
            <?php foreach ($hasil6 as $row) {
              echo "'" . $row['xt'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById('kons7').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: [
        <?php foreach ($hasil7 as $row) {
          echo "'" . $row['periode'] . "',";
        }
        ?>
      ],
      datasets: [{
          label: 'Prediksi',
          fill: false,
          borderColor: '#0396FF',
          data: [
            <?php foreach ($hasil7 as $row) {
              echo "'" . $row['ft'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        },
        {
          label: 'Jumlah PKH',
          fill: false,
          borderColor: '#FB3640',
          data: [
            <?php foreach ($hasil7 as $row) {
              echo "'" . $row['xt'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById('kons8').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: [
        <?php foreach ($hasil8 as $row) {
          echo "'" . $row['periode'] . "',";
        }
        ?>
      ],
      datasets: [{
          label: 'Prediksi',
          fill: false,
          borderColor: '#0396FF',
          data: [
            <?php foreach ($hasil8 as $row) {
              echo "'" . $row['ft'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        },
        {
          label: 'Jumlah PKH',
          fill: false,
          borderColor: '#FB3640',
          data: [
            <?php foreach ($hasil8 as $row) {
              echo "'" . $row['xt'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>

<script>
  var ctx = document.getElementById('kons9').getContext('2d');
  var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: [
        <?php foreach ($hasil9 as $row) {
          echo "'" . $row['periode'] . "',";
        }
        ?>
      ],
      datasets: [{
          label: 'Prediksi',
          fill: false,
          borderColor: '#0396FF',
          data: [
            <?php foreach ($hasil9 as $row) {
              echo "'" . $row['ft'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        },
        {
          label: 'Jumlah PKH',
          fill: false,
          borderColor: '#FB3640',
          data: [
            <?php foreach ($hasil9 as $row) {
              echo "'" . $row['xt'] . "',";
            }
            ?>
          ],
          borderWidth: 1,
          tension: 0
        }
      ]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            beginAtZero: true
          }
        }]
      }
    }
  });
</script>