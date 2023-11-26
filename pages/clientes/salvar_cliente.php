<?php 
    
    switch ($_REQUEST["acao"]) {
        case 'cadastrar_cliente':
            $rzsocial = $_POST["rzsocial"];
            $end = $_POST["end"];
            $cnpj = $_POST["cnpj"];
            $tel = $_POST["tel"];

            $sql = "INSERT INTO clientes (endereco, telefone, cnpj, razao_social) VALUES (
                '{$end}', '{$tel}', '{$cnpj}', '{$rzsocial}')";

            $res = $conn ->query($sql);

            
            if ($res == true) {
                echo "<script>alert('Cliente cadastrado com sucesso');</script>";
                echo "<script>window.location.href='?page=listar_clientes';</script>";
            } else {
                echo "<script>alert('Não foi possível concluir');</script>";
                echo "<script>window.location.href='?page=cadastro';</script>";
            }

        break;
        
        case 'excluir_cliente':

            $sql = "DELETE FROM clientes WHERE id_cliente=" . $_REQUEST["id_cliente"];
        
            $res = $conn->query($sql);
    
            if ($res == true) {
                echo "<script>alert('Cliente excluido com sucesso');</script>";
                echo "<script>window.location.href='?page=listar_clientes';</script>";
            } else {
                echo "<script>alert('Não foi possível concluir');</script>";
                echo "<script>window.location.href='?page=cadastro';</script>";
            }
    
    
    
        case 'editar_cliente':
            $rzsocial = $_POST["rzsocial"];
            $end = $_POST["end"];
            $cnpj = $_POST["cnpj"];
            $tel = $_POST["tel"];
    
            $sql = "UPDATE clientes SET
    
                    telefone ='{$tel}',
                    razao_social ='{$rzsocial}',
                    endereco ='{$end}', 
                    cnpj ='{$cnpj}'
    
                    WHERE id_cliente=" . $_REQUEST["id_cliente"];
    
            $res = $conn->query($sql);
    
            if ($res == true) {
                echo "<script>alert('Cliente Editado com sucesso');</script>";
                echo "<script>window.location.href='?page=listar_clientes';</script>";
            } else {
                echo "<script>alert('Não foi possível concluir');</script>";
                echo "<script>window.location.href='?page=cadastro_clientes';</script>";
            }
    
    
    
            break;
    }