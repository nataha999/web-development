<?php
header("Content-Type: text/plain");
function getQueryStringParameter(string $name): ?string
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}


$text = getQueryStringParameter('text');
if ($text !== null) 
{
    $text = trim($text);

    while (strpos($text, '  ') !== false) //� ����� �������� �� 2 ������� �� 1, �������� ���� �� � ��� ��� ������� � ����������� ��������� ������
    {
        $text = str_replace('  ', ' ', $text);  
    }
    echo $text;
}
else 
{
    echo 'No information';
}