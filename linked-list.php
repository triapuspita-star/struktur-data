<?php
$node = ["A", "B", "C"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Linked List Interaktif</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #06b6d4, #2563eb);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            width: 90%;
            max-width: 750px;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,.2);
            text-align: center;
        }

        h1 {
            color: #2563eb;
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
            background: #2563eb;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #1d4ed8;
        }

        #list {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
            margin: 30px 0;
        }

        .node {
            background: #dbeafe;
            color: #1d4ed8;
            padding: 18px 25px;
            border-radius: 12px;
            font-weight: bold;
            font-size: 18px;
        }

        .arrow {
            font-size: 25px;
            color: #555;
        }

        .info {
            color: #777;
        }
    </style>
</head>

<body>

<div class="card">

    <h1>🔗 Linked List</h1>

    <p>Tambahkan Node baru</p>

    <div class="input-area">

        <input
            type="text"
            id="inputNode"
            placeholder="Masukkan node..."
        >

        <button onclick="tambahNode()">
            + Tambah Node
        </button>

    </div>

    <div id="list">

        <?php foreach ($node as $i => $data): ?>

            <div class="node">
                <?= $data ?>
            </div>

            <?php if ($i < count($node) - 1): ?>
                <div class="arrow">→</div>
            <?php endif; ?>

        <?php endforeach; ?>

        <div class="arrow">→</div>

        <div class="node">
            NULL
        </div>

    </div>

    <p class="info">
        Setiap Node terhubung dengan Node berikutnya.
    </p>

</div>

<script>

function tambahNode() {

    let input = document.getElementById("inputNode");
    let list = document.getElementById("list");

    if (input.value.trim() === "") {
        alert("Masukkan data node!");
        return;
    }

    let nullNode = list.lastElementChild;

    let arrow = document.createElement("div");
    arrow.className = "arrow";
    arrow.innerText = "→";

    let node = document.createElement("div");
    node.className = "node";
    node.innerText = input.value;

    list.insertBefore(arrow, nullNode);
    list.insertBefore(node, nullNode);

    input.value = "";
    input.focus();
}

</script>

</body>
</html>
