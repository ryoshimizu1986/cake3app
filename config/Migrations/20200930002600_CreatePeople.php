<?php
use Migrations\AbstractMigration;

class CreatePeople extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('people');
        $table->addColumn('name', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('password', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addColumn('comment', 'text', [
            'default' => null,
            'null' => true,
        ]);
        $table->addIndex(['name'], ['unique' => true]);
        $table->create();
    }
}
