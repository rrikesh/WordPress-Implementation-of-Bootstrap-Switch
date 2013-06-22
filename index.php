<!doctype html>
<html>
<head>
	<title>WordPress Bootstrap Switch</title>
	<?php wp_head(); ?>
</head>
<body>
	<div class="container">
		<div class="switch switch-large">
    		<input type="checkbox" checked />
    	</div>
     	
     	<br />
    	
    	<div class="switch">
    		<input type="checkbox" checked />
    	</div>
     	
     	<br />
    	
    	<div class="switch switch-small">
    		<input type="checkbox" checked />
    	</div>
     
     	<br />

    	<div class="switch switch-mini">
    		<input type="checkbox" checked />
    	</div>

    	<hr />
    	
    	<div class="switch" data-on="primary" data-off="info">
    		<input type="checkbox" checked />
    	</div>
     
     	<br />

    	<div class="switch" data-on="info" data-off="success">
    		<input type="checkbox" checked />
	    </div>

	    <br />
     
	    <div class="switch" data-on="success" data-off="warning">
    		<input type="checkbox" checked />
    	</div>
     
     	<br />

    	<div class="switch" data-on="warning" data-off="danger">
    		<input type="checkbox" checked />
    	</div>

    	<br />
     
    	<div class="switch" data-on="danger" data-off="primary">
    		<input type="checkbox" checked />
    	</div>
	</div>
	
	<hr />
	<div class="container">
		<p>Powered by <a href="http://github.com/twitter/bootstrap">Twitter Bootstrap</a> and <a href="https://github.com/nostalgiaz/bootstrap-switch">Bootstrap Switch</a></p>
	</div>
	<?php wp_footer(); ?>
</body>
</html>