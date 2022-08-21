<!DOCTYPE html>
<html lang="pt-br">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://kit.fontawesome.com/1749cec92e.js" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style.css">
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
   <script type="text/javascript">
      let abaAtual = "#aba_1"

      $(function(){
         $("div.aba:not("+abaAtual+")").hide()

         $("a[href^=#aba_]").click(function(){
            $(abaAtual).hide()
            abaAtual = $(this).attr("href")
            $(abaAtual).show()

            return false
         })
      })
   </script>
   <title>Loja virtual</title>
</head>
<body>
   <div id="principal">
      <section id="cabecalho">
         <?php include_once("session/cabecalho.php"); ?>
      </section><!-- Fim cabecalho -->
         
      <section id="corpo">
         <?php include_once("session/home.php"); ?>
         
      </section><!-- Fim corpo -->

      <footer id="footer fundo-azul">
         <?php include_once("session/footer.php"); ?> 
      </footer><!-- Fim rodape -->

   </div><!-- Fim da principal -->
   
   
</body>
</html>