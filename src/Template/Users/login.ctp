<div class="mt-5 col col-md-9 col-md-offset-3 ml-auto mr-auto jumbotron">
    <?=
    $this->Flash->render('auth');
    $myTemplates = [
        'inputContainer' => '<div class="form-group">{{content}}</div>',
    ];
    $this->Form->setTemplates($myTemplates);
    ?>

    <?php echo $this->Form->create()?>
    <?php echo $this->Form->control('username', array(
        'class' => 'form-control',
        'placeholder' => 'Username'
    )); ?>
    <?php echo $this->Form->control('password', array(
        'class' => 'form-control',
        'placeholder' => 'Password'
    )); ?>

    <?= $this->Form->button(__('Login'), array(
            'class' => 'btn btn-primary btn-block'
        )); ?>
    <?php echo $this->Form->end(); ?>
</div>