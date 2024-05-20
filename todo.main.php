<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="./src/nav.js" defer></script>
    <script src="./src/todo.js" defer></script>
    <script src="./src/popup.js" type="module" defer></script>
    <link rel="stylesheet" href="./assets/css/style.popup.css" />
    <link href="./assets/css/style.nav.css" rel="stylesheet"/>
    <link href="./assets/css/style.container.css" rel="stylesheet"/>
    <link href="./assets/css/style.main.css" rel="stylesheet"/>
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <?php include "./components/nav.php"; ?>
  <body>
    <main id="root">

    </main>
  <?php include "./components/popup.php";?>
  </body>
</html>