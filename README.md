# CubeBotOnline

A simple PHP script for running my CubeBot algorithm on a web server.
Also includes a special version of CubeBot2.0.exe which is designed to run with this PHP script. Any other version of CubeBot will probably not work, so make sure to use the included binary.

CubeBotOnline accepts a scramble inside the page's URL, for example: `cubebotonline.zzz/index.php?scramble=B+F+R'+D'+L2+U'` (where each move is separated by `+` signs as indicated)


# SETUP
1. Download `index.php` and `CubeBot2.0.exe`
2. Make a new folder in your web server's main directory (`htdocs` for us Apache users).
3. Place the `index.php` file in the new folder.
4. Place `CubeBot2.0.exe` somewhere on your server, and update `index.php` line 34 with `CubeBot2.0.exe`'s file location.
5. Start your server up and get solving!

(c) iBoot32 2020
