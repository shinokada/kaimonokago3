<?php
if(count($this->data['mainnav']))
{
  echo "<nav id=\"topNav\">\n";
  //echo "\n<ul id='nav'>";
  echo "<ul>\n";
  foreach ($this->data['mainnav'] as $key => $menu)
  {
    if($menu['lang_id']==$this->data['lang_id'])
    {
      echo "\n<li class='menuone'>\n";
      // need to find page uri from id
      // menu /page_uri/lang_id
      echo anchor ($this->data['mainmodule']."/pages/".$menu['id'], $menu['name']);
      if (count($menu['children']))
      {
        echo "\n<ul>";
        foreach ($menu['children'] as $subkey => $submenu)
        {
          echo "\n<li class='menutwo'>\n";
          echo anchor($this->data['mainmodule']."/pages/".$submenu['id'],$submenu['name']);
          if (count($submenu['children']))
          {
            echo "\n<ul>";
            foreach ($submenu['children'] as $subkey => $subsubname)
            {
              echo "\n<li class='menuthree'>\n";
              echo anchor($this->data['mainmodule']."/cat/",$subsubname['name']);
              echo "\n</li>";
            }
            echo "\n</ul>";
          }
          echo "\n</li>";
        }
        echo "\n</ul>";
      }
      echo "\n</li>\n";
    }
  }
  echo "\n</ul>\n";
  echo "</nav>\n";
}
?>


