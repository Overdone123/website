<script type="text/javascript">
	if(paused == false){
		$(".togglr").removeClass('fa-play').addClass('fa-pause')
	}
	function toggleRadio() {
            if(paused == true)
            {
                audio.play();
                $('.togglr').removeClass('fa-play').addClass('fa-pause');
                paused = false;
                console.log("play")
            }
            else {
                audio.pause();
                console.log("paused")
                paused = true;
                $('.togglr').addClass('fa-play').removeClass('fa-pause');
            }
        }
        $('.togglr').click(function() {
            toggleRadio();
        })
</script>
<style type="text/css">
	.dj-avatar-top{
		border-radius:100%;
		width:150px;
		
		z-index:0;
		height:150px;
	}
	.dj-avatar{
		box-shadow: inset 0px -1px 0px 0px rgba(255,255,255,.1), inset 0px -1px 18px 0px rgba(255,255,255,.1), 0px -1px 28px 0px rgba(0,0,0,.4);
	border:2px solid rgba(255,255,255,.13);
		width: 150px;
		height: 150px;
		border-radius: 100%;
		z-index:999;
	}
	.xs1{
		border-radius:7px;background:rgba(255,255,255,.08);box-shadow: inset 0px -1px 0px 0px rgba(255,255,255,.1), inset 0px -1px 18px 0px rgba(255,255,255,.1), 0px -1px 28px 0px rgba(0,0,0,.4);width:250px;margin-top:-100px;height:50px;float:right;
		margin-right:10px;
	}
	.xs2{
		width:720px;margin-top:-10px;
	}
	.xs3{
		float: left;margin-left:-323px;
	}
.partners {
 position: fixed;
	width:20%;
	word-spacing:100px;
	font-size:16px;
	mix-blend-mode: overlay;
	top: 96%;
        left: 25%;
	text-decoration: none;
}

</style>

<div class="wrapper-m xs2">
	<div class="wrapper xs3" style="margin-left:-310px;">
		<div class="dj-avatar">
			<img src="" class="dj-avatar-top">
			<div class="dj-avatar-bottom">

			</div>
		</div>
		<div class="stats" style="text-shadow:0px 1px rgba(0,0,0,.4);border-radius:10px;width:400px;height:100px;margin-left:390px;text-align:left;margin-top:-117px;">
			<div style="margin-top:7px;margin-left:140px;width:200px;">
				<h1 style="margin-left:-35px;text-transform: " class="dj">DJ NAME</h1></p>
				<h1 style="margin-left:-35px;font-size:14px;opacity: .7;" class="song">Song title - Song</h1>
			</div>
		</div>
	</div>
	<style type="text/css">
		.togglr:hover{
			cursor: pointer;
			font-size:20px;
			margin-top:1px;
			opacity: .7;
			transition: .25s;
		}
		.volup:hover{
			cursor: pointer;
			font-size:20px;
			margin-top:1px;
			opacity: .7;
			transition: .25s;
		}
		.voldown:hover{
			cursor: pointer;
			font-size:20px;
			margin-top:1px;
			opacity: .7;
			transition: .25s;
		}
	</style>
	<div class="right xs1">
		<div class="wrapper-r" style="text-align: left;margin-top:15px;margin-left:10px;">
			<i class="fa fa-user" style="display: inline-block;"></i>
			<div class="listeners" style="display: inline-block;">
				0
			</div>
			<div class="play" style="display: inline-block;margin-left:40px; word-spacing: 25px; ">
				<i class="fa fa-play togglr"></i>
				 <i class="fa fa-volume-down voldown" onclick="document.getElementById('player').volume -= 0.1"></i>
        		<i class="fa fa-volume-up volup" onclick="document.getElementById('player').volume += 0.1"></i>
   				

			</div>	
		</div>
	</div>
</div>
<style>
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
			<a href="https://twitter.com/sharklaboratory" target="_blank"><b>CREATED WITH <i class="fa fa-heart"></i> BY SHARK LABS</b></a>
		</center>
	</div>
    <div id="as"></div>
 <script type="text/javascript">stats()</script>