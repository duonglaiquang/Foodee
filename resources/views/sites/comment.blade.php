<div class="container">
    @foreach($listCmt as $comment)
        <div class="row">
            <div class="col-sm-7" id="review-box">
                <div class="review-block">
                    <div class="row">
                        @foreach( $listUser as $users1)
                            @if($users1->id==$comment->user_id)
                                <div class="col-sm-3">
                                    @if(isset($users1->avatar))
                                        <img src="{{asset('../img/$users1->avatar')}}" class="img-rounded">
                                    @else
                                        <img src="{{asset('../img/user.png')}}"
                                             class="img-rounded">
                                    @endif
                                    <div class="review-block-name">
                                        <label style="text-align: center;font-size: 17px !important;font-weight: bold !important;">{{$users1->name}}</label>
                                    </div>
                                    <div class="review-block-date">{{$comment->created_at}}</div>
                                </div>
                            @endif
                        @endforeach
                        <div class="col-sm-9">
                            <input id="input" type="text" class="rating"
                                   value="{{ $comment->rated }}"
                                   data-readonly="true" data-max="5" data-min="0"
                                   data-step="0.5"
                                   size="sm" title="">
                            <div class="review-block-description">
                                <label> {{ $comment->content }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div> <!-- /container -->
{{ HTML::script('/js/sites/product_comment.js',['type' => 'text/javascript'])}}