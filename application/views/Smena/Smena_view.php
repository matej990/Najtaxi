<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<header>
        <div class="container">
            <div style="margin-top: 70px" class="intro-text">
                <div style="margin: 20px" class="intro-heading"><h2>Zoznam smien</h2></div>
            </div>

            <div class="row">
       <div>Tip: Po kliknutí na záhlavie sa zoradia údaje vzostupne alebo zostupne.</div>
	<table id="myTable" class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr>
                        <td>Číslo smeny</td>
                        <td>Začiatok služby</td>
                        <td>Koniec služby</td>
                        <td>Taxikár</td>

                    
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
                        <td><?php echo $row->idSmena; ?></td>
                        <td><?php echo $row->zaciatok; ?></td>
                        <td><?php echo $row->koniec; ?></td>
                        <td><?php echo $row->taxikarMeno; ?></td>


         <td>
                            <form action="<?php echo base_url('smena/edit_smena'); ?>" method="post" accept-charset="utf-8">
							<input type="hidden" name="idSmena" value="<?php echo htmlspecialchars($row->idSmena, ENT_QUOTES); ?>">


                            <button class="btn btn-success btn-circle" type="submit"><i class="fa fa-pencil"></i></button>
                            </form> 
                        </td>
                        <td>
                            <form action="<?php echo base_url('Smena/delete_smena'); ?>" method="post" accept-charset="utf-8">
							<input type="hidden" name="idSmena" value="<?php echo htmlspecialchars($row->idSmena, ENT_QUOTES); ?>">

                            <button class="btn btn-danger btn-circle" type="submit"><i class="fa fa-trash-o"></i></button>
                            </form>                        </td>
               
                      
                      
                    </tr>
                    <?php
                    }
                 }
                ?>          </tbody>
                </table>
	
	</div>
  <?php echo anchor('Smena/add_smena','Pridaj smenu','class="btn btn-warning"');?>
                </div>
           </header>
