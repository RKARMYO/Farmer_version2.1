<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>User_Data</title>
	<style type="text/css">
		body
		{
			background-color: black;
		}
		.delete:hover
		{
			cursor: pointer;
		}
		.delete
		{
			color: red;
		}
	</style>
</head>
<body>
	<div style="width: 100%;height: 100%;background-color: white;">
		<table border="1">
			<thead>
				<tr>
					<th>No</th><th>title</th><th>paragraph</th><th></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$sql=$conn->prepare("SELECT * FROM usersend");
					$sql->execute();
					$result=$sql->get_result();
					$row=$result->num_rows;
					if($row > 0 )
					{
						$no=1;
						while ($data=$result->fetch_assoc()) 
						{
							extract($data);
							echo "<tr><td>$no</td><td>$title</td><td>$paragraph</td><td><span class='delete'>Delete</span><input type='hidden' value='$dbId'></td></tr>";
							$no++;
						}
					}
					else
					{
						echo "No Data !";
					}
					
				?>
			</tbody>
		</table>
	</div>

	<script src="jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(document).on("click",".delete",function(){
				var deleteid=$(this).next().val();//alert(deleteid);
				$.post("insert.php",{deleteid:deleteid},function(res){
					if(res==101)
					{
						alert("Success !");
					}
					else
					{
						alert("Unsuccess!");
					}
				});
			});
		});
	</script>
</body>
</html>