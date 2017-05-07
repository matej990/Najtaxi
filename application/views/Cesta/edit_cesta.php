<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<head>
 <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
 </head>
 
 <header>
<link href="../assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../assets/css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

<body class="intro-header" >
<div class="container">

    
                  
                    <h2 class="intro-text text-center">
                        <strong>Editácia cesty</strong>
                    </h2>
                    <hr>
                
                 <?php echo validation_errors(); ?>
                <form action="<?php echo base_url('Cesta/editing_cesta'); ?>" method="post" accept-charset="utf-8">
                
                 <?php echo form_hidden('idCesta',$id);
                        echo form_label('Mesto: ');
                        echo form_input('Mesto', $query['Mesto'], 'class="form-control" maxlength="45"');
                  ?>
                
                <div class="clearfix"></div>

                  <?php 
                        echo form_label('Ulica:');
                        echo form_input('Ulica', $query['Ulica'], 'class="form-control" maxlength="45"');
                  ?>
                
                <div class="clearfix"></div>
 
                  <?php
                        echo form_label('Cieľové mesto:');
                        echo form_input('Mesto_ciel', $query['Mesto_ciel'], 'class="form-control" maxlength="45"');
                  ?>
 
                <div class="clearfix"></div>
 
                  <?php
                        echo form_label('Cieľová ulica:');
                        echo form_input('Ulica_ciel', $query['Ulica_ciel'], 'class="form-control" maxlength="45"');
                  ?>
                
                <div class="clearfix"></div>
                 
                  <?php
                        echo form_label('Cena:');
                        echo form_input('cena', $query['cena'], 'class="form-control" maxlength="10"');
                  ?>
				 
                <div class="clearfix"></div>
                 
                  <?php
                        echo form_label('Najazdené kilometre:');
                        echo form_input('najazdeneKm', $query['najazdeneKm'], 'class="form-control" maxlength="10"');
                  ?>
				  
                <div class="clearfix"></div>
                 
                  <?php
                        echo form_label('Kontakt na zákazníka:');
                        echo form_input('Zakaznik_kontakt', $query['Zakaznik_kontakt'], 'class="form-control" maxlength="10"');
                  ?>
				  
				
                
                  <?php
                        echo form_label('Dátum:');
                        echo form_input('datum', $query['datum'], 'class="form-control" maxlength="10"');
                  ?>
                
                
                  <label>Smena:</label>             
                  <?php echo form_dropdown('Smena_idSmena', $cesta, set_value('Smena_idSmena'), 'class="form-control"'); ?>
                
                
              <br></br>
               
                <button class="btn btn-danger btn-circle">
                
				<a href="<?php echo base_url('Cesta'); ?>" >Späť</a> </button>           
                <input type="submit" name="<?php echo base_url('Cesta/editing_cesta'); ?>" value="Uložiť"  class="btn btn-success" />
                </form>                
            
		</div>
        


</body>
<!-- /.container -->
</header>

	