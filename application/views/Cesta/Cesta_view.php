<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<header>
        <div class="container">
            <div style="margin-top: 70px" class="intro-text">
                <div style="margin: 20px" class="intro-heading"><h2>Zoznam ciest</h2></div>
            </div>

            <div class="row">
<div>Tip: Po kliknutí na záhlavie sa zoradia údaje vzostupne alebo zostupne.</div>
	<table id="myTable" class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr>
                        <td>Číslo cesty</td>
                        <td>Mesto</td>
                        <td>Ulica</td>
                        <td>Cieľové mesto</td>
                        <td>Cieľová ulica</td>
                        <td>Cena</td>
						<td>Najazdené kilometre</td>
						<td>Kontakt na zákazníka</td>
						<td>Dátum</td>
                        <td>Smena</td>

                    
                        <td>Editovanie</td>
                        <td>Vymazanie</td>
                    </tr>
                    </thead>
                    <tbody style="background-color:white; color:#333">
                <?php 
                 if($query->num_rows() > 0) {
                    foreach($query->result() as $row) {
                        ?>
                    <tr>
                        <td><?php echo $row->idCesta; ?></td>
                        <td><?php echo $row->Mesto; ?></td>
                        <td><?php echo $row->Ulica; ?></td>
                        <td><?php echo $row->Mesto_ciel; ?></td>
                        <td><?php echo $row->Ulica_ciel; ?></td>
                        <td><?php echo $row->cena; ?></td>
						<td><?php echo $row->najazdeneKm; ?></td>
						<td><?php echo $row->Zakaznik_kontakt; ?></td>
						<td><?php echo $row->datum; ?></td>
                        <td><?php echo $row->Smena_idSmena; ?></td>


         <td>
                            <form action="<?php echo base_url('Cesta/edit_cesta'); ?>" method="post" accept-charset="utf-8">
							<input type="hidden" name="idCesta" value="<?php echo htmlspecialchars($row->idCesta, ENT_QUOTES); ?>">
							
                            <button class="btn btn-success btn-circle" type="submit"><i class="fa fa-pencil"></i></button>
                            </form> 
                        </td>
                        <td>
                            <form action="<?php echo base_url('Cesta/delete_cesta'); ?>" method="post" accept-charset="utf-8">
							<input type="hidden" name="idCesta" value="<?php echo htmlspecialchars($row->idCesta, ENT_QUOTES); ?>">

                            <button class="btn btn-danger btn-circle" type="submit"><i class="fa fa-trash-o"></i></button>
                            </form>                        </td>
               
                      
                      
                    </tr>
                    <?php
                    }
                 }
                ?>          </tbody>
                </table>
	
	</div>
  <?php echo anchor('Cesta/add_cesta','Pridaj cestu','class="btn btn-warning"', 'align="right"');?>
                </div><br/>
            </div></header>

