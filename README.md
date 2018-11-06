# DigitalOcean-Spaces-Codeigniter
Library for using Digital Ocean Spaces  storage with Codeigniter Framework.
This is based on https://github.com/SociallyDev/Spaces-API.
Visit the link to see the original usage.

<h2>How to Connetc to your Space</h2>
Please edit application/libraries/Space.php <br>
```
  $key = "xxxxxxxxx";<br>
  $secret = "xxxxxxxxx";<br>
  $space_name = "xxxxxx";<br>
  $region = "xxxxxx";<br>
        
 $this->space = new SpacesConnect($key, $secret, $space_name, $region); <br>
 ```
