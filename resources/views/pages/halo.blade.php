@extends('layouts.flat')
@section('meta')
    @include('layouts.inc.flat-meta', [
        'title'       => 'HALO Package Tracking & 3PL Software - Lojistic',
        'description' => 'Online shipment tracking offered by Lojistic uses cloud-based software to give you the status of your packages. Shipment visibility from anywhere.',
        'keywords'    => 'package tracking, shipment tracking, tracking a package, 3pl software, online tracking software, shipment tracking software, logistics report',
    ])
@overwrite
@section('content')
    <section  class="banner flatGrey">
        <div class="container">
            <div class="col-sm-3 col-xs-12 text-center">
                <i class="fs-150 white eloji-halo"></i>
            </div>
            <div class="col-sm-9 col-xs-12 text-left">
                <div class="text-vc">
                    <h1 class="white">HALO&reg;</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="white">
        <div class="container">
            <article>
            <h2>Package Tracking &amp; Visibility</h2>

            <h3>Total Visibility to Your Logistics and Distribution Network:</h3>

            <p>
                In tandem with Intelliship, and as a part of our approach to holistic logistics services, Lojistic
                offers a
                proprietary state of the art multi-carrier visibility system for your shipment tracking. HALO transforms
                transportation data into meaningful information so that transportation managers can see all shipments
                with
                all carriers in motion via a single interface.
            </p>

            <p>
                HALO goes well beyond other package tracking systems in that
                it actively manages the information received from carriers, systems, personnel and even the national
                weather
                service, actively identifying which shipments need immediate attention. HALO access is available
                wherever
                there is an Internet connection (SaaS), whether on your desktop, laptop, iPad, tablet, or Smartphone.
                Together with Intelliship, our online tracking software solutions provide comprehensive transportation
                intelligence in real-time for all inbound and outbound shipments.
            </p>
            </article>
        </div>
    </section>

    <section class="silver">
        <div class="container">
            <div class="col-sm-6">
                @include('parts.snippets.postit', array(
                'color'=>'flatGrey',
                'eloji'=>'eloji-logistics',
                'title'=>'Total In-Transit Visibility:',
                'content'=>'The HALO dashboard offers a concentric view within a single interface of all shipments moving with all carriers. More than just Pickup and POD, HALO shows every scan and segment entry made by each carrier throughout the transit lifecycle of a shipment (origin to destination). When integrated, HALO can even provide the information related to the product inside each shipment, as well as package tracking. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'orange',
                'eloji'=>'eloji-caution',
                'title'=>'Exception Management:',
                'content'=>'Within HALO’s centralized dashboard, on-screen alerts will appear for distressed shipments when tracking a package. Distressed shipments are prioritized on the dashboard regardless of carrier so you always know (in a quick, single view) which shipments require immediate attention. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'flatTan',
                'eloji'=>'eloji-noggin',
                'title'=>'Business Intelligence:',
                'content'=>'HALO transforms transportation data into meaningful information so that transportation managers, customer service, and inventory control (and others) can see all shipments with all carriers in-motion via a single interface. If you want to know how your carriers are performing at any particular point in time, just look at HALO! If everything is green in our online tracking software, there are no issues. If not, you\'ll know exactly which shipment(s) are distressed. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'flatGrey',
                'eloji'=>'eloji-train',
                'title'=>'3PL Software:',
                'content'=>'HALO is available as a private label solution that can incorporate the complete capabilities of HALO to form the operating platform for your 3PL business. This solution includes the full visibility and shipment management functions of HALO, plus the complete back office system for settlement, AR and AP management, integration to your accounting system and much more. HALO 3PL software also extends your capability to provide shipment tracking visibility to your customers and trade partners. Our 3PL software gives you the features and flexibility to execute freight management efficiently. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'flatBlue',
                'eloji'=>'eloji-calc-rates',
                'title'=>'File Management:',
                'content'=>'You can attach pictures, PDF’s, insurance/claim related information, and other documentation (such as a copy of the BOL) to the HALO shipment record so that it is always available when a shipment matter needs to be researched, and a logistics report needs to be accessed. ',
                ))
            </div>
            <div class="col-sm-6">
                @include('parts.snippets.postit', array(
                'color'=>'green',
                'eloji'=>'eloji-paper-sign',
                'title'=>'POD Capture:',
                'content'=>'When tracking a package, HALO records and stores the POD (Delivered) status of the shipment as well as the POD signer for each move (when provided by the carrier). ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'flatBlue',
                'eloji'=>'eloji-data',
                'title'=>'EDI Automation:',
                'content'=>'HALO is its own EDI subsystem, meaning there is no need for a VAN to translate EDI data from your carriers and partners. HALO receives EDI directly from carriers and supply chain partners. HALO can also send EDI to your customers, partners or internal systems. There\'s no need to map 50 carrier EDI feeds to your various system needs. HALO will do the work and every carrier will map automatically. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'flatCoral',
                'eloji'=>'eloji-data-management',
                'title'=>'Real-Time Reporting:',
                'content'=>' Robust package tracking reporting allows you to view your transportation network as never before. Summary level dashlettes provide real-time management level visibility to all categories of moving freight. Among the many standard static reports, a few include: On-Time Delivery, Carrier Scorecard Summary, Carrier Metrics, Cost Analysis, and Late Delivery Reason reports. The (logistics report) interface also allows you to create your own, custom logistics reports on the vast amount of data aggregated by HALO. All reports can be automatically delivered to your email box, or created and viewed on-demand.',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'green',
                'eloji'=>'eloji-hi',
                'title'=>'User-Based Visibility:',
                'content'=>'HALO was designed to provide information to those who need it in the way that they need it. With a powerful multi-dimensional ability to segment information based upon a specific user\'s role (transportation manager, customer, accounting, customer service, etc) HALO has the ability to equip all individuals within and related to an entire enterprise with the specific shipment tracking information that relates to them. ',
                ))
                @include('parts.snippets.postit', array(
                'color'=>'red',
                'eloji'=>'eloji-caution',
                'title'=>'Pick-up Alerts:',
                'content'=>'Integrated with Intelliship (or other robust shipping systems), HALO knows to expect a pickup and will alert if the pickup did not occur when expected, as per shipping contracts. As part of our superior shipment tracking software, HALO can send an email to alert someone, as well. ',
                ))
            </div>
            <hr/>
            <article>
                <h2>Implementation</h2>

                <p>Both HALO and Intelliship are implemented using a robust project plan to ensure no details are
                    overlooked. Basic requirements for the systems include a 'best-practices' assessment for your specific
                    application, a kick-off presentation and plan development meeting with key stakeholders, information
                    gathering plan (as a part of the overall project plan) including carrier tariffs, detailed routing-guide
                    requirements, number and identity of users, locations for the shipping systems, and other configuration
                    requirements.</p>
                <p> The gathered information is used to create the project plan with time-definite benchmarks
                    to ensure the technology implementation is completed within defined parameters.</p>
            </article>
        </div>
    </section>

    <section class="white">
        <div class="container">
            @include('parts.forms.contact-or-schedule', array(
                'scheduleTitle' => 'Request A Demo',
                'scheduleText'  => 'HALO&reg; will reduce your shipping costs and simplify transportation management. ',
                'scheduleBtnText' => 'SCHEDULE NOW',
                'formVars' => array(
                    'thankyouPage' => '/thank-you',
                    'intent' => 'Halo',
                    'btnTxt' => 'REQUEST A DEMO',
                    'formID' => '719f157e-93c9-4b23-95a9-5d13d9ee23d7'
                )
            ))
        </div>
    </section>

@stop