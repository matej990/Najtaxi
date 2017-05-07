<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?> 
 <head>
 <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
 </head>

<header>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	
	
        <div class="container">
	

            <div style="margin-top: 70px"  class="intro-text">
                <div style="margin: 20px" class="intro-heading"><h2>Zoznam Taxikárov</h2></div>
            </div>

            <div class="row">
            <div>Tip: Po kliknutí na záhlavie sa zoradia údaje vzostupne alebo zostupne.</div>
                <table id="myTable" style="padding:5px" class="table table-striped table-bordered table-hover" >
                    <thead>
                    <tr>
                        <td>Číslo taxikára</td>
                        <td>Meno</td>
                        <td>Priezvisko</td>
                        <td>Značka auta</td>
                        <td>Telefónne číslo</td>
                    
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
                        <td><?php echo $row->idTaxikari; ?></td>
                        <td><?php echo $row->Meno; ?></td>
                        <td><?php echo $row->Priezvisko; ?></td>
                        <td><?php echo $row->auto; ?></td>
                        <td><?php echo $row->tel; ?></td>
                        
                                 <td>
                            <form action="<?php echo base_url('Taxikari/edit_taxikari'); ?>" method="post" accept-charset="utf-8">
							<input type="hidden" name="idTaxikari" value="<?php echo htmlspecialchars($row->idTaxikari, ENT_QUOTES); ?>">
							
                            <button class="btn btn-success btn-circle" type="submit"><i class="fa fa-pencil"></i></button>
                            </form> 
                        </td>
                        <td>
                            <form action="<?php echo base_url('Taxikari/delete_taxikari'); ?>" method="post" accept-charset="utf-8">
							<input type="hidden" name="idTaxikari" value="<?php echo htmlspecialchars($row->idTaxikari, ENT_QUOTES); ?>">

                            <button class="btn btn-danger btn-circle" type="submit"><i class="fa fa-trash-o"></i></button>
                            </form>                        </td>
               
                      
                      
                    </tr>
                    <?php
                    }
                 }
                ?>          </tbody>
                </table>


	
	</div>
      <?php echo anchor('Taxikari/add','Pridaj Taxikára','class="btn btn-warning"');?>
                </div>
           </section></header>

 