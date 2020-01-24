<?php
	include 'connection.php';
?>
<?php
    header("Access-Control-Allow-Origin:*");
	//for security fun
	function security($string){
		return htmlspecialchars(stripslashes(trim($string)));
	}

	//==================retrive data from server============
	if(isset($_GET['knowledge']))
	{
		//echo $_GET['lastid'];
		$sql=$conn->prepare("SELECT * FROM farmer WHERE dbId>? LIMIT 10");
		$sql->bind_param("i",$lastid);
		$lastid=security(($_GET['lastid']));//echo $lastid;
		$sql->execute();
		$result=$sql->get_result();
		$row=$result->num_rows;
		if($row > 0)
		{
			$arr=array();
			while($data=$result->fetch_assoc())
			{
				$arr[]=$data;
			}
			echo json_encode($arr);
		}
		else
		{
			echo 404;
		}
	}


	if(isset($_GET['plant']))
	{
		//echo $_GET['lastid'];
		$sql=$conn->prepare("SELECT * FROM plant WHERE dbId>? LIMIT 10");
		$sql->bind_param("i",$lastid);
		$lastid=security(($_GET['lastid']));//echo $lastid;
		$sql->execute();
		$result=$sql->get_result();
		$row=$result->num_rows;
		if($row > 0)
		{
			$arr=array();
			while($data=$result->fetch_assoc())
			{
				$arr[]=$data;
			}
			echo json_encode($arr);
		}
		else
		{
			echo 404;
		}
	}

	if(isset($_GET['insect']))
	{
		//echo $_GET['lastid'];
		$sql=$conn->prepare("SELECT * FROM insects WHERE dbId>? LIMIT 10");
		$sql->bind_param("i",$lastid);
		$lastid=security(($_GET['lastid']));//echo $lastid;
		$sql->execute();
		$result=$sql->get_result();
		$row=$result->num_rows;
		if($row > 0)
		{
			$arr=array();
			while($data=$result->fetch_assoc())
			{
				$arr[]=$data;
			}
			echo json_encode($arr);
		}
		else
		{
			echo 404;
		}
	}

	if(isset($_GET['flower']))
	{
		//echo $_GET['lastid'];
		$sql=$conn->prepare("SELECT * FROM flower WHERE dbId>? LIMIT 10");
		$sql->bind_param("i",$lastid);
		$lastid=security(($_GET['lastid']));//echo $lastid;
		$sql->execute();
		$result=$sql->get_result();
		$row=$result->num_rows;
		if($row > 0)
		{
			$arr=array();
			while($data=$result->fetch_assoc())
			{
				$arr[]=$data;
			}
			echo json_encode($arr);
		}
		else
		{
			echo 404;
		}
	}
?>