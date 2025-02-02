<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Modificaco> $modificacoes
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

  <!-- Barra de pesquisa -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="form-inline d-flex justify-content-end">
            <div class="input-group">
              <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Lista de Modificações -->
  <div class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group list-group-flush">
            <?php foreach ($modificacoes as $modificaco): ?>
              <li class="list-group-item">
                <a class="btn btn-dark" href="<?= $this->Url->build(['action' => 'view', $modificaco->idModificacao]) ?>">Ver Pedido</a>
                <i class="fa fa-cloud text-primary mr-2"></i>
                <?= h($modificaco->nomeModificacao) ?> - <?= h($modificaco->status) ?>
                <span class="text-muted">(Submetido em: <?= h($modificaco->dataSubmissao) ?>)</span>
              </li>
            <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- Paginação -->
  <div class="paginator">
    <div class="container">
      <ul class="pagination justify-content-center">
        <?= $this->Paginator->first('<< ' . __('first')) ?>
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
        <?= $this->Paginator->last(__('last') . ' >>') ?>
      </ul>
      <p class="text-center">
        <?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?>
      </p>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>
