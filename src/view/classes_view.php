<!--
Esta é a camada de intereção com o usuário.
-->
<div>
  <h2>Turmas</h2>

  <table>
    <thead>
      <th>Ano</th>
      <th>Nível</th>
      <th>Período/Série</th>
      <th>Turno</th>
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
      </tr>
      <?php
      }
      ?>
    </tbody>
  </table>
</div>