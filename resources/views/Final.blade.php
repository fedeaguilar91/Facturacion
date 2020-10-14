@extends('layout')

@section('content')



@php   ($total = 0)


<table class="table"  border="1" >
    <thead>
        <tr>
            <th>Fecha </th>
            <th>Nombre Producto </th>
            <th>Cantidad  </th>
            <th>Precio del Producto</th>
            <th>Total   </th>

        </tr>
    </thead>
    <tbody>
        @foreach($fac as $facs)
            <tr>

                <td style="text-align: center;">{!! $facs->Fecha_Factura !!}</td>
                <td style="text-align: center;">{!! $facs->Nombre_Producto !!}</td>
                <td style="text-align: center;">{!! $facs->cant !!}</td>
                <td style="text-align: center;">{!!  $facs->Precio_Producto !!}</td>
                <td style="text-align: center;">{!! $facs->Total !!} </td>




                @php ($total = $total + $facs->Total)





            </tr>
        @endforeach





    </tbody>
</table>
<h1>Factura Total = $   {{$total}} <h1>
@endsection
