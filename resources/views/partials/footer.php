<?php get_template_part('views/components/site-search'); ?>
<footer class="footer">
    <div class="footer__container">
        <div class="footer__group">
            <div class="footer__details">
                <div class="footer__address">
                    <div class="footer__headline">Our Address:</div>
                    <div class="footer__wrapper">
                        <span>
                            The Gleneagles Hotel<br />
                            Auchterarder <br />
                            Scotland <br />
                            PH3 1NF
                        </span>
                        <div class="footer__button">
                            <a
                                href="#"
                                target=""
                                class="c-button c-button--type-quaternary c-button--colour-one"
                                >
                                Get Directions
                            </a>
                        </div>
                    </div>
                </div>
                <div class="footer__contact">
                    <div class="footer__headline">Contact Us:</div>
                    <ul>
                        <li>UK: +44 (0) 1764 662231</li>
                        <li>USA: 1 866 881 9525</li>
                        <li>contact@gleneagles.com</li>
                    </ul>
                </div>
                <div class="footer__newsletter--mobile">
                    <div class="footer__headline">
                        Sign Up For Our Newsletter
                    </div>
                    <form>
                        <input
                            type="text"
                            class="footer__newsletter--input"
                            name="name"
                            minlength="4"
                            size="10"
                            placeholder="Enter your email"
                        />
                        <button class="footer__newsletter--cta">Sign up</button>
                    </form>
                </div>
            </div>
            <div class="footer__links">
                <div class="footer__group--one">
                    <li>Glenmor Lodges</li>
                    <li>Shop</li>
                    <li>Gift Vouchers</li>
                    <li>FAQs</li>
                    <li>Careers</li>
                </div>
                <div class="footer__group--two">
                    <li>Site Map</li>
                    <li class="footer__link--mobile footer__link-container--dropdown">
                        <!-- <a href="#"></a> -->
                        <div class="footer__link--dropdown">Media & Trade</div>

                        <ul class=" footer__link--sub">
                            <li class="footer__link--sublink">
                                Travel Trade
                                <!-- <a href="#">Sub-1</a> -->
                            </li>
                            <li class="footer__link--sublink">
                                Media Centre
                                <!-- <a href="#">Sub-2</a> -->
                            </li>
                        </ul>
                    </li>
                    <li class="footer__link--mobile footer__link-container--dropdown">
                        <!-- <a href="#"></a> -->
                        <div class="footer__link--dropdown">Legal</div>

                        <ul class=" footer__link--sub">
                            <li class="footer__link--sublink">
                                Modern Slavery Statement
                                <!-- <a href="#">Sub-2</a> -->
                            </li>
                            <li class="footer__link--sublink">
                                Terms & Conditions
                                <!-- <a href="#">Sub-2</a> -->
                            </li>
                            <li class="footer__link--sublink">
                                Privacy Policy
                                <!-- <a href="#">Sub-2</a> -->
                            </li>
                        </ul>
                    </li>
                    <li class="footer__link--desktop">Travel Trade</li>
                    <li class="footer__link--desktop">Media Centre</li>
                    <li class="footer__link--desktop">
                        Modern Slavery Statement
                    </li>
                    <li class="footer__link--desktop">Terms & Conditions</li>
                    <li class="footer__link--desktop">Privacy Policy</li>
                </div>
            </div>
        </div>
        <div class="footer__social">
            <div class="footer__newsletter">
                <div class="footer__headline">Sign Up For Our Newsletter</div>
                <form>
                    <input
                        type="text"
                        class="footer__newsletter--input"
                        name="name"
                        minlength="4"
                        size="10"
                        placeholder="Enter your email"
                    />
                    <button type="Sign Up" class="footer__newsletter--cta">
                        Sign Up
                    </button>
                </form>
            </div>
            <div class="footer__socialnetworks">
                <ul>
                    <li class="footer__headline">Facebook</li>
                    <li class="footer__headline">Twitter</li>
                    <li class="footer__headline">Instagram</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer__logos">
        <!-- Logos here -->
        <div class="footer__group">
            <img
                src="<?php App\Utilities\the_asset('images/gleneagles-emblem-logo.svg'); ?>"
            />
            <img
                src="<?php App\Utilities\the_asset('images/ennismore-logo.svg'); ?>"
            />
        </div>
        <span>© 2019. All rights reserved.</span>
    </div>
    <div class="footer__corporate">
        <img
            src="<?php App\Utilities\the_asset('images/LeadingHotels-Grey.svg'); ?>"
        />
    </div>
</footer>

<script>
var acc = document.getElementsByClassName("footer__link--dropdown");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    this.parentElement.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
