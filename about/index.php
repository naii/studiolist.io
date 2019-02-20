<?php
	require '../functions.php';
	$title = "About studiolist.io";
	include '../header.php';
?>		
		<h1>Studio List makes it easy to book studio time at amazing rates</h1>

		<p>We’re a match-maker between top-rated recording studios that have unsold studio time and artists who want to book this studio time.</p>

		<p>Studio owners offer their recording studios so that it’s always booked, and artists find the best studio nearby so that being new in town doesn’t mean being lost and having no idea where to record the next piece.</p>

		<p>In short:</p>

		<ul>
		<li>Studios kill idle times</li>
		<li>Artists find the best studios to record in town</li>
		</ul>

		<h2>Recording studios ordered by city</h2>
		<p>Read <a href="#benefits">how Studio List benefits you</a>, or log in (soon) to request a price<!-- <a href="/login">request a price</a> -->, get the right contact person, book studio time, see the studio on a nice map or share a review. Below you can also read the background story <a href="#story">why I started Studio List</a>.</p>
		
		<h2 id="benefits">Benefits</h2>
		<p>Studio List helps musicians and voice artists <strong>find a recording studio nearby and book it quick!</strong> In contrast to Google, Facebook and their fellow surveillance capitalism colleagues, I ensure all data is stored securely and safely. Except for the studio name, no personal data is being revealed to the public. That’s why a 3-second registration (full name, email address, password) is required.</p>

		<h3>Smart use of existing studio infrastructure</h3>

		<p>With Studio List, I’m using the existing infrastructure of recording studios. As a voiceover artist you only need to bring your skills and a healthy voice to any place where there are studios to record, no need to bring your own computer and equipment. I think that’s an awesome perspective.</p>

		<ol>
		<li>You book studio time on studiolist.io,</li>
		<li>show up in the studio,</li>
		<li>record and</li>
		<li>send the recorded file to your client or project partner.</li>
		</ol>

		<h3>For free for artists</h3>
		<p>With each of your booking I’m charging a commission from the studio owner. The commission is simply included in the price but you don’t pay more, the studio owners accept to receive a little less money from the booking. I hope this is fair for all 3 parties :)</p>

		<h3>The best studios always on top!</h3>
		<p>I’m not accepting payments from studio owners to list their recording studio on top. The only way to get ranked better is by improving their customer service towards the artists who records at their studio. However, in the beginning with no reviews yet, I’ll list the studios alphabetically, from A to Z, so it’s objectively fair.</p>

		<h3>Fast loading time</h3>
		<p>Access studios in milliseconds because the website uses nor images, scripts or special effects. I know you appreciate speed.</p>

		<h3>Updated regularly and immediately</h3>
		<!-- <p>As soon as I find a new studio, I do add it here to the list. <a href="mailto:alexander@naii.io?subject=I opened a studio, please add it to Studio List&body=Hi, my name is _FIRSTNAME_ _LASTNAME_, I opened a new studio or found a studio that is no listed on Studio List. Please add _URL_.">You opened a studio?</a>Do let me know.</p> -->
		<p>As soon as I find a new studio, I do add it here to the list. <strong><a href="/contact/">Contact me</a> if you opened a studio.</strong></p>


		<h3>Honest reviews from real people</h3>
		<p>Please leave a review of what you liked and didn’t like about your studio experience, and what could be improved. <em>As soon as I’ve finished the registration system you can leave a review to a studio.</em></p>

		<h3>I’m only human, I make mistakes</h3>
		<!-- <p>You want an up-to-date list and correct information. Ok, me too. If you found a mistake on Studio List, <a href="mailto:alexander@naii.io?subject=I found a mistake on Studio List">please send me what’s wrong</a>.</p> -->
		<p>You want an up-to-date list and correct information. Ok, me too. If you found a mistake on Studio List, <a href="/contact/">please send me what’s wrong</a>.</p>

		<!-- <h3>Interviews with the music industry</h3>
		<p>And content-wise, I’m planning to make interviews with musicians and vocal artists and ask the question: „How did you make _NAME OF CREATION_?“</p> -->

		<h2 id="story">This page is run by naii.io</h2>
		<p>Hi, I’m Alexander, founder of naii.io. I’m a solo maker and I run this site. </p>
		<p>I started Studio List since I didn’t want to stop traveling only because I switched from being a freelance designer/writer to a voiceover artist. Traveling is in my blood. I enjoy the movement, feeling the global pulse and reading the world’s landscapes. So initially, it was an egoistic reason and I don’t think that’s bad: I just solved a problem I had and I felt I wouldn’t be the only one to benefit from it. So, Studio List was born, launched in April 2018.</p>

		<h2>Objections</h2>
		<p>Below you find objections I could think of that could hinder you from using Studio List.</p>
		<h3>I could use Google (or Google Maps), why use Studio List instead?</h3>
		<p>Studio List is a dedicated service for voice artists and musicians. My interest as the founder of the website is to help you get the best recording quality without being tied to a particular location. Voice creation and music collaboration lives from the exchange of artists that meet face to face. Yes, the Internet is great for digital collaboration but there’s (currently) no way to imitate the spontaneous, in-person interaction as they happen when you look into each other’s eyes. As a voice actor myself, I’m part of both the acting world and the sound &amp; music-producing industry. I like to have this dual perspective and I enjoy what’s being produced in both worlds. So, this is my way to give back to the industry and my way to say „Thank you“.</p>
		<p>Studio List is a place of trust, creativity, connection and friendship. I’m not building a walled garden but a community where recording studios and artists get together. Also, Studio List is ethical by design. Compare that to tech giant Google who is far from that. I’m a fan of running a „<a href="https://www.indiehackers.com/podcast/043-pieter-levels-of-nomad-list#4214">corner coffee shop internet business</a>“.</p>
		<!-- <p>Also, if you use Studio List, you don’t need to type „recording studio London“, you can can simply type „London“. So easy and fast.</p> -->

		<p><em>If you have other objections, I’d be happy to answer them here publicly as well.</em></p>

		<h2>Public documentation</h2>
		<p>I prefer to be open and transparent about the development of Studio List. That’s why I’m listing major development steps here. I understand that this is not super interesting for you as an artist but my developer friends like it and some of them are musicians as well :P</p>

		<h3>Currently collecting studios in:</h3>

		<ul>
			<li>Morocco</li>
			<li>Portugal</li>
			<li>Spain</li>
			<li>France</li>
		</ul>

		<h3>Collected already in:</h3>

		<ul>
			<li>Miami, Florida, USA</li>
		</ul>

		<h3>Activity log</h3>

		<?php
			$today = new DateTime('now');
			$date000 = new DateTime("2018-04-13");
			$date001 = new DateTime("2018-11-21");
			$date002 = new DateTime("2019-02-01");
			$date003 = new DateTime("2019-02-13");
			$date004 = new DateTime("2019-02-20");
			$interval000 = $date000->diff($today);
			$interval001 = $date001->diff($today);
			$interval002 = $date002->diff($today);
			$interval003 = $date003->diff($today);
			$interval004 = $date004->diff($today);
		?>

		<ul>
			<li>
				<span><strong>
					<?php
						if ($interval004->days == 0) {
							echo " Today";
						} elseif ($interval004->days == 1) {
							echo "1 day ago";
						} else {
							echo $interval004->days . " days ago";
						}
					?>:
				</strong></span>Added Moroccan studios who agreed to be listed here, some amendments on the frontpage copytext
			</li>
			<li><span><strong><?php echo $interval003->days . " days ago"; ?>:</strong></span>Slimmer home page, new about page, new contact page</li>
			<li><span><strong><?php echo $interval002->days . " days ago"; ?>: </strong></span>Started 120-day challenge. If I can’t validate studiolist.io within these 4 months, the project dies. See me document it on <a href="https://twitter.com/hashtag/startupdiarystudiolist?src=hash">Twitter</a> and <a href="https://www.instagram.com/explore/tags/startupdiarystudiolist/">Instagram</a>. Hashtag is #startupdiarystudiolist.</li>
			<li><span><strong><?php echo $interval001->days . " days ago"; ?>: </strong></span>Added new copytext, a teaser for upcoming interviews and the paragraph of using existing studio infrastructure</li>
			<li><span><strong><?php echo $interval000->days . " days ago"; ?>: </strong></span>Launched on a Friday 13th, wish me luck <em>haha</em></li>
		</ul>

		<h3>Statistics</h3>

		<ul>
		<li>Currently, 48 studies on 3 continents, 3 countries, 2 federal states and 4 cities</li>
		</ul>

<?php include '../footer.php'; ?>