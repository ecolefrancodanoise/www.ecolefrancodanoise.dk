<?php

class menin{ //menu info node
  var $content_file_name;//the filename corresponding to the node
  var $menu_item_label;//the label on the menu item
  var $visible;//is the node visible or not in the menu
  var $image_name; //name of associated image
  var $subnodes; //array of subnodes

  function menin($v1, $v2, $v3, $v4, $v5){
    $this->content_file_name = $v1;
    $this->menu_item_label = $v2;
    $this->visible = $v3;
    $this->image_name = $v4;
    $this->subnodes = $v5; //array of subnodes
  }

}


class print_params{
  var $cell_sep = "<tr><td colspan=\"2\" class=\"menuseparator\"></td></tr>"; //separator
  var $sub_men_sep_beg = "<tr><td></td><td><table cellpadding=\"0\" cellspacing=\"0\" border=\"0\">\n";
  var $sub_men_sep_end = "</table></td></tr>";
  var $active_image_icon;
  var $inactive_image_icon;
  var $indentation;
  var $cell_width;

  function print_params($v1, $v2, $v3, $v4){
    $this->active_image_icon = $v1;
    $this->inactive_image_icon = $v2;
    $this->indentation = $v3;
    $this->cell_width = $v4;
  }

  function print_menu_item($menin0, $is_active){
    if($is_active) $img_name = $this->active_image_icon;
    else $img_name = $this->inactive_image_icon ;

    echo "<tr>\n";

    echo "<td width=\"$this->indentation\"  ><a href=\"$menin0->content_file_name\" >
    <img src=\"$img_name\" border=\"0\" ALT=\"\"></a></td>\n
    <td width=\"$this->cell_width\" class=\"menucell\"><a href=\"$menin0->content_file_name\">$menin0->menu_item_label</a></td>\n";

    echo "</tr>\n";

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
    $print_params->print_menu_item($menin0,$is_active);
    if($cur_depth==0) echo $print_params->cell_sep;
  }

  if($cur_depth==1) echo $print_params->cell_sep;

  if($is_active)
    if(count($menin0->subnodes)>0){
      echo $print_params->sub_men_sep_beg;
      for ($i=0; $i<count($menin0->subnodes); $i++){
        print_menu_recursive($active_branch0, $menin0->subnodes[$i], $cur_depth+1, $print_params);
      }
      echo $print_params->sub_men_sep_end;
      if($cur_depth==1) echo $print_params->cell_sep;
    }
}

function print_menu($active_branch0, $menin0, $cur_depth, $print_params){ //actual printing function

  echo '<table cellpadding="0" cellspacing="0" border="0" >';
  print_menu_recursive($active_branch0, $menin0, $cur_depth, $print_params);
  echo '</table>';

}

php?>
