
<script type="text/javascript" language="javascript"  >
	 function validateForm()
    {
	var a=document.forms["Form"]["hum"].value;
	var b=document.forms["Form"]["temp"].value;
	var c=document.forms["Form"]["date_ev"].value;
	
	var d=document.forms["Form"]["equipeone"].value;
	var e=document.forms["Form"]["equipetwo"].value;
	var f=document.forms["Form"]["etat_parking"].value;
	var g=document.forms["Form"]["etat_queue"].files.length;
 if (a==null || a=="" , b==null || b=="" , c==null || c=="" , d==null || d=="" , e==null || e=="" , f==null || f=="" ||  g=="") {
 	alert("Please fill all the required fields");
 	return false;
 }
return true;
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
                                    <form name="Form" role="form" action='?controller=evenement&action=ajouter' onsubmit="return validateForm()"  method="post" enctype="multipart/form-data">     
									   <div class="form-group" >
                                            <label >date ev : <input  class="form-control" placeholder="Entrer l date" name="date_ev" id="date_ev"  />
                                           
                                        </div> 
                                        <div class="form-group" >
                                            <label >humidité : <input  class="form-control" placeholder="Entrer l'humidite" name="hum" id="hum"  />
                                           
                                        </div>                              
                                        <div class="form-group" >
                                            <label >Temperature : <input class="form-control" placeholder="Entrer temp" name="temp" />
                                           
                                        </div>
										<div class="form-group" >
                                           
                                        </div>
										<div class="form-group" >
                                            <label>Etat parking : <input type="text" step="0.1" class="form-control" placeholder="Entrer l'etat du parking du evenement" name="etat_parking" />
                                           
                                        </div>
										<div class="form-group" >
                                            <label>etat_queue :
										<input type="text" name="etat_queue"  class="form-control"  id="etat_queue"/>
										 </div>
										 <div class="form-group" >
                                            <label>equipetwo :<input class="form-control" placeholder="Entrer la  quantité du evenement" name="equipetwo" />
                                           
                                        </div>
                                        <div class="form-group" >
                                            <label>equipe One :<input class="form-control" placeholder="Entrer la  description du evenement" name="equipeone" />
                                           
                                        </div>
                                        
                                        <br><br>
                                         <div class="form-group" id="button">
                                        <button type="submit"  class="btn btn-default" >Submit Button</button> <button type="reset" class="btn btn-default">Reset Button</button>'
										</div>
                                    </form>

                                </div>
								</div>
								</div>
								</div>
								</div>