<?php

namespace App\Http\Livewire\Community;

use App\Models\Question;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';


    public function render()
    {
        $new_questions = Question::whereNull('parent_id')->orderByDesc('id')->paginate(config('constants.paginate.default'),['*'], 'newPage');
        $popular_questions = Question::whereNull('parent_id')->withCount('answers')->orderBy('answers_count','desc')->paginate(config('constants.paginate.default'));
        $follow_questions = Question::whereNull('parent_id')->has('answers', '>', 0)->orderByDesc('id')->paginate(config('constants.paginate.default'),['*'], 'followPage');
        return view('livewire.community.index',compact('new_questions','popular_questions','follow_questions'));
    }

    public function changeFavorite($id,$favorite = '0'){
        try {
            Question::where('id', $id)->update(['is_favorite' => $favorite]);
        }catch (\Exception $e){
            dd($e->getMessage());
            session()->flash('error', $e->getMessage());
        }

    }
}
