<?php
    /**
     **** AppzStory Free Code ****
    * PHP MySQLi Procedural style CRUD
    * 
    * @link https://appzstory.dev
    * @author Yothin Sapsamran (Jame AppzStory Studio)
    */
    require_once('connect.php');
    $sql = "SELECT * FROM rt";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Website Title -->
    <title>PBTNN31</title>
    <!-- Bootstrap -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font-Awesome -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Lightbox -->
	<link href="assets/lightbox/css/lightbox.css" rel="stylesheet">
    <!-- Text Rotator-->
	<link href="assets/textrotator/simpletextrotator.css" rel="stylesheet">
	<!-- FlexSlider -->
    <link href="assets/flexslider/flexslider.css" rel="stylesheet">
	<!-- Theme Style -->
    <link href="css/style.css" rel="stylesheet">
	<!-- Animations -->
    <link href="css/animate.css" rel="stylesheet">
	<!-- Custom Favicon -->
	<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" /> 
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/html5shiv/html5shiv.js"></script>
    <script src="assets/respond/respond.min.js"></script>
    <![endif]-->

<!--link rel="icon" type="image/png" href="https://colorlib.com/etc/tb/Table_Fixed_Column/images/icons/favicon.ico"-->

<link rel="stylesheet" type="text/css" href="./Table V05_files/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="./Table V05_files/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="./Table V05_files/animate.css">

<link rel="stylesheet" type="text/css" href="./Table V05_files/select2.min.css">

<link rel="stylesheet" type="text/css" href="./Table V05_files/perfect-scrollbar.css">

<link rel="stylesheet" type="text/css" href="./Table V05_files/util.css">
<link rel="stylesheet" type="text/css" href="./Table V05_files/mainn.css">

<meta name="robots" content="noindex, follow">
<script type="text/javascript" async="" src="./Table V05_files/analytics.js.ดาวน์โหลด" nonce="929bfda6-f23c-423f-83ed-73227c195b06"></script><script defer="" referrerpolicy="origin" src="./Table V05_files/s.js.ดาวน์โหลด"></script><script nonce="929bfda6-f23c-423f-83ed-73227c195b06">(function(w,d){!function(bv,bw,bx,by){bv[bx]=bv[bx]||{};bv[bx].executed=[];bv.zaraz={deferred:[],listeners:[]};bv.zaraz.q=[];bv.zaraz._f=function(bz){return function(){var bA=Array.prototype.slice.call(arguments);bv.zaraz.q.push({m:bz,a:bA})}};for(const bB of["track","set","debug"])bv.zaraz[bB]=bv.zaraz._f(bB);bv.zaraz.init=()=>{var bC=bw.getElementsByTagName(by)[0],bD=bw.createElement(by),bE=bw.getElementsByTagName("title")[0];bE&&(bv[bx].t=bw.getElementsByTagName("title")[0].text);bv[bx].x=Math.random();bv[bx].w=bv.screen.width;bv[bx].h=bv.screen.height;bv[bx].j=bv.innerHeight;bv[bx].e=bv.innerWidth;bv[bx].l=bv.location.href;bv[bx].r=bw.referrer;bv[bx].k=bv.screen.colorDepth;bv[bx].n=bw.characterSet;bv[bx].o=(new Date).getTimezoneOffset();if(bv.dataLayer)for(const bI of Object.entries(Object.entries(dataLayer).reduce(((bJ,bK)=>({...bJ[1],...bK[1]})))))zaraz.set(bI[0],bI[1],{scope:"page"});bv[bx].q=[];for(;bv.zaraz.q.length;){const bL=bv.zaraz.q.shift();bv[bx].q.push(bL)}bD.defer=!0;for(const bM of[localStorage,sessionStorage])Object.keys(bM||{}).filter((bO=>bO.startsWith("_zaraz_"))).forEach((bN=>{try{bv[bx]["z_"+bN.slice(7)]=JSON.parse(bM.getItem(bN))}catch{bv[bx]["z_"+bN.slice(7)]=bM.getItem(bN)}}));bD.referrerPolicy="origin";bD.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(bv[bx])));bC.parentNode.insertBefore(bD,bC)};["complete","interactive"].includes(bw.readyState)?zaraz.init():bv.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,"zarazData","script");})(window,document);</script><style type="text/css">@font-face { font-family: Roboto; src: url("chrome-extension://mcgbeeipkmelnpldkobichboakdfaeon/css/Roboto-Regular.ttf"); }</style></head>
</head>
    <body id="top">

      <!-- ****************************** Preloader ************************** -->
      <div id="preloader"></div>


	  	<!-- ==========================
        HEADER SECTION 
        =========================== -->
        <header id="hhome">
		    <!-- creative menu -->
            <div class="container-fluid">
              <div class="row">
                <div class="menu-wrap">
				<nav class="menu">
				    <!-- Menu Links -->
					<div class="icon-list">
						<a href="admin_main.php#hhome"><i class="fa fa-fw fa-home"></i><span>HOME</span></a>
						<a href="admin_main.php#MANAGEMENT"><i class="fa fa-fw fa-pencil-square-o"></i><span>MANAGEMENT</span></a>
            <a href="admin_main.php#SCHEDULE"><i class="fa fa-fw fa-table"></i><span>SCHEDULE</span></a>
						<a href="admin_main.php#ccontact"><i class="fa fa-fw fa-envelope-o"></i><span>CONTACT</span></a>
            <a href="index.php"><i class="fa fa-fw fa-sign-out"></i><span>SIGN OUT</span></a>
					</div>
				</nav>
			    </div>
			    <button class="menu-button" id="open-button"></button><!-- menu button -->
              </div><!--/row-->
            </div><!--/container-->
		  <!-- Header Image -->
          <section class="hero" id="hero">
            <div class="container">
			  <!-- Slider Button (don't edit!)-->
              <div class="row">
                <div class="col-md-12 text-right navicon">
                  <a id="nav-toggle" class="nav_slide_button" href="admin_main.php#"><span></span></a>
                </div>
              </div>
			  <!-- HEADER HEADLINE -->
              <div class="row">
                <div class="col-md-8 col-md-offset-1 inner">
                  <h1 class="animated fadeInDown">
                    <span style="color:#5a5a5a">PBT</span><span style="color:#00ff90">N</span><span style="color:#5a5a5a">N</span></h1><br>
                    <h6 class="animated fadeInUp delay-05s"><span class="rotate" style="color:#E04343">ผู้ดูแลระบบ</span></h6><!-- Text Rotator -->
                </div>
              </div><br>
            </div>
          </section>
		  <!-- Header Image End -->
        </header>


		<!-- ==========================
        PORTFOLIO SECTION
    =========================== -->
        <section class="swag text-center" id="MANAGEMENT">
          <div class="container">
		    <!-- Headline -->
            <div class="row-center">
              <h1 class="arrow">
                System <span>Management</span>  
              </h1>
            </div>
          </div>
        </section>

		<!-- ==========================
        CUSTOM SPACER
        =========================== -->
		<div class="spacer-cta text-center">
          <div class="container">
            <div class="col-md-4 col-sm-6">
              <div class="col-md-12">
                <a href="https://docs.google.com/spreadsheets/d/1mqPuGDS3eq8K1Z_gRO6h-LHEXKq7YbyDD-2kbK1wvGs/edit?usp=sharing" target="_blank" class="outline-btn">รายรับ</a>
              </div>
            </div>

            <div class="col-md-4 col-sm-6">
              <div class="col-md-12">
                <a href="data_pageIN.php" class="outline-btn">จัดการข้อมูล</a>
              </div>
            </div>

            <div class="col-md-4 col-sm-6">
              <div class="col-md-12">
                <a href="admin_main.php#ccontact" class="outline-btn">แก้ไขรหัสผ่าน</a>
              </div>
            </div>
          </div>
        </div>
<!--แสดงจำนวนห้อง-->
<h1 class="swag text-center" id="SCHEDULE"><span>ผู้ใช้งาน <?php echo mysqli_num_rows($result) ?> ห้อง</span></h1></class>
<!--จบการแสดง-->

<!--เริ่มคอนเน็คข้อมูลจากตาราง-->
        <?php 
                                    $sql = "SELECT * FROM data1 ";
                                    $result = mysqli_query($conn, $sql);
                                    $h =mysqli_num_rows($result);
                                    
                                if ($h>0){
                                    $v=[];$room=[];$ol=[]; $new=[];$rt=[];$nday;$oday;$rday;
                                    $num=0;
                                   /* for ($x=0;$x<=$h;$x++){
                                        echo $x['room'];
                                    }*/
                                    $sql = "SELECT * FROM rt";
                                $result = mysqli_query($conn, $sql);
                                    while ($row = mysqli_fetch_assoc($result)):
                                      
                                        $v[]= $row['room'];
                                        $bg = 0;
                                        array_push($room, $row['room']);
                                        array_push($rt, $row['Kwh']);
                                        $rday = $row['date'];
                                    endwhile;
                                    
                                for ($u=0;$u<count($room);$u++){
                                    
                                $sql = "SELECT * FROM data1 where room = $room[$u] ";
                                $result = mysqli_query($conn, $sql);
                                while ($row = mysqli_fetch_assoc($result)):
                                        $p=$row['sa'] ;
                                        if ($p=="o"){
                                            $e = $row['Kwh'];
                                            array_push($ol, $e);
                                            $oday = $row['date'];
                                        }else if ($p=="n"){
                                            $e = $row['Kwh'];
                                            array_push($new, $e);
                                            $nday = $row['date'];
                                        }
                                endwhile;
                                }}
                                        ?>
                                    <!-- Modal -->
                                <?php
                                  $sql = "SELECT * FROM outdata WHERE id = '1'"; 
                                  $result = mysqli_query($conn, $sql);  
                                  while ($row = mysqli_fetch_assoc($result)):
                                   $xi=$row['data']; 
                                  endwhile;
                                ?>
<!--จบการคอนเน็ค-->
<!--ตาราง-->
      <div class="container">
        <div class="wrap-table100">
        <div class="table100 ver1">
        <div class="table100-firstcol">
        <table>
        <thead>
        <tr class="row100 head">
        <th class="cell100 column1">ห้อง</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($o=0;$o<count($room);$o++){ ?>
        <tr class="row100 body">
        <td class="cell100 column1"> <?php echo $room[$o] ?>
        <?php $rt[$o] ?>
        <?php $new[$o] ?>
        <?php $ol[$o] ?>
        <?php $j=$new[$o]-$ol[$o]; $j; ?>
        <?php ($j*$xi); } ?> </td>
        </tr>
        </tbody>
        </table>
        </div>
        <div class="wrap-table100-nextcols js-pscroll ps ps--active-x">
        <div class="table100-nextcols">
        <table>
        <thead>
        <tr class="row100 head">
        <th class="cell100 column2">ปัจจุบัน</th>
        <th class="cell100 column3">เลขอ่านครั้งหลัง</th>
        <th class="cell100 column4">เลขอ่านครั้งก่อน</th>
        <th class="cell100 column5">หน่วยที่ใช้ไป</th>
        <th class="cell100 column6">ราคา</th>
        </tr>
        </thead>
        <tbody>
        <?php for ($o=0;$o<count($room);$o++){ ?>
        <tr class="row100 body">
        <td class="cell100 column2"> <?php echo $rt[$o] ?>
        <td class="cell100 column3"> <?php echo $new[$o] ?>
        <td class="cell100 column4"> <?php echo $ol[$o] ?>
        <td class="cell100 column5"> <?php $j=$new[$o]-$ol[$o]; echo $j; ?>
        <td class="cell100 column6"> <?php echo ($j*$xi); } ?> </td></td></td></td></td>
        </tr>
        </tbody>
        </table>
        </div>
        <div class="ps__rail-x" style="width: 1166px; left: 0px; bottom: 10px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 688px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        </div>
        </div>
        </div>
      </section>
        <script src="./Table V05_files/jquery-3.2.1.min.js.ดาวน์โหลด"></script>
        
        <script src="./Table V05_files/popper.js.ดาวน์โหลด"></script>
        <script src="./Table V05_files/bootstrap.min.js.ดาวน์โหลด"></script>
        
        <script src="./Table V05_files/select2.min.js.ดาวน์โหลด"></script>
        
        <script src="./Table V05_files/perfect-scrollbar.min.js.ดาวน์โหลด"></script>
        <script>
            $('.js-pscroll').each(function(){
              var ps = new PerfectScrollbar(this);
        
              $(window).on('resize', function(){
                ps.update();
              })
        
              $(this).on('ps-x-reach-start', function(){
                $(this).parent().find('.table100-firstcol').removeClass('shadow-table100-firstcol');
              });
        
              $(this).on('ps-scroll-x', function(){
                $(this).parent().find('.table100-firstcol').addClass('shadow-table100-firstcol');
              });
        
            });
        
        
        
        
          </script>
        
        <script async="" src="./Table V05_files/js"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-23581568-13');
        </script>
        
        <script src="./Table V05_files/main.js.ดาวน์โหลด"></script>
        <script defer="" src="./Table V05_files/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon="{&quot;rayId&quot;:&quot;7a3978cc9f3c45bf&quot;,&quot;token&quot;:&quot;cd0b4b3a733644fc843ef0b185f98241&quot;,&quot;version&quot;:&quot;2023.2.0&quot;,&quot;si&quot;:100}" crossorigin="anonymous"></script>
        
<!--เปิดตาราง-->
        <script>
            function returnCommentSymbol(language = "javascript") {
              const languageObject = {
                bat: "@REM",
                c: "//",
                csharp: "//",
                cpp: "//",
                closure: ";;",
                coffeescript: "#",
                dockercompose: "#",
                css: "/*DELIMITER*/",
                "cuda-cpp": "//",
                dart: "//",
                diff: "#",
                dockerfile: "#",
                fsharp: "//",
                "git-commit": "//",
                "git-rebase": "#",
                go: "//",
                groovy: "//",
                handlebars: "{{!--DELIMITER--}}",
                hlsl: "//",
                html: "<!--DELIMITER-->",
                ignore: "#",
                ini: ";",
                java: "//",
                javascript: "//",
                javascriptreact: "//",
                json: "//",
                jsonc: "//",
                julia: "#",
                latex: "%",
                less: "//",
                lua: "--",
                makefile: "#",
                markdown: "<!--DELIMITER-->",
                "objective-c": "//",
                "objective-cpp": "//",
                perl: "#",
                perl6: "#",
                php: "<!--DELIMITER-->",
                powershell: "#",
                properties: ";",
                jade: "//-",
                python: "#",
                r: "#",
                razor: "<!--DELIMITER-->",
                restructuredtext: "..",
                ruby: "#",
                rust: "//",
                scss: "//",
                shaderlab: "//",
                shellscript: "#",
                sql: "--",
                svg: "<!--DELIMITER-->",
                swift: "//",
                tex: "%",
                typescript: "//",
                typescriptreact: "//",
                vb: "'",
                xml: "<!--DELIMITER-->",
                xsl: "<!--DELIMITER-->",
                yaml: "#"
              }
              return languageObject[language].split("DELIMITER")
            }
            var savedChPos = 0
            var returnedSuggestion = ''
            let editor, doc, cursor, line, pos
            pos = {line: 0, ch: 0}
            var suggestionsStatus = false
            var docLang = "python"
            var suggestionDisplayed = false
            var isReturningSuggestion = false
            document.addEventListener("keydown", (event) => {
            setTimeout(()=>{
              editor = event.target.closest('.CodeMirror');
              if (editor){
                const codeEditor = editor.CodeMirror
                if(!editor.classList.contains("added-tab-function")){
                  editor.classList.add("added-tab-function")
                  codeEditor.removeKeyMap("Tab")
                  codeEditor.setOption("extraKeys", {Tab: (cm)=>{
        
                    if(returnedSuggestion){
                      acceptTab(returnedSuggestion)
                    }
                    else{
                      cm.execCommand("defaultTab")
                    }
                  }})
                }
                doc = editor.CodeMirror.getDoc()
                cursor = doc.getCursor()
                line = doc.getLine(cursor.line)
                pos = {line: cursor.line, ch: line.length}
        
                if(cursor.ch > 0){
                  savedChPos = cursor.ch
                }
        
                const fileLang = doc.getMode().name
                docLang = fileLang
                const commentSymbol = returnCommentSymbol(fileLang)
                if (event.key == "?"){
                  var lastLine = line
                  lastLine = lastLine.slice(0, savedChPos - 1)
        
                  if(lastLine.trim().startsWith(commentSymbol[0])){
                    lastLine += " "+fileLang
                    lastLine = lastLine.split(commentSymbol[0])[1]
                    window.postMessage({source: 'getQuery', payload: { data: lastLine } } )
                    isReturningSuggestion = true
                    displayGrey("\nBlackbox loading...")
                  }
                }else if(event.key === "Enter" && suggestionsStatus && !isReturningSuggestion){
                  var query = doc.getRange({ line: Math.max(0,cursor.line-10), ch: 0 }, { line: cursor.line, ch: line.length })
                  window.postMessage({source: 'getSuggestion', payload: { data: query, language: docLang } } )
                  displayGrey("Blackbox loading...")
                }else if(event.key === "ArrowRight" && returnedSuggestion){
                  acceptTab(returnedSuggestion)
                }else if(event.key === "Enter" && isReturningSuggestion){
                  displayGrey("\nBlackbox loading...")
                }else if(event.key === "Escape"){
                  displayGrey("")
                }
              }
            }, 0)
            })
        
            function acceptTab(text){
            if (suggestionDisplayed){
              displayGrey("")
              doc.replaceRange(text, pos)
              returnedSuggestion = ""
              updateSuggestionStatus(false)
            }
            }
            function acceptSuggestion(text){
              displayGrey("")
              doc.replaceRange(text, pos)
              returnedSuggestion = ""
              updateSuggestionStatus(false)
            }
            function displayGrey(text){
              if(!text){
                document.querySelector(".blackbox-suggestion").remove()
                return
              }
              var el = document.querySelector(".blackbox-suggestion")
              if(!el){
                el = document.createElement('span')
                el.classList.add("blackbox-suggestion")
                el.style = 'color:grey'
                el.innerText = text
              }
              else{
                el.innerText = text
              }
              
              var lineIndex = pos.line;
              editor.getElementsByClassName('CodeMirror-line')[lineIndex].appendChild(el)
            }
            function updateSuggestionStatus(s){
              suggestionDisplayed = s
              window.postMessage({source: 'updateSuggestionStatus', status: suggestionDisplayed, suggestion: returnedSuggestion})
            }
            window.addEventListener('message', (event)=>{
            if (event.source !== window ) return
            if (event.data.source == 'return'){
              isReturningSuggestion = false
              const formattedCode = formatCode(event.data.payload.data)
              returnedSuggestion = formattedCode
              displayGrey(formattedCode)
              updateSuggestionStatus(true)
            }
            if(event.data.source == 'suggestReturn'){
              returnedSuggestion = event.data.payload.data
              displayGrey(event.data.payload.data)
              updateSuggestionStatus(true)
            }
            if(event.data.source == 'suggestionsStatus'){
              suggestionsStatus = event.data.payload.enabled
            }
            if(event.data.source == 'acceptSuggestion'){
              
              acceptSuggestion(event.data.suggestion)
            }
            })
            document.addEventListener("keyup", function(){
              returnedSuggestion = ""
              updateSuggestionStatus(false)
            })
            function formatCode(data) {
              if (Array.isArray(data)) {
                var finalCode = ""
                var pairs = []
            
                const commentSymbol = returnCommentSymbol(docLang)
                data.forEach((codeArr, idx) => {
                  const code = codeArr[0]
                  var desc = codeArr[1]
                  const descArr = desc.split("\n")
                  var finalDesc = ""
                  descArr.forEach((descLine, idx) => {
                    const whiteSpace = descLine.search(/\S/)
                    if (commentSymbol.length < 2 || idx === 0) {
                      finalDesc += insert(descLine, whiteSpace, commentSymbol[0])
                    }
                    if (commentSymbol.length > 1 && idx === descArr.length - 1) {
                      finalDesc = finalDesc + commentSymbol[1] + "\n"
                    }
                  })
            
                  finalCode += finalDesc + "\n\n" + code
                  pairs.push(finalCode)
                })
                return "\n"+pairs.join("\n")
              }
            
              return "\n"+data
            }
            
            function insert(str, index, value) {
              return str.substr(0, index) + value + str.substr(index)
            }
          </script>
<!--ปิดตาราง-->
<br><br><br>

        <section class="text-center section-padding contact-wrap" id="ccontact">
		  <!-- To Top Button -->
          <a href="admin_main.php#top" class="up-btn"><i class="fa fa-chevron-up"></i></a>
          <div class="container">
		    <!-- Headline -->
            <div class="row">
              <div class="col-md-12">
                <h1 class="arrow">Contact <span style="color:#00ff90">the</span> developer</h1>
              </div>
            </div>
            <div class="row contact-details">
			  <!-- Adress Box -->
        <div class="col-md-4">
                <div class="dark-box box-hover">
                  <a href="https://web.facebook.com/profile.php?id=100090767058801" target="_blank">
                  <h2><i class="fa fa-facebook"></i><span>facebook</span></h2>
                  <p><span style="color:#F3F5F8">_</span><br>PBTNN ระบบคำนวณค่าไฟสำหรับหอพัก<br><span style="color:#F3F5F8">_</span></p></a>
                </div>
              </div>
			  <!-- E-Mail Box -->
        <div class="col-md-4">
          <div class="dark-box box-hover">
            <a href="https://mail.google.com" target="_blank">
            <h2><i class="fa fa-paper-plane"></i><span>Email</span></h2></a>
            <p><span style="color:#F3F5F8">_</span><a href="https://mail.google.com" target="_blank"><br>PBTNN31@gmail.com<br></a><span style="color:#F3F5F8">_</span></p>
          </div>
        </div>
			  <!-- Phone Number Box -->
              <div class="col-md-4">
                <div class="dark-box box-hover">
                  <h2><i class="fa fa-mobile"></i><span>Phone</span></h2>
                  <p>0909923331<br>0864117841<br>0929263904</p>
                </div>
              </div>
            </div>
            <br>
          </div>
			
		
		
		
		<!-- ==========================
        FOOTER SECTION
        =========================== -->
        <footer>
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>Thank you for visiting.
              </div>
            </div>
          </div>
        </footer>
		<!-- ==========================
        FOOTER SECTION END
        =========================== -->		
		
		
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- SmoothScroll -->           
    <script type="text/javascript" src="assets/smoothscroll/smoothscroll.js"></script>
    <!-- Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/waypoints.min.js"></script>
    <!-- classie.js -->
	<script src="js/classie.js"></script>
    <!-- FlexSlider -->
    <script src="assets/flexslider/jquery.flexslider.js"></script>
	<!-- Modernizr -->
    <script src="js/modernizr.js"></script>
	<!-- Text Rotator -->
	<script src="assets/textrotator/jquery.simple-text-rotator.js"></script>
	<!-- Lightbox.js -->
    <script src="assets/lightbox/js/lightbox.min.js"></script>
    <!-- Google Maps --> 
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDeKBBPJTG3v5w3cNPAgM6ZsJiPyL1mP_o&amp;sensor=false"></script>
	<!-- Theme JavaScript Core -->
	<script src="js/main.js"></script>
	<script src="js/script.js"></script>
	
	<!-- TEXT ROTATOR SETTINGS -->
    <script type="text/javascript">
    $(".rotate").textrotator({
      animation: "fade", // You can pick the way it animates when rotating through words. Options are dissolve (default), fade, flip, flipUp, flipCube, flipCubeUp and spin.
      separator: ",", // If you don't want commas to be the separator, you can define a new separator (|, &, * etc.) by yourself using this field.
      speed: 2000 // How many milliseconds until the next word show.
    });
    </script>
	
    </body>
</html>