@extends('layouts.app')
@section('content')
    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <i class="feather icon-home bg-c-blue"></i>
                        <div class="d-inline">
                            <h5>Dashboard</h5>
                            <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="page-header-breadcrumb">
                        <ul class=" breadcrumb breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html"><i class="feather icon-home"></i></a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">

                        <div class="row">

                            <div class="col-md-12 col-xl-8">
                                <div class="card sale-card">
                                    <div class="card-header">
                                        <h5>Deals Analytics</h5>
                                    </div>
                                    <div class="card-block">
                                        <div id="sales-analytics" class="chart-shadow" style="height: 380px; overflow: hidden; text-align: left;"><div class="amcharts-main-div" style="position: relative;"><div class="amcharts-chart-div" style="overflow: hidden; position: relative; text-align: left; width: 637px; height: 380px; padding: 0px; cursor: default; touch-action: auto;"><svg version="1.1" style="position: absolute; width: 637px; height: 380px; top: -0.03125px; left: 0px;"><desc>JavaScript chart by amCharts 3.21.5</desc><g><path cs="100,100" d="M0.5,0.5 L636.5,0.5 L636.5,379.5 L0.5,379.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0"></path><path cs="100,100" d="M0.5,0.5 L581.5,0.5 L581.5,279.5 L0.5,279.5 L0.5,0.5 Z" fill="#FFFFFF" stroke="#000000" fill-opacity="0" stroke-width="1" stroke-opacity="0" transform="translate(40,60)"></path></g><g><g transform="translate(40,0)" visibility="hidden"></g><g transform="translate(40,60)"><g><path cs="100,100" d="M0.5,0.5 L0.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,279)"></path><path cs="100,100" d="M0.5,279.5 L0.5,279.5 L0.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M20.5,279.5 L20.5,279.5 L20.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M40.5,279.5 L40.5,279.5 L40.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M60.5,279.5 L60.5,279.5 L60.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M80.5,279.5 L80.5,279.5 L80.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M100.5,0.5 L100.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,279)"></path><path cs="100,100" d="M100.5,279.5 L100.5,279.5 L100.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M120.5,279.5 L120.5,279.5 L120.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M140.5,279.5 L140.5,279.5 L140.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M160.5,279.5 L160.5,279.5 L160.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M180.5,279.5 L180.5,279.5 L180.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M200.5,0.5 L200.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,279)"></path><path cs="100,100" d="M200.5,279.5 L200.5,279.5 L200.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M220.5,279.5 L220.5,279.5 L220.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M240.5,279.5 L240.5,279.5 L240.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M260.5,279.5 L260.5,279.5 L260.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M280.5,279.5 L280.5,279.5 L280.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M301.5,0.5 L301.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,279)"></path><path cs="100,100" d="M301.5,279.5 L301.5,279.5 L301.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M321.5,279.5 L321.5,279.5 L321.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M341.5,279.5 L341.5,279.5 L341.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M361.5,279.5 L361.5,279.5 L361.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M381.5,279.5 L381.5,279.5 L381.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M401.5,0.5 L401.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,279)"></path><path cs="100,100" d="M401.5,279.5 L401.5,279.5 L401.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M421.5,279.5 L421.5,279.5 L421.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M441.5,279.5 L441.5,279.5 L441.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M461.5,279.5 L461.5,279.5 L461.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M481.5,279.5 L481.5,279.5 L481.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M501.5,0.5 L501.5,5.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(0,279)"></path><path cs="100,100" d="M501.5,279.5 L501.5,279.5 L501.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M521.5,279.5 L521.5,279.5 L521.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M541.5,279.5 L541.5,279.5 L541.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M561.5,279.5 L561.5,279.5 L561.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g><g><path cs="100,100" d="M581.5,279.5 L581.5,279.5 L581.5,0.5" fill="none" stroke-width="1" stroke-dasharray="1" stroke-opacity="0.07" stroke="#000000"></path></g></g><g transform="translate(40,60)" visibility="visible"><g><path cs="100,100" d="M0.5,279.5 L0.5,279.5 L581.5,279.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,244.5 L0.5,244.5 L581.5,244.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,209.5 L0.5,209.5 L581.5,209.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,174.5 L0.5,174.5 L581.5,174.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,140.5 L0.5,140.5 L581.5,140.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,105.5 L0.5,105.5 L581.5,105.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,70.5 L0.5,70.5 L581.5,70.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,35.5 L0.5,35.5 L581.5,35.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L581.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.1" stroke="#000000"></path></g></g></g><g transform="translate(40,60)" clip-path="url(#AmChartsEl-3)"><g visibility="hidden"></g></g><g></g><g></g><g></g><g><g transform="translate(40,60)"><g></g><g clip-path="url(#AmChartsEl-7)"><path cs="100,100" d="M-10,258 C-5,257,0,233,10,230 C20,228,20,211,30,209 C40,208,40,205,50,202 C60,199,60,149,70,146 C80,144,80,161,90,160 C100,159,100,129,110,126 C120,122,120,92,130,91 C140,90,140,102,150,105 C160,107,160,138,170,140 C180,141,180,126,190,126 C200,126,200,140,210,140 C220,140,220,127,230,126 C240,125,240,117,250,119 C260,120,260,159,270,160 C280,162,281,153,291,153 C301,154,301,175,311,174 C321,173,321,136,331,133 C341,129,341,106,351,105 C361,104,361,110,371,112 C381,113,381,133,391,133 C401,132,401,100,411,98 C421,96,421,92,431,91 C441,89,441,65,451,63 C461,61,461,48,471,49 C481,49,481,69,491,70 C501,70,501,65,511,63 C521,60,521,21,531,21 C541,21,541,55,551,56 C561,56,561,27,571,28 C581,29,581,70,591,70 C601,69,601,22,611,21 C621,20,626,47,631,49 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="3" stroke-opacity="0.9" stroke="#4099ff"></path><path cs="100,100" d="M-10,258 C-5,257,0,233,10,230 C20,228,20,211,30,209 C40,208,40,205,50,202 C60,199,60,149,70,146 C80,144,80,161,90,160 C100,159,100,129,110,126 C120,122,120,92,130,91 C140,90,140,102,150,105 C160,107,160,138,170,140 C180,141,180,126,190,126 C200,126,200,140,210,140 C220,140,220,127,230,126 C240,125,240,117,250,119 C260,120,260,159,270,160 C280,162,281,153,291,153 C301,154,301,175,311,174 C321,173,321,136,331,133 C341,129,341,106,351,105 C361,104,361,110,371,112 C381,113,381,133,391,133 C401,132,401,100,411,98 C421,96,421,92,431,91 C441,89,441,65,451,63 C461,61,461,48,471,49 C481,49,481,69,491,70 C501,70,501,65,511,63 C521,60,521,21,531,21 C541,21,541,55,551,56 C561,56,561,27,571,28 C581,29,581,70,591,70 C601,69,601,22,611,21 C621,20,626,47,631,49  L631,279 L-10,279 L-10,258.075" fill="#4099ff" fill-opacity="0.3" stroke-width="0" stroke-opacity="0"></path></g><clipPath id="AmChartsEl-7"><rect x="0" y="0" width="581" height="279" rx="0" ry="0" stroke-width="0"></rect></clipPath><g></g></g></g><g></g><g><path cs="100,100" d="M0.5,40.5 L582.5,40.5 L582.5,40.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(40,0)"></path><g><path cs="100,100" d="M0.5,0.5 L581.5,0.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(0,40)"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,40.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(40,0)" visibility="hidden"></path></g><g><path cs="100,100" d="M0.5,0.5 L581.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.3" stroke="#000000" transform="translate(40,339)"></path></g><g><path cs="100,100" d="M0.5,0.5 L0.5,279.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" transform="translate(40,60)" visibility="visible"></path></g></g><g><g transform="translate(40,60)" clip-path="url(#AmChartsEl-4)" style="pointer-events: none;"><path cs="100,100" d="M0.5,0.5 L0.5,0.5 L0.5,279.5" fill="none" stroke-width="1" stroke-opacity="0" stroke="#000000" visibility="hidden"></path><path cs="100,100" d="M0.5,0.5 L581.5,0.5 L581.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.5" stroke="#000000" visibility="hidden"></path></g><clipPath id="AmChartsEl-4"><rect x="0" y="0" width="581" height="279" rx="0" ry="0" stroke-width="0"></rect></clipPath></g><g><g visibility="visible" transform="translate(40,20)" style="touch-action: none;"><rect x="0.5" y="0.5" width="582" height="40" rx="0" ry="0" stroke-width="1" fill="#000000" stroke="#000000" fill-opacity="0.12" stroke-opacity="0.12"></rect><rect x="0.5" y="0.5" width="89" height="41" rx="0" ry="0" stroke-width="0" fill="#FFFFFF" stroke="#FFFFFF" fill-opacity="0.4" stroke-opacity="0.4" transform="translate(263,0)"></rect><g transform="translate(0,0)"><g></g><g><path cs="100,100" d="M2,35 C3,35,4,36,5,36 C7,36,7,34,8,34 C10,34,10,34,11,34 C13,34,13,33,14,33 C16,33,16,35,17,35 C19,35,19,31,20,31 C22,31,22,31,23,31 C25,31,25,32,26,32 C28,32,28,33,29,33 C31,33,30,34,32,34 C34,34,34,33,36,33 C38,33,38,32,39,32 C41,31,41,30,42,30 C44,30,44,30,45,30 C47,30,47,29,48,28 C50,28,50,27,51,27 C53,27,53,33,54,33 C56,33,56,30,57,30 C59,30,59,31,60,31 C62,31,62,33,63,33 C65,33,64,32,66,32 C68,32,68,34,70,34 C72,34,72,34,73,34 C75,34,75,35,76,35 C78,35,78,37,79,37 C81,37,81,36,82,36 C84,36,84,37,85,37 C87,37,87,37,88,37 C90,37,90,38,91,38 C93,38,93,36,94,36 C96,35,96,35,97,35 C99,35,98,33,100,33 C102,33,102,32,104,32 C106,32,106,29,107,28 C109,28,109,27,110,27 C112,27,112,23,113,23 C115,23,115,26,116,26 C118,26,118,28,119,28 C121,27,121,22,122,21 C124,21,124,19,125,19 C127,19,127,21,128,22 C130,22,130,24,131,24 C133,24,132,23,134,23 C136,23,136,24,138,24 C140,24,140,24,141,24 C143,25,143,26,144,26 C146,27,146,28,147,28 C149,28,149,27,150,26 C152,26,152,25,153,25 C155,25,155,23,156,23 C158,23,158,20,159,20 C161,20,161,22,162,22 C164,22,164,21,165,21 C167,21,166,18,168,18 C170,18,170,16,172,16 C174,16,174,17,175,17 C177,17,177,17,178,17 C180,17,180,16,181,16 C183,16,183,17,184,16 C186,16,186,13,187,13 C189,13,189,14,190,14 C192,14,192,16,193,16 C195,16,195,14,196,14 C198,13,198,12,199,12 C201,12,200,12,202,12 C204,12,204,13,206,13 C208,13,208,14,209,15 C211,15,211,21,212,22 C214,22,214,27,215,27 C217,28,217,31,218,32 C220,32,220,33,221,33 C223,33,223,32,224,32 C226,31,226,29,227,29 C229,29,229,29,230,29 C232,29,232,26,233,26 C235,25,234,27,236,27 C238,27,238,28,240,28 C242,28,242,28,243,28 C245,28,245,27,246,26 C248,26,248,25,249,25 C251,25,251,25,252,25 C254,25,254,23,255,22 C257,22,257,21,258,20 C260,20,260,19,261,19 C263,19,263,17,264,17 C266,17,266,16,267,16 C269,16,268,16,270,16 C272,15,272,13,274,12 C276,12,276,13,277,13 C279,13,279,11,280,11 C282,11,282,9,283,9 C285,9,285,10,286,10 C288,10,288,12,289,12 C291,12,291,11,292,11 C294,11,294,12,295,12 C297,12,297,11,298,11 C300,11,300,11,301,11 C303,11,303,13,304,13 C306,13,305,13,307,13 C309,13,309,14,311,14 C313,14,313,12,314,12 C316,11,316,10,317,10 C319,10,319,10,320,10 C322,10,322,12,323,12 C325,12,325,10,326,10 C328,9,328,9,329,9 C331,9,331,8,332,8 C334,7,334,7,335,7 C337,7,337,8,338,8 C340,8,339,8,341,8 C343,7,343,5,345,5 C347,5,347,7,348,7 C350,7,350,6,351,6 C353,6,353,8,354,8 C356,8,356,5,357,5 C359,5,359,7,360,7 C362,7,362,6,363,6 C365,6,365,6,366,6 C368,6,368,7,369,7 C371,7,371,11,372,11 C374,11,373,12,375,12 C377,12,377,10,379,10 C381,10,381,8,382,8 C384,8,384,12,385,12 C387,12,387,11,388,11 C390,11,390,15,391,16 C393,16,393,15,394,15 C396,15,396,14,397,14 C399,14,399,14,400,14 C402,14,402,11,403,11 C405,11,405,8,406,8 C408,8,407,9,409,9 C411,9,411,9,413,9 C415,9,415,9,416,9 C418,9,418,10,419,10 C421,11,421,11,422,11 C424,11,424,10,425,10 C427,10,427,12,428,12 C430,12,430,9,431,9 C433,9,433,13,434,13 C436,14,436,15,437,15 C439,15,439,14,440,14 C442,14,441,15,443,16 C445,16,445,16,447,16 C449,17,449,19,450,19 C452,19,452,18,453,18 C455,18,455,18,456,18 C458,17,458,16,459,16 C461,16,461,17,462,17 C464,17,464,18,465,18 C467,18,467,19,468,19 C470,19,470,18,471,18 C473,18,473,20,474,20 C476,20,475,20,477,20 C479,20,479,20,481,20 C483,20,483,19,484,19 C486,19,486,17,487,17 C489,17,489,16,490,16 C492,16,492,13,493,13 C495,13,495,14,496,14 C498,14,498,14,499,14 C501,14,501,16,502,16 C504,16,504,15,505,15 C507,15,507,16,508,16 C510,16,509,16,511,16 C513,16,513,14,515,14 C517,14,517,10,518,10 C520,10,520,9,521,9 C523,9,523,9,524,9 C526,9,526,12,527,12 C529,12,529,12,530,12 C532,12,532,11,533,11 C535,11,535,12,536,12 C538,12,538,11,539,10 C541,10,541,9,542,9 C544,9,543,6,545,6 C547,6,547,7,549,7 C551,7,551,7,552,7 C554,7,554,5,555,5 C557,5,557,6,558,6 C560,6,560,6,561,6 C563,6,563,8,564,8 C566,8,566,5,567,5 C569,5,569,6,570,6 C572,6,572,7,573,7 C575,7,575,6,576,6 C578,6,578,8,579,8 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="1" stroke-opacity="0" stroke="#BBBBBB"></path><path cs="100,100" d="M2,35 C3,35,4,36,5,36 C7,36,7,34,8,34 C10,34,10,34,11,34 C13,34,13,33,14,33 C16,33,16,35,17,35 C19,35,19,31,20,31 C22,31,22,31,23,31 C25,31,25,32,26,32 C28,32,28,33,29,33 C31,33,30,34,32,34 C34,34,34,33,36,33 C38,33,38,32,39,32 C41,31,41,30,42,30 C44,30,44,30,45,30 C47,30,47,29,48,28 C50,28,50,27,51,27 C53,27,53,33,54,33 C56,33,56,30,57,30 C59,30,59,31,60,31 C62,31,62,33,63,33 C65,33,64,32,66,32 C68,32,68,34,70,34 C72,34,72,34,73,34 C75,34,75,35,76,35 C78,35,78,37,79,37 C81,37,81,36,82,36 C84,36,84,37,85,37 C87,37,87,37,88,37 C90,37,90,38,91,38 C93,38,93,36,94,36 C96,35,96,35,97,35 C99,35,98,33,100,33 C102,33,102,32,104,32 C106,32,106,29,107,28 C109,28,109,27,110,27 C112,27,112,23,113,23 C115,23,115,26,116,26 C118,26,118,28,119,28 C121,27,121,22,122,21 C124,21,124,19,125,19 C127,19,127,21,128,22 C130,22,130,24,131,24 C133,24,132,23,134,23 C136,23,136,24,138,24 C140,24,140,24,141,24 C143,25,143,26,144,26 C146,27,146,28,147,28 C149,28,149,27,150,26 C152,26,152,25,153,25 C155,25,155,23,156,23 C158,23,158,20,159,20 C161,20,161,22,162,22 C164,22,164,21,165,21 C167,21,166,18,168,18 C170,18,170,16,172,16 C174,16,174,17,175,17 C177,17,177,17,178,17 C180,17,180,16,181,16 C183,16,183,17,184,16 C186,16,186,13,187,13 C189,13,189,14,190,14 C192,14,192,16,193,16 C195,16,195,14,196,14 C198,13,198,12,199,12 C201,12,200,12,202,12 C204,12,204,13,206,13 C208,13,208,14,209,15 C211,15,211,21,212,22 C214,22,214,27,215,27 C217,28,217,31,218,32 C220,32,220,33,221,33 C223,33,223,32,224,32 C226,31,226,29,227,29 C229,29,229,29,230,29 C232,29,232,26,233,26 C235,25,234,27,236,27 C238,27,238,28,240,28 C242,28,242,28,243,28 C245,28,245,27,246,26 C248,26,248,25,249,25 C251,25,251,25,252,25 C254,25,254,23,255,22 C257,22,257,21,258,20 C260,20,260,19,261,19 C263,19,263,17,264,17 C266,17,266,16,267,16 C269,16,268,16,270,16 C272,15,272,13,274,12 C276,12,276,13,277,13 C279,13,279,11,280,11 C282,11,282,9,283,9 C285,9,285,10,286,10 C288,10,288,12,289,12 C291,12,291,11,292,11 C294,11,294,12,295,12 C297,12,297,11,298,11 C300,11,300,11,301,11 C303,11,303,13,304,13 C306,13,305,13,307,13 C309,13,309,14,311,14 C313,14,313,12,314,12 C316,11,316,10,317,10 C319,10,319,10,320,10 C322,10,322,12,323,12 C325,12,325,10,326,10 C328,9,328,9,329,9 C331,9,331,8,332,8 C334,7,334,7,335,7 C337,7,337,8,338,8 C340,8,339,8,341,8 C343,7,343,5,345,5 C347,5,347,7,348,7 C350,7,350,6,351,6 C353,6,353,8,354,8 C356,8,356,5,357,5 C359,5,359,7,360,7 C362,7,362,6,363,6 C365,6,365,6,366,6 C368,6,368,7,369,7 C371,7,371,11,372,11 C374,11,373,12,375,12 C377,12,377,10,379,10 C381,10,381,8,382,8 C384,8,384,12,385,12 C387,12,387,11,388,11 C390,11,390,15,391,16 C393,16,393,15,394,15 C396,15,396,14,397,14 C399,14,399,14,400,14 C402,14,402,11,403,11 C405,11,405,8,406,8 C408,8,407,9,409,9 C411,9,411,9,413,9 C415,9,415,9,416,9 C418,9,418,10,419,10 C421,11,421,11,422,11 C424,11,424,10,425,10 C427,10,427,12,428,12 C430,12,430,9,431,9 C433,9,433,13,434,13 C436,14,436,15,437,15 C439,15,439,14,440,14 C442,14,441,15,443,16 C445,16,445,16,447,16 C449,17,449,19,450,19 C452,19,452,18,453,18 C455,18,455,18,456,18 C458,17,458,16,459,16 C461,16,461,17,462,17 C464,17,464,18,465,18 C467,18,467,19,468,19 C470,19,470,18,471,18 C473,18,473,20,474,20 C476,20,475,20,477,20 C479,20,479,20,481,20 C483,20,483,19,484,19 C486,19,486,17,487,17 C489,17,489,16,490,16 C492,16,492,13,493,13 C495,13,495,14,496,14 C498,14,498,14,499,14 C501,14,501,16,502,16 C504,16,504,15,505,15 C507,15,507,16,508,16 C510,16,509,16,511,16 C513,16,513,14,515,14 C517,14,517,10,518,10 C520,10,520,9,521,9 C523,9,523,9,524,9 C526,9,526,12,527,12 C529,12,529,12,530,12 C532,12,532,11,533,11 C535,11,535,12,536,12 C538,12,538,11,539,10 C541,10,541,9,542,9 C544,9,543,6,545,6 C547,6,547,7,549,7 C551,7,551,7,552,7 C554,7,554,5,555,5 C557,5,557,6,558,6 C560,6,560,6,561,6 C563,6,563,8,564,8 C566,8,566,5,567,5 C569,5,569,6,570,6 C572,6,572,7,573,7 C575,7,575,6,576,6 C578,6,578,8,579,8  L579,40 L2,40 L2,34.8" fill="#BBBBBB" fill-opacity="0.5" stroke-width="0" stroke-opacity="0"></path></g><g></g></g><g transform="translate(0,0)" clip-path="url(#AmChartsEl-8)"><g></g><g><path cs="100,100" d="M2,35 C3,35,4,36,5,36 C7,36,7,34,8,34 C10,34,10,34,11,34 C13,34,13,33,14,33 C16,33,16,35,17,35 C19,35,19,31,20,31 C22,31,22,31,23,31 C25,31,25,32,26,32 C28,32,28,33,29,33 C31,33,30,34,32,34 C34,34,34,33,36,33 C38,33,38,32,39,32 C41,31,41,30,42,30 C44,30,44,30,45,30 C47,30,47,29,48,28 C50,28,50,27,51,27 C53,27,53,33,54,33 C56,33,56,30,57,30 C59,30,59,31,60,31 C62,31,62,33,63,33 C65,33,64,32,66,32 C68,32,68,34,70,34 C72,34,72,34,73,34 C75,34,75,35,76,35 C78,35,78,37,79,37 C81,37,81,36,82,36 C84,36,84,37,85,37 C87,37,87,37,88,37 C90,37,90,38,91,38 C93,38,93,36,94,36 C96,35,96,35,97,35 C99,35,98,33,100,33 C102,33,102,32,104,32 C106,32,106,29,107,28 C109,28,109,27,110,27 C112,27,112,23,113,23 C115,23,115,26,116,26 C118,26,118,28,119,28 C121,27,121,22,122,21 C124,21,124,19,125,19 C127,19,127,21,128,22 C130,22,130,24,131,24 C133,24,132,23,134,23 C136,23,136,24,138,24 C140,24,140,24,141,24 C143,25,143,26,144,26 C146,27,146,28,147,28 C149,28,149,27,150,26 C152,26,152,25,153,25 C155,25,155,23,156,23 C158,23,158,20,159,20 C161,20,161,22,162,22 C164,22,164,21,165,21 C167,21,166,18,168,18 C170,18,170,16,172,16 C174,16,174,17,175,17 C177,17,177,17,178,17 C180,17,180,16,181,16 C183,16,183,17,184,16 C186,16,186,13,187,13 C189,13,189,14,190,14 C192,14,192,16,193,16 C195,16,195,14,196,14 C198,13,198,12,199,12 C201,12,200,12,202,12 C204,12,204,13,206,13 C208,13,208,14,209,15 C211,15,211,21,212,22 C214,22,214,27,215,27 C217,28,217,31,218,32 C220,32,220,33,221,33 C223,33,223,32,224,32 C226,31,226,29,227,29 C229,29,229,29,230,29 C232,29,232,26,233,26 C235,25,234,27,236,27 C238,27,238,28,240,28 C242,28,242,28,243,28 C245,28,245,27,246,26 C248,26,248,25,249,25 C251,25,251,25,252,25 C254,25,254,23,255,22 C257,22,257,21,258,20 C260,20,260,19,261,19 C263,19,263,17,264,17 C266,17,266,16,267,16 C269,16,268,16,270,16 C272,15,272,13,274,12 C276,12,276,13,277,13 C279,13,279,11,280,11 C282,11,282,9,283,9 C285,9,285,10,286,10 C288,10,288,12,289,12 C291,12,291,11,292,11 C294,11,294,12,295,12 C297,12,297,11,298,11 C300,11,300,11,301,11 C303,11,303,13,304,13 C306,13,305,13,307,13 C309,13,309,14,311,14 C313,14,313,12,314,12 C316,11,316,10,317,10 C319,10,319,10,320,10 C322,10,322,12,323,12 C325,12,325,10,326,10 C328,9,328,9,329,9 C331,9,331,8,332,8 C334,7,334,7,335,7 C337,7,337,8,338,8 C340,8,339,8,341,8 C343,7,343,5,345,5 C347,5,347,7,348,7 C350,7,350,6,351,6 C353,6,353,8,354,8 C356,8,356,5,357,5 C359,5,359,7,360,7 C362,7,362,6,363,6 C365,6,365,6,366,6 C368,6,368,7,369,7 C371,7,371,11,372,11 C374,11,373,12,375,12 C377,12,377,10,379,10 C381,10,381,8,382,8 C384,8,384,12,385,12 C387,12,387,11,388,11 C390,11,390,15,391,16 C393,16,393,15,394,15 C396,15,396,14,397,14 C399,14,399,14,400,14 C402,14,402,11,403,11 C405,11,405,8,406,8 C408,8,407,9,409,9 C411,9,411,9,413,9 C415,9,415,9,416,9 C418,9,418,10,419,10 C421,11,421,11,422,11 C424,11,424,10,425,10 C427,10,427,12,428,12 C430,12,430,9,431,9 C433,9,433,13,434,13 C436,14,436,15,437,15 C439,15,439,14,440,14 C442,14,441,15,443,16 C445,16,445,16,447,16 C449,17,449,19,450,19 C452,19,452,18,453,18 C455,18,455,18,456,18 C458,17,458,16,459,16 C461,16,461,17,462,17 C464,17,464,18,465,18 C467,18,467,19,468,19 C470,19,470,18,471,18 C473,18,473,20,474,20 C476,20,475,20,477,20 C479,20,479,20,481,20 C483,20,483,19,484,19 C486,19,486,17,487,17 C489,17,489,16,490,16 C492,16,492,13,493,13 C495,13,495,14,496,14 C498,14,498,14,499,14 C501,14,501,16,502,16 C504,16,504,15,505,15 C507,15,507,16,508,16 C510,16,509,16,511,16 C513,16,513,14,515,14 C517,14,517,10,518,10 C520,10,520,9,521,9 C523,9,523,9,524,9 C526,9,526,12,527,12 C529,12,529,12,530,12 C532,12,532,11,533,11 C535,11,535,12,536,12 C538,12,538,11,539,10 C541,10,541,9,542,9 C544,9,543,6,545,6 C547,6,547,7,549,7 C551,7,551,7,552,7 C554,7,554,5,555,5 C557,5,557,6,558,6 C560,6,560,6,561,6 C563,6,563,8,564,8 C566,8,566,5,567,5 C569,5,569,6,570,6 C572,6,572,7,573,7 C575,7,575,6,576,6 C578,6,578,8,579,8 M0,0 L0,0" fill="none" fill-opacity="0" stroke-width="1" stroke-opacity="0" stroke="#888888"></path><path cs="100,100" d="M2,35 C3,35,4,36,5,36 C7,36,7,34,8,34 C10,34,10,34,11,34 C13,34,13,33,14,33 C16,33,16,35,17,35 C19,35,19,31,20,31 C22,31,22,31,23,31 C25,31,25,32,26,32 C28,32,28,33,29,33 C31,33,30,34,32,34 C34,34,34,33,36,33 C38,33,38,32,39,32 C41,31,41,30,42,30 C44,30,44,30,45,30 C47,30,47,29,48,28 C50,28,50,27,51,27 C53,27,53,33,54,33 C56,33,56,30,57,30 C59,30,59,31,60,31 C62,31,62,33,63,33 C65,33,64,32,66,32 C68,32,68,34,70,34 C72,34,72,34,73,34 C75,34,75,35,76,35 C78,35,78,37,79,37 C81,37,81,36,82,36 C84,36,84,37,85,37 C87,37,87,37,88,37 C90,37,90,38,91,38 C93,38,93,36,94,36 C96,35,96,35,97,35 C99,35,98,33,100,33 C102,33,102,32,104,32 C106,32,106,29,107,28 C109,28,109,27,110,27 C112,27,112,23,113,23 C115,23,115,26,116,26 C118,26,118,28,119,28 C121,27,121,22,122,21 C124,21,124,19,125,19 C127,19,127,21,128,22 C130,22,130,24,131,24 C133,24,132,23,134,23 C136,23,136,24,138,24 C140,24,140,24,141,24 C143,25,143,26,144,26 C146,27,146,28,147,28 C149,28,149,27,150,26 C152,26,152,25,153,25 C155,25,155,23,156,23 C158,23,158,20,159,20 C161,20,161,22,162,22 C164,22,164,21,165,21 C167,21,166,18,168,18 C170,18,170,16,172,16 C174,16,174,17,175,17 C177,17,177,17,178,17 C180,17,180,16,181,16 C183,16,183,17,184,16 C186,16,186,13,187,13 C189,13,189,14,190,14 C192,14,192,16,193,16 C195,16,195,14,196,14 C198,13,198,12,199,12 C201,12,200,12,202,12 C204,12,204,13,206,13 C208,13,208,14,209,15 C211,15,211,21,212,22 C214,22,214,27,215,27 C217,28,217,31,218,32 C220,32,220,33,221,33 C223,33,223,32,224,32 C226,31,226,29,227,29 C229,29,229,29,230,29 C232,29,232,26,233,26 C235,25,234,27,236,27 C238,27,238,28,240,28 C242,28,242,28,243,28 C245,28,245,27,246,26 C248,26,248,25,249,25 C251,25,251,25,252,25 C254,25,254,23,255,22 C257,22,257,21,258,20 C260,20,260,19,261,19 C263,19,263,17,264,17 C266,17,266,16,267,16 C269,16,268,16,270,16 C272,15,272,13,274,12 C276,12,276,13,277,13 C279,13,279,11,280,11 C282,11,282,9,283,9 C285,9,285,10,286,10 C288,10,288,12,289,12 C291,12,291,11,292,11 C294,11,294,12,295,12 C297,12,297,11,298,11 C300,11,300,11,301,11 C303,11,303,13,304,13 C306,13,305,13,307,13 C309,13,309,14,311,14 C313,14,313,12,314,12 C316,11,316,10,317,10 C319,10,319,10,320,10 C322,10,322,12,323,12 C325,12,325,10,326,10 C328,9,328,9,329,9 C331,9,331,8,332,8 C334,7,334,7,335,7 C337,7,337,8,338,8 C340,8,339,8,341,8 C343,7,343,5,345,5 C347,5,347,7,348,7 C350,7,350,6,351,6 C353,6,353,8,354,8 C356,8,356,5,357,5 C359,5,359,7,360,7 C362,7,362,6,363,6 C365,6,365,6,366,6 C368,6,368,7,369,7 C371,7,371,11,372,11 C374,11,373,12,375,12 C377,12,377,10,379,10 C381,10,381,8,382,8 C384,8,384,12,385,12 C387,12,387,11,388,11 C390,11,390,15,391,16 C393,16,393,15,394,15 C396,15,396,14,397,14 C399,14,399,14,400,14 C402,14,402,11,403,11 C405,11,405,8,406,8 C408,8,407,9,409,9 C411,9,411,9,413,9 C415,9,415,9,416,9 C418,9,418,10,419,10 C421,11,421,11,422,11 C424,11,424,10,425,10 C427,10,427,12,428,12 C430,12,430,9,431,9 C433,9,433,13,434,13 C436,14,436,15,437,15 C439,15,439,14,440,14 C442,14,441,15,443,16 C445,16,445,16,447,16 C449,17,449,19,450,19 C452,19,452,18,453,18 C455,18,455,18,456,18 C458,17,458,16,459,16 C461,16,461,17,462,17 C464,17,464,18,465,18 C467,18,467,19,468,19 C470,19,470,18,471,18 C473,18,473,20,474,20 C476,20,475,20,477,20 C479,20,479,20,481,20 C483,20,483,19,484,19 C486,19,486,17,487,17 C489,17,489,16,490,16 C492,16,492,13,493,13 C495,13,495,14,496,14 C498,14,498,14,499,14 C501,14,501,16,502,16 C504,16,504,15,505,15 C507,15,507,16,508,16 C510,16,509,16,511,16 C513,16,513,14,515,14 C517,14,517,10,518,10 C520,10,520,9,521,9 C523,9,523,9,524,9 C526,9,526,12,527,12 C529,12,529,12,530,12 C532,12,532,11,533,11 C535,11,535,12,536,12 C538,12,538,11,539,10 C541,10,541,9,542,9 C544,9,543,6,545,6 C547,6,547,7,549,7 C551,7,551,7,552,7 C554,7,554,5,555,5 C557,5,557,6,558,6 C560,6,560,6,561,6 C563,6,563,8,564,8 C566,8,566,5,567,5 C569,5,569,6,570,6 C572,6,572,7,573,7 C575,7,575,6,576,6 C578,6,578,8,579,8  L579,40 L2,40 L2,34.8" fill="#888888" fill-opacity="1" stroke-width="0" stroke-opacity="0"></path></g><g></g></g><g transform="translate(0,0)"><g><path cs="100,100" d="M15.5,40.5 L15.5,40.5 L15.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.15" stroke="#FFFFFF"></path></g><g><path cs="100,100" d="M111.5,40.5 L111.5,40.5 L111.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.15" stroke="#FFFFFF"></path></g><g><path cs="100,100" d="M204.5,40.5 L204.5,40.5 L204.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.15" stroke="#FFFFFF"></path></g><g><path cs="100,100" d="M300.5,40.5 L300.5,40.5 L300.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.15" stroke="#FFFFFF"></path></g><g><path cs="100,100" d="M392.5,40.5 L392.5,40.5 L392.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.15" stroke="#FFFFFF"></path></g><g><path cs="100,100" d="M488.5,40.5 L488.5,40.5 L488.5,0.5" fill="none" stroke-width="1" stroke-opacity="0.15" stroke="#FFFFFF"></path></g></g><g transform="translate(0,0)" visibility="visible"><text y="6" fill="#FFFFFF" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(62.90159574762988,28.5)"><tspan y="6" x="0">Aug</tspan></text><text y="6" fill="#FFFFFF" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(158.90159574762987,28.5)"><tspan y="6" x="0">Sep</tspan></text><text y="6" fill="#FFFFFF" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(251.90159574762987,28.5)"><tspan y="6" x="0">Oct</tspan></text><text y="6" fill="#FFFFFF" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(347.90159574762987,28.5)"><tspan y="6" x="0">Nov</tspan></text><text y="6" fill="#FFFFFF" font-family="Verdana" font-size="11px" opacity="1" text-anchor="middle" transform="translate(439.90159574762987,28.5)"><tspan y="6" x="0">Dec</tspan></text><text y="6" fill="#FFFFFF" font-family="Verdana" font-size="11px" opacity="1" font-weight="bold" text-anchor="middle" transform="translate(535.9015957476299,28.5)"><tspan y="6" x="0">2013</tspan></text></g><rect x="0.5" y="0.5" width="582" height="40" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005"></rect><rect x="263" y="0.5" width="89" height="40" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" aria-label="Zoom chart using cursor arrows" role="menuitem"></rect><g aria-label="Zoom chart using cursor arrows" role="menuitem" transform="translate(246,3)"><image x="0" y="0" width="35" height="35" src="{{asset('template/svg/dragIconRoundBig.svg')}}"></image><rect x="0.5" y="0.5" width="25" height="40" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(5,-2)"></rect></g><g aria-label="Zoom chart using cursor arrows" role="menuitem" transform="translate(335,3)"><image x="0" y="0" width="35" height="35" src="{{asset('template/svg/dragIconRoundBig.svg')}}"></image><rect x="0.5" y="0.5" width="25" height="40" rx="0" ry="0" stroke-width="0" fill="#000" stroke="#000" fill-opacity="0.005" stroke-opacity="0.005" transform="translate(5,-2)"></rect></g><clipPath id="AmChartsEl-8"><rect x="263" y="0" width="89" height="41" rx="0" ry="0" stroke-width="0"></rect></clipPath></g></g><g><g transform="translate(0,0)"></g><g transform="translate(0,0)"></g><g transform="translate(40,60)"><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(10,230)" aria-label="red line Oct 20, 2012 57"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(30,209)" aria-label="red line Oct 21, 2012 60"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(50,202)" aria-label="red line Oct 22, 2012 61"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(70,146)" aria-label="red line Oct 23, 2012 69"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(90,160)" aria-label="red line Oct 24, 2012 67"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(110,126)" aria-label="red line Oct 25, 2012 72"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(130,91)" aria-label="red line Oct 26, 2012 77"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(150,105)" aria-label="red line Oct 27, 2012 75"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(170,140)" aria-label="red line Oct 28, 2012 70"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(190,126)" aria-label="red line Oct 29, 2012 72"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(210,140)" aria-label="red line Oct 30, 2012 70"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(230,126)" aria-label="red line Oct 31, 2012 72"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(250,119)" aria-label="red line Nov 01, 2012 73"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(270,160)" aria-label="red line Nov 02, 2012 67"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(291,153)" aria-label="red line Nov 03, 2012 68"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(311,174)" aria-label="red line Nov 04, 2012 65"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(331,133)" aria-label="red line Nov 05, 2012 71"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(351,105)" aria-label="red line Nov 06, 2012 75"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(371,112)" aria-label="red line Nov 07, 2012 74"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(391,133)" aria-label="red line Nov 08, 2012 71"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(411,98)" aria-label="red line Nov 09, 2012 76"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(431,91)" aria-label="red line Nov 10, 2012 77"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(451,63)" aria-label="red line Nov 11, 2012 81"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(471,49)" aria-label="red line Nov 12, 2012 83"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(491,70)" aria-label="red line Nov 13, 2012 80"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(511,63)" aria-label="red line Nov 14, 2012 81"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(531,21)" aria-label="red line Nov 15, 2012 87"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(551,56)" aria-label="red line Nov 16, 2012 82"></circle><circle r="2.5" cx="0" cy="0" fill="#FFFFFF" stroke="#4099ff" fill-opacity="1" stroke-width="2" stroke-opacity="1" transform="translate(571,28)" aria-label="red line Nov 17, 2012 86"></circle></g></g><g><g></g></g><g><g transform="translate(40,0)" visibility="hidden"></g><g transform="translate(40,60)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(3,291.5)"><tspan y="6" x="0">Oct 20</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(103,291.5)"><tspan y="6" x="0">Oct 25</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(203,291.5)"><tspan y="6" x="0">Oct 30</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" font-weight="bold" text-anchor="start" transform="translate(304,291.5)"><tspan y="6" x="0">Nov</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(404,291.5)"><tspan y="6" x="0">Nov 09</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(504,291.5)"><tspan y="6" x="0">Nov 14</tspan></text></g><g transform="translate(40,60)" visibility="visible"><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,278)"><tspan y="6" x="0">50</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,243)"><tspan y="6" x="0">55</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,208)"><tspan y="6" x="0">60</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,173)"><tspan y="6" x="0">65</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,139)"><tspan y="6" x="0">70</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,104)"><tspan y="6" x="0">75</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,69)"><tspan y="6" x="0">80</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,34)"><tspan y="6" x="0">85</tspan></text><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="end" transform="translate(-12,-1)"><tspan y="6" x="0">90</tspan></text></g></g><g></g><g transform="translate(40,60)"></g><g><g transform="translate(538,68)" visibility="visible"><rect x="0.5" y="0.5" width="92" height="33" rx="0" ry="0" stroke-width="1" fill="#000000" stroke="#000000" fill-opacity="1" stroke-opacity="1" opacity="0" transform="translate(-8,-8)"></rect><image x="0" y="0" width="19" height="19" src="{{asset('template/svg/lens.svg')}}"></image><text y="6" fill="#000000" font-family="Verdana" font-size="11px" opacity="1" text-anchor="start" transform="translate(24,7)"><tspan y="6" x="0">Show all</tspan></text></g></g><g></g><clipPath id="AmChartsEl-3"><rect x="-1" y="-1" width="583" height="281" rx="0" ry="0" stroke-width="0"></rect></clipPath></svg><a href="http://www.amcharts.com/javascript-charts/" title="JavaScript charts" style="position: absolute; text-decoration: none; color: rgb(0, 0, 0); font-family: Verdana; font-size: 11px; opacity: 0.7; display: block; left: 45px; top: 65px;">JS chart by amCharts</a></div></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 col-xl-4">
                                <div class="card comp-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-b-25">Impressions</h6>
                                                <h3 class="f-w-700 text-c-blue">1,563</h3>
                                                <p class="m-b-0">May 23 - June 01 (2017)</p>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-eye bg-c-blue"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card comp-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-b-25">Goal</h6>
                                                <h3 class="f-w-700 text-c-green">30,564</h3>
                                                <p class="m-b-0">May 23 - June 01 (2017)</p>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-bullseye bg-c-green"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card comp-card">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-b-25">Impact</h6>
                                                <h3 class="f-w-700 text-c-yellow">42.6%</h3>
                                                <p class="m-b-0">May 23 - June 01 (2017)</p>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-hand-paper bg-c-yellow"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-xl-12">
                                <div class="card proj-progress-card">
                                    <div class="card-block">
                                        <div class="row">
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Published Project</h6>
                                                <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-red" style="width:25%"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Completed Task</h6>
                                                <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-blue" style="width:65%"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Successfull Task</h6>
                                                <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-green" style="width:85%"></div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <h6>Ongoing Project</h6>
                                                <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                                                <div class="progress">
                                                    <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12 col-xl-4">
                                <div class="card card-blue text-white">
                                    <div class="card-block p-b-0">
                                        <div class="row m-b-50">
                                            <div class="col">
                                                <h6 class="m-b-5">Sales In July</h6>
                                                <h5 class="m-b-0 f-w-700">$2665.00</h5>
                                            </div>
                                            <div class="col-auto text-center">
                                                <p class="m-b-5">Direct Sale</p>
                                                <h6 class="m-b-0">$1768</h6>
                                            </div>
                                            <div class="col-auto text-center">
                                                <p class="m-b-5">Referal</p>
                                                <h6 class="m-b-0">$897</h6>
                                            </div>
                                        </div>
                                        <div id="sec-ecommerce-chart-line" class="" style="height: 60px; padding: 0px; position: relative;"><canvas class="flot-base" width="283" height="60" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 283.656px; height: 60px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div style="position: absolute; max-width: 40px; top: 60px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 8px; text-align: center;">0.0</div><div style="position: absolute; max-width: 40px; top: 60px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 56px; text-align: center;">2.5</div><div style="position: absolute; max-width: 40px; top: 60px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 104px; text-align: center;">5.0</div><div style="position: absolute; max-width: 40px; top: 60px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 151px; text-align: center;">7.5</div><div style="position: absolute; max-width: 40px; top: 60px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 199px; text-align: center;">10.0</div><div style="position: absolute; max-width: 40px; top: 60px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 247px; text-align: center;">12.5</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div style="position: absolute; top: 52px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">0</div><div style="position: absolute; top: 37px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">10</div><div style="position: absolute; top: 23px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">20</div><div style="position: absolute; top: 8px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">30</div></div></div><canvas class="flot-overlay" width="283" height="60" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 283.656px; height: 60px;"></canvas></div>
                                        <div id="sec-ecommerce-chart-bar" style="height: 195px; padding: 0px; position: relative;"><canvas class="flot-base" width="283" height="195" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 283.656px; height: 195px;"></canvas><div class="flot-text" style="position: absolute; inset: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; inset: 0px;"><div style="position: absolute; max-width: 35px; top: 195px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 6px; text-align: center;">0.0</div><div style="position: absolute; max-width: 35px; top: 195px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 54px; text-align: center;">2.5</div><div style="position: absolute; max-width: 35px; top: 195px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 103px; text-align: center;">5.0</div><div style="position: absolute; max-width: 35px; top: 195px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 152px; text-align: center;">7.5</div><div style="position: absolute; max-width: 35px; top: 195px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 200px; text-align: center;">10.0</div><div style="position: absolute; max-width: 35px; top: 195px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 249px; text-align: center;">12.5</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; inset: 0px;"><div style="position: absolute; top: 195px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">0</div><div style="position: absolute; top: 163px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">5</div><div style="position: absolute; top: 130px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">10</div><div style="position: absolute; top: 98px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">15</div><div style="position: absolute; top: 65px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">20</div><div style="position: absolute; top: 33px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">25</div><div style="position: absolute; top: 0px; font: 400 0px / 0px &quot;open sans&quot;, sans-serif; color: transparent; left: 0px; text-align: right;">30</div></div></div><canvas class="flot-overlay" width="283" height="195" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 283.656px; height: 195px;"></canvas></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-12">
                                <div class="card latest-update-card">
                                    <div class="card-header">
                                        <h5>What???s New</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                <li><i class="feather icon-trash close-card"></i></li>
                                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 290px;"><div class="scroll-widget" style="overflow: hidden; width: auto; height: 290px;">
                                                <div class="latest-update-box">
                                                    <div class="row p-t-20 p-b-30">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <img src="{{asset('template/jpg/avatar-4.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>Your Manager Posted.</h6></a>
                                                            <p class="text-muted m-b-0">Jonny michel</p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-b-30">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>You have 3 pending Task.</h6></a>
                                                            <p class="text-muted m-b-0">Hemilton</p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-b-30">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>New Order Received.</h6></a>
                                                            <p class="text-muted m-b-0">Hemilton</p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-b-30">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <img src="{{asset('template/jpg/avatar-4.jpg')}}" alt="user image" class="img-radius img-40 align-top m-r-15 update-icon">
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>Your Manager Posted.</h6></a>
                                                            <p class="text-muted m-b-0">Jonny michel</p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-b-30">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <i class="feather icon-briefcase bg-c-red update-icon"></i>
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>You have 3 pending Task.</h6></a>
                                                            <p class="text-muted m-b-0">Hemilton</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>New Order Received.</h6></a>
                                                            <p class="text-muted m-b-0">Hemilton</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 186.475px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card latest-update-card">
                                    <div class="card-header">
                                        <h5>Latest Activity</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                <li><i class="feather icon-trash close-card"></i></li>
                                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 290px;"><div class="scroll-widget" style="overflow: hidden; width: auto; height: 290px;">
                                                <div class="latest-update-box">
                                                    <div class="row p-t-20 p-b-30">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <i class="b-primary update-icon ring"></i>
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>Devlopment &amp; Update</h6></a>
                                                            <p class="text-muted m-b-0">Lorem ipsum dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-b-30">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <i class="b-primary update-icon ring"></i>
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>Showcases</h6></a>
                                                            <p class="text-muted m-b-0">Lorem dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-b-30">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <i class="b-success update-icon ring"></i>
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>Miscellaneous</h6></a>
                                                            <p class="text-muted m-b-0">Lorem ipsum dolor sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-b-30">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <i class="b-danger update-icon ring"></i>
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>Your Manager Posted.</h6></a>
                                                            <p class="text-muted m-b-0">Lorem ipsum dolor sit amet, <a href="#!" class="text-c-red"> More</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="row p-b-30">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <i class="b-primary update-icon ring"></i>
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>Showcases</h6></a>
                                                            <p class="text-muted m-b-0">Lorem dolor sit amet, <a href="#!" class="text-c-blue"> More</a></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-auto text-right update-meta p-r-0">
                                                            <i class="b-success update-icon ring"></i>
                                                        </div>
                                                        <div class="col p-l-5">
                                                            <a href="#!"><h6>Miscellaneous</h6></a>
                                                            <p class="text-muted m-b-0">Lorem ipsum dolor sit ipsum amet, <a href="#!" class="text-c-green"> More</a></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 5px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 171.633px;"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>New Products</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i></li>
                                                <li><i class="feather icon-maximize full-card"></i></li>
                                                <li><i class="feather icon-minus minimize-card"></i></li>
                                                <li><i class="feather icon-refresh-cw reload-card"></i></li>
                                                <li><i class="feather icon-trash close-card"></i></li>
                                                <li><i class="feather icon-chevron-left open-card-option"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block p-b-0">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Product Code</th>
                                                    <th>Customer</th>
                                                    <th>Status</th>
                                                    <th>Rating</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>Sofa</td>
                                                    <td>#PHD001</td>
                                                    <td>abc@gmail.com</td>
                                                    <td><label class="label label-danger">Out Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Computer</td>
                                                    <td>#PHD002</td>
                                                    <td>cdc@gmail.com</td>
                                                    <td><label class="label label-success">In Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>#PHD003</td>
                                                    <td>pqr@gmail.com</td>
                                                    <td><label class="label label-danger">Out Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Coat</td>
                                                    <td>#PHD004</td>
                                                    <td>bcs@gmail.com</td>
                                                    <td><label class="label label-success">In Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Watch</td>
                                                    <td>#PHD005</td>
                                                    <td>cdc@gmail.com</td>
                                                    <td><label class="label label-success">In Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Shoes</td>
                                                    <td>#PHD006</td>
                                                    <td>pqr@gmail.com</td>
                                                    <td><label class="label label-danger">Out Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
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
@endsection
