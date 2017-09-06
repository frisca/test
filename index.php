<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/style.css">
</head>
<body>
	<nav class="navbar navbar-inverse" role="navigation"> 
   		<div class="navbar-header"> 
     	 <a class="navbar-brand" href="#">Aplikasi Tukar Nilai</a> 
   		</div> 
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-sm-9 form">
				<div class="header-form">
					<label>Silahkan masukkan nilai a dan b</label>
				</div>
				<div class="pesan">
					<div class="alert alert-info">
		  				Hasil Tukar Nila a dan b
					</div>
				</div>		
				<div class="content-form">
					<label>Nilai a</label>
					<input type="number" name="a" class="form-control" id="a">
				</div>
				<div class="content-form">
					<label>Nilai b</label>
					<input type="number" name="b" class="form-control" id="b">
				</div>
				<div class="button">
					<button class="btn" id="tukar">Tukar</button>
					<button class="btn" id="reset">Reset</button>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(e){
			$('#reset').on('click', function(e){
				$('#a').val("");
				$('#b').val("");
				$('.pesan').css("display", "none");
			});
			$('#tukar').on('click',function(e){
				if($("#a").val() == "")
				{
					alert("Nilai a tidak boleh kosong dan huruf");
				}

				if($("#b").val() == "")
				{
					alert("Nilai b tidak boleh kosong dan huruf");
				}

				if($("#b").val() != "" && $("#a").val() != ""){
					var a = $('#a').val();
					var b = $('#b').val();
					$.ajax({
						url : "controller/tukar.php",
						type : "post",
						data : {a : a, b : b},
						dataType: "json",
						success : function(e){
							$('.pesan').css('display', 'block');
							$('#a').val(e.a);
							$('#b').val(e.b);						
						}
					});
				}
			});
		});
	</script>
</body>
</html>