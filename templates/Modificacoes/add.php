<?php
// Obtém o usuário logado
$usuarioLogado = $this->request->getAttribute('identity');
$idJogador = $usuarioLogado ? $usuarioLogado->id : null;
$dataSubmissao = date('Y-m-d'); // Data atual como padrão
$status = 'pendente'; // Define o status padrão como "pendente"
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css">
</head>

<body>
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <?= $this->Form->create($modificaco) ?>

          <!-- Campos ocultos -->
          <?= $this->Form->hidden('idJogador', ['value' => $idJogador]) ?>
          <?= $this->Form->hidden('dataSubmissao', ['value' => $dataSubmissao]) ?>
          <?= $this->Form->hidden('status', ['value' => $status]) ?>

          <div class="form-group">
            <?= $this->Form->control('nomeModificacao', [
                'label' => 'Nome da Modificação',
                'class' => 'form-control',
                'required' => true
            ]); ?>
          </div>

          <div class="form-group">
            <?= $this->Form->control('descricao', [
                'label' => 'Descrição',
                'class' => 'form-control',
                'placeholder' => 'Digite a descrição',
                'required' => true
            ]); ?>
          </div>

          <?= $this->Form->button(__('Salvar'), ['class' => 'btn btn-primary']) ?>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
