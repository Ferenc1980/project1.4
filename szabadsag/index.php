<html>
	<head>
		<title>CRUD</title>
		<style>
		*{
	margin:0px;
	padding:0px;
}
body{
	font-family:roboto;
	font-size:120%;
}
input{
	display:block;
	width:100%;
	height:30px;
	margin-top:10px;
	font-family:roboto;
	padding:3px;
}
button{
	display:block;
	background:#555556;
	color:white;
	border:none;
	border-radius:3px;
	font-family:roboto;
	margin-top:10px;
	padding:5px;
	font-family:roboto;
}

h2,h3{
text-align:Center;
}

#reg{
	padding:15px;
	height:auto;
	width:500px;
	margin:25px auto;
	background:#eeeeee;
}
.del{background:red;}
#add{background:blue;}
#submit{background:green;}

		</style>
	</head>
	<body>
	<h2>Dynamic Add and Remove Input Field In jQuery With PHP and MySQL</h2>
	<div id="reg">
	
		<form id="frm">
			<table id="tbl">
				<tr>
					<td>
						<input type="text" name="kod[]" placeholder="add meg a kódot">
					</td><td>
						<input type="text" name="leiras[]" placeholder="add meg a leírást">
					</td>
					<td>
						<button type="button" id="add"></button>
					</td>
				</tr>
			</table>
			<button type="button" id="submit">Submit</button>
		</form>
		<p></p>
	</div>
		<script src="jquery.js"></script>
		<script>
			$("document").ready(function(){
				
				$("#add").click(function(){
					$("#tbl").append('<tr><td><input type="text" name="kod[]" placeholder="add meg a kódot"></td><td><input type="text" name="leiras[]" placeholder="add meg a leírást"></td>p					<td><button type="button" class="del">Delete</button></td></tr>');
				});
				
				$(document).on('click','.del',function(){
						 $(this).closest("tr").remove();  
				});
				$("#submit").click(function(){
					$.ajax({
						url:"save.php",
						type:"post",
						data:$("#frm").serialize(),
						success:function(data){
							$("p").html(data);
							$("#frm")[0].reset();
						}
					});
				});
			});
		</script>
	</body>
</html>