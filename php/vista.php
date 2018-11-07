<?php 
    /////Conexión con la data//////////
    $hostname = "sql203.epizy.com";
    $database = "epiz_22952208_BD_BolsaEmpleo";
    $username = "epiz_22952208";
    $password = "progra";
    $con = mysql_pconnect($hostname, $username, $password) or trigger_error(mysql_error(),E_USER_ERROR); 

    mysql_select_db($database, $con);
    $sql = "SELECT puesto, duracion, ubicacion, descripcion FROM Puestos";
    $rspubli = mysql_query($sql, $con) or die(mysql_error());
    //$result = mysqli_query($con,$sql);

     while($row = mysql_fetch_assoc($rspubli)) {
        // echo "<table><tr><th>duracion</th><th>ubicacion</th><th>descripcion</th></tr>";        
        // echo "<tr><td>" . $row["duracion"]. "</td><td>" . $row["ubicacion"]. "</td><td>" . $row["descripcion"]. "</td></tr>";
        // echo "</table>";

        echo "<div class='col-md-6 col-lg-4'>
              <a class='principal-item d-block mx-auto' href='#principal-modal-1'>
                <div class='principal-item-caption d-flex position-absolute h-442 w-400'>
                  <div class='principal-item-caption-content my-auto w-100 text-center text-white'>
                    <i class='fas fa-search-plus fa-3x'></i>
                  </div>
                </div>
                   <table id='table-puestos'>
                      <tr>
                        <th id='head-puestos' height='75'>Nombre del puesto:".$row["puesto"]." </th>
                      </tr>
                      <tbody id='body-puestos'>
                        <tr>
                          <td height='50'>Duración:".$row["duracion"]."</td>
                        </tr>
                        <tr>
                         <td height='50'>Ubicación:".$row["ubicacion"]."</td>
                        </tr>
                      </tbody>
                    <tfoot id='foot-puestos'>
                      <tr>
                        <td height='100'>Descripción:".$row["descripcion"]."</td>
                      </tr>
                    </tfoot>
                  </table>
              </a>
            </div>";
      }
  ?>