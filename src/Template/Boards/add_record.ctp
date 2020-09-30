<style>
    .error { color:red; font-size: smaller; font-weight: bold;}
</style>
<h1>Databaseサンプル</h1>
<fieldset>
<?= $this->Form->create($entity) ?>
<div class="error"><?= $this->Form->error('name') ?></div>
    <?= $this->Form->text('name') ?>
    <div class="error"><?= $this->Form->error('title') ?></div>
    <?= $this->Form->text('title') ?>
    <div class="error"><?= $this->Form->error('content') ?></div>
    <?= $this->Form->textarea('content') ?>
</fieldset>
<?= $this->Form->button("送信") ?>
<?= $this->Form->end() ?>