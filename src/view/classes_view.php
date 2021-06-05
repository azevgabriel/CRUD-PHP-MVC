<!--
Esta é a camada de intereção com o usuário.
-->
<div class="table-Classes">
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
        <th>Alterar</th>
        <th>Excluir</th>
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>