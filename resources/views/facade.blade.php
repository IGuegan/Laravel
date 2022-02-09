@extends("base")
@section('contenu')
<p>Usine {{ get_class($factory) }}</p>
<p>Concession {{ get_class($concession) }}</p>

<table>
    <tr>
        <th>Liste Voiture</th>
    </tr>
    <?php foreach($concession->getVoitures() as $voiture){?>
    <tr>
        <td>
            <?php echo $voiture->getName() ?>
        </td>
    </tr>
    <?php  } ?>
</table>

<p>Facture : {{ $facture->getFacture() }} €</p>

@endsection
@section('title')
Facade
@endsection