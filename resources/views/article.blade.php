<h1> Articles actifs : </h1>

@foreach($articles as $article)
    <h4>{{$article->title}}</h4>
    <p>{{$article->content}}</p>
    <hr>

    @endforeach