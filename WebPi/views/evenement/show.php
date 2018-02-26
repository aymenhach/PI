<?php $image="false"; ?>
<script type="text/javascript" language="javascript"  >
var k=0;
function changedate_ev() {
document.getElementById("date_ev").innerHTML='<input  class="form-control" placeholder="date_ev" name="date_ev" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annulernom();testbutton()">Annuler</a>';

k++;
}
function changetemp() {
document.getElementById("temp").innerHTML='<input type="text" step="0.1" class="form-control" placeholder="temp" name="temp" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annulerprice();testbutton()">Annuler</a>';

k++;
}

function changehum() {
document.getElementById("hum").innerHTML='<input class="form-control" placeholder="" name="hum" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annulerhum();testbutton()">Annuler</a>';

k++
}
function changeetat_parking() {
document.getElementById("etat_parking").innerHTML='<input class="form-control" placeholder="" name="etat_parking" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annuleretat_parking();testbutton()">Annuler</a>';

k++;
}
function changeetat_queue() {
document.getElementById("etat_queue").innerHTML='<input class="form-control" placeholder=" etat_queueription du " name="etat_queue" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annuleretat_queue();testbutton()">Annuler</a>';

k++;
}
function changeequipeone() {
document.getElementById("equipeone").innerHTML='<input class="form-control" placeholder=" etat_queueription du " name="equipeone" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annuleretat_queue();testbutton()">Annuler</a>';
k++;
}
function changeequipetwo() {
document.getElementById("equipetwo").innerHTML='<input class="form-control" placeholder=" etat_queueription du " name="equipetwo" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annuleretat_queue();testbutton()">Annuler</a>';
k++;
}
function showbutton() {
document.getElementById("button").innerHTML='<button type="submit"  class="btn btn-default" >Submit Button</button> <button type="reset" class="btn btn-default">Reset Button</button>';
}
function hidebutton() {
	document.getElementById("button").innerHTML='';
}
function testbutton(){
	if(k==0){
		hidebutton();
	}else {
		showbutton();

	}
}


</script>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action='?controller=evenement&action=modifier&id=<?php echo $evenement->id ?>'  method="post" enctype="multipart/form-data">
<div class="form-group" >
                                            <label >id du evenement : <?php echo $evenement->id;?> </label>

                                        </div>
                                        <div class="form-group" id="date_ev">
                                            <label >Date : <?php echo $evenement->date_ev;?> </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="changedate_ev();testbutton()">Modifier</a>

                                        </div>
                                        <div class="form-group" id="hum">
                                            <label >humidite : <?php echo $evenement->hum;?> </label> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="changehum();testbutton()">Modifier</a>

                                        </div>
										<div class="form-group" id="temp">
                                            <label >temperature : <?php echo $evenement->temp;?> </label> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#?" onclick="changetemp();testbutton()">Modifier</a>

                                        </div>
										<div class="form-group" id="etat_parking">
                                            <label>etat parking : <?php  echo $evenement->etat_parking;?> </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="changeetat_parking();testbutton()">Modifier</a>

                                        </div>
																				<div class="form-group" id="etat_queue">
										                                            <label>etat parking : <?php  echo $evenement->etat_queue;?> </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="changeetat_queue();testbutton()">Modifier</a>

										                                        </div>
                                        <div class="form-group" id="equipeone">
                                            <label>equipeone : <?php echo $evenement->equipeone;?>  </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick='changeequipeone();testbutton()'>Modifier</a>

                                        </div>
                                        <div class="form-group" id="equipetwo">
                                            <label>equipetwo : <?php echo $evenement->equipetwo;?>  </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick='changeequipetwo();testbutton()'>Modifier</a>

                                        </div>

                                        <br><br>
                                         <div class="form-group" id="button">

										</div>
                                    </form>
                                    <div align="right">
                                    <a href="?controller=evenement&action=supprimer&id=<?php echo $evenement->id?>">Supprimer</a>
                                    </div>
                                </div>
								</div>
								</div>
								</div>
								</div>
