<?php

namespace App\Http\Livewire\Community;

use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Create extends Component
{
    public $title,$content,$question_id,$all_answers,$question,$is_confirm_delete = false,$is_question=false,$answer_id = 0;

    protected $rules = [
        'title' => 'required|min:5',
        'content' => 'required|min:5'
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function render()
    {
        return view('livewire.community.create');
    }
    public function mount($question_id = 0){
        $this->question_id = $question_id;
        $this->resetInput();
    }

    private function resetInput()
    {
        $this->title = '';
        $this->content ='';
        $this->is_confirm_delete = false;
        $this->is_question = '';
        $this->answer_id = 0;
        $this->all_answers =  Question::where('parent_id',$this->question_id)->orderByDesc('id')->get();
        $this->question =  Question::where('id',$this->question_id)->first();
    }

    //create or update community question or answer
    public function store()
    {
        try {
            $this->validate([
                'title' => 'required|min:5',
                'content' => 'required|min:5'
            ]);
            Question::updateOrcreate(['id'=>$this->answer_id],[
                'title' => $this->title,
                'content' => $this->content,
                'parent_id' => $this->question_id,
                'created_by'=>Auth::user()->id
            ]);
            $this->resetInput();
            $message = $this->question_id > 0 ? 'Answer Store Successfully.':'Question Store Successfully.';
            session()->flash('success', $message);
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }

    // confirmation delete for popup
    public function isConfirmDelete($id,$is_question=false){
        $this->is_confirm_delete = $id;
        $this->is_question = $is_question;
    }

    //delete action after confirmation
    public function deleteAnswer($id,$is_question = false){
        try {
            Question::where('id',$id)->delete();
            if($is_question){
                return route('user.community.index');
            }
            session()->flash('success', 'Answer deleted successfully.');
        } catch (\Exception $e) {
            session()->flash('error', $e->getMessage());
        }
    }

    //edit question or answer display in field
    public function edit($id){
        $question =  Question::where('id',$id)->first();
        $this->title = $question->title;
        $this->content = $question->content;
        $this->answer_id = $question->id;
    }
}
