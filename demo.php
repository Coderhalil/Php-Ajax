<?php
$id =6;
$query = "


		SELECT * FROM tbl_sample WHERE id = 6
		";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			$output['first_name'] = $row['first_name'];
			$output['last_name'] = $row['last_name'];
		}
		
		?>