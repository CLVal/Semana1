 <?php
        $nombre = (isset($_POST["nombre"]) && $_POST["nombre"] != "" ) ?$_POST["nombre"] : "No especificado";
        $apellidos = (isset($_POST["apellidos"]) && $_POST["apellidos"] != "" ) ?$_POST["apellidos"] : "No especificado";
        $edad = (isset($_POST["edad"]) && $_POST["edad"] != "" ) ?$_POST["edad"] : "No especificado";
        $direccion = (isset($_POST["direccion"]) && $_POST["direccion"] != "" ) ?$_POST["direccion"] : "No especificado";
        $num = (isset($_POST["num"]) && $_POST["num"] != "" ) ?$_POST["num"] : "No especificado";
        $tipo = (isset($_POST["tipo"]) && $_POST["tipo"] != "" ) ?$_POST["tipo"] : "No especificado";
        
        
        
        
        if ($num < 1 || $num > 15){
            echo "<h1> <center> Hubo un problema con la cantidad de boletos </center> </h1>";
        }
        else{
            for($cuenta=0; $cuenta<$num; $cuenta++){
                //echo $tipo."<br/>";
                switch($tipo){
                    case "Flash pass":
                        echo "<table border=l align=center cellpadding=25px>
                            <thead>
                                <tr>
                                   <th colspan=4>Six Flags</th>
                    
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td> $nombre </td>
                                    <td>$apellidos</td>
                                    <td>$edad </td>
                                    <td rowspan=3><img src=./cuchao.jpg alt=Cuchao/ width=300 height=200></td>
                                </tr>
                            <tr>
                                    <td>$direccion</td>
                                    <td>$num </td>
                                    <td>$tipo </td>
                            </tr>
                                <tr>
                                    <td colspan=3>Cuchaaao</td>
                                </tr>
                            </tbody>
                        </table><br/>";
                        break;

                    case "Normal":
                        echo "<table border=l align=center cellpadding=25px>
                            <thead>
                                <tr>
                                   <th colspan=4>Six Flags</th>
                    
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td> $nombre </td>
                                    <td>$apellidos</td>
                                    <td>$edad </td>
                                    <td rowspan=3><img src=./Original.jpg alt=Spidermans width=300 height=200/></td>
                                </tr>
                            <tr>
                                    <td>$direccion</td>
                                    <td>$num </td>
                                    <td>$tipo </td>
                            </tr>
                                <tr>
                                    <td colspan=3>Que poco original</td>
                                </tr>
                            </tbody>
                        </table><br/>";
                        break;
                        
                    case "Sin mucho presupuesto":
                        echo "<table border=l align=center cellpadding=25px>
                            <thead>
                                <tr>
                                   <th colspan=4>Six Flags</th>
                    
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td> $nombre </td>
                                    <td>$apellidos</td>
                                    <td>$edad </td>
                                    <td rowspan=3><img src=./Pobreza.jpg alt=Pobres/></td>
                                </tr>
                            <tr>
                                    <td>$direccion</td>
                                    <td>$num </td>
                                    <td>$tipo </td>
                            </tr>
                                <tr>
                                    <td colspan=3>Justo en la pobreza</td>
                                </tr>
                            </tbody>
                        </table><br/>";
                        break;                  

                    case "Hay quincena":
                        echo "<table border=l align=center cellpadding=25px>
                            <thead>
                                <tr>
                                   <th colspan=4>Six Flags</th>
                    
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td> $nombre </td>
                                    <td>$apellidos</td>
                                    <td>$edad </td>
                                    <td rowspan=3><img src=./perro.jpg alt=Perro width=250 height=250/></td>
                                </tr>
                            <tr>
                                    <td>$direccion</td>
                                    <td>$num </td>
                                    <td>$tipo </td>
                            </tr>
                                <tr>
                                    <td colspan=3>Aaah perro</td>
                                </tr>
                            </tbody>
                        </table><br/>";
                        break;

                    case "Plan vine a ligar":
                        echo "<table border=l align=center cellpadding=25px>
                            <thead>
                                <tr>
                                   <th colspan=4>Six Flags</th>
                    
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td> $nombre </td>
                                    <td>$apellidos</td>
                                    <td>$edad </td>
                                    <td rowspan=3><img src=./elamor.jpg alt=Ay el amor width=200 height=300/></td>
                                </tr>
                            <tr>
                                    <td>$direccion</td>
                                    <td>$num </td>
                                    <td>$tipo </td>
                            </tr>
                                <tr>
                                    <td colspan=3>Ay el amor</td>
                                </tr>
                            </tbody>
                        </table><br/>";
                        break;
                    
                    default:
                    echo "algo salió muy mal";
                }
                
                
                
            }
        }
        

?>
