<div class="table-data">
  <table>
    <thead>
      <th>Nome</th>
      <th>Endereço</th>
      <th>Alunos</th>
      <th>Alterar</th>
      <th>Excluir</th>
    </thead>
    <tbody>
      <?php 
        while($row = mysqli_fetch_assoc($resultSchools)){
          $id = $row['idSchool'];
      ?>
      <tr>
        <th><?php echo $row['nameSchool']; ?></th>
        <th><?php echo $row['address']; ?></th>
        <th><?php echo $this->getNumberStudents($id)?></th>
        <th>
          <a href="updateSchool.php?idUpd=<?php echo $row['idSchool'] ?>">
            <img src="../../public/img/edit.svg" />
          </a>
        </th>
        <th>
          <a href="listSchools.php?idRem=<?php echo $id ?>">  
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