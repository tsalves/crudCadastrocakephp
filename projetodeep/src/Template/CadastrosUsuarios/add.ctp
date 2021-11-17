<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadastrosUsuario $cadastrosUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Cadastros Usuarios'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cadastrosUsuarios form large-9 medium-8 columns content">
    <?= $this->Form->create($cadastrosUsuario) ?>
    <fieldset>
        <legend><?= __('Add Cadastros Usuario') ?></legend>
        <?php
            echo $this->Form->control('nome_usuario');
            echo $this->Form->control('email_usuario');
            echo $this->Form->control('area_usuario');
            echo $this->Form->control('senha_usuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('SALVAR')) ?>
    <?= $this->Form->end() ?>
</div>
