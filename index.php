<!doctype html>
<html lang='it'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='author' content='Diego Cavenati'>
    <title>To do List</title>
    <!-- Font awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css'>
    <!-- Bootstrap CSS -->
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT' crossorigin='anonymous'>
    <!-- Personal CSS -->
    <link rel='stylesheet' href='./assets/css/style.css'>
</head>

<body>

    <main id="app">
        <div class="mainBox">
            <div class="container text-center">
                <h1>Tasks list</h1>
                <ul>
                    <li v-for="task in tasks">{{task}}</li>
                </ul>
                <form action="server.php" method="post">
                    <input type="text" name="newTask" id="newTask" placeholder="Aggiungi una nuova task">
                    <button type="submit" class="btn btn-primary">Aggiungi!</button>
                </form>
            </div>
        </div>
    </main>

    <!-- Axios CDN -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- Vue script -->
    <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
    <script src='./assets/js/app.js'></script>
    <!-- Bootstrap script -->
    <script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js' integrity='sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8' crossorigin='anonymous'></script>
</body>

</html>