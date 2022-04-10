$(document).ready(function()
  {
    $(document).on("click","#btn", function()
      {
        // pega valores
        var name= document.querySelector('input#name').value;
        var email= document.querySelector('input#email').value;
        var dt= document.querySelector('input#dt_nasc').value;
        var s1=document.querySelector('input#senha1').value;
        var s2=document.querySelector('input#senha2').value;
        var cd_parent= document.querySelector('#parent').value;
        // ifs de verification
        if(name==''){$('#alert').html('Preencha seu nome');$('#alert').addClass("alert_failed"); return false} 
        
        if(email==''){$('#alert').html('Preencha seu email');$('#alert').addClass("alert_failed"); return false}
        
        if(dt==''){$('#alert').html('preencha sua data de nascimento');$('#alert').addClass("alert_failed");return false }
        
        if(s1==''){$('#alert').html('Preencha a sua senha');$('#alert').addClass("alert_failed");return false} 
        
        if(s2==''){$('#alert').html('Confirme a sua senha');$('#alert').addClass("alert_failed"); return false}
        if(s1.length<8){$('#alert').html('A senha precisa ter no mínimo 8 dígitos');$('#alert').addClass("alert_failed");
        return false}
        if(s1!=s2){$('#alert').html('As senha não são iguais');$('#alert').addClass("alert_failed");
       return false}

        $.ajax({
           data:{name,email,dt,cd_parent,s1},
           method:"POST",
           url:"/familia/cadastrar",
        
            
            success: function(retorno)
            {
              $('#alert').addClass("alert_failed")
              $('#alert').html(retorno);
              if(retorno=="o familiar foi registrado com sucesso")
              {
                $('#alert').removeClass("alert_failed")
                $('#alert').addClass("alert_success");
                
              }
            }
            
        
                    
                
        });
      
      });
    });