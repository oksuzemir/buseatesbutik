</main>
<div class="search-overlay">
	<div class="search-overlay-close"></div>
	<div class="search-form">
		<form method="get" action="http://localhost/buseatesbutik/magaza/">
			<input type="text" placeholder="Arayın..." name="s" />
			<button type="submit" role="button">
				<i class="fa fa-search"></i>
			</button>
		</form>
	</div>
</div>
<footer>
	</div>
	<div class="footer-mid">
		<div class="konten">
			<div class="footer-list">
				<div class="footer-title">Bize Ulaşın</div>
				<ul>
					<li><a href="">Anasayfa</a></li>
					<li><a href="">Hakkımızda</a></li>
					<li><a href="">İletişim</a></li>
				</ul>
			</div>
			<div class="footer-list">
				<div class="footer-title">Ürünlerimiz</div>
				<ul>
					<li><a href="">Anasayfa</a></li>
					<li><a href="">Hakkımızda</a></li>
					<li><a href="">İletişim</a></li>
				</ul>
			</div>
			<div class="footer-list">
				<div class="footer-title">Site Haritası</div>
				<ul>
					<li><a href="">Anasayfa</a></li>
					<li><a href="">Hakkımızda</a></li>
					<li><a href="">İletişim</a></li>
				</ul>
			</div>
			<div class="footer-list">
				<div class="footer-title">Site Haritası</div>
				<ul>
					<li><a href="">Anasayfa</a></li>
					<li><a href="">Hakkımızda</a></li>
					<li><a href="">İletişim</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="konten">
			<div class="footer-copy">
				© 2022 Buse Ateş Butik || <a href="https://websitesimark.com" rel="noreferrer" target="_blank"> Markon Bilişim</a>
				
			</div>
			<div class="footer-socials">
				<ul>
					<li><a href="" rel="noreferrer" target="_blank"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="" rel="noreferrer" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<li><a href="" rel="noreferrer" target="_blank"><i class="fa fa-youtube"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
</footer>
<script defer>
	/* When the user scrolls down, hide the navbar. When the user scrolls up, show the navbar */
	var prevScrollpos = window.pageYOffset;
	if (window.innerWidth > 1400) {
		window.onscroll = function() {
			var currentScrollPos = window.pageYOffset;
			if (prevScrollpos > currentScrollPos) {
				document.getElementById("bot-nav").style.top = "115px";
			} else {
				document.getElementById("bot-nav").style.top = "-50px";
			}
			prevScrollpos = currentScrollPos;
		}

	}
	var searchOverlay = document.querySelector(".search-overlay");
	var searchBtn = document.querySelector(".search-button");
	var searchClose = document.querySelector(".search-overlay-close");

	searchBtn.addEventListener(
		"click",
		function(ev) {
			searchOverlay.classList.add("search-overlay-active");
		},
		false
	);

	searchClose.addEventListener(
		"click",
		function(ev) {
			searchOverlay.classList.remove("search-overlay-active");
		},
		false
	);

	if (window.innerWidth < 1400) {
		const list = document.querySelectorAll(".menu-item-has-children");
		for (const el of list) {
			var newEl = '<i class="fa fa-chevron-right"></i>';
			el.insertAdjacentHTML(
				"beforeend",
				'<i class="fa fa-chevron-right"></i>'
			);
		}
		(function() {
			var menuElems = document.querySelectorAll(
				".menu-item-has-children .fa-chevron-right"
			);
			menuElems.forEach(function(elem) {
				elem.addEventListener(
					"click",
					function() {
						menuElems.forEach(function(e) {
							e.previousElementSibling.classList.toggle("sub-menu-active");
						});
						this.classList.toggle('rotate-i')
					},
					false
				);
			});
		})();

		var sidebarClose = document.getElementsByClassName('sidebar-close')[0].getElementsByTagName('span')[0];
		var sidebarMenu = document.getElementsByClassName('bot-nav')[0];
		var burgerMenu = document.getElementById('burger-menu');
		var sidebarOverlay = document.getElementsByClassName('sidebar-overlay')[0];



		burgerMenu.addEventListener("click", function() {
			sidebarMenu.classList.add("sidebar-active")
			sidebarOverlay.classList.add("sidebar-overlay-active")

		});
		sidebarClose.addEventListener("click", function() {
			sidebarMenu.classList.remove("sidebar-active")
			sidebarOverlay.classList.remove("sidebar-overlay-active")

		});
		sidebarOverlay.addEventListener("click", function() {
			sidebarMenu.classList.remove("sidebar-active")
			sidebarOverlay.classList.remove("sidebar-overlay-active")

		});


	}
</script>
<script>
	let slideIndex = 1;
	showSlides(slideIndex);

	// Next/previous controls
	function plusSlides(n) {
		showSlides(slideIndex += n);
	}

	// Thumbnail image controls
	function currentSlide(n) {
		showSlides(slideIndex = n);
	}

	function showSlides(n) {
		let i;
		let slides = document.getElementsByClassName("mySlides");
		let dots = document.getElementsByClassName("dot");
		if (n > slides.length) {
			slideIndex = 1
		}
		if (n < 1) {
			slideIndex = slides.length
		}
		for (i = 0; i < slides.length; i++) {
			slides[i].style.display = "none";
		}
		for (i = 0; i < dots.length; i++) {
			dots[i].className = dots[i].className.replace(" active", "");
		}
		slides[slideIndex - 1].style.display = "block";
		dots[slideIndex - 1].className += " active";
	}
</script>

<!-- Lazy img -->
<script defer>
  const imgObserver = new IntersectionObserver((entries, self) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        lazyLoad(entry.target);
        self.unobserve(entry.target);
      }
    });
  });
  document.querySelectorAll('.lazy-picture').forEach((picture) => {
    imgObserver.observe(picture);
  });
  const lazyLoad = (picture) => {
    const img = picture.querySelector('img');
    const sources = picture.querySelectorAll('source');

    sources.forEach((source) => {
      source.srcset = source.dataset.srcset;
      source.removeAttribute('data-srcset');
    });
    img.src = img.dataset.src;
    img.removeAttribute('data-src');
  }
</script>

<script defer>
  document.addEventListener("DOMContentLoaded", function() {
    var lazyloadImages;

    if ("IntersectionObserver" in window) {
      lazyloadImages = document.querySelectorAll(".lazy");
      var imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            var image = entry.target;
            image.classList.remove("lazy");
            imageObserver.unobserve(image);
          }
        });
      });

      lazyloadImages.forEach(function(image) {
        imageObserver.observe(image);
      });
    } else {
      var lazyloadThrottleTimeout;
      lazyloadImages = document.querySelectorAll(".lazy");

      function lazyload() {
        if (lazyloadThrottleTimeout) {
          clearTimeout(lazyloadThrottleTimeout);
        }

        lazyloadThrottleTimeout = setTimeout(function() {
          var scrollTop = window.pageYOffset;
          lazyloadImages.forEach(function(img) {
            if (img.offsetTop < (window.innerHeight + scrollTop)) {
              img.src = img.dataset.src;
              img.classList.remove('lazy');
            }
          });
          if (lazyloadImages.length == 0) {
            document.removeEventListener("scroll", lazyload);
            window.removeEventListener("resize", lazyload);
            window.removeEventListener("orientationChange", lazyload);
          }
        }, 20);
      }

      document.addEventListener("scroll", lazyload);
      window.addEventListener("resize", lazyload);
      window.addEventListener("orientationChange", lazyload);
    }
  })
</script>
<?php wp_footer(); ?>
</body>

</html>