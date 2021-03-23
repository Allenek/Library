  {include file="./modal.html.tpl"}
  <footer class="position-fixed bg-dark text-light w-100" style="bottom: 0;">
    @ Krystian Mikuła 26554
  </footer>
  {foreach $jsFile as $js}
    <script src="{$js}" charset="utf-8"></script>
  {/foreach}
  </body>
</html>
