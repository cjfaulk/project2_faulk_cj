<style type="text/css">

* {
	margin: 0;
	padding: 0;
	border: 0;
}

*::selection {
  background: #6fdcd8;
  color: white;
}

article, aside, details, figcaption, figure, footer, header, main, nav, section, summary {
    display:block;
}

body {
  font-family: "Nunito Sans", sans-serif;
  color: #0d0d0d;
  font-size: 1.25rem;
}

h1 {
	font-size: 1.75rem;
}

.active {
	font-weight: bold;
	text-decoration: overline;
}

.desktop-menu {
  display: none;
}

#menuToggle {
  display: block;
  margin-top: 5%;
  position: relative;
  top: 5%;
  left: 5%;
  z-index: 1;
  -webkit-user-select: none;
  user-select: none;
}

#menuToggle a {
  text-decoration: none;
  color: #232323;
  transition: color 0.3s ease;
}

#menuToggle a:hover {
  font-weight: bold;
  text-decoration: overline;
}

#menuToggle input {
  display: block;
  width: 40px;
  height: 32px;
  position: absolute;
  top: -7px;
  left: -5px;
  cursor: pointer;
  opacity: 0; /* hide this */
  z-index: 2; /* and place it over the hamburger */
  -webkit-touch-callout: none;
}

#menuToggle span
{
  display: block;
  width: 33px;
  height: 4px;
  margin-bottom: 5px;
  position: relative;

  background: #cdcdcd;
  border-radius: 3px;

  z-index: 1;

  transform-origin: 4px 0px;

  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              background 0.5s cubic-bezier(0.77,0.2,0.05,1.0),
              opacity 0.55s ease;
}

#menuToggle span:first-child {
  transform-origin: 0% 0%;
}

#menuToggle span:nth-last-child(2) {
  transform-origin: 0% 100%;
}
/*
 * Transform all the slices of hamburger
 * into a crossmark.
 */
#menuToggle input:checked ~ span {
  opacity: 1;
  transform: rotate(45deg) translate(-2px, -1px);
  background: #232323;
}
/*
 * But let's hide the middle one.
 */
#menuToggle input:checked ~ span:nth-last-child(3) {
  opacity: 0;
  transform: rotate(0deg) scale(0.2, 0.2);
}
/*
 * Ohyeah and the last one should go the other direction
 */
#menuToggle input:checked ~ span:nth-last-child(2) {
  transform: rotate(-45deg) translate(0, -1px);
}
/*
 * Make this absolute positioned
 * at the top left of the screen
 */
#menu {
  position: absolute;
  width: 300px;
  margin: -100px 0 0 -50px;
  padding: 50px;
  padding-top: 125px;

  background: #ededed;
  list-style-type: none;
  -webkit-font-smoothing: antialiased;
  /* to stop flickering of text in safari */

  transform-origin: 0% 0%;
  transform: translate(-100%, 0);

  transition: transform 0.5s cubic-bezier(0.77,0.2,0.05,1.0);
}

#menu li {
  padding: 10px 0;
  font-size: 22px;
}
/*
 * And let's slide it in from the left
 */
#menuToggle input:checked ~ ul {
  transform: none;
}
/*----------END HAMBURGER MENU--------------------*/

/*----------START STICKY FOOTER--------------------*/

body {
  display: flex;
	flex-direction: column;
	min-height: 100vh;
}

main {
  flex: 1;
	padding-top: 20vh;
}

/*----------END STICKY FOOTER----------------------*/

/*------------------------------------------------

HEADER STYLING

-------------------------------------------------*/

header {
  text-align: center;
  height: 20vh;
	width: 100%;
	background-color: white;
	position: fixed;
}

header img {
  width: 90vw;
  max-width: 300px;
}

/*------------------------------------------------

FOOTER STYLING

-------------------------------------------------*/

footer {
  background-color: #6fdcd8;
  position: relative;
}

.desktop-footer {
	display: none;
}

.mobile-footer {
  display: flex;
  justify-content: space-between;
  width: 90vw;
	height: 350px;
	padding: 5%;
}

.mobile-footer nav {
    margin-left: 10%;
}

footer nav a {
  text-decoration: none;
  color: #0d0d0d;
}

footer nav a:hover {
  text-decoration: overline;
}

footer nav ul {
  list-style-type: none;
}

.mobile-footer nav ul li {
  padding: 20% 0 20% 0;
  display: block;
}

.mobile-footer .socials {
  margin-right: 15%;
}

.socials h3 {
	display: none;
}

.mobile-footer .socials img {
  display: block;
  padding: 15% 0 15% 0;
  width: 45px;
}

#copyright {
  position: absolute;
  bottom: 5%;
	left: 5%;
}

.contact {
	text-align: center;
	background-color: #808080;
	width: 100%;
	max-width: 500px;
	color: white;
	margin: 10% auto;
	padding: 5% 0 5% 0;
	border-radius: 4px;
	box-shadow: 5px 5px 10px darkgray;
}

@media (min-width: 600px) {

	/* --- HEADER STYLING --- */

	header {
		height: 25vh;
		padding-top: 5%;
	}

	.menu {
		display: none;
	}

	.desktop-menu {
		display: block;
		margin-top: 5%;
	}

	.desktop-menu ul li {
		padding: 3%;
		display: inline;
	}

	.desktop-menu a {
		text-decoration: none;
		color: #0d0d0d;
	}

	.desktop-menu a:hover {
		text-decoration: overline;
	}

	/* --- FOOTER STYLING --- */

	.mobile-footer {
		display: none;
	}

	.desktop-footer {
		display: block;
		text-align: center;
		height: 25vh;
	}

	.desktop-footer nav {
		margin-top: 10%;
	}

	.desktop-footer nav ul li{
		display: inline;
		padding: 3%;
	}

	.desktop-footer .socials img {
		width: 45px;
		margin-top: 8%;
		padding: 0 1.5% 0 1.5%;
	}

	/* --- BODY STYLING --- */

	body {
		font-size: 1rem;
	}

	/* --- MAIN STYLING --- */

	main {
		padding-top: 25vh;
	}
}

</style>

<header>
  <a href="index.html"><img src="images/name-logo.png" /></a>
  <nav>
    <ul>
      <li><a href="index.html">HOME</a></li>
      <li><a href="aboutme.html">ABOUT ME</a></li>
      <li><a href="resume.html">RESUME</a></li>
      <li class="active"><a href="contact.html">CONTACT</a></li>
    </ul>
  </nav>
</header>

<div class="contact">
  <h1>Thank you for your message.</h1>
  <p>I'll be in touch shortly!</p>
</div>

<footer>
  <nav>
    <ul>
      <li><a href="index.html">HOME</a></li>
      <li><a href="aboutme.html">ABOUT ME</a></li>
      <li><a href="resume.html">RESUME</a></li>
      <li class="active"><a href="contact.html">CONTACT</a></li>
    </ul>
  </nav>

  <section>
    <a href="mailto:cjfaulk97@gmail.com"><img class="socials" src="images/email.png" alt="Email" title="Email"></a>
    <a href="https://www.linkedin.com/in/catherine-cj-faulk-5a9b1016b/" target="_blank"><img class="socials" src="images/linkedin.png" alt="LinkedIn" title="LinkedIn"></a>
    <a href="https://www.pinterest.com/cjlove918/" target="_blank"><img class="socials" src="images/pinterest.png" alt="Pinterest" title="Pinterest"></a>
    <a href="https://open.spotify.com/user/cjlove918?si=j13PP3i_RfOGoeXU5Mjfig" target="_blank"><img class="socials" src="images/spotify.png" alt="Spotify" title="Spotify" ></a>
    <a href="https://www.etsy.com/shop/CatherineDesignCo?ref=seller-platform-mcnav" target="_blank"><img class="socials" src="images/etsy.png" alt="Etsy" title="Etsy" ></a>
  </section>

  <p id="copyright">&copy CJ Faulk 2020</p>
</footer>
