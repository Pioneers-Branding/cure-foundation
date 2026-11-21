<?php
/* Shared footer. Generated. */
?>
<footer class="site-footer" id="colophon">
<aside aria-label="Footer" class="widget-area" role="complementary">
<div class="container responsive">
<div class="footer-widget-wrap">
<section class="widget widget_nav_menu" id="nav_menu-3"><h3 class="widget-title">Quick Links</h3><div class="menu-footer-links1-container"><ul class="menu" id="menu-footer-links1"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-19738" id="menu-item-19738"><a href="/">Cure Foundation</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19739" id="menu-item-19739"><a href="/about-us.php">About Us</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19741" id="menu-item-19741"><a href="/our-history.php">Our History</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19740" id="menu-item-19740"><a href="/contact-us.php">Contact Us</a></li>
</ul></div></section><section class="widget widget_nav_menu" id="nav_menu-4"><h3 class="widget-title">Cure Events</h3><div class="menu-footer-links2-container"><ul class="menu" id="menu-footer-links2"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19742" id="menu-item-19742"><a href="/for-children.php">For Children</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19743" id="menu-item-19743"><a href="/for-women.php">For Women</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19744" id="menu-item-19744"><a href="/i-am-a-aurvivor.php">I Am A Survivor</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19745" id="menu-item-19745"><a href="/world-cancer-day.php">World Cancer Day</a></li>
</ul></div></section><section class="widget widget_nav_menu" id="nav_menu-6"><h3 class="widget-title">Cure Events</h3><div class="menu-footer-links3-container"><ul class="menu" id="menu-footer-links3"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19746" id="menu-item-19746"><a href="/anti-tobacco-programs.php">Anti Tobacco Programs</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19747" id="menu-item-19747"><a href="/awareness-events.php">Awareness Events</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19748" id="menu-item-19748"><a href="/awareness-program.php">Awareness Program</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19749" id="menu-item-19749"><a href="/videos.php">Awareness talks by Doctor</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-19750" id="menu-item-19750"><a href="/cancer-crusaders-golf-cup.php">Cancer Crusaders Golf Cup</a></li>
</ul></div></section> </div>
</div>
</aside><!-- .widget-area -->
<div class="site-info has-navigation">
<div class="container responsive">
<div class="site-info-wrap">
<div class="copyright">



        ©2011-2021 Cure Foundation India. All rights reserved.



    </div>
<nav aria-label="Legal" class="footer-navigation"><ul class="footer-menu">
<li><a href="/privacy-policy.php">Privacy Policy</a></li>
<li><a href="/terms-of-use.php">Terms of Use</a></li>
<li><a href="/medical-disclaimer.php">Medical Disclaimer</a></li>
</ul></nav>
<div class="cure-legal-notes">
<p><strong>Medical Disclaimer:</strong> The information on this website is for general awareness only and is not a substitute for professional medical advice, diagnosis, or treatment. Please consult a qualified doctor.</p>
<p><em>AI-Generated Content Disclaimer:</em> Certain images, illustrations, or textual content on this website may be generated or assisted by artificial intelligence (AI). Such content is intended for informational and illustrative purposes only. AI-generated content is not intended to misrepresent actual patients, medical professionals, clinical outcomes, or healthcare services.</p>
</div>
</div>
</div>
</div><!-- .site-info -->
</footer><!-- #colophon -->
<style>
.site-footer .site-info.has-navigation .site-info-wrap{flex-direction:column}
.site-footer .cure-legal-notes{max-width:960px;margin:16px auto 0;text-align:center;font-size:13px;line-height:1.6;color:#3a3a3a}
#respond .comment-form .cure-consent{order:3;margin:0 0 24px}
.cure-consent input[type=checkbox]{-webkit-appearance:checkbox;appearance:auto;display:inline-block;position:static;opacity:1;width:16px;height:16px;min-width:16px;padding:0;border:0;box-shadow:none}
.site-footer .cure-legal-notes p{margin:0 0 8px}
.cure-consent{margin:16px 0;padding:12px 14px;border:1px solid rgba(0,0,0,.15);border-radius:4px;font-size:14px;line-height:1.5;color:#333;background:#fafafa;clear:both}
.cure-consent p{margin:0 0 8px}
.cure-consent label{display:flex;gap:8px;align-items:flex-start;font-weight:400;margin:0 0 6px;cursor:pointer}
.cure-consent input[type=checkbox]{margin-top:4px;flex:0 0 auto;width:auto}
.cure-consent .cure-consent-error{display:none;color:#b00020;font-weight:600;margin:6px 0 0}
.cure-consent.is-invalid .cure-consent-error{display:block}
</style>
<script>
/* DPDP: block any form that carries a consent box until it is ticked. */
(function () {
  document.addEventListener('submit', function (ev) {
    var form = ev.target;
    if (!form || !form.querySelector) { return; }
    var box = form.querySelector('input[name="cure_dpdp_consent"]');
    if (!box) { return; }
    var wrap = box.closest('.cure-consent');
    if (!box.checked) {
      ev.preventDefault();
      ev.stopImmediatePropagation();
      if (wrap) { wrap.classList.add('is-invalid'); }
      box.focus();
    } else if (wrap) {
      wrap.classList.remove('is-invalid');
    }
  }, true);
  /* Give forms submit through their own click handler, so guard the button too. */
  document.addEventListener('click', function (ev) {
    var btn = ev.target && ev.target.closest && ev.target.closest('input[type=submit],button[type=submit],button:not([type])');
    if (!btn || !btn.form) { return; }
    var box = btn.form.querySelector('input[name="cure_dpdp_consent"]');
    if (box && !box.checked) {
      ev.preventDefault();
      ev.stopImmediatePropagation();
      var wrap = box.closest('.cure-consent');
      if (wrap) { wrap.classList.add('is-invalid'); }
      box.focus();
    }
  }, true);
})();
</script>