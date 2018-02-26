<?php
  class couleur {
    // we define 3 attributes
    // they are public so that we sn access them using $couleur->author directly
	public $equipeone;
	public $equipetwo;

    public function __construct($equipeone,$equipetwo) {
      $this->equipeone = $equipeone;
	    $this->equipetwo = $equipetwo;
    }


    public static function find() {
      $db = Db::getInstance();
      $req = $db->query('SELECT team1,team2 FROM couleur');
      $couleur = $req->fetch();
      return new couleur( $couleur['team1'], $couleur['team2']);
    }

	public  function update() {
      $db = Db::getInstance();
	  
if(!empty($this->equipeone)) {
	$sql ="UPDATE couleur
SET team1 = '".$this->equipeone."'
WHERE id= 1;";
$db->query($sql);
}

if(!empty($this->equipetwo)) {
	$sql ="UPDATE couleur
SET team2 = '".$this->equipetwo."'
WHERE id=1;";
$db->query($sql);
}

}


    }

  
?>
