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
                        <button class="btn col bg-light-green border border-success border-opacity-10 rounded-2">ui/ux showcase</button>
                        <button class="btn col bg-light-green border border-success border-opacity-10 rounded-2">design process</button>
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
                    <h1 class="display-6 fw-normal">Daily UI Challenge</h1>
                    <p class="fs-5 fw-light">Everyday I design a different UI component/screen. <br> Through this challenge I experiment with different styles.</p>
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
    <div class="row justify-content-center section-margin">
        <div class="col-md-9">
            <div class="row">
                <div class="col-3">
                    <span class="fs-3 font-faustina text-dark-green fw-bold">my design process</span>
                </div>
                <div class="col-9">
                    <hr>
                </div>
            </div>
            <div class="row mt-6">
                <div class="col-2 text-end me-5">
                    <h1 class="display-1 font-londrina-outline fw-bold">1</h1>
                </div>
                <div class="col-8">
                    <h5 class="fs-3 font-faustina fw-bold">Gathering requirements</h5>
                    <span>Every project has a unique goal to achieve. Understanding the needs of the project gives me the direction for a satisfying design.</span>
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn col-2 bg-dark-green bg-opacity-10 text-light-grey fw-light border border-success border-opacity-10 rounded-4">See details</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-2 text-end me-5">
                    <h1 class="display-1 font-londrina-outline fw-bold">2</h1>
                </div>
                <div class="col-8">
                    <h5 class="fs-3 font-faustina fw-bold">Designing</h5>
                    <span>Good design balances functionality, user experience, and aesthetics. It should be user friendly, works well, and looks good!</span>
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn col-2 bg-dark-green bg-opacity-10 text-light-grey fw-light border border-success border-opacity-10 rounded-4">See details</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-2 text-end me-5">
                    <h1 class="display-1 font-londrina-outline fw-bold">3</h1>
                </div>
                <div class="col-8">
                    <h5 class="fs-3 font-faustina fw-bold">Reviewing</h5>
                    <span>Review and iteration is critical to user-critical design, It is an important step that allows me to continuously improve my designs.</span>
                    <div class="row mt-3">
                        <div class="col">
                            <button class="btn col-2 bg-dark-green bg-opacity-10 text-light-grey fw-light border border-success border-opacity-10 rounded-4">See details</button>
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

</script>
@endsection