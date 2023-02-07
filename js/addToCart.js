// These functions are called to Make connection with the server in AJAX way
// So the webpage is not reloaded

// CPU Add on Cart Function
function AddToCartCpu(product) {
  var dataString = JSON.stringify(product);
  $.ajax({
    url: "./controller/AddToCart.php",
    data: { action: "addCartCpu", myData: dataString },
    type: "POST",
    success: function (data) {
      alert(data);
    },
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}

// GPU Add on Cart Function
function AddToCartGpu(product) {
  var dataString = JSON.stringify(product);
  $.ajax({
    url: "./controller/AddToCart.php",
    data: { action: "addCartGpu", myData: dataString },
    type: "POST",
    success: function (data) {
      alert(data);
    },
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}

// RAM Add on Cart Function
function AddToCartRam(product) {
  var dataString = JSON.stringify(product);
  $.ajax({
    url: "./controller/AddToCart.php",
    data: { action: "addCartRam", myData: dataString },
    type: "POST",
    success: function (data) {
      alert(data);
    },
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}
