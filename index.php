<?php
$list = array
(
"Peter,Griffin,Oslo,Norway, Region, George",
"Glenn,Quagmire,Oslo,Norway",
);

if($file = fopen("contacts.csv","w")) {
  print "Created File";
}
else {
  print "Oops";
}

foreach ($list as $line)
  {
  fputcsv($file,explode(',',$line));
  }

fclose($file);

$file = 'contacts.csv';

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
}?>
