@extends("base")
@section('title')
Itération
@endsection
@section('contenu')
<ul>
    <table>
        <tr style="border: solid black 1px">
            <th style="border: solid black 1px">Liste Voiture</th>
        </tr>
        <?php while($agg->hasnext()) {?>
        <tr style="border: solid black 1px">
            <td style="border: solid black 1px">
                <?php echo get_class($agg->next()); ?>
            </td>
        </tr>
        <?php  } ?>
    </table>
</ul>
@endsection