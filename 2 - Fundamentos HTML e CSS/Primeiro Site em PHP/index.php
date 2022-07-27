<html>
<head>
<title>Primeiro Site em PHP</title>
	
	<style type="text/css">
		
		h1{
			text-align: center;
			background-color: 1363DF;
			color: white;
			font-family: Arial, Helvetica, sans-serif;
			padding: 10px;
			margin: 0px;
		}
		
		h2{
			text-align: center;
			font-family: Arial, Helvetica, sans-serif;
			background-color: 06283D;
			padding: 10px;
			color: white;
			margin: 0px;

		}
		body{
			margin: 0px;
			background-color: DFF6FF
		}
		
	
	</style>
	
</head>
<body>
	
	<h1>Aula prática</h1>
	<h2>Exemplo de site em PHP | BootCamp Unimed da Dio</h2>
	
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">PHP</a></li>
    <li><a href="#tabs-2">HTML</a></li>
    <li><a href="#tabs-3">CSS</a></li>
  </ul>
  <div id="tabs-1">
    <p>A linguagem foi criada em 1994 e o código fonte do PHP só foi liberado em 1995, como um pacote de programas CGI criados por Rasmus Lerdorf, com o nome Personal Home Page Tools, para substituir um conjunto de scripts Perl que ele usava no desenvolvimento de sua página pessoal. Em 1997 foi lançado o novo pacote da linguagem com o nome de PHP/FI, trazendo a ferramenta Forms Interpreter, um interpretador de comandos SQL. Mais tarde, Zeev Suraski desenvolveu o analisador do PHP 3 que contava com o primeiro recurso de orientação a objetos, que dava poder de alcançar alguns pacotes, tinha herança e dava aos desenvolvedores somente a possibilidade de implementar propriedades e métodos.[4][5] Pouco depois, Zeev e Andi Gutmans, escreveram o PHP 4, abandonando por completo o PHP 3, dando mais poder à máquina da linguagem e maior número de recursos de orientação a objetos. O problema sério que apresentou o PHP 4 foi a criação de cópias de objetos, pois a linguagem ainda não trabalhava com apontadores ou handlers, como são as linguagens Java, Ruby e outras. O problema fora resolvido na versão 5 do PHP, que já trabalha com handlers. Caso se copie um objeto, na verdade copiaremos um apontador, pois, caso haja alguma mudança na versão original do objeto, todas as outras também sofrem a alteração, o que não acontecia na PHP 4.[6]</p>
		<a href="https://pt.wikipedia.org/wiki/PHP">Fonte</a>
  </div>
  <div id="tabs-2">
    <p>Tim Berners-Lee (físico britânico) criou o HTML original (e outros protocolos associados como o HTTP), numa estação NeXTcube, usando o ambiente de desenvolvimento NeXTSTEP. Na época, a linguagem não era uma especificação, mas uma coleção de ferramentas para resolver um problema de Tim: a comunicação e disseminação das pesquisas entre ele e o seu grupo de colegas. A sua solução, combinada com a então emergente internet pública (que tornar-se-ia a Internet), ganhou atenção mundial.
As primeiras versões do HTML foram definidas com regras sintáticas flexíveis, o que ajudou aqueles sem familiaridade com a publicação na Web. Através do tempo, a utilização de ferramentas para autoria de HTML aumentou, assim como a tendência em tornar a sintaxe cada vez mais rígida. Apesar disso, por questões históricas (retrocompatibilidade), os navegadores ainda hoje conseguem interpretar páginas web que estão longe de ser um código HTML válido.</p>
  <a href="https://pt.wikipedia.org/wiki/HTML">Fonte</a>
  </div>
  <div id="tabs-3">
  <p> <a href="https://pt.wikipedia.org/wiki/Cascading_Style_Sheets">Um pouco sobre CSS</a></p>
  </div>
</div>

</form>
	
</body>
</html>