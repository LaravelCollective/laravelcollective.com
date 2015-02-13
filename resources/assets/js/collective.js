$(function()
{
  // gheading links
  $('article.docs').find('a[name]').each(function () {
    var anchor = $('<a href="#' + this.name + '">');
    $(this).parent().next('h2').wrapInner(anchor);
  });
});