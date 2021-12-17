<?php

    $mensagem = '';
    if(isset($_GET['status'])){
        switch ($_GET['status']) {
            case 'success':
                $mensagem = '<div class="alert alert-success">Ação Executado com Sucesso !</div>';
                break;

            case 'error':
                $mensagem = '<div class="alert alert-danger">Ação não Foi Executada !</div>';
                    break;
        }
    }

    $resutados = '';
    foreach($transacao as $transacao){

        $resutados .=' <tr ">
                       <td>'.$transacao->id.'</td>
                       <td>'.$transacao->titulo.'</td>
                       <td>'.$transacao->categoria.'</td>
                       <td>'.$transacao->valor.'</td>
                       <td>'.($transacao->tipo == 'Entrada' ? 'Entrada' : 'Saida').'</td>
                       <td>'.date('d/m/Y à\s H:i:s',strtotime($transacao->registro)).'</td>
                       <td>
                            <a href="editar.php?id=' .$transacao->id.'">
                            <button type="button" class="btn btn-primary">Editar</button>
                            </a>

                            <a href="excluir.php?id=' .$transacao->id.'">
                            <button type="button" class="btn btn-danger">Excluir</button>
                            </a>
                       </td>
                       </tr>  
        ';
    }


?>

<main>

<?=$mensagem?>

<section>

<form method="get">
    <div class="row my-4">
        <div  class="col">
            <label for="">Busca Por Tipo</label>
            <input type="text" name="busca" value="<?=$busca?>" class="form-control" placeholder="digite aqui sua busca...">
        </div>
        

        <div class="col">  
            <label for="">Selecione Categoria</label>
            <select name="status" class="form-control" >
                <option value=""></option>
                <option value="BOLETO">BOLETO</option>
                <option value="DOC">DOC</option>
                <option value="DOC">TED</option>
            </select>
        </div>
        <div  class="col d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </div>

        
    </div>
</form>
</section>

<section>
<table class="table bg-light mt-3">
        <thead>
            <tr>
                <th>Código</th>
                <th>Titulo</th>
                <th>Categoria</th>
                <th>Tipo de Transação</th>
                <th>Valor</th>                
                <th>Registro</th>
                <th>Ações</th>
                
            </tr>
        </thead>
        <tbody id="tbody">

            <?=$resutados?>
            
        </tbody>
        
    </table>
</section>
<section>
        <a href="cadastrar.php">
            <button class="btn btn-sucess" style="background: darkblue;font-weight:bold;color:bisque;margin-left: -2px"> Novo Cadastro</button>
        </a>
</section>


</main>