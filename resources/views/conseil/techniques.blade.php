@extends('layouts.appss')

@section('title')
    Conseils Techniques
@endsection

@section('content')
    <!-- -------- START HEADER 7 w/ text and video ------- -->
    <header class="bg-gradient-dark">
        <div class="page-header min-vh-75" style="background-image: url('assets/img/office-dark.jpg');">
            <span class="mask bg-gradient-dark opacity-8"></span>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center mx-auto my-auto">
                        <img src="{{asset('assets/img/logos/carl-logo.png')}}" width="50%;" style="margin: 0px" alt="">
                    </div>
                </div>
            </div>
            <div class="position-absolute w-100 z-index-1 bottom-0">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
                    <defs>
                        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="moving-waves">
                        <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40" />
                        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)" />
                        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)" />
                        <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)" />
                        <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)" />
                        <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,1" />
                    </g>
                </svg>
            </div>
        </div>
    </header>
    <!-- -------- END HEADER 7 w/ text and video ------- -->

    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="text-gradient text-danger mb-0 mt-2">Key Features</h2>
                    <p style="color: black">
                        Course Name: <b>Certified African Risk Leader</b> <br>
                        Reference: <b>CARL</b> <br>
                        Duration: <b>0 Year(s)</b> <br>
                        Starting Date: <b>Facultative</b> <br>
                        Fees: <b>$ 15000</b> <br>
                        Members: <br>
                        Non-Members: <br>
                    </p>

                    <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0">Enroll Now</button>
                </div>

                <div class="col-lg-6">
                    <h2 class="text-gradient text-danger mb-0 mt-2">Description</h2>
                    <p style="color:black">
                        Socio-economic factors, geopolitical tensions, digitisation, new technological advances, large scale natural disasters and climate change are delivering an era of greater uncertainty and volatility for organisations at a time when opportunities are expanding and becoming more globally integrated and complex.
                        <br>
                        These new risk trends are emerging simultaneously and require executives and board members to develop risk leadership capabilities beyond the any existing risk management function. This is because leaders in organisations can powerfully influence culture and policies. They can inspire, energise, and, well, lead on how to respond to risk. Through their actions and decisions, they can ensure that risk thinking is part of decision making
                        <br><br>
                        The Certified African Risk Leader course (CARL) is designed to equip participants with the knowledge and skillset required to become risk leaders in their companies and organisations. The course is will immerse you in dynamic case studies, tail-risk stress tests, scenario planning, and wargaming exercises, as you explore how to make informed risk management decisions for current and emerging risks, and to critically appraise real life case studies from different sectors and countries.
                    </p>

                    <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0">Read More</button>
                </div>

                <div class="col-lg-3">
                    <img src="assets/img/logos/carl-badge.svg" alt="" style="width: 100%">

                    <h6 style="color:black">Who is it for?</h6>

                    <ul class="text-sm" style="color:black">
                        <li>Senior business leaders in large established companies who have significant corporate management responsibilities, including:</li>

                        <li>Chief risk officers and other leaders in risk management roles</li>

                        <li>Chief financial officers</li>

                        <li>Board members</li>

                        <li>General managers, including CEOs, COOs, and division heads</li>

                        <li>Senior leaders responsible for executing and controlling strategy</li>

                        <li>Public relations executives</li>
                    </ul>

                    <h6>Course Manager: <em>George M</em></h6>

                    <button type="button" class="btn bg-gradient-info w-auto me-1 mb-0">View</button>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gray-100 py-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <h5>Receive Your Certification in 5 Steps!</h5>

                    <div>
                        <ul class="list-group">
                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <h1>1</h1>
                                </div>
                                <div class="flex-column">
                                    <p><small>
                                            Read program description and eligibility criteria to view important information that will help you be a successful candidate
                                        </small></p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <h1>2</h1>
                                </div>
                                <div class="flex-column">
                                    <p><small>
                                            Submit your application online with all required documentation
                                        </small></p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <h1>3</h1>
                                </div>
                                <div class="flex-column">
                                    <p><small>
                                            Successful applicants will receive username and password to their online learning portal where they can download study materials and practice questions
                                        </small></p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <h1>4</h1>
                                </div>
                                <div class="flex-column">
                                    <p><small>
                                            Choose an examination date, prepare for it and take the 2.5-hour online examination consisting of 125 multiple choice questions.
                                        </small></p>
                                </div>
                            </a>

                            <a class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <h1>5</h1>
                                </div>
                                <div class="flex-column">
                                    <p><small>
                                            Upon passing, successful candidates will receive their certification card and acknowledged as a CARM holder!
                                        </small></p>
                                </div>
                            </a>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-5">
                    <h5>Key Attributes</h5>

                    <div>
                        <ul class="list-group">
                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="" alt="quixote">
                                </div>
                                <div class="flex-column">
                                    Relevant
                                    <p><small>
                                            CARM is created by risk professionals in Africa for the risks relevant to this region. We use Asia Pacific case studies and the syllabus is crafted based on what risk managers in the region are most concerned with.
                                        </small></p>
                                </div>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="" alt="quixote">
                                </div>
                                <div class="flex-column">
                                    Holistic
                                    <p><small>
                                            The syllabus comprises a holistic range of risk management activities that goes beyond ERM. It also touches on risk financing and risk treatment. We believe that the syllabus encompasses what the risk managers of today need to be equipped with.
                                        </small></p>
                                </div>
                            </a>

                            <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                                <div style="margin-right: 10px">
                                    <img src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/don_quixote.jpg" class="" alt="quixote">
                                </div>
                                <div class="flex-column">
                                    Supportive
                                    <p><small>
                                            CARM comes with online training courses for each of the 5 modules, should the candidate wish to practice. We ensure that you will be equipped with the tools and training needed to successfully complete the CARM.
                                        </small></p>
                                </div>
                            </a>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div>
                        <h5>Non-ARiMaS Members</h5>

                        <div class="card" style="padding: 10px">
                            <p>
                                Enroling for the CARM means you join ARiMaS as a member and become part of our African risk management Community. The additional fee you pay on top of your application fee goes toward the payment of your membership.
                            </p>
                        </div>
                    </div>

                    <br>

                    <div>
                        <h2 class="text-gradient text-danger mb-0 mt-2">Contact US</h2>
                        <p style="color:black">
                            <b>Editorial</b> <br> <br>
                            Dwayne J. Williams <br>
                            Phone: 011 312 54334 <br>
                            Email: fcharney@arimas.org <br>
                            <br>
                            <b>Publications</b> <br><br>
                            Don Richards <br>
                            Phone: 011 312 54334 <br>
                            Email: richard@arimas.org
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-2">
        <div class="container">

            <h2 class="text-gradient text-danger mb-0 mt-2">
                Modules
            </h2>
            <br>
            <p style="color:black">
                The 5 modules below have been selected to ensure the topics covered in CARM represents the professional knowledge and competencies required by risk managers in Africa in today’s dynamic and complex world.
            </p>
            <div class="row text-center py-3 mt-3">
                <div class="col-md-12 mx-auto">
                    <div class="nav-wrapper position-relative end-0">
                        <ul class="nav nav-pills nav-fill p-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1 active" style="color:black"
                                   data-bs-toggle="tab" href="#intro1" role="tab" aria-controls="profile" aria-selected="true">
                                    <i class="fa fa-user-graduate"></i> --
                                    Introduction To Risk Management
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-0 px-0 py-1" style="color:black" data-bs-toggle="tab" href="#intro2" role="tab" aria-controls="dashboard" aria-selected="false">
                                    <i class="fa fa-user-graduate"></i>  -- Introduction To Risk Management
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content">
                        <div id="intro1" class="tab-pane active">
                            <h3 style="color:black">Introduction To Risk Management</h3>
                            <p>
                                The AFRICAN Certified Risk Management Professional (A-CRMP) is designed for the development and recognition of the risk profession in Africa. It represents the professional knowledge and competencies required by African risk managers in today�s dynamic and complex world but particularly regarding the risks that characterise Africa.
                            </p>
                        </div>
                        <div id="intro2" class="tab-pane fade">
                            <h3 style="color:black">Introduction Ex</h3>
                            <p>
                                In return for all the member benefits we provide, we charge an annual subscription. This also helps to support our objective of promoting our members on the continental stage. Your annual subscription is payable on 1 January each year and we’ll send you a notification the November before.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="horizontal dark mb-5">

    <section class="py-2">
        <div class="container">
            <div class="row">
                <h2 class="text-gradient text-danger mb-0 mt-2">Enrolment and Fees</h2>
                <div class="col-lg-6">
                    <p style="color: black">
                        The CARM is a direct registration program. There are no formal entry requirements. Simply enrol in the session of your choice to get started.
                        <br>
                        However, participants are expected to have some basic. knowledge of risk management tools and techniques.
                        <br>
                        Participants can choose to enrol for any of the three-months session offered during the year.
                    </p>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5 ps-lg-0 ps-0">
                    <div class="card">
                        <div class="table table-responsive">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Sessions</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Course</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Fee</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-xs">Jan 2020</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="px-2 py-1">
                                            <div class="justify-content-center">
                                                <h6 class="mb-0 text-xs">
                                                    The Certified African Risk Manager Practitioner Course
                                                </h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <div class="d-flex px-2 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-xs">400$</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                            Enrol
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- -------- END Features w/ pattern background & stats & rocket -------- -->

    <hr class="horizontal dark mb-5">

    <section class="py-4">
        <div class="container">
            <div class="row">
                <h2 class="text-gradient text-danger mb-3 mt-3 text-center">Assessments</h2>
                <div class="col-lg-6">
                    <p style="color: black">
                        <b>Forms of assessments</b> <br>
                        Each module requires participation by way of weekly postings/responses on a module discussion board. There are twelve opportunities to do so and you will be required to submit at least six posts (50%) to qualify for writing the module assignment. Submissions normally close at midnight of the last day of the topic. You will get feedback via the discussion board per each discussion thread.
                        <br>
                        The module assignments which usually occur at the end of each module (each 4th week) consist of 60 multiple-choice questions. Study guides are available via Vinco and are supported with case studies, examples, self-help questions and templates. The Pass mark for each module is 55%.
                        <br>
                        The completion of all the modules is a pre-requisite for sitting the course examination which occurs two weeks after the last module assignment. The course examination consists of 120 multiple-choice questions
                        <br>
                        You will have 7 days to make your submission. Submissions will be marked and feedback provided via Vinco. Participation is mandatory and is assessed as a pass/fail assessment.
                    </p>
                </div>

                <div class="col-lg-6">
                    <p style="color: black">
                        <b>Assessment Regulations</b><br>
                        In order to pass your examination, you should complete successfully or be exempted from the relevant modules and assessments.
                        <br>
                        Each module will be weighted as 28% totalling 84% of your final mark and the course assessment will be weighted as worth 16%. If you fail a module or the examination, the following will apply:
                        <br>
                        Re-sit: you will normally be offered one re-sit attempt. However, if you missed any module assignment and have no extenuating circumstances, you may not be offered a re-sit.
                        <br>
                        If you are successful in the re-sit, you shall be awarded the pass mark for that module. The mark used for the purpose of calculation towards your Award shall be calculated from the original marks for the component(s) that you passed at first attempt and the minimum pass mark for the component(s) for which you took a re-sit.
                        <br>
                        If you do not satisfy your re-sit by the date specified you will fail the course.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-4">
        <div class="container-fluid">
            <div class="row">
                <h2 class="text-gradient text-danger mb-3 mt-3 text-center">Terms and Conditions</h2>
                <div class="col-lg-4">
                    <p style="color: black">
                        <b>Enrolling for a qualification</b> <br>
                        All applicants wishing to enrol on the CARM Course must complete the appropriate online application form and pay the relevant fees. All applications must be received within the specified enrolment period. Applicants must satisfy the entry requirements for their selected qualification programme and, where required, submit appropriate evidence of these as part of their application.
                        <br> <br>
                        <b>Qualification Completion Time Limit</b>
                        Students undertaking the International Certificate in Financial Services Risk Management qualification must complete the qualification within two years of enrolling as a student.
                        <br>
                        Students undertaking the International Certificate in Enterprise Risk Management qualification must complete the qualification within two years of enrolling as a student. Students undertaking the International Diploma in Enterprise Risk Management qualification have a maximum of five years to complete the qualification; the first two modules must be completed within two years of enrolling as a student and a further three years to complete the full Diploma.
                        <br> <br>
                        <b>How the contract is formed</b> <br>
                        When we receive your online application form an email acknowledgement will be sent. Please note that this does not mean that your application has been approved and processed. Applications will not be processed until full payment has been received.
                        <br>
                        On receipt of payment, your application will be approved and processed and an email will be sent to you confirming formal acceptance of your application. It is at this point that a contract is formed.
                        <br><br>
                        <b>Fees and payment</b> <br>
                        Prices quoted on our website are in US Dollars. Payment may be made by credit/debit card or bank transfer. If paying by bank transfer, you are responsible for settling any bank charges which may be incurred. If you pay by credit/debit card the fee will be deducted from your card once we have approved your application. If your application is not approved, we will inform you of this.
                        <br><br>
                        <b>Password and Participant Number</b><br>
                        When your application has been accepted you will be given instructions of how to access the student support area of our website. You will need to logon using your username and password to gain access to the course materials. You must keep your username and password confidential and you must not allow anyone else to use your username and password. You will be responsible for all activities that occur under your username and password. Once you access account you can change your password to something more memorable.
                        <br>
                        You must tell us immediately of any unauthorised use of your username or password or if you believe that your username or password are no longer confidential. We reserve the right to require you to alter your username and password if we believe that they are no longer secure. We will never email you or ask you on the phone for your password. If anyone asks you for your password you must inform us.
                        <br>
                        When you first enrol, you will also be issued with a participant membership number. We will use this number in our correspondence with you.
                        <br> <br>
                        <b>Course materials</b> <br>
                        Course materials are designed to provide the information you need to successfully complete the certification course. They are a mixture of online materials, eBooks, and directed reading references. These are accessed through the participant’s account. Due to publishers' restrictions some online materials may only be downloaded once. In addition, in some instances certain learning materials must be purchased separately by you direct from the publishers.
                </div>

                <div class="col-lg-4">
                    <p style="color: black">
                        You may download and print the course materials provided this is solely for your personal use. You may not change, copy (except as permitted above), reproduce, republish, upload, post, transmit or distribute in any way any part of the course materials. Any use of the course materials not permitted by these terms and conditions ("Terms and Conditions") is strictly prohibited. Such use will constitute an infringement of either our copyright or our other intellectual property rights, or the copyright or other intellectual property rights of people who write materials for us.
                        <br>
                        The course materials have been designed for the specific purpose of helping you to successfully pass the qualification. They should not be relied upon for legal interpretation and we do not accept responsibility for anyone acting as a result of information or views expressed within these materials. Students should take specific advice when dealing with specific situations.
                        <br><br>
                        <b>Quality of course materials</b> <br>
                        We affirm that the course materials will meet a satisfactory level of quality. However, we do not affirm that they will be error free. You will be responsible for inspecting the course materials as soon as is reasonably possible following delivery. Furthermore, you will be responsible for informing us about any oversights as soon as possible.
                        <br><br>
                        <b>Technical IT issues</b> <br>
                        Whilst we will try to assist when we can, you acknowledge that it is your sole responsibility to ensure your IT system is capable of receiving materials by email. We accept responsibility for sending emails to the address you give us but no responsibility for their receipt.
                        <br><br>
                        <b>Cancellation and refunds</b> <br>
                        You may cancel your application within 7 working days of receipt of our confirmation and receive a full refund of fees paid. You must make any such request in writing by email to carm@arimas.org. A refund of the fees paid by you which relate to the cancellation will be sent to you within 30 days of the receipt of your notice of cancellation.
                        <br>
                        Should you wish to cancel your application after the 7-day cooling off period you may do so within the following 28-day period. You are required to make any such request in writing by email to carm@arimas.org and, at your cost, return any received materials in a satisfactory and reasonable condition.
                        <br><br>
                        <b>Refunds will be calculated as follows:</b>
                        A refund of the module fees paid less an administration charge of 50$. The application and the membership fees are non-refundable.
                        <br>
                        Refunds will be sent to you within 30 days of receiving the notice of cancellation. No refunds will be granted after the 28-day period or for non-writing of the examination.
                        <br><br>
                        <b>Information to employers</b> <br>
                        Employers who have sponsored a student can transfer the fees they have paid to another student during the enrolment period. We cannot accept transfers after the enrolment period has closed.
                        <br><br>
                        <b>Study programme deferrals</b><br>
                        Studies cannot be deferred or postponed. Students wanting to defer their registration will be required to either withdraw or cancel.
                        <br><br>
                        <b>Cancellation by ARiMaS</b><br>
                        Courses and examinations are subject to cancellation and rescheduling at our discretion. If a course or examination is cancelled or rescheduled, we will inform you of this as soon as possible. If a course or examination is cancelled, we will offer you at our discretion a an alternative date, a credit note or a full or partial refund. We shall not be liable for any additional loss or damage.
                    </p>
                </div>

                <div class="col-lg-4">
                    <p style="color:black">
                        <b>Force majeure</b><br>
                        We also reserve the right to cancel, suspend or vary the operation of our obligations to you if events occur which are in the nature of force majeure including (but without prejudice to the generality of the foregoing) fire, flood, storms, plant breakdown, strikes, lock outs, riots, hostilities, non-availability of material or suppliers or any other event outside our control; and we shall not be held liable for any breach of contract or in tort resulting from such an event.
                        <br><br>
                        <b>Warranties and liability</b> <br>
                        We will perform any services with reasonable skill and care. Except as otherwise provided in these Terms and Conditions, and except where goods or services are sold to a person dealing as a consumer, all warranties, representations and undertakings, whether express or implied, statutory or otherwise, including but not limited to warranties of satisfactory quality, accuracy, fitness for a particular purpose and of non-infringement of the rights of a third party, are hereby excluded to the fullest extent permitted by law. Where goods or services are sold to a person dealing as a consumer, nothing in these Terms and Conditions shall affect his or her statutory rights.
                        <br>
                        For all events the total liability of the ARIMAS under these Terms and Conditions whether in contract, tort (including negligence), breach of statutory duty, or otherwise shall be limited to an amount equal to 100% of the sum of all fees paid by you to us due under these Terms and Conditions or, if higher, the amount available under any responding insurance policy.
                        <br>
                        Notwithstanding any provision to the contrary in these Terms and Conditions, nothing in these Terms and Conditions shall exclude or limit our liability for death or personal injury caused by our negligence or for fraudulent misrepresentation or for any liability that may not be limited or excluded by law.
                        <br><br>
                        <b>General notices</b> <br>
                        The interpretation, construction, effect and enforceability of these Terms and Conditions and your use of the website shall be governed by South African law, and both parties agree to submit to the exclusive jurisdiction of the South African courts for the determination of all disputes arising between them.
                        <br>
                        Any enquiries relating to these Terms and Conditions should be directed to enquiries@arimas.org.
                        <br><br>
                        <b>Methods of Communication</b> <br>
                        <b>E-mail</b> <br>
                        As it is a distance learning programme, e-mail is the preferred mode of communication. You will be given an ARiMaS e-mail address during registration which you should check regularly.
                        <br>
                        <b>Vinco</b> <br>
                        Vinco is ARiMaS’ virtual learning environment and is a key method of communication. For each module you take there will be a corresponding module and module materials on Vinco. Assessments questions will also be released electronically via Vinco and you will be required to submit electronic copies there.
                        <br>
                        You will also have access to the “CARM Hub” page on Vinco where results for the coursework will be released via this module.
                        <br>
                        Because the CARM programme is a course delivered entirely online, library resources will be made up of ebooks, digitised chapters or pages from books, and links to materials like journal articles via existing databases.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- -------- END PRE-FOOTER 1 w/ SUBSCRIBE BUTTON AND IMAGE ------- -->

@endsection
