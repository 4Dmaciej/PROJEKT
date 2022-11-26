<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="uppernav">Książki</nav>
        <nav id="side_nav" class="panel">
        <ul id="list">
        <li>
            <a href="index.php">Strona Główna</a>
        </li>
        <li>
            <a href="AddBook.php">Dodaj Książke</a>
        </li>
        
        </ul>
    </nav>

    <main id="content" class="panel">
    <form id="siema">
    <input type="text" id="kname" class="input" name="kname" placeholder="Tytuł książki">
    <input type="text" id="lname" class="input" name="lname"  placeholder="Imie i nazwisko autora">
    <input type="text" id="iname" class="input" name="iname" placeholder="kod ISBN">
    <input type="date" id="bname" class="input" name="bname" >
    <input type="text" id="jname" class="input" name="jname" placeholder="Ilość egzemplarzy">
    <input type="submit" value="Dodaj książkę" class="input">
    </form> 
    
        
</main>

    <footer></footer>

    <script src="addbook.js"> </script>
</body>
</html>