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
                        <strong>Editácia smeny</strong>
                    </h2>
                    <hr>
                
                 <?php echo validation_errors(); ?>
                <form action="<?php echo base_url('Smena/editing_smena'); ?>" method="post" accept-charset="utf-8">
                
                 <?php echo form_hidden('idSmena',$id);
                        echo form_label('Začiatok smeny: ');
                        echo form_input('zaciatok', $query['zaciatok'], 'class="form-control" maxlength="20"');
                  ?>
                
                <div class="clearfix"></div>
               <?php echo form_hidden('idSmena',$id);
                        echo form_label('Koniec smeny:');
                        echo form_input('koniec', $query['koniec'], 'class="form-control" maxlength="20"');
                  ?>
                
                <div class="clearfix"></div>
 
                  <label>Taxikár:</label>             
                  <?php echo form_dropdown('Taxikari_idTaxikari', $taxi, set_value('Taxikari_idTaxikari'), 'class="form-control"'); ?>
                
                <div class="clearfix"></div>
           
            <br>
                <br>
                <button class="btn btn-danger btn-circle">
                
				<a href="<?php echo base_url('Smena'); ?>" >Späť</a> </button>               <input type="submit" name="<?php echo base_url('Smena/editing_smena'); ?>" value="Uložiť"  class="btn btn-success" />
                </form>                
            </div>
        </div>

</div>
</body><!-- /.container -->
</header>

	