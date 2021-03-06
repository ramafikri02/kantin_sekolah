<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KantinKu | Report</title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            color: #333;
            text-align: left;
            font-size: 18px;
            margin: 0;
        }

        h1 {
            text-align: center;
            font-weight: bold;
            margin-bottom: 35px;
        }

        .id {
            font-weight: bold;
        }

        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin: 0 auto;
            margin-top: 15px;
            width: 300px;
        }

        td,
        tr,
        th {
            padding: 5px;
            border: 1px solid #333;
            width: 128px;
        }

        th {
            background-color: #f0f0f0;
        }

        h4,
        p {
            margin: 0px;
        }

        .tanggal {
            float: right;
        }
    </style>
</head>

<body>
    <h1>
        Report Transaksi
    </h1>
    <div class="id">
        <?php

        use Carbon\Carbon;
        use Illuminate\Support\Facades\Session;

        $tanggal = Carbon::now()->format('d M Y');
        $id_user = Session::get('id_user');
        ?>
        <p class="tanggal">
            Tanggal : &nbsp; {{ $tanggal }}
        </p>
        <p>
            ID User &nbsp; &nbsp; : &nbsp; {{ $id_user }}
        </p>
    </div>
    <table>
        <thead>
            <tr>
                <th>ID User</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Level</th>
                <th>Gambar</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id_user }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->level->nama_level }}</td>
                <td>{{ $user->gambar }}</td>
                <td>{{ $user->status }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>