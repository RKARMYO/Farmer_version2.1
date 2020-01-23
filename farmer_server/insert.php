<?php
	include 'connection.php';
?>
<?php
	//for security fun
	function security($string){
		return htmlspecialchars(stripslashes(trim($string)));
	}

	if(isset($_POST['posttype']))
	{
		$table="";
		$check=security($_POST['posttype']);
		if($check==1) $table="farmer";
		else if($check==2) $table="plant";
		else if($check==3) $table="insects";
		else if($check==4) $table="flower";

		
			$sql=$conn->prepare("INSERT INTO $table (title,part1,part2,image) VALUES (?,?,?,?)");
			$sql->bind_param("ssss",$ti,$p1,$p2,$img);
			$ti=security($_POST['title']);
			$p1=security($_POST['textareapart1']);
			$p2=security($_POST['textareapart2']);
			$img=security($_POST['imgurl']);
			if($sql->execute())
			{
				echo 101;
			}
			else
			{
				echo "can't execute";
			}		
	}
	if(isset($_POST['usersend']))
	{
		$sql=$conn->prepare("INSERT INTO usersend (title,paragraph) VALUES (?,?)");
		$sql->bind_param("ss",$title,$par);
		$title=security($_POST['title']);
		$par=security($_POST['paragraph']);
		if($sql->execute())
		{
			echo 101;
		}
		else
		{
			echo 404;
		}
	}
	if(isset($_POST['deleteid']))
	{
		$sql=$conn->prepare("DELETE usersend WHERE dbId=?");
		$sql->bind_param("i",$id);
		$id=security($_POST['deleteid']);
		if($sql->execute())
		{
			echo 101;
		}
		else
		{
			echo 404;
		}
	}

?>