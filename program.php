<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css2/bootstrap.css">
	<link rel="stylesheet" href="css2/fonts.css">
	<link rel="stylesheet" href="css2/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="js2/core.min.js"></script>
 <script src="js2/script.js"></script>
</head>
<body>
<nav class="sticky">
    <div class="container pt-4 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between px-4 z-20">
            <div class="absolute inset-y-0 right-2 flex items-center block md:hidden">
                <!-- Mobile menu button -->
                <button
                        type="button"
                        class="inline-flex items-center justify-center rounded-md p-2 text-[#f9d200] hover:bg-[#f9d200] hover:text-[#F0F0F0] focus:outline-none focus:ring-2 focus:ring-inset focus:ring-[#f9d200]"
                        aria-controls="mobile-menu"
                        aria-expanded="false"
                        onclick="toggleMobileMenu()"
                >
                    <i class="bi bi-list text-4xl"></i>
                </button>
            </div>
            <div class="justify-between sm:flex">
                <div class="sm:ml-6 justify-around flex items-center" id="large-screen-menu">
                    <div class="h-20 w-20 me-10">
                        <a href="#" class="font-light italic text-3xl text-[#f43f5e]">
                            <img
                                    src="./images/logo.png"
                                    alt="MashaRket Logo"
                            />
                        </a>
                    </div>
                    <div class="hidden md:block">
                            
            <a href="index2" class="home-link text-white px-6 py-2 rounded-md text-md font-medium hover:bg-[#f9d200]" aria-current="page">Home</a>

    <a href="about" class="text-white px-6 py-2 rounded-md text-md font-medium hover:bg-[#f9d200]" aria-current="page">About</a>
    <a href="events" class="text-white px-6 py-2 rounded-md text-md font-medium hover:bg-[#f9d200]" aria-current="page">Program</a>
    <a href="delegation" class="delegation-link text-white px-6 py-2 rounded-md text-md font-medium hover:bg-[#f9d200]" aria-current="page">Delegation</a>
    <a href="calendar" class="calendar-link text-white px-6 py-2 rounded-md text-md font-medium hover:bg-[#f9d200]" aria-current="page">Calendar</a>
    <a href="tours" class="text-white px-6 py-2 rounded-md text-md font-medium hover:bg-[#f9d200]" aria-current="page">Tours</a>
    <a href="media" class="text-white px-6 py-2 rounded-md text-md font-medium hover:bg-[#f9d200]" aria-current="page">Media</a>
    <a href="gallery" class="text-white px-6 py-2 rounded-md text-md font-medium hover:bg-[#f9d200]" aria-current="page">Venue</a>

</div>

                </div>
            </div>
           <div class="">
              <!-- <button id="log-button" type="button" class="inline-flex items-center justify-center rounded-md py-2 px-4 border border-2 border-[#f9d200] bg-transparent hover:bg-[#f9d200] text-md hidden md:block font-medium text-white outline-none">
                <a href="#register">Register</a>
            </button>-->
                 <!--<button id="login-button" type="button" class="inline-flex items-center justify-center rounded-md py-2 px-4 border border-2 border-[#f9d200] bg-transparent hover:bg-[#f9d200] text-md hidden md:block font-medium text-white outline-none">
                <a href="login">Login</a>
            </button>-->
            <button id="logout-button" type="button" class="inline-flex items-center justify-center rounded-md py-2 px-4 border border-2 border-[#f9d200] bg-transparent hover:bg-[#f9d200] text-md hidden md:block font-medium text-white outline-none">
                <a href="logout">Logout</a>
                    </button>
                    
            </div>
        </div>
    </div>
    <div class="hidden" id="mobile-menu">
      <div class="px-2 pt-2 pb-3 space-y-1 flex flex-col absolute z-50 top-20 w-full bg-white border-b-gray-400">
    <a href="index2" class="home-link text-gray-500 hover:bg-[#f9d200] hover:text-white px-6 py-2 rounded-md text-md font-medium">Home</a>
    <a href="about" class="text-gray-500 hover:bg-[#f9d200] hover:text-white px-6 py-2 rounded-md text-md font-medium">About</a>
    <a href="events" class="text-gray-500 hover:bg-[#f9d200] hover:text-white px-6 py-2 rounded-md text-md font-medium">Program</a>
    <a href="delegation" class="delegation-link text-gray-500 hover:bg-[#f9d200] hover:text-white px-6 py-2 rounded-md text-md font-medium">Delegation</a>
    <a href="calendar" class=" calendar-link text-gray-500 hover:bg-[#f9d200] hover:text-white px-6 py-2 rounded-md text-md font-medium">Calendar</a>
    <a href="tours" class="text-gray-500 hover:bg-[#f9d200] hover:text-white px-6 py-2 rounded-md text-md font-medium">Tours</a>
    <a href="media" class="text-gray-500 hover:bg-[#f9d200] hover:text-white px-6 py-2 rounded-md text-md font-medium">Media</a>
    <a href="gallery" class="text-gray-500 hover:bg-[#f9d200] hover:text-white px-6 py-2 rounded-md text-md font-medium">Venue</a>
</div>

    </div>
    <script>
   if (sessionStorage.getItem('registration_payment_status') === 'paid') {
    document.querySelectorAll('.delegation-link').forEach(el => el.style.display = 'inline-block');
    document.querySelectorAll('.calendar-link').forEach(el => el.style.display = 'inline-block');
} else {
    document.querySelectorAll('.delegation-link').forEach(el => el.style.display = 'none');
    document.querySelectorAll('.calendar-link').forEach(el => el.style.display = 'none');
}

    if (sessionStorage.getItem('company_contact_email')) {
/*        document.querySelector('.home-link').href = 'index2.php';
        
       
        document.getElementById('login-button').style.display = 'none';
*/        document.getElementById('logout-button').style.display = 'inline-block';
    } else {
       
/*        document.getElementById('login-button').style.display = 'inline-block';
*/        document.getElementById('logout-button').style.display = 'none';
    }

</script>
</nav>
<!--header-->
<header class="bg-black">
    <div class="container about-hero max-w-7xl bg-black pb-3 rounded-3xl pb-5 relative">
        <!-- Header component -->
        <div class="container p-8 md:pb-12 md:flex md:justify-around relative">
            <div class="relative z-10">
                <h1 class='text-white text-5xl md:text-7xl  mb-8 animate-slide-in'>
                    What to Expect at<span class="text-[#F9D200]"> <br/>  MashaRket? </span>
                </h1>
                <!-- <div class="text-center pt-12 flex flex-col md:flex-row">
                    <a href="exhibitors_registration.html" class="border border-2 border-[#f9d200] bg-transparent hover:bg-[#f9d200] text-white text-lg font-semibold px-4 py-2 mx-2 rounded-full shadow-lg mb-2 animate-slide-in-right-fast">
                        Exhibitors - $450
                    </a>
                    <a href="nonexhibtrs_registration.html" class="border border-2 border-[#f9d200] bg-transparent hover:bg-[#f9d200] text-white text-lg font-semibold px-4 py-2 mx-2 rounded-full shadow-lg mb-2 animate-slide-in-right-medium">
                        Non Exhibitors - $250
                    </a>
                    <a href="students_regstration.html" class="border border-2 border-[#f9d200] bg-transparent hover:bg-[#f9d200] text-white text-lg font-semibold px-4 py-2 mx-2 rounded-full shadow-lg mb-2 animate-slide-in-right-slow">
                        Student - $100
                    </a>
                    <a href="nonexhibtrs_registration.html" class="border border-2 border-[#f9d200] bg-transparent hover:bg-[#f9d200] text-white text-lg font-semibold px-4 py-2 mx-2 rounded-full shadow-lg mb-2  animate-slide-in-right">
                        Virtual Attendants - $50
                    </a>
                </div> -->
            </div>

            <div class="relative z-10  animate-slide-in">
                <div class="flex justify-end">
                    <!-- Image component -->
                    <img src="./images/event_note_FILL0_wght400_GRAD0_opsz48.svg" alt="Event Note">
                </div>
                <div class="">
                    <h3 class="text-white text-lg text-end font-semibold">
                        28th to 30th November, 2023
                    </h3>
                    <h3 class="text-white text-lg text-end font-semibold">
                        Kigali Conference and <br/>
                        Exhibition Village
                    </h3>
                </div>
            </div>
        </div>
        <div class="absolute rounded-full h-[200px] w-[200px] bg-[#00a1df] right-[12%] bottom-[25%] z-0"></div>
        <div class="absolute rounded-full h-[150px] w-[150px] border border-[10px] border-[#F9d200] right-[1%] bottom-[1%] z-0"></div>
        <div class="absolute rounded-full h-[150px] w-[150px] border border-[10px] border-[#20631d] left-[1%] bottom-[25%] z-0"></div>
    </div>
</header>
<!--main-->
<main class="bg-black text-white">
    <section class="container max-w-6xl pt-4 px-8 mb-6">
        <p class="text-xl font-normal mb-4">
            To maximize on our success and create an image for the first edition of the market, we have combined traditional film and content market elements such as meetings with new activities that meet the current state of the media and creative industry at large.

            In addition to our physical events, we will also have a virtual set of activities through our industry let online platform. The platform will serve as another way to reach the market virtually and take part in all proposed services such as sales and distribution meetings, panel discussion, presentations, and workshops.
        </p>
    </section>
    <section class="container max-w-6xl pt-4 px-4 pb-6">
        <h2 class="text-center text-5xl mb-3">Our Events</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <a href="exhibition" alt="">
                <div class="rounded-3xl exhibition-card h-64 relative p-4">
                    <div class="exhibition-content relative z-10">
                        <h3 class="text-4xl text-white absolute top-48 z-10">
                            Exhibition
                        </h3>
                    </div>
                </div>
            </a>
            <a href="conference" alt="">
                <div class="rounded-3xl conference-card h-64 relative p-4">
                    <div class="conference-content relative z-10">
                        <h3 class="text-4xl text-white absolute top-48 z-10">
                            Conference
                        </h3>
                    </div>
                </div>
            </a>
            <a href="workshop" alt="">
                <div class="rounded-3xl workshop-card h-64 relative p-4">
                    <div class="workshop-content relative z-10">
                        <h3 class="text-4xl text-white absolute top-48 z-10">
                            Workshop
                        </h3>
                    </div>
                </div>
            </a>
            <a href="pitching" alt="">
                <div class="rounded-3xl screening-card h-64 relative p-4">
                    <div class="screening-content relative z-10">
                        <h3 class="text-4xl text-white absolute top-48 z-10">
                            Pitching
                        </h3>
                    </div>
                </div>
            </a>
            <a href="delegation" alt="">
                <div class="rounded-3xl delegates-card h-64 relative p-4">
                    <div class="delegates-content relative z-10">
                        <h3 class="text-4xl text-white absolute top-48 z-10">
                            Delegates
                        </h3>
                    </div>
                </div>
            </a>
            <a href="tours" alt="">
                <div class="rounded-3xl tours-card h-64 relative p-4">
                    <div class="delegates-content relative z-10">
                        <h3 class="text-4xl text-white absolute top-48 z-10">
                            Tours
                        </h3>
                    </div>
                </div>
            </a>
        </div>
    </section>
    <!--<section class="container max-w-6xl pt-4 px-4 pb-6">
        <h2 class="text-center text-5xl mb-3">Our Programs</h2>
       <div class="flex justify-center items-center w-full bg-black">
          <iframe class='w-full min-h-screen' src="https://docs.google.com/spreadsheets/d/e/2PACX-1vSEsBiW4BN1_eHbxVbfKjthX03nHVfBLgintk_cUzp5VZq79XIpII7-qMUHJc6L6A/pubhtml?gid=988768631&amp;single=true&amp;widget=true&amp;headers=false"></iframe>
        </div>

    </section>-->
<section class="section section-lg bg-default text-center" id="schedule" style="color:black">
    <div class="container">
        <h6 >Program</h6>
        <h3 class="text-white">Event Schedule</h3>
        <div class="tabs-custom tabs-horizontal tabs-corporate" id="tabs-1">
            <!--Nav tabs-->
          <ul class="nav nav-tabs">
  <li class="nav-item" role="presentation">
    <a class="nav-link bg-black text-black" href="#tabs-1-1" data-toggle="tab" data-triangle=".nav-link-overlay"      style="background-color: #20613d; color: #fff;" >

      <span class="nav-link-overlay"></span>
      <span class="nav-link-cite">First Day</span>
      <span class="nav-link-title">November 28th, 2023</span>
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link bg-green-500 text-black" href="#tabs-1-2" data-toggle="tab" data-triangle=".nav-link-overlay"     style="background-color: #000; color: #fff;"  >

      <span class="nav-link-overlay"></span>
      <span class="nav-link-cite">Second Day</span>
      <span class="nav-link-title">November 29th, 2023</span>
    </a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link bg-yellow-500 text-black" href="#tabs-1-3" data-toggle="tab" data-triangle=".nav-link-overlay"       style="background-color: #f9d200; color: #fff;">

      <span class="nav-link-overlay"></span>
      <span class="nav-link-cite">Third Day</span>
      <span class="nav-link-title">November 30th, 2023</span>
    </a>
  </li>
</ul>

            <!--Tab panes-->
            <div class="tab-content wow fadeIn">
                <div class="tab-pane fade" id="tabs-1-1">
                    <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">

                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #20613d;">8:00 am to 9:30 am</span>
                                                        <span class="schedule-classic-title heading-4"> Breakfast for dignitaries: Government officials, Sponsors/Partners, Industry Officials - By Invitation Only</span>

                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>
                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #20613d;">10:00 am to 11:00 am</span>
                                                        <span class="schedule-classic-title heading-4">Opening Ceremony; Speeches (Government, Sponsors, MAAF)
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>

                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #20613d;">11:30 am to 1:00 pm</span>
                                                        <span class="schedule-classic-title heading-4">Panel Discussion: Content Marketing, Distribution & Monetization in the Digital Era
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>

                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #20613d;">2:00 pm to 3:30 pm</span>
                                                        <span class="schedule-classic-title heading-4">Panel Discussion: How to build inventory of African content: Co-Productions and Commissioning
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>

                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #20613d;">2:30 pm to 4:00 pm</span>
                                                        <span class="schedule-classic-title heading-4">Workshop: How to package your sales pitch to buyers for international distribution
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>


                    </div>
                </div>
                <div class="tab-pane fade" id="tabs-1-2">
                    <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">
                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #000;">10:00 am to 11:00 am</span>
                                                        <span class="schedule-classic-title heading-4">Panel Discussion on intellectual Property Laws: How to safeguard your content
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>
                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #000;">11:30 am to 12:30 pm</span>
                                                        <span class="schedule-classic-title heading-4">Panel Discussion on Social media as a tool for content
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>

                      
                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #000;">1:00 pm to 2:00 pm</span>
                                                        <span class="schedule-classic-title heading-4">Workshop: New Age Production Techniques
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>

                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #000;">2:30 pm to 4:00 pm</span>
                                                        <span class="schedule-classic-title heading-4">Pitching Session: Submitted Content, Script or Video (Shortlisted Candidates Only)
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>


                    </div>
                </div>

                <div class="tab-pane fade" id="tabs-1-3">
                    <div class="card-group-custom card-group-corporate" id="accordion2" role="tablist" aria-multiselectable="false">
                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #f9d200;">9:00 am to 11:00 am</span>
                                                        <span class="schedule-classic-title heading-4">Presentation: Distinction between the making of Feature and Short Films
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>
                        <!--Bootstrap card-->
                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #f9d200;">11:30 am to 1:30 pm</span>
                                                        <span class="schedule-classic-title heading-4">Presentation: How to make a sellable TV Series/Format for worldwide audiences
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>

                        <article class="card card-custom card-corporate">
                            <div class="card-header" role="tab">
                                <div class="card-title">
                                    <a class="collapsed" id="accordion1-card-head-hxapwahb" data-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-onwkttkd" aria-controls="accordion1-card-body-onwkttkd" aria-expanded="false" role="button">
                                        <span class="schedule-classic">
                                            <span class="unit unit-spacing-md align-items-center d-block d-md-flex">
                                                <span class="unit-body">
                                                    <span class="schedule-classic-content">
                                                        <span class="schedule-classic-time" style="color: #f9d200;">2:00 pm to 4:00 pm</span>
                                                        <span class="schedule-classic-title heading-4">Presentation: Exploring the World of Documentary Filmmaking
                                                        </span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>

                        </article>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</main>
<!--footer-->
<footer class="bg-black">
    <section class="container max-w-6xl bg-black text-white relative px-4">
        <div class="absolute rounded-full h-[50px] w-[50px] bg-[#00a1df] left-[60%] top-[40%] z-0"></div>

        <div class="relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-3 mb-8">
                <div class="p-3">
                    <div class="w-20 md:w-40">
                        <img
                                src="./images/logo.png"
                                alt="MashaRket Logo"
                        />
                    </div>
                </div>
                <div class="p-3">
                    <h4 class="text-xl text-white text-centr font-semibold">
                        Venue &amp; Date
                    </h4>
                    <p class="text-cente text-white text-sm">
                        <span class="font-semibold">Date:</span> 28th to 30th November, 2023 <br/>
                        <span class="font-semibold">Venue:</span> Kigali Conference and <br/>
                        Exhibition Village
                    </p>
                </div>
                <div class="p-3">
                    <h4 class="text-xl text-white text-center font-semibold">
                        Contact us
                    </h4>
                    <div class="text-sm md:text-center">
                        <p class="mb-2">
                            <a class="text-white hover:text-[#C6C6C6]" href="tel:+254 708 714 473">
                                <i class="bi bi-phone text-xl"></i> +254 726 762 558
                            </a>
                        </p>
                        <p>
                            <a class="text-white hover:text-[#C6C6C6]" href="mailto:marsharket@gmail.com">
                                info@marsharket.com
                            </a>
                        </p>

                    </div>
                </div>
            </div>
            <div class="flex justify-between">
                <div>
                    <p class="text-sm">&copy; All rights reserved 2023</p>
                </div>
                <div class="flex justify-around pb-8">
                    <a href="https://linktr.ee/masharketkigali" target="_blank" class="px-3" title="Linktree">
                        <i class="bi bi-tree  text-[#075e54] hover:text-[#919191] text-xl"></i>
                    </a>
                    <a href="https://wa.me/254726762558" target="_blank" class="px-3" title="WhatsApp">
                        <i class="bi bi-whatsapp  text-[#075e54]  hover:text-[#919191] text-xl"></i>
                    </a>
                    <a href="https://www.facebook.com/profile.php?id=100094379964201" target="_blank" class="px-3" title="Facebook">
                        <i class="bi bi-facebook text-[#4267B2] hover:text-[#919191] text-xl"></i>
                    </a>
                    <a href="https://www.youtube.com/channel/UC4kgqtuqvEncVMvSqqHcefQ" target="_blank" class="px-3" title="Youtube">
                        <i class="bi bi-youtube text-[#FF0000] hover:text-[#919191] text-xl"></i>
                    </a>
                    <a href="https://www.instagram.com/masharket1/" target="_blank" class="px-3" title="Instagram">
                        <i class="bi bi-instagram text-[#C13584] hover:text-[#919191] text-xl"></i>
                    </a>
                    <a href="https://www.tiktok.com/@masharket2023?is_from_webapp=1&sender_device=pc" target="_blank" class="px-3" title="Tiktok">
                        <i class="bi bi-tiktok text-[#F0F0F0] hover:text-[#919191] text-xl"></i>
                    </a>
                    <a href="https://twitter.com/mashaRket2023" target="_blank" class="px-3 pt-2" title="twitter">
                        <img src="./images/x-logo/logo.svg" class="h-4 w-4" alt="">
                    </a>
                    <a href="https://www.linkedin.com/company/masharket-kigali-international-content-market" target="_blank" class="px-3" title="LinkedIn">
                        <i class="bi bi-linkedin text-[#F0F0F0] hover:text-[#919191] text-xl"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

</footer>
<script src="script.js"></script>
<script>
    // Convert the $_SESSION array to a JSON string
    var sessionData = <?php echo json_encode($_SESSION); ?>;

    // Output the session data to the browser's console
    console.log('sessionData',sessionData);
</script>
</body>
</html>
