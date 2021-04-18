@extends('layouts.front')
@section('front_title')
    Referral Code
@endsection
@section('front_css')
@endsection
@section('front_content')
<div class="main">

    <section class="main-pt referral-code-sec">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1><span>Share</span> your <span>referral code</span> and earn <span>1 credit</span> per referral</h1>
                    <div class="referral-code-link">
                        <input type="text" value="http//Fairyfile/YV9aGLwb053" readonly>
                        <button><svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M6.98057 18.6659C5.97395 19.6733 4.34088 19.6733 3.3342 18.6659C2.3427 17.6751 2.32689 16.0771 3.28745 15.067L8.7215 9.63293C7.0409 9.18357 5.17739 9.59718 3.83389 10.8749L1.41771 13.2911C-0.503465 15.3113 -0.47184 18.5073 1.51121 20.4889C3.52451 22.5036 6.79065 22.5036 8.80395 20.4889L11.0317 18.2612C12.382 16.9118 12.8272 14.9996 12.3674 13.2791L6.98057 18.6659Z" fill="white"/><path d="M20.4885 1.51121C18.5068 -0.47184 15.3108 -0.503465 13.2906 1.41771L10.8744 3.83389C9.59677 5.17743 9.18316 7.04095 9.63248 8.7215L15.0665 3.28745C16.0766 2.32689 17.6746 2.3427 18.6655 3.3342C19.6728 4.34088 19.6728 5.9739 18.6655 6.98057L13.2786 12.3674C14.9991 12.8272 16.9113 12.382 18.2607 11.0317L20.4884 8.80395C22.5032 6.79065 22.5032 3.52451 20.4885 1.51121Z" fill="white"/><path d="M7.08094 14.9199C7.58428 15.4236 8.40081 15.4236 8.90411 14.9199L14.9207 8.90331C15.4244 8.39997 15.4244 7.58344 14.9207 7.08014C14.4253 6.58437 13.6263 6.57646 13.1213 7.05677L7.05752 13.1205C6.57726 13.6255 6.58517 14.4245 7.08094 14.9199Z" fill="white"/></svg></button>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="referral-code-img">
                        <img src="{{URL::to('storage/app/public/Frontassets/images/referral-code-img.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection
@section('front_js')
@endsection