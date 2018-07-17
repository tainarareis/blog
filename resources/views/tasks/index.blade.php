@extends ('layouts.layout')

@section('content')
<div id="about">
    <ul>
        @foreach ($tasks as $task) 
            <li>{{ $task->body}}</li>
        @endforeach
    </ul>
</div>
@endsection