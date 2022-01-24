<div class="row">
    <div class="col-xs-12">
        <div class="box box-solid box-default">
            <div class="box-header">
                <h3 class="box-title">{{$question_id>0?'Edit':'Create'}} Question</h3>
            </div>

            <div class="box-body">
                @if($question_id > 0)
                    <p><strong>Question:</strong></p>
                    <div class="post">
                        <div class="user-block">
                            <img src="{{ url('admin/dist/img/user.png') }}" class="img-circle img-bordered-sm">
                            <span class="username">
                          <a href="#">{{$question->title}}</a>

                                <p>
                                  {{$question->content}}
                                </p>
                                <ul class="list-inline">
                                    <li><a href="#" class="link-black text-sm">Created By: {{$question->user->name}}</li>
                                    </li>
                                    <li >
                                        <a href="#" class="link-black text-sm">Date: {{date('Y-m-d H:i:s',strtotime($question->created_at))}}</a>
                                    </li>
                                      <li class="pull-right">
                                       @if($question->created_by ==\Illuminate\Support\Facades\Auth::user()->id)
                                              <a wire:click="edit({{$question->id}})" class="link-black text-lg"><i class="fa fa-edit text-blue"></i></a>
                                              <a wire:click="deleteAnswer({{$question->id}},true)" class="link-black text-lg"><i class="fa fa-trash text-red"></i></a>
                                        @endif
                                    </li>
                                </ul>

                        </div>
                    </div>
                    <p><strong>Replies:</strong></p>
                    @foreach($all_answers as $new_question)
                        <div class="">
                            <div class="user-block">
                                <img src="{{ url('admin/dist/img/user.png') }}" class="img-circle img-bordered-sm">
                                <span class="username">
                          <a href="#">{{$new_question->title}}</a>

                                <p>
                                  {{$new_question->content}}
                                </p>
                                <ul class="list-inline">
                                    <li><a href="#" class="link-black text-sm">Created By: {{$new_question->user->name}}

                                    </li>
                                    <li>
                                       <a href="#" class="link-black text-sm">Date: {{date('Y-m-d H:i:s',strtotime($new_question->created_at))}}</a>
                                    </li>
                                    <li class="pull-right">
                                        @if($new_question->created_by ==\Illuminate\Support\Facades\Auth::user()->id)
                                            <a wire:click="edit({{$new_question->id}})" class="link-black text-lg"><i class="fa fa-edit text-blue"></i></a>
                                            <a wire:click="isConfirmDelete({{$new_question->id}})" class="link-black text-lg"><i class="fa fa-trash text-red"></i></a>
                                        @endif
                                    </li>
                                </ul>

                            </div>
                        </div>
                    @endforeach
                @endif
                    @include('errors.index')

                    <form role="form"  method="post"
                      id="category-form"  novalidate="" enctype="multipart/form-data">
                    <div class="form-group ">
                        <label>Title
                            <span class="asterisk red">*</span>
                        </label>
                        <input required="" class="form-control" type="text" name="name" wire:model="title"
                               value="" placeholder="Enter Title here">
                    </div>
                    <div class="form-group ">
                        <label>Content
                            <span class="asterisk red">*</span>
                        </label>
                        <textarea placeholder="Enter Content Here" class="form-control" wire:model="content">

                        </textarea>

                    </div>

                    <div class="box-footer">
                        <button class="btn btn-primary" wire:click="store()" type="button">Publish</button>
                        <button class="btn btn-danger" type="button"
                                onclick="window.location = '{{route("user.community")}}';">Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if($is_confirm_delete > 0)
    <div class="modal fade in" id="modal-default" style="display: block; padding-right: 17px;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" wire:click="$set('is_confirm_delete', false)">
                        <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Are You sure want to delete?</h4>
                </div>
                <div class="modal-body">
                    <p>  Are you sure you want to delete? All of your data will be
                        permanently removed from our servers forever. This action cannot be
                        undone.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal" wire:click="$set('is_confirm_delete', false)">Close</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteAnswer({{$this->is_confirm_delete}},{{ $this->is_question}})">Delete</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    @endif
</div>
