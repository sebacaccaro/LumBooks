<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
	<title>Cerca Libri</title>
	<link rel="icon" href=""/> <!-- link icona -->
	<meta name="title" content="Cerca Libri" />
	<meta name="description" content="Pagina per cercare libri" /> <!-- da fare -->
	<meta name="keywords" content="libro, unipd" /> <!-- da fare -->
	<meta name="language" content="italian it" />
	<meta name="author" content="" /> <!-- da fare -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/cercalibro.css" /> <!-- da fare -->
  <link rel="stylesheet" type="text/css"  href="../css/" media="screen and (max-width:768px)" /> <!-- schermi piccoli --> <!-- da fare -->
  <link rel="stylesheet" type="text/css" href="../css/" media="print" /> <!-- da fare -->
</head>
<body>
  <?php
    include '../HTML/header.html';
    include '../php/navbar.php';
    include '../HTML/footer.html';
	?>
<div class="outerBox">
	<form id="searchForm" class="innerBox">
    <div class="form-group">
      <label for="form-group">Parola chiave</label>
      <br/>
      <input type="text" id="keywordInput" class="formText" />
    </div>
    <div class="form-group">
      <label for="form-group">Titolo</label>
      <br/>
      <input type="text" id="titleInput" class="formText" />
    </div>
    <div class="form-group">
      <label for="form-group">Autore</label>
      <br/>
      <input type="text" id="authorInput" class="formText" />
    </div>
    <div class="form-group">
      <label for="form-group">ISBN</label>
      <br/>
      <input type="text" id="isbnInput" class="formText" />
    </div>
    <div class="form-group">
      <label for="form-group">Corso</label>
      <br/>
      <select name="courses" class="formText" > <!-- da completare -->
        <option value="analisi">Analisi</option>
        <option value="logica">Logica</option>
        <option value="architettura">Architettura</option>
        <option value="programmazione1">Programmazione 1</option>
        <option value="programmazione2">Programmazione 2</option>
        <option value="programmazione2">Programmazione 3</option>
      </select>
    </div>
    <div class="form-group"><input type="submit" value="Cerca" id="submitSrc"/></div>
  </form>
</div>
</body>
</html>