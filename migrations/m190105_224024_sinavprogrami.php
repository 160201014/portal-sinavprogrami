<?php

use yii\db\Migration;

/**
 * Class m190105_224024_sinavprogrami
 */
class m190105_224024_sinavprogrami extends Migration
{
    /**
     * {@inheritdoc}
     */
     public function up()
    {
        $this->createTable('sinav', [
            'id' => $this->primaryKey(),
            'tarih' => $this->string(50)->notNull(),
            'saat' => $this->string(50)->notNull(),
            'yer' => $this->string(200)->notNull(),
            'akademisyen' => $this->string(200)->notNull(),
            
        ],'ENGINE=InnoDB DEFAULT CHARSET=utf8mb4'); 
    }
    /**
     * {@inheritdoc}
     */
    public function down()
    {
         $this->dropTable('sinav');
    }
}
