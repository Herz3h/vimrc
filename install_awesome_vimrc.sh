cd ~/.config

echo '

source ~/.config/vimrcs/basic.vim
source ~/.config/vimrcs/filetypes.vim
source ~/.config/vimrcs/plugins_config.vim
source ~/.config/vimrcs/extended.vim

try
source ~/.config/my_configs.vim
catch
endtry' > ~/.config/init.vim

echo "Installed the Ultimate Vim configuration successfully! Enjoy :-)"
