<p>Sort by date</p>
<button type="button" class="btn btn-default" onclick="window.location='{{ url("/home/sort/desc") }}'">Newest </button>
<button type="button" class="btn btn-default" onclick="window.location='{{ url("/home/sort/asc") }}'">Oldest </button>
<br></br>

<h1>Advertisements</h1>
<ul class="list-group">
    @if(count($ads)>0)
        @foreach($ads as $ad)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-8">
                        <h4><a href="/home/{{$ad->id}}">{{$ad->Title}}</a></h4>
                        <strong>Description:</strong>
                        <p>{{$ad->Description}}</p>
                    </div>
                    <div class="col-md-3">
                        Posted on: {{$ad->created_at}}  By:{{$ad->name}}
                    </div>
                </div>
            </li>
        @endforeach
    @else
        <p>No ads available</p>
    @endif
</ul>