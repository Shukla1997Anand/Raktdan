$(document).ready(function(){			
			
			$("#btn1").click(function(){	
			var len=$('#txt1').val().length;
			if (len<=0) {		
				$("#l1").show(function(){
					$(this).addClass("ll1");
						 $("#txt1").keyup(function(){
       $("#l1").hide();
    });
				});
				}	
				else{

					$("#l1").hide();
				}	
				var len=$('#txt2').val().length;
			if (len<=0) {		
				$("#l2").show(function(){
					$(this).addClass("ll1");
					 $("#txt2").keyup(function(){
       $("#l2").hide();
    });
				});
				}	
				else{
					$("#l2").hide();
				}	
				var len=$('#txt3').val().length;
			if (len<=0) {		
				$("#l3").show(function(){
					$(this).addClass("ll1");
					 $("#txt3").keyup(function(){
       $("#l3").hide();
    });
				});
				}	
				else{
					$("#l3").hide();
				}										
		});


		
		
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
        $('#txt5').focusout(function(){

                $('#txt5').filter(function(){
                   var emil=$('#txt5').val();
              var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if( !emailReg.test( emil ) ) {
               $("#l4").show(function(){
					$(this).addClass("ll1");
				});
                } else {
                $("#l4").hide(function(){
					$(this).addClass("ll1");
				});
                }
                })
            });
       $('select').change(function(){
			
			var value = $('select :selected').val();
			if(value=='other')
			{
				$("#txt8").show();
			}
			else
			{
				$("#txt8").hide();
			}
		});

        	

});