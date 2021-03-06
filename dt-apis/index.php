<!DOCTYPE html>
<html lang="en">
<head>

    <!--    Global site tag (gtag.js) - Google Analytics-->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148595578-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'UA-148595578-1');
    </script>


    <!-- meta Data -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!--        favicon-->
    <link rel="icon" href="../images/mcornel-logo.png" type="image/gif">

    <!-- Primary Meta Tags -->
    <title>Dev Tools APIs | Consult mCornel</title>
    <!-- Open Graph / Facebook -->

    <link rel="stylesheet" href="../css/fontawesome-all.min.css"/>
    <link rel="stylesheet" href="../css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../css/main.css"/>
    <link rel="stylesheet" href="../css/responsive.css"/>
    <link rel="stylesheet" href="../css/colors/blue-color.css"/>

    <!-- Plugins -->
    <link rel="stylesheet" href="../css/magnific-popup.css"/>

    <!-- google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script|Poppins:300i,400,600"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <!-<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--    <script src="js/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <!--    <script src="js/respond.min.js"></script>-->
    <![endif]-->
    <style>
        footer {
            padding: 10px;
            margin-top: 15px;
            bottom: 0;
        }

        .suggestion-link {
            border-radius: unset;
            border-color: #55aea1;
            color: #55aea1;
        }

        .suggestion-link:hover {
            background: #55aea1;
            color: white;
            border-color: #55aea1;
        }
    </style>

</head>
<body>

<div class="row" style="margin-top: 30px; margin-left: 50px; margin-right: 50px;">
    <div class="col-md-6 text-center">
        <h5>Developer tools APIs undergoing upgrades</h5>
        <h1 class="text-info"><i class="fa fa-question"></i></h1>
        <!--        <svg class="position-relative position-md-absolute right-n8 right-lg-8 top-lg-3" width="240px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 518.6 406.73"><g data-name="Layer 2"><g id="Layer_5" data-name="Layer 5"><ellipse cx="383.17" cy="369.46" rx="135.42" ry="16.07" style="fill:#cacfd6"></ellipse><path d="M37.2,399.86c0,2.37-5.37,3.88-11.75,4.2-.8,1.61-8,2.67-11,2.67C4.83,406.73,1,405,1,401.56s7.82-6.2,17.46-6.2S37.2,396.44,37.2,399.86Z" style="fill:#cacfd6"></path><path d="M143.92,281.81c1.81,9.57,6.21,49.92,6.47,56.9s8.53,9.05,14.74,7.76,12-8.33,12.4-11.38-14.89-45.84-15.83-51.72S143.92,281.81,143.92,281.81Z" style="fill:#ffd33d"></path><path d="M161.7,283.37a2.85,2.85,0,0,0-1.25-1.89c-3.72,7.66,3.41,23.7,4.1,30.94.5,5.19,3.64,7.34,4.91,11.94,1,3.66-.55,6.28.94,10a31.71,31.71,0,0,0,3.88,6.26c1.86-2.07,3.09-4.19,3.25-5.54C177.89,332,162.64,289.25,161.7,283.37Z" style="fill:#f9c513"></path><path d="M153.38,344.41a11.86,11.86,0,0,0,5,2.12c-.48-4.14-1-8.27-1.35-12.43-.64-7.93-2.45-14.05-4.37-21.63-2.28-9.06,1.28-22.79-5.76-29.84a2.45,2.45,0,0,1-.72-1.33l-.92.2C149.47,302.17,150.89,323.38,153.38,344.41Z" style="fill:#ffdf5d"></path><path d="M159,293a19.71,19.71,0,0,0,4.63-2.76,69.71,69.71,0,0,1-1.91-6.91c-.95-5.89-17.78-1.56-17.78-1.56.45,2.37,1.06,6.62,1.72,11.77C150,293.59,154.58,294.86,159,293Z" style="fill:#dbab09"></path><path d="M83.21,191.25c-1.41.23-10.64-3.83-14.89,12.37s19.51,51.52,43.93,66.81c24.66,15.43,40.79,19.51,46.48,15.73,5.1-8.31,4.88-14,4.88-14s-34-14.65-51.68-30.48C93.52,225.21,83.21,191.25,83.21,191.25Z" style="fill:#dbab09;stroke:#ffea7f;stroke-miterlimit:10;stroke-width:2.5px"></path><path d="M110.23,258.74c14.48,11.6,35.06,22.76,53.38,22.74,3.62-6.92,0-9.34,0-9.34s-34-14.65-51.68-30.48c-18.41-16.45-28.72-50.41-28.72-50.41-1,.17-6.12-1.9-10.47,3C70.82,220.26,91.37,243.62,110.23,258.74Z" style="fill:#b08800"></path><path d="M192.9,23.26s-57.09,34.68-50.3,91.31c6,49.64,36.15,66.44,46.89,77.58,3.08,6.49-.7,19.08,9.17,26.63s32.14,13.23,61.56.51,56.06-29.82,67.6-54.47" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M202,52.3s-10.83-9.67-8.84-37.39a2.22,2.22,0,0,1,1.1-1.76c23.2-13.26,49-10.74,70.16,3.37" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M236.06,5.22C262.59-4,309.23,1.88,337.36,46.34c24.65,39,14.43,77.55,8.32,98.32" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M203.93,19.65s16.43,0,26.13,6.68c11.74,8.09,16.16,20.8,16.16,20.8" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M148.76,74.46s-26.39,9.14-32.15,27.43c7,11.53,21.41,22,27.49,22.16" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M142.48,113.44s3.61,19,22.59,17.05c28.31-7.16,29.24-57.72,68.06-56,37.09,1.62,42.8,51.75,47.11,65.77,3,9.78,16.49,8,22.51,11.73,10.11,6.35,10.11,29.3-8.74,49.35" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M332.09,156.9s15,82.09,14.35,93.44" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M370.63,245.84s-29.95-4.67-38.54,22.2,15.19,42.07,27.64,48.29c6.55,3.28,25.37,10.51,28.26,7.79,5.43-7.16-3.68-24.71-.59-42.84.78-4.54,6-13.45,6-17-13.88-42.95-40.28-125.12-59.87-129.63-7.52-1.73-5.66,16.81-5.66,16.81" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M317,181.44s3.88,25.34,13.06,42.32,16.43,26.58,16.43,26.58" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M321.17,176.08s7.46,25.2,13.42,34.37a145.35,145.35,0,0,1,9.29,16.36" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M320.14,196.63s-1.83,42.27,2.64,49.62" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M329.55,246.25s-26.16,1.83-27.53,26.61S317,301.31,317,301.31s-2.57,12.39,4.33,13.31,5.8-16.72,6.54-20.77a8.56,8.56,0,0,1,3.88-5.43" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M371.09,199.22s29.15,15.41,56,23.24,28.14,23.45,28.78,31.15-4.43,27.15-44.56,50.17" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M327.61,308s4.5,17.47,8,22.9" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M359.73,316.33s5,21.14,9.64,27" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M346.8,329.59a41.34,41.34,0,0,0-14.71,2.83s-16.35,6.6-19.23,27.95" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M313.56,356.51s-13.67-2-14.45,3.86.47,8.93,22.17,10.1,28.29,0,28.29,0" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M403.67,341.35a57.23,57.23,0,0,0-19.94-.39c-34.16,5.05-34.16,27.56-34.16,27.56s-5.69,7.77-.77,12.43a159,159,0,0,0,61.33,3.88c33-4.66,38-9.45,37.65-13.85s-7.93-5.9-7.93-5.9-2.4-10.22-19.23-40.36-11.41-44.27-11.41-44.27" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M353.51,382.15s2.8-12.65,11-12.65,29.87,17.38,40.49,15.95" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M309.49,189.18s-30.69,37.39-47.69,50.94c-15.05,12-60.2,33.28-84.27,32" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M187.77,285.77s.78-8.41-10.24-13.69" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M191.91,315.31c7.18-4.25,15.13-11.53,13.18-18.83-3.16-11.8-23.24-13.83-30.65-10.71-9.22,3.89-10.83,10.72-28.8,7.81" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M127.16,280.45s-9.9,30.5,5.92,45.45c16.14,15.27,61.21,20.63,61.2-27.57" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M175.32,198.57c5.76-.65,15.5-.65,15.5-.65" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><line x1="180.45" y1="208.08" x2="190.82" y2="202.95" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></line><path d="M295.63,139.3c7.55-12.7,22.25-31.34,32-37.48" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M305.37,142.27c5.29-4.87,15.8-14.22,35.78-22.06" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M186.69,325.8c51.66-20.24,113.43-76.49,134.25-123.21" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><ellipse cx="237.8" cy="275.53" rx="27.12" ry="8.66" transform="translate(-117.06 194.69) rotate(-36.37)" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></ellipse><ellipse cx="287" cy="234.24" rx="22.62" ry="5.51" transform="translate(-76.62 305.08) rotate(-50.24)" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></ellipse><ellipse cx="211.18" cy="196.36" rx="6.49" ry="3.48" transform="translate(-26.64 33.29) rotate(-8.48)" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></ellipse><path d="M81.8,191.48S77.29,216.79,106.89,247c17.77,18.13,38.66,26.73,55.18,28.42,2.36-10.8,8.36-32.57-41.26-70C98.2,188.35,81.8,191.48,81.8,191.48Z" style="fill:#79b8ff"></path><path d="M113.34,233.44a126.89,126.89,0,0,1-17.09-39.58,50.66,50.66,0,0,0-5.58-1.08c1,25,18.7,45.33,32.52,66.28,2.2,1.39,4.4,2.63,6.61,3.8A243.42,243.42,0,0,0,113.34,233.44Z" style="fill:#c8e1ff"></path><path d="M87.23,191.32a24.34,24.34,0,0,0-5.43.16s-4.51,25.3,25.09,55.51c1.29,1.32,2.61,2.57,3.93,3.79C99.22,232.1,87.16,213.47,87.23,191.32Z" style="fill:#2188ff"></path><path d="M153.93,254.73c-5-8.36-5.32-18.19-10.2-26.44-7.84-13.25-22.34-20-29.67-33.46-1.32-.49-2.61-.93-3.83-1.28,6.64,16,24.93,23.35,31.59,39.39,3.86,9.29,5.26,19,10.11,28a119.75,119.75,0,0,0,7.1,11.4c.9.29,1.78.54,2.67.8A87.18,87.18,0,0,0,153.93,254.73Z" style="fill:#daedff"></path><path d="M68.32,203.62l2.8-13.2L96.3,170.55s36.38-3.91,65.6,30.76c25.47,30.22,24.58,44.25,25.64,58,0,0-18.72,24.65-29.89,28.26,7.4-22,10.3-34.8-22.44-66.09S77.83,185.18,68.32,203.62Z" style="fill:#ffea7f"></path><path d="M178.75,225.08c.47,10.69,2.66,21.7-2.37,31.37-3.59,6.91-9.84,11.23-12.22,19-1.08,3.53-1.47,7.08-2.82,10.32,11.17-6.71,26.2-26.5,26.2-26.5C186.81,249.78,187,240.13,178.75,225.08Z" style="fill:#ffdf5d"></path><path d="M389.9,253.67s4.18-5.22,9.62-7.42" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:3px"></path><path d="M159.4,221.29c-7.51-13-18.33-25.17-31.76-32.3s-29.35-9.27-44.5-8.05l-5.23,4.13a51.11,51.11,0,0,1,17.74-.36c9.76,1.31,20.25,4.38,28.34,10.19,11.72,8.42,20.29,20.47,29.33,31.5,8.06,9.83,14.91,21,16.74,33.83a74.77,74.77,0,0,1,0,18.67c2-1.84,3.91-3.81,5.74-5.78C173.39,255,168.53,237.16,159.4,221.29Z" style="fill:#fff5b1"></path><path d="M320.08,108a48.4,48.4,0,0,1,7.53-6.17" style="fill:none;stroke:#0366d6;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px"></path><path d="M330.79,124.79c3.38-1.68,6.85-3.2,10.36-4.58" style="fill:none;stroke:#0366d6;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px"></path><path d="M175.32,198.57c1.86-.2,3.72-.32,5.59-.41" style="fill:none;stroke:#0366d6;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px"></path><path d="M180.45,208.08l3.65-1.8" style="fill:none;stroke:#0366d6;stroke-linecap:round;stroke-miterlimit:10;stroke-width:3px"></path><ellipse cx="18.39" cy="393.7" rx="11.22" ry="6.17" style="fill:#0366d6"></ellipse><path d="M1,401.38c.45-3.84,5.43-5.54,9-5.53" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path><path d="M21.25,398.3s4.54.9,4.2,7" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path><path d="M26.67,395.36a10.33,10.33,0,0,1,5.14,1.7,7.12,7.12,0,0,1,3,4.74" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path><path d="M28.26,392.65s1.13-1.69,5.47-1.41a7.41,7.41,0,0,1,6.05,4.12" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path><path d="M2.93,393.7a9.52,9.52,0,0,1,4.24-3,13.51,13.51,0,0,1,5.8.2" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path><path d="M18.27,388.53s-1.53-2.08-3.58-1.7c-1.5.28-1.72,4-1.72,4" style="fill:none;stroke:#0366d6;stroke-miterlimit:10;stroke-width:2px"></path></g></g></svg>-->


        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" width="17vw" viewBox="0 0 600.000000 550.000000" preserveAspectRatio="xMidYMid meet">
            <g transform="translate(0.000000,600.000000) scale(0.100000,-0.100000)" fill="#55aea1" stroke="none">
                <path d="M2885 5992 c-86 -70 -84 -69 -94 -53 -5 8 -16 11 -24 8 -19 -7 -75 -119 -83 -166 -3 -20 -10 -53 -15 -74 -9 -32 -12 -36 -29 -27 -10 5 -22 10 -25 10 -3 0 -20 -30 -37 -67 -25 -55 -31 -85 -35 -163 -7 -120 5 -178 63 -299 l45 -95 -38 -56 -39 -55 -57 4 c-66 4 -86 -8 -118 -71 -16 -31 -25 -37 -56 -40 -32 -3 -44 -12 -86 -63 -46 -57 -132 -175 -229 -315 -182 -264 -333 -585 -399 -851 -51 -205 -76 -503 -44 -529 11 -9 15 -33 15 -91 0 -90 25 -160 79 -221 17 -20 31 -39 31 -42 0 -4 -96 -5 -212 -4 l-213 3 -13 105 c-30 247 -58 585 -49 597 5 7 26 17 47 23 46 12 95 65 109 117 15 52 15 1514 1 1565 -6 21 -22 51 -37 68 -45 55 -67 60 -236 60 l-154 0 -42 -31 c-75 -54 -71 -8 -71 -879 0 -645 2 -786 14 -814 18 -44 70 -82 125 -93 24 -4 47 -15 52 -23 4 -8 15 -143 24 -300 8 -157 20 -332 26 -390 5 -58 13 -167 18 -243 8 -133 9 -139 37 -169 40 -42 80 -60 144 -67 l55 -6 5 -51 c8 -77 38 -104 125 -114 l50 -5 3 -107 3 -107 27 -3 27 -3 0 -495 0 -495 -237 -3 -238 -2 0 -100 0 -100 586 0 c530 0 586 2 580 16 -3 9 -6 54 -6 100 l0 84 -80 0 c-71 0 -80 2 -91 22 -18 34 -13 183 10 281 12 48 21 101 21 117 0 19 7 33 21 40 25 14 37 5 80 -61 46 -72 66 -73 142 -7 83 73 230 195 354 296 94 76 103 85 116 134 16 57 74 266 162 578 30 107 59 212 65 232 10 37 26 55 37 44 5 -4 -22 -118 -48 -201 -31 -102 -175 -724 -206 -895 -2 -14 -14 -71 -25 -128 -11 -57 -17 -110 -14 -118 3 -8 20 -20 37 -26 l31 -11 -7 -61 c-6 -47 -13 -66 -31 -81 -39 -32 -65 -143 -57 -248 5 -77 8 -86 30 -96 16 -7 169 -11 473 -11 l450 0 0 58 c0 73 -11 84 -105 101 -38 8 -131 28 -205 46 -74 18 -154 36 -177 40 -24 4 -43 11 -43 16 0 6 -11 20 -25 33 -24 22 -24 23 -9 87 25 114 23 112 107 105 40 -3 88 -2 107 2 35 8 35 8 43 77 11 95 56 417 68 485 27 152 107 537 149 720 72 311 72 307 30 395 -78 164 -297 267 -775 365 -92 19 -349 59 -448 69 -106 12 -156 31 -198 78 -70 76 -99 188 -99 382 0 181 31 487 61 606 6 22 14 58 19 80 12 53 53 173 73 211 18 35 83 96 124 117 49 25 140 47 195 47 111 0 194 -47 231 -128 18 -43 19 -60 14 -242 -3 -107 -10 -229 -17 -270 -6 -41 -18 -115 -25 -164 -14 -87 -13 -115 4 -87 9 13 60 224 86 346 24 119 45 305 45 402 0 85 3 98 30 147 17 30 37 57 45 60 8 3 47 -6 87 -20 40 -13 98 -27 128 -30 47 -5 59 -3 83 16 31 24 107 176 107 213 0 19 8 26 48 38 l47 15 3 132 3 132 43 68 c54 84 84 161 92 234 l7 56 -42 -5 c-37 -5 -41 -4 -41 17 0 14 -24 46 -65 88 -36 36 -65 73 -65 83 0 33 -26 21 -100 -48 -89 -82 -193 -231 -179 -256 6 -11 6 -24 0 -35 -8 -15 -4 -26 19 -54 40 -49 50 -79 50 -151 0 -153 -104 -250 -249 -233 -211 25 -324 249 -200 399 38 46 80 69 139 76 34 5 47 11 55 29 5 12 17 25 26 27 9 3 26 29 38 58 12 28 42 84 66 123 51 81 53 98 24 155 l-20 41 -27 -18 c-15 -9 -36 -25 -48 -35 -29 -27 -38 -24 -81 25 l-39 45 -59 -47z m-235 -3459 c91 -36 171 -71 178 -76 28 -22 12 -53 -65 -123 -187 -168 -372 -311 -605 -466 -82 -55 -152 -106 -155 -114 -3 -9 0 -34 7 -57 12 -39 11 -42 -15 -64 -17 -15 -39 -23 -64 -23 -21 0 -60 -9 -86 -21 -29 -13 -51 -17 -56 -12 -5 5 -8 72 -7 149 l3 139 27 3 27 3 3 107 3 107 57 5 c78 7 110 38 118 112 l5 53 161 5 c153 5 162 6 201 32 63 41 83 93 83 211 0 53 3 97 8 97 4 0 81 -30 172 -67z m-826 -1606 c7 -57 7 -59 -16 -55 -22 3 -23 8 -26 82 -4 98 6 127 23 71 7 -22 15 -66 19 -98z"> </path>
                <path d="M2963 5465 c-93 -40 -95 -168 -3 -215 72 -36 133 -22 165 40 33 63 3 149 -61 176 -41 17 -60 17 -101 -1z"></path>
                <path d="M2545 4721 c-52 -13 -119 -47 -154 -77 -86 -72 -145 -322 -178 -749 -27 -357 1 -484 122 -549 38 -20 53 -21 280 -20 240 0 377 11 905 68 l204 22 11 45 c9 36 15 45 35 47 34 4 82 19 172 53 100 38 133 37 186 -2 47 -34 47 -44 -1 -44 -31 0 -32 -1 -35 -50 -2 -27 -9 -53 -15 -58 -7 -4 -50 -6 -97 -5 l-85 2 0 -99 0 -100 645 -5 645 -5 3 -1107 c2 -1047 1 -1108 -15 -1116 -10 -5 -52 -13 -93 -16 -41 -4 -118 -14 -171 -22 -53 -8 -134 -18 -180 -23 -124 -14 -414 -50 -460 -57 l-39 -7 0 -88 0 -89 915 0 916 0 -3 91 -3 92 -130 57 -130 57 0 1114 0 1114 220 5 220 5 0 98 0 98 -481 -1 c-265 0 -488 2 -497 6 -23 8 -21 32 7 79 12 22 75 130 138 240 280 486 370 641 379 650 5 5 9 12 9 16 0 10 -78 59 -93 59 -8 0 -63 -84 -122 -187 -59 -104 -115 -199 -124 -213 -9 -14 -29 -50 -45 -80 -16 -30 -37 -67 -48 -82 -10 -14 -18 -29 -18 -31 0 -3 -24 -45 -54 -94 -29 -48 -72 -123 -95 -166 -28 -51 -50 -79 -64 -82 -12 -3 -168 -4 -347 -3 l-325 3 3 25 c2 20 -17 44 -90 116 l-93 91 -95 24 c-142 35 -215 32 -320 -15 -121 -54 -125 -54 -136 -15 -8 29 -15 35 -54 43 -25 5 -142 10 -260 10 -192 0 -233 -3 -385 -28 -93 -16 -185 -29 -204 -28 -64 1 -64 1 -36 275 17 164 25 307 25 425 0 169 -1 181 -23 212 -12 19 -37 43 -55 53 -36 21 -138 31 -187 18z m1771 -1186 c19 -14 19 -14 -2 -15 -12 0 -24 7 -28 15 -7 19 5 19 30 0z"></path>
                <path d="M2990 4428 c0 -58 -81 -402 -127 -536 -24 -71 -32 -107 -25 -114 7 -7 56 -2 154 16 324 59 528 71 673 41 38 -8 81 -15 95 -15 28 0 249 98 290 128 23 18 24 21 14 71 -12 58 -9 62 52 75 31 7 32 6 44 -43 12 -53 40 -87 64 -78 8 3 17 27 21 57 7 48 9 51 33 48 24 -3 29 -10 43 -68 19 -73 53 -110 98 -110 37 0 40 4 29 53 -5 23 -11 61 -15 85 -5 37 -3 42 15 42 13 0 31 -17 51 -49 44 -68 63 -83 102 -79 55 5 56 22 10 149 -45 122 -62 147 -128 186 -117 69 -261 68 -419 -2 -48 -21 -62 -24 -80 -15 -18 10 -31 6 -85 -23 -35 -19 -149 -78 -254 -132 -104 -53 -241 -124 -303 -157 -139 -74 -145 -72 -184 53 -15 46 -54 163 -87 259 -57 165 -81 212 -81 158z"></path>
            </g>
        </svg>

        <br>
        <p>Sorry! The APIs are currently unavailable...Martin is upgrading.</p>
    </div>
    <div class="col-md-6 col-sm-12 contact">
        <div class="form">
            <h5>Get notified when they'll be back.</h5>
            <form>
                <div class="row">
                    <div class="col-12">
                        <p class="info_out"></p>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input id="name" class="form-control" type="text" name="name" placeholder="Your Name" required/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input id="email" class="form-control" type="email" name="email"
                                   placeholder="Your Email" required/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input id="phone" class="form-control" type="tel" name="phone"
                                   placeholder="Your Phone"/>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input id="subject" class="form-control" type="text" name="subject"
                                   placeholder="Which API?"/>
                        </div>
                    </div>
                </div>
                <div class="message">
                    <div class="form-group">
                            <textarea id="message" class="form-control" placeholder="Tell me more here ..."
                                      required></textarea>
                    </div>
                    <p>
                                    <span class="send-btn">
                                        <input id="send" class="btn" value="Get Notified"/><i
                                                class="fas fa-long-arrow-alt-right"></i>
                                    </span>
                        <button id="clear" name="clear" class="btn btn-danger fa-pull-right"
                                style="border-radius: unset">CLEAR
                        </button>

                        <span id="status"></span>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
<hr>
<div class="row text-center">
    <div class="col-md-12 ">
        <h4>Meanwhile you could go to one of these...</h4>
    </div>
    <div class="col-md-12">

        <div class="">
            <a href="/tools" class="btn suggestion-link"><i class="fa fa-cogs"></i> Dev Tools</a>
            <a href="/" class="btn suggestion-link"><i class="fa fa-home"></i> Home Page</a>
            <a href="/quotation" class="btn suggestion-link"><i class="fa fa-briefcase"></i> Quotation</a>
        </div>
    </div>
</div>
<footer>
    <p>© Copyright
        <script>document.write((new Date()).getFullYear().toString());</script>
        | mcornel.com &#9786;
    </p>
</footer>

<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/contact.js"></script>
</body>
</html>
