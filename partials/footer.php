<footer class="cw-footer no-top-border">
        <div
          class="mailing-list-and-info w-full bg-grey-5 text-center flex flex-col border-b border-r border-l border-solid border-0 border-grey-30 rounded-b lg-flex-row lg-text-left items-center"
        >
          <div
            class="optional-text normal-case pb-2 lg-pb-0 text-cw-black lg-w-1/3"
          >
            <h6 class="h70">Join the LAF Community </h6>
            <p class="p40">Stay up-to-date with the work Living Afresh Foundation (LAF) is doing</p>
          </div>
          <div class="infosite-mailing-list-form">
            <form
              class="simple_form w-full mt-3"
              id="mailing-list-form"
              data-behavior="RateLimitedRecaptchaForm StoreUtmParams AnalyticsId"
              data-with-credentials="true"
              data-store-utm-params-model="mailing_list_subscriber"
              action=""
              accept-charset="UTF-8"
              data-remote="true"
              method="post"
            >
              <div class="name-email-wrapper md-flex">
                <div
                  class="mailing-input-names md-flex md-justify-center max-w-xs mx-auto"
                >
                  <div class="mailing-input-wrapper name first md-flex-1">
                    <label class="for-screen-readers-only" for="user_name"
                      >First Name</label
                    ><input
                      class="string required border-b-0 md-border-b md-border-r-0 rounded-none"
                      required="required"
                      data-parsley-error-message="Please provide your first name"
                      aria-required="true"
                      placeholder="First name"
                      maxlength="255"
                      size="255"
                      type="text"
                      name="user[name]"
                      id="user_name"
                    />
                  </div>
                  <div
                    class="mailing-input-wrapper surname mt-0 md-mt-0 md-flex-1"
                  >
                    <label class="for-screen-readers-only" for="user_surname"
                      >Last Name</label
                    ><input
                      class="string required rounded-none"
                      required="required"
                      data-parsley-error-message="Please provide your last name"
                      aria-required="true"
                      placeholder="Last name"
                      maxlength="255"
                      size="255"
                      type="text"
                      name="user[surname]"
                      id="user_surname"
                    />
                  </div>
                </div>
                <div
                  class="mailing-input-wrapper email mt-1 max-w-xs mx-auto second"
                >
                  <label class="for-screen-readers-only" for="user_email"
                    >Email</label
                  ><input
                    class="string email required rounded-none"
                    required="required"
                    data-parsley-email-tld=""
                    data-parsley-error-message="Please provide a valid email address"
                    aria-required="true"
                    placeholder="Email"
                    type="email"
                    value=""
                    name="user[email]"
                    id="user_email"
                  />
                </div>
                <button
                  name="button"
                  type="submit"
                  class="button button button--expand mailing-list-sign-up-button max-w-xs mx-auto mt-1"
                >
                  Subscribe
                </button>
              </div>
              <input
                value="us"
                autocomplete="off"
                type="hidden"
                name="user[country]"
                id="user_country"
              /><input
                name="mailing_list_subscriber[main_list]"
                value="true"
                autocomplete="off"
                type="hidden"
                id="user_main_list"
              /><input
                value="footer"
                autocomplete="off"
                type="hidden"
                name="user[place]"
                id="user_place"
              /><input
                name="offer"
                value="newsletter"
                id="offer"
                autocomplete="off"
                type="hidden"
              /><input
                name="thank_you_flash_message"
                autocomplete="off"
                type="hidden"
                id="user_thank_you_flash_message"
              /><input
                name="thank_you_page_path"
                value="/mailing-list-subscribers/thank-you"
                autocomplete="off"
                type="hidden"
                id="user_thank_you_page_path"
              /><input
                name="use_inline_thank_you_block"
                autocomplete="off"
                type="hidden"
                id="user_use_inline_thank_you_block"
              /><input
                name="send_default_welcome_emails"
                value="true"
                autocomplete="off"
                type="hidden"
                id="user_send_default_welcome_emails"
              /><input
                name="custom_welcome_journey_id"
                autocomplete="off"
                type="hidden"
                id="user_custom_welcome_journey_id"
              /><input
                name="offer_journey_id"
                autocomplete="off"
                type="hidden"
                id="user_offer_journey_id"
              /><input
                name="analytics_id"
                data-analytics-id="true"
                autocomplete="off"
                type="hidden"
                id="user_analytics_id"
              />
              <div data-component="RecaptchaBadge" data-props="{}"></div>
            </form>
            <div
              data-component="RecaptchaText"
              data-props='{"classes":"mt-1"}'
            ></div>
          </div>
        </div>
        <div
          class="cw-footer-top-row border-b border-solid border-0 border-grey-30 my-3 us-toggle"
        >
          <ul class="mt-0 mb-4 w-1/2 md-w-1/4">
            <li class="cw-footer-header">Get to know us</li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="about.php#board">Our Board of Trustees</a></li>
            <li><a href="">Careers</a></li>
          </ul>
          <ul class="mt-0 mb-4 w-1/2 md-w-1/4">
            <li class="cw-footer-header">Connect with us</li>
            <li><a href="contact.php">Contact Us</a></li>
            <li>
              <a href="#"
                >Help center</a
              >
            </li>
            <li><a href="#">Recommend a Beneficiary</a></li>
            
          </ul>
          <ul class="mt-0 mb-2 w-1/2 md-w-1/4">
            <li class="cw-footer-header">Get Involved</li>
            <li><a href="#">Volunteer</a></li>
            <li><a href="#">Partners with us</a></li>
            <li><a href="#">Sponsor our event</a></li>
         
          </ul>
          <ul class="mt-0 mb-4 w-1/2 md-w-1/4">
            <li class="cw-footer-header">Donate</li>
            <li><a href="#">Donate Online</a></li>
            <li>
              <a href="#">Cheques & Transfers</a>
            </li>
            <li>
              <a href="#">Give in Someone&#39;s Honor</a>
            </li>
          </ul>
        </div>
        <div
          class="row flex flex-col lg-flex-row mt-0 footer-social-and-country-wrapper"
        >
          <div class="w-full footer-social-wrapper lg-w-3/4">
            <div class="row">
              <ul
                class="mx-auto justify-center lg-justify-start flex footer-social-wrapper"
              >
                <li class="cw-footer-social-twitter mr-2">
                  <a class="text-base" href="https://twitter.com/livingafreshFDN"
                    ><span class="cw-icon-twitter icn"
                      ><span class="for-screen-readers-only"
                        >Twitter</span
                      ></span
                    ></a
                  >
                </li>
                <li class="cw-footer-social-facebook mr-2">
                  <a
                    class="text-base"
                    href="https://www.facebook.com/livingafreshFDN"
                    ><span class="cw-icon-facebook icn"
                      ><span class="for-screen-readers-only"
                        >Facebook</span
                      ></span
                    ></a
                  >
                </li>
                <li class="cw-footer-social-instagram mr-2">
                  <a
                    class="text-base"
                    href="www.instagram.com/livingafreshFDN"
                    ><span class="cw-icon-instagram icn"
                      ><span class="for-screen-readers-only"
                        >Instagram</span
                      ></span
                    ></a
                  >
                </li>
                <li class="cw-footer-social-snapchat mr-2">
                  <a
                    class="text-base"
                    href="www.snapchat.com/add/livingafreshFDN"
                    ><span class="cw-icon-snapchat icn"
                      ><span class="for-screen-readers-only"
                        >Snapchat</span
                      ></span
                    ></a
                  >
                </li>
                <li class="cw-footer-social-youtube mr-2">
                  <a
                    class="text-base"
                    href="www.youtube.com/user/livingafreshFDN"
                    ><span class="cw-icon-youtube icn"
                      ><span class="for-screen-readers-only"
                        >Youtube</span
                      ></span
                    ></a
                  >
                </li>
                <li class="cw-footer-social-linkedin">
                  <a href="www.linkedin.com/company/livingafreshFDN"
                    ><span class="cw-icon-linkedin icn"
                      ><span class="for-screen-readers-only"
                        >Linkedin</span
                      ></span
                    ></a
                  >
                </li>
              </ul>
            </div>
            <div class="row mt-1">
              <ul
                class="my-0 mt-0 flex justify-center lg-justify-start flex-col md-flex-row text-center cw-footer-secondary-links"
              >
                <li class="pl-0"><a href="privacy">Privacy policy</a></li>
                <li class="px-1 hidden md-inline-block footer-last-bullet">
                  •
                </li>
                <li class="footer-email-signup-link">
                  <a class="cw-footer-emph" href="mailing_list_subscribers/new"
                    >Get our emails</a
                  >
                </li>
              </ul>
            </div>
          </div>
          <div
            class="mx-auto mt-2 lg-mt-0 w-full max-w-xs footer-country-container lg-w-1/4"
          >
            
          </div>
        </div>
        <div
          class="row text-center lg-text-left mt-2 flex flex-col lg-flex-row lg-justify-between items-center"
        >
          <div class="lg-mt-0">
            <p
              class="cw-footer-fine-print h80 text-grey-50 normal-case us-toggle"
            >
              Living Afresh Foundation is a registered non-profit organization with the Corporate Affairs Commission of Nigeria.
            </p>
            <p
              class="cw-footer-fine-print h80 text-grey-50 normal-case us-toggle"
            >
              100% of public donations go directly to fund interventions.
            </p>
          </div>
          
        </div>
        <div class="row text-center lg-text-left mt-2">
          <p
            class="cw-footer-fine-print h80 mt-1 text-grey-50 normal-case us-toggle"
          >
            <span
              >&copy; 2023 | Living Afresh Foundation, Block 5, No. 2, Bria Street, Abuja, FCT, Nigeria | RC 444151656. <br/>Our mission is build a network of like-minded individuals and organizations dedicated to helping LAF beneficiaries alleviate the multi-facetted challenges associated with losing a spouse. </span
            >
          </p>
        </div>
      </footer>
      <script src="cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
      <script src="cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
      <script
        src="vite/assets/application-e8f7a172.js"
        crossorigin="anonymous"
        type="module"
      ></script>
      <link
        rel="modulepreload"
        href="vite/assets/mobx.esm-a9f82a4a.js"
        as="script"
        crossorigin="anonymous"
      /><link
        rel="stylesheet"
        href="vite/assets/application-14b33728.css"
        media="screen"
      />
      <script
        async=""
        src="../26d5c5b95593436fb88ae7c78d39f4f2.js.ubembed.com/index.html"
      ></script>
  

    </div>