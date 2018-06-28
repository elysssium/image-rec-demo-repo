<!DOCTYPE html>
<html>
<head>
	 <?php
 header("Access-Control-Allow-Origin: *");
 ?>
	<script src="https://cdn.rawgit.com/naptha/tesseract.js/0.2.0/dist/tesseract.js">

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<title></title>
</head>
<body>
	<input type="submit" name="" id="go_button">
	<div>
		<div id="ocr_results"> </div>
		<div id="ocr_status"> </div>
		<hr>
	</div>

</body>
<script type="text/javascript">

	function runOCR(url) {
    Tesseract.recognize(url)
         .then(function(result) {
            var row = "<div>"+result.text+"</div><hr>";
                            $('#ocr_results').append(row);
         }).progress(function(result) {
            document.getElementById("ocr_status")
                    .innerText = result["status"] + " (" +
                        (result["progress"] * 100) + "%)";
        });

}
<?php  $km=0; ?>
document.getElementById("go_button").addEventListener("click", function(e) {
	
			var count="<?php echo $count; ?>";
			for(var i=0;i<count;i++)
			{
				
			  	
			  	alert('jc');
			  	alert(st[i]);
			  	alert(<?php echo $km; ?>);
				var url = 'http://localhost:8081/Billing/assets/'+st[i];
				alert(i);
				alert(<?php echo $km; ?>);
				alert(url);
            	runOCR(url);
            	<?php $km=$km+1; ?>
            		alert("J");
            	alert(<?php echo $km; ?>);
			}
            
        });
</script>
</html>