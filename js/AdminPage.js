function DelCpu(cpuId) {
    $.ajax({
      url: "../control/AdminPageAction.php",
      data: { action: "Del-Cpu", productId: cpuId },
      type: "POST",
      function(data, status) {
        alert(data);
      },
    });
    $(document).ajaxStop(function () {
        window.location.reload();
      });
    return false;
  }