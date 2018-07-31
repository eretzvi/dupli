$("body#cms").ready(function() {
  $("#summernote").summernote({
    height: 200,
  });

  $(".sm-box").hide();
  $(".sm-box")
    .hide()
    .slideDown()
    .delay(3000)
    .slideUp()
    .show();
  $(".alert")
    .addClass("in")
    .fadeOut(4500);

  /* swap open/close side menu icons */
  $("[data-toggle=collapse]").click(function() {
    // toggle icon
    $(this)
      .find("i")
      .toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
  });

  $(".original-text-field").on("focusout", function() {
    var $or = $(this)
      .val()
      .trim();
    $or = $or.toLowerCase();
    $or = $or.replace(/\s/g, "-");
    $(".to-text-field").val($or);
  });

  var email =  $("#InputEmail").val();
  
  $("#InputEmail").on("keyup", function() {
  
    $.ajax({
      url: BASE_URL + "cms/users",
      type: "POST",
      dataType: "html",
      data: { email: email },
      success: function(response) {
        console.log(response);
      },
    });
 
  });

  $(function() {
    $("#sortable").sortable({
      items: "li.grabbable:not(.unsortable)",
      cursor: "move",
      cancel: ".unsortable",
      disable: ".unsortable",
      start: function(event, ui) {
        ui.helper.attr("data-start", ui.helper.index());
      },
      update: function(event, ui) {
        var arr = $(this).sortable("toArray");
        console.log(arr);
        var i, n;
        var order = [];
        for (i = 0, n = arr.length; i < n; i++) {
          order.push($("#" + arr[i]).data("id"));
        }
      },
    });

    var ids = [];
  });

});

$(document).ready(function() {
  if ($(window).width() < 810) {
    $("#mobile-bar").hide();
    $("#toggle-more").on("click", function() {
      $("#mobile-bar").toggle();
    });
  } else {
    $("#mobile-bar").hide();
  }

  $("img#submitAnimate")
    .ajaxStart(function() {
      $(this).show();
    })
    .ajaxComplete(function() {
      $(this).hide();
      a;
    });

  //Registration
 


  $("#InputPasswordConf").on("keyup", function() {
    var password = $("#InputPassword").val();
    var confirmPassword = $("#InputPasswordConf").val();
    if (
      password.length > 6 &&
      confirmPassword.length > 6 &&
      password != confirmPassword
    ) {
      $(this)
        .delay(3000)
        .addClass("formwarning");
      $("span#checkPasswordMatch").html("Passwords do not match!");
    } else {
      $(this).removeClass("formwarning");
      $("span#checkPasswordMatch").html("");
    }
  });
});
