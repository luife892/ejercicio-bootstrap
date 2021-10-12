<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Listadp</title>
  </head>
  <body>
    <h1>Lista</h1>
    <h2>Datos registrados</h2> 
            <a href="indexs.html" class="btn btn-primary">Registro</a>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>País</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($file as $key => $reg) : ?>
                        <tr>
                            <td><?= $reg->nombre ?></td>
                            <td><?= $reg->Apellido ?></td>
                            <td><?= $reg->Pais?></td>
                            </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        
                            


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    
  </body>
</html>