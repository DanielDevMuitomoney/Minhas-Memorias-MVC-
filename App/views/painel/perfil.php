

    <div  class="container conteiner caixa" >
        
    <div class="input-group mb-3">
        <img class="image" src="https://cdn-icons-png.flaticon.com/512/1376/1376625.png" class="img-fluid" alt="...">

        
   <!-- porque o texto só vai se eu colocar um name????????????-->
        <textarea  disabled name="resume"  class="form-control text-area"> <?php echo $data2['ds_resumo']?> </textarea>
      </div>

      <input  class="form-control" type="text" value="Nome: <?php echo $data2['nm_paciente'] ?>" aria-label="Disabled input example" disabled readonly>

      <input  class="form-control" type="text" value="Email: <?php echo $data2['nm_email'] ?>" aria-label="Disabled input example" disabled readonly>

      <input  class="form-control" type="text" value="Familiar: <?php echo $_SESSION['nome_familiar'] ?>" aria-label="Disabled input example" disabled readonly>

      <input  class="form-control" type="text" value="Record: 31 (Jogo da Memória)" aria-label="Disabled input example" disabled readonly>

      <input  class="form-control" type="text" value="Genêro: <?php echo $data2['nm_genero'] ?>" aria-label="Disabled input example" disabled readonly>
      
      <a href="/painel/editar"><button  type="button" class="btn "><i class="bi bi-gear"></i> Editar </button></a>
      
   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

