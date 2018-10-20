# Mitton Cavitation Custom WordPress Theme
Created using a basic Child Theme for the UnderStrap Theme Framework

## How it works
Understrap Child Theme shares with the parent theme all PHP files and adds its own functions.php on top of the UnderStrap parent theme's functions.php.

**IT DOES NOT LOAD THE PARENT THEMES CSS FILE(S)!** Instead it uses the UnderStrap Parent Theme as a dependency via npm and compiles its own CSS file from it.

Understrap Child Theme uses the Enqueue method to load and sort the CSS file the right way instead of the old @import method.