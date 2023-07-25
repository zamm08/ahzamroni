<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
        box-sizing: border-box;
        }
        header {
            background-color: grey;
            padding: 20px;
            text-align: center;
        }
        nav {
            float: left;
            background: skyblue;
            width: 15%;
            height: 500px;
            padding: 10px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        h3 {
            color: black;
        }
         article {
            float: left;
            padding: 20px;
            width: 85%;
            background-color: #f1f1f1;
            height: 500px;
        }
        footer {
            background-color: grey;
            padding: 20px;
            text-align: center;
        }
        section::after {
        content: "";
        display: table;
        clear: both;
        }
        @media (max-width: 600px) {
        nav, article {
            width: 100%;
            height: auto;
        }
        }
    </style>
</head>
<body>
    <header>
    <h1>Ahmad Zamroni</h1>
    </header>
    <section>
        <nav>
            <ul>
                <h3>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="index.php?page=about">About</a></li>
                    <li><a href="index.php?page=contact">Contact</a></li>
                </h3>
            </ul>
        </nav>
    <article>
        <h1>Halaman Home</h1>
        <p>Ini adalah halaman home</p>
    </article>
    </section>

    <footer>
        <h2>&copy;ahzamroni</h2>
    </footer>
</body>
</html>