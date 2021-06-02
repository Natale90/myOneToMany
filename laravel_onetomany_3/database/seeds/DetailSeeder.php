<?php

use Illuminate\Database\Seeder;
use App\Detail;
use App\Post;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // acquisisco tutti i post
        $posts = Post::all();

        // ciclo su tutti i post e per ognugno creo un dettaglio senza salvarlo
        // in database tramite la make().
        foreach ($posts as $post) {

            factory(Detail::class, 1) -> make() -> each(function($detail) use($post){

                // faccio in modo che la colonna 'post_id' assuma lo stesso valore
                // dell'id del post al quale si riferisce.
                $detail -> post_id = $post -> id;
                //salvo il dettaglio in database.
                $detail -> save();
            });
        }
    }
}
