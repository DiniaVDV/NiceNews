<div class="row blockComments">
    <div class="col-md-12">
        <hr>

        <h3> Комментарии:</h3>

        <hr>
        @if(Auth::user())

            <form id="addComment" method="POST" action="{{asset('/addComment')}}" accept-charset="UTF-8">
                <div class="form-group">
                    <label for="message">{{Auth::user()->name}}, Ваше мнение:</label>
                    <textarea class="form-control comment" name="body" cols="50" rows="10"></textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-primary form-control" type="submit" value="ОК">
                </div>
            </form>
        @else
            <h4> Вы не зарегистрированы. Зарегистируйтесь, чтобы выразить свое мнение. </h4>
            <div class='nav navbar-nav'>
                <li>
                    <a href="{{asset('login')}}">Войти</a>
                </li>
                <li>
                    <a href="{{asset('register')}}">Регистрация</a>
                </li>
            </div>

        @endif
        <div class="comments">
            @foreach($comments as $comment)
                <div id="comm_{{$comment->id}}">
                    <button onclick="count(this)" class="btn btn-default btn-xs btn-danger" id="min_{{$comment->id}}">
                        <i class="fa fa-minus" aria-hidden="true"></i>
                    </button>
                    <span class="badge like_{{$comment->id}}">{{$comment->like}}</span>
							<button onclick="count(this)" class="btn btn-default btn-xs btn-success"
                                    id="plus_{{$comment->id}}">
									<i class="fa fa-plus" aria-hidden="true"></i>
							</button>
                        {{$users[$comment->id][0]->name}}. Дата: {{$comment->created_at}}
                        <p><strong>{{$comment->message}}</strong></p>
                </div>
            @endforeach
            @include('partials.pagination', ['paginate' => $comments])
        </div>
    </div>
</div>
<script>
    $(function () {
        var i = 1;
        var form = $('#addComment');
        var formComments = $('.comments');


        $(form).submit(function (event) {
            event.preventDefault();
            i++;
            var user = <?=Auth::user()?>;
            var article = <?=$article?>;
            var today = new Date();
            var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
            var time = today.getHours() + ':' + today.getMinutes() + ':' + today.getSeconds()
            var currentDate = date + ' ' + time;
            var comm = $('.comment'); //comment text

            if ($(comm).val() !== '') {
                $.ajax({
                    type: 'GET',
                    url: $(form).attr('action'),
                    data: {
                        comment: $(comm).val(),
                        user_id: user.id,
                        article_id: article.id,
                    },
                    success: function (comment) {
                        var id = comment.id;
                        $(formComments).attr('id', 'comm_' + id + '');
                        $(formComments).append("<div id='comm_" + id + "'><button onclick='count(this)' " +
                            "class='btn btn-default btn-xs btn-danger' id='min_" + id + "'><i class='fa fa-minus' " +
                            "aria-hidden='true'></i></button> <span class='badge like_" + id + "'>" + 0 +
                            "</span> <button onclick='count(this)' class='btn btn-default btn-xs btn-success' id='plus_" + id +
                            "'><i class='fa fa-plus' aria-hidden='true'></i></button> " + user.name + ". Дата:  " + currentDate +
                            " <p><strong>" + $(comm).val() + "</strong></p></div>");
                        $(comm).val('');
                    },
                    error: function (data) {
                        console.log(data);
                        $(comm).val('');
                    }
                });
            }


        });
    });
    function count(button) {
        var butt = $(button).attr('id');
        var checkingArray = butt.split("_");
        console.log($(".like_" + checkingArray[1]).text());
        if (checkingArray[0] == 'plus') {
            var like = parseInt($(".like_" + checkingArray[1]).text());
            like++;
            $(".like_" + checkingArray[1]).text(like);
        } else {
            var like = parseInt($(".like_" + checkingArray[1]).text());
            like--;
            $(".like_" + checkingArray[1]).text(like);
        }
		$.ajax({
				type:'GET',
				url: "{{asset('countLikes')}}",
				data:{
					comment_id : checkingArray[1],
					},
				success:function(data){
					console.log(data);
				},
				error: function(data){
					console.log(data);

				}
			});
    }


</script>