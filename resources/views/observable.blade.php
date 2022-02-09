@extends("base")
@section('title')
Observable
@endsection
@section('contenu')
<html>

<body>
    <div>
        {{ $observer1->envoyer() }}
        {{ $observer2->envoyer() }}
    </div>
</body>

</html>
@endsection