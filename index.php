<?php
/*
Plugin Name: Example Plugin
Plugin URI: 
Description: My First Assignment Plugin
Author: GAUTAM JUVARAJIYA
Author URI: 
Version: 0.1
*/


add_action("admin_menu", "addMenu");
function addMenu()
{
  add_menu_page("Example Options", "Example Options", 4, "example-options", "exampleMenu" );
  add_submenu_page("example_options", "Option 1", "Option 1", 4, "example-option-1", "option1");
}

function exampleMenu()
{
echo <<< 'EOD'
  <h1> My First Plugin Assignment</h1>
  <h2>It Works!!</h2>
EOD;
}

function option1()
{
  echo "Walrus";
}
