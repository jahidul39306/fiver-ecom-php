function AddToCartCpu(product) {
  var dataString = JSON.stringify(product);

  console.log(product);
  $.ajax({
    url: "../control/AddToCart.php",
    data: { product:'cpu', myData: dataString },
    type: "POST",
    function(data, status) {
      alert(data);
    },
  });
  return false;
}

function AddToCartGpu(product) {
    var dataString = JSON.stringify(product);
  
    console.log(product);
    $.ajax({
      url: "../control/AddToCart.php",
      data: { product:'gpu', myData: dataString },
      type: "POST",
      function(data, status) {
        alert(data);
      },
    });
    return false;
  }

  function AddToCartRam(product) {
    var dataString = JSON.stringify(product);
  
    console.log(product);
    $.ajax({
      url: "../control/AddToCart.php",
      data: { product:'ram', myData: dataString },
      type: "POST",
      function(data, status) {
        alert(data);
      },
    });
    return false;
  }
