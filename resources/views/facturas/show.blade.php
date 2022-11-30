<h1>FACTURA</h1>
<hr>
<h2>Número de factura: {{$factura->numero_de_factura}}</h2>
<h2>Código de cliente: {{$factura->user_id}}</h2>
<h2>Fecha: {{$factura->fecha}}</h2>
<hr>

<table class="table table-striped table-bordered table1">
    <thead class="tr1">
        <tr>
            <td><b>Concepto</b></td>
            <td><b>Unidades</b></td>
            <td><b>Precio</b></td>
            <td><b>Importe</b></td>
        </tr>
    </thead>
    <tbody>
        <div hidden>{{$total = 0}}</div>
        @foreach ( $conceptos as $concepto )
        <tr>
            <td>{{$concepto->concepto}}</td>
            <td>{{$concepto->unidades}}</td>
            <td>{{$concepto->precio}} €</td>
            <td>{{$concepto->importe}} €</td>

            <div hidden>{{$total += $concepto->importe}}</div>
        </tr>
        @endforeach
    </tbody>
</table>

<hr>
<h2>TOTAL: {{$total}} €</h2>

<style>
    .table1 {
        width: 1000px;
        border: solid;
        margin-left: 5cm;
    }

    .tr1 {
        border-bottom: solid;
    }
</style>
