	<section id="send_cv" class="frame">
		<h2>Send us your CV</h2>
		<p>Some text that appeals to potential candidates and encourages them to send you their cv.</p>
		<form action="/my-handling-form-page" method="post">
			<div>
				<label for="first_name"></label>
				<input type="text" id="first_name" tabindex="1" placeholder="first name" />
			</div>
			<div>
				<label for="last_name"></label>
				<input type="text" id="last_name" tabindex="2" placeholder="last name" />
			</div>
			<div>
				<label for="email"></label>
				<input type="email" id="email" tabindex="3" placeholder="email" />
			</div>
			<div>
				<label for="tel"></label>
				<input type="tel" id="tel" tabindex="4" placeholder="tel" />
			</div>
			<div>
				<label for="msg"></label>
				<textarea id="msg" tabindex="5" placeholder="OPTIONAL: enter a message for example: I'm interested in job ID00500"></textarea>
			</div>
			<div>
				<label for="file"></label>
				<input  id="file" type="file" tabindex="6" value="Upload CV">
			</div>
			<div>
				<input id="submit" tabindex="7" value="Send" type="submit">
			</div>		
		</form>
	</section>