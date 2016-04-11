<?php include('db.php');
include('header.php');?>

<div class="container">

    <div class="row">
        <form class="" action="buscar.php" method="post">
            <div class="row">
                <h4 class="col s12">Filtrar filas</h4>
                <div class="input-field col s12">
                    <input id="buscar" type="text" name="search" class="validate" required="required">
                    <label for="buscar">Pesquisar fila</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="submit">Buscar
                        <i class="material-icons right"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
    <?php
        $get_search = $_POST['search'];
        //echo $get_search;

        $stmt = $conexao->prepare("SELECT * FROM `buscar-fila` where nome_fila = :get_search");
        $stmt->bindValue(":get_search", $get_search);
        $stmt->execute();
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //var_dump($res);
    ?>
<?php if(isset($_POST['submit'])):?>
    <div class="row">
        <h5>Resultado</h5>
        <?php if(!empty($res)): ?>
        <table class="striped">
            <thead>

            <tr>
                <th data-field="nome">Nome</th>
                <th data-field="nome">Última posição</th>
                <th data-field="nome">Posição em atendimento</th>
                <th data-field="nome">Tempo médio</th>
                <th data-field="nome"></th>
            </tr>
            </thead>

            <tbody>
            <?php foreach($res as $row): ?>
                <tr>
                    <td><?php echo $row['nome_fila']; ?></td>
                    <td><?php echo $row['qtd_pessoas']; ?></td>
                    <td><?php echo $row['posicao_atual']; ?></td>
                    <td><?php echo $row['posicao_atual']; ?></td>
                    <td><a class="btn">Entrar</a> </td>
                </tr>
            <?php endforeach; ?>

            </tbody>
        </table>
    <?php else: ?>
        <p>Nada encontrado</p>
    </div>
    <?php endif; ?>
    <?php endif; ?>
</div>
</div>
<?php include('footer.php');
