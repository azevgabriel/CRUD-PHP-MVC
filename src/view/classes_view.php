<!--
Esta é a camada de intereção com o usuário.
-->
<div class="table-data">
  <table>
    <thead>
      <th>Ano</th>
      <th>Nível</th>
      <th>Período/Série</th>
      <th>Turno</th>
      <th>Alterar</th>
      <th>Excluir</th>
    </thead>
    <tbody>
      <?php 
        while($row = mysqli_fetch_assoc($resultClasses)){
      ?>
      <tr>
        <th><?php echo $row['year']; ?></th>
        <th><?php echo $row['level']; ?></th>
        <th><?php echo $row['series']; ?></th>
        <th><?php echo $row['shift']; ?></th>
        <th>
          <a href="updateClass.php?idUpd=<?php echo$row['idClass'] ?>">
            <img src="../../public/img/edit.svg" />
          </a>
        </th>
        <th>
          <a href="listClasses.php?idRem=<?php echo$row['idClass'] ?>">  
            <img src="../../public/img/trash.svg" />
          </a>
        </th>
      </tr>
      <?php
        }
      ?>
    </tbody>
  </table>
</div>