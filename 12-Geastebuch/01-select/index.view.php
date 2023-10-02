<?php 
session_start(); // Bu satırı en üste taşıdık.
require ('./inc/init.php');

$submit = false;

if(isset($_POST['insert_guestbook_entry'])) {
    $result = $c_guestbook->insert($_POST);
    $submit = true;
}

$entries = $c_guestbook->get_eintraege();

?>



<?php echo $c_html->get_header("Gästebuch"); ?>

    

    <div class="container">
        <h1 class="guestbook-heading">Gästebuch</h1>

        <form method="POST" action="">
            <?php include 'inc/form/guestbook.php'; ?>
        </form>

        <?php if((isset($submit)) && ($submit == true) ) echo $c_html->__alert('Ihr Eintrag wurde erfolgreich gespeichert', 'success'); ?>

        <hr class="guestbook-separator" />

        <?php  
            echo $c_html->get_guestbook_entries($entries);
        ?>



        <?php echo $c_html->get_footer(); ?>