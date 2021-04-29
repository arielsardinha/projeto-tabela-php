<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Projeto php fundamentos</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">TreinaWeb</span>
    </nav>

    <div class="conteiner">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome do curso</th>
                    <th scope="col">Carga horaria</th>
                    <th scope="col">Versao da Ferramenta</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach(cursos() as $curso) :?>
                    <?php 
                        if($curso['stats'] == false){
                                continue;
                            }
                    ?>
                    <tr>
                        <th scope="row"><?= $curso['nome_curso']?></th>
                        <td><?=carga_horaria($curso['carga_horaria'])?></td>
                        <td><?= $curso['versao_ferramenta']?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            
        </table>
    </div>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>