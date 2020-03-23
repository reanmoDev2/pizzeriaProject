// Preview Img -> menu
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function(e) {
      $('#previewImg').attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
$('#uploadImg').change(function() {
  readURL(this);
});

// Filter menu(Search Bar)
function searchMenu() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById('myFilter');
  filter = input.value.toUpperCase();
  table = document.getElementById('tableBody');
  tr = table.getElementsByTagName('tr');

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName('td')[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = '';
      } else {
        tr[i].style.display = 'none';
      }
    }
  }
}

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
