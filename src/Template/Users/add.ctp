<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="mt-5 mb-5">
  <?= $this->Html->link('<i class="bi bi-list mr-1"></i>' . __('List Users'), ['action' => 'index'], ['class' => 'btn btn-primary', 'escape' => false]) ?>
</div>
<div class="users form large-9 medium-8 columns content">
  <?=
    $this->Flash->render('auth');
    $myTemplates = [
      'inputContainer' => '<div class="form-group">{{content}}</div>',
    ];
    $this->Form->setTemplates($myTemplates);
  ?>
  <?= $this->Form->create($user) ?>
  <fieldset>
    <legend><?= __('Add User') ?></legend>
    <?php
    echo $this->Form->control('username',[
      'class' => 'form-control'
    ]);
    echo $this->Form->control('password',[
      'class' => 'form-control'
    ]);
    echo $this->Form->control('role', [
      'class' => 'form-control',
      'options' => ['admin' => 'Administrator', 'visit' => 'Visitor']
    ]);
    ?>
  </fieldset>
  <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block']) ?>
  <?= $this->Form->end() ?>
</div>