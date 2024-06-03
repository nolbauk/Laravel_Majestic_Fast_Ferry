
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Tujuan</title>

    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: center; /* Center align table text */
        }

        th, td {
            text-align: center; /* Center align table text */
            padding: 8px; /* Reduce padding to fit content within the page */
            font-size: 14px;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
        <h1>Data Tujuan</h1>
    </center>
    <table>
        <thead>
            <tr>
                <th class="center">From</th>
                <th class="center">Destination</th>
                <th class="center">Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $row->dari }}</td>
                    <td class="center">{{ $row->destination }}</td>
                    <td class="center">{{ $row->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
