<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Modificaco $modificaco
 */
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
          <h2 class="" style="">Pedido De: <?= $modificaco->idJogador === null || empty($modificaco->user) ? 'Não especificado' : $modificaco->user->username ?><br></h2>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-monospace"><?= h($modificaco->descricao) ?></p>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table-borderless">
            <tr>
              <th><?= __('Jogador') ?></th>
              <td><?= $modificaco->idJogador === null ? 'Não especificado' : $this->Number->format($modificaco->idJogador) ?></td>
            </tr>
            <tr>
              <th><?= __('Data Submissão') ?></th>
              <td><?= h($modificaco->dataSubmissao) ?></td>
            </tr>
            <tr>
              <th><?= __('Status') ?></th>
              <td><?php
                switch ($modificaco->status) {
                    case 1:
                        echo __('Aprovado');
                        break;
                    case 0:
                        echo __('Reprovado');
                        break;
                    default:
                        echo __('Pendente');
                        break;
                }
                ?>
            </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-secondary d-flex justify-content-center" href="#">Visualizar Ficheiros Anexados</a>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-danger" href="<?= $this->Url->build(['action' => 'delete', $modificaco->idModificacao]) ?>" onclick="return confirm('Você tem certeza de que deseja excluir esta modificação?')">Recusar Pedido</a>
          <?= $this->Form->postLink(__('Aceitar Pedido'), ['action' => 'approve', $modificaco->idModificacao], [
    'class' => 'btn btn-info my-2']) ?>
        </div>
      </div>
    </div>
  </div>

  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <a class="btn btn-dark" href="<?= $this->Url->build(['action' => 'index']) ?>">Voltar para Lista de Modificações</a>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>