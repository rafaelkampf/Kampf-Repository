<?php 
require_once "conexaodb.php";
$consultasql = "SELECT * FROM clientes";
$resultado = $conexao->query($consultasql);


if(mysqli_num_rows($resultado) > 0 ){
    
    echo " <table>
            <tr>
             <th> ID </th>
             <th> Nome </th>
             <th> email </th>
             <th> senha </th>
             <th> opções </th>
    ";

    while ($linha = mysqli_fetch_assoc($resultado)) {
       
        echo " <tr>";
        echo " <td>". $linha['id_clientes'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['email'] . "</td>";
        echo "<td>" . $linha['senha'] . "</td>";
        echo "<td>"; 
        
        
         echo "<a href='editarlista.php?id= " . $linha['id_clientes']. "'> editar </a>";

         echo "<td> <a href='excluir.php?id= " . $linha['id_clientes']. "'> excluir </a> </td> ";
        


        echo "</td>";        
        echo "</tr>";

    }
} else {
    echo "<tr> <td clospan = '4'> AHbluBLUÈ </td> </tr>";
}
 echo "</table>";




?>