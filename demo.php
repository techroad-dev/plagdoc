<?php 
@session_start();

require_once 'vendor/autoload.php';
require_once 'src/plagdocs.php';

$config = array(
    'default_url' => 'https://api.plagdocs.com/api/v1',
    'api_key' => 'API_KEY_HERE',
    'api_secret' => 'SECRET_KEY_HERE'
);

// Initialize Plagdocs
$plagdocs = new plagdocs($config);
$response = null;


// REPORTS

if(isset($_GET['check_plagiarism'])) {
    $params = [
        'report_name'=> 'Untitled Report',
        'source_text'=> 'Education is the transmission of knowledge, skills, and character traits and manifests in various forms. Formal education occurs within a structured institutional framework, such as public schools, following a curriculum. Non-formal education also follows a structured approach but occurs outside the formal schooling system, while informal education entails unstructured learning through daily experiences. Formal and non-formal education are categorized into levels, including early childhood education, primary education, secondary education, and tertiary education.'    ];
    $response = $plagdocs->add_report($params);
}

if(isset($_GET['list_reports'])) {
    $params = [];
    $response = $plagdocs->list_reports($params);
}

if(isset($_GET['get_report'])) {
    $params = ['workspace_id'=> null, 'report_id'=> $_GET['report_id']];
    $response = $plagdocs->get_report($params);
}

if(isset($_GET['get_attachment_report'])) {
    $params = ['workspace_id'=> null, 'report_id'=> $_GET['report_id']];
    $response = $plagdocs->get_attachment_report($params);
}

// WORKSPACE

if(isset($_GET['list_workspaces'])) {
    $params = [];
    $response = $plagdocs->list_workspaces($params);
}


echo($response);



?>