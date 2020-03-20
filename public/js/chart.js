var ctx = document.getElementById('chart').getContext('2d');
var myChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: ['J', 'F', 'M', 'A', 'M', 'J', 'J', 'A', 'S', 'O', 'N', 'D'],
    datasets: [
      {
        label: 'remove this',
        data: [12, 40, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
        backgroundColor: 'rgba(191, 191, 191, 1)',
        borderWidth: 0.5
      }
    ]
  },
  options: {
    // onClick: function(evt) {
    //   //var activeElement = myChart.getElementAtEvent(evt);
    //   var label = this.data.labels;
    //   alert(String(label));
    // },
    legend: {
      display: false
    },
    tooltips: {
      callbacks: {
        label: function(tooltipItem) {
          return tooltipItem.yLabel;
        }
      }
    },
    scales: {
      yAxes: [
        {
          ticks: {
            beginAtZero: true
          }
        }
      ]
    }
  }
});

// function handleClick(evt) {
//   var activeElement = myChart.getElementAtEvent(evt);
//   var label = activeElement.data.labels[event._index];
//   alert(String(label));
// }
