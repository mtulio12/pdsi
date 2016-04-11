<?php include('db.php');
include('header.php');?>

    <div class="container">

       <?php
        $get_search = 'fila01';
        //echo $get_search;

        $stmt = $conexao->prepare("SELECT * FROM `buscar-fila` where nome_fila = :get_search");
        $stmt->bindValue(":get_search", $get_search);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($res);
        ?>
        <div class="row">
            <h4>Status da(as) fila(as)</h4>
            <?php if(!empty($res)): ?>
                <table class="striped">
                    <thead>

                    <tr>
                        <th data-field="nome">Nome</th>
                        <th data-field="nome">Última posição</th>
                        <th data-field="nome">Posição em atendimento</th>
                        <th data-field="nome">Tempo médio</th>
                        <th data-field="nome">Tempo estimado</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php foreach($res as $row): ?>
                        <tr>
                            <td><?php echo $row['nome_fila']; ?></td>
                            <td><?php echo $row['qtd_pessoas']; ?></td>
                            <td><?php echo $row['posicao_atual']; ?></td>
                            <td>00:10</td>
                            <td>00:03</td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
            <?php else: ?>
                <p>Nada encontrado</p>
                </div>
            <?php endif; ?>
    </div>
    </div>
<?php include('footer.php');
