<h1>List Users</h1>
<?php
    $sql = "SELECT * FROM users";

    $res = $conn->query($sql);

    $qtd = $res->num_rows;

    if($qtd > 0){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>ID</th>";
        print "<th>Name</th>";
        print "<th>Email</th>";
        print "<th>Borndate</th>";
        print "<th>Actions</th>";
        print "</tr>";
        while($row = $res->fetch_object()){
            print "<tr>";
            print "<td>".$row->id."</td>";
            print "<td>".$row->username."</td>";
            print "<td>".$row->email."</td>";
            print "<td>".$row->borndate."</td>";
            print "<td>
                    <button onclick=\"location.href='?page=edit&id=".$row->id."';\" class='btn btn-success'>Edit</button>
                    <button onclick=\"if(confirm('You really want to delete it?')){location.href='?page=save&action=delete&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Delete </button>
                    </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert alert-danger'> No results found</p>";
    }
?>