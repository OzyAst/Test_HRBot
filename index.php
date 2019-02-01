<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <?php
    require_once("BD.php");
    $bd = BD::getConnection();

    $stages = $bd->query("
          SELECT
            s.name as title,
            (SELECT COUNT(*) FROM clients c WHERE c.id_stage = s.id GROUP BY c.id_stage) as value
          FROM stages s
          ORDER BY stage_order",
          PDO::FETCH_ASSOC)->fetchAll();

    echo "<pre>";
    print_r($stages);
    echo "</pre>";
  ?>
</body>
</html>
