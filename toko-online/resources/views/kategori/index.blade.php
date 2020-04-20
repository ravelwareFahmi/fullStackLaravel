@extends('layouts.app')
@section('content')
<ul>
    @foreach ($categori as $item)
        <li>
            {{ $item->name }}
        </li>
    @endforeach
</ul>
{{ $categori->links() }}

@endsection
