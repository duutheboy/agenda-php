<?php

switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $tipo_usuario = $_POST["tipo"];

        $sql = "INSERT INTO usuarios (tipo_usuario, nome, email, senha) VALUES (
                '{$tipo_usuario}', '{$nome}', '{$email}', '{$senha}')";

        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>alert('Usuário cadastrado com sucesso');</script>";
            echo "<script>window.location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível concluir');</script>";
            echo "<script>window.location.href='?page=cadastro';</script>";
        }

        break;

    case 'excluir':

        $sql = "DELETE FROM usuarios WHERE id_usuario=" . $_REQUEST["id_usuario"];
    
        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>alert('Usuário exlcuido com sucesso');</script>";
            echo "<script>window.location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível concluir');</script>";
            echo "<script>window.location.href='?page=cadastro';</script>";
        }



    case 'editar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $tipo_usuario = $_POST["tipo"];

        $sql = "UPDATE usuarios SET

                tipo_usuario ='{$tipo_usuario}',
                nome ='{$nome}',
                email ='{$email}', 
                senha ='{$senha}'

                WHERE id_usuario=" . $_REQUEST["id_usuario"];

        $res = $conn->query($sql);

        if ($res == true) {
            echo "<script>alert('Usuário Editado com sucesso');</script>";
            echo "<script>window.location.href='?page=listar';</script>";
        } else {
            echo "<script>alert('Não foi possível concluir');</script>";
            echo "<script>window.location.href='?page=cadastro';</script>";
        }



        break;
}
