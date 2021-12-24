<script type="text/javascript">
    function del(id) 
    {
        var res = confirm("Remover Registro?");
        if (res == true) {window.location.href = "?k=www/db_delete&id=" + id;}
    }
</script>

<div class="container-fluid">
    <div class="row">
        <div class="colA"></div>
        <div class="colB">
            <div class="row">
                <h1 class="text-white text-center list-title">Registros (Clientes)</h1>
                <div class="table-responsive-sm">
                    <?php
                        $sql = "SELECT * FROM client;";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) 
                        {
                            echo 
                            "<table class='table table-dark'><thead><tr>
                                <th class='text-center' scope='col'>Codigo</th>
                                <th class='text-center' scope='col'>Nome</th>
                                <th class='text-center' scope='col'>RG</th>
                                <th class='text-center' scope='col'>CPF</th>
                                <th class='text-center' scope='col'>Email</th>
                                <th class='text-center' >Ação</th></tr></thead><tbody>";

                            while ($row = mysqli_fetch_assoc($result)) 
                            {
                                echo 
                                "<tr>
                                    <td><strong>".$row["id"]."<strong></td>
                                    <td>".$row["nome"]."</td>
                                    <td>".$row["rg"]."</td>
                                    <td>".$row["cpf"]."</td>
                                    <td>".$row["email"]."</td>
                                    <td>
                                        <a class='list-icon' href=?k=www/db_edit&id=".$row["id"]."><i class='bi bi-gear-fill'></i></a>
                                        <a class='list-icon' href=\"javascript:func()\" onclick=\"del('".$row["id"]."')\"><i class='bi bi-trash-fill'></i></a>
                                    </td>
                                </tr>";

                            }

                            echo "</tbody></table>";
                        }

                        else 
                        {
                            echo 
                            "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                            Não há registro para listar.
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button></div>";
                        }

                        mysqli_close($conn);
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>