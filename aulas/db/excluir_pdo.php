<div class="titulo">PDO: Excluir</div>

<?php
require_once "conexao_pdo.php";

// $sql = "DELETE FROM cadastro WHERE id = :id";
// $conexao = novaConexao();

// $stmt = $conexao->prepare($sql);

// if ($stmt->execute([':id' => 14])) {
//     echo "Registro excluído com sucesso!";
// } else {
//     echo "Código: " . $stmt->errorCode() . "<br>";
//     print_r($stmt->errorInfo());
// }

// $conexao->close();

$sql = "DELETE FROM cadastro WHERE id = ?";

$conexao = novaConexao();
$stmt = $conexao->prepare($sql);


if ($stmt->execute([15])) {
    echo "Sucesso :)";
} else {
    echo "Erro :( <br>";
    print_r($stmt->errorInfo());
}