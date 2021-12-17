<main>

    <h2 class="mt-3"><?=TITLE?></h2>

    <form method="post">
    <div class="form-group">
      <label>Titulo da Transação</label><hr>
      <input type="text" name="campNome"  value="<?=$obTransacao->titulo?>">
    </div>
    <br>

    <div>
      <label>Tipo de Transação </label> <hr>
          <div  class="form-check form-check-inline">
            <label class="form-control">
              <input style="width:30px;font-weight:bold ;" type="radio" name="campCategoria" value="BOLETO" checked <?=$obTransacao->categoria == 'BOLETO' ? 'checked' : ''?>> BOLETO
            </label>
          </div>
          <div class="form-check form-check-inline">
            <label class="form-control">
              <input style="width:30px;font-weight:bold ;" type="radio" name="campCategoria" value="DOC"<?=$obTransacao->categoria == 'DOC' ? 'checked' : ''?> > DOC
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input style="width:30px;font-weight:bold ;" type="radio" name="campCategoria" value="TED" <?=$obTransacao->categoria == 'TED' ? 'checked' : ''?>> TED
            </label>
          </div>
    </div>

      
      
      <br>

    <div class="form-group">
      <label>Valor da Transação</label><hr>
      <p style="color:white;"><input style="width:12%;" type="number" name="campTransacao" pattern="^\d*(\.\d{0,2})?$"  value="<?=$obTransacao->valor?>"></p>
    </div>
    <br>

      

    <div>
      <label>Tipo de Transação </label> <hr>
          <div class="form-check form-check-inline">
            <label class="form-control">
              <input style="width:30px;font-weight:bold ;" type="radio" name="ativo" value="Entrada" checked> Entrada
            </label>
          </div>

          <div class="form-check form-check-inline">
            <label class="form-control">
              <input style="width:30px;font-weight:bold ;" type="radio" name="ativo" value="Saida" <?=$obTransacao->tipo == 'Saida' ? 'checked' : ''?>> Saida
            </label>
          </div>
    </div>

        <div class="form-group" style="margin-top: 30px;margin-left: -8px">
        <button type="submit" class="btn btn-sucess" style="background: darkblue;font-weight:bold; margin-top: 14px; margin-left: 125px;color:bisque"> Enviar</button>

        <a href="index.php" >
            <input style="background: white;font-weight:bold; padding: 2.5px; width: 90px" type="button" value="Voltar"></a>
        </div>
    </form>

</main>