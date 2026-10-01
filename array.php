<?php
$buah = ["Apel", "Mangga", "Jeruk"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Array Interaktif</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            width: 90%;
            max-width: 600px;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,.2);
            text-align: center;
        }

        h1 {
            color: #5b21b6;
        }

        .input-area {
            display: flex;
            gap: 10px;
            margin: 25px 0;
        }

        input {
            flex: 1;
            padding: 13px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 16px;
        }

        button {
            padding: 13px 18px;
            border: none;
            border-radius: 10px;
            background: #6366f1;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #4f46e5;
            transform: scale(1.03);
        }

        #hasil {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
        }

        .item {
            background: #eef2ff;
            color: #4338ca;
            padding: 15px 20px;
            border-radius: 12px;
            font-weight: bold;
            animation: muncul .3s;
        }

        @keyframes muncul {
            from {
                opacity: 0;
                transform: scale(.7);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .info {
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="card">

    <h1>📦 Array</h1>

    <p>Tambahkan data ke dalam Array</p>

    <div class="input-area">
        <input type="text" id="inputBuah" placeholder="Masukkan data...">
        <button onclick="tambah()">+ Tambah</button>
    </div>

    <div id="hasil">
        <?php foreach ($buah as $item): ?>
            <div class="item">
                <?= $item ?>
            </div>
        <?php endforeach; ?>
    </div>

    <p class="info">
        Klik tombol tambah untuk memasukkan data baru.
    </p>

</div>

<script>
function tambah() {

    let input = document.getElementById("inputBuah");
    let hasil = document.getElementById("hasil");

    if (input.value.trim() === "") {
        alert("Masukkan data terlebih dahulu!");
        return;
    }

    let item = document.createElement("div");

    item.className = "item";
    item.innerText = input.value;

    hasil.appendChild(item);

    input.value = "";
    input.focus();
}
</script>

</body>
</html>
