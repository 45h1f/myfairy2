<div class="jumbotron m-auto" style="background-color: transparent!important; position: fixed; z-index: 999999999;width: 90%;padding-bottom: 0;" id="navbar">
    <div class="float-left" style="position: relative;">
        <a id="toggle"><i class="fas fa-bars"></i></a>
        <style>
            #search {
                font-family: Poppins;
                font-style: normal;
                font-weight: 500;
                font-size: 14px;
                line-height: 150%;
                /* identical to box height, or 21px */
                color: #B1BEDE;
            }
        </style>
        <img style="position: absolute; z-index: 999; left: 15px; top: 15px;" src="{{asset('public/assets/icons/search.svg')}}" alt="">
        <input id="search" style="padding-left: 50px;" type="search" class="form-control" placeholder="Search" aria-label="Search"
               aria-describedby="basic-addon1">
    </div>

    <div class="user float-right d-flex align-items-center position-relative">
        <div class="dropdown ">
            <a class="c-pointer" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-2x fa-bell" id="bellDropDown"  ></i></a>
            <div class="dropdown-menu dropdown-menu-nav" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
            </div>
        </div>
        <div class="position-relative">
            <a class="c-pointer d-flex" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img src="{{asset('/public/assets/admin/images/atikh-bana.png')}}" alt=""><p style="padding: 10px;">Rebecca Moore</p></a>
            <div class="dropdown-menu dropdown-menu-nav" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">My Account</a>
                <a class="dropdown-item" href="#">Start Selling</a>
                <a class="dropdown-item" href="#">Favorites</a>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <hr>
</div>
