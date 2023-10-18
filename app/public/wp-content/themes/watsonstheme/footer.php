	<!-- Footer -->
	<footer class="container-footer" id="footer">
		<div class="item-3">
			<h4>Site Map</h4>
			<p><i class="fas fa-arrow-up"></i><a href="#">Top</a></p>
            <p><i class="fas fa-file-alt fa-fw"></i><a href="about/">About</a></p>
			<p><i class="fas fa-file-alt fa-fw"></i><a href="services/">Services</a></p>
            <p><i class="fas fa-file-alt fa-fw"></i><a href="fees/">Fees</a></p>
            <p><i class="fas fa-file-alt fa-fw"></i><a href="estimated-quote/">Get a quote</a></p>
            <p><i class="fas fa-file-alt fa-fw"></i><a href="contact/">Contact</a></p>
		
		</div>
		<div class="item-3">
			<h4>Watson's Detective Agency</h4>
			<p>Something troubling you? Trust the world's second leading detective to sort it out.</p>
		</div>
		<div class="item-3">
			<h4>Contact</h4>
			<p><i class="fas fa-envelope fa-fw"></i><a href="mailto:watsonsdetectiveagency@gmail.com"> Email</a></p>
            <p><i class="fas fa-phone-square-alt fa-fw"></i><a href="tel:01899597648"> Phone Number: 01899597648</a></p>
			<p><i class="fab fa-github-square fa-fw"></i><a href="https://github.com/laszloluque/Watson-s" target="_blank"> GitHub Project</a></p>
			<p><i class="fab fa-linkedin fa-fw"></i><a href="https://www.linkedin.com/in/dr.watson/" target="_blank"> Linkedin</a></p>
            <p><i class="fas fa-user-shield fa-fw"></i><a href="privacy.html"> Privacy</a>
		</div>
	</footer>

    <?php
        wp_footer();
    ?>

	<!--Script for pop-up message from Osano-->
    <script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
    <script>
    window.cookieconsent.initialise({
      "palette": {
        "popup": {
          "background": "#252e39"
        },
        "button": {
          "background": "#14a7d0"
        }
      },
      "theme": "classic",
      "position": "bottom-right",
      "content": {
        "href": "privacy.html"
      }
    });
    </script>
<!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8B1C21TP39"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-8B1C21TP39');

</script>
</body>
</html>