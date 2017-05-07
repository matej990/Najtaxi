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


<body class="intro-header">
<div class="container">

        
                    
                    <h2 class="intro-text text-center">
                        <strong>Pridanie novej cesty</strong>
                    </h2>
                    <hr>
                
                 <?php echo validation_errors(); ?>
                <form action="<?php echo base_url('Cesta/adding_cesta'); ?>" method="post" accept-charset="utf-8">
                
                  <?php echo form_label('Mesto:'); ?>         <?php echo form_input('Mesto', set_value('Mesto'), 'class="form-control" maxlength="45"'); ?>
                
                <div class="clearfix"></div>
				
                   <?php echo form_label('Ulica:'); ?>         <?php echo form_input('Ulica', set_value('Ulica'), 'class="form-control" maxlength="45"'); ?>
                
                <div class="clearfix"></div>
                
                
                   <?php echo form_label('Cieľové mesto:'); ?>         <?php echo form_input('Mesto_ciel', set_value('Mesto_ciel'), 'class="form-control" maxlength="45"'); ?>
                
                <div class="clearfix"></div>
                
                   <?php echo form_label('Cieľová ulica:'); ?>         <?php echo form_input('Ulica_ciel', set_value('Ulica_ciel'), 'class="form-control" maxlength="45"'); ?>
                
                <div class="clearfix"></div>
				
                   <?php echo form_label('Cena:'); ?>         <?php echo form_input('cena', set_value('cena','€'), 'class="form-control" maxlength="11"'); ?>
                
                <div class="clearfix"></div>
				
                   <?php echo form_label('Najazdené kilometre:'); ?>         <?php echo form_input('najazdeneKm', set_value('najazdeneKm'), 'class="form-control" maxlength="11"'); ?>
                
                <div class="clearfix"></div>
				
                   <?php echo form_label('Kontakt na zákazníka:'); ?>         <?php echo form_input('Zakaznik_kontakt', set_value('Zakaznik_kontakt'), 'class="form-control" maxlength="13"'); ?>
                
                <div class="clearfix"></div>
                
                   <?php echo form_label('Dátum:'); ?>         <input size="16" type="datetime-local" name="datum" set_value="datum" value="Váš prehliadač nepodporuje HTML5 formát pre dátum. Dátum zadajte manuálne." class="form-control">
                
                <div class="clearfix"></div>
                
                  <label>Smena:</label>             
                  <?php echo form_dropdown('Smena_idSmena', $cesta, set_value('Smena_idSmena'), 'class="form-control"'); ?>
                
                <div class="clearfix"></div>
                <br></br>
                <button class="btn btn-danger btn-circle">
                
				<a href="<?php echo base_url('Cesta'); ?>" >Späť</a> </button>               <input type="submit" name="<?php echo base_url('Cesta/adding_cesta'); ?>" value="Uložiť"  class="btn btn-success" />
                </form>                
            
        

</div>
</body>
<!-- /.container -->
</header>

	