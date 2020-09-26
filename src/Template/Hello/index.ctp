<h1>サンプル見出し</h1>
<p>
    <?php print_r($result); ?>
</p>
<?php echo $this->Form->create(null,
    ['type' => 'post', 'url' => ['actioin' => 'index']]);
    echo $this->Form->date('HelloForm.date');
    echo $this->Form->submit('送信');
    echo $this->Form->end();
?>