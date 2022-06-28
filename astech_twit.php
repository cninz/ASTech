<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>AS Tech Website Page</title>

	<!-- Google Fonts and Font Awesome Link -->
	<script src="https://kit.fontawesome.com/94767ac4fe.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;800&family=Playfair+Display:ital,wght@1,700&display=swap" rel="stylesheet">
</head>

<style>
/* general styling starts */
:root {
  --downriver: #0e1053;
  --chambray: #373995;
  --mineshaft: #333333;
  --alto: #dddddd;
  --sundance: #cead63;
  --blue-chalk: #f0d6ff;
  --light-bg: #f5f5f5;
  --white: #fff;
  --border: .1rem solid #aaa;
  --box-shadow: 1rem 1rem rgba(0, 0, 0, 0.767);
  --text-shadow: 0.2rem 0.2rem #222;
  --visibility: hidden;
  --letter-spacing: 0.1rem;
  --line-height1: 1.0rem;
  --line-height2: 1.5rem;
}

* {
  font-family: 'Open Sans', sans-serif;
  /* font-family: 'Playfair misplay', serif; */
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
  border: none;
  text-decoration: none;
  list-style: none;
  transition: all 0.4s cubic-bezier(0.43, 1.1, 0.62, 1.08);
  color: var(--mineshaft);
  font-weight: lighter;

}

*>.img {
  user-select: none;
  pointer-events: none;
}

html {
  font-size: 62.5%;
  overflow-x: hidden;
  scroll-behavior: smooth;
  /* background: var(--alto); */
}

img{
  height: 10rem;
  width: 10rem;
}

h1{
  letter-spacing: var(--letter-spacing);
  font-size: 13.4rem;
}

h2{
  font-size: 10.1rem;
}

h3{
  font-size: 7.6rem;
}

h4{
  font-size: 5.7rem;
}

h5{
  font-size: 4.3rem;
}

h6{
  font-size: 3.2rem;
}

.blockquote{
  font-size: 2.4rem;
}

.parap--paragraph-d{
  font-size: 1.8rem;
} 
/* general styling ends */

/* twitter-feed style starts */
.twitter-feed{
  background: var(--alto);
  padding: 3rem;
}

.content-title{
  padding: 5rem 0 0.5rem 10rem;
  /* position: relative;
  top: 10rem; */
}

.content-title h6 a {
  font-family: 'Playfair Display', 'sans-serif';
  color: var(--downriver);
}

.content-title h6 a:hover{
  text-decoration: underline;
}

.content-title h5{
  font-weight: light; 
}

.content-title h5 span{
  font-weight: bold;
}

.our{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
}

.our .right *{
  display: flex;
  flex-direction: row;
  font-size: 2.5rem;
  color: var(--downriver);
  cursor: pointer;
  padding: 0.1rem;
}


.fa-angle-left{
  opacity: 0.2;
}

/* .feed{
  display: flex;
  flex-direction: row;
  justify-content: space-evenly;
  position: relative;
  top: 10rem;
}

.feed .posts{
  background: white;
  border-radius: 0.5rem;
  margin: 1rem;
  height: 25rem;
  width: 25rem;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.feed .posts a{
  color: var(--downriver);
  font-weight: bold;
}

.feed .posts .top{
  padding: 1rem;
}

.feed .bottom{
  display: flex;
  flex-direction: row;
  justify-content: space-between;
  align-items: center;
  background: var(--chambray);
  padding: 1rem;
  border-radius: 0 0 0.5rem 0.5rem;
}

.feed .bottom *{
  color: var(--white);
  display: flex;
  flex-direction: row;
}

.feed .bottom i{
  padding: 0.5rem;
} */
.j-stacker-wrapper{
  display: flex;
  flex-direction: row;
  
}

body .juicer-feed .j-stacker>*{
  display: flex !important;
}

.j-twitter{
  border-radius: 0.5rem;
}

.juicer-feed.modern .j-message{
  padding: 1rem 2rem;
}

.juicer-feed .j-meta{
  background: var(--chambray);
	padding: 1.5rem;
  border-radius: 0 0 0.5rem 0.5rem;
}

img{
  width: 35rem !important;
}

.juicer-feed.modern li.feed-item.j-twitter .j-text{
  padding: 0 !important;
}
/* twitter-feed style ends */

/* navbar-botom style starts */
.navbar-bottom{
    background: var(--downriver);
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    height: 16rem;
    padding: 2.5rem;
    border-radius: 8rem 0 0 0;
}

.navbar-bottom *{
    display: flex;
    padding: 0.5rem;
    font-size: 1rem;
    align-items: center;
    align-items: flex-end;
    color: white;
}

.navbar-bottom a:hover, .navbar-bottom i:hover{
    color: var(--sundance);
}

.socials i{
    font-size: 1.5rem;
}
/* navbar-bottom style ends */

/* footer style starts */
footer *{
	background: var(--alto);
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	align-items: center;
	padding: 0.5rem;
}

footer span{
	padding: 0
}
/* footer style ends */
</style>

<!-- *** HTML STARTS *** -->
<body>
<!-- twitter-feed starts -->
<section class="twitter-feed" id="twitter-feed">
  <div class="content-title">
    <h6>
      <a href="#" target="_blank" rel="noopener noreferrer">@ASTechFDN</a>
    </h6>
    <div class="our">
      <div class="left">
        <h5>Our <span>Twitter</span> Feed</h5>
      </div>
      <div class="right">
        <ul>
          <li><i class='fas fa-angle-left'></i></li>
          <li><i class='fas fa-angle-right'></i></li>
        </ul>
      </div>
    </div>
  </div>
	<script src="https://assets.juicer.io/embed.js" type="text/javascript"></script>
	<link href="https://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" />
	<ul class="juicer-feed" data-feed-id="astechfdn" data-per="9" data-gutter="10">
		<h1 class="referral">
			<a href="https://www.juicer.io">Astech awards feed. Powered by Juicer.io</a>
		</h1>
	</ul>
</section>
<!-- twitter-feed ends -->

<!-- navabar-bottom starts -->
<section class="navbar-bottom">
  <div class="navbar">
    <ul>
      <li>
        <a href="#" target="_blank" rel="noopener noreferrer">About</a>
      </li>
      <li>
        <a href="#" target="_blank" rel="noopener noreferrer">Awards</a>
      </li>
      <li>
        <a href="#" target="_blank" rel="noopener noreferrer">Programs</a>
      </li>
      <li>
        <a href="#" target="_blank" rel="noopener noreferrer">Get Involved</a>
      </li>
      <li>
        <a href="#" target="_blank" rel="noopener noreferrer">Contact</a>
      </li>
    </ul>
  </div>
  <div class="socials">
    <ul>
      <li>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="fa-brands fa-facebook"></i>
        </a>
      </li>
      <li>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="fa-brands fa-twitter"></i>
        </a>
      </li>
      <li>
        <a href="#" target="_blank" rel="noopener noreferrer">
          <i class="fa-brands fa-linkedin"></i>
        </a>
      </li>
    </ul>
  </div>
</section>
<!-- navbar-bottom ends -->

<!-- footer starts -->
<footer id="footer">
  <section class="copyright">
    <div class="left">
      <ul>
        <li>
          Technology Alberta <span><i class="fa-regular fa-copyright"></i></span> 2022
        </li>
        <li>All rights reserved</li>
      </ul>
    </div>
    <div class="right">
      <ul>
        <li>Terms of Service</li>
        <li>Privacy Policy</li>
        <li>Sitemap</li>
      </ul>
    </div>
    
  </section>
</footer>
<!-- footer ends -->
</body>

</html>

