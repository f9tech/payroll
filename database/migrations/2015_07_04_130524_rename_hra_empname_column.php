<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameHraEmpnameColumn extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
    {
        Schema::table('stnk', function($t) {
            $t->renameColumn('id', 'id_stnk');
        });
    }


    public function down()
    {
        Schema::table('stnk', function($t) {
                        $t->renameColumn('id_stnk', 'id');
                });
    }
}
