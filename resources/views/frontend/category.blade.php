<div>
    @foreach($list as $r)
        {{$r->id}}:
        {{$r->name}} <br>
    @endforeach

    <div>
        {{$list->links()}}
    </div>
</div>
