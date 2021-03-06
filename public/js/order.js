function cancelOrder(orderId) {
  fetch(`http://localhost/pizzeriaProject/orders/cancelOrder?order=${orderId}`);

  $('#order-' + orderId).html('');
}

$('#cancelBtn').on('click', function() {
  const id = $(this).data('id');
  cancelOrder(id);
});

function payOrder(orderId) {
  fetch(`http://localhost/pizzeriaProject/orders/payOrder?order=${orderId}`);

  $('#order-' + orderId).html('');
}

$('#payBtn').on('click', function() {
  const id = $(this).data('id');
  payOrder(id);
});

function denyOrder(orderId) {
  fetch(`http://localhost/pizzeriaProject/orders/denyOrder?order=${orderId}`);

  $('#order-' + orderId).html('');
}

$('#denyBtn').on('click', function() {
  const id = $(this).data('id');
  denyOrder(id);
});
