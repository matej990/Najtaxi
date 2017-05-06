<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<header class="intro-header" >
<div class="container">
<br></br>
        <div class="row">
            <div class="box">
               <div class="col-lg-12">
                  
                    <h2 class="intro-text text-center">
                        <strong>Editácia cesty</strong>
                    </h2>
                    <hr>
                </div>
                 <?php echo validation_errors(); ?>
                <form action="<?php echo base_url('Cesta/editing_cesta'); ?>" method="post" accept-charset="utf-8">
                <div class="form-group col-lg-4">
                 <?php echo form_hidden('idCesta',$id);
                        echo form_label('Mesto: ');
                        echo form_input('Mesto', $query['Mesto'], 'class="form-control" maxlength="45"');
                  ?>
                </div>
                <div class="clearfix"></div>
 <div class="form-group col-lg-4">
                  <?php 
                        echo form_label('Ulica:');
                        echo form_input('Ulica', $query['Ulica'], 'class="form-control" maxlength="45"');
                  ?>
                </div>
                <div class="clearfix"></div>
 <div class="form-group col-lg-4">
                  <?php
                        echo form_label('Cieľové mesto:');
                        echo form_input('Mesto_ciel', $query['Mesto_ciel'], 'class="form-control" maxlength="45"');
                  ?>
                </div>
                <div class="clearfix"></div>
 <div class="form-group col-lg-4">
                  <?php
                        echo form_label('Cieľová ulica:');
                        echo form_input('Ulica_ciel', $query['Ulica_ciel'], 'class="form-control" maxlength="45"');
                  ?>
                </div>
                <div class="clearfix"></div>
                 <div class="form-group col-lg-4">
                  <?php
                        echo form_label('Cena:');
                        echo form_input('cena', $query['cena'], 'class="form-control" maxlength="10"');
                  ?>
				  </div>
                <div class="clearfix"></div>
                 <div class="form-group col-lg-4">
                  <?php
                        echo form_label('Najazdené kilometre:');
                        echo form_input('najazdeneKm', $query['najazdeneKm'], 'class="form-control" maxlength="10"');
                  ?>
				  </div>
                <div class="clearfix"></div>
                 <div class="form-group col-lg-4">
                  <?php
                        echo form_label('Kontakt na zákazníka:');
                        echo form_input('Zakaznik_kontakt', $query['Zakaznik_kontakt'], 'class="form-control" maxlength="10"');
                  ?>
				  </div>
				<div class="clearfix"></div>
                 <div class="form-group col-lg-4">
                  <?php
                        echo form_label('Dátum:');
                        echo form_input('datum', $query['datum'], 'class="form-control" maxlength="10"');
                  ?>
                </div>
                <div class="form-group col-lg-4">
                  <label>Smena:</label>             
                  <?php echo form_dropdown('Smena_idSmena', $cesta, set_value('Smena_idSmena'), 'class="form-control"'); ?>
                </div>
                <div class="clearfix"></div>
              
               
                <a href="<?php echo base_url('Cesta'); ?>" class="btn btn-lg btn-info">Späť</a>           
                <input type="submit" name="<?php echo base_url('Cesta/editing_cesta'); ?>" value="Uložiť"  class="btn btn-success" />
                </form>                
            </div>
        </div>

</div>
<!-- /.container -->
</header>

	