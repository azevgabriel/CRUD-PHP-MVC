<div class="table-data">
  <table>
    <thead>
      <th>Nome</th>
      <th>Telefone</th>
      <th>E-Mail</th>
      <th>Data de Nascimento</th>
      <th>Gênero</th>
      <th>Alterar</th>
      <th>Excluir</th>
    </thead>
    <tbody>
      <?php 
        while($row = mysqli_fetch_assoc($resultStudents)){
      ?>
      <tr>
        <th><?php echo $row['name']; ?></th>
        <th><?php echo $row['phone']; ?></th>
        <th><?php echo $row['email']; ?></th>
        <th><?php echo $row['birthday']; ?></th>
        <th><?php echo $row['gender']; ?></th>
        <th>
          <a href="updateStudent.php?idUpd=<?php echo$row['idStudent'] ?>">
            <img src="../../public/img/edit.svg" />
          </a>
        </th>
        <th>
          <a href="listStudents.php?idRem=<?php echo$row['idStudent'] ?>">  
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