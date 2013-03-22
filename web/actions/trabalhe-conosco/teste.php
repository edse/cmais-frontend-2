<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Ajax Loading XML</title>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script type="text/javascript">

   $(function() {
     $.ajax({
     type: "GET",
     url: "sites.xml",
     dataType: "xml",

     success: function(xml) {

       $(xml).find('site').each(function() {

                    var nome = $(this).find('nome').text();

                    var data = $(this).find('data').text();

                    //$('<p></p>').html(nome+'<br />'+url).appendTo('#wrap');

                    $("#nome").val(nome);

                    $("#data").val(data);

                     });

                   }

     });

   });

 </script>

</head>

<body>

 <div id="wrap"></div>

 <form action="" method="GET">

   CPF: <input type="text" id="nome" value="nome"/><br><br>

   Data de Nascimento: <input type="text" id="data" value="d"/><br><br>

 </form>

</body>

</html>