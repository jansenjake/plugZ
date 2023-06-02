<?php
/*
 * Plugin Name: PlugZ
 * Description: Add text input.
 * Version: 1.0.0
 * Author: Jake Jansen
 */

function inputText(){
  ob_start();
  ?>


<input type="text" class="simple-input" placeholder="Type something...">

<?php
return ob_get_clean();
}
add_shortcode('inputText', 'inputText');
