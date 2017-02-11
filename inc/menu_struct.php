<?php

class menin{ //menu info node
  var $content_file_name;//the filename corresponding to the node
  var $menu_item_label;//the label on the menu item
  var $visible;//is the node visible or not in the menu
  var $subnodes; //array of subnodes

  function menin($v1, $v2, $v3, $v4){
    $this->content_file_name = $v1;
    $this->menu_item_label = $v2;
    $this->visible = $v3;
    $this->subnodes = $v4; //array of subnodes
  }

}


class print_params{
  var $cell_sep = "<tr><td class=\"menuseparator\"></td></tr>"; //separator

  function print_menu_item($menin0, $is_active, $depth){
    if($is_active) $active_icon = "active_icon";
    else $active_icon = "inactive_icon" ;

    echo "<tr><td><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\"><tr>\n";

    echo "<td class=\"indentationlevel$depth\" ></td><td class=\"$active_icon\"></td>\n
    <td class=\"menucell\"><a href=\"$menin0->content_file_name\">$menin0->menu_item_label</a></td>\n";

    echo "</tr></table></td></tr>\n";

  }
}


function active_branch($menin0,$page_name ){ //returns the list of active nodes in the tree
  $ret_list = array();

  if($menin0->content_file_name == $page_name) {
    $ret_list[0] = $menin0;
    return $ret_list;
  }

  for ($i=0; $i<count($menin0->subnodes); $i++){
    $sub_branch = active_branch($menin0->subnodes[$i],$page_name);
    if(count($sub_branch)>0){
      $ret_list = $sub_branch;
      array_push($ret_list, $menin0);
    }
  }
  return $ret_list;  
}


function print_menu_recursive($active_branch0, $menin0, $cur_depth, $print_params){ //recursive traversal of the tree, for display
  
  $is_active = in_array($menin0, $active_branch0);

  if($menin0->visible){
    $print_params->print_menu_item($menin0,$is_active, $cur_depth);
  }

  if($cur_depth==1) echo $print_params->cell_sep;

  if($is_active)
    if(count($menin0->subnodes)>0){
      for ($i=0; $i<count($menin0->subnodes); $i++){
        print_menu_recursive($active_branch0, $menin0->subnodes[$i], $cur_depth+1, $print_params);
      }
      if($cur_depth==1) echo $print_params->cell_sep;
    }
}

function print_menu($menin0, $page_name){ //actual printing function

  echo '<table cellpadding="0" cellspacing="0" border="0" >';
  print_menu_recursive(active_branch($menin0,$page_name ), $menin0, 0, new print_params());
  echo '</table>';

}

?>
