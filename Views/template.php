<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Institucional</title>
    <link rel="stylesheet" href="./assets/css/template.css">
</head>
<body>
    <header class="header">
        <div class="head1">
        </div>
        <div class="banner">
        </div>
    </header>

    <div class="menu">
    <ul>
        <a href=""><li>HOME</li></a>
        <a href=""><li>PORTFÓLIO</li></a>
        <a href=""><li>SOBRE</li></a>
        <a href=""><li>SERVIÇOS</li></a>
        <a href=""><li>CONTATO</li></a>
    </ul>

    </div>
    <div class="container">
        <?php $this->loadView($viewName,$viewData); ?>
    </div>

    <footer class="footer">Rodapé foda</footer>
</body>
</html>