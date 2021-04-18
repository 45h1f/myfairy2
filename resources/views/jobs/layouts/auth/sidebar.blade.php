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
        <li class="item  ">
            <a href="{{route('jobs.index')}}" class=" @if(request()->is('jobs')) side-active @endif">
                @if (request()->is('jobs'))
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M19.0004 19.0004L14.6504 14.6504" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                @else
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M9 17C13.4183 17 17 13.4183 17 9C17 4.58172 13.4183 1 9 1C4.58172 1 1 4.58172 1 9C1 13.4183 4.58172 17 9 17Z" stroke="#7165B0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18.9999 19.0004L14.6499 14.6504" stroke="#7165B0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                @endif
                 <br>
                <span class="side-text">Search jobs</span>
            </a>
        </li>

        <li class="item  ">
            <a href="{{route('jobs.general_info')}}" class=" @if(request()->is('jobs/general_info')) side-active @endif">
                @if(request()->is('jobs/general_info'))
                <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">

                    <path d="M18.7778 20.9997V18.7775C18.7778 17.5987 18.3095 16.4683 17.476 15.6348C16.6425 14.8013 15.5121 14.333 14.3333 14.333H5.44444C4.2657 14.333 3.13524 14.8013 2.30175 15.6348C1.46825 16.4683 1 17.5987 1 18.7775V20.9997" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.88878 9.88889C12.3434 9.88889 14.3332 7.89904 14.3332 5.44444C14.3332 2.98985 12.3434 1 9.88878 1C7.43418 1 5.44434 2.98985 5.44434 5.44444C5.44434 7.89904 7.43418 9.88889 9.88878 9.88889Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                @else
                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.7778 20.9997V18.7775C18.7778 17.5987 18.3095 16.4683 17.476 15.6348C16.6425 14.8013 15.5121 14.333 14.3333 14.333H5.44444C4.2657 14.333 3.13524 14.8013 2.30175 15.6348C1.46825 16.4683 1 17.5987 1 18.7775V20.9997" stroke="#7165B0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M9.88878 9.88889C12.3434 9.88889 14.3332 7.89904 14.3332 5.44444C14.3332 2.98985 12.3434 1 9.88878 1C7.43418 1 5.44434 2.98985 5.44434 5.44444C5.44434 7.89904 7.43418 9.88889 9.88878 9.88889Z" stroke="#7165B0" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>

                @endif
                    <br>
                <span class="side-text">General Info</span>
            </a>
        </li>

        <li class="item  ">
            <a href="{{route('jobs.assessment')}}" class=" @if(request()->is('jobs/assessment')) side-active @endif">
               @if(request()->is('jobs/assessment'))
                <svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8 1C7.20435 1 6.44129 1.31607 5.87868 1.87868C5.31607 2.44129 5 3.20435 5 4V12C5 12.7956 5.31607 13.5587 5.87868 14.1213C6.44129 14.6839 7.20435 15 8 15C8.79565 15 9.55871 14.6839 10.1213 14.1213C10.6839 13.5587 11 12.7956 11 12V4C11 3.20435 10.6839 2.44129 10.1213 1.87868C9.55871 1.31607 8.79565 1 8 1V1Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M15 10V12C15 13.8565 14.2625 15.637 12.9497 16.9497C11.637 18.2625 9.85652 19 8 19C6.14348 19 4.36301 18.2625 3.05025 16.9497C1.7375 15.637 1 13.8565 1 12V10" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M8 19V23" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M4 23H12" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>

                @else
                    <svg width="16" height="24" viewBox="0 0 16 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 1C7.20435 1 6.44129 1.31607 5.87868 1.87868C5.31607 2.44129 5 3.20435 5 4V12C5 12.7956 5.31607 13.5587 5.87868 14.1213C6.44129 14.6839 7.20435 15 8 15C8.79565 15 9.55871 14.6839 10.1213 14.1213C10.6839 13.5587 11 12.7956 11 12V4C11 3.20435 10.6839 2.44129 10.1213 1.87868C9.55871 1.31607 8.79565 1 8 1V1Z" stroke="#8F89CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M15 10V12C15 13.8565 14.2625 15.637 12.9497 16.9497C11.637 18.2625 9.85652 19 8 19C6.14348 19 4.36301 18.2625 3.05025 16.9497C1.7375 15.637 1 13.8565 1 12V10" stroke="#8F89CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M8 19V23" stroke="#8F89CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4 23H12" stroke="#8F89CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>


                @endif
                    <br>
                <span class="side-text">Audio/Video</span>
            </a>
        </li>
                <li class="item  ">
            <a href="{{route('jobs.saved')}}" class=" @if(request()->is('jobs/saved')) side-active @endif">
                @if (request()->is('jobs/saved'))
                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                @else
                <svg width="16" height="20" viewBox="0 0 16 20" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M15 19L8 14L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H13C13.5304 1 14.0391 1.21071 14.4142 1.58579C14.7893 1.96086 15 2.46957 15 3V19Z" stroke="#8F89CC" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                </svg>
                @endif
                 <br>
                <span class="side-text">Saved jobs</span>
            </a>
        </li>
        <li class="item ">
            <a href="{{route('jobs.connects')}}" class="@if(request()->is('jobs/connects*')) side-active @endif">
                <i class="far fa-comment link"></i><br>
                <span>Messages</span>
            </a>
        </li>
    </ul>
</div>
