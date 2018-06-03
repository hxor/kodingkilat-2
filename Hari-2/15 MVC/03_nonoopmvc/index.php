<?php 
// Call member model/data
require_once 'model/member_model.php';

// Get Member Data
$member = getAllMember();

// Call list.php to show member data
require_once 'view/member/index.php';