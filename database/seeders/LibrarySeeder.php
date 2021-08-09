<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::table('books')->truncate();
        DB::table('books')->insert([
            [
                'bookId' => 1,
                'authorId' => 2,
                'title' => 'Oneness With All Life: Selections.....',
                'ISBN' => 'ISBN 388053101-9',
                'pub_year' => 2008,
                'available' => 1,
            ],[
                'bookId' => 2,
                'authorId' => 3,
                'title' => 'Oneness With All Life: Selections.....',
                'ISBN' => 'ISBN 388053101-9',
                'pub_year' => 2008,
                'available' => 2,
            ],[
                'bookId' => 3,
                'authorId' => 4,
                'title' => 'Oneness With All Life: Selections.....',
                'ISBN' => 'ISBN 388053101-9',
                'pub_year' => 2008,
                'available' => 3,
            ],[
                'bookId' => 4,
                'authorId' => 5,
                'title' => 'Oneness With All Life: Selections.....',
                'ISBN' => 'ISBN 388053101-9',
                'pub_year' => 2008,
                'available' => 4,
            ],[
                'bookId' => 5,
                'authorId' => 6,
                'title' => 'Oneness With All Life: Selections.....',
                'ISBN' => 'ISBN 388053101-9',
                'pub_year' => 2008,
                'available' => 5,
            ],[
                'bookId' => 6,
                'authorId' => 7,
                'title' => 'Oneness With All Life: Selections.....',
                'ISBN' => 'ISBN 388053101-9',
                'pub_year' => 2008,
                'available' => 6,
            ],[
                'bookId' => 7,
                'authorId' => 2,
                'title' => 'Oneness With All Life: Selections.....',
                'ISBN' => 'ISBN 388053101-4',
                'pub_year' => 2008,
                'available' => 7,
            ],[
                'bookId' => 8,
                'authorId' => 2,
                'title' => 'Oneness With All Life: Selections.....',
                'ISBN' => 'ISBN 388053101-3',
                'pub_year' => 2008,
                'available' => 8,
            ],[
                'bookId' => 9,
                'authorId' => 2,
                'title' => 'Oneness With All Life: Selections.....',
                'ISBN' => 'ISBN 388053101-2',
                'pub_year' => 2008,
                'available' => 9,
            ],[
                'bookId' => 10,
                'authorId' => 2,
                'title' => 'Oneness With All Life: Selections.....',
                'ISBN' => 'ISBN 388053101-1',
                'pub_year' => 2008,
                'available' => 10,
            ]
        ]);
    }
}
