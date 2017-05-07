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

<header class="intro-header" >
<div class="container">

        
               
                    
                    <h2 class="intro-text text-center">
                        <strong>Editácia taxikárov</strong>
                    </h2>
                    <hr>
                
                 <?php echo validation_errors(); ?>
                <form action="<?php echo base_url('Taxikari/editing_taxikar'); ?>" method="post" accept-charset="utf-8">
                <div class="form-group col-lg-4">
                 <?php echo form_hidden('idTaxikari',$id);
                        echo form_label('Meno: ');
                        echo form_input('Meno', $query['Meno'], 'class="form-control" maxlength="30"');
                  ?>
                </div>
                <div class="clearfix"></div>
				<div class="form-group col-lg-4">
                  <?php echo form_hidden('idTaxikari',$id);
                        echo form_label('Priezvisko: ');
                        echo form_input('Priezvisko', $query['Priezvisko'], 'class="form-control" maxlength="30"');
                  ?>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-4">
                  <?php echo form_hidden('idTaxikari',$id);
                        echo form_label('Auto: ');
                        echo form_input('auto', $query['auto'], 'class="form-control" maxlength="10"');
                  ?>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-4">
                  <?php echo form_hidden('idTaxikari',$id);
                        echo form_label('Telefónne číslo: ');
                        echo form_input('tel', $query['tel'], 'class="form-control" maxlength="10"');
                  ?>
                </div>
                <div class="clearfix"></div>
                
                <button class="btn btn-danger btn-circle">
                
				<a href="<?php echo base_url('Taxikari'); ?>" >Späť</a> </button>                <input type="submit" name="<?php echo base_url('Taxikari/editing_taxikar'); ?>" value="Uložiť"  class="btn btn-success" />
                </form>                
            </div>
        </div>

</div>
<!-- /.container -->

</header>