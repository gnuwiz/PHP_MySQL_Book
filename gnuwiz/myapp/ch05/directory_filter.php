<?php
$dp = opendir(directory: '.');
while(($file = readdir(dir_handle: $dp)) !== false)
{
    if(fnmatch(pattern: "array*", filename: $file, flags: FNM_CASEFOLD))
    {
        echo "파일이름 : ".$file."<br/>";
    }
}
closedir(dir_handle: $dp);

$list = glob(pattern: "[Aa]rray*");
echo "<pre>";
print_r($list);
echo "</pre>";