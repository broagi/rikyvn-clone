@extends('welcome')
@section('content')
    <div class="loading">
    <svg width="176" height="55" viewBox="0 0 176 55" xmlns="http://www.w3.org/2000/svg">
        <path d="M84.5292 39.8047L82.5541 45.1924H81.6319L79.6534 39.8047L79.5109 46.0816H78.9106L79.1135 39.1949H79.9888L82.0963 44.8167L84.1922 39.1949H85.0674L85.2703 46.0816H84.6692L84.5292 39.8047Z"  fill="none"  stroke="#0085E5"/>
        <path d="M91.3264 46.0817H90.8176L90.7765 45.6881C90.2754 46.0122 89.6938 46.1845 89.0998 46.1847C88.2237 46.1847 87.8171 45.6736 87.8171 44.7784C87.8171 43.7136 88.295 43.3831 89.2725 43.3831H90.7379V42.4044C90.7379 41.711 90.3808 41.4845 89.5642 41.4845C89.0717 41.4917 88.581 41.547 88.0988 41.6497L88.0074 41.1386C88.5066 41.0106 89.0192 40.9448 89.534 40.9427C90.8159 40.9427 91.3247 41.4589 91.3247 42.4002L91.3264 46.0817ZM90.7396 43.9206H89.2943C88.6127 43.9206 88.409 44.1276 88.409 44.7886C88.409 45.3781 88.5306 45.6472 89.223 45.6472C89.7674 45.6289 90.2945 45.4492 90.7396 45.1302V43.9206Z"  fill="none"  stroke="#0085E5"/>
        <path d="M96.1285 41.5313C95.582 41.7974 95.0579 42.1088 94.5617 42.4623V46.0817H93.9749V41.0415H94.5038L94.5348 41.8082C95.0122 41.4654 95.5236 41.1745 96.0606 40.9402L96.1285 41.5313Z"  fill="none"  stroke="#0085E5"/>
        <path d="M98.1641 46.0817V38.9912L98.7509 38.9061V46.0825L98.1641 46.0817ZM101.705 41.0458L99.7301 43.5271L101.786 46.0825H101.031L99.0192 43.5271L100.973 41.0458H101.705Z"  fill="none"  stroke="#0085E5"/>
        <path d="M105.52 45.6575C106.05 45.6456 106.577 45.5657 107.087 45.4198L107.189 45.9054C106.637 46.0898 106.06 46.1838 105.479 46.1839C104.085 46.1839 103.635 45.4505 103.635 44.3542V42.7724C103.604 42.5201 103.632 42.2638 103.715 42.0239C103.798 41.784 103.934 41.567 104.114 41.3897C104.293 41.2125 104.511 41.0799 104.749 41.0023C104.988 40.9248 105.24 40.9044 105.488 40.9428C105.733 40.9053 105.983 40.9268 106.218 41.0055C106.454 41.0842 106.668 41.2179 106.843 41.3959C107.018 41.5739 107.15 41.7911 107.227 42.0302C107.305 42.2693 107.326 42.5235 107.289 42.7724V43.7443H104.226V44.3755C104.228 45.2741 104.534 45.6575 105.52 45.6575ZM104.228 43.2069H106.711V42.752C106.711 41.9002 106.416 41.459 105.49 41.459C104.565 41.459 104.229 41.9036 104.229 42.752L104.228 43.2069Z"  fill="none"  stroke="#0085E5"/>
        <path d="M112.337 45.9888C112.005 46.1151 111.654 46.1814 111.299 46.1847C110.515 46.1847 110.179 45.8951 110.179 45.0987V41.5629H109.223V41.0458H110.179V39.8533L110.766 39.7681V41.0399H112.283L112.221 41.5569H110.766V45.0305C110.766 45.4752 110.827 45.6609 111.336 45.6609C111.637 45.6566 111.935 45.6078 112.221 45.5161L112.337 45.9888Z"  fill="none"  stroke="#0085E5"/>
        <path d="M114.575 40.0952V38.9879H115.166V40.0952H114.575ZM114.575 46.0825V41.0467H115.166V46.0825H114.575Z"  fill="none"  stroke="#0085E5"/>
        <path d="M120.945 46.0817V42.0075C120.945 41.6353 120.752 41.4964 120.406 41.4964C119.741 41.5642 119.095 41.7608 118.503 42.0757V46.0791H117.916V41.0415H118.435L118.476 41.4964C119.106 41.183 119.789 40.9937 120.488 40.9385C121.262 40.9385 121.537 41.3831 121.537 42.0748V46.0782L120.945 46.0817Z"  fill="none"  stroke="#0085E5"/>
        <path d="M125.932 44.5408C125.71 44.5431 125.488 44.5223 125.27 44.4786C125.158 44.5496 125.065 44.6467 124.998 44.7618C124.931 44.877 124.891 45.0068 124.884 45.1404C124.884 45.3372 124.995 45.4709 125.331 45.5024C125.952 45.5535 126.094 45.5646 126.757 45.6166C127.662 45.6881 127.987 46.1132 127.987 46.8159C127.987 47.8594 127.478 48.2223 125.87 48.2223C125.283 48.2107 124.698 48.1272 124.13 47.9735L124.222 47.4974C124.77 47.6249 125.329 47.6943 125.891 47.7043C127.233 47.7043 127.407 47.4258 127.407 46.8457C127.407 46.3491 127.204 46.1532 126.613 46.1115C125.983 46.0697 125.932 46.0697 125.272 46.0178C124.539 45.9556 124.294 45.5731 124.294 45.1293C124.298 44.9593 124.343 44.7927 124.424 44.6442C124.506 44.4957 124.622 44.3698 124.763 44.2775C124.514 44.1213 124.313 43.8968 124.183 43.6299C124.053 43.3629 124.001 43.0643 124.03 42.7682V42.706C124.03 41.5688 124.528 40.9385 125.933 40.9385C126.216 40.93 126.499 40.9647 126.772 41.0415H128.136V41.476L127.514 41.5271C127.75 41.8718 127.865 42.287 127.841 42.706V42.7682C127.834 43.9096 127.234 44.5408 125.932 44.5408ZM125.932 41.459C124.944 41.459 124.599 41.7698 124.599 42.6898V42.7937C124.599 43.7451 125.025 44.0237 125.932 44.0237C126.838 44.0237 127.265 43.7034 127.265 42.7937V42.6898C127.265 41.78 126.919 41.459 125.932 41.459Z"  fill="none"  stroke="#0085E5"/>
        <path d="M135.995 46.1847C134.255 46.1847 133.624 45.3167 133.624 44.1404V41.1412C133.624 39.9623 134.255 39.0969 135.995 39.0969C137.736 39.0969 138.366 39.9649 138.366 41.1412V44.1404C138.366 45.3159 137.736 46.1847 135.995 46.1847ZM137.766 44.1165V41.1599C137.766 40.1769 137.297 39.6395 135.995 39.6395C134.693 39.6395 134.224 40.1769 134.224 41.1599V44.1165C134.224 45.0987 134.692 45.637 135.995 45.637C137.298 45.637 137.766 45.0987 137.766 44.1165Z"  fill="none"  stroke="#0085E5"/>
        <path d="M144.042 46.0817V42.0075C144.042 41.6353 143.849 41.4964 143.503 41.4964C142.838 41.5642 142.192 41.7608 141.6 42.0757V46.0791H141.013V41.0415H141.532L141.573 41.4964C142.203 41.183 142.885 40.9937 143.585 40.9385C144.358 40.9385 144.633 41.3831 144.633 42.0748V46.0782L144.042 46.0817Z"  fill="none"  stroke="#0085E5"/>
        <path d="M147.33 46.0817V38.9912L147.917 38.9061V46.0825L147.33 46.0817Z"  fill="none"  stroke="#0085E5"/>
        <path d="M150.666 40.0952V38.9879H151.257V40.0952H150.666ZM150.666 46.0825V41.0467H151.257V46.0825H150.666Z"  fill="none"  stroke="#0085E5"/>
        <path d="M157.037 46.0817V42.0075C157.037 41.6353 156.844 41.4964 156.498 41.4964C155.833 41.5641 155.187 41.7608 154.595 42.0757V46.0791H154.008V41.0415H154.527L154.567 41.4964C155.197 41.183 155.88 40.9937 156.579 40.9385C157.352 40.9385 157.627 41.3831 157.627 42.0748V46.0782L157.037 46.0817Z"  fill="none"  stroke="#0085E5"/>
        <path d="M161.953 45.6575C162.483 45.6455 163.009 45.5656 163.519 45.4198L163.622 45.9053C163.07 46.0897 162.493 46.1838 161.912 46.1839C160.518 46.1839 160.068 45.4505 160.068 44.3542V42.7724C160.037 42.5201 160.065 42.264 160.148 42.0241C160.231 41.7843 160.368 41.5673 160.547 41.3901C160.727 41.2129 160.944 41.0803 161.182 41.0027C161.421 40.9251 161.673 40.9046 161.921 40.9428C162.166 40.9053 162.416 40.9268 162.651 41.0055C162.887 41.0842 163.1 41.2179 163.276 41.3958C163.451 41.5738 163.582 41.7911 163.66 42.0302C163.737 42.2693 163.758 42.5235 163.722 42.7724V43.7443H160.658V44.3755C160.658 45.2741 160.964 45.6575 161.953 45.6575ZM160.66 43.2069H163.143V42.752C163.143 41.9001 162.849 41.459 161.922 41.459C160.996 41.459 160.661 41.9036 160.661 42.752L160.66 43.2069Z"  fill="none"  stroke="#0085E5"/>
        <path d="M66.634 34.9086H74.5664V28.4349L66.634 17.7149V34.9086Z"  fill="none"  stroke="#0085E5"/>
        <path  d="M125.66 26.0353L133.51 34.9077H142.515L130.673 21.4296L125.66 26.0353ZM119.633 34.9077V27.4791L142.119 6.78035H133.016L119.633 19.3334V6.7778H111.972V34.9077H119.633Z"  fill="none"  stroke="#0085E5"/>
        <path  d="M84.6768 25.5072C87.7417 25.4459 90.7267 24.5031 93.2858 22.7882C94.3941 22.0592 95.3084 21.0637 95.9477 19.89C96.587 18.7162 96.9316 17.4004 96.951 16.059C96.951 13.4372 95.7773 11.2745 93.4677 9.48056C91.076 7.65631 88.1494 6.70363 85.1597 6.7761H66.6323L70.798 12.4278H84.9661C87.404 12.4278 89.2953 14.0019 89.2953 16.1391C89.2953 18.5242 87.305 20.0574 84.3197 20.0574H72.1134C75.7703 25.0086 79.4277 29.9593 83.0857 34.9094H91.6284L84.6768 25.5072Z"  fill="none"  stroke="#0085E5"/>
        <path d="M104.058 6.77783L107.984 12.0914V6.77783H104.058Z"  fill="none"  stroke="#0085E5"/>
        <path d="M100.324 6.77783V34.9086H107.985V27.48V17.1476L100.324 6.77783Z"  fill="none"  stroke="#0085E5"/>
        <path  d="M157.922 16.3393L151.176 6.77692H142.868L155.605 24.4092V34.9034H163.264V24.4092V24.2252L157.922 16.3393Z"  fill="none"  stroke="#0085E5"/>
        <path  d="M165.237 21.7755L176.001 6.7778H167.691L161.263 15.9338L165.237 21.7755Z"  fill="none"  stroke="#0085E5"/>
        <path d="M24.0068 8.86984C25.6021 8.67575 27.2073 8.57789 28.8139 8.5768C32.5864 8.56264 36.3391 9.13047 39.9438 10.2608L31.8956 2.08352C31.2458 1.4232 30.4742 0.899415 29.6251 0.542051C28.776 0.184687 27.866 0.000732422 26.9469 0.000732422C26.0279 0.000732422 25.1178 0.184687 24.2687 0.542051C23.4196 0.899415 22.6481 1.4232 21.9982 2.08352L11.8274 12.4176C15.6687 10.5655 19.7833 9.36701 24.0068 8.86984Z"  fill="none"  stroke="#0085E5"/>
        <path d="M14.421 19.1809H5.16908L2.21728 22.1801C1.47773 22.93 0.899308 23.8277 0.518643 24.8163C0.137978 25.8049 -0.0366564 26.8631 0.00573118 27.9238C4.50621 23.811 9.90108 20.8392 15.749 19.2516C15.3079 19.2035 14.8646 19.1799 14.421 19.1809Z"  fill="none"  stroke="#0085E5"/>
        <path d="M42.7009 19.9177C46.6319 21.241 50.3295 23.1941 53.6539 25.7032C53.3179 24.3695 52.6344 23.1525 51.6754 22.1801L46.2261 16.6434L42.7009 19.9177Z"  fill="none"  stroke="#0085E5"/>
        <path d="M16.501 14.3171C20.3406 14.3171 23.5933 15.559 25.2331 17.6391C26.1972 17.579 27.1675 17.5483 28.1439 17.5472C30.5421 17.5458 32.9369 17.73 35.3075 18.0983L41.6437 11.984L40.7274 11.053C35.3685 9.22915 29.6742 8.65472 24.067 9.3724C19.3954 9.92162 14.8634 11.3409 10.698 13.559L9.95605 14.312L16.501 14.3171Z"  fill="none"  stroke="#0085E5"/>
        <path d="M31.4807 34.9324C28.3364 34.8229 25.1906 35.0989 22.1113 35.7544L27.8599 43.6293C28.4831 43.5725 29.1118 43.5245 29.7462 43.4854C30.8251 43.4215 31.9124 43.3891 32.978 43.3891C35.5059 43.3813 38.0306 43.5744 40.5289 43.9666L40.8894 44.0246L41.1862 43.7239L31.4807 34.9324Z"  fill="none"  stroke="#0085E5"/>
        <path d="M15.7416 37.7868C13.7408 38.6426 11.8621 39.7674 10.1558 41.131L15.4297 46.4897L15.6343 46.4045C17.2783 45.7578 18.964 45.2262 20.6795 44.8133L15.7416 37.7868Z"  fill="none"  stroke="#0085E5"/>
        <path d="M34.6948 27.3369L33.387 28.5481L41.9322 36.4699C43.3881 37.0265 44.7792 37.7443 46.0803 38.6105L46.1641 38.6667L51.0056 33.7475C46.1901 30.2428 40.578 28.0371 34.6948 27.3369Z"  fill="none"  stroke="#0085E5"/>
        <path d="M25.3238 29.3565C24.0654 30.6625 22.5161 31.6415 20.8068 32.2109L19.7874 32.5712L21.7851 35.308C23.5303 34.9225 25.2995 34.6589 27.0801 34.5193C28.1054 34.4383 29.1399 34.3975 30.1551 34.3975C30.4066 34.3975 30.6523 34.3975 30.8996 34.406L25.3238 29.3565Z"  fill="none"  stroke="#0085E5"/>
        <path d="M10.9361 30.946C8.57717 32.0929 6.3728 33.5426 4.37695 35.2595L9.7985 40.7689L9.84128 40.734C11.5537 39.3637 13.4377 38.2305 15.4439 37.3643L10.9361 30.946Z"  fill="none"  stroke="#0085E5"/>
        <path d="M27.6753 23.7542C27.6712 24.4265 27.5756 25.095 27.3911 25.7406L34.8423 18.5506C32.624 18.2238 30.3854 18.0601 28.1439 18.0608C27.2955 18.0608 26.4555 18.0863 25.6213 18.1323C26.9059 19.7199 27.6291 21.6995 27.6753 23.7542Z"  fill="none"  stroke="#0085E5"/>
        <path d="M53.8055 26.4612C50.333 23.7602 46.4316 21.6823 42.2699 20.3172L35.1792 26.888C37.2559 27.1901 39.3063 27.6563 41.3117 28.2824C44.9057 29.3683 48.2873 31.0787 51.3064 33.3378L51.3634 33.3813L51.6744 33.0653C52.5154 32.2121 53.1466 31.1695 53.5169 30.0221C53.8871 28.8747 53.986 27.6547 53.8055 26.4612Z"  fill="none"  stroke="#0085E5"/>
        <path d="M9.13366 28.3795H14.4211C15.3003 28.3902 16.1772 28.2871 17.0308 28.0728L17.1775 28.0319C19.7672 27.29 20.7573 25.4766 20.7573 23.7542C20.7573 21.9969 19.7035 20.1451 16.926 19.4594C10.6333 20.9911 4.82826 24.1264 0.0585938 28.5694C0.262851 30.2714 1.02329 31.8545 2.21816 33.0653L4.0223 34.8983L4.05162 34.8728C6.05871 33.1457 8.27444 31.6858 10.6452 30.5286L9.13366 28.3795Z"  fill="none"  stroke="#0085E5"/>
        <path d="M15.8179 46.8832L21.5907 52.7487C22.3949 53.5668 23.3704 54.1898 24.4446 54.5712C25.5188 54.9526 26.6639 55.0826 27.7944 54.9515L20.993 45.2682C19.2327 45.6822 17.5034 46.2219 15.8179 46.8832Z"  fill="none"  stroke="#0085E5"/>
        <path d="M45.8028 39.044C44.9191 38.451 43.9897 37.9314 43.0237 37.4904L45.2771 39.5781L45.8028 39.044Z"  fill="none"  stroke="#0085E5"/>
        </svg>
    </div>
    <div class="wrapper">
        <section class="banner">
            <video src="{{ url($settings['welcome_video']) }}" id="background-video" autoplay loop muted>
            </video>
            <div class="bg-svg"><svg version="1.1" id="_glob_shape-fake" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 811.8 811.8" xml:space="preserve">
                    <polygon stroke="#fff" opacity="1" fill="none"
                        points="421.3,1 389.7,1 357.9,3.5 326.5,8.5 295.6,15.9 265.4,25.7 236,37.9 207.7,52.3 180.6,68.9 154.9,87.6 130.7,108.2 108.2,130.7 87.6,154.9 68.9,180.6 52.3,207.7 37.9,236 25.7,265.4 15.9,295.6 8.5,326.5 3.5,357.9 1,389.7 1,421.3 3.5,453.1 8.5,484.5 15.9,515.4 25.7,545.6 37.9,575 52.3,603.3 68.9,630.4 87.6,656.1 108.2,680.3 130.7,702.8 154.9,723.4 180.6,742.1 207.7,758.7 236,773.1 265.4,785.3 295.6,795.1 326.5,802.5 357.9,807.5 389.7,810 421.3,810 453.1,807.5 484.5,802.5 515.4,795.1 545.6,785.3 575,773.1 603.3,758.7 630.4,742.1 656.1,723.4 680.3,702.8 702.8,680.3 723.4,656.1 742.1,630.4 758.7,603.3 773.1,575 785.3,545.6 795.1,515.4 802.5,484.5 807.5,453.1 810,421.3 810,389.7 807.5,357.9 802.5,326.5 795.1,295.6 785.3,265.4 773.1,236 758.7,207.7 742.1,180.6 723.4,154.9 702.8,130.7 680.3,108.2 656.1,87.6 630.4,68.9 603.3,52.3 575,37.9 545.6,25.7 515.4,15.9 484.5,8.5 453.1,3.5"
                        data-svg-origin="412.49999990463255 412.3000000953674" transform="matrix(1,0,0,1,0,0)"
                        style=""></polygon>
                    <polygon stroke="#fff" opacity="1" fill="none"
                        points="416.5,135.4 395.3,135.4 374.1,137 353.1,140.4 332.4,145.3 312.2,152 292.5,160.1 273.6,169.7 255.5,180.8 238.3,193.3 222.2,207.1 207.1,222.2 193.3,238.3 180.8,255.5 169.7,273.6 160.1,292.5 152,312.2 145.3,332.4 140.4,353.1 137,374.1 135.4,395.3 135.4,416.5 137,437.7 140.4,458.7 145.3,479.4 152,499.6 160.1,519.3 169.7,538.2 180.8,556.3 193.3,573.5 207.1,589.6 222.2,604.7 238.3,618.5 255.5,631 273.6,642.1 292.5,651.7 312.2,659.8 332.4,666.5 353.1,671.4 374.1,674.8 395.3,676.4 416.5,676.4 437.7,674.8 458.7,671.4 479.4,666.5 499.6,659.8 519.3,651.7 538.2,642.1 556.3,631 573.5,618.5 589.6,604.7 604.7,589.6 618.5,573.5 631,556.3 642.1,538.2 651.7,519.3 659.8,499.6 666.5,479.4 671.4,458.7 674.8,437.7 676.4,416.5 676.4,395.3 674.8,374.1 671.4,353.1 666.5,332.4 659.8,312.2 651.7,292.5 642.1,273.6 631,255.5 618.5,238.3 604.7,222.2 589.6,207.1 573.5,193.3 556.3,180.8 538.2,169.7 519.3,160.1 499.6,152 479.4,145.3 458.7,140.4 437.7,137"
                        data-svg-origin="405.8999938964844 405.8999938964844" transform="matrix(1,0,0,1,0,0)"
                        style="transform-origin: 0px 0px 0px;"></polygon>
                    <polygon stroke="#fff" opacity="1" fill="none"
                        points="410.9,277.8 400.9,277.8 390.8,278.6 380.9,280.2 371.1,282.5 361.5,285.6 352.2,289.5 343.3,294    334.7,299.3 326.5,305.2 318.9,311.8 311.8,318.9 305.2,326.5 299.3,334.7 294,343.3 289.5,352.2 285.6,361.5 282.5,371.1    280.2,380.9 278.6,390.8 277.8,400.9 277.8,410.9 278.6,421 280.2,430.9 282.5,440.7 285.6,450.3 289.5,459.6 294,468.5    299.3,477.1 305.2,485.3 311.8,492.9 318.9,500 326.5,506.6 334.7,512.5 343.3,517.8 352.2,522.3 361.5,526.2 371.1,529.3    380.9,531.6 390.8,533.2 400.9,534 410.9,534 421,533.2 430.9,531.6 440.7,529.3 450.3,526.2 459.6,522.3 468.5,517.8 477.1,512.5    485.3,506.6 492.9,500 500,492.9 506.6,485.3 512.5,477.1 517.8,468.5 522.3,459.6 526.2,450.3 529.3,440.7 531.6,430.9 533.2,421    534,410.9 534,400.9 533.2,390.8 531.6,380.9 529.3,371.1 526.2,361.5 522.3,352.2 517.8,343.3 512.5,334.7 506.6,326.5 500,318.9    492.9,311.8 485.3,305.2 477.1,299.3 468.5,294 459.6,289.5 450.3,285.6 440.7,282.5 430.9,280.2 421,278.6  "
                        data-svg-origin="684.5000061035156 684.4" transform="matrix(1,0,0,1,0,0)" style=""></polygon>
                </svg></div>
            <div class="txt-banner">
                {{-- <div class="box-slogan intro__title-line i-item top-show">GẶP MẶT - KẾT NỐI - ĐỊNH HƯỚNG</div> --}}
                <h1 class="intro__title-line i-item top-show">MARKETING ONLINE CÙNG CHUYÊN GIA</h1>
                <a href="#dangky" class="btn btn-primary intro__title-line i-item top-show">Kết nối chuyên gia</a>
            </div>
        </section>
        <section class="box-green padding-main">
            <div class="container">
                <div class="row row-sm">
                    <div class="col-md-3  i-item top-show">
                        <div class="box-a">
                            <span class="icon-blue"><img src="images/chart-user.svg"></span>
                            <h3>Đào tạo - Huấn luyện Marketing Online toàn diện</h3>
                        </div>
                    </div>
                    <div class="col-md-3  i-item top-show">
                        <div class="box-a">
                            <span class="icon-green"><img src="images/lightbulb-on.svg"></span>
                            <h3>Cố vấn chiến lược Marketing Online</h3>
                        </div>
                    </div>
                    <div class="col-md-3  i-item top-show">
                        <div class="box-a">
                            <span class="icon-orange"><img src="images/social-network.svg"></span>
                            <h3>Triển khai Marketing Online trọn gói chuyên nghiệp</h3>
                        </div>
                    </div>
                    <div class="col-md-3  i-item top-show">
                        <div class="box-a">
                            <span class="icon-dark"><img src="images/browser.svg"></span>
                            <h3>Thiết kế website, thiết kế bộ nhận diện thương hiệu</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pictures-home padding-main" id="videos">
            <div class="container">
                <div class="title-main i-item top-show">
                    <h2><span>VIDEO DỰ ÁN TIÊU BIỂU</span></h2>
                </div>
                {{-- <div class="slider-picture i-item right-show">
                    @foreach ($videos as $key => $video)
                        <div class="item-picture item-picture-video" data-id="{{ $key }}">
                            <div class="item-picture-img">
                                <img src="{{ url($video->cover) }}">
                                <span class="play-icon"><i class="fas fa-play"></i></span>
                            </div>
                            <h3>{{ $video->title }}</h3>
                        </div>
                    @endforeach
                </div> --}}
                <div class="d-flex flex-wrap">
                  @foreach ($videos as $key => $video)
                  <div class="col-md-4 col-sm-4 col-6 item-picture item-picture-video" data-id="{{ $key }}">
                    <div class="item-picture-img">
                        <img src="{{ url($video->cover) }}">
                        <span class="play-icon"><i class="fas fa-play"></i></span>
                    </div>
                    <h3>{{ $video->title }}</h3>
                </div>
                @endforeach
                </div>
                <div class="text-center">
                  <a href="{{url('/video')}}" class="btn btn-primary">Xem thêm</a>
              </div>
            </div>
        </section>

        <section class="pictures-home padding-main  box-blue" id="hinhanh">
            <div class="container">
                <div class="title-main i-item top-show">
                    <h2><span>HÌNH ẢNH HOẠT ĐỘNG</span></h2>
                </div>
                <div class="slider-picture i-item right-show">
                    @foreach ($photos as $key => $photo)
                        <div class="item-picture item-picture-photo" data-id="{{ $key }}">
                            <div class="item-picture-img">
                                <img src="{{ $photo->thumbnail ? url($photo->thumbnail) : url($photo->path) }}">

                            </div>
                            <h3>{{ $photo->title }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="mission-home padding-main" id="sumenh">
            <div class="container">
                <div class="row row-center">
                    <div class="col-sm-6 txt-mission i-item left-show">
                        <img src="images/success.png">
                        <div class="title-main">
                            <h2><span>Sứ mệnh</span> của chúng tôi</h2>
                        </div>
                        <p>Truyền tải thông tin, cách làm marketing online đến với mọi người theo một cách dễ hiểu, dễ làm
                            và chuyên nghiệp. </p>
                    </div>
                    <div class="col-sm-6 i-item right-show">
                        <img src="images/img1.png" width="100%">
                    </div>
                </div>
            </div>
        </section>

        <section class="why-sections" id="gioithieu">

            <div class="box-section box-green">
                <div class="row row-center">
                    <div class="col-sm-6 i-item left-show">
                        <img src="images/img/10.jpg" width="100%" class="image-mask">
                    </div>
                    <div class="col-sm-6 i-item right-show">
                        <div class="title-main">
                            <h2>Lý do tạo nên buổi gặp gỡ giữa bạn với <span>chuyên gia</span></h2>
                       </div>
                        <ul>
                            <li>Bạn đang tìm hiểu hoặc đang Kinh Doanh Online nhưng chưa biết bắt đầu từ đâu ?</li>
                            <li>Bạn có các thắc mắc về quảng cáo, muốn định hướng và cần các chuyên gia giúp đỡ giải đáp.
                            </li>
                            <li>Bạn đang phân vân giữa tự chạy hoặc đi thuê người chạy ? Cái nào tốt hơn ?</li>
                            <li>Bạn đang tự chạy quảng cáo nhưng chưa biết liệu đang làm như hiện tại đã tốt chưa ? Cần làm
                                gì để tốt hơn.</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-section box-red pt-0 pb-0 pt-lg-5 pb-lg-5">
                <div class="row row-center">
                    <div class="col-sm-6 order-12 i-item right-show">
                        <img src="images/img/12.jpg" width="100%" class="image-mask">
                    </div>
                    <div class="col-sm-6 i-item left-show">
                        <div class="title-main">
                            <h2>Buổi gặp gỡ này dành <span>cho những ai</span>?</h2>
                        </div>
                        <ul>
                            <li>Bạn là shop hoặc cá nhân đang kinh doanh online</li>
                            <li>Doanh nghiệp muốn tìm hiểu sâu hơn để phát triển kinh doanh</li>
                            <li>Các nhà quảng cáo vẫn còn đang loay hoay tìm công thức để làm tốt hơn</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="box-section box-green">
                <div class="row row-center">
                    <div class="col-sm-6 i-item left-show">
                        <img src="images/img/11.jpg" width="100%" class="image-mask">
                    </div>
                    <div class="col-sm-6 i-item right-show">
                        <div class="title-main">
                            <h2>Nội dung sẽ được chia sẻ từ <span>chuyên gia</span></h2>
                        </div>
                        <ul>
                            <li>Quảng cáo online bắt đầu từ đâu và làm như thế nào ?</li>
                            <li>Tự chạy quảng cáo và đi thuê đơn vị chạy quảng cáo, phương án nào tốt hơn ?</li>
                            <li>Khi nào nên đi thuê, khi nào nên tự chạy ?</li>
                            <li>Tìm ra lý do mà Shop/ Doanh nghiệp đang lãng phí ngân sách trong quá trình chạy quảng cáo
                                mỗi ngày mà bạn KHÔNG HỀ HAY BIẾT.</li>
                            <li>Chia sẻ về các hình thức chạy quảng cáo online và cách làm phù hợp với ngành hàng của bạn.
                            </li>
                            <li>Trả lời và giải đáp các thắc mắc của các bạn về kinh doanh online.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section class="member-home padding-main" id="chuyengia">
            <div class="container">
                <div class="title-main title-white">
                    <h2>Chuyên gia sẽ kết nối <br>đến bạn là ai ?</h2>
                </div>
                <div class="slider-members">
                    <div class="">
                        <div class="box-member">
                            <img src="images/member.png">
                            <h3>Coach Harry An Pham</h3>
                            <div class="staff-member">Nhà huấn luyện Digital Marketing</div>
                            <p>Khởi nguồn được đào tạo trực tiếp từ Facebook Việt Nam từ năm 2015. Nhà Huấn Luyện đã có hơn
                                9 năm kinh nghiệm trong ngành Marketing và trên 7 năm kinh nghiệm đào tạo, huấn luyện, tư
                                vấn cho các cá nhân, tổ chức, doanh nghiệp về Marketing Online. Hiện tại, anh đang quản lý
                                và chạy quảng cáo cho nhiều tài khoản quảng cáo ngân sách lớn cho các doanh nghiệp lớn tại
                                Việt Nam.</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="box-member">
                            <img src="images/member1.png">
                            <h3>Coach Sang Dang</h3>
                            <div class="staff-member">Nhà huấn luyện Digital Marketing</div>
                            <p>Là nhà huấn luyện có thời gian làm việc về website, google marketing với các đối tác dự án
                                nươc ngoài (Pháp, Úc, Ấn Độ, …) thâm niên nhất tại riky.vn với hơn 8 năm kinh nghiệm. Thế
                                mạnh định hướng về tư duy cách làm sẽ giúp đỡ cho rất nhiều cho các shop/doanh nghiệp trong
                                việc phát triển kinh doanh trên nền tảng online. </p>
                        </div>
                    </div>
                    <div class="">
                        <div class="box-member">
                            <img src="images/member2.png">
                            <h3>Coach Ngoc Anh</h3>
                            <div class="staff-member">Nhà huấn luyện Digital Marketing</div>
                            <p>Tốt nghiệp Cử nhân từ Trường Đại Học Tài Chính - Marketing cùng nhiều năm kinh nghiệm triển khai - thực thi các chiến lược Marketing, Nhà huấn luyện đã tích luỹ cho mình nhiều kiến thức - kinh nghiệm - trải nghiệm thực chiến trong mảng Marketing Online. Hiện tại, Nhà huấn luyện đang quản lý và chạy quảng cáo cho nhiều dự án từ các doanh nghiệp ở các lĩnh vực khác nhau tại Việt Nam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="padding-signup">
            <div class="container">
                <div class="signup-home i-item  zoomin" id="dangky">
                    <div class="form-sign">
                        <h3>Thông tin đăng ký</h3>
                        <p>Chương trình được tài trợ MIỄN PHÍ bởi Riky.vn</p>
                        <form id="contact-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required type="text" class="form-control" name="fullname"
                                            placeholder="Họ và tên">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input required type="text" class="form-control" name="phone_number"
                                            placeholder="Số điện thoại">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <input required type="text" class="form-control" name="description"
                                            placeholder="Sản phẩm kinh doanh">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button class="btn btn-primary">Đăng ký</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <img src="{{$settings['site_logo'] ?? url('images/logo.svg')}}">
                        <p>Riky Marketing là công ty tư vấn, huấn luyện đào tạo Marketing Online tại Việt Nam. Hỗ trợ các Cá
                            Nhân, Doanh Nghiệp, Nghệ Sĩ nắm bắt cơ hội kinh doanh trực tuyến và khai thác tối đa ứng dụng
                            của Internet vào hoạt động kinh doanh.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3>Thông Tin liên hệ</h3>
                        <ul>
                            <li>Địa chỉ: {{ $settings['address'] }}</li>
                            <li>Email: {{ $settings['email'] }}</li>
                            <li>Hotline: {{ $settings['hotline'] }}</li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <h3>Fanpage RIKY</h3>
                        <div class="fb-page" data-href="https://www.facebook.com/RiKyMarketing" data-tabs="timeline"
                            data-width="400" data-height="100" data-small-header="false"
                            data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="https://www.facebook.com/RiKyMarketing" class="fb-xfbml-parse-ignore"><a
                                    href="https://www.facebook.com/RiKyMarketing">RiKy Marketing</a></blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <div class="box-contact-mobile">
      <a href="#dangky" class="btn btn-danger"><i class="fas fa-user"></i> Đăng Ký</a>
      <a href="https://zalo.me/{{ $settings['zalo'] }}" target="_blank" class="btn btn-primary">Zalo</a>
    </div>

    <div id="fixedLinks">
      @if (isset($settings['zalo']))
      <a href="https://zalo.me/{{ $settings['zalo'] }}" target="_blank">
        <img src="/images/zalo.svg" alt="zalo">
      </a>
      @endif
    </div>

    <div class="popup-album popup-album-photo">
        <div class="close-modal close-popup"><i class="fa fa-close"></i></div>
        <div class="bg-popup-album"></div>
        <div class="slider-for">
            @foreach ($photos as $photo)
                <div class="item-for"><img src="{{ url($photo->path) }}"></div>
            @endforeach()
        </div>
        <div class="slider-nav">
            @foreach ($photos as $photo)
                <div class="item-nav"><img src="{{ url($photo->path) }}"></div>
            @endforeach()
        </div>
    </div>

    <div class="popup-album popup-album-video">
        <div class="close-modal close-popup"><i class="fa fa-close"></i></div>
        <div class="bg-popup-album"></div>
        <div class="slider-for">
            @foreach ($videos as $video)
                <div class="item-for">
                    <div class="item-for-dialog">
                      {!! $video->embed_frame !!}
                    </div>
                </div>
            @endforeach()
        </div>
        <div class="slider-nav">
            @foreach ($videos as $video)
                <div class="item-nav"><img src="{{ url($video->cover) }}"></div>
            @endforeach()
        </div>
    </div>

    <div id="success_tic" class="modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="marker">
                    <h1 style="text-align:center;">
                        <div class="checkmark-circle">
                            <div class="background"></div>
                            <div class="checkmark draw"></div>
                        </div>
                        <h1>
                </div>
                {{-- <a class="close" href="#" data-dismiss="modal">&times;</a> --}}
                <div class="page-body">
                    <div class="head">
                        <h3 style="margin-top:5px;">Awesome!</h3>
                        <h4>Your booking has been confirmed</h4>
                    </div>
                    <div class="text-center">
                        <button type="button" class="btn btn-success w-100  " data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
