<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<header class="intro-header">
<div class="container">
<br></br>
        <div class="row">
            <div class="box">
               <div class="col-lg-12">
                    
                    <h2 class="intro-text text-center">
                        <strong>Pridanie novej cesty</strong>
                    </h2>
                    <hr>
                </div>
                 <?php echo validation_errors(); ?>
                <form action="<?php echo base_url('Cesta/adding_cesta'); ?>" method="post" accept-charset="utf-8">
                <div class="form-group col-lg-4">
                  <?php echo form_label('Mesto:'); ?>         <?php echo form_input('Mesto', set_value('Mesto'), 'class="form-control" maxlength="45"'); ?>
                </div>
                <div class="clearfix"></div>
				<div class="form-group col-lg-4">
                   <?php echo form_label('Ulica:'); ?>         <?php echo form_input('Ulica', set_value('Ulica'), 'class="form-control" maxlength="45"'); ?>
                </div>
                <div class="clearfix"></div>
                
                <div class="form-group col-lg-4">
                   <?php echo form_label('Cieľové mesto:'); ?>         <?php echo form_input('Mesto_ciel', set_value('Mesto_ciel'), 'class="form-control" maxlength="45"'); ?>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-4">
                   <?php echo form_label('Cieľová ulica:'); ?>         <?php echo form_input('Ulica_ciel', set_value('Ulica_ciel'), 'class="form-control" maxlength="45"'); ?>
                </div>
                <div class="clearfix"></div>
				<div class="form-group col-lg-4">
                   <?php echo form_label('Cena:'); ?>         <?php echo form_input('cena','€', set_value('cena','€'), 'class="form-control" maxlength="11"'); ?>
                </div>
                <div class="clearfix"></div>
				<div class="form-group col-lg-4">
                   <?php echo form_label('Najazdené kilometre:'); ?>         <?php echo form_input('najazdeneKm', set_value('najazdeneKm'), 'class="form-control" maxlength="11"'); ?>
                </div>
                <div class="clearfix"></div>
				<div class="form-group col-lg-4">
                   <?php echo form_label('Kontakt na zákazníka:'); ?>         <?php echo form_input('Zakaznik_kontakt', set_value('Zakaznik_kontakt'), 'class="form-control" maxlength="13"'); ?>
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-4">
                   <?php echo form_label('Dátum:'); ?>         <input size="16" type="datetime-local" name="datum" set_value="datum" value="Váš prehliadač nepodporuje HTML5 formát pre dátum. Dátum zadajte manuálne." class="form-control">
                </div>
                <div class="clearfix"></div>
                <div class="form-group col-lg-4">
                  <label>Smena:</label>             
                  <?php echo form_dropdown('Smena_idSmena', $cesta, set_value('Smena_idSmena'), 'class="form-control"'); ?>
                </div>
                <div class="clearfix"></div>
                
                <a href="<?php echo base_url('Cesta'); ?>" class="btn  btn-info">Späť</a>                <input type="submit" name="<?php echo base_url('Cesta/adding_cesta'); ?>" value="Uložiť"  class="btn btn-success" />
                </form>                
            </div>
        </div>

</div>
<!-- /.container -->
</header>

	