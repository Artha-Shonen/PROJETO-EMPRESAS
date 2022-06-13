<?php



$nome= $_POST['nome'];
$sobrenome= $_POST['sobrenome'];
$telefone= $_POST['telefone'];
$email= $_POST["email"];
$arrobas= $_POST["arrobas"];
$datanascimento= $_POST['data'];
$senha= $_POST['senha'];
$confirmasenha= $_POST['confirmasenha'];


echo "Nome: ".$nome;
echo $sobrenome;
echo "<br/>";
echo "Nº de telefone: ".$telefone ;
echo '<br/>';
echo "Email:".$email;
echo $arrobas;
echo "<br/>";
echo "Nascido no dia: ".$datanascimento;
echo "<br/>";
echo $senha; 
echo '<br/>';
echo  $confirmasenha; 




if($_POST) {
    $senha= $_POST['senha'];
    $confirmasenha= $_POST['confirmasenha'];
        if ($confirmasenha != $senha) {
            $mensagem = "<span class='aviso'><b>Erro!!</b>: Senha não confere!</span>";
        } else {
            $mensagem = "<span class='erro'><b>Sucesso!</b>: As senhas conferem!</span>";
        }
        echo "<p id='mensagem'>".$mensagem."</p>";
 }
?>


