<?php include('header.php'); ?>
<div class="page shirts section">
	    <div class="wrapper">
	        <h1>My Full Catalog of Stuff</h1>
	    
            <?php 
            $stuff = array();
            $stuff[101] = array("name" => "Amazon Echo", "img" => "img/stuff/stuff-101.jpg", "price" => 600);
            $stuff[102] = array("name" => "AR Drone", "img" => "img/stuff/stuff-102.jpg", "price" => 2500);
            $stuff[103] = array(
                "name" => "Leap Motion",
                "img" => "img/stuff/stuff-103.jpg",
                "price" => 350   
            );
            
            $stuff[104] = array(
                "name" => "Occulus Rift",
                "img" => "img/stuff/stuff-104.jpg",    
                "price" => 1200
            );
            $stuff[105] = array(
                "name" => "Pebble Smartwatch",
                "img" => "img/stuff/stuff-105.jpg",    
                "price" => 350
            );
            $stuff[106] = array(
                "name" => "Microsoft Kinect",
                "img" => "img/stuff/stuff-106.jpg",    
                "price" => 800
            );
            $stuff[107] = array(
                "name" => "HP Sprout Blended Reality",
                "img" => "img/stuff/stuff-107.jpg",    
                "price" => 15000
            );
            $stuff[108] = array(
                "name" => "Muse Brain Sensing Band",
                "img" => "img/stuff/stuff-108.jpg",    
                "price" => 1200
            );
            
            ?>
            <ul class="products">
                <?php foreach($stuff as $key => $value) {?>
                   <?php echo '<li><a href="#">
							<img src="'.$value["img"]. '"alt="'.$value["name"].'">
							<p>View Details</p>
						</a>
					</li>	
                    '?>
                    
                    <?php }?>
			</ul>
	    
	    
	    
	    
	    </div>    
	</div>
</div>
<?php include('footer.php'); ?>
