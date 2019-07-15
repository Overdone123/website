<style type="text/css">
	input{
		padding:10px 24px;
		width:500px;
		color:black;
		border-radius:3px;
		border: 0;
		margin-bottom:15px;
		text-shadow:0px 1px rgba(0,0,0,.2);
		box-shadow: inset 0px -2px 0px 0px rgba(255,255,255,.1), inset 0px -1px 18px 0px rgba(255,255,255,.1), 0px -1px 28px 0px rgba(0,0,0,.4);
	}
	button{
		background: #2ecc71;
		padding:10px 24px;
		border-radius:3px;
		width:547px;
		border: 0;
		text-shadow:0px 1px rgba(0,0,0,.2);
		box-shadow: inset 0px -2px 0px 0px rgba(255,255,255,.1), inset 0px -1px 18px 0px rgba(255,255,255,.1), 0px -1px 28px 0px rgba(0,0,0,.4);
	}
</style>

<form action="#">
	<input type="text" placeholder="Name" name="name" required></p>
	<input type="text" placeholder="Request" name="request" required></p>
	<button onclick='changeText();' type="submit" class="sendRequest" id="Requestsent">Send your request</button>
</form>



<style>
.Message {
position: fixed;
transform: translate(-50%, 50%);
left: 50%;
top: 40%;
}
.credits{
	position: fixed;
	width:100%;
	letter-spacing: 2px;
	font-size:11px;
	mix-blend-mode: overlay;
	bottom: 26px;
	text-decoration: none;
}

.credits:hover{
	cursor: pointer;
	font-size:14px;
	transition: .4s;
	bottom:24px;
}
</style>
<div class="credits">
		<center>
			<a href="https://twitter.com/freshradiopw" target="_blank"><b>CREATED WITH <i class="fa fa-heart"></i> BY SHARK LABS</b></a>
		</center>
	</div>
    <div id="as"></div>
<script>
	$('form').submit(function(e){
		e.preventDefault()
		var formData = {
			'name'         : $('input[name=name]').val(),
			'type'         : $('input[name=type]').val(),
			'request'      : $('input[name=request]').val()
		};
		var name = $('input[name=name]').val()
		var request = $('input[name=request]').val()
		$.ajax({
			type           : 'POST',
			url            : 'http://creepypastapodcast.000webhostapp.com/thing.php?name='+name+'&request='+request,
			data           : formData,
			dataType       : 'json',
			encode         : true
		})
		.done(function(data){
			console.log(data)
		})
		$(".sendRequest").attr("style","background: #00e640;")
			$(".sendRequest").html("Sent!")
	})
   


</script>



</script>