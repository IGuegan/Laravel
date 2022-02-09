@extends("base")
@section('contenu')
<html>

<body>
    <table style="border: solid black 1px">
        <tr style="border: solid black 1px">
            <th style="border: solid black 1px">voiture 1</th>
            <th>voiture 2</th>
        </tr>
        <tr style="border: solid black 1px">
            <td style="border: solid black 1px">
                {{ $voiture1->getText() }}
            </td>
            <td>
                {{ $voiture2->getText() }}
            </td>
        </tr>
    </table>

</body>

</html>
@endsection
@section('title')
Command
@endsection