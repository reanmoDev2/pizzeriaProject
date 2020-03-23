// show only a part of the hole list
function showListItems(start, end) {
  $('.sold-list-item').css('display', 'none');
  for (var i = start; i < end; i++) {
    $('.sold-list-item')
      .eq(i)
      .css('display', 'flex');
  }
}
showListItems(0, 4);

$('#page1').on('click', function() {
  $('#page1').addClass('active');
  $('#page2').removeClass('active');
  showListItems(0, 4);
});
$('#page2').on('click', function() {
  $('#page2').addClass('active');
  $('#page1').removeClass('active');
  showListItems(4, 8);
});

function orderDirection(direction) {
  fetch(
    `http://localhost/pizzeriaProject/dashboards/getSoldByOrder?order=${direction}`
  )
    .then(res => res.json())
    .then(data => {
      data.forEach((element, index) => {
        const price = document.getElementById('soldPrice-' + index);
        price.innerHTML = formatFloatToCurrency(element.sales);
        const name = document.getElementById('soldName-' + index);
        name.innerHTML = element.name + ' (' + element.amount + ') ';
      });
    });
}

$('#descBtn').on('click', function() {
  $('#descBtn').addClass('active');
  $('#ascBtn').removeClass('active');
  orderDirection('DESC');
});
$('#ascBtn').on('click', function() {
  $('#ascBtn').addClass('active');
  $('#descBtn').removeClass('active');
  orderDirection('ASC');
});
