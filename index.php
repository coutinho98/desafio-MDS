<?php
    include_once 'conexao.php';
    $consulta = "SELECT alunos.id, alunos.nome, disciplinas.disciplina,
    notas.nota FROM escola.nota as notas,  
    escola.disciplinas as disciplinas,  
    escola.aluno as alunos  
    WHERE alunos.id = notas.aluno_id and   
    disciplinas.id = notas.disciplina_id order by alunos.id";
($con = $mysqli->query($consulta)) or die($mysqli->error);
    $id_atual = 0;
?>

<head>
    <html lang="en">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <title>Relatório de Alunos</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>disciplina</th>
                <th>nota</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($dado = $con->fetch_array()) {
                ?>
            <tr class="tr1">
                <td><?php  if($id_atual == $dado['id']) {
                   echo '';
                } else {
                   echo $dado['id'];
                }  ?></td>
                <td><?php echo $dado['nome']; ?></td>
                <td><?php echo $dado['disciplina']; ?></td>
                <td><?php echo $dado['nota']; ?></td>
                <?php
                $id_atual = $dado['id'];
                } ?>
        </tr>
    </tbody>
    </table>
    <?php if (isset($connect)) {
        mysqli_close($connect);
    } ?>
</body>

</html>