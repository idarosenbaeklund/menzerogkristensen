<?php 
/*
*Plugin Name: Menzer plugin
*Plugin URI: http://localhost 
*Description: Simple Wordpress Form Plugin based on HTML5, CSS and PHP with an Contact Form
*Version: 0.0.1
*Author: Karoline Kure
*Author URI: http://localhost
*License: GPL2
*/

//function menzer_form starter her

function menzer_form(){
$content = '';
     
$content .= '<div class="email-form">';
$content .= '<div class="close">X</div>';
$content .= '<div class="email-description">';
$content .= '<h2>Modtag vores katalog</h2>';
$content .= '<p>Vi forstår godt det er svært at vide, hvor man skal starte. Derfor kan du her vælge hvilke katalog du vil have tilsendt. <br> Vi sender kataloget på mail med det samme.</p>';


$content .= '<section class="interest">';
$content .= '<label class="checkbox-inline"><input type="checkbox" value="inspiration">Inspiration</label><br>';
$content .= '<label class="checkbox-inline"><input type="checkbox" value="mursten">Mursten</label><br>';
$content .= '<label class="checkbox-inline"><input type="checkbox" value="plantegning">Plantegning</label>';
$content .= '</section>';
$content .= '</div>';

$content .= '<section class="form">';
$content .= '<form action="http://karolinekure.dk/menzer-og-kristensen/tak-for-din-bestilling/">';
$content .= '<div class="input">';
$content .= '<input type="email" name="email" id="email" placeholder="Skriv din email" required>';
$content .= '<input class="det-med-smat" type="checkbox" name="kontakt" value="kontakt"> Menzer & Kristensen må gerne kontakte mig<br>';
$content .= '<button><a href="http://karolinekure.dk/menzer-og-kristensen/tak-for-din-bestilling/" class="modtag-katalog">Modtag Katalog</a></button>';
$content .= '</div>';

$content .= '</form>';
$content .= '</section>';
$content .= '</div>';

return $content;
    
} //function menzer_form stopper 

//den shortcode vi skal bruge til at indsætte i wordpress
    add_shortcode('show_menzer_plugin', 'menzer_form');
    

 // Register stylesheet with the name - "register_plugin_styles
    add_action('wp_enqueue_scripts', 'register_plugin_styles');

function register_plugin_styles(){
   wp_register_style('menzer_plugin_style', plugins_url('menzer-plugin/css/style.css')); // refererer til css
    
   wp_enqueue_style(menzer_plugin_style);
    
   wp_deregister_script('jquery');
	   wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array(), "1.12.4", true); //refererer til jquery bibliotek
    
    wp_enqueue_script('Customscript', plugins_url('menzer-plugin/script.js'), array('jquery'), 'null', true); //refererer til vores script.js
    
}
    
?>
