<iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf4xtNth2YK76d2olppN2LBucwvwX-M_oZqpQa5TCO3ETJdLg/viewform?embedded=true" width="640" height="300" frameborder="0" marginheight="0" marginwidth="0" style="position: fixed; transform: translate(-50%, 50%); left: 50%; top: 23%;">Loading...</iframe>

<!--
<style type="text/css">
	

	input{
		padding:10px 24px;
		width:500px;
		color:black;
		border-radius:3px;
		border: 0;
		margin-bottom: 15px;
		text-shadow:0px 1px rgba(0,0,0,.2);
		box-shadow: inset 0px -2px 0px 0px rgba(255,255,255,.1), inset 0px -1px 18px 0px rgba(255,255,255,.1), 0px -1px 28px 0px rgba(0,0,0,.4);
	}
	select, option{
		padding:10px 24px;
		width:550px;
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

<form action="#" scroll="true">
	<input type="text" placeholder="Name" name="name" required></p>
	<input type="number" placeholder="Age" name="Age" required></p>
	<input type="text" placeholder="What can you bring to Fresh?" name="whatcanbring" required></p>
	<input type="text" placeholder="Questions?" name="questions" ></p>
	<select name="region" required>
		<option>EU</option>
		<option>NA</option>
		<option>OC</option>
	</select><br>
	<select name="exp" required>
		<option>Are you experienced?</option>
		<option>YES</option>
		<option>NO</option>
	
	</select><br>
	<button onclick='changeText();' type="submit" class="sendApp" id="Requestsent">Send in your Application [You will be redirected]</button>
</form>


<script>
	$('form').submit(function(e){
		e.preventDefault()
		var formData = {
			'name'         : $('input[name=name]').val(),
			'Age'         : $('input[name=Age]').val(),
			'whatcanbring'      : $('input[name=whatcanbring]').val()
			'questions'         : $('input[name=questions]').val(),
			'region'         : $('input[name=region]').val(),
			'exp'      : $('input[name=exp]').val()
		};
		var name = $('input[name=name]').val()
		var Age = $('input[name=Age]').val()
		var whatcanbring = $('input[name=whatcanbring]').val()
		var questions = $('input[name=questions]').val()
		var region = $('input[name=region]').val()
		var exp = $('input[name=exp]').val()
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
	})
   
</script>
-->

Applications are loading.

<div class="credits">
		<center>
			<a href="https://twitter.com/freshradiopw" target="_blank"><b>CREATED WITH <i class="fa fa-heart"></i> BY SHARK LABS</b></a>
		</center>
	</div>
    <div id="as"></div>
    <style type="text/css">
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