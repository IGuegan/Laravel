@extends("base")
@section('title')
Strategie
@endsection
@section('contenu')
<html>

<body>
    <table>
        <tr style="border: solid black 1px">
            <th style="border: solid black 1px">Tva Opel</th>
            <th>Tva Renault</th>
        </tr>
        <tr style="border: solid black 1px">
            <td style="border: solid black 1px">
                {{ $opel }}
            </td>
            <td>
                {{ $renault }}
            </td>
        </tr>
    </table>
</body>

</html>
@endsection