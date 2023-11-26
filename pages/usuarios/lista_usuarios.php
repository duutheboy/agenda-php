<h2 class="text-center mb-5">Usuários</h2>

<?php 

$sql = "SELECT * FROM usuarios";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if($qtd > 0) {
    print "<table class='table table-hover table-striped table-bordered'>";
        print "<thead>";
        print "<tr>";
        print "<th scope='col'>"; print "ID"; print "</th>";
        print "<th scope='col'>"; print "NOME"; print "</th>";
        print "<th scope='col'>"; print "E-MAIL"; print "</th>";
        print "<th scope='col'>"; print "Tipo"; print "</th>";
        print "<th scope='col'>"; print "Ações"; print "</th>";
        print "</tr>";
        print "</thead>";

    while($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->id_usuario; "</td>"; 
        print "<td>" . $row->nome; "</td>";
        print "<td>" . $row->email; "</td>";
        print "<td>" . $row->tipo_usuario; "</td>";
        print "<td>
            <button onclick=\"location.href='?page=editar&id_usuario=".$row->id_usuario."'\" class='btn btn-success'>Editar</button>
            <button class='btn btn-danger'>Excluir</button>
        </td>";
        print "</tr>";
    }
    print "</table>";
}

else {
    print "<p class= alert alert-danger>Não foi possível encontrar usuários ou você não tem permissão para isso!</p>";
}
?>