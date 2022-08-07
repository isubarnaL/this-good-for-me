 <script src="js/scripts.js"></script>	

  <script>
function loadDocfood() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("info-text1").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info.php", true);
  xhttp.send();
}

function loadDocMed() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("info-text1").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ajax_info2.php", true);
  xhttp.send();
}
</script>	
<script>
  $(document).ready(function () {
$("#food1").select2( {
	allowClear: true
	} );	
$("#food2").select2( {
	allowClear: true
	} );
	 });
</script>
<!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->

				  