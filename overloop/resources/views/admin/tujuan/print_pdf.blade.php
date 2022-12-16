<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overloop Delivery Fee PDF</title>
</head>

<body>
    <center><img
            src="{{ url('https://www.weareanimalkingdom.com/wp-content/uploads/2021/06/Universitas-Pelita-Harapan-UPH.jpg') }}"
            alt="logo UPH"></center>
    <p style="text-align:center"><strong>Nama: Kenrick Lau</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>NIM: 03081200051</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>Delivery Fee</strong><br />
        &nbsp;</p>

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

    <p style="text-align:center"><strong>Copyright Ken Ganteng</strong></p>


</body>

</html>
