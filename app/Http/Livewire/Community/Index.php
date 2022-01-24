<?php

namespace App\Http\Livewire\Community;

use App\Models\Question;
use App\Models\QuestionLike;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $new_questions = Question::with('user_like')->withCount('likes')->whereNull('parent_id')->orderByDesc('id')->paginate(config('constants.paginate.default'), ['*'], 'newPage');
        $popular_questions = Question::with('user_like')->withCount('likes')->whereNull('parent_id')->withCount('answers')->orderBy('answers_count', 'desc')->paginate(config('constants.paginate.default'));
        $follow_questions = Question::with('user_like')->withCount('likes')->whereNull('parent_id')->has('answers', '>', 0)->orderByDesc('id')->paginate(config('constants.paginate.default'), ['*'], 'followPage');
        return view('livewire.community.index', compact('new_questions', 'popular_questions', 'follow_questions'));
    }

    // set favorite or unfavorite question
    public function changeFavorite($id, $favorite = '0')
    {
        try {
            Question::where('id', $id)->update(['is_favorite' => $favorite]);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }

    }

    //set like or dislike for user
    public function like($id = 0)
    {
        try {
            $user_id = Auth::user()->id;
            $question_like = QuestionLike::where('user_id', $user_id)->where('question_id', $id)->count();
            if ($question_like > 0) {
                QuestionLike::where('user_id', $user_id)->where('question_id', $id)->delete();
            } else {
                QuestionLike::create([
                    'user_id' => $user_id,
                    'question_id' => $id
                ]);
            }

        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }


}
