@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @include('admin.sidebar')

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Delivery_fee {{ $delivery_fee->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/delivery_fee') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/delivery_fee/' . $delivery_fee->id . '/edit') }}" title="Edit Delivery_fee"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/delivery_fee' . '/' . $delivery_fee->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Delivery_fee" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $delivery_fee->id }}</td>
                                    </tr>
                                    <tr><th> Dikirim Ke </th><td> {{ $delivery_fee->dikirim_ke }} </td></tr><tr><th> Ongkir </th><td> {{ $delivery_fee->ongkir }} </td></tr><tr><th> Estimasi Tiba </th><td> {{ $delivery_fee->estimasi_tiba }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
