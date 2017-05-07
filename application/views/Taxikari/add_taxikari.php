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
<h2 class="intro-text text-center">
                        <strong>Pridanie taxikára</strong>
                    </h2>
                    <hr>
<div class="container">

<center>

       
               
                   
                    
                
                 <?php echo validation_errors(); ?>
                <form action="<?php echo base_url('Taxikari/adding_taxikar'); ?>" method="post" accept-charset="utf-8">
                
				
				<center>
                  <?php echo form_label('Meno: '); ?>       <?php echo form_input ('meno', set_value('meno'), 'class="form-control" maxlength="455555" '); ?>
                
				
				<br>
                
				
                  <?php echo form_label('Priezvisko: '); ?>        <?php echo form_input('priezvisko', set_value('priezvisko'), 'class="form-control" maxlength="45"'); ?>
                
				<br>
                
                
                  <?php echo form_label('Auto: '); ?>         <?php echo form_input('auto', set_value('auto'), 'class="form-control" maxlength="45"'); ?>
                
				<br>
                
                
                  <?php echo form_label('Telefónne číslo: '); ?>         <?php echo form_input('tel', set_value('tel'), 'class="form-control" maxlength="13"'); ?>
                
				<br>
				
			   <br>
               
			   <button class="btn btn-danger btn-circle">
                
				<a href="<?php echo base_url('Taxikari'); ?>" >Späť</a> </button>               <input type="submit" name="<?php echo base_url('taxikari/adding_taxikar'); ?>" value="Uložiť"  class="btn btn-success" />
				
                </form>                
         
	</center>
</div>

<!-- /.container -->
</body>
</header>
