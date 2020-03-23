function cancelOrder(orderId) {
  fetch(`http://localhost/pizzeriaProject/orders/cancelOrder?order=${orderId}`);

  $('#order-' + orderId).html('');
}

$('#cancelBtn').on('click', function() {
  const id = $(this).data('id');

  cancelOrder(id);
});
