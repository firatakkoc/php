<?php

class HTML
{

  public function get_header($title = "")
  {
    $html = '<!DOCTYPE html>';
    $html .= '<html lang="en">';
    $html .= '<head>';
    $html .= '<meta charset="UTF-8">';
    $html .= '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
    $html .= '<title>' . $title . '</title>';
    $html .= '<link rel="stylesheet" href="/12-Geastebuch/01-select/styles/style.css">';
    $html .= '<link rel="preconnect" href="https://fonts.googleapis.com">';
    $html .= '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>';
    $html .= '<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">';
    $html .= '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />';
    $html .= '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">';
    $html .= '</head>';
    $html .= '<body>';

    
    return $html;
  }

  public function get_footer() {
    $html = 
            '<footer class="guestbook-footer">'+
              '<p>Implementiert im PHP</p>'+
            '</footer>'+
          '</div>'+
        '</body>'+
      '</html>';

    return $html;
  }

  public function get_guestbook_entries($entries) {
    $html = '';
    if($entries == NULL) return '';
    if(!is_array($entries)) return '';

    foreach($entries AS $entry) {
      $html .= '<div class="guestbook-entry">';
        $html .= '<div class="guestbook-entry-header">';
          $html .= '<h3 class="guestbook-entry-title">'.$entry["title"].'</h3>';
            $html .= '<span class="guestbook-entry-author">'.$entry["name"].'</span>';
        $html .= '</div>';
        $html .= '<div class="guestbook-entry-content">'.$entry['content'].'</div>';
      $html .= '</div>';
        $html .= '</div>';
        $html .= '<div class="guestbook-entry-content">'.$entry['date'].'</div>';
      $html .= '</div>';
    }

    return $html;

  }


  public function __alert($text, $type = 'success') {
    $html = '<div class="mt-2 alert alert-' . htmlspecialchars($type) . '" role="alert">';
    $html .= htmlspecialchars($text);
    $html .= '</div>';

    return $html;
}



}
