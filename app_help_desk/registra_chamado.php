<?php
echo '<pre>';
print_r($_POST);
echo '</pre>';

$arquivo = fopen('arquivo.hd', 'a');

$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

$texto = $_POST['titulo'] . '#' . $_POST['categoria'] . '#' . $_POST['descricao'] . PHP_EOL;

fwrite($arquivo, $texto);
fclose($arquivo);

header('Location: abrir_chamado.php');

?>