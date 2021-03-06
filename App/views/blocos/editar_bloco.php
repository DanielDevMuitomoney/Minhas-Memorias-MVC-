<div class="conteiner">
<div  id="alert"></div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="http://localhost:8080/js/notes/jquery.cleditor.js"></script>
<div class="espaco"></div>
<div class="container-sm">
   <div class="title_editar_bloco ">
       <h1 >Título</h1>
       <input value="<?php if(isset($data2['nm_titulo'])) echo $data2['nm_titulo']; ?>" type="text" id="title">
    </div>
       
    <div class="texto_bloco">
        <h2>Texto</h2>        
        <textarea  id="editor_area" title="editor_area"><?php if(isset($data2['txt_note'])){echo $data2['txt_note'];} ?></textarea>
        <script>
    
$(document).ready(function() {
         $("#editor_area").cleditor({
           width: 750, // width not including margins, borders or padding
           height: 250, // height not including margins, borders or padding
           controls: // controls to add to the toolbar
                 "bold italic underline strikethrough subscript superscript | font size " +
                 "style | color highlight removeformat | bullets numbering | outdent " +
                 "indent | alignleft center alignright justify | undo redo | ",
           colors: // colors in the color popup
                 "FFF FCC FC9 FF9 FFC 9F9 9FF CFF CCF FCF " +
                 "CCC F66 F96 FF6 FF3 6F9 3FF 6FF 99F F9F " +
                 "BBB F00 F90 FC6 FF0 3F3 6CC 3CF 66C C6C " +
                 "999 C00 F60 FC3 FC0 3C0 0CC 36F 63F C3C " +
                 "666 900 C60 C93 990 090 399 33F 60C 939 " +
                 "333 600 930 963 660 060 366 009 339 636 " +
                 "000 300 630 633 330 030 033 006 309 303",
           fonts: // font names in the font popup
                 "Arial,Arial Black,Comic Sans MS,Courier New,Narrow,Garamond," +
                 "Georgia,Impact,Sans Serif,Serif,Tahoma,Trebuchet MS,Verdana",
             sizes: // sizes in the font size popup
                 "1,2,3,4,5,6,7",
             styles: // styles in the style popup
                 [["Paragraph", "<p>"], ["Header 1", "<h1>"], ["Header 2", "<h2>"],
                 ["Header 3", "<h3>"],  ["Header 4","<h4>"],  ["Header 5","<h5>"],
                 ["Header 6","<h6>"]],
             useCSS: false, // use CSS to style HTML when possible (not supported in ie)
             docType: // Document type contained within the editor
                 '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">',
             docCSSFile: // CSS file used to style the document contained within the editor
                 "",
             bodyStyle: // style to assign to document body contained within the editor
  
                 "margin:4px; font:10pt Arial,Verdana; cursor:text;background-image: url('http://localhost:8080/img/notes/mm3.png');background-position:center;background-attachment: fixed;",

         })
         });
        </script>
        </div>
    </div>
<div class="button">
    <button class="bnt" id="<?php 
               if(!isset($data2['nm_titulo']))
                  echo 'create_note';
                   else{ 
                       echo "update_note";
                       } ?>"> 
                       <?php
                        if(!isset($data2['nm_titulo']))
                         echo 'Criar Bloco';
                         else{
                             echo'Salvar mudanças';
                             }
                 ?>
    </button>
    <?php 
      if(isset($data2['nm_titulo']))
       echo ' <button class="bnt" id="delete_note">Deletar</button>';  
       else{
           echo ' <a href="/bloco"><button class="bnt" id="delete_note">Cancelar</button>';
        } 
    ?>
    </div>
</div>

      <script src="<?php echo URL_BASE ?>/js/notes/crud_note.js"></script>