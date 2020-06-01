<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site Institucional</title>
    <link rel="stylesheet" href="http://local:8080/institutional-site-php/assets/css/template.css">
</head>
<body>
    <header class="header">
        <div class="head1">gc_collect_cycles
            
        </div>
        <div class="banner">
        </div>
    </header>

    <div class="menu">
    <ul>
        <a href="home"><li>HOME</li></a>
        <a href="portfolio"><li>PORTFÓLIO</li></a>
        <a href="sobre"><li>SOBRE</li></a>
        <a href="servicos"><li>SERVIÇOS</li></a>
        <a href="contato"><li>CONTATO</li></a>
    </ul>

    </div>
    <div class="container">
        <?php $this->loadView($viewName,$viewData); ?>
    </div>

    <footer class="footer">Rodapé foda</footer>
</body>
</html>