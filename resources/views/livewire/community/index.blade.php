<div>
    <div class="row">
        <div class="col-xs-12">
            <p class="text-right">
                <a href="{{route('user.community.create')}}" class="btn bg-blue "><i class="fa fa-plus"></i> Add
                    Community </a>
            </p>
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Popular</a></li>
                    <li class=""><a href="#timeline" data-toggle="tab" aria-expanded="false">New</a></li>
                    <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Followed</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="activity">
                        <!-- Post -->
                        @if(count($popular_questions) > 0)
                            @foreach($popular_questions as $popular_question)
                                <div class="post">
                                    <div class="user-block">
                                        <img src="{{ url('admin/dist/img/user.png') }}"
                                             class="img-circle img-bordered-sm">
                                        <span class="username">
                          <a href="{{route('user.community.edit',$popular_question->id)}}">{{$popular_question->title}}</a>

                                <p>
                                  {{$popular_question->content}}
                                </p>
                                 <p>

                                    <a wire:click="like({{$popular_question->id}})">
                                         <i class="{{getLike($popular_question->id)?'fa fa-thumbs-up':'fa fa-thumbs-o-down'}}"
                                            aria-hidden="true"></i>
                                         ({{$popular_question->likes_count}})
                                    </a>
                                 </p>
                                <ul class="list-inline">
                                    <li><a href="#" class="link-black text-sm">Created By: {{$popular_question->user->name}}</li>
                                    </li>
                                    <li class="pull-right">
                                        @if($popular_question->is_favorite == \App\Models\Question::FAVORITE)
                                            <a href="javascript:;"
                                               wire:click="changeFavorite({{$popular_question->id}})"
                                               class="text-yellow-600 hover:text-yellow-900">
                                                                                                               <i class="fa fa-star"></i></a>
                                        @else
                                            <a href="javascript:;"
                                               wire:click="changeFavorite({{$popular_question->id}},'1')"
                                               class="text-yellow-600 hover:text-yellow-900">
                                                <i class="fa fa-star-o"></i>
                                                            </a>
                                        @endif
                                        <a href="{{route('user.community.edit',$popular_question->id)}}"
                                           class="link-black text-sm"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="link-black text-sm"><i
                                                    class="fa fa-comments-o margin-r-5"></i>{{count($popular_question->answers)}}</a>
                                    </li>
                                </ul>

                                    </div>
                                </div>
                            @endforeach
                        @else
                            No Questions Found.
                        @endif
                        {{$popular_questions->links()}}
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="timeline">
                        <!-- The timeline -->
                        @if(count($new_questions) > 0)
                            @foreach($new_questions as $new_question)
                                <div class="post">
                                    <div class="user-block">
                                        <img src="{{ url('admin/dist/img/user.png') }}"
                                             class="img-circle img-bordered-sm">
                                        <span class="username">
                          <a href="{{route('user.community.edit',$new_question->id)}}">{{$new_question->title}}</a>

                                <p>
                                  {{$new_question->content}}
                                </p>
                                <ul class="list-inline">
                                    <li><a href="#" class="link-black text-sm">Created By: {{$new_question->user->name}}</li>
                                    </li>
                                    <li class="pull-right">
                                      @if($new_question->is_favorite == \App\Models\Question::FAVORITE)
                                            <a href="javascript:;" wire:click="changeFavorite({{$new_question->id}})"
                                               class="text-yellow-600 hover:text-yellow-900">
                                                                                                               <i class="fa fa-star"></i></a>
                                        @else
                                            <a href="javascript:;"
                                               wire:click="changeFavorite({{$new_question->id}},'1')"
                                               class="text-yellow-600 hover:text-yellow-900">
                                                <i class="fa fa-star-o"></i>
                                                            </a>
                                        @endif
                                        <a href="{{route('user.community.edit',$new_question->id)}}"
                                           class="link-black text-sm"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="link-black text-sm"><i
                                                    class="fa fa-comments-o margin-r-5"></i>{{count($new_question->answers)}}</a>

                                    </li>
                                </ul>

                                    </div>
                                </div>
                            @endforeach
                        @else
                            No Questions Found.
                        @endif
                        {{$new_questions->links()}}
                    </div>
                    <!-- /.tab-pane -->

                    <div class="tab-pane" id="settings">
                        @if(count($follow_questions) > 0)
                            @foreach($follow_questions as $follow_question)
                                <div class="post">
                                    <div class="user-block">
                                        <img src="{{ url('admin/dist/img/user.png') }}"
                                             class="img-circle img-bordered-sm">
                                        <span class="username">
                          <a href="{{route('user.community.edit',$follow_question->id)}}">{{$follow_question->title}}</a>

                                <p>
                                  {{$follow_question->content}}
                                </p>
                                <ul class="list-inline">
                                    <li><a href="#" class="link-black text-sm">Created By: {{$follow_question->user->name}}</li>
                                    </li>
                                    <li class="pull-right">
                                         @if($follow_question->is_favorite == \App\Models\Question::FAVORITE)
                                            <a href="javascript:;"
                                               wire:click="changeFavorite({{$follow_question->id}},'0')"
                                               class="text-yellow-600 hover:text-yellow-900">
                                                                                                               <i class="fa fa-star"></i></a>
                                        @else
                                            <a href="javascript:;"
                                               wire:click="changeFavorite({{$follow_question->id}},'1')"
                                               class="text-yellow-600 hover:text-yellow-900">
                                                <i class="fa fa-star-o"></i>
                                                            </a>
                                        @endif
                                        <a href="{{route('user.community.edit',$follow_question->id)}}"
                                           class="link-black text-sm"><i class="fa fa-edit"></i></a>
                                        <a href="#" class="link-black text-sm"><i
                                                    class="fa fa-comments-o margin-r-5"></i>{{count($follow_question->answers)}}</a>
                                    </li>
                                </ul>

                                    </div>
                                </div>
                            @endforeach
                        @else
                            No Questions Found.
                        @endif
                        {{$follow_questions->links()}}
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
        </div>
    </div>
</div>
