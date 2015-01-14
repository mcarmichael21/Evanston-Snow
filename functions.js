// JavaScript Document
function validateContactForm(event){
	var fields = ["firstName", "lastName", "email", "message"];
	var errCount = 0;
	
	for (var i = 0, len = fields.length; i < len; i++){
		if (i<3) {
			if($("input[name='"+fields[i]+"']").val() == ""){
				$("input[name='"+fields[i]+"']").css("border", "solid 1px #f00");
				$("#formError").css("visibility", "visible");
				errCount++;
			}else{
				$("input[name='"+fields[i]+"']").css("border", "solid 1px #d0d0d0");
			}
		}else{
			if($("textarea[name='"+fields[i]+"']").val() == ""){
				$("textarea[name='"+fields[i]+"']").css("border", "solid 1px #f00");
				$("#formError").css("visibility", "visible");
				errCount++;
			}else{
				$("textarea[name='"+fields[i]+"']").css("border", "solid 1px #d0d0d0");
			}
		}
	}
	
	if(errCount){
		event.preventDefault();	
	}
}

function validateScheduleForm(event){
	if($("#newCustomer").prop('checked')){
		var fields = ["firstName", "lastName", "time", "description"];
	}else{
		var fields = ["firstName", "lastName", "email", "phone", "address", "time", "description"];
	}
	var errCount = 0;
	
	for (var i = 0, len = fields.length; i < len; i++){
		if (i<len-1) {
			if($("input[name='"+fields[i]+"']").val() == ""){
				$("input[name='"+fields[i]+"']").css("border", "solid 1px #f00");
				$("#formError").css("visibility", "visible");
				errCount++;
			}else{
				$("input[name='"+fields[i]+"']").css("border", "solid 1px #d0d0d0");
			}
		}else{
			if($("textarea[name='"+fields[i]+"']").val() == ""){
				$("textarea[name='"+fields[i]+"']").css("border", "solid 1px #f00");
				$("#formError").css("visibility", "visible");
				errCount++;
			}else{
				$("textarea[name='"+fields[i]+"']").css("border", "solid 1px #d0d0d0");
			}
		}
	}
	
	if(errCount){
		event.preventDefault();	
	}
}

function newCustomerCheckBox(){
	if($("#newCustomer").prop('checked')){
		$(".newCustomerSection").hide();
	}else{
		$(".newCustomerSection").show();
	}
}