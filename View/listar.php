<?php

foreach($competidores as $competidor){
    echo $competidor["nome"]. "<br>";
    echo $competidor["idade"]. "<br>";
    echo $competidor["altura"]. "<br>";
    echo $competidor["peso"]. "<br>";
    echo $competidor["cpf"]. "<br>";
    echo $competidor["rg"]. "<br>";
    echo "<br> <hr>";
};
?>
<button><a href="C:\aluno2\xampp\htdocs\produtos_de_beleza\View\cadastrar.php">Cadastrar</a></button>
<button><a href="C:\aluno2\xampp\htdocs\produtos_de_beleza\View\atualizar.php">Atualizar</a></button>
<button><a href="C:\aluno2\xampp\htdocs\produtos_de_beleza\View\deletar.php">Deletar</a></button>