<?php

require_once 'php/DatalinkSofab.php';
require_once 'php/Templates.php';

$url = "";
$token = "";

$datalink = new DatalinkSofab($url, $token);


/* Caricamento dati */
$collaborators = [];
try {
    $collaborators = $datalink->getCollaborators();
} catch (Exception $e) {
    echo "Si è verificato un errore: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html data-bs-theme="light" lang="it">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>sofabstudio</title>
    <meta property="og:description" content="Con me aziende e professionisti migliorano la loro comunicazione e presenza online. Branding, Comunicazione e Social Media.">
    <meta property="og:type" content="website">
    <meta property="og:title" content="So Fab Studio - Comunicazione &amp; Marketing">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon.png" media="(prefers-color-scheme: dark)">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Palmer%20Lake%20Print.css">
    <link rel="stylesheet" href="assets/css/Peanut%20Donuts.css">
    <link rel="stylesheet" href="assets/css/Space%20Grotesk.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/Hero-Clean-images.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="background: #FFB900;font-family: 'Peanut Donuts';padding-top: 150px;">
    <nav class="navbar navbar-expand-md fixed-top bg-body py-2" style="width: 100vw;background: #FFB900 !important;padding-right: 12px;">
        <div class="container"><a class="navbar-brand d-flex align-items-center pulse animated"><img src="assets/img/Logo.png"></a>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item" style="padding-right: 0;padding-left: 0;"><a class="nav-link active" href="#chi-sono" style="font-size: 25px;padding-right: 15px;padding-left: 15px;">chi sono</a></li>
                    <li class="nav-item" style="font-size: 20px;padding-right: 0;padding-left: 0;"><a class="nav-link" href="#il-mio-network" style="color: var(--bs-navbar-active-color);font-size: 25px;padding-right: 15px;padding-left: 15px;">network</a></li>
                    <li class="nav-item" style="font-size: 20px;"><a class="nav-link" href="#progetti" style="color: var(--bs-navbar-active-color);font-size: 25px;padding-right: 15px;padding-left: 15px;">progetti</a></li>
                    <li class="nav-item" style="font-size: 20px;"><a class="nav-link" href="#contatti" style="color: var(--bs-navbar-active-color);font-size: 25px;padding-left: 15px;padding-right: 15px;">contatti</a></li>
                </ul>
                <ul class="list-inline" style="margin-bottom: 1px;padding-top: 0px;padding-right: 15px;padding-left: 15px;">
                    <li class="list-inline-item me-4"><a href="https://www.linkedin.com/in/fabriziosomma/" style="text-decoration:none; color:#000000;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-linkedin">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401m-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4"></path>
                            </svg></a></li>
                    <li class="list-inline-item me-4"><a href="https://www.tiktok.com/@sofabstudio" style="text-decoration:none; color:#000000;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-tiktok">
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"></path>
                            </svg></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/sofabstudio/" style="text-decoration:none; color:#000000;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"></path>
                            </svg></a></li>
                </ul>
            </div><button data-bs-target="#navcol-2" data-bs-toggle="collapse" class="navbar-toggler"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
        </div>
    </nav>
    <div class="container py-0 py-xl-0">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-4" style="transform: scale(1.10);"><img class="rounded img-fluid w-100 fit-cover" data-bss-hover-animate="shake" style="min-height: 300px;transform: scale(0.88);text-align: left;padding-left: 0px;" src="assets/img/Scooter_black%201.png"></div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div style="max-width: 100%;padding: 48px;margin: 24px;">
                    <h2 class="text-uppercase fw-bold" id="chi-sono" style="font-size: 40px;color: var(--bs-emphasis-color);">chi sono?</h2>
                    <p class="my-3" style="font-family: 'Space Grotesk', sans-serif;font-size: 20px;color: var(--bs-emphasis-color);"><strong>So</strong>no <strong>Fab</strong>rizio.<br><br>Aiuto le aziende e i professionisti <br>a migliorare la loro comunicazione <br>e presenza online.<br><br><strong>Creo contenuti, </strong><br><strong>gestisco canali social </strong><br><strong>e campagne pubblicitarie.</strong><br><br><strong>Hai bisogno di una mano?</strong></p><a class="btn btn-primary btn-lg active me-2" role="button" style="font-family: 'Space Grotesk', sans-serif;font-size: 16pt;color: var(--bs-emphasis-color);background: #FFB0B5;border-radius: 35px;padding-right: 40px;padding-top: 2px;padding-bottom: 2px;padding-left: 40px;margin-top: 10px;border: 4px outset #FBECE2;text-align: center;" href="#contatti"><strong>contattami</strong></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-0" style="padding-left: 0px;padding-right: 0px;width: 100vw;max-width: 100vw;margin-top: 0px;padding-top: 0px;">
        <div class="text-center text-white-50 bg-primary border rounded border-0 p-3">
            <div class="row row-cols-2 row-cols-md-4">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                    <div class="p-3" style="text-align: center;">
                        <h4 class="display-5 fw-bold text-white mb-0" style="color: #000000 !important;text-align: center;padding-bottom: 0px;margin: auto;">BRANDING - COMUNICAZIONE - SOCIAL - WEBSITE</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-2 py-xl-1">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div style="max-width: 350px;margin: 24px;padding: 48px;">
                    <h2 class="text-uppercase fw-bold" id="il-mio-network" style="font-size: 40px;color: var(--bs-emphasis-color);">il mio network</h2>
                    <p class="my-3" style="font-family: 'Space Grotesk', sans-serif;font-size: 20px;width: 35vw;color: var(--bs-emphasis-color);">Sono una figura trasversale. <br>Posso aiutarti come <strong>Project Manager </strong><br>e avvalermi di un network di professionisti<strong> per migliorare la tua comunicazione.</strong><br><br><strong>Hai bisogno di un sito web? </strong><br><strong>Devi sviluppare logo e immagine coordinata?</strong><br><strong>Vuoi organizzare eventi e collaborazioni con altri brand?</strong><br><br>Troviamo la persona più adatta alle tue <br>esigenze e <strong>insieme portiamo avanti il progetto</strong>.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-4" style="transform: scale(1.10);"><img class="rounded img-fluid w-100 fit-cover" data-bss-hover-animate="tada" style="min-height: 300px;transform: scale(0.88);" src="assets/img/Peace_phone_B%201.png"></div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 row-cols-2 row-cols-md-4">

            <?php
                foreach ($collaborators as $collaborator) {
                    echo getColaboratorTemplate($collaborator["name"], $collaborator["jobTitle"], $collaborator["foto"]["url"], $collaborator["url"]);
                }
            ?>
            
        </div>
    </div>
    <div class="container py-2 py-xl-0" id="progetti">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5" style="transform: scale(1.10);"><img class="rounded img-fluid w-100 fit-cover" data-bss-hover-animate="pulse" style="min-height: 100%;transform: scale(0.88);text-align: left;padding-left: 0px;" src="assets/img/Laying_black%201.png"></div>
            </div>
            <div class="col-md-6 d-md-flex align-items-md-center">
                <div style="max-width: 100%;width: 50vw;margin: 24px;padding: 48px;">
                    <h2 class="text-uppercase fw-bold" style="font-size: 40px;color: var(--bs-emphasis-color);">i miei progetti</h2>
                    <p class="my-3" style="font-family: 'Space Grotesk', sans-serif;font-size: 20px;color: var(--bs-emphasis-color);">Per 6 anni ho lavorato a Milano per Studiolabo come Social Media Manager.<br><br>Ho gestito la comunicazione dei progetti Fuorisalone.it e Brera Design District.<br><br>Oggi lavoro come libero professionista.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gy-4 row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img style="width: 100%;height: 100%;"></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4 class="text-nowrap" style="font-family: 'Palmer Lake Print';font-size: 24px;color: var(--bs-emphasis-color);line-height: 20px;background: #FBECE2;border-radius: 35px;text-align: left;border-width: 0px;padding-left: 0px;margin-left: -0px;padding-right: 0px;margin-right: 0px;">lettera32 - bar | forno | catering</h4>
                        <h4 style="font-family: 'Palmer Lake Print';font-size: 40px;color: var(--bs-emphasis-color);line-height: 25px;">project manager, social media manger</h4>
                        <p style="font-family: 'Space Grotesk', sans-serif;font-size: 15px;color: var(--bs-emphasis-color);">Mi occupo di tutta la comunicazione delle attività legate al brand Lettera32.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img style="width: 100%;height: 100%;"></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4 class="text-nowrap" style="font-family: 'Palmer Lake Print';font-size: 24px;color: var(--bs-emphasis-color);line-height: 15px;background: #FBECE2;border-radius: 35px;">studio dentistico romano</h4>
                        <h4 style="font-family: 'Palmer Lake Print';font-size: 40px;color: var(--bs-emphasis-color);line-height: 25px;">project manager, social media manager</h4>
                        <p style="font-family: 'Space Grotesk', sans-serif;font-size: 15px;color: var(--bs-emphasis-color);">Mi occupo di tutta la comunicazione delle attività legate al brand Studio Dentistico Romano.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img style="width: 100%;height: 100%;"></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4 class="text-nowrap" style="font-family: 'Palmer Lake Print';font-size: 24px;color: var(--bs-emphasis-color);line-height: 15px;background: #FBECE2;border-radius: 35px;">maka - efoil school</h4>
                        <h4 style="font-family: 'Palmer Lake Print';font-size: 40px;color: var(--bs-emphasis-color);line-height: 25px;">content creator, consulente</h4>
                        <p style="font-family: 'Space Grotesk', sans-serif;font-size: 15px;color: var(--bs-emphasis-color);">Creazione di contenuti per Instagram e Tiktok e supporto strategico per eventi in collaborazione con realtà del food&amp;beverage.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img style="width: 100%;height: 100%;"></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4 class="text-nowrap" style="font-family: 'Palmer Lake Print';font-size: 24px;color: var(--bs-emphasis-color);line-height: 15px;background: #FBECE2;border-radius: 35px;">radical sorrento - bar</h4>
                        <h4 style="font-family: 'Palmer Lake Print';font-size: 40px;color: var(--bs-emphasis-color);line-height: 25px;">tiktok content creator</h4>
                        <p style="font-family: 'Space Grotesk', sans-serif;font-size: 15px;color: var(--bs-emphasis-color);">Creazione di contenuti per la piattaforma Tiktok per un target locale e internazionale che rimarca l'estetica ricercata del locale.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-4 py-xl-5">
        <div class="row" style="margin-bottom: 0px;padding-top: 10px;padding-bottom: 10px;">
            <div class="col-md-8 col-xl-6 text-center mx-auto">
                <h2 style="color: var(--bs-emphasis-color);font-size: 40px;padding-bottom: 0px;margin-bottom: 0px;">archivio</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gy-4 row-cols-1 row-cols-md-2">
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4 class="text-nowrap" style="font-family: 'Palmer Lake Print';font-size: 24px;color: var(--bs-emphasis-color);line-height: 15px;background: #FBECE2;border-radius: 35px;">studiolabo - fuorisalone - brera design district</h4>
                        <h4 style="font-family: 'Palmer Lake Print';font-size: 40px;color: var(--bs-emphasis-color);line-height: 25px;">communication manager</h4>
                        <p style="font-family: 'Space Grotesk', sans-serif;font-size: 15px;color: var(--bs-emphasis-color);">Ho gestito per 6 anni la comunicazione per i progetti interni di Studiolabo: Fuorisalone.it e Brera Design District.<br><br>Social media, newsletter, magazine.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column flex-lg-row">
                    <div class="w-100"><img class="rounded img-fluid d-block w-100 fit-cover" style="height: 200px;" src="https://cdn.bootstrapstudio.io/placeholders/1400x800.png"></div>
                    <div class="py-4 py-lg-0 px-lg-4">
                        <h4 class="text-nowrap" style="font-family: 'Palmer Lake Print';font-size: 24px;color: var(--bs-emphasis-color);line-height: 15px;background: #FBECE2;border-radius: 35px;">ceerk games -&nbsp;Independent games development team</h4>
                        <h4 style="font-family: 'Palmer Lake Print';font-size: 40px;color: var(--bs-emphasis-color);line-height: 25px;">co-founder</h4>
                        <p style="font-family: 'Space Grotesk', sans-serif;font-size: 15px;color: var(--bs-emphasis-color);">Nel 2015 ho fondato insieme ad un amico un team di sviluppo indipendente di videogiochi.<br><br>Qui ho messo in pratica tutte le mie competenze informatiche e di gestione del progetto.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="position-relative py-4 py-xl-5">
        <div class="container position-relative" id="contatti">
            <div class="row mb-5" style="color: var(--bs-emphasis-color);">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2>contatti</h2>
                    <p class="w-lg-50" style="font-family: 'Space Grotesk', sans-serif;">puoi trovarmi via telefono o tramite mail :)</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center" style="color: var(--bs-emphasis-color);">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="d-flex flex-column justify-content-center align-items-start h-100">
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon" style="background: #FFB0B5;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-phone-fill" style="color: var(--bs-emphasis-color);" href="tel:00393395432769">
                                    <path d="M3 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2zm6 11a1 1 0 1 0-2 0 1 1 0 0 0 2 0"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="mb-0" style="font-family: 'Space Grotesk', sans-serif;"><strong>Telefono</strong></h6>
                                <p class="mb-0" style="font-family: 'Space Grotesk', sans-serif;"><a href="tel:00393395432769" style="text-decoration:none;"><span style="color: rgb(0, 0, 0);">+39 3395432769</span></a></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center p-3">
                            <div class="bs-icon-md bs-icon-rounded bs-icon-primary d-flex flex-shrink-0 justify-content-center align-items-center d-inline-block bs-icon" style="background: #FFB0B5;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-mailbox2" style="color: var(--bs-emphasis-color);">
                                    <path d="M9 8.5h2.793l.853.854A.5.5 0 0 0 13 9.5h1a.5.5 0 0 0 .5-.5V8a.5.5 0 0 0-.5-.5H9z"></path>
                                    <path d="M12 3H4a4 4 0 0 0-4 4v6a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V7a4 4 0 0 0-4-4M8 7a3.99 3.99 0 0 0-1.354-3H12a3 3 0 0 1 3 3v6H8zm-3.415.157C4.42 7.087 4.218 7 4 7c-.218 0-.42.086-.585.157C3.164 7.264 3 7.334 3 7a1 1 0 0 1 2 0c0 .334-.164.264-.415.157"></path>
                                </svg></div>
                            <div class="px-2">
                                <h6 class="mb-0" style="font-family: 'Space Grotesk', sans-serif;"><strong>Email</strong></h6>
                                <p class="mb-0" style="font-family: 'Space Grotesk', sans-serif;"><a href="mailto:info@sofabstudio.com" style="text-decoration:none;"><span style="color: rgb(0, 0, 0);">info@sofabstudio.com</span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-5 col-xl-4">
                    <div>
                        <form class="p-3 p-xl-4" method="post">
                            <div class="mb-3"><input class="form-control" type="text" id="name-1" name="name" placeholder="nome" style="font-family: 'Space Grotesk', sans-serif;"></div>
                            <div class="mb-3"><input class="form-control" type="email" id="email-1" name="email" placeholder="email" style="font-family: 'Space Grotesk', sans-serif;"></div>
                            <div class="mb-3"><textarea class="form-control" id="message-1" name="message" rows="6" placeholder="messaggio" style="font-family: 'Space Grotesk', sans-serif;"></textarea></div>
                            <div><button class="btn btn-primary d-block w-100" type="submit" style="font-family: 'Space Grotesk', sans-serif;background: #FFB0B5;color: var(--bs-emphasis-color);border-radius: 35px;border: 3px outset #FBECE2 ;"><strong>Invia</strong></button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <footer class="text-center">
            <div class="container text-muted py-4 py-lg-3" style="color: var(--bs-emphasis-color);margin-top: 30px;">
                <ul class="list-inline">
                    <li class="list-inline-item me-4"><a href="https://www.linkedin.com/in/fabriziosomma/" style="text-decoration:none; color:#000000;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-linkedin">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401m-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4"></path>
                            </svg></a></li>
                    <li class="list-inline-item me-4"><a href="https://www.tiktok.com/@sofabstudio" style="text-decoration:none; color:#000000;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-tiktok">
                                <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"></path>
                            </svg></a></li>
                    <li class="list-inline-item"><a href="https://www.instagram.com/sofabstudio/" style="text-decoration:none; color:#000000;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram">
                                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"></path>
                            </svg></a></li>
                </ul>
                <p class="mb-0" style="font-family: 'Space Grotesk', sans-serif;">Fabrizio Somma - So Fab Studio | <a href="mailto:info@sofabstudio.com" style="text-decoration:none;"><span style="color: rgb(0, 0, 0);">info@sofabstudio.com</span></a>&nbsp;|&nbsp;<a href="tel:00393395432769" style="text-decoration:none;"><span style="color: rgb(0, 0, 0);">+39 3395432769</span></a></p>
                <p class="mb-0" style="font-family: 'Space Grotesk', sans-serif;margin-top: 20px;font-size: 10px;">Illustrazioni by&nbsp;<a href="https://www.instagram.com/theycallme_tommy/" style="text-decoration:underline #000000;"><span style="color: rgb(0, 0, 0);">@theycallme_tommy</span></a></p>
            </div>
        </footer>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
</body>

</html>