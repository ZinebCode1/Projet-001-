<?php
require 'db.php'; // Assurez-vous que ce fichier contient la connexion à la base de données

$error_message = '';
$success_message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    // Inscription
    $nomUser = trim($_POST['nomUser']);
    $emailUser = trim($_POST['emailUser']);
    $passwordUser = trim($_POST['passwordUser']);
    $hashed_password = password_hash($passwordUser, PASSWORD_DEFAULT);

    // Vérifier si l'email existe déjà
    $stmt = $pdo->prepare('SELECT * FROM utilisateur WHERE emailUser = ?');
    $stmt->execute([$emailUser]);
    if ($stmt->fetch()) {
        $error_message = "البريد الإلكتروني مستخدم بالفعل.";
    } else {
        // Insérer un nouvel utilisateur
        $stmt = $pdo->prepare('INSERT INTO utilisateur (nomUser, emailUser, passwordUser) VALUES (?, ?, ?)');
        if ($stmt->execute([$nomUser, $emailUser, $hashed_password])) {
            $success_message = "Inscription réussie. Vous pouvez maintenant vous connecter.";
        } else {
            $error_message = "خطأ أثناء التسجيل.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/logo.png"> 


<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">    <style>
        .gradient-custom-2 {
            background: #fccb90;
            background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
            background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
        }
        @media (min-width: 768px) {
            .gradient-form {
                height: 100vh !important;
            }
        }
        @media (min-width: 769px) {
            .gradient-custom-2 {
                border-top-right-radius: .3rem;
                border-bottom-right-radius: .3rem;
            }
        }
    </style>
</head>
<body>
<section class="h-100 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

              <div class="text-center">
                                    <img src="img\logo t.png"
                                         style="width: 185px;" alt="logo">
                                    <h4 class="mt-1 mb-5 pb-1">  TAMSINT TIFINAGH TALK </h4>
                                </div>

                <form method="post" action="register.php">
                <p>  ! يرجى إنشاء حسابك  </p>
                <?php
                  if ($error_message) {
                      echo '<p style="color:red;">' . $error_message . '</p>';
                  }
                  if ($success_message) {
                      echo '<p style="color:green;">' . $success_message . '</p>';
                  }
                  ?>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="text" id="register-nomUser" name="nomUser" class="form-control" placeholder="الاسم الكامل" required />
                    <label class="form-label" for="register-nomUser">الاسم</label>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="register-emailUser" name="emailUser" class="form-control" placeholder="عنوان البريد الإلكتروني" required />
                    <label class="form-label" for="register-emailUser">البريد الإلكتروني</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="register-passwordUser" name="passwordUser" class="form-control" required />
                    <label class="form-label" for="register-passwordUser">كلمة المرور</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" name="register">تسجيل</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                  <p class="mb-0 me-2"> لديك حساب بالفعل؟</p>
                  <a href="login.php" class="btn btn-outline-danger">تسجيل الدخول</a>
                  </div>
                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
              <H4 class="mb-4"><strong>نحن أكثر من مجرد منصة</strong></h4>
              <p class=" mb-0" style="font-size: 20px;">نحن نقدم خدماتنا بأقصى درجات الاحترافية والجودة. نحن نؤمن بأن العملاء هم في قلب عملنا ونسعى جاهدين لتلبية احتياجاتهم بكل فخر وتميز. يقدم فريقنا من المتخصصين حلولًا مبتكرة ومخصصة لتلبية متطلباتكم.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="js/bootstrap.bundle.min.js"></script> <!-- Assurez-vous d'inclure Bootstrap JS -->
</body>
</html>
