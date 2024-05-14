<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="./src/nav.js" defer></script>
    <script src="./src/todo.js" defer></script>
    <script src="./src/popup.js" type="module" defer></script>
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
    <div class="app" id="app">
<form class="form" v-on:submit="addTodo">
<input class="input form__input" v-model="inputVal"/>
<button class="btn form__submit-btn" type="submit">Add</button>
</form>
<transition-group tag="ol" name="list" class="todo-list">
<li
  class="todo-list__item"
  v-bind:class="{ complete: todo.complete }"
  v-bind:key="index"
  v-for="(todo, index) in filteredTodos">
  <button
    class="todo-list__item-content"
    v-on:click="toggleTodo(todo)">
    {{ todo.text }}
  </button>
  <button
    class="btn todo-list__item-remove"
    v-on:click="deleteTodo(index)">
    <i class="fa" v-bind:class="[todo.complete ? 'fa-check' : 'fa-times']"></i>
  </button>
</li>
</transition-group>
<div class="filters">
<button 
  class="btn filters__btn filters__btn--all" 
  v-on:click="filterTodos('all')">
  All
</button>
<button 
  class="btn filters__btn filters__btn--complete" 
  v-on:click="filterTodos('complete')">
  Complete
</button>
<button 
  class="btn filters__btn filters__btn--incomplete" 
  v-on:click="filterTodos('incomplete')">
  Incomplete
</button>
</div>
</div>
    </main>
  <?php include "./components/popup.php";?>
  </body>
</html>