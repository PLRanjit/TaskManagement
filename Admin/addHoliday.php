<div class="buttons">
   <a id="add-event" data-toggle="modal" href="#modal-add-holy" class="btn btn-inverse btn-mini"><i class="icon-plus icon-white"></i> Add new Holiday</a>
   <div class="modal hide" id="modal-add-holy" >
      <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">x</button>
         <h3>Add a Holiday</h3>
      </div>

	  
	  
	  
	    <div class="modal-body" style="height:170px;">
         <form class="form-horizontal" role="form" action="addNewHoly.php" method="post">
         <?php 
            $date=date("Ym");
            $sdate=date('Y-m-d');
            $edate=date('Y-m-d', strtotime("+5 day"));
            ?>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  <input type="hidden" name="date" value="<?php echo $date; ?>" > 
                  From :
                  <div class="input-append date form_datetime">
                     <input class="form-control from_date" id="dp4" name="sdate" type="date" value="<?php echo $sdate;?>" placeholder="Start Date" style="width: 130px;" required>
                     <span class="add-on"><i class="icon-th"></i></span>
                  </div>
               </div>
               <div  class="span6">
                  To :
                  <div class="input-append date form_datetime">
                     <input class="form-control to_date"  id="dp5" name="ddate" type="date" value="<?php echo $edate;?>" placeholder="Due Date" style="width: 130px;" required>
                     <span class="add-on"><i class="icon-th"></i></span>
                  </div>
               </div>
            </div>
         </div>
         <div class="form-group">
            <div class="row-fluid">
               <div  class="span6">
                  Occassion :
                  <textarea rows="2" cols="550" class="form-control" id="Occasion" name="Occasion" type="textarea" placeholder="Task Desc" required></textarea>
               </div>
            </div>
         </div>
      </div>
	  
	  
	  
      <div class="modal-footer form-group"> 
         <a href="#" class="btn" data-dismiss="modal">Cancel</a> 
         <input type="submit" class="btn btn-primary" name="submit" value="Add Holiday">
      </div>
	  </form>
   </div>
</div>