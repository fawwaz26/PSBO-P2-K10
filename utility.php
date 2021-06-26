<?php
error_reporting(1);
	function ExecuteQuery ($SQL)
	{	
		$con=mysqli_connect ("remotemysql.com", "3306","RzVZRVD33y");
		mysqli_select_db ($con,"vBhhp5OLCx");
		
		$rows = mysqli_query ($con,$SQL);
		
		mysqli_close ();
		
		return $rows;
	}
	
	function ExecuteNonQuery ($SQL)
	{
		$con=mysqli_connect ("remotemysql.com", "3306","RzVZRVD33y");
		mysqli_select_db ($con,"vBhhp5OLCx");
		
		$result = mysqli_query ($con,$SQL);
		
		mysqli_close ();
		
		return $result;
	}
?>
