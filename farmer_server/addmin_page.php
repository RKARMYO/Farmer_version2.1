<!DOCTYPE html>
<html>
<head>
	<title>farmer_admin</title>
	<style type="text/css">
		.body
		{
			display: flex;
			flex-wrap: wrap;
			background-color:rgba(0,0,0,0.2);
		}
		.title
		{
			width:100%;
			height: 100px;
			margin: 10px;
		}
		.input
		{
			width:90%;
			height: 100%; 
			padding-left: 15px;	
		}
		.part1
		{
			width: 100%;
			height: 300px;
			margin:10px;
		}
		.textareapart1
		{
			width: 100%;height: 100%;
			padding-left: 5px;
		}
		#insert
		{
			color: white;
			background-color: green;
			border: none;
			border-radius: 5px;
			height: 40px;
		}
		.status
		{
			color:red;
			display:none;
		}
	</style>
</head>
<body>
	<form action="upload.php" method="post" id="formdata" enctype="multipart/form-data">
		<div class="body">

			<div class="title">
				<input type="text" class="input" id="title" name="title" placeholder="ခေါင်းစဉ်...">
			</div>

			<div class="part1">
				<label for="textareapart1">အပိုဒ်(၁)</label>
				<textarea class="textareapart1" id="textareapart1" name="textareapart1">
					
				</textarea>
			</div>

			<div class="part1" style="margin-top: 40px;">
				<label for="textareapart1">အပိုဒ်(၂)</label>
				<textarea class="textareapart1" id="textareapart2" name="textareapart2">
					
				</textarea>
			</div>

			<div class="title" style="margin-top: 30px;">
				<select id="posttype" name="posttype" class="input" style="height: 50%;" required>
					<option value="">အမျိုးအစားရွေးချယ်ပါ</option>
					<option value="1">အထွေထွေဗဟုသုတ</option>
					<option value="2">သီးပင်စားပင်များ</option>
					<option value="3">ပိုးမွှားများ</option>
					<option value="4">ပန်းပင်များ</option>
				</select>
			</div>

			<div class="title" style="margin-top: 0px;">
				<input type="text" class="input" id="imgurl" name="imgurl" placeholder="ဓါတ်ပုံ......">
				<br><br>
				<center><input type="submit" id="insert" value="Insert" name=""></center>
				<center><span class="status">ပေးပို့နေပါသည်...</span></center>
			</div>

	</div>
</form>


<script src="jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function(){ //alert("ok");
		$(document).on("submit","#formdata",function(e){ console.log("submit ok");
			$(".status").show();
			e.preventDefault();
			$.ajax({
				url:"insert.php",
				type:'post',
				data:new FormData(this),
				cache:false,// no cache
				processData:false,
				contentType:false,
				success:function(res){ alert(res);
					if(res==101)
					{
						alert("Insert Successfully!");
						$(".status").hide();
					}
					else
					{
						alert("Unsuccessfully!");
						$(".status").hide();
					}
				}
			});
		});
	});
</script>
</body>
</html>