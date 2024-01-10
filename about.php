<?php
   $pageTitle = 'About Living Afresh Foundation | Livingafresh.org';
  include ('partials/header.php');
?>
      <style type="text/css">
      .container{padding-top:58px !important}.hero--header{font-size:26px;line-height:1.375}@media screen and (min-width: 768px){.hero--header{font-size:35px}}.hero--text{max-width:1050px}.info-stat-header{font-size:23px}.info-stat-text{margin-top:5px}.org-block p{font-size:16px !important}.generic-selector-item{opacity:.75;margin-bottom:25px}.generic-selector-item h3{color:#9b9b94}.generic-selector-item .board-member-title{color:#c1c1ba}.generic-selector-item.active{opacity:1}.generic-selector-item.active h3{color:#036}.generic-selector-item.active .board-member-title{color:#9b9b94}.about-leadership-member-photo{padding-bottom:66.6667%}.about-leadership-member-photo:hover .icn{opacity:1}.about-leadership-member-photo .icn{bottom:10px;right:10px;opacity:0;transition:opacity 250ms}.mt-5px{margin-top:5px}.max-w-350px{max-width:350px}@media only screen and (min-width:1025px){.lg--mt-120px{margin-top:-120px}}@media only screen and (max-width:1024px){.slide-bg-wrapper{background-color:#f7fcff}}@media only screen and (min-width:1025px){.slide-bg-wrapper{background-image:linear-gradient(to right, #fff 16%, #f7fcff 16%, #f7fcff)}}.trust-banner{width:818px}.trust-banner-spacing{margin-top:-200px !important}@media screen and (min-width: 500px){.trust-banner-spacing{margin-top:-130px !important}}.trust-banner-bubble{position:relative;background:#fff;border-radius:0.25rem;border:1px solid #e9eae4}.tbb-triangle:before{content:"";position:absolute;width:0px;height:0px;left:50%;bottom:-41px;border-left:20px solid transparent;border-right:20px solid transparent;border-top:20px solid #e9eae4;border-bottom:20px solid transparent;margin-left:-20px}.tbb-triangle:after{content:"";position:absolute;width:0px;height:0;left:50%;bottom:-40px;border-left:20px solid transparent;border-right:20px solid transparent;border-top:20px solid #fff;border-bottom:20px solid transparent;margin-left:-20px}
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
   <body class="infosite-page-about " data-behavior="DataTracking ManageUtmCookie Tabs CookieBanner" data-page-event-properties="{&quot;logged_in_user&quot;:false}" data-policy-version="2019.3">
   
         <?php include('partials/nav.php'); ?>
         <div style="top: 0; left: 0; width: 100%; height: 60px; background: #107C3B;"></div> 
         <div class="container p-0 text-center">
            <section>
               <div class="hero--text-center">
                  <div class="hero--text">
                     <span class="block mb-2 text-eyebrow-cw-secondary">About Us</span>
                     <h1 class="hero--header font-heading h10">LAF: Uplifting the lives of individuals who have lost a spouse through eight critical intervention areas.</h1>
                  </div>
                  <div class="hero--media">
                     <div class="hero--media-asset-wrapper"><img src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/4Dmy9MGWxDARcFkLULpod0/b6da29b7704de492c72f5ca7b5b91499/JS_20170926_0406f728.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1920&amp;s=581b2c91f43e3ace357d74276c4e7b93" loading="lazy" /></div>
                  </div>
               </div>
            </section>
            <section class="row mt-4 md-flex px-2 md-items-center">
               <div class="md-text-left md-flex-1">
                  <h2 class="text-kazimir h35 leading-snug">Connecting beneficiaries to support, services and advocacy to improve their lives</h2>
                  <p class="mt-2 leading-snug">Living Afresh Foundation (LAF) was formally incorporated in 2020 after two years of informal, active interventions in the lives of our pioneer network of over 100 individuals. To date our 
Foundation has uplifted over 300 individuals across three regions in Nigeria. We are determined to accelerate our efforts and keep expanding our reach in order to provide succor to a critical mass 
within the shortest possible time.</p>

<p><br/>Our interventions so far indicate that majority of beneficiaries are between the age range of 35-55 years. This confirms National 
Statistics on the target group. It is therefore not surprising that the most recurrent challenges highlighted by our beneficiaries 
include financial/economic hardship, lack of educational support for children, absence of spouse’s will resulting in loss of assets 
to relatives of the deceased, loneliness & depression, lack of role models & mentors for the children, poor housing, 
stigmatization, high level vulnerability to various forms of harassment, etc.</p>

<p><br/>We are very mindful of these challenges and have carefully developed culturally and socially appropriate interventions that are 
targeted, impactful and sustainable.</p>
               </div>
               <div class="mt-4 md-mt-0 relative md-ml-4">
                  <div class="bg-cw-secondary-300 absolute w-full h-full left-1 top-1"></div>
                  <div class="border border-solid border-cw-secondary-200 relative">
                     <div class="py-2 px-4 border-0 border-cw-secondary-200 border-b border-solid">
                        <h3 class="info-stat-header font-heading">300+</h3>
                        <p class="info-stat-text">Beneficiaries empowered in 3 years<a class="icn cw-icon-question-sign" data-behavior="Modal" href="#stat-info-1"></a></p>
                        <div class="hidden" id="stat-info-1">
                           <h4 class="title">Beneficiaries empowered in 3 years</h4>
                           <div class="inner">
                              <p class="p30 mt-2">.</p>
                           </div>
                        </div>
                     </div>
                     <div class="py-2 px-4 border-0 border-cw-secondary-200 border-b border-solid">
                        <h3 class="info-stat-header font-heading">2,800</h3>
                        <p class="info-stat-text">Dependents impacted<a class="icn cw-icon-question-sign" data-behavior="Modal" href="#stat-info-2"></a></p>
                        <div class="hidden" id="stat-info-2">
                           <h4 class="title">Dependents impacted</h4>
                           <div class="inner">
                              <p class="p30 mt-2"></p>
                           </div>
                        </div>
                     </div>
                     <div class="py-2 px-4 border-0 border-cw-secondary-200 border-b border-solid">
                        <h3 class="info-stat-header font-heading">5000</h3>
                        <p class="info-stat-text">Beneficiaries targeted for the next 6 years<a class="icn cw-icon-question-sign" data-behavior="Modal" href="#stat-info-3"></a></p>
                        <div class="hidden" id="stat-info-3">
                           <h4 class="title">Beneficiaries targeted for the next 6 years</h4>
                           <div class="inner">
                              <p class="p30 mt-2"></p>
                           </div>
                        </div>
                     </div>
                     <div class="py-2 px-4 border-0 border-cw-secondary-200 border-b border-solid">
                        <h3 class="info-stat-header font-heading">8/3</h3>
                        <p class="info-stat-text">Active in 8 states amd 3 regions in Nigeria <a class="icn cw-icon-question-sign" data-behavior="Modal" href="#stat-info-3"></a></p>
                        <div class="hidden" id="stat-info-3">
                           <h4 class="title">Active in 8 states amd 3 regions in Nigeria</h4>
                           <div class="inner">
                              <p class="p30 mt-2"></p>
                           </div>
                        </div>
                     </div>
                     <div class="py-2 px-4">
                        <h3 class="info-stat-header font-heading">12/6</h3>
                        <p class="info-stat-text">Targeted spread to 12 states, 6 regions in the next 6 years <a class="icn cw-icon-question-sign" data-behavior="Modal" href="#stat-info-3"></a></p>
                        <div class="hidden" id="stat-info-3">
                           <h4 class="title">Targeted spread to 12 states, 6 regions in the next 6 years</h4>
                           <div class="inner">
                              <p class="p30 mt-2"></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <section class="mt-4">
               <div class="bg-cw-accent-200 pt-4 pb-6 md-pb-3 px-3">
                  <div class="relative -mt-5 z-20"><img class="w-10" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/5SuUHoVFwaaREgz4ZxmPx1/f1da58c97084cad49c8be2c45e2e2efd/100_percent_funds_water_projects_-_4x50b5.png?ixlib=rails-4.1.0&amp;auto=format&amp;w=260&amp;fm=png&amp;s=129322657b82845cf851a7f816b180bc" loading="lazy" /></div>
                  <div class="max-w-sm mx-auto">
                     <h2 class="mx-auto text-kazimir h35 balance-text mt-2">Vision, Mission, Core Values</h2>
                     <p class="balance-text mx-auto mt-2 leading-snug"><b>Our Mission</b> is to build a network of like-minded individuals and organizations dedicated to helping LAF beneficiaries alleviate the multifacetted challenges associated with losing a spouse. </p>
                     <a class="button button--text mt-1" href="#" style="text-transform: capitalise; letter-spacing: 0; text-decoration: none;"><b>Core Values: </b>Transparency <b>|</b> Confidentiality <b>|</b> Respect <b>|</b> Compassion <b>|</b> Courage </a>
                  </div>
               </div>
               <div class="bg-cw-accent-200 pb-5"></div>
               <div class="px-3 pt-3 pb-2 trust-banner-spacing">
                  <div class="md-max-w-sm mx-auto -z-10 trust-banner-bubble tbb-triangle md-p-3 p-2">
                     <p class="md-px-2 leading-5"><b>Our Vision: </b>is to be one of the leading foundations in Africa, connecting 
beneficiaries to individuals/organizations worldwide who can provide targeted support, services and advocacy to move them beyond their current circumstances to actively 
supporting others within the network who have been in similar situation, thereby fostering a vibrant community of mutual benefit.</p>
                  </div>
                  <div class="max-w-lg mx-auto py-2 md-px-3 relative bg-cw-white mt-2 flex justify-center">
                     <div class="lg-hidden block max-w-xs"><img class="w-full" src="https://www.google.com/imgres?imgurl=https%3A%2F%2Fleadership.ng%2Fwp-content%2Fuploads%2F2023%2F02%2Funicef-logo.png&tbnid=jmOkRFthYVUREM&vet=12ahUKEwi366mgmLSDAxWhAfsDHWzPDLgQMygAegQIARBt..i&imgrefurl=https%3A%2F%2Fleadership.ng%2Funicef-empowers-1-8m-nigerian-children-in-4-years%2F&docid=hyDhgSDCXKkbyM&w=400&h=400&q=unicef&ved=2ahUKEwi366mgmLSDAxWhAfsDHWzPDLgQMygAegQIARBt&amp;auto=format&amp;w=800&amp;fm=png&amp;s=fbc06495d3089dc0f7ab04766d54e137" loading="lazy" /></div>
                     <div class="hidden lg-block"><img class="trust-banner" src="MAIN-WEB/vite/assets/_images/targe_partners.png" loading="lazy" /></div>
                  </div>
               </div>
               <div class="bg-grey-5 p-3">
                  <div class="row md-p-0 p-3">
                     <h2 class="h35 mx-auto text-kazimir">How we operate</h2>
                     <p class="balance-text mx-auto mt-2 leading-snug">Below is a general description of our mode of operations, mainly anchored on three pillars of Focused Group, Data Gathering, Monitoring.</p>
                     <div class="about-org mt-4">
                        <div class="org-links">
                           <div class="columns large-4 org-block">
                              <a href="#"><img class="" width="160" height="" src="vite/assets/icon-pin-2e3db337.png" loading="lazy" /></a>
                              <h2 class="h60 pt-2">Focused Intervention</h2>
                              <p class="p30 pt-1 pb-1">Our work remains focused on individuals who fall within the target group mentioned previously. Beneficiaries are nominated to our 
programs by individuals or organizations through a rigorous verification process established by LAF.</p>
                              <p class="p40"><a class="button button--text" href="interventions.php"> See Interventions</a></p>
                           </div>
                           <div class="columns large-4 org-block mt-3 lg-mt-0">
                              <a href="#"><img class="w-32" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/50639sn4FcOQvnmJ9zf2WZ/ca192d807660571b41d6aaff828e41e8/magnifying_glass_illustrationd2b9.png?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;fm=png&amp;s=99de4f1716d31b1bc35e88cbf2d1568c" loading="lazy" /></a>
                              <h2 class="h60 pt-2">Data Gathering</h2>
                              <p class="p30 pt-1 pb-1">Pre- and post-intervention questionnaire are administered to first establish a baseline condition/situation and thereafter verify impact 
of each specific intervention.</p>
                              <p class="p40"><a class="button button--text" href="#"> View our dashboard</a></p>
                           </div>
                           <div class="columns large-4 org-block">
                              <a href="#"><img class="" width="160" height="" src="vite/assets/icon-tools-3c973f40.png" loading="lazy" /></a>
                              <h2 class="h60 pt-2">Monitoring</h2>
                              <p class="p30 pt-1 pb-1">Furthermore, ongoing monitoring enables our foundation to remain closely linked to our beneficiaries in ways that ensure healthy, 
supportive and sustainable outcomes.</p>
                              <p class="p40"><a class="button button--text" href="#"> Learn more</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="w-full md-flex">
                  <div class="hidden md-block w-1/4"><img class="w-full pr-nudge object-cover object-center h-full max-h-full" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/2bRHGjGqZCGG5NaSkzXF6p/51cc17a108fc7a2b695df1b2034552ff/about_trust_banner_leftc67f.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;s=07a133c5a1a1502e94ab323fd57ba2a7" loading="lazy" /></div>
                  <div class="bg-cw-blue p-2 mb-nudge md-mb-0 md-flex md-flex-col justify-center md-w-1/2">
                     <h4 class="h40 mt-1 mb-2 mx-2 text-cw-white">Ready support what LAF is doing?</h4>
                     <p class="p30 mx-3 mb-2 text-cw-white">Every ₦50,000 can empower one family, lead to education children, etc.</p>
                     <div class="div"><a class="button button--outline-white my-1" href="#" id="donateBtn">Give today</a></div>
                  </div>
                  <div class="flex md-w-1/4">
                     <div class="md-hidden block w-1/2"><img class="w-full pr-nudge object-cover object-center h-full" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/2bRHGjGqZCGG5NaSkzXF6p/51cc17a108fc7a2b695df1b2034552ff/about_trust_banner_leftc67f.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;s=07a133c5a1a1502e94ab323fd57ba2a7" loading="lazy" /></div>
                     <div class="md-hidden block w-1/2"><img class="w-full object-cover object-center h-full" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/4m9P4eYzQNOBdPHNTq4ZO/4884c75be24fe3a5aaa3b7cd6f2594ae/Rectangle_1844d075.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;fm=png&amp;s=e8ead2bbb855ab3da4875ae8a0898b75" loading="lazy" /></div>
                     <div class="hidden md-block"><img class="w-full md-pl-nudge object-cover object-center h-full" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/1HnihBcvnykCayq9tL9hc3/d6f9a4d52b075649395a343862422bc5/about_trust_banner_right85c8.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;s=b6617a67599d3c316b4e2dae2623832e" loading="lazy" /></div>
                  </div>
               </div>
            </section>

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
            <section class="mt-4 pt-4 border-0 border-solid border-t border-grey-30 row-lg px-2">
               <div class="max-w-md mx-auto">
                  <h2 class="text-kazimir h35 leading-snug">Leading the team</h2>
                  <p class="balance-text mx-auto leading-snug mt-2">Touching lifes, empowering destinies is such a big deal that we cannot but put together the best team to manage our affairs. Below are key people at LAF:</p>
               </div>
               <div class="lg-grid lg-grid-cols-2 lg-gap-4 items-center mt-3 md-mt-4">
                  <div class="mb-3 lg-mb-0"><img class="block w-full object-cover" src="vite/assets/_images/Eka-sunmonu.png" loading="lazy" /></div>
                  <div class="text-left lg-px-4">
                     <span class="text-xs font-medium tracking-wide uppercase text-grey-50">Our Founder</span>
                     <h3 class="text-kazimir h40 mt-1 md-mt-2">Mrs Eka Sunmonu</h3>
                     <p class="mt-2">A seasoned corporate affairs, international development, leadership, and conflict resolution professional, Eka enjoyed a long and fulfilling career in Shell where she held several leadership positions in Nigeria, The United States of America, and The United Kingdom prior to her 2018 voluntary retirement from the Group of companies. .</p>
                     <a class="button button--text mt-2" href="#" id="founderBTN">More About Eka</a>
                  </div>
               </div>
            </section>
            <section class="pt-2 md-pt-4 mt-4 row-lg" data-behavior="GenericSwiper" data-swiper-options="{
               &quot;threshold&quot;: 15,
               &quot;spaceBetween&quot;: 20,
               &quot;loop&quot;: true,
               &quot;breakpoints&quot;: {
               &quot;0&quot;: {
               &quot;slidesPerView&quot;: 1.25
               },
               &quot;480&quot;: {
               &quot;slidesPerView&quot;: 1.5
               },
               &quot;640&quot;: {
               &quot;slidesPerView&quot;: 2
               },
               &quot;1024&quot;: {
               &quot;slidesPerView&quot;: 1
               }
               }
               }">
               <div class="lg-flex">
                  <div class="lg-flex-1">
                     <div class="max-w-sm mx-auto lg-ml-0 lg-text-left mb-3 px-2">
                        <h2 class="text-kazimir h40">Board of Directors</h2>
                     </div>
                     <div class="text-left hidden lg-block px-2">
                        <div class="lg-flex">
                           <div class="pt-2">
                              <a class="block no-underline generic-selector-item active" data-show-slide-item="1">
                                 <h3 class="text-sm">Mr George Inyangette II</h3>
                                 <p class="text-xs board-member-title mt-5px">Chair</p>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="2">
                                 <h3 class="text-sm">Dr Chinwe Effiong</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="3">
                                 <h3 class="text-sm">Mrs Maryanne Moghalu</h3>
                              </a>
                             
                           </div>
                           <div class="lg-border-0 lg-border-grey-30 lg-border-l lg-border-solid lg-ml-3 lg-pl-3 lg-pt-2 w-1/2">
                              <h3 class="text-sm mb-2">Regional/State Coordinators</h3>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="13">
                                 <h3 class="text-sm">Melody C. Ekeke</h3>
                                 <p class="text-xs board-member-title mt-5px">Headquaters, FCT</p>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="14">
                                 <h3 class="text-sm">Bibi Ikuemonisan</h3>
                                 <p class="text-xs board-member-title mt-5px">Headquaters, Lagos</p>

                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="15">
                                 <h3 class="text-sm">Pastor Jerome Dominic</h3>
                                 <p class="text-xs board-member-title mt-5px">South-South</p>

                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="16">
                                 <h3 class="text-sm">Pastor Joshua Atere.</h3>
                                 <p class="text-xs board-member-title mt-5px">South-West</p>

                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="17">
                                 <h3 class="text-sm">Dr. Mrs Grace Chinedu</h3>
                               <p class="text-xs board-member-title mt-5px">North-Central</p>

                              </a>
                              
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="story-slider lg-w-1/2">
                     <div class="swiper-container md-px-2">
                        <div class="swiper-wrapper">
                           <div class="swiper-slide h-auto" data-name="Michael">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/5QkAHjB7WYfWMlJq6sM5Ly/5f16bcb0cbd1b8970b5c80350e20aabc/Michael-Wilkersona6bf.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=8186602986bd8cba6e05a21e07a9034b" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Mr George Inyangette II</h4>
                                       <p class="text-xs mt-5px">Chair</p>
                                       <p class="mt-2 leading-snug text-left">MD/CEO Knowledge Partners and Principal, Ian Georges Consulting. Chief Executive with demonstrable strategic leadership capabilities. Strong operations and project/program management skills acquired in a 
multinational company, consulting firm, subsidiary of a conglomerate, a start-up and private consulting practice. Transformational management expertise and team leadership in business advisory services, 
entrepreneurship mentoring, employability enhancement and investment promotion. Has consulted for IOCs, Multinationals, Development Partners, Governments, International Institutes and well-travelled. 
Core values: Accountability, Commitment to goals, Continuous development, Innovation and Integrity.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Angela">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/3o5X18Z5yrOKiZTAtWyPQd/fcb4c65a21868bc6b52b45f662b6105e/angela-v271a3.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=76a13d12be6eb581b83e5c56ffe60781" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Dr Chinwe Effiong</h4>
                                       <p class="mt-2 leading-snug text-left">Dr Chinwe Effiong was most recently senior vice president of Apple Retail where she redesigned Apple&rsquo;s physical and digital businesses to create a seamless customer journey for over a billion visitors a year and 70,000 global employees. Prior to Apple, as the CEO of Burberry, she transformed and tripled the company&rsquo;s value. Her leadership was pivotal at Liz Claiborne where they acquired and integrated 22 brands, and prior, as president of Donna Karan International. Ahrendts also serves as chair of the board for Save the Children Int&rsquo;l and is on the boards of Airbnb, Ralph Lauren, and&nbsp;WPP.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
               </div>
            </section>
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
         </div>
   
    <!-- Include footer      -->
     <?php include ('partials/footer.php'); ?>
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