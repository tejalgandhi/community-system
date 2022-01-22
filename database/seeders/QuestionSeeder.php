<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;


class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Question::query()->truncate();

        Question::create([
            'title'=>'Which number should come next in the pattern?
            37, 34, 31, 28',
            'content'=>'25, the numbers are decreasing by 3',
            'created_by'=>1
        ]);
        Question::create([
            'title'=>'What are the multiples of 7 between 1 to 100?',
            'content'=>'The multiples of 7 between 1 to 100 are 7 , 14 , 21 , 28 , 35 , 42 , 49 , 56 , 63 , 70, 77, 84, 91, 98.',
            'created_by'=>1
        ]);

        Question::create([
            'title'=>'There are 6 pillows in a bed, 3 are red, 2 are yellow and 1 is blue. What is the probability of picking a yellow pillow?',
            'content'=>'The probability is equal to the number of yellow pillows in the bed divided by the total number of pillows, i.e. 2/6 = 1/3.',
            'created_by'=>1
        ]);
        Question::create([
            'title'=>'What is the probability that Sumit will pick a green bottle?',
            'content'=>'For every 1000 bottles picked out, 450 are green.Therefore, P(green) = 450/1000 = 0.45',
            'created_by'=>1
        ]);


        Question::create([
            'title'=>'How many multiples does 7 have?',
            'content'=>'The number 7 can have infinitely many multiples.',
            'created_by'=>1
        ]);


        Question::create([
            'title'=>'Which number should come next in the pattern?
            37, 34, 31, 28',
            'content'=>'25, the numbers are decreasing by 3',
            'created_by'=>1
        ]);
        Question::create([
            'title'=>'What are the multiples of 7 between 1 to 100?',
            'content'=>'The multiples of 7 between 1 to 100 are 7 , 14 , 21 , 28 , 35 , 42 , 49 , 56 , 63 , 70, 77, 84, 91, 98.',
            'created_by'=>1
        ]);

        Question::create([
            'title'=>'There are 6 pillows in a bed, 3 are red, 2 are yellow and 1 is blue. What is the probability of picking a yellow pillow?',
            'content'=>'The probability is equal to the number of yellow pillows in the bed divided by the total number of pillows, i.e. 2/6 = 1/3.',
            'created_by'=>1
        ]);
        Question::create([
            'title'=>'What is the probability that Sumit will pick a green bottle?',
            'content'=>'For every 1000 bottles picked out, 450 are green.Therefore, P(green) = 450/1000 = 0.45',
            'created_by'=>1
        ]);


        Question::create([
            'title'=>'How many multiples does 7 have?',
            'content'=>'The number 7 can have infinitely many multiples.',
            'created_by'=>1
        ]);

        Question::create([
            'title'=>'Which number should come next in the pattern?
            37, 34, 31, 28',
            'content'=>'25, the numbers are decreasing by 3',
            'created_by'=>1
        ]);
        Question::create([
            'title'=>'What are the multiples of 7 between 1 to 100?',
            'content'=>'The multiples of 7 between 1 to 100 are 7 , 14 , 21 , 28 , 35 , 42 , 49 , 56 , 63 , 70, 77, 84, 91, 98.',
            'created_by'=>1
        ]);

        Question::create([
            'title'=>'There are 6 pillows in a bed, 3 are red, 2 are yellow and 1 is blue. What is the probability of picking a yellow pillow?',
            'content'=>'The probability is equal to the number of yellow pillows in the bed divided by the total number of pillows, i.e. 2/6 = 1/3.',
            'created_by'=>1
        ]);
        Question::create([
            'title'=>'What is the probability that Sumit will pick a green bottle?',
            'content'=>'For every 1000 bottles picked out, 450 are green.Therefore, P(green) = 450/1000 = 0.45',
            'created_by'=>1
        ]);


        Question::create([
            'title'=>'How many multiples does 7 have?',
            'content'=>'The number 7 can have infinitely many multiples.',
            'created_by'=>1
        ]);

        Question::create([
            'title'=>'Testing Question',
            'content'=>'The number 7 can have infinitely many multiples.',
            'created_by'=>1,
            'parent_id'=>15
        ]);

        Question::create([
            'title'=>'Testing Question two',
            'content'=>'The number 7 can have infinitely many multiples.',
            'created_by'=>1,
            'parent_id'=>15
        ]);
    }
}
