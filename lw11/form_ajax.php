<?php 
$basePath = 'users.json';
$inputJSON = file_get_contents('php://input');
$input = json_decode($inputJSON, true);
$name = $input['name'];
$email = $input['email'];
$job = $input['job'];
$agree = $input['agree'];
$base = 'data';
$fileName = './' . $base . '/' . $email . ".txt";
$separator = PHP_EOL;
$response = [
    'status' => 0,
    'message' => ''
];
if (!is_dir($base))
{
  mkdir($base);
}
if (!empty($name) && !empty($email))
{
    if (!empty($agree))
    {
        file_put_contents($fileName, "Имя: " . $name . $separator . "Email: " . $email . $separator . "Деятельность: " . $job . $separator. "Есть согласие");       
    }
    if (empty($agree))
    {
        file_put_contents($fileName, "Имя: " . $name . $separator . "Email: " . $email . $separator . "Деятельность: " . $job . $separator. "Согласия нет");       
    }
    $response['status'] = 200;
    if (!file_exists($basePath))
        {
            $users = [
                'users' => [],
            ];
            file_put_contents($basePath, json_encode($users));

        }

    $users = json_decode(file_get_contents($basePath), true);
    $users['users'][] = $email;
    file_put_contents($basePath, json_encode($users));
}
else
{
    $response['status'] = 500;
    if (empty($name))
    {
        $response['message'] = 'Вы не ввели имя' . $separator;
    }
    if (empty($email))
    {
        $response['message'] = 'Вы не ввели email' . $separator;
    }
    if (empty($job))
    {
        $response['message'] = 'Вы не ввели деятельность' . $separator;
    }
    else
    {
        $response['message'] = 'Данные не сохранились' . $separator;
    }
}

echo json_encode($response);