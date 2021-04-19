<div class="sidebar-container" id="side-nav" style="!important; overflow-y: scroll !important;">
    <a id="close"><i class="fas fa-times"></i></a>
    <div class="sidebar-logo text-center"><svg width="76" height="33" viewBox="0 0 76 33" fill="none"
                                               xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                  d="M1.01956 1.02551L0 2.0506V13.766V25.481H2.69945H5.39891V19.8418V14.2025H9.48754C14.0995 14.2025 14.9508 13.7581 14.9508 11.3499V10.0253H10.1749H5.39891V7.31013V4.59494H11.8361H18.2732V2.29747V0H10.1562C2.09145 0 2.03207 0.00668435 1.01956 1.02551ZM37.377 2.08861V4.17722H39.8689H42.3607V2.92405C42.3607 1.13787 41.0674 0 39.0382 0H37.377V2.08861ZM22.5388 6.25078C20.8863 7.00519 19.1088 9.12137 19.1055 10.3386C19.103 11.1001 23.6564 11.004 24.6859 10.2208C25.6876 9.45889 28.2463 9.42296 29.2446 10.1573C30.3336 10.9585 29.9133 12.2388 28.4452 12.5931C27.7616 12.7581 25.894 13.1916 24.2951 13.5563C20.8934 14.3333 19.2454 15.6971 18.6761 18.2076C17.5718 23.0774 21.7692 26.6456 27.5153 25.7212C30.2069 25.2884 32.5837 24.0482 33.6776 22.5052C34.6053 21.1969 34.6871 20.6559 34.8101 15.0263C34.9322 9.41294 34.8778 8.87533 34.0837 7.86027C32.2655 5.53481 26.0148 4.66344 22.5388 6.25078ZM37.377 15.6854V25.5228L39.765 25.3975L42.153 25.2722L42.2647 16.2247C42.3926 5.88779 42.381 5.8481 39.2164 5.8481H37.377V15.6854ZM50.339 6.31971C48.4693 6.86191 45.9775 9.47852 45.3616 11.5458C45.0601 12.5575 44.8525 15.7494 44.8525 19.3681V25.481H47.3443H49.8361L49.8386 20.3639C49.8415 13.8516 50.2559 12.2438 52.1356 11.4539C52.9118 11.1277 54.0202 10.8608 54.5987 10.8608C55.6071 10.8608 55.6503 10.758 55.6503 8.35443V5.8481L53.6776 5.88569C52.5924 5.90658 51.0903 6.10166 50.339 6.31971ZM58.7144 9.69406C63.7773 23.9342 64.4995 26.3286 64.0373 27.3491C63.6755 28.1469 63.2121 28.3817 61.7963 28.4844L60.0109 28.6139L59.8855 30.807L59.7597 33L62.1697 32.9983C64.8255 32.9967 66.8634 32.0551 67.728 30.4298C68.1267 29.6804 76 6.39072 76 5.96088C76 5.55695 71.0446 5.93958 70.6991 6.37025C70.4686 6.65765 69.5317 9.52405 68.6176 12.7405C67.6956 15.9837 66.841 18.3096 66.6985 17.962C66.5573 17.6174 65.7246 14.7978 64.8479 11.6962L63.2536 6.05696L60.2937 5.93457L57.3343 5.81176L58.7144 9.69406ZM29.9016 17.4879C29.9016 20.4099 27.3127 22.2988 24.6851 21.2942C23.7664 20.9429 23.6393 20.6743 23.751 19.3205C23.8765 17.7941 23.9504 17.7289 26.5792 16.8279C28.0639 16.3191 29.4191 15.8964 29.5902 15.888C29.7613 15.8801 29.9016 16.5998 29.9016 17.4879Z"
                  fill="white" />
        </svg>
    </div>
    <ul class="sidebar-navigation" id="sidebar-navigation">
        <li class="item  @if(request()->is('admin-panel')) active @endif">
            <a href="{{route('admin.index')}}" >
                <img src="{{asset('public/assets/icons/overview.svg')}}" alt=""> <br>
                <span>Overview</span>
            </a>
        </li>
        <li class="item @if(request()->is('admin-panel/bookings*')) active @endif">
            <a href="{{route('admin.bookings')}}" >
                <img src="{{asset('public/assets/icons/booking.svg')}}" alt=""><br>
                <span>Bookings</span>
            </a>
        </li>
        <li class="item @if(request()->is('admin-panel/connects*')) active @endif">
            <a href="{{route('admin.connects')}}">
                <img src="{{asset('public/assets/icons/connects.svg')}}" alt=""><br>
                <span>Connects</span>
            </a>
        </li>
        <li class="item @if(request()->is('admin-panel/payments*')) active @endif">
            <a href="{{route('admin.payments')}}">
                <img src="{{asset('public/assets/icons/payments.svg')}}" alt=""><br>
                <span>Payments</span>
            </a>
        </li>
        <li class="item @if(request()->is('admin-panel/account*')) active @endif">
            <a href="{{route('admin.account')}}">
                <img src="{{asset('public/assets/icons/account.svg')}}" alt=""><br>

                <span>Account</span>
            </a>
        </li>
        <li class="item @if(request()->is('admin-panel/products*')) active @endif">
            <a href="{{route('admin.products')}}">
                <img src="{{asset('public/assets/icons/products.svg')}}" alt=""><br>
                <span>Products</span>
            </a>
        </li>
        <li class="item @if(request()->is('admin-panel/services*')) active @endif">
            <a href="{{route('admin.services.index')}}">
                <img src="{{asset('public/assets/icons/services.svg')}}" alt=""><br>
                <span>Services</span>
            </a>
        </li>
        <li class="item position-relative @if(request()->is('admin-panel/reports*')) active @endif">
            <a href="{{route('admin.reports')}}">
                <img style="margin-left: 18px;" src="{{asset('public/assets/icons/reports.svg')}}" alt=""><br>
                <span>Reports</span>
            </a>
        </li>
    </ul>
</div>
