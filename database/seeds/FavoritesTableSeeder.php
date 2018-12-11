<?php

use App\User;
use App\Question;
use Illuminate\Database\Seeder;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        \DB::table('favorites')->delete();

        $users = User::pluck('id')->all();
        $numberOfusers = count($users);

        foreach (Question::all() as $question) {
            for ($i = 0, $iMax = random_int(1, $numberOfusers); $i < $iMax; $i++) {
                $user = $users[$i];

                $question->favorites()->attach($user);
            }
        }
    }
}
