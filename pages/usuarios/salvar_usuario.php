<?php 
    
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $tipo_usuario = $_POST["tipo"];

            $sql = "INSERT INTO usuarios (tipo_usuario, nome, email, senha) VALUES (
                '{$tipo_usuario}', '{$nome}', '{$email}', '{$senha}')";

            $res = $conn ->query($sql);

            if($res==true) {
                print "<script>alert('Usuário cadastrado com sucesso');</script>";
                print "<script>alertlocation.href='?page=listar';</script>";
            }
             
            else {
                print "<script>alert('Não foi possível concluir o cadastro');</script>";
                print "<script>alertlocation.href='?page=cadastro';</script>";
            }

        break;
        
        case 'excluir':
            
        break;       
        
        case 'editar':
            
        break;    

    }