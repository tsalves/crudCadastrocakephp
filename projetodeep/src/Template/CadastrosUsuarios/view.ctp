<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadastrosUsuario $cadastrosUsuario
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cadastros Usuario'), ['action' => 'edit', $cadastrosUsuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cadastros Usuario'), ['action' => 'delete', $cadastrosUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadastrosUsuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cadastros Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cadastros Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cadastrosUsuarios view large-9 medium-8 columns content">
    <h3><?= h($cadastrosUsuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Usuario') ?></th>
            <td><?= h($cadastrosUsuario->nome_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email Usuario') ?></th>
            <td><?= h($cadastrosUsuario->email_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area Usuario') ?></th>
            <td><?= h($cadastrosUsuario->area_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Senha Usuario') ?></th>
            <td><?= h($cadastrosUsuario->senha_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cadastrosUsuario->id) ?></td>
        </tr>
    </table>
</div>
