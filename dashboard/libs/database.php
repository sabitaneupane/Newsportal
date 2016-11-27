<?php 
class database {
	public function dbSetUp ()
	{
		$host = 'localhost';
		$user = 'root' ;
		$password = '';
		
		try {
			$connection = mysql_connect( $host, $user, $password);
			
			//$sql = "CREATE DATABASE hamro_radio";
			//mysql_query($sql , $connection);
			
			//mysql_query("CREATE DATABASE hamro_radio" , $connection);
			
			$db= mysql_select_db( "hamro_radio" , $connection);
		}
		
		catch (exception $e){
			echo $e-> getmessage;
		}
	}
	
	
	
}

?>