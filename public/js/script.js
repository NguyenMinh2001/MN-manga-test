new mdb.Autocomplete(navbarAutocomplete, {
  filter: navbarDataFilter,
});
function search_input(){
  document.getElementById("search-list").style.display='block';
};
function search_click(){
  document.getElementById("txtHint").style.display='none';
};
function showHint(str) {
if (str.length == 0) {
  document.getElementById("txtHint").innerHTML = "";
  return;
} else {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  }
  xmlhttp.open("GET", "../xuly/search.php?q="+str, true);
  xmlhttp.send();
}
}
// $(document).ready(function(){
//   $("#login").click(function(){
//     $.get("login.php", function(data, status){
//       alert("Data: " + data + "\nStatus: " + status);
//     });
//   });
// });
