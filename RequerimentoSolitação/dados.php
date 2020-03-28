
<?php
//Fazer upload de anexo
$arquivos = $_FILES['arquivos']['name'];

move_uploaded_file($_FILES['arquivos']['tmp_name'],"arquivos/".$arquivos);

// Variavel para envio
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$nascimento = $_POST['nascimento'];
$naturalidade =$_POST['naturalidade'];
$mae = $_POST['mae'];
$pai = $_POST['pai'];
$curso = $_POST['curso'];
$periodo = $_POST['periodo'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$especificar = $_POST['especificar'];
$justificar = $_POST['justificar'];
$visto =$_POST['visto'];
$coordenador =$_POST['coordenador'];
$biblioteca =$_POST['biblioteca'];
$func =$_POST['func'];




echo "<center ><h3>REQUERIMENTO </center></h3><br> ";
echo "<center ><h3>COLETA DE DADOS PESSOAIS </center></h3><br> <br>";


echo "<h4>REQUERENTE  $nome</h4>";
echo "<hr>";
echo "<h4>MATRICULA   $matricula</h4>";
echo "<hr>";
echo "<h4>NASCIMENTO  $nascimento</h4>";
echo "<hr>";
echo "<h4>NATURALIDADE  $naturalidade</h4>";
echo "<hr>";
echo "<h4>MÃE  $mae <br> PAI  $pai</h4>";
echo "<hr>";
echo "<h4>CURSO   $curso </h4>";
echo "<hr>";
echo "<h4>PERIODO  $periodo</h4>";
echo "<hr>";
echo "<h4>TELEFONE  $telefone</h4>";
echo "<hr>";
echo "<h4>EMAIL  $email</h4>";
echo "<hr>";

echo "<center><h3>COLETA  DE ARGUMENTOS DO ALUNO REQUERIMENTO</h3></center>";
echo "<br><br>";
echo "<h4>ESPECIFICAR :  $especificar</h4>";

echo "<h4>JUSTICAÇÂO :$justificar </h4>";

echo "<hr>";
echo "<h4>VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)  $visto </h4><br>";
echo "<h4>FUNCIONARIO RESPONSAVEL = $coordenador <h4>";
echo "<hr>";
echo "<br>";
echo "<h4>VISTO (BIBLIOTECA)  $biblioteca </h4><br>";
echo "<h4>FUNCIONARIO RESPONSAVEL = $func <h4>";

echo "<hr>";
echo "Axeno  na pasta Arquivos: $arquivos";
?>