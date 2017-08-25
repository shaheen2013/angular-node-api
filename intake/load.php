<?php include "config/config.php"; ?>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label"> What product have you used?*</label>
        <div class="col-sm-10">
          <input type="text" class="form-control product "  name="productname[]" >
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label"> How many items of this product have you used?</label>
        <div class="col-sm-10">
          <select name="no_of_times_used[]">
            <?php for($i=1;$i<=20;$i++){ ?>
            <option value="<?php echo $i?>"> <?php echo $i?></option>
            <?php  } ?>
            <option value="20+"> <?php echo "20+"?></option>
          </select>
        </div>
      </div>
      <div class="form-group row">
        <label for="InsertRecordused_time_hr" class="col-sm-2 col-form-label"> At what time did you use this product?</label>
        <div class="col-sm-10">
          <select name="InsertRecordused_time_hr[]" id="InsertRecordused_time_hr" class="cbFormSelect">
            <option value="1 AM">1 AM</option>
            <option value="2 AM">2 AM</option>
            <option value="3 AM">3 AM</option>
            <option value="4 AM">4 AM</option>
            <option value="5 AM">5 AM</option>
            <option value="6 AM">6 AM</option>
            <option value="7 AM">7 AM</option>
            <option value="8 AM">8 AM</option>
            <option value="9 AM">9 AM</option>
            <option value="10 AM">10 AM</option>
            <option value="11 AM">11 AM</option>
            <option value="12 AM">12 AM</option>
            <option value="1 PM">1 PM</option>
            <option value="2 PM">2 PM</option>
            <option value="3 PM">3 PM</option>
            <option value="4 PM">4 PM</option>
            <option value="5 PM">5 PM</option>
            <option value="6 PM">6 PM</option>
            <option value="7 PM">7 PM</option>
            <option value="8 PM">8 PM</option>
            <option value="9 PM">9 PM</option>
            <option value="10 PM">10 PM</option>
            <option value="11 PM">11 PM</option>
            <option value="12 PM">12 PM</option>
          </select>
        </div>
        <label for="InsertRecordused_time_slot" class="col-sm-2 col-form-label"> </label>
        <div class="col-sm-10">
          <select name="InsertRecordused_time_slot[]" id="InsertRecordused_time_slot" class="cbFormSelect">
            <option value="00 Min - 15 Min">00 Min - 15 Min</option>
            <option value="15 Min - 30 Min">15 Min - 30 Min</option>
            <option value="30 Min - 45 Min">30 Min - 45 Min</option>
            <option value="45 Min - 60 Min">45 Min - 60 Min</option>
          </select>
        </div>
      </div>
     
     
     <script>

/* list of fruit names should go in this list. This is the source of the auto complete which will be populated in the text box */
<?php 
$result =  mysqli_query($mysqli,"select product_name from voedingswaarden ") ;
 ?> 


var data = [
  <?php while ($row = mysqli_fetch_assoc($result)){ ?> 
  "<?php echo $row['product_name']; ?>",
  	<?php } ?>
	];
  
/*  jQuery ready function. Specify a function to execute when the DOM is fully loaded.  */
$(document).ready(
  
  /* This is the function that will get executed after the DOM is fully loaded */
  function () {
    
  /* binding the text box with the jQuery Auto complete function. */
    $( ".product" ).autocomplete({
      /*Source refers to the list of fruits that are available in the auto complete list. */
      source:data,
      /* auto focus true means, the first item in the auto complete list is selected by default. therefore when the user hits enter,
      it will be loaded in the textbox */
      autoFocus: true ,

    });
	
	
  }
  
  
  

);
     
      </script>
 