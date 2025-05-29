<!-- Footer -->
<footer class="footer" id="contact">
    <div class="container">
        <div class="footer-wrap">
            <div class="footer-flex">
                <div class="col-md-4 first-col">
                    <h5>Follow Us</h5>
                    <div class="social-icons">
                        <a href="#">
                            <div class="icon"><img src="images/twiiter-icon.png" alt=""></div>
                        </a>
                        <a href="#">
                            <div class="icon"><img src="images/facebook-icon.png" alt=""></div>
                        </a>
                        <a href="#">
                            <div class="icon"><img src="images/instagram-icon.png" alt=""></div>
                        </a>
                        <a href="#">
                            <div class="icon"><img src="images/youtube-icon.png" alt=""></div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 second-col">
                    <div class="logo">
                        <a href="/"><img src="images/footer-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-md-4 third-col">
                    <div class="number-wrap">
                        <div class="icon">
                            <img src="images/phone-icon.png" alt="">
                        </div>
                        <a href="tel:0370-5605150">0370-5605150</a>&nbsp;&nbsp;<a href="tel:0306-5888895">0306-5888895</a>
                    </div>
                    <div class="address-wrap">
                        <div class="icon">
                            <img src="images/map-icon.png" alt="">
                        </div>
                        <a href="#">Block F, Commercial Area, Sector H-13, Opposite NUST University, Islamabad, Pakistan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copy-right">
        <p>Copyright ©2025 Aquaglen. All rights reserved.</p>
    </div>
</footer>

<script>
	document.addEventListener("DOMContentLoaded", function () {
	  const hamburger = document.querySelector('.hamburger');
	  const navLinks = document.querySelector('.nav-links');
const navLinksitem = document.querySelector('.nav-links a');
	  if (hamburger && navLinks) {
		hamburger.addEventListener('click', function () {
		  navLinks.classList.toggle('show');

		  // Toggle icon text
		  if (hamburger.textContent.trim() === '☰') {
			hamburger.textContent = '✖'; // Close icon
		  } else {
			hamburger.textContent = '☰'; // Hamburger icon
		  }
		});
	  }
  		navLinksitem.addEventListener('click', function () {
		  navLinks.classList.toggle('show');

		  // Toggle icon text
		  if (hamburger.textContent.trim() === '☰') {
			hamburger.textContent = '✖'; // Close icon
		  } else {
			hamburger.textContent = '☰'; // Hamburger icon
		  }
		});
	});
	document.addEventListener("DOMContentLoaded", function () {
	  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
		anchor.addEventListener("click", function (e) {
		  const targetId = this.getAttribute("href").slice(1);
		  const targetEl = document.getElementById(targetId);

		  if (targetEl) {
			e.preventDefault();
			targetEl.scrollIntoView({ behavior: "smooth" });
		  }
		});
	  });
	});

</script>