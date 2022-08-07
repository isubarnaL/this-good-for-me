    <!-- Login Form -->
	<br><br>
                   <form action="index.php" method="POST" enctype="multipart/form-data">
			           <center> 
					   <div class="input-group">
                            <select class="btn btn-black btn-x"  name="food1" id="food1"  required>
						   <option value="">----FOOD----</option>
						   <?php 
                              include 'dbCon.php';
                              $con = connect();
                              $sql = "SELECT * FROM `f_tables`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['food_id']; ?>"><?php echo $r['food_name']; ?></option>
                            <?php } ?>                   							
                         </select>&nbsp;&nbsp;&nbsp;
				           <button class="btn btn-primary btn-x"  name="with" id="with" >WITH </button>
						   &nbsp;&nbsp;&nbsp;						   
						 <select class="btn btn-black btn-x"  name="food2" id="food2"  required>
						   <option value="">----FOOD----</option>
						   <?php 
                    
                              $con = connect();
                              $sql = "SELECT * FROM `f_tables`;";							  
                              $result = $con->query($sql);
                              foreach ($result as $r) {
                            ?>
                              <option value="<?php echo $r['food_id']; ?>"><?php echo $r['food_name']; ?></option>
                            <?php } ?>                   
                         </select>&nbsp;&nbsp;&nbsp;	
  						  <button class="btn btn-black btn-x" type="submit" name="foodsearch">search <i class="fa fa-search"></i></button>
						  </div>
						  </center>
				        
                  </form>
				 
						  
				  