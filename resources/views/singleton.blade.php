</html>
@extends("base")
@section('contenu')
{{ $a->increment() }}<br>
{{ $b->increment() }}<br>
{{ $a->increment() }}<br>
@endsection
@section('title')
Singleton
@endsection