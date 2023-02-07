function IncreaseCpu(productId) {
  $.ajax({
    url: "./controller/AddToCart.php",
    data: { action: "Increase-Cpu", productId: productId },
    type: "POST",
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}

function DecreaseCpu(productId) {
  $.ajax({
    url: "./controller/AddToCart.php",
    data: { action: "Decrease-Cpu", productId: productId },
    type: "POST",
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}

function IncreaseRam(productId) {
  $.ajax({
    url: "./controller/AddToCart.php",
    data: { action: "Increase-Ram", productId: productId },
    type: "POST",
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}

function DecreaseRam(productId) {
  $.ajax({
    url: "./controller/AddToCart.php",
    data: { action: "Decrease-Ram", productId: productId },
    type: "POST",
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}

function IncreaseGpu(productId) {
  $.ajax({
    url: "./controller/AddToCart.php",
    data: { action: "Increase-Gpu", productId: productId },
    type: "POST",
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}

function DecreaseGpu(productId) {
  $.ajax({
    url: "./controller/AddToCart.php",
    data: { action: "Decrease-Gpu", productId: productId },
    type: "POST",
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}
