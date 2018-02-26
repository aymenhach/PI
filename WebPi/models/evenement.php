<?php
  class evenement {
    // we define 3 attributes
    // they are public so that we sn access them using $evenement->author directly
    public $id;
    public $date_ev;
    public $hum;
	public $temp;
    public $etat_parking;
	public $etat_queue;
	public $equipeone;
	public $equipetwo;

    public function __construct($id,$hum,$equipeone, $temp, $etat_parking, $etat_queue,$equipetwo,$date_ev) {
      $this->id=$id;
      $this->hum  = $hum;
      $this->equipeone = $equipeone;
	    $this->date_ev = $date_ev;
      $this->temp = $temp;
	    $this->etat_parking  = $etat_parking;
      $this->etat_queue = $etat_queue;
	    $this->equipetwo = $equipetwo;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM evenement');

      // we create a list of evenement objects from the database results
      foreach($req->fetchAll() as $evenement) {
       // echo $evenement['id'];
        $list[] = new evenement($evenement['id_ev'], $evenement['hum'], $evenement['equipeone'], $evenement['temp'], $evenement['etat_parking'], $evenement['etat_queue'], $evenement['equipetwo'],$evenement['date_ev']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();

      // we make sure $id_evis an integer
      $id_ev= intval($id);

      $req = $db->query('SELECT * FROM evenement WHERE id_ev='.$id);
      // the query was prepared, now we replace :id_evwith our actual $id_evvalue

      $evenement = $req->fetch();

      return new evenement($evenement['id_ev'], $evenement['hum'], $evenement['equipeone'], $evenement['temp'], $evenement['etat_parking'], $evenement['etat_queue'], $evenement['equipetwo'],$evenement['date_ev']);
    }
	public  function update() {
      $db = Db::getInstance();
	  if(!empty($this->hum)) {
	$sql ="UPDATE evenement
SET hum = '".$this->hum."'
WHERE id_ev= '".$this->id."';";
$db->query($sql);
}
if(!empty($this->temp)) {
	$sql ="UPDATE evenement
SET temp = '".$this->temp."'
WHERE id_ev= '".$this->id."';";
$db->query($sql);
}
if(!empty($this->equipeone)) {
	$sql ="UPDATE evenement
SET equipeone = '".$this->equipeone."'
WHERE id_ev= '".$this->id."';";
$db->query($sql);
}

if(!empty($this->equipetwo)) {
	$sql ="UPDATE evenement
SET equipetwo = '".$this->equipetwo."'
WHERE id_ev= '".$this->id."';";
$db->query($sql);
}

if(!empty($this->date_ev)) {
	$sql ="UPDATE evenement
SET date_ev = '".$this->date_ev."'
WHERE id_ev= '".$this->id."';";
$db->query($sql);
}
if(!empty($this->etat_queue)) {
	$sql ="UPDATE evenement
SET etat_queue = '".$this->etat_queue."'
WHERE id_ev= '".$this->id."';";
$db->query($sql);
}
if(!empty($this->etat_queue)) {
	$sql ="UPDATE evenement
SET etat_parking = '".$this->etat_parking."'
WHERE id_ev= '".$this->id."';";
$db->query($sql);
}


    }
    public static  function delete($id) {
        $db = Db::getInstance();
      $sql="DELETE from evenement WHERE id_ev='".$id."'";
      $db->query($sql);
    }
      public  function add() {
         $db = Db::getInstance();
        $sql="INSERT into evenement (hum,equipeone,temp,etat_parking,etat_queue,equipetwo,date_ev) VALUES ('".$this->hum."','".$this->equipeone."','".$this->temp."','".$this->etat_parking."','".$this->etat_queue."','".$this->equipetwo."','".$this->date_ev."')";
        $db->query($sql);
      }

  }
?>
