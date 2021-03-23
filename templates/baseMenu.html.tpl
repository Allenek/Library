<nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Aplikacja</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExample01">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}ksiazka">Książka</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}egzemplarz">Egzemplarz</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}autor">Autor</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}kategoria">Kategoria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}wydawnictwo">Wydawnictwo</a>
        </li>
      {if $currentUser != false}
        <li class="nav-item">
          <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}wyloguj">Wyloguj {$name}</a>
        </li>
      {else}
        <li class="nav-item">
          <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-logowania">Zaloguj się</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{$protocol}{$smarty.server.HTTP_HOST}{$subdir}formularz-rejestracji">Zarejestruj się</a>
        </li>
      {/if}
    </ul>
  </div>
</nav>
