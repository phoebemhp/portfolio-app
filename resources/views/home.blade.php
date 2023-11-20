@extends('layouts.app')

@section('content')
<div class="container font-poppins">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="row home-title font-faustina">
                <div class="col d-flex align-items-center p-0">
                    <span class="display-4 me-3">{{ Auth::user()->name }}</span>
                    <i class="fa fa-circle fa-md me-3 text-dark-green" aria-hidden="true"></i>
                    <span class="display-4 text-dark-green">UI/UX</span>
                </div>
            </div>
            <div class="row">
                <div class="col-1">
                    <span class="font-faustina text-light-green fw-bold">sections</span>
                </div>
                <div class="col-3">
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="row justify-content-center d-grid gap-3 d-md-flex ms-1 me-1">
                        <a href="#dailyUI" class="btn col bg-light-green-button border border-success border-opacity-10 rounded-2">ui/ux showcase</a>
                        <a href="#designProcess" class="btn col bg-light-green-button border border-success border-opacity-10 rounded-2">design process</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin" id="dailyUI">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6 me-4">
                    <h1 class="display-6 fw-normal">Daily UI Challenge</h1>
                    <p class="fs-5 fw-light">Everyday I design a different UI component/screen. <br> Through this challenge I experiment with different styles.</p>
                    <a class="btn col bg-light-green-button border border-success border-opacity-10 rounded-5">See more in Behance!</a>
                </div>
                <div class="col">
                    <div class="wrapper">
                        <ul class="items">
                            <li class="item">0</li>
                            <li class="item">1</li>
                            <li class="item">2</li>
                            <li class="item">3</li>
                            <li class="item">4</li>
                            <li class="item">5</li>
                            <li class="item">6</li>
                            <li class="item">7</li>
                            <li class="item">8</li>
                            <li class="item">9</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6 me-4">
                    <h1 class="display-6 fw-normal">Warehouse Management System</h1>
                    <p class="fs-5 fw-light">This system has a mobile app for operators to handle warehousing processes and a desktop website for admins to customize the processes.</p>
                </div>
                <div class="col">
                    <div class="wrapper">
                        <ul class="items">
                            <li class="item">0</li>
                            <li class="item">1</li>
                            <li class="item">2</li>
                            <li class="item">3</li>
                            <li class="item">4</li>
                            <li class="item">5</li>
                            <li class="item">6</li>
                            <li class="item">7</li>
                            <li class="item">8</li>
                            <li class="item">9</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-6 fw-normal">Corporate Informational Site + Questionnaire</h1>
                    <p class="fs-5 fw-light">A website for Singaporean companies to identify their strengths and provide relevant information in their respective industries.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-6 fw-normal">Employee Management</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-6 fw-normal">Company Website & Client System</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-6">
                    <h1 class="display-6 fw-normal">Company Website & Client System</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center section-margin" id="designProcess">
        <div class="col-md-9">
            <div class="row">
                <div class="col-3">
                    <span class="fs-3 font-faustina text-dark-green fw-bold">my design process</span>
                </div>
                <div class="col-9">
                    <hr>
                </div>
            </div>
            
            <div class="row mt-6" id="gathering-requirements">
                <div class="col-2 text-end me-5">
                    <h1 class="display-1 font-londrina-outline fw-bold" id="gatheringRequirementNumber">1</h1>
                </div>
                <div class="col-9">
                    <h5 class="fs-3 font-faustina fw-bold" id="gatheringRequirementTitle">Gathering requirements</h5>
                    <span>Every project has a unique goal to achieve. Understanding the needs of the project gives me the direction for a satisfying design.</span>
                    <div class="row mt-3">
                        <div class="col">
                            <div class="accordion">
                                <div class="accordion-item border-0">
                                    <button class="btn col-2 bg-dark-green-button bg-opacity-10 text-light-grey fw-light rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#gatheringRequirementAccordion" >See details</button>
                                    <div id="gatheringRequirementAccordion" class="accordion-collapse collapse">
                                        <div class="accordion-body bg-light-green mt-3 rounded-3">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <i class="fa fa-asterisk me-3" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col">
                                                            <span>I collaborate with the project manager to gather information on the project and align on my timeline and tasks.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col">
                                                            <span>I research user behaviour by understanding their challenges, pain points, and motivations.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col">
                                                            <span>I communicate with the client to identify business requirements and their preconceived expectations on the projects.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col">
                                                            <span>I work closely with developers to discuss technical constraints and come up with creative solutions together.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4" id="designing">
                <div class="col-2 text-end me-5">
                    <h1 class="display-1 font-londrina-outline fw-bold" id="designingNumber">2</h1>
                </div>
                <div class="col-9">
                    <h5 class="fs-3 font-faustina fw-bold" id="designingTitle">Designing</h5>
                    <span>Good design balances functionality, user experience, and aesthetics. It should be user friendly, works well, and looks good!</span>
                    <div class="row mt-3">
                        <div class="col">
                        <div class="accordion">
                                <div class="accordion-item border-0">
                                    <button class="btn col-2 bg-dark-green-button bg-opacity-10 text-light-grey fw-light border border-success border-opacity-10 rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#designingAccordion">See details</button>
                                    <div id="designingAccordion" class="accordion-collapse collapse">
                                        <div class="accordion-body mt-3">
                                            <div class="row">
                                                <div class="col bg-light-blue rounded-3 me-3">
                                                    <div class="row">
                                                        <span class="fs-5 font-faustina fw-bold">Creating user interfaces</span>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <span>The user interface begins as low-fidelity wireframes; rough drawings of screens layouts and user flows. This allows me to test out different design variations quickly and decide how someone will use the system early on.</span>
                                                        </div>
                                                        <div class="col">
                                                            <span>I convert all the drawings into high-fidelity screens using Adobe XD (or any UI design software). This is where the user interface gets fleshed out with pretty colors, fonts, and design, while considering the readability of each screen and the overall visual tone.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col bg-light-blue rounded-3">
                                                    <div class="row">
                                                        <span class="fs-5 font-faustina fw-bold">Creating prototypes</span>
                                                    </div>
                                                    <div class="row">
                                                        <p>With all the designed screens, I link up dynamic elements with appropriate screens using click or hover actions.</p>
                                                        <p>This creates a prototype (or more!) which simulates the journey a user which simulates the journey a user can take. I run the prototype  to double check all the use cases and identify any friction in user interaction.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4" id="reviewing">
                <div class="col-2 text-end me-5">
                    <h1 class="display-1 font-londrina-outline fw-bold" id="reviewingNumber">3</h1>
                </div>
                <div class="col-9">
                    <h5 class="fs-3 font-faustina fw-bold" id="reviewingTitle">Reviewing</h5>
                    <span>Review and iteration is critical to user-critical design, It is an important step that allows me to continuously improve my designs.</span>
                    <div class="row mt-3">
                        <div class="col">
                        <div class="accordion">
                                <div class="accordion-item border-0">
                                    <button class="btn col-2 bg-dark-green-button bg-opacity-10 text-light-grey fw-light border border-success border-opacity-10 rounded-5" type="button" data-bs-toggle="collapse" data-bs-target="#reviewingAccordion">See details</button>
                                    <div id="reviewingAccordion" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body bg-light-pink mt-3 rounded-3">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <i class="fa fa-asterisk me-3" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col">
                                                            <span>I present screens and prototypes to my project manager and clients so they can visualize how the final result would look and function. This is how I explain my design vision and manage stakeholder expectations.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="row">
                                                        <div class="col-1">
                                                            <i class="fa fa-asterisk" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="col">
                                                            <span>I also present to the developers to check the technical feasibility of my designs. This ensures the design can be implemented as per specifications and the project can progress smoothly with minimal interruptions.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row justify-content-center text-center">
                                                <div class="col-11">
                                                    <span>These stakeholders give crucial feedback that I take into account to improve the user experience and correct functional gaps in the next iteration of my product.</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    let isDown = false;
    let startX;
    let scrollLeft;
    const slider = document.querySelector('.items');

    const end = () => {
        isDown = false;
    slider.classList.remove('active');
    }

    const start = (e) => {
    isDown = true;
    slider.classList.add('active');
    startX = e.pageX || e.touches[0].pageX - slider.offsetLeft;
    scrollLeft = slider.scrollLeft;	
    }

    const move = (e) => {
        if(!isDown) return;

    e.preventDefault();
    const x = e.pageX || e.touches[0].pageX - slider.offsetLeft;
    const dist = (x - startX);
    slider.scrollLeft = scrollLeft - dist;
    }

    (() => {
        slider.addEventListener('mousedown', start);
        slider.addEventListener('touchstart', start);

        slider.addEventListener('mousemove', move);
        slider.addEventListener('touchmove', move);

        slider.addEventListener('mouseleave', end);
        slider.addEventListener('mouseup', end);
        slider.addEventListener('touchend', end);
    })();

    const gatheringRequirementAccordion = document.getElementById('gatheringRequirementAccordion');
    
    function handleGatherRequirementsAccordionStateChange() {
        const gatheringRequirementTitle = document.getElementById('gatheringRequirementTitle');
        const gatheringRequirementNumber = document.getElementById('gatheringRequirementNumber');
        if (gatheringRequirementAccordion.classList.contains('show')) {
            gatheringRequirementTitle.classList.remove('text-green');
            gatheringRequirementNumber.classList.remove('text-green');
        } else {
            gatheringRequirementTitle.classList.add('text-green');
            gatheringRequirementNumber.classList.add('text-green');
        }
    }
    gatheringRequirementAccordion.addEventListener('show.bs.collapse', handleGatherRequirementsAccordionStateChange);
    gatheringRequirementAccordion.addEventListener('hide.bs.collapse', handleGatherRequirementsAccordionStateChange);

    const designingAccordion = document.getElementById('designingAccordion');
    
    function handleDesigningAccordionStateChange() {
        const designingTitle = document.getElementById('designingTitle');
        const designingNumber = document.getElementById('designingNumber');
        if (designingAccordion.classList.contains('show')) {
            designingTitle.classList.remove('text-blue');
            designingNumber.classList.remove('text-blue');
        } else {
            designingTitle.classList.add('text-blue');
            designingNumber.classList.add('text-blue');
        }
    }
    designingAccordion.addEventListener('show.bs.collapse', handleDesigningAccordionStateChange);
    designingAccordion.addEventListener('hide.bs.collapse', handleDesigningAccordionStateChange);

    const reviewingAccordion = document.getElementById('reviewingAccordion');
    
    function handleAccordionStateChange() {
        const reviewingTitle = document.getElementById('reviewingTitle');
        const reviewingNumber = document.getElementById('reviewingNumber');
        if (reviewingAccordion.classList.contains('show')) {
            reviewingTitle.classList.remove('text-pink');
            reviewingNumber.classList.remove('text-pink');
        } else {
            reviewingTitle.classList.add('text-pink');
            reviewingNumber.classList.add('text-pink');
        }
    }
    reviewingAccordion.addEventListener('show.bs.collapse', handleAccordionStateChange);
    reviewingAccordion.addEventListener('hide.bs.collapse', handleAccordionStateChange);
</script>
@endsection