<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Einkaufs App</title>
    <style>
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
        }

      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        }

      tr:nth-child(even) {
        background-color: #dddddd;
      }
    </style>
  </head>
  <body>
    <h1>Einkaufliste</h1>
    <table>
      <tr>
        <th>#</th>
        <th>Anzahl</th>
        <th>Name</th>
        <th>Bearbeiten</th>
        <th>Löschen</th>
      </tr>
      <?php
        foreach ($items as $item) {
            ?>
            <tr>
              <td><?php echo $item[0] ?></td>
              <td><?php echo $item[1] ?></td>
              <td><?php echo $item[2] ?></td>
              <td><a href="/list?edit=<?php echo $item[0] ?>" class="btn btn-info">Bearbeiten</a></td>
              <td><a href="/delete/<?php echo $item[0] ?>" class="btn btn-danger">X</a></td>
              </tr>
        <?php
            }
            ?>
    </table>
    <form class="" action="template.html.php" method="post">
      <div>
        <label for="addNewItemAmount">Anzahl</label>
        <input id="addNewItemAmount" type="number" aria-describedby="amountHelp">
        <small id="amountHelp">Enter an amount of Items you want (must be a number)</small>
      </div>
      <div class="form-group">
        <label for="addNewItemName">Name</label>
        <input id="addNewItemName" type="text" placeholder="Name of the new Item">
      </div>
    </form>
  </body>
</html>
