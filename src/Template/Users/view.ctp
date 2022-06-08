<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="mt-5 mb-5">
    <?= $this->Html->link('<i class="bi bi-pencil mr-1"></i>'.__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'btn btn-primary','escape' => false]) ?>
    <?= $this->Form->postLink('<i class="bi bi-trash mr-1"></i>'.__('Delete User'), ['action' => 'delete', $user->id], ['class' => 'btn btn-primary', 'confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'escape' => false]) ?>
    <?= $this->Html->link('<i class="bi bi-list mr-1"></i>'.__('List Users'), ['action' => 'index'],['class' => 'btn btn-primary', 'escape' => false]) ?>
    <?= $this->Html->link('<i class="bi bi-plus-circle mr-1"></i>'.__('New User'), ['action' => 'add'], ['class' => 'btn btn-primary', 'escape' => false]) ?>
</div>
<div class="users view large-9 medium-8 columns content">
  <div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><?= __('ID') ?></label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control"  value="<?= $this->Number->format($user->id) ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><?= __('Name') ?></label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control"  value="<?= h($user->name) ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><?= __('Lastname') ?></label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control"  value="<?= h($user->lastname) ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><?= __('Username') ?></label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control"  value="<?= h($user->username) ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><?= __('Role') ?></label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control" value="<?= h($user->role) ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><?= __('Created') ?></label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control" value="<?= h($user->created) ?>">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><?= __('Modified') ?></label>
      <div class="col-sm-10">
        <input type="text" readonly class="form-control" value="<?= h($user->modified) ?>">
      </div>
    </div>
  </div>
</div>