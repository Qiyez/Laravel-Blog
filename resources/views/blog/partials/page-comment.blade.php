@if($comments->count())
    <p>{{ $comments->count() }}条评论</p>
@endif
<ul class="list-unstyled">
    @foreach ($comments as $k=> $comment)
        <li class="my-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $comment->name }}</h4>
                    <div class="content">
                        {!! $comment->content_html !!}
                    </div>
                    <small>{{ $comment->created_at }}</small>
                </div>
            </div>
        </li>
    @endforeach
</ul>
<form name="sentMessage" action="/comment" method="post" id="commentForm" novalidate>
    <h3>评论：</h3>
    <form>
        <div class="form-group">
            <label for="email">Username:</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="pwd">Email:</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter password">
        </div>
        <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea name="comment" id="comment" class="form-control" rows="5" placeholder="Enter comment"></textarea>
        </div>
        <button type="submit" class="btn btn-primary float-right">Submit</button>
    </form>
</form>