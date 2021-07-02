<div class="row container">
    <div class="col s12">
        <h3 class="light">
            Página de Consultas
        </h3>
    </div>

    <div class="col s12">
    <table>
        <tr> 
            <th>
                Nome
            </th>
            <th>
                E-mail
            </th>
            <th>
                Ações
            </th>
        </tr>
    <?php 
        foreach ($consulta as $registro) { 
    ?>
        <tr>
            <td>Nome: <?=$registro["nome"]?></td>
            <td>E-mail: <?=$registro["email"]?></td>
            <td>
                <a href="?router=Site/editar/&id=<?=base64_encode($registro["id"])?>">Editar</a> |
                <a href="?router=Site/confirmaDelete/&id=<?=base64_encode($registro["id"])?>" class="red-text">Deletar</a>
            </td>
        </tr>
    <?php
        }
    ?>
    </table>
       
    </div>
</div>