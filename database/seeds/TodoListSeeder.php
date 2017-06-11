<?php

use Illuminate\Database\Seeder;

class TodoListSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todoList')->insert([
            'text' => 'Comprar passagens aéreas.',
            'author' => 'John Doe',
            'status' => 'Concluído',
            'created_at' => date('y-m-d h:i:s')
        ]);
        DB::table('todoList')->insert([
            'text' => 'Reservar Hotel.',
            'author' => 'Paulo Cesar',
            'status' => 'Em andamento',
            'created_at' => date('y-m-d h:i:s')
        ]);
        DB::table('todoList')->insert([
            'text' => 'Preparar slides para apresentação.',
            'author' => 'Claudia Rodrigues',
            'status' => 'Pendente',
            'created_at' => date('y-m-d h:i:s')
        ]);
    }
}
