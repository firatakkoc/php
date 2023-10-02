<?php 

class Form {

  public function get_label($label, $for) {
    return '<label class="guestbook-entry-label" for="'.$for.'">'.$label.'</label>';
  }

  public function get_required($required = false) {
    if($required == false) return 'required=""';
    else return 'required="required"';
  }


  public function input_name($label = '', $name, $value = '', $placeholder = '', $required = false) {
    $html  = $this->get_label($label, $name);
    $html .= '<input '.$this->get_required($required).' class="guestbook-entry-input" type="text" id="'.$name.'" name="'.$name.'" />';
    return $html;
  }

  public function input_title($label = '', $name, $value = '', $placeholder = '', $required = false) {
    $html  = $this->get_label($label, $name);
    $html .= '<input '.$this->get_required($required).' class="guestbook-entry-input" type="text" id="'.$name.'" name="'.$name.'" />';
    return $html;
  }

  public function input_text($label = '', $name, $row, $value = '', $placeholder = '', $required = false) {
    $html  = $this->get_label($label, $name);
    $html .= '<textarea '.$this->get_required($required).' rows="'.$row.'" class="guestbook-entry-input" id="'.$name.'" name="'.$name.'" placeholder="'.$placeholder.'">'.$value.'</textarea>';
    return $html;
}

public function input_btn($name, $type, $value) {
  $html = '<input class="button" name="'.$name.'" type="'.$type.'" value="'.$value.'">';
  return $html;
}





}