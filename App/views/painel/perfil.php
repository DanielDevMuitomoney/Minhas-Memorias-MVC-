

    <div  class="container" style="border: solid rgb(173, 28, 202); border-radius: 9px;padding: 9px;background-color: #5224FA;margin-top:3%">
       
    <div class="input-group mb-3">
        <img height="180px" src="https://cdn-icons-png.flaticon.com/512/1376/1376625.png" class="img-fluid" alt="...">

        
   <!-- porque o texto só vai se eu colocar um name????????????-->
        <textarea name="resume" style="background-color: #1178DB; color: aliceblue;" class="form-control"> <?php echo $data2['ds_resumo']?> </textarea>
      </div>

      <input style="background-color:#1178DB; color: aliceblue;margin: 30px 0px 10px 0px;;" class="form-control" type="text" value="Nome: <?php echo $data2['nm_paciente'] ?>" aria-label="Disabled input example" disabled readonly>

      <input style="background-color: #1178DB; color: aliceblue;margin:10px 0px 10px 0px;" class="form-control" type="text" value="Email: <?php echo $data2['nm_email'] ?>" aria-label="Disabled input example" disabled readonly>

      <input style="background-color: #1178DB; color: aliceblue;margin: 10px 0px 10px 0px;" class="form-control" type="text" value="Familiar: Alessandra Alvarez" aria-label="Disabled input example" disabled readonly>

      <input style="background-color: #1178DB; color: aliceblue;margin: 10px 0px 10px 0px;" class="form-control" type="text" value="Record: 31 (Jogo da Memória)" aria-label="Disabled input example" disabled readonly>

      <input style="background-color: #1178DB; color: aliceblue;margin: 10px 0px 10px 0px;" class="form-control" type="text" value="Genêro: <?php echo $data2['nm_genero'] ?>" aria-label="Disabled input example" disabled readonly>
      
      <a href="/painel/editar"><button style="margin: 10px 0px 10px 0px;" type="button" class="btn btn-primary"><i class="bi bi-gear"></i> Configurações </button></a>
      
   
    </div>
<?php
var_dump($data2);

?>