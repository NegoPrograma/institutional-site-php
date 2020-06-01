
    <h1>CONTATO</h1>
    <?php
    if(isset($viewData['warning'])){
        echo $viewData['warning'];
    }
    ?>
    <form  method="post" class='contato'>
    Nome:
    <input type="text" name='name'><br>
    E-mail
    <input type="email" name="email" id=""><br>
    Mensagem:
    <textarea name="message" cols="30" rows="10"></textarea>
    <input type="submit" value="submit">
    </form>
