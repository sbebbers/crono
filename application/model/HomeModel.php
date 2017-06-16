<?php
require_once (serverPath('/model/ModelCore.php'));

class HomeModel extends \Application\Model\ModelCore
{
	protected $table;
	public function __construct(){
		parent::__construct();
		$this->table = "site_content";
	}
	
	/**
	 * Gets the view
	 * 
	 * @param	string
	 * @author	sbebbington
	 * @date	27 Feb 2017 - 17:16:09
	 * @version	0.0.1
	 * @return	array
	 * @todo
	 */
	public function getView(string $segment = 'home'){
		$query	= "SELECT `title`, `strap`, `body`, `notes`, `medium`"
				. "FROM `{$this->db}`.`{$this->table}` "
				. "WHERE `segment`=?;";
		$result	= $this->connection->prepare($query);
		$result->execute(array($colName));
		return $result->fetch(PDO::FETCH_ASSOC);
	}
}