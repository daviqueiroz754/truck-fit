<!DOCTYPE html>
<html>
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	<script type="text/javascript">
		


var button = document.querySelector('#teste');
var mostrador = document.querySelector('#mostrador');

button.addEventListener('click', function() {
    new Timer(1, mostrador, function() {
        alert('O tempo acabou!');
    }).start();
});

function Timer(mins, target, cb) {
    this.counter = mins * 60;
    this.target = target;
    this.callback = cb;
}
Timer.prototype.pad = function(s) {
    return (s < 10) ? '0' + s : s;
}
Timer.prototype.start = function(s) {
    this.count();
}
Timer.prototype.stop = function(s) {
    this.count();
}
Timer.prototype.done = function(s) {
    if (this.callback) this.callback();
}
Timer.prototype.display = function(s) {
    this.target.innerHTML = this.pad(s);
}
Timer.prototype.count = function(s) {
    var self = this;
    self.display.call(self, self.counter);
    self.counter--;
    var clock = setInterval(function() {
        self.display(self.counter);
        self.counter--;
        if (self.counter < 0) {
            clearInterval(clock);
            self.done.call(self);
        }
    }, 1000);
}

	</script>

<?php include('styles.php');?>


	<title>Home</title>
</head>
<body class="subscribe-background">



<div class="container">
	
	<header class="sticky header-properties">
	<?php include('header.php');?>
</header>

<div class="row">
	
	<div class="col-sm-4 col-md-12 col-lg-12">

			<center>

		<div >

			<div class="card">
  <img src="https://placehold.it/800x600" class="section media"/>
</div>

<center>
<div>


<h2 id="mostrador"></h2>
	</div>

</center>

	</div>

			</center>


</div>

</div>













<div class="row margin-login-options">

	<div class="col-sm-12">


		<center>
			<div >

		 <a href="congratulations.php"><img src="images/play.png"/></a>
		</div>
		  </center>

	</div>

	

</div>





<head>

<style type="text/css">
	

</style>

</head>


<footer class="sticky">
<?php include('footer.php')?>
</footer>


</div>


</body>
</html>