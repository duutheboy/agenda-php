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

            if($res==true) {
                print "<script>alert('Cliente cadastrado com sucesso');</script>";
                print "<script>alertlocation.href='?page=listar_clientes';</script>";
            }
             
            else {
                print "<script>alert('Não foi possível concluir o cadastro');</script>";
                print "<script>alertlocation.href='?page=cadastro_cliente';</script>";
            }

        break;
        
        case 'excluir':
            
        break;       
        
        case 'editar':
            
        break;    

    }