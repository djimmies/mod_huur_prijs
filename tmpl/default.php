<?php
/**
 * @package		Dayman Media
 * @subpackage	mod_villa_prijs
 * @copyright	Copyright (C) 2014 Dayman Media, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div id="rekenform">
<form class="bereken" method="post" action="<?php echo $_SERVER['$PHP_SELF'];?>">
    <div class="bereken-switch">
      <input type="radio" name="seizoen" value="H" id="hoog" class="bereken-switch-input" checked>
      <label for="hoog" class="bereken-switch-label">Hoogseizoen<span><?php echo "{$h_seizoen_period}"; ?></span></label>
      <input type="radio" name="seizoen" value="L" id="laag" class="bereken-switch-input">
      <label for="laag" class="bereken-switch-label">Laagseizoen<span><?php echo "{$l_seizoen_period}"; ?></span></label>
    </div>
    

    <input type="number" name="personen" class="bereken-input" placeholder="Aantal personen" onkeypress="return isNumberKey(event)" required>
    <input type="number" name="dagen" class="bereken-input" placeholder="Aantal dagen" onkeypress="return isNumberKey(event)" required>
    

    <input type="submit" value="Bereken" class="bereken-button btn btn-primary">
  </form>
  <script>
    function isNumberKey(evt){
      var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
          return false;
      return true;
    }    
  </script>


  <div class="prijs">
    <?php
      
      //Neem imput over uit formulier
      $seizoen = $_POST['seizoen'];
      $personen = $_POST['personen'];
      $dagen = $_POST['dagen'];
      
      //Is het hoog of laagseizoen
      if ($seizoen == H) {
        $seizoen = $h_seizoen;
      }else{
        $seizoen = $l_seizoen;
      }

      // Bereken de prijs
      $prijs = $personen * $dagen * $seizoen; 
      
      //Toon de prijs
      echo "Deze periode kost € ". $prijs; 

      ?>
  </div>
</div><!--/rekenform-->
