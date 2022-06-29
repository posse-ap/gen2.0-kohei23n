$(function() {
  $(".sortable").sortable();
  $(".sortable").disableSelection();
  $("#submit").click(function() {
    var listIds = $(".sortable").sortable("toArray");
    console.log(listIds);
    $("#list-ids").val(listIds);
    $("form").submit();
  });
});