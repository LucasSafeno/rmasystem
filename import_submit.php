<?php 
$uploadir = "uploads/csv/";
$uploadfile = $uploadir.$_FILES['csv']['name'];


// mudar nome arquivo
$nome = $_FILES['csv']['name'];
str_replace(".xlsx","",$nome);
$nome = date('dmYHis').".xlsx";

// upload e renomeia arquivo 
if(move_uploaded_file($_FILES['csv']['tmp_name'], $uploadfile)){
    rename($uploadir.$_FILES['csv']['name'], $uploadir.$nome);

    // ler excel e importar para banco de dados
    $open = fopen("uploads/csv/".$nome,'r');
    $data = fgetcsv($open);

    var_dump($data);

    // Closing the file
    fclose($open);
    
}else{
    "Erro";
}
?>