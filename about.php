<?php
   $pageTitle = 'Home';
  include ('partials/header.php');
?>
      <style type="text/css">.container{padding-top:58px !important}.hero--header{font-size:26px;line-height:1.375}@media screen and (min-width: 768px){.hero--header{font-size:35px}}.hero--text{max-width:1050px}.info-stat-header{font-size:23px}.info-stat-text{margin-top:5px}.org-block p{font-size:16px !important}.generic-selector-item{opacity:.75;margin-bottom:25px}.generic-selector-item h3{color:#9b9b94}.generic-selector-item .board-member-title{color:#c1c1ba}.generic-selector-item.active{opacity:1}.generic-selector-item.active h3{color:#036}.generic-selector-item.active .board-member-title{color:#9b9b94}.about-leadership-member-photo{padding-bottom:66.6667%}.about-leadership-member-photo:hover .icn{opacity:1}.about-leadership-member-photo .icn{bottom:10px;right:10px;opacity:0;transition:opacity 250ms}.mt-5px{margin-top:5px}.max-w-350px{max-width:350px}@media only screen and (min-width:1025px){.lg--mt-120px{margin-top:-120px}}@media only screen and (max-width:1024px){.slide-bg-wrapper{background-color:#f7fcff}}@media only screen and (min-width:1025px){.slide-bg-wrapper{background-image:linear-gradient(to right, #fff 16%, #f7fcff 16%, #f7fcff)}}.trust-banner{width:818px}.trust-banner-spacing{margin-top:-200px !important}@media screen and (min-width: 500px){.trust-banner-spacing{margin-top:-130px !important}}.trust-banner-bubble{position:relative;background:#fff;border-radius:0.25rem;border:1px solid #e9eae4}.tbb-triangle:before{content:"";position:absolute;width:0px;height:0px;left:50%;bottom:-41px;border-left:20px solid transparent;border-right:20px solid transparent;border-top:20px solid #e9eae4;border-bottom:20px solid transparent;margin-left:-20px}.tbb-triangle:after{content:"";position:absolute;width:0px;height:0;left:50%;bottom:-40px;border-left:20px solid transparent;border-right:20px solid transparent;border-top:20px solid #fff;border-bottom:20px solid transparent;margin-left:-20px}</style>
   </head>
   <body class="infosite-page-about " data-behavior="DataTracking ManageUtmCookie Tabs CookieBanner" data-page-event-properties="{&quot;logged_in_user&quot;:false}" data-policy-version="2019.3">
      <!-- <aside class="right-off-canvas-menu">
         <ul class="off-canvas-list">
            <li class="cw-home"><a href="index.html"><span class="icn cw-icon-jerrycan"></span><span class="cw-text">charity: water</span></a></li>
            <li><a href="donate.html">Give</a></li>
            <li><a href="donate/the-spring.html">Join The Spring</a></li>
            <li><a href="donate/water-project-sponsorship.html">Sponsor a Water Project</a></li>
            <li><a href="global-water-crisis.html">Why Water?</a></li>
            <li><a href="our-work.html">Our Work</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="get-involved/fundraise.html">Get Involved</a></li>
            <li class="has-form user-access"><a class="button" href="account/login.html">Sign in</a></li>
         </ul>
      </aside> -->
      <div class="wrapper">
         <!-- <div class="fixed pl-2 pb-2 fixed bottom-0 z-10"></div>
         <div class="cta-nudge fixed z-highest-index">
            <div data-component="CtaNudge" data-props="{&quot;contentfulContent&quot;:{&quot;header&quot;:&quot;Ben just joined the Spring! &quot;,&quot;content&quot;:&quot;Join The Spring, our monthly giving community, to give clean water (and so much more) each and every month.&quot;,&quot;button_text&quot;:&quot;Join today&quot;}}"></div>
         </div> -->
         <!-- <nav class="nav-bar " data-behavior="FixedNav" data-off-canvas="">
            <section class="nav-bar-section">
               <div class="left-side">
                  <ul class="logo-area">
                     <li class="logo"><a href="index.html">charity: water</a></li>
                     <li class="mobile-donate button-links"><a href="donate.html">Give</a></li>
                     <li class="offcanvas-open-link off-canvas-toggle"><a><span class="cw-icon-reorder icn"></span></a></li>
                  </ul>
                  <ul class="nav-items">
                     <li class="no-dropdown">
                        <div class="flex h-full items-center"><a href="global-water-crisis.html">Why Water?</a></div>
                     </li>
                     <li class="no-dropdown">
                        <div class="flex h-full items-center"><a href="our-work.html">Our work</a></div>
                     </li>
                     <li class="has-dropdown"><span class="absolute bg-transparent z-10 nav-hover-extender"></span><span class="flex items-center dropdown-parent-link"><a class="transition-opacity relative z-20" href="about.html">About us</a><span class="w-1 block"></span><span class="h80 icn cw-icon-caret-down"></span></span><span class="dropdown bg-cw-white border border-solid border-cw-secondary-100 leading-normal left-0 rounded super-dropdown-container"><span class="dropdown-border-nub block absolute"></span><span class="block bg-cw-white py-3 border-0 border-solid border-r border-cw-secondary-100 rounded-l w-1/3"><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1" href="about/financials.html">See Our Financials</a><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1" href="about/scott-harrison-story.html">Meet the founder</a><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1" href="about/request-speaker.html">Request a Speaker</a><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1" href="../support.charitywater.org/hc/en-us.html">Get help</a></span><span class="block flex-1 py-3 px-3 grid items-center justify-center gap-4 grid-cols-2 bg-grey-5 rounded-r"><a class="block bg-cw-white relative p-2 normal-case tracking-normal text-xs whitespace-normal text-center hover-bg-cw-white rounded" href="about.html"><span class="absolute w-full h-full border border-solid border-cw-secondary-100 super-link-bg rounded"></span><span class="block text-cw-black relative z-20">Learn more about our mission and our&nbsp;leadership.</span><span class="block mt-2 text-cw-navy underline relative z-20 uppercase tracking-wide super-box-link-anchor font-medium">About us</span></a><a class="block bg-cw-white relative p-2 normal-case tracking-normal text-xs whitespace-normal text-center hover-bg-cw-white rounded" href="about/jobs.html"><span class="absolute w-full h-full border border-solid border-cw-secondary-100 super-link-bg rounded"></span><span class="block text-cw-black relative z-20">Quit your day job and come change the&nbsp;world.</span><span class="block mt-2 text-cw-navy underline relative z-20 uppercase tracking-wide super-box-link-anchor font-medium">Careers</span></a></span></span></li>
                     <li class="has-dropdown"><span class="absolute bg-transparent z-10 nav-hover-extender"></span><span class="flex items-center dropdown-parent-link"><a class="transition-opacity relative z-20" href="get-involved.html">Get Involved</a><span class="w-1 block"></span><span class="h80 icn cw-icon-caret-down"></span></span><span class="dropdown bg-cw-white border border-solid border-cw-secondary-100 leading-normal left-0 rounded super-dropdown-container"><span class="dropdown-border-nub block absolute"></span><span class="block bg-cw-white py-3 border-0 border-solid border-r border-cw-secondary-100 rounded-l w-1/3"><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1" href="streamers.html">Stream for us</a><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1" href="tiny-heroes.html">Meet the Tiny Heroes</a><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1" href="get-involved/fundraise.html">Fundraise</a><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1 mb-2" href="get-involved/find-a-campaign.html">Support a Campaign</a><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0" href="donate/the-spring.html">Join the Spring</a><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1" href="../store.charitywater.org/index.html">Shop our store</a><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1" href="brand-partnerships.html">Brand Partnerships</a><a class="block underline font-medium transition-opacity opacity-75 hover-opacity-100 text-cw-navy hover-bg-transparent px-3 py-0 mt-1" href="the-tributary.html">Legacy Giving</a></span><span class="block flex-1 py-3 px-3 grid items-center justify-center gap-4 grid-cols-2 bg-grey-5 rounded-r"><a class="block bg-cw-white relative p-2 normal-case tracking-normal text-xs whitespace-normal text-center hover-bg-cw-white rounded" href="get-involved.html"><span class="absolute w-full h-full border border-solid border-cw-secondary-100 super-link-bg rounded"></span><span class="block text-cw-black relative z-20">Find out how you can help end the water&nbsp;crisis.</span><span class="block mt-2 text-cw-navy underline relative z-20 uppercase tracking-wide super-box-link-anchor font-medium">Get involved</span></a><a class="block bg-cw-white relative p-2 normal-case tracking-normal text-xs whitespace-normal text-center hover-bg-cw-white rounded" href="donate/water-project-sponsorship.html"><span class="absolute w-full h-full border border-solid border-cw-secondary-100 super-link-bg rounded"></span><span class="block text-cw-black relative z-20">Bring clean water to an entire community or&nbsp;school.</span><span class="block mt-2 text-cw-navy underline relative z-20 uppercase tracking-wide super-box-link-anchor font-medium">Sponsor a community</span></a></span></span></li>
                  </ul>
               </div>
               <a class="fixed-donate button button--small" href="donate.html">Give</a>
               <div class="right-side ml-2">
                  <ul class="nav-buttons donate-link">
                     <li class="has-dropdown button-links sponsor-button"><a href="donate/water-project-sponsorship.html">Sponsor a Water Project</a></li>
                     <li class="has-dropdown button-links"><a href="donate.html">Give</a></li>
                  </ul>
                  <ul class="mycw-nav">
                     <li class="has-form user-access"><a class="log-in" href="account/login.html">Sign in</a></li>
                  </ul>
               </div>
               <div class="right-side lg-block">
                  <div data-component="CountryDropdown" data-props="{&quot;currentCountry&quot;:&quot;us&quot;,&quot;ukCurrencyFullName&quot;:&quot;Pound sterling&quot;,&quot;ukCurrencyName&quot;:&quot;GBP&quot;,&quot;ukUrl&quot;:&quot;/uk/about&quot;,&quot;usCurrencyFullName&quot;:&quot;United States dollar&quot;,&quot;usCurrencyName&quot;:&quot;USD&quot;,&quot;usUrl&quot;:&quot;https://www.charitywater.org/about&quot;}"></div>
               </div>
            </section>
         </nav> -->
         <div class="container p-0 text-center">
            <section>
               <div class="hero--text-center">
                  <div class="hero--text">
                     <span class="block mb-2 text-eyebrow-cw-secondary">About Us</span>
                     <h1 class="hero--header font-heading h10">charity: water is a nonprofit organization bringing clean and safe water to people around the world.</h1>
                  </div>
                  <div class="hero--media">
                     <div class="hero--media-asset-wrapper"><img src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/4Dmy9MGWxDARcFkLULpod0/b6da29b7704de492c72f5ca7b5b91499/JS_20170926_0406f728.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1920&amp;s=581b2c91f43e3ace357d74276c4e7b93" loading="lazy" /></div>
                  </div>
               </div>
            </section>
            <section class="row mt-4 md-flex px-2 md-items-center">
               <div class="md-text-left md-flex-1">
                  <h2 class="text-kazimir h35 leading-snug">Together, we can end the water&nbsp;crisis</h2>
                  <p class="mt-2 leading-snug">Since charity: water was founded in 2006, we&rsquo;ve been chasing one ambitious goal:&nbsp;ending the global water crisis. And while the water crisis is huge, we&rsquo;re optimistic. We know how to solve the problem, and we make progress every day thanks to the help of local partners and generous supporters. If we work together, we believe everyone will have access to life&rsquo;s most basic need within our&nbsp;lifetime.</p>
               </div>
               <div class="mt-4 md-mt-0 relative md-ml-4">
                  <div class="bg-cw-secondary-300 absolute w-full h-full left-1 top-1"></div>
                  <div class="border border-solid border-cw-secondary-200 relative">
                     <div class="py-2 px-4 border-0 border-cw-secondary-200 border-b border-solid">
                        <h3 class="info-stat-header font-heading">137,015</h3>
                        <p class="info-stat-text">Water projects funded<a class="icn cw-icon-question-sign" data-behavior="Modal" href="#stat-info-1"></a></p>
                        <div class="hidden" id="stat-info-1">
                           <h4 class="title">Water Projects Funded</h4>
                           <div class="inner">
                              <p class="p30 mt-2">This number represents all water projects funded by charity:&nbsp;water, including completed projects and those under construction. This number is dynamic and updates as we receive new information from our partners in the&nbsp;field.</p>
                           </div>
                        </div>
                     </div>
                     <div class="py-2 px-4 border-0 border-cw-secondary-200 border-b border-solid">
                        <h3 class="info-stat-header font-heading">17,463,191</h3>
                        <p class="info-stat-text">People will be served<a class="icn cw-icon-question-sign" data-behavior="Modal" href="#stat-info-2"></a></p>
                        <div class="hidden" id="stat-info-2">
                           <h4 class="title">People Will Be Served</h4>
                           <div class="inner">
                              <p class="p30 mt-2">This number represents the total number of people who will gain access to clean water as reported by our implementing partners. This number is dynamic and updates as we receive new information from our partners in the&nbsp;field.</p>
                           </div>
                        </div>
                     </div>
                     <div class="py-2 px-4">
                        <h3 class="info-stat-header font-heading">29</h3>
                        <p class="info-stat-text">Countries<a class="icn cw-icon-question-sign" data-behavior="Modal" href="#stat-info-3"></a></p>
                        <div class="hidden" id="stat-info-3">
                           <h4 class="title">Countries</h4>
                           <div class="inner">
                              <p class="p30 mt-2">This number includes all countries where we have funded&nbsp;projects.</p>
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
                     <h2 class="mx-auto text-kazimir h35 balance-text mt-2">You have our word—and more</h2>
                     <p class="balance-text mx-auto mt-2 leading-snug">When charity: water began, we made a bold promise: 100% of public donations would go directly to fund clean water projects. Private donors cover our operating costs so 100% of your money can fund water projects.</p>
                     <a class="button button--text mt-1" href="our-approach/100-percent-model">Learn about our model </a>
                  </div>
               </div>
               <div class="bg-cw-accent-200 pb-5"></div>
               <div class="px-3 pt-3 pb-2 trust-banner-spacing">
                  <div class="md-max-w-sm mx-auto -z-10 trust-banner-bubble tbb-triangle md-p-3 p-2">
                     <p class="md-px-2 leading-5">You deserve to give with confidence, so we’ll always stand by our 100% Model. But we don’t stop there. From our financials, to our tech, to the environmental sustainability of our water projects: “good enough” is never good enough for us. We’re setting new standards for transparency and innovation. These companies and organizations agree.</p>
                  </div>
                  <div class="max-w-lg mx-auto py-2 md-px-3 relative bg-cw-white mt-2 flex justify-center">
                     <div class="lg-hidden block max-w-xs"><img class="w-full" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/3Noc1qwsL2hRF2lpKS64iu/fb1ec2e466ff533c0a10c0286cf1e971/trust-banner-mobile6ed9.png?ixlib=rails-4.1.0&amp;auto=format&amp;w=800&amp;fm=png&amp;s=fbc06495d3089dc0f7ab04766d54e137" loading="lazy" /></div>
                     <div class="hidden lg-block"><img class="trust-banner" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/5H5cMMlhBltKlHnzL6pBFk/8e8a9357e302adf063cea6988083a2db/trust-bannerea1a.png?ixlib=rails-4.1.0&amp;auto=format&amp;w=3272&amp;fm=png&amp;s=10107a05177dd9e64d19d15181bdba2e" loading="lazy" /></div>
                  </div>
               </div>
               <div class="bg-grey-5 p-3">
                  <div class="row md-p-0 p-3">
                     <h2 class="h35 mx-auto text-kazimir">How we work</h2>
                     <p class="balance-text mx-auto mt-2 leading-snug">We want you to know exactly how and where your donation is being used. So from the beginning, we’ve kept a few promises.</p>
                     <div class="about-org mt-4">
                        <div class="org-links">
                           <div class="columns large-4 org-block">
                              <a href="our-projects/completed-projects/index.html"><img class="" width="160" height="" src="vite/assets/icon-pin-2e3db337.png" loading="lazy" /></a>
                              <h2 class="h60 pt-2">We prove every project</h2>
                              <p class="p30 pt-1 pb-1">We track every dollar you raise and show the projects you helped fund with photos and GPS coordinates.</p>
                              <p class="p40"><a class="button button--text" href="our-projects/completed-projects/index.html"> See proof</a></p>
                           </div>
                           <div class="columns large-4 org-block mt-3 lg-mt-0">
                              <a href="about/financials.html"><img class="w-32" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/50639sn4FcOQvnmJ9zf2WZ/ca192d807660571b41d6aaff828e41e8/magnifying_glass_illustrationd2b9.png?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;fm=png&amp;s=99de4f1716d31b1bc35e88cbf2d1568c" loading="lazy" /></a>
                              <h2 class="h60 pt-2">We’re an open book</h2>
                              <p class="p30 pt-1 pb-1">We’ve consistently received the highest grades available for accountability and transparency.</p>
                              <p class="p40"><a class="button button--text" href="about/financials.html"> View all financials</a></p>
                           </div>
                           <div class="columns large-4 org-block">
                              <a href="our-work/how-we-work"><img class="" width="160" height="" src="vite/assets/icon-tools-3c973f40.png" loading="lazy" /></a>
                              <h2 class="h60 pt-2">We work with local partnerships</h2>
                              <p class="p30 pt-1 pb-1">We partner with experienced local partners to build sustainable, community-owned water projects.</p>
                              <p class="p40"><a class="button button--text" href="our-work/how-we-work"> Learn more</a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="w-full md-flex">
                  <div class="hidden md-block w-1/4"><img class="w-full pr-nudge object-cover object-center h-full max-h-full" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/2bRHGjGqZCGG5NaSkzXF6p/51cc17a108fc7a2b695df1b2034552ff/about_trust_banner_leftc67f.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;s=07a133c5a1a1502e94ab323fd57ba2a7" loading="lazy" /></div>
                  <div class="bg-cw-blue p-2 mb-nudge md-mb-0 md-flex md-flex-col justify-center md-w-1/2">
                     <h4 class="h40 mt-1 mb-2 mx-2 text-cw-white">Ready to give the gift of clean water?</h4>
                     <p class="p30 mx-3 mb-2 text-cw-white">Every $40 can end a walk for water, and 100% of your donation will fund clean water projects.</p>
                     <div class="div"><a class="button button--outline-white my-1" href="donate.html">Give today</a></div>
                  </div>
                  <div class="flex md-w-1/4">
                     <div class="md-hidden block w-1/2"><img class="w-full pr-nudge object-cover object-center h-full" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/2bRHGjGqZCGG5NaSkzXF6p/51cc17a108fc7a2b695df1b2034552ff/about_trust_banner_leftc67f.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;s=07a133c5a1a1502e94ab323fd57ba2a7" loading="lazy" /></div>
                     <div class="md-hidden block w-1/2"><img class="w-full object-cover object-center h-full" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/4m9P4eYzQNOBdPHNTq4ZO/4884c75be24fe3a5aaa3b7cd6f2594ae/Rectangle_1844d075.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;fm=png&amp;s=e8ead2bbb855ab3da4875ae8a0898b75" loading="lazy" /></div>
                     <div class="hidden md-block"><img class="w-full md-pl-nudge object-cover object-center h-full" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/1HnihBcvnykCayq9tL9hc3/d6f9a4d52b075649395a343862422bc5/about_trust_banner_right85c8.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;s=b6617a67599d3c316b4e2dae2623832e" loading="lazy" /></div>
                  </div>
               </div>
            </section>
            <section class="mt-4 pt-4 border-0 border-solid border-t border-grey-30 row-lg px-2">
               <div class="max-w-md mx-auto">
                  <h2 class="text-kazimir h35 leading-snug">Leading the team</h2>
                  <p class="balance-text mx-auto leading-snug mt-2">Facing a problem as big as the water crisis requires an incredible team. We&rsquo;re grateful to have some of the most innovative and committed leaders guiding our&nbsp;organization.</p>
               </div>
               <div class="lg-grid lg-grid-cols-2 lg-gap-4 items-center mt-3 md-mt-4">
                  <div class="mb-3 lg-mb-0"><img class="block w-full object-cover" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/6XcZd2awRzGdwPIFFFYj8O/aafbe4ba50dadaf2a1489145cf076681/scott_harrison_charity_water2d1d.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=1200&amp;s=906606413d4ef645eb29c46f7d12880a" loading="lazy" /></div>
                  <div class="text-left lg-px-4">
                     <span class="text-xs font-medium tracking-wide uppercase text-grey-50">Our Founder</span>
                     <h3 class="text-kazimir h40 mt-1 md-mt-2">Scott Harrison</h3>
                     <p class="mt-2">After a decade of indulging his darkest vices as a nightclub promoter, Scott declared spiritual, moral, and emotional bankruptcy. He spent two years on a hospital ship off the coast of Liberia, saw the effects of dirty water firsthand, and came back to New York City on a&nbsp;mission.</p>
                     <a class="button button--text mt-2" href="about/scott-harrison-story.html">Hear Scott’s Story</a>
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
                                 <h3 class="text-sm">Michael Wilkerson</h3>
                                 <p class="text-xs board-member-title mt-5px">Chair</p>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="2">
                                 <h3 class="text-sm">Angela Ahrendts</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="3">
                                 <h3 class="text-sm">Brant Cryder</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="4">
                                 <h3 class="text-sm">Brook Hazelton</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="5">
                                 <h3 class="text-sm">Chi-Hua Chien</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="6">
                                 <h3 class="text-sm">Chidi Achara</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="7">
                                 <h3 class="text-sm">Ije Nwokorie</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="8">
                                 <h3 class="text-sm">Ryan Graves</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="9">
                                 <h3 class="text-sm">Scott Harrison</h3>
                                 <p class="text-xs board-member-title mt-5px">Founder</p>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="10">
                                 <h3 class="text-sm">Shannon Sedgwick Davis</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="11">
                                 <h3 class="text-sm">Valerie Donati</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="12">
                                 <h3 class="text-sm">Chris Barton</h3>
                                 <p class="text-xs board-member-title mt-5px">Secretary</p>
                              </a>
                           </div>
                           <div class="lg-border-0 lg-border-grey-30 lg-border-l lg-border-solid lg-ml-3 lg-pl-3 lg-pt-2 w-1/2">
                              <h3 class="text-sm mb-2">International Board of Directors</h3>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="13">
                                 <h3 class="text-sm">Ije Nwokorie</h3>
                                 <p class="text-xs board-member-title mt-5px">Chair</p>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="14">
                                 <h3 class="text-sm">Eniola Aluko</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="15">
                                 <h3 class="text-sm">Luke Beauchamp</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="16">
                                 <h3 class="text-sm">Dr. Mara Klemich, Ph.D.</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="17">
                                 <h3 class="text-sm">Rachel Manktelow</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="18">
                                 <h3 class="text-sm">Sam Lawson Johnston</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="19">
                                 <h3 class="text-sm">Scott Harrison</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="20">
                                 <h3 class="text-sm">Valerie Donati</h3>
                              </a>
                              <a class="block no-underline generic-selector-item" data-show-slide-item="21">
                                 <h3 class="text-sm">Chris Barton</h3>
                                 <p class="text-xs board-member-title mt-5px">Secretary</p>
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
                                       <h4 class="h50">Michael Wilkerson</h4>
                                       <p class="text-xs mt-5px">Chair</p>
                                       <p class="mt-2 leading-snug text-left">Michael Wilkerson is the executive vice chairman of Helios Fairfax Partners, the world&rsquo;s largest Africa-focused investment firm. Prior to its merger with Helios Investment Partners, Wilkerson was chief executive officer of Toronto-Stock-Exchange-listed Fairfax Africa Holdings Corp. Wilkerson is also the author of &ldquo;Stormwall: Observations on America in Peril&rdquo; and a contributing author to leading publications and media outlets, providing commentary and analysis on economics, finance, history, and&nbsp;politics.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Angela">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/3o5X18Z5yrOKiZTAtWyPQd/fcb4c65a21868bc6b52b45f662b6105e/angela-v271a3.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=76a13d12be6eb581b83e5c56ffe60781" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Angela Ahrendts</h4>
                                       <p class="mt-2 leading-snug text-left">Angela Ahrendts DBE was most recently senior vice president of Apple Retail where she redesigned Apple&rsquo;s physical and digital businesses to create a seamless customer journey for over a billion visitors a year and 70,000 global employees. Prior to Apple, as the CEO of Burberry, she transformed and tripled the company&rsquo;s value. Her leadership was pivotal at Liz Claiborne where they acquired and integrated 22 brands, and prior, as president of Donna Karan International. Ahrendts also serves as chair of the board for Save the Children Int&rsquo;l and is on the boards of Airbnb, Ralph Lauren, and&nbsp;WPP.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Brant">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/1k8dNeA6G4iERQtrThGPI0/fcdff7bb3b81257ca886f66b8e9e5f54/Brant-Updated-Photo77cf.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=5a5eb4f5f442f658505668a09c9eeb23" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Brant Cryder</h4>
                                       <p class="mt-2 leading-snug text-left">Brant Cryder is the president and CEO of Saint Laurent Americas. Before rejoining the Kering Group, he spent 12 years at the Prada Group. Cryder and his wife, Mary, have been married for over 20 years, and together, they have an adventurous family of four children. Cryder also has a passion for music and cultural transformation, and he continues to speak and DJ events globally. From the beginning, Cryder has been a proud champion of Scott Harrison and charity:&nbsp;water.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Brook">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/3bFRtTFAQiLdls71a7DeGf/63a659cd2c8fc9b1fc0206d17fef4a12/Brook-Hazelton4dec.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=a6ad7df1a0164aaa180c10757d95ffc7" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Brook Hazelton</h4>
                                       <p class="mt-2 leading-snug text-left">Brook Hazelton is the president and co-CEO of Digital Reasoning, an artificial intelligence company. Previously, he served as the president for North and South America of the world's leading art company, Christie&rsquo;s. Hazelton began his career in finance while working internationally with Goldman Sachs and The Carlyle Group, and he remains a private investor and co-founder of St. James Partners, an investment&nbsp;business.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Chi-Hua">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/HezGZTQDva0MgGnEFbXqE/6f5e272b039fbe4387b3a39938ec986e/Chi-Hua_Chien_headshot_400x400c0f8.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=e90e949cf99ff80e3262b6b3bfeb9fb9" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Chi-Hua Chien</h4>
                                       <p class="mt-2 leading-snug text-left">Chi-Hua Chien is the co-founder and managing partner of Goodwater Capital, a consumer-tech venture capital firm. Over the course of his career as a venture investor, Chien has funded and worked closely with a number of iconic consumer internet companies including Facebook, Twitter, Spotify, Chegg, Monzo, musically/TikTok, Stash, TIER, and Weee! Prior to launching Goodwater in 2014, Chien was a general partner at Kleiner Perkins Caufield &amp;&nbsp;Byers.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Chidi">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/5WmxybpSAFwbQ3oSVajMbt/3dfec452109d76590831a3f7abd39edd/chidi-v262d9.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=3c7ba17a563b2c4c2bb0fa1d3299a791" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Chidi Achara</h4>
                                       <p class="mt-2 leading-snug text-left">Chidi Achara is the chief creative officer at Stash, a digital platform that makes investing easy and affordable for millions of everyday Americans. At Stash, he oversees branding, advertising, design, and PR/communications. Achara is also focused on fostering diversity, inclusion, and social justice inside and outside of the company, and his corporate work has been recognized by Ebony, Black Enterprise, and Profile&nbsp;magazines.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Ije">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/5bPlqcnvQPlHkaeGmbVTv6/eddbedb7e871c0d79997b7838321caf5/Ije-Nwokorieb4a3.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;fm=png&amp;s=da8115a4330c9f1b3c95a9597924c345" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Ije Nwokorie</h4>
                                       <p class="mt-2 leading-snug text-left">Ije Nwokorie is a senior director at Apple and enjoys balancing technology, creativity, and leadership—subjects he writes and tells stories about regularly. He previously spent 11 years as the CEO of the creative consultancy Wolff Olins and oversaw offices in London, New York, and San Francisco. While Nwokorie was born in America and now lives in London, he spent his early years in rural Nigeria, which he credits for forging his creative outlook and affinity for&nbsp;wonder.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Ryan">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/4J4yNKKH3i3KoVztVJ245Z/7f773bd4a808cd181ba3a7879f12f61b/ryan-v271de.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=da5c75758e1e253d022bf63fe9c7c30f" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Ryan Graves</h4>
                                       <p class="mt-2 leading-snug text-left">Ryan Graves is the CEO of Saltwater, a private technology holding company. He previously served as the senior vice president of global operations at Uber and was the first employee of the company. He grew the business from 1 to 17,000 employees and into 600+ cities by leading operations, strategy, global expansion, and people&nbsp;operations.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Scott">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/7ztYKrA8615drdewaCQx6Z/c7b67fb21ab5249c389cde4f26056388/scott-harrison-squaredb31.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=7a9b225d73d99707a0cabd0ccbc0049b" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Scott Harrison</h4>
                                       <p class="text-xs mt-5px">Founder</p>
                                       <p class="mt-2 leading-snug text-left">Scott Harrison founded charity:&nbsp;water in 2006 and continues to lead the organization today. Harrison has been recognized on Fortune Magazine&rsquo;s 40 under 40 list, on the Forbes Magazine Impact 30 list, and in Fast Company&rsquo;s 100 Most Creative People in Business issue. He is also the <em>New York Times Bestselling</em> author of &ldquo;Thirst,&rdquo; a memoir documenting his journey from nightclub promoter to charity:&nbsp;water&nbsp;founder.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Shannon">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/1yH7t6MQGnrhpKBG8uSDmn/adebfca99c357610da0e5221884a476e/shannon-v2980a.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=c2be308a6f4d686d7a5e85b2830aec3a" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Shannon Sedgwick Davis</h4>
                                       <p class="mt-2 leading-snug text-left">Shannon Sedgwick Davis is the CEO of the Bridgeway Foundation, the charitable giving arm of Bridgeway Capital Management, Inc. As an attorney, Davis is a passionate advocate for social justice and international human rights. She is also a well-known strategist engaged in promoting peace and ending human atrocities across our&nbsp;globe.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Valerie">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/49KV7wBmkD8CWplXFvneOa/9a108eda9f1432ab45f66da1234c792b/Valerie-Donati53ef.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=08778e903564555caed4d994cf6bc831" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Valerie Donati</h4>
                                       <p class="mt-2 leading-snug text-left">Valerie Donati founded Brand Building Communications in January 2007 in New York City. In addition to pioneering an award-winning digital word-of-mouth marketing practice, Donati created a community-based online lifestyle news platform, 24/Savvy, in 2010. She also created the volunteer tracking app Zoe Blueprint in&nbsp;2020.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Chris">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/5pJU47WwRW5VBNHCaRkKFd/7d8cce330b46974c117eb1fdd1d94c87/6578chris-barton-sqa797.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=cec588a9b12f6c802c323bc955894b96" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Chris Barton</h4>
                                       <p class="text-xs mt-5px">Secretary</p>
                                       <p class="mt-2 leading-snug text-left">Chris Barton, charity:&nbsp;water&rsquo;s general counsel, is secretary of the board of directors and secretary of the board of charity:&nbsp;water&rsquo;s UK entity. Prior to charity:&nbsp;water, Barton was general counsel to a variety of international businesses, an associate at two international law firms, and a lawyer for the US government. Barton also clerked for Judge Hugh Bownes of the US Court of Appeals for the First&nbsp;Circuit.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Ije">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/5bPlqcnvQPlHkaeGmbVTv6/eddbedb7e871c0d79997b7838321caf5/Ije-Nwokorieb4a3.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;fm=png&amp;s=da8115a4330c9f1b3c95a9597924c345" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Ije Nwokorie</h4>
                                       <p class="text-xs mt-5px">Chair of the International Board</p>
                                       <p class="mt-2 leading-snug text-left">Ije Nwokorie is a senior director at Apple and enjoys balancing technology, creativity, and leadership—subjects he writes and tells stories about regularly. He previously spent 11 years as the CEO of the creative consultancy Wolff Olins and oversaw offices in London, New York, and San Francisco. While Nwokorie was born in America and now lives in London, he spent his early years in rural Nigeria, which he credits for forging his creative outlook and affinity for&nbsp;wonder.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Eniola">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/5eELebJz5ZAmkkIiy1yxrR/0d39f2d63b4ff6dbfd04d17c4d48d02f/Eniola5696.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=460dad9ad0cbeaea2c440d6b73d5e123" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Eniola Aluko</h4>
                                       <p class="text-xs mt-5px">International Board Member</p>
                                       <p class="mt-2 leading-snug text-left">Eniola Aluko is a British-Nigerian football executive and the director of women&rsquo;s football at Aston Villa. As a former professional player, Aluko played for England 102 times and continues to act as a pundit and commentator. She is passionate about the wellbeing, self-image, confidence, and equality of women and girls around the world and has delivered multiple keynote speeches on the&nbsp;topic.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Luke">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/5QhrI8KzdqQRkqW0zXtDuG/f18f79debce2f4017413438049fb2a82/luke-b2ee9.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=4fb4a759459ef10119e4c4604a60dab6" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Luke Beauchamp</h4>
                                       <p class="text-xs mt-5px">International Board Member</p>
                                       <p class="mt-2 leading-snug text-left">At APRCO, a global production consultancy, Luke Beauchamp serves as the managing director for Europe, the Middle East, and Africa. His team supports brands by developing marketing strategies and creating assets for all&nbsp;channels.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Dr. Mara">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/421Np4TrKxW5Ein7VaASmY/8d2f531fbcf0bce35d9b5e152291bfa4/Mara_Kb492.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=667c0590007550a46f8135e36f89944c" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Dr. Mara Klemich, Ph.D.</h4>
                                       <p class="text-xs mt-5px">International Board Member</p>
                                       <p class="mt-2 leading-snug text-left">Dr. Mara Klemich is co-founder of Heartstyles, and co-creator of the Heartstyles Indicator—a personal development and organizational culture development tool. She has over 30 years of experience as a consulting psychologist and neuropsychologist. In addition, Dr. Klemich works as an organizational psychologist in personal, leadership, and culture development&nbsp;consulting.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Rachel">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/6wKZ0m8nmE39NmQt2ROBEH/4885fba58d4c64d0a2549c9b1c9b8ea9/16118543965257282.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=74f4b80a6eea66347ef46713289a0bdf" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Rachel Manktelow</h4>
                                       <p class="text-xs mt-5px">International Board Member</p>
                                       <p class="mt-2 leading-snug text-left">Rachel’s professional journey reflects her entrepreneurial spirit and mastery at facilitating positive change. After serving as a change management consultant at PWC, Rachel co-founded Mind Tools in 2003. In her 16-year tenure, Rachel developed Mind Tools into a global leader in career coaching with a values-driven culture that empowers people to do their best work. Rachel and her husband, James, have supported charity: water as personal supporters since 2019. Today, Rachel is thriving as an advisor to a selection of businesses and nonprofits.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Sam">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/7sKjOtE83cp7Kn68XuBRo6/1d97acfe14953b02667ac787a962a002/Sam_LJ207b.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=63607237061902d6b2835070257fae55" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Sam Lawson Johnston</h4>
                                       <p class="text-xs mt-5px">International Board Member</p>
                                       <p class="mt-2 leading-snug text-left">Sam Lawson Johnston co-founded the commercial real estate investment company, Kinrise. Kinrise&rsquo;s vision is to renew UK cities by restoring iconic buildings and creating workspaces that inspire and enable culture, community, and company growth. Lawson Johnston is also the co-founder and non-executive director of luxury eyewear brand Finlay London and is a trustee of Hackney Church,&nbsp;London.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Scott">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/7ztYKrA8615drdewaCQx6Z/c7b67fb21ab5249c389cde4f26056388/scott-harrison-squaredb31.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=7a9b225d73d99707a0cabd0ccbc0049b" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Scott Harrison</h4>
                                       <p class="text-xs mt-5px">International Board Member</p>
                                       <p class="mt-2 leading-snug text-left">Scott Harrison founded charity:&nbsp;water in 2006 and continues to lead the organization today. Harrison has been recognized on Fortune Magazine&rsquo;s 40 under 40 list, on the Forbes Magazine Impact 30 list, and in Fast Company&rsquo;s 100 Most Creative People in Business issue. He is also the <em>New York Times Bestselling</em> author of &ldquo;Thirst,&rdquo; a memoir documenting his journey from nightclub promoter to charity:&nbsp;water&nbsp;founder.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Valerie">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/49KV7wBmkD8CWplXFvneOa/9a108eda9f1432ab45f66da1234c792b/Valerie-Donati53ef.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=08778e903564555caed4d994cf6bc831" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Valerie Donati</h4>
                                       <p class="text-xs mt-5px">International Board Member</p>
                                       <p class="mt-2 leading-snug text-left">Valerie Donati founded Brand Building Communications in January 2007 in New York City. In addition to pioneering an award-winning digital word-of-mouth marketing practice, Donati created a community-based online lifestyle news platform, 24/Savvy, in 2010. She also created the volunteer tracking app Zoe Blueprint in&nbsp;2020.</p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="swiper-slide h-auto" data-name="Chris">
                              <div class="px-2 lg-pl-4 py-3 lg-text-left lg-flex lg-items-center slide-bg-wrapper h-full lg--ml-4">
                                 <div class="lg-flex lg-items-start lg-pb-3 lg-pr-4">
                                    <img class="block rounded-full mx-auto mb-2 lg-mb-0 object-cover" width="100" height="100" src="../cw-contentful-assets.imgix.net/https_/images.ctfassets.net/wvozpes63uc8/5pJU47WwRW5VBNHCaRkKFd/7d8cce330b46974c117eb1fdd1d94c87/6578chris-barton-sqa797.jpg?ixlib=rails-4.1.0&amp;auto=format&amp;w=200&amp;s=cec588a9b12f6c802c323bc955894b96" loading="lazy" />
                                    <div class="lg-flex-1 lg-ml-2">
                                       <h4 class="h50">Chris Barton</h4>
                                       <p class="text-xs mt-5px">International Board Secretary</p>
                                       <p class="mt-2 leading-snug text-left">Chris Barton, charity:&nbsp;water&rsquo;s general counsel, is secretary of the board of directors and secretary of the board of charity:&nbsp;water&rsquo;s UK entity. Prior to charity:&nbsp;water, Barton was general counsel to a variety of international businesses, an associate at two international law firms, and a lawyer for the US government. Barton also clerked for Judge Hugh Bownes of the US Court of Appeals for the First&nbsp;Circuit.</p>
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
                        <span class="block mb-2 text-eyebrow-cw-black">Opportunities</span>
                        <h2 class="text-kazimir h35 balance-text mx-auto leading-snug">Change the world with&nbsp;us</h2>
                        <div class="max-w-xs mt-1 mx-auto">
                           <p class="md-px-4 mx-auto">We&rsquo;re hiring! Explore our openings and join the&nbsp;team.</p>
                        </div>
                        <div class="md-flex mt-2 justify-center"><a class="block" href="about/jobs.html">Careers</a><span class="show-for-medium-up mx-2 text-cw-navy">&bull;</span><a class="block mt-2 md-mt-0" href="about/internships">Internships</a></div>
                     </div>
                  </div>
               </div>
            </section>
         </div>
         <div data-component="CountryIntercept" data-props="{&quot;continueUrl&quot;:&quot;/uk/about&quot;,&quot;countryToDetect&quot;:&quot;GB&quot;}"></div>
         <footer class="cw-footer no-top-border">
            <div class="mailing-list-and-info w-full bg-grey-5 text-center flex flex-col border-b border-r border-l border-solid border-0 border-grey-30 rounded-b lg-flex-row lg-text-left items-center">
               <div class="optional-text normal-case pb-2 lg-pb-0 text-cw-black lg-w-1/3">
                  <h6 class="h70">Add Impact To Your Inbox</h6>
                  <p class="p40">Get our emails to stay in the&nbsp;know.</p>
               </div>
               <div class="infosite-mailing-list-form">
                  <form class="simple_form w-full mt-3" id="mailing-list-form" data-behavior="RateLimitedRecaptchaForm StoreUtmParams AnalyticsId" data-with-credentials="true" data-store-utm-params-model="mailing_list_subscriber" action="https://www.charitywater.org/mailing_list_subscribers" accept-charset="UTF-8" data-remote="true" method="post">
                     <div class="name-email-wrapper md-flex">
                        <div class="mailing-input-names md-flex md-justify-center max-w-xs mx-auto">
                           <div class="mailing-input-wrapper name first md-flex-1"><label class="for-screen-readers-only" for="user_name">First Name</label><input class="string required border-b-0 md-border-b md-border-r-0 rounded-none" required="required" data-parsley-error-message="Please provide your first name" aria-required="true" placeholder="First name" maxlength="255" size="255" type="text" name="user[name]" id="user_name" /></div>
                           <div class="mailing-input-wrapper surname mt-0 md-mt-0 md-flex-1"><label class="for-screen-readers-only" for="user_surname">Last Name</label><input class="string required rounded-none" required="required" data-parsley-error-message="Please provide your last name" aria-required="true" placeholder="Last name" maxlength="255" size="255" type="text" name="user[surname]" id="user_surname" /></div>
                        </div>
                        <div class="mailing-input-wrapper email mt-1 max-w-xs mx-auto second"><label class="for-screen-readers-only" for="user_email">Email</label><input class="string email required rounded-none" required="required" data-parsley-email-tld="" data-parsley-error-message="Please provide a valid email address" aria-required="true" placeholder="Email" type="email" value="" name="user[email]" id="user_email" /></div>
                        <button name="button" type="submit" class="button button button--expand mailing-list-sign-up-button max-w-xs mx-auto mt-1">Subscribe</button>
                     </div>
                     <input value="us" autocomplete="off" type="hidden" name="user[country]" id="user_country" /><input name="mailing_list_subscriber[main_list]" value="true" autocomplete="off" type="hidden" id="user_main_list" /><input value="footer" autocomplete="off" type="hidden" name="user[place]" id="user_place" /><input name="offer" value="newsletter" id="offer" autocomplete="off" type="hidden" /><input name="thank_you_flash_message" autocomplete="off" type="hidden" id="user_thank_you_flash_message" /><input name="thank_you_page_path" value="/mailing-list-subscribers/thank-you" autocomplete="off" type="hidden" id="user_thank_you_page_path" /><input name="use_inline_thank_you_block" autocomplete="off" type="hidden" id="user_use_inline_thank_you_block" /><input name="send_default_welcome_emails" value="true" autocomplete="off" type="hidden" id="user_send_default_welcome_emails" /><input name="custom_welcome_journey_id" autocomplete="off" type="hidden" id="user_custom_welcome_journey_id" /><input name="offer_journey_id" autocomplete="off" type="hidden" id="user_offer_journey_id" /><input name="analytics_id" data-analytics-id="true" autocomplete="off" type="hidden" id="user_analytics_id" />
                     <div data-component="RecaptchaBadge" data-props="{}"></div>
                  </form>
                  <div data-component="RecaptchaText" data-props="{&quot;classes&quot;:&quot;mt-1&quot;}"></div>
               </div>
            </div>
            <div class="cw-footer-top-row border-b border-solid border-0 border-grey-30 my-3 us-toggle">
               <ul class="mt-0 mb-4 w-1/2 md-w-1/4">
                  <li class="cw-footer-header">Get to know us</li>
                  <li><a href="about.html">About Us</a></li>
                  <li><a href="about/financials.html">See Our Financials</a></li>
                  <li><a href="about/jobs.html">Careers</a></li>
               </ul>
               <ul class="mt-0 mb-4 w-1/2 md-w-1/4">
                  <li class="cw-footer-header">Connect</li>
                  <li><a href="contact">Contact Us</a></li>
                  <li><a href="../support.charitywater.org/hc/en-us.html">Help center</a></li>
                  <li><a href="about/request-speaker.html">Request a Speaker</a></li>
                  <li><a href="../store.charitywater.org/index.html" rel="noopener noreferrer" target="_blank">Shop our store</a></li>
               </ul>
               <ul class="mt-0 mb-2 w-1/2 md-w-1/4">
                  <li class="cw-footer-header">Get Involved</li>
                  <li><a href="get-involved/fundraise.html">Fundraise</a></li>
                  <li><a href="brand-partnerships.html">Brand Partnerships</a></li>
                  <li><a href="the-tributary.html">Legacy Giving</a></li>
                  <li><a href="get-involved/kids">Students &amp; Teachers</a></li>
               </ul>
               <ul class="mt-0 mb-4 w-1/2 md-w-1/4">
                  <li class="cw-footer-header">Donate</li>
                  <li><a href="donate/the-spring.html">Join the Spring</a></li>
                  <li><a href="get-involved/find-a-campaign.html">Give to a Campaign</a></li>
                  <li><a href="donate/in-honor-of">Give in Someone&#39;s Honor</a></li>
                  <li><a href="donate/water-project-sponsorship.html">Sponsor a community</a></li>
               </ul>
            </div>
            <div class="row flex flex-col lg-flex-row mt-0 footer-social-and-country-wrapper">
               <div class="w-full footer-social-wrapper lg-w-3/4">
                  <div class="row">
                     <ul class="mx-auto justify-center lg-justify-start flex footer-social-wrapper">
                        <li class="cw-footer-social-twitter mr-2"><a class="text-base" href="https://twitter.com/charitywater"><span class="cw-icon-twitter icn"><span class="for-screen-readers-only">Twitter</span></span></a></li>
                        <li class="cw-footer-social-facebook mr-2"><a class="text-base" href="../web.facebook.com/charitywaterc9ef.html"><span class="cw-icon-facebook icn"><span class="for-screen-readers-only">Facebook</span></span></a></li>
                        <li class="cw-footer-social-instagram mr-2"><a class="text-base" href="../www.instagram.com/charitywater/index.html"><span class="cw-icon-instagram icn"><span class="for-screen-readers-only">Instagram</span></span></a></li>
                        <li class="cw-footer-social-snapchat mr-2"><a class="text-base" href="../www.snapchat.com/add/charitywater.html"><span class="cw-icon-snapchat icn"><span class="for-screen-readers-only">Snapchat</span></span></a></li>
                        <li class="cw-footer-social-youtube mr-2"><a class="text-base" href="../www.youtube.com/user/charitywater.html"><span class="cw-icon-youtube icn"><span class="for-screen-readers-only">Youtube</span></span></a></li>
                        <li class="cw-footer-social-linkedin"><a href="../uk.linkedin.com/company/charitywater.html"><span class="cw-icon-linkedin icn"><span class="for-screen-readers-only">Linkedin</span></span></a></li>
                     </ul>
                  </div>
                  <div class="row mt-1">
                     <ul class="my-0 mt-0 flex justify-center lg-justify-start flex-col md-flex-row text-center cw-footer-secondary-links">
                        <li class="pl-0"><a href="privacy">Privacy policy</a></li>
                        <li class="px-1 hidden md-inline-block footer-last-bullet">•</li>
                        <li class="footer-email-signup-link"><a class="cw-footer-emph" href="mailing_list_subscribers/new">Get our emails</a></li>
                     </ul>
                  </div>
               </div>
               <div class="mx-auto mt-2 lg-mt-0 w-full max-w-xs footer-country-container lg-w-1/4">
                  <div data-component="CountrySwitcher" data-props="{&quot;mirrorUrl&quot;:&quot;/uk/about&quot;,&quot;ukCurrencyFullName&quot;:&quot;Pound sterling&quot;,&quot;ukFlagIconUrl&quot;:&quot;/vite/assets/uk-flag-70f19208.svg&quot;,&quot;usCurrencyFullName&quot;:&quot;United States dollar&quot;,&quot;usFlagIconUrl&quot;:&quot;/vite/assets/us-flag-d982a867.svg&quot;}"></div>
               </div>
            </div>
            <div class="row text-center lg-text-left mt-2 flex flex-col lg-flex-row lg-justify-between items-center">
               <div class="lg-mt-0">
                  <p class="cw-footer-fine-print h80 text-grey-50 normal-case us-toggle">charity: water is a 501(c)(3) non-profit organization.</p>
                  <p class="cw-footer-fine-print h80 text-grey-50 normal-case us-toggle">100% of public donations go directly to fund clean water projects.</p>
               </div>
               <div class="lg-mt-0 mt-1 trust-banner-logos"><img src="vite/assets/trust-banner-logos-ad037b66.png" loading="lazy" /></div>
            </div>
            <div class="row text-center lg-text-left mt-2">
               <p class="cw-footer-fine-print h80 mt-1 text-grey-50 normal-case us-toggle"><span>&copy; 2023 | charity: water Donation Processing Center, PO Box 5026, Hagerstown, MD 21741-5026 | 1 Devonshire St, London W1W 5DR | Charity Global, Inc., a US 501 (c)(3) public charity, EIN 22-3936753 and an ANBI in the Netherlands, RSIN 826151656. Charity Global UK Limited is a dual-qualified charity registered in England and Wales, charity number 1169228. Charity Global UK Limited is wholly owned by Charity&nbsp;Global,&nbsp;Inc.</span></p>
            </div>
         </footer>
         <script src="../cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script><script src="../cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script><script src="vite/assets/application-e8f7a172.js" crossorigin="anonymous" type="module"></script>
         <link rel="modulepreload" href="vite/assets/mobx.esm-a9f82a4a.js" as="script" crossorigin="anonymous">
         <link rel="stylesheet" href="vite/assets/application-14b33728.css" media="screen" />
         <script>window.translations = {"en":{"full_country_name":"United States","flash":{"actions":{"destroy":{"notice":"%{resource_name} was successfully deleted."}}},"address":{"multi_line":{"city_state_zip":"Hagerstown, MD 21741-5026","street":"Donation Processing Center, PO Box 5026"}},"errors":{"messages":{"missing_name":"Please provide your first name.","missing_surname":"Please provide your last name.","missing_group_name":"Please provide your group's name."}},"d2p":{"virginia_clay":{"campaign_info":"One of our earliest supporters, Virginia\u0026nbsp;Clay, matched September Campaign funds with an additional $1.2 million. The remainder of that donation is funding clean water projects\u0026nbsp;in\u0026nbsp;Ethiopia.","campaign_name":"Virginia Clay"},"wallstrom":{"campaign_info":"$10,000","campaign_name":"The Wallstrom Family"},"info":{"published":"We publish a project when we've approved a final report from our partners and made sure your project is working for the best of the\u0026nbsp;community.","gps":"These are the GPS coordinates of your project, plotted in Google Maps. A GPS (Global Positioning System) coordinate is the exact latitude and longitude of any given point on the Earth’s surface. charity: water uses GPS coordinates to record the location of each water project we fund. Please note: there are many of different formats for GPS. We use degree decimal\u0026nbsp;format.","people_served":"This is the population of the community that has access to your water\u0026nbsp;project.","project_cost":"This is the cost of the water project you funded. Costs vary by country and by project type, and depend on a wide range of variables such as the local cost of fuel and cement at the time your project was built. This project’s cost includes any hygiene training or community maintenance models for the project’s\u0026nbsp;sustainability.","local_partner":"charity: water works with partners in the field to build and implement water projects. Our partners have years of experience. They know the land, the people, the culture and the most appropriate water technology for each area of work. They report this data from the field to help us provide proof of your completed\u0026nbsp;project(s).","project_id":"This ID is how we track your project in our\u0026nbsp;system.","donation_matched":"A generous donor matched this donation.","rehab":"Even the best solutions can experience problems. Previously-built water projects can be rendered unusable due to lack of maintenance, environmental conditions, or other extenuating circumstances. When this happens, our local partners look to rehabilitate broken solutions whenever possible, saving both time and money. We also invest in new maintenance models so the communities can prevent future breakdowns. The end result is a restored water point that brings clean water back to the community."},"simplified_project_types":{"default":{"long_description":"","short_description":"n/a","timeline_description":""},"filter":{"long_description":"\u003cp\u003eWater filters remove harmful contaminants from source water, making it much safer to drink. Our partners take a number of different variables into account when selecting the right solution for a %{location_type}, and when water filtration is selected as the best solution, they often implement BioSand Filters or Ultrafiltration systems. BioSand Filters are made from layers of sand, gravel, and a biological layer called “biofilm.” When cared for properly, they can last up to 30 years. Ultrafiltration systems utilize a booster pump, strainer, carbon filter, and ultrafiltration membrane to remove 99.99% of bacteria and viruses.\u003c/p\u003e","short_description":"water filter(s)","timeline_description":"layers of sand and microbacterial film filter out contaminants."},"handpump":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year."},"latrine":{"long_description":"\u003cp\u003eAfter our partner works with the %{location_type} to assess their specific needs and determine the best solution, the %{location_type} will receive a water point paired with sanitation facilities, which include a block of latrines or toilets and handwashing facilities.\u003c/p\u003e","short_description":"water point and sanitation","timeline_description":"covered shelters provide safety and privacy for bathroom users."},"rainwater":{"long_description":"\u003cp\u003eRainwater generally meets drinking water standards. The process of evaporation and condensation naturally remove any particles in the water, like pathogens and dirt, making it safe to drink. Catchment areas can be made from materials like plastic tarps or concrete. A roof can also serve as a catchment area. Rainwater is then channeled into a vessel to be safely stored until ready to be used.\u003c/p\u003e","short_description":"rainwater harvesting system","timeline_description":"gutters on rooftops direct the flow of rainfall into a sanitary holding tank."},"spring_protection":{"long_description":"\u003cp\u003eSpring protection systems establish a catchment area around the spring to capture clean water as it emerges from the ground. The water is then channeled into a storage tank, where it can be accessed by taps or pipes. This process ensures that clean water stays protected from contaminants and water-borne diseases.\u003c/p\u003e","short_description":"spring protection system","timeline_description":"a system captures and safely stores pure water from a natural spring."},"tap_stand":{"long_description":"\u003cp\u003eA piped system uses energy to distribute water through a network of pipes. Typically sourced from a spring or protected well, water is piped to a storage tank either by gravity or with a mechanized pump. From the storage tank, the water flows through the piped system to tap stands below.\u003c/p\u003e","short_description":"piped system tap stand","timeline_description":"networks of pipes supply water to different community tap stands."}},"project_types":{"Biosand Filters":{"long_description":"\u003cp\u003eWater filters remove harmful contaminants from source water, making it much safer to drink. Our partners take a number of different variables into account when selecting the right solution for a %{location_type}, and when water filtration is selected as the best solution, they often implement BioSand Filters or Ultrafiltration systems. BioSand Filters are made from layers of sand, gravel, and a biological layer called “biofilm.” When cared for properly, they can last up to 30 years. Ultrafiltration systems utilize a booster pump, strainer, carbon filter, and ultrafiltration membrane to remove 99.99% of bacteria and viruses.\u003c/p\u003e","short_description":"water filter(s)","timeline_description":"layers of sand and microbacterial film filter out contaminants.","icon_class":"cw-icon-biosand-filter"},"Deep Borehole":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Deep Borehole (new Well)":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Drilled Borehole":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Drilled Borehole Well":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Drilled borehole with play pump":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-drilled-well"},"Drilled Well":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Drilled Well (Rehabilitated)":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Drilling Rig":{"long_description":"","short_description":"n/a","timeline_description":""},"Filtration System":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-filtration-system"},"Gravity Flow Water System":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-gravity-fed-system"},"Handdug Well (new Well)":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-handdug-well"},"Hand-Dug Well":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-handdug-well"},"Hand-Dug Well (Rehabilitated)":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-handdug-well"},"Handwashing Station":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-latrine"},"Latrine":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-latrine"},"Manually Drilled Well":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Manually Drilled Well (Rehab)":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"New Drilled Borehole":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"New Hand-dug Well":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-handdug-well"},"New Tap Stand":{"long_description":"\u003cp\u003eA piped system uses energy to distribute water through a network of pipes. Typically sourced from a spring or protected well, water is piped to a storage tank either by gravity or with a mechanized pump. From the storage tank, the water flows through the piped system to tap stands below.\u003c/p\u003e","short_description":"piped system tap stand","timeline_description":"networks of pipes supply water to different community tap stands.","icon_class":"cw-icon-tap-system"},"Other":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-rehab"},"Piped System":{"long_description":"\u003cp\u003eA piped system uses energy to distribute water through a network of pipes. Typically sourced from a spring or protected well, water is piped to a storage tank either by gravity or with a mechanized pump. From the storage tank, the water flows through the piped system to tap stands below.\u003c/p\u003e","short_description":"piped system tap stand","timeline_description":"networks of pipes supply water to different community tap stands.","icon_class":"cw-icon-piped-system"},"Piped System - Household Connection":{"long_description":"\u003cp\u003eA piped system uses energy to distribute water through a network of pipes. Typically sourced from a spring or protected well, water is piped to a storage tank either by gravity or with a mechanized pump. From the storage tank, the water flows through the piped system to tap stands below.\u003c/p\u003e","short_description":"piped system tap stand","timeline_description":"networks of pipes supply water to different community tap stands.","icon_class":"cw-icon-piped-system"},"Piped System - On-plot":{"long_description":"\u003cp\u003eA piped system uses energy to distribute water through a network of pipes. Typically sourced from a spring or protected well, water is piped to a storage tank either by gravity or with a mechanized pump. From the storage tank, the water flows through the piped system to tap stands below.\u003c/p\u003e","short_description":"piped system tap stand","timeline_description":"networks of pipes supply water to different community tap stands.","icon_class":"cw-icon-piped-system"},"Piped System - Rehabilitated Tap Stand":{"long_description":"\u003cp\u003eA piped system uses energy to distribute water through a network of pipes. Typically sourced from a spring or protected well, water is piped to a storage tank either by gravity or with a mechanized pump. From the storage tank, the water flows through the piped system to tap stands below.\u003c/p\u003e","short_description":"piped system tap stand","timeline_description":"networks of pipes supply water to different community tap stands.","icon_class":"cw-icon-tap-system"},"Piped System - Tap Stand":{"long_description":"\u003cp\u003eA piped system uses energy to distribute water through a network of pipes. Typically sourced from a spring or protected well, water is piped to a storage tank either by gravity or with a mechanized pump. From the storage tank, the water flows through the piped system to tap stands below.\u003c/p\u003e","short_description":"piped system tap stand","timeline_description":"networks of pipes supply water to different community tap stands.","icon_class":"cw-icon-tap-system"},"Piped Water System":{"long_description":"\u003cp\u003eA piped system uses energy to distribute water through a network of pipes. Typically sourced from a spring or protected well, water is piped to a storage tank either by gravity or with a mechanized pump. From the storage tank, the water flows through the piped system to tap stands below.\u003c/p\u003e","short_description":"piped system tap stand","timeline_description":"networks of pipes supply water to different community tap stands.","icon_class":"cw-icon-piped-system"},"Pipeline Extension":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-gravity-fed-system"},"Pond Sand Filter":{"long_description":"","short_description":"water filter(s)","timeline_description":"layers of sand and microbacterial film filter out contaminants.","icon_class":"cw-icon-pond-sand-filter"},"Rain Water Collection Tank":{"long_description":"\u003cp\u003eRainwater generally meets drinking water standards. The process of evaporation and condensation naturally remove any particles in the water, like pathogens and dirt, making it safe to drink. Catchment areas can be made from materials like plastic tarps or concrete. A roof can also serve as a catchment area. Rainwater is then channeled into a vessel to be safely stored until ready to be used.\u003c/p\u003e","short_description":"rainwater harvesting system","timeline_description":"gutters on rooftops direct the flow of rainfall into a sanitary holding tank.","icon_class":"cw-icon-rainwater-catchment"},"Rain Water Harvesting":{"long_description":"\u003cp\u003eRainwater generally meets drinking water standards. The process of evaporation and condensation naturally remove any particles in the water, like pathogens and dirt, making it safe to drink. Catchment areas can be made from materials like plastic tarps or concrete. A roof can also serve as a catchment area. Rainwater is then channeled into a vessel to be safely stored until ready to be used.\u003c/p\u003e","short_description":"rainwater harvesting system","timeline_description":"gutters on rooftops direct the flow of rainfall into a sanitary holding tank.","icon_class":"cw-icon-rainwater-catchment"},"Rainwater Harvesting":{"long_description":"\u003cp\u003eRainwater generally meets drinking water standards. The process of evaporation and condensation naturally remove any particles in the water, like pathogens and dirt, making it safe to drink. Catchment areas can be made from materials like plastic tarps or concrete. A roof can also serve as a catchment area. Rainwater is then channeled into a vessel to be safely stored until ready to be used.\u003c/p\u003e","short_description":"rainwater harvesting system","timeline_description":"gutters on rooftops direct the flow of rainfall into a sanitary holding tank.","icon_class":"cw-icon-rainwater-catchment"},"Rainwater Harvesting (Rehabilitated)":{"long_description":"\u003cp\u003eRainwater generally meets drinking water standards. The process of evaporation and condensation naturally remove any particles in the water, like pathogens and dirt, making it safe to drink. Catchment areas can be made from materials like plastic tarps or concrete. A roof can also serve as a catchment area. Rainwater is then channeled into a vessel to be safely stored until ready to be used.\u003c/p\u003e","short_description":"rainwater harvesting system","timeline_description":"gutters on rooftops direct the flow of rainfall into a sanitary holding tank.","icon_class":"cw-icon-rainwater-catchment"},"Rainwater Harvesting Tank":{"long_description":"\u003cp\u003eRainwater generally meets drinking water standards. The process of evaporation and condensation naturally remove any particles in the water, like pathogens and dirt, making it safe to drink. Catchment areas can be made from materials like plastic tarps or concrete. A roof can also serve as a catchment area. Rainwater is then channeled into a vessel to be safely stored until ready to be used.\u003c/p\u003e","short_description":"rainwater harvesting system","timeline_description":"gutters on rooftops direct the flow of rainfall into a sanitary holding tank.","icon_class":"cw-icon-rainwater-catchment"},"Rehabilitated Well":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-handdug-well"},"Rehabilitated Tap Stand":{"long_description":"\u003cp\u003eA piped system uses energy to distribute water through a network of pipes. Typically sourced from a spring or protected well, water is piped to a storage tank either by gravity or with a mechanized pump. From the storage tank, the water flows through the piped system to tap stands below.\u003c/p\u003e","short_description":"piped system tap stand","timeline_description":"networks of pipes supply water to different community tap stands.","icon_class":"cw-icon-tap-system"},"Rehabilitation":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-rehab"},"Shallow Bore Hole":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Shallow Borehole (new well)":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Shallow Borehole Well":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Solar Pump":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-rehab"},"Spring Protection":{"long_description":"\u003cp\u003eSpring protection systems establish a catchment area around the spring to capture clean water as it emerges from the ground. The water is then channeled into a storage tank, where it can be accessed by taps or pipes. This process ensures that clean water stays protected from contaminants and water-borne diseases.\u003c/p\u003e","short_description":"spring protection system","timeline_description":"a system captures and safely stores pure water from a natural spring.","icon_class":"cw-icon-spring-protection"},"Spring Protection (Rehabilitated)":{"long_description":"\u003cp\u003eSpring protection systems establish a catchment area around the spring to capture clean water as it emerges from the ground. The water is then channeled into a storage tank, where it can be accessed by taps or pipes. This process ensures that clean water stays protected from contaminants and water-borne diseases.\u003c/p\u003e","short_description":"spring protection system","timeline_description":"a system captures and safely stores pure water from a natural spring.","icon_class":"cw-icon-spring-protection"},"Tap Stand":{"long_description":"\u003cp\u003eA piped system uses energy to distribute water through a network of pipes. Typically sourced from a spring or protected well, water is piped to a storage tank either by gravity or with a mechanized pump. From the storage tank, the water flows through the piped system to tap stands below.\u003c/p\u003e","short_description":"piped system tap stand","timeline_description":"networks of pipes supply water to different community tap stands.","icon_class":"cw-icon-tap-system"},"Toilet":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-latrine"},"Tube Well":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Urban Sanitary Complex":{"long_description":"\u003cp\u003eAfter our partner works with the %{location_type} to assess their specific needs and determine the best solution, the %{location_type} will receive a water point paired with sanitation facilities, which include a block of latrines or toilets and handwashing facilities.\u003c/p\u003e","short_description":"water point and sanitation","timeline_description":"covered shelters provide safety and privacy for bathroom users.","icon_class":"cw-icon-latrine"},"Water Filter":{"long_description":"\u003cp\u003eWater filters remove harmful contaminants from source water, making it much safer to drink. Our partners take a number of different variables into account when selecting the right solution for a %{location_type}, and when water filtration is selected as the best solution, they often implement BioSand Filters or Ultrafiltration systems. BioSand Filters are made from layers of sand, gravel, and a biological layer called “biofilm.” When cared for properly, they can last up to 30 years. Ultrafiltration systems utilize a booster pump, strainer, carbon filter, and ultrafiltration membrane to remove 99.99% of bacteria and viruses.\u003c/p\u003e","short_description":"water filter(s)","timeline_description":"layers of sand and microbacterial film filter out contaminants.","icon_class":"cw-icon-filtration-system"},"Water Filter(s)":{"long_description":"\u003cp\u003eWater filters remove harmful contaminants from source water, making it much safer to drink. Our partners take a number of different variables into account when selecting the right solution for a %{location_type}, and when water filtration is selected as the best solution, they often implement BioSand Filters or Ultrafiltration systems. BioSand Filters are made from layers of sand, gravel, and a biological layer called “biofilm.” When cared for properly, they can last up to 30 years. Ultrafiltration systems utilize a booster pump, strainer, carbon filter, and ultrafiltration membrane to remove 99.99% of bacteria and viruses.\u003c/p\u003e","short_description":"water filter(s)","timeline_description":"layers of sand and microbacterial film filter out contaminants.","icon_class":"cw-icon-filtration-system"},"Water Point \u0026 Sanitation":{"long_description":"\u003cp\u003eAfter our partner works with the %{location_type} to assess their specific needs and determine the best solution, the %{location_type} will receive a water point paired with sanitation facilities, which include a block of latrines or toilets and handwashing facilities.\u003c/p\u003e","short_description":"water point and sanitation","timeline_description":"covered shelters provide safety and privacy for bathroom users.","icon_class":"cw-icon-latrine"},"Water Point And Sanitation":{"long_description":"\u003cp\u003eAfter our partner works with the %{location_type} to assess their specific needs and determine the best solution, the %{location_type} will receive a water point paired with sanitation facilities, which include a block of latrines or toilets and handwashing facilities.\u003c/p\u003e","short_description":"water point and sanitation","timeline_description":"covered shelters provide safety and privacy for bathroom users.","icon_class":"cw-icon-latrine"},"Water Project":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-rehab"},"Water Purification System":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-filtration-system"},"Water Tower":{"long_description":"","short_description":"n/a","timeline_description":"","icon_class":"cw-icon-water-tower"},"Well With Handpump":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"},"Well with Handpump":{"long_description":"\u003cp\u003eWells access subsurface aquifers, which are better protected from microbial contamination than surface water and provide a more reliable supply of water during dry seasons and droughts. Construction begins with studies to identify the most suitable location. Once a location is selected and the aquifer is reached, the well is lined, disinfected, tested, and fitted with a handpump to bring water to the surface.\u003c/p\u003e","short_description":"well with a handpump","timeline_description":"which access aquifers to provide reliable clean water throughout the year.","icon_class":"cw-icon-drilled-well"}}},"views":{"teams":{"default_bio":"%{team_name} has been part of the charity: water community since %{join_year}.","default_tagline":"%{team_name} is helping end the water crisis in our lifetime.","welcome_modal":{"subheader":"Now that you're a member of the team, dollars you raise or donate and Spring members you refer will all contribute to %{team_name}'s Lifetime Impact as well as your own. We can't wait to see what you accomplish\u0026nbsp;together!"}},"campaign_form":{"new_campaign":{"header":"Start a Fundraiser","intro":"Run a fundraising campaign on your public profile to inspire your community. Set a goal, tell the story of your fundraiser, and invite people to support\u0026nbsp;you.","date_picker_format":"mm/dd/yy","date_fns_format":"MM/dd/yyyy","date_fns_edit_format":"MMM dd","date_parse_format":"yyyy-MM-dd","submit_button":"Create Fundraiser","team":{"header":"Start a Team Campaign","intro":"Run a fundraising campaign for your team to inspire your community. Set a goal, tell the story of your fundraiser, and invite people to support\u0026nbsp;your team.","submit_button":"Create Team Campaign"}},"campaign_created":{"header":"Campaign Created!","intro":"Thanks for fundraising with us. We've given your profile a makeover and listed a few ways to jumpstart your campaign. First step: set your personal fundraising goal."}},"subscription_management":{"resume":{"monthly":{"header":"Resume your monthly\u0026nbsp;giving","subheader":"Welcome back! We\u0026apos;re grateful you\u0026apos;ve chosen to resume your monthly gift. Would you like to resume at your most recent amount or choose a different amount to give every month?","footer":"Your payment method will be charged when you click \u0026apos;confirm\u0026apos;. Your following monthly gift will be made on \u003cspan className='hide-in-percy'\u003e %{formatted_next_payment_day}\u003c/span\u003e."},"annual":{"header":"Resume your membership to The\u0026nbsp;Spring","subheader":"Welcome back! We\u0026apos;re grateful you\u0026apos;ve chosen to resume your spring membership. Would you like to resume at your most recent amount or choose a different amount?","footer":"Your payment method will **not** be charged when you click \u0026apos;confirm\u0026apos;. Your following annual gift will be made on \u003cspan className='hide-in-percy'\u003e %{formatted_next_payment_day}\u003c/span\u003e.","unpaid_footer":"Your payment method will be charged when you click 'confirm'. Your following gift will be made on %{formatted_next_payment_day} (1 year after today)."}}},"country_intercept":{"title":"Welcome, UK friend!","message":"Just so you know, charity: water has expanded into the UK, which means that donations from UK taxpayers are now worth 25% more through Gift Aid (at no cost to\u0026nbsp;you).","stay_button":"Stay in the US","continue_button":"Continue to the UK"},"inline_giving_calculator":{"text":"Your \u003cspan class='monthly-inline-calc-amount'\u003e%{currency_unit}%{amount}\u003c/span\u003e %{subscription_period} donation can give \u003cspan class='monthly-inline-calc-amount'\u003e%{number_of_people}\u003c/span\u003e people clean water every year. 100% funds water\u0026nbsp;projects.","generic_text":"Your %{subscription_period} donation will change lives all year long. 100% funds water\u0026nbsp;projects."},"donate_form":{"donate":"Donate","donate_annually":"Donate Annually","donate_monthly":"Donate Monthly","per_month":"per\u0026nbsp;month","per_year":"per\u0026nbsp;year","enter_amount":"Enter an amount to give","choose_amount":"Choose an amount to give","give_by_check":"Give by check or stock","give_crypto":"Donate crypto","giving":"Giving","edit_amount":"edit amount","error":"Please fix the errors and try again","postcode":{"error":{"missing_space":"Postcode must include a space","does_not_start_with_a_letter":"Postcode must begin with a letter"}},"iho":{"toggle":"Give in honor of someone","date_picker_format":"mm/d/y","date_parse_format":"M/dd/yy","your_honor":"your honor","honor_of":"honor of","details":{"honoree_full_name_label":"In Honor Of","honoree_full_name_placeholder":"Honoree's full name"},"delivery":{"honoree_email_placeholder":"Honoree's email"},"email":{"added":"An e-card will be sent to %{name} at \u003cspan class='email'\u003e%{email}\u003c/span\u003e","details":{"header":"What message should we include with your\u0026nbsp;e-card?"},"delivery":{"subheader":"Delivery","header":"Where should we deliver the\u0026nbsp;e‑card?","action":"Send"},"preview":{"header":"Here\u0026#8217;s what we\u0026#8217;ll send\u0026nbsp;to %{name}"},"design":{"subheader":"Design","header":"Customize the look and feel of your\u0026nbsp;e-card"}},"print":{"added":"A printable card addressed to %{name} will be sent to\u0026nbsp;you","details":{"header":"What message should we include with your\u0026nbsp;card?"},"delivery":{"subheader":"Design","header":"Customize the look and feel of your\u0026nbsp;card","action":"Address"},"preview":{"header":"Here's what your foldable card will look like\u0026nbsp;assembled."}}},"subscription_upsell":{"header":"Would you consider\u0026nbsp;something?","subheader":"Your %{period} giving enables us to make long term investments in communities and bring more people clean\u0026nbsp;water.","annual_label_header":"Make this an annual gift","annual_label":"Our recurring giving community, The\u0026nbsp;Spring, are our most impactful and committed supporters. We\u0026apos;ll remind you this time next year when your membership is about to renew.","monthly_label_header":"Give %{unit}%{amount} per month instead","monthly_label":"Please consider joining our monthly giving community, The Spring. Spring members are our most impactful and committed supporters."},"zipcode":{"placeholder":"Zipcode","error":"Please enter your zipcode"},"submit_button_text":"Next Step","email_error":"Please enter a valid email address","email_placeholder":"Email","subscription_minimum_error":"The %{subscription_period} minimum donation is $%{amount}","maximum_amount_error":"We are only able to process up to $%{amount} online. Want to donate more? \u003ca href=\"mailto:sponsoraproject@charitywater.org\"\u003eContact us.\u003c/a\u003e","minimum_amount_error":"Please enter a valid amount ($%{amount} minimum)","ach_popout_form":{"link_bank_preferred_header":"Thank you for choosing our preferred payment\u0026nbsp;method.","link_bank_preferred_text":"A small group of donors pay our credit card transaction fees so that 100% of your donation can go directly to clean water. By linking your bank instead of paying by card, you're eliminating fees and increasing your\u0026nbsp;impact.","name_error":"Please enter your first name","name_placeholder":"First Name","surname_error":"Please enter your last name","surname_placeholder":"Last Name"},"system_campaign":{"donate_by_check":{"address":{"business_type":"charity: water is a 501 (c)(3)","ein":"EIN: 22-3936753"},"donate_by_check":{"body":"Make checks payable to charity: water. If you're donating in honor of someone, sponsoring a water project or want to direct your donation to our operating costs, please write that in the memo of your check.","label":"Donate by Check","note":"Unfortunately, we cannot accept donations to The Spring via\u0026nbsp;check. Tax receipts will be mailed within four to six weeks after the donation has been\u0026nbsp;processed."},"donate_stock":{"body":"We're able to accept donations in the form of stock, government (including municipal) debt and corporate debt through the Depository Trust Company (DTC). For security, settlement and reduced paperwork, electronic transfer through the DTC is preferred. This can be arranged from most brokerage accounts.","label":"Donate Stock","note":"Unfortunately, we cannot accept donations to The Spring via\u0026nbsp;stock. Please contact \u003ca href='mailto:info@charitywater.org'\u003einfo@charitywater.org\u003c/a\u003e for more information on making a stock\u0026nbsp;donation."},"international_giving":{"body":"charity: water is a registered charity in the UK. To make a tax-efficient donation in GBP, visit \u003ca href='https://charitywateruk.org'\u003echaritywateruk.org\u003c/a\u003e. For other international donations, we accept bank issued money orders in USD. Money orders should be made payable to charity: water and can be mailed to the address below. For donations over $6,000, we also accept wire transfers; email %{email} for more\u0026nbsp;information.","label":"International Giving","note":"Please note, only donations made by eligible US taxpayers may be tax-deductible."},"label":"Other Ways to Give"}}},"admin":{"campaign":{"edit":{"campaign_template_hint":"Campaigns with matched donations can not be moved to other campaign templates.","validations":{"parent":"The campaign must remain a parent if it has any children","parent_campaign_id":"The campaign cannot be both a parent and a child","team_joinable":"The campaign must be a parent to be joinable"}}}},"gift_aid_settings":{"on_text":"Because you've enabled Gift Aid, every donation you give to charity: water will be increased by 25%. The money claimed from Gift Aid goes toward operational costs that help us grow.","off_text":"Through Gift Aid you can increase your monthly donations by 25%. The money claimed from Gift Aid goes toward operational costs that help us grow.","disclaimer":"By turning Gift Aid on, I confirm I am a UK tax payer, and I would like charity: water to treat all of my donations as Gift Aid donations moving forward. I understand that if I pay less income tax and/or Capital Gains tax than the amount of Gift Aid claimed on all my donations in that year, it is my responsibility to pay any difference. To give permission to charity: water to retroactively claim all past donations (up to 4 years) reach out to\u0026nbsp;\u003ca href=\"mailto:support@charitywater.org\"\u003esupport@charitywater.org\u003c/a\u003e"}},"site":{"label":"charity: water","description":"charity: water is a non-profit organization bringing clean, safe drinking water to people in developing countries. 100% of public donations go to water projects.","keywords":"water wells, charity water, charity, give, water, water for africa, africa, india, south america, clean water, safe water, access to clean water, digging wells, clean water for africa, safe drinking water, drinking water for poor"}},"en-GB":{"full_country_name":"United Kingdom","views":{"campaign_form":{"new_campaign":{"date_picker_format":"dd/mm/yy","date_fns_format":"dd/MM/yyyy","date_fns_edit_format":"dd MMM"}},"country_intercept":{"title":"Looks like you're in the United States...","message":"This is our UK website. If you'd like to make a tax-deductible donation in US dollars, head over to our US website instead!","stay_button":"Stay in the UK","continue_button":"Continue to the US"},"donate_form":{"iho":{"toggle":"Give in honour of someone","date_picker_format":"d/mm/y","date_parse_format":"dd/M/yy","your_honor":"your honour","honor_of":"honour of","details":{"honoree_full_name_label":"In Honour Of","honoree_full_name_placeholder":"Honouree's full name"},"delivery":{"honoree_email_placeholder":"Honouree's email"},"email":{"design":{"header":"Customise the look and feel of your\u0026nbsp;e-card"}},"print":{"delivery":{"header":"Customise the look and feel of your\u0026nbsp;card"}}},"gift_aid":{"opt_in":"Click below to claim Gift Aid and invest £%{amount} in our operational costs like trips to the field and\u0026nbsp;staff\u0026nbsp;salaries.","confirmation":{"donation":"By checking above, I confirm I am a UK taxpayer and I would like charity: water to treat this donation as a Gift Aid donation. I understand that if I pay less income tax and/or Capital Gains tax than the amount of Gift Aid claimed on all my donations in that year, it is my responsibility to pay any\u0026nbsp;difference.","subscription":"Yes, I am a UK taxpayer and I would like charity: water to treat this donation and future donations associated with this subscription as Gift Aid donations. I understand that if I pay less income tax and/or Capital Gains tax than the amount of Gift Aid claimed on all my donations in that year, it is my responsibility to pay any\u0026nbsp;difference."}},"maximum_amount_error":"We are only able to process up to £%{amount} online. Want to donate more? \u003ca href=\"mailto:sponsoraproject@charitywater.org\"\u003eContact us.\u003c/a\u003e","minimum_amount_error":"Please enter a valid amount (£%{amount} minimum)","subscription_minimum_error":"The %{subscription_period} minimum donation is £%{amount}"},"gift_aid_settings":{"on_text":"Because you've enabled Gift Aid, every donation you give to charity: water will be increased by 25%. The money claimed from Gift Aid goes toward operational costs that help us grow.","off_text":"Through Gift Aid you can increase your monthly donations by 25%. The money claimed from Gift Aid goes toward operational costs that help us grow.","disclaimer":"By turning Gift Aid on, I confirm I am a UK tax payer, and I would like charity: water to treat all of my donations as Gift Aid donations moving forward. I understand that if I pay less income tax and/or Capital Gains tax than the amount of Gift Aid claimed on all my donations in that year, it is my responsibility to pay any difference. To give permission to charity: water to retroactively claim all past donations (up to 4 years) reach out to\u0026nbsp;\u003ca href=\"mailto:support@charitywater.org\"\u003esupport@charitywater.org\u003c/a\u003e"}}},"fr":{"views":{"donate_form":{"enter_amount":"Confirmez votre montant à donner","choose_amount":"Confirmez votre montant à donner"}}}}
            window.cookieDomain=".charitywater.org"
            window.locale = "en"
            window.railsEnv = "production"
            window.recaptchaV2SiteKey = "6LeenTEUAAAAAHPWTu78t3HP_UwZf_4JGThNJiRH"
         </script><script async="" src="../26d5c5b95593436fb88ae7c78d39f4f2.js.ubembed.com/index.html"></script>  <script type="text/javascript">
            window.analytics=window.analytics||[],window.analytics.methods=["identify","group","track","page","pageview","alias","ready","on","once","off","trackLink","trackForm","trackClick","trackSubmit"],window.analytics.factory=function(t){return function(){var a=Array.prototype.slice.call(arguments);return a.unshift(t),window.analytics.push(a),window.analytics}};for(var i=0;i<window.analytics.methods.length;i++){var key=window.analytics.methods[i];window.analytics[key]=window.analytics.factory(key)}window.analytics.load=function(t){if(!document.getElementById("analytics-js")){var a=document.createElement("script");a.type="text/javascript",a.id="analytics-js",a.async=!0,a.src=("https:"===document.location.protocol?"https://":"http://")+"segmentcdn.charitywater.org/analytics.js/v1/"+t+"/analytics.min.js";var n=document.getElementsByTagName("script")[0];n.parentNode.insertBefore(a,n)}},window.analytics.SNIPPET_VERSION="2.0.9",
            window.analytics.load('Xxmh1wiwuOK1Iph89eC32B9ttJrrqkMq');
            
            window.analytics.ready(() => {
              window.analytics.register({
                name: 'Filter Out Null Properties',
                version: '0.1.0',
                type: 'enrichment',
                load: () => Promise.resolve(),
                isLoaded: () => true,
                page: (ctx) => {
                  ctx.updateEvent('properties', filterOutNullProperties(ctx.event.properties));
                  return ctx;
                },
                track: (ctx) => {
                  ctx.updateEvent('properties', filterOutNullProperties(ctx.event.properties));
                  return ctx;
                },
              });
            });
         </script>
      </div>
   </body>
   <!-- Mirrored from www.charitywater.org/about by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Aug 2023 15:16:13 GMT -->
</html>