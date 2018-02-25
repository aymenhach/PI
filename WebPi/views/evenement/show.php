<?php $image="false"; ?>
<script type="text/javascript" language="javascript"  >
var k=0;
function changename() {
document.getElementById("date_ev").innerHTML='<input  class="form-control" placeholder="date_ev" name="nomevenement" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annulernom();testbutton()">Annuler</a>';

k++;
}
function changeprice() {
document.getElementById("temp").innerHTML='<input type="text" step="0.1" class="form-control" placeholder="temp" name="temp" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annulerprice();testbutton()">Annuler</a>';

k++;
}

function changeref() {
document.getElementById("ref").innerHTML='<input class="form-control" placeholder="Entrer la nouvelle reference du evenement" name="refevenement" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annulerref();testbutton()">Annuler</a>';

k++
}
function changecatg() {
document.getElementById("catg").innerHTML='<input class="form-control" placeholder="Entrer la nouvelle categorie du evenement" name="catgevenement" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annulercatg();testbutton()">Annuler</a>';

k++;
}
function changedesc() {
document.getElementById("desc").innerHTML='<input class="form-control" placeholder="Entrer la nouvelle description du evenement" name="descevenement" />&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annulerdesc();testbutton()">Annuler</a>';

k++;
}
function changeimg() {
document.getElementById("img").innerHTML='<input type="file" name="photo"  class="form-control"  id="photo"/>&nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="annulerimg();testbutton()">Annuler</a>';
<?php $image="true"; ?>
k++;
}
function annulernom() {
	document.getElementById("nom").innerHTML='<label >Nom du evenement : <?php echo $evenement->nom;?> </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="changename();testbutton()">Modifier</a>';
	
	k--;
}
function annulerimg() {
	document.getElementById("img").innerHTML='<label>Image du evenement :<img  src="../../workspace/<?php echo $evenement->image;?>" height="200" width="200" id="imageevenement"  /></label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="changeimg();testbutton()">Modifier</a>' ;
	<?php $image="false"; ?>
	k--;
}
function annulerdesc() {
	document.getElementById("desc").innerHTML='  <label>Description du evenement : <?php echo $evenement->description;?>  </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="changedesc();testbutton()">Modifier</a>';
	
	k--;
}
function annulerprice() {
	document.getElementById("price").innerHTML='<label>Prix du evenement : <?php echo $evenement->prix;?> TND </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="changeprice();testbutton()">Modifier</a>';

	k--;
}
function annulerref() {
	document.getElementById("ref").innerHTML='<label >Reference du evenement : <?php echo $evenement->reference;?> </label> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="changeref();testbutton()">Modifier</a>';
	
	k--;
}
function annulercatg() {
	document.getElementById("catg").innerHTML='<label >categorie du evenement : <?php echo $evenement->categorie;?> </label> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="changecatg();testbutton()">Modifier</a>';
	
	k--;
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
                                            <label >Date : <?php echo $evenement->date_ev;?> </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="changename();testbutton()">Modifier</a>
                                           
                                        </div>                              
                                        <div class="form-group" id="hum">
                                            <label >humidite : <?php echo $evenement->hum;?> </label> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#" onclick="changeref();testbutton()">Modifier</a>
                                           
                                        </div>
										<div class="form-group" id="temp">
                                            <label >temperature : <?php echo $evenement->temp;?> </label> &nbsp;&nbsp;&nbsp;&nbsp; <a href="#?" onclick="changecatg();testbutton()">Modifier</a>
                                           
                                        </div>
										<div class="form-group" id="etat_parking">
                                            <label>etat parking : <?php  echo $evenement->etat_parking;?> </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="changeprice();testbutton()">Modifier</a>
                                           
                                        </div>
                                        <div class="form-group" id="equipeone">
                                            <label>equipeone : <?php echo $evenement->equipeone;?>  </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick='changedesc();testbutton()'>Modifier</a>
                                           
                                        </div>
                                        <div class="form-group" id="equipetwo">
                                            <label>equipetwo : <?php echo $evenement->equipetwo;?>  </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick='changedesc();testbutton()'>Modifier</a>
                                           
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