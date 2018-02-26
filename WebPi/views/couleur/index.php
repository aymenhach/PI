<script type="text/javascript" language="javascript"  >
var k=0;

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
                                    <form role="form" action='?controller=couleur&action=index&id=1'  method="post" enctype="multipart/form-data">
<div class="form-group" >
                                            <label >id du couleur :1 </label>

                                        </div>
                                        <div class="form-group" id="equipeone">
                                            <label>equipeone : <?php echo $couleur->equipeone;?>  </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick='changeequipeone();testbutton()'>Modifier</a>

                                        </div>
                                        <div class="form-group" id="equipetwo">
                                            <label>equipetwo : <?php echo $couleur->equipetwo;?>  </label>&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick='changeequipetwo();testbutton()'>Modifier</a>

                                        </div>

                                        <br><br>
                                         <div class="form-group" id="button">

										</div>
                                    </form>
                                </div>
								</div>
								</div>
								</div>
								</div>
