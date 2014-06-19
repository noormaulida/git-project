<!DOCTYPE html>
<html lang="en">
    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- <a class="navbar-brand" href="#"><i class="fa fa-bolt"></i></a> -->
        </div>
        <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
			<li><a href="#">Home</a></li>
			<li><a href="#examples">Examples</a></li>
			<li><a href="#usage">Usage</a></li>
			<li><a href="#options-callbacks">Options & Callbacks</a></li>
			<li><a href="#methods">Methods</a></li>
			<li><a href="#download-title">Download</a></li>
		</ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active">
            	<a class="git-link" href="https://github.com/risq" target="_blank">
            		<i class="fa fa-github"></i>risq
            	</a>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
	<div id="hello">
	    <div class="container">
	    	<div class="row">
	    		<div class="col-lg-10 col-lg-offset-1 centered">
	    			<h1>JQuery Advanced News Ticker</h1>
	    			<div id="nt-title-container">
	    				<ul id="nt-title">
		    				<li>
		    					A powerful, flexible and animated vertical news ticker plugin.
		    				</li>
		    				<li>
		    					Provides hight flexibility thanks to numerous callbacks & methods.
		    				</li>
		    				<li>
		    					Fully customizable to every kind of vertical scrolling need.
		    				</li>
		    				<li>
		    					Light-weight and optimized JQuery plugin.
		    				</li>
	    				</ul>
	    			</div>
					 <a href="https://github.com/risq/jquery-advanced-news-ticker/archive/master.zip" target="_blank"><span class="button">Download</span></a>
					 <a href="https://github.com/risq/jquery-advanced-news-ticker" target="_blank"><span class="button">View on GitHub</span></a>
	    		</div><!-- /col-lg-8 -->
	    	</div><!-- /row -->
	    </div> <!-- /container -->
	</div><!-- /hello -->
	
	<div class="title" id="examples">
			<div class="row">
				<div class="col-lg-12 centered">
					<h3>EXAMPLES</h3>
				</div>
			</div>
	</div>
	<div class="green">
		<div class="container">
			<div class="row">
				<div class="col-md-7 centered">
					<div id="nt-example1-container">
						<i class="fa fa-arrow-up" id="nt-example1-prev"></i>
		                <ul id="nt-example1">
		                    <li>Etiam imperdiet volutpat libero eu tristique. Aenean, rutrum felis in. <a href="#">Read more...</a></li>
		                    <li>Curabitur porttitor ante eget hendrerit adipiscing. Maecenas at magna. <a href="#">Read more...</a></li>
		                    <li>Praesent ornare nisl lorem, ut condimentum lectus gravida ut. <a href="#">Read more...</a></li>
		                    <li>Nunc ultrices tortor eu massa placerat posuere. Vivamus viverra sagittis. <a href="#">Read more...</a></li>
		                    <li>Morbi sodales tellus sit amet leo congue bibendum. Ut non mauris eu neque. <a href="#">Read more...</a></li>
		                    <li>In pharetra suscipit orci sed viverra. Praesent at sollicitudin tortor, id. <a href="#">Read more...</a> </li>
		                    <li>Maecenas nec ligula sed est suscipit aliquet sed eget ipsum, suspendisse. <a href="#">Read more...</a></li>
		                    <li>Onec bibendum consectetur diam, nec euismod urna venenatis eget.. <a href="#">Read more...</a> </li>
		                </ul>
		                <i class="fa fa-arrow-down" id="nt-example1-next"></i>
		            </div>
				</div>
				
				<div class="col-md-5 centered">
				<br/><br/>
					<h3>MULTILINES SIMPLE EXAMPLE</h3>
					<pre><code class="language-javascript example-code">var nt_example1 = $('#nt-example1').newsTicker({
    row_height: 80,
    max_rows: 3,
    duration: 4000,
    prevButton: $('#nt-example1-prev'),
    nextButton: $('#nt-example1-next')
});</code></pre>
				</div>
			</div>
		</div>
	</div>
	
	<div class="white">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-push-6 centered">
					<div id="nt-example2-container">
		                <ul id="nt-example2">
		                    <li data-infos="Cras sagittis nulla sit amet feugiat pulvinar. Fusce scelerisque aliquet purus, sit amet rutrum augue euismod ut. Aliquam erat volutpat. Integer convallis, ligula non bibendum dictum, ante lectus fringilla nunc, at euismod neque enim sit amet ante. In risus velit, porttitor blandit magna vel, adipiscing semper libero. ">
		                    	<i class="fa fa-fw fa-play state"></i>
		                    	<span class="hour">08:12</span> Etiam imperdiet volutpat libero eu tristique.
		                    </li>
		                    <li data-infos="Quisque imperdiet, tellus et tempus mattis, risus ipsum molestie leo, in tincidunt nisl nunc at magna. Suspendisse pretium ullamcorper feugiat. Nunc quis egestas odio, eu vestibulum nisl. In hac habitasse platea dictumst. Aliquam vel dapibus lacus. Curabitur pharetra quam purus. Suspendisse sed nulla condimentum nibh blandit consectetur non eget velit.">
		                    	<i class="fa fa-fw fa-play state"></i>
		                    	<span class="hour">08:41</span> Curabitur porttitor ante eget hendrerit adipi.
		                    </li>
		                    <li data-infos="Vestibulum ac interdum quam, tempus aliquet purus. Nunc luctus augue ut pellentesque faucibus. Proin urna nunc, feugiat ac bibendum non, cursus id orci. Integer porttitor diam et odio pharetra, sed congue augue dapibus. Fusce ac tristique tortor. Aliquam adipiscing ligula in dui pretium ultrices.">
		                    	<i class="fa fa-fw fa-play state"></i>
		                    	<span class="hour">10:02</span> Praesent ornare nisl lorem, ut condi.
		                    </li>
		                    <li data-infos="Proin vulputate mi pharetra tellus semper dapibus. Vestibulum non metus convallis, lobortis velit eu, facilisis mauris. Mauris mattis ante sit amet nulla egestas, ut consectetur tortor tristique. In porttitor non eros nec scelerisque. Sed eu condimentum tellus, et feugiat urna. Duis semper ligula a risus suscipit, ut vestibulum mi tempor.">
		                    	<i class="fa fa-fw fa-play state"></i>
		                    	<span class="hour">10:14</span> Nunc ultrices tortor eu massa placerat posuere.
		                    </li>
		                    <li data-infos="Sed facilisis, erat at accumsan tincidunt, metus diam convallis tortor, at facilisis tortor libero sed ante. Sed ut felis sed felis scelerisque bibendum. Ut quis aliquet magna. Phasellus elementum volutpat mattis. Proin in rutrum ante, at imperdiet dolor. Vivamus congue turpis facilisis congue ullamcorper. Etiam sollicitudin quis dolor hendrerit ultricies.">
		                    	<i class="fa fa-fw fa-play state"></i>
		                    	<span class="hour">11:23</span> Morbi sodales tellus sit amet leo congue bibendum.
		                    </li>
		                    <li data-infos="Raesent aliquam sapien quis pretium vestibulum. Vestibulum varius velit leo, quis facilisis enim mattis id. Proin et tempor ligula, id dapibus neque. Aliquam egestas adipiscing tellus. Morbi enim leo, fringilla eget vulputate tincidunt, fringilla et sapien. Curabitur ultricies auctor lectus, quis ultricies sem tincidunt sit amet. Mauris non tempor ipsum. Sed sed ipsum nulla. Quisque laoreet velit dolor, nec placerat odio ullamcorper eget.">
		                    	<i class="fa fa-fw fa-play state"></i>
		                    	<span class="hour">11:45</span> In pharetra suscipit orci sed viverra. Praesent at.
		                    </li>
		                    <li data-infos="Praesent ut eleifend lorem. Duis ut velit quis mauris molestie aliquam vitae id diam. Etiam eget mauris condimentum, lacinia lectus et, aliquet ligula. Nulla rutrum tincidunt tincidunt. Maecenas eu dolor vestibulum, pellentesque erat non, molestie nibh. Morbi ac semper quam. Aliquam erat volutpat.">
		                    	<i class="fa fa-fw fa-play state"></i>
		                    	<span class="hour">11:55</span> Maecenas nec ligula sed est suscipit aliquet sed.
		                    </li>
		                    <li data-infos="Duis euismod, mi nec posuere malesuada, nisl leo bibendum ligula, sit amet vestibulum est neque non sapien. Curabitur mi massa, bibendum cursus scelerisque imperdiet, semper eu lacus. Etiam mauris eros, faucibus eu pretium vitae, rutrum vel urna. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin laoreet pellentesque felis, sed vulputate justo rhoncus et. ">
		                    	<i class="fa fa-fw fa-play state"></i>
		                    	<span class="hour">12:00</span> Onec bibendum consectetur diam, nec eui.
		                    </li>
		                </ul>
		                <div id="nt-example2-infos-container">
			                <div id="nt-example2-infos-triangle"></div>
			                <div id="nt-example2-infos" class="row">
			                	<div class="col-xs-4 centered">
				                	<div class="infos-hour">
				                		08:12
				                	</div>
				                	<i class="fa fa-arrow-left" id="nt-example2-prev"></i>
				                	<i class="fa fa-arrow-right" id="nt-example2-next"></i>
			                	</div>
			                	<div class="col-xs-8">
			                		<div class="infos-text">Cras sagittis nulla sit amet feugiat pulvinar. Fusce scelerisque aliquet purus, sit amet rutrum augue euismod ut. Aliquam erat volutpat. Integer convallis, ligula non bibendum dictum, ante lectus fringilla nunc, at euismod neque enim sit amet ante. In risus velit, porttitor blandit magna vel, adipiscing semper libero.</div>
			                	</div>
			                </div>
		                </div>
		            </div>
				</div>
				
				<div class="col-md-6 col-md-pull-6 centered">
					<h3>ONE LINE TICKER WITH CALLBACKS & METHODS EXAMPLE</h3>
<pre><code class="language-javascript example-code">var nt_example2 = $('#nt-example2').newsTicker({
	row_height: 60,
	max_rows: 1,
	speed: 300,
	duration: 6000,
	prevButton: $('#nt-example2-prev'),
	nextButton: $('#nt-example2-next'),
	hasMoved: function() {
    	$('#nt-example2-infos-container').fadeOut(200, function(){
        	$('#nt-example2-infos .infos-hour').text($('#nt-example2 li:first span').text());
        	$('#nt-example2-infos .infos-text').text($('#nt-example2 li:first').data('infos'));
        	$(this).fadeIn(400);
        });
    },
    pause: function() {
    	$('#nt-example2 li i').removeClass('fa-play').addClass('fa-pause');
    },
    unpause: function() {
    	$('#nt-example2 li i').removeClass('fa-pause').addClass('fa-play');
    }
});
$('#nt-example2-infos').hover(function() {
    nt_example2.newsTicker('pause');
}, function() {
    nt_example2.newsTicker('unpause');
});
</code></pre>
				</div>
			</div>
		</div>
	</div>
	<div class="green">
		<div class="container">
			<div class="row">
				<div class="col-md-4 centered">
					<div id="nt-example3-container">
						<!-- <i class="fa fa-arrow-up" id="nt-example3-prev"></i> -->
		                <ul id="nt-example3">
		                    <li>Lorem</li>
		                    <li>Ipsum</li>
		                    <li>Praesent</li>
		                    <li>Nunc</li>
		                    <li>Morbi</li>
		                    <li>Pharetra</li>
		                    <li>Maecenas</li>
		                    <li>Onec</li>
		                </ul>
		                <span class="button" id="nt-example3-button">START</span>
		                <!-- <i class="fa fa-arrow-down" id="nt-example3-next"></i> -->
		            </div>
				</div>
				
				<div class="col-md-8 centered">
					<h3>BONUS : "ROULETTE" EXAMPLE, USING CALLBACKS & METHODS</h3>
					<pre><code class="language-javascript example-code">var state = 'stopped';
var speed;
var add;
var nt_example3 = $('#nt-example3').newsTicker({
    row_height: 80,
    max_rows: 1,
    duration: 0,
    speed: 10,
    autostart: 0,
    pauseOnHover: 0,
    hasMoved: function() {
    	if (speed > 700) {
    		$('#nt-example3').newsTicker("stop");
    		console.log('stop')
    		$('#nt-example3-button').text("RESULT: " + $('#nt-example3 li:first').text().toUpperCase());
    		setTimeout(function() {
    			$('#nt-example3-button').text("START");
    			state = 'stopped';
    		},2500);
    		
    	}
    	else if (state == 'stopping') {
    		add = add * 1.4;
    		speed = speed + add;
    		console.log(speed)
    		$('#nt-example3').newsTicker('updateOption', "duration", speed + 25);
    		$('#nt-example3').newsTicker('updateOption', "speed", speed);
    	}
    }
});
$('#nt-example3-button').click(function(){
	if (state == 'stopped') {
    	state = 'turning';
    	speed = 1;
    	add = 1;
    	$('#nt-example3').newsTicker('updateOption', "duration", 0);
    	$('#nt-example3').newsTicker('updateOption', "speed", speed);
    	nt_example3.newsTicker('start');
    	$(this).text("STOP");
    }
    else if (state == 'turning') {
    	state = 'stopping';
    	$(this).text("WAITING...");
    }
});</code></pre>
				</div>
			</div>
		</div>
	</div>
	<div class="title" id="usage">
		<div class="row">
			<div class="col-lg-12 centered">
				<h3>USAGE</h3>
			</div>
		</div>
	</div>
	<div class="white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10 col-lg-offset-1">
					<p>
						HTML: a simple list, which may be fully customized.
					</p>
					<pre><code class="language-markup ">&lt;ul class="newsticker">
    &lt;li>Etiam imperdiet volutpat libero eu tristique.&lt;/li>
    &lt;li>Curabitur porttitor ante eget hendrerit adipiscing.&lt;/li>
    &lt;li>Praesent ornare nisl lorem, ut condimentum lectus gravida ut.&lt;/li>
    &lt;li>Nunc ultrices tortor eu massa placerat posuere.&lt;/li>
&lt;/ul>
&lt;script src="http://code.jquery.com/jquery-1.10.1.min.js"&gt;&lt;/script>
&lt;script src="js/newsTicker.js"&gt;</script></code></pre>
				</div>
			</div>
		</div>
	</div>
	<div class="green">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10 col-lg-offset-1">
					<p>
						Basic usage :
					</p>
					<pre><code class="language-javascript ">$('.newsticker').newsTicker();</script></code></pre>
				</div>
			</div>
		</div>
	</div>
	<div class="white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10 col-lg-offset-1">
					<p>
						With custom parameters:
					</p>
					<pre><code class="language-javascript ">$('.newsticker').newsTicker({
    row_height: 48,
    max_rows: 2,
    speed: 600,
    direction: 'up',
    duration: 4000,
    autostart: 1,
    pauseOnHover: 0
});</script></code></pre>
				</div>
			</div>
		</div>
	</div>
	<div class="green">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10 col-lg-offset-1">
					<p>
						With (custom) control buttons :
					</p>
					<pre><code class="language-javascript ">$('.newsticker').newsTicker({
    row_height: 64,
    speed: 800,
    prevButton:  $('#prev-button'),
    nextButton:  $('#next-button'),
    stopButton:  $('#stop-button'),
    startButton: $('#start-button')
});</script></code></pre>
				</div>
			</div>
		</div>
	</div>
	<div class="white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10 col-lg-offset-1">
					<p>
						With callbacks :
					</p>
					<pre><code class="language-javascript ">$('.newsticker').newsTicker({
    max_rows: 1,
    duration: 6000,
    startButton: $('.start'),
    hasMoved: updateInfos,
    start: function() {
        console.log('newsTicker just started !');
    },
    pause: function() {
        console.log('newsTicker has been paused.');
    }
});
function updateInfos() {
    //...
}</script></code></pre>
				</div>
			</div>
		</div>
	</div>
	<div class="green">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10 col-lg-offset-1">
					<p>
						With methods :
					</p>
					<pre><code class="language-javascript ">var nt = $('.newsticker').newsTicker({
    autostart: 0,
    speed: 400
});
nt.newsTicker('start');
$('.newsTicker-header').hover(function() {
    nt.newsTicker('pause');
}, function() {
    nt.newsTicker('unpause');
});
nt.newsTicker('updateOption','speed',1000);
nt.newsTicker('updateOption','direction','down');</script></code></pre>
				</div>
			</div>
		</div>
	</div>
	<div class="title" id="options-callbacks">
		<div class="row">
			<div class="col-lg-12 centered">
				<h3>OPTIONS & CALLBACKS</h3>
			</div>
		</div>
	</div>
	<div class="white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10 col-lg-offset-1">
					<table class="table table-striped params-table">
					    <thead>
					        <tr>
					            <th>Parameter</th>					            
					            <th>Usage</th>
					            <th>Type/Values</th>
					            <th>Default</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td><code>row_height</code></td>
					            <td>defines the height (in px) of one row</td>
					            <td><code>int</code></td>
					            <td><em>22</em></td>
					        </tr>
					        <tr>
					            <td><code>max_row</code></td>
					            <td>defines the number of rows displayed at the same time</td>
					            <td><code>int</code></td>
					            <td><em>3</em></td>
					        </tr>
					        <tr>
					            <td><code>speed</code></td>
					            <td>defines the animation speed (in ms)of the rows moving up or
					            down</td>
					            <td><code>int</code> <em>(in ms)</em></td>
					            <td><em>400</em></td>
					        </tr>
					        <tr>
					            <td><code>duration</code></td>
					            <td>defines the times (in ms) before the rows automatically
					            move</td>
					            <td><code>int</code> <em>(in ms)</em></td>
					            <td><em>2500</em></td>
					        </tr>
					        <tr>
					            <td><code>direction</code></td>
					            <td>defines the direction of the rows movement</td>
					            <td><code>up</code> <em>or</em> <code>down</code></td>
					            <td><em>'up'</em></td>
					        </tr>
					        <tr>
					            <td><code>autostart</code></td>
					            <td>enable/disable auto start on load</td>
					            <td><code>0</code> <em>or</em> <code>1</code></td>
					            <td><em>1</em></td>
					        </tr>
					        <tr>
					            <td><code>pauseOnHover</code></td>
					            <td>enable/disable pause when mouse hovers the newsTicker
					            element</td>
					            <td><code>0</code> <em>or</em> <code>1</code></td>
					            <td><em>1</em></td>
					        </tr>
					        <tr>
					            <td><code>nextButton</code></td>
					            <td>set the element triggering <code>next</code> action on
					            click</td>
					            <td><code>JQuery element</code></td>
					            <td><em>null</em></td>
					        </tr>
					        <tr>
					            <td><code>prevButton</code></td>
					            <td>set the element triggering <code>prev</code> action on
					            click</td>
					            <td><code>JQuery element</code></td>
					            <td><em>null</em></td>
					        </tr>
					        <tr>
					            <td><code>startButton</code></td>
					            <td>set the element triggering <code>start</code> action on
					            click</td>
					            <td><code>JQuery element</code></td>
					            <td><em>null</em></td>
					        </tr>
					        <tr>
					            <td><code>stopButton</code></td>
					            <td>set the element triggering <code>stop</code> action on
					            click</td>
					            <td><code>JQuery element</code></td>
					            <td><em>null</em></td>
					        </tr>
					        <tr>
					            <td><code>hasMoved</code></td>
					            <td><code>callback</code> called at the end of every movement
					            animation</td>
					            <td><code>function</code></td>
					            <td></td>
					        </tr>
					        <tr>
					            <td><code>movingUp</code></td>
					            <td><code>callback</code> called before launching <code>moving
					            up</code> action</td>
					            <td><code>function</code></td>
					            <td></td>
					        </tr>
					        <tr>
					            <td><code>movingDown</code></td>
					            <td><code>callback</code> called before launching <code>moving
					            down</code> action</td>
					            <td><code>function</code></td>
					            <td></td>
					        </tr>
					        <tr>
					            <td><code>start</code></td>
					            <td><code>callback</code> called on <code>start</code> action</td>
					            <td><code>function</code></td>
					            <td></td>
					        </tr>
					        <tr>
					            <td><code>stop</code></td>
					            <td><code>callback</code> called on <code>stop</code> action</td>
					            <td><code>function</code></td>
					            <td></td>
					        </tr>
					        <tr>
					            <td><code>pause</code></td>
					            <td><code>callback</code> called on <code>pause</code> action
					            (triggered on <code>mouseOver</code> if
					            <code>pauseOnHover=1</code>)</td>
					            <td><code>function</code></td>
					            <td></td>
					        </tr>
					        <tr>
					            <td><code>unpause</code></td>
					            <td>called on <code>unpause</code> action (triggered on
					            <code>mouseOut</code> if <code>pauseOnHover=1</code>)</td>
					            <td><code>function</code></td>
					            <td></td>
					        </tr>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<div class="title" id="methods">
		<div class="row">
			<div class="col-lg-12 centered">
				<h3>METHODS</h3>
			</div>
		</div>
	</div>
	<div class="green">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10 col-lg-offset-1">
					<p>
						After initializing a newsTicker instance, methods are called with
					</p>
					<pre><code class="language-javascript ">.newsTicker('methodName', 'param1', 'param2', ... )</script></code></pre>
					<p>
						Example :
					</p>
					<pre><code class="language-javascript ">var nt = $('.newsticker').newsTicker();
nt.newsTicker('stop');
nt.newsTicker('updateOption','direction','down');
var state = nt.newsTicker('getState');</script></code></pre>
				</div>
			</div>
		</div>
	</div>
	<div class="white">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-10 col-lg-offset-1">
					<h2 class="header">Methods List</h2>
					<table class="table table-striped params-table">
					    <thead>
					        <tr>
					            <th>Method</th>
					            <th>Parameter(s)</th>
					            <th>Action</th>
					        </tr>
					    </thead>
					    <tbody>
					        <tr>
					            <td><code>start</code></td>
					            <td></td>
					            <td>starts moving newsTicker elements</td>
					        </tr>
					        <tr>
					            <td><code>stop</code></td>
					            <td></td>
					            <td>stops moving newsTicker elements</td>
					        </tr>
					        <tr>
					            <td><code>updateOption</code></td>
					            <td><code>optionName</code>, <code>value</code></td>
					            <td>update an option (see <strong>Options &amp; Callbacks</strong>
					            for options list)</td>
					        </tr>
					        <tr>
					            <td><code>getState</code></td>
					            <td></td>
					            <td>returns current state : <code>0</code> = stopped,
					            <code>1</code> = started, <code>2</code> = paused (and
					            started)</td>
					        </tr>
					        <tr>
					            <td><code>pause</code></td>
					            <td></td>
					            <td>pauses newsTicker elements without stopping them - the
					            newsTicker has to be started to be able to pause it (the
					            <code>pause</code> method is called on <code>mouseOver</code> if
					            <code>pauseOnHover</code> = 1)</td>
					        </tr>
					        <tr>
					            <td><code>unpause</code></td>
					            <td></td>
					            <td>unpauses newsTicker elements - the newsTicker has to be started
					            &amp; paused to be able to unpause it (the <code>unpause</code>
					            method is called on <code>mouseOut</code> if
					            <code>pauseOnHover</code> = 1)</td>
					        </tr>
					        <tr>
					            <td><code>moveDown</code></td>
					            <td></td>
					            <td>moves elements down</td>
					        </tr>
					        <tr>
					            <td><code>moveUp</code></td>
					            <td></td>
					            <td>moves elements up</td>
					        </tr>
					        <tr>
					            <td><code>moveNext</code></td>
					            <td></td>
					            <td>moves up or down according to the current
					            <code>direction</code> option</td>
					        </tr>
					        <tr>
					            <td><code>movePrev</code></td>
					            <td></td>
					            <td>moves up or down according to the current
					            <code>direction</code> option</td>
					        </tr>
					        <tr>
					            <td><code>move</code></td>
					            <td></td>
					            <td>equivalent to <code>moveNext</code>, but will not move if
					            <code>paused</code></td>
					        </tr>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</div>

	<div class="download-title" id="download-title">
		<div class="container">
			<div class="row centered">
				<h3>DOWNLOAD</h3>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /download-title -->
	

	<div id="download">
		<div class="container">
			<div class="row centered">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="col-md-6 download-link">
						<a href="https://github.com/risq/jquery-advanced-news-ticker/archive/master.zip" target="_blank">
							<i class="fa fa-download"></i> 
							<div class="download-text">DOWNLOAD</div>
						</a>
					</div>
					<div class="col-md-6 download-link">
						<a href="https://github.com/risq/jquery-advanced-news-ticker" target="_blank">
							<i class="fa fa-github"></i> 
							<div class="download-text">FORK ON GITHUB</div>
						</a>
					</div>
				</div>
			</div>
		</div><!-- /container -->
	</div><!-- /download -->
	<div id="f">
		<div class="container">
			<div class="row">
			<h3>Share this page</h3>
				<div id="s-icons">
					<a href="http://www.facebook.com/sharer.php?u=http://risq.github.io/jquery-advanced-news-ticker/" target="_blank"><span class="fa fa-facebook"></span></a>
					 
					<a href="http://twitter.com/share?url=http://risq.github.io/jquery-advanced-news-ticker/&text=JQuery Advanced News Ticker Plugin" target="_blank"><span class="fa fa-twitter"></span></a>
					 
					<a href="https://plus.google.com/share?url=http://risq.github.io/jquery-advanced-news-ticker/" target="_blank"><span class="fa fa-google-plus"></span></a>
					 					 					 
					<a href="http://www.linkedin.com/shareArticle?mini=true&url=http://risq.github.io/jquery-advanced-news-ticker/" target="_blank"><span class="fa fa-linkedin"></span></a>
					 
					<a href="javascript:void((function()%7Bvar%20e=document.createElement('script');e.setAttribute('type','text/javascript');e.setAttribute('charset','UTF-8');e.setAttribute('src','http://assets.pinterest.com/js/pinmarklet.js?r='+Math.random()*99999999);document.body.appendChild(e)%7D)());"><span class="fa fa-pinterest"></span></a>
					 					 
					<a href="mailto:?Subject=JQuery Advanced News Ticker Plugin&Body=http://risq.github.io/jquery-advanced-news-ticker/"><span class="fa fa-envelope"></span></a>
					 
 					<script id='fbkt5nx'>(function(i){var f,s=document.getElementById(i);f=document.createElement('iframe');f.src='//api.flattr.com/button/view/?uid=risq&url='+encodeURIComponent(document.URL);f.title='Flattr';f.height=62;f.width=55;f.style.borderWidth=0;s.parentNode.insertBefore(f,s);})('fbkt5nx');</script>
				</div>
				<p>Created by <a href="https://github.com/risq" target="_blank">risq</a></p>
			</div>
		</div>
	</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/prism.js"></script>
    <script src="assets/js/jquery.mCustomScrollbar.min.js"></script>
    <script src="jquery.newsTicker.js"></script>
    <script>
    		$('a[href*=#]').click(function(e) {
			    var href = $.attr(this, 'href');
			    if (href != "#") {
				    $('html, body').animate({
				        scrollTop: $(href).offset().top - 81
				    }, 500);
				}
				else {
					$('html, body').animate({
				        scrollTop: 0
				    }, 500);
				}
			    return false;
			});

    		$(window).load(function(){
	            $('code.language-javascript').mCustomScrollbar();
	        });
            var nt_title = $('#nt-title').newsTicker({
                row_height: 40,
                max_rows: 1,
                duration: 3000,
                pauseOnHover: 0
            });
            var nt_example1 = $('#nt-example1').newsTicker({
                row_height: 80,
                max_rows: 3,
                duration: 4000,
                prevButton: $('#nt-example1-prev'),
                nextButton: $('#nt-example1-next')
            });
            var nt_example2 = $('#nt-example2').newsTicker({
                row_height: 60,
                max_rows: 1,
                speed: 300,
                duration: 6000,
                prevButton: $('#nt-example2-prev'),
                nextButton: $('#nt-example2-next'),
                hasMoved: function() {
                	$('#nt-example2-infos-container').fadeOut(200, function(){
	                	$('#nt-example2-infos .infos-hour').text($('#nt-example2 li:first span').text());
	                	$('#nt-example2-infos .infos-text').text($('#nt-example2 li:first').data('infos'));
	                	$(this).fadeIn(400);
	                });
                },
                pause: function() {
                	$('#nt-example2 li i').removeClass('fa-play').addClass('fa-pause');
                },
                unpause: function() {
                	$('#nt-example2 li i').removeClass('fa-pause').addClass('fa-play');
                }
            });
            $('#nt-example2-infos').hover(function() {
                nt_example2.newsTicker('pause');
            }, function() {
                nt_example2.newsTicker('unpause');
            });
            var state = 'stopped';
            var speed;
            var add;
            var nt_example3 = $('#nt-example3').newsTicker({
                row_height: 80,
                max_rows: 1,
                duration: 0,
                speed: 10,
                autostart: 0,
                pauseOnHover: 0,
                hasMoved: function() {
                	if (speed > 700) {
                		$('#nt-example3').newsTicker("stop");
                		console.log('stop')
                		$('#nt-example3-button').text("RESULT: " + $('#nt-example3 li:first').text().toUpperCase());
                		setTimeout(function() {
                			$('#nt-example3-button').text("START");
                			state = 'stopped';
                		},2500);
                		
                	}
                	else if (state == 'stopping') {
                		add = add * 1.4;
                		speed = speed + add;
                		console.log(speed)
                		$('#nt-example3').newsTicker('updateOption', "duration", speed + 25);
                		$('#nt-example3').newsTicker('updateOption', "speed", speed);
                	}
                }
            });
            
            $('#nt-example3-button').click(function(){
            	if (state == 'stopped') {
	            	state = 'turning';
	            	speed = 1;
	            	add = 1;
	            	$('#nt-example3').newsTicker('updateOption', "duration", 0);
	            	$('#nt-example3').newsTicker('updateOption', "speed", speed);
	            	nt_example3.newsTicker('start');
	            	$(this).text("STOP");
	            }
	            else if (state == 'turning') {
	            	state = 'stopping';
	            	$(this).text("WAITING...");
	            }
            });
        </script>

        <script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-48039933-1', 'risq.github.io');
			ga('send', 'pageview');
		</script>
