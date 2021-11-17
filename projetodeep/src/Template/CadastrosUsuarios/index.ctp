<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CadastrosUsuario[]|\Cake\Collection\CollectionInterface $cadastrosUsuarios
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Cadastros Usuario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="cadastrosUsuarios index large-9 medium-8 columns content">
    <h3><?= __('Cadastros Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email_usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area_usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('senha_usuario') ?></th>
                <th scope="col" class="actions"><?= __('AÇÕES') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($cadastrosUsuarios as $cadastrosUsuario): ?>
            <tr>
                <td><?= $this->Number->format($cadastrosUsuario->id) ?></td>
                <td><?= h($cadastrosUsuario->nome_usuario) ?></td>
                <td><?= h($cadastrosUsuario->email_usuario) ?></td>
                <td><?= h($cadastrosUsuario->area_usuario) ?></td>
                <td><?= h($cadastrosUsuario->senha_usuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $cadastrosUsuario->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cadastrosUsuario->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cadastrosUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cadastrosUsuario->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
