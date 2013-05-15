<?php

use Phinx\Migration\AbstractMigration;

class CreatePortfolioTable extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     *
     * Uncomment this method if you would like to use it.
     *
    public function change()
    {
    }
    */

    /**
     * Migrate Up.
     */
    public function up()
    {
        $portfolio = $this->table('portfolio');
        $portfolio
            ->addColumn('name', 'string', array('limit' => 255))
            ->addColumn('url', 'string', array('limit' => 255))
            ->addColumn('tags', 'binary')
            ->addColumn('description', 'text')
            ->addColumn('image_url', 'string', array('limit' => 255))
            ->addColumn('project_date', 'datetime')
            ->addColumn('is_active', 'boolean')
            ->addColumn('created_at', 'datetime')
            ->addColumn('updated_at', 'datetime')
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
        $this->dropTable('portfolio');
    }
}
