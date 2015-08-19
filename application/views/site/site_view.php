<?php

$this->load->view('includers/site/header_view');
$this->load->view('includers/site/'.$body.'_view');

if (isset($_SESSION['userinfo']) && $_SESSION['userinfo'] != null) $footeruser = 'logged_';
$this->load->view('includers/site/footer_'.@$footeruser.'view');

