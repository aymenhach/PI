<?php 

require_once('models/evenement.php'); ?>
    
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
									   
                                        <th>Id</th>
                                    
                                        <th>date_ev</th>
										<th>hum</th>
                                        <th>temp</th>
                                        <th>etat_parking</th>
                                        <th>etat_queue</th>
                                        <th>equipe one</th>
                                        <th>equipe two</th>
                                    </tr>
                                </thead>
                                <tbody>
								<?php foreach($evenements as $evenement) { 
                                ?>
								<tr class="danger" >
                                
                                    <tr  >
                                    
									<td><a href='?controller=evenement&action=show&id=<?php echo $evenement->id;?>'><?php echo $evenement->id; ?></a></td>
                                        <td><?php echo $evenement->date_ev; ?></td>
                                        <td><?php echo $evenement->hum; ?></td>
                                        <td><?php echo $evenement->temp; ?></td>
                                        <td class="center"><?php echo $evenement->etat_parking; ?></td>
                                        <td><?php echo $evenement->etat_queue; ?></td>
                                        <td class="center"><?php echo $evenement->equipeone; ?></td>
                                        <td class="center"><?php echo $evenement->equipetwo; ?></td>

										
                                    </tr>
									<?php } ?> 
                                

                                </tbody>
                            </table>
                            <a href="?controller=evenement&action=formulaire">Ajouter un evenement</a>