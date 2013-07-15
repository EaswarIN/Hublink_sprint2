<?PHP
class DBUtility{
private $db_host ="localhost";
/*hublink server settings*/
private $db_user ="hublinknetworks";
private $db_pass ="MwxKW5S4";
private $db_name ="wwwhublinknetworkscom";

/*Production settings*/
/*private $db_user ="582001";
private $db_pass ="juhomi123";
private $db_name ="582001";
*/
private $connection;

	private function connect(){
		$this->connection = mysql_connect($this->db_host,$this->db_user,$this->db_pass);
		if(!$this->connection)
		{
			die ("could not connect to db:" . $this->db_name .":" . mysql_error($this->connection));
		}
	}
	private function disconnect(){
		if($this->connection){
			mysql_close($this->connection);
		}
	}
	public function save($querystring){
		$this->connect();
		mysql_select_db($this->db_name,$this->connection);
		$result=mysql_query($querystring);
		$this->disconnect();
		return $result;
	}
	public function getData($querystring){
		$this->connect();
		mysql_select_db($this->db_name,$this->connection);
		$result = mysql_query($querystring);
		$this->disconnect();
		return $result;
	}

}

?>