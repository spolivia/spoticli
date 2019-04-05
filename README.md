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
- You're done.

On first run, you must first start spoticli_auth to grant spoticli
permission to access your account. A file called tokens will be generated
and stored in ~/.local/spoticli : don't share it with anybody since it would allow
to access your spotify account.

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

## Extra

You can override the default settings in spoticli_common by mean of a ~/.local/spoticli/config file,
if you want your own spotify application or a specific browser command.
