    <!-- Login Form -->
	<br><br>
                   <form action="index.php" method="POST" enctype="multipart/form-data">
			            <div class="input-group">
						
                            <select class="btn btn-black btn-x select2"  name="med1" id="med1"  required>
						   <option value="">----MEDICINE----</option>
							<?php 
                              include 'dbCon.php';
                              $con = connect();
                              $sql = "SELECT * FROM `med_tables`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['med_id']; ?>"><?php echo $r['med_name']; ?></option>
                            <?php } ?>
                         </select>&nbsp;&nbsp;&nbsp;
				           <button class="btn btn-primary btn-x"  name="with" id="with" >WITH </button>
						   &nbsp;&nbsp;&nbsp;
						   
						 <select class="btn btn-black btn-x"  name="med2" id="med2"  required>
						   <option value="">----MEDICINE----</option>
                            <?php 
     
                              $con = connect();
                              $sql = "SELECT * FROM `med_tables`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['med_id']; ?>"><?php echo $r['med_name']; ?></option>
                            <?php } ?>
                         </select>&nbsp;&nbsp;&nbsp;
         
  						  <button class="btn btn-black btn-x" type="submit" name="medsearch">search <i class="fa fa-search"></i></button>
						  </div>
				        
                  </form>