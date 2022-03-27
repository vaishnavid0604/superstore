      <!--  update Modal -->
<div class="modal fade" id="update_modal<?php echo $res['ORDID']?>" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="content">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Update Orders</h4>
            <button type="button" class="close" data-dismiss="modal">
              &times;
            </button>
          </div>
          <div class="modal-body bg-gradient-success">
		  
		  
			<form method="POST" action="update_query.php">
				
					 <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Order  ID: </label>
                <div class="col-md-9">
											<input type="hidden" name="oid" value="<?php echo $res['ORDID']?>"/>

                  <input class="form-control" type="text" name="id" value="<?php echo $oid?>" readonly />
                </div>		
              </div>
			  
				 <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Payment Status: </label>
                <div class="col-md-9">
					<select class="form-control" type="text" name="pstat"  value="<?php echo $pstat?>">
					<option selected hidden > <?php echo $pstat?> </option>
					  <option>PAID</option>
					  <option>UNPAID</option>
					</select>               
					</div>		
              </div>
			  
			  	 <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Shipment Mode: </label>
                <div class="col-md-9">
                 <select class="form-control" type="text" name="smode" value="<?php echo $smode?>">
				<option selected hidden >  <?php echo $smode?>  </option>
				  <option>PREMIUM</option>
				  <option>NORMAL</option>
				</select>
                </div>		
              </div>
			  
			  	 <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" > Shipment Status: </label>
                <div class="col-md-9">
                  <select class="form-control" type="text" name="sstat" value="<?php echo $sstat?>">
				<option selected hidden >  <?php echo "$sstat"?>  </option>
				  <option>PENDING</option>
				  <option>DELIVERED</option>
				</select>
				</div>		
              </div>
			  
			  
			  <div class="form-group row">
                <label for="staffid" class="col-md-3 col-form-label text-white" >  </label>
                <div class="col-md-9">
            <button name="updateord" class=" btn-block btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>		
                </div>		
              </div>
			  


			  
				
				
			</form>
		</div>
	</div>
	
	
	
				  </div>
				</div>