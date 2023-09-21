<h1>Listar Usuários</h1> <br>
<?php
    $sql = "SELECT * FROM users";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Nome</th>";
        print "<th>Email</th>";
        print "<th>Data de Nascimento</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->username."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->borndate."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=edit&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja deletar?')){location.href='?page=save&action=delete&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Deletar </button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'> Sem resultados encontrados</p>";
    }
?>