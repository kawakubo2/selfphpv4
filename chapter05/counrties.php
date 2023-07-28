<?php
$countries = ['スペイン', 'フランス', 'スペイン', 'イタリア', 'イタリア', 'スペイン', 'イタリア', 'イギリス', 'イタリア', 'フランス', 'イタリア', 'イタリア', 'フランス', 'フランス', 'ドイツ', 'イタリア', 'イタリア', 'イタリア', 'ドイツ', 'イタリア', 'フランス', 'イタリア', 'ドイツ', 'イタリア', 'フランス', 'フランス', 'スペイン', 'イタリア', 'イギリス', 'イギリス', 'イギリス', 'イギリス', 'スペイン', 'イギリス', 'フランス', 'スペイン', 'フランス', 'スペイン', 'イタリア', 'スペイン'];

$counter = [];

foreach($countries as $c) {
    if (isset($counter[$c])) {
        $counter[$c] += 1;
    } else {
        $counter[$c] = 1;
    }
    print_r($counter);
    print('<br>');
}

print_r($counter);
print('<br>');

arsort($counter, SORT_NUMERIC);
print('<ol>');
foreach ($counter as $country => $num) {
    print("<li>{$country}: {$num}票</li>");
}
print('</ol>');