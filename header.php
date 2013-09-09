<div id="nav">
     <ul class="sf-menu dropdown">
        	
        	<li class="selected"><a href="home.php">Home</a>      	           
            </li>
                      
            <li><a class="has_submenu" href="clients.php">Client</a></li>                           
            <li><a class="has_submenu" href="products.php">Product</a> </li>                                                           
            <li><a class="has_submenu" href="view_stock.php">Stock</a>
            </li>
             
              <li><a href="viewpo.php">Sales</a>
              
              </li> 
                                 
           <li>
           <a class="has_submenu" href="logout.php">logout</a>
           </li> 
           <li>
           <?php
 			if(isset($_SESSION['uname']) && isset($_SESSION['password']))
			{
				echo '<h4 style="color:#333;margin-left:600px;margin-top:16px;">'.$_SESSION['uname'].'</h4>';
				echo '<img class="user" src="imgs1/s8.png">';
			}
 			?></li>
                          
        </ul>
  
</div>
