<?php 
function get_categories(){
	$mydb->setQuery("SELECT * FROM `t_categoria`");
	$cur = $mydb->loadResultList();

	foreach ($cur as $result) {
		echo '<ul>
				<li><a href="index.php?q=product&category='.$result->CATEGORIES.'" >'.$result->CATEGORIES.'</a></li> 
			</ul>';
	}
}


?>