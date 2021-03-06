<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
class TableController extends Controller
{
    public function operate()
    {
        // set dynamic table name according to your requirements
        $table_name = 'Contrat de travail';
        // set your dynamic fields (you can fetch this data from database this is just an example)
        $fields = [
            ['name' => 'field_1', 'type' => 'string'],
            ['name' => 'field_2', 'type' => 'text'],
            ['name' => 'field_3', 'type' => 'integer'],
            ['name' => 'field_4', 'type' => 'longText'],
            ['name' => 'field_5', 'type' => 'string'],
            ['name' => 'field_6', 'type' => 'text'],
            ['name' => 'field_7', 'type' => 'integer'],
            ['name' => 'field_8', 'type' => 'longText'],
            ['name' => 'field_9', 'type' => 'string'],
            ['name' => 'field_10', 'type' => 'integer']
        ];
        return $this->createTable($table_name, $fields);
    }
    /**
     * Create dynamic table along with dynamic fields
     *
     * @param       $table_name
     * @param array $fields
     *
     * @return \Illuminate\Http\JsonResponse
     */    public function createTable($table_name, $fields = [])
     {
        // check if table is not already exists
        if (!Schema::hasTable($table_name)) {
            Schema::create($table_name, function (Blueprint $table) use ($fields, $table_name) {
                $table->increments('id');
                if (count($fields) > 0) {
                    foreach ($fields as $field) {
                        $table->{$field['type']}($field['name']);
                    }
                }
                $table->timestamps();
            });
            return response()->json(['message' => 'Given table has been successfully created!'], 200);
        }
        return response()->json(['message' => 'Given table is already existis.'], 400);
    }
}
