@extends('header')
@section('body')
    <!-- Navigation -->
    <div class="agiletopbar">
        <div class="wthreenavigation">
            <div class="menu-wrap">
                <nav class="menu">
                    <div class="icon-list">
                        <a class="scroll active" href="#agilehome"><i class="fa fa-home"></i><span>Home</span></a>
                        <a class="scroll" href="#sl3waboutstia"><i class="fa fa-info"></i><span>About</span></a>
                        <a class="scroll" href="#wthreedesserts"><i class="fa fa-birthday-cake"></i><span>Specials</span></a>
                        <a class="scroll" href="#portfolio"><i class="fa fa-picture-o"></i><span>Portfolio</span></a>
                        <a class="scroll" href="#chefw3agile"><i class="fa fa-user"></i><span>Chefs</span></a>
                        <a class="scroll" href="#agileinfofeedback"><i class="fa fa-comment-o"></i><span>Feedback</span></a>
                        <a class="scroll" href="#newsletter"><i class="fa fa-envelope-o"></i><span>Subscribe</span></a>
                        <a class="scroll" href="#aitscontactw3l"><i class="fa fa-phone"></i><span>Contact</span></a>
                        <!--
                        @if logged
                            <a class="scroll" href=""><i class="fa fa-users"></i><span>Log in</span></a>
                            <a class="scroll" href=""><i class="fa fa-user-plus"></i><span>Sign up</span></a>
                        @else
                            <a class="scroll" href=""><i class="fa fa-sign-out "></i><span>Logout</span></a>
                        @endif
                        -->
                    </div>
                </nav>
                <button class="close-button" id="close-button">Close Menu</button>
            </div>
            <button class="menu-button" id="open-button">Open Menu</button>
        </div>
        <div class="agileinfomenu">
            <p>MENU</p>
        </div>
        <div class="aitslogow3ls">
                <a href="index.html"><div class="agilelogo">Cake Factory</div></a>
        </div>
        <div class="wthreecontact">
            <p><a class="scroll" href="#aitscontactw3l"><i class="fa fa-envelope-o" aria-hidden="true"></i> CONTACT US</a></p>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //Navigation -->
@endsection