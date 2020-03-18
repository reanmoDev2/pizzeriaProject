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
