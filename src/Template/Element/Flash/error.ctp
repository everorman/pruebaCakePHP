<?php

/**
 * @var \App\View\AppView $this
 * @var array $params
 * @var string $message
 */
if (!isset($params['escape']) || $params['escape'] !== false) {
  $message = h($message);
}
?>
<div class="container mt-2" onclick="this.classList.add('hidden');">
  <div class="alert alert-danger">
    <?= $message ?>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>