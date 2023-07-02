<?php

// Dosya Olusturma;

touch("new_file.txt");

if(touch("new_file.txt")){
    echo "Created";
}
else {
    echo "Don'd Created";
}


?>