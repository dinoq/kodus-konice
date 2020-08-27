<?php 
    
    $domu = "";
    $o = "";
    $sluzby = "";
    $skupina = "";
    $cenik = "";
    $fotogalerie = "";
    $kontakt = "";
    $dokumenty = "";

    if(isset($_GET) && isset($_GET['page'])){
        if($_GET['page'] == "domu"){
            $domu = "active";
        }else if($_GET['page'] == "o"){
            $o = "active";
        }else if($_GET['page'] == "sluzby"){
            $sluzby = "active";
        }else if($_GET['page'] == "skupina"){
            $skupina = "active";
        }else if($_GET['page'] == "cenik"){
            $cenik = "active";
        }else if($_GET['page'] == "fotogalerie"){
            $fotogalerie = "active";
        }else if($_GET['page'] == "kontakt"){
            $kontakt = "active";
        }else if($_GET['page'] == "dokumenty"){
            $dokumenty = "active";
        }
    }
?>
    	<header>
        	<div class="menu_box" id="desktop_main_menu">
        	<a href="index.php?page=domu"><img alt="KoDuS" src="images/logo.png" id="logo"></a>
				<div style="cursor:pointer" onclick="openNav()" class="small_screen_only">&#9776; Menu</div>
        		<div id="mySidenav" class="menu_items">
                	<nav>
                		<ul>
                			<li style="border: 0; padding: 0;"><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
                			<li style="border: 0;" class="<?php echo $domu;?>"><a href="?page=domu">Domů</a></li>
                			<li class="<?php echo $o;?>"><a href="?page=o">O KoDuSu</a></li>
                			<!-- <li class="<?php echo $sluzby;?>"><a href="index.php?page=sluzby">Služby KoDuSu</a></li> -->
                			<li class="<?php echo $skupina;?>"><a href="index.php?page=skupina">Cílová skupina</a></li>
                			<li class="<?php echo $cenik;?>"><a href="index.php?page=cenik">Ceník</a></li>
                			<li class="<?php echo $fotogalerie;?>"><a href="index.php?page=fotogalerie">Fotogalerie</a></li>
                			<li class="<?php echo $dokumenty;?>"><a href="index.php?page=dokumenty">Dokumenty ke stažení</a></li>
                			<li class="<?php echo $kontakt;?>"><a href="index.php?page=kontakt">Kontakt</a></li>
                		</ul>
                	</nav>
            	</div>
			</div>
    	</header>
    	
    	
<script>
    function openNav() {
        if($(window).width()>768){
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementsByTagName("main")[0].style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.6)";
        }else{
            document.getElementById("mySidenav").style.width = "100%";
        }

        document.getElementById("mySidenav").style.display = "block";
    }
    
    function closeNav() {
        if($(window).width()>768){
        	  document.getElementsByTagName("main")[0].style.marginLeft= "0";
        	  document.body.style.backgroundColor = "white";
        }else{
        }
        document.getElementById("mySidenav").style.width = "0";
    }
</script>