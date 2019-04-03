## spoticli
A quick, simple and buggy way to control your spotify account from cli 
 

## Wait ? what ???

Yep, this is only a set of very basic bash scripts I use to control my spotify account.
This is NOT a spotify client : it will not play music by itself, but will allow you to 
control the official client, spotifyd, your phone, or your favorite connected speaker.

## Installation

- Download, 
- Unzip to your favorite folder 
- Add the folder to your PATH.
- Edit the config file to suit your need ( at least the browser variablr )  
- You're done.

On first run, you must first start spoticli_auth to grant spoticli
permission to access your account. A file called tokens will be generated
and stored in ~/.spoticli : don't share it with anybody since it would allow
to access your spotify account.

The spotify auth process involves a website. You can use mine (default) or register
your own copy of website and app on the spotify developer site. You'll find
in the "web" folder a copy of the php file installed on my server.

## Usage

One command, one script. Start spotify somewhere and type in your bash : 

spoticli_play_uri spotify:track:6R5tQlnUOLzZkeInNoes1c

Available commands are :

- spoticli_auth
- spoticli_get_playlists
- spoticli_play_uri
- spoticli_next
- spoticli_previous            
- spoticli_get_current_track
- spoticli_pause
- spoticli_search
- spoticli_get_devices
- spoticli_play
- spoticli_transfer_to_device
