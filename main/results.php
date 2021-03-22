<?php include "db.php" ?>

<!-- __________________________________________________ -->
<h1 class="heading">Results</h1>

<div class="graph-cont">
  <div class="back-btn">
    <span class="arrow-cont" onclick="loadPage('form.php')">
      <i class="fas fa-chevron-left"></i> back to home
    </span>

    <div class="refresh">
      <span class="refresh-cont" onclick="loadPage('results.php')" title="Refresh">
        <i class="fas fa-sync-alt"></i>
      </span>
    </div>

  </div>

  <div class="graph">
    <canvas id="myChart" width="80" height="60"></canvas>
  </div>

</div>

<?php
$query = 'SELECT * FROM parties ORDER BY parties.name';
$result = mysqli_query($connection, $query);

$parties = [];
$votes = [];

while ($row = mysqli_fetch_assoc($result)) {
  array_push($parties, $row['name']);
}

$query = "SELECT COUNT(*) as total FROM votes INNER JOIN parties ON parties.id=votes.party GROUP BY parties.name ORDER BY parties.name";
$result = mysqli_query($connection, $query);

while ($row = mysqli_fetch_assoc($result)) {
  array_push($votes, $row['total']);
}

?>

<script>
  var parties = <?php echo  json_encode($parties); ?>;
  var votes = <?php echo  json_encode($votes); ?>;


  var ctx = document.getElementById('myChart').getContext('2d');

  var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
      labels: parties,
      datasets: [{
        label: 'number of Votes',
        data: votes,
        backgroundColor: [
          'rgba(52,86,139,0.4)',
          'rgba(255,111,97,0.4)',
          'rgba(40,45,60,0.4)',
          'rgba(136,176,75,0.4)',
          'rgba(253,172,83,0.4)',
          'rgba(146,168,209,0.4)',
          'rgba(149,82,81,0.4)',
          'rgba(181,101,167,0.4)',
          'rgba(0,155,119,0.4)',
          'rgba(221,65,36,0.4)',
          'rgba(214,80,118,0.4)',
          'rgba(69,184,172,0.4)',
          'rgba(239,192,80,0.4)',
        ],
        borderColor: [
          'rgb(52,86,139)',
          'rgb(255,111,97)',
          'rgb(223,207,190)',
          'rgb(136,176,75)',
          'rgb(253,172,83)',
          'rgb(146,168,209)',
          'rgb(149,82,81)',
          'rgb(181,101,167)',
          'rgb(0,155,119)',
          'rgb(221,65,36)',
          'rgb(214,80,118)',
          'rgb(69,184,172)',
          'rgb(239,192,80)',
        ],
        borderWidth: 0.2
      }]
    },
    options: {
      scales: {
        yAxes: [{
          ticks: {
            precision: 0,
            beginAtZero: true,
          },
          scaleLabel: {
            display: true,
            labelString: 'Votes'
          }
        }],
        xAxes: [{
          categoryPercentage: 2.0,
          barPercentage: 0.3
        }]
      }
    }
  });
</script>