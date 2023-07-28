<?php
function print_array($ary) {
    foreach($ary as $a) {
        print("{$a} ");
    }
    print('<br>');
}
print('---< 削除関数 >---<br>');
$data = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
print("操作前: ");
print_array($data);
$result = array_splice($data, 2, 3);
print('削除された要素: ');
print_array($result);
print('削除後の配列: ');
print_array($data);

print('<br>---< 置換関数 >---<br>');
$data = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
print("操作前: ");
print_array($data);
$result = array_splice($data, 2, 3, ['X', 'Y']);
print('削除された要素: ');
print_array($result);
print('置換後の配列: ');
print_array($data);

print('<br>---< 挿入関数 >---<br>');
$data = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H'];
print("操作前: ");
print_array($data);
$result = array_splice($data, 2, 0, ['X', 'Y']);
print('削除された要素: ');
print_array($result);
print('挿入後の配列: ');
print_array($data);