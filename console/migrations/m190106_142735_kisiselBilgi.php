<?php

use yii\db\Migration;

/**
 * Class m190106_142735_kisiselBilgi
 */
class m190106_142735_kisiselBilgi extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190106_142735_kisiselBilgi cannot be reverted.\n";

        return false;
    }

    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable('kisiselBilgi', [
             'id'=> $this->primaryKey(),
            'PI' => $this->integer(11)->notNull(),
            'name' => $this->text()->notNull(),
            'surname' => $this->text()->notNull(),
            'age' => $this->integer(11)->notNull(),
            'sex' => $this->text()->notNull(),
        ]);
    }

    public function down()
    {
        echo "m190106_142735_kisiselBilgi cannot be reverted.\n";
        $this->dropTable('kisiselBilgi');
        return false;
    }
    
}
