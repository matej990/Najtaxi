<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<header class="intro-header" >
<div class="container">
<br></br>
        <div class="row">
            <div class="box">
               <div class="col-lg-12">
                    
                    <h2 class="intro-text text-center">
                        <strong>Editácia smeny</strong>
                    </h2>
                    <hr>
                </div>
                 <?php echo validation_errors(); ?>
                <form action="<?php echo base_url('Smena/editing_smena'); ?>" method="post" accept-charset="utf-8">
                <div class="form-group col-lg-4">
                 <?php echo form_hidden('idSmena',$id);
                        echo form_label('Začiatok smeny: ');
                        echo form_input('zaciatok', $query['zaciatok'], 'class="form-control" maxlength="20"');
                  ?>
                </div>
                <div class="clearfix"></div>
 <div class="form-group col-lg-4">
                  <?php echo form_hidden('idSmena',$id);
                        echo form_label('Koniec smeny:');
                        echo form_input('koniec', $query['koniec'], 'class="form-control" maxlength="20"');
                  ?>
                </div>
                <div class="clearfix"></div>
 <div class="form-group col-lg-4">
                  <label>Taxikár:</label>             
                  <?php echo form_dropdown('Taxikari_idTaxikari', $taxi, set_value('Taxikari_idTaxikari'), 'class="form-control"'); ?>
                </div>
                <div class="clearfix"></div>
           
            
                
                <a href="<?php echo base_url('Smena'); ?>" class="btn btn-lg btn-info">Späť</a>                <input type="submit" name="<?php echo base_url('Smena/editing_smena'); ?>" value="Uložiť"  class="btn btn-success" />
                </form>                
            </div>
        </div>

</div>
<!-- /.container -->
</header>

	