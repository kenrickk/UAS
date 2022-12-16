@extends('admin.layouts.main')

@section('content')
  <div class="row mb-12">
    <div class="col-md-6 col-lg-12 mb-3">
      <div class="card h-100">
        <div class="card-body">
          <h5 class="card-title">Overloop's Delivery Fee</h5>
          <a href="{{ url('/admin/tujuan/print_pdf') }}" target="blank" class="btn btn-primary" title="Print PDF">
            <i class="fa fa-plus" aria-hidden="true"></i> Print PDF
          </a>

          <p><br></p>
          <div class="table-primary">
            <table class="table" id="DataTables">
              <thead>
                <tr>
                    <th>#</th>
                    <th>Dikirim Ke</th>
                    <th>Ongkir</th>
                    <th>Estimasi Tiba</th>
                </tr>
              </thead>
              <tbody>
                @foreach($tujuan as $item)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->dikirim_ke }}</td>
                    <td>{{ $item->ongkir }}</td>
                    <td>{{ $item->estimasi_tiba }}</td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>

        </div>
      </div>
    </div>
  </div>

@endsection