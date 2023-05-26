<?php
require_once 'init.php';

getRouter()->setDefaultRoute('calcShow'); // akcja/ścieżka domyślna
getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

getRouter()->addRoute('calcShow', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('credit', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('creditNew', 'CalcCtrl', ['user','admin']);
getRouter()->addRoute('login', 'LoginCtrl');
getRouter()->addRoute('logout', 'LoginCtrl', ['user','admin']);
getRouter()->addRoute('loginShow', 'LoginCtrl');


getRouter()->go();