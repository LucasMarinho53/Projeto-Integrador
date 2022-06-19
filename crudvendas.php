<?php
    require_once('.\conexao.php');

    function fnListVenda()
    {
        $link = getConnection();

        $query = "select ID_Venda , ValorTotal , Mes_venda from Venda";

        $result = mysqli_query($link, $query);

        $vendas = array();

        while($row = mysqli_fetch_assoc($result))
        {
            array_push($vendas, $row);
        }

        return $vendas;
    }