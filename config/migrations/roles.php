<?php

use yii\db\Migration;

class mxxxxxx_xxxxxx_add_roles_table extends Migration
{
    public function up()
    {
        $roles = ['admin', 'user', 'manager'];
        $roleEnum = 'ENUM("' . implode('","', $roles) . '") NOT NULL DEFAULT "user"';

        $this->addColumn('users', 'role', $roleEnum);
    }

    public function down()
    {
        $this->dropColumn('users', 'role');
    }
}
