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
            background: radial-gradient(circle at top right, #1e293b, #0f172a);
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
        .nav-pills a.active { background: #10b981; color: #0f172a; }
        .nav-pills a:hover:not(.active) { color: #f8fafc; }
        .card {
            width: 100%;
            max-width: 440px;
            background: rgba(30, 41, 59, 0.85);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
        }
        h2 {
            font-size: 22px;
            font-weight: 700;
            text-align: center;
            margin-bottom: 6px;
            background: linear-gradient(90deg, #34d399, #38bdf8);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .subtitle { text-align: center; font-size: 13px; color: #94a3b8; margin-bottom: 24px; }
        .form-group { margin-bottom: 18px; }
        label { display: block; margin-bottom: 8px; font-size: 13px; font-weight: 600; color: #cbd5e1; }
        input[type="number"] {
            width: 100%;
            padding: 12px 14px;
            background: #0f172a;
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 10px;
            color: #f8fafc;
            font-size: 15px;
            font-family: inherit;
            transition: border-color 0.2s ease;
        }
        input[type="number"]:focus { outline: none; border-color: #10b981; }
        button {
            width: 100%;
            padding: 13px;
            margin-top: 6px;
            background: linear-gradient(135deg, #10b981, #059669);
            color: #0f172a;
            border: none;
            border-radius: 10px;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: 0.5px;
            cursor: pointer;
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }
        button:hover { transform: translateY(-1px); box-shadow: 0 8px 20px rgba(16, 185, 129, 0.3); }
        .result-box {
            margin-top: 24px;
            padding: 18px;
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.25);
            border-radius: 12px;
            text-align: center;
        }
        .result-label { font-size: 12px; text-transform: uppercase; letter-spacing: 1px; color: #6ee7b7; margin-bottom: 4px; }
        .result-value { font-size: 28px; font-weight: 700; color: #ffffff; }
    </style>
</head>
<body>
    <div class="nav-pills">
        <a href="/daftar/mahasiswa">Daftar Mahasiswa</a>
        <a href="/kalkulator/segitiga" class="active">Kalkulator Segitiga</a>
    </div>

    <div class="card">
        <h2>{{ $judul }}</h2>
        <p class="subtitle">Rumus: ½ × Alas × Tinggi</p>

        <form action="/kalkulator/segitiga/proses" method="POST">
            @csrf
            <div class="form-group">
                <label>Alas Segitiga (cm)</label>
                <input type="number" step="any" name="alas" value="{{ $alas }}" required>
            </div>
            <div class="form-group">
                <label>Tinggi Segitiga (cm)</label>
                <input type="number" step="any" name="tinggi" value="{{ $tinggi }}" required>
            </div>
            <button type="submit">HITUNG LUAS</button>
        </form>

        <div class="result-box">
            <div class="result-label">Hasil Perhitungan Luas</div>
            <div class="result-value">{{ $hasil }} cm²</div>
        </div>
    </div>
</body>
</html>