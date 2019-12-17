<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\Portal\Entities\Validation; 
use Modules\Portal\Entities\Append; 

class InsertAppendsRecordsPricelistclient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $validation = Validation::where('module_name', 'ValidationClient')->first();
        Append::create(['validation_id' => $validation->id, 'module' => 'AppendPriceListClient', 'alias' => 'Tabela de Preço Cliente']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         (Append::where('module', 'AppendPriceListClient')->first())->delete();
    }
}
