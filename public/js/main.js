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
  $(this).toggleClass('active');
  $('.sold-list-item').css('display', 'none');
  for (var i = start; i < end; i++) {
    $('.sold-list-item')
      .eq(i)
      .css('display', 'flex');
  }
}
showListItems(0, 4);

// Get the container element
var btnContainer = document.getElementById('btnContainer');

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName('btn');

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener('click', function() {
    btns[0].className = btns[0].className.replace(' active', '');
    this.className += ' active';
  });
}
