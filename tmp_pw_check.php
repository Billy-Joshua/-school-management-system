<?php
$hashs = [
    'admin:elias' => '$2y$10$H7obJEdmLzqqcPy7wQWhsOLUvrgzC8f1Y1or2Gxaza5z1PT0tvLy6',
    'registrar:james' => '$2y$10$t0SCfeXNcyiO9hdzNTKKB.j2xlE2yt8Hm2.0AWJR5kSE469JIkHKG',
    'registrar:oliver2' => '$2y$10$7XhzOu.3OgHPFv7hKjvfUu3waU.8j6xTASj4yIWMfo...k/p8yvvS',
    'teacher:oliver' => '$2y$10$JruTW/rNZ6CVO4nxYWCrn.GJpiIKMACEPYrK00S7Dk/fkbJIdYau2',
    'teacher:abas' => '$2y$10$cMSKcHEJcg3K6wbVcxcXGuksgU39i70aEQVKN7ZHrzqTH9oAc3y5m',
    'student:john' => '$2y$10$xmtROY8efWeORYiuQDE3SO.eZwscao20QNuLky1Qlr88zDzNNq4gm',
    'student:abas' => '$2y$10$KLFheMWgpLfoiqMuW2LQxOPficlBiSIJ9.wE2qr5yJUbAQ.5VURoO',
    'student:jo' => '$2y$10$pYyVlWg9jxkT0u/4LrCMS.ztMaOvgyol1hgNt.jqcFEqUC7yZLIYe',
    'student:jo2' => '$2y$10$lRQ58lbak05rW7.be8ok4OaWJcb9znRp9ra.qXqnQku.iDrA9N8vy',
];
$cands = ['admin', 'password', '123', '1234', 'elias', 'oliver', 'john', 'abas', 'qwerty', 'password123', '123456', '2022', '2023'];
foreach ($hashs as $user => $hash) {
    foreach ($cands as $p) {
        if (password_verify($p, $hash)) {
            echo "$user:$p\n";
            break;
        }
    }
}