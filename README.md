# DigitalOcean-Spaces-Codeigniter
Library for using Digital Ocean Spaces  storage with Codeigniter Framework.
This is based on https://github.com/SociallyDev/Spaces-API.
Visit the link to see the original usage.

<h2>How to Connect to your Space</h2>
Please edit application/libraries/Space.php 

```
  $key = "xxxxxxxxx";
  $secret = "xxxxxxxxx";
  $space_name = "xxxxxx";
  $region = "xxxxxx";
        
 $this->space = new SpacesConnect($key, $secret, $space_name, $region); 
```
<h2>How to upload files to your Space</h2>

```
$photo = "myfile.png";
$new_filename = "mynewfilename.png";

$this->space->space->UploadFile($photo, "public", "path_for_your_file/".$new_filename, "image/png");
#space will create new folder automatically
```
<h2>How to delete files from your Space</h2>

```
$photo = "myfile.png";
$this->space->space->DeleteObject("path_for_your_file/".$photo);
```
