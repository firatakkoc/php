  <?php 
        echo $c_form->input_name(
            'Dein Name', 
            'name', 
            'guestbook-entry-input', 
            true
        ); 
        echo $c_form->input_title(
            'Title des Eintrags', 
            'title', 
            'guestbook-entry-input', 
            true
        ); 

        echo $c_form->input_text(
            'Inhalt des Eintrags', // $label
            'content', // $name
            4, // $row
            '', // $value (boş string olarak bırakılmıştır)
            '', // $placeholder (boş string olarak bırakılmıştır)
            true // $required
        );
        
    ?>

    <div class="guestbook-form-button">
        <?php 
            echo $c_form->input_btn('reset_guestbook', 'reset', '&#10007 Zurücksetzen');
            echo $c_form->input_btn('insert_guestbook_entry', 'submit', '&#10004 Absenden');
        ?>
    </div>
