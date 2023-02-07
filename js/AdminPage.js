function DeleteCPU(cpuId) {
  $.ajax({
    url: "./controller/AdminPageAction.php",
    data: { action: "delete-cpu", productId: cpuId },
    type: "POST",
    success: function (data) {
      // alert(data); // alert on success
      console.log(data);
    },
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}
function DeleteGPU(gpuId) {
  $.ajax({
    url: "./controller/AdminPageAction.php",
    data: { action: "delete-gpu", productId: gpuId },
    type: "POST",
    success: function (data) {
      // alert(data); // alert on success
      console.log(data);
    },
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}
function DeleteRam(gpuId) {
  $.ajax({
    url: "./controller/AdminPageAction.php",
    data: { action: "delete-ram", productId: gpuId },
    type: "POST",
    success: function (data) {
      // alert(data); // alert on success
      console.log(data);
    },
  });
  $(document).ajaxStop(function () {
    window.location.reload();
  });
  return false;
}
