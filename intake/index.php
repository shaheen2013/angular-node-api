<?php include "config/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
<style>

  form{  border-collapse: collapse;
    margin: 0px;
    background: #FFFFFF;
    border-color: #f2f2f2;
    border-style: solid;
    border-width: 1px;
  }
</style>
</head>
<body>
<div class="container ">
  <div class="clearfix"></div>
   <div class="inner-container">
   
  
    <form action="formsubmit.php" method="post" class="border-0" style="padding-top: 3%;">
      
      <div class="form-group row border-0">
       
        <label for="inputEmail3" class="col-sm-2 col-form-label">Email <span style="color:red">*</span></label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail3" placeholder="Type Your Email" name="useremail" required>
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label">What is the date? <span style="color:red">*</span></label>
        <div class="col-sm-10">
          <input type="text" class="form-control ui-datepicker ui-datepicker-buttonpane date"  name="date">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputPassword3" class="col-sm-2 col-form-label"> What product have you used?*</label>
        <div class="col-sm-10">
          <input type="text" class="form-control product product_first"  name="productname[]" >
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
        
        <div class="addmorediv">
        <?php 
		
		for($div=1;$div<=26;$div++){
		?>
        
        <div class="productselemts" id="element_<?php echo $div ?>" style="display:none">
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
     
     
        
        
        </div>
        
        
        <?php } ?>
        
        </div>
   
      <div class="form-group row">
        <div class="offset-sm-2 col-sm-10">
       <input type="hidden" name="no_of_products" id="no_of_products" value="1">
          <button type="button" class="btn btn-primary addmore">+ Add another</button>
          <button type="submit" class="btn btn-primary">Done</button>
       
        </div>
      </div>
        
    </form>
    
  </div>
</div>
<!-- jQuery first, then Tether, then Bootstrap JS. --> 
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> 
<script src="http://code.jquery.com/jquery-1.9.1.js"></script> 
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
</body>
</html>
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
$(document).ready(function(e) {
   var no_of_products =1; 
	$(".ui-datepicker").datepicker();
	$(".addmore").on("click",function(event){
		event.preventDefault();
	 var email =  $("#inputEmail3").val();
	 var datevalu = $(".date").val();
	 var product_first  = $(".product_first");
	 
	 if( email  && datevalu && product_first) 	
		{
	$("#element_"+no_of_products).show();	
	//consloe.log($("#element_"+no_of_products).html());
	no_of_products++;  
	  }
		else{
			alert("please fill  data before adding")
			}
	});
	});
		
	

  





</script>