<form action="/create" method="post">
  <input type="hidden" name="_token" value = "<?php echo csrf_token(); ?>">
  <input class="input" id="input-search" type="text" name="texto" placeholder="Procurar por título da notícia" required />
  <button type="submit"><i class="search icon"></i></button>
</form>
