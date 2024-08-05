
    <?php
    session_start();
    if (!isset($_SESSION['user_id'])) {
        header("Location: login.php");
        exit();
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <title>Traduction Vocale</title>
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta content="" name="keywords">
            <meta content="" name="description">
            <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
            <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
            <!-- Customized Bootstrap Stylesheet -->
            <link href="css/bootstrap.min.css" rel="stylesheet">

            <!-- Template Stylesheet -->
            <link href="css/style.css" rel="stylesheet">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
            <link href="assets/lib/animate/animate.min.css" rel="stylesheet">
            <link href="assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="assets/css/bootstrap.min.css" rel="stylesheet">
            <link href="assets/css/style1.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
            <!-- Bootstrap core CSS -->
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="assets/css/fontawesome.css">
            <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
            <link rel="stylesheet" href="assets/css/owl.css">
            <link rel="stylesheet" href="assets/css/animate.css">
            <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
            <!-- Google Web Fonts -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Playfair+Display:wght@400;500;600&display=swap" rel="stylesheet"> 
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
                <link href="lib/animate/animate.min.css" rel="stylesheet">
            <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
            <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/logo.png"> 

            <link rel="manifest" href="assets/img/favicons/manifest.json">
            <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
            <meta name="theme-color" content="#ffffff">
                    <link rel="stylesheet" href="vendors/swiper/swiper-bundle.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;family=Rubik:ital,wght@0,300..900;1,300..900family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">
            <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
            <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
            <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
            <link rel="stylesheet" href="vendors/swiper/swiper-bundle.min.css">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&amp;family=Rubik:ital,wght@0,300..900;1,300..900family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap" rel="stylesheet">
            <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
            <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
            <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
            <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
            
        </head>
        <style>
    .contact-info span:first-child {
        margin-bottom: 10px; /* Adjust the value as needed */
    }
    .navbar-nav .nav-link {
        color: white !important;
    }
    
</style>


        <body>
            <!-- Spinner Start -->
            <div id="spinner" class="show position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
                <div class="spinner-grow text-primary" role="status"></div>
            </div>
            <!-- Spinner End -->

            <!-- Topbar Start partie blanc -->
            <div class="container-fluid  py-2 d-none d-md-flex">
                <div class="container">
                    <div class="d-flex justify-content-between topbar">
                        <div id="note" class="d-none d-xl-flex" style="font-size: 30px;width:max-content;"><small>ⵜⴰⵣⵓⵔⵜ ⵜⴰⵎⵉⵍⴰ ⴱⵉⵏ ⵢⴷⵉⴽ، ⵜⴰⵀⵔⵓⴽⵜ ⵜⴰⵔⵓⴳⵜ ⵜⴰⵙⵔⵉⴰ - الفرصة بين يديك، تحدث بطلاقة وترجم بسرعة</small></div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->

            <!-- Navbar Start -->
            <div class="container-fluid" style="background-color: #e03116;">
    <div class="container-fluid">
        <nav class="navbar navbar-dark navbar-expand-lg py-0 w-100" style="width:1280px">
            <a href="index.html" class="navbar-brand d-flex align-items-center">
                <img src="img/logo t.png" alt="Logo" style="width: 60px; height: 60px;">
                <h1 class="text-white fw-bold d-block"><span>  Tamsint   Tifinagh</span><span>  Talk</span></h1>
            </a>
            <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse bg-transparent" id="navbarCollapse" >
                <div class="navbar-nav ms-auto mx-xl-auto p-0"style="color: white;">
                    <a href="#services-section" class="nav-item nav-link ">? من نحن</a>
                    <a href="#services-sections" class="nav-item nav-link">عبارات شائعة</a>
                    <a href="#service-section" class="nav-item nav-link">فيديو تعليمي</a>
                    <a href="login.php" class="nav-item nav-link">تسجيل الدخول</a>
                    <a href="logout.php" class="nav-item nav-link">تسجيل الخروج</a>
                </div>
            </div>
            <div class="d-none d-xl-flex flex-shirink-0">
                <div id="phone-tada" class="d-flex align-items-center justify-content-center me-4">
                    <a href="" class="position-relative animated tada infinite">
                        <i class="fa fa-microphone-alt text-white fa-2x"></i>
                        <div class="position-absolute" style="top: -7px; left: 20px;">
                            <span><i class="fa fa-comment-dots text-secondary"></i></span>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-column pe-4 border-end contact-info">
                    <span class="text-white-50">هل لديك أي أسئلة؟</span>
                    <span class="text-secondary">الاتصال : 053765442322</span>
                </div>
              
            </div>
        </nav>
    </div>
</div>

            <!-- Navbar End -->

            <!-- Carousel Start -->
            <div class="container-fluid px-0">
    <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
            <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/slider1.png" class="img-fluid w-100" alt="First slide" style="height: 700px; object-fit: cover;">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">خدماتكم راحتنا ⴿⴸⵎⵟⴽⵎ ⵜⵛⵀⴽⴼⴻ </h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInRight">خدماتكم راحتنا ⴿⴸⵎⵟⴽⵎ ⵜⵛⵀⴽⴼⴻ</h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">تطبيق لترجمة النصوص بين الأمازيغية والعربية. يسمح لأي شخص يتحدث الأمازيغية بترجمة النص إلى العربية. هدفنا جلب المزيد من الزوار لموقعنا وتحويلهم إلى مستخدمين.</p>
                        <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">قراءة المزيد</button></a>
                        <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">اتصل بنا</button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/slider1.png" class="img-fluid w-100" alt="Second slide" style="height: 700px; object-fit: cover;">
                <div class="carousel-caption">
                    <div class="container carousel-content">
                        <h6 class="text-secondary h4 animated fadeInUp">خدماتكم راحتنا ⴿⴸⵎⵟⴽⵎ ⵜⵛⵀⴽⴼⴻ </h6>
                        <h1 class="text-white display-1 mb-4 animated fadeInRight">خدماتكم راحتنا ⴿⴸⵎⵟⴽⵎ ⵜⵛⵀⴽⴼⴻ</h1>
                        <p class="mb-4 text-white fs-5 animated fadeInDown">تطبيق لترجمة النصوص بين الأمازيغية والعربية. يسمح لأي شخص يتحدث الأمازيغية بترجمة النص إلى العربية. هدفنا جلب المزيد من الزوار لموقعنا وتحويلهم إلى مستخدمين.</p>
                        <a href="" class="me-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn1 animated fadeInLeft">قراءة المزيد</button></a>
                        <a href="" class="ms-2"><button type="button" class="px-4 py-sm-3 px-sm-5 btn btn-primary rounded-pill carousel-content-btn2 animated fadeInRight">اتصل بنا</button></a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
            <!-- Carousel End -->
            <!-- Section hey user  -->
            <div class="container mt-0">
    <div class="row justify-content-center align-items-center" style="margin-top: -50px;">
        <div class="col-md-6">
            <img src="img/Welcome2.png" class="" alt="Image"> <!-- Adjust the width here -->
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <p class="card-text" style="font-size: 30px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                        نحن مسرورون بوجودك بيننا <?php echo htmlspecialchars($_SESSION['user_name']); ?> مرحبًا
                    </p>
                    <p class="card-text" style="font-size: 35px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
                        لا تتردد في استكشاف خدماتنا والاتصال بنا إذا كان لديك أي أسئلة.
                    </p>
                    <a href="#" class="btn btn-primary">اكتشف خدماتنا</a>
                </div>
            </div>
        </div>
    </div>
</div>



           <!-- Section de traduction  -->
           <div class="">
    <div class="row " style="margin: 20px; margin-top: -50px; margin-left:250px;">
        <div class="col-md-6"> <!-- Adjust column classes as needed -->
            <p class="" style="font-size: 30px; font-weight: bold; font-family: 'Your Great Font', sans-serif;">
                ⵜⵔⴰⵊⵎⵢⴰ ⵏ ⵜⵉⴷⵉⵎⵢⴰ ⵜⴰⵎⵓⵔⵜ ⵜⴰⵏⵜⵉⵏⵜ ⵜⴰⵄⵓⵙⴰⵔ ⵓⵙⴰⵙⴰ 
            </p>
        </div>
        <div class="col-md-6">
            <p class="" style="font-size: 30px; color: #ee4217; font-weight: bold; font-family: 'Your Great Font', sans-serif;">
                حصل على الترجمة المطلوبة لأي كلمة تحتاجها، بكل سهولة
            </p>
        </div>
    </div>
</div>


<div class="p-7 m-9" style="margin-top: 30px;">
    <br><br>
    <div class="row align-items-end" style="margin-top: -170px;">
        <div class="col">
        <label for="spokenWord" style="font-weight: bold; font-size: 24px;">
        الكلمة المنطوقة / ⵎⵓⵜ ⴱⵔⵓⵏⵓⵏⵉⵙ:
        </label>            <div class="input-group">
                <input type="text" class="form-control" id="spokenWord" readonly style="height: 300px; width: 500px; font-size: 50px; font-family: Arial, sans-serif;">
            </div>
        </div>
        <div class="col-auto">
            <button class="btn btn-primary btn-lg" onclick="startRecording()" style="width: 50px; height: 70px; margin-top: -250px;">
                <i class="fas fa-microphone fa-2x"></i> <!-- Icône de microphone -->
            </button>
            <button class="btn btn-primary btn-lg" onclick="clearInput('spokenWord', 'translatedWord')" style="width: 50px; height: 70px; margin-top: -250px;">
    <i class="fas fa-trash fa-2x"></i> <!-- Icône de microphone -->
</button>
        </div>
        <div class="col">
        <label for="translatedWord" style="font-weight: bold; font-size: 24px;">
    الكلمة المترجمة / ⵎⵓⵜ ⵜⵔⴰⴷⵓⵢⵜ:
</label>
            <div class="input-group">
                <input type="text" class="form-control" id="translatedWord" readonly style="height: 300px; width: 500px; font-size: 50px; font-family: Arial, sans-serif;">
            </div>
        </div>
    </div>
</div>

               


    </div>
            </div>
            
            </div>
        <script>
     var language = "arabe"; // Langue par défaut
var currentInput = "spokenWord"; // Champs ou input qui est actif
// debut de fonction le click

// elle autorise utilisation du micro stream
// La fonction startRecording utilise l'API de reconnaissance vocale WebKit pour écouter et transcrire la parole.
function startRecording() {
    navigator.mediaDevices.getUserMedia({ audio: true })
    .then(function(stream) {
        var recognition = new window.webkitSpeechRecognition();
        recognition.lang = "ar-SA";
        recognition.start();

        recognition.onresult = function(event) {
            var speechResult = event.results[0][0].transcript;
            document.getElementById(currentInput).value = speechResult;
            // XMLHttpRequest est une requete envoyer 
            // La requête envoyée au serveur pour obtenir les traductions  est une requête HTTP GET
            // Pour communiquer avec le serveur
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        var response = JSON.parse(xhr.responseText);

                        if (response.error) {
                            console.error(response.error);
                        } else {
                            document.getElementById('translatedWord').value = response.tifinagh;
                            document.getElementById('spokenWord').value = response.francais;

                            var audioTable = {
                                "reference1": "Audio en tifinagh 1",
                                "reference2": "Audio en tifinagh 2"
                            };
                            var audioReference = audioTable[response.tifinagh];

                            var audio = new SpeechSynthesisUtterance(audioReference);
                            audio.lang = 'fr-FR';
                            speechSynthesis.speak(audio);
                        }
                    } else {
                        console.error(xhr.responseText);
                    }
                }
            };
            xhr.open("GET", "process.php?word=" + encodeURIComponent(speechResult) + "&language=" + language, true);
            xhr.send();
        }
    })
    .catch(function(err) {
        console.error('Erreur :', err);
    });
}
function clearInput(inputId1, inputId2) {
    document.getElementById(inputId1).value = '';
    document.getElementById(inputId2).value = '';
}
       </script>
                    <!--  End Section de traduction  -->

            <!-- Services Start -->
            <div id="services-section">
            <div class="container-fluid services py-5 mb-5"style="margin-top: -150px;">
                <div class="p-5 m-3" >
                    <div class="text-center mx-auto pb-5 wow fadeIn" data-wow-delay=".3s" style="max-width: 600px;">
                        <h5 class="text-primary">خدماتنا - ⴼⴳⵓⵏⵎⵛ </h5>
                        <h1>ⴰⵙⵙⵓⵔⵓⵙ ⵜⵉⴼⵉⵏ ⵜⴰⵏⵓⵔⵉⵜ ⵏ ⵜⴰⵎⴳⴳⴰⵔⵜⵉⵜⵏ</h1>
                    </div>
                    <div class="">
                    <div class="row g-3 services-inner" >
                        <div class=" col-4  wow fadeIn" data-wow-delay=".3s">
                            <div class="services-item bg-light">
                                <div class="p-4 text-center services-content">
                                    <div class="services-content-icon">
                                        <i class="fa fa-language fa-7x mb-4 text-primary"></i>
                                        <h4 class="mb-3">ترجمة فورية - ⵜⵉⴼⵉⵏⴰⵣⵜ ⵉⵎⵖⵉ ⵉⵎⵖⵉⵍⵉⵎ</h4>
                                        <p class="mb-4">قم بترجمة الكلمات المنطوقة من العربية إلى التيفيناغ بسهولة وسرعة. خدمتنا تستخدم تقنيات التعرف على الصوت لتحويل كلامك إلى نص مكتوب في الوقت الحقيقي.</p>
                                        <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill"style="background-color: #ba2114;">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4  wow fadeIn" data-wow-delay=".5s" >
                            <div class="services-item bg-light">
                                <div class="p-4 text-center services-content">
                                    <div class="services-content-icon">
                                        <i class="fa fa-microphone fa-7x mb-4 text-primary"></i>
                                        <h4 class="mb-3">تعرف على الصوت - ⴰⵣⴰⴼⴼⵉ ⴰⴳⵔⴰⵡ</h4>
                                        <p class="mb-4">استمتع بخدمة تعرف على الصوت الدقيقة والموثوقة التي تحول كلامك المنطوق إلى نص مكتوب. مثالي للمستخدمين الذين يرغبون في التواصل بلغاتهم الأصلية.</p>
                                        <a href="" class="btn btn-secondary text-white px-5 py-3 rounded-pill"style="background-color: #ba2114;">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-4  wow fadeIn data-wow-delay=".7s" >
                            <div class="services-item bg-light">
                                <div class="p-4 text-center services-content">
                                    <div class="services-content-icon">
                                        <i class="fas fa-search fa-7x mb-4 text-primary"></i>
                                        <h4 class="mb-3">اكتشفوا مجموعة متنوعة من الكلمات والعبارات والثقافات دون الحاجة للبحث</h4>
                                        <p class="mb-4">نحن نقدم لكم مجموعة متنوعة من الكلمات والعبارات والثقافات دون الحاجة للبحث.</p>
                                        <a href="" class="btn text-white px-5 py-3 rounded-pill" style="background-color: #ba2114;">اقرأ المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
</div>
            <!-- Services End -->
        <!-- Section des mot plus utilises -->
        <div id="services-sections">
        <div class="feature py-5">
    <div class="container py-5">
        <div class="section-title mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="sub-style" style="color:#ba2114;">
                <h4 class="sub-title px-3 mb-0" style="font-size: 60px;color:#ba2114;">أكثر الجمل و الكلمات المشهورة</h4>
            </div>
            <h1 class="display-3 mb-4">ⴰⴽⵝⵔ ⵏ ⵉⵎⴰⵍⵉⵔ ⵏ ⴰⵔⵉⵔ ⴽⵓⵍⵎⴰⵡⴰⵜ ⵉⵎⵜⴰⵔⵉⵔ</h1>
        </div>
        <div class="container">
            <div class="row g-4 justify-content-center">
                <!-- First Row -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row-cols-1 feature-item p-4" style="background-color: #fef4ee; height: 250px;">
                        <div class="col-12">
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">ⵎⴰⵜⴰⵖ ⵜⵉⴷⴷⴰⵔⵜ؟</h5>
                                <p class="mb-0">كيف حالك؟</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row-cols-1 feature-item p-4" style="background-color: #fef4ee; height: 250px;">
                        <div class="col-12">
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">ⵍⵃⴰⵎⴷⵓⵍⵉⵍⵍⴰⵀ، ⵜⴰⵏⵎⵉⵔⵜ</h5>
                                <p class="mb-0">أنا بخير، شكرا</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row-cols-1 feature-item p-4" style="background-color: #fef4ee; height: 250px;">
                        <div class="col-12">
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">ⵎⴰⵜⴰⵖ ⵜⵉⵙⵎⴰ</h5>
                                <p class="mb-0">ما اسمك؟</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="row-cols-1 feature-item p-4" style="background-color: #fef4ee; height: 250px;">
                        <div class="col-12">
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">ⵓⵔⵉⵖ ⴰⵎⴰⵏ</h5>
                                <p class="mb-0">أريد الماء</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Second Row -->
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="row-cols-1 feature-item p-4" style="background-color: #fef4ee; height: 250px;">
                        <div class="col-12">
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">ⵜⴰⵏⵎⵉⵔⵜ ⴰⵔⵣⴰⵏ</h5>
                                <p class="mb-0">شكرا جزيلا</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="1.1s">
                    <div class="row-cols-1 feature-item p-4" style="background-color: #fef4ee; height: 250px;">
                        <div class="col-12">
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">ⴰⵔ ⵜⵉⵎⵍⵉⵍⵉⵜ</h5>
                                <p class="mb-0">إلى اللقاء</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="1.3s">
                    <div class="row-cols-1 feature-item p-4" style="background-color: #fef4ee; height: 250px;">
                        <div class="col-12">
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">ⴷⵔⵉⵏⵉⴽ ⵜⴰⵎⵙⵉⵔⵜ</h5>
                                <p class="mb-0">أتمنى لك يومًا سعيدًا</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="1.5s">
                    <div class="row-cols-1 feature-item p-4" style="background-color: #fef4ee; height: 250px;">
                        <div class="col-12">
                            <div class="feature-content d-flex flex-column">
                                <h5 class="mb-4">ⵎⴰⵜⴰⵔⵜ ⴰⵡⴰⴷ</h5>
                                <p class="mb-0">ما هو الوقت؟</p>
                            </div>
                        </div>
                    </div>
                </div>
              
               
            </div>
        </div>
    </div>
</div>
</div>

      




        
        <!-- /* Section de Video  */ -->
        <!-- <div id="service-section">
    <section class="experience position-relative overflow-hidden" style="background-color: #e03116 !important;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="position-relative z-1 text-center mb-8 mb-lg-9 video-player-paused" data-video-player-container="data-video-player-container">
                        <video class="w-100 h-100 rounded-4" src="assets/video/myvid.mp4" poster="chemin/vers/image-poster.jpg" type="video/mp4" data-video-player="data-video-player"></video>
                        <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 rounded-4 bg-1100 object-cover" data-overlay="data-overlay"> </div>
                        <button class="btn play-button position-absolute justify-content-center align-items-center bg-white rounded-circle cursor-pointer" data-play-button="data-play-button">
                            <img class="play-icon w-25" src="assets/img/illustrations/play-solid.svg" alt="" data-play-icon="data-play-icon" />
                            <img class="pause-icon w-25" src="assets/img/illustrations/pause-solid.svg" alt="" data-pause-icon="data-pause-icon" />
                        </button>
                        <div class="position-absolute dots d-none d-sm-block"><img class="img-fluid w-100" src="assets/img/illustrations/Dots.webp" alt="" /></div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-7">
                    <h2 class="fs-4 fs-lg-3 fw-bold text-center text-white mb-5 mb-lg-9 lh-sm">Wⵔⵅⵃⵃ ⵃⵍⵣⵜ ⵛⴹⴷⴳⴱⴱⴱ ⴹⴹⴻⴼⵙ ⵀⵄ</h2>
                </div>
            </div>
        </div>
        <div class="position-absolute top-0 start-0 end-0">
            <div class="bg-white py-3 py-md-9 py-xl-10"> </div><img class="wave" src="assets/img/illustrations/Wave_2.svg" alt="" />
        </div>
    </section>
</div> -->
<section class="experience position-relative overflow-hidden" id="service">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="position-relative z-1 text-center mb-8 mb-lg-9 video-player-paused" data-video-player-container="data-video-player-container"><video class="w-100 h-100 rounded-4" src="assets/video/myvid.mp4" poster="assets/img/Hero/des.png" type="video/mp4" data-video-player="data-video-player"></video>
                    <div class="overlay position-absolute top-0 bottom-0 start-0 end-0 rounded-4 bg-1100 object-cover" data-overlay="data-overlay"> </div><button class="btn play-button position-absolute justify-content-center align-items-center bg-white rounded-circle cursor-pointer" data-play-button="data-play-button"> <img class="play-icon w-25" src="assets/img/illustrations/play-solid.svg" alt="" data-play-icon="data-play-icon" /><img class="pause-icon w-25" src="assets/img/illustrations/pause-solid.svg" alt="" data-pause-icon="data-pause-icon" /></button>
                    <div class="position-absolute dots d-none d-sm-block"><img class="img-fluid w-100" src="assets/img/illustrations/Dots.webp" alt="" /></div>
                  </div>
                </div>
                <div class="col-md-8 col-lg-7">
                    <h2 class="fs-4 fs-lg-3 fw-bold text-center text-white mb-5 mb-lg-9 lh-sm">Wⵔⵅⵃⵃ ⵃⵍⵣⵜ ⵛⴹⴷⴳⴱⴱⴱ ⴹⴹⴻⴼⵙ ⵀⵄ</h2>
                </div>
               
              </div>
            </div>
            <div class="position-absolute top-0 start-0 end-0">
              <div class="bg-white py-3 py-md-9 py-xl-10"> </div><img class="wave" src="assets/img/illustrations/Wave_2.svg" alt="" />
            </div>
          </section>


    
        
        
        </div><button class="btn scroll-to-top text-white rounded-circle d-flex justify-content-center align-items-center bg-primary" data-scroll-top="data-scroll-top"><span class="uil uil-angle-up"></span></button>
        
    </div>
    </main><!-- ===============================================-->

            <footer style="background-color: #ee4217 !important;">
            <div class="container">
                <div class="col-lg-12">
                <p>Copyright © 2036 Tifinagh Organization. All rights reserved. &nbsp;&nbsp;&nbsp; Design: <a href="https://templatemo.com" rel="nofollow" target="_blank">TTT</a> Distribution: <a href="https://themewagon.com" rel="nofollow" target="_blank">TAMSINT TIFINAGH TALK</a></p>
                </div>
            </div>
            </footer>

            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="lib/wow/wow.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/waypoints/waypoints.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="vendors/popper/popper.min.js"></script>
            <script src="vendors/bootstrap/bootstrap.min.js"></script>
            <script src="vendors/is/is.min.js"></script>
            <script src="vendors/countup/countUp.umd.js"></script>
            <script src="vendors/swiper/swiper-bundle.min.js"></script>
            <script src="vendors/lodash/lodash.min.js"></script>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
            <script src="assets/js/theme.js"></script>
            <script src="vendors/popper/popper.min.js"></script>
            <script src="vendors/bootstrap/bootstrap.min.js"></script>
            <script src="vendors/is/is.min.js"></script>
            <script src="vendors/countup/countUp.umd.js"></script>
            <script src="vendors/swiper/swiper-bundle.min.js"></script>
            <script src="vendors/lodash/lodash.min.js"></script>
            <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
            <script src="assets/js/theme.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="assets/lib/wow/wow.min.js"></script>
            <script src="assets/lib/easing/easing.min.js"></script>
            <script src="assets/lib/waypoints/waypoints.min.js"></script>
            <script src="assets/lib/owlcarousel/owl.carousel.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="js/main.js"></script>
            <script src="assets/js/main.js"></script>
            <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/countup/countUp.umd.js"></script>
    <script src="vendors/swiper/swiper-bundle.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>
        </body>

    </html>