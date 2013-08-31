<!--<hr class="delicate">
-->

<footer class="floats-in bottomPage" role="contentinfo">
  <div>
    <section id="siteMap" class="floats-in">
      <div class="wrapperHead">
        <div class="siteMapListMenu">
          <h3>About</h3>
          <nav>
            <ul>
              <li><a href="http://akvo.org/about-us/">About us</a></li>
              <li><a href="http://akvo.org/about-us/team/">Team</a></li>
              <li><a href="http://akvo.org/about-us/working-at-akvo/">Working at Akvo</a></li>
              <li><a href="http://akvo.org/about-us/akvo-faq/">Akvo FAQ</a></li>
              <li class="mediaPress"><a href="http://akvo.org/about-us/media-and-press/">Media</a></li>
              <li><a href="http://akvo.org/about-us/annual-reports/">Annual reports</a></li>
              <li><a href="http://akvo.org/about-us/articles-of-incorporation/">Article of incorporation</a></li>
            </ul>
          </nav>
        </div>
        <div class="siteMapListMenu">
          <h3>Partners</h3>
          <nav>
            <ul>
              <li><a href="http://akvo.org/about-us/partners/#govGroup">Governments</a></li>
              <li><a href="http://akvo.org/about-us/partners/#compsGroup">Companies</a></li>
              <li><a href="http://akvo.org/about-us/partners/#founGroup">Foundations</a></li>
              <li><a href="http://akvo.org/about-us/partners/#intGovGroup">Inter-governmental</a></li>
              <li><a href="http://akvo.org/about-us/partners/#ngoGroup">NGOs</a></li>
              <li><a href="http://akvo.org/about-us/partners/#knowledgeGroup">Knowledge Institutes</a></li>
              <li><a href="http://rsr.akvo.org">RSR users</a></li>
            </ul>
          </nav>
          <h3>Developers</h3>
          <nav>
            <ul>
              <li><a href="http://www.github.com/akvo">Source code</a></li>
              <li><a href="http://akvo.org/help/akvo-policies-and-terms/api-code-of-conduct/">API code of conduct</a></li>
            </ul>
          </nav>
        </div>
        <div class="siteMapListMenu">
          <h3>Policies</h3>
          <nav>
            <ul>
              <li><a href="http://akvo.org/help/akvo-policies-and-terms/">Full list</a></li>
              <li><a href="http://akvo.org/help/akvo-policies-and-terms/akvo-terms-of-use/">Terms of use</a></li>
              <li><a href="http://akvo.org/help/akvo-policies-and-terms/akvo-privacy-policy/">Privacy</a></li>
              <li><a href="http://akvo.org/help/akvo-policies-and-terms/akvo-donation-policy/">Donations</a></li>
              <li><a href="http://akvo.org/help/akvo-policies-and-terms/">Partners</a></li>
              <li><a href="http://akvo.org/help/akvo-policies-and-terms/">User submitted content</a></li>
              <li><a href="http://akvo.org/help/akvo-policies-and-terms/akvo-licensing-and-copyrights/">Licensing and copyright</a></li>
            </ul>
          </nav>
        </div>
        <div class="siteMapListMenu">
          <h3>Contact us</h3>
          <nav>
            <ul>
              <li><a href="http://akvo.org/help/help-support/">Help + support</a></li>
              <li><a href="http://akvo.org/contact-info/ ">Contact info</a></li>
              <li><a href="http://akvo.org/wp-admin/">Administrator? Login</a></li>
              <li class="problem"><a href="mailto:help@akvo.org">Report a problem</a></li>
            </ul>
          </nav>
        </div>
        <div class="socialAkvo">
          <h1 class="backLinedGrey">Let's be friends</h1>
          <nav class="socialLinks">
            <ul class="floats-in">
              <li class="twitter"><a href="https://twitter.com/akvo/staff">akvo on twitter</a></li>
              <li class="github"><a href="https://github.com/akvo">akvo on github</a></li>
              <li class="youtube"><a href="http://www.youtube.com/user/Akvofoundation">akvo on youtube</a></li>
              <li class="flickr"><a href="http://www.flickr.com/search/?q=akvo">akvo on flickr</a></li>
              <li class="facebook"><a href="https://www.facebook.com/1Akvo">akvo on facebook</a></li>
              <li class="rss"><a href="http://akvo.org/blog/rss" >get latest akvo feed</a></li>
              <li class="email"><a href="mailto:partners@akvo.org" title="Email us at partners@akvo.org">email akvo</a></li>
              <li class="contactInfo"><a href="http://akvo.org/contact-info/" title="Contact Akvo" >Contact Akvo</a></li>
            </ul>
          </nav>
          <div class="newsLetter">
          <p>Receive our amazing news.</p>
            <?php $args = array(
				'prepend' => '', 
				'showname' => true,
				'nametxt' => '', 
				'nameholder' => 'Name...', 
				'emailtxt' => '',
				'emailholder' => 'Email Address...', 
				'showsubmit' => true, 
				'submittxt' => 'Submit', 
				'jsthanks' => true,
				'thankyou' => 'Thank you for subscribing to our mailing list'
				);
				echo smlsubform($args); ?>
          </div>
        </div>
      </div>
    </section>
    <section id="aboutAkvo">
      <div class="wrapper">
        <h1 class="backLinedGrey">A little more about Akvo.org</h1>
        <p>Akvo creates and runs open source internet and mobile services that make it easy to bring international development work online. We focus on project and programme dashboards, reporting, monitoring, evaluation and making data easier to share. Headquartered in Amsterdam, Akvo is a non-profit foundation that works with more than a thousand organisations around the world.</p>
      </div>
      <!--  <small>Copyright &copy; <?php echo date("Y"); echo " "; bloginfo('name'); ?></small>--> 
    </section>
    <p id="back-top"> <a href="#header"><span></span>Back to Top</a> </p>
  </div>
  <?php wp_footer(); ?>
</footer>
<!-- End /footer -->
</div>
<!-- end mainbody --> 
<!-- Piwik --> 
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://analytics.akvo.org/" : "http://analytics.akvo.org/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 2);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script>
<noscript>
<p><img src="http://analytics.akvo.org/piwik.php?idsite=2" style="border:0" alt="" /></p>
</noscript>
<!-- End Piwik Tracking Code -->
</body></html>