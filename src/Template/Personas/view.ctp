<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Persona'), ['action' => 'edit', $persona->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Persona'), ['action' => 'delete', $persona->id], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Personas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="personas view large-9 medium-8 columns content">
    <h3><?= h($persona->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombres') ?></th>
            <td><?= h($persona->Nombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Apellidos') ?></th>
            <td><?= h($persona->Apellidos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($persona->Email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefonos') ?></th>
            <td><?= h($persona->Telefonos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Direccion') ?></th>
            <td><?= h($persona->Direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($persona->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('FechaNac') ?></th>
            <td><?= h($persona->FechaNac) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($persona->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($persona->modified) ?></td>
        </tr>
    </table>
</div>
