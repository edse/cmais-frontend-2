
<?php
// Read POST request params into global vars
$to      = "yourMail@gmail.com";
$from    = $_POST['name'];
$subject = "New CV Submitted";
$message =  $_POST['message'];
  $error = "";
  $msg = "";
  $fileElementName = 'cv';
  if(!empty($_FILES[$fileElementName]['error']))
  {
    switch($_FILES[$fileElementName]['error'])
    {

      case '1':
        $error = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        break;
      case '2':
        $error = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        break;
      case '3':
        $error = 'The uploaded file was only partially uploaded';
        break;
      case '4':
        $error = 'No file was uploaded.';
        break;

      case '6':
        $error = 'Missing a temporary folder';
        break;
      case '7':
        $error = 'Failed to write file to disk';
        break;
      case '8':
        $error = 'File upload stopped by extension';
        break;
      case '999':
      default:
        $error = 'No error code avaiable';
    }
  }elseif(empty($_FILES['cv']['tmp_name']) || $_FILES['cv']['tmp_name'] == 'none')
  {
    $error = 'No file was uploaded..';
  }else 
  {
    // Obtain file upload vars
$fileatt      = $_FILES['cv']['tmp_name'];
$fileatt_type = $_FILES['cv']['type'];
$fileatt_name = $_FILES['cv']['name'];

$headers = "From: $from";

if (is_uploaded_file($fileatt)) {
  // Read the file to be attached ('rb' = read binary)
  $file = fopen($fileatt,'rb');
  $data = fread($file,filesize($fileatt));
  fclose($file);

  // Generate a boundary string
  $semi_rand = md5(time());
  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";
  
  // Add the headers for a file attachment
  $headers .= "\nMIME-Version: 1.0\n" .
              "Content-Type: multipart/mixed;\n" .
              " boundary=\"{$mime_boundary}\"";

  // Add a multipart boundary above the plain message
  $message = "This is a multi-part message in MIME format.\n\n" .
             "--{$mime_boundary}\n" .
             "Content-Type: text/html; charset=\"iso-8859-1\"\n" .
             "Content-Transfer-Encoding: 7bit\n\n" .
             $message . "\n\n";

  // Base64 encode the file data
  $data = chunk_split(base64_encode($data));

  // Add file attachment to the message
  $message .= "--{$mime_boundary}\n" .
              "Content-Type: {$fileatt_type};\n" .
              " name=\"{$fileatt_name}\"\n" .
              //"Content-Disposition: attachment;\n" .
              //" filename=\"{$fileatt_name}\"\n" .
              "Content-Transfer-Encoding: base64\n\n" .
              $data . "\n\n" .
              "--{$mime_boundary}--\n";
        
// Send the message
$ok = @mail($to, $subject, $message, $headers);
} 
  }   
  echo "{";
  echo        "error: '" . $error . "',\n";
  echo        "msg: '" . $msg . "'\n";
  echo "}";
  



?>
  