<?php

	$nav = ['index' => 'Home', 'about'=>'Over ons', 'portfolio'=> 'Portfolio', 'contact' => 'Contacteer ons'];
	echo '<ul>';

	foreach ($nav as $key => $value) {

		echo '<li><a href="'.$value.'.php">' .$value. '</a></li>';

	};
	
	echo '</ul';

?>