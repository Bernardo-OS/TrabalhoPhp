<?php
 //Inserir ou Atualizar
    //Se NÃO existir o id no formulário insere
    if ($id == 0) {
        //inserir
        $total = $usuario->insert();
        if ($total == 1) {
            header('location:../home.php?cod=sucess');
        } else {
            header('location:../home.php?cod=error');
        }
    } 