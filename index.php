<?php 
require_once("functions.php"); // garante que o arquivo só foi incluido uma vez
include_once("header.php");
?>


    <main class="container">
        <h1>Controle de Estoque</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Quantidade Minima</th>
                    <th>Status</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>

                <?php

                foreach ($produtos as $indice => $valor) {
                    $class = ($valor["estoque"] < $valor["min"]) ? "vermelho" : "";

                    echo "<tr class= '$class'>";
                    echo "<td>" . $valor["nome"] . "</td>";
                    echo "<td> R$" . $valor["preco"] . "</td>";
                    echo "<td>" . $valor["estoque"] . "</td>";
                    echo "<td>" . $valor["min"] . "</td>";
                    echo "<td>" . ($valor["status"] == true ? "Ativo" : "Inativo") . "</td>";
                    echo "<td> R$ " . number_format(totalProduto($valor['preco'], $valor['estoque']), 2, ',', '') . "</td>";
                    echo "</tr>";
                }

                ?>

            </tbody>

            <tfoot>
                <tr>
                    <td colspan="3">
                       Total Estoque 
                    </td>
                    <td colspan="3">
                    <?php
                        echo "Total em Estoque R$" . totalEstoque();
                        ?>
                    </td>
                </tr>
            </tfoot>
        </table>
    </main>
    <?php 
    include_once("footer.php");
    ?>