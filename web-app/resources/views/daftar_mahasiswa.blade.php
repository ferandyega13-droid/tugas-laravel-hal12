<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: radial-gradient(circle at top left, #1e293b, #0f172a);
            color: #f8fafc;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px;
        }
        .nav-pills {
            display: flex;
            gap: 10px;
            margin-bottom: 30px;
            background: rgba(30, 41, 59, 0.7);
            padding: 6px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .nav-pills a {
            text-decoration: none;
            color: #94a3b8;
            padding: 8px 18px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .nav-pills a.active { background: #38bdf8; color: #0f172a; }
        .nav-pills a:hover:not(.active) { color: #f8fafc; }
        .card {
            width: 100%;
            max-width: 680px;
            background: rgba(30, 41, 59, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }
        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }
        .card-header h2 {
            font-size: 22px;
            font-weight: 700;
            letter-spacing: 0.5px;
            background: linear-gradient(90deg, #38bdf8, #818cf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .count-badge {
            background: rgba(56, 189, 248, 0.15);
            color: #38bdf8;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
        }
        table { width: 100%; border-collapse: collapse; }
        th {
            text-align: left;
            padding: 14px 16px;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #94a3b8;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }
        td {
            padding: 16px;
            font-size: 15px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }
        tbody tr { transition: background 0.2s ease; }
        tbody tr:hover { background: rgba(56, 189, 248, 0.06); }
        tbody tr:last-child td { border-bottom: none; }
        .badge {
            display: inline-block;
            padding: 4px 12px;
            border-radius: 6px;
            font-size: 13px;
            font-weight: 700;
        }
        .badge-l { background: rgba(56, 189, 248, 0.15); color: #38bdf8; border: 1px solid rgba(56, 189, 248, 0.3); }
        .badge-p { background: rgba(244, 114, 182, 0.15); color: #f472b6; border: 1px solid rgba(244, 114, 182, 0.3); }
    </style>
</head>
<body>
    <div class="nav-pills">
        <a href="/daftar/mahasiswa" class="active">Daftar Mahasiswa</a>
        <a href="/kalkulator/segitiga">Kalkulator Segitiga</a>
    </div>

    <div class="card">
        <div class="card-header">
            <h2>{{ $judul }}</h2>
            <span class="count-badge">{{ count($mahasiswa) }} Data</span>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mahasiswa as $mhs)
                <tr>
                    <td><strong>{{ $mhs['nama'] }}</strong></td>
                    <td>{{ $mhs['alamat'] }}</td>
                    <td>
                        <span class="badge {{ $mhs['gender'] == 'L' ? 'badge-l' : 'badge-p' }}">
                            {{ $mhs['gender'] }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>