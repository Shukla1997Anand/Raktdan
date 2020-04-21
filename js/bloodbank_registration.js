$(document).ready(function(){

            var specialKeys = new Array();
                 specialKeys.push(8); //Backspace
                  $(function () {
                  $(".numeric").bind("keypress", function (e) {
                  var keyCode = e.which ? e.which : e.keyCode
                   var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
                  $(".error").css("display", ret ? "none" : "inline");
                  return ret;
                  });
                $(".numeric").bind("paste", function (e) {
                return false;
               });
              $(".numeric").bind("drop", function (e) {
                return false;
            });
        });


     });    