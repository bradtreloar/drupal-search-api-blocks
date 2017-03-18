<button type="button" class="search-open search-toggle">
  <i class="fa fa-search"></i>
</button>
<form 
  action="/search"
  id="search-bar-form"
  method="get"
  role="search">
  <button type="button" class="search-close search-toggle">
    <i class="fa fa-close"></i>
  </button>
  <input type="text" class="search-bar-textfield" id="search-bar-textfield" name="query"
    title="Search" placeholder="Search"
    value="" size="15" maxlength="128">
  <button type="submit" class="search-go">
    <i class="fa fa-search"></i>
  </button>
</form>
<script>
(function($) {
  $(document).ready(function(){
    $('button.search-toggle').click(function(event){
      $('#search-bar-form').toggleClass('active');
      $('button.search-open').toggleClass('active');
    });
  });
})(jQuery);
</script>
