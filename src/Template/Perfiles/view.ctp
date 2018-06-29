<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Perfile $perfile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Perfile'), ['action' => 'edit', $perfile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Perfile'), ['action' => 'delete', $perfile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $perfile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Perfiles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Perfile'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="perfiles view large-9 medium-8 columns content">
    <h3><?= h($perfile->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($perfile->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($perfile->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($perfile->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($perfile->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($perfile->modified) ?></td>
        </tr>
    </table>
</div>
