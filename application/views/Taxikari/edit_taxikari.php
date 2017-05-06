<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<header class="intro-header" >
<div class="container">
<br></br>
        <div class="row">
            <div class="box">
               <div class="col-lg-12">
                    
                    <h2 class="intro-text text-center">
                        <strong>Editácia taxikárov</strong>
                    </h2>
                    <hr>
                </div>
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
                
                <a href="<?php echo base_url('Taxikari'); ?>" class="btn btn-lg btn-info">Späť</a>                <input type="submit" name="<?php echo base_url('Taxikari/editing_taxikar'); ?>" value="Uložiť"  class="btn btn-success" />
                </form>                
            </div>
        </div>

</div>
<!-- /.container -->

</header>