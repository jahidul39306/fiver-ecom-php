function AddToCart(product) {
  var cartname = "AddCart";

  $.ajax({
    url: "../control/AddToCart.php",
    type: "POST",
    data: {
      CartAdd: cartname,
      product: product,
    },
    success: function (data, status) {
      alert(data);
    },
  });
  return false;
}
