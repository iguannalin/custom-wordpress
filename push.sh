git st
git add -A
git cm "$1"
git push
echo "🍍make sure to change version numbers"
rsync -avc --delete ./* USERNAME@SITENAME.ssh.wpengine.net:/sites/SITENAME/wp-content/themes/CustomThemeName/
