$(document).ready(function(){
	$("#captcha").focus();
	$("#btn_check").click(function(){
		$("#result").removeClass("status_green");
		$("#result").removeClass("status_red");

		var captcha= $("#captcha").val();
		if (captcha.length==0){
			$("#result").addClass("status_red").html("captcha kosong!");
			$("#captcha").focus();
		}else{
			$.ajax({
			url: "ajax_captcha.php",
			type: "GET",
			data: {"captcha":captcha},
			success: function(data){
			if(data=="1"){
			$("#img_result").attr("src","images/cek41.png").css("display","inline");
			$("#result").addClass("status_green").html("autentifikasi berhasil");
			$("#btn_kirim").prop("disabled", false);
			}else if(data=="0"){
			$("#result").addClass("status_red").html("autentifikasi gagal");
			$("#img_result").attr("src","images/cross.png").css("display","inline");
			$("#captcha").focus();
			}
			console.log(data);
			}
			});
		}
	});
	$("#btn_ulangi").click(function(){
		window.location.href="index.php";
	});

});
