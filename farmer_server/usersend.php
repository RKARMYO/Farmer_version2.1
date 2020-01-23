<!DOCTYPE html>
<html>
<head>
	<title>ပေးပို့ရန်</title>
	<style type="text/css">
		input,#senddata
		{
			padding-left: 15px;
		}
		body
		{
			background-color: black;
		}
		#usersendbtn
		{
			width: 100%;height: 100%;
			color: white;
			background-color: green;
			cursor: pointer;
			border-radius: 5px;
			border: none;
		}
		label
		{
			color: white;
		}
		.status
		{
			color: red;
			display: none;
		}
	</style>
</head>
<body>
	<div style="width: 98%;height: 100%;margin-left: 1%;">
		<div style="width: 98%;height: 40px;margin-left: 1%;background-color: ;">
			<input type="text" id="sendtitle" placeholder ="ခေါင်းစဉ်..." style="width: 100%;height: 100%;" name="">
		</div>

		
		<div style="width: 98%;height: 350px;margin-left: 1%;margin-top: 20px;background-color: ;">
			<label for="senddata">စာပိုဒ်...</label>
			<textarea style="width: 100%;height: 100%;" id="senddata">
				
			</textarea>
		</div>

		<div style="width: 50%;height: 40px;margin-left: 25%;margin-top: 40px;">
			<input type="button" id="usersendbtn" style="" value="ပေးပို့မည်" name="">
			<center><span class="status">ပေးပို့နေပါသည်...ခေတ္တစောင့်ပါ</span></center>
		</div>
	</div>

	<script src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#senddata").empty();

			$(document).on("click","#usersendbtn",function(){
				$(".status").show();
				var title=$("#sendtitle").val();
				var paragraph=$("#senddata").val();console.log("title :"+title+" paragraph :"+paragraph);
				$.post("insert.php",{usersend:"usersend",title:title,paragraph:paragraph},function(res){
					if(res==101)
					{
						alert("အောင်မြင်ပါသည်!");
						$(".status").hide();
					}
					else
					{
						alert("မအောင်မြင်ပါ!");
						$(".status").hide();
					}
				});
			});
		});
	</script>
</body>
</html>