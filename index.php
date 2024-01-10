<?php
   $pageTitle = 'Home';
  include ('partials/header.php');
?>
  <style>
    /* Additional styles for the circle and arrow */
    .blink-arrow-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      animation: blinkArrow 1s infinite alternate;
      margin-top: 10rem;
    }
  
    .blink-arrow-circle {
      width: 50px;
      height: 50px;
      border-radius: 50%;
      border: 2px solid #f1f3f6; /* Change the color as needed */
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 1500;
    }
  
    .down-arrow {
      width: 0;
      height: 0;
      border-left: 10px solid transparent;
      border-right: 10px solid transparent;
      border-top: 15px solid #06af3e; /* Match the border color of the circle */
    }
  
    /* Animation for the blinking effect */
    @keyframes blinkArrow {
      0% {
        opacity: 1;
      }
      100% {
        opacity: 0.5;
      }
    }

    /* Styles for the modal container */
    #donate-modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 500px;
      min-height: 560px;
      background-color: #f1f9fb;
      padding: 20px;
      box-sizing: border-box;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
      z-index: 999;
      text-align: center;
    }

    
    /* Styles for the modal container */
    #volunteer-modal {
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 500px;
      min-height: 560px;
      background-color: #f1f9fb;
      padding: 20px;
      box-sizing: border-box;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
      z-index: 999;
      text-align: center;
    }

     /* Styles for the modal container */
     #contact-modal {
      display: none;
      position: fixed;
      top: 55%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 650px;
      min-height: 550px;
      background-color: #f1f9fb;
      padding: 20px;
      box-sizing: border-box;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
      z-index: 999;
      text-align: center;
    }


    /* Styles for the overlay background */
    #overlay {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.9);
      z-index: 998;
    }
    /* Styles for the overlay background */
    #overlay2 {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.9);
      z-index: 998;
    }

     /* Styles for the overlay background */
     #overlay3 {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.9);
      z-index: 998;
    }


    /* Styles for the close button */
    #closeBtn {
      position: absolute;
      top: 2;
      right: 20px;
      font-size: 20px;
      cursor: pointer;
      color: #06af3e;
      background: none;
      border: none;
      outline: none;
    }
  </style>
   
  </head>


  <body class="infosite-page-homepage cw-infosit-homepage">
    
   <?php include ('partials/nav.php'); ?>

    <div class="container p-0 text-center mb-3">
        
        <div class="hero--video-donate-form">
          <div class="hero--video-container" data-behavior="DonateVideoHero">
            <div class="absolute z-20 w-full h-full opacity-25 hero--video-overlay"></div>
            <div class="z-10 hero--video-wrapper">
              <video
                autoplay="autoplay"
                loop="loop"
                muted="muted"
                poster=""
                src="vite/assets/laf-hero.mp4"
              >
              </video>
            </div>
          </div>
          <div class="row lg-flex lg-items-center relative z-30" style="margin-top: 1rem;">
            <div class="hero--text" style="border: solid 1px #fff; padding: 2rem; border-radius: 5px; ">
              <h1 class="hero--header balance-text mx-auto font-heading h15 lg-text-3xl">
              Welcome to Living Afresh Foundation
              </h1>
              <p class="hero--description balance-text">
                Uplifting the lives of individuals who have lost a spouse              </p>
                <div class="hero-btn">
                  <ul style="list-style: none; padding: 0; margin: 1rem 0;"> <!-- Add some styling to remove default list styles -->
                    <li class="mobile-donate button-links" style="display: inline; margin-right: 20px;"> <!-- Add display: inline; and margin-right to make links inline -->
                      <a href="#" id="volunteerBtn" style="text-decoration: none; background-color:  #e9e0e0; padding: 4px 2rem; font-weight: 400; color: #191a19; border-radius: 3px; box-shadow: 3px 3px 2px #f0f0">Volunteer</a>
                    </li>
                    <li class="mobile-donate button-links" style="display: inline;"> <!-- Add display: inline; to make links inline -->
                      <a href="#" id="donateBtn" style="text-decoration: none; background-color:  #e9e0e0;padding: 4px 2rem; font-weight: 400; color: #191a19; border-radius: 3px; box-shadow: 3px 3px 2px #f0f0">Donate</a>
                    </li>
                  </ul>
                </div>   
                            
            </div> 
            <div class="blink-arrow-container">
              <div class="blink-arrow-circle">
                <div class="down-arrow"></div>
              </div>
            </div>
          </div>
        
          <!-- Donate Modal Container -->
            <div id="overlay"></div>
            <div id="donate-modal">
              <!-- Close button -->
              <button id="closeBtn" onclick="closeModal()">X</button>

              <!-- Add your modal content here -->
              <h2 class="mt-2 font-heading h35 my-2 lg-mt-2-5 text-center">Donate</h2>
              <p>Reach out and touch somebody’s life today. Give somebody hope and comfort by donating to the foundation</p>
              <div
                class="featured-spring w-full md-mr-2 p-2 rounded relative mt-2 bg-cw-white border border-solid border-grey-30"
              >
                <div class="md-p-1">
                  <h2 class="h50 leading-tight">
                    Transfers & Cheques
                    <hr>
                  </h2>
                  <p class="p-2">
                   <b> Write us a cheque:</b> make all cheques payable to <b>Living Afresh Foundation</b>
                   
                  </p>
                  <hr>
                  <p class="p-2">Bank Details for Transfers: <br/><br/>
                  
                      <b>Bank Name:</b> Signature Bank <br/>
                      <b>Account Number: </b> 0123456789<br/>
                      <b>Account Name: </b>Living Afresh Foundation<br/>
                      <b>Sort/Swift Code: </b> 076191257<br/>

                  </p>
                  <hr>
                  <p class="pt-2">
                  <a
                    class="button button--outline-black"
                    href="#"
                    >Give online</a
                  >
                </p>
                </div>
              </div>
            </div>

          <!-- Volunteer Modal Container -->
          <div id="overlay2"></div>
            <div id="volunteer-modal">
                <!-- Close button -->
                <button id="closeBtn" onclick="closeModal()">X</button>

                <!-- Add your modal content here -->
                <h2 class="mt-2 font-heading h35 my-2 lg-mt-2-5 text-center">Volunteer Sign-Up</h2>
                <p>Make a meaningful impact in someone's life by volunteering for the Living Afresh Foundation programs. Your time and dedication can bring hope and comfort to those in need.</p>
                <div class="featured-spring w-full md-mr-2 p-2 rounded relative mt-2 bg-cw-white border border-solid border-grey-30">
                    <div class="md-p-1">
                        <p class="p-2">
                            <b>Kindly complete the form below</b>
                        </p>
                        <hr>

                        <!-- Volunteer Sign-up Form -->
                        <form action="process_volunteer.php" method="post">
                            <input type="text" id="volunteer_name" name="volunteer_name" required placeholder="Full Name" style="margin-bottom: 10px;">
                            <input type="email" id="volunteer_email" name="volunteer_email" required placeholder="Email" style="margin-bottom: 10px;">
                            <input type="text" id="volunteer_phone" name="volunteer_phone" required placeholder="Mobile Number" style="margin-bottom: 10px;">
                            <select id="volunteer_location" name="volunteer_location" required>
                                <option value="" disabled selected>State of Recidence</option>
                                <option value="Abia">Abia</option>
                                <option value="Adamawa">Adamawa</option>
                                <option value="Akwa Ibom">Akwa Ibom</option>
                                <option value="Anambra">Anambra</option>
                                <option value="Bauchi">Bauchi</option>
                                <option value="Bayelsa">Bayelsa</option>
                                <option value="Benue">Benue</option>
                                <option value="Borno">Borno</option>
                                <option value="Cross River">Cross River</option>
                                <option value="Delta">Delta</option>
                                <option value="Ebonyi">Ebonyi</option>
                                <option value="Edo">Edo</option>
                                <option value="Ekiti">Ekiti</option>
                                <option value="Enugu">Enugu</option>
                                <option value="Gombe">Gombe</option>
                                <option value="Imo">Imo</option>
                                <option value="Jigawa">Jigawa</option>
                                <option value="Kaduna">Kaduna</option>
                                <option value="Kano">Kano</option>
                                <option value="Katsina">Katsina</option>
                                <option value="Kebbi">Kebbi</option>
                                <option value="Kogi">Kogi</option>
                                <option value="Kwara">Kwara</option>
                                <option value="Lagos">Lagos</option>
                                <option value="Nasarawa">Nasarawa</option>
                                <option value="Niger">Niger</option>
                                <option value="Ogun">Ogun</option>
                                <option value="Ondo">Ondo</option>
                                <option value="Osun">Osun</option>
                                <option value="Oyo">Oyo</option>
                                <option value="Plateau">Plateau</option>
                                <option value="Rivers">Rivers</option>
                                <option value="Sokoto">Sokoto</option>
                                <option value="Taraba">Taraba</option>
                                <option value="Yobe">Yobe</option>
                                <option value="Zamfara">Zamfara</option>
                                <option value="FCT">Federal Capital Territory (FCT)</option>
                            </select>

                        <hr>

                        <p class="pt-2">
                        <button type="submit" class="button button--outline-black">Join Us</button>
                        </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>
       <!-- Contact us Modal Container -->
        <div id="overlay3">
            <div id="contact-modal">
                <!-- Close button -->
                <button id="closeBtn" onclick="closeModal()">X</button>

                <!-- Add your modal content here -->
                <h2 class="mt-2 font-heading h35 my-2 lg-mt-2-5 text-center">Contact us</h2>
                <p>Choose the appropriate inquiry category and fill out the form below to get in touch with us.</p>
                <div class="featured-spring w-full md-mr-2 p-2 rounded relative mt-2 bg-cw-white border border-solid border-grey-30">
                    <div class="md-p-1">
                          <h2 class="h50 leading-tight">
                          Contact Details
                          <hr>
                        </h2>
                        <p class="p-2">
                        <b>PLot 2, Block 5, Bria Street, Wuse 2, Abuja FCT, Nigeria. <br/></b>
                        
                        +2348249249294 <b>|</b> hello@livingafresh.org <b>| Socials: </b>@livingafreshFDN<br/>
                        
                        </p>

                        <!-- Contact Us Form -->
                        <form action="process_contact.php" method="post">
                            <input type="text" id="contact_name" name="contact_name" required placeholder="Full Name" style="margin-bottom: 10px;">
                            <input type="email" id="contact_email" name="contact_email" required placeholder="Email" style="margin-bottom: 10px;">
                            <select id="inquiry_category" name="inquiry_category" required style="margin-bottom: 10px;">
                                <option value="" disabled selected>Select Inquiry Category</option>
                                <option value="Donation">Donation</option>
                                <option value="Sponsorship">Sponsorship</option>
                                <option value="Partnership">Partnership</option>
                                <option value="Volunteering">Volunteering</option>
                                <option value="Career">Career</option>
                                <option value="General">General</option>
                            </select>
                            
                            <!-- Added textarea for message -->
                            <textarea id="message" name="message" required placeholder="Your Message" rows="3" style="margin-bottom: 10px;"></textarea>


                        <p class="pt-2">
                            <button type="submit" class="button button--outline-black">Submit Inquiry</button>
                        </p>
                        </form>

                    </div>
                </div>
            </div>
        </div>


        <div class="mx-2">
          <div class="alt-homepage-content">
            <div class="trust-banner-mobile-spacing md--mt-6"></div>
            <div class="bg-cw-secondary-300 md-py-5 pt-7 pb-5">
              <div class="row px-2 lg-px-0 mb-3">
                <div class="max-w-xs mx-auto">
                  <h3 class="font-heading mx-auto mt-4 -1 h40 leading-normal">
                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                  </h3>
                  <p class="balance-text mx-auto">
                  </p>
                </div>
              </div>
              <div class="row px-2 lg-px-0" style="margin-top: 15rem;">
                <div class="profile-header border-solid border-0 -mx-2 mb-3 px-2">
                  <div class="row side-by-side flex-col-reverse md-flex-row">
                    <div
                      class="side about-section border border-solid border-grey-30 border-t-0 bg-cw-white rounded-b md--mr-6 -mt-1 md-mt-3 z-over-content"
                    >
                      <hr
                        class="bg-cw-spring-med-green h-0.5"
                        style="margin-left: -1px; margin-right: -1px"
                      />
                      <div
                        class="flex-col pb-2 py-1 text-cw-black h-full" >
                        <img
                          class="block w-12 mx-auto my-2"
                          src="vite/assets/_images/logo2.png"
                          loading="lazy"
                        />
                        <h3 class="font-sans h50">About Living Afresh Foundation</h3>
                        <div class="p40 mx-2 my-2">
                          Living Afresh Foundation (LAF) is a non-governmental organization committed to deploying targeted, empathic interventions to enable individuals who have lost their spouses to move beyond their current circumstances to offering similar support to others.
                            <p>&nbsp;</p>
                          <p>Living Afresh Foundation (LAF) was established in 2020 after two years of informal, active interventions in the lives of our pioneer network of women who had lost their spouses. We have carried out interventions to beneficiaries across various states in Nigeria including Lagos, Enugu, Akwa-Ibom, Cross Rivers, Abuja, and we are continuously expanding our services to reach more beneficiaries across more locations.</p>
                        </div>
                        <div class="p40 mx-2 mb-2 font-bold">

                        </div>
                        <a
                          class="button button--cw-spring-med-green mb-2 homepage-primary-join-spring-button"
                          href="/about"
                          >Know More</a
                        >
                       
                      </div>
                    </div>
                    <div
                      class="side picture-section flex-auto md-mb-3 bg-cover bg-top-center md-bg-center rounded relative h-56 md-h-96"
                      style="
                        background-image: url(vite/assets/_images/laf-act.png);
                      "
                    >
                     
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
           
        </div>
        <div class="mt-4 pt-2 px-2 generic-section-our-work">
          <div class="max-w-md mx-auto">
            <span class="text-eyebrow-cw-secondary block mb-2">Our Impact</span>
            <h2
              class="h40 text-kazimir balance-text mx-auto leading-normal balance-text"
            >
            Connecting beneficiaries to support, services and advocacy
            to improve their lives
            </h2>
          </div>

          <div class="my-4">
            <div class="row md-flex md-justify-center info-stat-container">
              <div class="info-stat-item px-2">
                <img
                  class="block mx-auto"
                  width=""
                  height=""
                  src="vite/assets/_images/stats-beneficiaries.png"
                  loading="lazy"
                />
                <h3 class="info-stat-header font-heading">300+</h3>
                <p class="info-stat-text">
                  Beneficiaries empowered in 3 years<a
                    class="icn cw-icon-question-sign"
                    data-behavior="Modal"
                    href="#stat-info-1"
                  ></a>
                </p>
                
              </div>
              <div class="info-stat-item px-2">
                <img
                  class="block mx-auto"
                  width=""
                  height=""
                  src="vite/assets/_images/stats-dependents.png"
                  loading="lazy"
                />
                <h3 class="info-stat-header font-heading">2,800</h3>
                <p class="info-stat-text">
                  Dependents impacted<a
                    class="icn cw-icon-question-sign"
                    data-behavior="Modal"
                    href="#stat-info-2"
                  ></a>
                </p>
               
              </div>
              <div class="info-stat-item px-2">
                <img
                  class="block mx-auto"
                  width=""
                  height=""
                  src="vite/assets/_images/stats-businesses.png"
                  loading="lazy"
                />
                <h3 class="info-stat-header font-heading">193</h3>
                <p class="info-stat-text">
                  Businesses supported<a
                    class="icn cw-icon-question-sign"
                    data-behavior="Modal"
                    href="#stat-info-3"
                  ></a>
                </p>
              </div>
            </div>
          </div>
          <a class="button button--outline-navy" href="interventions.php"
            >Learn more</a
          >
        </div>

      
        <div class="container p-0 text-center">
          <div class="relative z-10 bg-cw-white">
            <div
              class="eoyg-homepage-hero relative bg-polar pb-5 px-2 overflow-hidden"
            >
              <div class="pt-6 md-pt-7 row relative" style="text-align: left;">
                <div class="lg-max-w-50" >
                  <h1 class="font-heading max-w-sm mx-auto text-2xl lg-text-3xl" >
                      We have eight core areas of
                    <span
                      class="yellow-underlined"
                      style="margin-top: 0px !important"
                      >intervention</span
                    >
                  </h1>
                  <ol>
                    <li>
                        <p class="balance-text mx-auto mt-2 font-bold">Grief Management</p>
                        <p class="balance-text mx-auto">Counseling, mentoring, and other related forms of support</p>
                    </li>
                    <li>
                        <p class="balance-text mx-auto mt-2 font-bold">Legal Support</p>
                        <p class="balance-text mx-auto">For situations directly related to the loss of a spouse</p>
                    </li>
                    <li>
                        <p class="balance-text mx-auto mt-2 font-bold">Financial/Business Management</p>
                        <p class="balance-text mx-auto">Livelihood assistance & advice, skills acquisition, business support</p>
                    </li>
                    <li>
                        <p class="balance-text mx-auto mt-2 font-bold">Adoption</p>
                        <p class="balance-text ">Financial, educational, medical, mentoring, housing, business sponsorships</p>
                    </li>
                    <li>
                        <p class="balance-text mx-auto mt-2 font-bold">Socio-cultural Advisory</p>
                        <p class="balance-text mx-auto">Basic techniques on navigating in-laws and community issues, etc.</p>
                    </li>
                    <li>
                        <p class="balance-text mx-auto mt-2 font-bold">Education</p>
                        <p class="balance-text ">Provision of scholarships and related assistance to qualified dependents</p>
                    </li>
                    <li>
                        <p class="balance-text mx-auto mt-2 font-bold">Medical</p>
                        <p class="balance-text mx-auto">Health Insurance, mental health, psychotherapy, etc.</p>
                    </li>
                    <li>
                        <p class="balance-text mx-auto mt-2 font-bold">Shelter</p>
                        <p class="balance-text mx-auto">Short-term arrangements for critical cases of displacement</p>
                    </li>
                </ol>
                
                   <div class="donate-form-container mt-3">
                    <div class="donate-form-nested-container">
                      <div class="donate-form-nested-wrapper">
                        <a
                        class="button button--cw-spring-med-green mb-2 homepage-primary-join-spring-button"
                        href="interventions.php"
                        >Learn More</a
                      >
                      </div>
                    </div>
                  </div>
                </div>
                <div
                  class="-mx-2 lg-mx-0 lg-absolute lg-top-0 lg-right-0 eoyg-hero-media lg-h-full lg-min-h-full relative top-2 lg-w-5/12"
                >
                  <div
                    class="eoyg-stars animated absolute w-full h-full bg-contain bg-repeat animated-element"
                  ></div>
                  <div
                    class="eoyg-hero-image animated absolute lg-w-full bg-repeat-x lg-bg-repeat-y animated-element"
                  ></div>
                </div>
              </div>
            </div>
          </div>
      
    
          
          <div class="bg-white-5 p-3 mt-4 spring-direct-testimonials">
            <div class="max-w-sm mx-auto">
              <h3 class="text-kazimir h40 text-center">
                Hear from our beneficiaries
              </h3>
              <p class="text-grey-60 mt-2">
                Some of those who have been a part of the program share their inspiring stories below:
              </p>
            </div>
            <div class="cards row md-mt-4 pt-1">
              <div class="card pt-4 p-2 lg-mb-0 mt-4 md-mt-0">
                <div class="card-inside text-center">
                  <img
                    width="75"
                    class="rounded-full block mb-2 mx-auto absolute left-0 right-0 -top-3 border border-solid border-grey-30 m-auto"
                    src="vite/assets/_images/laf-beneficiary-1.png"
                    loading="lazy"
                  />
                  <p class="card-decription text-cw-black text-xs">
                    “I lost my husband and his family stripped off everything,  I thought it was all over for me because I lost all hope of getting back on my feet. Being a young widow coping with 3 children was hell for me. I didn't know where to start from until I received a call from Pastor Jerome. When I got to the venue, I was awe struck at what I saw. When I thought it was over, I was empowered. 
                    ”
                  </p>
                  <p class="mt-2 font-medium">Blessing Adeyemi, <br/> FCT, <em>Financial/Business Management </em></p>
                </div>
              </div>
              <div class="card pt-4 p-2 lg-mb-0 mt-4 md-mt-0">
                <div class="card-inside text-center">
                  <img
                    width="75"
                    class="rounded-full block mb-2 mx-auto absolute left-0 right-0 -top-3 border border-solid border-grey-30 m-auto"
                    src="vite/assets/_images/laf-beneficiary-2.png"
                    loading="lazy"
                  />
                  <p class="card-decription text-cw-black text-xs">
                    “Raising my children without a father was not easy. And I didn't have a steady job, all I did was small small jobs which could hardly feed us. Then I met Pastor Jerome, which was used as an instrument for the empowerment. At first, I thought it was a scam, because I have been called for some widow's empowerment in the past which turned out to be a scam.But with Living Afresh Foundation it is different, I just want to say thank you for changing my story.
                    ”

                  </p>
                  <p class="mt-2 font-medium">Esther Effiong Edem, <br/> <em></em></p>
                </div>
              </div>
              <div class="card pt-4 p-2 lg-mb-0 mt-4 lg-mt-0 w-full lg-w-1/3">
                <div class="card-inside text-center">
                  <img
                    width="75"
                    class="rounded-full block mb-2 mx-auto absolute left-0 right-0 -top-3 border border-solid border-grey-30 m-auto"
                    src="vite/assets/_images/laf-beneficiary-3.png"
                    loading="lazy"
                  />
                  <p class="card-decription text-cw-black text-xs lg-px-1">
                    “My mouth can not explain how grateful I am to this organization (Living Afresh Foundation). Since the death of my husband, they have been zero financial support. But since the empowerment, I can say that the lord has enhanced the work of my hands. Thanks to Living Afresh Foundation.
                    ”

                  </p>
                  <p class="mt-2 font-medium">Miriam Moses Kalu <br/><em>Financial Support/Business Management</em></p>
                </div>
              </div>
              
            </div>
            <div class="donate-form-container mt-3" style="text-align: center;">
              <div class="donate-form-nested-container">
                <div class="donate-form-nested-wrapper">
                  <a
                  class="button button--cw-spring-med-green mb-2 homepage-primary-join-spring-button"
                  href="interventions.php"
                  >More testimonials</a
                >
                </div>
              </div>
            </div>
          </div>
          <div class="bg-cw-secondary-300 pb-2 pt-5">
            <h2 class="font-heading h35 my-2 lg-mt-2-5 text-center">
              Get Involved
            </h2>
            <div
              class="cta-section max-w-lg flex flex-wrap mx-auto border border-solid border-grey-30 rounded bg-cw-white p-4"
            >
            <div
            class="cta-item cta-check md-px-2 mx-auto mb-3 lg-mb-4 md-w-1/2 lg-w-1/3"
          >
            <img
              class="cta-icon"
              src="https://cw-contentful-assets.imgix.net/https%3A%2F%2Fimages.ctfassets.net%2Fwvozpes63uc8%2F3sWyYeZbBuTnrvfnCURdke%2F2614a4c73c4d6c8cdc8e2bb47769d75a%2Fcheck.svg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1&amp;s=d859aa3b4f7595dad8728123a907df0d"
              loading="lazy"
            />
            <h5 class="h70">Send us a donation</h5>
            <p class="p40 my-1 lg-px-2">
              Reach out and touch somebody’s life today. Give somebody hope and comfort by donating to the foundation
            </p>
            <div class="cta-link p40">
              <a data-behavior="Modal" href="#cheques">Transfers & Cheques</a> &nbsp; &nbsp; <a data-behavior="Modal" href="#online">Online</a>

            </div>
          </div>
              <div
                class="cta-item cta-iho md-px-2 mx-auto mb-3 lg-mb-4 md-w-1/2 lg-w-1/3"
              >
                <img
                  class="cta-icon"
                  src="https://cw-contentful-assets.imgix.net/https%3A%2F%2Fimages.ctfassets.net%2Fwvozpes63uc8%2F6QGw4koywW7Ndl0SBjzthP%2Fb52d288fef437fe656c5c58177f23379%2Fiho.svg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1&amp;s=e1f6a9d0306d923ce4f0db89ff2ea83e"
                  loading="lazy"
                />
                <h5 class="h70">Partner with us</h5>
                <p class="p40 my-1 lg-px-2">Support us in helping LAF beneficiaries alleviate the challenges associated with losing a spouse
                </p>
                <div class="cta-link p40">
                  <a href="contact.php">Get in touch</a>
                </div>
              </div>
              <div
                class="cta-item cta-tributary md-px-2 mx-auto mb-3 lg-mb-4 md-w-1/2 lg-w-1/3"
              >
                <img
                  class="cta-icon"
                  src="https://cw-contentful-assets.imgix.net/https%3A%2F%2Fimages.ctfassets.net%2Fwvozpes63uc8%2F7pAnMzouthbzq0tP58ZU0N%2F0b732e8b758c1074742a8fcd4aba60f0%2Ftributary-people.svg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1&amp;s=ea70b8966d4cdfea35c41a489b4124b0"
                  loading="lazy"
                />
                <h5 class="h70">Volunteer</h5>
                <p class="p40 my-1 lg-px-2">Are you interested in joining us to provide support, services, and advocacy to individuals who have lost their spouses?.
                </p>
                <div class="cta-link p40">
                  <a href="volunteer.php">Join us</a>
                </div>
              </div>
            </div>
          </div>

          
          
        </div>
      </div>
      <section class="mt-4 mb-7 py-3 px-2 lg-bg-cw-accent-200">
               <div class="row">
                  <div class="md-flex items-center justify-center">
                     <div class="mb-3 md-mb-0 md-flex-1"><img class="block w-full" src="https://cw-contentful-assets.imgix.net/https%3A%2F%2Fimages.ctfassets.net%2Fwvozpes63uc8%2F6tOei9DSfKzWifNmXNkvQC%2F5a5dbc0427eb576a4c8d5faff78e9a6c%2F_careers-illo-compressed.svg?ixlib=rails-4.1.0&amp;auto=format&amp;w=2000&amp;s=ababf75794054b731ea601b198691b89" loading="lazy" /></div>
                     <div class="mt-3 md-flex-1 md-ml-4">
                        <span class="block mb-2 text-eyebrow-cw-black">Our Program</span>
                        <h2 class="text-kazimir h35 balance-text mx-auto leading-snug">View our 2023 report</h2>
                        <div class="max-w-xs mt-1 mx-auto">
                           <p class="md-px-4 mx-auto">Here's a summary of our acitivies and impact in the year 2023.</p>
                        </div>
                        <div class="md-flex mt-2 justify-center"><a class="block" href="downloads/LAF-2023-report.pdf.pdf" target="_blank">See Report</a><span class="show-for-medium-up mx-2 text-cw-navy">&bull;</span>
                     </div>
                  </div>
               </div>
            </section>
    <!-- Include footer -->
    <?php require 'partials/footer.php'; ?>

    <script>
      // Function to open the modal
      function openModal() {
        document.getElementById('overlay').style.display = 'block';
        document.getElementById('donate-modal').style.display = 'block';
      }

        // Function to open the modal
        function openModalV() {
        document.getElementById('overlay2').style.display = 'block';
        document.getElementById('volunteer-modal').style.display = 'block';
      }

       // Function to open the modal
       function openModalC() {
        document.getElementById('overlay3').style.display = 'block';
        document.getElementById('contact-modal').style.display = 'block';
      }
    
      // Function to close the modal
      function closeModal() {
        document.getElementById('overlay').style.display = 'none';
        document.getElementById('overlay2').style.display = 'none';
        document.getElementById('overlay3').style.display = 'none';
        document.getElementById('donate-modal').style.display = 'none';
        document.getElementById('volunteer-modal').style.display = 'none';
        document.getElementById('contact-modal').style.display = 'none';
      }
    
      // Event listener for the Donate button
      document.getElementById('donateBtn').addEventListener('click', openModal);
      document.getElementById('volunteerBtn').addEventListener('click', openModalV);
      document.getElementById('contactBtn').addEventListener('click', openModalC);

    </script>
  </body>
</html>
