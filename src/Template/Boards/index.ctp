<?=$this->Form->create($boards,
['url' => ['action' => 'editRecord']]) ?>
<fieldset>
<p><?='ID = ' . $boards->id ?></p>
<?=$this->Form->hidden("id") ?>
<?=$this->Form->textarea("name") ?>
</fieldset>
<?=$this->Form->button("送信") ?>
<?=$this->Form->end() ?>
