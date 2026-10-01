<?php
$stack = ["A", "B", "C"];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Stack Interaktif</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #f97316, #dc2626);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .card {
            background: white;
            width: 90%;
            max-width: 500px;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,.2);
            text-align: center;
        }

        h1 {
            color: #ea580c;
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
            background: #ea580c;
            color: white;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background: #c2410c;
        }

        .stack {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            margin: 30px 0;
        }

        .item {
            width: 120px;
            background: #ffedd5;
            color: #c2410c;
            padding: 15px;
            border-radius: 10px;
            font-weight: bold;
            animation: masuk .3s;
        }

        @keyframes masuk {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .pop {
            background: #dc2626;
        }

        .info {
            color: #777;
            margin-top: 20px;
        }
    </style>
</head>

<body>

<div class="card">

    <h1>📚 Stack</h1>

    <p>
        <b>LIFO</b> — Last In, First Out
    </p>

    <div class="input-area">

        <input
            type="text"
            id="inputStack"
            placeholder="Masukkan data..."
        >

        <button onclick="pushData()">
            Push
        </button>

    </div>

    <div class="stack" id="stack">

        <?php foreach (array_reverse($stack) as $data): ?>

            <div class="item">
                <?= $data ?>
            </div>

        <?php endforeach; ?>

    </div>

    <div class="buttons">

        <button class="pop" onclick="popData()">
            Pop
        </button>

        <button onclick="lihatTop()">
            Lihat Top
        </button>

    </div>

    <p class="info" id="info">
        Data paling atas adalah C
    </p>

</div>

<script>

function pushData() {

    let input = document.getElementById("inputStack");
    let stack = document.getElementById("stack");

    if (input.value.trim() === "") {
        alert("Masukkan data!");
        return;
    }

    let item = document.createElement("div");

    item.className = "item";
    item.innerText = input.value;

    stack.prepend(item);

    input.value = "";
    input.focus();

    updateInfo();
}


function popData() {

    let stack = document.getElementById("stack");

    if (stack.children.length === 0) {
        alert("Stack kosong!");
        return;
    }

    stack.removeChild(stack.firstElementChild);

    updateInfo();
}


function lihatTop() {

    let stack = document.getElementById("stack");
    let info = document.getElementById("info");

    if (stack.children.length === 0) {
        info.innerText = "Stack kosong!";
        return;
    }

    info.innerText =
        "Data paling atas adalah " +
        stack.firstElementChild.innerText;
}


function updateInfo() {

    let stack = document.getElementById("stack");
    let info = document.getElementById("info");

    if (stack.children.length === 0) {
        info.innerText = "Stack kosong!";
    } else {
        info.innerText =
            "Data paling atas adalah " +
            stack.firstElementChild.innerText;
    }
}

</script>

</body>
</html>
