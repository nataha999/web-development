<?php
$basePath = 'users.json';
$users = json_decode(file_get_contents($basePath), true)['users'];
$data = [];
$base = 'data';
$separator = ': ';
for ($i=0; $i < count($users); $i++)
{
    $fileName = $users[$i];
    $file = file('./' . $base . '/' . $fileName . ".txt");
    $user = [
        'name' => '',
        'email' => '',
        'job' => '',
        'agreement' => false,
    ];
    $user['name'] = explode($separator, str_replace("\r\n","",$file[0]))[1];
    $user['email'] = explode($separator, str_replace("\r\n","", $file[1]))[1];
    $user['job'] = explode($separator, str_replace("\r\n","", $file[2]))[1];
    
    if ($file[3] === 'Есть согласие')
    {
        $user['agreement'] = 'Согласие на рассылку';
    }
    $data[] = $user; 
}
echo json_encode($data);

